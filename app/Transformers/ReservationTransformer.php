<?php

namespace App\Transformers;

use App\Models\Reservation;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class ReservationTransformer extends TransformerAbstract {
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        "event",
        "activity",
        "user",
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
     * Include the activity in the response
     *
     * @param Reservation $reservation
     *
     * @return Item
     */
    public
    function includeActivity(
        Reservation $reservation,
    ): Item {
        return $this->item(
            $reservation->activity,
            new ActivityTransformer(),
        );
    }

    /**
     * Include the event in the response
     *
     * @param Reservation $reservation
     *
     * @return Item
     */
    public
    function includeEvent(
        Reservation $reservation,
    ): Item {
        return $this->item(
            $reservation->eventDay,
            new EventTransformer(),
        );
    }

    /**
     * Include the user in the response
     *
     * @param Reservation $reservation
     *
     * @return Item
     */
    public
    function includeUser(
        Reservation $reservation,
    ): Item {
        return $this->item(
            $reservation->user,
            new UserTransformer(),
        );
    }

    /**
     * A Fractal transformer.
     *
     * @param Reservation $reservation
     *
     * @return array
     */
    public
    function transform(
        Reservation $reservation,
    ): array {
        return [
            "id"       => $reservation->prefixed_id,
            "user"     => $reservation->user->prefixed_id,
            "event"    => $reservation->eventDay->prefixed_id,
            "activity" => $reservation->activity->prefixed_id,
        ];
    }
}
