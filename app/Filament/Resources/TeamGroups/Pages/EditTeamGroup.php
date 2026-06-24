<?php

namespace App\Filament\Resources\TeamGroups\Pages;

use App\Filament\Resources\TeamGroups\TeamGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamGroup extends EditRecord
{
    protected static string $resource = TeamGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
