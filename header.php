<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saraya
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
     <meta  http-equiv="Content-Type" content="text/html;  charset="<?php bloginfo( 'charset' ); ?>">
     <meta http-equiv="Content-Language" content="fa" />
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
               <div class="top-header"> 
					<!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
                  <span class="icon-bar"><span class="inner"></span></span>
                  <span class="icon-bar"><span class="inner"></span></span>
                  <span class="icon-bar"><span class="inner"></span></span>
                  </button>
               </div>
			   
			    <?php 
				$logo_uplaoder = get_field('logo_uplaoder', 'options');

				if($logo_uplaoder): ?>
               <div class="logo-area"> 
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_uplaoder['url']; ?>" alt="" /></a>
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
				
               <!--   <ul class="nav navbar-nav navbar-left">
                     <li><a href="contact-us.html">اتصل بنا</a></li>
                     <li><a href="maps.html">فروعنا </a></li>
                  </ul>    -->


				  <?php wp_nav_menu(array(
					'theme_location'	=> 'right-menu',
					'menu_class'		=> 'nav navbar-nav navbar-right',
					'fallback_cb'		=> 'default_menu_right_saraya',
				)); ?>
				 <!-- right menu 
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">  قائمة الطعام </a></li>
					<li><a href="about-us.html"> من نحن </a></li>
                  </ul> --> 
				  
				  
				  
               </div>
               <!-- /.navbar-colla -->
			   </div>
            </div>
            <!-- /.container-fluid -->
         </nav>
      </header>

