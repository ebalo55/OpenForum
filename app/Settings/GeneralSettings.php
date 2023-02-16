<?php

namespace App\Settings;

use Carbon\Carbon;
use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings {
    /** @var string[] */
    public array $event_locations;
    public ?Carbon $events_ending_day;
    public ?Carbon $events_starting_day;
    public int $import_errors;
    public bool $is_import_in_progress;
    public ?Carbon $registration_enabled_from;
    public ?Carbon $registration_enabled_to;
    public string $site_name;
	public string $front_end_domain;

    public static
    function group(): string {
        return 'general';
    }
}
