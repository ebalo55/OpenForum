<?php

namespace Tests\Feature\Livewire\Dashboard;

use App\Http\Livewire\Dashboard\Index;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }
}
