<?php

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

// Route::get('test/show/{id}', [App\Http\Controllers\Page::class,"show"])
// ->where (['id'=>'[0-9]']);
Route::get('test/showOne/{id}', [App\Http\Controllers\Page::class,"showOne"])
->where (['id'=>'[1-5]']);
Route::get('test/showAll/{param1}/{param2}', [App\Http\Controllers\Page::class,"showAll"]);
Route::get('test/sum/{num1}/{num2}', [App\Http\Controllers\Page::class,"showF"]);
Route::get('test', [App\Http\Controllers\TestController::class,"show"]);
Route::get('test3', [App\Http\Controllers\TestController::class,"show3"]);
Route::get('test4', [App\Http\Controllers\TestController::class,"show4"]);
Route::get('blade', function () {return view('child');});
?>
