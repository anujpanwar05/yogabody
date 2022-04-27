<?php
/**
 * Yoga Body functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yoga_Body
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'yogabody_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yogabody_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Yoga Body, use a find and replace
		 * to change 'yogabody' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yogabody', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'yogabody' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'yogabody_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'yogabody_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yogabody_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yogabody_content_width', 640 );
}
add_action( 'after_setup_theme', 'yogabody_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yogabody_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yogabody' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yogabody' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yogabody_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yogabody_scripts() {
	wp_enqueue_style( 'yogabody-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'yogabody-style', 'rtl', 'replace' );

	wp_enqueue_script( 'yogabody-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yogabody_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-custom', get_stylesheet_directory_uri().'/custom-style.css', array(), rand(), 'all');
    wp_enqueue_script( 'script-custom', get_stylesheet_directory_uri() . '/custom-style.js', array(), rand(), true );
	wp_localize_script( 'script-custom', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php'),'siteurl' => site_url()));
	wp_enqueue_style( 'perfect-scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/css/perfect-scrollbar.css', array(), rand(), 'all');
    wp_enqueue_script( 'perfect-scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/perfect-scrollbar.jquery.js', array(), rand(), true );    
    
	//wp_enqueue_style( 'yogabody-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), rand(), 'all');
    wp_enqueue_script( 'yogabody-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), rand(), true );
	if ( is_page_template( 'template-admin.php' ) ) {
	wp_enqueue_script( 'sortable-ghost', get_stylesheet_directory_uri() . '/static/admin/js/Sortable.js', array(), rand(), true );
	}
	if ( is_page_template( 'template-admin.php' ) || is_page_template( 'template-appearance.php' ) || is_page_template( 'template-settings.php' ) || is_page_template( 'template-admin-account.php' ) ) {
		wp_enqueue_style( 'dashboard-admin', get_stylesheet_directory_uri().'/static/admin/admin.css', array(), rand(), 'all');
		wp_enqueue_style( 'dashboard-main', get_stylesheet_directory_uri().'/static/admin/main.css', array(), rand(), 'all');
		wp_enqueue_style( 'dashboard-service', get_stylesheet_directory_uri().'/static/admin/service.css', array(), rand(), 'all');	
		wp_enqueue_script( 'yogabody-qrcode', get_stylesheet_directory_uri() . '/static/admin/js/easy.qrcode.min.js', array(), rand(), true );
		wp_enqueue_script( 'yogabody-admin', get_stylesheet_directory_uri() . '/static/admin/js/admin.js', array(), rand(), true );
	
	}
	if ( is_page_template( 'template-appearance.php' ) ) {
	wp_enqueue_style( 'appearance-admin', get_stylesheet_directory_uri().'/static/admin/appearance.css', array(), rand(), 'all');
	wp_enqueue_script( 'appearance-admin', get_stylesheet_directory_uri() . '/static/admin/js/appearance.js', array(), rand(), true );
	wp_enqueue_script( 'appearance-imgareaselect', get_stylesheet_directory_uri() . '/static/admin/js/jquery.imgareaselect.js', array(), rand(), true );
	wp_enqueue_script( 'appearance-form', get_stylesheet_directory_uri() . '/static/admin/js/jquery.form.js', array(), rand(), true );
	}
	if ( is_page_template( 'template-settings.php' ) ) {
	wp_enqueue_style( 'settings-admin', get_stylesheet_directory_uri().'/static/admin/settings.css', array(), rand(), 'all');
	}
	if(is_home()){
		wp_enqueue_script( 'yogabody-homepage', get_stylesheet_directory_uri() . '/static/homepage.js', array(), rand(), true );
		wp_enqueue_style( 'yogabody-homepage', get_stylesheet_directory_uri().'/static/homepage.css', array(), rand(), 'all');
	}	
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'template-admin.php' ) || is_page_template( 'template-appearance.php' ) || is_page_template( 'template-settings.php' ) || is_page_template( 'template-admin-account.php' ) ) {
        $classes[] = 'admin theme colourway-green video no-touch browser-chrome';
    }
	if ( is_page_template( 'template-register.php' ) || is_page_template( 'template-login.php' ) ) {
		$classes[] = 'auth theme colourway-green video no-touch';
	}
	if ( wp_is_mobile() ) {
		$classes[] = 'is-mobile touch';
	}else{
		$classes[] = 'no-touch';
	}	
	
    return $classes;
}
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
//if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
//}
}
add_action('rest_api_init', 'rest_api_init_functions');
function rest_api_init_functions(){
	register_rest_route('links/v2', '/get_all_links/', array(
		'methods' => 'GET',
		'callback' => 'get_all_links_function'
	));
}
function get_all_links_function(){
	global $wpdb;
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
    $psql    = "SELECT * FROM {$wpdb->prefix}treelinks WHERE user_id = $user_id ORDER BY position DESC";
	$results = $wpdb->get_results($psql);
    echo json_encode(array('type'=>'success','data'=>$results));
    die;
}
add_action("wp_ajax_get_all_links", "get_all_links_function");
add_action("wp_ajax_nopriv_my_user_vote", "my_must_login");

function my_user_vote() {

   if ( !wp_verify_nonce( $_REQUEST['nonce'], "my_user_vote_nonce")) {
      exit("No naughty business please");
   }   

   $vote_count = get_post_meta($_REQUEST["post_id"], "votes", true);
   $vote_count = ($vote_count == ’) ? 0 : $vote_count;
   $new_vote_count = $vote_count + 1;

   $vote = update_post_meta($_REQUEST["post_id"], "votes", $new_vote_count);

   if($vote === false) {
      $result['type'] = "error";
      $result['vote_count'] = $vote_count;
   }
   else {
      $result['type'] = "success";
      $result['vote_count'] = $new_vote_count;
   }

   if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $result = json_encode($result);
      echo $result;
   }
   else {
      header("Location: ".$_SERVER["HTTP_REFERER"]);
   }

   die();

}

function my_must_login() {
   echo "You must log in";
   die();
}
function add_new_link_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$position = $wpdb->get_var("SELECT position FROM {$wpdb->prefix}treelinks WHERE user_id = $user_id ORDER BY position DESC LIMIT 0,1");
	if($position>=0){
		$pos = $position+1;
	}else{
		$pos = 0;
	}
    $wpdb->insert( $tablename, array(
            'user_id' => $user_id, 
            'type' => 'CLASSIC',
            'title' => '', 
            'url' => '',
            'formattedUrl' => '', 
            'thumbnailUrl' => NULL, 
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_new_link", "add_new_link_function");

function add_new_payment_link_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//echo"<pre>";print_r($_POST);echo"</pre>";die;
	$position = $wpdb->get_var("SELECT position FROM {$wpdb->prefix}treelinks WHERE user_id = $user_id ORDER BY position DESC LIMIT 0,1");
	if($position>=0){
		$pos = $position+1;
	}else{
		$pos = 0;
	}
    $wpdb->insert( $tablename, array(
            'user_id' => $user_id, 
            'type' => 'PAYMENT',
            'title' => '', 
            'url' => '',
            'formattedUrl' => '', 
            'thumbnailUrl' => NULL, 
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_new_payment_link", "add_new_payment_link_function");

function update_link_title_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'title'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_title", "update_link_title_function");

function update_link_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'url'=>$_POST['url']),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_url", "update_link_url_function");

function update_link_paypal_email_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'paypal_email'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_paypal_email", "update_link_paypal_email_function");

function update_link_class_name_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'class_product_name'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_class_name", "update_link_class_name_function");

function update_link_class_price_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'class_price'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_class_price", "update_link_class_price_function");

function update_link_class_currency_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'price_currency'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_link_class_currency", "update_link_class_currency_function");

function delete_link_action_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->delete($tablename,array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_delete_link_action", "delete_link_action_function");

function update_links_order_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	
	$order = $_POST['order'];
	$reversed = array_reverse($order);
	//echo"<pre>";print_r($_POST);echo"</pre>";die;
	foreach($reversed as $key=>$o){
	$result = $wpdb->update($tablename,array(
		'position'=>$key),
		array('ID'=>$o,'user_id'=>$user_id)
	);
	}
	echo json_encode(array('type'=>'success','message'=>'order updated'));
    die;
}
add_action("wp_ajax_update_links_order", "update_links_order_function");

function update_user_details_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
    wp_update_user(array(
        'ID' => $user_id,
        'user_email' => $_POST['email'],
		'display_name' => $_POST['name']
    ));
	echo json_encode(array('type'=>'success','message'=>'order updated'));
    die;
}
add_action("wp_ajax_update_user_details", "update_user_details_function");

function update_link_status_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
    $result = $wpdb->update($tablename,array(
		'status'=>$_POST['status']),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	echo json_encode(array('type'=>'success','message'=>'status updated'));
    die;
}
add_action("wp_ajax_update_link_status", "update_link_status_function");

function update_whitelabel_status_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$status = $_POST['status'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	$configration->whitelist = $status;
	///echo"<pre>";print_r($configration);echo"</pre>";die;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Whitelist updated'));
    die;
}
add_action("wp_ajax_update_whitelabel_status", "update_whitelabel_status_function");

function sensitive_material_status_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$status = $_POST['status'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->sensitive_material = $status;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Whitelist updated'));
    die;
}
add_action("wp_ajax_sensitive_material_status", "sensitive_material_status_function");

function support_banner_status_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$status = $_POST['status'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->support_banner = $status;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Support Banner updated'));
    die;
}
add_action("wp_ajax_support_banner_status", "support_banner_status_function");

function update_theme_selection_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['value'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->theme = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Theme updated'));
    die;
}
add_action("wp_ajax_update_theme_selection", "update_theme_selection_function");

function delete_account_action_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	wp_delete_user( $user_id );
	echo json_encode(array('type'=>'success','message'=>'Account deleted'));
    die;
}
add_action("wp_ajax_delete_account_action", "delete_account_action_function");

function update_profile_title_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['profile_title'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->profile_title = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Profile title updated'));
    die;
}
add_action("wp_ajax_update_profile_title", "update_profile_title_function");

function update_profile_description_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['profile_description'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->profile_description = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Profile title updated'));
    die;
}
add_action("wp_ajax_update_profile_description", "update_profile_description_function");

function upload_profile_image_function(){
	if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//echo"<pre>";print_r($_POST);echo"</pre>";
	$uploadedfile = $_FILES['profile-pic'];
	$upload_overrides = array(
		'test_form' => false
	);
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if($movefile){
		//echo"<pre>";print_r($movefile['file']);echo"</pre>";die('sdfsdfsdf');
		$pathinfo = pathinfo($movefile["url"]);
		echo "<img id='photo' file-name='".$movefile['file']."' class='' src='".$movefile["url"].'?'.time()."' class='preview'/>";
	}else{

	}
	//echo"<pre>";print_r($movefile);echo"</pre>";die('sdfsdfsdf');
	//$pathinfo['basename']
    die;
}
add_action("wp_ajax_upload_profile_image", "upload_profile_image_function");

function save_croped_profile_function(){
	if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$t_width = 300; // Maximum thumbnail width
	$t_height = 300;    // Maximum thumbnail height	
	extract($_POST);
	$imagePath = $_POST['image_name'];
	$ratio = ($t_width/$w1); 
	$nw = ceil($w1 * $ratio);
	$nh = ceil($h1 * $ratio);
	$nimg = imagecreatetruecolor($nw,$nh);
	$im_src = imagecreatefromjpeg($imagePath);
	imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w1,$h1);
	imagejpeg($nimg,$imagePath,90);
	
	echo $imagePath.'?'.time();;
	exit(0);
}
add_action("wp_ajax_save_croped_profile", "save_croped_profile_function");

function remove_profile_picture_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//$value = $_POST['profile_title'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->profile_picture = '';
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Profile picture removed','default_photo'=>get_site_url().'/wp-content/uploads/2021/02/default_profile_picture.png'));
    die;
}
add_action("wp_ajax_remove_profile_picture", "remove_profile_picture_function");

function save_svg_action_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$arrays = $_POST['array']; 
	
	foreach($arrays as $array){
		$wpdb->insert( $tablename, array(
            'icon_id' => $array['id'],
			'icon_svg'=> stripslashes($array['svg']),
			'status'=>1) 
        );
		//echo"<pre>";print_r($arrays);echo"</pre>";die('sdfdsfdsf');
	}	
    die;
}
add_action("wp_ajax_save_svg_action", "save_svg_action_function");
add_action("wp_ajax_nopriv_save_svg_action", "save_svg_action_function");

function update_click_count_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$clicks = get_user_meta($user_id,'yogabody_count_clicks',true);
	if(empty($clicks)){
		$clicks = 0;
	}
	update_user_meta($user_id,'yogabody_count_clicks',($clicks+1));	
    die;
}
add_action("wp_ajax_update_click_count", "update_click_count_function");
add_action("wp_ajax_nopriv_update_click_count", "update_click_count_function");
//save_svg_action
function get_the_user_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	$ip = $_SERVER['REMOTE_ADDR'];
	}
	return apply_filters( 'wpb_get_ip', $ip );
}


//
//flush_rewrite_rules();
// Create the query var so that WP catches the custom /member/username url
function userpage_rewrite_add_var( $vars ) {
    $vars[] = 'member';
    return $vars;
}
add_filter( 'query_vars', 'userpage_rewrite_add_var' );

// Create the rewrites
function userpage_rewrite_rule() {
    add_rewrite_tag( '%member%', '([^&]+)' );
    add_rewrite_rule(
        '^member/([^/]*)/?',
        'index.php?member=$matches[1]',
        'top'
    );
	flush_rewrite_rules();
}
add_action('init','userpage_rewrite_rule');

// Catch the URL and redirect it to a template file
function userpage_rewrite_catch() {
    global $wp_query;
	//echo"<pre>";print_r($wp_query);echo"</pre>";die('sdfsdfdsf');
	if ( array_key_exists( 'name', $wp_query->query ) ) {
        include (TEMPLATEPATH . '/user-profile.php');
        exit;
    }
    if ( array_key_exists( 'member', $wp_query->query_vars ) ) {
        include (TEMPLATEPATH . '/user-profile.php');
        exit;
    }
	if((is_page(33) || is_page(46) || is_page(35) || is_page(37) || is_page(84)) && !is_user_logged_in()){
		wp_redirect(get_the_permalink(14));
		exit;
	}	
}
add_action( 'template_redirect', 'userpage_rewrite_catch' );

function filter_plugin_updates( $value ) {
    unset( $value->response['wp-user-frontend-pro/wpuf-pro.php'] );
	unset( $value->response['wp-user-frontend/wpuf.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
// Function to add http
function addHttp($url) {
      
    // Search the pattern
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
          
        // If not exist then add http
        $url = "http://" . $url;
    }
      
    // Return the URL
    return $url;
}