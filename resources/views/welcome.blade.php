@extends('layout')

@section('title')
	Home Page
@endsection

@section('content')
	
	<h1>Home 1</h1>

	<ul>
		@foreach( $mills as $mill )

		<li>{{ $mill }}</li>

		@endforeach
	</ul>

@endsection