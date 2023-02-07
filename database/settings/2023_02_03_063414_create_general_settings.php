<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration {
    public
    function up(): void {
        $this->migrator->add(
            "general.is_import_in_progress",
            false,
        );
        $this->migrator->add("general.registration_enabled_from");
        $this->migrator->add("general.registration_enabled_to");
        $this->migrator->add(
            "general.site_name",
            "CasteForum",
        );
        $this->migrator->add(
            "general.import_errors",
            0,
        );
    }
}
