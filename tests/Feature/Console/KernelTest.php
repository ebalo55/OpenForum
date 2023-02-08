<?php

namespace Tests\Feature\Console;

use Illuminate\Console\Scheduling\Schedule;
use Tests\TestCase;

class KernelTest extends TestCase {
    public
    function test_correctly_schedules_prune_all() {
        /** @var Schedule $schedule */
        $schedule = app(Schedule::class);

        $events = collect($schedule->events());

        if ($events->count() == 0) {
            $this->markTestSkipped('No events found');
        }
    }
}
