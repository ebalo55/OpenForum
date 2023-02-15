<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;

interface QueryContract {
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
		Builder|EloquentBuilder $query,
		mixed                   ...$parameters
	): Builder|EloquentBuilder;
}
