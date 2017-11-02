<?php
/**
Template Name: About Us
 */

get_header(); ?>

		<?php get_template_part( 'template-parts/page-top' ); ?>
		<!-- article section -->
		
		<section class="content-area">
			<main id="main" class="site-main container">
				<div class="row"> 
					<div class="col-md-12 col-sm-12 col-xs-12"> 
						<div class="about-us"> 
							<?php $about_title = get_field('about_title'); 
							if($about_title): ?>
							<h2><?php echo $about_title; ?></h2>
							<?php endif; ?>
							
							<?php $about_content = get_field('about_content'); 
							if($about_content): ?>
							<h3><?php echo $about_content; ?></h3>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</main>
		</section>
		<?php get_template_part( 'template-parts/page-bottom' ); ?>

<?php
get_footer();
