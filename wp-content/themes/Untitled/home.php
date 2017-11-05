
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="home-slider wrapper">
	<div class="home-slider__slide"><img src="http://via.placeholder.com/1000x800" /></div>
	<div class="home-slider__slide"><img src="http://via.placeholder.com/1000x800" /></div>
	<div class="home-slider__slide"><img src="http://via.placeholder.com/1000x800" /></div>
</section>	
<script src="<?php echo get_template_directory_uri(); ?>/scripts/homeSlider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/slick.min.js"></script>
<?php
get_sidebar();
get_footer();
