<?php

namespace App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\Pages;

use App\createpage;
use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateModuleCaaModuleActivityType extends CreateRecord
{
    protected static string $resource = ModuleCaaModuleActivityTypeResource::class;

    use createpage;
}
