@foreach ($errors->all() as $error)
    <ul>
        <div class="alert alert-danger">
            {{$error}}
        </div>
    </ul>
@endforeach


@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>

@elseif(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>

@endif