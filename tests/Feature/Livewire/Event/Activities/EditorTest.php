<?php

namespace Tests\Feature\Livewire\Event\Activities;

use App\Http\Livewire\Event\Activities\Editor;
use App\Models\Activity;
use Carbon\Carbon;
use Livewire\Livewire;
use Tests\TestCase;

class EditorTest extends TestCase {
	public
	function test_can_reset_the_form() {
		Carbon::setTestNow(Carbon::create(2023));
		$activity = Activity::factory()->create();
		$component = Livewire::test(
			Editor::class,
			["activity" => $activity, "event_day" => $activity->eventDay],
		);

		$this->assertEquals(
			$activity->title,
			$component->get("activity.title"),
		);
		$this->assertEquals(
			$activity->max_reservation,
			$component->get("activity.max_reservation"),
		);
		$this->assertEquals(
			format_time($activity->starting_at),
			$component->get("activity_starting_at"),
		);
		$this->assertEquals(
			format_time($activity->ending_at),
			$component->get("activity_ending_at"),
		);
		$this->assertEquals(
			$activity->markup,
			$component->get("activity.markup"),
		);

		$component->set(
			"activity.title",
			"test title",
		);
		$component->set(
			"activity.markup",
			"test markup",
		);
		$component->set(
			"activity_starting_at",
			"18:30:00",
		);
		$component->set(
			"activity_ending_at",
			"18:30:00",
		);
		$component->set(
			"activity.max_reservation",
			1000,
		);

		$this->assertEquals(
			"test title",
			$component->get("activity.title"),
		);
		$this->assertEquals(
			"test markup",
			$component->get("activity.markup"),
		);
		$this->assertEquals(
			"18:30:00",
			$component->get("activity_starting_at"),
		);
		$this->assertEquals(
			"18:30:00",
			$component->get("activity_ending_at"),
		);
		$this->assertEquals(
			1000,
			$component->get("activity.max_reservation"),
		);

		$component->call("resetForm");

		$this->assertEquals(
			$activity->title,
			$component->get("activity.title"),
		);
		$this->assertEquals(
			$activity->max_reservation,
			$component->get("activity.max_reservation"),
		);
		$this->assertEquals(
			format_time($activity->starting_at),
			$component->get("activity_starting_at"),
		);
		$this->assertEquals(
			format_time($activity->ending_at),
			$component->get("activity_ending_at"),
		);
		$this->assertEquals(
			$activity->markup,
			$component->get("activity.markup"),
		);
	}

	public
	function test_save_form_data() {
		Carbon::setTestNow(Carbon::create(2023));
		$activity = Activity::factory()->create();
		$component = Livewire::test(
			Editor::class,
			["activity" => $activity, "event_day" => $activity->eventDay],
		);

		$component->set(
			"activity.title",
			"test title",
		);
		$component->set(
			"activity.markup",
			"test markup",
		);
		$component->set(
			"activity_starting_at",
			"18:30:00",
		);
		$component->set(
			"activity_ending_at",
			"18:30:00",
		);
		$component->set(
			"activity.max_reservation",
			1000,
		);

		$component->call("save");

		$activity->refresh();
		$this->assertEquals(
			"test title",
			$activity->title,
		);
		$this->assertEquals(
			1000,
			$activity->max_reservation,
		);
		$this->assertEquals(
			"18:30:00",
			format_time($activity->starting_at),
		);
		$this->assertEquals(
			"18:30:00",
			format_time($activity->ending_at),
		);
		$this->assertEquals(
			"test markup",
			$activity->markup,
		);

		$component->assertDispatchedBrowserEvent("banner.success");
		$component->assertDispatchedBrowserEvent("scroll.to_top");
	}

	/** @test */
	public
	function the_component_can_render() {
		/** @var Activity $activity */
		$activity = Activity::factory()->create();
		$component = Livewire::test(
			Editor::class,
			["activity" => $activity, "event_day" => $activity->eventDay],
		);

        $component->assertStatus(200);
    }
}
