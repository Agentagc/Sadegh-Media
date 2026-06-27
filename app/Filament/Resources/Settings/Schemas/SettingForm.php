<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;




class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('کلید')
                    ->required()
                    ->disabled(fn(?string $operation) => $operation === 'edit'),
                Select::make('type')
                    ->label('نوع')
                    ->options([
                        'text' => 'متن کوتاه',
                        'textarea' => 'متن بلند',
                        'rich_text' => 'ویرایشگر پیشرفته',
                        'number' => 'عدد',
                        'boolean' => 'بله / خیر',
                        'email' => 'ایمیل',
                        'url' => 'لینک',
                        'phone' => 'شماره تلفن',
                        'image' => 'تصویر',
                        'video' => 'ویدیو',
                        'file' => 'فایل',
                        'icon' => 'آیکون',
                        'color' => 'رنگ',
                        'json' => 'داده JSON',
                    ])
                    ->default('text')
                    ->required()
                    ->native(false),
                Textarea::make('value')
                    ->label('مقدار')
                    ->rows(6)
                    ->columnSpanFull(),
            ]);
    }
}
