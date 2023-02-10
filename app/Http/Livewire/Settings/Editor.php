<?php

namespace App\Http\Livewire\Settings;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Editor extends Component {
    public
    function render(): Factory|View|Application {
        return view('livewire.settings.editor');
    }
}
