<?php
require_once 'vendor/autoload.php';	
require_once "class-db.php";
require("class.phpmailer.php");
include("custom_function.php");
include("bio-sitemap.php");
require_once(get_theme_file_path('/list-rating-reviews.php'));

function theme_enqueue_styles() {
    wp_enqueue_style( 'avada-parent-stylesheet', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

//shortcodes on widgets
add_filter('widget_text', 'do_shortcode');

//add excerpt to pages
add_post_type_support( 'page', 'excerpt' );

//remove admin bar for non-admins
if (!current_user_can('manage_options')) add_filter('show_admin_bar', '__return_false');

//avada menu fix. hide after done
/*add_action('admin_head', 'theme_fix');
function theme_fix() {
  echo '<style>
    .form-table span {
    width: auto !important;
}
input {
    display: block !important;
}
  </style>';
}*/

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-custom', get_stylesheet_directory_uri().'/custom-style.css', array(), rand(), 'all');
	wp_enqueue_style( 'yogabody-font-awesome', get_stylesheet_directory_uri().'/static/fontawesome.min.css', array(), rand(), 'all');
	wp_enqueue_script( 'jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js', array(), rand(), true );
	if ( is_page_template( 'template-admin.php' ) ) {
	wp_enqueue_script( 'sortable-ghost', get_stylesheet_directory_uri() . '/static/admin/js/Sortable.js', array(), rand(), true );
	wp_enqueue_script( 'czMore-ghost', get_stylesheet_directory_uri() . '/static/admin/js/jquery.czMore-latest.js', array(), rand(), true );
	wp_enqueue_script( 'new-datetimepicker', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/1.1.1/jquery.datetimepicker.min.js', array(), rand(), true );
	wp_enqueue_style( 'new-datetimepicker', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/1.1.1/jquery.datetimepicker.min.css', array(), rand(), 'all');
	wp_enqueue_style( 'admin-responsive', get_stylesheet_directory_uri() .'/static/admin/admin-responsive.css', array(), rand(), 'all');
	//wp_enqueue_script( 'sorting-scrolling', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), rand(), true );
	
	}
    wp_enqueue_script( 'script-custom', get_stylesheet_directory_uri() . '/custom-style.js', array(), rand(), true );
	wp_localize_script( 'script-custom', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php'),'siteurl' => site_url()));
	wp_enqueue_style( 'perfect-scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/css/perfect-scrollbar.css', array(), rand(), 'all');
    wp_enqueue_script( 'perfect-scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/perfect-scrollbar.jquery.js', array(), rand(), true );    
    
	//wp_enqueue_style( 'yogabody-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), rand(), 'all');
    wp_enqueue_script( 'yogabody-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), rand(), true );
	
	if ( is_page_template( 'template-admin.php' ) || is_page_template( 'template-appearance.php' ) || is_page_template( 'template-settings.php' ) || is_page_template( 'template-admin-account.php' ) || is_page_template( 'template-reviews.php' ) || is_page_template( 'template-zoom-events.php' ) ) {
		wp_enqueue_style( 'dashboard-admin', get_stylesheet_directory_uri().'/static/admin/admin.css', array(), rand(), 'all');
		wp_enqueue_style( 'dashboard-main', get_stylesheet_directory_uri().'/static/admin/main.css', array(), rand(), 'all');
		wp_enqueue_style( 'dashboard-service', get_stylesheet_directory_uri().'/static/admin/service.css', array(), rand(), 'all');	
		wp_enqueue_script( 'yogabody-qrcode', get_stylesheet_directory_uri() . '/static/admin/js/easy.qrcode.min.js', array(), rand(), true );
		wp_enqueue_script( 'yogabody-admin', get_stylesheet_directory_uri() . '/static/admin/js/admin.js', array(), rand(), true );
		wp_enqueue_style( 'jquery-ui-css', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), rand(), 'all');
	
	}
	if ( is_page_template( 'template-appearance.php' ) ) {
		wp_enqueue_style( 'appearance-admin', get_stylesheet_directory_uri().'/static/admin/appearance.css', array(), rand(), 'all');
		wp_enqueue_script( 'appearance-admin', get_stylesheet_directory_uri() . '/static/admin/js/appearance.js', array(), rand(), true );
		wp_enqueue_script( 'appearance-imgareaselect', get_stylesheet_directory_uri() . '/static/admin/js/jquery.imgareaselect.js', array(), rand(), true );
		wp_enqueue_script( 'appearance-form', get_stylesheet_directory_uri() . '/static/admin/js/jquery.form.js', array(), rand(), true );
	}
	if ( is_page_template( 'template-register.php' ) ) {
		wp_enqueue_style( 'register-admin', get_stylesheet_directory_uri().'/static/admin/register.css', array(), rand(), 'all');
		wp_enqueue_script( 'register-admin', get_stylesheet_directory_uri() . '/static/admin/js/register.js', array(), rand(), true );
		wp_enqueue_script( 'register-imgareaselect', get_stylesheet_directory_uri() . '/static/admin/js/jquery.imgareaselect.js', array(), rand(), true );
		wp_enqueue_script( 'register-form', get_stylesheet_directory_uri() . '/static/admin/js/jquery.form.js', array(), rand(), true );
	}
	if ( is_page_template( 'template-reviews.php' ) ) {
		wp_enqueue_style( 'reviews-admin', get_stylesheet_directory_uri().'/static/admin/reviews.css', array(), rand(), 'all');
		wp_enqueue_script( 'reviews-admin', get_stylesheet_directory_uri() . '/static/admin/js/reviews.js', array(), rand(), true );
	}
	if ( is_page_template( 'template-settings.php' ) ) {
	wp_enqueue_style( 'settings-admin', get_stylesheet_directory_uri().'/static/admin/settings.css', array(), rand(), 'all');
	
	}
	if ( is_page_template( 'template-admin.php' ) ) {
		wp_enqueue_script( 'google-sheets', get_stylesheet_directory_uri() . '/static/admin/js/google-sheets.js', array(), rand(), true );
		
		//wp_enqueue_style( 'settings-admin-smoothness', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), rand(), 'all');
		
	}
	if(is_home() || is_front_page()){
		wp_enqueue_script( 'yogabody-slick', get_stylesheet_directory_uri() . '/slick/slick.js', array(), rand(), true );
		wp_enqueue_style( 'yogabody-slick', get_stylesheet_directory_uri().'/slick/slick.css', array(), rand(), 'all');
		wp_enqueue_style( 'yogabody-slick-theme', get_stylesheet_directory_uri().'/slick/slick-theme.css', array(), rand(), 'all');
		wp_enqueue_script( 'yogabody-homepage', get_stylesheet_directory_uri() . '/static/homepage.js', array(), rand(), true );
		wp_enqueue_style( 'yogabody-homepage', get_stylesheet_directory_uri().'/static/homepage.css', array(), rand(), 'all');
	}	
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'template-admin.php' ) || is_page_template( 'template-appearance.php' ) || is_page_template( 'template-settings.php' ) || is_page_template( 'template-admin-account.php' ) || is_page_template( 'template-reviews.php' ) || is_page_template( 'template-zoom-events.php' )) {
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
    $psql = "SELECT * FROM {$wpdb->prefix}treelinks WHERE user_id = $user_id ORDER BY position DESC";
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
   $vote_count = ($vote_count == '') ? 0 : $vote_count;
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
            /*'formattedUrl' => '', 
            'thumbnailUrl' => NULL, 
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,*/
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
            'type' => 'STORE',
            'title' => 'My Store', 
            'url' => '',
            /*'formattedUrl' => '', 
            'thumbnailUrl' => NULL, 
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,*/
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_new_payment_link", "add_new_payment_link_function");

function add_new_cvresume_link_function(){
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
            'type' => 'RESUME',
            'title' => '', 
            'url' => '',
            /*'formattedUrl' => '', 
            'thumbnailUrl' => NULL,
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,
            'linkContext' => NULL,*/
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_new_cvresume_link", "add_new_cvresume_link_function");

function add_new_video_link_function(){
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
            'type' => 'VIDEO',
            'title' => '', 
            'url' => '',
            /*'formattedUrl' => '', 
            'thumbnailUrl' => NULL, 
            'animation' => NULL,
            'isLeapLink' => '', 
            'isLeapLinkActive' => '', 
            'amazonAffiliate' => NULL,*/
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_new_video_link", "add_new_video_link_function");

function add_digital_product_link_function(){
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
            'type' => 'DIGITAL',
            'title' => '', 
            'url' => '',
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_digital_product_link", "add_digital_product_link_function");

function add_student_form_link_function(){
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
            'type' => 'STUDENT',
            'title' => '', 
            'url' => '',
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_student_form_link", "add_student_form_link_function");

function student_form_breath_coaching_link_function(){
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
            'type' => 'BREATHCOACHING',
            'title' => '', 
            'url' => '',
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_student_form_breath_coaching_link", "student_form_breath_coaching_link_function");

function add_zoom_events_link_function(){
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
            'type' => 'ZOOM',
            'title' => 'My Schedule', 
            'url' => '',
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_zoom_events_link", "add_zoom_events_link_function");

function add_build_email_list_link_function(){
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
            'type' => 'BUILDEMAIL',
            'title' => 'Join My Email List!', 
            'url' => '',
            'linkContext' => NULL,
			'status'=>1,
			'position'=>$pos,
			'class_product_name'=>'Sign Up!',
			'class_price'=>'Sign up below for email updates on my teaching schedule!',
			'price_currency'=>'Thanks for signing up! Be sure to check for my email updates soon…',
			'resume_about'=>'I am providing my contact information to be sent periodic updates that might include announcements, promotions, marketing, and educational materials. I can unsubscribe at anytime.') 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_add_build_email_list_link", "add_build_email_list_link_function");
 
function profile_review_submit_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'profile_reviews';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$user_ip = get_the_user_ipp();
	//echo"<pre>";print_r($_POST);echo"</pre>";die;
    $wpdb->insert( $tablename, array(
            'user_id' => $_POST['user_id'], 
            'review_name' => $_POST['your_name'],
            'review_email' => $_POST['your_email'], 
            'review_stars' => $_POST['stars'],
            'review_comment' => stripcslashes($_POST['your_review']), 
            'review_reply' => '', 
            'review_reply_date' => '', 
            'review_date' => time(), 
            'review_status' => 1, 
            'ip_location' => $user_ip,
			'report_status'=>0) 
        );
	$record_id = $wpdb->insert_id;

    echo json_encode(array('type'=>'success','record_id'=>$record_id));
    die;
}
add_action("wp_ajax_profile_review_submit", "profile_review_submit_function");
add_action("wp_ajax_nopriv_profile_review_submit", "profile_review_submit_function");

function get_the_user_ipp() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	//check ip from share internet
	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	//to check ip is pass from proxy
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	$ip = $_SERVER['REMOTE_ADDR'];
	}
	return apply_filters( 'wpb_get_ip', $ip );
}

function verify_and_update_review_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'profile_reviews';
    $id = $_POST['id'];
	$review_email = $_POST['review_email'];
	$review_textarea = $_POST['review_textarea'];
	$review = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}profile_reviews WHERE review_id=$id AND review_email='$review_email'");
	if($review){
		$result = $wpdb->update($tablename,array(
			'review_comment'=>stripcslashes($review_textarea)),
			array('review_id'=>$id)
		);
		echo json_encode(array('type'=>'success','message'=>'Updated successfully'));
		die;
	}else{
		echo json_encode(array('type'=>'error','message'=>'Wrong Email! Review not updated.'));
		die;
	}

    echo json_encode(array('type'=>'success','record_id'=>$result));
    die;
}
add_action("wp_ajax_verify_and_update_review", "verify_and_update_review_function");
add_action("wp_ajax_nopriv_verify_and_update_review", "verify_and_update_review_function");

function reply_to_review_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'profile_reviews';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'review_reply'=>stripcslashes($_POST['reply_message']),
		'review_reply_date'=>time()),
		array('review_id'=>$_POST['id'])
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result,'update_date'=>date("F Y",time())));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    die;
}
add_action("wp_ajax_reply_to_review", "reply_to_review_function");

function report_to_review_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'profile_reviews';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'report_status'=>1,
		'report_message'=>stripcslashes($_POST['report_message']),
		'report_time'=>time()),
		array('review_id'=>$_POST['id'])
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    die;
}
add_action("wp_ajax_report_to_review", "report_to_review_function");

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

function update_user_username_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$username = sanitize_user( $_POST['username'] );
	if($current_user->user_login==$username){
		echo json_encode(array('type'=>'nothing','message'=>'Nothing to updated'));
	}elseif( username_exists( $username ) ) {
		echo json_encode(array('type'=>'error','message'=>'Username Already Taken'));
	}else{
		$wpdb->update(
			$wpdb->users, 
			['user_login' => $username], 
			['ID' => $user_id]
		);
		echo json_encode(array('type'=>'success','message'=>'Username updated'));
	}
    die;
}
add_action("wp_ajax_update_user_username", "update_user_username_function");

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

function update_reviews_status_function(){
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
	$configration->reviewsconfig = $status;
	///echo"<pre>";print_r($configration);echo"</pre>";die;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Reviews config updated'));
    die;
}
add_action("wp_ajax_update_reviews_status", "update_reviews_status_function");

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

/* social media icon */
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
function update_instagram_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['instagram_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	if($value){
		if (startsWith($value,"www.instagram.com/")) {
			$value='https://'.$value;
		}
		if (startsWith($value,"instagram.com/")) {
			$value='https://www.'.$value;
		}
		if (strpos($value, 'https://www.instagram.com/') === false && strpos($value, 'https://instagram.com/') === false && startsWith($value,"@")) {
			$value='https://www.instagram.com/'.substr($value, 1);
		}
		if (strpos($value, 'https://www.instagram.com/') === false && strpos($value, 'https://instagram.com/') === false) {
			$value='https://www.instagram.com/'.$value;
		}
	}
	$configration->instagram_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'instagram url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_instagram_url", "update_instagram_url_function");
function update_facebook_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['facebook_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	if($value){
		if (startsWith($value,"www.facebook.com/")) {
			$value='https://'.$value;
		}
		if (startsWith($value,"facebook.com/")) {
			$value='https://www.'.$value;
		}
		if (strpos($value, 'https://www.facebook.com/') === false && strpos($value, 'https://facebook.com/') === false && startsWith($value,"@")) {
			$value='https://www.facebook.com/'.substr($value, 1);
		}
		if (strpos($value, 'https://www.facebook.com/') === false && strpos($value, 'https://facebook.com/') === false) {
			$value='https://www.facebook.com/'.$value;
		}
	}
	$configration->facebook_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'facebook url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_facebook_url", "update_facebook_url_function");
function update_tiktok_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['tiktok_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	if($value){
		if (startsWith($value,"www.tiktok.com/")) {
			$value='https://'.$value;
		}
		if (startsWith($value,"tiktok.com/")) {
			$value='https://www.'.$value;
		}
		if (strpos($value, 'https://www.tiktok.com/') === false && strpos($value, 'https://tiktok.com/') === false) {
			$value='https://www.tiktok.com/'.$value;
		}
	}
	$configration->tiktok_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Tiktok url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_tiktok_url", "update_tiktok_url_function");
function update_youtube_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['youtube_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	if($value){
		if (strpos($value, 'https://www.youtube.com/') === false && strpos($value, 'https://youtube.com') === false) {
			$value='https://www.youtube.com/c/'.$value;
		}
	}
	$configration->youtube_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'youtube url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_youtube_url", "update_youtube_url_function");
function update_linkedin_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['linkedin_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	if($value){
		if (startsWith($value,"www.linkedin.com/")) {
			$value='https://'.$value;
		}
		if (startsWith($value,"linkedin.com/")) {
			$value='https://www.'.$value;
		}
		if (strpos($value, 'https://www.linkedin.com/') === false && strpos($value, 'https://linkedin.com/') === false && startsWith($value,"@")) {
			$value='https://www.linkedin.com/in/'.substr($value, 1);
		}
		if (strpos($value, 'https://www.linkedin.com/') === false && strpos($value, 'https://linkedin.com/') === false) {
			$value='https://www.linkedin.com/in/'.$value;
		}
	}
	$configration->linkedin_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'linkedin url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_linkedin_url", "update_linkedin_url_function");
function update_email_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['email_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	$configration->email_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'linkedin url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_email_url", "update_email_url_function");
function update_telegram_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['telegram_url'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}
	$configration->telegram_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'telegram_url url updated','url'=>$value));
    die;
}
add_action("wp_ajax_update_telegram_url", "update_telegram_url_function");
function update_whatsapp_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$value = $_POST['whatsapp_url'];
	$country_code = $_POST['country_code'];
	$configration = get_user_meta($user_id,'yogabody_configration',true);
	if(!empty($configration)){
		$configration = json_decode($configration);
	}else{
		$configration = new stdClass;
	}	
	$configration->country_code = $country_code;
	$configration->whatsapp_url = $value;
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
	echo json_encode(array('type'=>'success','message'=>'Profile title updated'));
    die;
}
add_action("wp_ajax_update_whatsapp_url", "update_whatsapp_url_function");
/* social media icon end */
/* resume section start */
function resume_settings_update_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	if(isset($_POST['company_name']) && is_array($_POST['company_name'])){
		$work_experience = array();
		foreach($_POST['company_name'] as $index=>$value){
		$we_std = new stdClass;
		$we_std->company_name = htmlentities(stripcslashes($_POST['company_name'][$index]));
		$we_std->start_date_month = $_POST['start_date_month'][$index];
		$we_std->start_date_year = $_POST['start_date_year'][$index];
		$we_std->end_date_month = $_POST['end_date_month'][$index];
		$we_std->end_date_year = $_POST['end_date_year'][$index];
		$we_std->job_title = htmlentities(stripcslashes($_POST['job_title'][$index]));
		$we_std->notes_on_work = htmlentities(stripcslashes($_POST['notes_on_work'][$index]));
		$work_experience[] = $we_std;
		}
	}else{
		$work_experience = array();
	}
	if(isset($_POST['school_institution']) && is_array($_POST['school_institution'])){
		$education_training = array();
		foreach($_POST['school_institution'] as $index=>$value){
		$et_std = new stdClass;
		$et_std->school_institution = htmlentities(stripcslashes($_POST['school_institution'][$index]));
		$et_std->area_of_study = htmlentities(stripcslashes($_POST['area_of_study'][$index]));
		$et_std->certification_receive = htmlentities(stripcslashes($_POST['certification_receive'][$index]));
		$et_std->date_of_completion_month = $_POST['date_of_completion_month'][$index];
		$et_std->date_of_completion_year = $_POST['date_of_completion_year'][$index];
		$et_std->cert_logo_skip = $_POST['cert_logo_skip'][$index];
		$et_std->add_cert_logo = $_POST['add_cert_logo'][$index];
		//$education_training->job_title = $_POST['job_title'][$index];
		$education_training[] = $et_std;
		}
	}else{
		$education_training = array();
	}
	//echo"<pre>";print_r($_POST);echo"</pre>";die('sdfdsf');
    $result = $wpdb->update($tablename,array(
		'resume_about'=>htmlentities(stripcslashes($_POST['resume_about'])),
		'work_experience'=>json_encode($work_experience),
		'education_training'=> json_encode($education_training),
		'skills_interests'=>htmlentities(stripcslashes($_POST['skills_interests']))),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
		echo json_encode(array('type'=>'success','message'=>'Resume updated'));
	
    die;
}
add_action("wp_ajax_resume_settings_update", "resume_settings_update_function");
/* resume section end */
/* zoom event start */
function zoom_event_function($eventid,$id,$topic,$Start_Date,$Start_Time,$password,$Time_Duration,$agenda){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
	$user_id = get_current_user_id(); 
	$userToken = get_user_meta($user_id,'access_token',true);
	$ut = isset($userToken['access_token'])?$userToken['access_token']:0;
	$accessToken =trim($ut);
	$date = $Start_Date;
	$time=$Start_Time; 
	$start_time = date('Y-m-d\TH:i:s', strtotime("$date $time"));
	
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	if($eventid>0){
		$zoom_id = get_post_meta($eventid,'zoom_event_id',true);
		try {
			$created_at = gmDate("Y-m-d\TH:i:s",strtotime(date('Y-m-d H:i')));
			$client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
			$response = $client->request('POST', "/v2/users/me/meetings", [
					"headers" => [
						"Authorization" => "Bearer $accessToken"
					],
					'json' => [
						"topic" => $topic,
						"timezone" => "Asia/Calcutta",				
						"type" => 2,                              
						"start_time" => $start_time, 	//"2020-06-24T20:30:00",    // meeting start time
						"duration" => $Time_Duration,                       // 30 minutes
						"password" => $password                   // meeting password
					],
				]);
			$data = json_decode($response->getBody());
			//echo"<pre>";print_r($data);echo"</pre>";die('working');
			$pid = $eventid; 
			$my_post = array(
				  'ID'           => $pid,
				  'post_title'   => $topic,
				  'post_content' => $agenda,
			  );
			 
			// Update the post into the database
			  wp_update_post( $my_post );
			if($pid){
				
				update_post_meta($pid,'startdatetime', $start_time);
				update_post_meta($pid,'duration',$Time_Duration);
				update_post_meta($pid,'zoomurl',$data->join_url);
				update_post_meta($pid,'password',$password);
				update_post_meta($pid,'responseData',$data);
				update_post_meta($pid,'zoom_event_uuid',$data->uuid);
				update_post_meta($pid,'zoom_event_id',$data->id);
				update_post_meta($pid,'zoom_event_host_id',$data->host_id);
				$url = get_site_url().'/events/';
				//echo json_encode(array('type'=>'success','message'=>'Zoom Event updated'));
				return $pid;
				exit;
			}		 
		}
		catch(Exception $e) {
			echo $e->getMessage();
			$url = get_site_url().'/events/';
			wp_redirect( $url );
			exit;
		}
	}else{
		try {
			$created_at = gmDate("Y-m-d\TH:i:s",strtotime(date('Y-m-d H:i')));
			$client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
			$response = $client->request('POST', '/v2/users/me/meetings', [
					"headers" => [
						"Authorization" => "Bearer $accessToken"
					],
					'json' => [
						"topic" => $topic,
						"timezone" => "Asia/Calcutta",				
						"type" => 2,                              
						"start_time" => $start_time, 	//"2020-06-24T20:30:00",    // meeting start time
						"duration" => $Time_Duration,                       // 30 minutes
						"password" => $password                   // meeting password
					],
				]);
			$data = json_decode($response->getBody());
			$args = array('post_type'=> 'zoomevents','post_status' => 'publish', 'post_title' => $topic,'post_content'=>$agenda);
			$pid = wp_insert_post($args); 
			if($pid){
				add_post_meta($pid,'startdatetime', $start_time);
				add_post_meta($pid,'duration',$Time_Duration);
				add_post_meta($pid,'zoomurl',$data->join_url);
				add_post_meta($pid,'password',$password);
				add_post_meta($pid,'responseData',$data);
				add_post_meta($pid,'zoom_event_uuid',$data->uuid);
				add_post_meta($pid,'zoom_event_id',$data->id);
				add_post_meta($pid,'zoom_event_host_id',$data->host_id);
				$url = get_site_url().'/events/';
				//echo json_encode(array('type'=>'success','message'=>'Zoom Event updated'));
				return $pid;
				exit;
			}		 
		}
		catch(Exception $e) {
			echo $e->getMessage();
			$url = get_site_url().'/events/';
			wp_redirect( $url );
			exit;
		}
	}
	
}
function zoom_event_update_function()
{ 
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
	$user_id = get_current_user_id(); 
	$userToken = get_user_meta($user_id,'access_token',true);
	$ut = isset($userToken['access_token'])?$userToken['access_token']:0;
	$accessToken =trim($ut);
	//echo"<pre>";print_r($_POST);echo"</pre>";die('working'); 
	/*echo"<pre>";print_r($userToken);echo"</pre>userToken ";
	echo"<pre>";print_r($_POST);echo"</pre>";die('working');  */
	//$start_time = gmDate("Y-m-d\TH:i:s",strtotime($_POST['start_time']));		
	$date = $_POST['Start_Date'];
	$time=$_POST['Start_Time']; 
	$start_time = date('Y-m-d\TH:i:s', strtotime("$date $time"));
	$password = $_POST['password'];
	$id=$_POST['ID'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	if(isset($_POST['topic']) && is_array($_POST['topic'])){
		$work_experience = array();
		$embed_type = array();
		foreach($_POST['topic'] as $index=>$value){
		$we_std = new stdClass;
		$we_std->topic = htmlentities(stripcslashes($_POST['topic'][$index]));
		$we_std->Start_Date = $_POST['Start_Date'][$index];
		$we_std->Start_Time = $_POST['Start_Time'][$index];
		$we_std->password = $_POST['password'][$index];
		$we_std->Time_Duration = $_POST['Time_Duration'][$index];
		$we_std->agenda = htmlentities(stripcslashes($_POST['agenda'][$index]));
		$zoom_event_id = zoom_event_function($_POST['eventid'][$index],$id,$we_std->topic,$we_std->Start_Date,$we_std->Start_Time,$we_std->password,$we_std->Time_Duration,$we_std->agenda);
		$we_std->zoom_event_uuid = get_post_meta($zoom_event_id,'zoom_event_uuid',true);
		$we_std->zoom_event_id = get_post_meta($zoom_event_id,'zoom_event_id',true);
		$we_std->zoom_event_host_id = get_post_meta($zoom_event_id,'zoom_event_host_id',true);
		$we_std->zoomurl = get_post_meta($zoom_event_id,'zoomurl',true);
		$work_experience[$zoom_event_id] = $we_std;
		$embed_type[]=$zoom_event_id;
		}
	}else{
		$embed_type = array();
		$work_experience = array();
	}
	$result = $wpdb->update($tablename,array(
					'embed_type'=>json_encode($embed_type),
					'work_experience'=>json_encode($work_experience)),
					array('ID'=>$_POST['ID'],'user_id'=>$user_id)
				);
	echo json_encode(array('type'=>'success','message'=>'Zoom Event updated'));
	exit;
}
add_action("wp_ajax_zoom_event_update_action", "zoom_event_update_function");

/* zoom event end */

/*store item start*/
function store_item_update_function()
{ 
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
	$user_id = get_current_user_id(); 
	//echo"<pre>";print_r($_POST);echo"</pre>";die('working');
	if(isset($_POST['store_email']) && is_array($_POST['store_email'])){
		$work_experience = array();
		foreach($_POST['store_email'] as $index=>$value){
		$we_std = new stdClass;
		$we_std->store_email = $_POST['store_email'][$index];
		$we_std->store_price = $_POST['store_price'][$index];
		$we_std->store_currency = $_POST['store_currency'][$index];
		$we_std->store_product_name = htmlentities(stripcslashes($_POST['store_product_name'][$index]));
		$we_std->store_product_image_hidden = $_POST['store_product_image_hidden'][$index];
		$work_experience[] = $we_std;
		}
	}else{
		$work_experience = array();
	}
	$result = $wpdb->update($tablename,array(
					'work_experience'=>json_encode($work_experience)),
					array('ID'=>$_POST['ID'],'user_id'=>$user_id)
				);
	echo json_encode(array('type'=>'success','message'=>'Zoom Event updated'));
	exit;
}
add_action("wp_ajax_store_item_update_action", "store_item_update_function");
function delete_store_file_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$id = $_POST['ID'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	if($link->linkContext){
		$digital = $link->linkContext;
		if(file_exists($digital)){
			unlink($digital);
		}
	$result = $wpdb->update($tablename,array(
					'linkContext'=>''),
					array('ID'=>$id,'user_id'=>$user_id)
				);
				
	}
	echo json_encode(array('type'=>'success','message'=>'file removed'));
    die;
}
add_action("wp_ajax_delete_store_file_action", "delete_store_file_function");
/*store item end*/

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
	$configration->profile_description = htmlentities(stripcslashes($value));
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

function digital_upload_file_function(){ 
	if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$uploadedfile = $_FILES['file'];
	$upload_overrides = array(
		'test_form' => false
	);
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if($movefile){
		//echo"<pre>";print_r($movefile);echo"</pre>";die('sdfsdfsdf');
		$pathinfo = pathinfo($movefile["url"]);
		$result = $wpdb->update($tablename,array(
					'linkContext'=>$movefile["url"]),
					array('ID'=>$_POST['id'],'user_id'=>$user_id)
				);
		echo $movefile["url"];
	}else{
		echo "error";
	}
    die;
}
add_action("wp_ajax_digital_upload_file_action", "digital_upload_file_function");

function payment_upload_image_function(){ 
	if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$uploadedfile = $_FILES['file'];
	$upload_overrides = array(
		'test_form' => false
	);
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if($movefile){
		//echo"<pre>";print_r($movefile);echo"</pre>";die('sdfsdfsdf');
		$pathinfo = pathinfo($movefile["url"]);
		$result = $wpdb->update($tablename,array(
					'linkContext'=>$movefile["url"]),
					array('ID'=>$_POST['id'],'user_id'=>$user_id)
				);
		echo $movefile["url"];
	}else{
		echo "error";
	}
    die;
}
add_action("wp_ajax_payment_upload_image_action", "payment_upload_image_function");

function store_upload_image_function(){ 
	if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$uploadedfile = $_FILES['file'];
	$upload_overrides = array(
		'test_form' => false
	);
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if($movefile){
		echo $movefile["url"];
	}else{
		echo "error";
	}
    die;
}
add_action("wp_ajax_store_upload_image_action", "store_upload_image_function");

function digital_delete_file_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$id = $_POST['ID'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	if($link->linkContext){
		$digital = $link->linkContext;
		if(file_exists($digital)){
			unlink($digital);
		}
	$result = $wpdb->update($tablename,array(
					'linkContext'=>''),
					array('ID'=>$id,'user_id'=>$user_id)
				);
				
	}
	echo json_encode(array('type'=>'success','message'=>'file removed'));
    die;
}
add_action("wp_ajax_digital_delete_file_action", "digital_delete_file_function");

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

function present_demo_video_hide_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	update_user_meta($user_id,'yogabody_present_demo','');	
	echo json_encode(array('type'=>'success','message'=>'Demo video hide'));
    die;
}
add_action("wp_ajax_present_demo_video_hide", "present_demo_video_hide_function");

function present_demo_video_show_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	update_user_meta($user_id,'yogabody_present_demo','yes');	
	echo json_encode(array('type'=>'success','message'=>'Demo video show'));
    die;
}
add_action("wp_ajax_present_demo_video_show", "present_demo_video_show_function");

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
        include (get_stylesheet_directory() . '/user-profile.php');
        exit;
    }
	if ( array_key_exists( 'attachment', $wp_query->query ) && $wp_query->query['attachment'] == 'reviews' ) {
        include (get_stylesheet_directory() . '/user-reviews.php');
        exit;
    }
    if ( array_key_exists( 'member', $wp_query->query_vars ) ) {
        include (get_stylesheet_directory() . '/user-profile.php');
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

add_filter('registration_errors','access_code_field_validation_function',10,3);

function access_code_field_validation_function($errors, $username, $user_email){
	if (!preg_match("/^[A-Za-z0-9-]+$/", $_POST['user_login'])) {
	$errors->add( 'username_error', __( '<strong>ERROR</strong>: only allowed charcters and numbers.', 'yogabody' ) );	
	}
	/*
	if($_POST['enter_your_access_code']!='yoga2021'){
	$errors->add( 'access_code_error', __( '<strong>ERROR</strong>: Please enter valid Access Code.', 'yogabody' ) );
	}
	*/
    return $errors;

}
function wpuf_after_register_new_function($user_id, $form_id, $form_settings){
	$configration = new stdClass;
	/*echo"<pre>";print_r($_POST);echo"</pre> _POST";
	echo"<pre>";print_r($user_id);echo"</pre> user_id";
	echo"<pre>";print_r($form_id);echo"</pre> form_id";
	echo"<pre>";print_r($form_settings);echo"</pre> form_settings";die(' sdfsdfsdfdsf');*/
	
	if(isset($_POST['instagram_url']) && $_POST['instagram_url']!=''){
		$value = $_POST['instagram_url'];
		if($value){
			if (startsWith($value,"www.instagram.com/")) {
				$value='https://'.$value;
			}
			if (startsWith($value,"instagram.com/")) {
				$value='https://www.'.$value;
			}
			if (strpos($value, 'https://www.instagram.com/') === false && strpos($value, 'https://instagram.com/') === false && startsWith($value,"@")) {
				$value='https://www.instagram.com/'.substr($value, 1);
			}
			if (strpos($value, 'https://www.instagram.com/') === false && strpos($value, 'https://instagram.com/') === false) {
				$value='https://www.instagram.com/'.$value;
			}
		}
		$configration->instagram_url = $value;
	}
	if(isset($_POST['facebook_url']) && $_POST['facebook_url']!=''){
		$value = $_POST['facebook_url'];
		if($value){
			if (startsWith($value,"www.facebook.com/")) {
				$value='https://'.$value;
			}
			if (startsWith($value,"facebook.com/")) {
				$value='https://www.'.$value;
			}
			if (strpos($value, 'https://www.facebook.com/') === false && strpos($value, 'https://facebook.com/') === false && startsWith($value,"@")) {
				$value='https://www.facebook.com/'.substr($value, 1);
			}
			if (strpos($value, 'https://www.facebook.com/') === false && strpos($value, 'https://facebook.com/') === false) {
				$value='https://www.facebook.com/'.$value;
			}
		}
		$configration->facebook_url = $value;
	}
	if(isset($_POST['tiktok_url']) && $_POST['tiktok_url']!=''){
		$value = $_POST['tiktok_url'];
		if($value){
			if (startsWith($value,"www.tiktok.com/")) {
				$value='https://'.$value;
			}
			if (startsWith($value,"tiktok.com/")) {
				$value='https://www.'.$value;
			}
			if (strpos($value, 'https://www.tiktok.com/') === false && strpos($value, 'https://tiktok.com/') === false) {
				$value='https://www.tiktok.com/'.$value;
			}
		}
		$configration->tiktok_url = $value;
	
	}
	if(isset($_POST['youtube_url']) && $_POST['youtube_url']!=''){
		$value = $_POST['youtube_url'];
		if($value){
			if (strpos($value, 'https://www.youtube.com/') === false && strpos($value, 'https://youtube.com') === false) {
				$value='https://www.youtube.com/c/'.$value;
			}
		}
		$configration->youtube_url = $value;
	}
	if(isset($_POST['linkedin_url']) && $_POST['linkedin_url']!=''){
		$value = $_POST['linkedin_url'];
		if($value){
			if (startsWith($value,"www.linkedin.com/")) {
				$value='https://'.$value;
			}
			if (startsWith($value,"linkedin.com/")) {
				$value='https://www.'.$value;
			}
			if (strpos($value, 'https://www.linkedin.com/') === false && strpos($value, 'https://linkedin.com/') === false && startsWith($value,"@")) {
				$value='https://www.linkedin.com/in/'.substr($value, 1);
			}
			if (strpos($value, 'https://www.linkedin.com/') === false && strpos($value, 'https://linkedin.com/') === false) {
				$value='https://www.linkedin.com/in/'.$value;
			}
		}
		$configration->linkedin_url = $value;
	}
	if(isset($_POST['whatsapp_number']) && $_POST['whatsapp_number']!=''){
		$value = $_POST['whatsapp_number'];
		$configration->country_code = $_POST['countryCode'];
		$configration->whatsapp_url = $value;
	}
	if(isset($_POST['email_normal']) && $_POST['email_normal']!=''){
		$value = $_POST['email_normal'];
		$configration->email_url = $value;
	} 
	if(isset($_POST['hiddenprofile']) && $_POST['hiddenprofile']!=''){
		$value = $_POST['hiddenprofile'];
		$configration->profile_picture = $value;
	}
	
	$configration = json_encode($configration);
	update_user_meta($user_id,'yogabody_configration',$configration);
}	
add_action('wpuf_after_register','wpuf_after_register_new_function',10,3);	
/*
function yogabody_community_function($attr,$content){
          return '<div class="yogabody-community slider">'.do_shortcode($content).'</div>';
}
add_shortcode("yogabody_community","yogabody_community_function");

function people_function($attr,$content){
	extract(shortcode_atts(array(
     'user' => '5',
	 'image' => 'https://yogabody.bio/wp-content/uploads/2021/02/Adriana-Adarve.jpeg',	 
    ), $atts));
     return '<div>
				<div class="people-item">
					<div class="people-image">
						<img alt="'.$attr['name'].'" src="'.$attr['image'].'">
					</div>
					<div class="people-name-link">
						<a href="'.$attr['link'].'">
							<span class="people-name">'.$attr['name'].'</span>
							<span class="people-name-icon"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-from-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-from-left fa-w-14 fa-3x"><path fill="currentColor" d="M296 99.5l148.5 148c4.7 4.7 4.7 12.3 0 17L296 412.5c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-115.4H76c-6.6 0-12-5.4-12-12v-10c0-6.6 5.4-12 12-12h311.9L272 123.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.6-4.7 12.2-4.7 16.9 0zM12 448h8c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12h-8C5.4 64 0 69.4 0 76v360c0 6.6 5.4 12 12 12z" class=""></path></svg></span>
						</a>
					</div>
				</div>
			</div>';
}
add_shortcode("people","people_function");
*/

function yogabody_community_function($attr,$content){
          return '<div class="yogabody-community-round slider-round">'.do_shortcode($content).'</div>';
}
add_shortcode("yogabody_community","yogabody_community_function");

function people_function($attr,$content){
	extract(shortcode_atts(array(
     'user' => '5',
	 'image' => 'https://yogabody.bio/wp-content/uploads/2021/02/Adriana-Adarve.jpeg',	 
    ), $attr)); 
     return '<div class="pp-round-item">
				<div class="people-item-round">
					<div class="people-image-round">
						<img alt="'.$attr['name'].'" src="'.$attr['image'].'">
					</div>
					<div class="people-name-link-round">
						<a href="'.$attr['link'].'">
							<span class="people-name-round">'.$attr['name'].'</span>
						</a>
					</div>
				</div>
			</div>';
}
add_shortcode("people","people_function");

add_filter('wpuf_login_redirect', 'login_redirect');
function login_redirect($redirect){
	$user = get_user_by('login', $_POST['log']);
	if(empty($user)) {
		$user = get_user_by('email', $_POST['log']);
	}	
	if( in_array("administrator", $user->roles) ){
		$redirect =	admin_url() ; 
		
	}
	return $redirect;
}
// Function to change email address
function wpb_sender_email( $original_email_address ) {
    return 'training@yogabody.bio';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'YOGABODY.bio';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

function update_embed_type_action_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'embed_type'=>stripcslashes($_POST['embed_type'])),
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
add_action("wp_ajax_update_embed_type_action", "update_embed_type_action_function");

function digital_upload_or_insert_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'digital_product_type'=>stripcslashes($_POST['embed_type'])),
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
add_action("wp_ajax_digital_upload_or_insert", "digital_upload_or_insert_function");

function student_form_language_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'embed_type'=>stripcslashes($_POST['embed_type'])),
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
add_action("wp_ajax_student_form_language", "student_form_language_function");

function update_embed_video_password_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'embed_password'=>stripcslashes($_POST['embed_password'])),
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
add_action("wp_ajax_update_embed_video_password", "update_embed_video_password_function");

function open_video_link_action_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//echo"<pre>";print_r($_POST);echo"</pre>";die('sdfdsfdsf');
	$id = $_POST['id'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	if($link){
		if($link->embed_type=='public'){
			if (strpos($link->url, 'youtube') > 0 || strpos($link->url, 'youtu') > 0) {
				$embeded_url = getYoutubeEmbedUrl($link->url);
			}elseif (strpos($link->url, 'vimeo') > 0) { 
				$videoId = explode("vimeo.com/",$link->url)[1];
				if(strpos($videoId, '&') !== false){
					$videoId = explode("&",$videoId)[0];
				}
				$embeded_url='https://player.vimeo.com/video/'.$videoId;
			}elseif (strpos($link->url, 'twitch') > 0) { 
				$embeded_url = getTwitchEmbedUrl($link->url);
			}else{
				$embeded_url = $link->url;	
			}	
			echo json_encode(array('type'=>'success','link'=>$link,'embeded_url'=>$embeded_url));
			die;
		}else{
			$form_html = '<div class="password-form">';
			//$form_html.='<div class="pass-heading"><h5>Verify password to open this video</h5></div>';
			$form_html.='<form name="video_password" id="video_password_'.$link->ID.'" class="video-password">';
			$form_html.='<div class="col-md-12">
							<div id="div_id_'.$link->ID.'_verify_video_pass" class="form-group ">
								<label for="verify_video_pass_'.$link->ID.'" class="control-label verify_video_pass requiredField">Password Required</label>
								<div class="controls verify_video_pass_input">
									<input autocomplete="off" autocorrect="off" type="text" name="verify_video_pass" id="verify_video_pass_'.$link->ID.'" class="textinput form-control" value="" placeholder="Enter Video Password" required="true">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div id="div_id_stock_'.$link->ID.'_edit_review_submit" class="form-group ">
								<div class="controls verify_video_submit_input">
									<button type="submit" name="verify_video_submit" data-id="'.$link->ID.'" id="verify_video_submit" class="verify_pass_btn form-control" >
										<img alt="Watch video" src="https://yogabody.bio/wp-content/uploads/2021/02/video-play-button.png" />
									</button>
								</div>
							</div>
						</div>';
			$form_html.='</form>';
			$form_html.='</div>';
			echo json_encode(array('type'=>'secure','messsage'=>'password needed','form_html'=>$form_html));
			die;
		}	
	}else{
		echo json_encode(array('type'=>'error','message'=>'no video link found'));
		die;
	}	
}
add_action("wp_ajax_open_video_link_action", "open_video_link_action_function");
add_action("wp_ajax_nopriv_open_video_link_action", "open_video_link_action_function");

function verify_video_password_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'icons';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//echo"<pre>";print_r($_POST);echo"</pre>";die('sdfdsfdsf');
	$id = $_POST['id'];
	$pass = $_POST['video_pass'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id AND embed_password='$pass'");
	if($link){
		if (strpos($link->url, 'youtube') > 0 || strpos($link->url, 'youtu') > 0) {
			$embeded_url = getYoutubeEmbedUrl($link->url);
		}elseif (strpos($link->url, 'vimeo') > 0) { 
			$videoId = explode("vimeo.com/",$link->url)[1];
			if(strpos($videoId, '&') !== false){
				$videoId = explode("&",$videoId)[0];
			}
			$embeded_url='https://player.vimeo.com/video/'.$videoId;
		}elseif (strpos($link->url, 'twitch') > 0) { 
			$embeded_url = getTwitchEmbedUrl($link->url);
		}else{
			$embeded_url = $link->url;	
		}	
		echo json_encode(array('type'=>'success','link'=>$link,'embeded_url'=>$embeded_url));
		die;
	}else{
		echo json_encode(array('type'=>'error','message'=>'Video Password not matched!'));
		die;
	}	
}
add_action("wp_ajax_verify_video_password", "verify_video_password_function");
add_action("wp_ajax_nopriv_verify_video_password", "verify_video_password_function");

function getTwitchEmbedUrl($url){
    $link_array = explode('/',$url);
    $twitchID = end($link_array);
    return "https://player.twitch.tv/?video=$twitchID&parent=yogabody.bio";
}
function getYoutubeEmbedUrl($url){
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
	//echo"<pre>";print_r($youtube_id);echo"</pre>";
	if($youtube_id==''){
		if (preg_match($shortUrlRegex, $url, $matches)) {
			$youtube_id = $matches[count($matches) - 1];
		}
	}
	//echo"<pre>";print_r($youtube_id);echo"</pre>";die;
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}
add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){
  $fn = ABSPATH . '/mail.log'; // say you've got a mail.log file in your server root
  $fp = fopen($fn, 'a');
  fputs($fp, "Mailer Error: " . $wp_error->get_error_message() ."\n");
  fclose($fp);
}
add_action( 'phpmailer_init', 'add_email_signature_hook_phpmailer_init' );

function add_email_signature_hook_phpmailer_init($mobj) {

	// Get the signature
	$sig = '<a href ="https://yogabody.bio/" style="color: red;text-align:center;">Unsubscribe here.</a>';

	// Get the body
	$body = ($mobj->ContentType == "text/plain") ? $mobj->Body : $mobj->AltBody;

	// Add our signature
	if (!preg_match("/^-- /",$body)) $body .= "\n-- \n".$sig;

	// Store the new body
	if ($mobj->ContentType == "text/plain") {
		$mobj->Body = $body;
	} else {
		$mobj->AltBody = $body;
	}

}
add_filter('wp_mail','redirect_mails', 10,1);
function redirect_mails($args){
    $to = $args['to'];
    //$args['subject']
    $body = $args['message'];
    //$args['headers']
    //$args['attachments']
    $sig = '<div class="signature" style="text-align:center;"><a href=href="*|UNSUB:'.get_site_url().'/unsub|*" style="color: red;text-align:center;font-weight:bold;" >Unsubscribe here.</a></div>';
	$body .= "\n \n".$sig;
    $args['message']=$body;
    return $args;
}

add_action('admin_menu', 'add_email_signature_options_menu');
function add_email_signature_options_menu() {
	add_options_page('Zoom Event Invite Template', 'Zoom Event Invite Template', 'manage_options', 'zoom-event-invite-template', 'zoom_event_invite_template_function');
}
function zoom_event_invite_template_function() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	$distribution = get_option('zoom_event_template_invite_email');
	$subject = get_option('zoom_event_template_invite_email_subject');
	?>
	<h2>Zoom Invite Email Template</h2>
	<form method="post" action="options.php">
		<p><b>Subject</b></p> 
		<p>
		<textarea rows="2" class="invite_email_textarea" name="invite_email_subject"><?php echo $subject; ?></textarea>
		</p>
		<p><b>Email body</b></p>
		<p>
		<?php
		/*wp_editor(
			$distribution,
			'zoom_event_template_invite_email',
			array(
			  'media_buttons' => false,
			  'textarea_rows' => 8,
			  'tabindex' => 4,
			  'tinymce' => array(
				'theme_advanced_buttons1' => 'bold, italic, ul, pH, temp',
			  ),
			)
		); */
		?>
		<textarea rows="15" class="invite_email_textarea" name="invite_email"><?php echo $distribution; ?></textarea>
		</p>
		<p><b>Variables : </b>{{topic}}, {{description}}, {{meetingurl}}, {{password}}</p>
		<div id="zoom_invite_message">Email Template Updated Successfully</div>
	    <p class="submit">
	    <input id="zoom_invite_email" type="submit" class="button-primary" value="Save Changes" />
	    </p>
	</form>
	
	<?php
}
function update_zoom_event_invite_email_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	//echo"<pre>";print_r($_POST);echo"</pre>";die;
	$invite_template = $_POST['invite_template'];
	$invite_template_subject = $_POST['invite_email_subject'];
	update_option('zoom_event_template_invite_email',$invite_template);
	update_option('zoom_event_template_invite_email_subject',$invite_template_subject);
	
    echo json_encode(array('type'=>'success','message'=>'Success'));
    die;
}
add_action("wp_ajax_update_zoom_event_invite_email_action", "update_zoom_event_invite_email_function");


/* Zoom event cpt start */

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'ZoomEvents', 'Post Type General Name', 'yogabody' ),
        'singular_name'       => _x( 'ZoomEvent', 'Post Type Singular Name', 'yogabody' ),
        'menu_name'           => __( 'ZoomEvents', 'yogabody' ),
        'parent_item_colon'   => __( 'Parent ZoomEvent', 'yogabody' ),
        'all_items'           => __( 'All ZoomEvents', 'yogabody' ),
        'view_item'           => __( 'View ZoomEvent', 'yogabody' ),
        'add_new_item'        => __( 'Add New ZoomEvent', 'yogabody' ),
        'add_new'             => __( 'Add New', 'yogabody' ),
        'edit_item'           => __( 'Edit ZoomEvent', 'yogabody' ),
        'update_item'         => __( 'Update ZoomEvent', 'yogabody' ),
        'search_items'        => __( 'Search ZoomEvent', 'yogabody' ),
        'not_found'           => __( 'Not Found', 'yogabody' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'yogabody' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'zoomevents', 'yogabody' ),
        'description'         => __( 'ZoomEvent create and store', 'yogabody' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields','page-attributes', ),        
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'genres' ),        
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
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'zoomevents', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

add_action('admin_post_zoom_user_meeting', 'save_zoom_meeting');

function save_zoom_meeting()
{
	
	
	if($_POST)
	 {		
		$user_id = get_current_user_id();
	 
		$userToken = get_user_meta($user_id,'access_token',true);		
		
		$ut = isset($userToken['access_token'])?$userToken['access_token']:0;
		
		$accessToken =trim($ut);		
		
		//$start_time = gmDate("Y-m-d\TH:i:s",strtotime($_POST['start_time']));		
		$date = $_POST['Start_Date'];
		$time=$_POST['Start_Time'];
		$start_time = date('Y-m-d\TH:i:s', strtotime("$date $time"));
		$password = $_POST['password'];

		 try {
		
				$created_at = gmDate("Y-m-d\TH:i:s",strtotime($_POST['start_time']));
				
				$client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
				
				$response = $client->request('POST', '/v2/users/me/meetings', [
						"headers" => [
							"Authorization" => "Bearer $accessToken"
						],
						'json' => [
							"topic" => $_POST['topic'],
							"timezone" => $_POST['timeZone'],				
							"type" => 2,                              
							"start_time" => $start_time, 	//"2020-06-24T20:30:00",    // meeting start time
							"duration" => $_POST['Time_Duration'],                       // 30 minutes
							"password" => $_POST['password']                   // meeting password
						],
					]);
				 $data = json_decode($response->getBody());			
				 
				 $args = array('post_type'=> 'zoomevents','post_status' => 'publish', 'post_title' => $_POST['topic'],'post_content'=>$_POST['agenda']);
				 
				 $pid = wp_insert_post($args);
				 
				 if($pid){
					 
					add_post_meta($pid,'startdatetime', $start_time);
					 
					add_post_meta($pid,'duration',$_POST['Time_Duration']);
					 
					add_post_meta($pid,'zoomurl',$data->join_url);
					
					add_post_meta($pid,'password',$_POST['password']);
					
					add_post_meta($pid,'responseData',$data);				
					
						
					$url = get_site_url().'/events/';
						
					wp_redirect( $url );
							 
					exit;
					 
				 }
			 
			 
			}
			 catch(Exception $e) {
					echo $e->getMessage();
				  	$url = get_site_url().'/events/';
					wp_redirect( $url );
					exit;
				}
		
	}
}



add_action('admin_post_zoom_user_meeting_invitation', 'zoom_meeting_invitation');

function zoom_meeting_invitation()
{	
	$user_id = get_current_user_id();
	
	$emails = explode(',',$_POST['invite_people']);
	
	$topic = get_the_title( $_POST['post_id'] );	
	
	$description = get_post_field('post_content', $_POST['post_id']);	
	
	$meetingURL = get_post_meta( $_POST['post_id'],'zoomurl',true);
	$password = get_post_meta( $_POST['post_id'],'password',true);
	
	$invite_email = get_option('zoom_event_template_invite_email');
	$invite_email_subject = get_option('zoom_event_template_invite_email_subject');
	
	$invite_email = str_replace('{{topic}}',$topic,$invite_email);
	$invite_email = str_replace('{{description}}',$description,$invite_email);
	$invite_email = str_replace('{{meetingurl}}',$meetingURL,$invite_email);
	$invite_email = str_replace('{{password}}',$password,$invite_email);
	
	
	for($i=0;$i<count($emails);$i++){
	
		$mail = new PHPMailer();
		//$mail->IsSMTP();
		$mail->Host = "yogabody.bio";		
		$mail->From = "info@yogabody.bio";
		$mail->FromName = "YogaBody";
		$mail->AddAddress($emails[$i]);		
		$mail->IsHTML(true);
		
		/*$message ="<br><strong>Welcome to YogaBody,</strong>";
		$message.="<br><p>We are here to help you with your fitness goals. Let's get fittest with new normal and start a safe work out at home.<br>
						YogaBody will help you maintain your fitness regime and our expert yoga instructors will help you grow happy and healthy
						everyday.</p>";
		$message.="<br>Topic : ".$topic;
		$message.="<br>Description : ".$description;
		$message.="<br>MeetingURL : ".$meetingURL; */

		//$mail->Subject = "Yoga class";
		$mail->Subject = $invite_email_subject;
		$mail->Body = "$invite_email";
		
		if(!$mail->Send())
		{
		 echo "Message could not be sent. <p>";
		$url = get_site_url().'/events?send=fail';
		wp_redirect( $url );
		exit;
		}
		
		
	}
	
	$url = get_site_url().'/events?send=sucess';
	wp_redirect( $url );
	exit;
}


add_action('admin_post_zoom_user_disconnect', 'zoom_user_disconnect');
function zoom_user_disconnect()
{
	
	$user_id = get_current_user_id();

	$userToken = get_user_meta($user_id,'access_token',true);
	

	$ut = isset($userToken['access_token'])?$userToken['access_token']:0;

	$accessToken =trim($ut);
	try{
		$client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
		$response = $client->request('POST', '/oauth/revoke', [
			"headers" => [
				"Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
			],
			'form_params' => [			
				"token" => $accessToken
			],
		]);
		
		delete_user_meta( $user_id, 'access_token');
		$url = get_site_url().'/events/';
		wp_redirect( $url );
		exit;
	}
	catch(Exception $e) {
		$url = get_site_url().'/events/';
		wp_redirect( $url );
		exit;
	}
	
	
	
}
/* Zoom event cpt end */