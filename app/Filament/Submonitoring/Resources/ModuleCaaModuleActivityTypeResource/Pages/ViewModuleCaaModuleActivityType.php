<?php

namespace App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewModuleCaaModuleActivityType extends ViewRecord
{
    protected static string $resource = ModuleCaaModuleActivityTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
