<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" id="body">
        @include('layouts.header')
        <div id="body">
            <div class="container mt-5" >
                <div class="row">
                    <div class="col-md-10 mx-auto mt-5">
                        <div class="card p-3 shadow-sm">
                           
                                <h1  class="text-center text-uppercase text-secondary font-bold mt-3">Management Information system for computer science Staff</h1>
                                <div class="mx-auto mt-3 mb-3">
                                    <a class="btn btn-success mx-auto" href="{{route('register')}}">Register</a>
                                    <a class="btn btn-info text-light" href="{{route('login')}}">Login</a>
                                </div>
                          
                        </div>
                        <div class="card-footer bg-info">
                            <p class="text-light text-center mt-3">Project 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
