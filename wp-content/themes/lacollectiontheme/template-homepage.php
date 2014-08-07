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
		<video autoplay loop poster="<?php bloginfo('template_directory'); ?>/assets/vid/videobackground.jpg " id="bgvid" preload="auto">
		<source src="<?php bloginfo('template_directory'); ?>/assets/vid/videobackground.webmhd.webm" type="video/webm">
		<source src="<?php bloginfo('template_directory'); ?>/assets/vid/videobackground.mp4.mp4" type="video/mp4">
		</video>
		
	<div id="top" class="col-md-offset-6 col-md-6">
		
		
		<img id="logo-comp" src="<?php bloginfo('template_directory'); ?>/assets/img/logo-fm-group.png">
		<img id="logo-prod" src="<?php bloginfo('template_directory'); ?>/assets/img/logo-federico.png">
		<h4 id="appointments" class="yellowfy allCaps"> By Appointments Only </h4>
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/line2.png">
		
		<p  id="sub-exclusive"class="whitify allCaps"> <br>The Most Exclusive FM Perfume Collection in the World </p>
		<p  id="sub-europe" class="whitify allCaps"> Made in Europe </p>
		
		<!-- //navbar -->
		<div class="col-lg-12 bgc-sidebarmenu" style=" margin-top: 50px; height:300px;">
			<div class="side-nav">
				<nav class="s-mfix nav nav-stacked" role="navigation">
					<?php
				        if (has_nav_menu('primary_navigation')) :
				          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 's-menu list-unstyled'));
				        endif;
				     ?>
				</nav>
			</div>

		</div>

	</div>

</div>