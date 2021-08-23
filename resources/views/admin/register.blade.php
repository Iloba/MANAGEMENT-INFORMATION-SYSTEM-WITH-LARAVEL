@extends('layouts.app')
@section('content')
    <div id="body">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card p-4">
                    <h4 class="text-center mb-5">Register</h4>
                    <form action="{{route('register_admin')}}" method="POST">
                        @csrf
                      
                           <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name"> 
                            
                                @error('name')
                                    <span class="text-danger text-small">{{$message}}</span>
                                @enderror
                           </div>
                       
                   
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email"> 
                            @error('email')
                               <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="number" name="phone" class="form-control" placeholder="Phone Number"> 
                            @error('phone')
                               <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password')
                            <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            @error('password_confirmation')
                            <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <button class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection