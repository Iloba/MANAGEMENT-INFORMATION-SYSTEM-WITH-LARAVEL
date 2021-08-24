@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="mb-5">Staff Details</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm">
                    <div class="row mb-4">
                        <div class="col-md-3 mb-5">
                            <img style="width: 70%;" class="img-fluid mx-auto d-block" src="{{asset('uploads/passport_photographs/'.$staff->passport)}}" alt="Mis">
                        </div>
                        <div class="col-md-9 center-text-on-mobile">
                            <div class="row ">
                                <div class="col-md-4 mb-3">
                                   <h5> <b>Name:</b> {{$staff->name}}</h5>
                                   <h5> <b>Email:</b> {{$staff->email}}</h5>
                                   <h5> <b>Gender:</b> {{$staff->gender}}</h5>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h5> <b>Lastname:</b> {{$staff->lastname}}</h5>
                                    <h5> <b>firstname:</b> {{$staff->firstname}}</h5>
                                    <h5> <b>Middlename:</b> {{$staff->middlename}}</h5>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h5> <b>Staff ID:</b> {{$staff->staff_id}}</h5>
                                    <h5> <b>Phone:</b> {{$staff->phone}}</h5>
                                    <h5> <b>Position:</b> {{$staff->position}}</h5>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h5> <b>Course Studied</b> {{$staff->course}}</h5>
                                    <h5> <b>Level:</b> {{$staff->level}}</h5>
                                    
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h5><b>Download CV:</b></h5>
                                    <a class="btn btn-primary" target="_blank" href="{{asset('uploads/resumes/'.$staff->cv)}}"><i style="font-size: 90px;" class="fas fa-file-word"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <a class="btn btn-danger btn-lg" 

                        onclick="
                        event.preventDefault();
                        if(confirm('{{'Do you Want to Delete '.$staff->firstname}}')){
                            document.getElementById('{{'form-delete'.$staff->id}}').submit();
                        }
                        ";
                        
                        href="{{route('staff.delete', $staff->id)}}">Delete {{$staff->firstname}}</a>

                        <form action="{{route('staff.delete', $staff->id)}}" method="POST" id="{{'form-delete'.$staff->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection