<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstitutionResource\Pages;
use App\Filament\Resources\InstitutionResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class InstitutionResource extends Resource
{
    public static $icon = 'heroicon-o-library';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required()->unique('institutions', 'name', true),
                Components\TextInput::make('email')->nullable(),
                Components\TextInput::make('address')->label('Address')->nullable(),
                Components\TextInput::make('phone')->label('Phone number')->nullable(),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('name'),
                Columns\Text::make('email'),
                Columns\Text::make('address'),
                Columns\Text::make('phone'),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListInstitutions::routeTo('/', 'index'),
            Pages\CreateInstitution::routeTo('/create', 'create'),
            Pages\EditInstitution::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
