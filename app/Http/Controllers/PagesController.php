<?php

namespace App\Http\Controllers;

use App\Settings\GeneralSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PagesController extends Controller {
	public
	function emailVerificationRedirect(
		Request $request,
		string  $id,
		string  $hash,
	): RedirectResponse {
		return redirect(
			"https://" .
			app(GeneralSettings::class)->front_end_domain .
			config("student-forum.front_end_email_verification_path") .
			"?id=$id&hash=$hash&signature=" . $request->get("signature")
			. "&expires=" . $request->get("expires"),
		);
	}

	public
	function loginRedirect(): RedirectResponse {
		return redirect()->route("login");
	}
}
