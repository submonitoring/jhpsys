<?php

namespace App\Filament\Submonitoring\Resources;

use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\Pages;
use App\Filament\Submonitoring\Resources\ApplicationNameModuleAaaResource\RelationManagers;
use App\Models\ApplicationNameModuleAaa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationNameModuleAaaResource extends Resource
{
    protected static ?string $model = ApplicationNameModuleAaa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('application_name_id')
                    ->numeric(),
                Forms\Components\TextInput::make('module_aaa_id')
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
                Tables\Columns\TextColumn::make('application_name_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('module_aaa_id')
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
            'index' => Pages\ListApplicationNameModuleAaas::route('/'),
            'create' => Pages\CreateApplicationNameModuleAaa::route('/create'),
            'view' => Pages\ViewApplicationNameModuleAaa::route('/{record}'),
            'edit' => Pages\EditApplicationNameModuleAaa::route('/{record}/edit'),
        ];
    }
}
