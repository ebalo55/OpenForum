<?php

namespace App\Http\Requests\Api;

use Laravel\Fortify\Http\Requests\LoginRequest;

class UserLoginRequest extends LoginRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public
    function authorize(): bool {
        return request()->user()?->tokenCan("user.external.login");
    }
}
