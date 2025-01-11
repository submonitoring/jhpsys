<?php

namespace App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource;
use App\listpage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModuleAaaModuleBaas extends ListRecords
{
    protected static string $resource = ModuleAaaModuleBaaResource::class;

    use listpage;
}
