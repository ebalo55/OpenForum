<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class FixNamespaceOnModuleCommand {
    /**
     * Handle the event.
     *
     * @codeCoverageIgnore
     */
    public
    function handle(
        CommandFinished $event,
    ): void {
	    // if a command contains a module generation command fix namespaces after the command completion
	    if (Str::contains(
		    $event->command,
		    ["module:make-"],
	    )) {
		    // pass the output buffer to make the command visible
		    Artisan::call(
			                  "module:namespace-fix",
			    outputBuffer: $event->output,
		    );
	    }
    }

    /**
     * Create the event listener.
     */
    public
    function __construct() {
        //
    }
}
