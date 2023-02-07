<?php

namespace App\Service;

use App\Enum\PasswordGenerationRules;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;

final
class SettingsService extends BaseService {
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

    public
    function __construct(
        private readonly GeneralSettings            $general_settings,
        private readonly PasswordGenerationSettings $password_generation_settings,
    ) {}
}
