<?php

namespace App\Service;

use Illuminate\Database\Query\Builder;

class QueryService extends BaseService {
    /**
     * Count the number of reservations related to an activity using a sub-query
     *
     * @param Builder|\Illuminate\Database\Eloquent\Builder $builder
     *
     * @return Builder|\Illuminate\Database\Eloquent\Builder
     */
    public
    function countReservationFromActivities(
        Builder|\Illuminate\Database\Eloquent\Builder $builder,
    ): Builder|\Illuminate\Database\Eloquent\Builder {
        return $builder
            ->selectRaw(
                "count(*)",
            )
            ->from(
                "reservations",
            )
            ->whereRaw(
                "reservations.event_day_id = activities.event_day_id",
            );
    }
}
