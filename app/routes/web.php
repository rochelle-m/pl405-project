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

Route::get('/Vehicle_Registration/Apply/pdf', function () {
    return view('Vehicle_Registration.Apply.pdf');
});

Route::get('/Insurance/applyInsurance', function () {
    return view('Insurance.applyInsurance');
});

// Route::get('/pay', function () {
//     return view('stripe');
// });

Route::get('stripe', 'StripeController@stripe');
Route::post('payment', 'StripeController@payStripe');

Route::post('pay', 'insuranceController@payinsurance');

 
 Route::get('/pay_the_fine_portel/pay_the_fine', function () {
    return view('pay_the_fine_portel.pay_the_fine');
});

Route::get('license/lost', function () {
    return view('permanent_licence.lost');
});

 Route::get('/pay_the_fine_portel/dashboard', function () {
    return view('pay_the_fine_portel.dashboard');
});
  
  Route::get('/pay_the_fine_portel/pay', function () {
    return view('pay_the_fine_portel.pay');
});

  Route::get('/pay_the_fine_portel/process', function () {
    return view('pay_the_fine_portel.process');
});

  Route::get('/pay_the_fine_portel/schpayment', function () {
    return view('pay_the_fine_portel.schpayment');
});

  Route::get('/pay_the_fine_portel/payment', function () {
    return view('pay_the_fine_portel.payment');
});
 
   Route::get('/pay_the_fine_portel/cancel', function () {
    return view('pay_the_fine_portel.cancel');
});

   Route::get('/pay_the_fine_portel/complete', function () {
    return view('pay_the_fine_portel.complete');
});
 
Route::post('/home',"CitizenController@login");


Route::post('/Vehicle_Registration/Apply/pdf', 'Apply_RegController@generate_pdf');

Route::post('/Vehicle_Registration/Apply/status', 'Apply_RegController@generate_status');
 

 
Route::post('/exam_date', 'PermanentLicenseController@apply');


Route::get('/send/email', 'PagesController@email'); 

Route::get('/email', function () {
    return view('customauth.passwords.email');
});

Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');

Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

