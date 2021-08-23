@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">{{ __('Dashboard') }} | {{ __('Upload Passport') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('layouts.messages')
                    <div class="row">
                        
                        <div class="col-md-8">
                            <form method="POST" action="{{route('passport.store')}}">
                                @csrf
                                <div class="d-flex">
                                    <input type="file" name="passport" class="form-control ml-3"> <br>
                                    <button type="submit" class="btn btn-info ml-3">
                                        Upload
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fuga consectetur deserunt. Illo in minima doloremque cumque dolorum maiores mollitia fuga praesentium! Pariatur et ab vitae error sed ratione facere!
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
