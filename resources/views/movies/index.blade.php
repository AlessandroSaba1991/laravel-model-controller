@extends('layouts.app')
@section('content')
<section class="movies py-5">
    <div class="container">
        <h2 class="text-white text-uppercase text-center mb-4">movies</h2>
        <div class="row row-cols-3 g-3">
            @forelse($movies as $movie)
            <div class="col">
                <div class="card h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="{{$movie->img}}" class="img-fluid rounded-start" alt="{{$movie->title}}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{$movie->title}}</h5>
                                <p class="card-text">Nationality: {{$movie->nationality}}</p>
                                <p class="card-text">Date Release: {{$movie->date}}</p>
                                <p class="card-text">Vote: {{$movie->vote}}</p>
                                <a name="movie_btn" id="movie_btn" class="btn btn-primary" href="{{route('movies.show',$movie)}}" role="button">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>Nothing</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
