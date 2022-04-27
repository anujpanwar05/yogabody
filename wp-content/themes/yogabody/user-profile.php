<!DOCTYPE html>
<html>
<?php
global $wp,$wpdb;
$url = home_url( $wp->request );
$user_login = end(explode("/", $url));
$current_user = get_user_by('login',$user_login);
if($current_user){
$user_id = $current_user->ID;
$links = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}treelinks WHERE (user_id = $user_id AND title!='' AND url!='' AND status=1) OR (user_id = $user_id AND paypal_email!='' AND title!='' AND class_price!='' AND price_currency!='' AND status=1 AND class_product_name!='') ORDER BY position DESC");
$configration = get_user_meta($user_id,'yogabody_configration',true);
if(empty($configration)){
	
}else{
$configration = json_decode($configration);
}
}else{
wp_redirect(get_site_url());
exit;
}
$current_ip = get_the_user_ip();
$viewer_ip = get_user_meta($user_id,'yogabody_viewer_ip',true);
$views = get_user_meta($user_id,'yogabody_count_views',true);
if(empty($views)){
	$views = 0;
}
if($current_ip!=$viewer_ip){
	update_user_meta($user_id,'yogabody_count_views',($views+1));	
	update_user_meta($user_id,'yogabody_viewer_ip',$current_ip);
}
?>
    <head>
        <meta name="viewport" content="width=device-width"/>
        <meta charSet="utf-8"/>
        <meta name="description" content="Yogabody. Make your link do more."/>
        <meta property="profile:username" content="<?= $current_user->user_login ?>"/>
        <meta name="twitter:title" content="@<?= $current_user->user_login ?>"/>
        <meta name="twitter:description" content="Yogabody. Make your link do more."/>
        <meta name="twitter:image" content=""/>
        <link rel="canonical" href="<?= get_site_url() ?>/<?= $current_user->user_login ?>"/>
        <meta charSet="UTF-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <title><?= $current_user->user_login ?> | Bio</title>
        <meta name="next-head-count" content="8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
		.iVJTpz,.jmmAHk {
			margin: auto;
			height: 28px;
			display: block;
			object-fit: contain;
			object-position: initial;
			-webkit-filter: none;
			filter: none;
		}
		a.sc-eCssSg.kZodAG {
			margin: 0 auto;
		}
		.fIUiIW {
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), linear-gradient(
		125deg
		, rgb(11, 175, 255), rgb(57, 224, 155) 50%, rgb(255, 194, 19));
		}
		.kemkso {
			height: 100vh;
			width: 100%;
			place-content: center space-between;
			-webkit-box-pack: justify;
			flex-direction: column;
			padding-top: 40px;
			padding-bottom: 40px;
		}
		.ezijY {
			max-width: 608px;
			width: 90%;
			align-self: center;
		}
		.jltFOj {
			margin-top: 128px;
		}
		.bdimPo {
			width: 36px;
			margin-left: auto;
			margin-right: auto;
		}
		.cvknPN {
			fill: currentcolor;
			color: white;
			width: 32px;
			height: 32px;
		}
		.OaoQn {
			margin-top: 8px;
			margin-bottom: 8px;
		}
		.da-DSlr {
			margin: 0px;
			color: white;
			text-align: center;
			font-weight: 700;
			font-size: 20px;
			line-height: 1.6;
		}
		.hJlxfu {
			margin-bottom: 24px;
		}
		.hsiJoh {
			margin: 0px;
			color: white;
			text-align: center;
			font-weight: 500;
			font-size: 16px;
			line-height: 1.5;
		}
		.hQPPDr {
			margin-bottom: 12px;
		}
		.jVFUPG {
			border: 1px solid rgba(255, 255, 255, 0.5);
			display: inline-flex;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			height: 40px;
			padding-left: 24px;
			padding-right: 24px;
			font-size: 16px;
			font-family: inherit;
			font-weight: inherit;
			width: 100%;
			background: transparent;
			border-radius: 8px;
			transition: border 0.2s ease 0s;
			color: rgb(255, 255, 255);
			cursor: pointer;
			appearance: none;
			text-align: center;
			box-sizing: border-box;
		}
		.fqaRiQ {
			border: none rgba(255, 255, 255, 0.5);
			display: inline-flex;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			height: 40px;
			padding-left: 24px;
			padding-right: 24px;
			font-size: 16px;
			font-family: inherit;
			font-weight: inherit;
			width: 100%;
			background: transparent;
			border-radius: 8px;
			transition: border 0.2s ease 0s;
			color: rgb(255, 255, 255);
			cursor: pointer;
			appearance: none;
			text-align: center;
			box-sizing: border-box;
		}
		.dBYvAk {
			height: 16px;
		}
		.ikrHx {
			fill: currentcolor;
			display: block;
			height: 100%;
			width: 100%;
		}
		.llgrqs {
		margin-left: 12px;
		margin-right: 12px;
		max-width: 100%;
		}
		.ciojAP {
			margin-top: 8px;
			padding-left: 40px;
			padding-right: 40px;
		}
		.fxfyLX {
			cursor: default;
		}
		.hzGaqJ {
			position: fixed;
			left: 0px;
			right: 0px;
			bottom: 0px;
			height: auto;
			background-color: rgb(0, 0, 0);
			color: rgb(255, 255, 255);
			z-index: 1000;
		}
		.eWFZXO {
			padding: 16px;
		}
		.kwhkZB {
			position: absolute;
			right: 16px;
			top: 16px;
		}
		.hOoirH {
			transform: rotate(0deg);
			cursor: pointer;
			transition: transform 0.2s ease-in-out 0.2s;
		}
		.cpZcAZ {
			fill: currentcolor;
			display: block;
			width: 24px;
			height: 24px;
			color: rgb(147, 151, 155);
		}
		.jkCJDs {
			margin: 0px auto;
			flex-direction: column;
			-moz-box-align: center;
			align-items: center;
			max-width: 680px;
			width: 100%;
			height: 100%;
		}
		.cQNBxG {
			background-image: url("https://yogabody.bio/wp-content/uploads/2021/02/logo-heart-bw-52a1424bd090e3702794f1a14bfa31a9.gif");
			background-repeat: round;
			border-radius: 50%;
			width: 48px;
			height: 48px;
		}
		.dTuxDk {
			padding-left: 16px;
			padding-right: 16px;
			max-width: 358px;
			margin-top: 8px;
			margin-bottom: 20px;
		}
		.iNqPdY {
			margin-bottom: 8px;
		}
		.fmVGbg {
			margin: 0px;
			text-align: center;
			font-size: 16px;
			line-height: 1.5;
		}
		.iBNqlh {
			padding: 0px;
			margin: 0px;
			text-align: center;
			font-size: 14px;
			line-height: 1.57;
		}
		.fqJpaM {
			border-radius: 12px;
			display: inline-flex;
			-moz-box-align: center;
			align-items: center;
			-moz-box-pack: center;
			justify-content: center;
			height: 48px;
			font-family: inherit;
			font-weight: inherit;
			font-size: inherit;
			width: 100%;
			color: rgb(255, 255, 255);
			background-color: rgb(0, 0, 0);
			border: 2px solid rgb(0, 0, 0);
			cursor: pointer;
			appearance: none;
			text-align: center;
			box-sizing: border-box;
			text-decoration: none;
		}
		.dNVuFU {
			color: rgb(0, 0, 0);
			background-color: rgb(255, 255, 255);
		}
		h1.sc-dlfnbm.gEUmsQ {
			font-size: 18px;
			color: #262626;
			font-weight: 300;
		}
		.sc-bdfBwQ.ciojAP {
			padding-left: 5px;
			padding-right: 5px;
			font-weight: 300;
			line-height: 1.3;
			font-size: 14px;
		}
		.fNlWAC {
			left: 4px;
			width: 46px;
			height: 46px;
			border-radius: 0px;
		}
		.XyyJk {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			pointer-events: none;
			overflow: hidden;
			-webkit-box-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			align-items: center;
			border-radius: 4px;
			background-color: transparent;
			width: 32px;
			height: 32px;
			left: 8px;
		}
		.bhdLno {
			display: flex;
		}
		@media screen and (min-width: 576px){
			.OaoQn {
				margin-top: 8px;
				margin-bottom: 8px;
			}
			.da-DSlr {
				font-size: 20px;
				line-height: 1.6;
			}
			.hJlxfu {
				margin-bottom: 24px;
			}
			.hsiJoh {
				font-size: 16px;
				line-height: 1.5;
			}
		}
		@media screen and (min-width: 767px){
			.OaoQn {
				margin-top: 16px;
				margin-bottom: 16px;
			}
			.da-DSlr {
				font-size: 32px;
				line-height: 1.5;
			}
			.hJlxfu {
				margin-bottom: 48px;
			}
			.hsiJoh {
				font-size: 20px;
				line-height: 1.6;
			}
		}
		
		</style>
    </head> 
    <body>
		<?php 
		if(isset($configration->sensitive_material) && $configration->sensitive_material==1){ 
		?>
		<style>
		#__next{
			display:none;
		}	
		</style>
		<div class="sensitive_material">
			<div class="sc-bdfBwQ sc-gsTCUz sc-dacFzL kemkso bhdLno fIUiIW">
				<div class="sc-bdfBwQ ezijY">
					<div class="sc-bdfBwQ jltFOj">
						<div class="sc-bdfBwQ bdimPo">
							<svg viewBox="0 0 24 24" color="white" enable-background="new 0 0 24 24" class="sc-gKsewC cvknPN">
								<path d="M2.8 21c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1L21 1.7c.2-.3.7-.4 1-.2s.4.7.2 1l-.2.2-18.7 18c-.1.2-.3.3-.5.3zm20.6-7.4c.8-.9.8-2.3 0-3.2-1-1.1-2-2-3.2-2.9-.3-.2-.8-.2-1 .2-.2.3-.2.8.2 1 1.1.8 2.1 1.7 3 2.7.3.3.3.9 0 1.2-2.5 2.6-6.4 5.5-10.3 5.4-.9 0-1.9-.1-2.8-.4-.4-.1-.8.1-.9.5-.1.4.1.8.5.9 1 .3 2.1.5 3.2.5h.2c4.2 0 8.5-3 11.1-5.9zM4.4 16c.2-.3.2-.8-.1-1-.9-.7-1.7-1.5-2.5-2.3-.3-.3-.3-.9 0-1.2C4.1 8.8 8 6 11.9 6h.1c.8 0 1.5.1 2.2.2.4.1.8-.1.9-.5.1-.4-.1-.8-.5-.9-.8-.2-1.7-.3-2.6-.3-4.4-.1-8.8 3-11.4 5.9-.8.9-.8 2.3 0 3.2.8.9 1.7 1.7 2.7 2.5.1.1.3.2.5.2s.4-.1.6-.3zM9 12c0-.8.3-1.6.9-2.1.6-.6 1.3-.9 2.1-.9.4 0 .8-.3.8-.8s-.4-.7-.8-.7c-2.5 0-4.5 2-4.5 4.5 0 .4.3.8.8.8.4 0 .7-.4.7-.8zm6.2 3.1c.8-.8 1.3-2 1.3-3.2 0-.4-.3-.7-.8-.8-.4 0-.8.3-.8.8 0 .8-.3 1.6-.9 2.1-.4.7-1.2 1-2 1-.4 0-.8.3-.8.8s.3.8.8.8c1.2-.1 2.3-.6 3.2-1.5z"></path>
							</svg>
						</div>
						<div class="sc-bdfBwQ OaoQn">
							<h1 class="sc-dlfnbm da-DSlr">Sensitive Content</h1>
						</div>
						<div class="sc-bdfBwQ hJlxfu">
							<h2 class="sc-dlfnbm hsiJoh">You must be of a legal age to view this content</h2>
						</div>
						<div class="sc-bdfBwQ hQPPDr"><button height="x10" font-size="xs" data-testid="AcceptButton" display="inline-flex" font-family="inherit" font-weight="inherit" class="sc-pFZIQ jVFUPG">Show Content</button></div>
						<div class="sc-bdfBwQ jAmcnV"><button height="x10" font-size="xs" data-testid="DenyButton" display="inline-flex" font-family="inherit" font-weight="inherit" class="sc-pFZIQ fqaRiQ">Go Back</button></div>
					</div>
				</div>
				<div class="sc-bdfBwQ dBYvAk">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/1199998138791442.B4W1uo4kNcOJXXKoBPBF_height640.png" height="x8" data-testid="CustomLogo" filter="none" display="block" class="sc-iBPRYJ jmmAHk"/>
				</div>
			</div>
		</div>
		<?php } ?>
        <?php
		$args = array('links'   => $links,'current_user'  => $current_user,'configration'=>$configration);
		if(isset($configration->theme) && $configration->theme!=''){
			$theme = $configration->theme;
		}else{
			$theme = 'snow';
		}			
		get_template_part( 'theme-parts/theme', $theme,$args); ?>
	<script>
	$(document).ready(function(){
		$(document).on('click','.sc-pFZIQ.jVFUPG',function(){
			$('.sensitive_material').slideUp();
			$('#__next').slideDown();
		});
		$(document).on('click','.sc-bdfBwQ[data-testid="CauseBannerToggle"]',function(){
			if($(this).hasClass('hOoirH')){
				$('.supportheight').animate({height: "32px"});
				$(this).removeClass('hOoirH').addClass('frmERa');
			}else{
				$('.supportheight').animate({height: "254px"});
				$(this).removeClass('frmERa').addClass('hOoirH');
			}	
		});
		$(document).on('click','.LinkButton',function(){
			$.ajax({
			type : "POST",
			dataType : "json",
			url : "https://yogabody.bio/wp-admin/admin-ajax.php",
			data : {action: "update_click_count"},
			success: function(response){
				if(response.type == "success"){
					$('.loading-overlay').removeClass('active');
					$('.message[data-message-id="useredit_success"]').fadeIn('fast').delay(2000).fadeOut();
				}else{
				   alert("error occured!");
				}
			}
        });
		});
	});
	</script>
    </body>
</html>