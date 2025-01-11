<?php

namespace App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource;
use App\listpage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModuleBaaModuleCaas extends ListRecords
{
    protected static string $resource = ModuleBaaModuleCaaResource::class;

    use listpage;
}
