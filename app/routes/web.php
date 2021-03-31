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

Route::post('/learners/register/upload', 'PagesController@register'); 

Route::post('/learners/register/upload/status', 'PagesController@status'); 

Route::get('/learners/payment', function () {
    return view('learners.payment');
}); 

Route::get('/learners/test/auth', function () {
    return view('learners.test.auth');
}); 

Route::post('/learners/test/instructions', 'PagesController@index'); 
Route::get('/learners/test/instructions', 'PagesController@get'); 

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
Route::get('/Vehicle_Registration/Apply/pdf', function () {
    return view('Vehicle_Registration.Apply.pdf');
});
 