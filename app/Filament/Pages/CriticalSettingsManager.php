<?php

namespace App\Filament\Pages;

use App\Facade\EventDayServiceFacade;
use App\Facade\SettingServiceFacade;
use App\Settings\GeneralSettings;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\Action;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class CriticalSettingsManager extends SettingsPage {
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'isax-broken.danger';
    protected static ?int $navigationSort = 1;
    protected static string $settings = GeneralSettings::class;
    protected static ?string $title = "Critical settings";

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
                    Section::make("Critical settings")
                           ->description(view("components.fragments.sections.descriptions.critical-settings"))
                           ->aside()
                           ->schema(
                               [
                                   DatePicker::make("events_starting_day")
                                             ->label("Event starting date")
                                             ->minDate(now())
                                             ->default(now()->addDays())
                                             ->before(fn(Closure $get) => $get("events_ending_day"))
                                             ->required()
                                             ->dehydrateStateUsing(
                                                 fn(
                                                     string $state,
                                                 ) => SettingServiceFacade::dehydrateCastingToCarbon($state),
                                             )
                                             ->placeholder("21-01-2023"),
                                   DatePicker::make("events_ending_day")
                                             ->label("Event ending date")
                                             ->minDate(now())
                                             ->default(now()->addDays(2))
                                             ->after(fn(Closure $get) => $get("events_starting_day"))
                                             ->required()
                                             ->dehydrateStateUsing(
                                                 fn(
                                                     string $state,
                                                 ) => SettingServiceFacade::dehydrateCastingToCarbon($state),
                                             )
                                             ->placeholder("23-01-2023"),
                                   Repeater::make("event_locations")
                                           ->schema(
                                               [
                                                   TextInput::make("location")
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->placeholder(fake()->city()),
                                               ],
                                           )
                                           ->required()
                                           ->minItems(1)
                                           ->defaultItems(1)
                                           ->disableItemMovement()
                                           ->cloneable()
                                           ->createItemButtonLabel("Add new location"),
                               ],
                           ),
                ],
            ),
        ];
    }

    protected
    function getSaveFormAction(): Action {
        return Action::make('save')
                     ->label("Save settings")
                     ->action(fn() => $this->save())
                     ->requiresConfirmation()
                     ->modalButton("Save these settings")
                     ->modalHeading("Save settings")
                     ->modalSubheading("Are you sure to save these settings?")
                     ->modalContent(view("components.fragments.modals.confirmation.critical-settings"));
    }

    protected
    function getSavedNotification(): ?Notification {
        return Notification::make()
                           ->success()
                           ->title("Settings updated")
                           ->body("Critical settings successfully updated!")
                           ->icon("heroicon-o-check-circle");
    }

    public
    function mount(): void {
        abort_unless(
            auth()->user()->canManageCriticalSettings(),
            Response::HTTP_FORBIDDEN,
        );

        $this->form->fill(
            [
                "events_starting_day" => app(GeneralSettings::class)->events_starting_day,
                "events_ending_day"   => app(GeneralSettings::class)->events_ending_day,
                "event_locations"     => app(GeneralSettings::class)->event_locations,
            ],
        );
    }

    /**
     * Pack the standard save method with the synchronization features of the event service
     *
     * @return void
     * @throws Throwable
     */
    public
    function save(): void {
        DB::transaction(
            function() {
                parent::save();

                EventDayServiceFacade::sync();
            },
        );
    }

    protected static
    function shouldRegisterNavigation(): bool {
        return auth()->user()->canManageCriticalSettings();
    }
}
