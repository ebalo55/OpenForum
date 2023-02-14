<?php

namespace Tests\Feature\Livewire\Event\Activities;

use App\Http\Livewire\Event\Activities\Edit;
use App\Models\Activity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        /** @var Activity $activity */
        $activity = Activity::factory()->create();
        $component = Livewire::test(
            Edit::class,
            ["event" => $activity->eventDay, "activity" => $activity],
        );

        $component->assertStatus(200);
    }
}
