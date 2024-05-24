<html>
<head>
	<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
</head>
<body>

<div class="container">
    <h1>Super Admin page</h1>

	
	
	<table border="1" class="table table-dark">
	<tr>
		<td>Admin Name</td>
		<td>Admin Email</td>
		<td>Admin Department</td>
		<td>Approve Action</td>
		<td>Delete Action</td>
	</tr>

	@foreach($admins as $admin)
		
	<tr>
		<td>{{$admin->admin_name}}</td>
		<td>{{$admin->admin_email}}</td>
		<td>{{$admin->department}}</td>
		<td>
			<form action="{{route('create.admin.registration.bySuperadmin')}}" method="post">
				@csrf
					<input name="admin_name" hidden value="{{$admin->admin_name}}"/>
					<input name="admin_email" hidden  value="{{$admin->admin_email}}"/>
					<input name="admin_password" hidden    value="{{$admin->admin_password}}"/>
					<input name="admin_confirm_password"  hidden  value="{{$admin->admin_confirm_password}}"/>
					<input name="department" hidden  value="{{$admin->department}}"/>
					<input name="id" hidden  value="{{$admin->id}}"/>
					
					<input class="btn btn-success" type="submit" value="Approve"/>
			</form>
		</td>
		<td>
			<form action="{{route('permission.admin.cancel')}}" method="post">
				@csrf
				<input name="id" hidden value="{{$admin->id}}"/>
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
