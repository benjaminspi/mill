@extends('layout')

@section('title')
	Mills Overview
@endsection

@section('content')

	<h1>Mills Overview</h1>

	<div class="mx-auto" style="width: 200px; height: 50px;"></div>

	<a href="/muehlen/create" class="btn btn-primary">create</a>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<ul class="list-group">
		@foreach( $mills as $mill )

		<li class="list-group-item"><a href="/muehlen/{{ $mill->id }}">{{ $mill->title }}</a></li>

		@endforeach
	</ul>

@endsection