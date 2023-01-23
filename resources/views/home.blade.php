@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 row-cols-lg-5">
            @foreach($movies as $movie)
                <div class="col">
                    
                    <div class="card border-0">
                        <img src="https://picsum.photos/200" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$movie->title}} title</h5>
                        <p class="card-text">{{$movie->original_title}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->date}}</p>



                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>
    
@endsection