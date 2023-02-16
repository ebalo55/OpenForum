<?php

namespace Tests\Feature\Service;

use App\Exceptions\LivewireComponentNotInitializedException;
use App\Facade\LivewireScrollServiceFacade;
use Livewire\Component;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireScrollServiceTest extends TestCase {
    public
    function test_emit_scroll_to_bottom_browser_events(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)->scrollToBottom();
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent("scroll.to_bottom");
    }

    public
    function test_emit_scroll_to_top_browser_events(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent("scroll.to_top");
    }

    public
    function test_throws_if_calling_component_is_undefined(): void {
        $this->expectException(LivewireComponentNotInitializedException::class);

        LivewireScrollServiceFacade::scrollToBottom();
    }
}
