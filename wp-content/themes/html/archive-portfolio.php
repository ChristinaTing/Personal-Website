<div class="topport">
	<?php get_header(); ?>
	<h1>PORTFOLIO</h1>
</div>

<div class="section">
	<div class="innerWrapper">
		<div class="full clearfix">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="fullcontent">
					
					<!--  <?php the_content(); ?> -->
					<a href="<?php the_permalink(); ?>">
						<div class="images clearfix">
							<?php while( has_sub_field('images') ): ?>
								<div class="image clearfix">
									<p><?php the_sub_field('caption'); ?></p>
									<?php $image = get_sub_field('image'); ?>
									<img src="<?php echo $image['sizes']['medium'] ?>">
								</div>
							<?php endwhile; ?>
							<div class="portsum">
								<h2><?php the_title(); ?></h2>
								<?php the_field('client_name'); ?><br>
								<?php the_field('short_description'); ?>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div> <!-- /.innerWrapper -->
</div> <!-- /.section -->



<?php get_footer(); ?>
