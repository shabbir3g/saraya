<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saraya
 */

?>

<article class="col-md-6 col-sm-6 col-xs-12 blog-post"> 
	<div class="entry-header">
		<h2><?php the_category(); ?></h2>
	</div>
	<div class="feature-image"> 
		<?php 
		
		
		$category  = get_the_category( $post->ID );
		
		foreach($category as $tumi){
			
			$categoryid = $tumi->term_id;
			
			$category_image = get_field('category_image',"category_$categoryid");
			
			$catlink = get_category_link($categoryid);
			
		}
		
		
		
		
			if($category_image): ?>
		<a href="<?php echo $catlink; ?>"><img src="<?php echo $category_image['url'] ?>" alt="" /></a>
		<?php endif; ?>
	</div>
</article>
