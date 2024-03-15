<?php

/**

 * Functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package WordPress

 * @subpackage kriticorp

 * @since kriticorp 1.0

 */



// This theme requires WordPress 5.3 or later.

if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {

	require get_template_directory() . '/inc/back-compat.php';

}



if ( ! function_exists( 'kriticorp_setup' ) ) {

	/**

	 * Sets up theme defaults and registers support for various WordPress features.

	 *

	 * Note that this function is hooked into the after_setup_theme hook, which

	 * runs before the init hook. The init hook is too late for some features, such

	 * as indicating support for post thumbnails.

	 *

	 * @since kriticorp 1.0

	 *

	 * @return void

	 */

	function kriticorp_setup() {



		// Add default posts and comments RSS feed links to head.

		add_theme_support( 'automatic-feed-links' );



		/*

		 * Let WordPress manage the document title.

		 * This theme does not use a hard-coded <title> tag in the document head,

		 * WordPress will provide it for us.

		 */

		add_theme_support( 'title-tag' );



		/**

		 * Add post-formats support.

		 */

		add_theme_support(

			'post-formats',

			array(

				'link',

				'aside',

				'gallery',

				'image',

				'quote',

				'status',

				'video',

				'audio',

				'chat',

			)

		);



		/*

		 * Enable support for Post Thumbnails on posts and pages.

		 *

		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		 */

		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 1568, 9999 );



		register_nav_menus(

			array(

				'primary' => esc_html__( 'Primary menu', 'kriticorp' ),

				'footer'  => esc_html__( 'Secondary menu', 'kriticorp' ),

			)

		);



		/*

		 * Switch default core markup for search form, comment form, and comments

		 * to output valid HTML5.

		 */

		add_theme_support(

			'html5',

			array(

				'comment-form',

				'comment-list',

				'gallery',

				'caption',

				'style',

				'script',

				'navigation-widgets',

			)

		);



		/*

		 * Add support for core custom logo.

		 *

		 * @link https://codex.wordpress.org/Theme_Logo

		 */

		$logo_width  = 300;

		$logo_height = 100;



		add_theme_support(

			'custom-logo',

			array(

				'height'               => $logo_height,

				'width'                => $logo_width,

				'flex-width'           => true,

				'flex-height'          => true,

				'unlink-homepage-logo' => true,

			)

		);



		// Add theme support for selective refresh for widgets.

		add_theme_support( 'customize-selective-refresh-widgets' );



		// Add support for Block Styles.

		add_theme_support( 'wp-block-styles' );



		// Add support for full and wide align images.

		add_theme_support( 'align-wide' );



		// Add support for editor styles.

		add_theme_support( 'editor-styles' );

		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );

		if ( 127 > kriticorp_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {

			add_theme_support( 'dark-editor-style' );

		}



		$editor_stylesheet_path = './assets/css/style-editor.css';



		// Note, the is_IE global variable is defined by WordPress and is used

		// to detect if the current browser is internet explorer.

		global $is_IE;

		if ( $is_IE ) {

			$editor_stylesheet_path = './assets/css/ie-editor.css';

		}



		// Enqueue editor styles.

		add_editor_style( $editor_stylesheet_path );



		// Add custom editor font sizes.

		add_theme_support(

			'editor-font-sizes',

			array(

				array(

					'name'      => esc_html__( 'Extra small', 'kriticorp' ),

					'shortName' => esc_html_x( 'XS', 'Font size', 'kriticorp' ),

					'size'      => 16,

					'slug'      => 'extra-small',

				),

				array(

					'name'      => esc_html__( 'Small', 'kriticorp' ),

					'shortName' => esc_html_x( 'S', 'Font size', 'kriticorp' ),

					'size'      => 18,

					'slug'      => 'small',

				),

				array(

					'name'      => esc_html__( 'Normal', 'kriticorp' ),

					'shortName' => esc_html_x( 'M', 'Font size', 'kriticorp' ),

					'size'      => 20,

					'slug'      => 'normal',

				),

				array(

					'name'      => esc_html__( 'Large', 'kriticorp' ),

					'shortName' => esc_html_x( 'L', 'Font size', 'kriticorp' ),

					'size'      => 24,

					'slug'      => 'large',

				),

				array(

					'name'      => esc_html__( 'Extra large', 'kriticorp' ),

					'shortName' => esc_html_x( 'XL', 'Font size', 'kriticorp' ),

					'size'      => 40,

					'slug'      => 'extra-large',

				),

				array(

					'name'      => esc_html__( 'Huge', 'kriticorp' ),

					'shortName' => esc_html_x( 'XXL', 'Font size', 'kriticorp' ),

					'size'      => 96,

					'slug'      => 'huge',

				),

				array(

					'name'      => esc_html__( 'Gigantic', 'kriticorp' ),

					'shortName' => esc_html_x( 'XXXL', 'Font size', 'kriticorp' ),

					'size'      => 144,

					'slug'      => 'gigantic',

				),

			)

		);



		// Custom background color.

		add_theme_support(

			'custom-background',

			array(

				'default-color' => 'd1e4dd',

			)

		);



		// Editor color palette.

		$black     = '#000000';

		$dark_gray = '#28303D';

		$gray      = '#39414D';

		$green     = '#D1E4DD';

		$blue      = '#D1DFE4';

		$purple    = '#D1D1E4';

		$red       = '#E4D1D1';

		$orange    = '#E4DAD1';

		$yellow    = '#EEEADD';

		$white     = '#FFFFFF';



		add_theme_support(

			'editor-color-palette',

			array(

				array(

					'name'  => esc_html__( 'Black', 'kriticorp' ),

					'slug'  => 'black',

					'color' => $black,

				),

				array(

					'name'  => esc_html__( 'Dark gray', 'kriticorp' ),

					'slug'  => 'dark-gray',

					'color' => $dark_gray,

				),

				array(

					'name'  => esc_html__( 'Gray', 'kriticorp' ),

					'slug'  => 'gray',

					'color' => $gray,

				),

				array(

					'name'  => esc_html__( 'Green', 'kriticorp' ),

					'slug'  => 'green',

					'color' => $green,

				),

				array(

					'name'  => esc_html__( 'Blue', 'kriticorp' ),

					'slug'  => 'blue',

					'color' => $blue,

				),

				array(

					'name'  => esc_html__( 'Purple', 'kriticorp' ),

					'slug'  => 'purple',

					'color' => $purple,

				),

				array(

					'name'  => esc_html__( 'Red', 'kriticorp' ),

					'slug'  => 'red',

					'color' => $red,

				),

				array(

					'name'  => esc_html__( 'Orange', 'kriticorp' ),

					'slug'  => 'orange',

					'color' => $orange,

				),

				array(

					'name'  => esc_html__( 'Yellow', 'kriticorp' ),

					'slug'  => 'yellow',

					'color' => $yellow,

				),

				array(

					'name'  => esc_html__( 'White', 'kriticorp' ),

					'slug'  => 'white',

					'color' => $white,

				),

			)

		);



		add_theme_support(

			'editor-gradient-presets',

			array(

				array(

					'name'     => esc_html__( 'Purple to yellow', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',

					'slug'     => 'purple-to-yellow',

				),

				array(

					'name'     => esc_html__( 'Yellow to purple', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',

					'slug'     => 'yellow-to-purple',

				),

				array(

					'name'     => esc_html__( 'Green to yellow', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',

					'slug'     => 'green-to-yellow',

				),

				array(

					'name'     => esc_html__( 'Yellow to green', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',

					'slug'     => 'yellow-to-green',

				),

				array(

					'name'     => esc_html__( 'Red to yellow', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',

					'slug'     => 'red-to-yellow',

				),

				array(

					'name'     => esc_html__( 'Yellow to red', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',

					'slug'     => 'yellow-to-red',

				),

				array(

					'name'     => esc_html__( 'Purple to red', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',

					'slug'     => 'purple-to-red',

				),

				array(

					'name'     => esc_html__( 'Red to purple', 'kriticorp' ),

					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',

					'slug'     => 'red-to-purple',

				),

			)

		);



		/*

		* Adds starter content to highlight the theme on fresh sites.

		* This is done conditionally to avoid loading the starter content on every

		* page load, as it is a one-off operation only needed once in the customizer.

		*/

		if ( is_customize_preview() ) {

			require get_template_directory() . '/inc/starter-content.php';

			add_theme_support( 'starter-content', kriticorp_get_starter_content() );

		}



		// Add support for responsive embedded content.

		add_theme_support( 'responsive-embeds' );



		// Add support for custom line height controls.

		add_theme_support( 'custom-line-height' );



		// Add support for link color control.

		add_theme_support( 'link-color' );



		// Add support for experimental cover block spacing.

		add_theme_support( 'custom-spacing' );



		// Add support for custom units.

		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.

		add_theme_support( 'custom-units' );



		// Remove feed icon link from legacy RSS widget.

		add_filter( 'rss_widget_feed_link', '__return_empty_string' );

	}

}

add_action( 'after_setup_theme', 'kriticorp_setup' );



/**

 * Registers widget area.

 *

 * @since kriticorp 1.0

 *

 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

 *

 * @return void

 */

function kriticorp_widgets_init() {



	register_sidebar(

		array(

			'name'          => esc_html__( 'Footer Content', 'kriticorp' ),

			'id'            => 'sidebar-1',

			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kriticorp' ),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget'  => '</section>',

			'before_title'  => '<h2 class="widget-title">',

			'after_title'   => '</h2>',

		)

	);

}

add_action( 'widgets_init', 'kriticorp_widgets_init' );



/**

 * Sets the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @since kriticorp 1.0

 *

 * @global int $content_width Content width.

 *

 * @return void

 */

function kriticorp_content_width() {

	// This variable is intended to be overruled from themes.

	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

	$GLOBALS['content_width'] = apply_filters( 'kriticorp_content_width', 750 );

}

add_action( 'after_setup_theme', 'kriticorp_content_width', 0 );



/**

 * Enqueues scripts and styles.

 *

 * @since kriticorp 1.0

 *

 * @global bool       $is_IE

 * @global WP_Scripts $wp_scripts

 *

 * @return void

 */



/**

 * Enqueues block editor script.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_block_editor_script() {



	wp_enqueue_script( 'kriticorp-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );

}



add_action( 'enqueue_block_editor_assets', 'kriticorp_block_editor_script' );







/**

 * Enqueues non-latin language styles.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_non_latin_languages() {

	$custom_css = kriticorp_get_non_latin_css( 'front-end' );



	if ( $custom_css ) {

		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );

	}

}

add_action( 'wp_enqueue_scripts', 'kriticorp_non_latin_languages' );



// SVG Icons class.

require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';



// Custom color classes.

require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';

new kriticorp_Custom_Colors();



// Enhance the theme by hooking into WordPress.

require get_template_directory() . '/inc/template-functions.php';



// Menu functions and filters.

require get_template_directory() . '/inc/menu-functions.php';



// Custom template tags for the theme.

require get_template_directory() . '/inc/template-tags.php';



// Customizer additions.

require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';

new kriticorp_Customize();



// Block Patterns.

require get_template_directory() . '/inc/block-patterns.php';



// Block Styles.

require get_template_directory() . '/inc/block-styles.php';



// Dark Mode.

require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';

new kriticorp_Dark_Mode();



/**

 * Enqueues scripts for the customizer preview.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_customize_preview_init() {

	wp_enqueue_script(

		'kriticorp-customize-helpers',

		get_theme_file_uri( '/assets/js/customize-helpers.js' ),

		array(),

		wp_get_theme()->get( 'Version' ),

		true

	);



	wp_enqueue_script(

		'kriticorp-customize-preview',

		get_theme_file_uri( '/assets/js/customize-preview.js' ),

		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'kriticorp-customize-helpers' ),

		wp_get_theme()->get( 'Version' ),

		true

	);

}

add_action( 'customize_preview_init', 'kriticorp_customize_preview_init' );



/**

 * Enqueues scripts for the customizer.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_customize_controls_enqueue_scripts() {



	wp_enqueue_script(

		'kriticorp-customize-helpers',

		get_theme_file_uri( '/assets/js/customize-helpers.js' ),

		array(),

		wp_get_theme()->get( 'Version' ),

		true

	);

}

add_action( 'customize_controls_enqueue_scripts', 'kriticorp_customize_controls_enqueue_scripts' );



/**

 * Calculates classes for the main <html> element.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_the_html_classes() {

	/**

	 * Filters the classes for the main <html> element.

	 *

	 * @since kriticorp 1.0

	 *

	 * @param string The list of classes. Default empty string.

	 */

	$classes = apply_filters( 'kriticorp_html_classes', '' );

	if ( ! $classes ) {

		return;

	}

	echo 'class="' . esc_attr( $classes ) . '"';

}



/**

 * Adds "is-IE" class to body if the user is on Internet Explorer.

 *

 * @since kriticorp 1.0

 *

 * @return void

 */

function kriticorp_add_ie_class() {

	?>

	<script>

	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {

		document.body.classList.add( 'is-IE' );

	}

	</script>

	<?php

}

add_action( 'wp_footer', 'kriticorp_add_ie_class' );



if ( ! function_exists( 'wp_get_list_item_separator' ) ) :

	/**

	 * Retrieves the list item separator based on the locale.

	 *

	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.

	 *

	 * @since 6.0.0

	 */

	function wp_get_list_item_separator() {

		/* translators: Used between list items, there is a space after the comma. */

		return __( ', ', 'kriticorp' );

	}

endif;



/*INCLUDE THEME CSS AND JS STARTS*/



function kriticorp_enqueue_styles_js() {

	

	//CSS

	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );

	wp_enqueue_style( 'google-font','https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' );	

	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/swiper.min.css' );

	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );

	wp_enqueue_style( 'icomoon-css', get_template_directory_uri() . '/assets/css/icomoon.css' );

	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.css' );

	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );	

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style.css?v='.time(),'','' );

	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/scss/elements/theme-css.css' );

	wp_enqueue_style( 'color-css', get_template_directory_uri() . '/assets/css/scss/elements/color-switcher/color.css' );

	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css' );

	//JS	
	wp_enqueue_script( 'jquery-front', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js',array('jquery'), '', true);

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true);

	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', '', '', true);	

	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', '', '', true);

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', '', '', true);

	wp_enqueue_script( 'creote-extension', get_template_directory_uri() . '/assets/js/creote-extension.js', '', '', true);

}


add_action( 'wp_enqueue_scripts', 'kriticorp_enqueue_styles_js' );


/*INCLUDE THEME CSS AND JS ENDS*/


function page_banner()

{
	global $wp_query;

	$post_id = $wp_query->post->ID;

	$page_banner = get_field('banner_image', $post_id);

	if (!empty($page_banner)) {

		$page_banner_url = $page_banner['url'];

	} else {

		$page_banner_url = get_template_directory_uri() . '/assets/images/page-header-default.jpg';

	}

	return $page_banner_url;

}



function newletter()

{

	$html = '<section class="newsteller style_one bg_dark_1">

               <!--===============spacing==============-->

               <div class="pd_top_40"></div>

               <!--===============spacing==============-->

               <div class="auto-container">

                  <div class="row align-items-center">'.do_shortcode('[newsletter_form form="1"]').'                  </div>

               </div>

               <div class="pd_bottom_40"></div>

            </section>';

			echo $html;

}



/*BANNER ENDS*/

/*FOOTER WIDGETS STARTS*/

function footer_logo()

{
	register_sidebar(array(

		'name' => __('Footer Logo', 'Footer Logo'),

		'id' => 'footer_logo',

		'description' => __('Insert something', 'footer_logo'),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

	));
}

add_action('widgets_init', 'footer_logo');

function footer_social_media()

{
	register_sidebar(array(

		'name' => __('Footer Social Media', 'Footer Social Media'),

		'id' => 'footer_social_media',

		'description' => __('Insert something', 'footer_social_media'),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

	));
}

add_action('widgets_init', 'footer_social_media');

function footer_get_in_touch()

{
	register_sidebar(array(

		'name' => __('Footer Get In Touch', 'Footer Get In Touch'),

		'id' => 'footer_get_in_touch',

		'description' => __('Insert something', 'footer_get_in_touch'),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

	));
}

add_action('widgets_init', 'footer_get_in_touch');


function header_phone_email()

{
	register_sidebar(array(

		'name' => __('Top Header Content', 'Top Header Content'),

		'id' => 'header_phone_email',

		'description' => __('Insert something', 'header_phone_email'),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

	));
}

add_action('widgets_init', 'header_phone_email');