<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use DB; use App\User; 
use Hash; 
use App\Citizen;

class ResetPasswordController extends Controller { 

  public function getPassword($token) { 

     return view('customauth.passwords.reset', ['token' => $token]);
  }

  public function updatePassword(Request $request)
  {

  $request->validate([
      'email' => 'required|email|exists:citizens',
      'password' => 'required|string|min:6|confirmed',
      'password_confirmation' => 'required',

  ]);

  $updatePassword = DB::table('password_resets')
                      ->where(['email' => $request->email, 'token' => $request->token])
                      ->first();

  if(!$updatePassword)
      return back()->withInput()->with('error', 'Invalid token!');

    $user = Citizen::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

    DB::table('password_resets')->where(['email'=> $request->email])->delete();

    return redirect('/loginmodule/login')->with('message', 'Your password has been changed!');

  }
}