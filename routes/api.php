<?php

use App\Bookable;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* ---------- Start of Bookables Routes ---------- */
Route::apiResource('/bookables', 'Api\BookableController')->only(['index', 'show']);
Route::get('/bookables/{bookable}/avalibility', 'Api\BookableAvalibilityController')->name('bookables.avalibility');
/* ---------- End of Bookables Routes ---------- */
