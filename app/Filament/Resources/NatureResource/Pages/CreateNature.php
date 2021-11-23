<?php

namespace App\Filament\Resources\NatureResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NatureResource;

class CreateNature extends CreateRecord
{
    public static $resource = NatureResource::class;

    public static $title = 'Create';

    protected function getRedirectUrl(Model $record): string
    {
        return $this->getResource()::generateUrl('index');
    }
}
