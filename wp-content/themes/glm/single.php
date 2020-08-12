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

							<h5 class="pre-title">FASHION</h5>

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
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="contact-form-name" class="form-control"
										placeholder="Insira o seu nome" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="contact-form-email" class="form-control"
										placeholder="Insia o seu email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea name="contact-form-message" rows="2" class="text-area-messge form-control"
										placeholder="Insira um comentário" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" id="form-submit"><b>ENVIAR COMENTÁRIO</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->

					<h4><b>COMENTÁRIOS( <?php echo ($post->comment_count) ?> )</b></h4>

					<div class="commnets-area text-left">
					
					<?php comments_template(); ?>
						

						<div class="comment">
							<h5 class="reply-for">Reply for <a href="#"><b>Katy Lui</b></a></h5>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo $path?>/images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<div class="commnets-area text-left">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo $path?>/images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a>

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
