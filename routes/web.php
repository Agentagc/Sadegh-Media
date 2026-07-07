<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/team/{slug}', [TeamMemberController::class, 'show'])->name('team.show');
