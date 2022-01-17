<?php

use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**-----Tweets Api----- */
Route::get('/tweets', [TweetController::class,'index']);
Route::post('/tweets', [TweetController::class,'store']);
Route::get('/tweets/{tweet}', [TweetController::class,'show']);

/**-----Users Api----- */
Route::get('/users/{user}', [UserController::class,'show']);
