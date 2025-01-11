<?php

namespace App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\Pages;

use App\createpage;
use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApplicationNameModuleAaa extends CreateRecord
{
    protected static string $resource = ApplicationNameModuleAaaResource::class;

    use createpage;
}
