<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventDayResource\Pages;
use App\Filament\Resources\EventDayResource\RelationManagers;
use App\Models\EventDay;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class EventDayResource extends Resource {
    protected static ?string $model = EventDay::class;

    protected static ?string $navigationIcon = 'isax-broken.layer';

    public static
    function form(
        Form $form,
    ): Form {
        return $form
            ->schema(
                [
                    Forms\Components\Card::make(
                        [
                            Forms\Components\TextInput::make('nickname')
                                                      ->required()
                                                      ->maxLength(255),
                            Forms\Components\TextInput::make('max_reservation')
                                                      ->integer()
                                                      ->minValue(0),
                        ],
                    ),

                ],
            );
    }

    public static
    function getPages(): array {
        return [
            'index'  => Pages\ListEventDays::route('/'),
            'create' => Pages\CreateEventDay::route('/create'),
            'view'   => Pages\ViewEventDay::route('/{record}'),
            'edit'   => Pages\EditEventDay::route('/{record}/edit'),
        ];
    }

    public static
    function getRelations(): array {
        return [
            RelationManagers\ActivitiesRelationManager::class,
        ];
    }

    public static
    function table(
        Table $table,
    ): Table {
        return $table
            ->columns(
                [
                    Tables\Columns\TextColumn::make('prefixed_id')
                                             ->limit(20),
                    Tables\Columns\TextColumn::make('nickname')
                                             ->searchable(),
                    Tables\Columns\TextColumn::make('date')
                                             ->date()
                                             ->sortable()
                                             ->searchable(),
                    Tables\Columns\TextColumn::make('location')
                                             ->searchable(),
                    Tables\Columns\TextColumn::make('activities_count')
                                             ->label("Activities")
                                             ->sortable(),
                    Tables\Columns\TextColumn::make('max_reservation')
                                             ->default(0)
                                             ->sortable(),
                    Tables\Columns\TextColumn::make('reservations_count')
                                             ->label("Reservations")
                                             ->sortable(),
                ],
            )
            ->filters(
                [
                    //
                ],
            )
            ->actions(
                [
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ],
            )
            ->bulkActions(
                [],
            );
    }
}
