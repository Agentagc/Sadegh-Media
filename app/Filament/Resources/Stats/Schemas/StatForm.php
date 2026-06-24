<?php

namespace App\Filament\Resources\Stats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('کلید')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('مثال: completed_projects'),
                TextInput::make('title')
                    ->label('عنوان')
                    ->required(),
                TextInput::make('value')
                    ->label('مقدار')
                    ->required(),
                TextInput::make('icon')
                    ->label('آیکون'),
            ]);
    }
}
