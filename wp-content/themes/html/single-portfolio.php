<div class="topsingle">
  <?php get_header(); ?>
</div>



<div class="section clearfix">
  <div class="innerWrapper clearfix">
    <div class="full clearfix">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="portdesc clearfix">
        	<?php the_field('client_name'); ?><br>
        	<?php the_field('short_description'); ?>
        	<span class="imagedesc clearfix"><?php the_content(); ?></span>
        </div>
        <div class="images">
          <?php while( has_sub_field('images') ): ?>
            <div class="image">
              <p><?php the_sub_field('caption'); ?></p>
              <?php $image = get_sub_field('image'); ?>
              <img src="<?php echo $image['sizes']['large'] ?>">
            </div>
          <?php endwhile; ?>
        </div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>