<?php
/**
 * Template Name: Admin Reviews
 * Description: Yogabody Admin Reviews user page.
 */

get_header('links');
global $wpdb;
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
$reviews = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}profile_reviews WHERE user_id=$user_id AND review_status=1 ORDER BY review_id DESC");
?>
		<section class="main admin has-toolbar" data-page-links>
			<div id="SearchModalPortal"></div>
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<section class="primary">
					<div class="main">
						<div class="reviews-wrap" data-account-url="#" data-reviews="data-reviews">
							<div class="section section--small reviewsconfig" data-visibility="PREVIEW_ACCESS">
								<h3 data-fontsize="20" data-lineheight="30">Display Reviews</h3>
								<div class="section__inner">
									<div class="setting reviewsconfig">
										<div class="setting__heading">
											<h5>Show Or Hide Reviews</h5>
											<label class="setting__checkbox reviews__checkbox <?php echo ((isset($configration->reviewsconfig) && $configration->reviewsconfig==1) ? 'checked': '') ; ?>" custom-checkbox="custom-checkbox" data-custom-checkbox="data-custom-checkbox" for="setting-reviewsconfig"><input id="setting-reviewsconfig" data-settings-setting-key="account[reviews_config]" data-settings-setting-value="0" data-settings-setting="data-settings-setting" id="setting-reviewsconfig" name="reviewsconfig" type="checkbox" ></label>
										</div>
									</div>
								</div>
							</div>
							<div class="section section--small reviewsconfig" data-visibility="PREVIEW_ACCESS">
								<h3 data-fontsize="20" data-lineheight="30">Clients Reviews</h3>
								<div class="section__inner">
									<div class="setting reviewsconfig">
										<div class="all-reviews">
										<?php
										if($reviews){
											foreach($reviews as $review){
										?>
											<div class="one-review">
												<div class="name-rating">
													<div class="star-ratings">
														<div class="star-ratings-top" style="width: <?php echo (20*$review->review_stars) ?>%">
															<span>★</span>
															<span>★</span>
															<span>★</span>
															<span>★</span>
															<span>★</span>
														</div>
														<div class="star-ratings-bottom">
															<span>★</span>
															<span>★</span>
															<span>★</span>
															<span>★</span>
															<span>★</span>
														</div>
													</div>
													<div class="rating-name"><?=$review->review_name?></div>
													<div class="rating-date">(<?php echo date("F Y",$review->review_date); ?>)</div>
												</div>
												<div class="rating-comment">
													<div class="comment"><?=$review->review_comment?></div>
												</div>
												<div id="edit_reply_section_<?=$review->review_id?>" class="edit-reply-section" style="display:<?php echo $review->review_reply!='' ? 'block' : 'none'; ?>;" >
													<div class="reply-display">
														<div class="author-data">
															<div class="author-name"><?php echo ((isset($current_user->display_name) && $current_user->display_name!='') ? $current_user->display_name : $current_user->user_login ) ?></div>
															<div class="author-date">(<?php echo date("F Y",$review->review_reply_date); ?>)</div>
														</div>
														<div class="comment"><?=$review->review_reply?></div>
													</div>
													<div class="reply-link">
													<?php if($review->report_status==1){ ?>
														<a class="ReportAlready" data-id="<?=$review->review_id?>" href="#">[Reported Already]</a>
													<?php }else{ ?>
														<a class="ReportAReview" data-id="<?=$review->review_id?>" href="#">[Report]</a>
													<?php } ?>
														<a class="showReplyEdit" data-id="<?=$review->review_id?>" href="#">Edit</a></div>
													<div id="EditReply_<?=$review->review_id?>" class="reply-section">
														<div class="reply-inner">
															<div id="div_<?=$review->review_id?>_edit_reply_textarea" class="form-group ">
																<label for="edit_reply_textarea_<?=$review->review_id?>" class="control-label edit_reply_textarea_level requiredField"> Your reply on this review:</label>
																<div class="controls your_email_input">
																	<textarea rows="5" id="edit_reply_textarea_<?=$review->review_id?>" name="reply_edit_textarea"><?=$review->review_reply?></textarea> 
																</div>
															</div>
															<div id="div_<?=$review->review_id?>_submit_edit_reply" class="form-group ">
																<div class="controls submit_edit_reply_input">
																	<input data-id="<?=$review->review_id?>" class="button" type="button" name="submit_reply_edit" value="Update" />
																</div>
															</div> 
														</div>
													</div>
												</div>												
												<div id="reply_section_<?=$review->review_id?>" class="rating-reply-section" style="display:<?php echo $review->review_reply!='' ? 'none' : 'block'; ?>;" >
													<div class="reply-link">
													<?php if($review->report_status==1){ ?>
														<a class="ReportAlready" data-id="<?=$review->review_id?>" href="#">[Reported Already]</a>
													<?php }else{ ?>
														<a class="ReportAReview" data-id="<?=$review->review_id?>" href="#">[Report]</a>
													<?php } ?>
														<a class="showReplyForm" data-id="<?=$review->review_id?>" href="#">Reply</a>
													</div>
													<div id="reply_<?=$review->review_id?>" class="reply-section">
														<div class="reply-inner">
															<div id="div_<?=$review->review_id?>_reply_textarea" class="form-group ">
																<label for="reply_textarea_<?=$review->review_id?>" class="control-label reply_textarea_level requiredField"> Your reply on this review:</label>
																<div class="controls your_email_input">
																	<textarea rows="5" id="reply_textarea_<?=$review->review_id?>" name="reply_textarea"></textarea> 
																</div>
															</div>
															<div id="div_<?=$review->review_id?>_submit_reply" class="form-group ">
																<div class="controls submit_reply_input">
																	<input data-id="<?=$review->review_id?>" class="button" type="button" name="submit_reply" value="Reply" />
																</div>
															</div> 
														</div>
													</div>
												</div>
											</div>
											<div id="report_review_<?=$review->review_id?>" class="report-review">
												<form id="submit_report_<?=$review->review_id?>" name="submit-review">
													<div class="report-inner">
														<label for="reply_textarea_<?=$review->review_id?>" class="control-label reply_textarea_level requiredField">Your Reason:</label>
														<textarea required="true" class="report-textarea" name="report_textarea_<?=$review->review_id?>"></textarea>
													</div>
													<div class="report-submit">
														<input class="report_submit_button button" data-id="<?=$review->review_id?>" type="button" value="submit" name="submit_report_review" />
													</div>
												</form>
											</div>
										<?php
											}
										}
										?>
										</div>
									</div>
								</div>
							</div>
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