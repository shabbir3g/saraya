<?php 
	$saraya_page_logo = get_field('saraya_page_logo', 'options');

	if($saraya_page_logo): ?>
  

<div class="others-crumb"> 
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-12 col-sm-12 col-xs-12"> 
				<a href="#"><img src="<?php echo $saraya_page_logo['url'] ?>" alt="<?php echo $saraya_page_logo['alt'] ?>" /> </a>
			</div>
		</div>
	</div>
	
</div>

  <?php endif; ?>