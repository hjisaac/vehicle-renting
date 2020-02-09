<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use App\Domain\User\User;

class UserRegistrationController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            // 'lastname' => ['required', 'max:5'],
            // 'firstname' => ['required', 'max:5'],
        ]);
        $data = $request->all();
        
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
    }    

    public function index(){
        return view('auth.user');
    }
}
