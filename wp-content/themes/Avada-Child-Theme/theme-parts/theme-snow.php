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
						<div class="sc-bdfBwQ eZNKTD"><img src="<?=$profile_picture?>" alt="Profile Image" data-testid="ProfileImage" filter="none" display="block" class="sc-iBPRYJ QFLjD"/></div>
						<div class="sc-bdfBwQ llgrqs">
							<h1 class="sc-dlfnbm gEUmsQ"><?php echo ((isset($args['current_user']->display_name) && $args['current_user']->display_name!='') ? $args['current_user']->display_name : $args['current_user']->user_login ) ?></h1>
						</div>
						<?php if(isset($args['configration']->reviewsconfig) && $args['configration']->reviewsconfig==1){ ?>
						<div class="sc-bdfBwQ ciojAP ratingreview">
							<?php
							if($args['reviews']){
								$total = $args['reviews']->total;
								$rating = $args['reviews']->rating;
								$raingpercent = ($rating/$total*20);
								?>
							<div class="star-ratings ratingdiv">
								<div class="star-ratings-top" style="width: <?php echo $raingpercent ?>%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
								<div class="star-ratings-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
							</div>
							<div class="goto-review reviewdiv"><a target="_blank" href="<?php echo get_site_url().'/'.$args['current_user']->user_login.'/reviews'; ?>"><?=$total?> Reviews</a></div>
							<?php } ?>
						</div>
						<?php } ?>
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
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="#" rel="noopener noreferrer" data-id="<?=$link->ID?>" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="PaymentOpen sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton PaymentLinkIcon">
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<img style="width:100%" src="https://yogabody.bio/wp-content/uploads/2021/02/ShoppingCart_Icon.png" />
							</div>
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
					<div id="display_payment_<?=$link->ID?>" class="payment-display">
						<div class="payment-display-inner">
							<div class="payment-image">
								<?php if($link->linkContext && $link->linkContext!="NULL"){ ?>
								<img src="<?php echo $link->linkContext; ?>" class="payment-img" />
								<?php }else{ ?>
								<img src="https://yogabody.bio/wp-content/uploads/2021/02/pexels-mikhail-nilov-6740756-scaled.jpg" class="payment-img" />
								<?php } ?>
							</div>
							<div class="payment-product-info">
								<div class="payment-product-name"><?php echo $link->class_product_name; ?></div>
								<div class="payment-buy-price">
									<div class="payment-price"><?php echo $link->class_price; ?> <?php echo $link->price_currency; ?></div>
									<div class="payment-buy"><a class="payment-buy-anchor" href="<?php echo $url; ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg> <span>Add to Cart</span></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }else if($link->type=='STORE'){ ?>
					<div class="sc-bdfBwQ pkAuV">
						<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
							<a href="#" data-id="<?=$link->ID?>" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="PaymentOpen LinkButton sc-pFZIQ sc-tYoTV fxPOXp exGbzQ PaymentLinkIcon">
								<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
								<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
									<img style="width:100%" src="https://yogabody.bio/wp-content/uploads/2021/02/ShoppingCart_Icon.png" />
								</div>
							</a>
						</div>
						<div id="display_payment_<?=$link->ID?>" class="payment-display">
							<div class="payment-display-inner">
							<?php if($link->work_experience){
									$work_experience = json_decode($link->work_experience);
									foreach($work_experience as $store){
										$url = "https://www.paypal.com/cgi-bin/webscr?cmd=_cart&add=1&business=$store->store_email&item_name=$store->store_product_name&item_number=123456&amount=$store->store_price&currency_code=$store->store_currency";
									?>
								<div class="store-one">
									<div class="payment-image">
										<?php if($store->store_product_image_hidden && $store->store_product_image_hidden!="NULL"){ ?>
										<img src="<?php echo $store->store_product_image_hidden; ?>" class="payment-img" />
										<?php }else{ ?>
										<img src="https://yogabody.bio/wp-content/uploads/2021/02/pexels-mikhail-nilov-6740756-scaled.jpg" class="payment-img" />
										<?php } ?>
									</div>
									<div class="payment-product-info">
										<div class="payment-product-name"><?php echo $store->store_product_name; ?></div>
										<div class="payment-buy-price">
											<div class="payment-price"><?php echo $store->store_price; ?> <?php echo $store->store_currency; ?></div>
											<div class="payment-buy"><a class="payment-buy-anchor" href="<?php echo $url; ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg> <span>Add to Cart</span></a> </div>
										</div>
									</div>
								</div>
							<?php }} ?>
							</div>
						</div>
					</div>
				<?php }else if($link->type=='RESUME'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="#" id="resume_<?=$link->ID?>" data-id="<?=$link->ID?>" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton resumeopen">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 463.902 463.902" style="enable-background:new 0 0 463.902 463.902;" xml:space="preserve"> <g> <g id="Layer_2_9_"> <g> <path d="M90.722,80.25c4.478,2.52,34.62,17.082,49.182,24.094c0.057,5.652,0.182,15.426,0.374,15.592 c1.605,13.996,4.36,29.545,5.158,33.936c-1.324,0.734-8.129,5.184-8.129,19.025c0.006,0.078,0.013,0.15,0.019,0.229 c-0.01,0.363-0.019,0.729-0.019,1.105c2.929,38.471,18.229,21.891,21.384,38.742c5.248,28.018,30.056,48.289,45.498,55.287 c8.925,4.043,18.11,6.105,27.763,6.303c9.653-0.197,18.838-2.26,27.763-6.303c15.442-6.998,40.25-27.27,45.498-55.287 c3.155-16.852,18.455-0.271,21.385-38.742c0-0.377-0.01-0.742-0.02-1.105c0.006-0.078,0.013-0.15,0.02-0.229 c0-13.842-6.807-18.291-8.13-19.025c0.799-4.391,3.554-19.939,5.158-33.936c0.191-0.166,0.317-9.939,0.374-15.592 c7.998-3.852,20.692-9.979,31.256-15.139v37.189c-2.934,1.732-4.997,4.789-4.997,8.434c0,3.227,1.638,5.961,4.025,7.768 c0,0-4.244,23.855-5.616,30.871c-1.372,7.014,24.201,5.607,23.05,0c-1.15-5.609-5.613-30.871-5.613-30.871 c2.388-1.807,4.025-4.541,4.025-7.768c0-3.646-2.054-6.701-4.986-8.434V84.346c3.937-1.953,6.867-3.438,8.037-4.096 c3.169-1.783,4.875-4.064,4.515-6.434c0.433-2.471-1.354-5.127-6.149-7.475C337.324,49.589,250.076,6.892,241.449,2.777 c-3.764-1.795-6.862-2.588-9.497-2.777c-2.635,0.189-5.733,0.982-9.497,2.777C213.828,6.892,126.58,49.59,92.358,66.341 c-4.797,2.348-6.583,5.004-6.149,7.475C85.847,76.186,87.554,78.467,90.722,80.25z"/> <path d="M348.104,320.885c-16.101-5.805-44.125-22.541-48.927-25.123c-1.244-0.723-2.686-1.145-4.229-1.145 c-3.369,0-6.269,1.977-7.619,4.838c-13.275,22.223-37.886,86.846-55.058,88.045c-0.105-0.008-0.213-0.029-0.319-0.041 c-0.106,0.012-0.214,0.033-0.319,0.041c-17.172-1.199-41.783-65.822-55.058-88.045c-1.351-2.861-4.25-4.838-7.619-4.838 c-1.544,0-2.985,0.422-4.23,1.145c-4.801,2.582-32.826,19.318-48.926,25.123c-54.042,19.486-78.348,39.359-78.348,52.91 c0,0.393,0,0.842,0,1.334c0,16.504,0,87.439,0,87.439c0,0.864,0,1.334,0,1.334h194.181h0.319h0.319h194.181c0,0,0-0.47,0-1.334 c0,0,0-70.937,0-87.439c0-0.492,0-0.941,0-1.334C426.451,360.244,402.146,340.371,348.104,320.885z"/> </g> </g> </g> </svg>
							</div>
						</a>
					</div> 
					<div id="display_resume_<?=$link->ID?>" class="resume-display">
						<div class="resume-inner">
							<div class="resume_new_about">
								<label>ABOUT</label>
								<div class="resume_new_display">
									<?php echo $link->resume_about ; ?>
								</div>
							</div>
							<div class="resume_new_about">
								<label>WORK EXPERIENCE</label>
								<div class="resume_new_display">
									<?php if($link->work_experience){
									$work_experience = json_decode($link->work_experience);
									foreach($work_experience as $work){
										
									?>
									<div class="work-experience">
										<?php if($work->end_date_month=='Present' || $work->end_date_year=='Present'){ ?>
										<p><?php echo $work->company_name ; ?> (<?php echo $work->start_date_month ; ?> <?php echo $work->start_date_year ; ?> – <?php echo 'Present' ; ?>) </p>
										<?php }else{ ?>
										<p><?php echo $work->company_name ; ?> (<?php echo $work->start_date_month ; ?> <?php echo $work->start_date_year ; ?> – <?php echo $work->end_date_month ; ?> <?php echo $work->end_date_year ; ?>) </p>	
										<?php } ?>
										<p>Job Title: <?php echo $work->job_title ; ?> </p>
										<p><?php echo $work->notes_on_work ; ?> </p>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="resume_new_about">
								<label>EDUCATION & TRAINING</label>
								<div class="resume_new_display">
									<?php if($link->education_training){
									$education_training = json_decode($link->education_training);
									foreach($education_training as $education){
									?>
									<div class="education-training">
									<?php if($education->cert_logo_skip=='off'){ ?>
										<div class="education-logo">
											<?php if($education->add_cert_logo=='200hr Vinyasa'){ ?>
												<img src="https://yogabody.bio/wp-content/uploads/2021/02/200h-Vinyasa-image.png" />
											<?php }else if($education->add_cert_logo=='Yoga Trapeze'){ ?>
												<img src="https://yogabody.bio/wp-content/uploads/2021/02/Yoga-Trapeze-image.png" />
											<?php }else if($education->add_cert_logo=='Breath Coach'){ ?>
												<img src="https://yogabody.bio/wp-content/uploads/2021/02/Breath-Coach-image.png" />
											<?php }else if($education->add_cert_logo=='Flexibility Coach'){ ?>
												<img src="https://yogabody.bio/wp-content/uploads/2021/02/Flexibility-Coach-image.png" />
											<?php } ?>
										</div>
										<div class="education-text">
											<p><?php echo $education->school_institution ; ?><p>
											<p><?php echo $education->area_of_study ; ?><p>
											<p><?php echo $education->certification_receive ; ?> (<?php echo $education->date_of_completion_month ; ?> <?php echo $education->date_of_completion_year ; ?>)<p>
										</div>
									<?php }else{ ?>
										<p><?php echo $education->school_institution ; ?><p>
										<p><?php echo $education->area_of_study ; ?><p>
										<p><?php echo $education->certification_receive ; ?> (<?php echo $education->date_of_completion_month ; ?> <?php echo $education->date_of_completion_year ; ?>)<p>
									<?php } ?>
									</div>
									<?php } } ?>
								</div>
							</div>
							<div class="resume_new_about">
								<label>SKILLS / INTERESTS</label>
								<div class="resume_new_display">
									<?php echo $link->skills_interests ; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }else if($link->type=='VIDEO'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div id="videoContainer_<?=$link->ID?>" data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<div id="video_embed_<?=$link->ID?>" class="video-embed">
							<div id="video_embed_opacity_<?=$link->ID?>" class="video-embed-opacity" style="opacity: 0;">
								<div id="video_embed_iframe_<?=$link->ID?>" class="video-embed-iframe"></div>
							</div>
						</div>
						<a href="#" data-id="<?=$link->ID?>" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="LinkButton openVideo sc-pFZIQ sc-tYoTV fxPOXp exGbzQ">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<img style="width:100%" src="https://yogabody.bio/wp-content/uploads/2021/02/video-camera.png" />
							</div>
						</a>
					</div>
				</div>
				<?php }elseif($link->type=='STUDENT'){
							if($link->embed_type=='english'){
							$FormLink = 'https://www.newstudentform.com/yoga-class-form2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
							}elseif($link->embed_type=='spanish'){
							$FormLink = 'https://www.newstudentform.com/yoga-class-form-es2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
							}elseif($link->embed_type=='french'){
							$FormLink = 'https://www.newstudentform.com/yoga-class-form-Fr2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
							}elseif($link->embed_type=='breath_coaching_en'){
							$FormLink = 'https://www.newstudentform.com/yoga-class-form-breath-coach2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
							}else{
							$FormLink = 'https://www.newstudentform.com/yoga-class-form2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
							}
				?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="<?= $FormLink ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton">
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<img style="width:80%" src="https://yogabody.bio/wp-content/uploads/2021/02/Student_Black.png" />
							</div>
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php }elseif($link->type=='BREATHCOACHING'){
					$FormLink = 'https://www.newstudentform.com/yoga-class-form-breath-coach2/?your_first_name='.$link->class_product_name.'&your_last_name='.$link->class_price.'&your_email='.$link->paypal_email.'&business_name='.$link->price_currency;
				?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="<?= $FormLink ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton">
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<img style="width:80%" src="https://yogabody.bio/wp-content/uploads/2021/02/Student_Black.png" />
							</div>
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php }else if($link->type=='CLASSIC'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="<?= addHttp($link->url) ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="LinkButton sc-pFZIQ sc-tYoTV fxPOXp exGbzQ">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php }else if($link->type=='DIGITAL'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="<?= addHttp($link->url) ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="LinkButton sc-pFZIQ sc-tYoTV fxPOXp exGbzQ">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<?php }else if($link->type=='ZOOM'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="#" data-id="<?=$link->ID?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="scheduleopen LinkButton sc-pFZIQ sc-tYoTV fxPOXp exGbzQ">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div>
				</div>
				<div id="display_schedule_<?=$link->ID?>" class="schedule-display">
					<div class="schedule-inner"> 
					<?php if($link->work_experience){ 
						$schedules = json_decode($link->work_experience);
						//echo"<pre>";print_r($schedules);echo"</pre>";die('working');
						foreach($schedules as $schedule){
							
					?>
						<div class="schedule-one">
							<div class="schedule-zoom-details">
								<div class="schedule-zoom-image"><img class="image-schedule" src="https://yogabody.bio/wp-content/uploads/2021/02/zoom-image.png" /></div>
								<div class="schedule-title-desc-btn">
									<div class="schedule-title"><?php echo $schedule->topic; ?></div>
									<div class="schedule-desc"><?php echo $schedule->agenda; ?></div>
									<div class="schedule-date-time"><?php echo date("l M d,", strtotime($schedule->Start_Date)); ?><br/> <?php echo date("g:i A", strtotime($schedule->Start_Time)); ?> - <?php echo date("g:i A", strtotime("+$schedule->Time_Duration minutes", strtotime($schedule->Start_Time))); ?></div>
									<div class="schedule-btn"><a class="schedule-btn-anchor" target="_blank" href="<?php echo $schedule->zoomurl; ?>">JOIN CLASS</a></div>
								</div>
							</div>
						</div>
					<?php } } ?>
					</div>
				</div>
				<?php }else if($link->type=='BUILDEMAIL'){ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="#" data-id="<?=$link->ID?>" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="PaymentOpen LinkButton sc-pFZIQ sc-tYoTV fxPOXp exGbzQ">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
							<div class="sc-bdfBwQ sc-gsTCUz sc-eGCarw fNlWAC bhdLno XyyJk">
								<img style="width:100%" src="<?= get_site_url() ?>/wp-content/uploads/2021/02/Group-4241.png" />
							</div>
						</a>
					</div>
					<div id="display_payment_<?=$link->ID?>" class="payment-display">
						<div class="buildform-display-inner">
							<div class="buildform-one">
								<div class="buildform-image">
									<img src="https://development.yogabody.bio/wp-content/uploads/2021/02/email.png" class="buildform-img" />
								</div>
								<div class="buildform-info">
									<form id="buildlist_form_<?=$link->ID?>" method="post" action="">
										<div class="form-group">
											<label for="email">Full Name:</label>
											<input type="text" class="form-control" name="name_buildform" placeholder="Full Name" id="buildname_<?=$link->ID?>" required="true" />
										</div>
										<div class="form-group">
											<label for="pwd">Email:</label>
											<input type="email" class="form-control" name="email_buildform" placeholder="Email" id="buildemail_<?=$link->ID?>" required="true" />
										</div> 
										<div class="form-group form-check">
											<label class="form-check-label">
											<input class="form-check-input" name="checkbox_buildform" id="build_checkbox_<?=$link->ID?>" type="checkbox" required="true" /> <span><?=$link->resume_about?></span>
										</label>
										</div>
										<button type="submit" data-id="<?=$link->ID?>" class="submit_buildlist_form btn btn-primary button">Submit</button>
										<div id="buildlist_message_<?=$link->ID?>" class="form-group buildlist-message">
										<p><?=$link->price_currency?></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="sc-bdfBwQ pkAuV">
					<div data-testid="StyledContainer" class="sc-bdfBwQ sc-ctaXAZ kzCoZd gsOFqj">
						<a href="<?= addHttp($link->url) ?>" target="_blank" rel="noopener noreferrer" data-testid="LinkButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="auto" class="sc-pFZIQ sc-tYoTV fxPOXp exGbzQ LinkButton">
							<p class="sc-hKgILt fpenDC"><?php echo stripcslashes($link->title) ?></p>
						</a>
					</div> 
				</div>
				<?php } }} ?>
			</div>
			<div class="sc-bdfBwQ jAmcnV">
				<div class="socials-media-logos">
					<?php if(isset($args['configration']->instagram_url) && $args['configration']->instagram_url!=''){ ?>
					<span class="socials-media-span instagram">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->instagram_url ?>">
							<img alt="instagram-icon" class="instagram-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/instagram-icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->facebook_url) && $args['configration']->facebook_url!=''){ ?>
					<span class="socials-media-span facebook">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->facebook_url ?>">
							<img alt="facebook-icon" class="facebook-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/facebook-icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->tiktok_url) && $args['configration']->tiktok_url!=''){ ?>
					<span class="socials-media-span tiktok">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->tiktok_url ?>">
							<img alt="tiktok-icon" class="tiktok-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/tiktok-icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->youtube_url) && $args['configration']->youtube_url!=''){ ?>
					<span class="socials-media-span youtube">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->youtube_url ?>">
							<img alt="youtube-icon" class="youtube-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/Youtube_Icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->linkedin_url) && $args['configration']->linkedin_url!=''){ ?>
					<span class="socials-media-span linkedin">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->linkedin_url ?>">
							<img alt="linkedin-icon" class="linkedin-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/linkedin-icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->whatsapp_url) && $args['configration']->whatsapp_url!=''){ ?>
					<span class="socials-media-span whatsapp">
						<a class="socials-iicon" target="_blank" href="https://wa.me/<?= $args['configration']->country_code ?><?= $args['configration']->whatsapp_url ?>">
							<img alt="whatsapp-icon" class="whatsapp-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/whatsapp-icon.png" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->email_url) && $args['configration']->email_url!=''){ ?>
					<span class="socials-media-span email">
						<a class="socials-iicon" target="_blank" href="mailto:<?= $args['configration']->email_url ?>">
							<img alt="email-icon" class="email-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/Image-from-iOS.jpg" />
						</a>
					</span>
					<?php } ?>
					<?php if(isset($args['configration']->telegram_url) && $args['configration']->telegram_url!=''){ ?>
					<span class="socials-media-span telegram">
						<a class="socials-iicon" target="_blank" href="<?= $args['configration']->telegram_url ?>">
							<img alt="telegram-icon" class="telegram-icon" src="<?=get_site_url()?>/wp-content/uploads/2021/02/telegram-icon-1.png" />
						</a>
					</span>
					<?php } ?>
				</div>
				<?php //if(isset($args['configration']->whitelist) && $args['configration']->whitelist!=1){ ?>
					<div class="new-footer">
					<div class="footer-logo-part">
						<a href="https://www.yogateacherscollege.com/">
							<img class="footer-logo" src="https://yogabody.bio/wp-content/uploads/2021/02/logo-ytc.png" />
						</a>
					</div>
					<div class="footer-text-part">
						<div>Provided by <b><a style="cursor:pointer;color:darkgrey;text-decoration: none;" href="https://www.yogabody.com/">YOGABODY</a></b>® & <b><a style="cursor:pointer;color:darkgrey;text-decoration: none;" href="https://www.yogateacherscollege.com/">Yoga Teachers College</a></b>®</div>
						<div><a style="cursor:pointer;color:darkgrey;text-decoration: none;" href="<?=get_the_permalink(78)?>">Privacy Policy</a>  -  <a style="cursor:pointer;color:darkgrey;text-decoration: none;" href="<?=get_the_permalink(76)?>">Terms & Conditions</a></div>
					</div>
				</div>
				<?php //} ?>
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
	.jgGrsq{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin-top:0px;margin-bottom:32px;width:100%;height:100%;}/*!sc*/
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
	.gsOFqj{z-index:0;overflow:hidden;margin-bottom:16px;-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),-webkit-transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);-webkit-transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);transition:box-shadow .25s cubic-bezier(0.08,0.59,0.29,0.99),color .25s cubic-bezier(0.08,0.59,0.29,0.99), border-color .25s cubic-bezier(0.08,0.59,0.29,0.99),transform .25s cubic-bezier(0.08,0.59,0.29,0.99), background-color .25s cubic-bezier(0.08,0.59,0.29,0.99);border:2px solid;border-color:#3d3b3c;background-color:#3d3b3c;color:#fff;border-radius:0;}/*!sc*/
	@-webkit-keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@keyframes topwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:680px top;mask-position:680px top;}}/*!sc*/
	@-webkit-keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	@keyframes bottomwave{from{-webkit-mask-position:0 top;mask-position:0 top;}to{-webkit-mask-position:-680px top;mask-position:-680px top;}}/*!sc*/
	.gsOFqj:hover{background-color:transparent;color:#3d3b3c;border-color:#3d3b3c;}/*!sc*/
	data-styled.g93[id="sc-ctaXAZ"]{content:"gsOFqj,"}/*!sc*/
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