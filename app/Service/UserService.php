<?php

namespace App\Service;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Cashier\Exceptions\CustomerAlreadyCreated;

final readonly
class UserService {
	/**
	 * Creates a fully featured user
	 *
	 * @param string $name
	 * @param string $email
	 * @param string $password
	 *
	 * @return User
	 */
	public
	function create(
		string $name,
		string $email,
		string $password,
	): User {
		$user = $this->createMinimal(
			$name,
			$email,
			$password,
		);

		$user->sendEmailVerificationNotification();

		// assign default platform roles
		$this->authorization_service->assignDefaultUserRole($user);

		return $user;
	}

	/**
	 * Create a new minimal user instance
	 *
	 * @param string $name
	 * @param string $email
	 * @param string $password
	 *
	 * @return User
	 */
	public
	function createMinimal(
		string $name,
		string $email,
		string $password,
	): User {
		return User::query()
		           ->create(
			           [
				           "name"     => $name,
				           "email"    => $email,
				           "password" => Hash::make($password),
			           ],
		           );
	}

	public
	function __construct(
		private AuthorizationService $authorization_service,
	) {}
}
