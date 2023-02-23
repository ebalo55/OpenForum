<?php

namespace App\Filament\Resources\EventDayResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class ActivitiesRelationManager extends RelationManager {
    protected static ?string $recordTitleAttribute = 'title';
    protected static string $relationship = 'activities';

    public static
    function form(
        Form $form,
    ): Form {
        return $form
            ->columns(1)
            ->schema(
                [
                    Forms\Components\Wizard::make(
                        [
                            Forms\Components\Wizard\Step::make("Basic information")
                                                        ->description(
                                                            "Defines the basic information about this activity",
                                                        )
                                                        ->icon("isax-broken.info-circle")
                                                        ->schema(
                                                            [
                                                                Forms\Components\TextInput::make('title')
                                                                                          ->required()
                                                                                          ->maxLength(255)
                                                                                          ->columnSpanFull(),
                                                                Forms\Components\TimePicker::make('starting_at')
                                                                                           ->required()
                                                                                           ->before("ending_at"),
                                                                Forms\Components\TimePicker::make('ending_at')
                                                                                           ->required()
                                                                                           ->after("starting_at"),
                                                            ],
                                                        ),
                            Forms\Components\Wizard\Step::make("Settings")
                                                        ->description(
                                                            "Setup activity's restriction and functionalities",
                                                        )
                                                        ->icon("isax-broken.setting")
                                                        ->schema(
                                                            [
                                                                Forms\Components\TextInput::make('max_reservation')
                                                                                          ->integer()
                                                                                          ->minValue(0),
                                                            ],
                                                        ),
                            Forms\Components\Wizard\Step::make("Description")
                                                        ->description("Complete the activity creating its description")
                                                        ->icon("isax-broken.document-text-1")
                                                        ->schema(
                                                            [
                                                                Forms\Components\MarkdownEditor::make('markup')
                                                                                               ->required()
                                                                                               ->columnSpanFull()
                                                                                               ->enableToolbarButtons(),
                                                            ],
                                                        ),
                        ],
                    )
                                           ->columns()
                                           ->skippable(
                                               fn(string $context) => $context === "view" || $context === "edit",
                                           ),
                ],
            );
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
                    Tables\Columns\TextColumn::make('title'),
                    Tables\Columns\TextColumn::make('starting_at')
                                             ->time(),
                    Tables\Columns\TextColumn::make('ending_at')
                                             ->time(),
                    Tables\Columns\TextColumn::make('max_reservation')
                                             ->default(0),
                    Tables\Columns\TextColumn::make('reservations_count'),
                ],
            )
            ->filters(
                [
                    //
                ],
            )
            ->headerActions(
                [
                    Tables\Actions\CreateAction::make(),
                ],
            )
            ->actions(
                [
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ],
            )
            ->bulkActions(
                [
                    Tables\Actions\DeleteBulkAction::make(),
                ],
            );
    }
}
