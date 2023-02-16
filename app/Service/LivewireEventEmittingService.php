<?php

namespace App\Service;

use App\Enum\LivewireEventEmissionMethod;
use App\Exceptions\LivewireComponentNotInitializedException;
use Illuminate\Support\Arr;
use Livewire\Component;


class LivewireEventEmittingService extends BaseService {
    protected ?Component $component = null;
    protected array $event_parameters = [];
    protected LivewireEventEmissionMethod $method = LivewireEventEmissionMethod::EVENT;
    protected array $method_arguments = [];

    public
    function UNLIMITED_TIMEOUT(): int {
        return 0x7FFFFFFF;
    }

    /**
     * Add the given key-value pair to the list of additional parameter to emit with the event
     *
     * @param string $key
     * @param mixed $value
     *
     * @return static
     */
    public
    function addParameter(
        string $key,
        mixed  $value,
    ): static {
        $this->event_parameters[$key] = $value;
        return $this;
    }

    /**
     * Set the method used to emit the current event as a basic event
     *
     * @return static
     */
    public
    function asBasic(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::EVENT);
    }

    /**
     * Set the method used to emit the current event as a client event
     *
     * @return static
     */
    public
    function asClient(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::BROWSER_EVENT);
    }

    /**
     * Set the method used to emit the current event as a parent only event
     *
     * @return static
     */
    public
    function asParentOnly(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::PARENT_ONLY_EVENT);
    }

    /**
     * Set the method used to emit the current event as a self event
     *
     * @return static
     */
    public
    function asSelf(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::SELF_EVENT);
    }

    /**
     * Set the method used to emit the current event as a targeted event
     *
     * @param string $component_name
     *
     * @return static
     */
    public
    function asTargeted(
        string $component_name,
    ): static {
        $this->method_arguments = ["name" => $component_name];
        return $this->emitAs(LivewireEventEmissionMethod::TO_COMPONENT_EVENT);
    }

    /**
     * Set the method used to emit the current event
     *
     * @param LivewireEventEmissionMethod $emission_method
     *
     * @return static
     */
    public
    function emitAs(
        LivewireEventEmissionMethod $emission_method,
    ): static {
        $this->method = $emission_method;
        return $this;
    }

    /**
     * Set the component that will be used to emit the event.
     *
     * @alias withComponent
     *
     * @param Component $component
     *
     * @return static
     */
    public
    function from(
        Component $component,
    ): static {
        return $this->withComponent($component);
    }

    /**
     * Set the component that will be used to emit the event
     *
     * @param Component $component
     *
     * @return static
     */
    public
    function withComponent(
        Component $component,
    ): static {
        $this->component = $component;
        return $this;
    }

    /**
     * Set the list of additional parameters to emit with the event
     *
     * @param mixed ...$parameters
     *
     * @return static
     */
    public
    function withParameters(
        mixed ...$parameters,
    ): static {
        $this->event_parameters = Arr::collapse($parameters);
        return $this;
    }

    /**
     * Spread the defined arguments on the method definition calling it, then reset the data
     *
     * @return void
     * @throws LivewireComponentNotInitializedException
     */
    protected
    function call(): void {
        throw_if(
            !$this->component,
            LivewireComponentNotInitializedException::class,
        );

        $this->component->{($this->method)()}(
            ...
            $this->method_arguments,
        );

        $this->reset();
    }

    /**
     * Create the final method_arguments array of data that can be spread upon any of the event emission method
     *
     * @param string $event
     *
     * @return static
     */
    protected
    function packArguments(
        string $event,
    ): static {
        if ($this->method === LivewireEventEmissionMethod::BROWSER_EVENT) {
            $this->method_arguments = [
                "event" => $event,
                "data"  => [
                    ...$this->event_parameters,
                ],
            ];
        } else {
            $this->method_arguments = [
                ...$this->method_arguments,
                "event"  => $event,
                "params" => [
                    ...$this->event_parameters,
                ],
            ];
        }

        return $this;
    }

    /**
     * Reset to the default value all the event emitting service
     *
     * @return void
     */
    protected
    function reset(): void {
        $this->resetCallMethod();
        $this->resetComponent();
        $this->resetAdditionalMethodArguments();
        $this->resetEventParameters();
    }

    /**
     * Reset the additional_method_argument to an empty array
     *
     * @return void
     */
    protected
    function resetAdditionalMethodArguments(): void {
        $this->method_arguments = [];
    }

    /**
     * Reset the method call to the default value
     *
     * @return void
     */
    protected
    function resetCallMethod(): void {
        $this->method = LivewireEventEmissionMethod::EVENT;
    }

    /**
     * Reset the component to null
     *
     * @return void
     */
    protected
    function resetComponent(): void {
        $this->component = null;
    }

    /**
     * Reset the additional event parameters
     *
     * @return void
     */
    protected
    function resetEventParameters(): void {
        $this->event_parameters = [];
    }
}
