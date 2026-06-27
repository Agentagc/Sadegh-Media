<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Stat;
use App\Models\TeamGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $rightServices = $services->take(4);
        $leftServices = $services->skip(4);

        $stats = Stat::all();

        $teamGroups = TeamGroup::query()
        ->with(['members.projects'])
        ->orderBy('sort_order')
        ->get();

        $projects = Project::query()
        ->where('is_featured', true)
        ->latest('published_at')
        ->get();

        return view('main.pages.home', compact(
            'leftServices',
            'rightServices',
            'stats',
            'teamGroups',
            'projects',
        ));
    }
}
