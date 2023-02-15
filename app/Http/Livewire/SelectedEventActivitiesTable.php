<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use App\Queries\HasNoReservationReferencingActivitiesQuery;
use App\Queries\HasReservationReferencingActivitiesQuery;
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
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SelectedEventActivitiesTable extends DataTableComponent {
    public array $bulkActions = [
        "exportFullActivity" => "Export full activities",
        "exportReservations" => "Export reservations",
    ];
    public EventDay $event_day;

    public
    function builder(): Builder {
        return $this->event_day->activities()
                               ->getQuery()
                               ->select(["id", "prefixed_id", "title", "starting_at", "ending_at", "max_reservation"])
                               ->withCount("reservations")
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
                "Title",
                "title",
            )
                      ->title(fn(Activity $row) => $row->title)
                      ->location(
                          fn(Activity $row) => route(
                              "events.activities.edit",
                              ["event" => $this->event_day->prefixed_id, "activity" => $row->prefixed_id],
                          ),
                      )
                      ->attributes(
                          fn(Activity $row) => [
                              "class" => "text-blue-600 underline",
                          ],
                      )
                      ->searchable()
                      ->sortable(),
            Column::make(
                "Starting at",
                "starting_at",
            )
                  ->format(fn(Carbon $carbon) => format_time($carbon))
                  ->searchable()
                  ->sortable(),
            Column::make(
                "Ending at",
                "starting_at",
            )
                  ->format(fn(Carbon $carbon) => format_time($carbon))
                  ->searchable()
                  ->sortable(),
            Column::make(
                "Max reservation",
                "max_reservation",
            )
                  ->sortable(),
            Column::make(
                "Reservation",
                "id",
            )
                  ->format(
                      fn(int $id) => number_format(
                          DB::table("reservations")->where(
                              "reservations.activity_id",
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
             ->setEmptyMessage("No activity found, create a new one now!")
             ->setSingleSortingDisabled()
             ->setConfigurableAreas(
                 [
                     "toolbar-right-start" => [
                         "components.datatable.button",
                         [
                             "event" => $this->event_day,
                             "url"   => route(
                                 "events.activities.create",
                                 ["event" => $this->event_day],
                             ),
                         ],
                     ],
                 ],
             );
    }

    public
    function filters(): array {
        return [
            SelectFilter::make("Has reservations")
                        ->options(
                            [
                                ""    => "All",
                                "yes" => "Yes",
                                "no"  => "No",
                            ],
                        )
                        ->filter(
                            function(Builder $builder, string $value) {
                                switch ($value) {
                                    case "yes":
	                                    HasReservationReferencingActivitiesQuery::handle($builder);
                                        break;
                                    case "no":
	                                    HasNoReservationReferencingActivitiesQuery::handle($builder);
                                        break;
                                }
                            },
                        ),
        ];
    }

    public
    function exportFullActivity(): BinaryFileResponse {
        $selected_ids = $this->getSelected();
        $this->clearSelected();

        // write the excel
        $excel = SimpleExcelWriter::create("activities.xlsx")->addRows(
            Activity::query()
                    ->whereIn(
                        "prefixed_id",
                        $selected_ids,
                    )
                    ->select(
                        [
                            "id",
                            "prefixed_id",
                            "title",
                            "starting_at",
                            "ending_at",
                            "markup",
                            "max_reservation",
                        ],
                    )
                    ->withCount(["reservations"])
                // create a map with the same column name as the data table and format the data
                    ->chunkMap(
                    function(Activity $activity) {
                        return [
                            "Identifier"       => $activity->prefixed_id,
                            "Title"            => $activity->title,
                            "Starting at"      => format_time($activity->starting_at),
                            "Ending at"        => format_time($activity->ending_at),
                            "Max reservations" => $activity->max_reservation,
                            "Reservations"     => $activity->reservations_count,
                            "Markup"           => $activity->markup,
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
        $excel = SimpleExcelWriter::create("activity-reservations.xlsx");

        Activity::query()
                ->whereIn(
                    "prefixed_id",
                    $selected_ids,
                )
                ->with(
	                "reservations",
	                fn(HasMany $builder) => $builder->select(
		                [
			                "reservations.id",
			                "reservations.prefixed_id",
			                "reservations.user_id",
		                ],
	                )->orderBy("reservations.id"),
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
	                )->orderBy("users.id"),
                )
                ->select(
	                [
		                "activities.id",
		                "activities.prefixed_id",
		                "activities.title",
		                "activities.max_reservation",
	                ],
                )
                ->withCount("reservations")
                ->groupBy("activities.id")
                ->orderBy("activities.id")
                ->chunk(
                    100,
                    function(Collection $activities) use ($excel) {
                        foreach ($activities as $activity) {
                            /** @var Activity $activity */
                            foreach ($activity->reservations as $reservation) {
                                /** @var Reservation $reservation */
                                $excel->addRow(
                                    [
                                        "Activity identifier"       => $activity->prefixed_id,
                                        "Activity title"            => $activity->title,
                                        "Activity max reservations" => $activity->max_reservation,
                                        "Activity reservations"     => $activity->reservations_count,
                                        "Reservation identifier"    => $reservation->prefixed_id,
                                        "User identifier"           => $reservation->user->prefixed_id,
                                        "User full name"            => $reservation->user->name,
                                        "User email"                => Str::mask(
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
