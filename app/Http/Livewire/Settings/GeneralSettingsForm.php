<?php

namespace App\Http\Livewire\Settings;

use App\Facade\LivewireBannerServiceFacade;
use App\Service\SettingsService;
use App\Settings\GeneralSettings;
use App\Trait\HasComponentChecksum;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class GeneralSettingsForm extends Component {
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

        DB::transaction(
            function() use ($settings_service, $data) {
                $settings_service->setSiteName($data["site_name"]);
                $settings_service->setRegistrationStartingTime(make_from_format($data["registration_available_from"]));
                $settings_service->setRegistrationEndingTime(make_from_format($data["registration_available_to"]));
            },
        );

        LivewireBannerServiceFacade::from($this)
                                   ->success("General settings successfully saved!");
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
        ];
    }
}
