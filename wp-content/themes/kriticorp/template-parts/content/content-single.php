<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage kriticorp
 * @since kriticorp 1.0
 */

?>
<link rel='stylesheet' id='bootstrap-min-css' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css?ver=6.4.1' media='all' />

<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <?php kriticorp_post_thumbnail(); ?>
          <?php
		the_content();
		?>
        </div>
        <div class="col-lg-12">
          <?php $post_type = get_post_type( get_the_ID() );
		if($post_type == 'careers'){
		?>
          <button type="button" class="btn btn-primary theme-btn one" data-bs-toggle="modal" data-bs-target="#exampleModal" id="apply_now"> Apply Now </button>
          <!--===============spacing==============-->
          <div class="mr_bottom_20"></div>
          <!--===============spacing==============--> 
          
          <!-- Modal --> 
          <!-- Modal -->
          <div class="modal fade" data-bs-backdrop="static" style="z-index: 9999;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body apply-now-modal"> <?php echo do_shortcode('[contact-form-7 id="1b26f9e" title="Apply Now"]');?> </div>
                
              </div>
            </div>
          </div>
          
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
              
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <?php
		}
		
		?>
        </div>
        <div class="col-lg-12">
          <?php
		// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		
		comments_template();
	}
	?>
        </div>
      </div>
    </div>
  </section>
  <!---newsteller--->
  
  <?php 


echo newletter();?>
  <!---newsteller end---> 
</div>
