<?php

namespace App\Http\Livewire\Users;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component {
	public array $tab_names = [
		"Imported users",
		"Import",
	];

	public
	function render(): Factory|View|Application {
		return view('livewire.users.index');
	}
}
