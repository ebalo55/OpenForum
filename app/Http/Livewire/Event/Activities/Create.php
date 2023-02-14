<?php

namespace App\Http\Livewire\Event\Activities;

use App\Models\Activity;
use App\Models\EventDay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component {
    public ?Activity $activity = null;
    public EventDay $event;

    public
    function mount(): void {
        $this->activity = new Activity();
    }

    public
    function render(): View|Factory|Application {
        return view('livewire.event.activities.create');
    }
}
