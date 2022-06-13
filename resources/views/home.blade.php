@extends('layouts.app')
@section('content')
<div class="p-5 text-center text-white h-100 d-flex">
    <div class="container align-self-center">
        <h1 class="display-3">Homepage Movies</h1>
        <p class="lead">Click <a class="text-danger" href="{{route('movies.index')}}">HERE</a> for all Movies</p>
    </div>
</div>
@endsection
