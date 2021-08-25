@extends('layouts.admin')
@section('content')
    <div class="container p-3">
        <div class="col-md-12">
            @include('layouts.messages')
            <div class="card p-3">
                <div class="card-header">
                    <a class="btn btn-info text-light float-right" href="{{route('document.create')}}">Add Document</a>
                </div>
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
                                    
                                    class="btn btn-danger" href="{{route('document.destroy', $document->id)}}"> <i class="fa fa-trash"></i></a>
                                </td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection