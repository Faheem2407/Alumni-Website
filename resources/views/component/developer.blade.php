@extends('layout')

@section('content')
	<h1 class="text-center pt-5">Developers List</h1>
	<div class="container d-flex justify-content-center">
		<div class="row p-3">
			<div class="card p-5" style="width: 20rem;height:32rem">
				<img class="rounded-circle" src="{{asset('images/saifulsir.jpg')}}" width="200" height="200" class="card-img-top" alt="saifulsir.jpg">
					<div class="card-body">
						<p class="card-text">
							<span class="d-block fs-4 fw-bold mt-3">DR. MD. Saiful Islam</span>
							<span class="d-block fs-7 mt-3">Supervisor</span>
							<div class="mt-2" style="font-size:14px;">
								Professor<br>
								Dept. of CSE, JKKNIU <br>
								<a class="text-decoration-none text-dark" href="#" target="_blank"><i class="fa-solid fa-envelope"></i></i> saifulmath@gmail.com</a>
							</div>
							<div class="fs-5 mt-2">
								<a class="mx-1" href='{{asset("https://www.facebook.com/saifulmath")}}' target="_blank"><i class="fab fa-facebook text-primary "></i></a>
								<a class="mx-1" href="#" target="_blank">
									<i class="fab fa-linkedin-in text-primary"></i></a>

								<a class="mx-1" href="#" target="_blank"><i class="fas fa-globe text-primary "></i></a>                
						</div>
					</p>
				</div>
			</div>
		</div>
		<br>
		<div class="row p-3" >
					<div class="card p-5" style="width: 20rem; height:32rem">
					  <img class="rounded-circle" src="{{asset('images/fahim1.jpg')}}" width="200" height="auto" class="card-img-top" alt="fahim.jpg">
					  <div class="card-body">
						<p class="card-text">
							<span class="d-block fs-4 fw-bold mt-3">MD. Abed Hasan Fahim</span>
							<span class="d-block fs-7 mt-3">Full-Stack Web Developer</span>
							<div class="mt-2" style="font-size:14px;">
								<i class="fas fa-graduation-cap"></i> Session: 2019-20 <br>
								Dept. of CSE, JKKNIU <br>
								<a class="text-decoration-none text-dark" href='{{asset("mailto:md.abedhasanfahim@gmail.com")}}' target="_blank"><i class="fa-solid fa-envelope"></i></i> fahim24@gmail.com</a>
							</div>
							<div class="fs-5 mt-2">
								<a class="mx-1" href="{{asset('https://www.facebook.com/abedhasan.fahim')}}" target="_blank"><i class="fab fa-facebook text-primary"></i></a>
								<a class="mx-1" href='{{asset("https://www.linkedin.com/in/abedhasan-fahim-a78ab51bb/")}}' target="_blank">
									<i class="fab fa-linkedin-in text-primary"></i></a>

								<a class="mx-1" href="#" target="_blank"><i class="fas fa-globe text-primary "></i></a>                
							</div>
						</p>
					  </div>
					</div>
					&nbsp;&nbsp;
				<div class="card p-5" style="width: 20rem;height:32rem">
					<img class="rounded-circle" src="{{asset('images/kamrul.jpg')}}" width="200" height="auto" class="card-img-top" alt="fahim.jpg">
					<div class="card-body">
						<p class="card-text">
							<span class="d-block fs-4 fw-bold mt-3">Kamrul Hasan</span>
							<span class="d-block fs-7 mt-3">Front-End Web Developer</span>
							<div class="mt-2" style="font-size:14px;">
								<i class="fas fa-graduation-cap"></i> Session: 2019-20 <br>
								Dept. of CSE, JKKNIU <br>
								<a class="text-decoration-none text-dark" href="mailto:kamrul@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></i> kamrul@gmail.com</a>
							</div>
							<div class="fs-5 mt-2">
								<a class="mx-1" href='{{asset("https://www.facebook.com/kamrulhasan.rohani.11")}}' target="_blank"><i class="fab fa-facebook text-primary "></i></a>
								<a class="mx-1" href="#" target="_blank">
									<i class="fab fa-linkedin-in text-primary"></i></a>

								<a class="mx-1" href="#" target="_blank"><i class="fas fa-globe text-primary "></i></a>                
							</div>
						</p>
					</div>
				</div>
		</div>
	</div>
	<div style="height:5rem">
	</div>
@endsection
