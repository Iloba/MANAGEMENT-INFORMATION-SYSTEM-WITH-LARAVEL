<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AdminLoginController extends Controller
{
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => [
                
                        'required', 'confirmed',
                        Password::min(8)->letters()->numbers()->mixedCase()
                
                    ],
        ]);
    }
}
