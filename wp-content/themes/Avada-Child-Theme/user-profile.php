<!DOCTYPE html>
<html>
<?php
global $wp,$wpdb;
$url = home_url( $wp->request );
$user_login = end(explode("/", $url));
//echo"<pre>";print_r($user_login);echo"</pre>";
$user_login = str_replace('%20',' ',$user_login);
$current_user = get_user_by('login',$user_login);
//echo"<pre>";print_r($current_user);echo"</pre>";die('working');
if($current_user){
$user_id = $current_user->ID;
$links = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}treelinks WHERE (user_id=$user_id AND title!='' AND url!='' AND status=1 AND type='CLASSIC') OR (user_id=$user_id  AND paypal_email!='' AND title!='' AND class_price!='' AND price_currency!='' AND status=1 AND class_product_name!='' AND type='PAYMENT') OR (user_id=$user_id  AND paypal_email!='' AND title!='' AND class_price!='' AND price_currency!='' AND status=1 AND class_product_name!='' AND type='DIGITAL') OR (user_id=$user_id AND status=1 AND title!='' AND resume_about!='' AND type='RESUME') OR (user_id=$user_id AND status=1 AND title!='' AND url!='' AND type='VIDEO') OR (user_id=$user_id AND status=1 AND title!='' AND paypal_email!='' AND class_product_name!='' AND class_price!='' AND type='STUDENT') OR (user_id=$user_id AND status=1 AND title!='' AND paypal_email!='' AND class_product_name!='' AND class_price!='' AND type='BREATHCOACHING') OR (user_id=$user_id AND status=1 AND title!='' AND type='ZOOM') OR (user_id=$user_id AND title!='' AND status=1 AND work_experience!='' AND type='STORE') OR (user_id=$user_id AND title!='' AND work_experience!='' AND status=1 AND type='BUILDEMAIL') ORDER BY position DESC");
$reviews = $wpdb->get_row("SELECT count(*) as total,SUM(review_stars) as rating FROM {$wpdb->prefix}profile_reviews WHERE user_id=$user_id AND review_status=1 ORDER BY review_id DESC");
//echo"<pre>";print_r($reviews);echo"</pre>";
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
		<title><?php echo ((isset($current_user->display_name) && $current_user->display_name!='') ? $current_user->display_name : $current_user->user_login ) ?></title>
		<?php if(isset($configration->profile_description) && $configration->profile_description!=''){ ?>
		<meta name="description" content="<?php echo $configration->profile_description; ?>"/>
		<?php }else{ ?>
        <meta name="description" content="Yogabody. Make your link do more."/>
		<?php } ?>
        <meta property="profile:username" content="<?= $current_user->user_login ?>"/>
        <link rel="canonical" href="<?= get_site_url() ?>/<?= $current_user->user_login ?>"/>
        <meta charSet="UTF-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <meta name="next-head-count" content="8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
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
			right: 4px;
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
			right: 8px;
		}
		.bhdLno {
			display: flex;
		}
		.socials-media-logos span.socials-media-span {
			display: inline-block;
			width: 30px;
			margin: 0 3px;
		}
		.socials-media-logos {
			text-align: center;
			margin-bottom: 20px;
		} 
		.new-footer {
			text-align: center;
			display: block;
		}
		.footer-logo-part {
			margin-bottom: 20px;
		}
		.footer-logo-part img.footer-logo {
			width: 200px;
		}
		.sc-bdfBwQ.LyLIy {
			border-bottom: 2px solid grey;
			margin-bottom: 10px;
		}
		.footer-text-part {
			color: darkgrey;
			line-height: 1.4;
		}
		.resume-display {
			width: 100%;
			display:none;
		}
		.resume-inner {
			padding: 10px;
		}
		.resume_new_about {
			padding: 10px 0;
		}
		.resume_new_about label {
			font-weight: bold;
			margin-bottom: 8px;
			display: block;
		}
		.work-experience {
			margin: 12px 0;
			font-weight: normal;
		}
		.education-training {
			margin-bottom: 12px;
			font-weight: normal;
		}
		.resume_new_display {
			font-weight: normal;
		}
		.education-logo {
			width: 100px;
			display: inline-block;
		}
		.education-logo img {
			width: 100%;
		}
		.education-text {
			display: inline-block;
			width: calc(100% - 115px);
			transform: translateY(-30px);
			margin-left: 10px;
		}
		.star-ratings {
			unicode-bidi: bidi-override;
			margin-top: -5px !important;
			color: black;
			font-size: 20px;
			height: 1rem;
			position: relative;
			padding: 0;
			line-height: 1;
			width: auto;
		}
		.star-ratings-top {
			width: var(--percent);
			color: #ffc83d;
			padding: 0;
			position: absolute;
			z-index: 1;
			display: block;
			top: 0;
			left: 0;
			overflow: hidden;
		}
		.star-ratings span {
			margin-right: 2px;
		}
		.star-ratings-bottom {
			padding: 0;
			display: block;
			z-index: 0;
		}
		.ratingdiv {
			display: flex;
			position: relative;
			top: 3px;
		}
		.ratingreview {
			width: 100%;
			text-align: center;
			display: flex;
			justify-content: center;
		}
		.reviewdiv {
			display: flex;
			margin-left: 5px;
		}
		.goto-review a {
			text-decoration: none;
			font-size: 14px;
			color: blue;
			text-transform: uppercase;
		}
		.fmTYNE {
			border-radius: 100%;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
		}
		.frNOcG {
			cursor: pointer;
			transition: background-color 0.2s ease-in-out 0s;
			border: none;
			padding: 0px;
			top: -37px;
			position: absolute;
			margin-top: 0px;
			width: 32px;
			height: 32px;
			right: 0;
			margin-left: -16px;
			background-color: black;
			color: rgb(255, 255, 255);
		}
		.ebyGYi {
			fill: currentcolor;
			width: 30px;
			height: 30px;
		}
		.czAmlb {
			z-index: 0 !important;
			overflow: hidden !important;
			margin-top: 50px !important;
			transition: box-shadow 0.25s cubic-bezier(0.08, 0.59, 0.29, 0.99) 0s, color 0.25s cubic-bezier(0.08, 0.59, 0.29, 0.99) 0s, border-color 0.25s cubic-bezier(0.08, 0.59, 0.29, 0.99) 0s, transform 0.25s cubic-bezier(0.08, 0.59, 0.29, 0.99) 0s, background-color 0.25s cubic-bezier(0.08, 0.59, 0.29, 0.99) 0s !important;
			/* border: 2px solid rgb(79, 124, 254) !important; */
			background-color: transparent !important;
			color: rgb(79, 124, 254) !important;
			border-radius: 0px !important;
		}
		.video-embed-iframe {
			height: 100%;
		}
		.video-embed-opacity {
			inset: 0px;
			position: absolute;
		}
		.pass-heading {
			text-align: center;
			margin-top: 30px;
			font-size: 20px;
		}
		.button {
			position: relative;
			text-align: center;
			outline: 0!important;
			background-color: #3d444b;
			color: #fff;
			padding: 9px 14px;
			font-size: 14px;
			font-weight: 700;
			line-height: 22px;
			border: 0;
			border-radius: 8px;
			cursor: pointer;
		}
		.password-form {
			color: #8a8a8a;
			display: -webkit-box;
			-webkit-box-pack: center;
			-webkit-box-align: center;
		}
		.pass-heading {
			text-align: center;
			margin-top: 30px;
			font-size: 20px;
		}
		form.video-password {
			text-align: center;
			/* transform: translateY(50%); */
			width: 100%;
			max-width: 400px;
			display: block;
			margin-top: 5%;
		}
		.controls.verify_video_pass_input {
			margin-top: 20px;
		}
		.controls.verify_video_pass_input input {
			height: 40px;
			width: 94%;
			padding: 0 7px;
		}
		.controls.verify_video_submit_input {
			margin-top: 20px;
			width: 94%;
			text-align: right;
			margin: 10px auto;
		}
		label.error {
			width: 94%;
			display: inline-block;
			text-align: left;
			margin-top: 5px;
			color: red;
		}
		input.error {
			color: red;
			border: 1px solid red;
		}
		.verify_pass_btn.form-control {
			width: 150px;
			background: none;
			border: none;
			cursor: pointer;
			padding: 0;
		}
		.verify_pass_btn.form-control img {
			width: 150px;
		}
		.kzCoZd {
			border-radius: 10px !important;
		} 
		.video-embed-iframe iframe {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
		}
		.schedule-one {
			margin-bottom: 20px;
			width: 100%;
			display: table;
		}
		.schedule-time-zoom {
			display: flex;
		}
		.schedule-zoom {
			margin-left: 20px;
		}
		span.schedule-zoom-icon img {
			width: 20px;
			height: auto;
		}
		.schedule-zoom-details {
			display: table;
			margin-top: 10px;
		}
		.schedule-title-desc-btn {
			margin-left: 20px;
			width: 50%;
			display: table-cell;
			vertical-align: middle;
		}
		.schedule-zoom-image {
			width: 40%;
			display: table-cell;
		}
		.schedule-btn {
			margin-top: 20px;
		}
		img.image-schedule {
			width: 100%;
		}
		.schedule-title, .schedule-desc {
			margin-bottom: 10px;
		}
		.schedule-display {
			margin: 30px;
			border: 1px solid grey;
			display: none;
			padding: 20px;
		}
		a.schedule-btn-anchor {
			text-decoration: none;
			background: #ea9a3e;
			padding: 10px 50px;
			border-radius: 5px;
			color:#ffffff;
		}
		
		.payment-display {
			margin: 30px;
			border: 1px solid grey;
			display: none;
			padding: 20px;
		}
		.payment-product-name {
			margin-bottom: 15px;
		}
		.payment-image {
			width: 40%;
			display: table-cell;
			text-align: center;
		}
		.payment-product-info {
			width: 60%;
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}
		.payment-product-name {
			margin-bottom: 15px;
		}
		.payment-buy-price {
			width: 100%;
			display: inline-block;
		}
		.payment-price {
			width: 100%;
			display: inline-block;
		}
		.payment-buy {
			width: 100%;
			display: inline-block;
			margin-top: 20px;
		}
		a.payment-buy-anchor {
			text-decoration: none;
			background: #ea9a3e;
			padding: 10px 50px;
			border-radius: 5px;
		}
		a.payment-buy-anchor svg {
			color: white;
			width: 15px;
		}
		a.payment-buy-anchor span {
			color: white;
		}
		img.payment-img {
			max-width: 90%;
		} 
		.digital-display {
			margin: 30px;
			border: 1px solid grey;
			display: none;
			padding: 20px;
		}
		.payment-display-inner {
			display: table;
			width: 100%;
		}
		.store-one {
			margin-bottom: 20px;
			width: 100%;
			display: table;
		}
		img.telegram-icon {
			width: 30px;
		}
		p.sc-hKgILt.eyNoCk {
			word-break: break-word;
		}
		img.buildform-img {
			width: 100%;
		}
		.buildform-display-inner {
			display: inline-block;
			width: 100%;
		}
		.buildform-one {
			display: table;
			width: 100%;
		}
		.buildform-image {
			width: 30%;
			display: table-cell;
			vertical-align: middle;
		}
		.buildform-info {
			width: 70%;
			display: table-cell;
			vertical-align: middle;
		}
		.buildform-info form {
			display: inline-block;
			margin-left: 30px;
		}
		.buildform-info .form-group {
			margin-bottom: 10px;
		}
		button.submit_buildlist_form {
			float: right;
		}
		.buildform-info .form-control {
			border: none;
			border-bottom: 1px solid;
			width: 96%;
			margin-top: 7px;
			margin-bottom: 5px;
			font-size: 16px;
		}
		.buildform-info .form-control:focus, .buildform-info .form-control:focus-visible {
			outline: none;
		}
		.buildlist-message {
			color: red;
			margin-top: 15px;
			display: none;
		}
		@media screen and (max-width: 768px){
			.payment-image {
				width: 100%;
				display: inline-block;
				text-align: center;
			}
			.payment-product-info {
				width: 100%;
				display: inline-block;
				text-align: center;
				vertical-align: middle;
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.payment-display-inner {
				display: inline-block;
				width: 100%;
			}
			.schedule-title-desc-btn {
				margin-left: 0px;
				width: 100%;
				display: inline-block;
				vertical-align: middle;
				text-align: center;
				margin-top: 10px;
			}
			.schedule-zoom-image {
				width: 100%;
				display: inline-block;
			}
			.schedule-zoom-details {
				display: inline-block;
				margin-top: 0px;
				width: 100%;
			}
			.buildform-one {
				display: inline-block;
				width: 100%;
			}
			.buildform-info {
				width: 100%;
				display: inline-block;
				vertical-align: middle;
			}
			.buildform-image {
				width: 100%;
				display: inline-block;
				vertical-align: middle;
			}
		}
		@media screen and (max-width: 480px){
			a.payment-buy-anchor {
				padding: 10px 20px;
			}
			a.schedule-btn-anchor {
				padding: 10px 20px;
			}
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
			.socials-media-logos span.socials-media-span {
				display: inline-block;
				width: 30px;
				margin: 0 3px !important;
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
			.socials-media-logos span.socials-media-span {
				display: inline-block;
				width: 30px;
				margin: 0 3px !important;
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
					<img src="https://development.yogabody.bio/wp-content/uploads/2021/02/1199998138791442.B4W1uo4kNcOJXXKoBPBF_height640.png" height="x8" data-testid="CustomLogo" filter="none" display="block" class="sc-iBPRYJ jmmAHk"/>
				</div>
			</div>
		</div>
		<?php } ?>
        <?php
		$args = array('links'   => $links,'current_user'  => $current_user,'configration'=>$configration,'reviews'=>$reviews);
		if(isset($configration->theme) && $configration->theme!=''){
			$theme = $configration->theme;
		}else{
			$theme = 'snow';
		}			
		get_template_part( 'theme-parts/theme', $theme,$args); ?>
	<script>
	$(function () {
		$('a.PaymentLinkIcon').hover(function () {
			$(this).find('img').attr('src', 'https://development.yogabody.bio/wp-content/uploads/2021/02/ShoppingCart_Icon_Black.png');
		}, function () {
			$(this).find('img').attr('src', 'https://development.yogabody.bio/wp-content/uploads/2021/02/ShoppingCart_Icon.png');
		});
	});
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
				url : "https://development.yogabody.bio/wp-admin/admin-ajax.php",
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
		$(document).on('click','.openVideo',function(e){
			e.preventDefault();
			var id = $(this).data('id');
			var tthis = $(this);
			$.ajax({
				type : "POST",
				dataType : "json",
				url : "https://development.yogabody.bio/wp-admin/admin-ajax.php",
				data : {action: "open_video_link_action",id:id},
				success: function(response){
					if(response.type == "success"){
						$("#video_embed_iframe_"+id).append('<iframe width="100%" height="100%" src="'+response.embeded_url+'" frameborder="0" allowfullscreen=""></iframe>'); 
						tthis.css("display", "none");
						$('#videoContainer_'+id).addClass('czAmlb');
						$('#video_embed_'+id).css("padding-bottom", parseInt(56.25)+"%");
						$('#video_embed_opacity_'+id).css("opacity", 1);
						$('<button data-id="'+id+'" data-testid="StyledCloseButton" class="sc-bdfBwQ sc-gsTCUz sc-bXDlPE fmTYNE bhdLno frNOcG StyledCloseButton"><svg viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="sc-gKsewC ebyGYi"><path d="M12 10.59l5-4.95 1.41 1.41-4.95 5 4.9 4.95L17 18.36l-5-4.95-4.95 4.95L5.64 17l5-4.95-5-5 1.41-1.41z"></path></svg></button>').insertAfter('#videoContainer_'+id);
						$("#video_embed_iframe_"+id+" iframe").contentWindow.location.reload();
					}else if(response.type == "secure"){
						$("#video_embed_iframe_"+id).append(response.form_html);
						tthis.css("display", "none");
						$('#videoContainer_'+id).addClass('czAmlb');
						$('#video_embed_'+id).css("padding-bottom", parseInt(40)+"%");
						$('#video_embed_opacity_'+id).css("opacity", 1);
						$('<button data-id="'+id+'" data-testid="StyledCloseButton" class="sc-bdfBwQ sc-gsTCUz sc-bXDlPE fmTYNE bhdLno frNOcG StyledCloseButton"><svg viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="sc-gKsewC ebyGYi"><path d="M12 10.59l5-4.95 1.41 1.41-4.95 5 4.9 4.95L17 18.36l-5-4.95-4.95 4.95L5.64 17l5-4.95-5-5 1.41-1.41z"></path></svg></button>').insertAfter('#videoContainer_'+id);
					}else{
					   alert("error occured!");
					}
				}
			});
			e.stopPropagation();
		});
		$(document).on('click','.StyledCloseButton',function(e){
			e.preventDefault();
			id = $(this).data('id');
			$('#videoContainer_'+id).removeClass('czAmlb');
			$('#video_embed_'+id).css("padding-bottom", parseInt(0)+"%");
			$('#video_embed_opacity_'+id).css("opacity", 0);
			$('.openVideo[data-id="'+id+'"]').removeAttr('style');
			$('.StyledCloseButton[data-id="'+id+'"]').remove();
			if($("#video_embed_iframe_"+id+" iframe").length>0){
				$("#video_embed_iframe_"+id+" iframe").remove();
			}
			if($("#video_embed_iframe_"+id+" .password-form").length>0){
				$("#video_embed_iframe_"+id+" .password-form").remove();
			}
			e.stopPropagation();			
		});	
		$(document).on('click','button[name="verify_video_submit"]',function(){
			var id = $(this).data('id');
			if($('#video_password_'+id).valid()){
				var video_pass = $('#verify_video_pass_'+id).val();
				$.ajax({
					type : "POST",
					dataType : "json",
					url : "https://development.yogabody.bio/wp-admin/admin-ajax.php",
					data : {action: "verify_video_password",id:id,video_pass:video_pass},
					success: function(response){
						if(response.type == "success"){
							if($("#video_embed_iframe_"+id+" .password-form").length>0){
								$("#video_embed_iframe_"+id+" .password-form").remove();
							}
							$("#video_embed_iframe_"+id).append('<iframe width="100%" height="100%" src="'+response.embeded_url+'" frameborder="0" allowfullscreen=""></iframe>'); 
							$('.openVideo[data-id="'+id+'"]').css("display", "none");
							$('#videoContainer_'+id).addClass('czAmlb');
							$('#video_embed_'+id).css("padding-bottom", parseInt(56.25)+"%");
							$('#video_embed_opacity_'+id).css("opacity", 1);
							$('<button data-id="'+id+'" data-testid="StyledCloseButton" class="sc-bdfBwQ sc-gsTCUz sc-bXDlPE fmTYNE bhdLno frNOcG StyledCloseButton"><svg viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="sc-gKsewC ebyGYi"><path d="M12 10.59l5-4.95 1.41 1.41-4.95 5 4.9 4.95L17 18.36l-5-4.95-4.95 4.95L5.64 17l5-4.95-5-5 1.41-1.41z"></path></svg></button>').insertAfter('#videoContainer_'+id);
							$("#video_embed_iframe_"+id+" iframe").contentWindow.location.reload();							
						}else if(response.type == "error"){
							$('#verify_video_pass_'+id).addClass('error');
							if($('#verify_video_pass_'+id+'-error').length > 0){
								$('#verify_video_pass_'+id+'-error').html('Video Password not matched!');
								$('#verify_video_pass_'+id+'-error').show();
							}else{
							$('#verify_video_pass_'+id).after('<label id="verify_video_pass_'+id+'-error" class="error" for="verify_video_pass_'+id+'">Video Password not matched!</label>');
							}
						}else{
						   alert("error occured!");
						}
					}
				});
			}
			return false;
		});	 
		$(document).on('click','.submit_buildlist_form',function(e){
			e.preventDefault();
			var tthis = $(this);
			var id = $(this).data('id');
			if($('#buildlist_form_'+id).valid()){
				tthis.prop('disabled', true);
				var buildname = $("#buildname_"+id).val();
				var buildemail = $("#buildemail_"+id).val();
				var build_checkbox = $("#build_checkbox_"+id).val();
				$.ajax({ 
					type : "POST",
					dataType : "json",
					url : "https://development.yogabody.bio/sheets/ajaxcall.php",
					data : {action: "yogabody_subscribe_email_list",id:id,buildname:buildname,buildemail:buildemail,build_checkbox:build_checkbox},
					success: function(response){
						if(response.type == "success"){
							$('#buildlist_form_'+id)[0].reset();
							tthis.prop('disabled', false);
							$("#buildlist_message_"+id).slideDown("slow");
							setTimeout(function(){
								$("#buildlist_message_"+id).slideUp("slow");
							},3000);
						}else{
							$('#buildlist_form_'+id)[0].reset();
							tthis.prop('disabled', false);
						    $("#buildlist_message_"+id).slideDown("slow");
							setTimeout(function(){
								$("#buildlist_message_"+id).slideUp("slow");
							},3000);
						}
					}
				});
			}else{
				tthis.prop('disabled', false);
			}
			e.stopPropagation();			
		});
		$(document).on('click','.resumeopen',function(e){
			e.preventDefault();
			id = $(this).data('id');
			$('#display_resume_'+id).slideToggle('slow');
			e.stopPropagation();			
		});
		$(document).on('click','.scheduleopen',function(e){
			e.preventDefault();
			id = $(this).data('id');
			$('#display_schedule_'+id).slideToggle('slow');
			e.stopPropagation();			
		});
		$(document).on('click','.PaymentOpen',function(e){
			e.preventDefault();
			id = $(this).data('id');
			$('#display_payment_'+id).slideToggle('slow');
			e.stopPropagation();			
		});
		$(document).on('click','.OpenDigital',function(e){
			e.preventDefault();
			id = $(this).data('id');
			$('#display_digital_'+id).slideToggle('slow');
			e.stopPropagation();			
		});
		
	});
	</script>
    </body>
</html>