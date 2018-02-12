<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

			<section id="primary" class="content-area col-sm-12 col-lg-12">
				<main id="main" class="site-main" role="main">
				<div class="row">
					<div class="col-12 col-md-8">
						<h1> <u> <?php the_field('titre'); ?> </u> </h1>
						
						<?php if( get_field('image') ): ?>
								<img src="<?php the_field('image'); ?>" />
						<?php endif; ?>
						
					</div>

						<div class="d-flex-justify-content-end ml-3">
							<a href ='<?php the_field('lien'); ?> '> visiter le projet </a>	
						</div>
						
					
					
						<div>
							
						<p> <h2> Description </h2> <?php the_field('description'); ?> </p>
						<p> <strong> Technologie utilisé : </strong>  <?php the_field('technologie_utilise__'); ?> </p>

					</div>
					
					
		
		

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

