<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\MemberRole;
use App\Models\MemberAbility;
use App\Models\MemberSkill;

class TeamMember extends Model
{
    protected $guarded = [];

    public function teamGroup(): BelongsTo
    {
        return $this->belongsTo(TeamGroup::class, 'team_group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(MemberRole::class)->orderBy('sort_order');
    }

    public function abilities(): HasMany
    {
        return $this->hasMany(MemberAbility::class)->orderBy('sort_order');
    }

    public function skills(): HasMany
    {
        return $this->hasMany(MemberSkill::class)->orderBy('sort_order');
    }
}
