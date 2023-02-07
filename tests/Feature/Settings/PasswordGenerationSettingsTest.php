<?php

namespace Tests\Feature\Settings;

use App\Enum\PasswordGenerationRules;
use App\Settings\PasswordGenerationSettings;
use Tests\TestCase;

class PasswordGenerationSettingsTest extends TestCase {
    /**
     * A basic feature test example.
     */
    public
    function test_can_create_and_retrieve_password_generation_settings(): void {
        $setting = app(PasswordGenerationSettings::class);

        $this->assertNotNull($setting);

        $setting->generation_rule = [PasswordGenerationRules::AND];
        $setting->save();

        $this->assertEquals(
            [PasswordGenerationRules::AND],
            app(PasswordGenerationSettings::class)->generation_rule,
        );
    }
}
