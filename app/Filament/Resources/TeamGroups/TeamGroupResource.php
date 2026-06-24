<?php

namespace App\Filament\Resources\TeamGroups;

use App\Filament\Resources\TeamGroups\Pages\CreateTeamGroup;
use App\Filament\Resources\TeamGroups\Pages\EditTeamGroup;
use App\Filament\Resources\TeamGroups\Pages\ListTeamGroups;
use App\Filament\Resources\TeamGroups\Schemas\TeamGroupForm;
use App\Filament\Resources\TeamGroups\Tables\TeamGroupsTable;
use App\Models\TeamGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamGroupResource extends Resource
{
    protected static ?string $model = TeamGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'گروه‌های تیم';

    protected static ?string $pluralModelLabel = 'گروه‌های تیم';

    protected static ?string $modelLabel = 'گروه تیم';

    protected static string|null|\UnitEnum $navigationGroup = 'مدیریت محتوا';

    public static function form(Schema $schema): Schema
    {
        return TeamGroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamGroupsTable::configure($table);
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
            'index' => ListTeamGroups::route('/'),
            'create' => CreateTeamGroup::route('/create'),
            'edit' => EditTeamGroup::route('/{record}/edit'),
        ];
    }
}
