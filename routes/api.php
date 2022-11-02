<?php

use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
 Route::post('user-details', [UserController::class, 'userDetails']);
});

Route::get('settings', [SettingController::class, 'show']);

Route::get('search/{sort}/{search}', [SearchController::class, 'index']);

Route::resource('items', ItemController::class);
