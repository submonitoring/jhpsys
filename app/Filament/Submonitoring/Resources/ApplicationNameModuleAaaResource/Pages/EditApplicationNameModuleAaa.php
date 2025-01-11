<?php

namespace App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApplicationNameModuleAaa extends EditRecord
{
    protected static string $resource = ApplicationNameModuleAaaResource::class;

    use editpage;
}
