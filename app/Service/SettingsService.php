<?php

namespace App\Service;

use App\Enum\PasswordGenerationRules;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;

final
class SettingsService extends BaseService {
    /**
     * Globally increase the number of import errors
     *
     * @return int
     */
    public
    function increaseImportErrors(): int {
        $this->general_settings->import_errors++;
        $this->general_settings->save();
        return $this->general_settings->import_errors;
    }

    /**
     * Globally define the new event locations
     *
     * @param string[] $locations
     *
     * @return string[]
     */
    public
    function setEventLocations(
        array $locations,
    ): array {
        return tap(
            $locations,
            function(array $locations) {
                $this->general_settings->event_locations = $locations;
                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new events ending time
     *
     * @param Carbon $events_ending_time
     *
     * @return Carbon
     */
    public
    function setEventsEndingDay(
        Carbon $events_ending_time,
    ): Carbon {
        return tap(
            $events_ending_time,
            function(Carbon $events_ending_time) {
                $this->general_settings->events_ending_day = $events_ending_time;
                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new events starting time
     *
     * @param Carbon $events_starting_time
     *
     * @return Carbon
     */
    public
    function setEventsStartingDay(
        Carbon $events_starting_time,
    ): Carbon {
        return tap(
            $events_starting_time,
            function(Carbon $events_starting_time) {
                $this->general_settings->events_starting_day = $events_starting_time;
                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new site name
     *
     * @param bool $is_in_progress
     *
     * @return bool
     */
    public
    function setIsImportInProgress(
        bool $is_in_progress,
    ): bool {
        return tap(
            $is_in_progress,
            function(bool $is_in_progress) {
                $this->general_settings->is_import_in_progress = $is_in_progress;

                // reset the number of errors if a new import is started
                if ($is_in_progress) {
                    $this->general_settings->import_errors = 0;
                }

                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new password generation rules
     *
     * @param PasswordGenerationRules ...$rules
     *
     * @return PasswordGenerationRules[]
     */
    public
    function setPasswordGenerationRules(
        PasswordGenerationRules ...$rules
    ): array {
        return tap(
            $rules,
            function(array $rules) {
                $this->password_generation_settings->generation_rule = $rules;
                $this->password_generation_settings->save();
            },
        );
    }

    /**
     * Globally define the new registration ending time
     *
     * @param Carbon $registration_ending_time
     *
     * @return Carbon
     */
    public
    function setRegistrationEndingTime(
        Carbon $registration_ending_time,
    ): Carbon {
        return tap(
            $registration_ending_time,
            function(Carbon $registration_ending_time) {
                $this->general_settings->registration_enabled_to = $registration_ending_time;
                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new registration starting time
     *
     * @param Carbon $registration_starting_time
     *
     * @return Carbon
     */
    public
    function setRegistrationStartingTime(
        Carbon $registration_starting_time,
    ): Carbon {
        return tap(
            $registration_starting_time,
            function(Carbon $registration_starting_time) {
                $this->general_settings->registration_enabled_from = $registration_starting_time;
                $this->general_settings->save();
            },
        );
    }

    /**
     * Globally define the new site name
     *
     * @param string $site_name
     *
     * @return string
     */
    public
    function setSiteName(
        string $site_name,
    ): string {
        return tap(
            $site_name,
            function(string $site_name) {
                $this->general_settings->site_name = $site_name;
                $this->general_settings->save();
            },
        );
    }

    public
    function __construct(
        private readonly GeneralSettings            $general_settings,
        private readonly PasswordGenerationSettings $password_generation_settings,
    ) {}
}
