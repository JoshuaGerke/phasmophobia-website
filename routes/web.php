<?php

use App\Http\Controllers\GhostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowToPlayController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\QuestsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

App::setLocale("de");
Route::group(['as' => 'main.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('start');
    Route::get('/howToPlay', [HowToPlayController::class, 'index'])->name('howToPlay');
    Route::get('/quests', [QuestsController::class, 'index'])->name('quests');
    Route::get('/items', [ItemsController::class, 'index'])->name('items');
    Route::get('/ghosts', [GhostsController::class, 'index'])->name('ghosts');
    Route::get('/maps', [MapsController::class, 'index'])->name('maps');
});
