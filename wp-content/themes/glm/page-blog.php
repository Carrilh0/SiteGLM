
<?php
/* template name: blog */
$path = get_template_directory_uri(); 

include_once("header-blog.php") 

?>


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
