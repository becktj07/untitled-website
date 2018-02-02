
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<div id="top"></div>
<div class="home-content__outer-wrapper">
	<section class="home-slider__inner-wrapper">
	<figure class="home-slider">
		<?php 
		if( have_rows('home_slider_repeater') ):
			while( have_rows('home_slider_repeater') ) : the_row(); 
				?>
				<div class="home-slider__slide"><img data-lazy="<?php the_sub_field('home_slider_image'); ?>" alt="" class="image-contain" /></div>
				<?php
			endwhile;
		endif;
		?>
	</figure>
	</section>

	<section class="information">
		<div class="information-centerer">
			<div class="information-container">
				<div class="untitled-text-overlay"> 
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="-174.599 0 1039.344 233.5"><g>
					<path d="M75.558 1.18v131.936h-.64L26.677 1.18H-9.777v230.657h35.495V87.756h.642l50.476 144.081h34.504V1.18m61.334 34.502h-38.335V1.18h116.286v34.502H212.29v196.155h-39.616M279.378 1.18h39.615v230.657h-39.615V1.18zm106.384 34.502h-38.336V1.18h116.285v34.502h-38.34v196.155h-39.614m99.357 0V1.18h39.615v196.149h62.295v34.508M611.299 1.18v230.657H711.69v-34.503h-60.774v-67.729h51.115V95.104h-51.115V35.682h60.774V1.18m-880.69 0h39.128v171.982c0 16.718 6.628 24.926 20.828 24.926 14.199 0 20.827-8.208 20.827-24.93V1.18h39.13v170.399c0 39.131-22.721 60.588-59.957 60.588-37.235 0-59.954-21.452-59.954-60.588V1.18H-169zM737.774 0h58.941C837.717 0 859.5 22.425 859.5 69.838v91.617c0 47.407-21.783 69.834-62.784 69.834h-58.941V0zm39.725 198.615h13.773c21.141 0 28.508-8.011 28.508-32.359V65.032c0-24.348-7.367-32.357-28.508-32.357h-13.773v165.94z"/></g></svg>
				</div>
				<div class="branding-text-watermark__creative">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 885.51 195.445">
						<path fill="#FFF6D6" d="M117.964-650.839v111.921h-.544L76.5-650.839H45.577v195.658h30.11v-122.22h.542l42.819 122.22h29.267v-195.658m52.034 29.266h-32.521v-29.267h98.643v29.267h-32.519v166.393h-33.603m90.511-195.66h33.605v195.658H290.86zm90.242 29.267h-32.519v-29.267h98.642v29.267h-32.517v166.393h-33.606m84.279-.001V-650.84h33.604v166.391h52.846v29.268m20.593-195.658v195.658h85.153v-29.267h-51.549v-57.451h43.359v-29.267h-43.359v-50.407h51.549v-29.266m-747.065-.001h33.192v145.886c0 14.188 5.622 21.146 17.667 21.146s17.667-6.96 17.667-21.146V-650.84h33.193v144.547c0 33.193-19.273 51.396-50.859 51.396s-50.859-18.201-50.859-51.396l-.001-144.547zm769.196-1h49.998c34.781 0 53.262 19.021 53.262 59.239v77.719c0 40.217-18.479 59.238-53.262 59.238h-49.998V-651.84zm33.695 168.478h11.686c17.937 0 24.185-6.793 24.185-27.444v-85.869c0-20.652-6.248-27.446-24.185-27.446h-11.686v140.759zM802.433 2.7v188.599h82.077v-28.211h-49.691v-55.379h41.799V79.498h-41.799V30.911h49.691V2.7M156.454 191.299h-32.292V3.278h45.313c36.2 0 54.688 15.365 54.688 55.469 0 30.207-11.718 42.448-22.656 47.397l27.342 85.155h-32.811l-22.917-77.864c-4.167.52-10.938.78-16.667.78v77.084zm0-103.647h11.458c17.449 0 23.959-6.511 23.959-28.905 0-22.395-6.51-28.906-23.959-28.906h-11.458v57.811zm104.171 103.647V3.278h86.458v28.125h-54.166v48.439h41.666v28.124h-41.666v55.208h57.809v28.125m50.522 0h-31.249L404.635 3.278h40.104l34.635 188.02h-31.25l-5.728-41.667h-35.418l-5.73 41.668zm10.417-69.792h26.04l-12.759-80.73h-.52l-12.761 80.73zm101.859-90.104h-31.25V3.278h94.792v28.125h-31.25v159.896h-32.292m93.23-188.021h32.291v188.02h-32.291zm140.107 0h31.768l-39.318 188.021h-32.295L667.695 3.278h31.769l23.438 130.468h.52M97.126 66.882V43.224S96.076 1.078 54.98 1.078c0 0-47.931-3.417-52.137 34.961V149.07s1.049 42.15 42.146 42.15c0 0 47.93 3.414 52.135-34.963v-30.841H65.756l-.175 24.532s-1.576 13.669-15.598 13.669c0 0-14.368 1.053-16.121-13.669V66.883h.351l.174-24.535s1.578-13.669 15.598-13.669c0 0 14.37-1.051 16.122 13.669v24.535l31.019-.001z"/>
					</svg>
				</div>
				<div class="branding-text-watermark__studio">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900.021 195.445">
						<path d="M147.989 32.297h-30.99V4.406h94.002v27.891h-30.989v158.567h-32.023M236.054 4.406h32.023v140.746c0 13.688 5.424 20.401 17.043 20.401 11.623 0 17.045-6.713 17.045-20.401V4.406h32.023v139.455c0 32.022-18.592 49.584-49.068 49.584-30.473 0-49.066-17.56-49.066-49.584V4.406zm135.327 0h47.516c33.057 0 50.62 18.078 50.62 56.299v73.86c0 38.221-17.562 56.297-50.62 56.297h-47.516V4.406zm32.021 160.116h11.104c17.047 0 22.984-6.455 22.984-26.084V56.83c0-19.627-5.938-26.084-22.984-26.084h-11.104v133.776zM511.097 4.406h32.023v186.458h-32.023zm73.607 45.193c0-26.341 15.49-47.775 49.062-47.775s49.068 21.435 49.068 47.775v96.068c0 26.342-15.496 47.777-49.068 47.777s-49.062-21.437-49.062-47.777V49.599zm32.02 95.295c0 13.947 4.133 20.66 17.047 20.66 12.912 0 17.041-6.713 17.041-20.66v-94.52c0-13.946-4.131-20.659-17.041-20.659-12.914 0-17.047 6.712-17.047 20.659v94.52zM71.049 49.741l29.465-3.619s-.517-42.39-41.871-43.939c0 0-46.524-3.102-49.109 44.974 0 0-3.619 28.95 34.634 58.413 0 0 39.804 28.948 25.847 49.629 0 0-12.922 17.057-29.981 0 0 0-4.135-16.545-4.135-20.162l-29.467 5.167s.517 48.076 47.042 50.66c0 0 49.625 0 49.625-48.592 0 0 .518-25.849-20.16-42.906 0 0-40.321-33.083-43.939-47.557 0 0-4.654-22.745 15.767-22.229-.002-.001 14.73-2.584 16.282 20.161z" fill="#FFF6D6"/>
					</svg>
				</div>
					<div class="info-flex-container">
						<div class="info-headings">
							<h2>Branding</h2>
							<ul>
								<li>Research + Discovery</li>
								<li>Brand Positioning</li>
								<li>Brand Messaging</li>
								<li>Brand Strategy</li>
								<li>Naming</li>
							</ul>
							<h2>Design</h2>
							<ul>
								<li>Brand Identity</li>
								<li>Publishing Design</li>
								<li>Packaging Design</li>
								<li>Print Collateral</li>
								<li>Events + Exhibitions</li>
								<li>Environments</li>
								<li>Website Strategy, Design, & Development</li>
								<li>User Experience Strategy + Design</li>
								<li>Mobile</li>
							</ul>
						</div>
						<div class="info-description">
							<?php the_field('info_description'); ?>
						</div>
					</div>

					<div class="info-flex-container info-flex-container--lower">
						<div class="info-headings">
							<h2 class="content-development-management">Content Development + Management</h2>
							<ul>
								<li>SEO/Analytics</li>
								<li>Website Maintenance</li>
								<li>Social Media</li>
								<li>Marketing</li>
								<li>Copywriting</li>
								<li>Photography</li>
								<li>Video Production</li>            
							</ul>
						</div>
						<div class="info-description">
							<h2 class="potential-projects">To discuss potential projects, please contact us at:</h2>
							<ul>
								<li><a href="mailto:highfive@untitledcreativestudio.com">highfive@untitledcreativestudio.com</a></li>
								<li>414-792-9670</li>
								<li>1835 N 54th <br>
								Milwaukee, WI 53208
								</li>
							</ul>
						</div>
					</div>
				</div>
		</div>
	</section>
	<div class="home-button-wrapper">
		<a href="#top" class="info-button-trigger">
			<div class="x-i-button">
<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.667 25.96">
  <circle fill="none" stroke="#000" stroke-width="2.25" stroke-miterlimit="10" cx="12.855" cy="12.884" r="11.416"/>
  <path id="i-icon" d="M11.327 7.062c0-.81.648-1.368 1.53-1.368.9 0 1.531.558 1.531 1.368s-.631 1.387-1.531 1.387c-.882 0-1.53-.576-1.53-1.387m.216 2.701h2.647v8.931h-2.647V9.763z"/>
  <path id="x-icon" fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10" d="M17.634 8.141L8.08 17.694m0-9.553l9.554 9.554"/>
</svg>
			</div>
		</a>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/scripts/homeSlider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/smartresize.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/animations.js"></script>
<?php
