<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\TournamentsController;
use App\Http\Controllers\TournamentsPublicController;

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


/*
|
| Route for the users section
|
*/

Route::view('/', 'home', [
    'name' => 'LDV ESPORT TOURNAMENT'
])->name('home');

Route::get('/register-user', function() {
    return view('pages.users.register');
});

Route::get('/games', [TournamentsPublicController::class, 'index']);

Route::view('/parameters', 'pages.administration.params.index')->name('params');

Route::view('/contact', 'contact')->name('contact');

Route::view('/tournament', 'pages.users.tournament.index')->name('tournament');

Route::get('/profile', [TournamentsController::class, 'playerShow'])->name('playerShow');


/*
|
| Route for the admin section
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/tournaments/players', [TournamentsController::class, 'playerIndex'])->name('listPlayers');
    Route::get('/dashboard/tournaments/result', [TournamentsController::class, 'result'])->name('tournamentsResult');
    Route::get('/dashboard/tournaments/score', [TournamentsController::class, 'score'])->name('tournamentsScore');
    Route::resource('/dashboard/tournaments', TournamentsController::class);

    Route::resource('/dashboard/game', GamesController::class);
    Route::resource('/dashboard/team', TeamController::class);

});

Route::get('/test/{id}', [TournamentsController::class, 'generate']);

