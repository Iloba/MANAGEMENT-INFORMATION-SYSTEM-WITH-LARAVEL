@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header bg-primary text-light">{{ __('Dashboard') }} | {{ __('Upload CV') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('layouts.messages')
                    <div class="row">
                        
                        <div class="col-md-9">
                            <p class="text-danger text-center">Please note that only .doc and .pdf files are allowed</p>
                            <form method="POST" action="{{route('cv.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    <input type="file" name="cv" class="form-control ml-3"> <br>
                                    <button type="submit" class="btn btn-info ml-5">
                                        Upload 
                                    </button>
                                </div>
                            </form>
                        </div>
                        @if (auth()->user()->cv)
                            <div class="col-md-3 mt-3">
                                <a class="btn btn-primary" target="_blank" href="{{asset('uploads/resumes/'.auth()->user()->cv)}}">View Document</a>
                            </div> 
                        @else
                            <p></p>
                        @endif
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
