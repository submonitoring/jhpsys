<?php

namespace App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource\Pages;

use App\createpage;
use App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateModuleAaaModuleBaa extends CreateRecord
{
    protected static string $resource = ModuleAaaModuleBaaResource::class;

    use createpage;
}
