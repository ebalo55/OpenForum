<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class PagesController extends Controller {
    public
    function loginRedirect(): RedirectResponse {
        return redirect()->route("login");
    }
}
