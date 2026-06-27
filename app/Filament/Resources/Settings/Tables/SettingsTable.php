<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->label('کلید')
                    ->searchable(),
                TextColumn::make('value')
                    ->label('مقدار')
                    ->limit(40),
                TextColumn::make('type')
                    ->label('نوع')
                    ->badge(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),

                DeleteAction::make()
                    ->visible(fn($record) => !\App\Filament\Resources\Settings\SettingResource::isSystemSetting($record->key)
                    ),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->before(function ($records) {
                        if ($records->contains(
                            fn($record) => \App\Filament\Resources\Settings\SettingResource::isSystemSetting($record->key)
                        )) {
                            throw new \Exception('امکان حذف تنظیمات سیستمی وجود ندارد.');
                        }
                    }),
            ]);
    }
}
