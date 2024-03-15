<?php
/*Template Name: News & Events*/
get_header();
?>
<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="row">
      <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                        
                        <?php
					$news_event = get_post(94); 
					echo $news_event->post_content;
					?>
                           
                        </div>
                     </div>
                      <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
        <?php
	  $news_args = array(
	  'numberposts' => -1,
	  'post_type'   => 'news',				  
	  );
	  $news = get_posts($news_args);
	  foreach ($news as $news_res) {
		  $url = wp_get_attachment_url( get_post_thumbnail_id($news_res->ID), 'full' ); 

	  ?>
        <div class="col-lg-12">
          <div class="service-grid align-items-start">
            <div class="service-img"> <a href="<?php echo get_permalink($news_res->ID);?>"><img src="<?php echo $url;?>" alt="img-service"></a> </div>
            <div class="service-details">
              <div class="service-head">
                <h3><a href="<?php echo get_permalink($news_res->ID);?>"><i class="bi bi-box"></i><?php echo $news_res->post_title;?></a></h3>
                <!--<button><i class="bi bi-people"></i>256</button>--> 
              </div>
              <p><?php echo $news_res->post_content;?></p>
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
