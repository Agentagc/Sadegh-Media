<?php

namespace App\Filament\Resources\TeamGroups\Pages;

use App\Filament\Resources\TeamGroups\TeamGroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamGroup extends CreateRecord
{
    protected static string $resource = TeamGroupResource::class;
}
