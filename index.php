<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saraya
 */

get_header(); ?>
      <!-- Bread Crumb area -->
		<div class="bread-crumb"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12 col-sm-12 col-xs-12"> 
						<a href="#">قائمة طعام </a>
					</div>
				</div>
			</div>
			
		</div>
		<!-- article section -->
		
		<section class="blog-area"> 
			<div class="container"> 
				<div class="row"> 
				
				
				<?php $tumi = get_terms('category'); 

				
				
				foreach( $tumi as $ami){
					
					$catename = $ami->name;
					
					$category  = get_the_category( $post->ID );
					
					$categoryid = $ami->term_id;
					
					$category_image = get_field('category_image',"category_$categoryid");
					
					$catlink = get_category_link($categoryid);
					
					 ?>
					
					
				<article class="col-md-6 col-sm-6 col-xs-12 blog-post"> 
					<div class="entry-header">
						<h2><?php echo $catename; ?></h2>
					</div>
					<div class="feature-image"> 
						<?php 
						
						
						
						
						
						
						
							if($category_image): ?>
						<a href="<?php echo $catlink; ?>"><img src="<?php echo $category_image['url']; ?>" alt="" /></a>
						<?php endif; ?>
					</div>
				</article>
					
					
					
					
					
					<?php
				}


				?>
				
			
			
			

			</div>
			</div>
		</section>
<?php get_footer(); ?>
