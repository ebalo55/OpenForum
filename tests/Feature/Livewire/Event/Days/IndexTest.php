<?php

namespace Tests\Feature\Livewire\Event\Days;

use App\Http\Livewire\Event\Days\Index;
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
