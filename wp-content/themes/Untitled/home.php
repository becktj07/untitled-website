
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<div class="home-slider__outer-wrapper">
	<div class="image-contain home-text-overlay">
	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMax meet" width="899.84" height="226" viewBox="0 0 899.84 226"><g fill="#000">
                <path class="untitled" d="M221.227 15.694v111.92h-.543l-40.92-111.92H148.84v195.66h30.11V89.133h.543l42.818 122.22h29.27V15.693M303.61 44.96h-32.52V15.694h98.644V44.96h-32.52v166.393h-33.603M394.124 15.693h33.604v195.66h-33.604zM484.366 44.96h-32.52V15.694h98.643V44.96h-32.52v166.393h-33.604M568.645 211.353V15.693h33.603v166.39h52.845v29.27M675.688 15.694v195.66h85.152v-29.27h-51.55v-57.45h43.36V95.367h-43.36V44.96h51.55V15.695M13.775 15.693h33.192V161.58c0 14.186 5.622 21.146 17.667 21.146 12.045 0 17.667-6.96 17.667-21.147V15.692h33.194V160.24c0 33.194-19.273 51.395-50.86 51.395s-50.858-18.2-50.858-51.395V15.693zM782.97 14.693h50c34.782 0 53.26 19.023 53.26 59.24v77.718c0 40.218-18.478 59.24-53.26 59.24h-50V14.693zm33.696 168.48h11.685c17.937 0 24.186-6.794 24.186-27.446v-85.87c0-20.652-6.25-27.446-24.185-27.446h-11.684v140.762z"/></g><g fill="#FFF6D6"><path d="M-938.327 115v-11.25s-.5-20.042-20.042-20.042c0 0-22.79-1.625-24.79 16.625v53.75s.5 20.042 20.04 20.042c0 0 22.793 1.625 24.793-16.625v-14.667h-14.917l-.083 11.667s-.75 6.5-7.417 6.5c0 0-6.833.5-7.667-6.5V115h.166l.083-11.667s.75-6.5 7.416-6.5c0 0 6.833-.5 7.667 6.5V115h14.75zM-888.41 219.25l14.25-1.75s-.25-20.5-20.25-21.25c0 0-22.5-1.5-23.75 21.75 0 0-1.75 14 16.75 28.25 0 0 19.25 14 12.5 24 0 0-6.25 8.25-14.5 0 0 0-2-8-2-9.75l-14.25 2.5s.25 23.25 22.75 24.5c0 0 24 0 24-23.5 0 0 .25-12.5-9.75-20.75 0 0-19.5-16-21.25-23 0 0-2.25-11 7.625-10.75 0 0 7.125-1.25 7.875 9.75z"/></g>
            </svg>
	</div>
	<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/untitled-black.svg" class="image-contain home-text-overlay" /> -->
	<div class="home-slider__inner-wrapper">
		<section class="home-slider">
			<?php 
			if( have_rows('home_slider_repeater') ):
				while( have_rows('home_slider_repeater') ) : the_row();
					?>
					<div class="home-slider__slide"><img src="<?php the_sub_field('home_slider_image'); ?>" alt="" class="image-contain" /></div>
					<?php
				endwhile;
			endif;
			?>
		</section>
		<div class="i-button-wrapper">
			<a href="<?php echo site_url(); ?>/information">
				<img src="<?php echo get_template_directory_uri(); ?>/images/i-button.svg" class="image-contain" />
			</a>
		</div>
	</div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/scripts/homeSlider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/slick.min.js"></script>
<?php
get_sidebar();
get_footer();
