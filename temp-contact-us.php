<?php
/**
Template Name: Contact Us
 */

get_header(); ?>

		<?php get_template_part( 'template-parts/page-top' ); ?>
		<!-- article section -->
		
		<section class="content-area">
			<main id="main" class="site-main container">
				<div class="row"> 
				
				<?php dynamic_sidebar('contact-widget'); ?>
				
				
				
				</div>
			</main>
		</section>
		<?php get_template_part( 'template-parts/page-bottom' ); ?>

<?php
get_footer();
