<?php

namespace Tests\Feature\Livewire\Settings;

use App\Http\Livewire\Settings\GeneralSettingsForm;
use Livewire\Livewire;
use Tests\TestCase;

class GeneralSettingsFormTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(GeneralSettingsForm::class);

        $component->assertStatus(200);
    }
}
