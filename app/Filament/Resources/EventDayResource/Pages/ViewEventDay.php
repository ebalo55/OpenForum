<?php

namespace App\Filament\Resources\EventDayResource\Pages;

use App\Filament\Resources\EventDayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEventDay extends ViewRecord {
    protected static string $resource = EventDayResource::class;

    protected
    function getActions(): array {
        return [
            Actions\EditAction::make(),
        ];
    }
}
