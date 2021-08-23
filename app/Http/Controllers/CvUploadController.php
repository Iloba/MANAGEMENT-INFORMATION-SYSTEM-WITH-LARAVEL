<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CvUploadRequest;

class CvUploadController extends Controller
{
   

 
    public function create()
    {
        return view('staff.cv');
    }

    
    public function store(CvUploadRequest $request)
    {
        if($request->hasFile('cv')){

            $filename = $request->cv->getClientOriginalName();

            try{

                $request->cv->storeAs('Resumes', $filename, 'public_uploads');
            
            } catch (Exception $error){
                return back()->with('errors', 'Could not CV, please Try again');
            }

        }

        auth()->user()->update([
            'cv' => $filename
        ]);

        return back()->with('success', 'Cv Uploaded Successfully');
    }

 
  
   
}
