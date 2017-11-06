
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<div class="home-slider__outer-wrapper">
<h1 class="home-text-overlay">Untitled</h1>
<section class="home-slider home-slider__inner-wrapper">
	<div class="home-slider__slide"><img src="http://via.placeholder.com/780x500" class="image-contain" /></div>
	<div class="home-slider__slide"><img src="http://via.placeholder.com/780x500" class="image-contain" /></div>
	<div class="home-slider__slide"><img src="http://via.placeholder.com/780x500" class="image-contain" /></div>
</section>	
</div>

<div class="i-button-wrapper">
	<a href="<?php echo site_url(); ?>/information">
		<img src="/<?php echo get_template_directory_uri(); ?>/images/i-button.svg" class="image-contain" />
	</a>
</div>

<!-- <section class="home-slider wrapper">
<?php 
if( have_rows('home_slider_repeater') ):
    while( have_rows('home_slider_repeater') ) : the_row(); 
		?>
		<div class="home-slider__slide"><img src="<?php the_sub_field('home_slider_image'); ?>" class="" /></div>
		<?php
    endwhile;
endif;
?>
</section> -->

<script src="<?php echo get_template_directory_uri(); ?>/scripts/homeSlider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/slick.min.js"></script>
<?php
get_sidebar();
get_footer();
