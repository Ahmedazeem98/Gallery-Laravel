@extends('layouts.app')

@section('content')
<div>
    <h1>{{$photo->title}}</h1>
    <a class="pull right btn btn-secondary" href="/albums/{{$photo->album_id}}">Go back</a>

</div>
<br>
    <div>
        <img width="100%" height="100%" src="/storage/albums/photos/{{$photo->photo}}" alt="{{$photo->title}} pic">
    </div>
@endsection