<?php

namespace App\Service;

use App\Models\EventDay;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\DB;
use Spatie\Period\Period;
use Spatie\Period\Precision;
use Throwable;

class EventDaysService extends BaseService {
    /**
     * Prunes all event days and creates new one using the defined day-location pair
     *
     * @return void
     * @throws Throwable
     */
    public
    function sync(): void {
        $period = Period::make(
            app(GeneralSettings::class)->events_starting_day,
            app(GeneralSettings::class)->events_ending_day,
            Precision::DAY(),
        );

        DB::transaction(
            function() use ($period) {
                // remove all previously defined days
                EventDay::delete();

                $locations = app(GeneralSettings::class)->event_locations;
                // for each day-location pair create a new event day
                foreach ($period as $day) {
                    foreach ($locations as $location) {
                        EventDay::create(
                            [
                                "nickname" => fake()->userName(),
                                "date"     => $day,
                                "location" => $location,
                            ],
                        );
                    }
                }
            },
        );
    }
}
