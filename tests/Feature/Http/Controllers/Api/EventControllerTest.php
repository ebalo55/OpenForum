<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Enum\DatetimeFormatVariation;
use App\Exceptions\ActivityMaximumReservationsReachedException;
use App\Exceptions\RegistrationNotEnabledException;
use App\Facade\EventDayServiceFacade;
use App\Facade\SettingServiceFacade;
use App\Facade\UserServiceFacade;
use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Tests\TestCase;

class EventControllerTest extends TestCase {
    public
    function test_can_list_events(): void {
        $events = EventDay::factory(3)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "03/03/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/02/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(Activity::factory(2))
                          ->create();

        $events = EventDay::query()->orderBy("date")->get();

        $response = $this->actingAs(User::first())->get(route("api.events.index"));

        $response->assertJson(
            [
                "data" => [
                    ...$events->map(
                        fn(EventDay $event_day) => [
                            "type"       => "event_day",
                            "id"         => $event_day->prefixed_id,
                            "attributes" => [
                                "available_reservations" => $event_day->max_reservation -
                                                            $event_day->reservations()->count(),
                                "date"                   => format_date($event_day->date),
                                "location"               => $event_day->location,
                            ],
                        ],
                    )->toArray(),
                ],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_can_list_events_including_activities(): void {
        $events = EventDay::factory(3)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "03/03/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/02/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(
                              Activity::factory(3)->sequence(
                                  [
                                      "starting_at" => make_from_format(
                                          "12:30:00",
                                          DatetimeFormatVariation::TIME,
                                      ),
                                  ],
                                  [
                                      "starting_at" => make_from_format(
                                          "19:30:00",
                                          DatetimeFormatVariation::TIME,
                                      ),
                                  ],
                                  [
                                      "starting_at" => make_from_format(
                                          "15:30:00",
                                          DatetimeFormatVariation::TIME,
                                      ),
                                  ],
                              ),
                          )
                          ->create();

        $events = EventDay::query()->setEagerLoads(
            [
                "activities" => fn(HasMany $builder) => $builder->orderBy(
                    "activities.starting_at",
                ),
            ],
        )->orderBy("date")->get();

        $response = $this->actingAs(User::first())->get(route("api.events.index") . "?include=activities");

        $response->assertJson(
            [
                "data"     => [
                    ...$events->map(
                        fn(EventDay $event_day) => [
                            "type"          => "event_day",
                            "id"            => $event_day->prefixed_id,
                            "attributes"    => [
                                "available_reservations" => $event_day->max_reservation -
                                                            $event_day->reservations()->count(),
                                "date"                   => format_date($event_day->date),
                                "location"               => $event_day->location,
                            ],
                            "relationships" => [
                                "activities" => [
                                    "data" => [
                                        ...$event_day->activities->map(
                                            fn(Activity $activity) => [
                                                "type" => "activity",
                                                "id"   => $activity->prefixed_id,
                                            ],
                                        )->toArray(),
                                    ],
                                ],
                            ],
                        ],
                    )->toArray(),
                ],
                "included" => [
                    ...(function() use ($events) {
                        $result = [];
                        foreach ($events as $event_day) {
                            foreach ($event_day->activities as $activity) {
                                $result[] = [
                                    "type"       => "activity",
                                    "id"         => $activity->prefixed_id,
                                    "attributes" => [
                                        "starting_at"            => format_time($activity->starting_at),
                                        "ending_at"              => format_time($activity->ending_at),
                                        "title"                  => $activity->title,
                                        "available_reservations" => $activity->max_reservation -
                                                                    $activity->reservations()->count(),
                                        "description"            => app(MarkdownRenderer::class)->toHtml(
                                            $activity->markup,
                                        ),
                                    ],

                                ];
                            }
                        }
                        return $result;
                    })(),
                ],
                "meta"     => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_can_list_events_including_reservations(): void {
        $events = EventDay::factory(3)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "03/03/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/02/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(Activity::factory(2)->withMaxReservations(10))
                          ->create();

        $events = EventDay::query()->orderBy("date")->get();
        $events->each(
            fn(EventDay $event_day) => $event_day->reservations()->create(
                [
                    "user_id"     => User::factory()->create()->id,
                    "activity_id" => $event_day->activities[0]->id,
                ],
            ),
        );

        $response = $this->actingAs(User::first())->get(route("api.events.index") . "?include=reservations");

        $response->assertJson(
            [
                "data"     => [
                    ...$events->map(
                        fn(EventDay $event_day) => [
                            "type"          => "event_day",
                            "id"            => $event_day->prefixed_id,
                            "attributes"    => [
                                "available_reservations" => $event_day->max_reservation -
                                                            $event_day->reservations()->count(),
                                "date"                   => format_date($event_day->date),
                                "location"               => $event_day->location,
                            ],
                            "relationships" => [
                                "reservations" => [
                                    "data" => [
                                        ...$event_day->reservations->map(
                                            fn(Reservation $reservation) => [
                                                "type" => "reservation",
                                                "id"   => $reservation->prefixed_id,
                                            ],
                                        )->toArray(),
                                    ],
                                ],
                            ],
                        ],
                    )->toArray(),
                ],
                "included" => [
                    ...(function() use ($events) {
                        $result = [];
                        foreach ($events as $event_day) {
                            foreach ($event_day->reservations as $reservation) {
                                $result[] = [
                                    "type"       => "reservation",
                                    "id"         => $reservation->prefixed_id,
                                    "attributes" => [
                                        "user"     => $reservation->user->prefixed_id,
                                        "event"    => $reservation->eventDay->prefixed_id,
                                        "activity" => $reservation->activity->prefixed_id,
                                    ],

                                ];
                            }
                        }
                        return $result;
                    })(),
                ],
                "meta"     => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_can_reserve_a_spot(): void {
        $events = EventDay::factory(2)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(
                              Activity::factory(2)
                                      ->withMaxReservations(5)
                                      ->sequence(
                                          [
                                              "starting_at" => make_from_format(
                                                  "12:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "13:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                          [
                                              "starting_at" => make_from_format(
                                                  "19:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "21:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                      ),
                          )
                          ->create();

        $events = EventDay::query()->orderBy("date")->get();

        // need to trigger the refresh of the counter manually as it is triggered internally during the events creation
        EventDayServiceFacade::countUniqueEvents(true);

        SettingServiceFacade::setRegistrationStartingTime(now()->subDays());
        SettingServiceFacade::setRegistrationEndingTime(now()->addDays());

        $response = $this->actingAs($user = User::first())->post(
            route("api.events.reserve"),
            [
                "reservations" => [
                    [
                        "date"                  => format_date($events[0]->date),
                        "location"              => $events[0]->location,
                        "activity_reservations" => [
                            $events[0]->activities[0]->prefixed_id,
                        ],
                    ],
                    [
                        "date"                  => format_date($events[1]->date),
                        "location"              => $events[1]->location,
                        "activity_reservations" => [
                            $events[1]->activities[0]->prefixed_id,
                            $events[1]->activities[1]->prefixed_id,
                        ],
                    ],
                ],
            ],
        );

        $response->assertJson(
            [
                "data"     => [
                    "id"            => $user->prefixed_id,
                    "attributes"    => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                    "relationships" => [
                        "reservations" => [
                            "data" => [
                                ...$user->reservations->map(
                                    fn(Reservation $reservation) => [
                                        "type" => "reservation",
                                        "id"   => $reservation->prefixed_id,
                                    ],
                                )->toArray(),
                            ],
                        ],
                    ],
                ],
                "included" => [
                    ...(function() use ($user) {
                        $result = [];
                        foreach ($user->reservations as $reservation) {
                            $result[] = [
                                "type"       => "reservation",
                                "id"         => $reservation->prefixed_id,
                                "attributes" => [
                                    "user"     => $reservation->user->prefixed_id,
                                    "event"    => $reservation->eventDay->prefixed_id,
                                    "activity" => $reservation->activity->prefixed_id,
                                ],

                            ];
                        }
                        return $result;
                    })(),
                ],
                "meta"     => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_can_reserve_a_spot_and_be_absent_a_day(): void {
        $events = EventDay::factory(2)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(
                              Activity::factory(2)
                                      ->withMaxReservations(5)
                                      ->sequence(
                                          [
                                              "starting_at" => make_from_format(
                                                  "12:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "13:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                          [
                                              "starting_at" => make_from_format(
                                                  "19:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "21:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                      ),
                          )
                          ->create();
        $events = EventDay::query()->orderBy("date")->get();

        // need to trigger the refresh of the counter manually as it is triggered internally during the events creation
        EventDayServiceFacade::countUniqueEvents(true);

        SettingServiceFacade::setRegistrationStartingTime(now()->subDays());
        SettingServiceFacade::setRegistrationEndingTime(now()->addDays());

        $response = $this->actingAs($user = User::first())->post(
            route("api.events.reserve"),
            [
                "reservations" => [
                    [
                        "date"     => format_date($events[0]->date),
                        "location" => $events[0]->location,
                        "absent"   => true,
                    ],
                    [
                        "date"                  => format_date($events[1]->date),
                        "location"              => $events[1]->location,
                        "activity_reservations" => [
                            $events[1]->activities[0]->prefixed_id,
                            $events[1]->activities[1]->prefixed_id,
                        ],
                    ],
                ],
            ],
        );

        $response->assertJson(
            [
                "data"     => [
                    "id"            => $user->prefixed_id,
                    "attributes"    => [
                        "name"              => $user->name,
                        "email"             => UserServiceFacade::maskEmail($user),
                        "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                        "token"             => UserServiceFacade::getFrontEndAccessToken($user),
                    ],
                    "relationships" => [
                        "reservations" => [
                            "data" => [
                                ...$user->reservations->map(
                                    fn(Reservation $reservation) => [
                                        "type" => "reservation",
                                        "id"   => $reservation->prefixed_id,
                                    ],
                                )->toArray(),
                            ],
                        ],
                    ],
                ],
                "included" => [
                    ...(function() use ($user) {
                        $result = [];
                        foreach ($user->reservations as $reservation) {
                            $result[] = [
                                "type"       => "reservation",
                                "id"         => $reservation->prefixed_id,
                                "attributes" => [
                                    "user"     => $reservation->user->prefixed_id,
                                    "event"    => $reservation->eventDay->prefixed_id,
                                    "activity" => $reservation->activity->prefixed_id,
                                ],

                            ];
                        }
                        return $result;
                    })(),
                ],
                "meta"     => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
        );
    }

    public
    function test_cannot_reserve_a_spot_if_activities_are_not_reservable(): void {
        $events = EventDay::factory(2)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(
                              Activity::factory(2)
                                      ->sequence(
                                          [
                                              "starting_at" => make_from_format(
                                                  "12:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "13:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                          [
                                              "starting_at" => make_from_format(
                                                  "19:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "21:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                      ),
                          )
                          ->create();

        $events = EventDay::query()->orderBy("date")->get();

        // need to trigger the refresh of the counter manually as it is triggered internally during the events creation
        EventDayServiceFacade::countUniqueEvents(true);

        SettingServiceFacade::setRegistrationStartingTime(now()->subDays());
        SettingServiceFacade::setRegistrationEndingTime(now()->addDays());

        $response = $this->actingAs($user = User::first())->post(
            route("api.events.reserve"),
            [
                "reservations" => [
                    [
                        "date"     => format_date($events[0]->date),
                        "location" => $events[0]->location,
                        "absent"   => true,
                    ],
                    [
                        "date"                  => format_date($events[1]->date),
                        "location"              => $events[1]->location,
                        "activity_reservations" => [
                            $events[1]->activities[0]->prefixed_id,
                            $events[1]->activities[1]->prefixed_id,
                        ],
                    ],
                ],
            ],
        );

        $response->assertJson(
            [
                "data" => [],
                "meta" => [
                    "success" => false,
                    "errors"  => [
                        [
                            "reference_code" => config(
                                "open-forum.exception_codes.App\Exceptions\ActivityMaximumReservationsReachedException",
                            ),
                            "field"          => null,
                            "message"        => (new ActivityMaximumReservationsReachedException(
                                $events[1]->activities[0]
                            ))->getMessage(),
                        ],
                    ],
                ],
            ],
        );
    }

    public
    function test_cannot_reserve_a_spot_if_registration_is_not_enabled(): void {
        $events = EventDay::factory(2)
                          ->withMaxReservations(10)
                          ->sequence(
                              [
                                  "date" => make_from_format(
                                      "01/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                              [
                                  "date" => make_from_format(
                                      "02/01/2023",
                                      DatetimeFormatVariation::DATE,
                                  ),
                              ],
                          )
                          ->has(
                              Activity::factory(2)
                                      ->sequence(
                                          [
                                              "starting_at" => make_from_format(
                                                  "12:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "13:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                          [
                                              "starting_at" => make_from_format(
                                                  "19:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                              "ending_at"   => make_from_format(
                                                  "21:30:00",
                                                  DatetimeFormatVariation::TIME,
                                              ),
                                          ],
                                      ),
                          )
                          ->create();

        $events = EventDay::query()->orderBy("date")->get();

        // need to trigger the refresh of the counter manually as it is triggered internally during the events creation
        EventDayServiceFacade::countUniqueEvents(true);

        $response = $this->actingAs($user = User::first())->post(
            route("api.events.reserve"),
            [
                "reservations" => [
                    [
                        "date"     => format_date($events[0]->date),
                        "location" => $events[0]->location,
                        "absent"   => true,
                    ],
                    [
                        "date"                  => format_date($events[1]->date),
                        "location"              => $events[1]->location,
                        "activity_reservations" => [
                            $events[1]->activities[0]->prefixed_id,
                            $events[1]->activities[1]->prefixed_id,
                        ],
                    ],
                ],
            ],
        );

        $response->assertJson(
            [
                "data" => [],
                "meta" => [
                    "success" => false,
                    "errors"  => [
                        [
                            "reference_code" => config(
                                "open-forum.exception_codes.App\Exceptions\RegistrationNotEnabledException",
                            ),
                            "field"          => null,
                            "message"        => (new RegistrationNotEnabledException())->getMessage(),
                        ],
                    ],
                ],
            ],
        );
    }
}
