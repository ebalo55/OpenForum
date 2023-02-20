<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\Regex\Regex;
use function Termwind\{render};

class ModuleNamespaceFixCommand extends Command {
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fixes the all namespace occurrences in all modules';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:namespace-fix';

    /**
     * Execute the console command.
     *
     * @codeCoverageIgnore
     */
    public
    function handle(): void {
        // get all php files in modules, this is used to fix namespaces
        $files = $this->getFiles(base_path("modules"));

        $files_count = count($files);
        render(
            <<<HTML
            <div class="mx-2 my-1">
                <div class="space-x-1">
                    <span class="px-1 bg-green-700 text-white font-bold">Namespace fixing</span>
                </div>
                <div class="mt-1">
                    <div class="flex space-x-1">
                        <span class="font-bold">Scanning modules folder for .php files</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">OK</span>
                    </div>
                    <div class="flex space-x-1">
                        <span class="font-bold">Detected fixable files</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">{$files_count}</span>
                    </div>
                    <div class="flex space-x-1">
                        <span class="font-bold">File processing</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-yellow">STARTING</span>
                    </div>
                </div>
            </div>
        HTML,
        );

        // in our environment modules get prefixed with src/ but that is not part of the namespace as of PSR-4
        foreach ($files as $filename) {
            $content = file_get_contents($filename);

            $replaced_content = Regex::replace(
                "/(namespace.+)\\\\src(.*)/",
                "$1$2",
                $content,
            );

            file_put_contents(
                $filename,
                $replaced_content->result(),
            );

            $pretty_name = Str::replace(
                base_path("modules") . "/",
                "",
                $filename,
            );
            render(
                <<<HTML
                <div class="mx-4">
                    <div class="flex space-x-1">
                        <span class="font-bold">{$pretty_name}</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">OK</span>
                    </div>
                </div>
            HTML,
            );
        }

        render(
            <<<HTML
            <div class="mx-2 my-1">
                <div class="space-x-1">
                    <span class="px-1 text-green font-bold">All namespaces have been fixed, you're good to go!</span>
                </div>
            </div>
        HTML,
        );
    }

    /**
     * Recursively get all .php files in a given folder
     *
     * @param string $directory
     * @param array $allFiles
     *
     * @return array
     * @codeCoverageIgnore
     */
    protected
    function getFiles(
        string $directory,
        array  $allFiles = [],
    ): array {
        $files = array_diff(
            scandir($directory),
            ['.', '..'],
        );

        foreach ($files as $file) {
            $fullPath = $directory . DIRECTORY_SEPARATOR . $file;

            if (is_dir($fullPath)) {
                $allFiles += $this->getFiles(
                    $fullPath,
                    $allFiles,
                );
            } elseif (Str::endsWith(
                $file,
                ".php",
            )) {
                $allFiles[] = $fullPath;
            }
        }

        return $allFiles;
    }
}
