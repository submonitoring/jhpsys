<?php

namespace App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\Pages;

use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource;
use App\listpage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApplicationNameModuleAaas extends ListRecords
{
    protected static string $resource = ApplicationNameModuleAaaResource::class;

    use listpage;
}
