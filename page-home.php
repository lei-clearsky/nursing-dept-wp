<?php
/**
 * Template Name: Homepage - MTAL
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mu Theta At Large
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post(); ?>

				<!--Banner-->
		<div class="sixteen columns">
			<div class="banner-holder">
				<h2>Sigma Theta Tau International</h2>
				<h1>MUTHETA AT LARGE</h1>
				<h2>Northern New Jersey Chapter</h2>
				<h2>HONOR SOCIETY OF NURSING</h2>
			</div>
			<h4 style="text-align: center;">Make Sigma Theta Tau the First Step of Your Journey to Nursing Excellence</h4>

			<div class="promo-wrap">
			<div class="promo-red"><a href="#">Learn More</a></div>
			<div class="promo-blue"><a href="#">Join Us!</a></div>
			</div>
		</div>
		
		<div class="sixteen columns" style="margin: 30px 0;">
			<?php get_template_part("content", "page"); ?>	
			
		</div>
		
		<div class="sixteen columns" style="margin: 30px 0;">
			<h2 style="text-align:center; margin-bottom: 20px;">Who We Are</h2>
			<div class="sixteen clearfix">
				<div class="eight columns alpha" >
				
					<div class="circular-wwr"></div>
				
				</div>
				
				<div class="eight columns omega">
				<h4>Mu Theta At Large</h4>
					<p>Mu Theta is a dynamic chapter with many accomplishments to its credit. Our board has developed a 5-year strategic plan. Our goals include increasing membership involvement, supporting research activities, encouraging leadership development and fund-raising to promote scholarship. In addition, we are working to increase our chapter's visibility. If any of these areas are of interest to you and you can share your time and talent with us, please contact me.</p>

				</div>
			</div>

		</div>
		
		<div class="sixteen columns" style="margin: 30px 0;">
			<h2 style="text-align:center; margin-bottom: 20px;">President's Message</h2>
			<div class="sixteen clearfix">
				<div class="eight columns alpha" >
				<h4>Sara Thompson, DNP, RN, APN-C</h4>
					<p>I am honored and humbled to serve the next two years as your president. The Mission and Vision of Sigma Theta Tau International are carried out in chapters like Mu Theta at Large. Read the Mission and Vision. </p>
					<p>Organizational Mission
The mission of the Honor Society of Nursing, Sigma Theta Tau International is to support the learning, knowledge and professional development of nurses committed to making a difference in health worldwide.</p>
				</div>
				
				<div class="eight columns omega">
				
					<div class="circular-pm"></div>
				</div>
			</div>

		</div>

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
