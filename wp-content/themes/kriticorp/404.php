<?php

/**

 * The template for displaying 404 pages (not found)

 *

 * @link https://codex.wordpress.org/Creating_an_Error_404_Page

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */



get_header();

?>

<div id="content" class="site-content "> 
  
  <!---about--->
  
  <section class="about-section"> 
    
    <!--===============spacing==============-->
    
    <div class="pd_top_90"></div>
    
    <!--===============spacing==============-->
    
    <div class="container">
      <div class="row">
        <p>
          <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'kriticorp' ); ?>
        </p>
        <?php get_search_form(); ?>
      </div>
    </div>
    
    <!--===============spacing==============-->
    
    <div class="pd_bottom_70"></div>
    
    <!--===============spacing==============--> 
    
  </section>
</div>
<?php

get_footer();


