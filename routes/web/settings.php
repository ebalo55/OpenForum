<?php

use App\Enum\Permissions\Classes\Event as EventPermissions;
use App\Http\Livewire\Settings\Editor;

Route::middleware(
    [
        "can:" . EventPermissions::UPDATE(),
    ],
)->get(
    '/settings',
    Editor::class,
)->name('settings.editor');
