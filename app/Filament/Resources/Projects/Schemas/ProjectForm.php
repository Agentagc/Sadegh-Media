<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('team_member_id')
                    ->label('عضو تیم')
                    ->relationship('teamMember', 'full_name')
                    ->searchable()
                    ->preload(),
                TextInput::make('title')
                    ->label('عنوان')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('اسلاگ')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('short_description')
                    ->label('توضیح کوتاه')
                    ->maxLength(500),
                Textarea::make('description')
                    ->label('توضیحات')
                    ->rows(6)
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('تصویر پیش نمایش')
                    ->image()
                    ->directory('projects'),
                FileUpload::make('cover_image')
                    ->label('تصویر کاور')
                    ->image()
                    ->imageEditor()
                    ->directory('projects'),
                TextInput::make('project_url')
                    ->label('لینک پروژه')
                    ->url(),
                Toggle::make('is_featured')
                    ->label('نمایش در پروژه‌های ویژه')
                    ->default(false),
                DateTimePicker::make('published_at')
                    ->label('تاریخ انتشار'),
            ]);
    }
}
