<?php

namespace App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource\Pages;

use App\createpage;
use App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateModuleBaaModuleCaa extends CreateRecord
{
    protected static string $resource = ModuleBaaModuleCaaResource::class;

    use createpage;
}
