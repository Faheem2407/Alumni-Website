<html lang="en">
<head>
		<title>Jkkniu Alumni Website</title>
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
			<i>Jkkniu Alumni</i>
		</a>
		
		
		
		
		<div class="collapse navbar-collapse p-2" id="navMenu">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2">
			<li class="nav-item"><a class="nav-link h5" href="{{route('home')}}">Home</a></li>
			<li class="nav-item"><a class="nav-link h5" href="{{route('about')}}">About</a></li>
			<li class="nav-item"><a class="nav-link h5" href="{{route('contact')}}">Contact</a></li>
			<li class="nav-item"><a class="nav-link h5" href="{{route('news')}}">News</a></li>
			
			
			
			
			
			<span>&nbsp;&nbsp;</span>
			<li class="nav-item">
				<div class="dropdown">
					  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						Faculty
					  </button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					
						<li><a class="dropdown-item" href="#">
							Faculty of Arts
						</a></li>
						
						<li><a class="dropdown-item" href="#">
							Faculty of Science And Engineering
						</a></li>
						
						<li><a class="dropdown-item" href="#">
							Faculty of Social Science
						</a></li>
						
						<li><a class="dropdown-item" href="#">
							Faculty of Bussiness Administration
						</a></li>
						
						<li><a class="dropdown-item" href="#">
							Faculty of Fine Arts
						</a></li>
						
						<li><a class="dropdown-item" href="#">
							Faculty of Law
						</a></li>												
					</ul>
				</div>
			</li>	
			
			
			<span>&nbsp;&nbsp;</span>
			<li class="nav-item">
				<div class="dropdown">
					  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						Organizations
					  </button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="#">Advisors</a></li>
						<li><a class="dropdown-item" href="#">Executive Committee</a></li>
						<li><a class="dropdown-item" href="#">Volunteers</a></li>
					</ul>
				</div>
			</li>
			
			
		</ul>
		</div>
		
		
		
		
		
		
		
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
