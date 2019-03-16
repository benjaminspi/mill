@extends('layout')

@section('title')
	Create Waage
@endsection

@section('content')

	<h1>Create</h1>

	<br>

	<form method="POST" action="{{ route('waagen.store') }}" class="form-horizontal">

		{{ csrf_field() }}

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Beschreibung</label>
			<div class="col-sm-10">
			  <textarea class="form-control" id="beschreibung" name="beschreibung" rows="4"  required></textarea>
			</div>
		</div>

		<input type="hidden" id="mill_id" name="mill_id" value="{{ $request->muehle }}">

		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>

	</form>

	@if ( $errors->any() )
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach( $errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

@endsection