@extends('layouts.app')
@section('content')
    <div id="body">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card p-4">
                    
                    <h4 class="text-center mb-5">Login</h4>
                    
                    <form action="{{route('login_admin')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}"> 
                            @error('email')
                               <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                            
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password')
                            <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                            @if (session('error'))
                                <span class="text-danger text-small">{{session('error')}}</span>
                            @endif
                        </div>
                        
                        <button class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection