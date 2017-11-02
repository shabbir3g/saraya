<?php
/**
Template Name: Home Page
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
      <!-- Bootstrap -->
      
     
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <header role="banner">
         <nav id="navbar-primary" class="navbar" role="navigation">
            <div class="container">
               <div class="h-top-header"> 
					<!-- Brand and toggle get grouped for better mobile display -->
               <div class="h-navbar-header">
                 <?php wp_nav_menu(array(
			'theme_location'	=> 'left-menu',
			'menu_class'		=> 'nav navbar-nav navbar-left',
			'fallback_cb'		=> 'default_menu_left_saraya',
			
		)); ?>             
				 <!-- right menu --> 
				 
				 
                  <?php wp_nav_menu(array(
			'theme_location'	=> 'right-menu',
			'menu_class'		=> 'nav navbar-nav navbar-right',
			'fallback_cb'		=> 'default_menu_right_saraya',
		)); ?>
               </div>
               
               			<?php 
				$home_logo_uploader = get_field('home_logo_uploader', 'options');

				if($home_logo_uploader): ?>
		               <div class="logo-area"> 
					<a class="h-navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $home_logo_uploader['url']; ?>" alt="" /></a>
				</div>
			    <?php endif; ?>
               
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-collapse-1">
				<!-- left menu -->
                 <?php wp_nav_menu(array(
			'theme_location'	=> 'left-menu',
			'menu_class'		=> 'nav navbar-nav navbar-left',
			'fallback_cb'		=> 'default_menu_left_saraya',
			
		)); ?>            
				 <!-- right menu --> 
                   <?php wp_nav_menu(array(
			'theme_location'	=> 'right-menu',
			'menu_class'		=> 'nav navbar-nav navbar-right',
			'fallback_cb'		=> 'default_menu_right_saraya',
		)); ?>
               </div>
               <!-- /.navbar-colla -->
			   </div>
            </div>
            <!-- /.container-fluid -->
         </nav>
      </header>
	  
	  
	  
	  
	  <style type="text/css">
	  
	  
	  .h-navbar-header{
			display: none;
		}
	  .h-top-header #navbar-collapse-1{
		margin: inherit;
		padding: 280px 0;
	  }
		.h-top-header{
			width: 80%;
			margin: auto;
		}
		.h-navbar-brand img{
			display: inline-block;
		}
		.h-navbar-brand{
		position: inherit;
		width: 100%;
		left: 15px;
		top: 0;
		text-align: center;
		margin: 58px auto;
		float: left;
		height: 50px;
		padding: 15px 15px;
		font-size: 18px;
		line-height: 20px;

		}
		
		.navbar-left{
			animation-duration: 3s;
		  animation-name: slidein;
		  <!-- animation-iteration-count: infinite; -->
		  animation-direction: alternate;
		  
			
		}
		@keyframes slidein {
		  from {
			margin-left: 25%;
			
		  }

		  to {
			margin-left: 0%;
		  }
		}
		.navbar-right{
			animation-duration: 3s;
		  animation-name: slideinright;
		  <!-- animation-iteration-count: infinite; -->
		  animation-direction: alternate;
		
			
		}
		@keyframes slideinright {
		  from {
			margin-right: 25%;
			

		  }

		  to {
			margin-right: 0%;

		  }
		}
		
		@media all and (max-width: 991px){
		
		.h-navbar-header{
			display: block;
		}
			.h-top-header #navbar-collapse-1{
				margin: inherit;
				padding:  0;
			  }
		}
		
		@media all and (max-width: 767px){
			.h-navbar-header{
				text-align: center;
			}
		}
		
		@media all and (max-width: 647px){
			.h-navbar-brand img{
				width: 100%;
			}
			
			
		}
		
	  
	  </style>
      
		
		
     <?php wp_footer(); ?>
   </body>
</html>

