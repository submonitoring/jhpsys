<?php

namespace App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleAaaModuleBaaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewModuleAaaModuleBaa extends ViewRecord
{
    protected static string $resource = ModuleAaaModuleBaaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
