@extends('layouts.app')

@section('content')

    <br>
    <main role="main">
        <section class="jumbotron text-center">
          <div class="container">
              
            <h1>{{$album->name}}</h1>
            <a href="/" class="btn btn-secondary">Go back</a>
            <a href="/photos/create/{{$album->id}}" class="btn btn-secondary">Upalod to This Album</a>
          </div>
        </section>
      
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row">
               @if(count($photos) > 0)
                    @foreach($photos as $photo)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/storage/albums/photos/{{$photo->photo}}">
                            <div class="card-body">
                                <h3>{{$photo->title}}</h3>
                                <p class="card-text">{{$photo->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/photos/{{$photo->id}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="/photos/{{$photo->id}}/delete" type="button" class="btn btn-sm btn-outline-secondary">Delete</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Empty album!</p>
               @endif
              </div>
            </div>
        </div>
          </div>
      
      </main>


@endsection