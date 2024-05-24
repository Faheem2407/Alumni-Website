<html lang="en">
<head>
		<title>Welcome to CSE Alumni</title>
		<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta charset="UTF-8">
		<meta name="description" content="JKKNIU CSE alumni management application">
		<meta name="keywords" content="HTML, CSS, JavaScript, Laravel">
		<meta name="author" content="Fahim">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg shadow-sm p-3 bg-dark sticky-top">
	<div class="container-fluid">
		<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
			<span class="navbar-toggler-icon btn btn-outline-info"></span>
		</button>
		
		<a class="navbar-brand h1" href="{{route('home')}}">
			<i>Jkkniu Alumni Website</i>
		</a>
		

		<div>
			<a class="entry btn btn-outline-primary" href="{{route('auth.login')}}">Login</a>
			<a class="entry btn btn-outline-primary" href="{{route('auth.register')}}">Become a member</a>
			&nbsp;&nbsp;
			<a class="btn btn-outline-primary" 
			href='{{asset("https://jkkniu.edu.bd/")}}' target="_blank">
				<img src="{{asset('images/logo.png')}}" title="jkkniu" alt="Jkkniu" width="60" height="55">
			</a>
		</div>
	</div>
</nav>

