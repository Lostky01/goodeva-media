<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OmsetkuV2Controller;
use App\Http\Controllers\OmsetkuV2_Controller;

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

Route::get('/', function () {
    return view('evamedia-main');
});
Route::get('/list', function () {
    return view('goodeva-list');
});
Route::get('/login', function () {
    return view('login');
});
