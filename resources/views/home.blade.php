@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}  {{ __('You are logged in!') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="row">
                        <div class="col-md-4 bg-gradient-primary p-5 m-5 text-light shadow-sm">
                            <p class="text-center"><i class="fa fa-user"></i> <br></p>
                            <a class="text-light" href="{{route('passport.create')}}"><p class=" text-center">Upload Passport</p></a>
                        </div>
                        <div class="col-md-4 p-5 bg-gradient-primary m-5 p-5 text-light  shadow-sm">
                            <p class="text-center"><i class="fa fa-user"></i> <br></p>
                            <a class="text-light text-center" href=""><p class="text-center">Update BioData</p></a>
                           
                        </div>
                        
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-4 p-5 bg-gradient-primary m-5 p-5 text-light  shadow-sm">
                            <p class="text-center"><i class="fa fa-user"></i> <br></p>
                            <a class="text-light text-center" href=""><p class="text-center">Upload Curriculum Vitae</p></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
