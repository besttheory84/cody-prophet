<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
    
register_sidebar( array (
'name' => __( 'Footer Widgets', 'blankslate' ),
'id' => 'footer-widget-area',
'before_widget' => '<div class="footer-widget"><div class="widget-top"></div><div class="widget-body"><li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li></div><div class="widget-bottom"></div></div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}



function create_posttype() {

	register_post_type( 'testimonials',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'cody-prophet' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'cody-prophet' ),
		'menu_name'           => __( 'Testimonials', 'cody-prophet' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'cody-prophet' ),
		'all_items'           => __( 'All Testimonials', 'cody-prophet' ),
		'view_item'           => __( 'View Testimonial', 'cody-prophet' ),
		'add_new_item'        => __( 'Add New Testimonial', 'cody-prophet' ),
		'add_new'             => __( 'Add New', 'cody-prophet' ),
		'edit_item'           => __( 'Edit Testimonial', 'cody-prophet' ),
		'update_item'         => __( 'Update Testimonial', 'cody-prophet' ),
		'search_items'        => __( 'Search Testimonial', 'cody-prophet' ),
		'not_found'           => __( 'Not Found', 'cody-prophet' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cody-prophet' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'testimonials', 'cody-prophet' ),
		'description'         => __( 'Testimonials', 'cody-prophet' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );

}

add_action( 'init', 'custom_post_type', 0 );

function create_posttype2() {

	register_post_type( 'connect',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Social Connect' ),
				'singular_name' => __( 'Social Connect' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'connect'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype2' );

/*
* Creating a function to create our CPT
*/

function custom_post_type2() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Social Connect', 'Post Type General Name', 'cody-prophet' ),
		'singular_name'       => _x( 'Social Connect', 'Post Type Singular Name', 'cody-prophet' ),
		'menu_name'           => __( 'Social Connects', 'cody-prophet' ),
		'parent_item_colon'   => __( 'Parent Social Connect', 'cody-prophet' ),
		'all_items'           => __( 'All Social Connects', 'cody-prophet' ),
		'view_item'           => __( 'View Social Connect', 'cody-prophet' ),
		'add_new_item'        => __( 'Add New Social Connect', 'cody-prophet' ),
		'add_new'             => __( 'Add New', 'cody-prophet' ),
		'edit_item'           => __( 'Edit Social Connect', 'cody-prophet' ),
		'update_item'         => __( 'Update Social Connect', 'cody-prophet' ),
		'search_items'        => __( 'Search Social Connect', 'cody-prophet' ),
		'not_found'           => __( 'Not Found', 'cody-prophet' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cody-prophet' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'connect', 'cody-prophet' ),
		'description'         => __( 'connects', 'cody-prophet' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'connect', $args );

}

add_action( 'init', 'custom_post_type2', 0 );

function create_posttype3() {

	register_post_type( 'shows',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Shows' ),
				'singular_name' => __( 'Show' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'shows'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype3' );

/*
* Creating a function to create our CPT
*/

function custom_post_type3() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Shows', 'Post Type General Name', 'cody-prophet' ),
		'singular_name'       => _x( 'Show', 'Post Type Singular Name', 'cody-prophet' ),
		'menu_name'           => __( 'Shows', 'cody-prophet' ),
		'parent_item_colon'   => __( 'Parent Show', 'cody-prophet' ),
		'all_items'           => __( 'All Shows', 'cody-prophet' ),
		'view_item'           => __( 'View Show', 'cody-prophet' ),
		'add_new_item'        => __( 'Add New Show', 'cody-prophet' ),
		'add_new'             => __( 'Add New', 'cody-prophet' ),
		'edit_item'           => __( 'Edit Show', 'cody-prophet' ),
		'update_item'         => __( 'Update Show', 'cody-prophet' ),
		'search_items'        => __( 'Search Show', 'cody-prophet' ),
		'not_found'           => __( 'Not Found', 'cody-prophet' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cody-prophet' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'shows', 'cody-prophet' ),
		'description'         => __( 'shows', 'cody-prophet' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'shows', $args );

}

add_action( 'init', 'custom_post_type3', 0 );

function testimonials() {
    $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
    <div class="testimonial-area">
       <i class="fa fa-chevron-circle-left prev"></i>
       <i class="fa fa-chevron-circle-right next"></i>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="testimonial">
            <div class="text">"<?php echo get_the_content(); ?>"</div>
            <div class="title"><?php echo get_the_title(); ?></div>
        </div>
        <?php endwhile; wp_reset_query(); ?> 
    </div>     
<?php }
add_shortcode('testimonials', 'testimonials');

function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}