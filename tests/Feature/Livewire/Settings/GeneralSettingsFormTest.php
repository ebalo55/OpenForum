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

        $component->call("resetForm");

        $this->assertEquals(
            format(Carbon::create(2023)),
            $component->get("registration_available_from"),
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
