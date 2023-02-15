<?php

namespace Tests\Feature\Livewire\Dashboard;

use App\Facade\SettingServiceFacade;
use App\Http\Livewire\Dashboard\Index;
use App\Settings\GeneralSettings;
use Carbon\Carbon;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase {
    public
    function test_automatically_formats_registration_time_lapses_if_defined() {
        $component = Livewire::test(Index::class);

        SettingServiceFacade::setRegistrationStartingTime(Carbon::create(2023));
        SettingServiceFacade::setRegistrationEndingTime(Carbon::create(2024));

        $this->assertEquals(
            format(Carbon::create(2023)),
            $component->get("registrationEnabledFrom"),
        );
        $this->assertEquals(
            format(Carbon::create(2024)),
            $component->get("registrationEnabledTo"),
        );
    }

    public
    function test_automatically_formats_event_date_ranges_if_defined() {
        $component = Livewire::test(Index::class);

        SettingServiceFacade::setEventsStartingDay(Carbon::create(2023));
        SettingServiceFacade::setEventsEndingDay(Carbon::create(2024));

        $this->assertEquals(
            "From " . format_date(
                app(GeneralSettings::class)->events_starting_day,
            ) . " to " . format_date(app(GeneralSettings::class)->events_ending_day),
            $component->get("eventsDateRange"),
        );
    }

    public
    function test_can_get_cards_data_computed_property() {
        $component = Livewire::test(Index::class);

        $this->assertEquals(
            [
                [
                    "title"         => "Site name",
                    "content"       => $component->get("siteName"),
                    "full"          => false,
                    "property_name" => "siteName",
                ],
                [
                    "title"         => "Events dates",
                    "content"       => $component->get("EventsDateRange"),
                    "full"          => false,
                    "property_name" => "EventsDateRange",
                ],
                [
                    "title"         => "Registration available from",
                    "content"       => $component->get("registrationEnabledFrom"),
                    "property_name" => "registrationEnabledFrom",
                ],
                [
                    "title"         => "Registration available to",
                    "content"       => $component->get("registrationEnabledTo"),
                    "property_name" => "registrationEnabledTo",
                ],
                [
                    "title"           => "Imported users",
                    "content"         => $component->get("importedUsers"),
                    "property_name"   => "importedUsers",
                    "react_to_import" => true,
                ],
                [
                    "title"           => "Latest import errors",
                    "content"         => $component->get("importErrors"),
                    "property_name"   => "importErrors",
                    "react_to_import" => true,
                ],
            ],
            $component->get("cardsData"),
        );
    }

    public
    function test_can_redirect_to_edit_route() {
        $component = new Index();

        $response = $component->redirectToEdit();// ->assertRedirectToRoute("settings.editor");
        $this->assertEquals(
            route("settings.editor"),
            $response->getTargetUrl(),
        );
    }

    public
    function test_correctly_checks_if_a_value_should_be_full_grid_spanned() {
        $component = new Index();

        $this->assertTrue($component->shouldSpanFullGrid(["full" => true]));
        $this->assertFalse($component->shouldSpanFullGrid(["full" => false]));
        $this->assertFalse($component->shouldSpanFullGrid([]));
    }

    public
    function test_correctly_checks_if_a_value_should_react_to_import() {
        $component = new Index();

        $this->assertTrue(
            $component->shouldReactToImport(
                [
                    "react_to_import" => true,
                    "property_name"   => "test",
                ],
            ),
        );

        $this->assertFalse(
            $component->shouldReactToImport(
                [
                    "react_to_import" => false,
                    "property_name"   => "test",
                ],
            ),
        );

        $this->assertFalse(
            $component->shouldReactToImport(
                [
                    "react_to_import" => true,
                ],
            ),
        );

        $this->assertFalse(
            $component->shouldReactToImport(
                [
                    "react_to_import" => false,
                ],
            ),
        );

        $this->assertFalse(
            $component->shouldReactToImport(
                [
                ],
            ),
        );
    }

    public
    function test_emits_banner_if_is_importing() {
        $component = Livewire::test(Index::class);

        $this->assertFalse($component->get("isImporting"));

        $component->call("checkIfImporting");

        $component->assertNotDispatchedBrowserEvent("banner.upload_in_progress");

        SettingServiceFacade::setIsImportInProgress(true);

        $this->assertTrue($component->get("isImporting"));

        $component->call("checkIfImporting");

        $component->assertDispatchedBrowserEvent("banner.upload_in_progress");
    }

    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }
}
