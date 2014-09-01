<?php

/*
Template Name: Home
*/

get_header(); ?>


<section class="content">
	<!-- About Section -->
	<a id="about"></a>
	<div class="about">
		<div class="aboutcontent font">
			<div class="headingsabout">
				<h1 class="abouthead">ABOUT</h1>
				<span class="border"></span>
			</div>
			<p class="aboutinfo clearfix">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>



						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>
			<?php endif; ?>
		</p>
	</div>
</div>



<!-- Portfolio Section -->
<a id="portfolio"></a>
<div class="portfolio clearfix">
	<div class="portfoliocontent font">
		<div class="headingsportfolio">
			<h1 class="portfoliohead">MY WORK</h1>
			<span class="borderportfolio"></span>
		</div>
		<div class="foliowrap clearfix">

			<?php wp_reset_postdata(); ?>
			<?php
			$portfolioLoop = new WP_Query( 
				array( 
					'posts_per_page' => 3, 
					'post_type' => 'portfolio', 
					) 
				); 
				?>


				<?php if ( $portfolioLoop->have_posts() ) while ( $portfolioLoop->have_posts() ) : $portfolioLoop->the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="folioitem">
							<?php while( has_sub_field('images') ): ?>
								<?php $image = get_sub_field('image'); ?>
								<img src="<?php echo $image['sizes']['medium'] ?>" height="320" width="320" alt="">
								<!-- title of the portfolio is dynamically added in the hover effect -->
								<p class="overlay"><?php the_title(); ?></p>
							<?php endwhile; ?>
						</div>
					</a>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<a href="index.php?page_id=12"><p class="seemore">SEE MORE OF MY WORK</p></a>
	</div>


	<!-- Skills Section -->
	<a id="skills"></a>
	<div class="skills clearfix">
		<div class="skillscontent font">
			<div class="headingsskills">
				<h1 class="skillshead">SKILLS</h1>
				<span class="border"></span>
			</div>
			<div class="skillsinfo ">
				<div class="code clearfix">
					<!-- Code by Azis from The Noun Project -->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<g>
							<path d="M41.751,59.098v6.119L20,55.789v-5.232l21.751-9.427v6.162l-15.156,5.839L41.751,59.098z"/>
							<path d="M55.2,41l-6.055,24.93c-0.201,0.821-0.377,1.471-0.529,1.946c-0.151,0.476-0.382,0.849-0.691,1.112   c-0.31,0.268-0.761,0.4-1.352,0.4c-1.47,0-2.206-0.636-2.206-1.902c0-0.332,0.145-1.16,0.433-2.486l6.033-24.93   c0.317-1.326,0.619-2.234,0.907-2.724c0.289-0.49,0.851-0.735,1.688-0.735c0.721,0,1.271,0.173,1.653,0.519   c0.382,0.346,0.573,0.822,0.573,1.427C55.654,39.004,55.502,39.818,55.2,41z"/>
							<path d="M80,55.789L58.249,65.26v-6.119l15.2-5.967l-15.2-5.882v-6.076L80,50.6V55.789z"/>
						</g>
						<path d="M94,6H6c-3.313,0-6,2.687-6,6v76c0,3.313,2.687,6,6,6h88c3.314,0,6-2.688,6-6V12C100,8.686,97.314,6,94,6z M79,10  c2.205,0,4,1.794,4,4s-1.795,4-4,4s-4-1.794-4-4S76.795,10,79,10z M68,10c2.205,0,4,1.794,4,4s-1.795,4-4,4s-4-1.794-4-4  S65.795,10,68,10z M94,88H6V22h88V88z M90,18c-2.205,0-4-1.794-4-4s1.795-4,4-4s4,1.794,4,4S92.205,18,90,18z"/>
					</svg>
					<p>HTML, CSS, Javascript, Jquery, Wordpress, and responsive design. This site was made by me!</p>
				</div>
			</div>
			<div class="research">
				<!-- Books by Julia Simplicio from The Noun Project -->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Your_Icon" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<g>
						<rect y="8" fill="#000000" width="18" height="12"/>
						<g>
							<rect y="24" fill="#000000" width="18" height="5"/>
							<rect y="33" fill="#000000" width="18" height="61"/>
						</g>
					</g>
					<g>
						<rect x="23" y="8" fill="#000000" width="21" height="12"/>
						<g>
							<rect x="23" y="24" fill="#000000" width="21" height="5"/>
							<rect x="23" y="33" fill="#000000" width="21" height="61"/>
						</g>
					</g>
					<g>
						<rect x="48" y="8" fill="#000000" width="20" height="12"/>
						<g>
							<rect x="48" y="24" fill="#000000" width="20" height="5"/>
							<rect x="48" y="33" fill="#000000" width="20" height="61"/>
						</g>
					</g>
					<g>

						<rect x="74.517" y="3.497" transform="matrix(0.1221 0.9925 -0.9925 0.1221 83.8687 -68.3864)" fill="#000000" width="12.149" height="19.438"/>
						<g>

							<rect x="80.22" y="16.278" transform="matrix(0.1221 0.9925 -0.9925 0.1221 97.9373 -58.7256)" fill="#000000" width="3.888" height="19.439"/>

							<rect x="56.154" y="51.728" transform="matrix(-0.1221 -0.9925 0.9925 -0.1221 36.1034 154.8296)" fill="#000000" width="60.745" height="19.439"/>
						</g>
					</g>
					<rect x="27" y="43" fill="#000000" width="13" height="28"/>
				</svg>
				<p>I have 10+ years of working as a Research Associate in many different fields, predominately mental health research.</p>
			</div>
			<div class="deliver">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<rect x="80.742" y="25.013" width="19.258" height="74.987"/>
					<rect x="53.841" width="19.232" height="100"/>
					<rect x="26.914" y="50" width="19.258" height="50"/>
					<rect y="75.013" width="19.245" height="24.987"/>
				</svg>
				<p>My experience and travels have taught me how important reliability, flexibility and a good work ethic are to the success of a project, team and the individual. I can get the work done and do it well.</p>
			</div>
		</div>
	</div>

	<!-- Blog Section -->
	<a id="blog"></a>
	<div class="blog clearfix">
		<div class="blogcontent font clearfix">
			<div class="headingsblog">
				<h1 class="bloghead">BLOG</h1>
				<span class="borderblog"></span>
			</div>
			<div class="blogwrap">

				<?php wp_reset_postdata(); ?>
				<?php
				$blogLoop = new WP_Query( 
					array( 
						'posts_per_page' => 3, 
						'post_type' => 'post', 
						) 
					); 
					?>
					<?php if ( $blogLoop->have_posts() ) while ( $blogLoop->have_posts() ) : $blogLoop->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="blogitem ">
								<?php if ( has_post_thumbnail() )
									the_post_thumbnail(); ?>
							</div>
						</a>
					<?php endwhile; // end of the loop. ?>

					</div>
			</div>
			<a href="index.php?page_id=7"><p class="seemoreblog">SEE MORE OF MY BLOG</p></a>
		</div>
		<!-- Contact -->
		<a id="contact"></a>
		<div class="contact clearfix">
			<div class="contactcontent clearfix font">
				<div class="headings">
					<h1 class="contacthead">CONTACT</h1>
					<span class="bordercontact"></span>
				</div>
				<p class="contactinfo clearfix">
					Thanks for visiting my site! I currently live in Toronto, Canada and I am always up for a cup of coffee. If you'd like to reach me for potential jobs, to discuss web-development or even just to have a chat get in touch by email or stalk me on my social media. 
				</p>
				<div class="contactform">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
				</div>



<!-- 

				<a href="mailto:christinagting@gmail.com">
					<xml version="1.0" encoding="utf-8"> Generator: IcoMoon.io 
					<svg class="mail" width="42" height="42" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g><path d="M 30,8L 2,8 C 0.896,8,0,8.896,0,10l0,20 c0,1.104, 0.896,2, 2,2l 28,0 c 1.104,0, 2-0.896, 2-2L 32,10 C 32,8.896, 31.104,8, 30,8z M 11.36,22.054l 4.644,3.156l 4.616-3.178L 28.586,30L 3.414,30 L 11.36,22.054z M 2,28.586L 2,15.69 l 7.676,5.218L 2,28.586z M 22.294,20.88 L 30,15.576l0,13.010 L 22.294,20.88z M 30,10l0,3.236 l-0.042-0.060l-13.962,9.614L 2,13.274L 2,10 L 30,10 z"></path></g></svg></a>
					</div> -->

					
				</div>
			</section>


		// <script>

		$(function() { // Smoothscroll
		             $('a[href*=#]:not([href=#])').click(function() {
		               if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		                 var target = $(this.hash);
		                 target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		                 if (target.length) {
		                   $('html,body').animate({
		                     scrollTop: target.offset().top
		                   }, 1000);
		                   return false;
		                 }
		               }
		             });
		           }); 

		// </script>

			<?php get_footer(); ?>
