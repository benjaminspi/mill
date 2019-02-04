<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Projects</h1>

	<ul>

	@foreach ( $projects as $project )
		<li>Name:{{ $project->title }} Description:{{ $project->description }}</li>
	@endforeach

	</ul>

</body>
</html>