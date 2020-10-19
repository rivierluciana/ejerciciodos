<?php get_header(); ?>
<?php 
    if ( have_posts() ) : 
        $i = 0;
        while ( have_posts() ) : the_post();  
            $i++;
            if ( $i == 1 ): ?>
        
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
                    <p class="lead my-3"><?php the_excerpt(); ?></p>
                    <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>

        <?php else: ?>
            <?php if( $i % 2 == 0): ?>
                <div class="row mb-2">
            <?php endif; ?>
                <div class="col-md-6">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0"><?php the_title(); ?></h3>
                            <div class="mb-1 text-muted"><?php the_date(); ?></div>
                            <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="stretched-link">Leer más</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
                
            <?php if( $i % 2 ): ?>
                </div>
            <?php endif; ?>

        <?php
                endif;
            endwhile; 
        endif; 
        ?>

<?php get_footer(); ?>