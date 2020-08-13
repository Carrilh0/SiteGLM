<?php 

/* template name: post */
$path = get_template_directory_uri(); 
$post = conteudoPost();

?>

<?php include_once("header-blog.php") ?>

<body >

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title"></h5>

							<h3 class="title"><a href="#"><b><?php echo $post['titulo'] ?></b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo $path?>/images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $post['autor'] ?></b></a>
									<h6 class="date"><?php echo $post['data'] ?></h6>
								</div>

							</div><!-- post-info -->

							<?php echo $post['conteudo'] ?>

						</div><!-- post-top-area -->
							<div class="post-bottom-area">

							<ul class="tags">
							<?php 
								foreach($post['tags'] as $tag){
									echo "<li><a>".$tag->name."</a></li>";
								};
							?>
							</ul>


							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo $path?>/images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $post['autor'] ?></b></a>
									<h6 class="date"><?php echo $post['data'] ?></h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->


	<section class="recomended-area section">
		<div class="container">
			<div class="row">

			<?php postsByTags($tags) ?>



			</div><!-- row -->

		</div><!-- container -->
	</section>

	<section class="comment-section center-text">
		<div class="container">
			<h4><b>DEIXE O SEU COMENTÁRIO</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">


					<div class="commnets-area text-left">
					
					<?php comments_template(); ?>
						

					</div><!-- commnets-area -->


				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

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
