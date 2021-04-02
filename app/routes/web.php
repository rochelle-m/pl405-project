<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::post('/learners/register/upload', 'CitizenController@gate'); 

Route::post('/learners/register/upload/status', 'CitizenController@register'); 

Route::get('/learners/payment', function () {
    return view('learners.payment');
}); 

Route::get('/learners/test/auth', function () {
    return view('learners.test.auth');
}); 

Route::post('/learners/test/instructions', 'PagesController@final'); 
Route::get('/learners/test/instructions', 'PagesController@mock'); 

Route::post('/learners/test', 'QuestionController@post_questions'); 

Route::get('/learners/test', 'QuestionController@get_questions'); 

Route::get('/loginmodule/login', function () {
    return view('loginmodule.login');
});

Route::get('/permanent_licence/permanent_license', function () {
    return view('permanent_licence.permanent_license');
});
Route::get('/Vehicle_Registration/Apply', function () {
    return view('Vehicle_Registration.Apply');
});
Route::post('/Vehicle_Registration/Apply/pdf', 'Apply_RegController@generate_pdf');
 