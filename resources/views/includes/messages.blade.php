@if(count($errors) > 0)
<br>
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@if($message = session('success'))
<br>
    <div class="alert alert-success">{{$message}}</div>
@endif

@if($message = session('failed'))
<br>
    <div class="alert alert-danger">{{$message}}</div>
@endif