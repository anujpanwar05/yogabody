<?php
/**
 * Template Name: Admin Appearance
 * Description: Yogabody Admin Appearance user page.
 */

get_header('links');
$current_user = wp_get_current_user();
$user_id = get_current_user_id();
$configration = get_user_meta($user_id,'yogabody_configration',true);
if(empty($configration)){
	$configration = new stdClass;
}else{
$configration = json_decode($configration);
}
if(isset($configration->theme) && $configration->theme!=''){

}else{
$configration->theme='snow';
}	
?>
		<section class="main admin has-toolbar" data-page-links>
			<div id="SearchModalPortal"></div>
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<section class="primary">
					<div class="main">
						<div class="appearance-wrap" data-account-url="#" data-appearance="data-appearance">
							<div class="appearance">
								<div class="section section--medium profile">
									<h3>Profile</h3>
									<div class="section__inner">
										<div id="setting-page-options" class="setting">
											<div id="CustomAvatar" data-default-image="<?= get_site_url() ?>/wp-content/uploads/2021/02/default_profile_picture.png">
												<div class="sc-dyUqLn jSKrsD">
													<div class="sc-jwzInS jCMSKA">
														<div class="show_image" aria-disabled="false" style="position: absolute; width: 100%; height: 100%;">
															<input id="upload_profile" accept="image/*" type="file" multiple="" autocomplete="off" style="position: absolute; inset: 0px; opacity: 1e-05; pointer-events: none;">
														</div>
													</div>
													<div class="sc-hWgnmY bXNsOS">
														<button id="change-profile-pic" class="button purple">Upload Pic</button>
														<button id="remove-profile-pic" class="button grey">Remove</button>
													</div>
												</div>
											</div>
											<label class="active-input" for="setting-page-title"><input class="field is-empty" data-settings-setting-key="account[page_title]" data-settings-setting-value="" data-settings-setting="data-settings-setting" id="setting-page-title" name="account[page_title]" placeholder="<?= $current_user->user_login ?>" type="text" value="<?php echo ((isset($configration->profile_title) && $configration->profile_title!='') ? $configration->profile_title : '') ?>"><span><span><?php echo ((isset($configration->profile_title) && $configration->profile_title!='') ? $configration->profile_title : 'Your Name') ?></span></span></label>
											<div data-active-input-error="data-active-input-error" data-settings-validationerror="setting-page-title"></div>
										</div>
										<div id="profile_pic_modal" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													   <h3>Change Profile Picture</h3>
													</div>
													<div class="modal-body">
														<form id="cropimage" method="post" enctype="multipart/form-data" action="<?= get_site_url() ?>/change_pic.php">
															<strong>Upload Image:</strong> <br><br>
															<input type="file" name="profile-pic" id="profile-pic" />
															<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
															<input type="hidden" name="hdn-x1-axis" id="hdn-x1-axis" value="" />
															<input type="hidden" name="hdn-y1-axis" id="hdn-y1-axis" value="" />
															<input type="hidden" name="hdn-x2-axis" value="" id="hdn-x2-axis" />
															<input type="hidden" name="hdn-y2-axis" value="" id="hdn-y2-axis" />
															<input type="hidden" name="hdn-thumb-width" id="hdn-thumb-width" value="" />
															<input type="hidden" name="hdn-thumb-height" id="hdn-thumb-height" value="" />
															<input type="hidden" name="action" value="" id="action" />
															<input type="hidden" name="image_name" value="" id="image_name" />
															
															<div id='preview-profile-pic'></div>
														<div id="thumbs" style="padding:5px; width:600p"></div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
													</div>
												</div>
											</div>
										</div>
										<div id="Appearance--Description">
											<div class="sc-gATInX ipmUWe">
												<div class="sc-cRcunm eDdkeT">Bio</div>
												<div class="sc-gfHAkt hQtdpy">
													<textarea placeholder="Enter a bio description to appear on your Linktree" rows="3" class="sc-hcevGk ekFRyU"><?php echo ((isset($configration->profile_description) && $configration->profile_description!='') ? $configration->profile_description : '') ?></textarea>
													<div class="sc-hxqDJO gAmve"></div>
												</div>
												<?php /*
												<div class="sc-koaBLD bHoCON">
													<span class="sc-ha-DqYV fduQSa">
														<span class="sc-kTaSZA iQkmfe">0</span>/
														<span class="sc-kTaSZA iQkmfe">80</span>
													</span>
												</div>
												*/ ?>
											</div>
										</div>
									</div>
								</div>
								<div class="section theme">
									<h3>Themes</h3>
									<div class="section__inner"> 
										<div id="setting-theme" class="setting">
											<input type="hidden" name="selected_theme" id="selected_theme" value="<?php echo ((isset($configration->theme) && $configration->theme!='') ? $configration->theme : '') ?>" />
											<div class="grid grid-type--card" data-active-highlight>
											<?php /* <label class="grid__item" for="colourway-radio-zengovari" data-active-highlight-for="#colourway-radio-zengovari" data-value="zengovari" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--judit-zengovari" data-height-padder></div>
													<span class="grid__title">Yogabody x Zengovari</span><input hidden id="colourway-radio-zengovari" type="radio" name="account[colourway]" value="zengovari" data-settings-setting-key="account[colourway]" data-settings-setting-value="zengovari" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-ukelaylie" data-active-highlight-for="#colourway-radio-ukelaylie" data-value="ukelaylie" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--ukelaylie" data-height-padder></div>
													<span class="grid__title">Yogabody x Laylie</span><input hidden id="colourway-radio-ukelaylie" type="radio" name="account[colourway]" value="ukelaylie" data-settings-setting-key="account[colourway]" data-settings-setting-value="ukelaylie" data-settings-setting="data-settings-setting" >
												</label> */ ?>
												<label class="grid__item" for="colourway-radio-leaf" data-active-highlight-for="#colourway-radio-leaf" data-value="leaf" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--leaf" data-height-padder></div>
													<span class="grid__title">Green</span><input hidden id="colourway-radio-leaf" type="radio" name="account[colourway]" value="leaf" data-settings-setting-key="account[colourway]" data-settings-setting-value="leaf" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-snow" data-active-highlight-for="#colourway-radio-snow" data-value="snow" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--snow" data-height-padder></div>
													<span class="grid__title">Black</span><input hidden id="colourway-radio-snow" type="radio" name="account[colourway]" value="snow" data-settings-setting-key="account[colourway]" data-settings-setting-value="snow" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-moon" data-active-highlight-for="#colourway-radio-moon" data-value="moon" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--moon" data-height-padder></div>
													<span class="grid__title">Blue</span><input hidden id="colourway-radio-moon" type="radio" name="account[colourway]" value="moon" data-settings-setting-key="account[colourway]" data-settings-setting-value="moon" data-settings-setting="data-settings-setting" >
												</label>
												<?php /*
												<label class="grid__item" for="colourway-radio-smoke" data-active-highlight-for="#colourway-radio-smoke" data-value="smoke" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--smoke" data-height-padder></div>
													<span class="grid__title">Smoke</span><input hidden id="colourway-radio-smoke" type="radio" name="account[colourway]" value="smoke" data-settings-setting-key="account[colourway]" data-settings-setting-value="smoke" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-noir" data-active-highlight-for="#colourway-radio-noir" data-value="noir" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--noir" data-height-padder></div>
													<span class="grid__title">Noir</span><input hidden id="colourway-radio-noir" type="radio" name="account[colourway]" value="noir" data-settings-setting-key="account[colourway]" data-settings-setting-value="noir" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-mint" data-active-highlight-for="#colourway-radio-mint" data-value="mint" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--mint" data-height-padder></div>
													<span class="grid__title">Mint</span><input hidden id="colourway-radio-mint" type="radio" name="account[colourway]" value="mint" data-settings-setting-key="account[colourway]" data-settings-setting-value="mint" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-miami" data-active-highlight-for="#colourway-radio-miami" data-value="miami" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--miami" data-height-padder></div>
													<span class="grid__title">Miami</span><input hidden id="colourway-radio-miami" type="radio" name="account[colourway]" value="miami" data-settings-setting-key="account[colourway]" data-settings-setting-value="miami" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-bloom" data-active-highlight-for="#colourway-radio-bloom" data-value="bloom" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--bloom" data-height-padder></div>
													<span class="grid__title">Bloom</span><input hidden id="colourway-radio-bloom" type="radio" name="account[colourway]" value="bloom" data-settings-setting-key="account[colourway]" data-settings-setting-value="bloom" data-settings-setting="data-settings-setting" >
												</label>
												<label class="grid__item" for="colourway-radio-spray" data-active-highlight-for="#colourway-radio-spray" data-value="spray" data-visibility="FULL_ACCESS">
													<div class="grid__inner grid__inner--spray" data-height-padder></div>
													<span class="grid__title">Spray</span><input hidden id="colourway-radio-spray" type="radio" name="account[colourway]" value="spray" data-settings-setting-key="account[colourway]" data-settings-setting-value="spray" data-settings-setting="data-settings-setting" >
												</label>
												*/ ?>
											</div>
											<div class="active-highlight" style="border-color: rgb(174, 174, 174);width: 194px;height: 286px;top: 26px;left: 326px;"></div>
										</div>
									</div>
								</div>
							</div>
							<?php /*
							<div class="section section--small whitelabel" data-visibility="PREVIEW_ACCESS">
								<div class="section__inner">
									<div class="setting whitelabel">
										<div class="setting__heading">
											<h5>Hide the Yogabody logo</h5>
											<label class="setting__checkbox <?php echo ((isset($configration->whitelist) && $configration->whitelist==1) ? 'checked': '') ; ?>" custom-checkbox="custom-checkbox" data-custom-checkbox="data-custom-checkbox" for="setting-whitelabel"><input id="setting-whitelabel" data-settings-setting-key="account[white_label]" data-settings-setting-value="0" data-settings-setting="data-settings-setting" id="setting-whitelabel" name="whitelabel" type="checkbox" ></label>
										</div>
									</div>
								</div>
							</div>
							*/ ?>
						</div>
					</div>
				</section>
			</section>
		</section>
<?php
if(isset($configration->profile_picture) && $configration->profile_picture!=''){ ?>
<style>
.show_image{
background-image: url(<?php echo $configration->profile_picture; ?>);	
background-size: cover;
}	
</style>
<?php } ?>
<?php get_footer('links');