@extends('welcome')

@section('content')
<h1 class="headingOne"> {{$result->title}} </h1>
<<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
<img class="thumbnail" src="https://image.tmdb.org/t/p/w500/{{$result->poster_path}}" alt="no-image">
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
	
	<p>release: {{$result->release_date}}</p>
	<p>genres: 
	@foreach ($result->genres as $genre)
		{{$genre->name}}
	@endforeach 
	</p>
	<p>duration: {{$result->runtime}} min</p>
	<p>status: {{$result->status}}</p>
	<p>overview: {{$result->overview}}</p>

</div>
</div>
@include('errors')
@endsection


