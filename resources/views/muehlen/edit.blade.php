@extends('layout')

@section('title')
	Mills Overview
@endsection

@section('content')

	<h1>{{ $muehlen->title }}</h1>

	<br>

	<form method="POST" action="/muehlen/{{ $muehlen->id }}" class="form-horizontal">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="title" name="title" placeholder="Name" value="{{ $muehlen->title }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Description</label>
			<div class="col-sm-10">
			  <textarea class="form-control" id="description" name="description" rows="4">{{ $muehlen->description }}</textarea>
			</div>
		</div>

		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <div class="checkbox">
			    <label><input type="checkbox"> Remember me</label>
			  </div>
			</div>
		</div>

		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>

	</form>

	<form method="POST" action="/muehlen/{{ $muehlen->id }}" class="form-horizontal">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>

	</form>

@endsection