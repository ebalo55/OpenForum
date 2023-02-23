<?php

namespace App\Filament\Resources\EventDayResource\Pages;

use App\Filament\Pages\CriticalSettingsManager;
use App\Filament\Resources\EventDayResource;
use App\Models\EventDay;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;

class ListEventDays extends ListRecords {
    protected static string $resource = EventDayResource::class;

    protected
    function getActions(): array {
        return [
            Actions\Action::make("reset_all")
                          ->label("Reset all events")
                          ->color("danger")
                          ->icon("isax-broken.danger")
                          ->action(fn() => $this->resetAllActionHandler())
                          ->visible(fn() => auth()->user()->canReset())
                          ->requiresConfirmation()
                          ->modalSubheading("Are you sure you want to reset all the events?")
                          ->modalContent(view("components.fragments.modals.confirmation.reset-events"))
                          ->modalButton("Yes, reset everything"),
        ];
    }

    protected
    function getTableEmptyStateActions(): array {
        return [
            Action::make("navigate_to_critical_settings")
                  ->label("Define event day range")
                  ->url(CriticalSettingsManager::getUrl())
                  ->button(),
        ];
    }

    protected
    function getTableEmptyStateDescription(): ?string {
        return "Create some events defining the event day range using the button below.";
    }

    protected
    function getTableEmptyStateHeading(): ?string {
        return "No event have been found";
    }

    protected
    function getTableEmptyStateIcon(): ?string {
        return "isax-broken.warning-2";
    }

    /**
     * Handler of the reset all action
     *
     * @return void
     */
    private
    function resetAllActionHandler(): void {
        EventDay::query()->delete();

        Notification::make()
                    ->title("Reset confirmed")
                    ->body("All events and related date have been successfully reset.")
                    ->success()
                    ->send()
                    ->sendToDatabase(auth()->user());
    }

    protected
    function getTableQuery(): Builder {
        return EventDay::withCount(["reservations", "activities"])->orderBy("date");
    }

    public
    function hasCombinedRelationManagerTabsWithForm(): bool {
        return true;
    }
}
