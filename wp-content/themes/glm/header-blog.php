<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Blog | Grupo Loucos por Markting</title>
    <link rel="shortcut icon" href="<?php echo $path?>/img/glm32xx32_2.png" type="image/x-icon">
    <link rel="icon" href="<?php echo $path?>/img/glm32xx32_2.png" type="image/x-icon">
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
    <link href="<?php echo $path?>/single-post-2/css/styles.css" rel="stylesheet">
	<link href="<?php echo $path?>/single-post-2/css/responsive.css" rel="stylesheet">

</head>


<body >
		<div id="url" data-url="<?php echo get_site_url(); ?>"></div>
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
					<form method="get" action="/">
						<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
						<input class="src-input" name="s" id="s" type="text" placeholder="Procurar...">
					</form>
				</div>

			</div><!-- conatiner -->
		</header>