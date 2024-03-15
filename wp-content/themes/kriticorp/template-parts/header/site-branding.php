<?php

/**

 * Displays header site branding

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */



$blog_info    = get_bloginfo( 'name' );

$description  = get_bloginfo( 'description', 'display' );

$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );

$header_class = $show_title ? 'site-title' : 'screen-reader-text';



?>



<div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 logo_column">

  <div class="header_logo_box"> <a href="<?php echo site_url();?>" class="logo navbar-brand"> <img src="<?php echo get_template_directory_uri();?>/assets/images/Kriticorp_logo.png" alt="Creote Elementor" class="logo_default"> <img src="<?php echo get_template_directory_uri();?>/assets/images/Kriticorp_logo.png" alt="Creote Elementor" class="logo__sticky"> </a> </div>

</div>

