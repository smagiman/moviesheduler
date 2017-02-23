@extends('welcome')

@section('content')
<h1 class="headingOne">{{ $result->name }}</h1>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<img class="thumbnail" src="https://image.tmdb.org/t/p/w300/{{$result->profile_path}}" alt="no-image">
</div>
<div class="col-lg-8 col-md-6 col-sm-12">
	<p>birthday: {{$result->birthday}}</p>
	@if($result->deathday !== '')
	<p>deathday: {{$result->deathday}}</p>
	@endif
	<p>birthplace: {{$result->place_of_birth}}</p>
	<p>bio: {{$result->biography}}</p>

</div>
</div>
@include('errors')
@endsection