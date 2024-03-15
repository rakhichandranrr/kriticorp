<?php

/**

 * The header.

 *

 * This is the template that displays all of the <head> section and everything up until main.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */



?>

<!doctype html>

<html <?php language_attributes(); ?> <?php kriticorp_the_html_classes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<?php wp_body_open(); ?>



<div id="page" class="page_wapper hfeed site">

<!---============== wrapper_full =================-->

      <div id="wrapper_full" class="content_all_warpper">

      

       <!----preloader----->

       <!--  <div class="preloader-wrap">

            <div class="preloader" style="background-image:url(assets/images/preloader.gif)">

            </div>

            <div class="overlay"></div>

         </div>-->

         <!----preloader----->

<?php get_template_part( 'template-parts/header/site-header' ); ?>

<?php if(!is_front_page())
{
	
	if ( is_404() ) {
		
		$title = 'Nothing Here';
	}
	elseif ( is_search() ) {
		
		$title = "Search Results";
	}
	else
	{
		$title = get_the_title();
	}
	

?>



<div class="page_header_default style_one ">

  <div class="parallax_cover"> <img src="<?php echo page_banner();?>"  alt="bg_image" class="cover-parallax"> </div>

  <div class="page_header_content">

    <div class="auto-container">

      <div class="row">

        <div class="col-md-12">

          <div class="banner_title_inner">

            <div class="title_page"><?php echo $title;?> </div>

          </div>

        </div>

        <div class="col-lg-12">

          <div class="breadcrumbs creote">

            <ul class="breadcrumb m-auto">

              <li><a href="<?php echo site_url(); ?>">Home</a> </li>

              <li class="active"><?php echo $title;?></li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<?php

}

?>