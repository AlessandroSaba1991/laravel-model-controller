@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row row-cols-3 g-3">
        @forelse($movies as $movie)
        <div class="col">
            <a href="{{route('movies.show',$movie)}}">
                <div class="card h-100">
                    <div class="card-body">
                        <h1>{{$movie->title}}</h1>
                        <h3>{{$movie->original_title}}</h3>
                        <p>{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <p>{{$movie->vote}}</p>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <p>Nothing</p>
        @endforelse
    </div>
</div>
@endsection
