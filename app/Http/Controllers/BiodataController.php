<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use App\Http\Requests\BiodataStoreRequest;

class BiodataController extends Controller
{
   

    public function create()
    {
        return view('staff.biodata');
    }

    
    public function store(BiodataStoreRequest $request)
    {   
       
        if($request->gender === '--Select--'){
            return back()->with('error', 'Please Select Gender');
        }

        $staff_id = 'Comp/'.substr($request->lastname, 0,  3).'/'.substr($request->phone, 3, 7);


        auth()->user()->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'position' => $request->position,
            'office_address' => $request->office_address,
            'course' => $request->course,
            'level' => $request->level,
            'staff_id' => $staff_id
        ]);

        return back()->with('success', 'Biodata Updated Successfully');
    }

  
}
