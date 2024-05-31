<html>
<head>
	<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
</head>
<body>

<div class="container">
    <h1>JKKNIU All Department Alumni List</h1>

	
	
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
	</tr>
	@endforeach
	
	
	
	</table>
</div>
	<div class="container">
		<form action="{{route('auth.login')}}" method="post">
			@csrf
			<input type="submit" value="Member Logout" class="btn btn-primary">
		</form>
	</div>
</body>






