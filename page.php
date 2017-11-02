<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saraya
 */

get_header(); ?>

	<div class="others-crumb"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12 col-sm-12 col-xs-12"> 
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sariya.png" alt="" /> </a>
					</div>
				</div>
			</div>
			
		</div>
		<!-- article section -->
		
		<section class="content-area">
			<main id="main" class="site-main container">
				<div class="row"> 
					<div class="col-md-12 col-sm-12 col-xs-12"> 
						<?php while(have_posts()): the_post(); ?>
						
							<?php the_content(); ?>
						
						
						<?php endwhile; ?>
					</div>
				</div>
			</main>
		</section>
		<div class="footer-image"> 
			<div class="container"> 
				<img src="<?php echo get_template_directory_uri(); ?>/images/content-bg.png" alt="" />
			</div>
		</div>

<?php
get_footer();
