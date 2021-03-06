<?php

namespace App\Filament\Resources\InstitutionResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\InstitutionResource;

class CreateInstitution extends CreateRecord
{
    public static $resource = InstitutionResource::class;

    protected function getRedirectUrl(Model $record): string
    {
        return $this->getResource()::generateUrl('index');
    }
}
