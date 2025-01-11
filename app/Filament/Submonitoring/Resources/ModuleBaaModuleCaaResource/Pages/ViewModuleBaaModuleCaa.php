<?php

namespace App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource\Pages;

use App\Filament\Submonitoring\Resources\ModuleBaaModuleCaaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewModuleBaaModuleCaa extends ViewRecord
{
    protected static string $resource = ModuleBaaModuleCaaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
