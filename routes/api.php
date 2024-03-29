<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainSectionController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/sections', [MainSectionController::class, 'index'])->name('sections.index');
Route::get('/infos', [InfoController::class, 'index'])->name('infos.index');
Route::get('/details', [FAQController::class, 'index'])->name('details.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
