@extends('layout')

@section('title')
	Home Page
@endsection

@section('content')

	<h1>Home 2</h1>

	<ul>
		@foreach( $mills as $mill )

		<li>{{ $mill }}</li>

		@endforeach
	</ul>

	<div id='app'>

		<example-component-2></example-component-2>

	</div>

@endsection