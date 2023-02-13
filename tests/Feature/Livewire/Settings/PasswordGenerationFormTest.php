<?php

namespace Tests\Feature\Livewire\Settings;

use App\Enum\PasswordGenerationRules;
use App\Http\Livewire\Settings\PasswordGenerationForm;
use App\Settings\PasswordGenerationSettings;
use Illuminate\Support\Arr;
use Livewire\Livewire;
use Tests\TestCase;

class PasswordGenerationFormTest extends TestCase {
    public
    function test_can_reset_the_form() {
        $component = Livewire::test(PasswordGenerationForm::class);

        $this->assertEquals(
            app(PasswordGenerationSettings::class)->generation_rule,
            $component->get("generation_rules"),
        );

        $component->set(
            "generation_rules",
            [PasswordGenerationRules::DASH()],
        );

        $this->assertEquals(
            [PasswordGenerationRules::DASH],
            $component->get("generation_rules"),
        );

        $component->call("resetForm");

        $this->assertEquals(
            app(PasswordGenerationSettings::class)->generation_rule,
            $component->get("generation_rules"),
        );
    }

    public
    function test_save_form_data() {
        $component = Livewire::test(PasswordGenerationForm::class);

        $this->assertEquals(
            app(PasswordGenerationSettings::class)->generation_rule,
            $component->get("generation_rules"),
        );

        $component->set(
            "generation_rules",
            [PasswordGenerationRules::DASH()],
        );

        $this->assertEquals(
            [PasswordGenerationRules::DASH()],
            Arr::map(
                $component->get("generation_rules"),
                fn(PasswordGenerationRules $rules) => $rules(),
            ),
        );

        $component->call("save");

        $this->assertEquals(
            [PasswordGenerationRules::DASH],
            app(PasswordGenerationSettings::class)->generation_rule,
        );

        $component->assertDispatchedBrowserEvent("banner.success");
        $component->assertDispatchedBrowserEvent("scroll.to_top");
    }

    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(PasswordGenerationForm::class);

        $component->assertStatus(200);
    }
}
