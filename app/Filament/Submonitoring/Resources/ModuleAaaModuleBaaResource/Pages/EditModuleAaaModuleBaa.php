<?php

namespace App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModuleAaaModuleBaa extends EditRecord
{
    protected static string $resource = ModuleAaaModuleBaaResource::class;

    use editpage;
}
