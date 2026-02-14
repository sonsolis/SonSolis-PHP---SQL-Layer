<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e22e90dd2.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"> 

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>SonSolis</title>
</head>
<body>

    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <!--  Page Wrapper -->
    <div class="page-wrapper">
    <!-- Post Slider -->
	<div class="post-slider">
		<h1 class="slider-title">Portfolios</h1>	
		<i class="fas fa-chevron-left prev"></i>
		<i class="fas fa-chevron-right next"></i>
		<div class="post-wrapper">
			<div class="post">
				<img src="assets/images/fields/computervision.jpg" alt="" class="slider-image">
				<div class="post-info">
				<h4> <a href=<?php echo BASE_URL . "/pages/fields/cvision.php";?>><br/>                     Computer Vision - Portfolio</a></h4>
					<i class="far fa-user"> Mario Solis</i>
					&nbsp;
					<i class="far fa-calendar"> July 4, 2025</i>
				</div>
			</div>


			<div class="post">
				<img src="assets/images/fields/machinelearning.jpg" alt="" class="slider-image">
				<div class="post-info">
					<h4> <a href="html/fields/mlearning.html"><br/>                           Machine Learning - Portfolio</a></h4>
					<i class="far fa-user"> Mario Solis</i>
					&nbsp;
					<i class="far fa-calendar"> July 4, 2025</i>
				</div>
			</div>
			<div class="post">
				<img src="assets/images/fields/webdev.jpg" alt="" class="slider-image">
				<div class="post-info">
					<h4> <a href="html/fields/web.html"><br/>                       Web Developer - Portfolio</a></h4>
					<i class="far fa-user"> Mario Solis</i>
					&nbsp;
					<i class="far fa-calendar"> July 4, 2025</i>
				</div>
			</div>
			<div class="post">
				<img src="assets/images/fields/Embedded.jpg" alt="" class="slider-image">
				<div class="post-info">
					<h4> <a href="html/fields/embedded.html"><br/>                 Embedded - Portfolio</a></h4>
					<i class="far fa-user"> Mario Solis</i>
					&nbsp;
					<i class="far fa-calendar"> July 4, 2025 </i>
				</div>
			</div>
			<div class="post">
				<img src="assets/images/fields/datascience.jpg" alt="" class="slider-image">
				<div class="post-info">
					<h4> <a href="html/fields/datascience.html"><br/>                                 Data Science - Portfolio</a></h4>
					<i class="far fa-user"> Mario Solis</i>
					&nbsp;
					<i class="far fa-calendar"> July 4, 2025</i>
				</div>
			</div>

		</div>

	</div>
	 <!-- Post Slider -->
    </div>
    <!-- Page Wrapper // -->
   
    <!-- Content -->
    <div class="content clearfix">
	<div class="main-content">
		c<h1 class="recent-post-title">Projects</h1>

		<div class="post clearfix">
			<img src="assets/images/projects/PHPGuestBook.png" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/projects/web/php-guestbook-app.html">Web Development - Full Stack Guestbook App- Overview</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> December 1, 2025</i>
				<p class="preview-text">
				<p>With this project I dedided to gain a better... </p>
				</p>
				<a href="html/projects/web/php-guestbook-app.html" class="btn read-more">Read More</a>
			</div>
		</div>

		<div class="post clearfix">
			<img src="assets/images/projects/DronePic.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/projects/cvision/gesture-control-interface.html">Computer Vision - Gesture Control Interface - Overview</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 24, 2025</i>
				<p class="preview-text">
				<p>In the fall semester of my last year at Monroe C... </p>
				</p>
				<a href="html/projects/cvision/gesture-control-interface.html" class="btn read-more">Read More</a>
			</div>
		</div>

		<h1 class="recent-post-title">Roadmaps</h1>

		<div class="post clearfix">
			<img src="assets/images/roadmaps/Computer_Vision_Roadmap.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/roadmaps/cvision.html">Computer Vision Project Roadmap</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 4, 2025</i>
				<p class="preview-text">
					Beginner, Intermediate and Advanced Projects List.
				</p>
				<a href="html/roadmaps/cvision.html" class="btn read-more">Read More</a>
			</div>
		</div>
		<div class="post clearfix">
			<img src="assets/images/roadmaps/Machine_Learning_Roadmap.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/roadmaps/mlearning.html">Machine Learning Project Roadmap</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 4, 2025</i>
				<p class="preview-text">
					Beginner, Intermediate and Advanced Projects List.
				</p>
				<a href="html/roadmaps/mlearning.html" class="btn read-more">Read More</a>
			</div>
		</div>
		<div class="post clearfix">
			<img src="assets/images/roadmaps/Embedded_Roadmap.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/roadmaps/embedded.html">Embedded Projects Roadmap</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 4, 2025</i>
				<p class="preview-text">
					Beginner, Intermediate and Advanced Projects List.
				</p>
				<a href="html/roadmaps/embedded.html" class="btn read-more">Read More</a>
			</div>
		</div>
		<div class="post clearfix">
			<img src="assets/images/roadmaps/Web_Development_Roadmap.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/roadmaps/web.html">Web Developement Projects Roadmap</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 4, 2025</i>
				<p class="preview-text">
					Beginner, Intermediate and Advanced Projects List.
				</p>
				<a href="html/roadmaps/web.html" class="btn read-more">Read More</a>
			</div>
		</div>
		<div class="post clearfix">
			<img src="assets/images/roadmaps/Data_Scientist_Roadmap.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="html/roadmaps/datascience.html">Data Science Projects Roadmap</a></h2>
			 	<i class="far fa-user">Mario Solis</i>
				&nbsp;
				<i class="far fa-calendar"> July 4, 2025</i>
				<p class="preview-text">
					Beginner, Intermediate and Advanced Projects List.
				</p>
				<a href="html/roadmaps/datascience.html" class="btn read-more">Read More</a>
			</div>
		</div>
	</div>
	<div class="sidebar">
		<div class="section search">
			<h2 class="section-title">Search</h2>
			<form action="index.html" method="post">
				<input type="text" name="search-term" class="text-input" placeholder="Search..">
			</form>
		</div>

		<div class="section topics">
			<h2 class="section-title">Topics</h2>
			<ul>
				<li><a href="#">Quotes</a></li>
				<li><a href="#">Motivation</a></li>
				<li><a href="#">Inspiration</a></li>
			</ul>
		</div>
	</div>

	
    </div>

   <!-- Content -->
    
    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
    <!-- Footer -->

    <!-- JQuery -->
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>

    <!-- Slick Carousel -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>
</html>
