<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation {
    /**
     * Validate and update the given user's profile information.
     *
     * @param array<string, string> $input
     *
     * @throws ValidationException
     */
    public
    function update(
        User  $user,
        array $input,
    ): void {
        Validator::make(
            $input,
            [
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            ],
        )->validateWithBag('updateProfileInformation');

        $user->forceFill(
            [
                'email' => $input['email'],
            ],
        )->save();

        // send email notification notice
        $user->notify(new VerifyEmail());
    }
}
