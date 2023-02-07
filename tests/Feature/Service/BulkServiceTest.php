<?php

namespace Tests\Feature\Service;

use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\PendingUploadInProgressException;
use App\Jobs\BulkImportUserJob;
use App\Models\User;
use App\Service\BulkService;
use App\Service\SettingsService;
use App\Settings\GeneralSettings;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Bus;
use Tests\TestCase;

class BulkServiceTest extends TestCase {
    public
    function test_can_create_bulk_users(): void {
        User::query()->delete();

        app(BulkService::class)->bulkCreateUser(base_path("tests/Assets/bulk_creation_user.csv"));

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

    public
    function test_can_verify_and_dispatch(): void {
        Bus::fake();

        $file = new File(
            "test",
            fopen(
                base_path("tests/Assets/bulk_creation_user.csv"),
                "r",
            )
        );

        app(BulkService::class)->verifyAndDispatch($file);

        $this->assertTrue(app(GeneralSettings::class)->is_import_in_progress);
        Bus::assertDispatched(BulkImportUserJob::class);
    }

    public
    function test_cannot_process_uploaded_file_without_correct_headers(): void {
        $this->expectException(MissingOrInvalidHeadersException::class);
        $file = new File(
            "test",
            fopen(
                base_path("tests/Assets/bulk_creation_user1.csv"),
                "a+",
            )
        );

        app(BulkService::class)->verifyAndDispatch($file);
        unlink(base_path("tests/Assets/bulk_creation_user1.csv"));
    }

    public
    function test_cannot_start_processing_new_upload_if_one_is_in_progress(): void {
        app(SettingsService::class)->setIsImportInProgress(true);

        $this->expectException(PendingUploadInProgressException::class);
        app(BulkService::class)->verifyAndDispatch(
            UploadedFile::fake()->create("test"),
        );
    }
}
