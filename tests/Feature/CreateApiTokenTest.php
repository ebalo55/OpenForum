<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Jetstream\Features;
use Laravel\Jetstream\Http\Livewire\ApiTokenManager;
use Livewire\Livewire;
use Tests\TestCase;

class CreateApiTokenTest extends TestCase {
    use RefreshDatabase;

    public
    function test_api_tokens_can_be_created(): void {
        if (!Features::hasApiFeatures()) {
            $this->markTestSkipped('API support is not enabled.');

            return;
        }

        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        Livewire::test(ApiTokenManager::class)
	        ->set(
                    [
                        'createApiTokenForm' => [
                            'name'        => 'Test Token',
                            'permissions' => [
	                            \App\Enum\Permissions\Classes\User::READ_CURRENT(),
	                            'update',
                            ],
                        ],
                    ],
                )
	        ->call('createApiToken');

	    $this->assertCount(
		    1,
		    $user->fresh()->tokens,
	    );
	    $this->assertEquals(
		    'Test Token',
		    $user->fresh()->tokens->first()->name,
	    );

	    $this->assertTrue($user->fresh()->tokens->first()->can(\App\Enum\Permissions\Classes\User::READ_CURRENT()));
	    $this->assertFalse($user->fresh()->tokens->first()->can('delete'));
    }
}
