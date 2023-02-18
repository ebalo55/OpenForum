<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\Handler;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserLoginRequest;
use App\Models\User;
use App\Transformers\UserTransformer;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Laravel\Fortify\Http\Requests\VerifyEmailRequest;
use Spatie\Fractal\Fractal;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * @group User management
 *
 * Activities related to the management of the currently authenticated user
 */
class UserController extends Controller {
	/**
	 * Get the current user instance
	 *
	 * Returns a censored representation of the current user instance.
	 * The response will always include the plain representation of the token used to authenticate the user
	 *
	 * @param Request $request
	 *
	 * @return JsonResponse
	 * @responseFile  storage/responses/user.me.json
	 * @queryParam    includes string Comma separated list of user relation to include Example: reservations
	 * @responseField data object Container for resource.
	 * @responseField data.type string Resource return type as of JSON:API standard, always equal to `user`.
	 * @responseField data.id string Resource unique identifier, always starts with `usr_`.
	 * @responseField data.attributes object Resource attributes container.
	 * @responseField data.attributes.name string Current user full name.
	 * @responseField data.attributes.email string Current user censored email.
	 * @responseField data.attributes.email_verified_at ?string Email verification datetime or null, if this field is
	 *                null for a given user he won't be allowed to reserve any spot.
	 * @responseField data.attributes.token string Current user authentication token.
	 * @responseField data.relationships ?object Wrapper for included relationships.
	 * @responseField data.relationships.reservations ?object Wrapper for reservation identification data.
	 * @responseField data.relationships.reservations.data object[] Reservations identifier data container.
	 * @responseField data.relationships.reservations.data[].type string Resource return type as of JSON:API standard,
	 *                always equal to `reservation`
	 * @responseField data.relationships.reservations.data[].id string Resource unique identifier, always starts with
	 *                `resrv_`.
	 * @responseField included ?object[] Container for included relationships.
	 * @responseField included[].type string Resource return type as of JSON:API standard.
	 * @responseField included[].id string Resource unique identifier.
	 * @responseField included[].attributes object Resource attributes container.
	 * @responseField meta object Container for metadata.
	 * @responseField meta.success boolean Response status summary, if `true` the call was successful.
	 * @responseField meta.errors null|object[] If one or more errors occur this field will be filled with errors.
	 * @responseField meta.errors[].reference_code int Error reference code for easy front-end retrieval.
	 * @responseField meta.errors[].field null|string If an error occur linked to a form field this field will handle
	 *                the field name the error references to.
	 * @responseField meta.errors[].message string The ending error message.
	 */
	public
	function current(
		Request $request,
	): JsonResponse {
		return $this->makeUserResponse($request->user());
	}

	/**
	 * Handle the login of a pre-registered account via API, this method forwards the login logic to the default
	 * Fortify controller but adds a layer of indirection.
	 *
	 * The forwarded call is received and analyzed, if the login request was successful a JSON:API response is created
	 * with the newly logged-in user.
	 * NOTE: The user is not authenticated in the current request, the user should be authenticated by subsequent
	 *      front-end requests.
	 *
	 * If the login was not successful based on the exception type an appropriate JSON:API response is created and
	 * returned to the client.
	 *
	 * @param UserLoginRequest $request
	 *
	 * @return JsonResponse
	 */
	public
	function login(
		UserLoginRequest $request,
	) {
		// forward the whole authentication flow to fortify
		$fortify_authentication_controller = new AuthenticatedSessionController(app(StatefulGuard::class));

		/** @var Response $response */
		$response = $fortify_authentication_controller->store($request);

		// after the authentication was completed we take back the control, if everything ends well return the current user
		// otherwise return an error
		if ($response->isRedirect(route("dashboard")) || $response->isSuccessful()) {
			return $this->makeUserResponse(
				User::whereName($request->input("name"))
				    ->first(),
			);
		} else {
			// if the exception can be parsed by the handler forward it to the handler response maker
			if (
				$response->exception instanceof HttpException ||
				$response->exception instanceof ValidationException
			) {
				return Handler::makeErrorResponse($response->exception);
			}

			// otherwise fallback to an empty error
			// @codeCoverageIgnoreStart
			return Fractal::error([])->respond(\Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
			// @codeCoverageIgnoreEnd
		}
	}

	/**
	 * Send a new email verification link once requested or return the current user instance if already verified
	 *
	 * @param Request $request
	 *
	 * @return JsonResponse
	 */
	public
	function requestNewVerificationEmail(
		Request $request,
	): JsonResponse {
		if ($request->user()->hasVerifiedEmail()) {
			return $this->current($request);
		}

		$request->user()->sendEmailVerificationNotification();

		return Fractal::success()->respond();
	}

	/**
	 * Handle the email verification, forwarding the verification call to Fortify's default controller
	 *
	 * The same result can be achieved by implementing the \Laravel\Fortify\Contracts\VerifyEmailResponse, anyway,
	 * creating a new route we have changed the calling method from GET to POST
	 *
	 * @param VerifyEmailRequest $request
	 *
	 * @return JsonResponse
	 */
	public
	function verifyEmail(
		VerifyEmailRequest $request,
	): JsonResponse {
		(new VerifyEmailController())($request);

		return $this->current($request);
	}

	/**
	 * Simple helper to standardize the way API respond with user object
	 *
	 * @param User $user
	 *
	 * @return JsonResponse
	 */
	protected
	function makeUserResponse(
		User $user,
	): JsonResponse {
		return Fractal::success()->item(
			$user,
			UserTransformer::class,
			"user",
		)->respond();
	}
}
