<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function listPosts()
{
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $query = new WP_Query(['posts_per_page' => 9, 'paged' => $paged]);
    while($query->have_posts()){

        $query->the_post();        
        $path = get_template_directory_uri();
        $imagem = get_the_post_thumbnail_url(); 
        $titulo = get_the_title();
        $descricao = get_the_excerpt();
        $link = get_the_permalink();
        $comments = get_comments_number(get_the_id());
        $foto = get_avatar_url(get_the_author_meta('id'));


        echo "<div class='col-lg-4 col-md-6'>
        <div class='card h-100'>
            <div class='single-post post-style-1'>

                <div class='blog-image'><img src='$imagem' alt='post image'></div>

                <a class='avatar' href='$link'><img src='$foto' alt='Profile Image'></a>

                <div class='blog-info'>

                    <h4 class='title'><a href='$link'><b>$titulo</b></a></h4>
                    <p>$descricao</p>
                    <ul class='post-footer'>
                        <li><a href='$link'><i class='ion-chatbubble'></i>$comments</a></li>
                    </ul>

                </div><!-- blog-info -->
            </div><!-- single-post -->
        </div><!-- card -->
        </div>";
    }
    return $query;
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
            $post['categoria'] = get_the_category(get_the_id());
            $post['comments'] = get_comment(get_the_id()); 
        }
    return $post;
    }      
}

function postsByTags($tags)
{
    $query = new WP_Query(['posts_per_page' => 3, 'tag__in' => $tags, 'orderby' => 'rand']);

    if($query->have_posts()){
            $query = new WP_Query(['posts_per_page' => 3, 'tag__in' => $tags, 'orderby' => 'rand']);

        global $post;
        while($query->have_posts()){

            $query->the_post();
            
            $path = get_template_directory_uri();
            $imagem = get_the_post_thumbnail_url(); 
            $titulo = get_the_title();
            $descricao = get_the_excerpt();
            $link = get_permalink();
            $comments = get_comments_number(get_the_id());

            echo "
                <div class='col-lg-4 col-md-6'>
                <div class='card h-100'> 
                    <div class='single-post post-style-1'>

                        <div class='blog-image'><img src='$imagem' alt='Blog Image'></div>

                        <a class='avatar' href='#'><img src='<?php echo $path?>/images/icons8-team-355979.jpg' alt='Profile Image'></a>

                        <div class='blog-info'>

                            <h4 class='title'><a href='$link'><b>$titulo</b></a></h4>

                            <ul class='post-footer'>
                                <li><a href='$link'><i class='ion-chatbubble'></i>$comments</a></li>
                            </ul>

                        </div><!-- blog-info -->
                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-md-6 col-sm-12 -->
            ";
        }
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



function placeholder_author_email_url_form_fields($fields) {
    $replace_author = __('Insira o seu nome');
    $replace_email = __('Insira o seu e-mail');
    $replace_url = __('Insira o seu site (opcional)');
    
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Nome: *' ) . '</label> 
    <input id="author" name="author" type="text" required placeholder="'.$replace_author.'" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email: *' ) . '</label>
    <input id="email" name="email" type="text" required placeholder="'.$replace_email.'" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>';

    $fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Site:' ) . '</label>' .
    '<input id="url" name="url" type="text" placeholder="'.$replace_url.'" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>';
    
    return $fields;
}
add_filter('comment_form_default_fields','placeholder_author_email_url_form_fields');
/**
 * Comment Form Placeholder Comment Field
 */
function placeholder_comment_form_field($fields) {
    $replace_comment = __('Insira o seu comentário');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . __( 'Comentário: ' ) . '
    </label><textarea id="comment" required name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );

function isu_search_url( $query ) {

    $page_id = 12; // This is ID of page with your structure -> http://example.com/mysearch/
    $per_page = 10;
    $post_type = 'activity'; // I just modify a bit this querry

    // Now we must edit only query on this one page
    if ( !is_admin() && $query->is_main_query() && $query->queried_object->ID == $page_id  ) {
        // I like to have additional class if it is special Query like for activity as you can see
        add_filter( 'body_class', function( $classes ) {
            $classes[] = 'filter-search';
            return $classes;
        } );
        $query->set( 'pagename', '' ); // we reset this one to empty!
            $query->set( 'posts_per_page', $per_page ); // set post per page or dont ... :)
            $query->set( 'post_type', $post_type ); // we set post type if we need (I need in this case)
            // 3 important steps (make sure to do it, and you not on archive page, 
            // or just fails if it is archive, use e.g. Query monitor plugin )
            $query->is_search = true; // We making WP think it is Search page 
            $query->is_page = false; // disable unnecessary WP condition
            $query->is_singular = false; // disable unnecessary WP condition
        }
}
add_action( 'pre_get_posts', 'isu_search_url' );
?>

