<?php

namespace App\Filament\Resources\IntegrityDataResource\Pages;

use App\Filament\Resources\IntegrityDataResource;
use Filament\Resources\Pages\EditRecord;

class EditIntegrityData extends EditRecord
{
    public static $resource = IntegrityDataResource::class;

    public static $title = 'Edit';
}
