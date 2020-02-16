<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserLoginController extends Controller
{

    function  __construct()
    {
        $this->Middleware('guest')->except('logout');

    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function checkLoginForm(Request $request){

        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );

        $data = $request->all();

        $user = DB::table('users')->where('email', $data["email"])->first();
        if($user == NULL){
            return back()->withErrors(['msg', 'Email does not exist']);
        }
        $hashed_password = md5($data["password"]);

        if($hashed_password != $user->password){
            return back()->withErrors(['msg', 'Le mot de pass n\'est pas bon']);
        }

        if($user->role == "admin"){

            return  redirect()->action('VehicleController@index');
        }
        
        if($user->role == "superadmin"){

            return redirect()->action('VehicleController@index');
        }
        return redirect('/start');
    }

    public function  logout(){
        Auth::logout();
    }
}
