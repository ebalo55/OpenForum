<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords {
    protected static string $resource = UserResource::class;

    protected
    function getActions(): array {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected
    function getTableQuery(): Builder {
        return User::isNotSuperAdmin()->withCount("reservations");
    }
}
