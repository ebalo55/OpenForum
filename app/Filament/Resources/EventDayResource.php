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

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static
    function form(
        Form $form,
    ): Form {
        return $form
            ->schema(
                [
                    Forms\Components\TextInput::make('nickname')
                                              ->required()
                                              ->maxLength(255),
                    Forms\Components\DatePicker::make('date')
                                               ->minDate(now())
                                               ->required(),
                    Forms\Components\Textarea::make('location')
                                             ->required(),
                    Forms\Components\TextInput::make('max_reservation')
                                              ->integer()
                                              ->minValue(0),
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
            //
        ];
    }

    public static
    function table(
        Table $table,
    ): Table {
        return $table
            ->columns(
                [
                    Tables\Columns\TextColumn::make('prefixed_id'),
                    Tables\Columns\TextColumn::make('nickname'),
                    Tables\Columns\TextColumn::make('date')
                                             ->date(),
                    Tables\Columns\TextColumn::make('location'),
                    Tables\Columns\TextColumn::make('max_reservation'),
                    Tables\Columns\TextColumn::make('created_at')
                                             ->dateTime(),
                    Tables\Columns\TextColumn::make('updated_at')
                                             ->dateTime(),
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
                [
                    Tables\Actions\DeleteBulkAction::make(),
                ],
            );
    }
}
