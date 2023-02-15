<?php

namespace Tests\Feature\Queries;

use App\Models\Activity;
use App\Models\Reservation;
use App\Queries\HasNoReservationReferencingActivitiesQuery;
use App\Queries\HasReservationReferencingActivitiesQuery;
use Tests\TestCase;

class HasNoReservationReferencingActivitiesQueryTest extends TestCase {
	public
	function test_can_restrict_query_to_activities_without_reservations(): void {
		$reservations = Reservation::factory(5)->create();
		$activities_with_reservations = $reservations->map(fn(Reservation $reservation) => $reservation->activity);

		$activities_without_reservations = Activity::factory(3)->create();

		$query = HasNoReservationReferencingActivitiesQuery::handle(Activity::query());

		$result = $query->get();
		$this->assertCount(
			3,
			$result,
		);

		foreach ($activities_with_reservations as $with_reservation) {
			$this->assertTrue(
				$result->filter(fn(Activity $activity) => $activity->is($with_reservation))->count() === 0,
			);
		}

		foreach ($activities_without_reservations as $without_reservation) {
			$this->assertTrue(
				$result->filter(fn(Activity $activity) => $activity->is($without_reservation))->count() === 1,
			);
		}
	}
}
