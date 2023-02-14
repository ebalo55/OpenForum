<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class EventDaysTable extends DataTableComponent {
    public array $bulkActions = [
        "exportEventData"           => "Export event data",
        "exportEventActivitiesData" => "Export activities",
        "exportReservations"        => "Export reservations",
    ];

    public
    function builder(): Builder {
        return EventDay::query()
                       ->select(
                           [
                               "id",
                               "prefixed_id",
                               "nickname",
                               "date",
                               "location",
                               "max_reservation",
                           ],
                       )
                       ->orderBy("id");
    }

    public
    function columns(): array {
        return [
            Column::make(
                "Identifier",
                "prefixed_id",
            )
                  ->format(
                      fn(string $value) => Str::limit(
                          $value,
                          10,
                      ),
                  )
                  ->sortable(),
            LinkColumn::make(
                "Nickname",
                "nickname",
            )
                      ->sortable()
                      ->searchable()
                      ->title(fn(EventDay $row) => $row->nickname)
                      ->location(
                          fn(EventDay $row) => route(
                              "events.activities",
                              ["event" => $row->prefixed_id],
                          ),
                      )
                      ->attributes(
                          fn(EventDay $row) => [
                              "class" => "text-blue-600 underline",
                          ],
                      ),
            Column::make(
                "Day",
                "date",
            )
                  ->format(fn(Carbon $date) => format_date($date))
                  ->sortable()
                  ->searchable(),
            Column::make(
                "Location",
                "location",
            )
                  ->sortable()
                  ->searchable(),
            Column::make(
                "Activities",
                "id",
            )
                  ->format(
                      fn(int $id) => number_format(
                          DB::table("activities")->where(
                              "activities.event_day_id",
                              $id,
                          )->count(),
                      ),
                  )
                  ->sortable(),
            Column::make(
                "Max reservation",
                "max_reservation",
            )
                  ->format(fn(?int $value) => $value ? number_format($value) : "No maximum defined")
                  ->sortable(),
            Column::make(
                "Reservations",
                "id",
            )
                  ->format(
                      fn(int $id) => number_format(
                          DB::table("reservations")->where(
                              "reservations.event_day_id",
                              $id,
                          )->count(),
                      ),
                  )
                  ->sortable(),
        ];
    }

    public
    function configure(): void {
        $this->setPrimaryKey('prefixed_id')
             ->setEmptyMessage("No event found, navigate to settings and define the critical values to create events.")
             ->setSingleSortingDisabled()
             ->setEagerLoadAllRelationsDisabled();
    }

    public
    function exportEventActivitiesData(): BinaryFileResponse {
        $selected_ids = $this->getSelected();
        $this->clearSelected();

        // write the excel
        $excel = SimpleExcelWriter::create("event-activities.xlsx");

        EventDay::query()
                ->whereIn(
                    "prefixed_id",
                    $selected_ids,
                )
                ->with(
                    "activities",
                    fn(HasMany $builder) => $builder->select(
                        [
                            "activities.id",
                            "activities.prefixed_id",
                            "activities.event_day_id",
                            "activities.title",
                            "activities.max_reservation",
                        ],
                    )->withCount("reservations"),
                )
                ->select(
                    [
                        "event_days.id",
                        "event_days.prefixed_id",
                        "event_days.nickname",
                        "event_days.max_reservation",
                    ],
                )
                ->withCount("reservations")
                ->chunk(
                    100,
                    function(Collection $event_days) use ($excel) {
                        foreach ($event_days as $event_day) {
                            /** @var EventDay $event_day */
                            foreach ($event_day->activities as $activity) {
                                /** @var Activity $activity */
                                $excel->addRow(
                                    [
                                        "Event identifier"          => $event_day->prefixed_id,
                                        "Event Nickname"            => $event_day->nickname,
                                        "Event max reservations"    => $event_day->max_reservation,
                                        "Event reservations"        => $event_day->reservations_count,
                                        "Activity identifier"       => $activity->prefixed_id,
                                        "Activity title"            => $activity->title,
                                        "Activity max reservations" => $activity->max_reservation,
                                        "Activity reservations"     => $activity->reservations_count,
                                    ],
                                );
                            }
                        }
                    },
                );

        $excel->close();

        return response()->download($excel->getPath());
    }

    public
    function exportEventData(): BinaryFileResponse {
        $selected_ids = $this->getSelected();
        $this->clearSelected();

        // write the excel
        $excel = SimpleExcelWriter::create("events.xlsx")->addRows(
            EventDay::query()
                    ->whereIn(
                        "prefixed_id",
                        $selected_ids,
                    )
                    ->select(
                        [
                            "id",
                            "prefixed_id",
                            "nickname",
                            "date",
                            "location",
                            "max_reservation",
                        ],
                    )
                    ->withCount(["reservations", "activities"])
                // create a map with the same column name as the data table and format the data
                    ->chunkMap(
                    function(EventDay $event_day) {
                        return [
                            "Identifier"      => $event_day->prefixed_id,
                            "Nickname"        => $event_day->nickname,
                            "Day"             => format_date($event_day->date),
                            "Location"        => $event_day->location,
                            "Activities"      => $event_day->activities_count,
                            "Max reservation" => $event_day->max_reservation,
                            "Reservations"    => $event_day->reservations_count,
                        ];
                    },
                ),
        );

        $excel->close();

        return response()->download($excel->getPath());
    }

    public
    function exportReservations(): BinaryFileResponse {
        $selected_ids = $this->getSelected();
        $this->clearSelected();

        // write the excel
        $excel = SimpleExcelWriter::create("event-reservations.xlsx");

        EventDay::query()
                ->whereIn(
                    "prefixed_id",
                    $selected_ids,
                )
                ->with(
                    "reservations",
                    fn(HasMany $builder) => $builder->select(
                        [
                            "reservations.user_id",
                        ],
                    ),
                )
                ->with(
                    "reservations.user",
                    fn(BelongsTo $builder) => $builder->select(
                        [
                            "users.id",
                            "users.prefixed_id",
                            "users.name",
                            "users.email",
                        ],
                    ),
                )
                ->select(
                    [
                        "event_days.id",
                        "event_days.prefixed_id",
                        "event_days.nickname",
                        "event_days.max_reservation",
                    ],
                )
                ->withCount("reservations")
                ->chunk(
                    100,
                    function(Collection $event_days) use ($excel) {
                        foreach ($event_days as $event_day) {
                            /** @var EventDay $event_day */
                            foreach ($event_day->reservations as $reservation) {
                                /** @var Reservation $reservation */
                                $excel->addRow(
                                    [
                                        "Event identifier"       => $event_day->prefixed_id,
                                        "Event nickname"         => $event_day->nickname,
                                        "Event max reservations" => $event_day->max_reservation,
                                        "Event reservations"     => $event_day->reservations_count,
                                        "Reservation identifier" => $reservation->prefixed_id,
                                        "User identifier"        => $reservation->user->prefixed_id,
                                        "User full name"         => $reservation->user->name,
                                        "User email"             => Str::mask(
                                            $reservation->user->email,
                                            "*",
                                            3,
                                        ),
                                    ],
                                );
                            }
                        }
                    },
                );

        $excel->close();

        return response()->download($excel->getPath());
    }
}
