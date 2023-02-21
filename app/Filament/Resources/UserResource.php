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

	protected static ?string $navigationIcon = 'heroicon-o-collection';

	public static
	function form(
		Form $form,
	): Form {
		return $form
			->schema(
				[
					Forms\Components\TextInput::make('prefixed_id')
					                          ->maxLength(255),
					Forms\Components\TextInput::make('name')
					                          ->required()
					                          ->maxLength(255),
					Forms\Components\TextInput::make('email')
					                          ->email()
					                          ->maxLength(255),
					Forms\Components\DateTimePicker::make('email_verified_at'),
					Forms\Components\TextInput::make('password')
					                          ->password()
					                          ->required()
					                          ->maxLength(255),
					Forms\Components\TextInput::make('current_team_id'),
					Forms\Components\TextInput::make('profile_photo_path')
					                          ->maxLength(2048),
					Forms\Components\Textarea::make('two_factor_secret'),
					Forms\Components\Textarea::make('two_factor_recovery_codes'),
					Forms\Components\DateTimePicker::make('two_factor_confirmed_at'),
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
					Tables\Columns\TextColumn::make('prefixed_id'),
					Tables\Columns\TextColumn::make('name'),
					Tables\Columns\TextColumn::make('email'),
					Tables\Columns\TextColumn::make('email_verified_at')
					                         ->dateTime(),
					Tables\Columns\TextColumn::make('current_team_id'),
					Tables\Columns\TextColumn::make('profile_photo_path'),
					Tables\Columns\TextColumn::make('created_at')
					                         ->dateTime(),
					Tables\Columns\TextColumn::make('updated_at')
					                         ->dateTime(),
					Tables\Columns\TextColumn::make('two_factor_secret'),
					Tables\Columns\TextColumn::make('two_factor_recovery_codes'),
					Tables\Columns\TextColumn::make('two_factor_confirmed_at')
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
