<!DOCTYPE HTML>
<html>
<?php
global $wp,$wpdb;
$url = home_url( $wp->request );
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$user_login = $uriSegments[1];
$user_ip = get_the_user_ipp();
$current_user = get_user_by('login',$user_login);
if($current_user){
$user_id = $current_user->ID;
$reviews = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}profile_reviews WHERE user_id=$user_id AND review_status=1 ORDER BY review_id DESC");
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
if(isset($configration->profile_picture) && $configration->profile_picture!=''){
	$profile_picture = $configration->profile_picture;
}else{
	$profile_picture = get_site_url().'/wp-content/uploads/2021/02/default_profile_picture.png';
}
?>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Reviews</title>
	<link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/static/admin/reviews-display.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	
</head>

<body>
<div class="reviews-outer">
<div class="Reviews">
<div class="review-wrapper">
	<div class="sc-bdfBwQ eZNKTD">
		<div class="sc-bdfBwQ sc-gsTCUz jgGrsq bhdLno">
			<div class="sc-bdfBwQ eZNKTD"><img src="<?=$profile_picture?>" alt="Profile Image" data-testid="ProfileImage" filter="none" display="block" class="sc-iBPRYJ QFLjD"/></div>
			<div class="sc-bdfBwQ llgrqs">
				<h1 class="sc-dlfnbm gEUmsQ"><?php echo ((isset($current_user->display_name) && $current_user->display_name!='') ? $current_user->display_name : $current_user->user_login ) ?></h1>
			</div>
			<?php /* if(isset($configration->profile_description) && $configration->profile_description!=''){ ?>
			<div class="sc-bdfBwQ ciojAP">
				<p class="sc-hKgILt eyNoCk"><?= $configration->profile_description ?></p>
			</div>
			<?php } */ ?>
		</div>
	</div>
	<div class="review-page-title">
		<h2>Verified Reviews</h2>
		<a href="#" class="Write-a-review" >[write a review]</a>
	</div>
	<div class="w-full flex-col pt-10 pb-10">
	<?php
	if($reviews){
		foreach($reviews as $review){
	?>
		<div class="flex w-full flex-col mb-8 last:mb-0">
			<div class="flex flex-row">
				<div class="flex flex-col">
					<div class="flex">
						<div class="flex mt-2 star-ratings mx-0">
							<div class="star-ratings-top" style="width: <?php echo (20*$review->review_stars) ?>%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
							<div class="star-ratings-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
						</div>
						<div class="flex font-medium text-base items-center">
							<?=$review->review_name?>
							<div class="flex ml-2 font-normal text-sm text-gray-600">
								(<?php echo date("F Y",$review->review_date); ?>)
							</div>
						</div>
					</div>
					<div id="after_update_review_<?=$review->review_id?>" class="flex mt-4">
						<?=$review->review_comment?> 
					</div>
					<?php if($user_ip==$review->ip_location){ ?>
					<div class="edit-message">
						<a class="editOwnReview" data-id="<?=$review->review_id?>" href="#">Edit Review</a>
					</div>
					<?php } ?>
					<?php if($review->review_reply!=''){ ?>
					<div class="reply-section">
						<div class="flex mt-4">
							<div class="flex font-medium text-base items-center">
								<?php echo ((isset($current_user->display_name) && $current_user->display_name!='') ? $current_user->display_name : $current_user->user_login ) ?>
								<div class="flex ml-2 font-normal text-sm text-gray-600">
									(<?php echo date("F Y",$review->review_reply_date); ?>)
								</div>
							</div>
						</div>
						<div class="flex mt-4">
							<div class="flex">
							<?=$review->review_reply?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div id="edit_comment_<?=$review->review_id?>" class="edit-comment-section flex flex-row">
				<div class="flex flex-col">
					<form id="edit_review_<?=$review->review_id?>" method="post" action="">
						<div class="col-md-12">
							<div id="div_id_stock_<?=$review->review_id?>_your_name" class="form-group ">
								<label for="edit_review_email_<?=$review->review_id?>" class="control-label School_Institution_level requiredField"> Verify Email:</label>
								<div class="controls your_name_input">
									<input type="email" name="edit_review_email" id="edit_review_email_<?=$review->review_id?>" class="textinput form-control" value="" required="true">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div id="div_id_stock_<?=$review->review_id?>_edit_review" class="form-group ">
								<label for="edit_review_textarea_<?=$review->review_id?>" class="control-label edit_review_level requiredField"> Edit Message:</label>
								<div class="controls edit_review_textarea">
									<textarea required="true" rows="5" name="edit_review" id="edit_review_textarea_<?=$review->review_id?>"><?=$review->review_comment?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div id="div_id_stock_<?=$review->review_id?>_edit_review_submit" class="form-group ">
								<div class="controls edit_review_submit_input">
									<input type="submit" name="edit_review_submit" data-id="<?=$review->review_id?>" id="your_name" class="button form-control" value="Update">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
		}
	}else{ ?>
		<p style="text-align: center;color: blue;">Currently this user has no reviews</p>
	 <?php }
		/* ?>		
		<div class="reviews-pagination"><span class="previous_page disabled">← Prev</span> <em class="current">1</em> <a rel="next" href="/yogabody/reviews?reviews_page=2#reviews">2</a> <a href="/yogabody/reviews?reviews_page=3#reviews">3</a> <a href="/yogabody/reviews?reviews_page=4#reviews">4</a> <a href="/yogabody/reviews?reviews_page=5#reviews">5</a> <a href="/yogabody/reviews?reviews_page=6#reviews">6</a> <a href="/yogabody/reviews?reviews_page=7#reviews">7</a> <a class="next_page" rel="next" href="/yogabody/reviews?reviews_page=2#reviews">Next →</a></div> */ ?>
	</div>
	<div id="leave_review" class="leave-review-wrap">
		<div class="leave-review-title">
		<h3>Leave a Review!</h3>
		</div>
		<form id="myForm" method="post" name="ratingform" action="">
		<div class="col-md-12">
			<div id="div_id_stock_1_your_name" class="form-group ">
				<label for="your_name" class="control-label School_Institution_level requiredField"> Your Name:</label>
				<div class="controls your_name_input">
					<input type="text" name="your_name" id="your_name" class="textinput form-control" value="">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div id="div_id_stock_1_your_email" class="form-group ">
				<label for="your_email" class="control-label School_Institution_level requiredField"> Your Email (not shown publicly):</label>
				<div class="controls your_email_input">
					<input type="email" name="your_email" id="your_email" class="textinput form-control" value="">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div id="div_id_stock_1_star_ranking" class="form-group ">
				<label for="star_ranking" class="control-label School_Institution_level requiredField"> Star Ranking:</label>
				<div class="controls star_ranking_input">
					<div class="rating">
						<label>
							<input class="starradio" type="radio" name="stars" value="1" />
							<span class="icon">★</span>
						</label>
						<label>
							<input class="starradio" type="radio" name="stars" value="2" />
							<span class="icon">★</span>
							<span class="icon">★</span>
						</label>
						<label>
							<input class="starradio" type="radio" name="stars" value="3" />
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>   
						</label>
						<label>
							<input class="starradio" type="radio" name="stars" value="4" />
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>
						</label>
						<label>
							<input class="starradio" type="radio" name="stars" value="5" />
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>
							<span class="icon">★</span>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div id="div_id_stock_1_your_review" class="form-group ">
				<label for="your_review" class="control-label School_Institution_level requiredField"> Your Review:</label>
				<div class="controls your_review_input">
					<textarea rows="5" id="your_review" name="your_review"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div id="div_id_stock_1_review_submit" class="form-group ">
				<div class="controls your_review_input">
					<input type="hidden" name="user_id" value="<?=$user_id?>" />
					<input data-user_id="<?=$user_id?>" type="submit" value="Submit" name="review_submit" class="review_submit" />
				</div>
			</div>
		</div>
		</form>
	</div>
	<div class="message" data-message="" data-message-id="review_success" data-message-text="Thanks! Your review submitted Successfully." data-message-type="success"><span>Thanks! Your review submitted Successfully.</span></div>
	<div class="message" data-message="" data-message-id="review_updated" data-message-text="Your review updated Successfully." data-message-type="success"><span>Your review updated Successfully.</span></div>
</div>
</div>
</div>
<script>
$(function(){
	$('input[type="radio"].starradio').change(function() {
	  console.log('New star rating: ' + this.value);
	});
	$('.Write-a-review').click(function(e){
		e.preventDefault();
		$("html, body").animate({ scrollTop: $("#leave_review").offset().top }, "1500");
		e.stopPropagation();
	});
	$('.editOwnReview').click(function(e){
		e.preventDefault();
		var id= $(this).data('id');
		console.log(id);
		$("#edit_comment_"+id).slideToggle();
		e.stopPropagation();
	});
	
	/*$(document).on('click','input[name="review_submit"]',function(){
		var user_id = $(this).data('user_id');
		var your_name = $('input[name="your_name"]').val();
		var your_email = $('input[name="your_email"]').val();
		var stars = $('input[name="stars"]:checked').val();
		var your_review = $('textarea[name="your_review"]').val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : "https://yogabody.bio/wp-admin/admin-ajax.php",
			data : {action: "profile_review_submit",user_id:user_id,your_name:your_name,your_email:your_email,stars:stars,your_review:your_review},
			success: function(response){
				if(response.type == "success"){
					$("#myForm").trigger("reset");
				}else{
				   alert("error occured!");
				}
			}
        });
	}); */
	/*$("#basic-form").validate({
		rules: {
			your_name : {
			required: true,
			minlength: 3
			},
			your_email: {
			required: true,
			email: true
			}
		}
	}); */
	$("form[name='ratingform']").validate({
		rules: {
			your_name : {
			required: true,
			minlength: 3
			},
			your_email: {
			required: true,
			email: true
			},
			stars: {
			required: true
			},
			your_review: {
			required: true
			}
		},
		messages: {
		firstname: "Please enter your firstname",
		lastname: "Please enter your lastname",
		password: {
		required: "Please provide a password",
		minlength: "Your password must be at least 5 characters long"
		},
		email: "Please enter a valid email address"
		},
		submitHandler: function(form) {
			var user_id = $('input[name="user_id"]').val();
			var your_name = $('input[name="your_name"]').val();
			var your_email = $('input[name="your_email"]').val();
			var stars = $('input[name="stars"]:checked').val();
			var your_review = $('textarea[name="your_review"]').val();
			$.ajax({
				type : "POST",
				dataType : "json",
				url : "https://yogabody.bio/wp-admin/admin-ajax.php",
				data : {action: "profile_review_submit",user_id:user_id,your_name:your_name,your_email:your_email,stars:stars,your_review:your_review},
				success: function(response){
					if(response.type == "success"){
						$('.message[data-message-id="review_success"]').show().delay(3000).fadeOut();
						$("#myForm").trigger("reset");
						setTimeout(function(){
							location.reload();
						},4000);	
					}else{
					   alert("error occured!");
					}
				}
			});
		}
	});
	$('input[name="edit_review_submit"]').click(function(){
		var id = $(this).data('id');
		if($('#edit_review_'+id).valid()){
			var review_email = $('#edit_review_email_'+id).val();
			var review_textarea = $('#edit_review_textarea_'+id).val();
			$.ajax({
				type : "POST",
				dataType : "json",
				url : "https://yogabody.bio/wp-admin/admin-ajax.php",
				data : {action: "verify_and_update_review",id:id,review_email:review_email,review_textarea:review_textarea},
				success: function(response){
					if(response.type == "success"){
						$('#after_update_review_'+id).html(review_textarea);
						$("#edit_comment_"+id).hide();
						$('#edit_review_'+id).trigger("reset");
						$('.message[data-message-id="review_updated"]').show().delay(3000).fadeOut();	
					}else if(response.type == "error"){
						$('#edit_review_email_'+id).addClass('error');
						if($('#edit_review_email_'+id+'-error').length > 0){
							$('#edit_review_email_'+id+'-error').html('Wrong Email! Review not updated.');
							$('#edit_review_email_'+id+'-error').show();
						}else{
						$('#edit_review_email_'+id).after('<label id="edit_review_email_'+id+'-error" class="error" for="edit_review_email_'+id+'">Wrong Email! Review not updated.</label>');
						}
					}else{
					   alert("error occured!");
					}
				}
			});
		}
		return false;
	});	
});
</script>
</body>
</html>