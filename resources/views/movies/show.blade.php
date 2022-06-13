@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row row-cols-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>{{$movie->title}}</h2>
                    <h3>{{$movie->original_title}}</h3>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
