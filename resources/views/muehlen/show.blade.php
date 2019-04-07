@extends('layout')

@section('title')
	Mill
@endsection

@section('content')

	<h1>{{ $muehlen->title }}</h1>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<p>{{ $muehlen->description }} <br> 
		<a href="/muehlen/{{ $muehlen->id }}/edit">edit</a>
	</p>


	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	{{-- @if( $muehlen->waages->count() ) --}}

	<h2>Passende Waagen</h2>

	<ul class="list-group">
		@foreach( $muehlen->waages as $waage )

		<li class="list-group-item">
			<a href="/waagen/{{ $waage->id }}">{{ $waage->name }}</a><br>
			<p>{{ $waage->beschreibung }}</p>
		</li>

		@endforeach

		<li class="list-group-item">
			<a href="/waagen/create?muehle={{ $muehlen->id }}">+ add new</a><br>
		</li>

	</ul>

	{{-- @endif --}}

@endsection