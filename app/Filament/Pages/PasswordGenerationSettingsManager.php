<?php

namespace App\Filament\Pages;

use App\Enum\DatetimeFormatVariation;
use App\Enum\PasswordGenerationRules;
use App\Facade\UserServiceFacade;
use App\Settings\PasswordGenerationSettings;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\Response;

class PasswordGenerationSettingsManager extends SettingsPage {

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'isax-broken.security-user';
    protected static ?int $navigationSort = 2;

    protected static string $settings = PasswordGenerationSettings::class;

    protected static ?string $title = "Password generation settings";

    protected
    function getFormSchema(): array {
        return [
            Card::make(
                [
                    Section::make("Password generation rules")
                           ->description(
                               fn(Closure $get) => view(
                                   "components.fragments.sections.descriptions.password-generation-settings",
                                   [
                                       "fake_name"          => $fake_name = fake()->name,
                                       "fake_dob"           => $fake_dob = fake()->date(
                                           config("open-forum.date_format"),
                                       ),
                                       "generated_password" => UserServiceFacade::generatePassword(
                                           $fake_name,
                                           make_from_format(
                                               $fake_dob,
                                               DatetimeFormatVariation::DATE,
                                           ),
                                           // this gets the values from the repeater
                                           array_values($get("generation_rule")),
                                       ),
                                   ],
                               ),
                           )
                           ->aside()
                           ->schema(
                               [
                                   Repeater::make("generation_rule")
                                           ->required()
                                           ->minItems(1)
                                           ->defaultItems(3)
                                           ->schema(
                                               [
                                                   Select::make("rule")
                                                         ->required()
                                                         ->placeholder("Rule")
                                                         ->disablePlaceholderSelection()
                                                         ->default(PasswordGenerationRules::FIRST_NAME())
                                                         ->options(
                                                             Arr::collapse(
                                                                 Arr::map(
                                                                     PasswordGenerationRules::cases(),
                                                                     fn(PasswordGenerationRules $rule) => [
                                                                         $rule->value => ucfirst(
                                                                             Arr::join(
                                                                                 explode(
                                                                                     "_",
                                                                                     $rule->value,
                                                                                 ),
                                                                                 " ",
                                                                             ),
                                                                         ),
                                                                     ],
                                                                 ),
                                                             ),
                                                         ),
                                               ],
                                           )
                                           ->orderable()
                                           ->grid(),
                               ],
                           ),
                ],
            ),
        ];
    }

    protected
    function getSavedNotification(): ?Notification {
        return Notification::make()
                           ->success()
                           ->title("Settings updated")
                           ->body("Password generation rules successfully updated!")
                           ->icon("isax-broken.tick-circle");
    }

    public
    function mount(): void {
        abort_unless(
            auth()->user()->canManagePasswordGenerationSettings(),
            Response::HTTP_FORBIDDEN,
        );

        $this->form->fill(
            [
                "generation_rule" => app(PasswordGenerationSettings::class)->generation_rule,
            ],
        );
    }


    protected static
    function shouldRegisterNavigation(): bool {
        return auth()->user()->canManagePasswordGenerationSettings();
    }
}
