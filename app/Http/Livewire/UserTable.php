<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
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
                   ->select(["id", "name", "email", "created_at"]); // Select some things
    }

    public
    function columns(): array {
        return [
            Column::make(
                "Identifier",
                "id",
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
        $this->setPrimaryKey('id')->setEmptyMessage("No user found")->setSingleSortingDisabled();
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
                        "id",
                        $selected_ids_override,
                    ),
                )->select(
                    [
                        "id",
                        "name",
                        "email",
                        "created_at",
                    ],
                )
                // create a map with the same column name as the data table and format the data
                ->chunkMap(
                    function(User $user) {
                        return [
                            "Identifier" => $user->id,
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
