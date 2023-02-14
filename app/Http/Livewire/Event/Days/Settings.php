<?php

namespace App\Http\Livewire\Event\Days;

use App\Facade\LivewireBannerServiceFacade;
use App\Models\EventDay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Settings extends Component {
    public EventDay $event_day;

    public
    function render(): View|Factory|Application {
        return view('livewire.event.days.settings');
    }

    public
    function resetForm() {
        $this->event_day->refresh();
    }

    public
    function rules(): array {
        return [
            "event_day.nickname"        => "required|string|max:255|min:3",
            "event_day.max_reservation" => "required|integer|max:2000000000|min:0",
        ];
    }

    public
    function save() {
        $this->validate();

        $this->event_day->save();

        LivewireBannerServiceFacade::from($this)
                                   ->success("Event settings modified successfully!");
    }
}
