<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamGroup extends Model
{
    protected $guarded = [];

    public function members(): HasMany
    {
        return $this->hasMany(TeamMember::class);
    }
}
