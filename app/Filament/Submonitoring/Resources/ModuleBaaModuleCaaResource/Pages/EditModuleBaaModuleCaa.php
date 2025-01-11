<?php

namespace App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModuleBaaModuleCaa extends EditRecord
{
    protected static string $resource = ModuleBaaModuleCaaResource::class;

    use editpage;
}
