@include('flash')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ursanne-Education</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
    <script defer src="assets_1/fontawesome/js/all.js"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets_1/plugins/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<!-- <link id="theme-style" rel="stylesheet" href="assets_1/css/theme-1.css"> -->

	<link id="theme-style" rel="stylesheet" href="assets_1/css/theme-new-1.css">
</head>

<body class>

	<header class="header text-center">
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="#">Ursanne Kengne</a></h1>

			<nav class="navbar navbar-expand-lg navbar-dark" >

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets_1/images/ursanne_photo.jpg" alt="image" >

						<div class="bio mb-3">Hi, my name is Ursanne Kengne. I am a current Computer Science student at York University. I have been learning computer Science for three years already. To learn more about me, I invite you to follow the links below.<br><a href="{{route('aboutMe')}}">Find out more about me</a></div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
						<li class="list-item"><a href="https://twitter.com/Firewalker_02">   <i class="fab fa-twitter fa-fw"></i></a>Twitter</li><br>
			            <li class="list-item">&nbsp;&nbsp;<a href="https://www.linkedin.com/in/ursangk/"><i class="fab fa-linkedin-in fa-fw"></i></a>Linkedln</li><br>
			            <li class="list-item"><a href="https://github.com/firewalker02">     <i class="fab fa-github-alt fa-fw"></i></a>Github</li><br>
						<li class="list-inline-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="https://stackoverflow.com/users/21540162/firewalker-02"><i class="fab fa-stack-overflow fa-fw"></i></a>stackoverflow</li>
						<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i>CodePen</a></li> -->
						</ul><!--//social-list-->
						<hr>
					</div><!--//profile-section-->

					<ul class="navbar-nav flex-column text-start">
						<li class="nav-item">
							<a class="nav-link active" href="{{route('aboutMe')}}"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('project')}}"><i class="fas fa-laptop-code fa-fw me-2"></i>Projects</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="https://docs.google.com/document/d/15BQpWdoid6QL8M6r-AR6T0pkrSEOEk3H/edit?usp=sharing&ouid=100093265532362357373&rtpof=true&sd=true"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-cogs fa-fw me-2"></i>More Pages
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{route('education')}}">Education</a></li>
								<li><a class="dropdown-item" href="{{route('experience')}}">Experience</a></li>
								<!-- <li><a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a></li>
								<li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li> -->
							</ul>
						</li>
					</ul>

					<div class="my-2">
						<a class="btn btn-primary" href="{{route('hire')}}" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
					</div>


					<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
					    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust me-1"></i>Dark Mode</h4>

					    <input class="toggle" id="darkmode" type="checkbox">
					    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

					</div><!--//dark-mode-toggle-->

				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>












<div class="main-wrapper">

<section class="featured-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Education</h2>
				<div class="row">
					<div class="col-md-6 mb-5">

					<!-- YORKU -->
					<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/yorku-logo.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://www.yorku.ca/" class="theme-link"> Candidate for BSc Honours, York University</a></h5>
										<p class="card-text">Joined University as an Undergraduate student and was admitted into the Bachelor of Computer Science, Honours, 120 credit program, within lassonde School of Engineering. This program
                                        is a 4-year one. I started since January 2021 with January 2025 as potential date for the completion of the program.
                                        </p>
										<p class="card-text"><large class="text-visible">Jan 2021-Present: Toronto, Canada</large></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="theme-link" href="https://www.yorku.ca/"> Get to know YorkU</a>
								<div class="link-mask-text">
								<a class="btn btn-primary btn-lg" href="https://www.yorku.ca/" >
										<i class="fas fa-eye me-2"></i> Get to Know York University
									</a>
                                    <br> <br><br>
                                    <a class="btn btn-primary" href="https://lassonde.yorku.ca">
										<i class="fas fa-eye me-2"></i> Get to Know Lassonde School of Engineering.
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

					<!-- SAINT BENEDICT -->

					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/saint.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://www.inovedu.net/schooldetail/1070/fr/college-catholique-bilingue-saint-benoit"class="theme-link"></a>Saint Benedict College</h5>
										<p class="card-text">Graduated in a 2 years' time applied Mathematics and Physics Secondary School Program from Saint Benedict College. The
                                            curriculum started from September 2018 to November 2020, during which I earned my GCE Advanced Level
                                        </p>
										<p class="card-text"><large class="text-visible"> Sept 2018-Jan 2020 : Yaounde,Cameroon</small></large>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class=" theme-link link-mask-link" href="https://www.inovedu.net/schooldetail/1070/fr/college-catholique-bilingue-saint-benoit"> Get to Know Saint Benedict</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://www.inovedu.net/schooldetail/1070/fr/college-catholique-bilingue-saint-benoit">
										<i class="fas fa-eye me-2"></i>Get to know Saint Benedict
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

</div>
</section>


                    <footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy; <a href="#" target="_blank">Ursanne Kengne</a></small>
		</footer>

</div>



        <!-- Javascript -->

    <!-- <script src="assets_1/plugins/popper.min.js"></script>  -->

    <!-- popper 2.9.2 is the current version used -->
    <script src="assets_1/plugins/popper.min-2-9-2.js"></script>
	<script src="assets_1/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets_1/plugins/tiny-slider/min/tiny-slider.js"></script>
	<script src="assets_1/js/testimonials.js"></script>


    <!-- Style Switcher (AT THE CHOICE OF GUEST'S EXPERIENCE) -->
	<script src="assets_1/js/demo/style-switcher.js"></script>


    <!-- Dark Mode -->
	<script src="assets_1/plugins/js-cookie.min.js"></script>
	<script src="assets_1/js/dark-mode.js"></script>


