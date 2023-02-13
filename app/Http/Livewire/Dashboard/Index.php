<?php

namespace App\Http\Livewire\Dashboard;

use App\Facade\LivewireBannerServiceFacade;
use App\Models\User;
use App\Settings\GeneralSettings;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\Redirector;

/**
 * @property-read string $siteName
 * @property-read string $registrationEnabledFrom
 * @property-read string $registrationEnabledTo
 * @property-read int $importedUsers
 * @property-read int $importErrors
 * @property-read bool $isImporting
 * @property-read array{title: string, content: string|bool|int, full: bool, property_name: string,
 *                react_to_import:bool}[] $cardsData
 */
class Index extends Component {
    public
    function checkIfImporting(): void {
        if ($this->getIsImportingProperty()) {
            LivewireBannerServiceFacade::from($this)
                                       ->uploadInProgress(
                                           "Import in progress, contact addition disabled.",
                                           LivewireBannerServiceFacade::UNLIMITED_TIMEOUT(),
                                       );
        }
    }

    /**
     * Creates the computed property containing all the data used in cards display
     *
     * @return array{
     * title: string,
     * content: string|bool|int,
     * full: bool,
     * property_name: string,
     * react_to_import: bool
     * }[]
     */
    public
    function getCardsDataProperty(): array {
        return [
            [
                "title"         => "Site name",
                "content"       => $this->getSiteNameProperty(),
                "full"          => true,
                "property_name" => "siteName",
            ],
            [
                "title"         => "Registration available from",
                "content"       => $this->getRegistrationEnabledFromProperty(),
                "property_name" => "registrationEnabledFrom",
            ],
            [
                "title"         => "Registration available to",
                "content"       => $this->getRegistrationEnabledToProperty(),
                "property_name" => "registrationEnabledTo",
            ],
            [
                "title"           => "Imported users",
                "content"         => $this->getImportedUsersProperty(),
                "property_name"   => "importedUsers",
                "react_to_import" => true,
            ],
            [
                "title"           => "Latest import errors",
                "content"         => $this->getImportErrorsProperty(),
                "property_name"   => "importErrors",
                "react_to_import" => true,
            ],
        ];
    }

    /**
     * Creates the computed property referring the number of import errors during the last run
     *
     * @return int
     */
    public
    function getImportErrorsProperty(): int {
        return app(GeneralSettings::class)->import_errors;
    }

    /**
     * Creates the computed property counting the number of imported users
     *
     * @return int
     */
    public
    function getImportedUsersProperty(): int {
        return User::query()->count("id") - 1;
    }

    /**
     * Creates the computed property referring the import in progress status
     *
     * @return bool
     */
    public
    function getIsImportingProperty(): bool {
        return app(GeneralSettings::class)->is_import_in_progress;
    }

    /**
     * Creates the computed property referring the registration starting time
     *
     * @return string
     */
    public
    function getRegistrationEnabledFromProperty(): string {
        return app(GeneralSettings::class)->registration_enabled_from
            ? format(
                app(GeneralSettings::class)->registration_enabled_from,
            )
            : "Registration starting time not defined";
    }

    /**
     * Creates the computed property referring the registration ending time
     *
     * @return string
     */
    public
    function getRegistrationEnabledToProperty(): string {
        return app(GeneralSettings::class)->registration_enabled_to
            ? format(
                app(GeneralSettings::class)->registration_enabled_to,
            )
            : "Registration ending time not defined";
    }

    /**
     * Creates the computed property referring the site name
     *
     * @return string
     */
    public
    function getSiteNameProperty(): string {
        return app(GeneralSettings::class)->site_name;
    }

    /**
     * Redirect to the edit page for the general settings
     *
     * @return RedirectResponse|Redirector
     */
    public
    function redirectToEdit(): RedirectResponse|Redirector {
        return redirect()->route("settings.editor");
    }

    public
    function render(): Factory|View|Application {
        return view('livewire.dashboard.index');
    }

    /**
     * Checks whether the provided value array should react to data import updating its value via polling
     *
     * @param array $value
     *
     * @return bool
     */
    public
    function shouldReactToImport(
        array $value,
    ): bool {
        return isset($value["react_to_import"]) && $value["react_to_import"] && isset($value["property_name"]);
    }

    /**
     * Checks whether the provided value array should span for the whole grid
     *
     * @param array $value
     *
     * @return bool
     */
    public
    function shouldSpanFullGrid(
        array $value,
    ): bool {
        return isset($value["full"]) && $value["full"];
    }
}
