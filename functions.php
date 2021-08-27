<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '<div class="sidebaritem">',
'after_widget' => '</div><div class="divider"></div>',
'before_title' => '<h3 class="replace">',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'HomeSidebar',
'before_widget' => '<div class="sidebaritem">',
'after_widget' => '</div><div class="divider"></div>',
'before_title' => '<h3 class="replace">',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer',
'before_widget' => ' <div class="col-md-2 col-xl-2 col-12 pb-md-0 pb-5 text-md-left text-center">
<div class="pr-xl-4">',
'after_widget' => '</div></div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 150, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size


/*if ( !is_admin() ) {
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js', false);
   wp_enqueue_script('jquery');
}*/

if ( !is_admin() ) {
	wp_deregister_script('jquery');
	wp_register_script('jquery',get_template_directory_uri() .'/js/jquery.min.js', false);
	wp_enqueue_script('jquery');
 }

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
//	wp_enqueue_script('jquery');

    wp_enqueue_script( 'migrate-js', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );

wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array(), '1.0.0', true );
wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0',
true );
wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


// custom 'read more' link
function excerpt_ellipse($text) {
return str_replace(' [...]', ' &nbsp;<a href="'.get_permalink().'">Read more</a>', $text);
}
add_filter('the_excerpt', 'excerpt_ellipse');

// WP3 menu
if (function_exists('nav-menus')) {
add_theme_support('nav-menus');
}
register_nav_menus(array('primary'=>_('Primary Menu'),
'secondary'=>_('Secondary Menu'),));
?>
<?php

$themename = "LightofPeace";
$shortname = "lp";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 
$posts = get_posts(array('post_type'=> 'post', 'post_status'=> 'publish',
 'suppress_filters' => false, 'posts_per_page'=>-1));
 $wp_posts = array();
 foreach ($posts as $post_list ) {
		$wp_posts[$post_list->ID] = $post_list->post_title;
 }
 array_unshift($wp_posts, "Choose a post");
 
$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
// General Options
array( "name" => "General",
	"type" => "section"),
array( "type" => "open"),
 
array( "name" => "Colour Scheme",
	"desc" => "Select theme colour scheme. Leave it blank for default scheme.",
	"id" => $shortname."_color_scheme",
	"type" => "select",
	"options" => array("", "red", "orange", "blue"),
	"std" => ""),
array( "name" => "Custom logo image",
	"desc" => "Enter the URL of your custom logo. e.g. 'http://yourwebsite.com/logo.png' Maximum height 40px ",
	"id" => $shortname."_logo",
	"type" => "text",
	"std" => ""),

array( "type" => "close"),
// Homepage Options	
array( "name" => "Homepage",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Slide 1 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_1",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 1 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_1",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 1 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_1",
	"type" => "text",
	"std" => "LOVE THE LORD YOUR GOD"),	
	array( "name" => "Slide 1 - Caption 2",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_12",
	"type" => "text",
	"std" => "We Come To Serving & Beliving God’s Word and Spirit"),
array( "name" => "Slide 2 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_2",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 2 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_2",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 2 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_2",
	"type" => "text",
	"std" => ""),	
	array( "name" => "Slide 2 - Caption 2",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_22",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 3 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_3",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 3 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_3",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 3 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_3",
	"type" => "text",
	"std" => ""),
		array( "name" => "Slide 3 - Caption 2",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_32",
	"type" => "text",
	"std" => ""),	
array( "name" => "Slide 4 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_4",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 4 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_4",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 4 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_4",
	"type" => "text",
	"std" => ""),


array( "name" => "Show Latest Posts",
	"desc" => "Check to show the latest posts. It will replace the tabs",
	"id" => $shortname."_latest_posts",
	"type" => "checkbox",
	"std" => ""),
array( "name" => "Number of posts",
	"desc" => "Number of posts will be shown if the Tab is unchecked",
	"id" => $shortname."_post_num",
	"type" => "text",
	"std" => ""),
array( "name" => "Tab #1 category",
	"desc" => "Posts from this category will be shown on the Tab 1",
	"id" => $shortname."_tab_cat_1",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),
array( "name" => "Tab #2 category",
	"desc" => "Posts from this category will be shown on the Tab 2",
	"id" => $shortname."_tab_cat_2",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),
array( "name" => "Tab #3 category",
	"desc" => "Posts from this category will be shown on the Tab 3",
	"id" => $shortname."_tab_cat_3",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),

	array( "name" => "Event Date",
	"desc" => "Enter the Event Date.",
	"id" => $shortname."_event_date",
	"type" => "text",
	"std" => "29th<br><span>June 2021"),
	array( "name" => "Event Day",
	"desc" => "Enter the Event Day and Time.",
	"id" => $shortname."_event_day_time",
	"type" => "text",
	"std" => "Monday, 11:00 Am - Tuesday, 5:00 Pm"),
	array( "name" => "Event One Liner",
	"desc" => "Enter One liner for Event.",
	"id" => $shortname."_event_one_liner",
	"type" => "text",
	"std" => "Sharing Our Faith & Love To Children"),
	array( "name" => "Event Description",
	"desc" => "Enter Event Description",
	"id" => $shortname."_event_description",
	"type" => "text",
	"std" => "God comes to us in free and undeserved favor in the person of Jesus Christ who lived,
	died, and rose for us that we might belong to God and serve Christ in the world"),
	array( "name" => "Top Post",
	"desc" => "Posts will be shown on top of the home page",
	"id" => $shortname."_tab_post",
	"type" => "select",
	"options" => $wp_posts,
	"std" => "Choose a post"),
	array( "name" => "Event Link",
	"desc" => "Enter Event Link",
	"id" => $shortname."_event_link",
	"type" => "text",
	"std" => ""),
	array( "name" => "Bible Note 1",
	"desc" => "Enter Bible Note",
	"id" => $shortname."_bible_note_1",
	"type" => "text",
	"std" => "Then, taking the five loaves and the two fish and looking up to heaven, he
	said the blessing, broke the…"),
	array( "name" => "Bible Note 2",
	"desc" => "Enter Bible Note",
	"id" => $shortname."_bible_note_2",
	"type" => "text",
	"std" => ""),
	array( "name" => "Bible Note 3",
	"desc" => "Enter Bible Note",
	"id" => $shortname."_bible_note_3",
	"type" => "text",
	"std" => ""),
	array( "name" => "Footer Note ",
	"desc" => "Enter Footer Note",
	"id" => $shortname."_footer_note",
	"type" => "text",
	"std" => "New Rhode Island School of the Bible School Starting Spring 2021!"),
	array( "name" => "Footer Note Link",
	"desc" => "Enter Footer Note Link",
	"id" => $shortname."_footer_note_link",
	"type" => "text",
	"std" => "https://risbible.org/"),
array( "type" => "close"),

// Sidebar Options	
array( "name" => "Sidebar",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "Headline Box - Title text",
	"desc" => "Enter title text to be displayed in the Headline Box.",
	"id" => $shortname."_hlbox_title",
	"type" => "text",
	"std" => ""),

array( "name" => "Headline Box - Body Text",
	"desc" => "Enter body text to be displayed in the Headline Box. It can be HTML",
	"id" => $shortname."_hlbox_text",
	"type" => "textarea",
	"std" => ""),
array( "type" => "close"),


// Footer Options	
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),
array( "name" => "Footer logo image",
	"desc" => "Enter the URL of your custom logo. e.g. 'http://yourwebsite.com/logo.png'. Maximum width: 300px. ",
	"id" => $shortname."_logo_footer",
	"type" => "text",
	"std" => ""),	
array( "name" => "Footer text",
	"desc" => "Enter text used in the right side of the footer. It can be HTML",
	"id" => $shortname."_footer_text",
	"type" => "textarea",
	"std" => ""),	
	array( "name" => "CopyRights text",
	"desc" => "Enter CopyRights.",
	"id" => $shortname."_footer_copyrights",
	"type" => "text",
	"std" => ""),	
	array( "name" => "Facebook Link",
	"desc" => "Enter Facebook Link.",
	"id" => $shortname."_facebook_link",
	"type" => "text",
	"std" => ""),
	array( "name" => "Twitter Link",
	"desc" => "Enter Twitter Link.",
	"id" => $shortname."_twitter_link",
	"type" => "text",
	"std" => ""),
array( "name" => "Google Analytics Code",
	"desc" => "Enter Google Analytics or other tracking code here",
	"id" => $shortname."_tracking_code",
	"type" => "textarea",
	"std" => ""),	
array( "type" => "close")
 
);





function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=functions.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=functions.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");

}


function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap pt_wrap">
    <h2><?php echo $themename; ?> Settings</h2>

    <div class="pt_opts">
        <form method="post">
            <?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>

            <?php break;
 
case "close":
?>

    </div>
</div>
<br />


<?php break;
 
case "title":
?>


<?php break;
 
case 'text':
?>

<div class="pt_input pt_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>"
        value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>

</div>
<?php
break;
 
case 'textarea':
?>

<div class="pt_input pt_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols=""
        rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>

</div>

<?php
break;
 
case 'select':
?>

<div class="pt_input pt_select">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
        <?php foreach ($value['options'] as $option) { ?>
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>>
            <?php echo $option; ?></option><?php } ?>
    </select>

    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="pt_input pt_checkbox">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

    <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true"
        <?php echo $checked; ?> />


    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
</div>
<?php break; 
case "section":

$i++;

?>

<div class="pt_section">
    <div class="pt_title">
        <h3><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit"
                value="Save changes" />
        </span>
        <div class="clearfix"></div>
    </div>
    <div class="pt_options">


        <?php break;
 
}
}
?>


        <p>Need help? Post your questions <a
                href="http://themeforest.net/item/light-of-peace-wordpress-template/discussion/120416">here</a>.</p>

        <input type="hidden" name="action" value="save" />
        </form>
        <form method="post">
            <p class="submit">
                <input name="reset" type="submit" value="Reset" />
                <input type="hidden" name="action" value="reset" />
            </p>
        </form>
    </div>


    <?php
}
?>
    <?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
    <?php 
function add_theme_favicon() { ?>
    <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/favicon.ico" />
    <?php }
add_action('wp_head', 'add_theme_favicon');




function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'primary') {
	  $classes[] = 'nav-item';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);




add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'class'; // or something based on $item
    $atts['class'] = 'nav-link';
    return $atts;
}





// Our custom post type function
function  facebook_live_sermon() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Sermon Videos', 'Post Type General Name', 'twentytwenty' ),
			'singular_name'       => _x( 'Sermon Video', 'Post Type Singular Name', 'twentytwenty' ),
			'menu_name'           => __( 'Sermon Videos', 'twentytwenty' ),
			'parent_item_colon'   => __( 'Parent Sermon Video', 'twentytwenty' ),
			'all_items'           => __( 'All Sermon Videos', 'twentytwenty' ),
			'view_item'           => __( 'View Sermon Video', 'twentytwenty' ),
			'add_new_item'        => __( 'Add New Sermon Video', 'twentytwenty' ),
			'add_new'             => __( 'Add New', 'twentytwenty' ),
			'edit_item'           => __( 'Edit Sermon Video', 'twentytwenty' ),
			'update_item'         => __( 'Update Sermon Video', 'twentytwenty' ),
			'search_items'        => __( 'Search Sermon Video', 'twentytwenty' ),
			'not_found'           => __( 'Not Found', 'twentytwenty' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
		);
		 
	// Set other options for Custom Post Type
		 $desc = "Go to https://developers.facebook.com/docs/plugins/embedded-video-player and paste the facebook url and click on get code, copy that code and put in content";
		$args = array(
			'label'               => __( 'Sermon Videos', 'twentytwenty' ),
			'description'         => __( 'Sermon Video news and reviews', 'twentytwenty' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'revisions' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'menu_icon'           => 'dashicons-video-alt',
			'description'         => $desc,
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive' => true,
            'rewrite' => array('slug' => 'sermon-gallery'),
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'sermon-video', $args );








		 
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Church Gallery', 'Post Type General Name', 'twentytwenty' ),
		'singular_name'       => _x( 'Church Gallery', 'Post Type Singular Name', 'twentytwenty' ),
		'menu_name'           => __( 'Church Gallery', 'twentytwenty' ),
		'parent_item_colon'   => __( 'Parent Church Gallery', 'twentytwenty' ),
		'all_items'           => __( 'All Church Gallery', 'twentytwenty' ),
		'view_item'           => __( 'View Church Gallery', 'twentytwenty' ),
		'add_new_item'        => __( 'Add New Church Gallery', 'twentytwenty' ),
		'add_new'             => __( 'Add New', 'twentytwenty' ),
		'edit_item'           => __( 'Edit Church Gallery', 'twentytwenty' ),
		'update_item'         => __( 'Update Church Gallery', 'twentytwenty' ),
		'search_items'        => __( 'Search Church Gallery', 'twentytwenty' ),
		'not_found'           => __( 'Not Found', 'twentytwenty' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
	);
	 
// Set other options for Custom Post Type
		$args = array(
		'label'               => __( 'Church Gallery', 'twentytwenty' ),
		'description'         => __( 'Church Gallery news and reviews', 'twentytwenty' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/ 
		'menu_icon'           => 'dashicons-format-gallery',
		'description'         => $desc,
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'sermon-video'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
 
	);
	 
	// Registering your Custom Post Type
	register_post_type( 'sermon-gallery', $args );




	
		 
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Media Message', 'Post Type General Name', 'twentytwenty' ),
		'singular_name'       => _x( 'Media Message', 'Post Type Singular Name', 'twentytwenty' ),
		'menu_name'           => __( 'Media Message', 'twentytwenty' ),
		'parent_item_colon'   => __( 'Parent Media Message', 'twentytwenty' ),
		'all_items'           => __( 'All Media Message', 'twentytwenty' ),
		'view_item'           => __( 'View Media Message', 'twentytwenty' ),
		'add_new_item'        => __( 'Add New Media Message', 'twentytwenty' ),
		'add_new'             => __( 'Add New', 'twentytwenty' ),
		'edit_item'           => __( 'Edit Media Message', 'twentytwenty' ),
		'update_item'         => __( 'Update Media Message', 'twentytwenty' ),
		'search_items'        => __( 'Search Media Message', 'twentytwenty' ),
		'not_found'           => __( 'Not Found', 'twentytwenty' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
	);
	 
// Set other options for Custom Post Type
		$args = array(
		'label'               => __( 'Media Message', 'twentytwenty' ),
		'description'         => __( 'Media Message news and reviews', 'twentytwenty' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/ 
		'menu_icon'           => 'dashicons-text-page',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'media-message'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
 
	);
	 
	// Registering your Custom Post Type
	register_post_type( 'media-message', $args );
	 
	}
	 
	
// Hooking up our function to theme setup
add_action( 'init', 'facebook_live_sermon' );


add_action( 'wp_print_styles', 'deregister_my_styles', 100 );
 
function deregister_my_styles() {
	wp_deregister_style( 'mailpoet-public.css' );
}

?>