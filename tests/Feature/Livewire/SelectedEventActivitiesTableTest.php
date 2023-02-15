<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\SelectedEventActivitiesTable;
use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Spatie\SimpleExcel\SimpleExcelReader;
use Tests\TestCase;

class SelectedEventActivitiesTableTest extends TestCase {
	public
	function test_can_call_export_full_activity() {
		$component = Livewire::test(
			SelectedEventActivitiesTable::class,
			["event_day" => EventDay::factory()->has(Activity::factory()->count(5))->create()],
		);

		$activities = collect(
			[
				...Activity::factory()->count(2)->create(),
				...Activity::factory()->count(3)->has(Reservation::factory()->count(2))->create(),
			],
		);

		$component->set(
			"selectAll",
			true,
		);

		$component->call("exportFullActivity");
		$component->assertFileDownloaded("activities.xlsx");
	}

	public
	function test_can_call_export_reservations() {
		$component = Livewire::test(
			SelectedEventActivitiesTable::class,
			["event_day" => EventDay::factory()->has(Activity::factory()->count(5))->create()],
		);

		$activities = collect(
			[
				...Activity::factory()->count(2)->create(),
				...Activity::factory()->count(3)->has(Reservation::factory()->count(2))->create(),
			],
		);

		$component->set(
			"selectAll",
			true,
		);

		$component->call("exportReservations");
		$component->assertFileDownloaded("activity-reservations.xlsx");
	}

	public
	function test_can_filter_via_has_reservation_empty_value() {
		$component = new SelectedEventActivitiesTable();
		$component->event_day = EventDay::factory()
		                                ->has(Activity::factory()->count(2))
		                                ->has(
			                                Activity::factory()->count(3)
			                                        ->has(Reservation::factory()),
		                                )->create();
		$component->setBuilder($component->builder());

		$component->setFilter(
			"has_reservations",
			"",
		);

		$query = $component->applyFilters();

		$this->assertCount(
			5,
			$query->get(),
		);
	}

	public
	function test_can_filter_via_has_reservation_no() {
		$component = new SelectedEventActivitiesTable();
		$component->event_day = EventDay::factory()
		                                ->has(Activity::factory()->count(2))
		                                ->has(
			                                Activity::factory()->count(3)
			                                        ->has(Reservation::factory()),
		                                )->create();
		$component->setBuilder($component->builder());

		$component->setFilter(
			"has_reservations",
			"no",
		);

		$query = $component->applyFilters();

		$this->assertCount(
			2,
			$query->get(),
		);
	}

	public
	function test_can_filter_via_has_reservation_yes() {
		$component = new SelectedEventActivitiesTable();
		$component->event_day = EventDay::factory()
		                                ->has(Activity::factory()->count(2))
		                                ->has(
			                                Activity::factory()->count(3)
			                                        ->has(Reservation::factory()),
		                                )->create();
		$component->setBuilder($component->builder());

		$component->setFilter(
			"has_reservations",
			"yes",
		);

		$query = $component->applyFilters();

		$this->assertCount(
			3,
			$query->get(),
		);
	}

	public
	function test_can_render() {
		$component = Livewire::test(
			SelectedEventActivitiesTable::class,
			["event_day" => EventDay::factory()->has(Activity::factory()->count(5))->create()],
		);

		$component->assertStatus(200);
	}

	public
	function test_export_full_activity_returns_all_activities() {
		$event_day = EventDay::factory()
		                     ->has(
			                     Activity::factory()
			                             ->count(2),
		                     )
		                     ->has(
			                     Activity::factory()
			                             ->count(3)
			                             ->has(
				                             Reservation::factory()
				                                        ->count(2),
			                             ),
		                     )
		                     ->create();

		$component = new SelectedEventActivitiesTable();
		$component->event_day = $event_day;
		$component->selected = $event_day->activities->map(fn(Activity $activity) => $activity->prefixed_id)->toArray();

		$response = $component->exportFullActivity();
		$response->getFile()->move("/tmp");

		$reader = SimpleExcelReader::create(
			"/tmp/activities.xlsx",
		)->trimHeaderRow();

		$this->assertEquals(
			[
				"Identifier",
				"Title",
				"Starting at",
				"Ending at",
				"Max reservations",
				"Reservations",
				"Markup",
			],
			$reader->getHeaders(),
		);

		$this->assertEquals(
			5,
			$reader->getRows()->count(),
		);

		foreach ($event_day->activities as $activity) {
			$ref_object = [
				"Identifier"       => $activity->prefixed_id,
				"Title"            => $activity->title,
				"Starting at"      => format_time($activity->starting_at),
				"Ending at"        => format_time($activity->ending_at),
				"Max reservations" => $activity->max_reservation ?? "",
				"Reservations"     => $activity->reservations()->count(),
				"Markup"           => $activity->markup,
			];

			$should_fail = true;
			foreach ($reader->getRows() as $row) {
				if ($row === $ref_object) {
					$should_fail = false;

					$this->assertEquals(
						$ref_object,
						$row,
					);
				}
			}

			if ($should_fail) {
				dump($ref_object);
				dump($reader->getRows()->toArray());
				$this->fail("No row matches the reference object");
			}
		}
	}

	public
	function test_export_reservations_returns_all_activity_reservations() {
		$event_day = EventDay::factory()
		                     ->has(
			                     Activity::factory()
			                             ->count(2),
		                     )
		                     ->has(
			                     Activity::factory()
			                             ->count(3)
			                             ->has(
				                             Reservation::factory()
				                                        ->count(2),
			                             ),
		                     )
		                     ->create();

		$component = new SelectedEventActivitiesTable();
		$component->event_day = $event_day;
		$component->selected = $event_day->activities->map(fn(Activity $activity) => $activity->prefixed_id)->toArray();

		$response = $component->exportReservations();
		$response->getFile()->move("/tmp");

		$reader = SimpleExcelReader::create(
			"/tmp/activity-reservations.xlsx",
		)->trimHeaderRow();

		$this->assertEquals(
			[
				"Activity identifier",
				"Activity title",
				"Activity max reservations",
				"Activity reservations",
				"Reservation identifier",
				"User identifier",
				"User full name",
				"User email",
			],
			$reader->getHeaders(),
		);

		$this->assertEquals(
			6,
			$reader->getRows()->count(),
		);

		foreach ($event_day->activities()->orderBy("activities.id")->get() as $activity) {
			/** @var Activity $activity */
			foreach ($activity->reservations()->orderBy("reservations.id")->get() as $reservation) {

				$ref_object = [
					"Activity identifier"       => $activity->prefixed_id,
					"Activity title"            => $activity->title,
					"Activity max reservations" => $activity->max_reservation ?? "",
					"Activity reservations"     => $activity->reservations()->count(),
					"Reservation identifier"    => $reservation->prefixed_id,
					"User identifier"           => $reservation->user->prefixed_id,
					"User full name"            => $reservation->user->name,
					"User email"                => Str::mask(
						$reservation->user->email,
						"*",
						3,
					),
				];

				$should_fail = true;
				foreach ($reader->getRows() as $row) {
					if ($row === $ref_object) {
						$should_fail = false;

						$this->assertEquals(
							$ref_object,
							$row,
						);
					}
				}

				if ($should_fail) {
					dump($ref_object);
					dump($reader->getRows()->toArray());
					$this->fail("No row matches the reference object");
				}
			}
		}
	}
}
