<?php
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 10.0.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see    https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades {
    /**
     *
     *
     * @see \Illuminate\Foundation\Application
     */
    class App {
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         *
         * @return \Illuminate\Foundation\never
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static
         */
        public static
        function abort(
            $code,
            $message = '',
            $headers = [],
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->abort(
                $code,
                $message,
                $headers,
            );
        }

        /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param string $prefix
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function addAbsoluteCachePathPrefix(
            $prefix,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->addAbsoluteCachePathPrefix($prefix);
        }

        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         *
         * @return void
         * @static
         */
        public static
        function addContextualBinding(
            $concrete,
            $abstract,
            $implementation,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addContextualBinding(
                $concrete,
                $abstract,
                $implementation,
            );
        }

        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         *
         * @return void
         * @static
         */
        public static
        function addDeferredServices(
            $services,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addDeferredServices($services);
        }

        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function afterBootstrapping(
            $bootstrapper,
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterBootstrapping(
                $bootstrapper,
                $callback,
            );
        }

        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function afterLoadingEnvironment(
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterLoadingEnvironment($callback);
        }

        /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static
        function afterResolving(
            $abstract,
            $callback = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolving(
                $abstract,
                $callback,
            );
        }

        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         *
         * @return void
         * @throws \LogicException
         * @static
         */
        public static
        function alias(
            $abstract,
            $alias,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->alias(
                $abstract,
                $alias,
            );
        }

        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function basePath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->basePath($path);
        }

        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function beforeBootstrapping(
            $bootstrapper,
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeBootstrapping(
                $bootstrapper,
                $callback,
            );
        }

        /**
         * Register a new before resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static
        function beforeResolving(
            $abstract,
            $callback = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeResolving(
                $abstract,
                $callback,
            );
        }

        /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         *
         * @return void
         * @throws \TypeError
         * @static
         */
        public static
        function bind(
            $abstract,
            $concrete = null,
            $shared = false,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bind(
                $abstract,
                $concrete,
                $shared,
            );
        }

        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         *
         * @return void
         * @static
         */
        public static
        function bindIf(
            $abstract,
            $concrete = null,
            $shared = false,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindIf(
                $abstract,
                $concrete,
                $shared,
            );
        }

        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function bindMethod(
            $method,
            $callback,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindMethod(
                $method,
                $callback,
            );
        }

        /**
         * Boot the application's service providers.
         *
         * @return void
         * @static
         */
        public static
        function boot() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->boot();
        }

        /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function booted(
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booted($callback);
        }

        /**
         * Register a new boot listener.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function booting(
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booting($callback);
        }

        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function bootstrapPath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bootstrapPath($path);
        }

        /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         *
         * @return void
         * @static
         */
        public static
        function bootstrapWith(
            $bootstrappers,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bootstrapWith($bootstrappers);
        }

        /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         *
         * @return bool
         * @static
         */
        public static
        function bound(
            $abstract,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bound($abstract);
        }

        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param \Closure|string $concrete
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @throws \Illuminate\Contracts\Container\CircularDependencyException
         * @static
         */
        public static
        function build(
            $concrete,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->build($concrete);
        }

        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param \Illuminate\Container\array<string,  mixed> $parameters
         * @param string|null $defaultMethod
         *
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function call(
            $callback,
            $parameters = [],
            $defaultMethod = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->call(
                $callback,
                $parameters,
                $defaultMethod,
            );
        }

        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         *
         * @return mixed
         * @static
         */
        public static
        function callMethodBinding(
            $method,
            $instance,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->callMethodBinding(
                $method,
                $instance,
            );
        }

        /**
         * Get the path to the application configuration files.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function configPath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configPath($path);
        }

        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         * @static
         */
        public static
        function configurationIsCached() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configurationIsCached();
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static
        function currentLocale() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentLocale();
        }

        /**
         * Get the path to the database directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function databasePath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->databasePath($path);
        }

        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         *
         * @return string
         * @static
         */
        public static
        function detectEnvironment(
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->detectEnvironment($callback);
        }

        /**
         * Get or check the current application environment.
         *
         * @param string|array $environments
         *
         * @return string|bool
         * @static
         */
        public static
        function environment(
            ...$environments
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environment(
                ...
                $environments,
            );
        }

        /**
         * Get the environment file the application is using.
         *
         * @return string
         * @static
         */
        public static
        function environmentFile() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFile();
        }

        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string
         * @static
         */
        public static
        function environmentFilePath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFilePath();
        }

        /**
         * Get the path to the environment file directory.
         *
         * @return string
         * @static
         */
        public static
        function environmentPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentPath();
        }

        /**
         * Determine if the application events are cached.
         *
         * @return bool
         * @static
         */
        public static
        function eventsAreCached() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->eventsAreCached();
        }

        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         *
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function extend(
            $abstract,
            $closure,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->extend(
                $abstract,
                $closure,
            );
        }

        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         *
         * @return \Closure
         * @static
         */
        public static
        function factory(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->factory($abstract);
        }

        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         * @static
         */
        public static
        function flush() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->flush();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Foundation\Application::flushMacros();
        }

        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         *
         * @return void
         * @static
         */
        public static
        function forgetExtenders(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetExtenders($abstract);
        }

        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         *
         * @return void
         * @static
         */
        public static
        function forgetInstance(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstance($abstract);
        }

        /**
         * Clear all of the instances from the container.
         *
         * @return void
         * @static
         */
        public static
        function forgetInstances() {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstances();
        }

        /**
         * Clear all of the scoped instances from the container.
         *
         * @return void
         * @static
         */
        public static
        function forgetScopedInstances() {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetScopedInstances();
        }

        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         *
         * @return mixed
         * @return mixed Entry.
         * @static
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         */
        public static
        function get(
            $id,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->get($id);
        }

        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         *
         * @return string
         * @static
         */
        public static
        function getAlias(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getAlias($abstract);
        }

        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */
        public static
        function getBindings() {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBindings();
        }

        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         * @static
         */
        public static
        function getCachedConfigPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedConfigPath();
        }

        /**
         * Get the path to the events cache file.
         *
         * @return string
         * @static
         */
        public static
        function getCachedEventsPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedEventsPath();
        }

        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         * @static
         */
        public static
        function getCachedPackagesPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedPackagesPath();
        }

        /**
         * Get the path to the routes cache file.
         *
         * @return string
         * @static
         */
        public static
        function getCachedRoutesPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedRoutesPath();
        }

        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         * @static
         */
        public static
        function getCachedServicesPath() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedServicesPath();
        }

        /**
         * Get the application's deferred services.
         *
         * @return array
         * @static
         */
        public static
        function getDeferredServices() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getDeferredServices();
        }

        /**
         * Get the current application fallback locale.
         *
         * @return string
         * @static
         */
        public static
        function getFallbackLocale() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getFallbackLocale();
        }

        /**
         * Get the globally available instance of the container.
         *
         * @return static
         * @static
         */
        public static
        function getInstance() {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getInstance();
        }

        /**
         * Get the service providers that have been loaded.
         *
         * @return array
         * @static
         */
        public static
        function getLoadedProviders() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLoadedProviders();
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static
        function getLocale() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLocale();
        }

        /**
         * Get the application namespace.
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static
        function getNamespace() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getNamespace();
        }

        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         *
         * @return \Illuminate\Support\ServiceProvider|null
         * @static
         */
        public static
        function getProvider(
            $provider,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProvider($provider);
        }

        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         *
         * @return array
         * @static
         */
        public static
        function getProviders(
            $provider,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProviders($provider);
        }

        /**
         * {@inheritdoc}
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function handle(
            $request,
            $type = 1,
            $catch = true,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handle(
                $request,
                $type,
                $catch,
            );
        }

        /**
         * Returns true if the container can return an entry for the given identifier.
         *
         * Returns false otherwise.
         *
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         *
         * @return bool
         * @return bool
         * @static
         */
        public static
        function has(
            $id,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->has($id);
        }

        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool
         * @static
         */
        public static
        function hasBeenBootstrapped() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasBeenBootstrapped();
        }

        /**
         * Determine if the application is running with debug mode enabled.
         *
         * @return bool
         * @static
         */
        public static
        function hasDebugModeEnabled() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasDebugModeEnabled();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Foundation\Application::hasMacro($name);
        }

        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         *
         * @return bool
         * @static
         */
        public static
        function hasMethodBinding(
            $method,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasMethodBinding($method);
        }

        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         *
         * @return mixed
         * @static
         */
        public static
        function instance(
            $abstract,
            $instance,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->instance(
                $abstract,
                $instance,
            );
        }

        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function isAlias(
            $name,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isAlias($name);
        }

        /**
         * Determine if the application has booted.
         *
         * @return bool
         * @static
         */
        public static
        function isBooted() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isBooted();
        }

        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         *
         * @return bool
         * @static
         */
        public static
        function isDeferredService(
            $service,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDeferredService($service);
        }

        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */
        public static
        function isDownForMaintenance() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDownForMaintenance();
        }

        /**
         * Determine if the application is in the local environment.
         *
         * @return bool
         * @static
         */
        public static
        function isLocal() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocal();
        }

        /**
         * Determine if the application locale is the given locale.
         *
         * @param string $locale
         *
         * @return bool
         * @static
         */
        public static
        function isLocale(
            $locale,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocale($locale);
        }

        /**
         * Determine if the application is in the production environment.
         *
         * @return bool
         * @static
         */
        public static
        function isProduction() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isProduction();
        }

        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         *
         * @return bool
         * @static
         */
        public static
        function isShared(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isShared($abstract);
        }

        /**
         * Join the given paths together.
         *
         * @param string $basePath
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function joinPaths(
            $basePath,
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->joinPaths(
                $basePath,
                $path,
            );
        }

        /**
         * Get the path to the language files.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function langPath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->langPath($path);
        }

        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         *
         * @return void
         * @static
         */
        public static
        function loadDeferredProvider(
            $service,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProvider($service);
        }

        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void
         * @static
         */
        public static
        function loadDeferredProviders() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProviders();
        }

        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function loadEnvironmentFrom(
            $file,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->loadEnvironmentFrom($file);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Foundation\Application::macro(
                $name,
                $macro,
            );
        }

        /**
         * Get an instance of the maintenance mode manager implementation.
         *
         * @return \Illuminate\Contracts\Foundation\MaintenanceMode
         * @static
         */
        public static
        function maintenanceMode() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->maintenanceMode();
        }

        /**
         * Resolve the given type from the container.
         *
         * @param string $abstract
         * @param array $parameters
         *
         * @return mixed
         * @static
         */
        public static
        function make(
            $abstract,
            $parameters = [],
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->make(
                $abstract,
                $parameters,
            );
        }

        /**
         * An alias function name for make().
         *
         * @param string|callable $abstract
         * @param array $parameters
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static
        function makeWith(
            $abstract,
            $parameters = [],
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->makeWith(
                $abstract,
                $parameters,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Foundation\Application::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function offsetExists(
            $key,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get the value at a given offset.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function offsetGet(
            $key,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function offsetSet(
            $key,
            $value,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetSet(
                $key,
                $value,
            );
        }

        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         *
         * @return void
         * @static
         */
        public static
        function offsetUnset(
            $key,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function path(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->path($path);
        }

        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         *
         * @return void
         * @static
         */
        public static
        function provideFacades(
            $namespace,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->provideFacades($namespace);
        }

        /**
         * Determine if the given service provider is loaded.
         *
         * @param string $provider
         *
         * @return bool
         * @static
         */
        public static
        function providerIsLoaded(
            $provider,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->providerIsLoaded($provider);
        }

        /**
         * Get the path to the public / web directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function publicPath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->publicPath($path);
        }

        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static
        function rebinding(
            $abstract,
            $callback,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->rebinding(
                $abstract,
                $callback,
            );
        }

        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         *
         * @return mixed
         * @static
         */
        public static
        function refresh(
            $abstract,
            $target,
            $method,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->refresh(
                $abstract,
                $target,
                $method,
            );
        }

        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param bool $force
         *
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static
        function register(
            $provider,
            $force = false,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->register(
                $provider,
                $force,
            );
        }

        /**
         * Register all of the configured providers.
         *
         * @return void
         * @static
         */
        public static
        function registerConfiguredProviders() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerConfiguredProviders();
        }

        /**
         * Register the core class aliases in the container.
         *
         * @return void
         * @static
         */
        public static
        function registerCoreContainerAliases() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerCoreContainerAliases();
        }

        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         *
         * @return void
         * @static
         */
        public static
        function registerDeferredProvider(
            $provider,
            $service = null,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerDeferredProvider(
                $provider,
                $service,
            );
        }

        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         *
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static
        function resolveProvider(
            $provider,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveProvider($provider);
        }

        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         *
         * @return bool
         * @static
         */
        public static
        function resolved(
            $abstract,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolved($abstract);
        }

        /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static
        function resolving(
            $abstract,
            $callback = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->resolving(
                $abstract,
                $callback,
            );
        }

        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function resourcePath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resourcePath($path);
        }

        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         * @static
         */
        public static
        function routesAreCached() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->routesAreCached();
        }

        /**
         * Determine if the application is running in the console.
         *
         * @return bool
         * @static
         */
        public static
        function runningInConsole() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningInConsole();
        }

        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         * @static
         */
        public static
        function runningUnitTests() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningUnitTests();
        }

        /**
         * Register a scoped binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         *
         * @return void
         * @static
         */
        public static
        function scoped(
            $abstract,
            $concrete = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scoped(
                $abstract,
                $concrete,
            );
        }

        /**
         * Register a scoped binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         *
         * @return void
         * @static
         */
        public static
        function scopedIf(
            $abstract,
            $concrete = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scopedIf(
                $abstract,
                $concrete,
            );
        }

        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function setBasePath(
            $basePath,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->setBasePath($basePath);
        }

        /**
         * Set the application's deferred services.
         *
         * @param array $services
         *
         * @return void
         * @static
         */
        public static
        function setDeferredServices(
            $services,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setDeferredServices($services);
        }

        /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         *
         * @return void
         * @static
         */
        public static
        function setFallbackLocale(
            $fallbackLocale,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setFallbackLocale($fallbackLocale);
        }

        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         *
         * @return \Illuminate\Contracts\Container\Container|static
         * @static
         */
        public static
        function setInstance(
            $container = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::setInstance($container);
        }

        /**
         * Set the current application locale.
         *
         * @param string $locale
         *
         * @return void
         * @static
         */
        public static
        function setLocale(
            $locale,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setLocale($locale);
        }

        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         * @static
         */
        public static
        function shouldSkipMiddleware() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldSkipMiddleware();
        }

        /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         *
         * @return void
         * @static
         */
        public static
        function singleton(
            $abstract,
            $concrete = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singleton(
                $abstract,
                $concrete,
            );
        }

        /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         *
         * @return void
         * @static
         */
        public static
        function singletonIf(
            $abstract,
            $concrete = null,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singletonIf(
                $abstract,
                $concrete,
            );
        }

        /**
         * Get the path to the storage directory.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function storagePath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->storagePath($path);
        }

        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         *
         * @return void
         * @static
         */
        public static
        function tag(
            $abstracts,
            $tags,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->tag(
                $abstracts,
                $tags,
            );
        }

        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         *
         * @return \Illuminate\Container\iterable
         * @static
         */
        public static
        function tagged(
            $tag,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->tagged($tag);
        }

        /**
         * Terminate the application.
         *
         * @return void
         * @static
         */
        public static
        function terminate() {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->terminate();
        }

        /**
         * Register a terminating callback with the application.
         *
         * @param callable|string $callback
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function terminating(
            $callback,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->terminating($callback);
        }

        /**
         * Set the application directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useAppPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useAppPath($path);
        }

        /**
         * Set the bootstrap file directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useBootstrapPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useBootstrapPath($path);
        }

        /**
         * Set the configuration directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useConfigPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useConfigPath($path);
        }

        /**
         * Set the database directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useDatabasePath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useDatabasePath($path);
        }

        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useEnvironmentPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useEnvironmentPath($path);
        }

        /**
         * Set the language file directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useLangPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useLangPath($path);
        }

        /**
         * Set the public / web directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function usePublicPath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->usePublicPath($path);
        }

        /**
         * Set the storage directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static
        function useStoragePath(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useStoragePath($path);
        }

        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */
        public static
        function version() {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->version();
        }

        /**
         * Get the path to the views directory.
         *
         * This method returns the first configured path in the array of view paths.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function viewPath(
            $path = '',
        ) {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->viewPath($path);
        }

        /**
         * Define a contextual binding.
         *
         * @param array|string $concrete
         *
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
         * @static
         */
        public static
        function when(
            $concrete,
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->when($concrete);
        }

        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         *
         * @return \Closure
         * @static
         */
        public static
        function wrap(
            $callback,
            $parameters = [],
        ) {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->wrap(
                $callback,
                $parameters,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Foundation\Console\Kernel
     */
    class Artisan {
        /**
         * Get all of the commands registered with the console.
         *
         * @return array
         * @static
         */
        public static
        function all() {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->all();
        }

        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void
         * @static
         */
        public static
        function bootstrap() {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->bootstrap();
        }

        /**
         * Bootstrap the application without booting service providers.
         *
         * @return void
         * @static
         */
        public static
        function bootstrapWithoutBootingProviders(
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->bootstrapWithoutBootingProviders();
        }

        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer
         *
         * @return int
         * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
         * @static
         */
        public static
        function call(
            $command,
            $parameters = [],
            $outputBuffer = null,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->call(
                $command,
                $parameters,
                $outputBuffer,
            );
        }

        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         *
         * @return \Illuminate\Foundation\Console\ClosureCommand
         * @static
         */
        public static
        function command(
            $signature,
            $callback,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->command(
                $signature,
                $callback,
            );
        }

        /**
         * When the command being handled started.
         *
         * @return \Illuminate\Support\Carbon|null
         * @static
         */
        public static
        function commandStartedAt() {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->commandStartedAt();
        }

        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface|null $output
         *
         * @return int
         * @static
         */
        public static
        function handle(
            $input,
            $output = null,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->handle(
                $input,
                $output,
            );
        }

        /**
         * Get the output for the last run command.
         *
         * @return string
         * @static
         */
        public static
        function output() {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->output();
        }

        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         *
         * @return \Illuminate\Foundation\Bus\PendingDispatch
         * @static
         */
        public static
        function queue(
            $command,
            $parameters = [],
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            return $instance->queue(
                $command,
                $parameters,
            );
        }

        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         *
         * @return void
         * @static
         */
        public static
        function registerCommand(
            $command,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->registerCommand($command);
        }

        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         *
         * @return void
         * @static
         */
        public static
        function setArtisan(
            $artisan,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->setArtisan($artisan);
        }

        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         *
         * @return void
         * @static
         */
        public static
        function terminate(
            $input,
            $status,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->terminate(
                $input,
                $status,
            );
        }

        /**
         * Register a callback to be invoked when the command lifecycle duration exceeds a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         *
         * @return void
         * @static
         */
        public static
        function whenCommandLifecycleIsLongerThan(
            $threshold,
            $handler,
        ) {            //Method inherited from \Illuminate\Foundation\Console\Kernel
            /** @var \App\Console\Kernel $instance */
            $instance->whenCommandLifecycleIsLongerThan(
                $threshold,
                $handler,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Auth\SessionGuard
     */
    class Auth {
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         *
         * @return bool
         * @static
         */
        public static
        function attempt(
            $credentials = [],
            $remember = false,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->attempt(
                $credentials,
                $remember,
            );
        }

        /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param array $credentials
         * @param array|callable|null $callbacks
         * @param bool $remember
         *
         * @return bool
         * @static
         */
        public static
        function attemptWhen(
            $credentials = [],
            $callbacks = null,
            $remember = false,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->attemptWhen(
                $credentials,
                $callbacks,
                $remember,
            );
        }

        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function attempting(
            $callback,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->attempting($callback);
        }

        /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return \App\Models\User
         * @throws \Illuminate\Auth\AuthenticationException
         * @static
         */
        public static
        function authenticate() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->authenticate();
        }

        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         *
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static
         */
        public static
        function basic(
            $field = 'email',
            $extraConditions = [],
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->basic(
                $field,
                $extraConditions,
            );
        }

        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */
        public static
        function check() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->check();
        }

        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static
        function createSessionDriver(
            $name,
            $config,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createSessionDriver(
                $name,
                $config,
            );
        }

        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         *
         * @return \Illuminate\Auth\TokenGuard
         * @static
         */
        public static
        function createTokenDriver(
            $name,
            $config,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createTokenDriver(
                $name,
                $config,
            );
        }

        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         *
         * @return \Illuminate\Contracts\Auth\UserProvider|null
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function createUserProvider(
            $provider = null,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createUserProvider($provider);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Auth\SessionGuard::flushMacros();
        }

        /**
         * Forget all of the resolved guard instances.
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function forgetGuards() {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->forgetGuards();
        }

        /**
         * Forget the current user.
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static
        function forgetUser() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->forgetUser();
        }

        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory
         * @throws \RuntimeException
         * @static
         */
        public static
        function getCookieJar() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getCookieJar();
        }

        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default user provider name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultUserProvider() {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->getDefaultUserProvider();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static
        function getDispatcher() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getDispatcher();
        }

        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Models\User
         * @static
         */
        public static
        function getLastAttempted() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getLastAttempted();
        }

        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */
        public static
        function getName() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getName();
        }

        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider
         * @static
         */
        public static
        function getProvider() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getProvider();
        }

        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */
        public static
        function getRecallerName() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getRecallerName();
        }

        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */
        public static
        function getRequest() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getRequest();
        }

        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */
        public static
        function getSession() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getSession();
        }

        /**
         * Get the timebox instance used by the guard.
         *
         * @return \Illuminate\Support\Timebox
         * @static
         */
        public static
        function getTimebox() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getTimebox();
        }

        /**
         * Return the currently cached user.
         *
         * @return \App\Models\User|null
         * @static
         */
        public static
        function getUser() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getUser();
        }

        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
         * @static
         */
        public static
        function guard(
            $name = null,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->guard($name);
        }

        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */
        public static
        function guest() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->guest();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }

        /**
         * Determines if any guards have already been resolved.
         *
         * @return bool
         * @static
         */
        public static
        function hasResolvedGuards() {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->hasResolvedGuards();
        }

        /**
         * Determine if the guard has a user instance.
         *
         * @return bool
         * @static
         */
        public static
        function hasUser() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->hasUser();
        }

        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null
         * @static
         */
        public static
        function id() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->id();
        }

        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         *
         * @return void
         * @static
         */
        public static
        function login(
            $user,
            $remember = false,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->login(
                $user,
                $remember,
            );
        }

        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         *
         * @return \App\Models\User|false
         * @static
         */
        public static
        function loginUsingId(
            $id,
            $remember = false,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->loginUsingId(
                $id,
                $remember,
            );
        }

        /**
         * Log the user out of the application.
         *
         * @return void
         * @static
         */
        public static
        function logout() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->logout();
        }

        /**
         * Log the user out of the application on their current device only.
         *
         * This method does not cycle the "remember" token.
         *
         * @return void
         * @static
         */
        public static
        function logoutCurrentDevice() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->logoutCurrentDevice();
        }

        /**
         * Invalidate other sessions for the current user.
         *
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @param string $attribute
         *
         * @return \App\Models\User|null
         * @throws \Illuminate\Auth\AuthenticationException
         * @static
         */
        public static
        function logoutOtherDevices(
            $password,
            $attribute = 'password',
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->logoutOtherDevices(
                $password,
                $attribute,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Auth\SessionGuard::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Auth\SessionGuard::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         *
         * @return bool
         * @static
         */
        public static
        function once(
            $credentials = [],
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->once($credentials);
        }

        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         *
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static
         */
        public static
        function onceBasic(
            $field = 'email',
            $extraConditions = [],
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->onceBasic(
                $field,
                $extraConditions,
            );
        }

        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         *
         * @return \App\Models\User|false
         * @static
         */
        public static
        function onceUsingId(
            $id,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->onceUsingId($id);
        }

        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function provider(
            $name,
            $callback,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->provider(
                $name,
                $callback,
            );
        }

        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function resolveUsersUsing(
            $userResolver,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->resolveUsersUsing($userResolver);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         *
         * @return void
         * @static
         */
        public static
        function setCookieJar(
            $cookie,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setCookieJar($cookie);
        }

        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         *
         * @return void
         * @static
         */
        public static
        function setDispatcher(
            $events,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         *
         * @return void
         * @static
         */
        public static
        function setProvider(
            $provider,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setProvider($provider);
        }

        /**
         * Set the number of minutes the remember me cookie should be valid for.
         *
         * @param int $minutes
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static
        function setRememberDuration(
            $minutes,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->setRememberDuration($minutes);
        }

        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static
        function setRequest(
            $request,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->setRequest($request);
        }

        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         *
         * @return void
         * @static
         */
        public static
        function setUser(
            $user,
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setUser($user);
        }

        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function shouldUse(
            $name,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            $instance->shouldUse($name);
        }

        /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null
         * @static
         */
        public static
        function user() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->user();
        }

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static
        function userResolver() {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->userResolver();
        }

        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         *
         * @return bool
         * @static
         */
        public static
        function validate(
            $credentials = [],
        ) {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->validate($credentials);
        }

        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */
        public static
        function viaRemember() {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->viaRemember();
        }

        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static
        function viaRequest(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->viaRequest(
                $driver,
                $callback,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\View\Compilers\BladeCompiler
     */
    class Blade {
        /**
         * Register a component alias directive.
         *
         * @param string $path
         * @param string|null $alias
         *
         * @return void
         * @static
         */
        public static
        function aliasComponent(
            $path,
            $alias = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->aliasComponent(
                $path,
                $alias,
            );
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         *
         * @return void
         * @static
         */
        public static
        function aliasInclude(
            $path,
            $alias = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->aliasInclude(
                $path,
                $alias,
            );
        }

        /**
         * Register an anonymous component namespace.
         *
         * @param string $directory
         * @param string|null $prefix
         *
         * @return void
         * @static
         */
        public static
        function anonymousComponentNamespace(
            $directory,
            $prefix = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->anonymousComponentNamespace(
                $directory,
                $prefix,
            );
        }

        /**
         * Register a new anonymous component path.
         *
         * @param string $path
         * @param string|null $prefix
         *
         * @return void
         * @static
         */
        public static
        function anonymousComponentPath(
            $path,
            $prefix = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->anonymousComponentPath(
                $path,
                $prefix,
            );
        }

        /**
         * Apply the echo handler for the value if it exists.
         *
         * @param string $value
         *
         * @return string
         * @static
         */
        public static
        function applyEchoHandler(
            $value,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->applyEchoHandler($value);
        }

        /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param array $parameters
         *
         * @return bool
         * @static
         */
        public static
        function check(
            $name,
            ...$parameters
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->check(
                $name,
                ...
                $parameters,
            );
        }

        /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         *
         * @return void
         * @static
         */
        public static
        function compile(
            $path = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->compile($path);
        }

        /**
         * Compile a class component opening.
         *
         * @param string $component
         * @param string $alias
         * @param string $data
         * @param string $hash
         *
         * @return string
         * @static
         */
        public static
        function compileClassComponentOpening(
            $component,
            $alias,
            $data,
            $hash,
        ) {
            return \Illuminate\View\Compilers\BladeCompiler::compileClassComponentOpening(
                $component,
                $alias,
                $data,
                $hash,
            );
        }

        /**
         * Compile Blade echos into valid PHP.
         *
         * @param string $value
         *
         * @return string
         * @static
         */
        public static
        function compileEchos(
            $value,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEchos($value);
        }

        /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string
         * @static
         */
        public static
        function compileEndComponentClass() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEndComponentClass();
        }

        /**
         * Compile an end-once block into valid PHP.
         *
         * @return string
         * @static
         */
        public static
        function compileEndOnce() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEndOnce();
        }

        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         *
         * @return string
         * @static
         */
        public static
        function compileString(
            $value,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileString($value);
        }

        /**
         * Register a class-based component alias directive.
         *
         * @param string $class
         * @param string|null $alias
         * @param string $prefix
         *
         * @return void
         * @static
         */
        public static
        function component(
            $class,
            $alias = null,
            $prefix = '',
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->component(
                $class,
                $alias,
                $prefix,
            );
        }

        /**
         * Register a class-based component namespace.
         *
         * @param string $namespace
         * @param string $prefix
         *
         * @return void
         * @static
         */
        public static
        function componentNamespace(
            $namespace,
            $prefix,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->componentNamespace(
                $namespace,
                $prefix,
            );
        }

        /**
         * Register an array of class-based components.
         *
         * @param array $components
         * @param string $prefix
         *
         * @return void
         * @static
         */
        public static
        function components(
            $components,
            $prefix = '',
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->components(
                $components,
                $prefix,
            );
        }

        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         *
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function directive(
            $name,
            $handler,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->directive(
                $name,
                $handler,
            );
        }

        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         *
         * @return void
         * @static
         */
        public static
        function extend(
            $compiler,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->extend($compiler);
        }

        /**
         * Get the registered anonymous component namespaces.
         *
         * @return array
         * @static
         */
        public static
        function getAnonymousComponentNamespaces() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getAnonymousComponentNamespaces();
        }

        /**
         * Get the registered anonymous component paths.
         *
         * @return array
         * @static
         */
        public static
        function getAnonymousComponentPaths() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getAnonymousComponentPaths();
        }

        /**
         * Get the registered class component aliases.
         *
         * @return array
         * @static
         */
        public static
        function getClassComponentAliases() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getClassComponentAliases();
        }

        /**
         * Get the registered class component namespaces.
         *
         * @return array
         * @static
         */
        public static
        function getClassComponentNamespaces() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getClassComponentNamespaces();
        }

        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function getCompiledPath(
            $path,
        ) {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getCompiledPath($path);
        }

        /**
         * Get the list of custom directives.
         *
         * @return array
         * @static
         */
        public static
        function getCustomDirectives() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getCustomDirectives();
        }

        /**
         * Get the extensions used by the compiler.
         *
         * @return array
         * @static
         */
        public static
        function getExtensions() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getExtensions();
        }

        /**
         * Get the path currently being compiled.
         *
         * @return string
         * @static
         */
        public static
        function getPath() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getPath();
        }

        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function if(
            $name,
            $callback,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->if(
                $name,
                $callback,
            );
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         *
         * @return void
         * @static
         */
        public static
        function include(
            $path,
            $alias = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->include(
                $path,
                $alias,
            );
        }

        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function isExpired(
            $path,
        ) {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->isExpired($path);
        }

        /**
         * Get a new component hash for a component name.
         *
         * @param string $component
         *
         * @return string
         * @static
         */
        public static
        function newComponentHash(
            $component,
        ) {
            return \Illuminate\View\Compilers\BladeCompiler::newComponentHash($component);
        }

        /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         *
         * @return void
         * @static
         */
        public static
        function precompiler(
            $precompiler,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->precompiler($precompiler);
        }

        /**
         * Evaluate and render a Blade string to HTML.
         *
         * @param string $string
         * @param array $data
         * @param bool $deleteCachedView
         *
         * @return string
         * @static
         */
        public static
        function render(
            $string,
            $data = [],
            $deleteCachedView = false,
        ) {
            return \Illuminate\View\Compilers\BladeCompiler::render(
                $string,
                $data,
                $deleteCachedView,
            );
        }

        /**
         * Render a component instance to HTML.
         *
         * @param \Illuminate\View\Component $component
         *
         * @return string
         * @static
         */
        public static
        function renderComponent(
            $component,
        ) {
            return \Illuminate\View\Compilers\BladeCompiler::renderComponent($component);
        }

        /**
         * Sanitize the given component attribute value.
         *
         * @param mixed $value
         *
         * @return mixed
         * @static
         */
        public static
        function sanitizeComponentAttribute(
            $value,
        ) {
            return \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value);
        }

        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         *
         * @return void
         * @static
         */
        public static
        function setEchoFormat(
            $format,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->setEchoFormat($format);
        }

        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         *
         * @return void
         * @static
         */
        public static
        function setPath(
            $path,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->setPath($path);
        }

        /**
         * Add a handler to be executed before echoing a given class.
         *
         * @param string|callable $class
         * @param callable|null $handler
         *
         * @return void
         * @static
         */
        public static
        function stringable(
            $class,
            $handler = null,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->stringable(
                $class,
                $handler,
            );
        }

        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         *
         * @return string
         * @static
         */
        public static
        function stripParentheses(
            $expression,
        ) {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->stripParentheses($expression);
        }

        /**
         * Set the "echo" format to double encode entities.
         *
         * @return void
         * @static
         */
        public static
        function withDoubleEncoding() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withDoubleEncoding();
        }

        /**
         * Indicate that component tags should not be compiled.
         *
         * @return void
         * @static
         */
        public static
        function withoutComponentTags() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withoutComponentTags();
        }

        /**
         * Set the "echo" format to not double encode entities.
         *
         * @return void
         * @static
         */
        public static
        function withoutDoubleEncoding() {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withoutDoubleEncoding();
        }

    }

    /**
     *
     *
     * @method static mixed auth(\Illuminate\Http\Request $request)
     * @method static mixed validAuthenticationResponse(\Illuminate\Http\Request $request, mixed $result)
     * @method static void broadcast(array $channels, string $event, array $payload = [])
     * @method static array|null resolveAuthenticatedUser(\Illuminate\Http\Request $request)
     * @method static void resolveAuthenticatedUserUsing(\Closure $callback)
     * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster
     *         channel(\Illuminate\Contracts\Broadcasting\HasBroadcastChannel|string $channel, callable|string
     *         $callback, array $options = [])
     *
     * @see \Illuminate\Broadcasting\BroadcastManager
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster
     */
    class Broadcast {
        /**
         * Get an Ably instance for the given configuration.
         *
         * @param array $config
         *
         * @return \Ably\AblyRest
         * @static
         */
        public static
        function ably(
            $config,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->ably($config);
        }

        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * Alias of "routes" method.
         *
         * @param array|null $attributes
         *
         * @return void
         * @static
         */
        public static
        function channelRoutes(
            $attributes = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->channelRoutes($attributes);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         *
         * @return mixed
         * @static
         */
        public static
        function connection(
            $driver = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->connection($driver);
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $name
         *
         * @return mixed
         * @static
         */
        public static
        function driver(
            $name = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->driver($name);
        }

        /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
         *
         * @return \Illuminate\Broadcasting\PendingBroadcast
         * @static
         */
        public static
        function event(
            $event = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->event($event);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static
        function forgetDrivers() {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static
        function getApplication() {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->getApplication();
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function purge(
            $name = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->purge($name);
        }

        /**
         * Get a Pusher instance for the given configuration.
         *
         * @param array $config
         *
         * @return \Pusher\Pusher
         * @static
         */
        public static
        function pusher(
            $config,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->pusher($config);
        }

        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         *
         * @return void
         * @static
         */
        public static
        function queue(
            $event,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->queue($event);
        }

        /**
         * Register the routes for handling broadcast channel authentication and sockets.
         *
         * @param array|null $attributes
         *
         * @return void
         * @static
         */
        public static
        function routes(
            $attributes = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->routes($attributes);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the default driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         *
         * @return string|null
         * @static
         */
        public static
        function socket(
            $request = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->socket($request);
        }

        /**
         * Register the routes for handling broadcast user authentication.
         *
         * @param array|null $attributes
         *
         * @return void
         * @static
         */
        public static
        function userRoutes(
            $attributes = null,
        ) {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->userRoutes($attributes);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Bus\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\BusFake
     */
    class Bus {
        /**
         * Assert the number of batches that have been dispatched.
         *
         * @param int $count
         *
         * @return void
         * @static
         */
        public static
        function assertBatchCount(
            $count,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertBatchCount($count);
        }

        /**
         * Assert if a batch was dispatched based on a truth-test callback.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function assertBatched(
            $callback,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertBatched($callback);
        }

        /**
         * Assert if a chain of jobs was dispatched.
         *
         * @param array $expectedChain
         *
         * @return void
         * @static
         */
        public static
        function assertChained(
            $expectedChain,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertChained($expectedChain);
        }

        /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertDispatched(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatched(
                $command,
                $callback,
            );
        }

        /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedAfterResponse(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedAfterResponse(
                $command,
                $callback,
            );
        }

        /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param string $command
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedAfterResponseTimes(
            $command,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedAfterResponseTimes(
                $command,
                $times,
            );
        }

        /**
         * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedSync(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedSync(
                $command,
                $callback,
            );
        }

        /**
         * Assert if a job was pushed synchronously a number of times.
         *
         * @param string $command
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedSyncTimes(
            $command,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedSyncTimes(
                $command,
                $times,
            );
        }

        /**
         * Assert if a job was pushed a number of times.
         *
         * @param string $command
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedTimes(
            $command,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedTimes(
                $command,
                $times,
            );
        }

        /**
         * Assert if a job was dispatched with an empty chain based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedWithoutChain(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedWithoutChain(
                $command,
                $callback,
            );
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotDispatched(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatched(
                $command,
                $callback,
            );
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotDispatchedAfterResponse(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatchedAfterResponse(
                $command,
                $callback,
            );
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotDispatchedSync(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatchedSync(
                $command,
                $callback,
            );
        }

        /**
         * Assert that no batched jobs were dispatched.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingBatched() {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingBatched();
        }

        /**
         * Assert that no jobs were dispatched.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingDispatched() {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingDispatched();
        }

        /**
         * Create a new batch of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|array|mixed $jobs
         *
         * @return \Illuminate\Bus\PendingBatch
         * @static
         */
        public static
        function batch(
            $jobs,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->batch($jobs);
        }

        /**
         * Get all of the pending batches matching a truth-test callback.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function batched(
            $callback,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->batched($callback);
        }

        /**
         * Create a new chain of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|array $jobs
         *
         * @return \Illuminate\Foundation\Bus\PendingChain
         * @static
         */
        public static
        function chain(
            $jobs,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->chain($jobs);
        }

        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         *
         * @return mixed
         * @static
         */
        public static
        function dispatch(
            $command,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatch($command);
        }

        /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         *
         * @return void
         * @static
         */
        public static
        function dispatchAfterResponse(
            $command,
            $handler = null,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            $instance->dispatchAfterResponse(
                $command,
                $handler,
            );
        }

        /**
         * Dispatch an empty job batch for testing.
         *
         * @param string $name
         *
         * @return \Illuminate\Bus\Batch
         * @static
         */
        public static
        function dispatchFakeBatch(
            $name = '',
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchFakeBatch($name);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
         *
         * @param mixed $command
         * @param mixed $handler
         *
         * @return mixed
         * @static
         */
        public static
        function dispatchNow(
            $command,
            $handler = null,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchNow(
                $command,
                $handler,
            );
        }

        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * Queueable jobs will be dispatched to the "sync" queue.
         *
         * @param mixed $command
         * @param mixed $handler
         *
         * @return mixed
         * @static
         */
        public static
        function dispatchSync(
            $command,
            $handler = null,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchSync(
                $command,
                $handler,
            );
        }

        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         *
         * @return mixed
         * @throws \RuntimeException
         * @static
         */
        public static
        function dispatchToQueue(
            $command,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchToQueue($command);
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function dispatched(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatched(
                $command,
                $callback,
            );
        }

        /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function dispatchedAfterResponse(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchedAfterResponse(
                $command,
                $callback,
            );
        }

        /**
         * Get all of the jobs dispatched synchronously matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function dispatchedSync(
            $command,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchedSync(
                $command,
                $callback,
            );
        }

        /**
         * Specify the jobs that should be dispatched instead of faked.
         *
         * @param array|string $jobsToDispatch
         *
         * @return void
         * @static
         */
        public static
        function except(
            $jobsToDispatch,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->except($jobsToDispatch);
        }

        /**
         * Attempt to find the batch with the given ID.
         *
         * @param string $batchId
         *
         * @return \Illuminate\Bus\Batch|null
         * @static
         */
        public static
        function findBatch(
            $batchId,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->findBatch($batchId);
        }

        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         *
         * @return bool|mixed
         * @static
         */
        public static
        function getCommandHandler(
            $command,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->getCommandHandler($command);
        }

        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         *
         * @return bool
         * @static
         */
        public static
        function hasCommandHandler(
            $command,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->hasCommandHandler($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         *
         * @return bool
         * @static
         */
        public static
        function hasDispatched(
            $command,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatched($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         *
         * @return bool
         * @static
         */
        public static
        function hasDispatchedAfterResponse(
            $command,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatchedAfterResponse($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         *
         * @return bool
         * @static
         */
        public static
        function hasDispatchedSync(
            $command,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatchedSync($command);
        }

        /**
         * Map a command to a handler.
         *
         * @param array $map
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static
        function map(
            $map,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->map($map);
        }

        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static
        function pipeThrough(
            $pipes,
        ) {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->pipeThrough($pipes);
        }

        /**
         * Record the fake pending batch dispatch.
         *
         * @param \Illuminate\Bus\PendingBatch $pendingBatch
         *
         * @return \Illuminate\Bus\Batch
         * @static
         */
        public static
        function recordPendingBatch(
            $pendingBatch,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->recordPendingBatch($pendingBatch);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cache\CacheManager
     * @mixin \Illuminate\Cache\Repository
     */
    class Cache {
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         *
         * @return bool
         * @static
         */
        public static
        function add(
            $key,
            $value,
            $ttl = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->add(
                $key,
                $value,
                $ttl,
            );
        }

        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool
         * @return bool True on success and false on failure.
         * @static
         */
        public static
        function clear() {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->clear();
        }

        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return int|bool
         * @static
         */
        public static
        function decrement(
            $key,
            $value = 1,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->decrement(
                $key,
                $value,
            );
        }

        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         *
         * @return bool
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static
         */
        public static
        function delete(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->delete($key);
        }

        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable<string> $keys A list of string-based keys to be deleted.
         *
         * @return bool
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static
        function deleteMultiple(
            $keys,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->deleteMultiple($keys);
        }

        /**
         * Get a cache driver instance.
         *
         * @param string|null $driver
         *
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Remove all items from the cache.
         *
         * @return bool
         * @static
         */
        public static
        function flush() {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->flush();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Cache\Repository::flushMacros();
        }

        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return bool
         * @static
         */
        public static
        function forever(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forever(
                $key,
                $value,
            );
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function forget(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forget($key);
        }

        /**
         * Unset the given driver instances.
         *
         * @param array|string|null $name
         *
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static
        function forgetDriver(
            $name = null,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->forgetDriver($name);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @template TCacheValue
         *
         * @param array|string $key
         * @param \Illuminate\Cache\TCacheValue|\Illuminate\Cache\(\Closure():  TCacheValue)  $default
         *
         * @return \Illuminate\Cache\(TCacheValue is null ? mixed : TCacheValue)
         * @static
         */
        public static
        function get(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->get(
                $key,
                $default,
            );
        }

        /**
         * Get the underlying database connection.
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function getConnection() {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->getConnection();
        }

        /**
         * Get the default cache time.
         *
         * @return int|null
         * @static
         */
        public static
        function getDefaultCacheTime() {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getDefaultCacheTime();
        }

        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static
        function getEventDispatcher() {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable<string> $keys A list of keys that can be obtained in a single operation.
         * @param mixed $default                          Default value to return for keys that do not exist.
         *
         * @return \Illuminate\Cache\iterable
         * @return \Psr\SimpleCache\iterable<string, mixed> A list of key => value pairs. Cache keys that do not exist
         *                                           or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static
        function getMultiple(
            $keys,
            $default = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getMultiple(
                $keys,
                $default,
            );
        }

        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */
        public static
        function getPrefix() {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->getPrefix();
        }

        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */
        public static
        function getStore() {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getStore();
        }

        /**
         * Determine if an item exists in the cache.
         *
         * @param array|string $key
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }

        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return int|bool
         * @static
         */
        public static
        function increment(
            $key,
            $value = 1,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->increment(
                $key,
                $value,
            );
        }

        /**
         * Get a lock instance.
         *
         * @param string $name
         * @param int $seconds
         * @param string|null $owner
         *
         * @return \Illuminate\Contracts\Cache\Lock
         * @static
         */
        public static
        function lock(
            $name,
            $seconds = 0,
            $owner = null,
        ) {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->lock(
                $name,
                $seconds,
                $owner,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Cache\Repository::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Retrieve multiple items from the cache by key.
         *
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         *
         * @return array
         * @static
         */
        public static
        function many(
            $keys,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->many($keys);
        }

        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function missing(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->missing($key);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Cache\Repository::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function offsetExists(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function offsetGet(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function offsetSet(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetSet(
                $key,
                $value,
            );
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         *
         * @return void
         * @static
         */
        public static
        function offsetUnset(
            $key,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Retrieve an item from the cache and delete it.
         *
         * @template TCacheValue
         *
         * @param array|string $key
         * @param \Illuminate\Cache\TCacheValue|\Illuminate\Cache\(\Closure():  TCacheValue)  $default
         *
         * @return \Illuminate\Cache\(TCacheValue is null ? mixed : TCacheValue)
         * @static
         */
        public static
        function pull(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->pull(
                $key,
                $default,
            );
        }

        /**
         * Disconnect the given driver and remove from local cache.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function purge(
            $name = null,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->purge($name);
        }

        /**
         * Store an item in the cache.
         *
         * @param array|string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         *
         * @return bool
         * @static
         */
        public static
        function put(
            $key,
            $value,
            $ttl = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->put(
                $key,
                $value,
                $ttl,
            );
        }

        /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         *
         * @return bool
         * @static
         */
        public static
        function putMany(
            $values,
            $ttl = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->putMany(
                $values,
                $ttl,
            );
        }

        /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @return void
         * @static
         */
        public static
        function refreshEventDispatcher() {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->refreshEventDispatcher();
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @template TCacheValue
         *
         * @param string $key
         * @param \Closure|\DateTimeInterface|\DateInterval|int|null $ttl
         * @param \Closure():  TCacheValue $callback
         *
         * @return \Illuminate\Cache\TCacheValue
         * @static
         */
        public static
        function remember(
            $key,
            $ttl,
            $callback,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->remember(
                $key,
                $ttl,
                $callback,
            );
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         *
         * @param string $key
         * @param \Closure():  TCacheValue $callback
         *
         * @return \Illuminate\Cache\TCacheValue
         * @static
         */
        public static
        function rememberForever(
            $key,
            $callback,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->rememberForever(
                $key,
                $callback,
            );
        }

        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         *
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static
        function repository(
            $store,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->repository($store);
        }

        /**
         * Restore a lock instance using the owner identifier.
         *
         * @param string $name
         * @param string $owner
         *
         * @return \Illuminate\Contracts\Cache\Lock
         * @static
         */
        public static
        function restoreLock(
            $name,
            $owner,
        ) {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->restoreLock(
                $name,
                $owner,
            );
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         *
         * @param string $key
         * @param \Closure():  TCacheValue $callback
         *
         * @return \Illuminate\Cache\TCacheValue
         * @static
         */
        public static
        function sear(
            $key,
            $callback,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->sear(
                $key,
                $callback,
            );
        }

        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key                   The key of the item to store.
         * @param mixed $value                  The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         *
         * @return bool
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static
         */
        public static
        function set(
            $key,
            $value,
            $ttl = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->set(
                $key,
                $value,
                $ttl,
            );
        }

        /**
         * Set the default cache time in seconds.
         *
         * @param int|null $seconds
         *
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static
        function setDefaultCacheTime(
            $seconds,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setDefaultCacheTime($seconds);
        }

        /**
         * Set the default cache driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         *
         * @return void
         * @static
         */
        public static
        function setEventDispatcher(
            $events,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->setEventDispatcher($events);
        }

        /**
         * Specify the name of the connection that should be used to manage locks.
         *
         * @param \Illuminate\Database\ConnectionInterface $connection
         *
         * @return \Illuminate\Cache\DatabaseStore
         * @static
         */
        public static
        function setLockConnection(
            $connection,
        ) {
            /** @var \Illuminate\Cache\DatabaseStore $instance */
            return $instance->setLockConnection($connection);
        }

        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl       Optional. The TTL value of this item. If no value is sent and
         *                                          the driver supports TTL then the library may set a default value
         *                                          for it or let the driver take care of that.
         *
         * @return bool
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static
         */
        public static
        function setMultiple(
            $values,
            $ttl = null,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setMultiple(
                $values,
                $ttl,
            );
        }

        /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static
        function store(
            $name = null,
        ) {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->store($name);
        }

        /**
         * Determine if the current store supports tags.
         *
         * @return bool
         * @static
         */
        public static
        function supportsTags() {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->supportsTags();
        }

        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         *
         * @return \Illuminate\Cache\TaggedCache
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function tags(
            $names,
        ) {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->tags($names);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Config\Repository
     */
    class Config {
        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */
        public static
        function all() {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->all();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Config\Repository::flushMacros();
        }

        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function get(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->get(
                $key,
                $default,
            );
        }

        /**
         * Get many configuration values.
         *
         * @param array $keys
         *
         * @return array
         * @static
         */
        public static
        function getMany(
            $keys,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->getMany($keys);
        }

        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $key,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Config\Repository::hasMacro($name);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Config\Repository::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Config\Repository::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function offsetExists(
            $key,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get a configuration option.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function offsetGet(
            $key,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function offsetSet(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetSet(
                $key,
                $value,
            );
        }

        /**
         * Unset a configuration option.
         *
         * @param string $key
         *
         * @return void
         * @static
         */
        public static
        function offsetUnset(
            $key,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function prepend(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->prepend(
                $key,
                $value,
            );
        }

        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function push(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->push(
                $key,
                $value,
            );
        }

        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function set(
            $key,
            $value = null,
        ) {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->set(
                $key,
                $value,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cookie\CookieJar
     */
    class Cookie {
        /**
         * Queue a cookie to expire with the next response.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         *
         * @return void
         * @static
         */
        public static
        function expire(
            $name,
            $path = null,
            $domain = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->expire(
                $name,
                $path,
                $domain,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Cookie\CookieJar::flushMacros();
        }

        /**
         * Flush the cookies which have been queued for the next request.
         *
         * @return \Illuminate\Cookie\CookieJar
         * @static
         */
        public static
        function flushQueuedCookies() {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->flushQueuedCookies();
        }

        /**
         * Create a cookie that lasts "forever" (400 days).
         *
         * @param string $name
         * @param string $value
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static
        function forever(
            $name,
            $value,
            $path = null,
            $domain = null,
            $secure = null,
            $httpOnly = true,
            $raw = false,
            $sameSite = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->forever(
                $name,
                $value,
                $path,
                $domain,
                $secure,
                $httpOnly,
                $raw,
                $sameSite,
            );
        }

        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static
        function forget(
            $name,
            $path = null,
            $domain = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->forget(
                $name,
                $path,
                $domain,
            );
        }

        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         * @static
         */
        public static
        function getQueuedCookies() {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->getQueuedCookies();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Cookie\CookieJar::hasMacro($name);
        }

        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @param string|null $path
         *
         * @return bool
         * @static
         */
        public static
        function hasQueued(
            $key,
            $path = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->hasQueued(
                $key,
                $path,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Cookie\CookieJar::macro(
                $name,
                $macro,
            );
        }

        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static
        function make(
            $name,
            $value,
            $minutes = 0,
            $path = null,
            $domain = null,
            $secure = null,
            $httpOnly = true,
            $raw = false,
            $sameSite = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->make(
                $name,
                $value,
                $minutes,
                $path,
                $domain,
                $secure,
                $httpOnly,
                $raw,
                $sameSite,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Cookie\CookieJar::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Queue a cookie to send with the next response.
         *
         * @param mixed $parameters
         *
         * @return void
         * @static
         */
        public static
        function queue(
            ...$parameters
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->queue(
                ...
                $parameters,
            );
        }

        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @param string|null $path
         *
         * @return \Symfony\Component\HttpFoundation\Cookie|null
         * @static
         */
        public static
        function queued(
            $key,
            $default = null,
            $path = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->queued(
                $key,
                $default,
                $path,
            );
        }

        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param string|null $sameSite
         *
         * @return \Illuminate\Cookie\CookieJar
         * @static
         */
        public static
        function setDefaultPathAndDomain(
            $path,
            $domain,
            $secure = false,
            $sameSite = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->setDefaultPathAndDomain(
                $path,
                $domain,
                $secure,
                $sameSite,
            );
        }

        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @param string|null $path
         *
         * @return void
         * @static
         */
        public static
        function unqueue(
            $name,
            $path = null,
        ) {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->unqueue(
                $name,
                $path,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Encryption\Encrypter
     */
    class Crypt {
        /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @param bool $unserialize
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static
         */
        public static
        function decrypt(
            $payload,
            $unserialize = true,
        ) {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->decrypt(
                $payload,
                $unserialize,
            );
        }

        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         *
         * @return string
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static
         */
        public static
        function decryptString(
            $payload,
        ) {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->decryptString($payload);
        }

        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         *
         * @return string
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static
         */
        public static
        function encrypt(
            $value,
            $serialize = true,
        ) {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->encrypt(
                $value,
                $serialize,
            );
        }

        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         *
         * @return string
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static
         */
        public static
        function encryptString(
            $value,
        ) {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->encryptString($value);
        }

        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         *
         * @return string
         * @static
         */
        public static
        function generateKey(
            $cipher,
        ) {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }

        /**
         * Get the encryption key that the encrypter is currently using.
         *
         * @return string
         * @static
         */
        public static
        function getKey() {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->getKey();
        }

        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         *
         * @return bool
         * @static
         */
        public static
        function supported(
            $key,
            $cipher,
        ) {
            return \Illuminate\Encryption\Encrypter::supported(
                $key,
                $cipher,
            );
        }

    }

    /**
     *
     *
     * @see https://carbon.nesbot.com/docs/
     * @see https://github.com/briannesbitt/Carbon/blob/master/src/Carbon/Factory.php
     * @method static \Illuminate\Support\Carbon create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0,
     *         $second = 0, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromDate($year = null, $month = null, $day = null, $tz = null)
     * @method static \Illuminate\Support\Carbon|false createFromFormat($format, $time, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromTimeString($time, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromTimestamp($timestamp, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromTimestampMs($timestamp, $tz = null)
     * @method static \Illuminate\Support\Carbon createFromTimestampUTC($timestamp)
     * @method static \Illuminate\Support\Carbon createMidnightDate($year = null, $month = null, $day = null, $tz =
     *         null)
     * @method static \Illuminate\Support\Carbon|false createSafe($year = null, $month = null, $day = null, $hour =
     *         null, $minute = null, $second = null, $tz = null)
     * @method static void disableHumanDiffOption($humanDiffOption)
     * @method static void enableHumanDiffOption($humanDiffOption)
     * @method static mixed executeWithLocale($locale, $func)
     * @method static \Illuminate\Support\Carbon fromSerialized($value)
     * @method static array getAvailableLocales()
     * @method static array getDays()
     * @method static int getHumanDiffOptions()
     * @method static array getIsoUnits()
     * @method static array getLastErrors()
     * @method static string getLocale()
     * @method static int getMidDayAt()
     * @method static \Illuminate\Support\Carbon|null getTestNow()
     * @method static \Symfony\Component\Translation\TranslatorInterface getTranslator()
     * @method static int getWeekEndsAt()
     * @method static int getWeekStartsAt()
     * @method static array getWeekendDays()
     * @method static bool hasFormat($date, $format)
     * @method static bool hasMacro($name)
     * @method static bool hasRelativeKeywords($time)
     * @method static bool hasTestNow()
     * @method static \Illuminate\Support\Carbon instance($date)
     * @method static bool isImmutable()
     * @method static bool isModifiableUnit($unit)
     * @method static bool isMutable()
     * @method static bool isStrictModeEnabled()
     * @method static bool localeHasDiffOneDayWords($locale)
     * @method static bool localeHasDiffSyntax($locale)
     * @method static bool localeHasDiffTwoDayWords($locale)
     * @method static bool localeHasPeriodSyntax($locale)
     * @method static bool localeHasShortUnits($locale)
     * @method static void macro($name, $macro)
     * @method static \Illuminate\Support\Carbon|null make($var)
     * @method static \Illuminate\Support\Carbon maxValue()
     * @method static \Illuminate\Support\Carbon minValue()
     * @method static void mixin($mixin)
     * @method static \Illuminate\Support\Carbon now($tz = null)
     * @method static \Illuminate\Support\Carbon parse($time = null, $tz = null)
     * @method static string pluralUnit(string $unit)
     * @method static void resetMonthsOverflow()
     * @method static void resetToStringFormat()
     * @method static void resetYearsOverflow()
     * @method static void serializeUsing($callback)
     * @method static void setHumanDiffOptions($humanDiffOptions)
     * @method static bool setLocale($locale)
     * @method static void setMidDayAt($hour)
     * @method static void setTestNow($testNow = null)
     * @method static void setToStringFormat($format)
     * @method static void setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator)
     * @method static void setUtf8($utf8)
     * @method static void setWeekEndsAt($day)
     * @method static void setWeekStartsAt($day)
     * @method static void setWeekendDays($days)
     * @method static bool shouldOverflowMonths()
     * @method static bool shouldOverflowYears()
     * @method static string singularUnit(string $unit)
     * @method static \Illuminate\Support\Carbon today($tz = null)
     * @method static \Illuminate\Support\Carbon tomorrow($tz = null)
     * @method static void useMonthsOverflow($monthsOverflow = true)
     * @method static void useStrictMode($strictModeEnabled = true)
     * @method static void useYearsOverflow($yearsOverflow = true)
     * @method static \Illuminate\Support\Carbon yesterday($tz = null)
     * @see \Illuminate\Support\DateFactory
     */
    class Date {
        /**
         * Use the given handler when generating dates (class name, callable, or factory).
         *
         * @param mixed $handler
         *
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function use(
            $handler,
        ) {
            return \Illuminate\Support\DateFactory::use($handler);
        }

        /**
         * Execute the given callable on each date creation.
         *
         * @param callable $callable
         *
         * @return void
         * @static
         */
        public static
        function useCallable(
            $callable,
        ) {
            \Illuminate\Support\DateFactory::useCallable($callable);
        }

        /**
         * Use the given date type (class) when generating dates.
         *
         * @param string $dateClass
         *
         * @return void
         * @static
         */
        public static
        function useClass(
            $dateClass,
        ) {
            \Illuminate\Support\DateFactory::useClass($dateClass);
        }

        /**
         * Use the default date class when generating dates.
         *
         * @return void
         * @static
         */
        public static
        function useDefault() {
            \Illuminate\Support\DateFactory::useDefault();
        }

        /**
         * Use the given Carbon factory when generating dates.
         *
         * @param object $factory
         *
         * @return void
         * @static
         */
        public static
        function useFactory(
            $factory,
        ) {
            \Illuminate\Support\DateFactory::useFactory($factory);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Database\DatabaseManager
     */
    class DB {
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return int
         * @static
         */
        public static
        function affectingStatement(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->affectingStatement(
                $query,
                $bindings,
            );
        }

        /**
         * Execute the callback after a transaction commits.
         *
         * @param callable $callback
         *
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static
        function afterCommit(
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->afterCommit($callback);
        }

        /**
         * Allow all the query duration handlers to run again, even if they have already run.
         *
         * @return void
         * @static
         */
        public static
        function allowQueryDurationHandlersToRunAgain(
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->allowQueryDurationHandlersToRunAgain();
        }

        /**
         * Get all of the drivers that are actually available.
         *
         * @return string[]
         * @static
         */
        public static
        function availableDrivers() {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->availableDrivers();
        }

        /**
         * Register a hook to be run just before a database query is executed.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function beforeExecuting(
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->beforeExecuting($callback);
        }

        /**
         * Start a new database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static
        function beginTransaction() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->beginTransaction();
        }

        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         *
         * @return void
         * @static
         */
        public static
        function bindValues(
            $statement,
            $bindings,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->bindValues(
                $statement,
                $bindings,
            );
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static
        function commit() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->commit();
        }

        /**
         * Get a database connection instance.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static
        function connection(
            $name = null,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->connection($name);
        }

        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         *
         * @return \Generator
         * @static
         */
        public static
        function cursor(
            $query,
            $bindings = [],
            $useReadPdo = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->cursor(
                $query,
                $bindings,
                $useReadPdo,
            );
        }

        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return int
         * @static
         */
        public static
        function delete(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->delete(
                $query,
                $bindings,
            );
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static
        function disableQueryLog() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->disableQueryLog();
        }

        /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function disconnect(
            $name = null,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->disconnect($name);
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static
        function enableQueryLog() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->enableQueryLog();
        }

        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         *
         * @return void
         * @static
         */
        public static
        function extend(
            $name,
            $resolver,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->extend(
                $name,
                $resolver,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Database\DatabaseManager::flushMacros();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static
        function flushQueryLog() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->flushQueryLog();
        }

        /**
         * Remove an extension connection resolver.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function forgetExtension(
            $name,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->forgetExtension($name);
        }

        /**
         * Reset the record modification state.
         *
         * @return void
         * @static
         */
        public static
        function forgetRecordModificationState() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->forgetRecordModificationState();
        }

        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         *
         * @return mixed
         * @static
         */
        public static
        function getConfig(
            $option = null,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getConfig($option);
        }

        /**
         * Return all of the created connections.
         *
         * @return array<string, \Illuminate\Database\Connection>
         * @static
         */
        public static
        function getConnections() {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getConnections();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static
        function getDatabaseName() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getDatabaseName();
        }

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultConnection() {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }

        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         *
         * @return \Doctrine\DBAL\Schema\Column
         * @static
         */
        public static
        function getDoctrineColumn(
            $table,
            $column,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getDoctrineColumn(
                $table,
                $column,
            );
        }

        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static
        function getDoctrineConnection() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getDoctrineConnection();
        }

        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
         * @static
         */
        public static
        function getDoctrineSchemaManager() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getDoctrineSchemaManager();
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDriverName() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getDriverName();
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static
        function getEventDispatcher() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static
        function getName() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getName();
        }

        /**
         * Get the database connection full name.
         *
         * @return string|null
         * @static
         */
        public static
        function getNameWithReadWriteType() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getNameWithReadWriteType();
        }

        /**
         * Get the current PDO connection.
         *
         * @return \PDO
         * @static
         */
        public static
        function getPdo() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getPdo();
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static
        function getPostProcessor() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getPostProcessor();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static
        function getQueryGrammar() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getQueryGrammar();
        }

        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static
        function getQueryLog() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getQueryLog();
        }

        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static
        function getRawPdo() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getRawPdo();
        }

        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static
        function getRawReadPdo() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getRawReadPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO
         * @static
         */
        public static
        function getReadPdo() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getReadPdo();
        }

        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         *
         * @return mixed
         * @static
         */
        public static
        function getResolver(
            $driver,
        ) {            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getResolver($driver);
        }

        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\PostgresBuilder
         * @static
         */
        public static
        function getSchemaBuilder() {
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getSchemaBuilder();
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static
        function getSchemaGrammar() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getSchemaGrammar();
        }

        /**
         * Get the schema state for the connection.
         *
         * @param \Illuminate\Filesystem\Filesystem|null $files
         * @param callable|null $processFactory
         *
         * @return \Illuminate\Database\Schema\PostgresSchemaState
         * @static
         */
        public static
        function getSchemaState(
            $files = null,
            $processFactory = null,
        ) {
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getSchemaState(
                $files,
                $processFactory,
            );
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static
        function getTablePrefix() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->getTablePrefix();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Database\DatabaseManager::hasMacro($name);
        }

        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool
         * @static
         */
        public static
        function hasModifiedRecords() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->hasModifiedRecords();
        }

        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return bool
         * @static
         */
        public static
        function insert(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->insert(
                $query,
                $bindings,
            );
        }

        /**
         * Is Doctrine available?
         *
         * @return bool
         * @static
         */
        public static
        function isDoctrineAvailable() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->isDoctrineAvailable();
        }

        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function listen(
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->listen($callback);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         *
         * @return void
         * @static
         */
        public static
        function logQuery(
            $query,
            $bindings,
            $time = null,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->logQuery(
                $query,
                $bindings,
                $time,
            );
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static
        function logging() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->logging();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Database\DatabaseManager::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Database\DatabaseManager::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         *
         * @return array
         * @static
         */
        public static
        function prepareBindings(
            $bindings,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->prepareBindings($bindings);
        }

        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         *
         * @return array
         * @static
         */
        public static
        function pretend(
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->pretend($callback);
        }

        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool
         * @static
         */
        public static
        function pretending() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->pretending();
        }

        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function purge(
            $name = null,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->purge($name);
        }

        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function query() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->query();
        }

        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         *
         * @return \Illuminate\Contracts\Database\Query\Expression
         * @static
         */
        public static
        function raw(
            $value,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->raw($value);
        }

        /**
         * Reconnect to the given database.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static
        function reconnect(
            $name = null,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->reconnect($name);
        }

        /**
         * Reconnect to the database if a PDO connection is missing.
         *
         * @return void
         * @static
         */
        public static
        function reconnectIfMissingConnection() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->reconnectIfMissingConnection();
        }

        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         *
         * @return void
         * @static
         */
        public static
        function recordsHaveBeenModified(
            $value = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->recordsHaveBeenModified($value);
        }

        /**
         * Register a custom Doctrine type.
         *
         * @param string $class
         * @param string $name
         * @param string $type
         *
         * @return void
         * @throws \Doctrine\DBAL\Exception
         * @throws \RuntimeException
         * @static
         */
        public static
        function registerDoctrineType(
            $class,
            $name,
            $type,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->registerDoctrineType(
                $class,
                $name,
                $type,
            );
        }

        /**
         * Reset the duration of all run queries.
         *
         * @return void
         * @static
         */
        public static
        function resetTotalQueryDuration() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->resetTotalQueryDuration();
        }

        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function resolverFor(
            $driver,
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::resolverFor(
                $driver,
                $callback,
            );
        }

        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static
        function rollBack(
            $toLevel = null,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->rollBack($toLevel);
        }

        /**
         * Run a select statement and return the first column of the first row.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         *
         * @return mixed
         * @throws \Illuminate\Database\MultipleColumnsSelectedException
         * @static
         */
        public static
        function scalar(
            $query,
            $bindings = [],
            $useReadPdo = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->scalar(
                $query,
                $bindings,
                $useReadPdo,
            );
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         *
         * @return array
         * @static
         */
        public static
        function select(
            $query,
            $bindings = [],
            $useReadPdo = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->select(
                $query,
                $bindings,
                $useReadPdo,
            );
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return array
         * @static
         */
        public static
        function selectFromWriteConnection(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->selectFromWriteConnection(
                $query,
                $bindings,
            );
        }

        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         *
         * @return mixed
         * @static
         */
        public static
        function selectOne(
            $query,
            $bindings = [],
            $useReadPdo = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->selectOne(
                $query,
                $bindings,
                $useReadPdo,
            );
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Database\DatabaseManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the name of the connected database.
         *
         * @param string $database
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setDatabaseName(
            $database,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setDatabaseName($database);
        }

        /**
         * Set the default connection name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultConnection(
            $name,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setDefaultConnection($name);
        }

        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setEventDispatcher(
            $events,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setEventDispatcher($events);
        }

        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setPdo(
            $pdo,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setPdo($pdo);
        }

        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setPostProcessor(
            $processor,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setPostProcessor($processor);
        }

        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setQueryGrammar(
            $grammar,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setQueryGrammar($grammar);
        }

        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setReadPdo(
            $pdo,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setReadPdo($pdo);
        }

        /**
         * Set the read / write type of the connection.
         *
         * @param string|null $readWriteType
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setReadWriteType(
            $readWriteType,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setReadWriteType($readWriteType);
        }

        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         *
         * @return void
         * @static
         */
        public static
        function setReconnector(
            $reconnector,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setReconnector($reconnector);
        }

        /**
         * Set the record modification state.
         *
         * @param bool $value
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setRecordModificationState(
            $value,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setRecordModificationState($value);
        }

        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setSchemaGrammar(
            $grammar,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setSchemaGrammar($grammar);
        }

        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setTablePrefix(
            $prefix,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setTablePrefix($prefix);
        }

        /**
         * Set the transaction manager instance on the connection.
         *
         * @param \Illuminate\Database\DatabaseTransactionsManager $manager
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function setTransactionManager(
            $manager,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->setTransactionManager($manager);
        }

        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return bool
         * @static
         */
        public static
        function statement(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->statement(
                $query,
                $bindings,
            );
        }

        /**
         * Get all of the support drivers.
         *
         * @return string[]
         * @static
         */
        public static
        function supportedDrivers() {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->supportedDrivers();
        }

        /**
         * Begin a fluent query against a database table.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $table
         * @param string|null $as
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function table(
            $table,
            $as = null,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->table(
                $table,
                $as,
            );
        }

        /**
         * Get the duration of all run queries in milliseconds.
         *
         * @return float
         * @static
         */
        public static
        function totalQueryDuration() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->totalQueryDuration();
        }

        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         *
         * @return mixed
         * @throws \Throwable
         * @static
         */
        public static
        function transaction(
            $callback,
            $attempts = 1,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->transaction(
                $callback,
                $attempts,
            );
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static
        function transactionLevel() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->transactionLevel();
        }

        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         *
         * @return bool
         * @static
         */
        public static
        function unprepared(
            $query,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->unprepared($query);
        }

        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void
         * @static
         */
        public static
        function unsetEventDispatcher() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->unsetEventDispatcher();
        }

        /**
         * Unset the transaction manager for this connection.
         *
         * @return void
         * @static
         */
        public static
        function unsetTransactionManager() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->unsetTransactionManager();
        }

        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return int
         * @static
         */
        public static
        function update(
            $query,
            $bindings = [],
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->update(
                $query,
                $bindings,
            );
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static
        function useDefaultPostProcessor() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->useDefaultPostProcessor();
        }

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static
        function useDefaultQueryGrammar() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static
        function useDefaultSchemaGrammar() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->useDefaultSchemaGrammar();
        }

        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param bool $value
         *
         * @return \Illuminate\Database\PostgresConnection
         * @static
         */
        public static
        function useWriteConnectionWhenReading(
            $value = true,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->useWriteConnectionWhenReading($value);
        }

        /**
         * Set the default database connection for the callback execution.
         *
         * @param string $name
         * @param callable $callback
         *
         * @return mixed
         * @static
         */
        public static
        function usingConnection(
            $name,
            $callback,
        ) {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->usingConnection(
                $name,
                $callback,
            );
        }

        /**
         * Indicates whether native alter operations will be used when dropping, renaming, or modifying columns, even
         * if Doctrine DBAL is installed.
         *
         * @return bool
         * @static
         */
        public static
        function usingNativeSchemaOperations() {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->usingNativeSchemaOperations();
        }

        /**
         * Register a callback to be invoked when the connection queries for longer than a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         *
         * @return void
         * @static
         */
        public static
        function whenQueryingForLongerThan(
            $threshold,
            $handler,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            $instance->whenQueryingForLongerThan(
                $threshold,
                $handler,
            );
        }

        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         *
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static
        function withTablePrefix(
            $grammar,
        ) {            //Method inherited from \Illuminate\Database\Connection
            /** @var \Illuminate\Database\PostgresConnection $instance */
            return $instance->withTablePrefix($grammar);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Events\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\EventFake
     */
    class Event {
        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertDispatched(
            $event,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatched(
                $event,
                $callback,
            );
        }

        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertDispatchedTimes(
            $event,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatchedTimes(
                $event,
                $times,
            );
        }

        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string $expectedEvent
         * @param string|array $expectedListener
         *
         * @return void
         * @static
         */
        public static
        function assertListening(
            $expectedEvent,
            $expectedListener,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertListening(
                $expectedEvent,
                $expectedListener,
            );
        }

        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotDispatched(
            $event,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNotDispatched(
                $event,
                $callback,
            );
        }

        /**
         * Assert that no events were dispatched.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingDispatched() {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNothingDispatched();
        }

        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         *
         * @return \Closure
         * @static
         */
        public static
        function createClassListener(
            $listener,
            $wildcard = false,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->createClassListener(
                $listener,
                $wildcard,
            );
        }

        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         *
         * @return array|null
         * @static
         */
        public static
        function dispatch(
            $event,
            $payload = [],
            $halt = false,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->dispatch(
                $event,
                $payload,
                $halt,
            );
        }

        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function dispatched(
            $event,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->dispatched(
                $event,
                $callback,
            );
        }

        /**
         * Specify the events that should be dispatched instead of faked.
         *
         * @param array|string $eventsToDispatch
         *
         * @return \Illuminate\Support\Testing\Fakes\EventFake
         * @static
         */
        public static
        function except(
            $eventsToDispatch,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->except($eventsToDispatch);
        }

        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         *
         * @return void
         * @static
         */
        public static
        function flush(
            $event,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->flush($event);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Events\Dispatcher::flushMacros();
        }

        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         *
         * @return void
         * @static
         */
        public static
        function forget(
            $event,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forget($event);
        }

        /**
         * Forget all of the pushed listeners.
         *
         * @return void
         * @static
         */
        public static
        function forgetPushed() {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forgetPushed();
        }

        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         *
         * @return array
         * @static
         */
        public static
        function getListeners(
            $eventName,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getListeners($eventName);
        }

        /**
         * Gets the raw, unprepared listeners.
         *
         * @return array
         * @static
         */
        public static
        function getRawListeners() {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getRawListeners();
        }

        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         *
         * @return bool
         * @static
         */
        public static
        function hasDispatched(
            $event,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->hasDispatched($event);
        }

        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         *
         * @return bool
         * @static
         */
        public static
        function hasListeners(
            $eventName,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasListeners($eventName);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }

        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         *
         * @return bool
         * @static
         */
        public static
        function hasWildcardListeners(
            $eventName,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasWildcardListeners($eventName);
        }

        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $events
         * @param \Closure|string|array|null $listener
         *
         * @return void
         * @static
         */
        public static
        function listen(
            $events,
            $listener = null,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->listen(
                $events,
                $listener,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Events\Dispatcher::macro(
                $name,
                $macro,
            );
        }

        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $listener
         * @param bool $wildcard
         *
         * @return \Closure
         * @static
         */
        public static
        function makeListener(
            $listener,
            $wildcard = false,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->makeListener(
                $listener,
                $wildcard,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Events\Dispatcher::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param object|array $payload
         *
         * @return void
         * @static
         */
        public static
        function push(
            $event,
            $payload = [],
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->push(
                $event,
                $payload,
            );
        }

        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         *
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static
        function setQueueResolver(
            $resolver,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setQueueResolver($resolver);
        }

        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         *
         * @return void
         * @static
         */
        public static
        function subscribe(
            $subscriber,
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->subscribe($subscriber);
        }

        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         *
         * @return array|null
         * @static
         */
        public static
        function until(
            $event,
            $payload = [],
        ) {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->until(
                $event,
                $payload,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Filesystem\Filesystem
     */
    class File {
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         *
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static
        function allFiles(
            $directory,
            $hidden = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->allFiles(
                $directory,
                $hidden,
            );
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         *
         * @return int
         * @static
         */
        public static
        function append(
            $path,
            $data,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->append(
                $path,
                $data,
            );
        }

        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function basename(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->basename($path);
        }

        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         *
         * @return mixed
         * @static
         */
        public static
        function chmod(
            $path,
            $mode = null,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->chmod(
                $path,
                $mode,
            );
        }

        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         *
         * @return bool
         * @static
         */
        public static
        function cleanDirectory(
            $directory,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         *
         * @return bool
         * @static
         */
        public static
        function copy(
            $path,
            $target,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copy(
                $path,
                $target,
            );
        }

        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         *
         * @return bool
         * @static
         */
        public static
        function copyDirectory(
            $directory,
            $destination,
            $options = null,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copyDirectory(
                $directory,
                $destination,
                $options,
            );
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         *
         * @return bool
         * @static
         */
        public static
        function delete(
            $paths,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->delete($paths);
        }

        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         *
         * @return bool
         * @static
         */
        public static
        function deleteDirectories(
            $directory,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }

        /**
         * Recursively delete a directory.
         *
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         *
         * @return bool
         * @static
         */
        public static
        function deleteDirectory(
            $directory,
            $preserve = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectory(
                $directory,
                $preserve,
            );
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         *
         * @return array
         * @static
         */
        public static
        function directories(
            $directory,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->directories($directory);
        }

        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function dirname(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->dirname($path);
        }

        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         *
         * @return void
         * @static
         */
        public static
        function ensureDirectoryExists(
            $path,
            $mode = 493,
            $recursive = true,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->ensureDirectoryExists(
                $path,
                $mode,
                $recursive,
            );
        }

        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function exists(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->exists($path);
        }

        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function extension(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->extension($path);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         *
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static
        function files(
            $directory,
            $hidden = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->files(
                $directory,
                $hidden,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Filesystem\Filesystem::flushMacros();
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         *
         * @return string
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static
        function get(
            $path,
            $lock = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->get(
                $path,
                $lock,
            );
        }

        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static
        function getRequire(
            $path,
            $data = [],
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->getRequire(
                $path,
                $data,
            );
        }

        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         *
         * @return array
         * @static
         */
        public static
        function glob(
            $pattern,
            $flags = 0,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->glob(
                $pattern,
                $flags,
            );
        }

        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         *
         * @return string|null
         * @throws \RuntimeException
         * @static
         */
        public static
        function guessExtension(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->guessExtension($path);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }

        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param string $firstFile
         * @param string $secondFile
         *
         * @return bool
         * @static
         */
        public static
        function hasSameHash(
            $firstFile,
            $secondFile,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hasSameHash(
                $firstFile,
                $secondFile,
            );
        }

        /**
         * Get the hash of the file at the given path.
         *
         * @param string $path
         * @param string $algorithm
         *
         * @return string
         * @static
         */
        public static
        function hash(
            $path,
            $algorithm = 'md5',
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hash(
                $path,
                $algorithm,
            );
        }

        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         *
         * @return bool
         * @static
         */
        public static
        function isDirectory(
            $directory,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isDirectory($directory);
        }

        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param string $directory
         * @param bool $ignoreDotFiles
         *
         * @return bool
         * @static
         */
        public static
        function isEmptyDirectory(
            $directory,
            $ignoreDotFiles = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isEmptyDirectory(
                $directory,
                $ignoreDotFiles,
            );
        }

        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         *
         * @return bool
         * @static
         */
        public static
        function isFile(
            $file,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isFile($file);
        }

        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function isReadable(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isReadable($path);
        }

        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function isWritable(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isWritable($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         *
         * @return int
         * @static
         */
        public static
        function lastModified(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lastModified($path);
        }

        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         *
         * @return \Illuminate\Support\LazyCollection
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static
        function lines(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lines($path);
        }

        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         *
         * @return void
         * @static
         */
        public static
        function link(
            $target,
            $link,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->link(
                $target,
                $link,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Filesystem\Filesystem::macro(
                $name,
                $macro,
            );
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         *
         * @return bool
         * @static
         */
        public static
        function makeDirectory(
            $path,
            $mode = 493,
            $recursive = false,
            $force = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->makeDirectory(
                $path,
                $mode,
                $recursive,
                $force,
            );
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         *
         * @return string|false
         * @static
         */
        public static
        function mimeType(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->mimeType($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function missing(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->missing($path);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Filesystem\Filesystem::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         *
         * @return bool
         * @static
         */
        public static
        function move(
            $path,
            $target,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->move(
                $path,
                $target,
            );
        }

        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         *
         * @return bool
         * @static
         */
        public static
        function moveDirectory(
            $from,
            $to,
            $overwrite = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->moveDirectory(
                $from,
                $to,
                $overwrite,
            );
        }

        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function name(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->name($path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         *
         * @return int
         * @static
         */
        public static
        function prepend(
            $path,
            $data,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->prepend(
                $path,
                $data,
            );
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         *
         * @return int|bool
         * @static
         */
        public static
        function put(
            $path,
            $contents,
            $lock = false,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->put(
                $path,
                $contents,
                $lock,
            );
        }

        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         *
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static
        function relativeLink(
            $target,
            $link,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->relativeLink(
                $target,
                $link,
            );
        }

        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @param int|null $mode
         *
         * @return void
         * @static
         */
        public static
        function replace(
            $path,
            $content,
            $mode = null,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replace(
                $path,
                $content,
                $mode,
            );
        }

        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         *
         * @return void
         * @static
         */
        public static
        function replaceInFile(
            $search,
            $replace,
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replaceInFile(
                $search,
                $replace,
                $path,
            );
        }

        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static
        function requireOnce(
            $path,
            $data = [],
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->requireOnce(
                $path,
                $data,
            );
        }

        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function sharedGet(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->sharedGet($path);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         *
         * @return int
         * @static
         */
        public static
        function size(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->size($path);
        }

        /**
         * Get the file type of a given file.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function type(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->type($path);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         *
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         *
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static
        function unless(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->unless(
                $value,
                $callback,
                $default,
            );
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         *
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         *
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static
        function when(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->when(
                $value,
                $callback,
                $default,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Auth\Access\Gate
     */
    class Gate {
        /**
         * Get all of the defined abilities.
         *
         * @return array
         * @static
         */
        public static
        function abilities() {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->abilities();
        }

        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function after(
            $callback,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->after($callback);
        }

        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is
         * false.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         *
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static
        function allowIf(
            $condition,
            $message = null,
            $code = null,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allowIf(
                $condition,
                $message,
                $code,
            );
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static
        function allows(
            $ability,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allows(
                $ability,
                $arguments,
            );
        }

        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static
        function any(
            $abilities,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->any(
                $abilities,
                $arguments,
            );
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         *
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static
        function authorize(
            $ability,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->authorize(
                $ability,
                $arguments,
            );
        }

        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function before(
            $callback,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->before($callback);
        }

        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static
        function check(
            $abilities,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->check(
                $abilities,
                $arguments,
            );
        }

        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|array|string $callback
         *
         * @return \Illuminate\Auth\Access\Gate
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function define(
            $ability,
            $callback,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->define(
                $ability,
                $callback,
            );
        }

        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static
        function denies(
            $ability,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denies(
                $ability,
                $arguments,
            );
        }

        /**
         * Deny with a 404 HTTP status code.
         *
         * @param string|null $message
         * @param int|null $code
         *
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static
        function denyAsNotFound(
            $message = null,
            $code = null,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyAsNotFound(
                $message,
                $code,
            );
        }

        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is
         * true.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         *
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static
        function denyIf(
            $condition,
            $message = null,
            $code = null,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyIf(
                $condition,
                $message,
                $code,
            );
        }

        /**
         * Deny with a HTTP status code.
         *
         * @param int $status
         * @param string|null $message
         * @param int|null $code
         *
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static
        function denyWithStatus(
            $status,
            $message = null,
            $code = null,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyWithStatus(
                $status,
                $message,
                $code,
            );
        }

        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         *
         * @return static
         * @static
         */
        public static
        function forUser(
            $user,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->forUser($user);
        }

        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         *
         * @return mixed
         * @static
         */
        public static
        function getPolicyFor(
            $class,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->getPolicyFor($class);
        }

        /**
         * Specify a callback to be used to guess policy names.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function guessPolicyNamesUsing(
            $callback,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->guessPolicyNamesUsing($callback);
        }

        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $ability,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->has($ability);
        }

        /**
         * Inspect the user for the given ability.
         *
         * @param string $ability
         * @param array|mixed $arguments
         *
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static
        function inspect(
            $ability,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->inspect(
                $ability,
                $arguments,
            );
        }

        /**
         * Determine if all of the given abilities should be denied for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static
        function none(
            $abilities,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->none(
                $abilities,
                $arguments,
            );
        }

        /**
         * Get all of the defined policies.
         *
         * @return array
         * @static
         */
        public static
        function policies() {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policies();
        }

        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function policy(
            $class,
            $policy,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policy(
                $class,
                $policy,
            );
        }

        /**
         * Get the raw result from the authorization callback.
         *
         * @param string $ability
         * @param array|mixed $arguments
         *
         * @return mixed
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static
        function raw(
            $ability,
            $arguments = [],
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->raw(
                $ability,
                $arguments,
            );
        }

        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static
        function resolvePolicy(
            $class,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resolvePolicy($class);
        }

        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array|null $abilities
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function resource(
            $name,
            $class,
            $abilities = null,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resource(
                $name,
                $class,
                $abilities,
            );
        }

        /**
         * Set the container instance used by the gate.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Hashing\HashManager
     * @see \Illuminate\Hashing\AbstractHasher
     */
    class Hash {
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         *
         * @return bool
         * @static
         */
        public static
        function check(
            $value,
            $hashedValue,
            $options = [],
        ) {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->check(
                $value,
                $hashedValue,
                $options,
            );
        }

        /**
         * Create an instance of the Argon2id hash Driver.
         *
         * @return \Illuminate\Hashing\Argon2IdHasher
         * @static
         */
        public static
        function createArgon2idDriver() {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createArgon2idDriver();
        }

        /**
         * Create an instance of the Argon2i hash Driver.
         *
         * @return \Illuminate\Hashing\ArgonHasher
         * @static
         */
        public static
        function createArgonDriver() {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createArgonDriver();
        }

        /**
         * Create an instance of the Bcrypt hash Driver.
         *
         * @return \Illuminate\Hashing\BcryptHasher
         * @static
         */
        public static
        function createBcryptDriver() {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createBcryptDriver();
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         *
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static
        function forgetDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static
        function getContainer() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getContainer();
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static
        function getDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get information about the given hashed value.
         *
         * @param string $hashedValue
         *
         * @return array
         * @static
         */
        public static
        function info(
            $hashedValue,
        ) {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->info($hashedValue);
        }

        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         *
         * @return string
         * @static
         */
        public static
        function make(
            $value,
            $options = [],
        ) {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->make(
                $value,
                $options,
            );
        }

        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         *
         * @return bool
         * @static
         */
        public static
        function needsRehash(
            $hashedValue,
            $options = [],
        ) {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->needsRehash(
                $hashedValue,
                $options,
            );
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @method static \Illuminate\Http\Client\PendingRequest baseUrl(string $url)
     * @method static \Illuminate\Http\Client\PendingRequest withBody(string $content, string $contentType =
     *         'application/json')
     * @method static \Illuminate\Http\Client\PendingRequest asJson()
     * @method static \Illuminate\Http\Client\PendingRequest asForm()
     * @method static \Illuminate\Http\Client\PendingRequest attach(string|array $name, string|resource $contents = '',
     *         string|null $filename = null, array $headers = [])
     * @method static \Illuminate\Http\Client\PendingRequest asMultipart()
     * @method static \Illuminate\Http\Client\PendingRequest bodyFormat(string $format)
     * @method static \Illuminate\Http\Client\PendingRequest contentType(string $contentType)
     * @method static \Illuminate\Http\Client\PendingRequest acceptJson()
     * @method static \Illuminate\Http\Client\PendingRequest accept(string $contentType)
     * @method static \Illuminate\Http\Client\PendingRequest withHeaders(array $headers)
     * @method static \Illuminate\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
     * @method static \Illuminate\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
     * @method static \Illuminate\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
     * @method static \Illuminate\Http\Client\PendingRequest withUserAgent(string $userAgent)
     * @method static \Illuminate\Http\Client\PendingRequest withUrlParameters(array $parameters = [])
     * @method static \Illuminate\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
     * @method static \Illuminate\Http\Client\PendingRequest maxRedirects(int $max)
     * @method static \Illuminate\Http\Client\PendingRequest withoutRedirecting()
     * @method static \Illuminate\Http\Client\PendingRequest withoutVerifying()
     * @method static \Illuminate\Http\Client\PendingRequest sink(string|resource $to)
     * @method static \Illuminate\Http\Client\PendingRequest timeout(int $seconds)
     * @method static \Illuminate\Http\Client\PendingRequest connectTimeout(int $seconds)
     * @method static \Illuminate\Http\Client\PendingRequest retry(int $times, int $sleepMilliseconds = 0,
     *         callable|null $when = null, bool $throw = true)
     * @method static \Illuminate\Http\Client\PendingRequest withOptions(array $options)
     * @method static \Illuminate\Http\Client\PendingRequest withMiddleware(callable $middleware)
     * @method static \Illuminate\Http\Client\PendingRequest beforeSending(callable $callback)
     * @method static \Illuminate\Http\Client\PendingRequest throw(callable|null $callback = null)
     * @method static \Illuminate\Http\Client\PendingRequest throwIf(callable|bool $condition, callable|null
     *         $throwCallback = null)
     * @method static \Illuminate\Http\Client\PendingRequest throwUnless(bool $condition)
     * @method static \Illuminate\Http\Client\PendingRequest dump()
     * @method static \Illuminate\Http\Client\PendingRequest dd()
     * @method static \Illuminate\Http\Client\Response get(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response head(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response post(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response patch(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response put(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response delete(string $url, array $data = [])
     * @method static array pool(callable $callback)
     * @method static \Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
     * @method static \GuzzleHttp\Client buildClient()
     * @method static \GuzzleHttp\Client createClient(\GuzzleHttp\HandlerStack $handlerStack)
     * @method static \GuzzleHttp\HandlerStack buildHandlerStack()
     * @method static \GuzzleHttp\HandlerStack pushHandlers(\GuzzleHttp\HandlerStack $handlerStack)
     * @method static \Closure buildBeforeSendingHandler()
     * @method static \Closure buildRecorderHandler()
     * @method static \Closure buildStubHandler()
     * @method static \GuzzleHttp\Psr7\RequestInterface runBeforeSendingCallbacks(\GuzzleHttp\Psr7\RequestInterface
     *         $request, array $options)
     * @method static array mergeOptions(array ...$options)
     * @method static \Illuminate\Http\Client\PendingRequest stub(callable $callback)
     * @method static \Illuminate\Http\Client\PendingRequest async(bool $async = true)
     * @method static \GuzzleHttp\Promise\PromiseInterface|null getPromise()
     * @method static \Illuminate\Http\Client\PendingRequest setClient(\GuzzleHttp\Client $client)
     * @method static \Illuminate\Http\Client\PendingRequest setHandler(callable $handler)
     * @method static array getOptions()
     * @method static \Illuminate\Http\Client\PendingRequest|mixed when(\Closure|mixed|null $value = null,
     *         callable|null $callback = null, callable|null $default = null)
     * @method static \Illuminate\Http\Client\PendingRequest|mixed unless(\Closure|mixed|null $value = null,
     *         callable|null $callback = null, callable|null $default = null)
     *
     * @see \Illuminate\Http\Client\Factory
     */
    class Http {
        /**
         * Indicate that an exception should not be thrown if any request is not faked.
         *
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static
        function allowStrayRequests() {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->allowStrayRequests();
        }

        /**
         * Assert that a request / response pair was not recorded matching a given truth test.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotSent(
            $callback,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNotSent($callback);
        }

        /**
         * Assert that no request / response pair was recorded.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingSent() {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert that a request / response pair was recorded matching a given truth test.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function assertSent(
            $callback,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSent($callback);
        }

        /**
         * Assert how many requests have been recorded.
         *
         * @param int $count
         *
         * @return void
         * @static
         */
        public static
        function assertSentCount(
            $count,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentCount($count);
        }

        /**
         * Assert that the given request was sent in the given order.
         *
         * @param array $callbacks
         *
         * @return void
         * @static
         */
        public static
        function assertSentInOrder(
            $callbacks,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentInOrder($callbacks);
        }

        /**
         * Assert that every created response sequence is empty.
         *
         * @return void
         * @static
         */
        public static
        function assertSequencesAreEmpty() {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSequencesAreEmpty();
        }

        /**
         * Register a stub callable that will intercept requests and be able to return stub responses.
         *
         * @param callable|array|null $callback
         *
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static
        function fake(
            $callback = null,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fake($callback);
        }

        /**
         * Register a response sequence for the given URL pattern.
         *
         * @param string $url
         *
         * @return \Illuminate\Http\Client\ResponseSequence
         * @static
         */
        public static
        function fakeSequence(
            $url = '*',
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fakeSequence($url);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Http\Client\Factory::flushMacros();
        }

        /**
         * Get the current event dispatcher implementation.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher|null
         * @static
         */
        public static
        function getDispatcher() {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Http\Client\Factory::hasMacro($name);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Http\Client\Factory::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Http\Client\Factory::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Indicate that an exception should be thrown if any request is not faked.
         *
         * @param bool $prevent
         *
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static
        function preventStrayRequests(
            $prevent = true,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->preventStrayRequests($prevent);
        }

        /**
         * Record a request response pair.
         *
         * @param \Illuminate\Http\Client\Request $request
         * @param \Illuminate\Http\Client\Response $response
         *
         * @return void
         * @static
         */
        public static
        function recordRequestResponsePair(
            $request,
            $response,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->recordRequestResponsePair(
                $request,
                $response,
            );
        }

        /**
         * Get a collection of the request / response pairs matching the given truth test.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function recorded(
            $callback = null,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->recorded($callback);
        }

        /**
         * Create a new response instance for use during stubbing.
         *
         * @param array|string|null $body
         * @param int $status
         * @param array $headers
         *
         * @return \GuzzleHttp\Promise\PromiseInterface
         * @static
         */
        public static
        function response(
            $body = null,
            $status = 200,
            $headers = [],
        ) {
            return \Illuminate\Http\Client\Factory::response(
                $body,
                $status,
                $headers,
            );
        }

        /**
         * Get an invokable object that returns a sequence of responses in order for use during stubbing.
         *
         * @param array $responses
         *
         * @return \Illuminate\Http\Client\ResponseSequence
         * @static
         */
        public static
        function sequence(
            $responses = [],
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->sequence($responses);
        }

        /**
         * Stub the given URL using the given callback.
         *
         * @param string $url
         * @param \Illuminate\Http\Client\Response|\GuzzleHttp\Promise\PromiseInterface|callable $callback
         *
         * @return \Illuminate\Http\Client\Factory
         * @static
         */
        public static
        function stubUrl(
            $url,
            $callback,
        ) {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->stubUrl(
                $url,
                $callback,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Translation\Translator
     */
    class Lang {
        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         *
         * @return void
         * @static
         */
        public static
        function addJsonPath(
            $path,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addJsonPath($path);
        }

        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         *
         * @return void
         * @static
         */
        public static
        function addLines(
            $lines,
            $locale,
            $namespace = '*',
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addLines(
                $lines,
                $locale,
                $namespace,
            );
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         *
         * @return void
         * @static
         */
        public static
        function addNamespace(
            $namespace,
            $hint,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addNamespace(
                $namespace,
                $hint,
            );
        }

        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param \Countable|int|array $number
         * @param array $replace
         * @param string|null $locale
         *
         * @return string
         * @static
         */
        public static
        function choice(
            $key,
            $number,
            $replace = [],
            $locale = null,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->choice(
                $key,
                $number,
                $replace,
                $locale,
            );
        }

        /**
         * Specify a callback that should be invoked to determined the applicable locale array.
         *
         * @param callable $callback
         *
         * @return void
         * @static
         */
        public static
        function determineLocalesUsing(
            $callback,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->determineLocalesUsing($callback);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Translation\Translator::flushMacros();
        }

        /**
         * Flush the cache of parsed keys.
         *
         * @return void
         * @static
         */
        public static
        function flushParsedKeys() {            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->flushParsedKeys();
        }

        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         *
         * @return string|array
         * @static
         */
        public static
        function get(
            $key,
            $replace = [],
            $locale = null,
            $fallback = true,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->get(
                $key,
                $replace,
                $locale,
                $fallback,
            );
        }

        /**
         * Get the fallback locale being used.
         *
         * @return string
         * @static
         */
        public static
        function getFallback() {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getFallback();
        }

        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader
         * @static
         */
        public static
        function getLoader() {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLoader();
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static
        function getLocale() {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLocale();
        }

        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector
         * @static
         */
        public static
        function getSelector() {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getSelector();
        }

        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $key,
            $locale = null,
            $fallback = true,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->has(
                $key,
                $locale,
                $fallback,
            );
        }

        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         *
         * @return bool
         * @static
         */
        public static
        function hasForLocale(
            $key,
            $locale = null,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->hasForLocale(
                $key,
                $locale,
            );
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }

        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         *
         * @return void
         * @static
         */
        public static
        function load(
            $namespace,
            $group,
            $locale,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->load(
                $namespace,
                $group,
                $locale,
            );
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static
        function locale() {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->locale();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Translation\Translator::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Translation\Translator::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         *
         * @return array
         * @static
         */
        public static
        function parseKey(
            $key,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->parseKey($key);
        }

        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         *
         * @return void
         * @static
         */
        public static
        function setFallback(
            $fallback,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setFallback($fallback);
        }

        /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         *
         * @return void
         * @static
         */
        public static
        function setLoaded(
            $loaded,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLoaded($loaded);
        }

        /**
         * Set the default locale.
         *
         * @param string $locale
         *
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function setLocale(
            $locale,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLocale($locale);
        }

        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         *
         * @return void
         * @static
         */
        public static
        function setParsedKey(
            $key,
            $parsed,
        ) {            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setParsedKey(
                $key,
                $parsed,
            );
        }

        /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         *
         * @return void
         * @static
         */
        public static
        function setSelector(
            $selector,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setSelector($selector);
        }

        /**
         * Add a handler to be executed in order to format a given class to a string during translation replacements.
         *
         * @param callable|string $class
         * @param callable|null $handler
         *
         * @return void
         * @static
         */
        public static
        function stringable(
            $class,
            $handler = null,
        ) {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->stringable(
                $class,
                $handler,
            );
        }

    }

    /**
     *
     *
     * @method static void write(string $level,
     *         \Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|array|string
     *         $message, array $context = [])
     * @method static \Illuminate\Log\Logger withContext(array $context = [])
     * @method static \Illuminate\Log\Logger withoutContext()
     * @method static void listen(\Closure $callback)
     * @method static \Psr\Log\LoggerInterface getLogger()
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
     *
     * @see \Illuminate\Log\LogManager
     */
    class Log {
        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function alert(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->alert(
                $message,
                $context,
            );
        }

        /**
         * Build an on-demand log channel.
         *
         * @param array $config
         *
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static
        function build(
            $config,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->build($config);
        }

        /**
         * Get a log channel instance.
         *
         * @param string|null $channel
         *
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static
        function channel(
            $channel = null,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->channel($channel);
        }

        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function critical(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->critical(
                $message,
                $context,
            );
        }

        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function debug(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->debug(
                $message,
                $context,
            );
        }

        /**
         * Get a log driver instance.
         *
         * @param string|null $driver
         *
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->driver($driver);
        }

        /**
         * System is unusable.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function emergency(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->emergency(
                $message,
                $context,
            );
        }

        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function error(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->error(
                $message,
                $context,
            );
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Flush the shared context.
         *
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static
        function flushSharedContext() {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->flushSharedContext();
        }

        /**
         * Unset the given channel instance.
         *
         * @param string|null $driver
         *
         * @return void
         * @static
         */
        public static
        function forgetChannel(
            $driver = null,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->forgetChannel($driver);
        }

        /**
         * Get all of the resolved log channels.
         *
         * @return array
         * @static
         */
        public static
        function getChannels() {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->getChannels();
        }

        /**
         * Get the default log driver name.
         *
         * @return string|null
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function info(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->info(
                $message,
                $context,
            );
        }

        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function log(
            $level,
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->log(
                $level,
                $message,
                $context,
            );
        }

        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function notice(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->notice(
                $message,
                $context,
            );
        }

        /**
         * Set the default log driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Share context across channels and stacks.
         *
         * @param array $context
         *
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static
        function shareContext(
            $context,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->shareContext($context);
        }

        /**
         * The context shared across channels and stacks.
         *
         * @return array
         * @static
         */
        public static
        function sharedContext() {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->sharedContext();
        }

        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param array $channels
         * @param string|null $channel
         *
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static
        function stack(
            $channels,
            $channel = null,
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->stack(
                $channels,
                $channel,
            );
        }

        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array $context
         *
         * @return void
         * @static
         */
        public static
        function warning(
            $message,
            $context = [],
        ) {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->warning(
                $message,
                $context,
            );
        }

    }

    /**
     *
     *
     * @method static void alwaysFrom(string $address, string|null $name = null)
     * @method static void alwaysReplyTo(string $address, string|null $name = null)
     * @method static void alwaysReturnPath(string $address)
     * @method static void alwaysTo(string $address, string|null $name = null)
     * @method static \Illuminate\Mail\SentMessage|null html(string $html, mixed $callback)
     * @method static \Illuminate\Mail\SentMessage|null plain(string $view, array $data, mixed $callback)
     * @method static string render(string|array $view, array $data = [])
     * @method static mixed onQueue(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @method static mixed queueOn(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @method static mixed laterOn(string $queue, \DateTimeInterface|\DateInterval|int $delay,
     *         \Illuminate\Contracts\Mail\Mailable $view)
     * @method static \Symfony\Component\Mailer\Transport\TransportInterface getSymfonyTransport()
     * @method static \Illuminate\Contracts\View\Factory getViewFactory()
     * @method static void setSymfonyTransport(\Symfony\Component\Mailer\Transport\TransportInterface $transport)
     * @method static \Illuminate\Mail\Mailer setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @method static void macro(string $name, object|callable $macro)
     * @method static void mixin(object $mixin, bool $replace = true)
     * @method static bool hasMacro(string $name)
     * @method static void flushMacros()
     *
     * @see \Illuminate\Mail\MailManager
     * @see \Illuminate\Support\Testing\Fakes\MailFake
     */
    class Mail {
        /**
         * Determine if a mailable was not sent or queued to be sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotOutgoing(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotOutgoing(
                $mailable,
                $callback,
            );
        }

        /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotQueued(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotQueued(
                $mailable,
                $callback,
            );
        }

        /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotSent(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotSent(
                $mailable,
                $callback,
            );
        }

        /**
         * Assert that no mailables were sent or queued to be sent.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingOutgoing() {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingOutgoing();
        }

        /**
         * Assert that no mailables were queued.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingQueued() {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingQueued();
        }

        /**
         * Assert that no mailables were sent.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingSent() {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertQueued(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertQueued(
                $mailable,
                $callback,
            );
        }

        /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertSent(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertSent(
                $mailable,
                $callback,
            );
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         *
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static
        function bcc(
            $users,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->bcc($users);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         *
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static
        function cc(
            $users,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->cc($users);
        }

        /**
         * Create a new transport instance.
         *
         * @param array $config
         *
         * @return \Symfony\Component\Mailer\Transport\TransportInterface
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function createSymfonyTransport(
            $config,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->createSymfonyTransport($config);
        }

        /**
         * Get a mailer driver instance.
         *
         * @param string|null $driver
         *
         * @return \Illuminate\Mail\Mailer
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom transport creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Forget all of the resolved mailer instances.
         *
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static
        function forgetMailers() {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->forgetMailers();
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static
        function getApplication() {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->getApplication();
        }

        /**
         * Get the default mail driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Determine if the given mailable has been queued.
         *
         * @param string $mailable
         *
         * @return bool
         * @static
         */
        public static
        function hasQueued(
            $mailable,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->hasQueued($mailable);
        }

        /**
         * Determine if the given mailable has been sent.
         *
         * @param string $mailable
         *
         * @return bool
         * @static
         */
        public static
        function hasSent(
            $mailable,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->hasSent($mailable);
        }

        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         *
         * @return mixed
         * @static
         */
        public static
        function later(
            $delay,
            $view,
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->later(
                $delay,
                $view,
                $queue,
            );
        }

        /**
         * Get a mailer instance by name.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Contracts\Mail\Mailer
         * @static
         */
        public static
        function mailer(
            $name = null,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->mailer($name);
        }

        /**
         * Disconnect the given mailer and remove from local cache.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function purge(
            $name = null,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            $instance->purge($name);
        }

        /**
         * Queue a new e-mail message for sending.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         *
         * @return mixed
         * @static
         */
        public static
        function queue(
            $view,
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->queue(
                $view,
                $queue,
            );
        }

        /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function queued(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->queued(
                $mailable,
                $callback,
            );
        }

        /**
         * Send a new message with only a raw text part.
         *
         * @param string $text
         * @param \Closure|string $callback
         *
         * @return void
         * @static
         */
        public static
        function raw(
            $text,
            $callback,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->raw(
                $text,
                $callback,
            );
        }

        /**
         * Send a new message using a view.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param array $data
         * @param \Closure|string|null $callback
         *
         * @return void
         * @static
         */
        public static
        function send(
            $view,
            $data = [],
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->send(
                $view,
                $data,
                $callback,
            );
        }

        /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function sent(
            $mailable,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->sent(
                $mailable,
                $callback,
            );
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the default mail driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Mail\MailManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         *
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static
        function to(
            $users,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->to($users);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Notifications\ChannelManager
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake
     */
    class Notification {
        /**
         * Assert the total count of notification that were sent.
         *
         * @param int $expectedCount
         *
         * @return void
         * @static
         */
        public static
        function assertCount(
            $expectedCount,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertCount($expectedCount);
        }

        /**
         * Determine if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         *
         * @return void
         * @throws \Exception
         * @static
         */
        public static
        function assertNotSentTo(
            $notifiable,
            $notification,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNotSentTo(
                $notifiable,
                $notification,
                $callback,
            );
        }

        /**
         * Assert that no notifications were sent.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingSent() {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert that no notifications were sent to the given notifiable.
         *
         * @param mixed $notifiable
         *
         * @return void
         * @throws \Exception
         * @static
         */
        public static
        function assertNothingSentTo(
            $notifiable,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNothingSentTo($notifiable);
        }

        /**
         * Assert if a notification was sent on-demand based on a truth-test callback.
         *
         * @param string|\Closure $notification
         * @param callable|null $callback
         *
         * @return void
         * @throws \Exception
         * @static
         */
        public static
        function assertSentOnDemand(
            $notification,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentOnDemand(
                $notification,
                $callback,
            );
        }

        /**
         * Assert if a notification was sent on-demand a number of times.
         *
         * @param string $notification
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertSentOnDemandTimes(
            $notification,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentOnDemandTimes(
                $notification,
                $times,
            );
        }

        /**
         * Assert the total amount of times a notification was sent.
         *
         * @param string $notification
         * @param int $expectedCount
         *
         * @return void
         * @static
         */
        public static
        function assertSentTimes(
            $notification,
            $expectedCount,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentTimes(
                $notification,
                $expectedCount,
            );
        }

        /**
         * Assert if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         *
         * @return void
         * @throws \Exception
         * @static
         */
        public static
        function assertSentTo(
            $notifiable,
            $notification,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentTo(
                $notifiable,
                $notification,
                $callback,
            );
        }

        /**
         * Assert if a notification was sent a number of times.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param int $times
         *
         * @return void
         * @static
         */
        public static
        function assertSentToTimes(
            $notifiable,
            $notification,
            $times = 1,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentToTimes(
                $notifiable,
                $notification,
                $times,
            );
        }

        /**
         * Get a channel instance.
         *
         * @param string|null $name
         *
         * @return mixed
         * @static
         */
        public static
        function channel(
            $name = null,
        ) {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->channel($name);
        }

        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         *
         * @return void
         * @static
         */
        public static
        function deliverVia(
            $channel,
        ) {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->deliverVia($channel);
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static
        function deliversVia() {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->deliversVia();
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         *
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Support\Testing\Fakes\NotificationFake::flushMacros();
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static
        function forgetDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static
        function getContainer() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getContainer();
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static
        function getDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Support\Testing\Fakes\NotificationFake::hasMacro($name);
        }

        /**
         * Determine if there are more notifications left to inspect.
         *
         * @param mixed $notifiable
         * @param string $notification
         *
         * @return bool
         * @static
         */
        public static
        function hasSent(
            $notifiable,
            $notification,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->hasSent(
                $notifiable,
                $notification,
            );
        }

        /**
         * Set the locale of notifications.
         *
         * @param string $locale
         *
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static
        function locale(
            $locale,
        ) {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->locale($locale);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Support\Testing\Fakes\NotificationFake::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Support\Testing\Fakes\NotificationFake::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         *
         * @return void
         * @static
         */
        public static
        function send(
            $notifiables,
            $notification,
        ) {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->send(
                $notifiables,
                $notification,
            );
        }

        /**
         * Send the given notification immediately.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         * @param array|null $channels
         *
         * @return void
         * @static
         */
        public static
        function sendNow(
            $notifiables,
            $notification,
            $channels = null,
        ) {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->sendNow(
                $notifiables,
                $notification,
                $channels,
            );
        }

        /**
         * Get all of the notifications matching a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function sent(
            $notifiable,
            $notification,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->sent(
                $notifiable,
                $notification,
                $callback,
            );
        }

        /**
         * Get the notifications that have been sent.
         *
         * @return array
         * @static
         */
        public static
        function sentNotifications() {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->sentNotifications();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->setContainer($container);
        }

    }

    /**
     *
     *
     * @method static string sendResetLink(array $credentials, \Closure|null $callback = null)
     * @method static mixed reset(array $credentials, \Closure $callback)
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|null getUser(array $credentials)
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager
     * @see \Illuminate\Auth\Passwords\PasswordBroker
     */
    class Password {
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Contracts\Auth\PasswordBroker
         * @static
         */
        public static
        function broker(
            $name = null,
        ) {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->broker($name);
        }

        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default password broker name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            $instance->setDefaultDriver($name);
        }

    }

    /**
     *
     *
     * @method static \Illuminate\Process\PendingProcess command(array|string $command)
     * @method static \Illuminate\Process\PendingProcess path(string $path)
     * @method static \Illuminate\Process\PendingProcess timeout(int $timeout)
     * @method static \Illuminate\Process\PendingProcess idleTimeout(int $timeout)
     * @method static \Illuminate\Process\PendingProcess forever()
     * @method static \Illuminate\Process\PendingProcess env(array $environment)
     * @method static \Illuminate\Process\PendingProcess quietly()
     * @method static \Illuminate\Process\PendingProcess tty(bool $tty = true)
     * @method static \Illuminate\Process\PendingProcess options(array $options)
     * @method static \Illuminate\Contracts\Process\ProcessResult run(array|string|null $command = null, callable|null
     *         $output = null)
     * @method static \Illuminate\Process\InvokedProcess start(array|string|null $command = null, callable $output =
     *         null)
     * @method static \Illuminate\Process\PendingProcess withFakeHandlers(array $fakeHandlers)
     *
     * @see \Illuminate\Process\PendingProcess
     * @see \Illuminate\Process\Factory
     */
    class Process {
        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function assertDidntRun(
            $callback,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertDidntRun($callback);
        }

        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function assertNotRan(
            $callback,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertNotRan($callback);
        }

        /**
         * Assert that no processes were recorded.
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function assertNothingRan() {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertNothingRan();
        }

        /**
         * Assert that a process was recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function assertRan(
            $callback,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertRan($callback);
        }

        /**
         * Assert that a process was recorded a given number of times matching a given truth test.
         *
         * @param \Closure|string $callback
         * @param int $times
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function assertRanTimes(
            $callback,
            $times = 1,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertRanTimes(
                $callback,
                $times,
            );
        }

        /**
         * Run a pool of processes and wait for them to finish executing.
         *
         * @param callable $callback
         * @param callable|null $output
         *
         * @return \Illuminate\Process\ProcessPoolResults
         * @static
         */
        public static
        function concurrently(
            $callback,
            $output = null,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->concurrently(
                $callback,
                $output,
            );
        }

        /**
         * Begin describing a fake process lifecycle.
         *
         * @return \Illuminate\Process\FakeProcessDescription
         * @static
         */
        public static
        function describe() {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->describe();
        }

        /**
         * Indicate that the process factory should fake processes.
         *
         * @param \Closure|array|null $callback
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function fake(
            $callback = null,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->fake($callback);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Process\Factory::flushMacros();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Process\Factory::hasMacro($name);
        }

        /**
         * Determine if the process factory has fake process handlers and is recording processes.
         *
         * @return bool
         * @static
         */
        public static
        function isRecording() {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->isRecording();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Process\Factory::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Process\Factory::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Create a new pending process associated with this factory.
         *
         * @return \Illuminate\Process\PendingProcess
         * @static
         */
        public static
        function newPendingProcess() {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->newPendingProcess();
        }

        /**
         * Start defining a pool of processes.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Process\Pool
         * @static
         */
        public static
        function pool(
            $callback,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->pool($callback);
        }

        /**
         * Indicate that an exception should be thrown if any process is not faked.
         *
         * @param bool $prevent
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function preventStrayProcesses(
            $prevent = true,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->preventStrayProcesses($prevent);
        }

        /**
         * Determine if stray processes are being prevented.
         *
         * @return bool
         * @static
         */
        public static
        function preventingStrayProcesses() {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->preventingStrayProcesses();
        }

        /**
         * Record the given process.
         *
         * @param \Illuminate\Process\PendingProcess $process
         * @param \Illuminate\Contracts\Process\ProcessResult $result
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function record(
            $process,
            $result,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->record(
                $process,
                $result,
            );
        }

        /**
         * Record the given process if processes should be recorded.
         *
         * @param \Illuminate\Process\PendingProcess $process
         * @param \Illuminate\Contracts\Process\ProcessResult $result
         *
         * @return \Illuminate\Process\Factory
         * @static
         */
        public static
        function recordIfRecording(
            $process,
            $result,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->recordIfRecording(
                $process,
                $result,
            );
        }

        /**
         * Create a new fake process response for testing purposes.
         *
         * @param array|string $output
         * @param array|string $errorOutput
         * @param int $exitCode
         *
         * @return \Illuminate\Process\FakeProcessResult
         * @static
         */
        public static
        function result(
            $output = '',
            $errorOutput = '',
            $exitCode = 0,
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->result(
                $output,
                $errorOutput,
                $exitCode,
            );
        }

        /**
         * Begin describing a fake process sequence.
         *
         * @param array $processes
         *
         * @return \Illuminate\Process\FakeProcessSequence
         * @static
         */
        public static
        function sequence(
            $processes = [],
        ) {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->sequence($processes);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     * @see \Illuminate\Support\Testing\Fakes\QueueFake
     */
    class Queue {
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
        public static
        function addConnector(
            $driver,
            $resolver,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->addConnector(
                $driver,
                $resolver,
            );
        }

        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function after(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->after($callback);
        }

        /**
         * Assert that a closure was not pushed based on a truth-test callback.
         *
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertClosureNotPushed(
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertClosureNotPushed($callback);
        }

        /**
         * Assert if a closure was pushed based on a truth-test callback.
         *
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertClosurePushed(
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertClosurePushed($callback);
        }

        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertNotPushed(
            $job,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNotPushed(
                $job,
                $callback,
            );
        }

        /**
         * Assert that no jobs were pushed.
         *
         * @return void
         * @static
         */
        public static
        function assertNothingPushed() {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNothingPushed();
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|int|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertPushed(
            $job,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushed(
                $job,
                $callback,
            );
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string|\Closure $job
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertPushedOn(
            $queue,
            $job,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedOn(
                $queue,
                $job,
                $callback,
            );
        }

        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertPushedWithChain(
            $job,
            $expectedChain = [],
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithChain(
                $job,
                $expectedChain,
                $callback,
            );
        }

        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function assertPushedWithoutChain(
            $job,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithoutChain(
                $job,
                $callback,
            );
        }

        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function before(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->before($callback);
        }

        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string|null $queue
         *
         * @return mixed
         * @static
         */
        public static
        function bulk(
            $jobs,
            $data = '',
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->bulk(
                $jobs,
                $data,
                $queue,
            );
        }

        /**
         * Delete all of the jobs from the queue.
         *
         * @param string $queue
         *
         * @return int
         * @static
         */
        public static
        function clear(
            $queue,
        ) {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->clear($queue);
        }

        /**
         * Determine if the driver is connected.
         *
         * @param string|null $name
         *
         * @return bool
         * @static
         */
        public static
        function connected(
            $name = null,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connected($name);
        }

        /**
         * Resolve a queue connection instance.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */
        public static
        function connection(
            $name = null,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connection($name);
        }

        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         *
         * @return void
         * @static
         */
        public static
        function createPayloadUsing(
            $callback,
        ) {            //Method inherited from \Illuminate\Queue\Queue
            \Illuminate\Queue\DatabaseQueue::createPayloadUsing($callback);
        }

        /**
         * Delete a reserved job from the reserved queue and release it.
         *
         * @param string $queue
         * @param \Illuminate\Queue\Jobs\DatabaseJob $job
         * @param int $delay
         *
         * @return void
         * @static
         */
        public static
        function deleteAndRelease(
            $queue,
            $job,
            $delay,
        ) {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            $instance->deleteAndRelease(
                $queue,
                $job,
                $delay,
            );
        }

        /**
         * Delete a reserved job from the queue.
         *
         * @param string $queue
         * @param string $id
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static
        function deleteReserved(
            $queue,
            $id,
        ) {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            $instance->deleteReserved(
                $queue,
                $id,
            );
        }

        /**
         * Specify the jobs that should be queued instead of faked.
         *
         * @param array|string $jobsToBeQueued
         *
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static
        function except(
            $jobsToBeQueued,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->except($jobsToBeQueued);
        }

        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function exceptionOccurred(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->exceptionOccurred($callback);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
        public static
        function extend(
            $driver,
            $resolver,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->extend(
                $driver,
                $resolver,
            );
        }

        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function failing(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->failing($callback);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static
        function getApplication() {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getApplication();
        }

        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */
        public static
        function getConnectionName() {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->getConnectionName();
        }

        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container
         * @static
         */
        public static
        function getContainer() {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->getContainer();
        }

        /**
         * Get the underlying database instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static
        function getDatabase() {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->getDatabase();
        }

        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the backoff for an object-based queue handler.
         *
         * @param mixed $job
         *
         * @return mixed
         * @static
         */
        public static
        function getJobBackoff(
            $job,
        ) {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->getJobBackoff($job);
        }

        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         *
         * @return mixed
         * @static
         */
        public static
        function getJobExpiration(
            $job,
        ) {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->getJobExpiration($job);
        }

        /**
         * Get the full name for the given connection.
         *
         * @param string|null $connection
         *
         * @return string
         * @static
         */
        public static
        function getName(
            $connection = null,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getName($connection);
        }

        /**
         * Get the queue or return the default.
         *
         * @param string|null $queue
         *
         * @return string
         * @static
         */
        public static
        function getQueue(
            $queue,
        ) {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->getQueue($queue);
        }

        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         *
         * @return bool
         * @static
         */
        public static
        function hasPushed(
            $job,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->hasPushed($job);
        }

        /**
         * Push a new job onto the queue after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         *
         * @return mixed
         * @static
         */
        public static
        function later(
            $delay,
            $job,
            $data = '',
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->later(
                $delay,
                $job,
                $data,
                $queue,
            );
        }

        /**
         * Push a new job onto a specific queue after (n) seconds.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         *
         * @return mixed
         * @static
         */
        public static
        function laterOn(
            $queue,
            $delay,
            $job,
            $data = '',
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->laterOn(
                $queue,
                $delay,
                $job,
                $data,
            );
        }

        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function looping(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->looping($callback);
        }

        /**
         * Pop the next job off of the queue.
         *
         * @param string|null $queue
         *
         * @return \Illuminate\Contracts\Queue\Job|null
         * @static
         */
        public static
        function pop(
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pop($queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         *
         * @return mixed
         * @static
         */
        public static
        function push(
            $job,
            $data = '',
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->push(
                $job,
                $data,
                $queue,
            );
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string|object $job
         * @param mixed $data
         *
         * @return mixed
         * @static
         */
        public static
        function pushOn(
            $queue,
            $job,
            $data = '',
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushOn(
                $queue,
                $job,
                $data,
            );
        }

        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string|null $queue
         * @param array $options
         *
         * @return mixed
         * @static
         */
        public static
        function pushRaw(
            $payload,
            $queue = null,
            $options = [],
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushRaw(
                $payload,
                $queue,
                $options,
            );
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function pushed(
            $job,
            $callback = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushed(
                $job,
                $callback,
            );
        }

        /**
         * Get the jobs that have been pushed.
         *
         * @return array
         * @static
         */
        public static
        function pushedJobs() {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushedJobs();
        }

        /**
         * Release a reserved job back onto the queue after (n) seconds.
         *
         * @param string $queue
         * @param \Illuminate\Queue\Jobs\DatabaseJobRecord $job
         * @param int $delay
         *
         * @return mixed
         * @static
         */
        public static
        function release(
            $queue,
            $job,
            $delay,
        ) {
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            return $instance->release(
                $queue,
                $job,
                $delay,
            );
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Queue\QueueManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         *
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static
        function setConnectionName(
            $name,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->setConnectionName($name);
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         *
         * @return void
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {            //Method inherited from \Illuminate\Queue\Queue
            /** @var \Illuminate\Queue\DatabaseQueue $instance */
            $instance->setContainer($container);
        }

        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Determine if a job should be faked or actually dispatched.
         *
         * @param object $job
         *
         * @return bool
         * @static
         */
        public static
        function shouldFakeJob(
            $job,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->shouldFakeJob($job);
        }

        /**
         * Get the size of the queue.
         *
         * @param string|null $queue
         *
         * @return int
         * @static
         */
        public static
        function size(
            $queue = null,
        ) {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->size($queue);
        }

        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         *
         * @return void
         * @static
         */
        public static
        function stopping(
            $callback,
        ) {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->stopping($callback);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Cache\RateLimiter
     */
    class RateLimiter {
        /**
         * Attempts to execute a callback if it's not limited.
         *
         * @param string $key
         * @param int $maxAttempts
         * @param \Closure $callback
         * @param int $decaySeconds
         *
         * @return mixed
         * @static
         */
        public static
        function attempt(
            $key,
            $maxAttempts,
            $callback,
            $decaySeconds = 60,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempt(
                $key,
                $maxAttempts,
                $callback,
                $decaySeconds,
            );
        }

        /**
         * Get the number of attempts for the given key.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function attempts(
            $key,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempts($key);
        }

        /**
         * Get the number of seconds until the "key" is accessible again.
         *
         * @param string $key
         *
         * @return int
         * @static
         */
        public static
        function availableIn(
            $key,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->availableIn($key);
        }

        /**
         * Clean the rate limiter key from unicode characters.
         *
         * @param string $key
         *
         * @return string
         * @static
         */
        public static
        function cleanRateLimiterKey(
            $key,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->cleanRateLimiterKey($key);
        }

        /**
         * Clear the hits and lockout timer for the given key.
         *
         * @param string $key
         *
         * @return void
         * @static
         */
        public static
        function clear(
            $key,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            $instance->clear($key);
        }

        /**
         * Register a named limiter configuration.
         *
         * @param string $name
         * @param \Closure $callback
         *
         * @return \Illuminate\Cache\RateLimiter
         * @static
         */
        public static
        function for(
            $name,
            $callback,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->for(
                $name,
                $callback,
            );
        }

        /**
         * Increment the counter for a given key for a given decay time.
         *
         * @param string $key
         * @param int $decaySeconds
         *
         * @return int
         * @static
         */
        public static
        function hit(
            $key,
            $decaySeconds = 60,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->hit(
                $key,
                $decaySeconds,
            );
        }

        /**
         * Get the given named rate limiter.
         *
         * @param string $name
         *
         * @return \Closure
         * @static
         */
        public static
        function limiter(
            $name,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->limiter($name);
        }

        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         *
         * @return int
         * @static
         */
        public static
        function remaining(
            $key,
            $maxAttempts,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->remaining(
                $key,
                $maxAttempts,
            );
        }

        /**
         * Reset the number of attempts for the given key.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function resetAttempts(
            $key,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->resetAttempts($key);
        }

        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         *
         * @return int
         * @static
         */
        public static
        function retriesLeft(
            $key,
            $maxAttempts,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->retriesLeft(
                $key,
                $maxAttempts,
            );
        }

        /**
         * Determine if the given key has been "accessed" too many times.
         *
         * @param string $key
         * @param int $maxAttempts
         *
         * @return bool
         * @static
         */
        public static
        function tooManyAttempts(
            $key,
            $maxAttempts,
        ) {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->tooManyAttempts(
                $key,
                $maxAttempts,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Routing\Redirector
     */
    class Redirect {
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function action(
            $action,
            $parameters = [],
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->action(
                $action,
                $parameters,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function away(
            $path,
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->away(
                $path,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function back(
            $status = 302,
            $headers = [],
            $fallback = false,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->back(
                $status,
                $headers,
                $fallback,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Routing\Redirector::flushMacros();
        }

        /**
         * Get the "intended" URL from the session.
         *
         * @return string|null
         * @static
         */
        public static
        function getIntendedUrl() {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->getIntendedUrl();
        }

        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function getUrlGenerator() {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->getUrlGenerator();
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function guest(
            $path,
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->guest(
                $path,
                $status,
                $headers,
                $secure,
            );
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param mixed $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function intended(
            $default = '/',
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->intended(
                $default,
                $status,
                $headers,
                $secure,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Routing\Redirector::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Routing\Redirector::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function refresh(
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->refresh(
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function route(
            $route,
            $parameters = [],
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->route(
                $route,
                $parameters,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function secure(
            $path,
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->secure(
                $path,
                $status,
                $headers,
            );
        }

        /**
         * Set the "intended" URL in the session.
         *
         * @param string $url
         *
         * @return \Illuminate\Routing\Redirector
         * @static
         */
        public static
        function setIntendedUrl(
            $url,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->setIntendedUrl($url);
        }

        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         *
         * @return void
         * @static
         */
        public static
        function setSession(
            $session,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            $instance->setSession($session);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function signedRoute(
            $route,
            $parameters = [],
            $expiration = null,
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->signedRoute(
                $route,
                $parameters,
                $expiration,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function temporarySignedRoute(
            $route,
            $expiration,
            $parameters = [],
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->temporarySignedRoute(
                $route,
                $expiration,
                $parameters,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function to(
            $path,
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->to(
                $path,
                $status,
                $headers,
                $secure,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Http\Request
     */
    class Request {
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         *
         * @return bool
         * @static
         */
        public static
        function accepts(
            $contentTypes,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->accepts($contentTypes);
        }

        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool
         * @static
         */
        public static
        function acceptsAnyContentType() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsAnyContentType();
        }

        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */
        public static
        function acceptsHtml() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsHtml();
        }

        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */
        public static
        function acceptsJson() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsJson();
        }

        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */
        public static
        function ajax() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ajax();
        }

        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed|null $keys
         *
         * @return array
         * @static
         */
        public static
        function all(
            $keys = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->all($keys);
        }

        /**
         * Get an array of all of the files on the request.
         *
         * @return array
         * @static
         */
        public static
        function allFiles() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->allFiles();
        }

        /**
         * Determine if the request contains a non-empty value for any of the given inputs.
         *
         * @param string|array $keys
         *
         * @return bool
         * @static
         */
        public static
        function anyFilled(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->anyFilled($keys);
        }

        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */
        public static
        function bearerToken() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->bearerToken();
        }

        /**
         * Retrieve input as a boolean value.
         *
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         *
         * @return bool
         * @static
         */
        public static
        function boolean(
            $key = null,
            $default = false,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->boolean(
                $key,
                $default,
            );
        }

        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */
        public static
        function capture() {
            return \Illuminate\Http\Request::capture();
        }

        /**
         * Retrieve input from the request as a collection.
         *
         * @param array|string|null $key
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function collect(
            $key = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->collect($key);
        }

        /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function cookie(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->cookie(
                $key,
                $default,
            );
        }

        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri                   The URI
         * @param string $method                The HTTP method
         * @param array $parameters             The query (GET) or request (POST) parameters
         * @param array $cookies                The request cookies ($_COOKIE)
         * @param array $files                  The request files ($_FILES)
         * @param array $server                 The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         *
         * @static
         */
        public static
        function create(
            $uri,
            $method = 'GET',
            $parameters = [],
            $cookies = [],
            $files = [],
            $server = [],
            $content = null,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::create(
                $uri,
                $method,
                $parameters,
                $cookies,
                $files,
                $server,
                $content,
            );
        }

        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         *
         * @return static
         * @static
         */
        public static
        function createFrom(
            $from,
            $to = null,
        ) {
            return \Illuminate\Http\Request::createFrom(
                $from,
                $to,
            );
        }

        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         *
         * @return static
         * @static
         */
        public static
        function createFromBase(
            $request,
        ) {
            return \Illuminate\Http\Request::createFromBase($request);
        }

        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @static
         */
        public static
        function createFromGlobals() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::createFromGlobals();
        }

        /**
         * Retrieve input from the request as a Carbon instance.
         *
         * @param string $key
         * @param string|null $format
         * @param string|null $tz
         *
         * @return \Illuminate\Support\Carbon|null
         * @throws \Carbon\Exceptions\InvalidFormatException
         * @static
         */
        public static
        function date(
            $key,
            $format = null,
            $tz = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->date(
                $key,
                $format,
                $tz,
            );
        }

        /**
         * Dump the request items and end the script.
         *
         * @param mixed $keys
         *
         * @return \Illuminate\Http\never
         * @static
         */
        public static
        function dd(
            ...$keys
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dd(
                ...
                $keys,
            );
        }

        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */
        public static
        function decodedPath() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->decodedPath();
        }

        /**
         * Dump the items.
         *
         * @param mixed $keys
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function dump(
            $keys = [],
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dump($keys);
        }

        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query      The GET parameters
         * @param array $request    The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies    The COOKIE parameters
         * @param array $files      The FILES parameters
         * @param array $server     The SERVER parameters
         *
         * @static
         * @return static
         */
        public static
        function duplicate(
            $query = null,
            $request = null,
            $attributes = null,
            $cookies = null,
            $files = null,
            $server = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->duplicate(
                $query,
                $request,
                $attributes,
                $cookies,
                $files,
                $server,
            );
        }

        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */
        public static
        function enableHttpMethodParameterOverride(
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }

        /**
         * Retrieve input from the request as an enum.
         *
         * @template TEnum
         *
         * @param string $key
         * @param \Illuminate\Http\class-string<TEnum> $enumClass
         *
         * @return \Illuminate\Http\TEnum|null
         * @static
         */
        public static
        function enum(
            $key,
            $enumClass,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->enum(
                $key,
                $enumClass,
            );
        }

        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         *
         * @return array
         * @static
         */
        public static
        function except(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->except($keys);
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function exists(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */
        public static
        function expectsJson() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->expectsJson();
        }

        /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         *
         * @return \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null
         * @static
         */
        public static
        function file(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->file(
                $key,
                $default,
            );
        }

        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function filled(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filled($key);
        }

        /**
         * Filter the given array of rules into an array of rules that are included in precognitive headers.
         *
         * @param array $rules
         *
         * @return array
         * @static
         */
        public static
        function filterPrecognitiveRules(
            $rules,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filterPrecognitiveRules($rules);
        }

        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static
        function fingerprint() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fingerprint();
        }

        /**
         * Flash the input for the current request to the session.
         *
         * @return void
         * @static
         */
        public static
        function flash() {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flash();
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         *
         * @return void
         * @static
         */
        public static
        function flashExcept(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashExcept($keys);
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         *
         * @return void
         * @static
         */
        public static
        function flashOnly(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashOnly($keys);
        }

        /**
         * Retrieve input as a float value.
         *
         * @param string $key
         * @param float $default
         *
         * @return float
         * @static
         */
        public static
        function float(
            $key,
            $default = 0.0,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->float(
                $key,
                $default,
            );
        }

        /**
         * Flush all of the old input from the session.
         *
         * @return void
         * @static
         */
        public static
        function flush() {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flush();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Http\Request::flushMacros();
        }

        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         *
         * @return string
         * @static
         */
        public static
        function format(
            $default = 'html',
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->format($default);
        }

        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */
        public static
        function fullUrl() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrl();
        }

        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         *
         * @return bool
         * @static
         */
        public static
        function fullUrlIs(
            ...$patterns
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlIs(
                ...
                $patterns,
            );
        }

        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         *
         * @return string
         * @static
         */
        public static
        function fullUrlWithQuery(
            $query,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithQuery($query);
        }

        /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param array|string $keys
         *
         * @return string
         * @static
         */
        public static
        function fullUrlWithoutQuery(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithoutQuery($keys);
        }

        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         *
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function get(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->get(
                $key,
                $default,
            );
        }

        /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static
        function getAcceptableContentTypes(
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getAcceptableContentTypes();
        }

        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static
        function getBasePath() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBasePath();
        }

        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static
         */
        public static
        function getBaseUrl() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBaseUrl();
        }

        /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static
        function getCharsets() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getCharsets();
        }

        /**
         * Returns the client IP address.
         *
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         *
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static
         */
        public static
        function getClientIp() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIp();
        }

        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @see getClientIp()
         * @static
         */
        public static
        function getClientIps() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIps();
        }

        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         *
         * @return string|resource
         * @psalm-return ($asResource is true ? resource : string)
         * @static
         */
        public static
        function getContent(
            $asResource = false,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContent($asResource);
        }

        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type
         * header).
         *
         * @deprecated since Symfony 6.2, use getContentTypeFormat() instead
         * @static
         */
        public static
        function getContentType() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentType();
        }

        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type
         * header).
         *
         * @see Request::$formats
         * @static
         */
        public static
        function getContentTypeFormat() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentTypeFormat();
        }

        /**
         * Get the default locale.
         *
         * @static
         */
        public static
        function getDefaultLocale() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getDefaultLocale();
        }

        /**
         * Gets the Etags.
         *
         * @static
         */
        public static
        function getETags() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getETags();
        }

        /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static
        function getEncodings() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getEncodings();
        }

        /**
         * Gets the format associated with the mime type.
         *
         * @static
         */
        public static
        function getFormat(
            $mimeType,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getFormat($mimeType);
        }

        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static
         */
        public static
        function getHost() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHost();
        }

        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @static
         */
        public static
        function getHttpHost() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHttpHost();
        }

        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @static
         */
        public static
        function getHttpMethodParameterOverride(
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }

        /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @return string[]
         * @static
         */
        public static
        function getLanguages() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLanguages();
        }

        /**
         * Get the locale.
         *
         * @static
         */
        public static
        function getLocale() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLocale();
        }

        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @see getRealMethod()
         * @static
         */
        public static
        function getMethod() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMethod();
        }

        /**
         * Gets the mime type associated with the format.
         *
         * @static
         */
        public static
        function getMimeType(
            $format,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMimeType($format);
        }

        /**
         * Gets the mime types associated with the format.
         *
         * @return string[]
         * @static
         */
        public static
        function getMimeTypes(
            $format,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeTypes($format);
        }

        /**
         * Returns the password.
         *
         * @static
         */
        public static
        function getPassword() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPassword();
        }

        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static
        function getPathInfo() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPathInfo();
        }

        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static
         */
        public static
        function getPort() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPort();
        }

        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         *
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static
         */
        public static
        function getPreferredFormat(
            $default = 'html',
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredFormat($default);
        }

        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         *
         * @static
         */
        public static
        function getPreferredLanguage(
            $locales = null,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }

        /**
         * Returns the protocol version.
         *
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @static
         */
        public static
        function getProtocolVersion() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getProtocolVersion();
        }

        /**
         * Generates the normalized query string for the Request.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @static
         */
        public static
        function getQueryString() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getQueryString();
        }

        /**
         * Gets the "real" request method.
         *
         * @see getMethod()
         * @static
         */
        public static
        function getRealMethod() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRealMethod();
        }

        /**
         * Returns the path as relative reference from the current Request path.
         *
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document
         * archives. Furthermore, they can be used to reduce the link size in documents.
         *
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @static
         */
        public static
        function getRelativeUriForPath(
            $path,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRelativeUriForPath($path);
        }

        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @see getPreferredFormat
         * @static
         */
        public static
        function getRequestFormat(
            $default = 'html',
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestFormat($default);
        }

        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static
         */
        public static
        function getRequestUri() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestUri();
        }

        /**
         * Get the route resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static
        function getRouteResolver() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRouteResolver();
        }

        /**
         * Gets the request's scheme.
         *
         * @static
         */
        public static
        function getScheme() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScheme();
        }

        /**
         * Gets the scheme and HTTP host.
         *
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @static
         */
        public static
        function getSchemeAndHttpHost() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }

        /**
         * Returns current script name.
         *
         * @static
         */
        public static
        function getScriptName() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScriptName();
        }

        /**
         * Gets the Session.
         *
         * @throws SessionNotFoundException When session is not set properly
         * @static
         */
        public static
        function getSession() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSession();
        }

        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static
         */
        public static
        function getTrustedHeaderSet() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }

        /**
         * Gets the list of trusted host patterns.
         *
         * @return string[]
         * @static
         */
        public static
        function getTrustedHosts() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHosts();
        }

        /**
         * Gets the list of trusted proxies.
         *
         * @return string[]
         * @static
         */
        public static
        function getTrustedProxies() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedProxies();
        }

        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @see getQueryString()
         * @static
         */
        public static
        function getUri() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUri();
        }

        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         *
         * @static
         */
        public static
        function getUriForPath(
            $path,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUriForPath($path);
        }

        /**
         * Returns the user.
         *
         * @static
         */
        public static
        function getUser() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUser();
        }

        /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain
         *                     authorization to access the server
         * @static
         */
        public static
        function getUserInfo() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserInfo();
        }

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static
        function getUserResolver() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserResolver();
        }

        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->has($key);
        }

        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param string|array $keys
         *
         * @return bool
         * @static
         */
        public static
        function hasAny(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasAny($keys);
        }

        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function hasCookie(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasCookie($key);
        }

        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function hasFile(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasFile($key);
        }

        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         *
         * @return bool
         * @static
         */
        public static
        function hasHeader(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasHeader($key);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Http\Request::hasMacro($name);
        }

        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @static
         */
        public static
        function hasPreviousSession() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasPreviousSession();
        }

        /**
         * Whether the request contains a Session object.
         *
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         *
         * @static
         */
        public static
        function hasSession(
            $skipIfUninitialized = false,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasSession($skipIfUninitialized);
        }

        /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static
        function hasValidRelativeSignature() {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

        /**
         *
         *
         * @param mixed $absolute
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static
        function hasValidSignature(
            $absolute = true,
        ) {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         *
         *
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static
        function hasValidSignatureWhileIgnoring(
            $ignoreQuery = [],
            $absolute = true,
        ) {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring(
                $ignoreQuery,
                $absolute,
            );
        }

        /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function header(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->header(
                $key,
                $default,
            );
        }

        /**
         * Get the host name.
         *
         * @return string
         * @static
         */
        public static
        function host() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->host();
        }

        /**
         * Get the HTTP host being requested.
         *
         * @return string
         * @static
         */
        public static
        function httpHost() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->httpHost();
        }

        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array $query                  The GET parameters
         * @param array $request                The POST parameters
         * @param array $attributes             The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies                The COOKIE parameters
         * @param array $files                  The FILES parameters
         * @param array $server                 The SERVER parameters
         * @param string|resource|null $content The raw body data
         *
         * @static
         */
        public static
        function initialize(
            $query = [],
            $request = [],
            $attributes = [],
            $cookies = [],
            $files = [],
            $server = [],
            $content = null,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->initialize(
                $query,
                $request,
                $attributes,
                $cookies,
                $files,
                $server,
                $content,
            );
        }

        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function input(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->input(
                $key,
                $default,
            );
        }

        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function instance() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->instance();
        }

        /**
         * Retrieve input as an integer value.
         *
         * @param string $key
         * @param int $default
         *
         * @return int
         * @static
         */
        public static
        function integer(
            $key,
            $default = 0,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->integer(
                $key,
                $default,
            );
        }

        /**
         * Get the client IP address.
         *
         * @return string|null
         * @static
         */
        public static
        function ip() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ip();
        }

        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */
        public static
        function ips() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ips();
        }

        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         *
         * @return bool
         * @static
         */
        public static
        function is(
            ...$patterns
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->is(
                ...
                $patterns,
            );
        }

        /**
         * Determine if the request is attempting to be precognitive.
         *
         * @return bool
         * @static
         */
        public static
        function isAttemptingPrecognition() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isAttemptingPrecognition();
        }

        /**
         * Indicates whether this request originated from a trusted proxy.
         *
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @static
         */
        public static
        function isFromTrustedProxy() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isFromTrustedProxy();
        }

        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */
        public static
        function isJson() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isJson();
        }

        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         *
         * @static
         */
        public static
        function isMethod(
            $method,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethod($method);
        }

        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @static
         */
        public static
        function isMethodCacheable() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodCacheable();
        }

        /**
         * Checks whether or not the method is idempotent.
         *
         * @static
         */
        public static
        function isMethodIdempotent() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodIdempotent();
        }

        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @static
         */
        public static
        function isMethodSafe() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodSafe();
        }

        /**
         *
         *
         * @static
         */
        public static
        function isNoCache() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNoCache();
        }

        /**
         * Determine if the request contains an empty value for an input item.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function isNotFilled(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNotFilled($key);
        }

        /**
         * Determine if the request is precognitive.
         *
         * @return bool
         * @static
         */
        public static
        function isPrecognitive() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isPrecognitive();
        }

        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @static
         */
        public static
        function isSecure() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isSecure();
        }

        /**
         * Returns true if the request is an XMLHttpRequest.
         *
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @static
         */
        public static
        function isXmlHttpRequest() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isXmlHttpRequest();
        }

        /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         *
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed
         * @static
         */
        public static
        function json(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->json(
                $key,
                $default,
            );
        }

        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */
        public static
        function keys() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->keys();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Http\Request::macro(
                $name,
                $macro,
            );
        }

        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         *
         * @return bool
         * @static
         */
        public static
        function matchesType(
            $actual,
            $type,
        ) {
            return \Illuminate\Http\Request::matchesType(
                $actual,
                $type,
            );
        }

        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function merge(
            $input,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->merge($input);
        }

        /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param array $input
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function mergeIfMissing(
            $input,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->mergeIfMissing($input);
        }

        /**
         * Get the request method.
         *
         * @return string
         * @static
         */
        public static
        function method() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->method();
        }

        /**
         * Determine if the request is missing a given input item key.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function missing(
            $key,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->missing($key);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Http\Request::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Normalizes a query string.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @static
         */
        public static
        function normalizeQueryString(
            $qs,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }

        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         *
         * @return bool
         * @static
         */
        public static
        function offsetExists(
            $offset,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         *
         * @return mixed
         * @static
         */
        public static
        function offsetGet(
            $offset,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function offsetSet(
            $offset,
            $value,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetSet(
                $offset,
                $value,
            );
        }

        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         *
         * @return void
         * @static
         */
        public static
        function offsetUnset(
            $offset,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetUnset($offset);
        }

        /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param \Illuminate\Database\Eloquent\Model|string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function old(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->old(
                $key,
                $default,
            );
        }

        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         *
         * @return array
         * @static
         */
        public static
        function only(
            $keys,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->only($keys);
        }

        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */
        public static
        function overrideGlobals() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->overrideGlobals();
        }

        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */
        public static
        function path() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->path();
        }

        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool
         * @static
         */
        public static
        function pjax() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->pjax();
        }

        /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function post(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->post(
                $key,
                $default,
            );
        }

        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static
         */
        public static
        function preferSafeContent() {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->preferSafeContent();
        }

        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         *
         * @return string|null
         * @static
         */
        public static
        function prefers(
            $contentTypes,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefers($contentTypes);
        }

        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool
         * @static
         */
        public static
        function prefetch() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefetch();
        }

        /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function query(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->query(
                $key,
                $default,
            );
        }

        /**
         * Replace the input for the current request.
         *
         * @param array $input
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function replace(
            $input,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->replace($input);
        }

        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */
        public static
        function root() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->root();
        }

        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         *
         * @return \Illuminate\Routing\Route|object|string|null
         * @static
         */
        public static
        function route(
            $param = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->route(
                $param,
                $default,
            );
        }

        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         *
         * @return bool
         * @static
         */
        public static
        function routeIs(
            ...$patterns
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->routeIs(
                ...
                $patterns,
            );
        }

        /**
         * Get the scheme and HTTP host.
         *
         * @return string
         * @static
         */
        public static
        function schemeAndHttpHost() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->schemeAndHttpHost();
        }

        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */
        public static
        function secure() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->secure();
        }

        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         *
         * @return string|null
         * @static
         */
        public static
        function segment(
            $index,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segment(
                $index,
                $default,
            );
        }

        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */
        public static
        function segments() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segments();
        }

        /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         *
         * @return string|array|null
         * @static
         */
        public static
        function server(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->server(
                $key,
                $default,
            );
        }

        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @throws \RuntimeException
         * @static
         */
        public static
        function session() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->session();
        }

        /**
         * Sets the default locale.
         *
         * @static
         */
        public static
        function setDefaultLocale(
            $locale,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setDefaultLocale($locale);
        }

        /**
         * Set the default locale for the request instance.
         *
         * @param string $locale
         *
         * @return void
         * @static
         */
        public static
        function setDefaultRequestLocale(
            $locale,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setDefaultRequestLocale($locale);
        }

        /**
         * Sets a callable able to create a Request instance.
         *
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static
         */
        public static
        function setFactory(
            $callable,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFactory($callable);
        }

        /**
         * Associates a format with mime types.
         *
         * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will
         *                                   be used as the content type)
         *
         * @static
         */
        public static
        function setFormat(
            $format,
            $mimeTypes,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setFormat(
                $format,
                $mimeTypes,
            );
        }

        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function setJson(
            $json,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setJson($json);
        }

        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         *
         * @return void
         * @static
         */
        public static
        function setLaravelSession(
            $session,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setLaravelSession($session);
        }

        /**
         * Sets the locale.
         *
         * @static
         */
        public static
        function setLocale(
            $locale,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setLocale($locale);
        }

        /**
         * Sets the request method.
         *
         * @static
         */
        public static
        function setMethod(
            $method,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setMethod($method);
        }

        /**
         * Sets the request format.
         *
         * @static
         */
        public static
        function setRequestFormat(
            $format,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRequestFormat($format);
        }

        /**
         * Set the locale for the request instance.
         *
         * @param string $locale
         *
         * @return void
         * @static
         */
        public static
        function setRequestLocale(
            $locale,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setRequestLocale($locale);
        }

        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function setRouteResolver(
            $callback,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRouteResolver($callback);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setSession(
            $session,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSession($session);
        }

        /**
         *
         *
         * @param \Symfony\Component\HttpFoundation\callable():  SessionInterface $factory
         *
         * @static
         * @internal
         */
        public static
        function setSessionFactory(
            $factory,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSessionFactory($factory);
        }

        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         *
         * @static
         */
        public static
        function setTrustedHosts(
            $hostPatterns,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }

        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies        A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with
         *                              $_SERVER['REMOTE_ADDR']
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your
         *                              proxies
         *
         * @static
         */
        public static
        function setTrustedProxies(
            $proxies,
            $trustedHeaderSet,
        ) {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedProxies(
                $proxies,
                $trustedHeaderSet,
            );
        }

        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function setUserResolver(
            $callback,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setUserResolver($callback);
        }

        /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static
        function str(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->str(
                $key,
                $default,
            );
        }

        /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static
        function string(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->string(
                $key,
                $default,
            );
        }

        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */
        public static
        function toArray() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->toArray();
        }

        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */
        public static
        function url() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->url();
        }

        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         *
         * @return mixed
         * @static
         */
        public static
        function user(
            $guard = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->user($guard);
        }

        /**
         * Get the client user agent.
         *
         * @return string|null
         * @static
         */
        public static
        function userAgent() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->userAgent();
        }

        /**
         *
         *
         * @param array $rules
         * @param mixed $params
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static
        function validate(
            $rules,
            ...$params
        ) {
            return \Illuminate\Http\Request::validate(
                $rules,
                ...
                $params,
            );
        }

        /**
         *
         *
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static
        function validateWithBag(
            $errorBag,
            $rules,
            ...$params
        ) {
            return \Illuminate\Http\Request::validateWithBag(
                $errorBag,
                $rules,
                ...
                $params,
            );
        }

        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool
         * @static
         */
        public static
        function wantsJson() {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsJson();
        }

        /**
         * Apply the callback if the request contains a non-empty value for the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         *
         * @return $this|mixed
         * @static
         */
        public static
        function whenFilled(
            $key,
            $callback,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenFilled(
                $key,
                $callback,
                $default,
            );
        }

        /**
         * Apply the callback if the request contains the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         *
         * @return $this|mixed
         * @static
         */
        public static
        function whenHas(
            $key,
            $callback,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenHas(
                $key,
                $callback,
                $default,
            );
        }

        /**
         * Apply the callback if the request is missing the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         *
         * @return $this|mixed
         * @static
         */
        public static
        function whenMissing(
            $key,
            $callback,
            $default = null,
        ) {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenMissing(
                $key,
                $callback,
                $default,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Routing\ResponseFactory
     */
    class Response {
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         *
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static
        function download(
            $file,
            $name = null,
            $headers = [],
            $disposition = 'attachment',
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->download(
                $file,
                $name,
                $headers,
                $disposition,
            );
        }

        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         *
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static
        function file(
            $file,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->file(
                $file,
                $headers,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Routing\ResponseFactory::flushMacros();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }

        /**
         * Create a new JSON response instance.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         *
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static
        function json(
            $data = [],
            $status = 200,
            $headers = [],
            $options = 0,
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->json(
                $data,
                $status,
                $headers,
                $options,
            );
        }

        /**
         * Create a new JSONP response instance.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         *
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static
        function jsonp(
            $callback,
            $data = [],
            $status = 200,
            $headers = [],
            $options = 0,
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->jsonp(
                $callback,
                $data,
                $status,
                $headers,
                $options,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Routing\ResponseFactory::macro(
                $name,
                $macro,
            );
        }

        /**
         * Create a new response instance.
         *
         * @param mixed $content
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\Response
         * @static
         */
        public static
        function make(
            $content = '',
            $status = 200,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->make(
                $content,
                $status,
                $headers,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Routing\ResponseFactory::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Create a new "no content" response.
         *
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\Response
         * @static
         */
        public static
        function noContent(
            $status = 204,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->noContent(
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function redirectGuest(
            $path,
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectGuest(
                $path,
                $status,
                $headers,
                $secure,
            );
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function redirectTo(
            $path,
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectTo(
                $path,
                $status,
                $headers,
                $secure,
            );
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function redirectToAction(
            $action,
            $parameters = [],
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToAction(
                $action,
                $parameters,
                $status,
                $headers,
            );
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function redirectToIntended(
            $default = '/',
            $status = 302,
            $headers = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToIntended(
                $default,
                $status,
                $headers,
                $secure,
            );
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static
        function redirectToRoute(
            $route,
            $parameters = [],
            $status = 302,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToRoute(
                $route,
                $parameters,
                $status,
                $headers,
            );
        }

        /**
         * Create a new streamed response instance.
         *
         * @param callable $callback
         * @param int $status
         * @param array $headers
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static
        function stream(
            $callback,
            $status = 200,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->stream(
                $callback,
                $status,
                $headers,
            );
        }

        /**
         * Create a new streamed response instance as a file download.
         *
         * @param callable $callback
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static
        function streamDownload(
            $callback,
            $name = null,
            $headers = [],
            $disposition = 'attachment',
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->streamDownload(
                $callback,
                $name,
                $headers,
                $disposition,
            );
        }

        /**
         * Create a new response for a given view.
         *
         * @param string|array $view
         * @param array $data
         * @param int $status
         * @param array $headers
         *
         * @return \Illuminate\Http\Response
         * @static
         */
        public static
        function view(
            $view,
            $data = [],
            $status = 200,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->view(
                $view,
                $data,
                $status,
                $headers,
            );
        }

    }

    /**
     *
     *
     * @method static \Illuminate\Routing\RouteRegistrar attribute(string $key, mixed $value)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlpha(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlphaNumeric(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereNumber(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUlid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUuid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereIn(array|string $parameters, array $values)
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar namespace(string|null $value)
     * @method static \Illuminate\Routing\RouteRegistrar prefix(string $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\Router
     */
    class Route {
        /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function addRoute(
            $methods,
            $uri,
            $action,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->addRoute(
                $methods,
                $uri,
                $action,
            );
        }

        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function aliasMiddleware(
            $name,
            $class,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->aliasMiddleware(
                $name,
                $class,
            );
        }

        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function any(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->any(
                $uri,
                $action,
            );
        }

        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         *
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static
        function apiResource(
            $name,
            $controller,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->apiResource(
                $name,
                $controller,
                $options,
            );
        }

        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         *
         * @return void
         * @static
         */
        public static
        function apiResources(
            $resources,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->apiResources(
                $resources,
                $options,
            );
        }

        /**
         * Route an API singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         *
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration
         * @static
         */
        public static
        function apiSingleton(
            $name,
            $controller,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->apiSingleton(
                $name,
                $controller,
                $options,
            );
        }

        /**
         * Register an array of API singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         *
         * @return void
         * @static
         */
        public static
        function apiSingletons(
            $singletons,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->apiSingletons(
                $singletons,
                $options,
            );
        }

        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         *
         * @return void
         * @static
         */
        public static
        function bind(
            $key,
            $binder,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->bind(
                $key,
                $binder,
            );
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static
        function current() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->current();
        }

        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */
        public static
        function currentRouteAction() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteAction();
        }

        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */
        public static
        function currentRouteName() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteName();
        }

        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         *
         * @return bool
         * @static
         */
        public static
        function currentRouteNamed(
            ...$patterns
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteNamed(
                ...
                $patterns,
            );
        }

        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         *
         * @return bool
         * @static
         */
        public static
        function currentRouteUses(
            $action,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteUses($action);
        }

        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function delete(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->delete(
                $uri,
                $action,
            );
        }

        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function dispatch(
            $request,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatch($request);
        }

        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function dispatchToRoute(
            $request,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatchToRoute($request);
        }

        /**
         * Register a new Fallback route with the router.
         *
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function fallback(
            $action,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->fallback($action);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Routing\Router::flushMacros();
        }

        /**
         * Flush the router's middleware groups.
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function flushMiddlewareGroups() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->flushMiddlewareGroups();
        }

        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         *
         * @return array
         * @static
         */
        public static
        function gatherRouteMiddleware(
            $route,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->gatherRouteMiddleware($route);
        }

        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function get(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->get(
                $uri,
                $action,
            );
        }

        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         *
         * @return \Closure|null
         * @static
         */
        public static
        function getBindingCallback(
            $key,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getBindingCallback($key);
        }

        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function getCurrentRequest() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRequest();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static
        function getCurrentRoute() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRoute();
        }

        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */
        public static
        function getGroupStack() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getGroupStack();
        }

        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */
        public static
        function getLastGroupPrefix() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getLastGroupPrefix();
        }

        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */
        public static
        function getMiddleware() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddleware();
        }

        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */
        public static
        function getMiddlewareGroups() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddlewareGroups();
        }

        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */
        public static
        function getPatterns() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getPatterns();
        }

        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollectionInterface
         * @static
         */
        public static
        function getRoutes() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getRoutes();
        }

        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|array|string $routes
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function group(
            $attributes,
            $routes,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->group(
                $attributes,
                $routes,
            );
        }

        /**
         * Check if a route with the given name exists.
         *
         * @param string|array $name
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $name,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->has($name);
        }

        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */
        public static
        function hasGroupStack() {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasGroupStack();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Routing\Router::hasMacro($name);
        }

        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMiddlewareGroup(
            $name,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasMiddlewareGroup($name);
        }

        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         *
         * @return mixed
         * @static
         */
        public static
        function input(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->input(
                $key,
                $default,
            );
        }

        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         *
         * @return bool
         * @static
         */
        public static
        function is(
            ...$patterns
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->is(
                ...
                $patterns,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Routing\Router::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function match(
            $methods,
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->match(
                $methods,
                $uri,
                $action,
            );
        }

        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         *
         * @return void
         * @static
         */
        public static
        function matched(
            $callback,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->matched($callback);
        }

        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         *
         * @return array
         * @static
         */
        public static
        function mergeWithLastGroup(
            $new,
            $prependExistingPrefix = true,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->mergeWithLastGroup(
                $new,
                $prependExistingPrefix,
            );
        }

        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function middlewareGroup(
            $name,
            $middleware,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->middlewareGroup(
                $name,
                $middleware,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Routing\Router::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static
        function model(
            $key,
            $class,
            $callback = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->model(
                $key,
                $class,
                $callback,
            );
        }

        /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function newRoute(
            $methods,
            $uri,
            $action,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->newRoute(
                $methods,
                $uri,
                $action,
            );
        }

        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function options(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->options(
                $uri,
                $action,
            );
        }

        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function patch(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->patch(
                $uri,
                $action,
            );
        }

        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         *
         * @return void
         * @static
         */
        public static
        function pattern(
            $key,
            $pattern,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->pattern(
                $key,
                $pattern,
            );
        }

        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         *
         * @return void
         * @static
         */
        public static
        function patterns(
            $patterns,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->patterns($patterns);
        }

        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function permanentRedirect(
            $uri,
            $destination,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->permanentRedirect(
                $uri,
                $destination,
            );
        }

        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function post(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->post(
                $uri,
                $action,
            );
        }

        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function prepareResponse(
            $request,
            $response,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prepareResponse(
                $request,
                $response,
            );
        }

        /**
         * Add a middleware to the beginning of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function prependMiddlewareToGroup(
            $group,
            $middleware,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prependMiddlewareToGroup(
                $group,
                $middleware,
            );
        }

        /**
         * Add a middleware to the end of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function pushMiddlewareToGroup(
            $group,
            $middleware,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->pushMiddlewareToGroup(
                $group,
                $middleware,
            );
        }

        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function put(
            $uri,
            $action = null,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->put(
                $uri,
                $action,
            );
        }

        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function redirect(
            $uri,
            $destination,
            $status = 302,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->redirect(
                $uri,
                $destination,
                $status,
            );
        }

        /**
         * Remove the given middleware from the specified group.
         *
         * @param string $group
         * @param string $middleware
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function removeMiddlewareFromGroup(
            $group,
            $middleware,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->removeMiddlewareFromGroup(
                $group,
                $middleware,
            );
        }

        /**
         * Resolve a flat array of middleware classes from the provided array.
         *
         * @param array $middleware
         * @param array $excluded
         *
         * @return array
         * @static
         */
        public static
        function resolveMiddleware(
            $middleware,
            $excluded = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resolveMiddleware(
                $middleware,
                $excluded,
            );
        }

        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         *
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static
        function resource(
            $name,
            $controller,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resource(
                $name,
                $controller,
                $options,
            );
        }

        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         *
         * @return void
         * @static
         */
        public static
        function resourceParameters(
            $parameters = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resourceParameters($parameters);
        }

        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         *
         * @return array|null
         * @static
         */
        public static
        function resourceVerbs(
            $verbs = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resourceVerbs($verbs);
        }

        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         *
         * @return void
         * @static
         */
        public static
        function resources(
            $resources,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resources(
                $resources,
                $options,
            );
        }

        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function respondWithRoute(
            $name,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->respondWithRoute($name);
        }

        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         *
         * @return void
         * @static
         */
        public static
        function setCompiledRoutes(
            $routes,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setCompiledRoutes($routes);
        }

        /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->setContainer($container);
        }

        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         *
         * @return void
         * @static
         */
        public static
        function setRoutes(
            $routes,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setRoutes($routes);
        }

        /**
         * Route a singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         *
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration
         * @static
         */
        public static
        function singleton(
            $name,
            $controller,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->singleton(
                $name,
                $controller,
                $options,
            );
        }

        /**
         * Register an array of singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         *
         * @return void
         * @static
         */
        public static
        function singletons(
            $singletons,
            $options = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->singletons(
                $singletons,
                $options,
            );
        }

        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         *
         * @return void
         * @static
         */
        public static
        function singularResourceParameters(
            $singular = true,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->singularResourceParameters($singular);
        }

        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         *
         * @return \Illuminate\Routing\Route
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static
         */
        public static
        function substituteBindings(
            $route,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->substituteBindings($route);
        }

        /**
         * Substitute the implicit route bindings for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         *
         * @return void
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static
         */
        public static
        function substituteImplicitBindings(
            $route,
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->substituteImplicitBindings($route);
        }

        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function toResponse(
            $request,
            $response,
        ) {
            return \Illuminate\Routing\Router::toResponse(
                $request,
                $response,
            );
        }

        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         *
         * @return array
         * @static
         */
        public static
        function uniqueMiddleware(
            $middleware,
        ) {
            return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }

        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         *
         * @return bool
         * @static
         */
        public static
        function uses(
            ...$patterns
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->uses(
                ...
                $patterns,
            );
        }

        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static
        function view(
            $uri,
            $view,
            $data = [],
            $status = 200,
            $headers = [],
        ) {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->view(
                $uri,
                $view,
                $data,
                $status,
                $headers,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Database\Schema\Builder
     */
    class Schema {
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
        public static
        function blueprintResolver(
            $resolver,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->blueprintResolver($resolver);
        }

        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function create(
            $table,
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->create(
                $table,
                $callback,
            );
        }

        /**
         * Create a database in the schema.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function createDatabase(
            $name,
        ) {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->createDatabase($name);
        }

        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         *
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function defaultMorphKeyType(
            $type,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::defaultMorphKeyType($type);
        }

        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         *
         * @return void
         * @static
         */
        public static
        function defaultStringLength(
            $length,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::defaultStringLength($length);
        }

        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static
        function disableForeignKeyConstraints() {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }

        /**
         * Drop a table from the schema.
         *
         * @param string $table
         *
         * @return void
         * @static
         */
        public static
        function drop(
            $table,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->drop($table);
        }

        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
        public static
        function dropAllTables() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->dropAllTables();
        }

        /**
         * Drop all types from the database.
         *
         * @return void
         * @static
         */
        public static
        function dropAllTypes() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->dropAllTypes();
        }

        /**
         * Drop all views from the database.
         *
         * @return void
         * @static
         */
        public static
        function dropAllViews() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->dropAllViews();
        }

        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array $columns
         *
         * @return void
         * @static
         */
        public static
        function dropColumns(
            $table,
            $columns,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->dropColumns(
                $table,
                $columns,
            );
        }

        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function dropDatabaseIfExists(
            $name,
        ) {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }

        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         *
         * @return void
         * @static
         */
        public static
        function dropIfExists(
            $table,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->dropIfExists($table);
        }

        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static
        function enableForeignKeyConstraints() {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }

        /**
         * Get all of the table names for the database.
         *
         * @return array
         * @static
         */
        public static
        function getAllTables() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getAllTables();
        }

        /**
         * Get all of the type names for the database.
         *
         * @return array
         * @static
         */
        public static
        function getAllTypes() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getAllTypes();
        }

        /**
         * Get all of the view names for the database.
         *
         * @return array
         * @static
         */
        public static
        function getAllViews() {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getAllViews();
        }

        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         *
         * @return array
         * @static
         */
        public static
        function getColumnListing(
            $table,
        ) {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getColumnListing($table);
        }

        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         *
         * @return string
         * @static
         */
        public static
        function getColumnType(
            $table,
            $column,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getColumnType(
                $table,
                $column,
            );
        }

        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static
        function getConnection() {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->getConnection();
        }

        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         *
         * @return bool
         * @static
         */
        public static
        function hasColumn(
            $table,
            $column,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->hasColumn(
                $table,
                $column,
            );
        }

        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         *
         * @return bool
         * @static
         */
        public static
        function hasColumns(
            $table,
            $columns,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->hasColumns(
                $table,
                $columns,
            );
        }

        /**
         * Determine if the given table exists.
         *
         * @param string $table
         *
         * @return bool
         * @static
         */
        public static
        function hasTable(
            $table,
        ) {
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->hasTable($table);
        }

        /**
         * Set the default morph key type for migrations to ULIDs.
         *
         * @return void
         * @static
         */
        public static
        function morphUsingUlids() {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::morphUsingUlids();
        }

        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void
         * @static
         */
        public static
        function morphUsingUuids() {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::morphUsingUuids();
        }

        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         *
         * @return void
         * @static
         */
        public static
        function rename(
            $from,
            $to,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->rename(
                $from,
                $to,
            );
        }

        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         *
         * @return \Illuminate\Database\Schema\PostgresBuilder
         * @static
         */
        public static
        function setConnection(
            $connection,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->setConnection($connection);
        }

        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function table(
            $table,
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->table(
                $table,
                $callback,
            );
        }

        /**
         * Attempt to use native schema operations for dropping, renaming, and modifying columns, even if Doctrine DBAL
         * is installed.
         *
         * @param bool $value
         *
         * @return void
         * @static
         */
        public static
        function useNativeSchemaOperationsIfPossible(
            $value = true,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::useNativeSchemaOperationsIfPossible($value);
        }

        /**
         * Execute a table builder callback if the given table doesn't have a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function whenTableDoesntHaveColumn(
            $table,
            $column,
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->whenTableDoesntHaveColumn(
                $table,
                $column,
                $callback,
            );
        }

        /**
         * Execute a table builder callback if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function whenTableHasColumn(
            $table,
            $column,
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            $instance->whenTableHasColumn(
                $table,
                $column,
                $callback,
            );
        }

        /**
         * Disable foreign key constraints during the execution of a callback.
         *
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static
        function withoutForeignKeyConstraints(
            $callback,
        ) {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var \Illuminate\Database\Schema\PostgresBuilder $instance */
            return $instance->withoutForeignKeyConstraints($callback);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Session\SessionManager
     */
    class Session {
        /**
         * Age the flash data for the session.
         *
         * @return void
         * @static
         */
        public static
        function ageFlashData() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->ageFlashData();
        }

        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */
        public static
        function all() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->all();
        }

        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null
         * @static
         */
        public static
        function blockDriver() {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->blockDriver();
        }

        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         *
         * @return int
         * @static
         */
        public static
        function decrement(
            $key,
            $amount = 1,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->decrement(
                $key,
                $amount,
            );
        }

        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         *
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function driver(
            $driver = null,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function exists(
            $key,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->exists($key);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function flash(
            $key,
            $value = true,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flash(
                $key,
                $value,
            );
        }

        /**
         * Flash an input array to the session.
         *
         * @param array $value
         *
         * @return void
         * @static
         */
        public static
        function flashInput(
            $value,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flashInput($value);
        }

        /**
         * Remove all of the items from the session.
         *
         * @return void
         * @static
         */
        public static
        function flush() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flush();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Session\Store::flushMacros();
        }

        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         *
         * @return void
         * @static
         */
        public static
        function forget(
            $keys,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->forget($keys);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static
        function forgetDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function get(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->get(
                $key,
                $default,
            );
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static
        function getContainer() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getContainer();
        }

        /**
         * Get the default session driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static
        function getDrivers() {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface
         * @static
         */
        public static
        function getHandler() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getHandler();
        }

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
        public static
        function getId() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getId();
        }

        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */
        public static
        function getName() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getName();
        }

        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function getOldInput(
            $key = null,
            $default = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getOldInput(
                $key,
                $default,
            );
        }

        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */
        public static
        function getSessionConfig() {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getSessionConfig();
        }

        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */
        public static
        function handlerNeedsRequest() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->handlerNeedsRequest();
        }

        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function has(
            $key,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->has($key);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Session\Store::hasMacro($name);
        }

        /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         *
         * @return bool
         * @static
         */
        public static
        function hasOldInput(
            $key = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->hasOldInput($key);
        }

        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         *
         * @return mixed
         * @static
         */
        public static
        function increment(
            $key,
            $amount = 1,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->increment(
                $key,
                $amount,
            );
        }

        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */
        public static
        function invalidate() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->invalidate();
        }

        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */
        public static
        function isStarted() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isStarted();
        }

        /**
         * Determine if this is a valid session ID.
         *
         * @param string|null $id
         *
         * @return bool
         * @static
         */
        public static
        function isValidId(
            $id,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isValidId($id);
        }

        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         *
         * @return void
         * @static
         */
        public static
        function keep(
            $keys = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->keep($keys);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Session\Store::macro(
                $name,
                $macro,
            );
        }

        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         *
         * @return bool
         * @static
         */
        public static
        function migrate(
            $destroy = false,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->migrate($destroy);
        }

        /**
         * Determine if the given key is missing from the session data.
         *
         * @param string|array $key
         *
         * @return bool
         * @static
         */
        public static
        function missing(
            $key,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->missing($key);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Session\Store::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function now(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->now(
                $key,
                $value,
            );
        }

        /**
         * Get a subset of the session data.
         *
         * @param array $keys
         *
         * @return array
         * @static
         */
        public static
        function only(
            $keys,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->only($keys);
        }

        /**
         * Specify that the user has confirmed their password.
         *
         * @return void
         * @static
         */
        public static
        function passwordConfirmed() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->passwordConfirmed();
        }

        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */
        public static
        function previousUrl() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->previousUrl();
        }

        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function pull(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->pull(
                $key,
                $default,
            );
        }

        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function push(
            $key,
            $value,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->push(
                $key,
                $value,
            );
        }

        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         *
         * @return void
         * @static
         */
        public static
        function put(
            $key,
            $value = null,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->put(
                $key,
                $value,
            );
        }

        /**
         * Reflash all of the session flash data.
         *
         * @return void
         * @static
         */
        public static
        function reflash() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->reflash();
        }

        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         *
         * @return bool
         * @static
         */
        public static
        function regenerate(
            $destroy = false,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->regenerate($destroy);
        }

        /**
         * Regenerate the CSRF token value.
         *
         * @return void
         * @static
         */
        public static
        function regenerateToken() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->regenerateToken();
        }

        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static
        function remember(
            $key,
            $callback,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remember(
                $key,
                $callback,
            );
        }

        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         *
         * @return mixed
         * @static
         */
        public static
        function remove(
            $key,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remove($key);
        }

        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         *
         * @return void
         * @static
         */
        public static
        function replace(
            $attributes,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->replace($attributes);
        }

        /**
         * Save the session data to storage.
         *
         * @return void
         * @static
         */
        public static
        function save() {
            /** @var \Illuminate\Session\Store $instance */
            $instance->save();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {            //Method inherited from \Illuminate\Support\Manager
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Set the default session driver name.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setDefaultDriver(
            $name,
        ) {
            /** @var \Illuminate\Session\SessionManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         *
         * @return void
         * @static
         */
        public static
        function setExists(
            $value,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setExists($value);
        }

        /**
         * Set the underlying session handler implementation.
         *
         * @param \SessionHandlerInterface $handler
         *
         * @return \SessionHandlerInterface
         * @static
         */
        public static
        function setHandler(
            $handler,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->setHandler($handler);
        }

        /**
         * Set the session ID.
         *
         * @param string|null $id
         *
         * @return void
         * @static
         */
        public static
        function setId(
            $id,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setId($id);
        }

        /**
         * Set the name of the session.
         *
         * @param string $name
         *
         * @return void
         * @static
         */
        public static
        function setName(
            $name,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setName($name);
        }

        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         *
         * @return void
         * @static
         */
        public static
        function setPreviousUrl(
            $url,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setPreviousUrl($url);
        }

        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return void
         * @static
         */
        public static
        function setRequestOnHandler(
            $request,
        ) {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setRequestOnHandler($request);
        }

        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool
         * @static
         */
        public static
        function shouldBlock() {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->shouldBlock();
        }

        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */
        public static
        function start() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->start();
        }

        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */
        public static
        function token() {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->token();
        }

    }

    /**
     *
     *
     * @method static bool has(string $location)
     * @method static string read(string $location)
     * @method static \League\Flysystem\DirectoryListing listContents(string $location, bool $deep = false)
     * @method static int fileSize(string $path)
     * @method static string visibility(string $path)
     * @method static void write(string $location, string $contents, array $config = [])
     * @method static void createDirectory(string $location, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemManager
     */
    class Storage {
        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param string|null $directory
         *
         * @return array
         * @static
         */
        public static
        function allDirectories(
            $directory = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         *
         * @return array
         * @static
         */
        public static
        function allFiles(
            $directory = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         *
         * @return bool
         * @static
         */
        public static
        function append(
            $path,
            $data,
            $separator = '
',
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->append(
                $path,
                $data,
                $separator,
            );
        }

        /**
         * Assert that the given directory is empty.
         *
         * @param string $path
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function assertDirectoryEmpty(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertDirectoryEmpty($path);
        }

        /**
         * Assert that the given file or directory exists.
         *
         * @param string|array $path
         * @param string|null $content
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function assertExists(
            $path,
            $content = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertExists(
                $path,
                $content,
            );
        }

        /**
         * Assert that the given file or directory does not exist.
         *
         * @param string|array $path
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function assertMissing(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }

        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function build(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->build($config);
        }

        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function buildTemporaryUrlsUsing(
            $callback,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }

        /**
         * Get the checksum for a file.
         *
         * @return string|false
         * @throws UnableToProvideChecksum
         * @static
         */
        public static
        function checksum(
            $path,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->checksum(
                $path,
                $options,
            );
        }

        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function cloud() {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->cloud();
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         *
         * @return bool
         * @static
         */
        public static
        function copy(
            $from,
            $to,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->copy(
                $from,
                $to,
            );
        }

        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function createFtpDriver(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }

        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function createLocalDriver(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createLocalDriver($config);
        }

        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         *
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static
        function createS3Driver(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }

        /**
         * Create a scoped driver.
         *
         * @param array $config
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function createScopedDriver(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createScopedDriver($config);
        }

        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function createSftpDriver(
            $config,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         *
         * @return bool
         * @static
         */
        public static
        function delete(
            $paths,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->delete($paths);
        }

        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         *
         * @return bool
         * @static
         */
        public static
        function deleteDirectory(
            $directory,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         *
         * @return array
         * @static
         */
        public static
        function directories(
            $directory = null,
            $recursive = false,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directories(
                $directory,
                $recursive,
            );
        }

        /**
         * Determine if a directory exists.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function directoryExists(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryExists($path);
        }

        /**
         * Determine if a directory is missing.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function directoryMissing(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryMissing($path);
        }

        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function disk(
            $name = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->disk($name);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static
        function download(
            $path,
            $name = null,
            $headers = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->download(
                $path,
                $name,
                $headers,
            );
        }

        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static
        function drive(
            $name = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->drive($name);
        }

        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function exists(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->exists($path);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         *
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static
        function extend(
            $driver,
            $callback,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->extend(
                $driver,
                $callback,
            );
        }

        /**
         * Determine if a file exists.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function fileExists(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileExists($path);
        }

        /**
         * Determine if a file is missing.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function fileMissing(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileMissing($path);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         *
         * @return array
         * @static
         */
        public static
        function files(
            $directory = null,
            $recursive = false,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->files(
                $directory,
                $recursive,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }

        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         *
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static
        function forgetDisk(
            $disk,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         *
         * @return string|null
         * @static
         */
        public static
        function get(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->get($path);
        }

        /**
         * Get the Flysystem adapter.
         *
         * @return \League\Flysystem\FilesystemAdapter
         * @static
         */
        public static
        function getAdapter() {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getAdapter();
        }

        /**
         * Get the configuration values.
         *
         * @return array
         * @static
         */
        public static
        function getConfig() {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getConfig();
        }

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultCloudDriver() {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static
        function getDefaultDriver() {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemOperator
         * @static
         */
        public static
        function getDriver() {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getDriver();
        }

        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function getVisibility(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         *
         * @return int
         * @static
         */
        public static
        function lastModified(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->lastModified($path);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Filesystem\FilesystemAdapter::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Create a directory.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function makeDirectory(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         *
         * @return string|false
         * @static
         */
        public static
        function mimeType(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->mimeType($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function missing(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->missing($path);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Filesystem\FilesystemAdapter::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         *
         * @return bool
         * @static
         */
        public static
        function move(
            $from,
            $to,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->move(
                $from,
                $to,
            );
        }

        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function path(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->path($path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         *
         * @return bool
         * @static
         */
        public static
        function prepend(
            $path,
            $data,
            $separator = '
',
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->prepend(
                $path,
                $data,
                $separator,
            );
        }

        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool
         * @static
         */
        public static
        function providesTemporaryUrls() {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->providesTemporaryUrls();
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         *
         * @return void
         * @static
         */
        public static
        function purge(
            $name = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            $instance->purge($name);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         *
         * @return string|bool
         * @static
         */
        public static
        function put(
            $path,
            $contents,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->put(
                $path,
                $contents,
                $options,
            );
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param mixed $options
         *
         * @return string|false
         * @static
         */
        public static
        function putFile(
            $path,
            $file = null,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFile(
                $path,
                $file,
                $options,
            );
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param string|array|null $name
         * @param mixed $options
         *
         * @return string|false
         * @static
         */
        public static
        function putFileAs(
            $path,
            $file,
            $name = null,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFileAs(
                $path,
                $file,
                $name,
                $options,
            );
        }

        /**
         * Get a resource to read the file.
         *
         * @param string $path
         *
         * @return resource|null The path resource or null on failure.
         * @static
         */
        public static
        function readStream(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->readStream($path);
        }

        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static
        function response(
            $path,
            $name = null,
            $headers = [],
            $disposition = 'inline',
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->response(
                $path,
                $name,
                $headers,
                $disposition,
            );
        }

        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         *
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static
        function set(
            $name,
            $disk,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->set(
                $name,
                $disk,
            );
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         *
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static
        function setApplication(
            $app,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         *
         * @return bool
         * @static
         */
        public static
        function setVisibility(
            $path,
            $visibility,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->setVisibility(
                $path,
                $visibility,
            );
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         *
         * @return int
         * @static
         */
        public static
        function size(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->size($path);
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static
        function temporaryUrl(
            $path,
            $expiration,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->temporaryUrl(
                $path,
                $expiration,
                $options,
            );
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         *
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         *
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static
        function unless(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->unless(
                $value,
                $callback,
                $default,
            );
        }

        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static
        function url(
            $path,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->url($path);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         *
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         *
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static
        function when(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->when(
                $value,
                $callback,
                $default,
            );
        }

        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         *
         * @return bool
         * @static
         */
        public static
        function writeStream(
            $path,
            $resource,
            $options = [],
        ) {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->writeStream(
                $path,
                $resource,
                $options,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\Routing\UrlGenerator
     */
    class URL {
        /**
         * Get the URL to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param bool $absolute
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function action(
            $action,
            $parameters = [],
            $absolute = true,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->action(
                $action,
                $parameters,
                $absolute,
            );
        }

        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
        public static
        function asset(
            $path,
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->asset(
                $path,
                $secure,
            );
        }

        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
        public static
        function assetFrom(
            $root,
            $path,
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->assetFrom(
                $root,
                $path,
                $secure,
            );
        }

        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */
        public static
        function current() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->current();
        }

        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         *
         * @return void
         * @static
         */
        public static
        function defaults(
            $defaults,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->defaults($defaults);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Routing\UrlGenerator::flushMacros();
        }

        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         *
         * @return void
         * @static
         */
        public static
        function forceRootUrl(
            $root,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceRootUrl($root);
        }

        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         *
         * @return void
         * @static
         */
        public static
        function forceScheme(
            $scheme,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceScheme($scheme);
        }

        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @param \Illuminate\Routing\Route|null $route
         *
         * @return string
         * @static
         */
        public static
        function format(
            $root,
            $path,
            $route = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->format(
                $root,
                $path,
                $route,
            );
        }

        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function formatHostUsing(
            $callback,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatHostUsing($callback);
        }

        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         *
         * @return array
         * @static
         */
        public static
        function formatParameters(
            $parameters,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatParameters($parameters);
        }

        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function formatPathUsing(
            $callback,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatPathUsing($callback);
        }

        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string|null $root
         *
         * @return string
         * @static
         */
        public static
        function formatRoot(
            $scheme,
            $root = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatRoot(
                $scheme,
                $root,
            );
        }

        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
        public static
        function formatScheme(
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatScheme($secure);
        }

        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */
        public static
        function full() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->full();
        }

        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array
         * @static
         */
        public static
        function getDefaultParameters() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getDefaultParameters();
        }

        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static
        function getRequest() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getRequest();
        }

        /**
         * Get the root controller namespace.
         *
         * @return string
         * @static
         */
        public static
        function getRootControllerNamespace() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getRootControllerNamespace();
        }

        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param array $ignoreQuery
         *
         * @return bool
         * @static
         */
        public static
        function hasCorrectSignature(
            $request,
            $absolute = true,
            $ignoreQuery = [],
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasCorrectSignature(
                $request,
                $absolute,
                $ignoreQuery,
            );
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }

        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param array $ignoreQuery
         *
         * @return bool
         * @static
         */
        public static
        function hasValidRelativeSignature(
            $request,
            $ignoreQuery = [],
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidRelativeSignature(
                $request,
                $ignoreQuery,
            );
        }

        /**
         * Determine if the given request has a valid signature.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param array $ignoreQuery
         *
         * @return bool
         * @static
         */
        public static
        function hasValidSignature(
            $request,
            $absolute = true,
            $ignoreQuery = [],
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidSignature(
                $request,
                $absolute,
                $ignoreQuery,
            );
        }

        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         *
         * @return bool
         * @static
         */
        public static
        function isValidUrl(
            $path,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->isValidUrl($path);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Routing\UrlGenerator::macro(
                $name,
                $macro,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Routing\UrlGenerator::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure
         * @static
         */
        public static
        function pathFormatter() {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->pathFormatter();
        }

        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         *
         * @return string
         * @static
         */
        public static
        function previous(
            $fallback = false,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->previous($fallback);
        }

        /**
         * Get the previous path info for the request.
         *
         * @param mixed $fallback
         *
         * @return string
         * @static
         */
        public static
        function previousPath(
            $fallback = false,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->previousPath($fallback);
        }

        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         *
         * @return string
         * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
         * @static
         */
        public static
        function route(
            $name,
            $parameters = [],
            $absolute = true,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->route(
                $name,
                $parameters,
                $absolute,
            );
        }

        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         *
         * @return string
         * @static
         */
        public static
        function secure(
            $path,
            $parameters = [],
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secure(
                $path,
                $parameters,
            );
        }

        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         *
         * @return string
         * @static
         */
        public static
        function secureAsset(
            $path,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secureAsset($path);
        }

        /**
         * Set the encryption key resolver.
         *
         * @param callable $keyResolver
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function setKeyResolver(
            $keyResolver,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setKeyResolver($keyResolver);
        }

        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return void
         * @static
         */
        public static
        function setRequest(
            $request,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->setRequest($request);
        }

        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function setRootControllerNamespace(
            $rootNamespace,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRootControllerNamespace($rootNamespace);
        }

        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollectionInterface $routes
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function setRoutes(
            $routes,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRoutes($routes);
        }

        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function setSessionResolver(
            $sessionResolver,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setSessionResolver($sessionResolver);
        }

        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return bool
         * @static
         */
        public static
        function signatureHasNotExpired(
            $request,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signatureHasNotExpired($request);
        }

        /**
         * Create a signed route URL for a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param bool $absolute
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function signedRoute(
            $name,
            $parameters = [],
            $expiration = null,
            $absolute = true,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signedRoute(
                $name,
                $parameters,
                $expiration,
                $absolute,
            );
        }

        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param string $name
         * @param \DateTimeInterface|\DateInterval|int $expiration
         * @param array $parameters
         * @param bool $absolute
         *
         * @return string
         * @static
         */
        public static
        function temporarySignedRoute(
            $name,
            $expiration,
            $parameters = [],
            $absolute = true,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->temporarySignedRoute(
                $name,
                $expiration,
                $parameters,
                $absolute,
            );
        }

        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
        public static
        function to(
            $path,
            $extra = [],
            $secure = null,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->to(
                $path,
                $extra,
                $secure,
            );
        }

        /**
         * Get the URL for a given route instance.
         *
         * @param \Illuminate\Routing\Route $route
         * @param mixed $parameters
         * @param bool $absolute
         *
         * @return string
         * @throws \Illuminate\Routing\Exceptions\UrlGenerationException
         * @static
         */
        public static
        function toRoute(
            $route,
            $parameters,
            $absolute,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->toRoute(
                $route,
                $parameters,
                $absolute,
            );
        }

        /**
         * Clone a new instance of the URL generator with a different encryption key resolver.
         *
         * @param callable $keyResolver
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static
        function withKeyResolver(
            $keyResolver,
        ) {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->withKeyResolver($keyResolver);
        }

    }

    /**
     *
     *
     * @see \Illuminate\Validation\Factory
     */
    class Validator {
        /**
         * Indicate that unvalidated array keys should be excluded from the validated data, even if the parent array
         * was validated.
         *
         * @return void
         * @static
         */
        public static
        function excludeUnvalidatedArrayKeys() {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }

        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         *
         * @return void
         * @static
         */
        public static
        function extend(
            $rule,
            $extension,
            $message = null,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend(
                $rule,
                $extension,
                $message,
            );
        }

        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         *
         * @return void
         * @static
         */
        public static
        function extendDependent(
            $rule,
            $extension,
            $message = null,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent(
                $rule,
                $extension,
                $message,
            );
        }

        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         *
         * @return void
         * @static
         */
        public static
        function extendImplicit(
            $rule,
            $extension,
            $message = null,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit(
                $rule,
                $extension,
                $message,
            );
        }

        /**
         * Get the container instance used by the validation factory.
         *
         * @return \Illuminate\Contracts\Container\Container|null
         * @static
         */
        public static
        function getContainer() {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface
         * @static
         */
        public static
        function getPresenceVerifier() {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }

        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator
         * @static
         */
        public static
        function getTranslator() {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }

        /**
         * Indicate that unvalidated array keys should be included in validated data when the parent array is validated.
         *
         * @return void
         * @static
         */
        public static
        function includeUnvalidatedArrayKeys() {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->includeUnvalidatedArrayKeys();
        }

        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         *
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static
        function make(
            $data,
            $rules,
            $messages = [],
            $attributes = [],
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make(
                $data,
                $rules,
                $messages,
                $attributes,
            );
        }

        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         *
         * @return void
         * @static
         */
        public static
        function replacer(
            $rule,
            $replacer,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer(
                $rule,
                $replacer,
            );
        }

        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
        public static
        function resolver(
            $resolver,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }

        /**
         * Set the container instance used by the validation factory.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return \Illuminate\Validation\Factory
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }

        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         *
         * @return void
         * @static
         */
        public static
        function setPresenceVerifier(
            $presenceVerifier,
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }

        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         *
         * @return array
         * @throws \Illuminate\Validation\ValidationException
         * @static
         */
        public static
        function validate(
            $data,
            $rules,
            $messages = [],
            $attributes = [],
        ) {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate(
                $data,
                $rules,
                $messages,
                $attributes,
            );
        }

    }

    /**
     *
     *
     * @see \Illuminate\View\Factory
     */
    class View {
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure|null $resolver
         *
         * @return void
         * @static
         */
        public static
        function addExtension(
            $extension,
            $engine,
            $resolver = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addExtension(
                $extension,
                $engine,
                $resolver,
            );
        }

        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         *
         * @return void
         * @static
         */
        public static
        function addLocation(
            $location,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLocation($location);
        }

        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         *
         * @return void
         * @static
         */
        public static
        function addLoop(
            $data,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLoop($data);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         *
         * @return \Illuminate\View\Factory
         * @static
         */
        public static
        function addNamespace(
            $namespace,
            $hints,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->addNamespace(
                $namespace,
                $hints,
            );
        }

        /**
         * Stop injecting content into a section and append it.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function appendSection() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->appendSection();
        }

        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         *
         * @return void
         * @static
         */
        public static
        function callComposer(
            $view,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callComposer($view);
        }

        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         *
         * @return void
         * @static
         */
        public static
        function callCreator(
            $view,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callCreator($view);
        }

        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         *
         * @return array
         * @static
         */
        public static
        function composer(
            $views,
            $callback,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composer(
                $views,
                $callback,
            );
        }

        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         *
         * @return array
         * @static
         */
        public static
        function composers(
            $composers,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composers($composers);
        }

        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         *
         * @return array
         * @static
         */
        public static
        function creator(
            $views,
            $callback,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->creator(
                $views,
                $callback,
            );
        }

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
        public static
        function decrementRender() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->decrementRender();
        }

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
        public static
        function doneRendering() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->doneRendering();
        }

        /**
         * Save the slot content for rendering.
         *
         * @return void
         * @static
         */
        public static
        function endSlot() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->endSlot();
        }

        /**
         * Determine if a given view exists.
         *
         * @param string $view
         *
         * @return bool
         * @static
         */
        public static
        function exists(
            $view,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->exists($view);
        }

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         *
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static
        function file(
            $path,
            $data = [],
            $mergeData = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->file(
                $path,
                $data,
                $mergeData,
            );
        }

        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         *
         * @return \Illuminate\Contracts\View\View
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function first(
            $views,
            $data = [],
            $mergeData = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->first(
                $views,
                $data,
                $mergeData,
            );
        }

        /**
         * Flush the cache of views located by the finder.
         *
         * @return void
         * @static
         */
        public static
        function flushFinderCache() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushFinderCache();
        }

        /**
         * Flush all of the fragments.
         *
         * @return void
         * @static
         */
        public static
        function flushFragments() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushFragments();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\View\Factory::flushMacros();
        }

        /**
         * Flush all of the sections.
         *
         * @return void
         * @static
         */
        public static
        function flushSections() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushSections();
        }

        /**
         * Flush all of the stacks.
         *
         * @return void
         * @static
         */
        public static
        function flushStacks() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStacks();
        }

        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void
         * @static
         */
        public static
        function flushState() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushState();
        }

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
        public static
        function flushStateIfDoneRendering() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStateIfDoneRendering();
        }

        /**
         * Get an item from the component data that exists above the current component.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed|null
         * @static
         */
        public static
        function getConsumableComponentData(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getConsumableComponentData(
                $key,
                $default,
            );
        }

        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static
        function getContainer() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static
        function getDispatcher() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         *
         * @return \Illuminate\Contracts\View\Engine
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function getEngineFromPath(
            $path,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineFromPath($path);
        }

        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver
         * @static
         */
        public static
        function getEngineResolver() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineResolver();
        }

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
        public static
        function getExtensions() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getExtensions();
        }

        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface
         * @static
         */
        public static
        function getFinder() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFinder();
        }

        /**
         * Get the contents of a fragment.
         *
         * @param string $name
         * @param string|null $default
         *
         * @return mixed
         * @static
         */
        public static
        function getFragment(
            $name,
            $default = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFragment(
                $name,
                $default,
            );
        }

        /**
         * Get the entire array of rendered fragments.
         *
         * @return array
         * @static
         */
        public static
        function getFragments() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFragments();
        }

        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null
         * @static
         */
        public static
        function getLastLoop() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLastLoop();
        }

        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */
        public static
        function getLoopStack() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLoopStack();
        }

        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string|null $default
         *
         * @return mixed
         * @static
         */
        public static
        function getSection(
            $name,
            $default = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSection(
                $name,
                $default,
            );
        }

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
        public static
        function getSections() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSections();
        }

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
        public static
        function getShared() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getShared();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\View\Factory::hasMacro($name);
        }

        /**
         * Determine if the given once token has been rendered.
         *
         * @param string $id
         *
         * @return bool
         * @static
         */
        public static
        function hasRenderedOnce(
            $id,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasRenderedOnce($id);
        }

        /**
         * Check if section exists.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasSection(
            $name,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasSection($name);
        }

        /**
         * Increment the top loop's indices.
         *
         * @return void
         * @static
         */
        public static
        function incrementLoopIndices() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementLoopIndices();
        }

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
        public static
        function incrementRender() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementRender();
        }

        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         *
         * @return void
         * @static
         */
        public static
        function inject(
            $section,
            $content,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->inject(
                $section,
                $content,
            );
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\View\Factory::macro(
                $name,
                $macro,
            );
        }

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         *
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static
        function make(
            $view,
            $data = [],
            $mergeData = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->make(
                $view,
                $data,
                $mergeData,
            );
        }

        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         *
         * @return void
         * @static
         */
        public static
        function markAsRenderedOnce(
            $id,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->markAsRenderedOnce($id);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\View\Factory::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         *
         * @return string
         * @static
         */
        public static
        function parentPlaceholder(
            $section = '',
        ) {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }

        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void
         * @static
         */
        public static
        function popLoop() {
            /** @var \Illuminate\View\Factory $instance */
            $instance->popLoop();
        }

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         *
         * @return \Illuminate\View\Factory
         * @static
         */
        public static
        function prependNamespace(
            $namespace,
            $hints,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->prependNamespace(
                $namespace,
                $hints,
            );
        }

        /**
         * Render the current component.
         *
         * @return string
         * @static
         */
        public static
        function renderComponent() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderComponent();
        }

        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         *
         * @return string
         * @static
         */
        public static
        function renderEach(
            $view,
            $data,
            $iterator,
            $empty = 'raw|',
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderEach(
                $view,
                $data,
                $iterator,
                $empty,
            );
        }

        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */
        public static
        function renderTranslation() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderTranslation();
        }

        /**
         * Get the rendered content of the view based on the negation of a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         *
         * @return string
         * @static
         */
        public static
        function renderUnless(
            $condition,
            $view,
            $data = [],
            $mergeData = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderUnless(
                $condition,
                $view,
                $data,
                $mergeData,
            );
        }

        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         *
         * @return string
         * @static
         */
        public static
        function renderWhen(
            $condition,
            $view,
            $data = [],
            $mergeData = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderWhen(
                $condition,
                $view,
                $data,
                $mergeData,
            );
        }

        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         *
         * @return \Illuminate\View\Factory
         * @static
         */
        public static
        function replaceNamespace(
            $namespace,
            $hints,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->replaceNamespace(
                $namespace,
                $hints,
            );
        }

        /**
         * Check if section does not exist.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function sectionMissing(
            $name,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->sectionMissing($name);
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         *
         * @return void
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setContainer($container);
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         *
         * @return void
         * @static
         */
        public static
        function setDispatcher(
            $events,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         *
         * @return void
         * @static
         */
        public static
        function setFinder(
            $finder,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setFinder($finder);
        }

        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed|null $value
         *
         * @return mixed
         * @static
         */
        public static
        function share(
            $key,
            $value = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->share(
                $key,
                $value,
            );
        }

        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         * @static
         */
        public static
        function shared(
            $key,
            $default = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->shared(
                $key,
                $default,
            );
        }

        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @param array $attributes
         *
         * @return void
         * @static
         */
        public static
        function slot(
            $name,
            $content = null,
            $attributes = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->slot(
                $name,
                $content,
                $attributes,
            );
        }

        /**
         * Start a component rendering process.
         *
         * @param \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string $view
         * @param array $data
         *
         * @return void
         * @static
         */
        public static
        function startComponent(
            $view,
            $data = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponent(
                $view,
                $data,
            );
        }

        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         *
         * @return void
         * @static
         */
        public static
        function startComponentFirst(
            $names,
            $data = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponentFirst(
                $names,
                $data,
            );
        }

        /**
         * Start injecting content into a fragment.
         *
         * @param string $fragment
         *
         * @return void
         * @static
         */
        public static
        function startFragment(
            $fragment,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startFragment($fragment);
        }

        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         *
         * @return void
         * @static
         */
        public static
        function startPrepend(
            $section,
            $content = '',
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPrepend(
                $section,
                $content,
            );
        }

        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         *
         * @return void
         * @static
         */
        public static
        function startPush(
            $section,
            $content = '',
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPush(
                $section,
                $content,
            );
        }

        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         *
         * @return void
         * @static
         */
        public static
        function startSection(
            $section,
            $content = null,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startSection(
                $section,
                $content,
            );
        }

        /**
         * Start a translation block.
         *
         * @param array $replacements
         *
         * @return void
         * @static
         */
        public static
        function startTranslation(
            $replacements = [],
        ) {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startTranslation($replacements);
        }

        /**
         * Stop injecting content into a fragment.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function stopFragment() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopFragment();
        }

        /**
         * Stop prepending content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function stopPrepend() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPrepend();
        }

        /**
         * Stop injecting content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function stopPush() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPush();
        }

        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function stopSection(
            $overwrite = false,
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopSection($overwrite);
        }

        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         *
         * @return string
         * @static
         */
        public static
        function yieldContent(
            $section,
            $default = '',
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldContent(
                $section,
                $default,
            );
        }

        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         *
         * @return string
         * @static
         */
        public static
        function yieldPushContent(
            $section,
            $default = '',
        ) {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldPushContent(
                $section,
                $default,
            );
        }

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
        public static
        function yieldSection() {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldSection();
        }

    }

    /**
     *
     *
     * @see \Illuminate\Foundation\Vite
     */
    class Vite {
        /**
         * Get the URL for an asset.
         *
         * @param string $asset
         * @param string|null $buildDirectory
         *
         * @return string
         * @static
         */
        public static
        function asset(
            $asset,
            $buildDirectory = null,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->asset(
                $asset,
                $buildDirectory,
            );
        }

        /**
         * Get the Content Security Policy nonce applied to all generated tags.
         *
         * @return string|null
         * @static
         */
        public static
        function cspNonce() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->cspNonce();
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Foundation\Vite::flushMacros();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Illuminate\Foundation\Vite::hasMacro($name);
        }

        /**
         * Get the Vite "hot" file path.
         *
         * @return string
         * @static
         */
        public static
        function hotFile() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->hotFile();
        }

        /**
         *
         *
         * @param mixed $asset
         *
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function image(
            $asset,
        ) {
            return \Illuminate\Foundation\Vite::image($asset);
        }

        /**
         * Determine if the HMR server is running.
         *
         * @return bool
         * @static
         */
        public static
        function isRunningHot() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->isRunningHot();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Foundation\Vite::macro(
                $name,
                $macro,
            );
        }

        /**
         * Get a unique hash representing the current manifest, or null if there is no manifest.
         *
         * @param string|null $buildDirectory
         *
         * @return string|null
         * @static
         */
        public static
        function manifestHash(
            $buildDirectory = null,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->manifestHash($buildDirectory);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Foundation\Vite::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Get the preloaded assets.
         *
         * @return array
         * @static
         */
        public static
        function preloadedAssets() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->preloadedAssets();
        }

        /**
         * Generate React refresh runtime script.
         *
         * @return \Illuminate\Support\HtmlString|void
         * @static
         */
        public static
        function reactRefresh() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->reactRefresh();
        }

        /**
         * Get the Vite tag content as a string of HTML.
         *
         * @return string
         * @static
         */
        public static
        function toHtml() {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->toHtml();
        }

        /**
         * Set the Vite build directory.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useBuildDirectory(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useBuildDirectory($path);
        }

        /**
         * Generate or set a Content Security Policy nonce to apply to all generated tags.
         *
         * @param string|null $nonce
         *
         * @return string
         * @static
         */
        public static
        function useCspNonce(
            $nonce = null,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useCspNonce($nonce);
        }

        /**
         * Set the Vite "hot" file path.
         *
         * @param string $path
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useHotFile(
            $path,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useHotFile($path);
        }

        /**
         * Use the given key to detect integrity hashes in the manifest.
         *
         * @param string|false $key
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useIntegrityKey(
            $key,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useIntegrityKey($key);
        }

        /**
         * Set the filename for the manifest file.
         *
         * @param string $filename
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useManifestFilename(
            $filename,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useManifestFilename($filename);
        }

        /**
         * Use the given callback to resolve attributes for preload tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): (array|false))|array|false
         *                                                          $attributes
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function usePreloadTagAttributes(
            $attributes,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->usePreloadTagAttributes($attributes);
        }

        /**
         * Use the given callback to resolve attributes for script tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): array)|array  $attributes
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useScriptTagAttributes(
            $attributes,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useScriptTagAttributes($attributes);
        }

        /**
         * Use the given callback to resolve attributes for style tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): array)|array  $attributes
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function useStyleTagAttributes(
            $attributes,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useStyleTagAttributes($attributes);
        }

        /**
         * Set the Vite entry points.
         *
         * @param array $entryPoints
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */
        public static
        function withEntryPoints(
            $entryPoints,
        ) {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->withEntryPoints($entryPoints);
        }

    }

}

namespace Illuminate\Support {
    /**
     *
     *
     */
    class Arr {

    }

    /**
     *
     *
     */
    class Js {

    }

    /**
     *
     *
     */
    class Str {

    }

    /**
     *
     *
     * @template TKey of array-key
     * @template TValue
     * @implements \ArrayAccess<TKey, TValue>
     * @implements \Illuminate\Support\Enumerable<TKey, TValue>
     */
    class Collection {
        /**
         *
         *
         * @param mixed $transformer
         *
         * @static
         * @see \Spatie\Fractal\FractalServiceProvider::packageBooted()
         */
        public static
        function transformWith(
            $transformer,
        ) {
            return \Illuminate\Support\Collection::transformWith($transformer);
        }

    }

}

namespace Jenssegers\Agent\Facades {
    /**
     *
     *
     */
    class Agent {
        /**
         * Get the browser name.
         *
         * @param string|null $userAgent
         *
         * @return string|bool
         * @static
         */
        public static
        function browser(
            $userAgent = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->browser($userAgent);
        }

        /**
         * Check the HTTP headers for signs of mobile.
         *
         * This is the fastest mobile check possible; it's used
         * inside isMobile() method.
         *
         * @return bool
         * @static
         */
        public static
        function checkHttpHeadersForMobile() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->checkHttpHeadersForMobile();
        }

        /**
         * Get the device name.
         *
         * @param string|null $userAgent
         *
         * @return string|bool
         * @static
         */
        public static
        function device(
            $userAgent = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->device($userAgent);
        }

        /**
         * Get the device type
         *
         * @param null $userAgent
         * @param null $httpHeaders
         *
         * @return string
         * @static
         */
        public static
        function deviceType(
            $userAgent = null,
            $httpHeaders = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->deviceType(
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function getBrowsers() {
            return \Jenssegers\Agent\Agent::getBrowsers();
        }

        /**
         * Retrieves the cloudfront headers.
         *
         * @return array
         * @static
         */
        public static
        function getCfHeaders() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getCfHeaders();
        }

        /**
         *
         *
         * @return \Jaybizzle\CrawlerDetect\CrawlerDetect
         * @static
         */
        public static
        function getCrawlerDetect() {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getCrawlerDetect();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getDesktopDevices() {
            return \Jenssegers\Agent\Agent::getDesktopDevices();
        }

        /**
         * Get all detection rules. These rules include the additional
         * platforms and browsers and utilities.
         *
         * @return array
         * @static
         */
        public static
        function getDetectionRulesExtended() {
            return \Jenssegers\Agent\Agent::getDetectionRulesExtended();
        }

        /**
         * Retrieves a particular header. If it doesn't exist, no exception/error is caused.
         *
         * Simply null is returned.
         *
         * @param string $header The name of the header to retrieve. Can be HTTP compliant such as
         *                       "User-Agent" or "X-Device-User-Agent" or can be php-esque with the
         *                       all-caps, HTTP_ prefixed, underscore separated awesomeness.
         *
         * @return string|null The value of the header.
         * @static
         */
        public static
        function getHttpHeader(
            $header,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getHttpHeader($header);
        }

        /**
         * Retrieves the HTTP headers.
         *
         * @return array
         * @static
         */
        public static
        function getHttpHeaders() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getHttpHeaders();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getMatchesArray() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getMatchesArray();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getMatchingRegex() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getMatchingRegex();
        }

        /**
         * Method gets the mobile detection rules. This method is used for the magic methods $detect->is*().
         *
         * @return array All the rules (but not extended).
         * @static
         * @deprecated since version 2.6.9
         */
        public static
        function getMobileDetectionRules() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getMobileDetectionRules();
        }

        /**
         * Method gets the mobile detection rules + utilities.
         *
         * The reason this is separate is because utilities rules
         * don't necessary imply mobile. This method is used inside
         * the new $detect->is('stuff') method.
         *
         * @return array All the rules + extended.
         * @static
         * @deprecated since version 2.6.9
         */
        public static
        function getMobileDetectionRulesExtended() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getMobileDetectionRulesExtended();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getMobileHeaders() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getMobileHeaders();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getOperatingSystems() {
            return \Jenssegers\Agent\Agent::getOperatingSystems();
        }

        /**
         * Retrieve the list of known phone devices.
         *
         * @return array List of phone devices.
         * @static
         */
        public static
        function getPhoneDevices() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getPhoneDevices();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getPlatforms() {
            return \Jenssegers\Agent\Agent::getPlatforms();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getProperties() {
            return \Jenssegers\Agent\Agent::getProperties();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getRules() {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getRules();
        }

        /**
         * Get the current script version.
         *
         * This is useful for the demo.php file,
         * so people can check on what version they are testing
         * for mobile devices.
         *
         * @return string The version number in semantic version format.
         * @static
         */
        public static
        function getScriptVersion() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getScriptVersion();
        }

        /**
         * Retrieve the list of known tablet devices.
         *
         * @return array List of tablet devices.
         * @static
         */
        public static
        function getTabletDevices() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getTabletDevices();
        }

        /**
         * Get all possible HTTP headers that
         * can contain the User-Agent string.
         *
         * @return array List of HTTP headers.
         * @static
         */
        public static
        function getUaHttpHeaders() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getUaHttpHeaders();
        }

        /**
         * Retrieve the User-Agent.
         *
         * @return string|null The user agent if it's set.
         * @static
         */
        public static
        function getUserAgent() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->getUserAgent();
        }

        /**
         * Alias for getBrowsers() method.
         *
         * @return array List of user agents.
         * @static
         */
        public static
        function getUserAgents() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getUserAgents();
        }

        /**
         * Retrieve the list of known utilities.
         *
         * @return array List of utilities.
         * @static
         */
        public static
        function getUtilities() {            //Method inherited from \Mobile_Detect
            return \Jenssegers\Agent\Agent::getUtilities();
        }

        /**
         * This method checks for a certain property in the
         * userAgent.
         *
         * @param string $key
         * @param string $userAgent   deprecated
         * @param string $httpHeaders deprecated
         *
         * @return bool|int|null
         * @static
         * @todo : The httpHeaders part is not yet used.
         */
        public static
        function is(
            $key,
            $userAgent = null,
            $httpHeaders = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->is(
                $key,
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         * Check if the device is a desktop computer.
         *
         * @param string|null $userAgent deprecated
         * @param array $httpHeaders     deprecated
         *
         * @return bool
         * @static
         */
        public static
        function isDesktop(
            $userAgent = null,
            $httpHeaders = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->isDesktop(
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         * Check if the device is mobile.
         *
         * Returns true if any type of mobile device detected, including special ones
         *
         * @param null $userAgent   deprecated
         * @param null $httpHeaders deprecated
         *
         * @return bool
         * @static
         */
        public static
        function isMobile(
            $userAgent = null,
            $httpHeaders = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->isMobile(
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         * Check if the device is a mobile phone.
         *
         * @param string|null $userAgent deprecated
         * @param array $httpHeaders     deprecated
         *
         * @return bool
         * @static
         */
        public static
        function isPhone(
            $userAgent = null,
            $httpHeaders = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->isPhone(
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         * Check if device is a robot.
         *
         * @param string|null $userAgent
         *
         * @return bool
         * @static
         */
        public static
        function isRobot(
            $userAgent = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->isRobot($userAgent);
        }

        /**
         * Check if the device is a tablet.
         *
         * Return true if any type of tablet device is detected.
         *
         * @param string $userAgent  deprecated
         * @param array $httpHeaders deprecated
         *
         * @return bool
         * @static
         */
        public static
        function isTablet(
            $userAgent = null,
            $httpHeaders = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->isTablet(
                $userAgent,
                $httpHeaders,
            );
        }

        /**
         * Get accept languages.
         *
         * @param string $acceptLanguage
         *
         * @return array
         * @static
         */
        public static
        function languages(
            $acceptLanguage = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->languages($acceptLanguage);
        }

        /**
         * Some detection rules are relative (not standard),
         * because of the diversity of devices, vendors and
         * their conventions in representing the User-Agent or
         * the HTTP headers.
         *
         * This method will be used to check custom regexes against
         * the User-Agent string.
         *
         * @param $regex
         * @param string $userAgent
         *
         * @return bool
         * @todo : search in the HTTP headers too.
         * @static
         */
        public static
        function match(
            $regex,
            $userAgent = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->match(
                $regex,
                $userAgent,
            );
        }

        /**
         * Retrieve the mobile grading, using self::MOBILE_GRADE_* constants.
         *
         * @return string One of the self::MOBILE_GRADE_* constants.
         * @static
         * @deprecated This is no longer being maintained, it was an experiment at the time.
         */
        public static
        function mobileGrade() {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->mobileGrade();
        }

        /**
         * Get the platform name.
         *
         * @param string|null $userAgent
         *
         * @return string|bool
         * @static
         */
        public static
        function platform(
            $userAgent = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->platform($userAgent);
        }

        /**
         * Prepare the version number.
         *
         * @param string $ver The string version, like "2.6.21.2152";
         *
         * @return float
         * @static
         * @todo Remove the error supression from str_replace() call.
         */
        public static
        function prepareVersionNo(
            $ver,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->prepareVersionNo($ver);
        }

        /**
         * Get the robot name.
         *
         * @param string|null $userAgent
         *
         * @return string|bool
         * @static
         */
        public static
        function robot(
            $userAgent = null,
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->robot($userAgent);
        }

        /**
         * Set CloudFront headers
         * http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/header-caching.html#header-caching-web-device
         *
         * @param array $cfHeaders List of HTTP headers
         *
         * @return boolean If there were CloudFront headers to be set
         * @static
         */
        public static
        function setCfHeaders(
            $cfHeaders = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->setCfHeaders($cfHeaders);
        }

        /**
         * Set the detection type. Must be one of self::DETECTION_TYPE_MOBILE or
         * self::DETECTION_TYPE_EXTENDED. Otherwise, nothing is set.
         *
         * @param string $type The type. Must be a self::DETECTION_TYPE_* constant. The default
         *                     parameter is null which will default to self::DETECTION_TYPE_MOBILE.
         *
         * @static
         * @deprecated since version 2.6.9
         */
        public static
        function setDetectionType(
            $type = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->setDetectionType($type);
        }

        /**
         * Set the HTTP Headers. Must be PHP-flavored. This method will reset existing headers.
         *
         * @param array $httpHeaders The headers to set. If null, then using PHP's _SERVER to extract
         *                           the headers. The default null is left for backwards compatibility.
         *
         * @static
         */
        public static
        function setHttpHeaders(
            $httpHeaders = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->setHttpHeaders($httpHeaders);
        }

        /**
         * Set the User-Agent to be used.
         *
         * @param string $userAgent The user agent string to set.
         *
         * @return string|null
         * @static
         */
        public static
        function setUserAgent(
            $userAgent = null,
        ) {            //Method inherited from \Mobile_Detect
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->setUserAgent($userAgent);
        }

        /**
         *
         *
         * @static
         */
        public static
        function version(
            $propertyName,
            $type = 'text',
        ) {
            /** @var \Jenssegers\Agent\Agent $instance */
            return $instance->version(
                $propertyName,
                $type,
            );
        }

    }

}

namespace Laravel\Octane\Facades {
    /**
     *
     *
     * @see \Laravel\Octane\Octane
     */
    class Octane {
        /**
         * Concurrently resolve the given callbacks via background tasks, returning the results.
         *
         * Results will be keyed by their given keys - if a task did not finish, the tasks value will be "false".
         *
         * @param array $tasks
         * @param int $waitMilliseconds
         *
         * @return array
         * @throws \Laravel\Octane\Exceptions\TaskException
         * @throws \Laravel\Octane\Exceptions\TaskTimeoutException
         * @static
         */
        public static
        function concurrently(
            $tasks,
            $waitMilliseconds = 3000,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->concurrently(
                $tasks,
                $waitMilliseconds,
            );
        }

        /**
         * Get the container bindings / services that should be pre-resolved by default.
         *
         * @return array
         * @static
         */
        public static
        function defaultServicesToWarm() {
            return \Laravel\Octane\Octane::defaultServicesToWarm();
        }

        /**
         * Format an exception to a string that should be returned to the client.
         *
         * @param \Throwable $e
         * @param bool $debug
         *
         * @return string
         * @static
         */
        public static
        function formatExceptionForClient(
            $e,
            $debug = false,
        ) {
            return \Laravel\Octane\Octane::formatExceptionForClient(
                $e,
                $debug,
            );
        }

        /**
         * Determine if a route exists for the given method and URI.
         *
         * @param string $method
         * @param string $uri
         *
         * @return bool
         * @static
         */
        public static
        function hasRouteFor(
            $method,
            $uri,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->hasRouteFor(
                $method,
                $uri,
            );
        }

        /**
         * Invoke the route for the given method and URI.
         *
         * @param \Illuminate\Http\Request $request
         * @param string $method
         * @param string $uri
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static
        function invokeRoute(
            $request,
            $method,
            $uri,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->invokeRoute(
                $request,
                $method,
                $uri,
            );
        }

        /**
         * Get the listeners that will prepare the Laravel application for a new operation.
         *
         * @return array
         * @static
         */
        public static
        function prepareApplicationForNextOperation() {
            return \Laravel\Octane\Octane::prepareApplicationForNextOperation();
        }

        /**
         * Get the listeners that will prepare the Laravel application for a new request.
         *
         * @return array
         * @static
         */
        public static
        function prepareApplicationForNextRequest() {
            return \Laravel\Octane\Octane::prepareApplicationForNextRequest();
        }

        /**
         * Register a Octane route.
         *
         * @param string $method
         * @param string $uri
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function route(
            $method,
            $uri,
            $callback,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            $instance->route(
                $method,
                $uri,
                $callback,
            );
        }

        /**
         * Get a Swoole table instance.
         *
         * @param string $table
         *
         * @return \Swoole\Table
         * @static
         */
        public static
        function table(
            $table,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->table($table);
        }

        /**
         * Get the task dispatcher.
         *
         * @return \Laravel\Octane\Contracts\DispatchesTasks
         * @static
         */
        public static
        function tasks() {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->tasks();
        }

        /**
         * Register a callback to be called every N seconds.
         *
         * @param string $key
         * @param callable $callback
         * @param int $seconds
         * @param bool $immediate
         *
         * @return \Laravel\Octane\Swoole\InvokeTickCallable
         * @static
         */
        public static
        function tick(
            $key,
            $callback,
            $seconds = 1,
            $immediate = true,
        ) {
            /** @var \Laravel\Octane\Octane $instance */
            return $instance->tick(
                $key,
                $callback,
                $seconds,
                $immediate,
            );
        }

    }

}

namespace Livewire {
    /**
     *
     *
     * @see \Livewire\LivewireManager
     */
    class Livewire {
        /**
         *
         *
         * @static
         */
        public static
        function actingAs(
            $user,
            $driver = null,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->actingAs(
                $user,
                $driver,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function addPersistentMiddleware(
            $middleware,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->addPersistentMiddleware($middleware);
        }

        /**
         *
         *
         * @static
         */
        public static
        function component(
            $alias,
            $viewClass = null,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->component(
                $alias,
                $viewClass,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function disableBackButtonCache() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->disableBackButtonCache();
        }

        /**
         *
         *
         * @static
         */
        public static
        function dispatch(
            $event,
            ...$params
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->dispatch(
                $event,
                ...
                $params,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function dummyMount(
            $id,
            $tagName,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->dummyMount(
                $id,
                $tagName,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function enableBackButtonCache() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->enableBackButtonCache();
        }

        /**
         *
         *
         * @static
         */
        public static
        function flushState() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->flushState();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getAlias(
            $class,
            $default = null,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getAlias(
                $class,
                $default,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function getClass(
            $alias,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getClass($alias);
        }

        /**
         *
         *
         * @static
         */
        public static
        function getComponentAliases() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getComponentAliases();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getInstance(
            $component,
            $id,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getInstance(
                $component,
                $id,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function getPersistentMiddleware() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getPersistentMiddleware();
        }

        /**
         *
         *
         * @static
         */
        public static
        function getRootElementTagName(
            $dom,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getRootElementTagName($dom);
        }

        /**
         *
         *
         * @static
         */
        public static
        function isDefinitelyLivewireRequest() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isDefinitelyLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static
        function isLivewireRequest() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static
        function isOnVapor() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isOnVapor();
        }

        /**
         *
         *
         * @static
         */
        public static
        function isProbablyLivewireRequest() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isProbablyLivewireRequest();
        }

        /**
         *
         *
         * @static
         */
        public static
        function isRunningServerless() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isRunningServerless();
        }

        /**
         *
         *
         * @static
         */
        public static
        function listen(
            $event,
            $callback,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->listen(
                $event,
                $callback,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function mount(
            $name,
            $params = [],
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->mount(
                $name,
                $params,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function originalMethod() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalMethod();
        }

        /**
         *
         *
         * @static
         */
        public static
        function originalPath() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalPath();
        }

        /**
         *
         *
         * @static
         */
        public static
        function originalUrl() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalUrl();
        }

        /**
         *
         *
         * @static
         */
        public static
        function scripts(
            $options = [],
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->scripts($options);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setBackButtonCache() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setBackButtonCache();
        }

        /**
         *
         *
         * @static
         */
        public static
        function setPersistentMiddleware(
            $middleware,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setPersistentMiddleware($middleware);
        }

        /**
         *
         *
         * @static
         */
        public static
        function shouldDisableBackButtonCache() {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->shouldDisableBackButtonCache();
        }

        /**
         *
         *
         * @static
         */
        public static
        function styles(
            $options = [],
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->styles($options);
        }

        /**
         *
         *
         * @static
         */
        public static
        function test(
            $name,
            $params = [],
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->test(
                $name,
                $params,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function visit(
            $browser,
            $class,
            $queryString = '',
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->visit(
                $browser,
                $class,
                $queryString,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function withQueryParams(
            $queryParams,
        ) {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withQueryParams($queryParams);
        }

    }

}

namespace Spatie\Fractal\Facades {
    /**
     *
     *
     * @see \Spatie\Fractal\Fractal
     */
    class Fractal {
        /**
         * Set the meta data.
         *
         * @param $array,...
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function addMeta() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->addMeta();
        }

        /**
         * Set the collection data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function collection(
            $data,
            $transformer = null,
            $resourceName = null,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->collection(
                $data,
                $transformer,
                $resourceName,
            );
        }

        /**
         *
         *
         * @param null|mixed $data
         * @param null|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|\League\Fractal\Serializer\SerializerAbstract $serializer
         *
         * @return \Spatie\Fractalistic\Fractal
         * @static
         */
        public static
        function create(
            $data = null,
            $transformer = null,
            $serializer = null,
        ) {
            return \Spatie\Fractal\Fractal::create(
                $data,
                $transformer,
                $serializer,
            );
        }

        /**
         * Create fractal data.
         *
         * @return \League\Fractal\Scope
         * @throws \Spatie\Fractalistic\Exceptions\InvalidTransformation
         * @throws \Spatie\Fractalistic\Exceptions\NoTransformerSpecified
         * @static
         */
        public static
        function createData() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->createData();
        }

        /**
         * Set the data that must be transformed.
         *
         * @param string $dataType
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function data(
            $dataType,
            $data,
            $transformer = null,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->data(
                $dataType,
                $data,
                $transformer,
            );
        }

        /**
         *
         *
         * @param array $errors
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function error(
            $errors,
        ) {
            return \Spatie\Fractal\Fractal::error($errors);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Spatie\Fractal\Fractal::flushMacros();
        }

        /**
         * Get the resource.
         *
         * @return \League\Fractal\Resource\ResourceInterface
         * @throws \Spatie\Fractalistic\Exceptions\InvalidTransformation
         * @static
         */
        public static
        function getResource() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getResource();
        }

        /**
         * Return the name of the resource.
         *
         * @return string
         * @static
         */
        public static
        function getResourceName() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getResourceName();
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            return \Spatie\Fractal\Fractal::hasMacro($name);
        }

        /**
         * Set the item data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function item(
            $data,
            $transformer = null,
            $resourceName = null,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->item(
                $data,
                $transformer,
                $resourceName,
            );
        }

        /**
         * Convert the object into something JSON serializable.
         *
         * @return array|null
         * @static
         */
        public static
        function jsonSerialize() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->jsonSerialize();
        }

        /**
         * Upper limit to how many levels of included data are allowed.
         *
         * @param int $recursionLimit
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function limitRecursion(
            $recursionLimit,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->limitRecursion($recursionLimit);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Spatie\Fractal\Fractal::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Spatie\Fractal\Fractal::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Set a Fractal paginator for the data.
         *
         * @param \League\Fractal\Pagination\PaginatorInterface $paginator
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function paginateWith(
            $paginator,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->paginateWith($paginator);
        }

        /**
         * Specify the excludes.
         *
         * @param array|string $excludes Array or string of resources to exclude.
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function parseExcludes(
            $excludes,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseExcludes($excludes);
        }

        /**
         * Specify the fieldsets to include in the response.
         *
         * @param array $fieldsets        array with key = resourceName and value = fields to include
         *                                (array or comma separated string with field names)
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function parseFieldsets(
            $fieldsets,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseFieldsets($fieldsets);
        }

        /**
         * Specify the includes.
         *
         * @param array|string $includes Array or string of resources to include.
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function parseIncludes(
            $includes,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseIncludes($includes);
        }

        /**
         * Set the primitive data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function primitive(
            $data,
            $transformer = null,
            $resourceName = null,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->primitive(
                $data,
                $transformer,
                $resourceName,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function respond(
            $statusCode = 200,
            $headers = [],
            $options = 0,
        ) {
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->respond(
                $statusCode,
                $headers,
                $options,
            );
        }

        /**
         * Set the serializer to be used.
         *
         * @param string|\League\Fractal\Serializer\SerializerAbstract $serializer
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function serializeWith(
            $serializer,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->serializeWith($serializer);
        }

        /**
         *
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function success() {
            return \Spatie\Fractal\Fractal::success();
        }

        /**
         * Perform the transformation to array.
         *
         * @return array|null
         * @static
         */
        public static
        function toArray() {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->toArray();
        }

        /**
         * Perform the transformation to json.
         *
         * @param int $options
         *
         * @return string
         * @static
         */
        public static
        function toJson(
            $options = 0,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->toJson($options);
        }

        /**
         * Set the class or function that will perform the transform.
         *
         * @param string|callable|\League\Fractal\TransformerAbstract $transformer
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function transformWith(
            $transformer,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->transformWith($transformer);
        }

        /**
         * Set a Fractal cursor for the data.
         *
         * @param \League\Fractal\Pagination\CursorInterface $cursor
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function withCursor(
            $cursor,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->withCursor($cursor);
        }

        /**
         * Set the resource name, to replace 'data' as the root of the collection or item.
         *
         * @param string $resourceName
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static
        function withResourceName(
            $resourceName,
        ) {            //Method inherited from \Spatie\Fractalistic\Fractal
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->withResourceName($resourceName);
        }

    }

}

namespace Spatie\LaravelIgnition\Facades {
    /**
     *
     *
     * @see \Spatie\FlareClient\Flare
     */
    class Flare {
        /**
         *
         *
         * @static
         */
        public static
        function anonymizeIp() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->anonymizeIp();
        }

        /**
         *
         *
         * @static
         */
        public static
        function apiTokenSet() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->apiTokenSet();
        }

        /**
         *
         *
         * @static
         */
        public static
        function applicationPath(
            $applicationPath,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->applicationPath($applicationPath);
        }

        /**
         *
         *
         * @param \Spatie\FlareClient\array<int,  string> $fieldNames
         *
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static
        function censorRequestBodyFields(
            $fieldNames,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->censorRequestBodyFields($fieldNames);
        }

        /**
         *
         *
         * @static
         */
        public static
        function context(
            $key,
            $value,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->context(
                $key,
                $value,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function createReport(
            $throwable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->createReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static
        function createReportFromMessage(
            $message,
            $logLevel,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->createReportFromMessage(
                $message,
                $logLevel,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function determineVersionUsing(
            $determineVersionCallable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->determineVersionUsing($determineVersionCallable);
        }

        /**
         *
         *
         * @static
         */
        public static
        function filterExceptionsUsing(
            $filterExceptionsCallable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }

        /**
         *
         *
         * @static
         */
        public static
        function filterReportsUsing(
            $filterReportsCallable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->filterReportsUsing($filterReportsCallable);
        }

        /**
         *
         *
         * @param string $groupName
         * @param mixed $default
         *
         * @return array<int, mixed>
         * @static
         */
        public static
        function getGroup(
            $groupName = 'context',
            $default = [],
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getGroup(
                $groupName,
                $default,
            );
        }

        /**
         *
         *
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */
        public static
        function getMiddleware() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getMiddleware();
        }

        /**
         *
         *
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */
        public static
        function getMiddlewares() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getMiddlewares();
        }

        /**
         *
         *
         * @param string $name
         * @param string $messageLevel
         * @param \Spatie\FlareClient\array<int,  mixed> $metaData
         *
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static
        function glow(
            $name,
            $messageLevel = 'info',
            $metaData = [],
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->glow(
                $name,
                $messageLevel,
                $metaData,
            );
        }

        /**
         *
         *
         * @param string $groupName
         * @param \Spatie\FlareClient\array<string,  mixed> $properties
         *
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static
        function group(
            $groupName,
            $properties,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->group(
                $groupName,
                $properties,
            );
        }

        /**
         *
         *
         * @return mixed
         * @static
         */
        public static
        function handleError(
            $code,
            $message,
            $file = '',
            $line = 0,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->handleError(
                $code,
                $message,
                $file,
                $line,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function handleException(
            $throwable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->handleException($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static
        function make(
            $apiKey = null,
            $contextDetector = null,
        ) {
            return \Spatie\FlareClient\Flare::make(
                $apiKey,
                $contextDetector,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function messageLevel(
            $messageLevel,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->messageLevel($messageLevel);
        }

        /**
         *
         *
         * @static
         */
        public static
        function registerErrorHandler() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerErrorHandler();
        }

        /**
         *
         *
         * @static
         */
        public static
        function registerExceptionHandler() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerExceptionHandler();
        }

        /**
         *
         *
         * @static
         */
        public static
        function registerFlareHandlers() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerFlareHandlers();
        }

        /**
         *
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware> $middleware
         *
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static
        function registerMiddleware(
            $middleware,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerMiddleware($middleware);
        }

        /**
         *
         *
         * @static
         */
        public static
        function report(
            $throwable,
            $callback = null,
            $report = null,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->report(
                $throwable,
                $callback,
                $report,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function reportErrorLevels(
            $reportErrorLevels,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reportErrorLevels($reportErrorLevels);
        }

        /**
         *
         *
         * @static
         */
        public static
        function reportMessage(
            $message,
            $logLevel,
            $callback = null,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reportMessage(
                $message,
                $logLevel,
                $callback,
            );
        }

        /**
         *
         *
         * @static
         */
        public static
        function reset() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reset();
        }

        /**
         *
         *
         * @static
         */
        public static
        function sendReportsImmediately() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->sendReportsImmediately();
        }

        /**
         *
         *
         * @static
         */
        public static
        function sendTestReport(
            $throwable,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->sendTestReport($throwable);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setApiToken(
            $apiToken,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setApiToken($apiToken);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setBaseUrl(
            $baseUrl,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setBaseUrl($baseUrl);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setContainer(
            $container,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setContainer($container);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setContextProviderDetector(
            $contextDetector,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setContextProviderDetector($contextDetector);
        }

        /**
         *
         *
         * @static
         */
        public static
        function setStage(
            $stage,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setStage($stage);
        }

        /**
         *
         *
         * @static
         */
        public static
        function stage(
            $stage,
        ) {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->stage($stage);
        }

        /**
         *
         *
         * @static
         */
        public static
        function version() {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->version();
        }

    }

}

namespace Illuminate\Http {
    /**
     *
     *
     */
    class Request {
        /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static
        function hasValidRelativeSignature() {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

        /**
         *
         *
         * @param mixed $absolute
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static
        function hasValidSignature(
            $absolute = true,
        ) {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         *
         *
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         */
        public static
        function hasValidSignatureWhileIgnoring(
            $ignoreQuery = [],
            $absolute = true,
        ) {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring(
                $ignoreQuery,
                $absolute,
            );
        }

        /**
         *
         *
         * @param array $rules
         * @param mixed $params
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static
        function validate(
            $rules,
            ...$params
        ) {
            return \Illuminate\Http\Request::validate(
                $rules,
                ...
                $params,
            );
        }

        /**
         *
         *
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         *
         * @static
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         */
        public static
        function validateWithBag(
            $errorBag,
            $rules,
            ...$params
        ) {
            return \Illuminate\Http\Request::validateWithBag(
                $errorBag,
                $rules,
                ...
                $params,
            );
        }

    }

    /**
     *
     *
     */
    class RedirectResponse {
        /**
         *
         *
         * @param mixed $message
         *
         * @static
         * @see \Laravel\Jetstream\JetstreamServiceProvider::boot()
         */
        public static
        function banner(
            $message,
        ) {
            return \Illuminate\Http\RedirectResponse::banner($message);
        }

        /**
         *
         *
         * @param mixed $message
         *
         * @static
         * @see \Laravel\Jetstream\JetstreamServiceProvider::boot()
         */
        public static
        function dangerBanner(
            $message,
        ) {
            return \Illuminate\Http\RedirectResponse::dangerBanner($message);
        }

    }

}

namespace Illuminate\Testing {
    /**
     *
     *
     * @mixin \Illuminate\Http\Response
     */
    class TestResponse {
        /**
         *
         *
         * @param mixed $component
         *
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static
        function assertDontSeeLivewire(
            $component,
        ) {
            return \Illuminate\Testing\TestResponse::assertDontSeeLivewire($component);
        }

        /**
         *
         *
         * @param mixed $component
         *
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static
        function assertSeeLivewire(
            $component,
        ) {
            return \Illuminate\Testing\TestResponse::assertSeeLivewire($component);
        }

    }

    /**
     *
     *
     */
    class TestView {
        /**
         *
         *
         * @param mixed $component
         *
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static
        function assertDontSeeLivewire(
            $component,
        ) {
            return \Illuminate\Testing\TestView::assertDontSeeLivewire($component);
        }

        /**
         *
         *
         * @param mixed $component
         *
         * @static
         * @see \Livewire\LivewireServiceProvider::registerTestMacros()
         */
        public static
        function assertSeeLivewire(
            $component,
        ) {
            return \Illuminate\Testing\TestView::assertSeeLivewire($component);
        }

    }

}

namespace Illuminate\Database\Schema {
    /**
     *
     *
     */
    class Blueprint {
        /**
         *
         *
         * @param string $columnName
         *
         * @static
         * @see \Spatie\SchemalessAttributes\SchemalessAttributesServiceProvider::registeringPackage()
         */
        public static
        function schemalessAttributes(
            $columnName = 'schemaless_attributes',
        ) {
            return \Illuminate\Database\Schema\Blueprint::schemalessAttributes($columnName);
        }

    }

}

namespace Illuminate\Routing {
    /**
     *
     *
     */
    class Route {
        /**
         *
         *
         * @param mixed $permissions
         *
         * @static
         * @see \Spatie\Permission\PermissionServiceProvider::registerMacroHelpers()
         */
        public static
        function permission(
            $permissions = [],
        ) {
            return \Illuminate\Routing\Route::permission($permissions);
        }

        /**
         *
         *
         * @param mixed $roles
         *
         * @static
         * @see \Spatie\Permission\PermissionServiceProvider::registerMacroHelpers()
         */
        public static
        function role(
            $roles = [],
        ) {
            return \Illuminate\Routing\Route::role($roles);
        }

    }

}

namespace Illuminate\View {
    /**
     *
     *
     */
    class ComponentAttributeBag {
        /**
         *
         *
         * @param mixed $name
         *
         * @static
         * @see \Livewire\LivewireServiceProvider::registerViewMacros()
         */
        public static
        function wire(
            $name,
        ) {
            return \Illuminate\View\ComponentAttributeBag::wire($name);
        }

    }

    /**
     *
     *
     */
    class View {
        /**
         *
         *
         * @param mixed $view
         * @param mixed $params
         *
         * @static
         * @see \Livewire\Macros\ViewMacros::extends()
         */
        public static
        function extends(
            $view,
            $params = [],
        ) {
            return \Illuminate\View\View::extends(
                $view,
                $params,
            );
        }

        /**
         *
         *
         * @param mixed $view
         * @param mixed $params
         *
         * @static
         * @see \Livewire\Macros\ViewMacros::layout()
         */
        public static
        function layout(
            $view,
            $params = [],
        ) {
            return \Illuminate\View\View::layout(
                $view,
                $params,
            );
        }

        /**
         *
         *
         * @param mixed $data
         *
         * @static
         * @see \Livewire\Macros\ViewMacros::layoutData()
         */
        public static
        function layoutData(
            $data = [],
        ) {
            return \Illuminate\View\View::layoutData($data);
        }

        /**
         *
         *
         * @param mixed $section
         *
         * @static
         * @see \Livewire\Macros\ViewMacros::section()
         */
        public static
        function section(
            $section,
        ) {
            return \Illuminate\View\View::section($section);
        }

        /**
         *
         *
         * @param mixed $slot
         *
         * @static
         * @see \Livewire\Macros\ViewMacros::slot()
         */
        public static
        function slot(
            $slot,
        ) {
            return \Illuminate\View\View::slot($slot);
        }

    }

}

namespace Spatie\Fractal {
    /**
     *
     *
     */
    class Fractal {
        /**
         *
         *
         * @param array $errors
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function error(
            $errors,
        ) {
            return \Spatie\Fractal\Fractal::error($errors);
        }

        /**
         *
         *
         * @return \Spatie\Fractal\Fractal
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function success() {
            return \Spatie\Fractal\Fractal::success();
        }

    }

}

namespace Illuminate\Foundation {
    /**
     *
     *
     */
    class Vite {
        /**
         *
         *
         * @param mixed $asset
         *
         * @static
         * @see \App\Providers\AppServiceProvider::boot()
         */
        public static
        function image(
            $asset,
        ) {
            return \Illuminate\Foundation\Vite::image($asset);
        }

    }

}


namespace {
    class App extends \Illuminate\Support\Facades\App { }

    class Arr extends \Illuminate\Support\Arr { }

    class Artisan extends \Illuminate\Support\Facades\Artisan { }

    class Auth extends \Illuminate\Support\Facades\Auth { }

    class Blade extends \Illuminate\Support\Facades\Blade { }

    class Broadcast extends \Illuminate\Support\Facades\Broadcast { }

    class Bus extends \Illuminate\Support\Facades\Bus { }

    class Cache extends \Illuminate\Support\Facades\Cache { }

    class Config extends \Illuminate\Support\Facades\Config { }

    class Cookie extends \Illuminate\Support\Facades\Cookie { }

    class Crypt extends \Illuminate\Support\Facades\Crypt { }

    class Date extends \Illuminate\Support\Facades\Date { }

    class DB extends \Illuminate\Support\Facades\DB { }

    class Eloquent extends \Illuminate\Database\Eloquent\Model {
        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function addBinding(
            $value,
            $type = 'where',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addBinding(
                $value,
                $type,
            );
        }

        /**
         * Add another query builder as a nested having to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function addNestedHavingQuery(
            $query,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addNestedHavingQuery(
                $query,
                $boolean,
            );
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function addNestedWhereQuery(
            $query,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addNestedWhereQuery(
                $query,
                $boolean,
            );
        }

        /**
         * Add a new select column to the query.
         *
         * @param array|mixed $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function addSelect(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addSelect($column);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function addWhereExistsQuery(
            $query,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->addWhereExistsQuery(
                $query,
                $boolean,
                $not,
            );
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         *
         * @return mixed
         * @static
         */
        public static
        function aggregate(
            $function,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->aggregate(
                $function,
                $columns,
            );
        }

        /**
         * Invoke the "before query" modification callbacks.
         *
         * @return void
         * @static
         */
        public static
        function applyBeforeQueryCallbacks() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            $instance->applyBeforeQueryCallbacks();
        }

        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return static
         * @static
         */
        public static
        function applyScopes() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->applyScopes();
        }

        /**
         * Alias for the "avg" method.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static
        function average(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->average($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static
        function avg(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->avg($column);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|object|static|null
         * @throws \Illuminate\Database\RecordsNotFoundException
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static
        function baseSole(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->baseSole($columns);
        }

        /**
         * Register a closure to be invoked before the query is executed.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function beforeQuery(
            $callback,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->beforeQuery($callback);
        }

        /**
         * Cast the given binding value.
         *
         * @param mixed $value
         *
         * @return mixed
         * @static
         */
        public static
        function castBinding(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->castBinding($value);
        }

        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         *
         * @return bool
         * @static
         */
        public static
        function chunk(
            $count,
            $callback,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunk(
                $count,
                $callback,
            );
        }

        /**
         * Chunk the results of a query by comparing IDs.
         *
         * @param int $count
         * @param callable $callback
         * @param string|null $column
         * @param string|null $alias
         *
         * @return bool
         * @static
         */
        public static
        function chunkById(
            $count,
            $callback,
            $column = null,
            $alias = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkById(
                $count,
                $callback,
                $column,
                $alias,
            );
        }

        /**
         * Run a map over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function chunkMap(
            $callback,
            $count = 1000,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkMap(
                $callback,
                $count,
            );
        }

        /**
         * Remove all of the expressions from a list of bindings.
         *
         * @param array $bindings
         *
         * @return array
         * @static
         */
        public static
        function cleanBindings(
            $bindings,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cleanBindings($bindings);
        }

        /**
         * Clone the Eloquent query builder.
         *
         * @return static
         * @static
         */
        public static
        function clone() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->clone();
        }

        /**
         * Clone the query without the given properties.
         *
         * @param array $properties
         *
         * @return static
         * @static
         */
        public static
        function cloneWithout(
            $properties,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cloneWithout($properties);
        }

        /**
         * Clone the query without the given bindings.
         *
         * @param array $except
         *
         * @return static
         * @static
         */
        public static
        function cloneWithoutBindings(
            $except,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->cloneWithoutBindings($except);
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         *
         * @return int
         * @static
         */
        public static
        function count(
            $columns = '*',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->count($columns);
        }

        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static
        function create(
            $attributes = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->create($attributes);
        }

        /**
         * Add a "cross join" clause to the query.
         *
         * @param string $table
         * @param \Closure|string|null $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function crossJoin(
            $table,
            $first = null,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->crossJoin(
                $table,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add a subquery cross join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function crossJoinSub(
            $query,
            $as,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->crossJoinSub(
                $query,
                $as,
            );
        }

        /**
         * Get a lazy collection for the given query.
         *
         * @return \Illuminate\Support\LazyCollection
         * @static
         */
        public static
        function cursor() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursor();
        }

        /**
         * Paginate the given query into a cursor paginator.
         *
         * @param int|null $perPage
         * @param array|string $columns
         * @param string $cursorName
         * @param \Illuminate\Pagination\Cursor|string|null $cursor
         *
         * @return \Illuminate\Contracts\Pagination\CursorPaginator
         * @static
         */
        public static
        function cursorPaginate(
            $perPage = null,
            $columns = [],
            $cursorName = 'cursor',
            $cursor = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursorPaginate(
                $perPage,
                $columns,
                $cursorName,
                $cursor,
            );
        }

        /**
         * Die and dump the current SQL and bindings.
         *
         * @return \Illuminate\Database\Query\never
         * @static
         */
        public static
        function dd() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dd();
        }

        /**
         * Decrement the given column's values by the given amounts.
         *
         * @param \Illuminate\Database\Query\array<string,  float|int|numeric-string> $columns
         * @param \Illuminate\Database\Query\array<string,  mixed> $extra
         *
         * @return int
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function decrementEach(
            $columns,
            $extra = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->decrementEach(
                $columns,
                $extra,
            );
        }

        /**
         * Force the query to only return distinct results.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function distinct() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->distinct();
        }

        /**
         * Determine if no rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static
        function doesntExist() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->doesntExist();
        }

        /**
         * Execute the given callback if rows exist for the current query.
         *
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static
        function doesntExistOr(
            $callback,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->doesntExistOr($callback);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string $relation
         * @param string $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function doesntHave(
            $relation,
            $boolean = 'and',
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHave(
                $relation,
                $boolean,
                $callback,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function doesntHaveMorph(
            $relation,
            $types,
            $boolean = 'and',
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHaveMorph(
                $relation,
                $types,
                $boolean,
                $callback,
            );
        }

        /**
         * Dump the current SQL and bindings.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function dump() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dump();
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function dynamicWhere(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->dynamicWhere(
                $method,
                $parameters,
            );
        }

        /**
         * Execute a callback over each item while chunking.
         *
         * @param callable $callback
         * @param int $count
         *
         * @return bool
         * @throws \RuntimeException
         * @static
         */
        public static
        function each(
            $callback,
            $count = 1000,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->each(
                $callback,
                $count,
            );
        }

        /**
         * Execute a callback over each item while chunking by ID.
         *
         * @param callable $callback
         * @param int $count
         * @param string|null $column
         * @param string|null $alias
         *
         * @return bool
         * @static
         */
        public static
        function eachById(
            $callback,
            $count = 1000,
            $column = null,
            $alias = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eachById(
                $callback,
                $count,
                $column,
                $alias,
            );
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         *
         * @return array
         * @static
         */
        public static
        function eagerLoadRelations(
            $models,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eagerLoadRelations($models);
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static
        function exists() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->exists();
        }

        /**
         * Execute the given callback if no rows exist for the current query.
         *
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static
        function existsOr(
            $callback,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->existsOr($callback);
        }

        /**
         * Explains the query.
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function explain() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->explain();
        }

        /**
         * Find a model by its primary key.
         *
         * @param mixed $id
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
         * @static
         */
        public static
        function find(
            $id,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->find(
                $id,
                $columns,
            );
        }

        /**
         * Find multiple models by their primary keys.
         *
         * @param \Illuminate\Contracts\Support\Arrayable|array $ids
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static
        function findMany(
            $ids,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findMany(
                $ids,
                $columns,
            );
        }

        /**
         * Find a model by its primary key or call a callback.
         *
         * @param mixed $id
         * @param \Closure|array|string $columns
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|mixed
         * @static
         */
        public static
        function findOr(
            $id,
            $columns = [],
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOr(
                $id,
                $columns,
                $callback,
            );
        }

        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|static[]
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static
        function findOrFail(
            $id,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrFail(
                $id,
                $columns,
            );
        }

        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param mixed $id
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function findOrNew(
            $id,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrNew(
                $id,
                $columns,
            );
        }

        /**
         * Execute the query and get the first result.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|object|static|null
         * @static
         */
        public static
        function first(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->first($columns);
        }

        /**
         * Execute the query and get the first result or call a callback.
         *
         * @param \Closure|array|string $columns
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Model|static|mixed
         * @static
         */
        public static
        function firstOr(
            $columns = [],
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOr(
                $columns,
                $callback,
            );
        }

        /**
         * Get the first record matching the attributes or create it.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function firstOrCreate(
            $attributes = [],
            $values = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrCreate(
                $attributes,
                $values,
            );
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static
        function firstOrFail(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrFail($columns);
        }

        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function firstOrNew(
            $attributes = [],
            $values = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrNew(
                $attributes,
                $values,
            );
        }

        /**
         * Add a basic where clause to the query, and return the first result.
         *
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Eloquent\Model|static|null
         * @static
         */
        public static
        function firstWhere(
            $column,
            $operator = null,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstWhere(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static
        function flushMacros() {
            \Illuminate\Database\Query\Builder::flushMacros();
        }

        /**
         * Create a new query instance for nested where condition.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function forNestedWhere() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forNestedWhere();
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function forPage(
            $page,
            $perPage = 15,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPage(
                $page,
                $perPage,
            );
        }

        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function forPageAfterId(
            $perPage = 15,
            $lastId = 0,
            $column = 'id',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPageAfterId(
                $perPage,
                $lastId,
                $column,
            );
        }

        /**
         * Constrain the query to the previous "page" of results before a given ID.
         *
         * @param int $perPage
         * @param int|null $lastId
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function forPageBeforeId(
            $perPage = 15,
            $lastId = 0,
            $column = 'id',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->forPageBeforeId(
                $perPage,
                $lastId,
                $column,
            );
        }

        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static
        function forceCreate(
            $attributes,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->forceCreate($attributes);
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $table
         * @param string|null $as
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function from(
            $table,
            $as = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->from(
                $table,
                $as,
            );
        }

        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array $bindings
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static
        function fromQuery(
            $query,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->fromQuery(
                $query,
                $bindings,
            );
        }

        /**
         * Add a raw from clause to the query.
         *
         * @param string $expression
         * @param mixed $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function fromRaw(
            $expression,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->fromRaw(
                $expression,
                $bindings,
            );
        }

        /**
         * Makes "from" fetch from a subquery.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function fromSub(
            $query,
            $as,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->fromSub(
                $query,
                $as,
            );
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static
        function get(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->get($columns);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static
        function getBindings() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getBindings();
        }

        /**
         * Get all of the query builder's columns in a text-only array with all expressions evaluated.
         *
         * @return array
         * @static
         */
        public static
        function getColumns() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getColumns();
        }

        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         *
         * @return int
         * @static
         */
        public static
        function getCountForPagination(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getCountForPagination($columns);
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static
        function getEagerLoads() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getEagerLoads();
        }

        /**
         * Get the given global macro by name.
         *
         * @param string $name
         *
         * @return \Closure
         * @static
         */
        public static
        function getGlobalMacro(
            $name,
        ) {
            return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
        }

        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static
        function getGrammar() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getGrammar();
        }

        /**
         * Get the given macro by name.
         *
         * @param string $name
         *
         * @return \Closure
         * @static
         */
        public static
        function getMacro(
            $name,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getMacro($name);
        }

        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function getModel() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModel();
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model[]|static[]
         * @static
         */
        public static
        function getModels(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModels($columns);
        }

        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static
        function getProcessor() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getProcessor();
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function getQuery() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getQuery();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static
        function getRawBindings() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->getRawBindings();
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @param array|string|\Illuminate\Contracts\Database\Query\Expression $groups
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function groupBy(
            ...$groups
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->groupBy(
                ...
                $groups,
            );
        }

        /**
         * Add a raw groupBy clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function groupByRaw(
            $sql,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->groupByRaw(
                $sql,
                $bindings,
            );
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\Relation|string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \RuntimeException
         * @static
         */
        public static
        function has(
            $relation,
            $operator = '>=',
            $count = 1,
            $boolean = 'and',
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->has(
                $relation,
                $operator,
                $count,
                $boolean,
                $callback,
            );
        }

        /**
         * Checks if a global macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasGlobalMacro(
            $name,
        ) {
            return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
        }

        /**
         * Checks if a macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static
        function hasMacro(
            $name,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMacro($name);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function hasMorph(
            $relation,
            $types,
            $operator = '>=',
            $count = 1,
            $boolean = 'and',
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMorph(
                $relation,
                $types,
                $operator,
                $count,
                $boolean,
                $callback,
            );
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param \Closure|string $column
         * @param string|int|float|null $operator
         * @param string|int|float|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function having(
            $column,
            $operator = null,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->having(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a "having between " clause to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function havingBetween(
            $column,
            $values,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingBetween(
                $column,
                $values,
                $boolean,
                $not,
            );
        }

        /**
         * Add a nested having statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function havingNested(
            $callback,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNested(
                $callback,
                $boolean,
            );
        }

        /**
         * Add a "having not null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function havingNotNull(
            $columns,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNotNull(
                $columns,
                $boolean,
            );
        }

        /**
         * Add a "having null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function havingNull(
            $columns,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingNull(
                $columns,
                $boolean,
                $not,
            );
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function havingRaw(
            $sql,
            $bindings = [],
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->havingRaw(
                $sql,
                $bindings,
                $boolean,
            );
        }

        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static
        function hydrate(
            $items,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hydrate($items);
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         *
         * @return string
         * @static
         */
        public static
        function implode(
            $column,
            $glue = '',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->implode(
                $column,
                $glue,
            );
        }

        /**
         * Put the query's results in random order.
         *
         * @param string|int $seed
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function inRandomOrder(
            $seed = '',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->inRandomOrder($seed);
        }

        /**
         * Increment the given column's values by the given amounts.
         *
         * @param \Illuminate\Database\Query\array<string,  float|int|numeric-string> $columns
         * @param \Illuminate\Database\Query\array<string,  mixed> $extra
         *
         * @return int
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function incrementEach(
            $columns,
            $extra = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->incrementEach(
                $columns,
                $extra,
            );
        }

        /**
         * Insert new records into the database.
         *
         * @param array $values
         *
         * @return bool
         * @static
         */
        public static
        function insert(
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insert($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string|null $sequence
         *
         * @return int
         * @static
         */
        public static
        function insertGetId(
            $values,
            $sequence = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertGetId(
                $values,
                $sequence,
            );
        }

        /**
         * Insert new records into the database while ignoring errors.
         *
         * @param array $values
         *
         * @return int
         * @static
         */
        public static
        function insertOrIgnore(
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertOrIgnore($values);
        }

        /**
         * Insert new records into the table using a subquery.
         *
         * @param array $columns
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         *
         * @return int
         * @static
         */
        public static
        function insertUsing(
            $columns,
            $query,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->insertUsing(
                $columns,
                $query,
            );
        }

        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function join(
            $table,
            $first,
            $operator = null,
            $second = null,
            $type = 'inner',
            $where = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->join(
                $table,
                $first,
                $operator,
                $second,
                $type,
                $where,
            );
        }

        /**
         * Add a subquery join clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         * @param string $type
         * @param bool $where
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function joinSub(
            $query,
            $as,
            $first,
            $operator = null,
            $second = null,
            $type = 'inner',
            $where = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->joinSub(
                $query,
                $as,
                $first,
                $operator,
                $second,
                $type,
                $where,
            );
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         * @param string $type
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function joinWhere(
            $table,
            $first,
            $operator,
            $second,
            $type = 'inner',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->joinWhere(
                $table,
                $first,
                $operator,
                $second,
                $type,
            );
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function latest(
            $column = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->latest($column);
        }

        /**
         * Query lazily, by chunks of the given size.
         *
         * @param int $chunkSize
         *
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function lazy(
            $chunkSize = 1000,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazy($chunkSize);
        }

        /**
         * Query lazily, by chunking the results of a query by comparing IDs.
         *
         * @param int $chunkSize
         * @param string|null $column
         * @param string|null $alias
         *
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function lazyById(
            $chunkSize = 1000,
            $column = null,
            $alias = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyById(
                $chunkSize,
                $column,
                $alias,
            );
        }

        /**
         * Query lazily, by chunking the results of a query by comparing IDs in descending order.
         *
         * @param int $chunkSize
         * @param string|null $column
         * @param string|null $alias
         *
         * @return \Illuminate\Support\LazyCollection
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function lazyByIdDesc(
            $chunkSize = 1000,
            $column = null,
            $alias = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyByIdDesc(
                $chunkSize,
                $column,
                $alias,
            );
        }

        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function leftJoin(
            $table,
            $first,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoin(
                $table,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add a subquery left join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function leftJoinSub(
            $query,
            $as,
            $first,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoinSub(
                $query,
                $as,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function leftJoinWhere(
            $table,
            $first,
            $operator,
            $second,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->leftJoinWhere(
                $table,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function limit(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->limit($value);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param string|bool $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function lock(
            $value = true,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function lockForUpdate() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->lockForUpdate();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static
        function macro(
            $name,
            $macro,
        ) {
            \Illuminate\Database\Query\Builder::macro(
                $name,
                $macro,
            );
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         *
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static
        function macroCall(
            $method,
            $parameters,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->macroCall(
                $method,
                $parameters,
            );
        }

        /**
         * Create and return an un-saved model instance.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function make(
            $attributes = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->make($attributes);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static
        function max(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->max($column);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function mergeBindings(
            $query,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->mergeBindings($query);
        }

        /**
         * Merge the where constraints from another query to the current query.
         *
         * @param \Illuminate\Database\Eloquent\Builder $from
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function mergeConstraintsFrom(
            $from,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->mergeConstraintsFrom($from);
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function mergeWheres(
            $wheres,
            $bindings,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->mergeWheres(
                $wheres,
                $bindings,
            );
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static
        function min(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->min($column);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         *
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static
        function mixin(
            $mixin,
            $replace = true,
        ) {
            \Illuminate\Database\Query\Builder::mixin(
                $mixin,
                $replace,
            );
        }

        /**
         * Create a new instance of the model being queried.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function newModelInstance(
            $attributes = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->newModelInstance($attributes);
        }

        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         *
         * @return float|int
         * @static
         */
        public static
        function numericAggregate(
            $function,
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->numericAggregate(
                $function,
                $columns,
            );
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function offset(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->offset($value);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function oldest(
            $column = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->oldest($column);
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static
        function onDelete(
            $callback,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            $instance->onDelete($callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orDoesntHave(
            $relation,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHave($relation);
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orDoesntHaveMorph(
            $relation,
            $types,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHaveMorph(
                $relation,
                $types,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orHas(
            $relation,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHas(
                $relation,
                $operator,
                $count,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orHasMorph(
            $relation,
            $types,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHasMorph(
                $relation,
                $types,
                $operator,
                $count,
            );
        }

        /**
         * Add an "or having" clause to the query.
         *
         * @param \Closure|string $column
         * @param string|int|float|null $operator
         * @param string|int|float|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orHaving(
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHaving(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "or having not null" clause to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orHavingNotNull(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingNotNull($column);
        }

        /**
         * Add an "or having null" clause to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orHavingNull(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingNull($column);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orHavingRaw(
            $sql,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orHavingRaw(
                $sql,
                $bindings,
            );
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param \Closure|array|string|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhere(
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhere(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "BelongsTo" relationship with an "or where" clause to the query.
         *
         * @param \Illuminate\Database\Eloquent\Model $related
         * @param string|null $relationshipName
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \RuntimeException
         * @static
         */
        public static
        function orWhereBelongsTo(
            $related,
            $relationshipName = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereBelongsTo(
                $related,
                $relationshipName,
            );
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereBetween(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereBetween(
                $column,
                $values,
            );
        }

        /**
         * Add an or where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereBetweenColumns(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereBetweenColumns(
                $column,
                $values,
            );
        }

        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereColumn(
            $first,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereColumn(
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add an "or where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereDate(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereDate(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "or where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereDay(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereDay(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereDoesntHave(
            $relation,
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHave(
                $relation,
                $callback,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereDoesntHaveMorph(
            $relation,
            $types,
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHaveMorph(
                $relation,
                $types,
                $callback,
            );
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereExists(
            $callback,
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereExists(
                $callback,
                $not,
            );
        }

        /**
         * Add a "or where fulltext" clause to the query.
         *
         * @param string|string[] $columns
         * @param string $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereFullText(
            $columns,
            $value,
            $options = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereFullText(
                $columns,
                $value,
                $options,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereHas(
            $relation,
            $callback = null,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHas(
                $relation,
                $callback,
                $operator,
                $count,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereHasMorph(
            $relation,
            $types,
            $callback = null,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHasMorph(
                $relation,
                $types,
                $callback,
                $operator,
                $count,
            );
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereIn(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIn(
                $column,
                $values,
            );
        }

        /**
         * Add an "or where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereIntegerInRaw(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIntegerInRaw(
                $column,
                $values,
            );
        }

        /**
         * Add an "or where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereIntegerNotInRaw(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereIntegerNotInRaw(
                $column,
                $values,
            );
        }

        /**
         * Add an "or where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereJsonContains(
            $column,
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonContains(
                $column,
                $value,
            );
        }

        /**
         * Add an "or" clause that determines if a JSON path exists to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereJsonContainsKey(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonContainsKey($column);
        }

        /**
         * Add an "or where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereJsonDoesntContain(
            $column,
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonDoesntContain(
                $column,
                $value,
            );
        }

        /**
         * Add an "or" clause that determines if a JSON path does not exist to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereJsonDoesntContainKey(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonDoesntContainKey($column);
        }

        /**
         * Add an "or where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereJsonLength(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereJsonLength(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "or where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereMonth(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereMonth(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add a polymorphic relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereMorphRelation(
            $relation,
            $types,
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphRelation(
                $relation,
                $types,
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add a morph-to relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereMorphedTo(
            $relation,
            $model,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphedTo(
                $relation,
                $model,
            );
        }

        /**
         * Add an "or where not" clause to the query.
         *
         * @param \Closure|array|string|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereNot(
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNot(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNotBetween(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotBetween(
                $column,
                $values,
            );
        }

        /**
         * Add an or where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNotBetweenColumns(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotBetweenColumns(
                $column,
                $values,
            );
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNotExists(
            $callback,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotExists($callback);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNotIn(
            $column,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotIn(
                $column,
                $values,
            );
        }

        /**
         * Add a not morph-to relationship condition to the query with an "or where" clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereNotMorphedTo(
            $relation,
            $model,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNotMorphedTo(
                $relation,
                $model,
            );
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNotNull(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNotNull($column);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param string|array $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereNull(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereNull($column);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereRaw(
            $sql,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereRaw(
                $sql,
                $bindings,
            );
        }

        /**
         * Add an "or where" clause to a relationship query.
         *
         * @param string $relation
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function orWhereRelation(
            $relation,
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereRelation(
                $relation,
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Adds an or where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereRowValues(
            $columns,
            $operator,
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereRowValues(
                $columns,
                $operator,
                $values,
            );
        }

        /**
         * Add an "or where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereTime(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereTime(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "or where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orWhereYear(
            $column,
            $operator,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orWhereYear(
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Contracts\Database\Query\Expression|string $column
         * @param string $direction
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function orderBy(
            $column,
            $direction = 'asc',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderBy(
                $column,
                $direction,
            );
        }

        /**
         * Add a descending "order by" clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Contracts\Database\Query\Expression|string $column
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orderByDesc(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderByDesc($column);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function orderByRaw(
            $sql,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->orderByRaw(
                $sql,
                $bindings,
            );
        }

        /**
         * Paginate the given query.
         *
         * @param int|null|\Closure $perPage
         * @param array|string $columns
         * @param string $pageName
         * @param int|null $page
         *
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function paginate(
            $perPage = null,
            $columns = [],
            $pageName = 'page',
            $page = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->paginate(
                $perPage,
                $columns,
                $pageName,
                $page,
            );
        }

        /**
         * Get a collection with the values of a given column.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         * @param string|null $key
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static
        function pluck(
            $column,
            $key = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->pluck(
                $column,
                $key,
            );
        }

        /**
         * Prepare the value and operator for a where clause.
         *
         * @param string $value
         * @param string $operator
         * @param bool $useDefault
         *
         * @return array
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function prepareValueAndOperator(
            $value,
            $operator,
            $useDefault = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->prepareValueAndOperator(
                $value,
                $operator,
                $useDefault,
            );
        }

        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         *
         * @return \Illuminate\Contracts\Database\Query\Expression
         * @static
         */
        public static
        function raw(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->raw($value);
        }

        /**
         * Get a single expression value from the first result of a query.
         *
         * @param string $expression
         * @param array $bindings
         *
         * @return mixed
         * @static
         */
        public static
        function rawValue(
            $expression,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rawValue(
                $expression,
                $bindings,
            );
        }

        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         * @static
         */
        public static
        function removedScopes() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->removedScopes();
        }

        /**
         * Remove all existing orders and optionally add a new order.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Contracts\Database\Query\Expression|string|null $column
         * @param string $direction
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function reorder(
            $column = null,
            $direction = 'asc',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->reorder(
                $column,
                $direction,
            );
        }

        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function rightJoin(
            $table,
            $first,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoin(
                $table,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add a subquery right join to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         * @param \Closure|string $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function rightJoinSub(
            $query,
            $as,
            $first,
            $operator = null,
            $second = null,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoinSub(
                $query,
                $as,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param \Closure|string $first
         * @param string $operator
         * @param string $second
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function rightJoinWhere(
            $table,
            $first,
            $operator,
            $second,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->rightJoinWhere(
                $table,
                $first,
                $operator,
                $second,
            );
        }

        /**
         * Call the given local model scopes.
         *
         * @param array|string $scopes
         *
         * @return static|mixed
         * @static
         */
        public static
        function scopes(
            $scopes,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->scopes($scopes);
        }

        /**
         * Set the columns to be selected.
         *
         * @param array|mixed $columns
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function select(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->select($columns);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array $bindings
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function selectRaw(
            $expression,
            $bindings = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->selectRaw(
                $expression,
                $bindings,
            );
        }

        /**
         * Add a subselect expression to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
         * @param string $as
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function selectSub(
            $query,
            $as,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->selectSub(
                $query,
                $as,
            );
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function setBindings(
            $bindings,
            $type = 'where',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->setBindings(
                $bindings,
                $type,
            );
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function setEagerLoads(
            $eagerLoad,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setEagerLoads($eagerLoad);
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function setModel(
            $model,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setModel($model);
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function setQuery(
            $query,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setQuery($query);
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function sharedLock() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->sharedLock();
        }

        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int|null $perPage
         * @param array|string $columns
         * @param string $pageName
         * @param int|null $page
         *
         * @return \Illuminate\Contracts\Pagination\Paginator
         * @static
         */
        public static
        function simplePaginate(
            $perPage = null,
            $columns = [],
            $pageName = 'page',
            $page = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->simplePaginate(
                $perPage,
                $columns,
                $pageName,
                $page,
            );
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function skip(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->skip($value);
        }

        /**
         * Execute the query and get the first result if it's the sole matching record.
         *
         * @param array|string $columns
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static
        function sole(
            $columns = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->sole($columns);
        }

        /**
         * Get a single column's value from the first result of a query if it's the sole matching record.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         *
         * @return mixed
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Database\MultipleRecordsFoundException
         * @static
         */
        public static
        function soleValue(
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->soleValue($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static
        function sum(
            $column,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->sum($column);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function take(
            $value,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->take($value);
        }

        /**
         * Pass the query to a given callback.
         *
         * @param callable $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function tap(
            $callback,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->tap($callback);
        }

        /**
         * Get a base query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function toBase() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->toBase();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static
        function toSql() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->toSql();
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static
        function truncate() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            $instance->truncate();
        }

        /**
         * Add a union statement to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
         * @param bool $all
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function union(
            $query,
            $all = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->union(
                $query,
                $all,
            );
        }

        /**
         * Add a union all statement to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function unionAll(
            $query,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->unionAll($query);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         *
         * @param \Illuminate\Database\Eloquent\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         *
         * @return $this|\Illuminate\Database\Eloquent\TUnlessReturnType
         * @static
         */
        public static
        function unless(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->unless(
                $value,
                $callback,
                $default,
            );
        }

        /**
         * Update records in a PostgreSQL database using the update from syntax.
         *
         * @param array $values
         *
         * @return int
         * @static
         */
        public static
        function updateFrom(
            $values,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->updateFrom($values);
        }

        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static
        function updateOrCreate(
            $attributes,
            $values = [],
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->updateOrCreate(
                $attributes,
                $values,
            );
        }

        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return bool
         * @static
         */
        public static
        function updateOrInsert(
            $attributes,
            $values = [],
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->updateOrInsert(
                $attributes,
                $values,
            );
        }

        /**
         * Insert new records or update the existing ones.
         *
         * @param array $values
         * @param array|string $uniqueBy
         * @param array|null $update
         *
         * @return int
         * @static
         */
        public static
        function upsert(
            $values,
            $uniqueBy,
            $update = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->upsert(
                $values,
                $uniqueBy,
                $update,
            );
        }

        /**
         * Use the "write" PDO connection when executing the query.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function useWritePdo() {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->useWritePdo();
        }

        /**
         * Get a single column's value from the first result of a query.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         *
         * @return mixed
         * @static
         */
        public static
        function value(
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->value($column);
        }

        /**
         * Get a single column's value from the first result of the query or throw an exception.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         *
         * @return mixed
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @static
         */
        public static
        function valueOrFail(
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->valueOrFail($column);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         *
         * @param \Illuminate\Database\Eloquent\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         *
         * @return $this|\Illuminate\Database\Eloquent\TWhenReturnType
         * @static
         */
        public static
        function when(
            $value = null,
            $callback = null,
            $default = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->when(
                $value,
                $callback,
                $default,
            );
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function where(
            $column,
            $operator = null,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->where(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a "belongs to" relationship where clause to the query.
         *
         * @param \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model> $related
         * @param string|null $relationshipName
         * @param string $boolean
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @throws \Illuminate\Database\Eloquent\RelationNotFoundException
         * @static
         */
        public static
        function whereBelongsTo(
            $related,
            $relationshipName = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereBelongsTo(
                $related,
                $relationshipName,
                $boolean,
            );
        }

        /**
         * Add a where between statement to the query.
         *
         * @param string|\Illuminate\Contracts\Database\Query\Expression $column
         * @param \Illuminate\Database\Query\iterable $values
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereBetween(
            $column,
            $values,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereBetween(
                $column,
                $values,
                $boolean,
                $not,
            );
        }

        /**
         * Add a where between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereBetweenColumns(
            $column,
            $values,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereBetweenColumns(
                $column,
                $values,
                $boolean,
                $not,
            );
        }

        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null $operator
         * @param string|null $second
         * @param string|null $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereColumn(
            $first,
            $operator = null,
            $second = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereColumn(
                $first,
                $operator,
                $second,
                $boolean,
            );
        }

        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereDate(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereDate(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereDay(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereDay(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereDoesntHave(
            $relation,
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHave(
                $relation,
                $callback,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereDoesntHaveMorph(
            $relation,
            $types,
            $callback = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHaveMorph(
                $relation,
                $types,
                $callback,
            );
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereExists(
            $callback,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereExists(
                $callback,
                $boolean,
                $not,
            );
        }

        /**
         * Add a "where fulltext" clause to the query.
         *
         * @param string|string[] $columns
         * @param string $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereFullText(
            $columns,
            $value,
            $options = [],
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereFullText(
                $columns,
                $value,
                $options,
                $boolean,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereHas(
            $relation,
            $callback = null,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHas(
                $relation,
                $callback,
                $operator,
                $count,
            );
        }

        /**
         * Add a polymorphic relationship count / exists condition to the query with where clauses.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereHasMorph(
            $relation,
            $types,
            $callback = null,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHasMorph(
                $relation,
                $types,
                $callback,
                $operator,
                $count,
            );
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereIn(
            $column,
            $values,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIn(
                $column,
                $values,
                $boolean,
                $not,
            );
        }

        /**
         * Add a "where in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereIntegerInRaw(
            $column,
            $values,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIntegerInRaw(
                $column,
                $values,
                $boolean,
                $not,
            );
        }

        /**
         * Add a "where not in raw" clause for integer values to the query.
         *
         * @param string $column
         * @param \Illuminate\Contracts\Support\Arrayable|array $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereIntegerNotInRaw(
            $column,
            $values,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereIntegerNotInRaw(
                $column,
                $values,
                $boolean,
            );
        }

        /**
         * Add a "where JSON contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereJsonContains(
            $column,
            $value,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonContains(
                $column,
                $value,
                $boolean,
                $not,
            );
        }

        /**
         * Add a clause that determines if a JSON path exists to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereJsonContainsKey(
            $column,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonContainsKey(
                $column,
                $boolean,
                $not,
            );
        }

        /**
         * Add a "where JSON not contains" clause to the query.
         *
         * @param string $column
         * @param mixed $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereJsonDoesntContain(
            $column,
            $value,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonDoesntContain(
                $column,
                $value,
                $boolean,
            );
        }

        /**
         * Add a clause that determines if a JSON path does not exist to the query.
         *
         * @param string $column
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereJsonDoesntContainKey(
            $column,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonDoesntContainKey(
                $column,
                $boolean,
            );
        }

        /**
         * Add a "where JSON length" clause to the query.
         *
         * @param string $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereJsonLength(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereJsonLength(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereKey(
            $id,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKey($id);
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereKeyNot(
            $id,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKeyNot($id);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereMonth(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereMonth(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a polymorphic relationship condition to the query with a where clause.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param string|array $types
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereMorphRelation(
            $relation,
            $types,
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphRelation(
                $relation,
                $types,
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Add a morph-to relationship condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereMorphedTo(
            $relation,
            $model,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphedTo(
                $relation,
                $model,
                $boolean,
            );
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNested(
            $callback,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNested(
                $callback,
                $boolean,
            );
        }

        /**
         * Add a basic "where not" clause to the query.
         *
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereNot(
            $column,
            $operator = null,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNot(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param \Illuminate\Database\Query\iterable $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNotBetween(
            $column,
            $values,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotBetween(
                $column,
                $values,
                $boolean,
            );
        }

        /**
         * Add a where not between statement using columns to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNotBetweenColumns(
            $column,
            $values,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotBetweenColumns(
                $column,
                $values,
                $boolean,
            );
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNotExists(
            $callback,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotExists(
                $callback,
                $boolean,
            );
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNotIn(
            $column,
            $values,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotIn(
                $column,
                $values,
                $boolean,
            );
        }

        /**
         * Add a not morph-to relationship condition to the query.
         *
         * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
         * @param \Illuminate\Database\Eloquent\Model|string $model
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereNotMorphedTo(
            $relation,
            $model,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNotMorphedTo(
                $relation,
                $model,
                $boolean,
            );
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNotNull(
            $columns,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNotNull(
                $columns,
                $boolean,
            );
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param string|array $columns
         * @param string $boolean
         * @param bool $not
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereNull(
            $columns,
            $boolean = 'and',
            $not = false,
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereNull(
                $columns,
                $boolean,
                $not,
            );
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param mixed $bindings
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereRaw(
            $sql,
            $bindings = [],
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereRaw(
                $sql,
                $bindings,
                $boolean,
            );
        }

        /**
         * Add a basic where clause to a relationship query.
         *
         * @param string $relation
         * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
         * @param mixed $operator
         * @param mixed $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function whereRelation(
            $relation,
            $column,
            $operator = null,
            $value = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereRelation(
                $relation,
                $column,
                $operator,
                $value,
            );
        }

        /**
         * Adds a where condition using row values.
         *
         * @param array $columns
         * @param string $operator
         * @param array $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @throws \InvalidArgumentException
         * @static
         */
        public static
        function whereRowValues(
            $columns,
            $operator,
            $values,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereRowValues(
                $columns,
                $operator,
                $values,
                $boolean,
            );
        }

        /**
         * Add a "where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereTime(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereTime(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param \DateTimeInterface|string|int|null $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static
        function whereYear(
            $column,
            $operator,
            $value = null,
            $boolean = 'and',
        ) {
            /** @var \Illuminate\Database\Query\Builder $instance */
            return $instance->whereYear(
                $column,
                $operator,
                $value,
                $boolean,
            );
        }

        /**
         * Add subselect queries to include an aggregate value for a relationship.
         *
         * @param mixed $relations
         * @param string $column
         * @param string $function
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withAggregate(
            $relations,
            $column,
            $function = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAggregate(
                $relations,
                $column,
                $function,
            );
        }

        /**
         * Add subselect queries to include the average of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withAvg(
            $relation,
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAvg(
                $relation,
                $column,
            );
        }

        /**
         * Apply query-time casts to the model instance.
         *
         * @param array $casts
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withCasts(
            $casts,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCasts($casts);
        }

        /**
         * Add subselect queries to count the relations.
         *
         * @param mixed $relations
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withCount(
            $relations,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCount($relations);
        }

        /**
         * Add subselect queries to include the existence of related models.
         *
         * @param string|array $relation
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withExists(
            $relation,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withExists($relation);
        }

        /**
         * Register a new global scope.
         *
         * @param string $identifier
         * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withGlobalScope(
            $identifier,
            $scope,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withGlobalScope(
                $identifier,
                $scope,
            );
        }

        /**
         * Add subselect queries to include the max of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withMax(
            $relation,
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMax(
                $relation,
                $column,
            );
        }

        /**
         * Add subselect queries to include the min of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withMin(
            $relation,
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMin(
                $relation,
                $column,
            );
        }

        /**
         * Set the relationships that should be eager loaded while removing any previously added eager loading
         * specifications.
         *
         * @param mixed $relations
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withOnly(
            $relations,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withOnly($relations);
        }

        /**
         * Add subselect queries to include the sum of the relation's column.
         *
         * @param string|array $relation
         * @param string $column
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withSum(
            $relation,
            $column,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withSum(
                $relation,
                $column,
            );
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * Also load the relationship with same condition.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @param string $operator
         * @param int $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withWhereHas(
            $relation,
            $callback = null,
            $operator = '>=',
            $count = 1,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withWhereHas(
                $relation,
                $callback,
                $operator,
                $count,
            );
        }

        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param mixed $relations
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function without(
            $relations,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->without($relations);
        }

        /**
         * Indicate that the given relationships should not be eagerly loaded.
         *
         * @param array $relations
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withoutEagerLoad(
            $relations,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoad($relations);
        }

        /**
         * Flush the relationships being eagerly loaded.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withoutEagerLoads() {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoads();
        }

        /**
         * Remove a registered global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withoutGlobalScope(
            $scope,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScope($scope);
        }

        /**
         * Remove all or passed registered global scopes.
         *
         * @param array|null $scopes
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static
        function withoutGlobalScopes(
            $scopes = null,
        ) {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScopes($scopes);
        }
    }

    class Event extends \Illuminate\Support\Facades\Event { }

    class File extends \Illuminate\Support\Facades\File { }

    class Gate extends \Illuminate\Support\Facades\Gate { }

    class Hash extends \Illuminate\Support\Facades\Hash { }

    class Http extends \Illuminate\Support\Facades\Http { }

    class Js extends \Illuminate\Support\Js { }

    class Lang extends \Illuminate\Support\Facades\Lang { }

    class Log extends \Illuminate\Support\Facades\Log { }

    class Mail extends \Illuminate\Support\Facades\Mail { }

    class Notification extends \Illuminate\Support\Facades\Notification { }

    class Password extends \Illuminate\Support\Facades\Password { }

    class Process extends \Illuminate\Support\Facades\Process { }

    class Queue extends \Illuminate\Support\Facades\Queue { }

    class RateLimiter extends \Illuminate\Support\Facades\RateLimiter { }

    class Redirect extends \Illuminate\Support\Facades\Redirect { }

    class Request extends \Illuminate\Support\Facades\Request { }

    class Response extends \Illuminate\Support\Facades\Response { }

    class Route extends \Illuminate\Support\Facades\Route { }

    class Schema extends \Illuminate\Support\Facades\Schema { }

    class Session extends \Illuminate\Support\Facades\Session { }

    class Storage extends \Illuminate\Support\Facades\Storage { }

    class Str extends \Illuminate\Support\Str { }

    class URL extends \Illuminate\Support\Facades\URL { }

    class Validator extends \Illuminate\Support\Facades\Validator { }

    class View extends \Illuminate\Support\Facades\View { }

    class Vite extends \Illuminate\Support\Facades\Vite { }

    class Agent extends \Jenssegers\Agent\Facades\Agent { }

    class Octane extends \Laravel\Octane\Facades\Octane { }

    class Livewire extends \Livewire\Livewire { }

    class Fractal extends \Spatie\Fractal\Facades\Fractal { }

    class Flare extends \Spatie\LaravelIgnition\Facades\Flare { }

}


namespace {


    use Illuminate\Contracts\Support\DeferringDisplayableValue;
    use Illuminate\Contracts\Support\Htmlable;
    use Illuminate\Support\Env;
    use Illuminate\Support\HigherOrderTapProxy;
    use Illuminate\Support\Optional;

    if (!function_exists('append_config')) {
        /**
         * Assign high numeric IDs to a config item to force appending.
         *
         * @param array $array
         *
         * @return array
         */
        function append_config(array $array) {
            $start = 9999;

            foreach ($array as $key => $value) {
                if (is_numeric($key)) {
                    $start++;

                    $array[$start] = Arr::pull(
                        $array,
                        $key,
                    );
                }
            }

            return $array;
        }
    }

    if (!function_exists('blank')) {
        /**
         * Determine if the given value is "blank".
         *
         * @param mixed $value
         *
         * @return bool
         */
        function blank($value) {
            if (is_null($value)) {
                return true;
            }

            if (is_string($value)) {
                return trim($value) === '';
            }

            if (is_numeric($value) || is_bool($value)) {
                return false;
            }

            if ($value instanceof Countable) {
                return count($value) === 0;
            }

            return empty($value);
        }
    }

    if (!function_exists('class_basename')) {
        /**
         * Get the class "basename" of the given object / class.
         *
         * @param string|object $class
         *
         * @return string
         */
        function class_basename($class) {
            $class = is_object($class) ? get_class($class) : $class;

            return basename(
                str_replace(
                    '\\',
                    '/',
                    $class,
                ),
            );
        }
    }

    if (!function_exists('class_uses_recursive')) {
        /**
         * Returns all traits used by a class, its parent classes and trait of their traits.
         *
         * @param object|string $class
         *
         * @return array
         */
        function class_uses_recursive($class) {
            if (is_object($class)) {
                $class = get_class($class);
            }

            $results = [];

            foreach (array_reverse(class_parents($class)) + [$class => $class] as $class) {
                $results += trait_uses_recursive($class);
            }

            return array_unique($results);
        }
    }

    if (!function_exists('e')) {
        /**
         * Encode HTML special characters in a string.
         *
         * @param \Illuminate\Contracts\Support\DeferringDisplayableValue|\Illuminate\Contracts\Support\Htmlable|\BackedEnum|string|null $value
         * @param bool $doubleEncode
         *
         * @return string
         */
        function e($value, $doubleEncode = true) {
            if ($value instanceof DeferringDisplayableValue) {
                $value = $value->resolveDisplayableValue();
            }

            if ($value instanceof Htmlable) {
                return $value->toHtml();
            }

            if ($value instanceof BackedEnum) {
                $value = $value->value;
            }

            return htmlspecialchars(
                $value ?? '',
                ENT_QUOTES,
                'UTF-8',
                $doubleEncode,
            );
        }
    }

    if (!function_exists('env')) {
        /**
         * Gets the value of an environment variable.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         */
        function env($key, $default = null) {
            return Env::get(
                $key,
                $default,
            );
        }
    }

    if (!function_exists('filled')) {
        /**
         * Determine if a value is "filled".
         *
         * @param mixed $value
         *
         * @return bool
         */
        function filled($value) {
            return !blank($value);
        }
    }

    if (!function_exists('object_get')) {
        /**
         * Get an item from an object using "dot" notation.
         *
         * @param object $object
         * @param string|null $key
         * @param mixed $default
         *
         * @return mixed
         */
        function object_get($object, $key, $default = null) {
            if (is_null($key) || trim($key) === '') {
                return $object;
            }

            foreach (explode(
                         '.',
                         $key,
                     ) as $segment) {
                if (!is_object($object) || !isset($object->{$segment})) {
                    return value($default);
                }

                $object = $object->{$segment};
            }

            return $object;
        }
    }

    if (!function_exists('optional')) {
        /**
         * Provide access to optional objects.
         *
         * @param mixed $value
         * @param callable|null $callback
         *
         * @return mixed
         */
        function optional($value = null, callable $callback = null) {
            if (is_null($callback)) {
                return new Optional($value);
            } elseif (!is_null($value)) {
                return $callback($value);
            }
        }
    }

    if (!function_exists('preg_replace_array')) {
        /**
         * Replace a given pattern with each value in the array in sequentially.
         *
         * @param string $pattern
         * @param array $replacements
         * @param string $subject
         *
         * @return string
         */
        function preg_replace_array($pattern, array $replacements, $subject) {
            return preg_replace_callback(
                $pattern,
                function() use (&$replacements) {
                    foreach ($replacements as $value) {
                        return array_shift($replacements);
                    }
                },
                $subject,
            );
        }
    }

    if (!function_exists('retry')) {
        /**
         * Retry an operation a given number of times.
         *
         * @param int|array $times
         * @param callable $callback
         * @param int|\Closure $sleepMilliseconds
         * @param callable|null $when
         *
         * @return mixed
         *
         * @throws \Exception
         */
        function retry($times, callable $callback, $sleepMilliseconds = 0, $when = null) {
            $attempts = 0;

            $backoff = [];

            if (is_array($times)) {
                $backoff = $times;

                $times = count($times) + 1;
            }

            beginning:
            $attempts++;
            $times--;

            try {
                return $callback($attempts);
            }
            catch (Exception $e) {
                if ($times < 1 || ($when && !$when($e))) {
                    throw $e;
                }

                $sleepMilliseconds = $backoff[$attempts - 1] ?? $sleepMilliseconds;

                if ($sleepMilliseconds) {
                    usleep(
                        value(
                            $sleepMilliseconds,
                            $attempts,
                            $e,
                        ) * 1000,
                    );
                }

                goto beginning;
            }
        }
    }

    if (!function_exists('str')) {
        /**
         * Get a new stringable object from the given string.
         *
         * @param string|null $string
         *
         * @return \Illuminate\Support\Stringable|mixed
         */
        function str($string = null) {
            if (func_num_args() === 0) {
                return new
                class {
                    public
                    function __call(
                        $method,
                        $parameters,
                    ) {
                        return Str::$method(
                            ...
                            $parameters,
                        );
                    }

                    public
                    function __toString() {
                        return '';
                    }
                };
            }

            return Str::of($string);
        }
    }

    if (!function_exists('tap')) {
        /**
         * Call the given Closure with the given value then return the value.
         *
         * @param mixed $value
         * @param callable|null $callback
         *
         * @return mixed
         */
        function tap($value, $callback = null) {
            if (is_null($callback)) {
                return new HigherOrderTapProxy($value);
            }

            $callback($value);

            return $value;
        }
    }

    if (!function_exists('throw_if')) {
        /**
         * Throw the given exception if the given condition is true.
         *
         * @param mixed $condition
         * @param \Throwable|string $exception
         * @param mixed ...$parameters
         *
         * @return mixed
         *
         * @throws \Throwable
         */
        function throw_if($condition, $exception = 'RuntimeException', ...$parameters) {
            if ($condition) {
                if (is_string($exception) && class_exists($exception)) {
                    $exception = new $exception(
                        ...
                        $parameters
                    );
                }

                throw is_string($exception) ? new RuntimeException($exception) : $exception;
            }

            return $condition;
        }
    }

    if (!function_exists('throw_unless')) {
        /**
         * Throw the given exception unless the given condition is true.
         *
         * @param mixed $condition
         * @param \Throwable|string $exception
         * @param mixed ...$parameters
         *
         * @return mixed
         *
         * @throws \Throwable
         */
        function throw_unless($condition, $exception = 'RuntimeException', ...$parameters) {
            throw_if(
                !$condition,
                $exception,
                ...
                $parameters,
            );

            return $condition;
        }
    }

    if (!function_exists('trait_uses_recursive')) {
        /**
         * Returns all traits used by a trait and its traits.
         *
         * @param string $trait
         *
         * @return array
         */
        function trait_uses_recursive($trait) {
            $traits = class_uses($trait) ?: [];

            foreach ($traits as $trait) {
                $traits += trait_uses_recursive($trait);
            }

            return $traits;
        }
    }

    if (!function_exists('transform')) {
        /**
         * Transform the given value if it is present.
         *
         * @param mixed $value
         * @param callable $callback
         * @param mixed $default
         *
         * @return mixed|null
         */
        function transform($value, callable $callback, $default = null) {
            if (filled($value)) {
                return $callback($value);
            }

            if (is_callable($default)) {
                return $default($value);
            }

            return $default;
        }
    }

    if (!function_exists('windows_os')) {
        /**
         * Determine whether the current environment is Windows based.
         *
         * @return bool
         */
        function windows_os() {
            return PHP_OS_FAMILY === 'Windows';
        }
    }

    if (!function_exists('with')) {
        /**
         * Return the given value, optionally passed through the given callback.
         *
         * @template TValue
         * @template TReturn
         *
         * @param TValue $value
         * @param (callable(TValue): (TReturn))|null $callback
         *
         * @return ($callback is null ? TValue : TReturn)
         */
        function with($value, callable $callback = null) {
            return is_null($callback) ? $value : $callback($value);
        }
    }

}

namespace Illuminate\Support {
    /**
     * Methods commonly used in migrations
     *
     * @method Fluent after(string $column) Add the after modifier
     * @method Fluent charset(string $charset) Add the character set modifier
     * @method Fluent collation(string $collation) Add the collation modifier
     * @method Fluent comment(string $comment) Add comment
     * @method Fluent default($value) Add the default modifier
     * @method Fluent first() Select first row
     * @method Fluent index(string $name = null) Add the in dex clause
     * @method Fluent on(string $table) `on` of a foreign key
     * @method Fluent onDelete(string $action) `on delete` of a foreign key
     * @method Fluent onUpdate(string $action) `on update` of a foreign key
     * @method Fluent primary() Add the primary key modifier
     * @method Fluent references(string $column) `references` of a foreign key
     * @method Fluent nullable(bool $value = true) Add the nullable modifier
     * @method Fluent unique(string $name = null) Add unique index clause
     * @method Fluent unsigned() Add the unsigned modifier
     * @method Fluent useCurrent() Add the default timestamp value
     * @method Fluent change() Add the change modifier
     */
    class Fluent { }
}

