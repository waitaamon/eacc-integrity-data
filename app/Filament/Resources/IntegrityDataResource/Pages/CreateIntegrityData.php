<?php

namespace App\Filament\Resources\IntegrityDataResource\Pages;

use App\Filament\Resources\IntegrityDataResource;
use Filament\Resources\Pages\CreateRecord;

class CreateIntegrityData extends CreateRecord
{
    public static $resource = IntegrityDataResource::class;

    public static $title = 'Create';
}
