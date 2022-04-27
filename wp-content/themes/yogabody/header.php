<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yoga_Body
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php
global $post;
$page_slug = $post->post_name;
if($page_slug=='account'){
$datapreview = '';	
}else{
$datapreview = 'data-has-preview';	
}
?>
<body <?php body_class(); ?> <?= $datapreview ?> data-page-<?= $page_slug ?> >
<?php wp_body_open(); ?>
