<?php

namespace App\Queries;

use App\Contracts\QueryContract;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;

class GetDBSizeQuery implements QueryContract {
    /**
     * Handle the query and apply the necessary restrictions returning the modified instance of the query
     *
     * @param Builder|EloquentBuilder $query
     * @param mixed ...$parameters
     *
     * @return Builder|EloquentBuilder
     */
    public static
    function handle(
        EloquentBuilder|Builder $query,
        mixed                   ...$parameters
    ): Builder|EloquentBuilder {
        return config("database.default") === "pgsql"
            ? $query
                ->selectRaw(
                    "pg_size_pretty(pg_database_size('" .
                    config("database.connections." . config("database.default") . ".database")
                    . "')) as db_size",
                )
            : $query->selectRaw("'unsupported operation' as db_size");
    }
}
