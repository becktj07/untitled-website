
<?php /* Template Name: Information */ ?>

<?php get_header(); ?>

<section class="information wrapper">

<div class="branding-text-overlay">
<div><img src="<?php echo get_template_directory_uri(); ?>/images/untitled-yellow.svg" class="image-contain branding-text-overlay untitled" /></div>
<div><img src="<?php echo get_template_directory_uri(); ?>/images/creative-yellow.svg" class="image-contain branding-text-overlay creative" /></div>
<div><img src="<?php echo get_template_directory_uri(); ?>/images/studio-yellow.svg" class="image-contain branding-text-overlay studio" /></div>
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
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
            </p>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius 
            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
        </div>
    </div>

    <div class="info-flex-container info-flex-container--lower">
        <div class="info-headings">
            <h2>Content Development + Management</h2>
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
                <li>info @untitledcreaetivestudio.com</li>
                <li>414-XXX-XXXX</li>
                <li>1835 N 54th <br>
                Milwaukee, WI 53208
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="x-button-wrapper">
	<a href="<?php echo site_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/images/x-button.svg" class="" />
	</a>
</div>

<?php
get_sidebar();
get_footer();
