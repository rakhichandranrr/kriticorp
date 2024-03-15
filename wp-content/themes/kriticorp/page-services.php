<?php
/*Template Name: Services*/
get_header();

?>

<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="row">
      <div class="title_all_box style_one  text-center dark_color">
                        <div class="title_sections">
                           <?php
					$services_content = get_post(40); 
					echo $services_content->post_content;
					?>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>
        <?php
	  $services_args = array(
	  'numberposts' => -1,
	  'post_type'   => 'services',				  
	  );
	  $services = get_posts($services_args);
	  foreach ($services as $services_res) {
		  $url = wp_get_attachment_url( get_post_thumbnail_id($services_res->ID), 'full' ); 
		 
	  ?>
        <div class="col-lg-12">
          <div class="service-grid">
            <div class="service-img"> <img src="<?php echo $url;?>" alt="img-service"> </div>
            <div class="service-details">
              <div class="service-head">
                <h3><i class="bi bi-box"></i><?php echo $services_res->post_title;?></h3>
                <!--<button><i class="bi bi-people"></i>256</button>--> 
              </div>
              <p><?php echo $services_res->post_content;?></p>
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
