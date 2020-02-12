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
    public function store(Request $request) {
        $request->validate([
            // 'lastname' => ['required', 'max:5'],
            // 'firstname' => ['required', 'max:5'],

                'email' => ['required', 'unique:users']
        ]);
        
        $data = $request->all();
        $data["password"] = md5($data["password"]);
        
        $count = DB::table('users')->count();
        if($count == 0){
            $data["role"] = "superadmin";
        }

        User::create($data);
        
        redirect('/login');
    }    
    
    public function index(){
        return view('auth.register');
    }
}
