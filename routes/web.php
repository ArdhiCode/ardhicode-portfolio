<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;

Route::get('/', [DashboardController::class, 'index']);

//Experiences
Route::get('/experience/{hashid}', [ExperienceController::class, 'show'])->name('experience.show');

//Projects
Route::get('/project/{hashid}', [ProjectController::class, 'show'])->name('project.show');
