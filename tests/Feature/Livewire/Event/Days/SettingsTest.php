<?php

namespace Tests\Feature\Livewire\Event\Days;

use App\Http\Livewire\Event\Days\Settings;
use App\Http\Livewire\Settings\GeneralSettingsForm;
use App\Models\EventDay;
use App\Settings\GeneralSettings;
use Carbon\Carbon;
use Livewire\Livewire;
use Tests\TestCase;

class SettingsTest extends TestCase {
    public
    function test_can_render() {
        $component = Livewire::test(
            Settings::class,
            ["event_day" => EventDay::factory()->create()],
        );

        $component->assertStatus(200);
    }

    public
    function test_can_reset_the_form() {
        Carbon::setTestNow(Carbon::create(2023));
        $component = Livewire::test(
            Settings::class,
            ["event_day" => $event_day = EventDay::factory()->create()],
        );

        $this->assertEquals(
            $event_day->nickname,
            $component->get("event_day.nickname"),
        );
        $this->assertEquals(
            $event_day->max_reservation,
            $component->get("event_day.max_reservation"),
        );

        $component->set(
            "event_day.nickname",
            "test nickname",
        );
        $component->set(
            "event_day.max_reservation",
            1000,
        );

        $this->assertEquals(
            "test nickname",
            $component->get("event_day.nickname"),
        );
        $this->assertEquals(
            1000,
            $component->get("event_day.max_reservation"),
        );

        $component->call("resetForm");

        $this->assertEquals(
            $event_day->nickname,
            $component->get("event_day.nickname"),
        );
        $this->assertEquals(
            $event_day->max_reservation,
            $component->get("event_day.max_reservation"),
        );
    }

    public
    function test_save_form_data() {
        Carbon::setTestNow(Carbon::create(2023));
        $component = Livewire::test(
            Settings::class,
            ["event_day" => $event_day = EventDay::factory()->create()],
        );

        $component->set(
            "event_day.nickname",
            "test nickname",
        );
        $component->set(
            "event_day.max_reservation",
            1000,
        );

        $component->call("save");

        $event_day->refresh();
        $this->assertEquals(
            "test nickname",
            $event_day->nickname,
        );
        $this->assertEquals(
            1000,
            $event_day->max_reservation,
        );

        $component->assertDispatchedBrowserEvent("banner.success");
        $component->assertDispatchedBrowserEvent("scroll.to_top");
    }
}
