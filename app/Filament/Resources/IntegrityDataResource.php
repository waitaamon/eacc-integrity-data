<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntegrityDataResource\Pages;
use App\Filament\Resources\IntegrityDataResource\RelationManagers;
use App\Filament\Roles;
use App\Models\IntegrityData;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class IntegrityDataResource extends Resource
{
    public static $icon = 'heroicon-o-scale';

    public static $model = IntegrityData::class;

    public static $label = 'Integrity Data';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->label('Officer name')->autofocus()->required(),

                Components\TextInput::make('id_number')->label('Officer ID Number')->required(),

                Components\Select::make('category')
                    ->label('Category of officer')
                    ->options(IntegrityData::OFFICER_CATEGORIES)
                    ->required(),

                Components\BelongsToSelect::make('institution_id')
                    ->relationship('institution', 'name')
                    ->label('Institution')
                    ->required(),

                Components\BelongsToSelect::make('nature_id')
                    ->relationship('nature', 'title')
                    ->label('Nature of integrity issue')
                    ->required(),

                Components\Textarea::make('description')->label('Integrity issue description')->required(),

                Components\BelongsToSelect::make('source_id')
                    ->relationship('source', 'title')
                    ->label('Source of integrity issue')
                    ->required(),

                Components\DatePicker::make('date')->label('Date')->required(),

            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('name'),
                Columns\Text::make('id_number'),
                Columns\Text::make('institution.name'),
                Columns\Text::make('category'),
                Columns\Text::make('date'),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations(): array
    {
        return [
            //
        ];
    }

    public static function routes(): array
    {
        return [
            Pages\ListIntegrityData::routeTo('/', 'index'),
            Pages\CreateIntegrityData::routeTo('/create', 'create'),
            Pages\EditIntegrityData::routeTo('/{record}/edit', 'edit'),
        ];
    }

    public static function authorization(): array
    {
        return [
            Roles\Officer::allow(),
        ];
    }
}
