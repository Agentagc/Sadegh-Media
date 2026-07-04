<?php

namespace App\Filament\Resources\Settings\Schemas;

use App\Enums\SettingType;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('کلید')
                    ->required()
                    ->disabled(fn (?string $operation) => $operation === 'edit'),

                Select::make('type')
                    ->label('نوع')
                    ->options(SettingType::options())
                    ->default(SettingType::Text->value)
                    ->required()
                    ->native(false)
                    ->live()
                    ->afterStateUpdated(function (Select $component) {

                        $component
                            ->getContainer()
                            ->getComponent('dynamicValueField')
                            ->getChildComponentContainer()
                            ->fill();
                    }),

                Section::make('مقدار')
                    ->key('dynamicValueField')
                    ->afterHeader([
                        Text::make(new HtmlString(Blade::render(
                            '<x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="data.type" />'
                        ))),
                    ])
                    ->schema(fn (Get $get): array => match (SettingType::tryFrom($get('type'))) {

                        SettingType::Text => [
                            TextInput::make('value')
                                ->label('مقدار')
                                ->required(),
                        ],

                        SettingType::Textarea => [
                            Textarea::make('value')
                                ->label('مقدار')
                                ->rows(6),
                        ],

                        SettingType::RichText => [
                            RichEditor::make('value')
                                ->label('مقدار'),
                        ],

                        SettingType::Number => [
                            TextInput::make('value')
                                ->label('مقدار')
                                ->numeric(),
                        ],

                        SettingType::Boolean => [
                            Toggle::make('value')
                                ->label('فعال'),
                        ],

                        SettingType::Email => [
                            TextInput::make('value')
                                ->label('ایمیل')
                                ->email(),
                        ],

                        SettingType::Url => [
                            TextInput::make('value')
                                ->label('آدرس')
                                ->url(),
                        ],

                        SettingType::Phone => [
                            TextInput::make('value')
                                ->label('شماره')
                                ->tel(),
                        ],

                        SettingType::Color => [
                            ColorPicker::make('value')
                                ->label('رنگ'),
                        ],

                        SettingType::Image => [
                            FileUpload::make('value')
                                ->label('تصویر')
                                ->disk('public')  // 👈 ezafe kon
                                ->image(),
                        ],

                        SettingType::Video => [
                            FileUpload::make('value')
                                ->label('ویدیو')
                                ->disk('public')  // 👈 ezafe kon
                                ->acceptedFileTypes([
                                    'video/mp4',
                                    'video/webm',
                                    'video/quicktime',
                                ]),
                        ],

                        SettingType::File => [
                            FileUpload::make('value')
                                ->label('فایل')
                                ->disk('public'),  // 👈 ezafe kon
                        ],

                        SettingType::Icon => [
                            TextInput::make('value')
                                ->label('Heroicon Name'),
                        ],

                        SettingType::Json => [
                            Textarea::make('value')
                                ->label('JSON')
                                ->rows(10),
                        ],

                        default => [],
                    }),
            ]);
    }
}
