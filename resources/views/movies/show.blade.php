@extends('layouts.app')
@section('content')
<section class="movie py-5 h-100">
    <div class="container h-100 d-flex align-items-center">
        <div class="card w-100">
            <div class="img_card">
                <img height="300" src="{{$movie->img}}" alt="{{$movie->title}}">
            </div>
            <div class="card-body text-center">
                <h2><span>Title</span><br>{{$movie->title}}</h2>
                <h3><span>Original Title</span><br>{{$movie->original_title}}</h3>
                <p><span>Overviews</span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quibusdam delectus obcaecati. At enim itaque error blanditiis ab atque excepturi, tenetur soluta deserunt similique tempore earum nulla voluptates sed nemo quas repellat dolor odio ut praesentium sint sunt delectus possimus.</p>
                <p><span>Nationality</span><br>{{$movie->nationality}}</p>

                <p><span>Date Release: </span><br>{{$movie->date}}</p>
                <p><span>Vote: </span><br>{{$movie->vote}}</p>
            </div>
        </div>
    </div>
</section>
@endsection
