<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\frontend\PropertyController;
use App\Http\Controllers\frontend\AgentController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\frontend\FavouriteController;
use App\Http\Controllers\frontend\SoldListController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
Route::get('/search/property', [PropertyController::class, 'index'])->name('search.property');
Route::post('/search/property', [PropertyController::class, 'search_property'])->name('search.property');
Route::get('/property/show/{id}', [PropertyController::class, 'show'])->name('property.show');
Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/district-to-thana/{id}', [PropertyController::class, 'district_to_thana'])->name('district.thana');
Route::get('/thana-to-localarea/{id}', [PropertyController::class, 'thana_to_localarea'])->name('thana.localarea');
Route::get('/sold/list', [SoldListController::class, 'index'])->name('sold.list');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
});


Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/select/favourite/{id}', [FavouriteController::class, 'store'])->name('select.favourite');
    Route::get('/favourite/list', [FavouriteController::class, 'index'])->name('favourite.list');
    Route::get('/favourite/property/show/{id}', [FavouriteController::class, 'show'])->name('favourite.property.show');
    Route::delete('/favourite/destroy/{id}', [FavouriteController::class, 'destroy'])->name('favourite.destroy');
});
