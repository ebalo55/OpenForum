<?php

namespace App\Service;

use App\Enum\LivewireEventEmissionMethod;

final
class BannerService extends LivewireEventEmittingService {
    protected LivewireEventEmissionMethod $method = LivewireEventEmissionMethod::BROWSER_EVENT;

    /**
     * Publish the client event responsible for the display of the success banner
     *
     * @param string $message
     *
     * @return void
     */
    public
    function success(
        string $message,
    ): void {
        if ($this->method === LivewireEventEmissionMethod::BROWSER_EVENT) {
            $this->additional_method_argument = [
                "event" => "banner.success",
                "data"  => [
                    ...$this->event_parameters,
                    ...[
                        'message' => $message,
                    ],
                ],
            ];
        } else {
            $this->additional_method_argument = [
                ...$this->additional_method_argument,
                "event"  => "banner.success",
                "params" => [
                    ...$this->event_parameters,
                    ...[
                        'message' => $message,
                    ],
                ],
            ];
        }

        $this->component->{($this->method)()}(
            ...
            $this->additional_method_argument,
        );

        $this->reset();
    }

    protected
    function resetCallMethod(): void {
        $this->method = LivewireEventEmissionMethod::BROWSER_EVENT;
    }
}
