<?php

namespace App\Filament\Submonitoring\Resources;

use App\Filament\Submonitoring\Resources\ModuleActivityTypeResource\Pages;
use App\Filament\Submonitoring\Resources\ModuleActivityTypeResource\RelationManagers;
use App\Models\ModuleActivityType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModuleActivityTypeResource extends Resource
{
    protected static ?string $model = ModuleActivityType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('module_activity_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('module_activity_type_name')
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('module_activity_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('module_activity_type_name')
                    ->searchable(),
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
            'index' => Pages\ListModuleActivityTypes::route('/'),
            'create' => Pages\CreateModuleActivityType::route('/create'),
            'view' => Pages\ViewModuleActivityType::route('/{record}'),
            'edit' => Pages\EditModuleActivityType::route('/{record}/edit'),
        ];
    }
}
