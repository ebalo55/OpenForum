<?php

namespace Tests\Feature\Livewire\Event\Activities;

use App\Http\Livewire\Event\Activities\Create;
use App\Models\EventDay;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(
            Create::class,
            ["event" => EventDay::factory()->create()],
        );

        $component->assertStatus(200);
    }
}
