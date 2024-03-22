<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\SampleController;
use App\Models\Test;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::controller(AuthController::class)->group(function () {
//     Route::post('/login', [AuthController::class, 'login'])->name('login');
// });

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/sample',[SampleController::class, 'index']);
});

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/cf7',[SampleController::class, 'collectData']);

Route::post('/switchLight',[TestController::class, 'switchLight'])->name('switchLight');
Route::get('/light',[TestController::class,'light'])->name('light');
