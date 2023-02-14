<?php

namespace App\Http\Livewire\Event\Activities;

use App\Models\EventDay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component {
    public EventDay $event;

    public
    function render(): View|Factory|Application {
        return view('livewire.event.activities.index');
    }
}
