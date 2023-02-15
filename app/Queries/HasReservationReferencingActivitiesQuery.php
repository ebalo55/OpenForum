<?php

namespace App\Queries;

use App\Contracts\QueryContract;
use App\Facade\QueryServiceFacade;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;

class HasReservationReferencingActivitiesQuery implements QueryContract {
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
		                        ...$parameters
	): Builder|EloquentBuilder {
		return $query->where(
			fn(
				Builder $builder,
			) => CountReservationReferencingActivitiesQuery::handle($builder),
			">",
			0,
		);
	}
}
