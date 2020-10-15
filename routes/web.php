<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\frontend\PropertyController;
use App\Http\Controllers\frontend\AgentController;
use App\Http\Controllers\frontend\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.frontend.home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
Route::get('/property/show/{id}', [PropertyController::class, 'show'])->name('property.show');
Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
