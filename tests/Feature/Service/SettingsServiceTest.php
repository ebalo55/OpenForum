<?php

namespace Tests\Feature\Service;

use App\Enum\PasswordGenerationRules;
use App\Service\SettingsService;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;
use Tests\TestCase;

class SettingsServiceTest extends TestCase {
    public
    function test_can_increase_import_errors(): void {
        app(SettingsService::class)->increaseImportErrors();
        $this->assertEquals(
            1,
            app(GeneralSettings::class)->import_errors,
        );
    }

    public
    function test_can_set_is_import_in_progress(): void {
        app(SettingsService::class)->setIsImportInProgress(true);
        $this->assertTrue(app(GeneralSettings::class)->is_import_in_progress);
        app(SettingsService::class)->setIsImportInProgress(false);
        $this->assertFalse(app(GeneralSettings::class)->is_import_in_progress);
    }

    public
    function test_can_set_password_generation_rules(): void {
        app(SettingsService::class)->setPasswordGenerationRules(PasswordGenerationRules::AT);
        $this->assertEquals(
            [PasswordGenerationRules::AT],
            app(PasswordGenerationSettings::class)->generation_rule,
        );
    }

    public
    function test_can_set_registration_ending_time(): void {
        app(SettingsService::class)->setRegistrationEndingTime(
            Carbon::create(
                2023,
                1,
                1,
            ),
        );
        $this->assertEquals(
            Carbon::create(
                2023,
                1,
                1,
            )->timestamp,
            app(GeneralSettings::class)->registration_enabled_to->timestamp,
        );
    }

    public
    function test_can_set_registration_starting_time(): void {
        app(SettingsService::class)->setRegistrationStartingTime(
            Carbon::create(
                2023,
                1,
                1,
            ),
        );
        $this->assertEquals(
            Carbon::create(
                2023,
                1,
                1,
            )->timestamp,
            app(GeneralSettings::class)->registration_enabled_from->timestamp,
        );
    }

    public
    function test_can_set_site_name(): void {
        app(SettingsService::class)->setSiteName("test");
        $this->assertEquals(
            "test",
            app(GeneralSettings::class)->site_name,
        );
    }

    public
    function test_setting_upload_mode_on_resets_import_errors(): void {
        app(SettingsService::class)->increaseImportErrors();
        $this->assertEquals(
            1,
            app(GeneralSettings::class)->import_errors,
        );

        app(SettingsService::class)->setIsImportInProgress(true);
        $this->assertEquals(
            0,
            app(GeneralSettings::class)->import_errors,
        );
    }
}
