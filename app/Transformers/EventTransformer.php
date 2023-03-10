<?php

namespace App\Transformers;

use App\Enum\Permissions\Classes\Event;
use App\Models\EventDay;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;
use Symfony\Component\HttpFoundation\Response;

class EventTransformer extends TransformerAbstract {
	/**
	 * List of resources possible to include
	 *
	 * @var array
	 */
	protected array $availableIncludes = [
        "reservations",
        "activities",
    ];
	/**
	 * List of resources to automatically include
	 *
	 * @var array
	 */
	protected array $defaultIncludes = [
	];

	/**
	 * Include activities in the response
	 *
	 * @param EventDay $event_day
	 *
	 * @return Collection
	 */
	public
	function includeActivities(
		EventDay $event_day,
	): Collection {
		return $this->collection(
            $event_day->activities,
            new ActivityTransformer(),
            "activity",
		);
	}

	/**
	 * Include the reservations in the response
	 *
	 * @param EventDay $event
	 *
	 * @return Collection
	 */
	public
	function includeReservations(
		EventDay $event,
	): Collection {
		abort_unless(
            auth()->user()->can(Event::EXPORT()),
            Response::HTTP_FORBIDDEN,
		);

		return $this->collection(
            $event->reservations,
            new ReservationTransformer(),
            "reservation",
		);
	}

	/**
	 * A Fractal transformer.
	 *
	 * @param EventDay $event
	 *
	 * @return array
	 */
	public
	function transform(
		EventDay $event,
	): array {
		return [
            "id"                     => $event->prefixed_id,
            "available_reservations" => $event->max_reservation - $event->reservations()->count(),
            "date"                   => format_date($event->date),
            "location"               => $event->location,
        ];
	}
}
