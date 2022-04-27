<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yoga_Body
 */
if(isset($args['configration']->profile_picture) && $args['configration']->profile_picture!=''){
	$profile_picture = $args['configration']->profile_picture;
}else{
	$profile_picture = get_site_url().'/wp-content/uploads/2021/02/default_profile_picture.png';
}
?>
<div id="__next">
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
	<div class="sc-bdfBwQ sc-gsTCUz jNnUwj bhdLno">
		<div class="sc-bdfBwQ sc-gsTCUz iEIpbN bhdLno">
			<div class="sc-bdfBwQ dOWXkX">
				<div class="sc-bdfBwQ sc-jXktwP ibyCbR dByRpy"></div>
				<div class="sc-bdfBwQ RyEcW">
					<div class="sc-bdfBwQ sc-gsTCUz ecjOLn bhdLno">
						<div class="sc-bdfBwQ RyEcW"><img src="<?=$profile_picture?>" alt="Profile Image" data-testid="ProfileImage" filter="none" display="block" class="sc-iBPRYJ QFLjD"/></div>
						<div class="sc-bdfBwQ llgrqs">
							<h1 class="sc-dlfnbm fjhuVd"><?php echo ((isset($args['configration']->profile_title) && $args['configration']->profile_title!='') ? $args['configration']->profile_title : $args['current_user']->user_login ) ?></h1>
						</div>
						<?php if(isset($args['configration']->profile_description) && $args['configration']->profile_description!=''){ ?>
						<div class="sc-bdfBwQ ciojAP">
							<p class="sc-hKgILt fmHAEe"><?= $args['configration']->profile_description ?></p>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php if($args['links']){ 
					foreach($args['links'] as $link){
				?>
				<div class="sc-bdfBwQ snEmw">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ hChTEM iOuxoD">
						<a href="<?= $link->url ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp dbdwNf">
							<p class="sc-hKgILt fpenDC"><?= $link->title ?></p>
						</a>
					</div>
				</div>
				<?php }} ?>
			</div>
			<div class="sc-bdfBwQ jTurDw">
				<?php if(isset($args['configration']->whitelist) && $args['configration']->whitelist!=1){ ?>
					<div class="sc-bdfBwQ sc-gsTCUz kABnSo bhdLno"><a href="<?php echo get_site_url(); ?>" class="sc-eCssSg kZodAG"><img src="https://yogabody.bio/wp-content/uploads/2021/02/1199998138791442.B4W1uo4kNcOJXXKoBPBF_height640.png" height="x8" data-testid="CustomLogo" filter="none" display="block" class="sc-iBPRYJ jmmAHk"/></a></div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php if(isset($args['configration']->support_banner) && $args['configration']->support_banner==1){ ?>
	<div class="sc-bdfBwQ sc-fvhGYg hzGaqJ fxfyLX">
		<div style="height: 253.95px;" class="sc-bdfBwQ jAmcnV supportheight">
			<div class="sc-bdfBwQ jAmcnV">
				<div class="sc-bdfBwQ eWFZXO">
					<div class="sc-bdfBwQ kwhkZB">
						<div data-testid="CauseBannerToggle" class="sc-bdfBwQ sc-jQbIHB jAmcnV hOoirH">
							<svg viewBox="0 0 20 20" display="block" color="palette.slate6" enable-background="new 0 0 24 24" class="sc-gKsewC cpZcAZ">
								<path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 01-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"></path>
							</svg>
						</div>
					</div>
					<div style="opacity: 1; display: initial;" class="sc-bdfBwQ jAmcnV">
						<div data-testid="CauseBannerContentOpen" class="sc-bdfBwQ sc-gsTCUz jkCJDs bhdLno">
							<div class="sc-bdfBwQ sc-fbNXWD jAmcnV cQNBxG"></div>
							<div class="sc-bdfBwQ dTuxDk">
								<div class="sc-bdfBwQ iNqPdY">
									<h6 class="sc-dlfnbm fmVGbg">Support Anti-Racism</h6>
								</div>
								<p class="sc-hKgILt iBNqlh">I’m raising awareness, driving donations and sharing information in support of justice and equality.</p>
							</div>
							<a href="<?php get_site_url() ?>/action" target="_blank" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="x12" class="sc-pFZIQ sc-GTWni fqJpaM dNVuFU">ACT NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<style data-styled="" data-styled-version="5.2.1">.jNnUwj{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;position:relative;padding-bottom:0;min-height:100vh;overflow-x:hidden;width:100%;height:100%;}/*!sc*/
	.iEIpbN{-webkit-flex:1;-ms-flex:1;flex:1;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding-left:12px;padding-right:12px;padding-top:24px;padding-bottom:24px;height:100%;width:100%;}/*!sc*/
	.dOWXkX{margin:0 auto;height:100%;width:100%;max-width:680px;padding-bottom:80px;}/*!sc*/
	.ibyCbR{position:fixed;top:0;left:0;right:0;bottom:0;z-index:-1;background-position:center;background-size:cover;background-repeat:no-repeat;background-color:#60210D;background-style:flat;background-image:url(https://yogabody.bio/wp-content/uploads/2021/02/background-mobile-bb7402bbcd0cc550ab7f8cbc86db158b.png);}/*!sc*/
	@media screen and (min-width:576px){.ibyCbR{background-image:url(https://yogabody.bio/wp-content/uploads/2021/02/background-mobile-bb7402bbcd0cc550ab7f8cbc86db158b.png);}}/*!sc*/
	@media screen and (min-width:767px){.ibyCbR{background-image:url(https://yogabody.bio/wp-content/uploads/2021/02/background-desktop-d78e1774529d21c2f41fd2f4e699d20f.png);}}/*!sc*/
	.RyEcW{margin-bottom:16px;}/*!sc*/
	.ecjOLn{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin-top:12px;margin-bottom:32px;width:100%;height:100%;}/*!sc*/
	.cuyGjN{margin-left:12px;margin-right:12px;max-width:100%;}/*!sc*/
	.snEmw{position:relative;}/*!sc*/
	.hChTEM{position:relative;height:auto;border-type:squared;style-type:torn;}/*!sc*/
	.dBZZss{width:100%;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;height:48px;logo:custom;url:https://yogabody.bio/wp-content/plugins/yogabody/public/images/tree/logo-linktree-61b2ef084c641eadd3e728f76efe3990.svg;height:48px;}/*!sc*/
	data-styled.g1[id="sc-bdfBwQ"]{content:"jNnUwj,iEIpbN,dOWXkX,ibyCbR,RyEcW,ecjOLn,cuyGjN,snEmw,hChTEM,jTurDw,dBZZss,"}/*!sc*/
	.bhdLno{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}/*!sc*/
	data-styled.g2[id="sc-gsTCUz"]{content:"bhdLno,"}/*!sc*/
	.fuVemd{margin:0;color:#FFF4EC;font-size:16px;line-height:1.5;text-overflow:ellipsis;max-width:100%;white-space:nowrap;overflow:hidden;}/*!sc*/
	data-styled.g3[id="sc-dlfnbm"]{content:"fuVemd,"}/*!sc*/
	.fpenDC{padding:0;margin:0;line-height:1.5;width:100%;}/*!sc*/
	data-styled.g4[id="sc-hKgILt"]{content:"fpenDC,"}/*!sc*/
	.kZodAG{color:inherit;-webkit-text-decoration:underline;text-decoration:underline;}/*!sc*/
	data-styled.g5[id="sc-eCssSg"]{content:"kZodAG,"}/*!sc*/
	.QFLjD{width:96px;height:96px;border-radius:50%;width:96px;height:96px;display:block;object-fit:contain;object-position:initial;-webkit-filter:none;filter:none;}/*!sc*/
	.iJpiEB{margin:auto;height:48px;display:block;object-fit:contain;object-position:initial;-webkit-filter:none;filter:none;}/*!sc*/
	data-styled.g8[id="sc-iBPRYJ"]{content:"QFLjD,iJpiEB,"}/*!sc*/
	.fxPOXp{border:none;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;height:auto;position:relative;padding-top:16px;padding-bottom:16px;padding-left:66px;padding-right:66px;margin:0;font-family:inherit;font-weight:inherit;font-size:inherit;width:100%;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;text-align:center;box-sizing:border-box;-webkit-text-decoration:none;text-decoration:none;}/*!sc*/
	.fxPOXp:focus{outline:none;}/*!sc*/
	.fxPOXp:disabled{cursor:default;pointer-events:none;}/*!sc*/
	data-styled.g10[id="sc-pFZIQ"]{content:"fxPOXp,"}/*!sc*/
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,main,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}/*!sc*/
	article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section{display:block;}/*!sc*/
	*[hidden]{display:none;}/*!sc*/
	body{line-height:1;}/*!sc*/
	ol,ul{list-style:none;}/*!sc*/
	blockquote,q{quotes:none;}/*!sc*/
	blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}/*!sc*/
	table{border-collapse:collapse;border-spacing:0;}/*!sc*/
	html{font-family:Karla,sans-serif;font-size:16px;font-weight:700;box-sizing:border-box;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}/*!sc*/
	html > *{-webkit-letter-spacing:normal;-moz-letter-spacing:normal;-ms-letter-spacing:normal;letter-spacing:normal;}/*!sc*/
	*,*:before,*:after{box-sizing:inherit;}/*!sc*/
	data-styled.g16[id="sc-global-koxjWe1"]{content:"sc-global-koxjWe1,"}/*!sc*/
	.iOuxoD{z-index:0;overflow:hidden;margin-bottom:16px;-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),-webkit-transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);border-top:4px solid;border-bottom:4px solid;border-color:#FFF4EC;background-color:#FFF4EC;color:#60210D;margin-bottom:24px;-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transition:-webkit-transform 0.15s cubic-bezier(0.17,0.67,0.29,2.71);-webkit-transition:transform 0.15s cubic-bezier(0.17,0.67,0.29,2.71);transition:transform 0.15s cubic-bezier(0.17,0.67,0.29,2.71);overflow:visible !important;padding-top:4px;padding-bottom:4px;border-radius:0;}/*!sc*/
	@-webkit-keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@-webkit-keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	@keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	.iOuxoD:before,.iOuxoD:after{content:'';position:absolute;left:0;right:0;height:5px;overflow:hidden;-webkit-mask-position:0 top;mask-position:0 top;-webkit-mask-size:640px 5px;mask-size:640px 5px;background-color:inherit;}/*!sc*/
	.iOuxoD:before{top:-8px;-webkit-mask-image:url(https://yogabody.bio/wp-content/plugins/yogabody/public/images/tree/top-b2534c7acbca48ac7cd77eafefa51f2b.svg);mask-image:url(https://yogabody.bio/wp-content/plugins/yogabody/public/images/tree/top-b2534c7acbca48ac7cd77eafefa51f2b.svg);}/*!sc*/
	.iOuxoD:after{bottom:-8px;-webkit-animation-name:bottomwave;animation-name:bottomwave;-webkit-mask-image:url(https://yogabody.bio/wp-content/plugins/yogabody/public/images/tree/bottom-c738fbbcfec77268995e0cb9338c4576.svg);mask-image:url(https://yogabody.bio/wp-content/plugins/yogabody/public/images/tree/bottom-c738fbbcfec77268995e0cb9338c4576.svg);}/*!sc*/
	.iOuxoD:hover{-webkit-transform:translate3d(0,0,0) scale(1.015);-ms-transform:translate3d(0,0,0) scale(1.015);transform:translate3d(0,0,0) scale(1.015);}/*!sc*/
	data-styled.g93[id="sc-ctaXAZ"]{content:"iOuxoD,"}/*!sc*/
	.dbdwNf{overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;white-space:normal;background:none;color:inherit;-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), -webkit-transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);padding-left:20px;padding-right:20px;padding-left:67px;padding-right:67px;padding-top:8px;padding-bottom:8px;}/*!sc*/
	data-styled.g103[id="sc-tYoTV"]{content:"dbdwNf,"}/*!sc*/
	.dByRpy{background-image:url(https://yogabody.bio/wp-content/uploads/2021/02/background-mobile-bb7402bbcd0cc550ab7f8cbc86db158b.png)url(https://yogabody.bio/wp-content/uploads/2021/02/background-mobile-bb7402bbcd0cc550ab7f8cbc86db158b.png)url(https://yogabody.bio/wp-content/uploads/2021/02/background-desktop-d78e1774529d21c2f41fd2f4e699d20f.png);}/*!sc*/
	data-styled.g114[id="sc-jXktwP"]{content:"dByRpy,"}/*!sc*/
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,main,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}/*!sc*/
	article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section{display:block;}/*!sc*/
	*[hidden]{display:none;}/*!sc*/
	body{line-height:1;}/*!sc*/
	ol,ul{list-style:none;}/*!sc*/
	blockquote,q{quotes:none;}/*!sc*/
	blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}/*!sc*/
	table{border-collapse:collapse;border-spacing:0;}/*!sc*/
	html{font-family:Karla,sans-serif;font-size:16px;font-weight:700;box-sizing:border-box;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}/*!sc*/
	html > *{-webkit-letter-spacing:normal;-moz-letter-spacing:normal;-ms-letter-spacing:normal;letter-spacing:normal;}/*!sc*/
	*,*:before,*:after{box-sizing:inherit;}/*!sc*/
	data-styled.g116[id="sc-global-koxjWe2"]{content:"sc-global-koxjWe2,"}/*!sc*/
	.fjhuVd {
		margin: 0px;
		color: rgb(255, 255, 255);
		font-weight: 700;
		font-size: 16px;
		line-height: 1.5;
		text-overflow: ellipsis;
		max-width: 100%;
		white-space: nowrap;
		overflow: hidden;
	}
	.fmHAEe {
		padding: 0px;
		margin: 0px;
		text-align: center;
		line-height: 1.5;
		font-size: 14px;
		color: rgb(255, 255, 255);
	}
</style>