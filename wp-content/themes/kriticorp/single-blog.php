<?php
get_header();
while ( have_posts() ) :
	the_post();
?>

<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <?php
		the_content();
		?>
          <div class="form-elements">
            <?php
		// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		
		comments_template();
	}
	?>
          </div>
        </div>
        <div class="col-lg-6 thumb">
          <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
          <img src="<?php echo $image[0]; ?>" />
          <?php endif; ?>
        </div>
        <div class="col-lg-12"> </div>
      </div>
    </div>
  </section>
  <!---newsteller--->
  
  <?php 


echo newletter();?>
  <!---newsteller end---> 
</div>
<?php
endwhile;
get_footer();
?>
