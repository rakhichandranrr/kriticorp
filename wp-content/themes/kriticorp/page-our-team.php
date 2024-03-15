<?php
/*Template Name: Our Team*/
get_header();

?>

<div id="content" class="site-content ">
  <section class="team bg_light_1"> 
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
    <div class="row align-items-end">
                    <?php
					$our_team = get_post(149); 
					echo $our_team->post_content;
					?>
                     
                     <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                     <!--===============spacing==============-->
                  </div>
      <div class="row">
        <?php
					  $team_args = array(
					  'numberposts' => -1,
					  'post_type'   => 'our-team',				  
					  );
					  $team = get_posts($team_args);
					  foreach ($team as $team_res) {
						  $url = wp_get_attachment_url( get_post_thumbnail_id($team_res->ID), 'full' ); 
						 
					  ?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="team_box style_one">
            <div class="team_box_outer">
              <div class="member_image"> <img src="<?php echo $url;?>" alt="team image" /> </div>
              <div class="about_member">
                <div class="share_media">
                  <ul class="first">
                    <li class="text">Social Media</li>
                    <li><i class="fa fa-share-alt"></i></li>
                  </ul>
                  <ul>
                    <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                    <li><a href="<?php echo get_field('facebook_url', $team_res->ID);?>"> <i class="fa fa-facebook"> </i></a></li>
                    <li><a href="<?php echo get_field('twitter_url', $team_res->ID);?>"> <i class="fa fa-twitter"> </i></a></li>
                    <li><a href="<?php echo get_field('instagram_url', $team_res->ID);?>"> <i class="fa fa-instagram"> </i></a></li>
                  </ul>
                </div>
                <div class="authour_details"> <span><?php echo get_field('designation', $team_res->ID);?> </span>
                  <h6><?php echo $team_res->post_title;?></h6>
                </div>
              </div>
            </div>
          </div>
          <!--===============spacing==============-->
          <div class="mr_bottom_30"></div>
          <!--===============spacing==============--> 
        </div>
        <?php
					  }
					  ?>
      </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============--> 
  </section>
  <!---newsteller---> 
  <?php echo newletter();?> 
  <!---newsteller end---> 
</div>
<?php
get_footer();
?>
