<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('teamMember.full_name')
                    ->label('عضو تیم')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->label('عنوان')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('اسلاگ')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('short_description')
                    ->label('توضیح کوتاه')
                    ->limit(40)
                    ->searchable(),
                ImageColumn::make('thumbnail')
                    ->label('تصویر')
                    ->square(),
                ImageColumn::make('cover_image')
                    ->label('کاور'),
                IconColumn::make('is_featured')
                    ->label('ویژه')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->label('انتشار')
                    ->dateTime()
                    ->sortable(),
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
