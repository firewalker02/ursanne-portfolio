@include('flash')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ursanne Contact</title>

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
    <!-- <link rel="stylesheet" href="assets_1/plugins/tiny-slider/tiny-slider.css"> -->

	<!-- Theme CSS -->
	<!-- <link id="theme-style" rel="stylesheet" href="assets_1/css/theme-1.css"> -->

	<link id="theme-style" rel="stylesheet" href="assets_1/css/theme-new-1.css">
</head>

<body class>

	<header class="header text-center">
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Ursanne Kengne</a></h1>

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
{{--						<li class="nav-item dropdown">--}}
{{--							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--								<i class="fas fa-cogs fa-fw me-2"></i>More Pages--}}
{{--							</a>--}}
{{--							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
								<li><a class="dropdown-item" href="#">Education</a></li>
								<li><a class="dropdown-item" href="#">Experience</a></li>
								<!-- <li><a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a></li>
								<li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li> -->
{{--							</ul>--}}
{{--						</li>--}}
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
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Contact</h2>
			    <div class="intro">
			    <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a  class="text-link" href="https://www.bing.com/ck/a?!&&p=df7092ec8ecae754JmltdHM9MTY4MDIyMDgwMCZpZ3VpZD0wMTBkNzE2ZC1kMmQxLTZlMDctMzRiOS02MWQ1ZDNmYjZmZTYmaW5zaWQ9NTE3Mw&ptn=3&hsh=3&fclid=010d716d-d2d1-6e07-34b9-61d5d3fb6fe6&psq=gmail+login&u=a1aHR0cHM6Ly9tYWlsLmdvb2dsZS5jb20vbWFpbA&ntb=1">kengnekengneu@gmail.com</a></p>
			    <p>Want to get connected? Follow me on the social channels below.</p>
			    <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="twitter" href="https://twitter.com/Firewalker_02"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a class="linkedln" href="https://www.linkedin.com/in/ursangk/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a class="github" href="https://github.com/firewalker02"><i class="fab fa-github-alt fa-fw"></i></a></li>
						<li class="list-inline-item"><a class="stack-overflow" href="https://stackoverflow.com/users/21540162/firewalker-02"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
	                <!-- <li class="list-inline-item mb-3"><a class="medium" href="#"><i class="fab fa-medium-m fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="codepen" href="#"><i class="fab fa-codepen fa-fw fa-lg"></i></a></li> -->


	                <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->


	            </ul><!--//social-list-->

			</div><!--//container-->
	    </section>
	    <section class="contact-section px-3 py-5 p-md-5">
		    <div class="container">
			    <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="{{route('send')}}">
                {{ csrf_field()  }}
			        <h3 class="text-center mb-3">Get In Touch</h3>
			        <div class="row g-3">
		                <div class="col-12 col-md-6">
		                    <label class="sr-only" for="cname">Name</label>
		                    <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
		                </div>
		                <div class="col-12 col-md-6">
		                    <label class="sr-only" for="cemail">Email</label>
		                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true">
		                </div>
		                <!-- <div class="col-12">
			                <select id="services" class="form-select" name="services">
								<option selected>Select a service package you're interested in...</option>
								<option value="basic">Basic</option>
								<option value="standard">Standard</option>
								<option value="premium">Premium</option>
								<option value="not sure">Not sure</option>
							</select>
							<div class="mt-2">
							    <small class="form-text text-muted pt-1"><i class="fas fa-info-circle me-2 text-primary"></i>Want to know what's included in each package? Check the <a class="text-link" href="services.html" target="_blank">Services &amp; Pricing</a> page.</small>
							</div>
						</div> -->

		                <div class="col-12">
		                    <label class="sr-only" for="cmessage">Your message</label>
		                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
		                </div>
		                 <div class="form-group col-12">
		                    <button type="submit" class="btn btn-block btn-primary py-2">Send Now</button>
		                </div>
		            </div><!--//form-row-->
		        </form>
		    </div><!--//container-->
	    </section>




    <footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy; <a href="#" target="_blank">Ursanne Kengne</a></small>
		</footer>

        </div><!--//main-wrapper-->


    <script src="assets_1/plugins/popper.min-2-9-2.js"></script>
	<script src="assets_1/plugins/bootstrap/js/bootstrap.min.js"></script>



    <!-- JAVASCRIPT RESPONSIVE PROPERTIES -->
	<!-- <script type="text/javascript" src="assets_1/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets_1/plugins/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="assets_1/js/isotope-custom.js"></script> -->

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="assets_1/js/demo/style-switcher.js"></script>

	<!-- Dark Mode -->
	<script src="assets_1/plugins/js-cookie.min.js"></script>
	<script src="assets_1/js/dark-mode.js"></script>

</body>
</html>
