<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use App\Http\Requests\UploadPassportRequest;

class PassportUploadController extends Controller
{
    

    public function create()
    {
        return view('staff.passport');
    }

    
    public function store(UploadPassportRequest $request)
    {
        if($request->hasFile('passport')){

            //get image name
            $getimagename = $request->passport->getClientOriginalName();

            //Store image 
            try{

                $request->passport->storeAs('passport_photographs', $getimagename, 'public_uploads');
            
            } catch (Exception $error){
                return back()->with('errors', 'Could not upload passport, please Try again');
            }
           

        }

        auth()->user()->update([
            'passport' => $getimagename
        ]);

        return back()->with('success', 'Passport Updated Succesfully');

        


    }

   

   

    
    
}
