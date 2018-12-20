<?php

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

/*
 * group 'tasks'
 */
Route::prefix('tasks')->group(function () {
    Route::get('/', 'TaskController@index');
    Route::get('{id}', 'TaskController@show');
    Route::post('/create', 'TaskController@store');
    Route::put('{id}/edit', 'TaskController@update');
    Route::delete('{id}/remove', 'TaskController@destroy');
});
