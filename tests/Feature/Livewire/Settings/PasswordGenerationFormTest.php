<?php

namespace Tests\Feature\Livewire\Settings;

use App\Http\Livewire\Settings\PasswordGenerationForm;
use Livewire\Livewire;
use Tests\TestCase;

class PasswordGenerationFormTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(PasswordGenerationForm::class);

        $component->assertStatus(200);
    }
}
