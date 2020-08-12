
<?php
/* template name: search */

$path = get_template_directory_uri(); 

include_once("header.php");
$s = get_search_query();
?>

<body>
    <div class="title has-text-centered my-2" style="margin: 50px 0">
        <h1>resultados encontrados para "<?php echo $allSearch,$s ?>"</h1>
    </div>
    <section class="section">
        <div class="container is-fluid posts-categoria">
            <div class="columns">
                <div class="column is-8">
                    <div class="categoria">
                        <?php

                        if (have_posts()) : ?>
                        <?php
                        while (have_posts()) : the_post(); ?>
                            <a href='<?php the_permalink(); ?>'>
                                <div class='post'>
                                    <div class='imagem'>
                                        <img class='first-image'src='<?php the_post_thumbnail_url(); ?>'>
                                        <div class='icone'>
                                            <img src='<?php echo $path ?>/img/icon-article.svg' alt='icone'>
                                        </div>
                                    </div>
                                    <div class='content'>
                                        <div class='title-post'>
                                            <h2><?php the_title(); ?></h2>
                                        </div>
                                        <div class='description-post'>
                                            <h3><?php the_excerpt();?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
                                <!-- post-thumbnail -->
                                <div class="post-thumbnail">
                                    <a href=""></a>
                                </div><!-- /post-thumbnail -->
                            
                                <h2><a href="<?php the_permalink(); ?>"></a></h2>
                                <?php  ?>
                            </article>
                            
                            <?php endwhile;
                            else :
                                echo '<p>Nenhum post encontrado</p>';
                            endif;
                        ?>
                        <div class="columns is-hidden-desktop is-mobile">
                        <?php postsPorCategoriaMobile("Corpo") ?>

                        </div>
                    </div>


                </div>
                <div class="column is-4 banner">
                    <div class="banner " id="banner">
                        <div class="imagem" id="imagem">
                            <img src="<?php echo $path?>/img/supercoffee.png">
                        </div>
                        
                        <div class="publicacoes">
                        <h3>Publicações mais lidas</h3>
                            <div class="content-post">
                                <div class="imagem">
                                    <img class='first-image'src='https://s3-sa-east-1.amazonaws.com/caffeine-upload-production/app/public/assets/articles/59/large/data............?1588776487'>
                                </div>
                                <div class="post">
                                    <div class="titulo">
                                        Titulo
                                    </div>
                                    <div class="descricao">
                                    Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao 
                                    </div>
                                </div>
                            </div>
                            <div class="content-post">
                                <div class="imagem">
                                    <img class='first-image'src='https://s3-sa-east-1.amazonaws.com/caffeine-upload-production/app/public/assets/articles/59/large/data............?1588776487'>
                                </div>
                                <div class="post">
                                    <div class="titulo">
                                        Titulo
                                    </div>
                                    <div class="descricao">
                                    Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao 
                                    </div>
                                </div>
                            </div>
                            <div class="content-post">
                                <div class="imagem">
                                    <img class='first-image'src='https://s3-sa-east-1.amazonaws.com/caffeine-upload-production/app/public/assets/articles/59/large/data............?1588776487'>
                                </div>
                                <div class="post">
                                    <div class="titulo">
                                        Titulo
                                    </div>
                                    <div class="descricao">
                                    Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao Descricao 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter">
                            <h4>Assine nossa Newsletter!</h4>
                            <input placeholder="Seu melhor e-mail...">
                            <button>Assinar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

<script src="<?php echo $path?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo $path?>/js/slick.js"></script>
<script src="<?php echo $path?>/js/main.js"></script>

<?php include_once("footer.php") ?>