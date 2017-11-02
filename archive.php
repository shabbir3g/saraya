<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saraya
 */

get_header(); ?>

<?php 
		
		$category  = get_the_category( $post->ID );
		
		foreach($category as $tumi){
			
			$categoryid = $tumi->term_id;
			
			$category_image = get_field('category_image',"category_$categoryid");
			
			$catlink = get_category_link($categoryid);
			
		}
		
			if($category_image): ?>
			<div class="blog-top"> 
			<a href="<?php echo $catlink; ?>"><img src="<?php echo $category_image['url'] ?>" alt="" /></a>
			</div>
			<?php endif; ?>
			
		

		
	<section class="blog-area"> 
			<div class="container"> 
				<h3 class="blog-main-title" ><?php the_category(); ?></h3>
				<div class="row" id="panelPrecios"> 
					<div class="saraya-right"> 
					
						<?php 
						
		
							$category  = get_the_category( $post->ID );
							
							foreach($category as $tumi){
								
								$categoryid = $tumi->term_id;
								
								$category_image = get_field('category_image',"category_$categoryid");
								
								$catlink = get_category_link($categoryid);
								
								$count = 1;
								
								$food_menu = new WP_Query(array(
									'post_type'				=> 'post',
									'category__in' 			=> $categoryid,
								));
								
							}
						
						
						
							while($food_menu->have_posts()): $food_menu->the_post(); ?>


							<div class="saraya-post">
							<a href="#"><h2><span style="font-family: tahoma;"><?php echo $count++; ?></span> <?php the_title(); ?> </h2></a> <div class="hide-image"><?php the_post_thumbnail(); ?> <div class="tooltip-arrow"></div></div>
							<?php the_content(); ?>
						</div>



							<?php endwhile; ?>
						
						
						
						<!--
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>2</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>3</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>4</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>5</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>6</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>7</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
					
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>8</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>9</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>10</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>11</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>12</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>13</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div>
						
						<div class="saraya-post">
							<a data-toggle="tooltip" title="<img src='<?php echo get_template_directory_uri();  ?>/images/popup-image.png' />" href="#"><h2><span>14</span>المقبلات الباردة </h2></a>
							<p>نحن في مطعم سرايا لطيف نفخر بأن نقدم لكم ألذ و أشهى المشويات و الأطباق التركية التقليدية على يد أمهر الطهاة الأتراك لنأخذكم إلى قلب تركيا مع نكهاتنا المميزة.</p>
						</div> -->
						
						
						
					</div>
				</div>
			</div>
		</section>
	
	
	
	
	
	
<?php
get_footer();
