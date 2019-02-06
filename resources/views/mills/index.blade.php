@extends('layout')

@section('title')
	Mills Overview
@endsection

@section('content')

	<h1>Mills Overview</h1>

	<ul>
		@foreach( $mills as $mill )

		<li><a href="/muehlen/{{ $mill->id }}/edit">{{ $mill->title }}</a></li>

		@endforeach
	</ul>

@endsection