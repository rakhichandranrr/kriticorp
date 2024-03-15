<?php
/*Template Name: Testimonials*/
get_header();

?>

<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="row">
      
        <?php
	  $testmonials_args = array(
	  'numberposts' => -1,
	  'post_type'   => 'testimonials',				  
	  );
	  $testmonials = get_posts($testmonials_args);
	  foreach ($testmonials as $testmonials_res) {
		  $photo = get_field('photo',$testmonials_res->ID);
	  ?>
        <div class="col-lg-6">
          <div class="service-grid testimonials-g">
            <div class="tst-img"> <img src="<?php echo $photo['url'];?>" alt="img-service"> </div>
            <div class="service-details">
              <div class="service-head">
                <h3><i class="bi bi-box"></i><?php echo $testmonials_res->post_title;?></h3>
                <span><?php echo get_field('designation',$testmonials_res->ID);?></span>
              </div>
              <p><?php echo $testmonials_res->post_content;?></p>
            </div>
          </div>
        </div>
        <?php
	  }
	  ?>
      </div>
    </div>
  </section>
  <!---newsteller--->
<?php echo newletter();?>
<!---newsteller end--->
</div>
<?php
get_footer();
?>
