<?php

namespace App\Http\Livewire\Event\Activities;

use App\Enum\DatetimeFormatVariation;
use App\Facade\LivewireBannerServiceFacade;
use App\Facade\LivewireScrollServiceFacade;
use App\Models\Activity;
use App\Models\EventDay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Editor extends Component {
    public Activity $activity;
    public string $activity_ending_at = "";
    public string $activity_starting_at = "";
    public EventDay $event_day;

    public
    function mount() {
        $this->resetForm();
    }

    public
    function render(): View|Factory|Application {
        return view('livewire.event.activities.editor');
    }

    public
    function resetForm(): void {
        $this->activity->refresh();

        $this->activity_starting_at = $this->activity->starting_at ? format_time($this->activity->starting_at) : "";
        $this->activity_ending_at = $this->activity->ending_at ? format_time($this->activity->ending_at) : "";
    }

    public
    function rules(): array {
        return [
            "activity.title"           => "required|string|max:65535|min:3",
            "activity.markup"          => "required|string",
            "activity_starting_at"     => "required|date_format:" . config("student-forum.time_format"),
            "activity_ending_at"       => "required|date_format:" . config("student-forum.time_format"),
            "activity.max_reservation" => "required|integer|min:0|max:2000000000",
        ];
    }

    public
    function save(): void {
        $this->validate();

        $this->activity->starting_at = make_from_format(
            $this->activity_starting_at,
            DatetimeFormatVariation::TIME,
        );
        $this->activity->ending_at = make_from_format(
            $this->activity_ending_at,
            DatetimeFormatVariation::TIME,
        );
        $this->activity->event_day_id = $this->event_day->id;
        $this->activity->save();

        LivewireBannerServiceFacade::from($this)
                                   ->success("Activity updated successfully!");

        LivewireScrollServiceFacade::from($this)
                                   ->scrollToTop();
    }
}
