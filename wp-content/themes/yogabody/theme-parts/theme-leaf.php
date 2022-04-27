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
	<div class="sc-bdfBwQ sc-gsTCUz fGhsIW bhdLno">
		<div class="sc-bdfBwQ sc-gsTCUz bcrzgk bhdLno">
			<div class="sc-bdfBwQ LyLIy">
				<div class="sc-bdfBwQ sc-jXktwP jbINSs hdVqsT"></div>
				<div class="sc-bdfBwQ eZNKTD">
					<div class="sc-bdfBwQ sc-gsTCUz jgGrsq bhdLno">
						<div class="sc-bdfBwQ eZNKTD">
							<img src="<?=$profile_picture?>" alt="Profile Image" data-testid="ProfileImage" filter="none" display="block" class="sc-iBPRYJ QFLjD"/>
						</div>
						<div class="sc-bdfBwQ llgrqs">
							<h1 class="sc-dlfnbm gEUmsQ"><?php echo ((isset($args['configration']->profile_title) && $args['configration']->profile_title!='') ? $args['configration']->profile_title : $args['current_user']->user_login ) ?></h1>
						</div>
						<?php if(isset($args['configration']->profile_description) && $args['configration']->profile_description!=''){ ?>
						<div class="sc-bdfBwQ ciojAP">
							<p class="sc-hKgILt eyNoCk"><?= $args['configration']->profile_description ?></p>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php if($args['links']){ 
					foreach($args['links'] as $link){
						if($link->type=='PAYMENT'){
							$url = "https://www.paypal.com/cgi-bin/webscr?cmd=_cart&add=1&business=$link->paypal_email&item_name=$link->class_product_name&item_number=123456&amount=$link->class_price&currency_code=$link->price_currency";
				?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd ljUxiP">
						<a href="<?= $url ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton">
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<svg height="512pt" viewBox="0 -31 512.00033 512" width="512pt" xmlns="http://www.w3.org/2000/svg" id="fi_1170627"><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0" style="stroke: black;fill: honeydew;"></path><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0" style="fill: honeydew;stroke: black;"></path><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0" style="fill: honeydew;stroke: black;"></path></svg>
							</div>
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php }else{ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd ljUxiP">
						<a href="<?= addHttp($link->url) ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php } }} ?>
			</div>
			<div class="sc-bdfBwQ jAmcnV">
				<?php if(isset($args['configration']->whitelist) && $args['configration']->whitelist!=1){ ?>
					<div class="sc-bdfBwQ sc-gsTCUz kABnSo bhdLno"><a href="<?php echo get_site_url(); ?>" class="sc-eCssSg kZodAG"><img src="https://yogabody.bio/wp-content/uploads/2021/02/logo-ytc@2x.png" height="x8" data-testid="CustomLogo" filter="none" display="block" class="sc-iBPRYJ jmmAHk"/></a></div>
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
<style>.fGhsIW{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;position:relative;padding-bottom:0;min-height:100vh;overflow-x:hidden;width:100%;height:100%;}/*!sc*/
	.bcrzgk{-webkit-flex:1;-ms-flex:1;flex:1;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding-left:12px;padding-right:12px;padding-top:24px;padding-bottom:24px;height:100%;width:100%;}/*!sc*/
	.LyLIy{margin:0 auto;height:100%;width:100%;max-width:680px;padding-bottom:80px;}/*!sc*/
	.jbINSs{position:fixed;top:0;left:0;right:0;bottom:0;z-index:-1;background-position:center;background-size:cover;background-repeat:no-repeat;background-color:#fff;background-style:flat;}/*!sc*/
	.eZNKTD{margin-bottom:16px;}/*!sc*/
	.jgGrsq{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin-top:12px;margin-bottom:32px;width:100%;height:100%;}/*!sc*/
	.llgrqs{margin-left:12px;margin-right:12px;max-width:100%;}/*!sc*/
	.pkAuV{position:relative;}/*!sc*/
	.kzCoZd{position:relative;height:auto;border-type:squared;style-type:fill;}/*!sc*/
	.jSYzUh{width:100%;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;height:20px;logo:black-green;}/*!sc*/
	data-styled.g1[id="sc-bdfBwQ"]{content:"fGhsIW,bcrzgk,LyLIy,jbINSs,eZNKTD,jgGrsq,llgrqs,pkAuV,kzCoZd,jAmcnV,jSYzUh,"}/*!sc*/
	.bhdLno{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}/*!sc*/
	data-styled.g2[id="sc-gsTCUz"]{content:"bhdLno,"}/*!sc*/
	.gEUmsQ{margin:0;color:palette.slate13;font-weight:700;font-size:16px;line-height:1.5;text-overflow:ellipsis;max-width:100%;white-space:nowrap;overflow:hidden;}/*!sc*/
	data-styled.g3[id="sc-dlfnbm"]{content:"gEUmsQ,"}/*!sc*/
	.fpenDC{padding:0;margin:0;line-height:1.5;width:100%;}/*!sc*/
	data-styled.g4[id="sc-hKgILt"]{content:"fpenDC,"}/*!sc*/
	.kZodAG{color:inherit;-webkit-text-decoration:underline;text-decoration:underline;}/*!sc*/
	data-styled.g5[id="sc-eCssSg"]{content:"kZodAG,"}/*!sc*/
	.ikrHx{fill:currentColor;display:block;height:100%;width:100%;}/*!sc*/
	data-styled.g7[id="sc-gKsewC"]{content:"ikrHx,"}/*!sc*/
	.QFLjD{width:96px;height:96px;border-radius:50%;width:96px;height:96px;display:block;object-fit:contain;object-position:initial;-webkit-filter:none;filter:none;}/*!sc*/
	data-styled.g8[id="sc-iBPRYJ"]{content:"QFLjD,"}/*!sc*/
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
	.ljUxiP{z-index:0;overflow:hidden;margin-bottom:16px;-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),-webkit-transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);border:2px solid;border-color:#39e09b;background-color:#39e09b;color:#fff;border-radius:0;}/*!sc*/
	@-webkit-keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@-webkit-keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	@keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	.ljUxiP:hover{background-color:transparent;color:#39e09b;border-color:#39e09b;}/*!sc*/
	data-styled.g93[id="sc-ctaXAZ"]{content:"ljUxiP,"}/*!sc*/
	.exGbzQ{overflow-wrap:break-word;word-wrap:break-word;word-break:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto;white-space:normal;background:none;color:inherit;-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), -webkit-transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),border-color .25s cubic-bezier(0.08,0.59,0.29,0.99), transform .25s cubic-bezier(0.08,0.59,0.29,0.99),background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);padding-left:20px;padding-right:20px;}/*!sc*/
	data-styled.g103[id="sc-tYoTV"]{content:"exGbzQ,"}/*!sc*/
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
</style>