<?php
/*Template Name: Careers*/
get_header();

?>

<div id="content" class="site-content ">
  <section class="services  mt-5" >
    <div class="container">
      <div class="title_all_box style_one  dark_color">
        <div class="title_sections">
          <?php
					$career_content = get_post(104); 
					echo $career_content->post_content;
					?>
        </div>
      </div>
       <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
      <div class="row mb-5 careerlist">
        <?php
		$careers_args = array(
		  'numberposts' => -1,
		  'post_type'   => 'careers',				  
		  );
		  $careers = get_posts($careers_args);
		  foreach ($careers as $careers_res) {
			  ?>
        <div class="col-lg-4"> <a href="<?php echo get_permalink($careers_res->ID);?>" rel="bookmark">
          <div class="news_box style_five">
            <div class="content_box">
              <ul >
                <li> <span class="fa fa-clock-o"></span><?php echo date('d F Y',strtotime($careers_res->post_date));?> </li>
              </ul>
              <h2 class="title trun1"> <?php echo $careers_res->post_title;?></h2>
              <div  class="short_desc trunx careermain"> <?php echo $careers_res->post_content;?></div>
              <a href="<?php echo get_permalink($careers_res->ID);?>" class="link__go">Read more<i
                                          class="icon-right-arrow-long"></i></a> </div>
          </div>
          </a> </div>
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
