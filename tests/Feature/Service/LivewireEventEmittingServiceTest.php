<?php

namespace Tests\Feature\Service;

use App\Facade\LivewireScrollServiceFacade;
use App\Service\LivewireEventEmittingService;
use Livewire\Component;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireEventEmittingServiceTest extends TestCase {
    public
    function test_can_add_parameters(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->addParameter(
                                               "test",
                                               1,
                                           )
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent(
            "scroll.to_top",
            ["test" => 1],
        );
    }

    public
    function test_can_call_default_reset_call_method(): void {


        $component = new
        class extends Component {
            public
            function render() {
                $emitter = new
                class extends LivewireEventEmittingService {
                    public
                    function test() {
                        $this->packArguments("test")->call();
                    }
                };

                (new ($emitter::class))->from($this)->test();
                return "";
            }
        };

        Livewire::test($component::class)->assertEmitted(
            "test",
        );
    }

    public
    function test_can_emit_as_basic_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->asBasic()
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertEmitted(
            "scroll.to_top",
        );
    }

    public
    function test_can_emit_as_client_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->asClient()
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertDispatchedBrowserEvent(
            "scroll.to_top",
        );
    }

    public
    function test_can_emit_as_parent_only_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->asParentOnly()
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertEmittedUp(
            "scroll.to_top",
        );
    }

    public
    function test_can_emit_as_self_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->asSelf()
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertEmitted(
            "scroll.to_top",
        );
    }

    public
    function test_can_emit_as_targeted_event(): void {
        $component = new
        class extends Component {
            public
            function render() {
                LivewireScrollServiceFacade::from($this)
                                           ->asTargeted("test")
                                           ->scrollToTop();
                return "";
            }
        };

        Livewire::test($component::class)->assertEmittedTo(
            "test",
            "scroll.to_top",
        );
    }
}
