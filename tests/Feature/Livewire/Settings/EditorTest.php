<?php

namespace Tests\Feature\Livewire\Settings;

use App\Http\Livewire\Settings\Editor;
use Livewire\Livewire;
use Tests\TestCase;

class EditorTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(Editor::class);

        $component->assertStatus(200);
    }
}
