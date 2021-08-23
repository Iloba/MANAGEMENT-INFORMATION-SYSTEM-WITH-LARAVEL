@foreach ($errors->all() as $error)
    <ul>
        <div class="alert alert-danger">
            {{$error}}
        </div>
    </ul>
@endforeach