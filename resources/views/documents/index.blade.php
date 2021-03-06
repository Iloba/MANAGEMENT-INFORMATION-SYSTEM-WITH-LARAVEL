@extends('layouts.admin')
@section('content')
    <div class="container p-3">
        <div class="col-md-12">
            @include('layouts.messages')
            <div class="card p-3">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-8">
                            <form action="{{route('document.index')}}" method="POST">
                                @csrf
                                @method('GET')
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="search" id="inlineFormInputGroup" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="input-group-text btn btn-info"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-info text-light float-right" href="{{route('document.create')}}">Add Document</a>
                        </div>
                    </div>
                    
                  
                </div>
                @if ($documents->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>S/No</th>
                                <th>Name</th>
                                <th>Document</th>
                                <th>Manage</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                
                                <tr>
                                    <td>
                                        {{$document->id}}
                                    </td>
                                    <td>
                                        {{$document->name}}
                                    </td>
                                    <td class="">
                                        <a class="btn btn-primary" target="_blank" href="{{asset('uploads/documents/'.$document->document)}}"><i style="font-size: 30px;" class="fas fa-file-word"></i></a>
                                    </td>
                                    <td>
                                        <a

                                        onclick="
                                        event.preventDefault();
                                        if(confirm('Are you sure you want to permanently delete this file??')){
                                            document.getElementById('{{'form-delete'.$document->id}}').submit();
                                        }
                                        
                                        
                                        "

                                        class="btn btn-danger" href="{{route('document.destroy', $document->id)}}"> <i class="fa fa-trash"></i></a>
                                    </td>
                                    <form action="{{route('document.destroy', $document->id)}}" method="POST" id="{{'form-delete'.$document->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </tr>
                                
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                @else
                    <p class="text-center">No Documents uploaded yet</p>
                @endif
            </div>
        </div>
    </div>
@endsection