@extends('welcome')

@section('content')
<h1 class="headingOne">Search page</h1>
<div class="search-form">
{!! Form::open(['url' => 'searchRequest']) !!}
<div class="formgroup">
{{ csrf_field() }}

{!! Form::label('type', 'Choose:') !!}
{!! Form::select('type', ['name' => 'Name', 'title' => 'Title'],  ['placeholder' => 'What are you looking for? '] ,['class' => 'form-control']) !!}
</div>
<div class="formgroup">
{!! Form::label('keyword', 'Search for:') !!}
{!! Form::text('keyword', null,  ['class' => 'form-control']) !!}
</div>
<div class="formgroup">
{!! Form::submit('Search!', ['class' => 'btn btn-primary']) !!} 
</div>
{!! Form::close() !!} 
</div>
@include('errors')
@endsection


