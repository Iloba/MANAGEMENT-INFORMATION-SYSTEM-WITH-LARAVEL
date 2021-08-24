<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminLoginController extends Controller
{
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => [
                
                'required',
                Password::min(8)->letters()->numbers()->mixedCase()
        
                    ],
        ]);


        //login user
        $admin = Admin::where('email', '=', $request->email)->orWhere('phone', '=', $request->email)->first();

        if($admin){

            if(Hash::check($request->password, $admin->password)){

                //Create Admin Sessiion
                $request->session()->put('user', $admin);

                return redirect()->route('dashboard')->with('success', 'Welcome, Login Successful');
            }else{
                return back()->with('error', 'Invalid Password');
            }
        }else{
            return back()->with('error', 'The provided credentials do not match our records. No Results Found!!');
        }
       

    }
}
