<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function listPosts()
{
    $query = new WP_Query(['posts_per_page' => 9]);
    while($query->have_posts()){

        $query->the_post();        
        $path = get_template_directory_uri();
        $imagem = get_the_post_thumbnail_url(); 
        $titulo = get_the_title();
        $descricao = get_the_excerpt();
        $link = get_post_permalink();
        echo "<div class='col-lg-4 col-md-6'>
        <div class='card h-100'>
            <div class='single-post post-style-1'>

                <div class='blog-image'><img src='$imagem' alt='post image'></div>

                <a class='avatar' href=''><img src='' alt='Profile Image'></a>

                <div class='blog-info'>

                    <h4 class='title'><a href='$link'><b>$titulo</b></a></h4>
                    <p>$descricao</p>
                    <ul class='post-footer'>
                        <li><a href='$link'><i class='ion-chatbubble'></i>6</a></li>
                    </ul>

                </div><!-- blog-info -->
            </div><!-- single-post -->
        </div><!-- card -->
        </div>";
    }
}

function conteudoPost()
{
    $post = [];
    if (have_posts()){
        while (have_posts()){
            the_post();
            $post['titulo'] = get_the_title();
            $post['conteudo'] = get_the_content();
            $post['autor'] = get_the_author();
            $post['data'] = get_the_date();
            $post['tags'] = get_the_tags();
        }
    return $post;
    }      
}

add_action( 'rest_api_init', 'add_thumbnail_to_JSON' );
function add_thumbnail_to_JSON() {
//Add featured image
register_rest_field( 
    'post', // Where to add the field (Here, blog posts. Could be an array)
    'featured_image_src', // Name of new field (You can call this anything)
    array(
        'get_callback'    => 'get_image_src',
        'update_callback' => null,
        'schema'          => null,
         )
    );
}

function get_image_src( $object, $field_name, $request ) {
  $feat_img_array = wp_get_attachment_image_src(
    $object['featured_media'], // Image attachment ID
    'full',  // Size.  Ex. "thumbnail", "large", "full", etc..
    true // Whether the image should be treated as an icon.
  );
  return $feat_img_array[0];
}
?>