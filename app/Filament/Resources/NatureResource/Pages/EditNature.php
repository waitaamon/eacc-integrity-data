<?php

namespace App\Filament\Resources\NatureResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NatureResource;

class EditNature extends EditRecord
{
    public static $resource = NatureResource::class;

    public static $title = 'Edit';

    protected function getRedirectUrl(Model $record): string
    {
        return $this->getResource()::generateUrl('index');
    }
}
