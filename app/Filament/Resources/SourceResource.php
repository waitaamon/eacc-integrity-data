<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SourceResource\Pages;
use App\Filament\Resources\SourceResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Source;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class SourceResource extends Resource
{
    public static $icon = 'heroicon-o-database';

    public static $model = Source::class;

    public static $label = 'source of information';

    public static $title = 'Source of information';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('title')
                    ->autofocus()
                    ->required()
                    ->unique('sources', 'title', true),
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
            Pages\ListSources::routeTo('/', 'index'),
            Pages\CreateSource::routeTo('/create', 'create'),
            Pages\EditSource::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
