
<?php
/* template name: blog */
$path = get_template_directory_uri(); 

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <link href="<?php echo $path?>/css/footer.css" rel="stylesheet">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="<?php echo $path?>/common-css/bootstrap.css" rel="stylesheet">

	<link href="<?php echo $path?>/common-css/ionicons.css" rel="stylesheet">


	<link href="<?php echo $path?>/layout-1/css/styles.css" rel="stylesheet">

	<link href="<?php echo $path?>/layout-1/css/responsive.css" rel="stylesheet">

</head>
<body >

		<header>
			<div class="container-fluid position-relative no-side-padding">

				<a href="#" class="logo"><img src="<?php echo $path?>/img/logo_glm.png" width="112" height="522"></a>

				<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

				<?php  
					wp_nav_menu(array(
					'navbar' => 'menu-blog',
					'menu_class' => 'main-menu visible-on-click',
					));    
				?>

				<div class="src-area">
					<form>
						<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
						<input class="src-input" type="text" placeholder="Type of search">
					</form>
				</div>

			</div><!-- conatiner -->
		</header>

	<section class="blog-area section">
		<div class="container">

			<div class="row">
				
			<?php listPosts() ?>

			</div><!-- row -->

			<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

		</div><!-- container -->
	</section><!-- section -->


	<?php

include_once("footer.php") 

?>


	<!-- SCIPTS -->

	<script src="<?php echo $path?>/common-js/jquery-3.1.1.min.js"></script>

	<script src="<?php echo $path?>/common-js/tether.min.js"></script>

	<script src="<?php echo $path?>/common-js/bootstrap.js"></script>

	<script src="<?php echo $path?>/common-js/scripts.js"></script>

</body>
</html>
