<div class="topsingle-post clearfix">
	<?php get_header(); ?>
	<h1>BLOG POST</h1>
</div>

<main role="main" class="single-post-container">
	<!-- section -->
	<a href="index.php?page_id=7"><h1 class="gobackblog"> <--- Go back to Blog Page Listing</h1></a>

	<div class="single-post-content">
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
<!-- 

					//shows the feature image but if commented out does not show the image on the single blog post page. Can uncomment it out if you
					want the feature image to show on the blog post page.
					
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>

					 -->
					<!-- /post thumbnail -->

					<!-- post title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>
					<div class="blogadmin">
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

						<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					</div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</div><!-- singlepost -->
</main>
<div class="sidebar">
	<?php get_sidebar(); ?>
</div>

<div class="single-post-comments clearfix">
	<div class="comments-content clearfix">
	<?php comments_template(); ?>
	</div>
</div>

<div class="single-post-footer clearfix">
	<?php get_footer(); ?>
</div>
