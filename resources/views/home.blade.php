 @include('flash')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ursanne-new Portfolio</title>

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

						<div class="bio mb-3">Hi, my name is Ursanne Kengne. I am a current Computer Science student at York University. I have been learning computer Science for three years already. To learn more about me, I invite you to follow the links below.<br><a href="#about">Find out more about me</a></div><!--//bio-->
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
								<li><a class="dropdown-item" href="education">Education</a></li>
								<li><a class="dropdown-item" href="experience">Experience</a></li>
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
		<section class="about-me-section p-3 p-lg-5 theme-bg-light">
			<div class="container">
				<div class="profile-teaser row">

					<div class="col">
						<h2 class="name font-weight-bold mb-1">Ursanne Kengne</h2>
						<div class="tagline mb-3">Entry Level Software Developer</div>
						<div class="bio mb-4">I'm an entry-level software developer, proficient in back-end development. Want to know how I may help your project? Check out my projects <a class="text-link" href="{{route('project')}}">projects</a> and <a class="text-link" href="https://docs.google.com/document/d/15BQpWdoid6QL8M6r-AR6T0pkrSEOEk3H/edit?usp=sharing&ouid=100093265532362357373&rtpof=true&sd=true">online resume</a>.
						</div><!--//bio-->
						<div class="mb-4">
							<a class="btn btn-primary me-2 mb-3" href="{{route('project')}}"><i class="fas fa-arrow-alt-circle-right me-2"></i><span class="d-none d-md-inline">View</span> Projects</a>
							<a class="btn btn-secondary mb-3" href="https://docs.google.com/document/d/15BQpWdoid6QL8M6r-AR6T0pkrSEOEk3H/edit?usp=sharing&ouid=100093265532362357373&rtpof=true&sd=true"><i class="fas fa-file-alt me-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
						</div>
					</div><!--//col-->

					<div class="col-md-5 col-lg-5">
					    <img class="profile-image img-fluid mb-3 mb-lg-0 me-md-0" src="assets_1/images/profile-lg.jpg" alt="">
					</div>
				</div>
			</div>
		</section><!--//about-me-section-->

		<!-- ABOUT ME SECTION -->

		<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3"> <a id="about"> About Me</a> </h2>
				<div class="section-intro mb-5">

				My name is Ursanne Kengne, student at York University majoring in Computer Science. I am currently 20 years old. When young, I quickly realize my abilities and passion for the computer World and innovative technologies which brings to me to the conclusion to study Computer Science after graduating from High School. Willing to learn the best current software and hardware technologies, I decided to pursue my studies in Computer Science at York University, Canada.
                     I have research interest in software programming, improvement in the interaction of  databases between client and server in programming environments and analysis in improvement of algorithms using dynamic programming. In the course of my academic journey, I have set the goal to achieve a PHD thesis in data Science and artificial intelligence(AI).

                    I invite you to discover my website to learn other aspects of me by clicking <a class="theme-link" href="https://animoto.com/play/0jeyv0q6ZK60zRt6wYHtNg">here</a>. Want to find out more about my experience? Check out my <a class="text-link" href="https://docs.google.com/document/d/15BQpWdoid6QL8M6r-AR6T0pkrSEOEk3H/edit?usp=sharing&ouid=100093265532362357373&rtpof=true&sd=true">online resume</a> and <a class="text-link" href="{{route('project')}}">project portfolio</a>.</div>
                Discover more on me by watching my about-me video below

                <div class="text-center">
                    <button class="btn-primary" style= "width:100%" href="https://animoto.com/play/0jeyv0q6ZK60zRt6wYHtNg"><a class="theme-link" href="https://animoto.com/play/0jeyv0q6ZK60zRt6wYHtNg">About Me Video</a></button>

                </div>
        </section>

<div class="container"><hr></div>




<!-- GOALS SECTION -->

<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">Goals&amp; Objectives</h2>
				<div class="section-intro mb-5">
					As mentioned before, my main objectives entails pursuing my academic journey to obtain my bachelor degree, and then later on  follow a Masters and PHD program research on Artificial Intelligence.
					My dream as an individual is to be an instructor at the undergraduate, graduate and post-graduate level, to convey my coding skills to other potential students, as well as being in Enterprise to apply my current
					skills, and improve them.
                    I strongly believe <a class="text-link" href="{{route('education')}}">Education</a> is the Key for a better World as "Those who do not remember the past are condemned to repeat it".
                    Nevertheless, I invite you to discover my educational journey and project portfolio which aligns with my goals through the following links.Check out my <a class="text-link" href="{{route('education')}}">educational journey</a> and <a class="text-link" href="{{route('project')}}">project portfolio</a>.</div>
</section>

<div class="container"><hr></div>




<!-- WHAT I DO SECTION -->

		<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">What I do</h2>
				<div class="section-intro mb-5">I have 2 years building Android applications using Android Studio and Java, and also skilled in building web applications using PHP laravel framework . Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a class="text-link" href="https://docs.google.com/document/d/15BQpWdoid6QL8M6r-AR6T0pkrSEOEk3H/edit?usp=sharing&ouid=100093265532362357373&rtpof=true&sd=true">online resume</a> and <a class="text-link" href="{{route('project')}}">project portfolio</a>.</div>

				<div class="row">
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-js-square"></i></div>
							<h3 class="item-title"> JavaScript</h3>
							<div class="item-desc">
								 Skilled in designing responsive web pages using JavaScript, and possess good knowledge of DOM. Want to know more? Check out my javaScript github repository at
								 <li class="list-inline-item"><a href="https://github.com/firewalker02/Code-breaker"><i class="fab fa-github-alt fa-fw"></i> code-Breaker</a></li>
							</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fas fa-database"></i></div>
							<h3 class="item-title">MySQL&amp; PHPMYADMIN</h3>
							<div class="item-desc">Skilled in writing SQL queries, creating SQL tables and administering databases using PHPMyAdmin.Have good knowledge of data Structures and proficient in applying the Concept of data Structures in complex systems.</div>
                    </div>
					</div><!--//item -->

					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-node-js"></i></div>
							<h3 class="item-title">Node.js</h3>
							<div class="item-desc">
								Skilled in using node.js assiociated with other programming languages to build responsive web applications. Want to know more? Check out this project.

							<li class="list-inline-item"><a href="https://voteapp.toupesu.com"><i class="fas fa-globe fa-fw"></i> voteapp</a></li>
						</div>
						</div><!--//item-inner-->
					</div><!--//item-->

					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-python"></i></div>
							<h3 class="item-title">Python </h3>
							<div class="item-desc">Acquired basic Object-Oriented programming skills in python</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-php"></i> <i class="fab fa-laravel"></i></div>
							<h3 class="item-title">PHP &amp;&nbsp Laravel</h3>
							<div class="item-desc">Proificient in buiding sustainable and extensible web appications using PHP laravel framework. Want to know more? Check out this website project and its github repository respectively.
								<li class='list-inline-item'><a class="theme-link" href="https://voteapp.toupesu.com" target="_blank"><i class="fas fa-globe fa-fw"></i>voteapp</a> </li>
								<li class="list-inline-item"> <a class="theme-link" href="https://github.com/firewalker02/voteapp-webVersion" target="_blank"><i class="fab fa-github-alt fa-fw"></i>github-voteapp</a></li>
							</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-npm me-2"></i></div>
							<h3 class="item-title">npm</h3>
							<div class="item-desc">Skilled in using npm software registry in software back-end development</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-html5 me-2"></i><i class="fab fa-css3-alt me-2"></i><i class="fab fa-bootstrap"></i></div>
							<h3 class="item-title">HTML,&nbspCSS&amp;&nbspBootstrap</h3>
							<div class="item-desc">Skilled in building highly-scalable web pages using html and CSS.Want to know more? check out this project at
								<li class='list-inline-item'><a href="https://voteapp.toupesu.com/"><i class="fab fa-github-alt fa-fw"></i>voteapp</a></li>

							</div>
						</div><!--//item-inner-->
					</div><!--//item-->

					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-java me-2"></i><i class="fab fa-android"></i></div>
							<h3 class="item-title">Java&amp;&nbspAndroid Studio </h3>
							<div class="item-desc">Highly proficient in writing sustainable and executable code in java Programming language. Interested to know more?Check out the following github repositories harbouring java projects.

							<li class="list-inline-item"><a href= "https://github.com/firewalker02/voteapp-Android-version"><i class="fab fa-github-alt fa-fw"></i> voteapp-Android version</a></li>
							<li class="list-inline-item"><a href="https://github.com/firewalker02/Mobile-Projects/tree/main/VendingMachine%20Project"><i class="fab fa-github-alt fa-fw"></i> vendingMachine</a></li>
							<li class="list-inline-item"><a href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects"><i class="fab fa-github-alt fa-fw"></i> GameCountryApp</a></li>
							<li class="list-inline-item"><a href= "https://github.com/UTSCCSCC01/eecs3311-group-g"><i class="fab fa-github-alt fa-fw"></i> Country indicator Modelling System</a></li>
							<li class="list-inline-item"><a href= "https://github.com/firewalker02/General-Projects/tree/main/HOSPITAL%20DATABASE"><i class="fab fa-github-alt fa-fw"></i> Hospital DataBase System</a></li>


						</div>
						</div><!--//item-inner-->
					</div><!--//item-->

					<div class="item col-6 col-lg-3">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-cuttlefish"></i></div>
							<h3 class="item-title">C</h3>
							<div class="item-desc">Experienced in C programming on a overall basis.Implement simple databases with similar functionalities as SQL databases using C structures.

							Interested in knowing more?Check out code sample at  <li class="list-inline-item"><a href= "https://github.com/firewalker02/General-Projects/tree/main/SIMPLE%20DATABASE%20FITNESS%20CLUB"><i class="fab fa-github-alt fa-fw"></i> Fitness Database System</a></li> </div>
						</div>
					</div>
				</div><!--//row-->
				<!-- <div class="text-center py-3"><a href="services.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>Services &amp; Pricing

				</a></div> -->

			</div><!--//container-->
		</section>

		<div class="container"><hr></div>


		<!-- TESTIMONIALS SECTION -->




		<!-- <div class="container"><hr></div> -->

		<!-- <section class="testimonials-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>

				<div class="testiomonial-carousel-container">
					<div class="testimonial-carousel  tiny-slider">
	                    <div class="item">
							<div class="item-inner">
								<div class="quote-holder">
									<blockquote class="quote-content">
										Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
									</blockquote>
									<i class="fas fa-quote-left"></i>

								</div> -->
								<!--//quote-holder-->

								<!-- <div class="source-holder">
									<div class="source-profile">
										<img src="assets/images/clients/profile-1.png" alt="image"/>
									</div>
									<div class="meta">
										<div class="name">Brandon James</div>
										<div class="info">Project Manager, Google</div>
									</div>
								</div> -->

								<!-- </div> -->
							<!--//item-inner-->

							<!-- </div> -->
						<!--//item-->








					<!-- </div> -->
					<!--//testimonial-carousel-->
				<!-- </div> -->
				<!--//testimonial-carousel-container-->
			<!-- </div> -->
			<!--//container-->
		<!-- </section> -->
		<!--//testimonials-section-->

		<!-- <div class="container"><hr></div> -->





                      <!-- PROJECTS SECTION -->


		<section class="featured-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
				<div class="row">
					<div class="col-md-6 mb-5">

					<!-- VOTEAPP ANDROID VERSION -->
					<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/voteapp-web.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://voteapp.toupesu.com" class="theme-link">VoteApp Project-Web version</a></h5>
										<p class="card-text">Developed a web app voting system enabling the client to create its own polls, and share for other people to vote, using PHP laravel framework.</p>
										<p class="card-text"><small class="text-muted">Client: Toupesu</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="theme-link" href="https://github.com/firewalker02/voteapp-webVersion"> View Web Page</a>
								<div class="link-mask-text">
								<a class="btn btn-primary btn-lg" href="https://voteapp.toupesu.com" style="padding: 44px 45px;">
										<i class="fas fa-eye me-2"></i> View Page.Tech used: PHP laravel frameWork, Alpine.js and Bootstrap.
									</a>
                                    <br> <br><br>
                                    <a class="btn btn-primary" href="https://github.com/firewalker02/voteapp-webVersion">
										<i class="fab fa-github me-2"></i> View GitHub Repository
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

					<!-- VOTEAPP ANDROID VERSION -->

					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/voteapp-Android.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/voteapp-Android-version"class="theme-link">voteApp Project-Android version</a></h5>
										<p class="card-text">Developing an Android voting app enabling the client to create voting polls and share to other users to vote, using java and Android Studio</p>
										<p class="card-text"><small class="text-muted">Client: Toupesu</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class=" theme-link link-mask-link" href="https://github.com/firewalker02/voteapp-Android-version"> View Github repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/voteapp-Android-version">
										<i class="fas fa-eye me-2"></i>View Github repository
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

					<!-- <div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets/images/project/project-3.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div> -->

								<!-- </div> -->
							<!--//link-mask-->

							<!-- </div> -->

						<!--//card-->

						<!-- </div> -->

					<!--//col-->

					<!-- <div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets/images/project/project-4.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Uber</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye me-2"></i>View Case Study
									</a>
								</div> -->

							<!-- </div> -->
							<!--//link-mask-->
						<!-- </div> -->
						<!--//card-->
					<!-- </div> -->
					<!--//col-->
				</div>
				<p class="color-green text-center">Interested in knowing more of my projects? View more projects by clicking below</p>
				<!--//row-->
				<div class="text-center py-3"><a href="{{route('project')}}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Projects</a></div>

			</div><!--//container-->
		</section><!--//featured-section-->

		<div class="container"><hr></div>

		<!-- BEGINNNING OF SECTION BLOG -->
		<!-- <section class="latest-blog-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>

							</div>
							<div class="card-footer">
								<small class="text-muted">Published 2 days ago</small>
							</div> -->

							<!-- </div> -->
						<!--//card-->

					<!-- </div> -->

					<!--//col-->

					<!-- <div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-2.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote Working</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published a week ago</small>

							</div> -->

						<!-- </div> -->
						<!--//card-->

						<!-- </div> -->
					<!--//col-->

					<!-- <div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-3.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="text-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 3 weeks ago</small>
							</div> -->

						<!-- </div> -->
						<!--//card-->

						<!-- </div> -->
					    <!--//col-->

					<!-- </div> -->
				    <!--//row-->
				<!-- <div class="text-center py-3"><a href="blog-home.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right me-2"></i>View Blog</a></div>
			</div> -->

			<!--//container-->

		<!-- </section> -->

		<!--//latest-blog-section-->

		<!-- END OF SECTION BLOG -->

		<footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy; <a href="#" target="_blank">Ursanne Kengne</a></small>
		</footer>

	</div><!--//main-wrapper-->


	<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->

	<!-- <div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
		<div class="panel-inner">
			<a id="config-trigger" class="config-trigger text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6" ></i></a>
			<h5 class="panel-title">Choose Colour</h5>
			<ul id="color-options" class="list-inline mb-0">
				<li class="theme-1 active list-inline-item"><a data-style="assets_1/css/theme-1.css" href="#"></a></li>
				<li class="theme-2  list-inline-item"><a data-style="assets_1/css/theme-2.css" href="#"></a></li>
				<li class="theme-3  list-inline-item"><a data-style="assets_1/css/theme-3.css" href="#"></a></li>
				<li class="theme-4  list-inline-item"><a data-style="assets_1/css/theme-4.css" href="#"></a></li>
				<li class="theme-5  list-inline-item"><a data-style="assets_1/css/theme-5.css" href="#"></a></li>
				<li class="theme-6  list-inline-item"><a data-style="assets_1/css/theme-6.css" href="#"></a></li>
				<li class="theme-7  list-inline-item"><a data-style="assets_1/css/theme-7.css" href="#"></a></li>
				<li class="theme-8  list-inline-item"><a data-style="assets_1/css/theme-8.css" href="#"></a></li>
				<li class="theme-9  list-inline-item"><a data-style="assets_1/css/theme-9.css" href="#"></a></li>
				<li class="theme-10  list-inline-item"><a data-style="assets_1/css/theme-10.css" href="#"></a></li>
			</ul>
			<a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
		</div><!--//panel-inner-->
	<!-- </div> -->
	<!--//configure-panel -->

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

</body>
</html>
