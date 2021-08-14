<?php

use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
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

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('timeline', [TimelineController::class, 'index'])->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('statuses.store');

    Route::get('profile/{user:username}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
});


require __DIR__ . '/auth.php';
