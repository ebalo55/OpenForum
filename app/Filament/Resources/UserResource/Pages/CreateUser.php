<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Facade\BulkServiceFacade;
use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Exceptions\Halt;
use Illuminate\Http\UploadedFile;
use Throwable;

class CreateUser extends CreateRecord {
    protected static string $resource = UserResource::class;

    public
    function create(
        bool $another = false,
    ): void {
        $this->authorizeAccess();

        try {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeCreate($data);

            $this->callHook('beforeCreate');

            // insert modified code here
            BulkServiceFacade::verifyAndDispatch(
                new UploadedFile(
                    storage_path("app/" . $data["users_import_file"]),
                    $data["users_import_file"]
                ),
            );

            $this->callHook('afterCreate');
        }
        catch (Halt $exception) {
            return;
        }
        catch (Throwable $other_exception) {
            Notification::make()
                        ->status("danger")
                        ->icon("isax-broken.danger")
                        ->title("Something went wrong during users import")
                        ->body($other_exception->getMessage())
                        ->sendToDatabase(auth()->user())
                        ->send();
            return;
        }

        $this->getCreatedNotification()?->send();
    }

    protected
    function getCreateFormAction(): Action {
        return Action::make('create')
                     ->label("Start import")
                     ->submit('create')
                     ->keyBindings(['mod+s']);
    }

    protected
    function getFormActions(): array {
        return [
            $this->getCreateFormAction(),
        ];
    }

    protected
    function getFormSchema(): array {
        return [
            Card::make(
                [
                    Section::make("Import users")
                           ->description(view("components.fragments.sections.descriptions.create-user"))
                           ->aside()
                           ->schema(
                               [
                                   FileUpload::make('users_import_file')
                                             ->acceptedFileTypes(
                                                 [
                                                     "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                                                     "application/csv",
                                                     "text/csv",
                                                     "text/plain",
                                                 ],
                                             )
                                             ->required()
                                             ->panelAspectRatio("2:1")
                                             ->panelLayout('integrated')
                                             ->maxSize(51200)
                                             ->disk("local"),
                               ],
                           ),
                ],
            ),
        ];
    }
}
