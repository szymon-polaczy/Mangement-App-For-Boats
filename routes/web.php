<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Jurager\Teams\Models\Team;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('create-new-team-with-owner', function () {
    $users = User::all();

    return view('create-new-team-with-owner-form')->with('users', $users);
})->middleware('auth')->name('create-new-team-with-owner-form');
Route::post('create-new-team-with-owner', [\App\Http\Controllers\TeamController::class, 'create_new_team_with_owner'])->middleware('auth')->name('create-new-team-with-owner');

Route::get('/team/{id}', function ($id) {
    $team = Team::where('id', $id)->first();

    return view('team')->with('team', $team);
})->middleware('auth')->name('team');

Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
