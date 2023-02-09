<?php

namespace App\Service;

use App\Enum\LivewireEventEmissionMethod;
use Livewire\Component;

abstract
class LivewireEventEmittingService extends BaseService {
    protected array $additional_method_argument = [];
    protected ?Component $component = null;
    protected array $event_parameters = [];
    protected LivewireEventEmissionMethod $method = LivewireEventEmissionMethod::EVENT;

    /**
     * Set the method used to emit the current event as a basic event
     *
     * @return $this
     */
    public
    function asBasic(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::EVENT);
    }

    /**
     * Set the method used to emit the current event as a client event
     *
     * @return $this
     */
    public
    function asClient(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::BROWSER_EVENT);
    }

    /**
     * Set the method used to emit the current event as a parent only event
     *
     * @return $this
     */
    public
    function asParentOnly(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::PARENT_ONLY_EVENT);
    }

    /**
     * Set the method used to emit the current event as a self event
     *
     * @return $this
     */
    public
    function asSelf(): static {
        $this->resetAdditionalMethodArguments();
        return $this->emitAs(LivewireEventEmissionMethod::SELF_EVENT);
    }

    /**
     * Set the method used to emit the current event as a targeted event
     *
     * @return $this
     */
    public
    function asTargeted(
        string $component_name,
    ): static {
        $this->additional_method_argument = ["name" => $component_name];
        return $this->emitAs(LivewireEventEmissionMethod::TO_COMPONENT_EVENT);
    }

    /**
     * Set the method used to emit the current event
     *
     * @param LivewireEventEmissionMethod $emission_method
     *
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public
    function withParameters(
        mixed ...$parameters
    ): static {
        $this->event_parameters = $parameters;
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
        $this->additional_method_argument = [];
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
