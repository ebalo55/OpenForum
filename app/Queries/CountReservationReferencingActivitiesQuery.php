<?php

namespace App\Queries;

use App\Contracts\QueryContract;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;

class CountReservationReferencingActivitiesQuery implements QueryContract {
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
			->selectRaw(
				"count(*)",
			)
			->from(
				"reservations",
			)
			->whereRaw(
				"reservations.activity_id = activities.id",
			);
	}
}
