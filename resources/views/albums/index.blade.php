@extends('layouts.app')
@section('content')

<br>
<main role="main">
    <section class="jumbotron text-center">
      <div class="container">
          
        <h1>Albums</h1>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
            @if(count($albums))
                @foreach ($albums as $album)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="storage/albums/covers/{{$album->cover_image}}">
                    <div class="card-body">
                        <h3>{{$album->name}}</h3>
                        <p class="card-text">{{$album->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/albums/{{$album->id}}" type="button" class="btn btn-xm btn-outline-secondary">View</a>
                            <a href="/albums/{{$album->id}}/edit" type="button" class="btn btn-xm btn-outline-secondary">Edit</a>
                            <a href="/albums/{{$album->id}}/delete" type="button" class="btn btn-xm btn-outline-secondary">Delete</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>There is no albums yet!</p>
            @endif
          </div>
        </div>
    </div>
      </div>
  
  </main>

  @endsection