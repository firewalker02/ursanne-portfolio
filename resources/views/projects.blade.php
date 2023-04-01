<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Ursanne Projects</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
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
						
						<div class="bio mb-3">Hi, my name is Ursanne Kengne. I am a current Computer Science student at York University. I have been learning computer Science for three years already. To learn more about me, I invite you to follow the links below.<br><a href="{{route('homeport')}}">Find out more about me</a></div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
						<li class="list-inline-item"><a href="https://twitter.com/Firewalker_02"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/ursangk/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/firewalker02"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-start">
						<li class="nav-item">
							<a class="nav-link active" href="{{route('homeport')}}"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.html"><i class="fas fa-laptop-code fa-fw me-2"></i>Projects</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="{{route('resume')}}"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="contact.html"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-cogs fa-fw me-2"></i>More Pages
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Education</a></li>
								<li><a class="dropdown-item" href="#">Experience</a></li>
								<!-- <li><a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a></li>
								<li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li> -->
							</ul>
						</li>
					</ul>
					
					<div class="my-2">
						<a class="btn btn-primary" href="#" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
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
			    <h2 class="heading">Portfolio</h2>
			    <div class="intro">
			    <p>Welcome to my online projects.These projects are comprised of front-end, back-end and full-stack projects to showcase my software skills. Want some help building your software?</p>
			    
			    </div>
			    <a class="btn btn-primary" href="#" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
			    
			    
		    </div><!--//container-->
	    </section>
	    <section class="projects-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="text-center">
				    <ul id="filters" class="filters mb-5 mx-auto   ps-0">
		                <li class="type active mb-3 mb-lg-0" data-filter="*">All</li>
		                <li class="type  mb-3 mb-lg-0" data-filter=".webapp">Full Stack</li>
		                <li class="type  mb-3 mb-lg-0" data-filter=".mobileapp">Mobile App</li>
		                <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
		                <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
		            </ul><!--//filters-->
			    </div>
	            
                <!-- CODE BREAKER -->
			    <div class="project-cards row isotope">
					<div class="isotope-item col-md-6 mb-5 frontend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/code-breaker.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/Code-breaker" class="theme-link">Code-Breaker</a></h5>
										<p class="card-text">Designed dynamically a ball game app where a player has to guess correctly a series of balls with different users. The player has 8 attempts within which the correct series has to be found, otherwise the player looses the game. This project was implemented using HTML, CSS and JavaScript </p>
										<p class="card-text"><small class="text-muted">Curriculum Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/Code-breaker"> View Github Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/Code-breaker">
										<i class="fas fa-eye me-2"></i>View GitHub Repository.Made with HTML,CSS and JS
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					
                        <!-- GAME COUNTRY APP -->

					<div class="isotope-item col-md-6 mb-5 mobileapp backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/game-app.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/Caps" class="theme-link">GameCountry App</a></h5>
										<p class="card-text">Designed and coded a mobile application for country capital guess game where a user has ten tries in which to guess a capital of country or territory based on its name alone.
Used Object Oriented Design methodology and applied Java Design Patterns. 
 </p>
										<p class="card-text"><small class="text-muted">Curriculum Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/Caps"> View GitHub Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/Caps">
										<i class="fas fa-eye me-2"></i>View Github Repo.Coded with Java and AndroidStudio
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					
                    <!-- MORTGAGE CALCULATOR APP -->

                    <div class="isotope-item col-md-6 mb-5 mobileapp backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/mortgage-calc.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/MCalcPro" class="theme-link">Mortgage Calculator App</a></h5>
										<p class="card-text">Designed and coded a mortgage calculator app which calculates the mortgage interest of a lender on a recurring basis, based on conventional formula.
Used Object Oriented Design methodology and MVC architectural design pattern. 
 </p>
										<p class="card-text"><small class="text-muted">Curriculum Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/MCalcPro">
                                    View GitHub repository
                                </a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/Mobile-Projects/tree/main/AndroidStudioProjects/MCalcPro">
										<i class="fas fa-eye me-2"></i>View Github repo.Coded with Java and AndroidStudio
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

                    <!-- HOSPITAL SYSTEM SIMULATOR -->
					<div class="isotope-item col-md-6 mb-5 backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/hospital-system.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/General-Projects/tree/main/HOSPITAL%20DATABASE" class="theme-link">Hospital System Simulator</a></h5>
										<p class="card-text">Designed and coded a hospital system to manage basic hospital functionalities such as hiring volunteers, physicians, renumering hospital personnel and many more.
Used Object Oriented Design methodology and applied Java Design Patterns. 
 </p>
										<p class="card-text"><small class="text-muted">Curriculum Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/General-Projects/tree/main/HOSPITAL%20DATABASE"> View Github Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/General-Projects/tree/main/HOSPITAL%20DATABASE">
										<i class="fas fa-eye me-2"></i>View GitHub Repo. Implemented with Java and EclipseIDE
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

                    <!-- COUNTRY INDICATOR MODELLING SYSTEM -->

					<div class="isotope-item col-md-6 mb-5 backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/Indicator-system.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/UTSCCSCC01/eecs3311-group-g" class="theme-link">Indicator Modelling System</a></h5>
										<p class="card-text">Implemented a Country Indicator Modelling System to retrieve data indicators between countries from World’s data Restful API to model and compare global development among them for humanitarian purposes.
Used Object Oriented Design methodology, Restful API tools and Applied Java Patterns.
 </p>
										<p class="card-text"><small class="text-muted">Curriculum Group Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/UTSCCSCC01/eecs3311-group-g">View GitHub Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/UTSCCSCC01/eecs3311-group-g">
										<i class="fas fa-eye me-2"></i>View Github Repo.Coded using Java and EclipseIDE
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->

                             <!-- VENDING MACHINE SIMULATOR -->

					<div class="isotope-item col-md-6 mb-5 backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/vending-Machine.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/Mobile-Projects/tree/main/VendingMachine%20Project" class="theme-link">VendingMachine Simulator</a></h5>
										<p class="card-text">Designed a vending machine simulator. This is to select item and get price, accept 
bills/coins, dispense items purchased and return change and refund when cancelling the 
request. The simulator also handles some exception: an item is Sold out, an item is Not 
fully paid, there is Not enough change.
Used Object Oriented Design methodology and applied Java Design Patterns. 
 </p>
										<p class="card-text"><small class="text-muted">Personal Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/Mobile-Projects/tree/main/VendingMachine%20Project">View GitHub Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/Mobile-Projects/tree/main/VendingMachine%20Project">
										<i class="fas fa-eye me-2"></i>View GitHub Repo.Implemented with Java and Eclipse
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
					
                    <!-- FITNESS SYSTEM SIMULATOR -->
                    <div class="isotope-item col-md-6 mb-5 backend">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/fitness-system.jpg" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/General-Projects/tree/main/SIMPLE%20DATABASE%20FITNESS%20CLUB" class="theme-link">Fitness System Simulator</a></h5>
										<p class="card-text">Developed a fitness database system where each member has a profile with vital information. This system helps to track the health progress of each customer after a period of time by calculating the BMI on a predefined frequency.
	Used C programming language and implemented sorting algorithms.
 </p>
										<p class="card-text"><small class="text-muted">Personal Project</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/General-Projects/tree/main/SIMPLE%20DATABASE%20FITNESS%20CLUB">View GitHub Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary" href="https://github.com/firewalker02/General-Projects/tree/main/SIMPLE%20DATABASE%20FITNESS%20CLUB">
										<i class="fas fa-eye me-2"></i>View GitHub Repo.Implemented using C structures
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
				
                           <!-- VOTEAPP-WEB VERSION -->


                    <div class="isotope-item col-md-6 mb-5 webapp">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/voteapp-web.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://voteapp.toupesu.com" class="theme-link">VoteApp Project-Web version</a></h5>
										<p class="card-text">Developed a web app voting system enabling the client to create its own polls, and share for other people to vote, using PHP laravel framework.</p>
 </p>
										<p class="card-text"><small class="text-muted">Client: Toupesu</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://voteapp.toupesu.com">View Web Page</a>
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
               
                
                <!-- VOTEAPP-ANDROID VERSION -->
                     
                    <div class="isotope-item col-md-6 mb-5 webapp mobileapp">
						<div class="card project-card">
							<div class="row">
								<div class="col-12 col-xl-5 card-img-holder">
									<img src="assets_1/images/voteapp-Android.png" class="card-img" alt="image">
								</div>
								<div class="col-12 col-xl-7">
									<div class="card-body">
										<h5 class="card-title"><a href="https://github.com/firewalker02/voteapp-Android-version" class="theme-link">VoteApp Project-Web version</a></h5>
										<p class="card-text">Developing an Android voting app enabling the client to create voting polls and share to other users to vote, using java and Android Studio.</p>
 </p>
										<p class="card-text"><small class="text-muted">Client: Toupesu</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="https://github.com/firewalker02/voteapp-Android-version">View GitHub Repository</a>
								<div class="link-mask-text">
									<a class="btn btn-primary btn-lg" href="https://github.com/firewalker02/voteapp-Android-version" >
										<i class="fas fa-eye me-2"></i> View Github Repository
									</a>
                                   
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
					</div><!--//col-->
               

                
                </div><!--//row-->
			
		    </div>
	    </section>
	    
        <footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy; <a href="#" target="_blank">Ursanne Kengne</a></small>
		</footer>


        </div><!--//main-wrapper-->


    <script src="assets_1/plugins/popper.min-2-9-2.js"></script> 
	<script src="assets_1/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	

    <!-- JAVASCRIPT RESPONSIVE PROPERTIES -->
	<script type="text/javascript" src="assets_1/plugins/imagesloaded.pkgd.min.js"></script> 
    <script type="text/javascript" src="assets_1/plugins/isotope.pkgd.min.js"></script> 
    
    <script type="text/javascript" src="assets_1/js/isotope-custom.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="assets_1/js/demo/style-switcher.js"></script>
	
	<!-- Dark Mode -->
	<script src="assets_1/plugins/js-cookie.min.js"></script>
	<script src="assets_1/js/dark-mode.js"></script>   
	
</body>
</html> 