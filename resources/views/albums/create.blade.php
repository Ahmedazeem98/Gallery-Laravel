@extends('layouts.app')

@section('content')
<br>
    <h3>Create Album</h3>

    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['placeholder' => 'Album Name','class' => 'form-control'])}}
        <br>
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['placeholder' => 'Album description','class' => 'form-control'])}}
        <br>
        {{Form::file('cover_image')}}
        <br> <br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}


    {!! Form::close() !!}

@endsection