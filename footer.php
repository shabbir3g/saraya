<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saraya
 */

?>

	<footer class="footer-area"> 
			<div class="container"> 
				<div class="row"> 
				
					<?php dynamic_sidebar('footer-widget'); ?>
				
				
				</div>
			</div>
		</footer>
	  <?php wp_footer(); ?>
   </body>
</html>

