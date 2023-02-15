<?php

namespace Tests\Feature\Queries;

use App\Models\Activity;
use App\Models\Reservation;
use App\Queries\CountReservationReferencingActivitiesQuery;
use Tests\TestCase;

class CountReservationReferencingActivitiesQueryTest extends TestCase {
	public
	function test_can_count_reservations(): void {
		$reservations = Reservation::factory(5)->create();
		$activities_with_reservations = $reservations->map(fn(Reservation $reservation) => $reservation->activity);
		$activities_without_reservations = Activity::factory(3)->create();

		$query = Activity::query()
		                 ->select()
		                 ->selectSub(
			                 fn($query) => CountReservationReferencingActivitiesQuery::handle($query),
			                 "reservations_count",
		                 );

		$result = $query->get();

		foreach ($activities_with_reservations as $with_reservation) {
			$this->assertTrue(
				$result->filter(
					fn(Activity $activity) => $activity->reservations_count > 0 && $activity->is($with_reservation),
				)->count() === 1,
			);
		}

		foreach ($activities_without_reservations as $without_reservation) {
			$this->assertTrue(
				$result->filter(
					fn(Activity $activity) => $activity->reservations_count === 0 &&
					                          $activity->is($without_reservation),
				)->count() === 1,
			);
		}
	}
}
