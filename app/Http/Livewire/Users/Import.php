<?php

namespace App\Http\Livewire\Users;

use App\Facade\BulkServiceFacade;
use App\Facade\LivewireBannerServiceFacade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Throwable;

class Import extends Component {
    use WithFileUploads;

    public $users_import_file;

    public
    function import(): void {
        $this->validate();

        /** @var TemporaryUploadedFile $users_import_file */
        $users_import_file = $this->users_import_file;

        try {
            BulkServiceFacade::verifyAndDispatch($users_import_file);

            LivewireBannerServiceFacade::from($this)->success(
                "Import process successfully started processing in background!",
            );
        }
        catch (Throwable $missing_or_invalid_headers_exception) {
            LivewireBannerServiceFacade::from($this)->error(
                $missing_or_invalid_headers_exception->getMessage(),
            );
        }
    }

    public
    function render(): View|Factory|Application {
        return view('livewire.users.import');
    }

    /**
     * Apply realtime validation only to the changed property
     *
     * @param $propertyName
     *
     * @return void
     */
    public
    function updated(
        $propertyName,
    ): void {
        $this->validateOnly($propertyName);
    }

    protected
    function rules(): array {
        return [
            "users_import_file" => [
                "required",
                "file",
                "max:51200",
                "mimes:xlsx,csv",
            ],
        ];
    }
}
