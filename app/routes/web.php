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

Route::get('/', function () {
    return view('welcome')->with('title', 'Road Transport Services');
});

Route::get('/learners/register', function () {
    return view('learners.register');
}); 

Route::get('/learners/renew', function () {
    return view('learners.renew');
}); 

Route::post('/learners/register/upload', 'PagesController@register'); 

Route::post('/learners/register/upload/status', 'PagesController@status'); 

Route::get('/learners/payment', function () {
    return view('learners.payment');
}); 

Route::get('/learners/test', function () {
    return view('learners.test.auth');
}); 

Route::get('/learners/test/instructions', function () {
    return view('learners.test.instructions');
}); 

