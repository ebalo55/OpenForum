<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;
use Nwidart\Modules\Commands\ModuleMakeCommand;
use Spatie\Regex\Regex;

class ModuleMakeCommandOverride extends ModuleMakeCommand {
    /**
     * @codeCoverageIgnore
     * @return int
     */
    public
    function handle(): int {
        $original_command_result = parent::handle();

        if ($original_command_result === E_ERROR) {
            return E_ERROR;
        }

        $this->info("Including created module in root composer.json.");

        // get the module name array
        $names = $this->argument('name');
        foreach ($names as $name) {
            // create the class name
            $class_name = Str::studly($name);

            $composer_path = base_path("composer.json");

            // update the root composer.json content
            $replacement = Regex::replace(
                '/("autoload": \{\s+"psr-4": \{\s+(?>.+,\s+)+.+)/',
                <<<replacement
$1,
            "Modules\\\\\\\\{$class_name}\\\\\\\\": "modules/{$class_name}/src/",
            "Modules\\\\\\\\{$class_name}\\\\\\\\Database\\\\\\\\Seeders\\\\\\\\": "modules/{$class_name}/database/seeders/",
            "Modules\\\\\\\\{$class_name}\\\\\\\\Database\\\\\\\\Factories\\\\\\\\": "modules/{$class_name}/database/factories/"
replacement,
                file_get_contents($composer_path),
            );

            if ($replacement->count() !== 1) {
                $this->error("An error occurred while updating root composer.json, no update stored");
                return E_ERROR;
            }

            file_put_contents(
                $composer_path,
                $replacement->result(),
            );
        }

        $this->info("Root composer.json updated.");
        $this->info("Module created and included successfully!");

        $this->call("module:namespace-fix");

        $this->info("Updating composer to include latest edits...");
        $process = Process::start("composer update");
        $process->wait(fn(string $out_type, string $output) => $this->getOutput()->write($output));

        $this->info("Composer updated, you can freely use your new module now!");
        return $original_command_result;
    }
}
