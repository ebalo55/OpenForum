<?php

namespace App\Http\Livewire\Event\Days;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component {
    public
    function render(): View|Factory|Application {
        return view('livewire.event.days.index');
    }
}
