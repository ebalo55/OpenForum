<?php

namespace App\Filament\Resources\EventDayResource\Pages;

use App\Filament\Resources\EventDayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventDay extends EditRecord {
    protected static string $resource = EventDayResource::class;

    protected
    function getActions(): array {
        return [
            Actions\ViewAction::make(),
        ];
    }
}
