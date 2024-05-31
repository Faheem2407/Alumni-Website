<html>
<head>
	<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
</head>
<body>

<div class="container">
    <h1>Philosophy Department Member Approval Page</h1>

	
	
	<table border="1" class="table table-dark">
	<tr>
		<td>Name</td>
		<td>Father's Name</td>
		<td>Mother's Name</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Department</td>
		<td>Session</td>
		<td>Address</td>
		<td>Job</td>
		<td>Blood</td>
		<td>Image</td>
		<td>Approve Action</td>
		<td>Delete Action</td>
	</tr>

	@foreach($members as $member)
		
	<tr>
		<td>{{$member->name}}</td>
		<td>{{$member->fname}}</td>
		<td>{{$member->mname}}</td>
		<td>{{$member->phone}}</td>
		<td>{{$member->email}}</td>
		<td>{{$member->department}}</td>
		<td>{{$member->session}}</td>
		<td>{{$member->address}}</td>
		<td>{{$member->job}}</td>
		<td>{{$member->blood}}</td>
		<td>{{$member->image}}</td>
		<td>
			<form action="{{route('create.member.registration.byAdmin')}}" method="post">
				@csrf
					<input name="name" hidden value="{{$member->name}}"/>
					<input name="fname" hidden  value="{{$member->fname}}"/>
					<input name="mname" hidden  value="{{$member->mname}}"/>
					<input name="phone" hidden  value="{{$member->phone}}"/>
					<input name="email" hidden  value="{{$member->email}}"/>
					<input name="department" hidden  value="{{$member->department}}"/>
					<input name="session" hidden  value="{{$member->session}}"/>
					<input name="address" hidden  value="{{$member->address}}"/>
					<input name="job" hidden  value="{{$member->job}}"/>
					<input name="blood" hidden  value="{{$member->blood}}"/>
					<input name="image" hidden  value="{{$member->image}}"/>
					<input name="password" hidden    value="{{$member->password}}"/>
					<input name="confirm_password"  hidden  value="{{$member->confirm_password}}"/>
					<input name="id" hidden  value="{{$member->id}}"/>
					
					<input class="btn btn-success" type="submit" value="Approve"/>
			</form>
		</td>
		<td>
			<form action="{{route('permission.member.cancel')}}" method="post">
				@csrf
				<input name="id" hidden value="{{$member->id}}"/>
				<input class="btn btn-danger" type="submit" value="Delete"/>
			</form>
		</td>
	</tr>
	@endforeach
	
	
	
	</table>
</div>
	<div class="container">
		<form action="{{route('auth.admin.login')}}" method="post">
			@csrf
			<input type="submit" value="Admin Logout" class="btn btn-primary">
		</form>
	</div>
</body>

