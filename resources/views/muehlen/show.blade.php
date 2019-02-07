@extends('layout')

@section('title')
	Mill
@endsection

@section('content')

	<h1>{{ $muehlen->title }}</h1>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<p>{{ $muehlen->description }}</p>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<a href="/muehlen/{{ $muehlen->id }}/edit">edit</a>

@endsection