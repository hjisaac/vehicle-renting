<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;
use App\Domain\User\User;

class UserRegistrationController extends Controller
{
    public function checkRegisterForm(Request $request) {
        $request->validate([
            'lastname' => ['required', 'max:30',''],
            'firstname' => ['required', 'max:30'],
            'email' => ['required', 'unique:users'],
            'password' => ['required','mim:6'],
            'confirmpassword'=>['required'],
            'telephone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6'
        ]);
        
        $data = $request->all();


        if($data["password"]==$data["confirmpassword"]){

            $data["password"] = md5($data["password"]);

            $data["email"] = trim($data["email"]);// trimming email

            $pseudo = $request->get('pseudo');

            if($pseudo==null||trim($pseudo)==''){
                $pseudo = $this->generatePseudo($request);
                $data["pseudo"]=$pseudo;
            }


            $count = DB::table('users')->count();

            if($count == 0){
                $data["role"] = "superadmin";
            }

            User::create($data);

            return Redirect()->action('Auth\UserLoginController@showLoginForm');
            //print_r($data);
        } else{
            return back()->withErrors(['msg', 'passwords doesn\'t match']);
        }


    }    
    
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function generatePseudo(Request $request){


            $id = $request->get('id');
            $email = $request->get('email');
            $email_first = explode('@',$email);
            $email_second = explode('.',$email_first[1]);
            $pseudo = $email_first[0].'@'.$email_second[0];
            return $pseudo;
    }
}
