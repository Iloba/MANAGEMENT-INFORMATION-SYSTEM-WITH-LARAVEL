@extends('layouts.app')
@section('content')
    <div id="body">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card p-4">
                    @include('layouts.messages')
                    <h4 class="text-center mb-5">Login</h4>
                    
                    <form action="{{route('login_admin')}}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="email" class="form-control" placeholder="Email"> <br>
                            @error('email')
                               <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                            @error('password')
                            <span class="text-danger text-small">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <button class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection