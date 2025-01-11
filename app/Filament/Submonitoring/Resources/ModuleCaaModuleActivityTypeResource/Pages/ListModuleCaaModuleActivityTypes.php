<?php

namespace App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource;
use App\listpage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModuleCaaModuleActivityTypes extends ListRecords
{
    protected static string $resource = ModuleCaaModuleActivityTypeResource::class;

    use listpage;
}
