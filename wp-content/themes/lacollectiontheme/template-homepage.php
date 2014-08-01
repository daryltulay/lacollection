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
	<div class="col-md-12">
	<video autoplay loop poster="/assets/vid/polina.jpg" id="bgvid">
	<!-- <source src="polina.webm" type="video/webm"> -->
	<source src="<?php echo get_site_url(); ?>/assets/vid/videobackground.mp4" type="video/mp4">
	</video>
	</div>

</div>