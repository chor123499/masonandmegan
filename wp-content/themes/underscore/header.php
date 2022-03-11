<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	 
	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>



<body <?php body_class(); ?>>

<header class="site-header " id="masthead" >
	<!-- <div class="container" style="width:90%;margin: 0px auto;">
    <nav class="navbar main-navigation"  id="site-navigation" >
    	<div class="navbar-header" style="color:#32b46c;">
	     
      </div>
     	
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/image/logo.png" class="img-responsive " style="height: 40px;width: 130px;"></a>
   <div class="collapse navbar-collapse " id="myNavbar">
    <div class="nav navbar-nav navbar-right ">	
    <?php
    
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'Primary',
				)
			);
			
	?>
		</div>
	
	</div>
	<div style="clear:both;"></div>

	</nav>
</div>   -->
</header>




