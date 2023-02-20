<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Spatie\SimpleExcel\SimpleExcelWriter;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserTable extends DataTableComponent {
    public array $bulkActions = [
	    "export"    => "Export Selected",
	    "exportAll" => "Export All",
    ];

    public
    function builder(): Builder {
        return User::query()
                   ->whereNot(
                       "name",
                       "ebalo",
                   )
                   ->select(["prefixed_id", "name", "email", "created_at"]); // Select some things
    }

    public
    function columns(): array {
        return [
	        LinkColumn::make(
		        "Identifier",
		        "prefixed_id",
	        )
	                  ->title(
		                  fn(User $row) => Str::limit(
			                  $row->prefixed_id,
			                  20,
		                  ),
	                  )
	                  ->location(
		                  fn(User $row) => route(
			                  "user.details",
			                  ["user" => $row],
		                  ),
	                  )
	                  ->attributes(
		                  fn($row) => [
			                  "class" => "text-blue-500 underline hover:text-blue-600 transition-all duration-300",
		                  ],
	                  )
	                  ->sortable(),

	        Column::make(
		        "Full name",
		        "name",
	        )->searchable()->sortable(),
	        Column::make(
		        "Email",
		        "email",
	        )
	              ->format(
                      fn(string|null $string) => Str::mask(
                          $string ?? "",
                          "*",
                          3,
                      ),
                  ),
            Column::make(
                "Created at",
                "created_at",
            )
                  ->format(fn(Carbon $carbon) => format($carbon))
                  ->sortable(),
        ];
    }

    public
    function configure(): void {
        $this->setPrimaryKey('prefixed_id')->setEmptyMessage("No user found")->setSingleSortingDisabled();
    }

    public
    function export(): BinaryFileResponse {
        // export only the selected users
        $users = $this->getSelected();

        return $this->exportAll($users);
    }

    /**
     * @param array|null $selected_ids_override
     *
     * @return BinaryFileResponse
     */
    public
    function exportAll(
        ?array $selected_ids_override = null,
    ): BinaryFileResponse {
        $this->clearSelected();

        // write the excel
        $excel = SimpleExcelWriter::create("users.xlsx")->addRows(
        // never select ebalo
            User::whereNot(
                "name",
                "ebalo",
            )
                // if the selected ids override is defined then this call must be restricted only to the overridden ids
                ->when(
                    fn() => !is_null($selected_ids_override),
                    fn(Builder $builder) => $builder->whereIn(
                        "prefixed_id",
                        $selected_ids_override,
                    ),
                )->select(
                    [
                        "prefixed_id",
                        "name",
                        "email",
                        "created_at",
                    ],
                )
                // create a map with the same column name as the data table and format the data
                ->chunkMap(
                    function(User $user) {
                        return [
                            "Identifier" => $user->prefixed_id,
                            "Full name"  => $user->name,
                            "Email"      => Str::mask(
                                $user->email ?? "",
                                "*",
                                3,
                            ),
                            "Created at" => format($user->created_at),
                        ];
                    },
                ),
        );

        $excel->close();

        return response()->download($excel->getPath());
    }
}
