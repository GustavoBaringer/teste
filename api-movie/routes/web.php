<?php

use App\Http\Controllers\api\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'movie'], function () {
    Route::get('upcoming/{page?}', [MovieController::class, 'Upcoming']);
    Route::get('top_rated/{page?}', [MovieController::class, 'TopRated']);
    Route::get('single/{id}', [MovieController::class, 'Single']);
    Route::get('genres/{id?}', [MovieController::class, 'Genres']);
});
