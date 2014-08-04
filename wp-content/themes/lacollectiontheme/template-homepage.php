<?php
/*
Template Name: HomepageTemplate
*/
?>

<!--
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
-->
<div class="container">
		<video autoplay loop poster="/assets/vid/polina.jpg" id="bgvid">
		<!-- <source src="polina.webm" type="video/webm"> -->
		<source src="<?php bloginfo('template_directory'); ?>/assets/vid/videobackground.mp4" type="video/mp4">
		</video>
		
	<div class="col-md-offset-6 col-md-6">
		
		
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-fm-group.png">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-federico.png">
		<h3> By Appointments Only </h3>
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/line2.png">
		
		<h4> The Most Exclusive FM Perfume Collection in the World </h4>
		<span> Made in Europe </span>
		
		
		<div class="col-lg-2 bgc-sidebarmenu" style=" margin-top: 50px; width: 187px;height:300px;">
	<div class="side-nav">
		<nav class="s-mfix nav nav-stacked" role="navigation">
	      <?php
	        if (has_nav_menu('primary_navigation')) :
	          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 's-menu list-unstyled'));
	        endif;
	      ?>
	</nav>
	</div>
	
	<nav class="s-mfix nav nav-stacked" role="navigation">
	      <?php
	        if (has_nav_menu('side_navigation')) :
	          wp_nav_menu(array('theme_location' => 'side_navigation', 'menu_class' => 's-border text10 list-unstyled'));
	        endif;
	      ?>
	</nav>
</div>

	</div>

</div>