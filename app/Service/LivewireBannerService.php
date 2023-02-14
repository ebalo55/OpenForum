<?php

namespace App\Service;

use App\Enum\LivewireEventEmissionMethod;
use Livewire\Component;

/**
 * @method LivewireBannerService addParameter(string $key, mixed $value)
 * @method LivewireBannerService asBasic()
 * @method LivewireBannerService asClient()
 * @method LivewireBannerService asParentOnly()
 * @method LivewireBannerService asSelf()
 * @method LivewireBannerService asTargeted(string $component_name)
 * @method LivewireBannerService emitAs(LivewireEventEmissionMethod $emission_method)
 * @method LivewireBannerService from(Component $component)
 * @method LivewireBannerService withComponent(Component $component)
 * @method LivewireBannerService withParameters(mixed ...$parameters)
 */
class LivewireBannerService extends LivewireEventEmittingService {
    protected LivewireEventEmissionMethod $method = LivewireEventEmissionMethod::BROWSER_EVENT;

    /**
     * Publish the client event responsible for the display of the error banner
     *
     * @param string $message
     * @param int|float|null $timeout
     *
     * @return void
     */
    public
    function error(
        string         $message,
        int|float|null $timeout = null,
    ): void {
        $this->withParameters(
            [
                "message" => $message,
                "timeout" => $timeout,
            ],
        )->packArguments("banner.error")
             ->call();
    }

    /**
     * Publish the client event responsible for the display of the success banner
     *
     * @param string $message
     * @param int|float|null $timeout
     *
     * @return void
     */
    public
    function success(
        string         $message,
        int|float|null $timeout = null,
    ): void {
        $this->withParameters(
            [
                "message" => $message,
                "timeout" => $timeout,
            ],
        )->packArguments("banner.success")
             ->call();
    }

    /**
     * Publish the client event responsible for the display of the upload in progress banner
     *
     * @param string $message
     * @param int|float|null $timeout
     *
     * @return void
     */
    public
    function uploadInProgress(
        string         $message,
        int|float|null $timeout = null,
    ): void {
        $this->withParameters(
            [
                "message" => $message,
                "timeout" => $timeout,
            ],
        )->packArguments("banner.upload_in_progress")
             ->call();
    }

    protected
    function resetCallMethod(): void {
        $this->method = LivewireEventEmissionMethod::BROWSER_EVENT;
    }
}
