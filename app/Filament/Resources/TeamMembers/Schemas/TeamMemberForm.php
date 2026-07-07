<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('کاربر')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload(),
                Select::make('team_group_id')
                    ->label('گروه')
                    ->relationship('teamGroup', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('full_name')
                    ->label('نام کامل')
                    ->required(),
                TextInput::make('slug')
                    ->label('اسلاگ')
                    ->required(),
                TextInput::make('role_title')
                    ->label('عنوان نقش اصلی'),
                Textarea::make('bio')
                    ->label('بیوگرافی')
                    ->columnSpanFull(),
                FileUpload::make('avatar')
                    ->label('تصویر پروفایل')
                    ->image()
                    ->disk('public')
                    ->directory('team-members'),
                FileUpload::make('cover_image')
                    ->label('تصویر کاور')
                    ->image()
                    ->disk('public')
                    ->directory('team-members'),
                Toggle::make('is_active')
                    ->label('فعال')
                    ->required(),

                // --- Roles ---
                // عنوان‌هایی که در انیمیشن چرخشی کنار اسم نمایش داده می‌شن
                // مثلاً: "توسعه‌دهنده"، "طراح"، "نویسنده"
                Repeater::make('roles')
                    ->label('نقش‌ها (انیمیشن)')
                    ->relationship('roles')
                    ->schema([
                        TextInput::make('title')
                            ->label('عنوان')
                            ->required(),
                        TextInput::make('sort_order')
                            ->label('ترتیب')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull()
                    ->defaultItems(0),

                // --- Abilities ---
                // progress bar ها — عنوان + درصد
                Repeater::make('abilities')
                    ->label('توانایی‌ها (Progress Bar)')
                    ->relationship('abilities')
                    ->schema([
                        TextInput::make('title')
                            ->label('عنوان')
                            ->required(),
                        TextInput::make('percentage')
                            ->label('درصد')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->step(1)
                            ->suffix('٪')
                            ->required(),
                        TextInput::make('sort_order')
                            ->label('ترتیب')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull()
                    ->defaultItems(0),

                // --- Skills ---
                // skill card ها — آیکون + درصد + نام
                Repeater::make('skills')
                    ->label('مهارت‌ها (Skill Cards)')
                    ->relationship('skills')
                    ->schema([
                        TextInput::make('title')
                            ->label('عنوان')
                            ->required(),
                        FileUpload::make('icon')
                            ->label('آیکون/تصویر')
                            ->image()
                            ->disk('public')
                            ->directory('member-skills'),
                        TextInput::make('percentage')
                            ->label('درصد')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->step(1)
                            ->suffix('%')
                            ->required(),
                        TextInput::make('sort_order')
                            ->label('ترتیب')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull()
                    ->defaultItems(0),
            ]);
    }
}
