<?php

use App\Http\Controllers\CategoryController;
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

// Route::group(['middleware' => ['api', 'checkPassword']], function () {
//     Route::post('category', CategoryController::class . '@index');
// });

Route::group(['middleware' => 'api', 'namespace' => 'api'], function () {
    Route::post('get-main-categories', [CategoryController::class, 'index']);
});
