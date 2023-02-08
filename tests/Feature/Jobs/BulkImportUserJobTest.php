<?php

namespace Tests\Feature\Jobs;

use App\Jobs\BulkImportUserJob;
use App\Models\User;
use App\Settings\GeneralSettings;
use Tests\TestCase;

class BulkImportUserJobTest extends TestCase {
    public
    function test_bulk_user_import_creates_users(): void {
        User::query()->delete();

        $job = new BulkImportUserJob(base_path("tests/Assets/bulk_creation_user.csv"));
        $job->handle();

        $this->assertCount(
            3,
            User::all(),
        );
        $this->assertEquals(
            3,
            app(GeneralSettings::class)->import_errors,
        );
        $this->assertFalse(file_exists(base_path("tests/Assets/bulk_creation_user.csv")));

        // this ensures the file gets re-created from the backup in order for further testing to pass
        $this->assertTrue(
            copy(
                base_path("tests/Assets/bulk_creation_user.csv.bak"),
                base_path("tests/Assets/bulk_creation_user.csv"),
            ),
        );
    }
}
