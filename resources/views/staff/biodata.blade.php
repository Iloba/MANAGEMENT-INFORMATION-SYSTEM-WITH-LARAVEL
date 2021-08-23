@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            @include('layouts.messages')
            <div class="card">
                <div class="card-header bg-primary text-light">{{ __('Dashboard') }} | {{ __('Update Biodata') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <form action="{{route('biodata.store')}}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Name</b></label>
                                <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" disabled>
                            </div>
                            
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Email</b></label>
                                <input type="text" name="email" class="form-control" value="{{auth()->user()->email}}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Lastname</b></label>
                                <input type="text" name="lastname" class="form-control" value="{{auth()->user()->lastname}}">

                                <div>
                                    @error('lastname')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            
                            </div>
                            
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Firstname</b></label>
                                <input type="text" name="firstname" class="form-control" value="{{auth()->user()->firstname}}">

                                <div>
                                    @error('firstname')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>

                            </div>
                            
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Middlename</b></label>
                                <input type="text" name="middlename" class="form-control" value="{{auth()->user()->middlename}}">
                                <div>
                                    @error('middlename')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Gender</b></label>
                                <select name="gender" id="" class="form-control">
                                    <option value="--Select--">--Select--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                <div>
                                   @if (session('error'))
                                    <span class="text-danger text-small">{{session('error')}}</span> 
                                   @endif
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Phone</b></label>
                                <input type="number" name="phone" class="form-control" value="{{auth()->user()->phone}}">
                                <div>
                                    @error('phone')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Position</b></label>
                                <input type="text" name="position" class="form-control" value="{{auth()->user()->position}}">
                                <div>
                                    @error('position')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Office Address</b></label>
                                <textarea type="text" name="office_address" cols="4" class="form-control" value=""> {{auth()->user()->office_address}}</textarea>
                                <div>
                                    @error('office_address')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Course</b></label>
                                <input type="text" name="course" class="form-control" value="{{auth()->user()->course}}">
                                <div>
                                    @error('course')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Level</b></label>
                                <input type="number" name="level" class="form-control" value="{{auth()->user()->level}}">
                                <div>
                                    @error('level')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="text-dark" for=""><b>Staff_id</b></label>
                                <input type="text" name="staff_id" class="form-control" value="{{auth()->user()->staff_id}}" disabled>
                                <div>
                                    @error('staff_id')
                                         <span class="text-danger text-small">{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
