
<?php
/* template name: search */
$s = get_search_query();
$path = get_template_directory_uri(); 

include_once("header-blog.php") 

?>


	<section class="blog-area section">
		<div class="container">

			<div class="row">
				
			<?php

            if (have_posts()) :

            while (have_posts()) : the_post(); ?>

        <div class='col-lg-4 col-md-6'>
            <div class='card h-100'>
                <div class='single-post post-style-1'>

                    <div class='blog-image'><img src='<?php the_post_thumbnail_url(); ?>' alt='post image'></div>

                    <a class='avatar' href='<?php the_permalink(); ?>'><img src='<?php echo get_avatar_url(get_the_author_meta('id')); ?>' alt='Profile Image'></a>

                    <div class='blog-info'>

                        <h4 class='title'><a href='<?php the_permalink(); ?>'><b><?php the_title(); ?></b></a></h4>
                        <p><?php the_excerpt();?></p>
                        <ul class='post-footer'>
                            <li><a href='<?php the_permalink(); ?>'><i class='ion-chatbubble'></i><?php echo get_comments_number(get_the_id()); ?></a></li>
                        </ul>

                    </div><!-- blog-info -->
                </div><!-- single-post -->
            </div><!-- card -->
        </div>
                            <?php endwhile;
                            
                            else :
                                echo '<p>Nenhum post encontrado</p>';
                            endif;
                        ?>

			</div><!-- row -->

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
