<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveData;

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

Route::view("home","home");
Route::post("home",[SaveData::class,"saveData"]);


Route::get('/', function () {
    return view('welcome');
});
