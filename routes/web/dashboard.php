<?php

use App\Http\Livewire\Dashboard\Index;

Route::get(
    '/dashboard',
    Index::class,
)->name('dashboard');
