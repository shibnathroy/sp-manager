<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SP Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div id="app">
		<my-header></my-header>
		<div class="container">
			<router-view></router-view>
		</div>
		<my-footer></my-footer>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>