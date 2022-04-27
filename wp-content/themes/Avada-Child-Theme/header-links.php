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
$current_user = wp_get_current_user();
$user_id = get_current_user_id();
$configration = get_user_meta($user_id,'yogabody_configration',true);
if(empty($configration)){
	
}else{
$configration = json_decode($configration);
}
if(isset($configration->profile_picture) && $configration->profile_picture!=''){
	$profile_picture = $configration->profile_picture;
}else{
	$profile_picture = get_site_url().'/wp-content/uploads/2021/02/default_profile_picture.png';
}	
?>
<body <?php body_class(); ?> <?= $datapreview ?> data-page-<?= $page_slug ?> >
<?php wp_body_open(); ?>
<div class="body__inner">
	<div id="React--Root"></div>
	<div class="main-wrap">
		<section class="admin-sidebar sidebar" data-sidebar>
			<div class="sidebar-logo-wrap">
				<div class="login nav-item sidebar__user">
					<i></i><a class="sidebar__user__avatar" href="<?= get_site_url(); ?>/admin"><span class="img-circle"><img src="<?= $profile_picture ?>"></span></a>
					<div class="sub-nav" data-perfect-scroll>
						<div class="divider"><?= $current_user->user_login ?></div>
						<ul>
							<li class="sub-nav-item"><a class="" href="<?= get_site_url(); ?>/admin/account">
								My Account
								</a>
							</li>
							<li class="sub-nav-item"><a href="<?php echo wp_logout_url( home_url() ); ?>" data-logout>
								Logout
								</a>
							</li>
						</ul>
					<?php /* <div class="divider">Trees</div>
						<ul>
							<li class="sub-nav-item active primary" data-tree-id="11821132">
								<a  class="active-account" href="https://yogabody.bio/admin" >
									@<?= $current_user->user_login ?>
									<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 10.02 9.55">
										<path fill="#fff800" d="M5,0c-.7,0-.9,3-1.4,3.3S.21,3,0,3.6,2.51,5.3,2.71,6s-1.4,3.1-.8,3.5S4.31,7.6,5,7.6s2.6,2.3,3.1,1.9-1-2.9-.8-3.5,2.9-1.7,2.7-2.4-3.1.1-3.6-.3S5.61,0,5,0Z" />
									</svg>
								</a>
							</li>
						</ul> */ ?>
					</div>
				</div>
				<a title="Help" class="support-icon" href="<?= get_the_permalink(69) ?>" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Question-Mark.png" />
				</a> 
				<a title="Contact" class="support-icon" href="<?= get_the_permalink(72) ?>" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Mail.png" />
				</a>
				
				<!-- zoom menu-->
				<a title="Zoom" class="support-icon" href="<?= get_site_url() ?>/events" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Zoom.png" />
				</a>
				<?php /*
				<!-- zoom menu close -->
				<a title="Courses" class="support-icon" href="https://www.yogateacherscollege.com/" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Graduation.png" />
				</a>
				<a title="Store" class="support-icon" href="https://shop.yogabody.com/" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Shopping-Cart.png" />
				</a>
				*/ ?>
				
				
			</div>
			<div class="sidebar__icons">
				<?php /*
				<div class="nav-item sidebar__icons--support">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 18">
						<path d="M16.5 0h-14C1.1 0 0 1.1 0 2.5v10C0 13.9 1.1 15 2.5 15H4v2.5c0 .2.1.4.3.4 0 .1.1.1.2.1s.2 0 .3-.1L8.7 15h7.8c1.4 0 2.5-1.1 2.5-2.5v-10C19 1.1 17.9 0 16.5 0zM18 12.5c0 .8-.7 1.5-1.5 1.5h-8c-.1 0-.2 0-.3.1L5 16.5v-2c0-.3-.2-.5-.5-.5h-2c-.8 0-1.5-.7-1.5-1.5v-10C1 1.7 1.7 1 2.5 1h14c.8 0 1.5.7 1.5 1.5v10z"/>
						<path d="M9.6 2.9h-.2C8.1 2.9 7 4 7 5.4v.4c0 .3.2.5.5.5s.5-.2.5-.5v-.4c0-.8.6-1.5 1.4-1.5h.3c.8 0 1.4.7 1.4 1.5 0 .5-.2.9-.5 1.1l-1 .8c-.4.2-.6.6-.6 1v1.1c0 .3.2.5.5.5s.5-.2.5-.5V8.3c0-.1 0-.2.1-.2l1-.8c.6-.5.9-1.2.9-1.9 0-1.4-1.1-2.5-2.4-2.5zm.4 7.9c-.2-.2-.7-.2-.9 0-.1.1-.2.1-.2.2s-.1.2-.1.2c0 .2.1.3.2.5s.3.2.5.2.3-.1.5-.2c.1-.1.2-.3.2-.5 0-.1 0-.2-.1-.2 0-.1-.1-.1-.1-.2z"/>
					</svg>
					<div class="sub-nav">
						<div class="divider">Support</div>
						<ul>
							<li class="sub-nav-item"><a target="_blank" rel="noopener noreferrer" href="#">
								Help Topics
								</a>
							</li>
							<li class="sub-nav-item"><a target="_blank" rel="noopener noreferrer" href="#">
								Get Started
								</a>
							</li>
							<li class="sub-nav-item" id="freshdesk-qn-button">
								<p>Ask A Question</p>
							</li>
						</ul>
					</div>
				</div>
				<?php */ ?>
				<?php /*
				<div class="nav-item sidebar__icons--headway">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18">
						<path d="M18.9 5.2l-.8-.2V.5c0-.2-.1-.4-.3-.4-.2-.1-.4-.1-.5 0C13.6 2.4 9.9 3.7 9.1 4c-.2-.2-.4-.3-.6-.3H2.9C1.3 3.7 0 5 0 6.6v3.1c0 1.5 1.2 2.8 2.8 2.8L2 17.4c0 .1 0 .3.1.4.1.1.3.2.4.2h2.8c.2 0 .4-.1.5-.4l1.5-5.1h1.2c.2 0 .5-.1.7-.2.8.2 4.6 1.5 8.2 3.9.1.1.2.1.3.1.1 0 .2 0 .2-.1.2-.1.3-.3.3-.4v-4.5l.8-.2c.7-.2 1.1-.7 1.1-1.4v-3c-.1-.8-.6-1.3-1.2-1.5zM4.9 17H3.1l.7-4.4h2.4L4.9 17zm3.5-5.4H2.9c-1 0-1.9-.8-1.9-1.9V6.6c0-1 .8-1.9 1.9-1.9h5.6c.1 0 .2.1.2.2v6.5c-.1.1-.2.2-.3.2zm8.7 3.3c-3.3-2-6.4-3.1-7.5-3.4V4.8c1-.3 4.2-1.5 7.5-3.4v13.5zM19 9.7c0 .2-.1.4-.4.4l-.5.1V6.1l.5.1c.2 0 .4.2.4.4v3.1z"/>
					</svg>
				</div>
				*/ ?>
			</div>
		</section>
		<section class="secondary admin has-toolbar">
			<div id="React--Toolbar" data-linktree-url="<?= get_site_url(); ?>/<?= $current_user->user_login ?>">
				<div class="toolbar">
					<div class="toolbar__inner">
						<div class="bio-and-review">
							<div class="bio-link">
								<span class="bio-link-title">Bio Link:</span>
								<div class="bio-link-url">
									<a href="<?= get_site_url(); ?>/<?= $current_user->user_login ?>" target="_blank" rel="noreferrer"><?= get_site_url(); ?>/<?= $current_user->user_login ?></a>
									<input type="hidden" class="hiddenUrl" value="<?php echo get_site_url().'/'.$current_user->user_login ; ?>" />
								</div>
							</div>
							<div class="review-link">
								<span class="bio-link-title">Reviews:</span>
								<div class="bio-link-url">
									<a href="<?=get_site_url()?>/<?= $current_user->user_login ?>/reviews" target="_blank" rel="noreferrer"><?=get_site_url()?>/<?= $current_user->user_login ?>/reviews</a>
									<input type="hidden" class="hiddenRwUrl" value="<?=get_site_url()?>/<?= $current_user->user_login ?>/reviews" />
								</div>
							</div>
						</div>
						<button id="shareButton" data-popper-reference="data-popper-reference" class="toolbar__button">Copy</button>
						<div class="sharedisplay" data-popper="data-popper" data-popper-theme="interface" data-popper-visible="false" data-popper-animation="fade" data-popper-reference-hidden="true" data-popper-escaped="true" data-popper-placement="bottom-end" style="position: absolute;top: 45px;right: 10px;">
							<ul>
								<li class="CpyTClipb" tabindex="0">Copy my Bio URL</li> 
							    <li class="CpyRwClipb" tabindex="0">Copy my Review URL</li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="sc-dUrnRO dEIJXb sc-gyUeRy iBqFyl">
					<div class="sc-httYMd yQeju">
						<svg class="sc-dkIXFM cXJGfm sc-fHYxKZ dnKCVK" viewBox="0 0 24 24">
							<path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm5.5 16.1c.4.4.4 1 0 1.4s-1 .4-1.4 0l-4.2-4.2-4.2 4.2c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l4.2-4.2-4.2-4.2c-.4-.4-.4-1.1 0-1.4.4-.3 1.1-.3 1.5 0l4.2 4.3 4.2-4.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L13.4 12l4.1 4.1z"></path>
						</svg>
						<div class="sc-fWPcDo cgpajZ">
							<svg viewBox="0 0 137 25" height="20">
								<path d="m37.1 24.4v-20.8c0-0.3 0.2-0.6 0.6-0.6h1.9c0.3 0 0.6 0.2 0.6 0.6v20.9c0 0.3-0.2 0.6-0.601 0.6h-1.899c-0.3-0.1-0.6-0.3-0.6-0.7z" fill="#3D3B3C"></path>
								<path d="m44.3 5.5v-2c0-0.3 0.2-0.6 0.6-0.6h2.1c0.3 0 0.6 0.2 0.6 0.6v2c0 0.3-0.2 0.6-0.6 0.6h-2.1c-0.4 0-0.6-0.2-0.6-0.6zm0.1 18.9v-14.8c0-0.3 0.3-0.6 0.6-0.6h1.8c0.3 0 0.6 0.2 0.6 0.6v14.9c0 0.3-0.199 0.6-0.6 0.6h-1.8c-0.3-0.1-0.6-0.3-0.6-0.7z" fill="#3D3B3C"></path>
								<path d="m51.5 24.4v-14.8c0-0.3 0.2-0.6 0.6-0.6h1.8c0.3 0 0.6 0.2 0.6 0.6v1h0.1c0.6-0.8 1.6-1.5 3.1-1.9h0.1c2.3-0.3 4.1 0.2 5.3 1.5 1 1.1 1.601 2.5 1.601 4.399v9.899c0 0.3-0.2 0.601-0.601 0.601h-1.8c-0.3 0-0.6-0.199-0.6-0.601v-9.101c0-2.699-1.101-4.101-3.4-4.101-1.1 0-2.1 0.3-2.8 1s-1 1.601-1 2.7v9.5c0 0.3-0.2 0.6-0.601 0.6h-1.8c-0.399-0.096-0.599-0.296-0.599-0.696z" fill="#3D3B3C"></path>
								<path d="m68.2 24.4v-20.8c0-0.3 0.2-0.6 0.6-0.6h1.8c0.3 0 0.6 0.2 0.6 0.6v12.6h0.1l6.3-6.9c0-0.2 0.2-0.3 0.3-0.3h2.3c0.5 0 0.7 0.6 0.399 0.9l-4.599 5.2c-0.2 0.2-0.2 0.5 0 0.7l5.6 8.4c0.2 0.399 0 0.899-0.5 0.899h-2c-0.199 0-0.398-0.101-0.5-0.199l-5.1-7.6h-0.1l-2.1 2.3c-0.1 0.102-0.1 0.2-0.1 0.4v4.6c0 0.3-0.2 0.6-0.6 0.6h-1.8c-0.3-0.2-0.6-0.4-0.6-0.8z" fill="#3D3B3C"></path>
								<path d="M85.3,20v-8.4h-1.8c-0.3,0-0.602-0.2-0.602-0.6V9.6C83,9.3,83.2,9,83.5,9h1.9V5.7   c0-0.3,0.199-0.6,0.601-0.6h1.7c0.3,0,0.6,0.2,0.6,0.6V9h3.4c0.3,0,0.6,0.2,0.6,0.6V11c0,0.3-0.199,0.6-0.6,0.6h-3.4v8.1   c0,0.899,0.1,1.5,0.4,1.899C89,22,89.5,22.2,90.3,22.2H91c0.3,0,0.6,0.2,0.6,0.6v1.7c0,0.3-0.199,0.6-0.6,0.6h-0.9   c-1.699,0-2.898-0.398-3.699-1.199C85.7,22.9,85.3,21.7,85.3,20z" fill="#3D3B3C"></path>
								<path d="M95.5,24.4V9.6C95.5,9.3,95.7,9,96,9h1.7c0.3,0,0.6,0.2,0.6,0.6v1.2H98.4c0.301-0.6,0.801-1.1,1.399-1.5   c0.601-0.4,1.2-0.5,1.9-0.5c0.3,0,0.698,0,1,0.1C103,9,103.1,9.3,103.1,9.5l-0.3,1.8c-0.1,0.3-0.399,0.5-0.7,0.4   c-0.199,0-0.398-0.1-0.699-0.1c-1.899,0-2.899,1.3-2.899,3.9v8.8c0,0.3-0.2,0.601-0.601,0.601H96C95.7,25,95.5,24.8,95.5,24.4z" fill="#3D3B3C"></path>
								<path d="m116.6 19.8 1.301 1c0.199 0.2 0.301 0.5 0.101 0.7-0.601 0.9-1.399 1.7-2.3 2.4-1.102 0.699-2.5 1.1-4 1.1-2.2 0-4-0.8-5.4-2.3s-2.1-3.601-2.1-6.101c0-2.601 0.699-4.601 2.1-6.101s3.1-2.3 5.301-2.3c2.101 0 3.899 0.8 5.199 2.3 1.301 1.5 2 3.601 2 6.2v0.302c0 0.3-0.199 0.6-0.6 0.6h-10.4c-0.3 0-0.6 0.301-0.6 0.602 0.1 1.1 0.5 2.1 1.1 2.898 0.801 0.9 1.801 1.4 3.2 1.4 0.7 0 1.3-0.1 1.8-0.3s1-0.5 1.301-0.8c0.399-0.4 0.601-0.7 0.799-0.9 0.102-0.1 0.201-0.3 0.302-0.4 0.196-0.4 0.596-0.5 0.896-0.3zm-9.4-4.7h8.6c-0.1-1.199-0.399-2.3-1.1-3.1-0.7-0.9-1.802-1.3-3.2-1.3-1.3 0-2.4 0.5-3.102 1.4-0.798 0.9-1.198 1.9-1.198 3z" fill="#3D3B3C"></path>
								<path d="m134 19.8 1.3 1c0.2 0.2 0.3 0.5 0.101 0.7-0.601 0.9-1.399 1.7-2.301 2.4-1.1 0.699-2.5 1.1-4 1.1-2.199 0-4-0.8-5.398-2.3-1.4-1.5-2.102-3.601-2.102-6.101 0-2.601 0.7-4.601 2.102-6.101 1.398-1.5 3.1-2.3 5.3-2.3 2.101 0 3.899 0.8 5.2 2.3 1.3 1.5 2 3.601 2 6.2v0.302c0 0.3-0.2 0.6-0.602 0.6h-10.4c-0.302 0-0.601 0.301-0.601 0.602 0.101 1.1 0.5 2.1 1.101 2.898 0.8 0.9 1.8 1.4 3.198 1.4 0.701 0 1.302-0.1 1.802-0.3s1-0.5 1.3-0.8c0.398-0.4 0.6-0.7 0.8-0.9 0.101-0.1 0.2-0.3 0.3-0.4 0.2-0.4 0.6-0.5 0.9-0.3zm-9.4-4.7h8.602c-0.102-1.199-0.4-2.3-1.102-3.1-0.699-0.9-1.8-1.3-3.199-1.3-1.301 0-2.399 0.5-3.101 1.4-0.8 0.9-1.2 1.9-1.2 3z" fill="#3D3B3C"></path>
								<path d="m11 0.7c-0.5-0.9-1.8-0.9-2.3 0l-8.6 15.6c-0.4 0.8 0.2 1.7 1.1 1.7h5.8v5.9c0 0.6 0.5 1.1 1.1 1.1h3.4c0.6 0 1.1-0.5 1.1-1.1v-5.9h-1.6c-0.7 0-1.2-0.5-1.3-1.1 0-0.2 0-0.4 0.1-0.602l4.8-8.7-3.6-6.898z" fill="#39E09B"></path>
								<path d="m18.6 0.7c0.5-0.9 1.8-0.9 2.3 0l8.6 15.6c0.4 0.8-0.2 1.7-1.1 1.7h-5.7v5.9c0 0.6-0.5 1.1-1.101 1.1h-3.599c-0.6 0-1.1-0.5-1.1-1.1v-5.9h1.6c0.7 0 1.2-0.5 1.3-1.1 0-0.2 0-0.4-0.1-0.602l-4.8-8.698 3.7-6.9z" fill="#28BF7B"></path>
							</svg>
							<strong>neo</strong>
							<p><?= get_site_url(); ?>/<?= $current_user->user_login ?></p>
							<div class="qr" id="qrcode_9"></div>
							<button onclick="DcodeQR();" class="button black fill">Save image</button>
						</div>
					</div>
				</div>
			</div>
			<section class="preview open section__inner hide-mobile" data-preview>
				<div class="inner">
					<div id="React--Preview" class="preview-wrap" data-scale-container="" style="transform: scale(0.660053) translateX(-50%) translateY(-50%) translate3d(0px, 0px, 0px);">
						<div style="display:none;" class="sc-eishCr cjMLkU sc-bDyUhQ ggehpb"></div>
						<div class="sc-ddSpiK kRTUlt">
							<iframe id="preview_iframe" src="<?= get_site_url(); ?>/<?= $current_user->user_login ?>" height="100%" width="100%"></iframe>
						</div>
					</div>
				</div>
			</section>
		</section>
		<div id="React--Navigation">
			<div class="sc-fubCfw dUaVBw">
				<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA <?php echo (($page_slug=='admin') ? 'active' : '' ); ?>" href="<?= get_the_permalink(33) ?>" data-testid="Route">Links</a>
				<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA <?php echo (($page_slug=='appearance') ? 'active' : '' ); ?>" href="<?= get_the_permalink(35) ?>" data-testid="Route">Photo & Theme</a>
				<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA <?php echo (($page_slug=='my-reviews') ? 'active' : '' ); ?>" href="<?= get_the_permalink(257) ?>" data-testid="Route">Reviews</a>
			<?php /*	<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA <?php echo (($page_slug=='settings') ? 'active' : '' ); ?>" href="<?= get_the_permalink(37) ?>" data-testid="Route">Settings</a> */ ?>
			</div>
		</div>