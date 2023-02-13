<?php

namespace Tests\Feature\Livewire\Users;

use App\Http\Livewire\Users\Import;
use App\Http\Livewire\UserTable;
use App\Jobs\BulkImportUserJob;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Bus;
use Livewire\Livewire;
use Tests\TestCase;

class ImportTest extends TestCase {
    public
    function test_can_call_import() {
        Bus::fake();

        $component = Livewire::test(Import::class);

        $file = new File(
            "test",
            fopen(
                base_path("tests/Assets/bulk_creation_user.csv"),
                "r",
            )
        );
        $file->mimeType("text/csv");

        $component->set(
            "users_import_file",
            $file,
        )->call("import");

        $component->assertDispatchedBrowserEvent("banner.success");
        Bus::assertDispatched(BulkImportUserJob::class);
    }

    public
    function test_cannot_call_import_with_invalid_csv_data() {
        Bus::fake();

        $component = Livewire::test(Import::class);

        $file = new File(
            "test",
            fopen(
                base_path("tests/Assets/bulk_creation_user1.csv"),
                "a+",
            )
        );
        $file->mimeType("text/csv");

        $component->set(
            "users_import_file",
            $file,
        )->call("import");

        $component->assertNotDispatchedBrowserEvent("banner.success");
        $component->assertDispatchedBrowserEvent("banner.error");
    }

    public
    function test_the_component_can_render() {
        $component = Livewire::test(UserTable::class);

        $component->assertStatus(200);
    }
}
