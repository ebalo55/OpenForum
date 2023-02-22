<?php

namespace App\Filament\Pages;

use App\Facade\SettingServiceFacade;
use App\Settings\GeneralSettings;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\SettingsPage;
use Symfony\Component\HttpFoundation\Response;

class GeneralSettingsManager extends SettingsPage {
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'isax-broken.global';
    protected static ?int $navigationSort = 0;
    protected static string $settings = GeneralSettings::class;
    protected static ?string $title = "General settings";

    /**
     * Create the form for the safe to edit properties
     *
     * @return array
     */
    protected
    function getFormSchema(): array {
        return [
            Card::make(
                [
                    Section::make("General settings")
                           ->description(view("components.fragments.sections.descriptions.general-settings"))
                           ->aside()
                           ->schema(
                               [
                                   TextInput::make("site_name")
                                            ->required(),
                                   TextInput::make("front_end_domain")
                                       // domain regex accepts only domain names
                                            ->regex(
                                           "/(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/",
                                       )
                                            ->required(),
                                   DateTimePicker::make("registration_enabled_from")
                                                 ->label("Registration starting date")
                                                 ->minDate(now())
                                                 ->default(now()->addHours())
                                                 ->before(fn(Closure $get) => $get("registration_enabled_to"))
                                                 ->required()
                                                 ->dehydrateStateUsing(
                                                     fn(
                                                         string $state,
                                                     ) => SettingServiceFacade::dehydrateCastingToCarbon($state),
                                                 ),
                                   DateTimePicker::make("registration_enabled_to")
                                                 ->label("Registration ending date")
                                                 ->minDate(now())
                                                 ->default(now()->addDays())
                                                 ->after(fn(Closure $get) => $get("registration_enabled_from"))
                                                 ->required()
                                                 ->dehydrateStateUsing(
                                                     fn(
                                                         string $state,
                                                     ) => SettingServiceFacade::dehydrateCastingToCarbon($state),
                                                 ),
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
                           ->body("General settings successfully updated!")
                           ->icon("heroicon-o-check-circle");
    }

    public
    function mount(): void {
        abort_unless(
            auth()->user()->canManageGeneralSettings(),
            Response::HTTP_FORBIDDEN,
        );

        $this->form->fill(
            [
                "site_name"                 => app(GeneralSettings::class)->site_name,
                "front_end_domain"          => app(GeneralSettings::class)->front_end_domain,
                "registration_enabled_from" => app(GeneralSettings::class)->registration_enabled_from,
                "registration_enabled_to"   => app(GeneralSettings::class)->registration_enabled_to,
            ],
        );
    }

    protected static
    function shouldRegisterNavigation(): bool {
        return auth()->user()->canManageGeneralSettings();
    }
}
