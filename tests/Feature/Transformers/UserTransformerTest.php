<?php

namespace Tests\Feature\Transformers;

use App\Facade\UserServiceFacade;
use App\Models\Reservation;
use App\Models\User;
use App\Transformers\UserTransformer;
use Tests\TestCase;

class UserTransformerTest extends TestCase {
    public
    function test_correctly_includes_reservations(): void {
        $user = User::factory()->has(Reservation::factory(2))->create();

        foreach ((new UserTransformer())->includeReservations($user)->getData() as $key => $data) {
            $this->assertTrue($user->reservations[$key]->is($data));
        }
    }

    public
    function test_correctly_transforms_data(): void {
        $user = User::factory()->create();

        $this->assertEquals(
            [
                "id"                => $user->prefixed_id,
                "name"              => $user->name,
                "email"             => UserServiceFacade::maskEmail($user),
                "email_verified_at" => $user->email_verified_at ? format($user->email_verified_at) : null,
                "token"             => UserServiceFacade::getFrontEndAccessToken($user),
            ],
            (new UserTransformer())->transform($user),
        );
    }
}
