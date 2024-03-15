<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */



?>
</div>

<!-- #content -->

<!---============== wrapper_full =================-->

<!---==============footer start =================-->

<div class="footer_area" id="footer_contents">
  <div class="footer_widgets_wrap bg_dark_2"> 
    
    <!--===============spacing==============-->
    
    <div class="pd_top_80"></div>
    
    <!--===============spacing==============-->
    
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widgets about_company light_color">
            <div class="about_company_inner">
              <div class="footer_logo"> <a href="<?php echo site_url();?>" rel="nofollow">
                <?php dynamic_sidebar( 'footer_logo' ); ?>
                </a> 
                
                <!--===============spacing==============-->
                
                <div class="pd_bottom_30"></div>
                
                <!--===============spacing==============--> 
                
              </div>
              <div class="content_box">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widgets wid_tit style_one">
            <div class="fo_wid_title">
              <h2>Get In Touch</h2>
            </div>
          </div>
          
          <!--===============spacing==============-->
          
          <div class="pd_bottom_25"></div>
          
          <!--===============spacing==============-->
          
          <div class="footer_widgets get_in_touch_foo light_color">
            <div class="get_intouch_inrfo">
              <div class="foo_cont_inner">
                <?php dynamic_sidebar( 'footer_get_in_touch' ); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-12">
          <div class="footer_widgets wid_tit style_one">
            <div class="fo_wid_title">
              <h2>Company</h2>
            </div>
          </div>
          
          <!--===============spacing==============-->
          
          <div class="pd_bottom_25"></div>
          
          <!--===============spacing==============-->
          
          <div class="footer_widgets clearfix navigation_foo light_color style_one">
            <div class="navigation_foo_box">
              <div class="navigation_foo_inner">
                <ul class="menu">
                  <li><a href="<?php echo site_url();?>">Home</a></li>
                  <li><a href="<?php echo site_url();?>/about-us/">About Us</a></li>
                  <li><a href="<?php echo site_url();?>/services/">Services</a></li>
                   <li><a href="<?php echo site_url();?>/our-team/">Our Team</a></li>
                  <li><a href="<?php echo site_url();?>/contact-us/">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-12">
          <div class="footer_widgets wid_tit style_one">
            <div class="fo_wid_title">
              <h2>Information</h2>
            </div>
          </div>
          
          <!--===============spacing==============-->
          
          <div class="pd_bottom_25"></div>
          
          <!--===============spacing==============-->
          
          <div class="footer_widgets clearfix navigation_foo light_color style_one">
            <div class="navigation_foo_box">
              <div class="navigation_foo_box">
                <div class="navigation_foo_inner">
                  <ul class="menu">
                    <li><a href="<?php echo site_url();?>/blog/">Blog</a></li>
                    <li><a href="<?php echo site_url();?>/news-events/">News & Events</a></li>
                    <li><a href="<?php echo site_url();?>/careers/">Careers</a></li>
                    <li><a href="<?php echo site_url();?>/testimonials/">Testimonials</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--===============spacing==============-->
    
    <div class="pd_bottom_50"></div>
    
    <!--===============spacing==============--> 
    
  </div>
  <div class="creote-footer-copyright bg_dark_3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12"> 
          
          <!--===============spacing==============-->
          
          <div class="pd_top_10"></div>
          
          <!--===============spacing==============-->
          
          <div class="footer_copy_content color_white"> © <?php echo date('Y');?> <a href="<?php echo site_url();?>">Kriticorp</a> All Rights
            
            Reserved. </div>
          
          <!--===============spacing==============-->
          
          <div class="pd_bottom_10"></div>
          
          <!--===============spacing==============--> 
          
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-md-end"> 
          
          <!--===============spacing==============-->
          
          <div class="pd_top_10"></div>
          
          <!--===============spacing==============-->
          
          <div class="footer_copy_content_right">
            <div class="social_media_v_one">
              <?php dynamic_sidebar( 'footer_social_media' ); ?>
            </div>
          </div>
          
          <!--===============spacing==============-->
          
          <div class="pd_bottom_10"></div>
          
          <!--===============spacing==============--> 
          
        </div>
      </div>
    </div>
  </div>
</div>

<!---==============footer end =================-->

</div>

<!-- #page --> 

<!-- Back to top with progress indicator-->

<div class="prgoress_indicator"> <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
  <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg> </div>
<?php wp_footer(); ?>
</body></html>