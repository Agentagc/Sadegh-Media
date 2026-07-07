<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function show(string $slug)
    {
        $member = TeamMember::query()
            ->with(['roles', 'abilities', 'skills'])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('members.pages.member', compact('member'));
    }
}
