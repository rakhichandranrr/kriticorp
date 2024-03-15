<?php
/*Template Name: Home*/
get_header();
$page_id = get_the_ID();
$about_us = get_field('about_us', $page_id);
$vedio_content = get_field('vedio_content', $page_id);
$blog_content = get_field('blog', $page_id);

?>

<div id="content" class="site-content">
<!---slider-->
            <section class="slider style_four nav_position_one">
               <?php
				echo do_shortcode('[smartslider3 slider="2"]');
				?>
            </section>
            <!---slider-end--->
               <!---about us-->
            <section class="about_us_section" id="about">
               <!--===============spacing==============-->
               <div class="pd_top_60"></div>
               <!--===============spacing==============-->
               <div class="container pd_zero">
                  <div class="row">
                     <?php echo $about_us;?>
                     
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_80"></div>
               <!--===============spacing==============-->
            </section>
            <!---about us end-->
             <!---process--->
            <section class="process" id="process">
               <!--===============spacing==============-->
               <div class="pd_top_50"></div>
               <!--===============spacing==============-->
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
                      
 <div class="title_sections custom">
                           <div class="before_title">
                            Why KritiCorp</div>
                            <h2>Why choose us</h2>
                            <div class="row">
                                
                            </div>
                         </div>
                       <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                     
                     <?php
	  $services_args = array(
	  'numberposts' => 4,
	  'post_type'   => 'services',				  
	  );
	  $services = get_posts($services_args);
       $i=1;               
	  foreach ($services as $services_res) {
		  ?>
                    
                    
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="process_box style_two dark_color">
                           <div class="process_box_outer_two">
                              
                              <div class="content_box clearfix customsd">
                                 <div class="icon">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri();?>/assets/images/icons-kriticorp/s<?php echo $i; ?>.svg" class="img-fluid svg_image"
                                          alt="icon png" />
                                       <?php
          $i++;
          ?>
                                    </div>
                                 </div>
                                 <h2><a href="<?php echo get_permalink($services_res->ID);?>"  rel="nofollow"> <?php echo $services_res->post_title;?></a></h2>
                              </div>
                              <div class="trun" ><?php echo $services_res->post_content;?></div>
                              <a href="<?php echo get_permalink($services_res->ID);?>"  rel="nofollow" class="theme-btn two">Read more</a>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>
                     
              <?php
	  }
	  ?>
        
              <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->
                     
                  </div>
               </div>
      
            <!---service--->
            
            
            <section class="service_section bg_light_1" id="service">
               <!--===============spacing==============-->
               <div class="pd_top_20"></div>
               <!--===============spacing==============-->
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
					  'numberposts' => 3,
					  'post_type'   => 'news',				  
					  );
					  $news = get_posts($news_args);
					  foreach ($news as $news_res) {
						  $url = wp_get_attachment_url( get_post_thumbnail_id($news_res->ID), 'full' ); 
						 
					  ?>
									
                     <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="service_box style_two dark_color">
                           <div class="service_content_two  active_ser">
                              <div class="content_inner"
                                 style="background-image:url(<?php echo $url;?>);">
                                 
                              </div>
                             
                              <div class="news_content">
                                 <h2>
                                    <a href="<?php echo get_permalink($news_res->ID);?>"><?php echo $news_res->post_title;?></a>
                                 </h2>
                                 <div class="trun" ><?php echo $news_res->post_content;?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_20"></div>
                        <!--===============spacing==============-->
                     </div>  
                     
                     <?php
					  }
					  ?>
                                        
                      
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_70"></div>
               <!--===============spacing==============-->
            </section>
            
            
            <!---service end-->
            <!---expertise--->
            <section class="expertise">
               <div class="area_of_expertise">
                  <div class="simpleParallax">
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/areaof-ecp-1.jpg" class="cover-parallax" alt="image">
                  </div>
                  <?php echo $vedio_content;?>
                  
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
					  'numberposts' => 3,
					  'post_type'   => 'our-team',				  
					  );
					  $team = get_posts($team_args);
					  foreach ($team as $team_res) {
						  $url = wp_get_attachment_url( get_post_thumbnail_id($team_res->ID), 'full' ); 
						 
					  ?>
                     
                     
                     <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="team_box style_one">
                           <div class="team_box_outer">
                              <div class="member_image">
                                 <img src="<?php echo $url;?>" alt="team image" />
                              </div>
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
                                 <div class="authour_details">
                                    <span><?php echo get_field('designation', $team_res->ID);?> </span>
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
            <!---team-end--->
             
             
             
            <!---testimonial--->
            <section class="testimonial bg_op_1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/testimonialbg.jpg);">
               <div class="row align-items-center">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 pd_zero">
                     <div class="image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/testi-image.jpg" class="object-fit-cover img-fluid height_560px"
                           alt="image" />
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 pd_zero">
                     <!--===============spacing==============-->
                     <div class="pd_top_70"></div>
                     <!--===============spacing==============-->
                     <div class="testimonial_sec_wrapper pd_left_70">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections">
                             <?php
							$testimon = get_post(136); 
							echo $testimon->post_content;
							?>
                           </div>
                           <!--===============spacing==============-->
                           <div class="mr_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                        <div class="testimonial_sec light_color style_one">
                           
                           <div class="swiper-container" data-swiper='{
                              "loop": true,
                              "autoplay": {
                                "delay": 7000
                              },
                              "speed": 1000,
                              "centeredSlides": false,
                              "slidesPerView": 1,
                              "spaceBetween": 30,
                              "navigation": {
                                "nextEl": ".next-single-one",
                                "prevEl": ".prev-single-one"
                              },
                              "pagination": {
                                "el": ".number-pagination",
                                "type": "fraction"
                              },
                              "breakpoints": {
                                "1200": {
                                  "slidesPerView": 1 
                                },
                                "1024": {
                                  "slidesPerView": 1 
                                },
                                "768": {
                                  "slidesPerView": 1 
                                },
                                "576": {
                                  "slidesPerView": 1 
                                }
                              }
                            }'>
                              <div class="swiper-wrapper">
                                 
                                 <?php
							  $testmonials_args = array(
							  'numberposts' => -1,
							  'post_type'   => 'testimonials',				  
							  );
							  $testmonials = get_posts($testmonials_args);
							  foreach ($testmonials as $testmonials_res) {
								  $photo = get_field('photo',$testmonials_res->ID);
							  ?> 
                                 
                                 <div class="swiper-slide">
                                    <div class="testimonial_box">
                                       <!--<div class="rating">
                                          <ul>
                                             <li><span class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span class="fa fa-star empty"></span>
                                             </li>
                                          </ul>
                                       </div>-->
                                       <div class="authour_details  image_yes ">
                                          <div class="image">
                                             <img src="<?php echo esc_url($photo['url']); ?>" alt="image" />
                                          </div>
                                          <div class="details">
                                             <h2><?php echo $testmonials_res->post_title;?></h2>
                                             <span><?php echo get_field('designation',$testmonials_res->ID);?></span>
                                          </div>
                                       </div>
                                       <div class="comment">
                                         <?php echo $testmonials_res->post_content;?>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <?php
							  }
							  ?>
                           
                              </div>
                              <div class="arrows">
                                 <div class="prev-single-one"></div>
                                 <div class="next-single-one"></div>
                              </div>
                              <div class="num_pagination">
                                 <div class="number-pagination">

                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_70"></div>
                     <!--===============spacing==============-->
                  </div>
                  <!---empty column--->
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12">
                  </div>
                  <!---empty column--->
               </div>
            </section>
            <!---testimonial-end---> 
             
             
            <!---project--->
            <section class="project-carousel" id="projects">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <?php
					$blog_content = get_post(85); 
					echo $blog_content->post_content;
					?>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
               </div>
               <div class="container-fluid">

                  <div class="row">
                     <div class="col-lg-12">

                        <div class="project_caro_section carousel style_one ">
                           <div class="swiper-container" data-swiper='{
                           "loop": true,
                           "autoplay": {
                             "delay": 5000
                           },
                           "speed": 1000,
                           "centeredSlides": false,
                           "slidesPerView": 4,
                           "spaceBetween": 30,
                           "pagination": {
                             "el": ".swiper-pagination",
                             "clickable": true
                           },
                           "navigation": {
                             "nextEl": ".swiper-button-next",
                             "prevEl": ".swiper-button-prev"
                           },
                           "breakpoints": {
                              "1200": {
                                 "slidesPerView": 4 
                                },
                              "1024": {
                               "slidesPerView": 2 
                              },
                             "768": {
                               "slidesPerView": 2 
                             },
                             "576": {
                               "slidesPerView": 1 
                             },
                             "0": {
                              "slidesPerView": 1 
                            }
                           }
                         }'>
                              <div class="swiper-wrapper">
                                 <!----swiper warapper start---->
                                 
                                  <?php
						  $blog_args = array(
						  'numberposts' => -1,
						  'post_type'   => 'blog',				  
						  );
						  $blog = get_posts($blog_args);
						  foreach ($blog as $blog_res) {
							  $url = wp_get_attachment_url( get_post_thumbnail_id($blog_res->ID), 'full' ); 
							 
						  ?>
													 
                                 
                                 <div class="swiper-slide">
                                    <div class="project_post style_one mr_top_20">
                                       <div class="image">
                                          <img src="<?php echo $url;?>" class="img-fluid"
                                             alt="img" />
                                       </div>
                                       <div class="project_caro_content">
                                          <div class="left_side">
                                             <p><?php echo date('d F Y',strtotime($blog_res->post_date));?></p>
                                             <h2 class="title_pro"><a href="<?php echo get_permalink($blog_res->ID);?>"><?php echo $blog_res->post_title;?></a></h2>
                                          </div>
                                          <div class="right_side">
                                             <a href="<?php echo get_permalink($blog_res->ID);?>"><i class="icon-right-arrow"></i></a>
                                             <a href="<?php echo get_permalink($blog_res->ID);?>" class="two"><i
                                                   class="icon-right-arrow"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                    
                                 <?php
						  }
						  ?>
                                 
                                 
                                 <!----swiper warapper end---->
                              </div>
                              <!----swiper-pagination start---->
                              <div class="p_pagination">
                                 <div class="swiper-pagination">
                                 </div>
                              </div>
                              <!----swiper-pagination end---->
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
               <!--===============spacing==============-->
<!--               <div class="pd_bottom_90"></div>-->
               <!--===============spacing==============-->
            </section>
            <!---project-end--->
            
             <!----blo----->
            <section class="blog-section">
               <!--===============spacing==============-->
                  <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                   <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title_all_box style_one  dark_color">
                           <div class="title_sections">
                              <?php
					$career_content = get_post(104); 
					echo $career_content->post_content;
					?>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="description_box d-flex justify-content-end">
                           <a href="<?php echo site_url();?>/careers/"  rel="" class="theme-btn one"> View All </a>
                           <!--===============spacing==============-->
                           <div class="mr_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                     <!--===============spacing==============-->
                  </div>
                  <div class="row gutter_35px">
                     
                     <div class="col-lg-12">
                     <div class="blog_post_section  three_column news_wrapper_grid style_five">
                        <div class="grid_show_case grid_layout clearfix">
                           
                           <?php
					$careers_args = array(
					  'numberposts' => 3,
					  'post_type'   => 'careers',				  
					  );
					  $careers = get_posts($careers_args);
					  foreach ($careers as $careers_res) {
						  ?>
                           
                           
                           <div class="grid_box _card">
                              <a href="<?php echo get_permalink($careers_res->ID);?>" rel="bookmark">
                                  <div class="news_box style_five">
                                 <div class="content_box">
                                    <ul >
                                       
                                       <li>
                                          <span class="fa fa-clock-o"></span><?php echo date('d F Y',strtotime($careers_res->post_date));?>
                                       </li>
                                    </ul>
                                    <h2 class="title trun1">
                                          <?php echo $careers_res->post_title;?></h2>
                                    <div  class="short_desc trunx"><?php echo $careers_res->post_content;?></div>
                                    <a href="<?php echo get_permalink($careers_res->ID);?>" class="link__go">Read more<i
                                          class="icon-right-arrow-long"></i></a>
                                 </div>
                              </div>
                               </a>
                           </div>
                        <?php
					  }
					  ?>                         
                           
                           
                           
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               <!--===============spacing==============-->
                  <div class="pd_bottom_60"></div>
               <!--===============spacing==============-->
            </section>
            <!----blo-end---->
           
            <!---newsteller--->
            <?php echo newletter();?>
            <!---newsteller end--->
         </div>
    
    
<?php
get_footer();
?>