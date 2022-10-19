<?php

use App\Http\Controllers\multifiberresultsController;
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
Route::get('/naiassembly/searchsn/{serialnumber}', [naiassemblyController::class, 'searchsn']);
Route::post('/naiassembly', [naiassemblyController::class, 'store']);
Route::delete('/naiassembly/{serialnumber}', [naiassemblyController::class, 'delete']);


//for multifiberResults
Route::get('/multifiberresults', [multifiberresultsController::class, 'index']);
Route::put('/multifiberresults/{serialnumber}', [multifiberresultsController::class, 'update']);
Route::get('/multifiberresults/search/{partnumber}', [multifiberresultsController::class, 'search']);
Route::get('/multifiberresults/searchsn/{serialnumber}', [multifiberresultsController::class, 'searchsn']);
Route::post('/multifiberresults', [multifiberresultsController::class, 'store']);
Route::delete('/multifiberresults/{serialnumber}', [multifiberresultsController::class, 'delete']);

Route::post('/logout', [userController::class, 'logout']);

});

//public Routes
Route::post('/register', [userController::class, 'register']);
Route::post('/login', [userController::class, 'login']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
