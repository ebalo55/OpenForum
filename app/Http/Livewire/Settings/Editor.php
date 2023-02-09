<?php

namespace App\Http\Livewire\Settings;

use App\Enum\PasswordGenerationRules;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Editor extends Component {
    /**
     * @var PasswordGenerationRules[]
     */
    public array $password_generation_rule;
    public string $registration_available_from;
    public string $registration_available_to;
    public string $site_name;

    public
    function mount() {
        $this->resetForm();
    }

    public
    function render(): Factory|View|Application {
        return view('livewire.settings.editor');
    }

    public
    function resetForm() {
        $this->password_generation_rule = app(PasswordGenerationSettings::class)->generation_rule;
        $this->registration_available_from = format(app(GeneralSettings::class)->registration_enabled_from ?? now());
        $this->registration_available_to = format(
            app(GeneralSettings::class)->registration_enabled_to ?? now()->addDay(),
        );
        $this->site_name = app(GeneralSettings::class)->site_name;
    }

    protected
    function rules(): array {
        return [
            "registration_available_from" => [
                "required",
                "date_format:" . config("student-forum.datetime_format"),
                "after:now",
            ],
            "registration_available_to"   => [
                "required",
                "date_format:" . config("student-forum.datetime_format"),
                "after:registration_available_from",
            ],
            "site_name"                   => "required|min:4|max:255",
            "password_generation_rule"    => "required|array|min:1",
            "password_generation_rule.*"  => Rule::in(PasswordGenerationRules::values()),
        ];
    }
}
