<?php

namespace App\Http\Livewire\Settings;

use App\Enum\PasswordGenerationRules;
use App\Facade\LivewireBannerServiceFacade;
use App\Facade\LivewireScrollServiceFacade;
use App\Facade\SettingServiceFacade;
use App\Facade\UserServiceFacade;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Livewire\Component;

class PasswordGenerationForm extends Component {
    public ?string $class = null;
    public ?Carbon $fake_birth_date = null;
    public string $fake_birth_date_printable = "";
    public string $fake_name = "";
    public string $generated_password = "";
    /** @var PasswordGenerationRules[] */
    public array $generation_rules = [];
    /** @var PasswordGenerationRules[] */
    public array $options = [];

    public
    function mount(
        ?string $class = null,
    ) {
        $this->class = $class;
        $this->options = PasswordGenerationRules::cases();

        $this->fake_name = fake("it_IT")->name;
        $this->fake_birth_date = now()->subMonths(
            random_int(
                -10,
                10,
            ),
        )->subYears(
            random_int(
                10,
                30,
            ),
        )->subDays(
            random_int(
                -30,
                30,
            ),
        );
        $this->fake_birth_date_printable = explode(
                                               " ",
                                               format($this->fake_birth_date),
                                           )[0];

        $this->generation_rules = app(PasswordGenerationSettings::class)->generation_rule;
        $this->generated_password = UserServiceFacade::generatePassword(
            $this->fake_name,
            $this->fake_birth_date,
        );
    }

    public
    function render(): Factory|View|Application {
        return view('livewire.settings.password-generation-form');
    }

    public
    function resetForm(): void {
        $this->options = PasswordGenerationRules::cases();
        $this->generation_rules = app(PasswordGenerationSettings::class)->generation_rule;
        $this->generated_password = UserServiceFacade::generatePassword(
            $this->fake_name,
            $this->fake_birth_date,
        );
    }

    public
    function save(): void {
        $this->validate();

        $this->updateData();

        SettingServiceFacade::setPasswordGenerationRules(
            ...
            $this->generation_rules,
        );

        LivewireBannerServiceFacade::from($this)
                                   ->success("Password generation rules changed successfully!");
        LivewireScrollServiceFacade::from($this)->scrollToTop();
    }

    /**
     * Apply realtime validation only to the changed property
     *
     * @param $propertyName
     *
     * @return void
     */
    public
    function updated(
        $propertyName,
    ): void {
        $this->validate();

        $this->updateData();
    }

    protected
    function rules(): array {
        return [
            "generation_rules"   => "required|array|min:1",
            "generation_rules.*" => ["string", Rule::in(PasswordGenerationRules::options())],
        ];
    }

    /**
     * Refresh the internal state of all the variables
     *
     * @return void
     */
    protected
    function updateData(): void {
        $this->generation_rules = Arr::map(
            $this->generation_rules,
            fn(string $value) => PasswordGenerationRules::from($value),
        );

        $this->options = Arr::map(
            $this->options,
            fn(string|PasswordGenerationRules $value) => $value instanceof PasswordGenerationRules ? $value
                : PasswordGenerationRules::from($value),
        );

        $this->generated_password = UserServiceFacade::generatePassword(
            $this->fake_name,
            $this->fake_birth_date,
            $this->generation_rules,
        );
    }
}
