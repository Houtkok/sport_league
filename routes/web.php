<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/footballleagues', function () {
    return view('football_leagues');
});
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/player', function () {
    return view('player');
});
Route::get('/team', function () {
    return view('Team');
});
Route::get('/stadium', function () {
    return view('stadium');
});



Route::post('','userController@Userregister');
Route::post('','userController@Userlogin');
Route::post('','userController@Userlogout');

Route::post('','userController@Adminregister');
Route::post('','userController@Adminlogin');
Route::post('','userController@Adminlogout');