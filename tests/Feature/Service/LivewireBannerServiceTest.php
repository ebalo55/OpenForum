<?php

namespace Tests\Feature\Service;

use App\Facade\LivewireBannerServiceFacade;
use Livewire\Component;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireBannerServiceTest extends TestCase {
    public
    function test_emits_banner_error_browser_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireBannerServiceFacade::from($this)->error(
                    "test",
                    1000,
                );
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent(
            "banner.error",
            ["message" => "test", "timeout" => 1000],
        );
    }

    public
    function test_emits_banner_success_browser_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireBannerServiceFacade::from($this)->success(
                    "test",
                    1000,
                );
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent(
            "banner.success",
            ["message" => "test", "timeout" => 1000],
        );
    }

    public
    function test_emits_banner_upload_in_progress_browser_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireBannerServiceFacade::from($this)->uploadInProgress(
                    "test",
                    LivewireBannerServiceFacade::UNLIMITED_TIMEOUT(),
                );
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent(
            "banner.upload_in_progress",
            ["message" => "test", "timeout" => LivewireBannerServiceFacade::UNLIMITED_TIMEOUT()],
        );
    }
}
