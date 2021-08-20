<?php

use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UpdateProfileInformationController;
use App\Http\Controllers\WelcomeController;
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

require __DIR__ . '/auth.php';

Route::get('/', WelcomeController::class);

Route::middleware('auth')->group(function () {
    Route::get('timeline', [TimelineController::class, 'index'])->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('statuses.store');

    Route::get('explore', ExploreUserController::class)->name('user.index');

    Route::get('edit', [UpdateProfileInformationController::class, 'edit'])->name('profile.edit');
    Route::put('update', [UpdateProfileInformationController::class, 'update'])->name('profile.update');

    Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::put('password/edit', [UpdatePasswordController::class, 'update']);

    Route::get('{user:username}/following', [FollowingController::class, 'following'])->name('following');
    Route::post('{user:username}', [FollowingController::class, 'store'])->name('following.store');
    Route::get('{user:username}/follower', [FollowingController::class, 'follower'])->name('follower');

    Route::get('{user:username}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
});
