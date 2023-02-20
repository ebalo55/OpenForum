<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class FixNamespaceOnModuleCommand {
    /**
     * Handle the event.
     */
    public
    function handle(
        CommandFinished $event,
    ): void {
        if (Str::containsAll(
            $event->command,
            ["module:", "make-"],
        )) {
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
