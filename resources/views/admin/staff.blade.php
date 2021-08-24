@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Staff</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('all_staff')}}" method="POST">
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
                    <div class="col-md-6">
                        <form action="{{route('all_staff')}}" method="POST">
                            @csrf
                            @method('GET')
                                <div class="input-group mb-2">
                                  <select name="sort" id="" class="form-control">
                                      <option value="gender">Gender</option>
                                      <option value="level">Level</option>
                                  </select>
                                <div class="input-group-prepend">
                                    <button type="submit" class="input-group-text btn btn-info"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
                <div class="card p-3 shadow-sm">
                    <div class="table-responsive">   

                        <table class="table table-bordered">
                           
                                <thead>
                                    <tr>
                                        <th>
                                            id
                                        </th>
                                        <th>
                                            name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            gender
                                        </th>
                                        <th>
                                            Staff ID
                                        </th>
                                        <th>
                                            Level
                                        </th>
                                        
                                    </tr>
                                </thead>
                           
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                           <a class="nav-link" href="{{route('staff.show', $user->id)}}"> {{$user->id}}</a>
                                        </td>
                                        <td>
                                            <a class="nav-link" href="{{route('staff.show', $user->id)}}">{{$user->name}}</a>
                                        </td>
                                        <td>
                                            <a class="nav-link" href="{{route('staff.show', $user->id)}}">{{$user->email}}</a>
                                        </td>
                                        <td>
                                            <a class="nav-link" href="{{route('staff.show', $user->id)}}">{{$user->gender}}</a>
                                        </td>
                                        <td>
                                            <a class="nav-link" href="{{route('staff.show', $user->id)}}">{{$user->staff_id}}</a>
                                        </td>
                                        <td>
                                            <a class="nav-link" href="{{route('staff.show', $user->id)}}">{{$user->level}</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>
    
                   </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection