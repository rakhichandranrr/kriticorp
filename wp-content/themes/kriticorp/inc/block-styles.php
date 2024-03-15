<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage kriticorp
 * @since kriticorp 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since kriticorp 1.0
	 *
	 * @return void
	 */
	function kriticorp_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kriticorp-columns-overlap',
				'label' => esc_html__( 'Overlap', 'kriticorp' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'kriticorp-border',
				'label' => esc_html__( 'Borders', 'kriticorp' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'kriticorp-border',
				'label' => esc_html__( 'Borders', 'kriticorp' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kriticorp-border',
				'label' => esc_html__( 'Borders', 'kriticorp' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kriticorp-image-frame',
				'label' => esc_html__( 'Frame', 'kriticorp' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kriticorp-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'kriticorp' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kriticorp-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'kriticorp' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'kriticorp-border',
				'label' => esc_html__( 'Borders', 'kriticorp' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'kriticorp-separator-thick',
				'label' => esc_html__( 'Thick', 'kriticorp' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'kriticorp-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'kriticorp' ),
			)
		);
	}
	add_action( 'init', 'kriticorp_register_block_styles' );
}
