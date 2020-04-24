@extends('layouts.app')

@section('content')
    <h1>Edit Album</h1>
    
    {!! Form::open(['action' => ['AlbumsController@update',$album->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        {{Form::label('name', 'Name')}}
        {{Form::text('name', $album->name, ['placeholder' => 'Album Name','class' => 'form-control'])}}
        <br>
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $album->description, ['placeholder' => 'Album description','class' => 'form-control'])}}
        <br>
        {{Form::file('cover_image')}}
        <br> <br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}


    {!! Form::close() !!}
@endsection