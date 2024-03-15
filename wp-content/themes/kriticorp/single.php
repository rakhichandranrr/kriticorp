<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage kriticorp
 * @since kriticorp 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'kriticorp' ), '%title' ),
			)
		);
	}
	
	

	// Previous/next post navigation.
	$kriticorp_next = is_rtl() ? kriticorp_get_icon_svg( 'ui', 'arrow_left' ) : kriticorp_get_icon_svg( 'ui', 'arrow_right' );
	$kriticorp_prev = is_rtl() ? kriticorp_get_icon_svg( 'ui', 'arrow_right' ) : kriticorp_get_icon_svg( 'ui', 'arrow_left' );

	$kriticorp_next_label     = esc_html__( 'Next post', 'kriticorp' );
	$kriticorp_previous_label = esc_html__( 'Previous post', 'kriticorp' );

	/*the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $kriticorp_next_label . $kriticorp_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $kriticorp_prev . $kriticorp_previous_label . '</p><p class="post-title">%title</p>',
		)
	);*/
endwhile; // End of the loop.

get_footer();
?>
<script>
    $(document).ready(function() {
    $("#myModal").modal();
	
	$('#apply_now').click(function(e) {
        $('#job').val('<?php echo get_the_title();?>');
    });
  });
  
</script>
