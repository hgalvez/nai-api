<?php

use App\Http\Controllers\MultifiberResultsController;
use App\Http\Controllers\naiassemblyController;
use App\Http\Controllers\userController;
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

//protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    //for naiassembly
Route::get('/naiassembly', [naiassemblyController::class, 'index']);
Route::put('/naiassembly/{serialnumber}', [naiassemblyController::class, 'update']);
Route::get('/naiassembly/search/{partnumber}', [naiassemblyController::class, 'search']);
Route::post('/naiassembly', [naiassemblyController::class, 'store']);
Route::delete('/naiassembly/{serialnumber}', [naiassemblyController::class, 'delete']);


//for multifiberResults
Route::get('/multifiberresults', [MultifiberResultsController::class, 'index']);
Route::put('/multifiberresults/{serialnumber}', [MultifiberResultsController::class, 'update']);
Route::get('/multifiberresults/search/{partnumber}', [MultifiberResultsController::class, 'search']);
Route::post('/multifiberresults', [MultifiberResultsController::class, 'store']);
Route::delete('/multifiberresults/{serialnumber}', [MultifiberResultsController::class, 'delete']);

Route::post('/logout', [userController::class, 'logout']);

});

//public Routes
//Route::post('/register', [userController::class, 'register']);
Route::post('/login', [userController::class, 'login']);
//Route::get('register', 'App\Http\Controllers\Api\RegisterController@register');
Route::post('/register', 'App\Http\Controllers\userController@register');




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
