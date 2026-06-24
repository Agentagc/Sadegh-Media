<?php

namespace App\Filament\Resources\TeamGroups\Pages;

use App\Filament\Resources\TeamGroups\TeamGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeamGroups extends ListRecords
{
    protected static string $resource = TeamGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
