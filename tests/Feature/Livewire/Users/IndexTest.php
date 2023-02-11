<?php

namespace Tests\Feature\Livewire\Users;

use App\Http\Livewire\Users\Index;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase {
	/** @test */
	public
	function the_component_can_render() {
		$component = Livewire::test(Index::class);

		$component->assertStatus(200);
	}
}
