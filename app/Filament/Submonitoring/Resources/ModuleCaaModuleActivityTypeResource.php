<?php

namespace App\Filament\Submonitoring\Resources;

use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\Pages;
use App\Filament\Submonitoring\Resources\ModuleCaaModuleActivityTypeResource\RelationManagers;
use App\Models\ModuleCaaModuleActivityType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModuleCaaModuleActivityTypeResource extends Resource
{
    protected static ?string $model = ModuleCaaModuleActivityType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('module_caa_id')
                    ->numeric(),
                Forms\Components\TextInput::make('module_activity_type_id')
                    ->numeric(),
                Forms\Components\Toggle::make('is_active'),
                Forms\Components\TextInput::make('created_by')
                    ->maxLength(255),
                Forms\Components\TextInput::make('updated_by')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('module_caa_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('module_activity_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_by')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_by')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModuleCaaModuleActivityTypes::route('/'),
            'create' => Pages\CreateModuleCaaModuleActivityType::route('/create'),
            'view' => Pages\ViewModuleCaaModuleActivityType::route('/{record}'),
            'edit' => Pages\EditModuleCaaModuleActivityType::route('/{record}/edit'),
        ];
    }
}
