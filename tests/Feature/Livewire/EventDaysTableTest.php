<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\EventDaysTable;
use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Spatie\SimpleExcel\SimpleExcelReader;
use Tests\TestCase;

class EventDaysTableTest extends TestCase {
	public
	function test_can_call_export_event_activities_data() {
		$component = Livewire::test(
			EventDaysTable::class,
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

		$component->call("exportEventActivitiesData");
		$component->assertFileDownloaded("event-activities.xlsx");
	}

	public
	function test_can_call_export_event_data() {
		$component = Livewire::test(
			EventDaysTable::class,
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

		$component->call("exportEventData");
		$component->assertFileDownloaded("events.xlsx");
	}

	public
	function test_can_call_export_reservations() {
		$component = Livewire::test(
			EventDaysTable::class,
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
		$component->assertFileDownloaded("event-reservations.xlsx");
	}

	public
	function test_can_render() {
		$component = Livewire::test(EventDaysTable::class);

		$component->assertStatus(200);
	}

	public
	function test_export_event_activities_data_returns_all_activities_data() {
		$event_days = EventDay::factory()
		                      ->count(3)
		                      ->has(
			                      Activity::factory()
			                              ->count(3)
			                              ->has(
				                              Reservation::factory()
				                                         ->count(2),
			                              ),
		                      )
		                      ->create();

		$component = new EventDaysTable();
		$component->selected = $event_days->map(fn(EventDay $event_day) => $event_day->prefixed_id)->toArray();

		$response = $component->exportEventActivitiesData();
		$response->getFile()->move("/tmp");

		$reader = SimpleExcelReader::create(
			"/tmp/event-activities.xlsx",
		)->trimHeaderRow();

		$this->assertEquals(
			[
				"Event identifier",
				"Event Nickname",
				"Event max reservations",
				"Event reservations",
				"Activity identifier",
				"Activity title",
				"Activity max reservations",
				"Activity reservations",
			],
			$reader->getHeaders(),
		);

		$this->assertEquals(
			9,
			$reader->getRows()->count(),
		);

		foreach ($event_days as $event_day) {
			/** @var EventDay $event_day */
			foreach ($event_day->activities()->orderBy("activities.id")->get() as $activity) {

				$ref_object = [
					"Event identifier"          => $event_day->prefixed_id,
					"Event Nickname"            => $event_day->nickname,
					"Event max reservations"    => $event_day->max_reservation ?? "",
					"Event reservations"        => $event_day->reservations()->count(),
					"Activity identifier"       => $activity->prefixed_id,
					"Activity title"            => $activity->title,
					"Activity max reservations" => $activity->max_reservation ?? "",
					"Activity reservations"     => $activity->reservations()->count(),
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

	public
	function test_export_event_data_returns_events_data() {
		/** @var Collection<User> $users */
		$events = EventDay::factory()->count(5)->has(Reservation::factory()->count(2))->create();

		$component = new EventDaysTable();
		$component->selected = $events->map(fn(EventDay $event_day) => $event_day->prefixed_id)->toArray();

		$response = $component->exportEventData();
		$response->getFile()->move("/tmp");

		$reader = SimpleExcelReader::create(
			"/tmp/events.xlsx",
		)->trimHeaderRow();

		$this->assertEquals(
			[
				"Identifier",
				"Nickname",
				"Day",
				"Location",
				"Activities",
				"Max reservation",
				"Reservations",
			],
			$reader->getHeaders(),
		);

		$this->assertEquals(
			5,
			$reader->getRows()->count(),
		);

		foreach ($events as $key => $event_day) {
			$this->assertEquals(
				[
					"Identifier"      => $event_day->prefixed_id,
					"Nickname"        => $event_day->nickname,
					"Day"             => format_date($event_day->date),
					"Location"        => $event_day->location,
					"Activities"      => $event_day->activities()->count(),
					"Max reservation" => $event_day->max_reservation ?? "",
					"Reservations"    => $event_day->reservations()->count(),
				],
				$reader->getRows()->get($key),
			);
		}
	}

	public
	function test_export_reservations_returns_all_activities_data() {
		$event_days = EventDay::factory()
		                      ->count(3)
		                      ->has(
			                      Reservation::factory()
			                                 ->count(2),
		                      )
		                      ->create();

		$component = new EventDaysTable();
		$component->selected = $event_days->map(fn(EventDay $event_day) => $event_day->prefixed_id)->toArray();

		$response = $component->exportReservations();
		$response->getFile()->move("/tmp");

		$reader = SimpleExcelReader::create(
			"/tmp/event-reservations.xlsx",
		)->trimHeaderRow();

		$this->assertEquals(
			[
				"Event identifier",
				"Event nickname",
				"Event max reservations",
				"Event reservations",
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

		foreach ($event_days as $event_day) {
			/** @var EventDay $event_day */
			foreach ($event_day->reservations()->orderBy("reservations.id")->get() as $reservation) {

				$ref_object = [
					"Event identifier"       => $event_day->prefixed_id,
					"Event nickname"         => $event_day->nickname,
					"Event max reservations" => $event_day->max_reservation ?? "",
					"Event reservations"     => $event_day->reservations()->count(),
					"Reservation identifier" => $reservation->prefixed_id,
					"User identifier"        => $reservation->user->prefixed_id,
					"User full name"         => $reservation->user->name,
					"User email"             => Str::mask(
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
