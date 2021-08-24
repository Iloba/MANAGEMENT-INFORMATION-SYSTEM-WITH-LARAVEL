<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
  
   public function index(Request $request){

      $users = User::latest()->get();
      if($request->has('search')){
         $users = User::where('name', 'like', "%{$request->search}%")->get();
      }

      return view('admin.staff', compact('users'));

   }

   public function show(User $user){
      $staff = User::find($user->id);

      return view('admin.show', compact('staff'));
   }
    

   public function delete($id){

      $staff = User::find($id);

      $staff->delete();

      return redirect()->route('all_staff')->with('success', 'Delete Operation Successful');
   }
}
