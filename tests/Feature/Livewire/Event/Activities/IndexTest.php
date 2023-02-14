<?php

namespace Tests\Feature\Livewire\Event\Activities;

use App\Http\Livewire\Event\Activities\Index;
use App\Models\EventDay;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(
            Index::class,
            ["event" => EventDay::factory()->create()],
        );

        $component->assertStatus(200);
    }
}
