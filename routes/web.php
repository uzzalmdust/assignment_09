<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about-me', [SkillsController::class, 'skills'])->name('about');
Route::get('/projects', [ProjectController::class, 'projects'])->name('projects');
Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');
