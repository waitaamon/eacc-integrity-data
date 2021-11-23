<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NatureResource\Pages;
use App\Filament\Resources\NatureResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Nature;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class NatureResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static $model = Nature::class;

    public static $label = 'nature of integrity issue';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('title')
                    ->autofocus()
                    ->required()
                    ->unique('natures', 'title', true),
                Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('title')->primary(),
                Columns\Text::make('created_at'),
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
            Pages\ListNatures::routeTo('/', 'index'),
            Pages\CreateNature::routeTo('/create', 'create'),
            Pages\EditNature::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
