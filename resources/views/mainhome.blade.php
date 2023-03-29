<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Ursanne Portfolio</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  -->
    

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
<!-- <link rel='stylesheet' href="assets/css/mycss.css"> -->
    <!-- FontAwesome JS -->
	<script defer src="assets_1/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets_1/css/theme-1.css">



</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="#">Ursanne Portfolio</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets_1/images/ursanne_photo.jpg" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Ursanne Kengne. I am a current Computer Science student at York University. I have been learning computer Science for three years already. To learn more about me, I invite you to follow the links below.<br><a href="{{route('homeport')}}">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
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
					    <a class="nav-link active" href="{{route('resume')}}"><i class="fas fa-home fa-fw me-2"></i>Resume <span class="sr-only">(current)</span></a>
					</li>
					<!-- <li class="nav-item">
					    <a class="nav-link" href="#"><i class="fas fa-bookmark fa-fw me-2"></i>Project</a>
					</li> -->
					<li class="nav-item">
					    <a class="nav-link" href="{{route('homeport')}}"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="{{route('resume')}}" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
    
    
	<article class="blog-post px-3 py-5 p-md-5">
		    <div class="container single-col-max-width">
			    <header class="blog-post-header">
				    <h2 class="title mb-2 text-center">About Me Blog</h2>
				    <div class="meta mb-3"><span class="date">Published recently</span><span class="time">5 min read</span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner center" >
				        <img class="img-fluid" src="assets_1/images/ursanne_photo.jpg" alt="image" width="50%" height="500px" class="margin-left:auto margin-right:auto"></a>
				        
				    </figure>
				    <p class="text-center">
                    My name is Ursanne Kengne, student at York University majoring in Computer Science. I am currently 20 years old. When young, I quickly realize my abilities and passion for the computer World and innovative technologies which brings to me to the conclusion to study Computer Science after graduating from High School. Willing to learn the best current software and hardware technologies, I decided to pursue my studies in Computer Science at York University, Canada.I have research interest in software programming, improvement in the interaction of  databases between client and server in programming environments and analysis in improvement of algorithms using dynamic programming. In the course of my academic journey, I have set the goal to achieve a PHD thesis in data Science and artificial intelligence(AI). I invite you to discover my website to learn other aspects of me.

                </p>
                </div>



<!-- 
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        /* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <!-- small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>< -->
<!-- 		   
	    </footer>  -->
    
    </div><!--//main-wrapper-->



<!-- 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
       
    <!-- Javascript -->          
    <script src="assets_1/plugins/popper.min.js"></script> 
    <script src="assets_1/plugins/bootstrap/js/bootstrap.min.js"></script> 

    

</body>
</html> 
