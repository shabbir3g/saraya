<?php 
	$fooetr_content_image = get_field('fooetr_content_image', 'options');

	if($fooetr_content_image): ?>

<div class="footer-image"> 
	<div class="container"> 
		<img src="<?php echo $fooetr_content_image['url'] ?>" alt="<?php echo $fooetr_content_image['alt'] ?>" />
	</div>
</div>
<?php endif; ?>