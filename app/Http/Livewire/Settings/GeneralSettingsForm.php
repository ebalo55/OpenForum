<?php

namespace App\Http\Livewire\Settings;

use App\Enum\DatetimeFormatVariation;
use App\Facade\EventDayServiceFacade;
use App\Facade\LivewireBannerServiceFacade;
use App\Facade\LivewireScrollServiceFacade;
use App\Service\SettingsService;
use App\Settings\GeneralSettings;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Throwable;

class GeneralSettingsForm extends Component {
    public string $forum_days;
    public string $locations;
    public string $registration_available_from;
    public string $registration_available_to;
    public string $site_name;
    protected $validationAttributes = [
        "registration_available_from" => "registration starting date",
        "registration_available_to"   => "registration ending date",
    ];

    public
    function mount() {
        $this->resetForm();
    }

    public
    function render(): Factory|View|Application {
        return view('livewire.settings.general-settings-form');
    }

    /**
     * Restore the form data to their default values
     *
     * @return void
     */
    public
    function resetForm(): void {
        $this->registration_available_from = format(app(GeneralSettings::class)->registration_enabled_from ?? now());
        $this->registration_available_to = format(
            app(GeneralSettings::class)->registration_enabled_to ?? now()->addDay(),
        );
        $this->site_name = app(GeneralSettings::class)->site_name;
        $this->forum_days = app(GeneralSettings::class)->events_starting_day &&
                            app(GeneralSettings::class)->events_ending_day
            ? format_date(app(GeneralSettings::class)->events_starting_day) .
              " to " .
              format_date(app(GeneralSettings::class)->events_ending_day)
            : "";
        $this->locations = Arr::join(
            app(GeneralSettings::class)->event_locations,
            "\n",
        );
    }

    /**
     * Save the updated values
     *
     * @param SettingsService $settings_service
     *
     * @return void
     * @throws Throwable
     */
    public
    function save(
        SettingsService $settings_service,
    ): void {
        $data = $this->validate();

        // after the first validation check split the date range and validate the single date values
        $this->revalidateDateFragments(
            $data,
            $this->forum_days,
        );

        $this->revalidateLocationString(
            $data,
            $this->locations,
        );

        DB::transaction(
            function() use ($settings_service, $data) {
                $settings_service->setSiteName($data["site_name"]);

                $settings_service->setRegistrationStartingTime(make_from_format($data["registration_available_from"]));
                $settings_service->setRegistrationEndingTime(make_from_format($data["registration_available_to"]));

                // check if critical properties should be updated or not
                if (
                    format_date(app(GeneralSettings::class)->events_starting_day ?? now()) !== $data["starting_date"] ||
                    format_date(app(GeneralSettings::class)->events_ending_day ?? now()) !== $data["ending_date"] ||
                    app(GeneralSettings::class)->event_locations !== $data["locations"]
                ) {
                    $settings_service->setEventsStartingDay(
                        make_from_format(
                            $data["starting_date"],
                            DatetimeFormatVariation::DATE,
                        ),
                    );

                    $settings_service->setEventsEndingDay(
                        make_from_format(
                            $data["ending_date"],
                            DatetimeFormatVariation::DATE,
                        ),
                    );

                    $settings_service->setEventLocations(
                        $data["locations"],
                    );

                    EventDayServiceFacade::sync();
                }
            },
        );

        LivewireBannerServiceFacade::from($this)
                                   ->success("General settings successfully saved!");
        LivewireScrollServiceFacade::from($this)
                                   ->scrollToTop();
    }

    /**
     * Apply realtime validation only to the changed property
     *
     * @param $propertyName
     *
     * @return void
     */
    public
    function updated(
        $propertyName,
    ): void {
        $this->validateOnly($propertyName);
    }

    /**
     * Run a second round of validation against the date fragments of the provided date range
     *
     * @param array $savable_data
     * @param string $date_range
     *
     * @return void
     */
    protected
    function revalidateDateFragments(
        array  &$savable_data,
        string $date_range,
    ): void {
        [$starting_date, $ending_date] = explode(
            " to ",
            $date_range,
        );

        Validator::make(
            [
                "starting_date" => $starting_date,
                "ending_date"   => $ending_date,
            ],
            [
                "starting_date" => "required|string|date_format:" . config("student-forum.date_format"),
                "ending_date"   => "required|string|date_format:" . config("student-forum.date_format"),
            ],
        )->validate();

        $savable_data["starting_date"] = $starting_date;
        $savable_data["ending_date"] = $ending_date;
    }

    /**
     * Run a second set of validation rules against the location string
     *
     * @param array $savable_data
     * @param string $location
     *
     * @return void
     */
    protected
    function revalidateLocationString(
        array  &$savable_data,
        string $location,
    ): void {
        $locations = explode(
            "\n",
            $location,
        );

        Validator::make(
            [
                "locations" => $locations,
            ],
            [
                "locations"   => "required|array|min:1",
                "locations.*" => "string|min:3|max:255",
            ],
        )->validate();

        $savable_data["locations"] = $locations;
    }

    protected
    function rules(): array {
        return [
            "registration_available_from" => [
                "required",
                "date_format:" . config("student-forum.datetime_format"),
                "after:now",
            ],
            "registration_available_to"   => [
                "required",
                "date_format:" . config("student-forum.datetime_format"),
                "after:registration_available_from",
            ],
            "site_name"                   => "required|min:4|max:255",
            // accepts only format: day/month/year to day/month/year
            "forum_days"                  => "required|string|regex:/^\d{2}\/\d{2}\/\d{4}\sto\s\d{2}\/\d{2}\/\d{4}$/",
            "locations"                   => "required|string|min:1",
        ];
    }
}
