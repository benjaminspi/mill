@extends('layout')

@section('title')
	Mills Overview
@endsection

@section('content')

	<h1>{{ $muehle->title }}</h1>

	<br>

	<form class="form-horizontal" action="/action_page.php">
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">Name</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" placeholder="Name" value="{{ $muehle->title }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">Description</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" id="description" rows="4">{{ $muehle->description }}</textarea>
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
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	  </div>
	</form>

@endsection