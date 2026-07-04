<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use App\Models\TeamGroup;

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
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('role_title'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                FileUpload::make('avatar')
                    ->image()
                    ->disk('public')
                    ->directory('team-members'),
                FileUpload::make('cover_image')
                    ->image()
                    ->disk('public')
                    ->directory('team-members'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
