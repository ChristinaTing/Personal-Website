<!-- EVERYTHING AT THIS LEVEL IS LAID OUT VERTICALLY -->
<div class="topblog">

	<?php get_header(); ?>
	<h1>BLOG</h1>
</div>

<div class="main-container clearfix">
	<!-- EVERYTHING AT THIS LEVEL IS LAID OUR HORIZONTALLY -->

	<div class="blog-posts">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="a-blog-post">
				<a class="blog-post-title" href="<?php the_permalink(); ?>">
					<h1><?php the_title(); ?></h1>
					<span class="entry-date"><?php echo get_the_date(); ?></span>
					<span>|</span>
					<span class="tags"><?php the_tags(); ?></span>
					<span>|</span>
					<span class="Comments">Comments <?php comments_number( '(0)', 'one response', '% responses' ); ?>.
					</span>
				</a>
				<div class="blog-post-content">
					<?php the_content(); ?>
				</div>
			</div>
		<hr>
		<?php endwhile; // end of the loop. ?>
		<div class="pagenavi">
		<?php if( function_exists( 'wp_pagenavi ' ) ) {
		     wp_pagenavi();
		} else {
		     next_posts_link('Older Posts');
		     previous_posts_link('Newer Posts');
		} ?>
		</div>
	</div>
	<div class="sidebardiv">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
