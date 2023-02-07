<?php

namespace App\Settings;

use Carbon\Carbon;
use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings {
    public bool $is_import_in_progress;
    public ?Carbon $registration_enabled_from;
    public ?Carbon $registration_enabled_to;
    public string $site_name;
    public int $import_errors;

    public static
    function group(): string {
        return 'general';
    }
}
