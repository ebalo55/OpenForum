<?php

namespace App\Transformers;

use App\Facade\UserServiceFacade;
use App\Models\User;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract {
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        "reservations",
    ];
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * Include user reservations
     *
     * @param User $user
     *
     * @return Collection
     */
    public
    function includeReservations(
        User $user,
    ): Collection {
        return $this->collection(
            $user->reservations,
            new ReservationTransformer(),
        );
    }

    /**
     * A Fractal transformer.
     *
     * @param User $user
     *
     * @return array
     */
    public
    function transform(
        User $user,
    ): array {
        return [
            "id"                => $user->prefixed_id,
            "name"              => $user->name,
            "email"             => UserServiceFacade::maskEmail($user),
            "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
            "token"             => UserServiceFacade::getFrontEndAccessToken($user),
        ];
    }
}
