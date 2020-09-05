<?php get_header(); ?>

<main role="main" class="container">
    <div class="row">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();  
        ?>

            <div class="col-md-8 blog-main">

                <div class="blog-post">

                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <p class="blog-post-meta">January 1, 2014</p> <!-- Cambiar por la fecha del post -->

                        <?php the_content(); ?>

                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->

        <?php
            endwhile; 
        endif; 
        ?>

        <?php get_sidebar(); ?>

    </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>