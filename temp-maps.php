<?php
/**
Template Name: Maps
 */

get_header(); ?>

		<?php get_template_part( 'template-parts/page-top' ); ?>
		<!-- article section -->
		
		<section class="content-area">
			<main id="main" class="site-main container">
				<div class="row"> 
				
				<?php dynamic_sidebar('maps-widget'); ?>
				
				
				
				</div>
			</main>
		</section>
		<?php get_template_part( 'template-parts/page-bottom' ); ?>

<?php
get_footer();
