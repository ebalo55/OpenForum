<?php

use App\Console\Commands\ModuleMakeCommandOverride;
use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Commands;

$all_replacements = [
    'LOWER_NAME',
    'STUDLY_NAME',
    'VENDOR',
    'AUTHOR_NAME',
    'AUTHOR_EMAIL',
    'MODULE_NAMESPACE',
    'PROVIDER_NAMESPACE',
];

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled'      => true,
        // path'         => base_path('vendor/nwidart/laravel-modules/src/Commands/stubs'),
        'path'         => base_path('stubs/nwidart-stubs'),
        'files'        => [
            'routes/web'      => 'routes/web.php',
            'routes/api'      => 'routes/api.php',
            'views/index'     => 'resources/views/index.blade.php',
            'views/master'    => 'resources/views/layouts/master.blade.php',
            'scaffold/config' => 'config/config.php',
            'composer'        => 'composer.json',
            'assets/js/app'   => 'resources/assets/js/app.js',
            'assets/sass/app' => 'resources/assets/sass/app.scss',
            'vite'            => 'vite.config.js',
            'package'         => 'package.json',
        ],
        'replacements' => [
            'routes/web'           => $all_replacements,
            'routes/api'           => $all_replacements,
            'views/index'          => $all_replacements,
            'views/master'         => $all_replacements,
            'scaffold/config'      => $all_replacements,
            "command"              => $all_replacements,
            "component-class"      => $all_replacements,
            "component-view"       => $all_replacements,
            "composer"             => $all_replacements,
            "controller-api"       => $all_replacements,
            "controller-plain"     => $all_replacements,
            "controller"           => $all_replacements,
            "event"                => $all_replacements,
            "factory"              => $all_replacements,
            "feature-test"         => $all_replacements,
            "job-queued"           => $all_replacements,
            "job"                  => $all_replacements,
            "json"                 => $all_replacements,
            "listener-duck"        => $all_replacements,
            "listener-queued-duck" => $all_replacements,
            "listener-queued"      => $all_replacements,
            "listener"             => $all_replacements,
            "mail"                 => $all_replacements,
            "middleware"           => $all_replacements,
            "model"                => $all_replacements,
            "notification"         => $all_replacements,
            "package"              => $all_replacements,
            "policy.plain"         => $all_replacements,
            "provider"             => $all_replacements,
            "request"              => $all_replacements,
            "resource-collection"  => $all_replacements,
            "resource"             => $all_replacements,
            "routeProvider"        => $all_replacements,
            "rule"                 => $all_replacements,
            "seeder"               => $all_replacements,
            "unit-test"            => $all_replacements,
            "vite"                 => $all_replacements,
            "migration/add"        => $all_replacements,
            "migration/create"     => $all_replacements,
            "migration/delete"     => $all_replacements,
            "migration/drop"       => $all_replacements,
            "migration/plain"      => $all_replacements,
            "scaffold/provider"    => $all_replacements,
            "assets/js/app"        => $all_replacements,
            "assets/sass/app"      => $all_replacements,
        ],
        'gitkeep'      => true,
    ],

    'paths'    => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */
        'modules'   => base_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */
        'assets'    => public_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */
        'migration' => base_path('database/migrations'),

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config'          => ['path' => 'config', 'generate' => true],
            'command'         => ['path' => 'src/Console', 'generate' => true],
            'migration'       => ['path' => 'database/migrations', 'generate' => true],
            'seeder'          => ['path' => 'database/seeders', 'generate' => true],
            'factory'         => ['path' => 'database/factories', 'generate' => true],
            'model'           => ['path' => 'src/Models', 'generate' => true],
            'routes'          => ['path' => 'routes', 'generate' => true],
            'controller'      => ['path' => 'src/Http/Controllers', 'generate' => true],
            'filter'          => ['path' => 'src/Http/Middleware', 'generate' => true],
            'request'         => ['path' => 'src/Http/Requests', 'generate' => true],
            'provider'        => ['path' => 'src/Providers', 'generate' => true],
            'assets'          => ['path' => 'resources/assets', 'generate' => true],
            'lang'            => ['path' => 'lang', 'generate' => true],
            'views'           => ['path' => 'resources/views', 'generate' => true],
            'test'            => ['path' => 'tests/Unit', 'generate' => true],
            'test-feature'    => ['path' => 'tests/Feature', 'generate' => true],
            'repository'      => ['path' => 'src/Repositories', 'generate' => false],
            'event'           => ['path' => 'src/Events', 'generate' => false],
            'listener'        => ['path' => 'src/Listeners', 'generate' => false],
            'policies'        => ['path' => 'src/Policies', 'generate' => false],
            'rules'           => ['path' => 'src/Rules', 'generate' => false],
            'jobs'            => ['path' => 'src/Jobs', 'generate' => false],
            'emails'          => ['path' => 'src/Emails', 'generate' => false],
            'notifications'   => ['path' => 'src/Notifications', 'generate' => false],
            'resource'        => ['path' => 'src/Transformers', 'generate' => false],
            'component-view'  => ['path' => 'resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'src/View/Components', 'generate' => false],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
        Commands\CommandMakeCommand::class,
        Commands\ComponentClassMakeCommand::class,
        Commands\ComponentViewMakeCommand::class,
        Commands\ControllerMakeCommand::class,
        Commands\DisableCommand::class,
        Commands\DumpCommand::class,
        Commands\EnableCommand::class,
        Commands\EventMakeCommand::class,
        Commands\JobMakeCommand::class,
        Commands\ListenerMakeCommand::class,
        Commands\MailMakeCommand::class,
        Commands\MiddlewareMakeCommand::class,
        Commands\NotificationMakeCommand::class,
        Commands\ProviderMakeCommand::class,
        Commands\RouteProviderMakeCommand::class,
        Commands\InstallCommand::class,
        Commands\ListCommand::class,
        Commands\ModuleDeleteCommand::class,
        Commands\FactoryMakeCommand::class,
        Commands\PolicyMakeCommand::class,
        Commands\RequestMakeCommand::class,
        Commands\RuleMakeCommand::class,
        Commands\MigrateCommand::class,
        Commands\MigrateFreshCommand::class,
        Commands\MigrateRefreshCommand::class,
        Commands\MigrateResetCommand::class,
        Commands\MigrateRollbackCommand::class,
        Commands\MigrateStatusCommand::class,
        Commands\MigrationMakeCommand::class,
        Commands\ModelMakeCommand::class,
        Commands\PublishCommand::class,
        Commands\PublishConfigurationCommand::class,
        Commands\PublishMigrationCommand::class,
        Commands\PublishTranslationCommand::class,
        Commands\SeedCommand::class,
        Commands\SeedMakeCommand::class,
        Commands\SetupCommand::class,
        Commands\UnUseCommand::class,
        Commands\UpdateCommand::class,
        Commands\UseCommand::class,
        Commands\ResourceMakeCommand::class,
        Commands\TestMakeCommand::class,
        // Commands\LaravelModulesV6Migrator::class, useless

        // overrides
        ModuleMakeCommandOverride::class, // Commands\ModuleMakeCommand::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan'       => [
        'enabled' => false,
        'paths'   => [
            base_path('vendor/*/*'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */
    'composer'   => [
        'vendor'          => 'ebalo55',
        'author'          => [
            'name'  => 'Emanuele (ebalo) Balsamo',
            'email' => 'ebalo@override.sh',
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache'      => [
        'enabled'  => false,
        'driver'   => 'file',
        'key'      => 'laravel-modules',
        'lifetime' => 60,
    ],

    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register'   => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files'        => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class'          => FileActivator::class,
            'statuses-file'  => base_path('modules_statuses.json'),
            'cache-key'      => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
