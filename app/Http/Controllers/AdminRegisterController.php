<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class AdminRegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => ['required', ' unique:admins'],
            'phone' => ['required', 'max:11', 'unique:admins'],
            'password' => [
                
                        'required', 'confirmed',
                        Password::min(8)->letters()->numbers()->mixedCase()
                
                    ],
        ]);

        $user = Admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            
        ]);

        if($user){
            //Create session
            $request->session()->put('user', $user);


            //redirect to dashboard
            return redirect()->route('dashboard')->with('success', 'Registration Successful');
        }

    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('login_admin')->with('success', 'Logout Successful');
    }
}
