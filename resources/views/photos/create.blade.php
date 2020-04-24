@extends('layouts.app')

@section('content')

    <br>
    <h1>Add Photo</h1>
    {!! Form::open(['action' => ['PhotosController@store', $album_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['placeholder' => 'Photo Title','class' => 'form-control'])}}
        <br>
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['placeholder' => 'Photo description','class' => 'form-control'])}}
        <br>
        {{Form::file('photo')}}
        <br> <br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}


    {!! Form::close() !!}


@endsection