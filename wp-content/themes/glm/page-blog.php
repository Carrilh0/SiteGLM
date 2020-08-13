
<?php
/* template name: blog */
$path = get_template_directory_uri(); 

include_once("header-blog.php") 

?>
	<div class="slider"></div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row" id="posts">
				
			<?php $query = listPosts() ?>

			</div><!-- row -->
			<?php wp_pagenavi( array( 'query' => $query )); ?>


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
	<script src="<?php echo $path?>/js/category.js"></script>

</body>
</html>
