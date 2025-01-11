<?php

namespace App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\Pages;

use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewApplicationNameModuleAaa extends ViewRecord
{
    protected static string $resource = ApplicationNameModuleAaaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
