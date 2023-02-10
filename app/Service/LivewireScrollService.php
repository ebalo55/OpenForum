<?php

namespace App\Service;

use App\Enum\LivewireEventEmissionMethod;
use Livewire\Component;

/**
 * @method LivewireScrollService addParameter(string $key, mixed $value)
 * @method LivewireScrollService asBasic()
 * @method LivewireScrollService asClient()
 * @method LivewireScrollService asParentOnly()
 * @method LivewireScrollService asSelf()
 * @method LivewireScrollService asTargeted(string $component_name)
 * @method LivewireScrollService emitAs(LivewireEventEmissionMethod $emission_method)
 * @method LivewireScrollService from(Component $component)
 * @method LivewireScrollService withComponent(Component $component)
 * @method LivewireScrollService withParameters(mixed ...$parameters)
 */
class LivewireScrollService extends LivewireEventEmittingService {
    protected LivewireEventEmissionMethod $method = LivewireEventEmissionMethod::BROWSER_EVENT;

    /**
     * Emit the event responsible for the scroll to bottom of the view
     *
     * @return void
     */
    public
    function scrollToBottom(): void {
        $this->packArguments("scroll.to_bottom")
             ->call();
    }

    /**
     * Emit the event responsible for the scroll to top of the view
     *
     * @return void
     */
    public
    function scrollToTop(): void {
        $this->packArguments("scroll.to_top")
             ->call();
    }

    protected
    function resetCallMethod(): void {
        $this->method = LivewireEventEmissionMethod::BROWSER_EVENT;
    }
}
