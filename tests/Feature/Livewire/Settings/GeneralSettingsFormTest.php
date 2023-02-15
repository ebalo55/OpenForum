<?php

namespace Tests\Feature\Livewire\Settings;

use App\Http\Livewire\Settings\GeneralSettingsForm;
use App\Settings\GeneralSettings;
use Carbon\Carbon;
use Livewire\Livewire;
use Tests\TestCase;

class GeneralSettingsFormTest extends TestCase {
    public
    function test_can_reset_the_form() {
        Carbon::setTestNow(Carbon::create(2023));
        $component = Livewire::test(GeneralSettingsForm::class);

        $this->assertEquals(
            format(Carbon::create(2023)),
            $component->get("registration_available_from"),
        );

	    $component->set(
		    "registration_available_from",
		    "02/02/2023 18:00:00",
	    );

	    $this->assertEquals(
		    "02/02/2023 18:00:00",
		    $component->get("registration_available_from"),
	    );

	    app(GeneralSettings::class)->events_starting_day = now();
	    app(GeneralSettings::class)->events_ending_day = now();

	    $component->call("resetForm");

	    $this->assertEquals(
		    format(Carbon::create(2023)),
		    $component->get("registration_available_from"),
	    );

	    $this->assertEquals(
		    format_date(now()) . " to " . format_date(now()),
		    $component->get("forum_days"),
	    );
    }

    public
    function test_save_form_data() {
        $component = Livewire::test(GeneralSettingsForm::class);
        Carbon::setTestNow(Carbon::create(2023));

        $component->set(
            "registration_available_from",
            format(now()->addDays()),
        );
        $component->set(
            "registration_available_to",
            format(now()->addDays(3)),
        );
        $component->set(
            "site_name",
            "test",
        );
        $component->set(
            "forum_days",
            "01/01/2023 to 01/02/2023",
        );
        $component->set(
            "locations",
            "loc1\nloc2",
        );

        $component->call("save");

        $this->assertEquals(
            Carbon::create(
                     2023,
                day: 2,
            ),
            app(GeneralSettings::class)->registration_enabled_from,
        );
        $this->assertEquals(
            Carbon::create(
                     2023,
                day: 4,
            ),
            app(GeneralSettings::class)->registration_enabled_to,
        );
        $this->assertEquals(
            "test",
            app(GeneralSettings::class)->site_name,
        );
        $this->assertEquals(
            Carbon::create(
                2023,
            ),
            app(GeneralSettings::class)->events_starting_day,
        );
        $this->assertEquals(
            Carbon::create(
                2023,
                2,
            ),
            app(GeneralSettings::class)->events_ending_day,
        );
        $this->assertEquals(
            [
                "loc1",
                "loc2",
            ],
            app(GeneralSettings::class)->event_locations,
        );

        $component->assertDispatchedBrowserEvent("banner.success");
        $component->assertDispatchedBrowserEvent("scroll.to_top");
    }

    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(GeneralSettingsForm::class);

        $component->assertStatus(200);
    }
}
