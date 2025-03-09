<?php

namespace App\Filament\Imports;

use App\Models\ModuleCaa;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class ModuleCaaImporter extends Importer
{
    protected static ?string $model = ModuleCaa::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('module_caa')
                ->rules(['max:255']),
            ImportColumn::make('module_caa_name')
                ->rules(['max:255']),
            ImportColumn::make('module_baa_id')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('module_activity_type_id')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('is_active')
                ->boolean()
                ->rules(['boolean']),
            ImportColumn::make('created_by')
                ->rules(['max:255']),
            ImportColumn::make('updated_by')
                ->rules(['max:255']),
        ];
    }

    public function resolveRecord(): ?ModuleCaa
    {
        // return ModuleCaa::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new ModuleCaa();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your module caa import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
