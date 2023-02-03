<?php

namespace App\Jobs;

use App\Service\BulkService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BulkImportUserJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public
    function handle(): void {
        app(BulkService::class)->bulkCreateUser($this->filename);
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public
    function __construct(
        private readonly string $filename,
    ) {}
}
