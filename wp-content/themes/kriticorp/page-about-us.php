<?php
/*Template Name: About Us*/
get_header();
$page_id = get_the_ID();
$block1 = get_field('block_1',$page_id);
$block2 = get_field('block_2',$page_id);
$block3 = get_field('block_3',$page_id);
?>

<div id="content" class="site-content "> 
  <!---about--->
  <section class="about-section"> 
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
      <div class="row">
        <?php echo $block1;?>
        
      </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_70"></div>
    <!--===============spacing==============--> 
  </section>
  <!---about end---> 
  <!---service--->
  <section class="service-icon-section bg_light_1"> 
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
      <?php echo $block2;?>
      
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============--> 
  </section>
  <!---service end---> 
  <!---expertise--->
  <section class="expertise">
    <div class="area_of_expertise">
<?php echo $block3;?>
    </div>
  </section>
  <!---expertise-end---> 
  
  <!---team--->
  <section class="team bg_light_1"> 
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
      <div class="row align-items-end">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="title_all_box style_one  dark_color">
            <div class="title_sections">
              <div class="before_title"> Dedicated Team</div>
              <h2>Professional Individuals</h2>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="description_box">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Pellentesque urna elit, malesuada ut libero in, auctor pharetra </p>
            <!--===============spacing==============-->
            <div class="mr_bottom_20"></div>
            <!--===============spacing==============--> 
          </div>
        </div>
        <!--===============spacing==============-->
        <div class="mr_bottom_30"></div>
        <!--===============spacing==============--> 
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="team_box style_one">
            <div class="team_box_outer">
              <div class="member_image"> <img src="<?php echo get_template_directory_uri();?>/assets/images/kriticorp-imgs/team1.png" alt="team image" /> </div>
              <div class="about_member">
                <div class="share_media">
                  <ul class="first">
                    <li class="text">Share</li>
                    <li><i class="fa fa-share-alt"></i></li>
                  </ul>
                  <ul>
                    <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                    <li><a href="#"> <i class="fa fa-facebook"> </i></a></li>
                    <li><a href="#"> <i class="fa fa-twitter"> </i></a></li>
                    <li><a href="#"> <i class="fa fa-skype"> </i></a></li>
                    <li><a href="#"> <i class="fa fa-instagram"> </i></a></li>
                  </ul>
                </div>
                <div class="authour_details"> <span>Director </span>
                  <h6>Amelia Bedelia</h6>
                </div>
              </div>
            </div>
          </div>
          <!--===============spacing==============-->
          <div class="mr_bottom_30"></div>
          <!--===============spacing==============--> 
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="team_box style_one">
            <div class="team_box_outer">
              <div class="member_image"> <img src="<?php echo get_template_directory_uri();?>/assets/images/kriticorp-imgs/team2.png" alt="team image" /> </div>
              <div class="about_member">
                <div class="share_media">
                  <ul class="first">
                    <li class="text">Share</li>
                    <li><i class="fa fa-share-alt"></i></li>
                  </ul>
                  <ul>
                    <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                    <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                  </ul>
                </div>
                <div class="authour_details"> <span>Team Leader </span>
                  <h6>James Cameron</h6>
                </div>
              </div>
            </div>
          </div>
          <!--===============spacing==============-->
          <div class="mr_bottom_30"></div>
          <!--===============spacing==============--> 
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="team_box style_one">
            <div class="team_box_outer">
              <div class="member_image"> <img src="<?php echo get_template_directory_uri();?>/assets/images/kriticorp-imgs/team3.png" alt="team image" /> </div>
              <div class="about_member">
                <div class="share_media">
                  <ul class="first">
                    <li class="text">Share</li>
                    <li><i class="fa fa-share-alt"></i></li>
                  </ul>
                  <ul>
                    <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                    <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                    <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                  </ul>
                </div>
                <div class="authour_details"> <span>Manager </span>
                  <h6>Jane Charlotte</h6>
                </div>
              </div>
            </div>
          </div>
          <!--===============spacing==============-->
          <div class="mr_bottom_30"></div>
          <!--===============spacing==============--> 
        </div>
      </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============--> 
  </section>
  <!---team-end---> 
  <!---newsteller---> 
  <?php echo newletter();?> 
  <!---newsteller end---> 
</div>
</div>
<?php
get_footer();
?>
