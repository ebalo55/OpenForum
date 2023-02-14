<?php

namespace Tests\Feature\Livewire\Event\Activities;

use App\Http\Livewire\Event\Activities\Editor;
use App\Models\Activity;
use Livewire\Livewire;
use Tests\TestCase;

class EditorTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        /** @var Activity $activity */
        $activity = Activity::factory()->create();
        $component = Livewire::test(
            Editor::class,
            ["activity" => $activity, "event_day" => $activity->eventDay],
        );

        $component->assertStatus(200);
    }
}
