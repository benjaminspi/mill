@extends('layout')

@section('title')
	Create Mill
@endsection

@section('content')

	<h1>Create</h1>

	<br>

	<form method="POST" action="{{ route('muehlen.store') }}" class="form-horizontal">

		{{ csrf_field() }}

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="title" name="title" placeholder="Name" value="" required>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Description</label>
			<div class="col-sm-10">
			  <textarea class="form-control" id="description" name="description" rows="4"  required></textarea>
			</div>
		</div>

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