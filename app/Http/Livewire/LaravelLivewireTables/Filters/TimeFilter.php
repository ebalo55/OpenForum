<?php

namespace App\Http\Livewire\LaravelLivewireTables\Filters;

use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class TimeFilter extends Filter {
    public
    function isEmpty(
        $value,
    ): bool {
        return $value === '';
    }

    public
    function render(
        DataTableComponent $component,
    ): View|Factory|Application {
        return view(
            'livewire.laravel-livewire-tables.filters.time',
            [
                'component' => $component,
                'filter'    => $this,
            ],
        );
    }

    public
    function validate(
        $value,
    ) {
        if (DateTime::createFromFormat(
                'H:i',
                $value,
            ) === false) {
            return false;
        }

        return $value;
    }
}
