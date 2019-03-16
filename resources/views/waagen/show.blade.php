@extends('layout')

@section('title')
	Waage
@endsection

@section('content')

	<h1>{{ $waagen->name }}</h1>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<p>{{ $waagen->beschreibung }} <br> 
		<a href="/waagen/{{ $waagen->id }}/edit">edit</a>
	</p>


	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

@endsection