<?php

namespace App\Filament\Resources\InstitutionResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\InstitutionResource;

class EditInstitution extends EditRecord
{
    public static $resource = InstitutionResource::class;

    protected function getRedirectUrl(Model $record): string
    {
        return $this->getResource()::generateUrl('index');
    }

}
