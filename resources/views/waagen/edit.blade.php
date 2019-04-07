@extends('layout')

@section('title')
	Mills Overview
@endsection

@section('content')

	<h1>{{ $waagen->title }}</h1>

	<p>Passt zu: {{ $waagen->mill->title }}</p>

	<br>

	<form method="POST" action="/waagen/{{ $waagen->id }}" class="form-horizontal">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $waagen->name }}">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Description</label>
			<div class="col-sm-10">
			  <textarea class="form-control" id="beschreibung" name="beschreibung" rows="4">{{ $waagen->beschreibung }}</textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <div class="checkbox">
			  	@foreach( $muehlen as $muehle )
					<label>
						<input type="radio" name="mill_id" value="{{ $muehle->id }}" {{ ( $waagen->mill->id == $muehle->id ) ? "checked" : "" }}> {{ $muehle->title }}
					</label>
					<br>
				@endforeach
			  </div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>

	</form>

	<form method="POST" action="/waagen/{{ $waagen->id }}" class="form-horizontal">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>

	</form>

@endsection