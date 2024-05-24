<html lang="en">
<head>
	<title>CSE Alumni | Register</title>
	<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
</head>
<body>
	<div class="container ">
	<div class="row">
	<div class="col-2"></div>
	<div class="col-8 p-5">
	<h1 class="bg-dark text-white text-center p-2">Member Registration Form</h1>
	<form class="p-5 card shadow-lg" action="{{route('auth.member.seek-permission.register')}}" method="post" enctype="multipart/form-data">
		@csrf
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
		<div class="p-2">
			<label for="name">Your Name</label>
			<input class="form-control form-control-sm" type="text" id="name" name="name" placeholder="enter your name" required>
		</div>
		<div class="p-2">
			<label for="fname">Father's Name</label>
			<input class="form-control form-control-sm" type="text" id="fname" name="fname" placeholder="enter your father's name" required>
		</div>
		<div class="p-2">
			<label for="mname">Mother's Name</label>
			<input class="form-control form-control-sm" type="text" id="mname" name="mname" placeholder="enter your mother's name" required>
		</div>
		<div class="p-2">
			<label for="phone">Phone No.</label>
			<input class="form-control form-control-sm" type="text" id="phone" name="phone" placeholder="enter your phone number" required>
		</div>
		<div class="p-2">
			<label  for="email">Email Address</label>
			<input class="form-control form-control-sm" type="email" id="email" name="email" placeholder="enter your email address" required>
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
			<label for="session">Session</label>
			<input class="form-control form-control-sm" type="text" id="session" name="session" placeholder="enter your session" required>
		</div>
		<div class="p-2">
			<label for="address">Address</label>
			<input class="form-control form-control-sm" type="text" id="address" name="address" placeholder="enter your address" required>
		</div>
		<div class="p-2">
			<label for="job">Occupation</label>
			<input class="form-control form-control-sm" type="text" id="job" name="job" placeholder="enter your occupation" required>
		</div>

		
		<div class="p-2">
			<label for="blood">Blood group:</label>

			<select  name="blood" id="blood">
			  <option selected>select blood group</option>
			  <option value="A+">A+</option>
			  <option value="A-">A-</option>
			  <option value="B+">B+</option>
			  <option value="B-">B-</option>
			  <option value="AB+">AB+</option>
			  <option value="AB-">AB-</option>
			  <option value="O+">O+</option>
			  <option value="O-">O-</option>
			</select> 
		</div>
		
		<div class="p-2">
			<label for="image">Upload Your Image</label>
			<input class="form-control form-control-sm" type="file" id="image" name="image" required>
		</div>
			
		<div class="p-2">
			<label for="password">Password</label>
			<input class="form-control form-control-sm" type="password" id="password" name="password" placeholder="enter password" required>
		</div>
		
		<div class="p-2">
			<label for="confirm_password">Confirm Password</label>
			<input class="form-control form-control-sm" type="password" id="confirm_password" name="confirm_password" placeholder="enter confirm password" required>
		</div>

		
		<div class="p-2">
			<input class="form-control btn btn-success" type="submit" name="submit" value="Register" >
		</div>
		
		<a href="{{route('auth.admin.register')}}" class="text-center">Register as admin</a>
	</div>
	</form>	

	
	<div class="col-2">
	</div>
	</div>
	</div>	
</body>
</html>