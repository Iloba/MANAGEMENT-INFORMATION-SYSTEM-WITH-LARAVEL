@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Add Document</h2>
        <div class="col-md-8 mx-auto">
            <div class="card p-3">
                <form action="{{route('document.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <input type="file" name="document" class="form-control ">
                        @error('document')
                                <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    <div class="mb-4">
                        <textarea name="data" class="form-control " id="" cols="30" rows="10" placeholder="Enter Document Description"></textarea>
                        @error('data')
                            <span class="text-danger">{{$message}}</span> 
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-info text-light">
                        Add Document
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection