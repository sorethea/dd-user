<?php

namespace Sorethea\DdUser\Filament\Resources;

use App\Models\User;
use Faker\Provider\Text;
use Filament\Forms\Components\BelongsToManyMultiSelect;
use Filament\Forms\Components\TextInput;
use Sorethea\DdUser\Filament\Resources\UserResource\Pages;
use Sorethea\DdUser\Filament\Resources\UserResource\RelationManagers;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static function getNavigationGroup(): ?string
    {
        return trans("dd-permission::permission.administrator");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")->required(),
                TextInput::make("email")->unique(fn($record)=>$record),
                TextInput::make("phone")->unique(fn($record)=>$record),
                BelongsToManyMultiSelect::make("roles")->relationship("roles","name"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("email")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("phone")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("roles_count")
                    ->label(trans("dd-permission::permission.roles"))->counts("roles"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
