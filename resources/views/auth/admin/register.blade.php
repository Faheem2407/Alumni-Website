@include('component.admin.header')
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
					<h1 class="bg-dark text-white text-center p-2">Admin Registration Form</h1>
					<form class="p-5 card shadow-lg" action="{{route('seek.permission.create.admin.registration')}}" method="post" >
						@csrf
						<div class="p-2">
						<label for="admin_name">Admin Name</label>
						<input class="form-control form-control-sm" id="admin_name" name="admin_name" placeholder="enter admin name" value="{{old('admin_name')}}" required>
						</div>
						<div class="p-2">
						<label for="admin_email">Email Address</label>
						<input class="form-control form-control-sm" id="admin_email" name="admin_email" placeholder="enter email address" required value="{{old('admin_email')}}" >
						</div>
						<div class="p-2">
						<label for="admin_password">Password</label>
						<input class="form-control form-control-sm" type="password" id="admin_password" name="admin_password" placeholder="enter password" required value="{{old('admin_password')}}">
						</div>
						<div class="p-2">
						<label for="admin_confirm_password">Confirm Password</label>
						<input class="form-control form-control-sm" type="password" id="admin_confirm_password" name="admin_confirm_password" placeholder="enter confirm password" required value="{{old('admin_confirm_password')}}">
						</div>	
						<div class="p-2">
							<label for="department">Department : </label>

							<select  name="department" id="department" required>
							  <option selected>select department name</option>
							  <option value="superadmin">Super Admin</option>
							  <option value="cse">CSE</option>
							  <option value="ese">ESE</option>
							  <option value="eee">EEE</option>
							  <option value="statistics">STATISTICS</option>
							  <option value="bangla">Bangla Language and Literature</option>
							  <option value="english">English Language and Literature</option>
							  <option value="music">Music</option>
							  <option value="tps">Theatre and Performance Studies</option>
							  <option value="film">Film and Media</option>
							  <option value="philosophy">Philosophy</option>
							</select> 
						</div>

						<div class="p-2">
						<input class="form-control btn btn-success" type="submit" name="submit" value="Register" >
						</div>
						<div>
							@if(session('msg'))
							<div class="alert alert-danger" role="alert">
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
						
												
						
						<a href="{{route('auth.admin.login')}}" class="text-center">Login as admin</a>
					</form>
				</div>
				<div class="col-2"></div>
			</div>	
</div>
	
</body>
</html>

@include('component.footer')