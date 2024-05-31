<html lang="en">
<head>
	<title>CSE Alumni | Login</title>
	<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
</head>
<body>
	<div class="container ">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 p-5">
					<h1 class="bg-dark text-white text-center p-2">Member Login Form</h1>
					<form class="p-5 card shadow-lg" action="{{route('member.login')}}" >
						@csrf
						<div>
							@if(session('msg'))
							<div class="alert alert-success" role="alert">
								{{ session('msg') }}
							</div>
							@endif
											 
							{{-- After --}}
							@session('status')
							<div class="alert alert-success" role="alert">
								{{ $msg }}
							</div>
							@endsession
						</div>
						<div class="p-2">
						<label for="email">Email Address</label>
						<input class="form-control form-control-sm" type="email" id="email" name="email" placeholder="enter email address" required>
						</div>
						<div class="p-2">
						<label for="pass">Password</label>
						<input class="form-control form-control-sm" type="password" id="password" name="password" placeholder="enter password" required>
						</div>
						<div class="p-2">
						<input class="form-control btn btn-success" type="submit" name="submit" value="Login" >
						</div>
						<a href="{{route('auth.admin.login')}}" class="text-center">Login as admin</a>
					</form>
				</div>
				<div class="col-2"></div>
			</div>	
</div>
	
</body>
</html>