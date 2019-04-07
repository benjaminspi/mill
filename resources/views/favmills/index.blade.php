@extends('layout')

@section('title')
	Favmills Overview
@endsection

@section('content')

	<h1>Favmills Overview of user: {{ $user->email }}</h1>

	<div class="mx-auto" style="width: 200px; height: 50px;"></div>

	<a href="/favmills/create" class="btn btn-primary">create</a>

	<div class="mx-auto" style="width: 200px; height: 10px;"></div>

	<ul class="list-group">

		@foreach( $user->mills as $mill )

		<li class="list-group-item">
			<a href="/favmills/{{ $mill->id }}">
				<strong>{{ $mill->title }}</strong><br>
				{{ $mill->description }}
			</a><br><br>

			{{-- very difficult to get the correct id of the entry in the favmill db for the action URL --}}
			<form method="POST" action="/favmills/{{ $user->favmills->where('mill_id', $mill->id)->first()->id }}" class="form-horizontal">

				{{ method_field('DELETE') }}
				{{ csrf_field() }}

				<div class="form-group">
					<div class="col-sm-10">
					  <button type="submit" class="btn btn-danger">Remove</button>
					</div>
				</div>

			</form>
		</li>

		@endforeach

	</ul>

	<br>
	<h2>add to favorites</h2>

	<div>

		<ul class="list-group">

		@foreach( $not_favmills as $mill )

			<li class="list-group-item" style="padding-left: 40px;">

				<form method="POST" id="form-{{ $mill->id }}" action="{{ route('favmills.store') }}" class="form-horizontal">
					{{ csrf_field() }}
					{{-- {{ method_field('PATCH') }} --}}
					<label class="checkbox" for="{{ $mill->id }}" >
						<input type="checkbox" id="{{ $mill->id }}" name="completed" onclick="document.getElementById('form-{{ $mill->id }}').submit();">
						{{ $mill->title }}<br>
					</label>

					{{ $mill->description }}

					<input type="hidden" name="mill_id" value="{{ $mill->id }}">
					<input type="hidden" name="user_id" value="{{ $user->id }}">

				</form>

			</li>

		@endforeach

		</ul>

	</div>

@endsection