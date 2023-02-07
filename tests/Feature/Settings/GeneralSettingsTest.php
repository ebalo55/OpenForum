<?php

namespace Tests\Feature\Settings;

use App\Settings\GeneralSettings;
use Tests\TestCase;

class GeneralSettingsTest extends TestCase {
    public
    function test_can_get_and_set_values(): void {
        $setting = app(GeneralSettings::class);

        $this->assertNotNull($setting);

        $setting->is_import_in_progress = true;
        $setting->save();

        $this->assertTrue(
            app(GeneralSettings::class)->is_import_in_progress,
        );
    }
}
