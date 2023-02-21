<?php

namespace App\Queries;

use App\Contracts\QueryContract;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;

class DateOrderedReservationsQuery implements QueryContract {
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
        return $query
            ->join(
                "event_days",
                "event_days.id",
                "=",
                "reservations.event_day_id",
            )
            ->with(["eventDay", "activity"])
            ->select(["event_days.date", "reservations.*"])
            ->orderBy("event_days.date")
            ->groupBy(
                "reservations.id",
                "reservations.event_day_id",
                "event_days.date",
            );
    }
}
