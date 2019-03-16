@extends('layout')

@section('title')
	Mill
@endsection

@section('content')

	<h1>{{ $muehlen->title }}</h1>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<p>{{ $muehlen->description }}</p>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	@if( $muehlen->waages->count() )

	<ul class="list-group">
		@foreach( $muehlen->waages as $waage )

		<li class="list-group-item">
			<a href="/muehlen/{{ $waage->id }}">{{ $waage->name }}</a><br>
			<p>{{ $waage->beschreibung }}</p>
		</li>

		@endforeach
	</ul>

	@endif

	<a href="/muehlen/{{ $muehlen->id }}/edit">edit</a>

@endsection