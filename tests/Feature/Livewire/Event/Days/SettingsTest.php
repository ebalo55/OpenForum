<?php

namespace Tests\Feature\Livewire\Event\Days;

use App\Http\Livewire\Event\Days\Settings;
use App\Models\EventDay;
use Livewire\Livewire;
use Tests\TestCase;

class SettingsTest extends TestCase {
    /** @test */
    public
    function the_component_can_render() {
        $component = Livewire::test(
            Settings::class,
            ["event_day" => EventDay::factory()->create()],
        );

        $component->assertStatus(200);
    }
}
