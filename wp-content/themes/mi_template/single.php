<?php get_header(); ?>

<main role="main" class="container">
    <div class="row">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();  
        ?>

            <div class="col-md-9 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <p class="blog-post-meta"><?php the_date(); ?></p> <!-- Cambiar por la fecha del post -->

                        <?php the_content(); ?>
                        <p>Compartir</p>
                        <ul>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">Facebook</a></li>
                            <li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">Twitter</a></li>
                            <li><a href="whatsapp://send?text=<?php the_permalink(); ?>" target="_blank">Whatsapp</a></li>
                        </ul>
                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->

        <?php
            endwhile; 
        endif; 
        ?>
    <div class="col-md-3 blog-main">
        <?php if ( is_active_sidebar( 'sidebar-widget' ) ) : ?>
        <div id="sidebar-widget" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-widget' ); ?>
        </div><!-- Arado de widget para sidebar -->
    </div>
    <?php endif; ?>

    </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>