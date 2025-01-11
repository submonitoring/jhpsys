<?php

namespace App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModuleCaaModuleActivityType extends EditRecord
{
    protected static string $resource = ModuleCaaModuleActivityTypeResource::class;

    use editpage;
}
