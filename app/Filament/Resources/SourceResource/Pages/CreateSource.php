<?php

namespace App\Filament\Resources\SourceResource\Pages;

use App\Filament\Resources\SourceResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateSource extends CreateRecord
{
    public static $resource = SourceResource::class;

    public static $title = 'Create';

    protected function getRedirectUrl(Model $record): string
    {
        return $this->getResource()::generateUrl('index');
    }
}
