<?php

namespace App\Filament\Resources\EventDayResource\Pages;

use App\Filament\Resources\EventDayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventDays extends ListRecords {
    protected static string $resource = EventDayResource::class;

    protected
    function getActions(): array {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
