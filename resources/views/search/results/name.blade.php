@extends('welcome')

@section('content')

<h1 class="headingOne">Search results</h1>
@if (empty($result))
	<h2>Sorry, we can`t find anything</h2>
	<a href="/search/" class="btn btn-primary" role="button">Try again</a>     
@endif
@foreach($result as $res)	

<div class = "col-sm-12 col-md-6">
<img src = "https://image.tmdb.org/t/p/w90/{{$res->profile_path}}" alt="no image" width="90px" height="auto">
<a href="/search/{{$res->id}}/{{$type}}" class="btn btn-primary" role="button">{{$res->name}}</a>     
</div>

@endforeach
@include('errors')
@endsection


