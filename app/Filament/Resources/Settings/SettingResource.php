<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\Pages\CreateSetting;
use App\Filament\Resources\Settings\Pages\EditSetting;
use App\Filament\Resources\Settings\Pages\ListSettings;
use App\Filament\Resources\Settings\Schemas\SettingForm;
use App\Filament\Resources\Settings\Tables\SettingsTable;
use App\Models\Setting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;



class SettingResource extends Resource
{
    protected const SYSTEM_KEYS = [
        'site_title',
        'hero_title',
        'hero_description',
        'hero_button_text',
        'hero_button_url',
        'hero_video',
        'about_text',
    ];

    public static function isSystemSetting(?string $key): bool
    {
        return in_array($key, self::SYSTEM_KEYS, true);
    }

    protected static ?string $model = Setting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'key';

    protected static ?string $navigationLabel = 'تنظیمات';

    protected static ?string $pluralModelLabel = 'تنظیمات';

    protected static ?string $modelLabel = 'تنظیم';

    protected static string|null|\UnitEnum $navigationGroup = 'مدیریت محتوا';

    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return SettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettingsTable::configure($table);
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
            'index' => ListSettings::route('/'),
            'create' => CreateSetting::route('/create'),
            'edit' => EditSetting::route('/{record}/edit'),
        ];
    }
}
