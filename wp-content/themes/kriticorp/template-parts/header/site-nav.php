<?php

/**

 * Displays the site navigation.

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */

$page_id = get_the_ID();

?>



<div class="col-lg-9 col-md-3 col-sm-3 col-xs-3 menu_column">

  <div class="navbar_togglers hamburger_menu"> <span class="line"></span> <span class="line"></span> <span class="line"></span> </div>

  <div class="header_content_collapse">

    <div class="header_menu_box">

      <div class="navigation_menu">

        <ul id="myNavbar" class="navbar_nav">

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>" class="dropdown-toggle nav-link <?php if($page_id=='8'){?> active<?php }?>"> <span>Home</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/about-us/" class="dropdown-toggle nav-link <?php if($page_id=='24'){?> active<?php }?>"> <span>About Us</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/services/" class="dropdown-toggle nav-link <?php if($page_id=='40'){?> active<?php }?>"> <span>Services</span> </a> </li>

          <li

                                       class="menu-item menu-item-has-children dropdown nav-item"> <a href="#" class="dropdown-toggle nav-link <?php if($page_id=='85' || $page_id=='94' || $page_id=='136' || $page_id=='149'){?> active<?php }?>"> <span>Resources</span> </a>

            <ul class="dropdown-menu">

              <li class="menu-item nav-item"> <a href="<?php echo site_url();?>/blog/" class="dropdown-item nav-link <?php if($page_id=='85'){?> active<?php }?>"> <span>Blog</span> </a> </li>

              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/news-events/" class="dropdown-item nav-link <?php if($page_id=='94'){?> active<?php }?>"> <span>News & Events</span> </a> </li>
              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/testimonials/" class="dropdown-item nav-link <?php if($page_id=='136'){?> active<?php }?>"> <span>Testimonials</span> </a> </li>
              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/our-team/" class="dropdown-item nav-link <?php if($page_id=='149'){?> active<?php }?>"> <span>Our Team</span> </a> </li>

            </ul>

          </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/careers/" class="dropdown-toggle nav-link <?php if($page_id=='104'){?> active<?php }?>"> <span>Careers</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/contact-us/" class="dropdown-toggle nav-link <?php if($page_id=='88'){?> active<?php }?>"> <span>Contact Us</span> </a> </li>

        </ul>

      </div>

    </div>

    <div class="header_right_content">

      <ul>

        <li class="header-button"> <a href="<?php echo site_url();?>/contact-us/" rel="" class="theme-btn one <?php if($page_id=='88'){?> active<?php }?>"> Get In Touch </a> </li>

      </ul>

    </div>

  </div>

</div>

<div class="crt_mobile_menu">
         <div class="menu-backdrop"></div>
         <nav class="menu-box">
            <div class="close-btn"><i class="icon-close"></i></div>
            <form role="search" method="get" action="#">
               <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search">
               <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
            </form>
            <div class="menu-outer">
               <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            
                                 <ul id="myNavbar" class="navbar_nav">

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>" class="dropdown-toggle nav-link <?php if($page_id=='8'){?> active<?php }?>"> <span>Home</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/about-us/" class="dropdown-toggle nav-link <?php if($page_id=='24'){?> active<?php }?>"> <span>About Us</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/services/" class="dropdown-toggle nav-link <?php if($page_id=='40'){?> active<?php }?>"> <span>Services</span> </a> </li>

          <li

                                       class="menu-item menu-item-has-children dropdown nav-item"> <a href="#" class="dropdown-toggle nav-link <?php if($page_id=='85' || $page_id=='94' || $page_id=='136' || $page_id=='149'){?> active<?php }?>"> <span>Resources</span> </a>

            <ul class="dropdown-menu">

              <li class="menu-item nav-item"> <a href="<?php echo site_url();?>/blog/" class="dropdown-item nav-link <?php if($page_id=='85'){?> active<?php }?>"> <span>Blog</span> </a> </li>

              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/news-events/" class="dropdown-item nav-link <?php if($page_id=='94'){?> active<?php }?>"> <span>News & Events</span> </a> </li>
              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/testimonials/" class="dropdown-item nav-link <?php if($page_id=='136'){?> active<?php }?>"> <span>Testimonials</span> </a> </li>
              <li class="menu-item  nav-item"> <a href="<?php echo site_url();?>/our-team/" class="dropdown-item nav-link <?php if($page_id=='149'){?> active<?php }?>"> <span>Our Team</span> </a> </li>

            </ul>

          </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/careers/" class="dropdown-toggle nav-link <?php if($page_id=='104'){?> active<?php }?>"> <span>Careers</span> </a> </li>

          <li

                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item"> <a href="<?php echo site_url();?>/contact-us/" class="dropdown-toggle nav-link <?php if($page_id=='88'){?> active<?php }?>"> <span>Contact Us</span> </a> </li>

        </ul>
                              </div>
         </nav>
      </div>
