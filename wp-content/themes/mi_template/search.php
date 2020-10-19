<?php
get_header();
?>
<!--contenido principal-->
<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area"><!--título general-->
                <h2>Resultados de su Búsqueda:</h2>
                    <div class="buscador center">
                        <?php echo get_search_form(); ?>
                    </div> <!--si hay post, entra en el bucle-->
                        <?php if ( have_posts() ) : ?> <!--el loop-->
	<?php while ( have_posts() ) : the_post(); ?> <!-- recopilando info de cada post -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- título del post -->
					<h1 class="entry-title main_title">
                        <?php the_title(); ?>
                    </h1>
					<!-- contenido del post -->
                    <div class="entry-content">
	<?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="stretched-link">Leer más</a>
					</div> 
                    <!-- fin contenido post -->
				</article> <!-- fin info de cada post -->
	<?php endwhile; ?><!-- fin del loop -->
                <!-- si no hay post de búsqueda -->
                <?php else: ?>
                        <p>No hemos encontrado resultados para su búsqueda.</p>
                        <?php endif;?>

			</div> <!-- termina contenido derecha -->
		</div> <!-- fin de div contentarea -->
	</div> <!-- fin de div container -->
</div> <!-- fin de div contenido principal -->

<?php get_footer(); ?>