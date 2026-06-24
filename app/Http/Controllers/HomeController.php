<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

        return view('main.pages.home', compact(
            'leftServices',
            'rightServices'
        ));
    }
}
