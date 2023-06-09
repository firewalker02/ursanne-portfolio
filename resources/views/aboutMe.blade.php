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
						
						<div class="bio mb-3">Hi, my name is Ursanne Kengne. I am a current Computer Science student at York University. I have been learning computer Science for three years already. To learn more about me, I invite you to follow the links below.<br><a href="{{route('aboutMe')}}">Find out more about me</a></div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
						<li class="list-inline-item"><a href="https://twitter.com/Firewalker_02"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/ursangk/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/firewalker02"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://stackoverflow.com/users/21540162/firewalker-02"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
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
							<a class="nav-link" href="{{route('resume')}}"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
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
								<li><a class="dropdown-item" href="#">Education</a></li>
								<li><a class="dropdown-item" href="#">Experience</a></li>
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

     
	 
	 
	 
	 
	 
	 
	 <div class="main-wrapper>
	 <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container single-col-max-width">
			    <header class="blog-post-header">
				    <h2 class="title mb-2 text-center">About Me Blog</h2>
				    <div class="meta mb-3"><span class="date">Published recently</span><span class="time">5 min read</span><span class="comment"><a  class="text-link" href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <!-- <figure class="blog-banner">
				        <a href="https://made4dev.com"><img class="img-fluid" src="assets/images/blog/blog-post-banner.jpg" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a class="theme-link" href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure> -->
				    <p>
                    My name is Ursanne Kengne, student at York University majoring in Computer Science. I am currently 20 years old. When young, I quickly realize my abilities and passion for the computer World and innovative technologies which brings to me to the conclusion to study Computer Science after graduating from High School. Willing to learn the best current software and hardware technologies, I decided to pursue my studies in Computer Science at York University, Canada.
                     I have research interest in software programming, improvement in the interaction of  databases between client and server in programming environments and analysis in improvement of algorithms using dynamic programming. In the course of my academic journey, I have set the goal to achieve a PHD thesis in data Science and artificial intelligence(AI).
                    
                    I invite you to discover my website to learn other aspects of me.

                </p>
                </div>

				<footer class="footer text-center py-4">
			<small class="copyright"> Copyright &copy; <a href="#" target="_blank">Ursanne Kengne</a></small>
		</footer>
			
	
	</div>
<!-- main wrapper div -->
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
