<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component {
    /**
     * Get the view / contents that represents the component.
     */
    public
    function render(): Application|Factory|View {
        return view('layouts.app');
    }
}
