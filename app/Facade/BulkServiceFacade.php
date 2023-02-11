<?php

namespace App\Facade;

use App\Service\BulkService;
use Illuminate\Support\Facades\Facade;

class BulkServiceFacade extends Facade {
	/**
	 * Get the registered name of the component.
	 */
	protected static
	function getFacadeAccessor(): string {
		return BulkService::class;
	}
}
