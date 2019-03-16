@extends('layout')

@section('title')
	Waagen Overview
@endsection

@section('content')

	<h1>Waagen Overview</h1>

	<div class="mx-auto" style="width: 200px; height: 50px;"></div>

	<a href="/waagen/create" class="btn btn-primary">create</a>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<ul class="list-group">
		@foreach( $waagen as $waage )

		<li class="list-group-item">
			<a href="/waagen/{{ $waage->id }}">{{ $waage->name }}</a> <br>
			{{ $waage->mill_id }}
		</li>

		@endforeach
	</ul>

@endsection