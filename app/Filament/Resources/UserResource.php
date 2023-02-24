<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class UserResource extends Resource {
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'isax-broken.layer';

    public static
    function form(
        Form $form,
    ): Form {
        return $form
            ->schema(
                [
                    Forms\Components\TextInput::make('name')
                                              ->required()
                                              ->maxLength(255)
                                              ->hiddenOn("create"),
                    Forms\Components\TextInput::make('email')
                                              ->email()
                                              ->required()
                                              ->maxLength(255)
                                              ->hiddenOn("create"),
                    Forms\Components\DateTimePicker::make('email_verified_at')
                                                   ->hiddenOn("create"),
                ],
            );
    }

    public static
    function getPages(): array {
        return [
            'index'  => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view'   => Pages\ViewUser::route('/{record}'),
            'edit'   => Pages\EditUser::route('/{record}/edit'),
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
                    Tables\Columns\TextColumn::make('prefixed_id')
                                             ->limit(20),
                    Tables\Columns\TextColumn::make('name'),
                    Tables\Columns\TextColumn::make('email'),
                    Tables\Columns\IconColumn::make('email_verified_at')
                                             ->label("Has verified email")
                                             ->options(
                                                 [
                                                     "isax-broken.tick-circle" => fn($state) => !is_null($state),
                                                     "isax-broken.slash"       => fn($state) => is_null($state),
                                                 ],
                                             )
                                             ->colors(
                                                 [
                                                     "success" => fn($state) => !is_null($state),
                                                     "danger"  => fn($state) => is_null($state),
                                                 ],
                                             )
                                             ->alignCenter()
                                             ->extraAttributes(['class' => 'flex justify-center']),
                    Tables\Columns\TextColumn::make('reservations_count'),
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
            ->bulkActions([]);
    }
}
