<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/sample/import',[SampleController::class,'index'])->name('sample.import');

Route::get('/sample',[SampleController::class,'index'])->name('index');
Route::post('/sample/store',[SampleController::class,'store'])->name('sample.store');
Route::post('/sample/put',[SampleController::class,'update'])->name('sample.update');

//Route::resource('/sample',SampleController::class);