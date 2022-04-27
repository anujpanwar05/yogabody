<?php
/**
 * Template Name: Yogabody Admin Account
 * Description: Yogabody Admin Account user page.
 */

get_header();
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
<div class="body__inner">
	<div id="React--Root"></div>
	<div class="main-wrap">
		<section class="admin-sidebar sidebar" data-sidebar>
			<div class="sidebar-logo-wrap">
				<a href="<?= get_the_permalink(33) ?>">
					<h1>
						Yogabody
						<span class="logo">
							<img src="https://yogabody.bio/wp-content/uploads/2021/02/logo-mini.png" style="width:35px;" />
						</span>
					</h1>
				</a> 
				<a class="support-icon" href="<?= get_the_permalink(69) ?>" target="_blank" rel="noopener">
					<svg color="#000" viewBox="0 0 16 16" class="sc-dkIXFM jmmNux">
						<path d="M8 0a8 8 0 108 8 8 8 0 00-8-8zm0 15a7 7 0 117-7 7 7 0 01-7 7zm-.75-3.49h1.53V13H7.25zm3.54-7A3.05 3.05 0 0111 5.72a2.54 2.54 0 01-.1.76 2.9 2.9 0 01-.27.62 3.75 3.75 0 01-.38.51l-.44.45-.43.42a5.58 5.58 0 00-.38.46 2.33 2.33 0 00-.27.52 1.83 1.83 0 00-.11.64v.54H7.44V10a2.57 2.57 0 01.22-1 3 3 0 01.45-.73 6.25 6.25 0 01.57-.58 7.4 7.4 0 00.55-.57 2.42 2.42 0 00.4-.65 1.82 1.82 0 00.13-.87 1.81 1.81 0 00-.49-1.19A1.63 1.63 0 008.09 4a1.91 1.91 0 00-.86.18 1.74 1.74 0 00-.59.49 1.91 1.91 0 00-.36.71 3.7 3.7 0 00-.11.9H5A3.71 3.71 0 015.2 5a3.17 3.17 0 01.61-1.1 2.85 2.85 0 011-.69A3.21 3.21 0 018.09 3a3.4 3.4 0 011.18.19 2.71 2.71 0 01.92.53 2.6 2.6 0 01.6.83z"></path>
					</svg>
				</a>
				<a class="support-icon" href="<?= get_the_permalink(72) ?>" target="_blank" rel="noopener">
					<svg height="480pt" viewBox="0 0 480 480" width="480pt" xmlns="http://www.w3.org/2000/svg" id="fi_1782712"><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm0 464c-123.710938 0-224-100.289062-224-224s100.289062-224 224-224 224 100.289062 224 224c-.140625 123.652344-100.347656 223.859375-224 224zm0 0"></path><path d="m352 144h-224c-4.417969 0-8 3.582031-8 8v176c0 4.417969 3.582031 8 8 8h224c4.417969 0 8-3.582031 8-8v-176c0-4.417969-3.582031-8-8-8zm-21.601562 16-90.398438 77.464844-90.398438-77.464844zm-194.398438 160v-150.609375l98.792969 84.679687c2.992187 2.5625 7.40625 2.5625 10.398437 0l98.808594-84.679687v150.609375zm0 0"></path></svg>
				</a>
			</div>
			<div class="sidebar__icons">
			</div>
			<div class="login nav-item sidebar__user">
				<i></i><a class="sidebar__user__avatar" href="<?= get_the_permalink(33) ?>"><span class="img-circle"><img src="<?= $profile_picture ?>"></span></a>
				<div class="sub-nav" data-perfect-scroll>
					<div class="divider"><?= $current_user->user_login ?></div>
					<ul>
						<li class="sub-nav-item active"><a class="" href="<?= get_the_permalink(46) ?>">
							My Account
							</a>
						</li>
						<li class="sub-nav-item"><a href="<?php echo wp_logout_url( home_url() ); ?>" data-logout-url="<?php echo wp_logout_url( home_url() ); ?>" data-logout>
							Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="main admin">
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<section class="primary">
					<div class="main form-wrap" data-form-wrap>
						<div class="primary heading text-center">
							<h2>My account</h2>
						</div>
						<form class="section section--legacy" data-user-edit data-user-edit-url="#">
							<div class="contact">
								<h3>Account Details</h3>
								<div class="section__inner">
									<div class="billing-name">
										<label class="active-input" for="name"><input type="text" class="field" placeholder="John Doe" value="<?= $current_user->display_name ?>" data-name><span><span>Name</span></span></label>
										<div data-active-input-error data-name-errors></div>
									</div>
									<div class="billing-email">
										<label class="active-input" for="email"><input type="text" class="field" placeholder="your@ema.il" value="<?= $current_user->user_email ?>" data-email><span><span>Email</span></span></label>
										<div data-active-input-error data-email-errors></div>
										<div id="email-verification-message"></div>
									</div>
								</div>
							</div>
							<div data-process-errors></div>
							<div class="submit"><input class="button purple large" data-user-edit-submit type="button" value="UPDATE"></div>
							<input type="hidden" id="edit_user_csrf_token" name="token" value="9AGooh7yWmdbZC7YXji8Jye51Y93nD6GYzM3IxD3eXA"/><input type="hidden" id="email_csrf_token" value="IVVlmRHNgw4C7Fj-DDZzTTBp4fLu5x7G-lijM8P4_DY">
						</form>
						<?php /*
						<div class="section trees">
							<h3>My trees</h3>
							<div>
								<div class="tree active primary" data-tree="11821132">
									<div class="tree__sidebar"><span class="img-circle"><img class="user-img" src="<?= $profile_picture ?>" alt="Profile Image"></span></div>
									<div class="tree__section tree__section--header"><span class="name">@<?= $current_user->user_login ?></span></div>
									<div class="tree__section tree__section--plan">
										<h5>Plan</h5>
										<div class="name">
											Free
										</div>
									</div>
									<div class="tree__section tree__section--admins">
										<h5>Admins
											<a class="info" href="#" target="_blank">?</a>
										</h5>
										<ul data-user-list>
											<li class="user" data-user="13123829"><span class="username">@<?= $current_user->user_login ?></span><span class="tag">ME</span><span class="tag">OWNER</span></li>
										</ul>
									</div>
									<div class="tree__section tree__section--footer">
										<a class="button outline" href="<?php echo get_the_permalink(33); ?>">Links</a>
										<a class="button outline" href="<?php echo get_the_permalink(35); ?>">Appearance</a>
										<a class="button outline" href="<?php echo get_the_permalink(37); ?>">Settings</a>
									</div>
								</div>
							</div>
						</div>
						*/ ?>
						<div class="section section--legacy actions">
							<h3>Reset Password?</h3>
							<div class="section__inner">
								<div class="action">
									<form action="<?=get_the_permalink(84)?>" method="GET"><input type="hidden" id="passwordReset_username" name="username" value="<?= $current_user->user_login ?>"><button type="submit" class="button">Reset Password</button></form>
								</div>
							</div>
						</div>
						<div class="section section--legacy delete">
							<h3>Delete Account?</h3>
							<div class="section__inner">
								<div class="action delete-account"><input id="DeleteAccount" class="button red" data-dialog-trigger="delete-account" type="button" value="Delete account"></div>
							</div>
						</div>
						<div class="dialog dialog--delete-account dialog--warning" data-dialog="delete-account">
							<div class="dialog__inner" style="transform: rotateX(0deg) translate(-50%,-50%);" data-dialog-inner>
								<div class="dialog__header">
									Are you sure?
									<div class="x closeDialog" data-dialog-close>&times;</div>
								</div>
								<div class="dialog__body">
									<p>
										Deleting your account is irreversible. Please proceed with caution.
									</p>
									<p>
										By selecting YES, DELETE MY ACCOUNT below, your primary tree (@<?= $current_user->user_login ?>) will be imediately terminated and your data will be lost. Visitors will no longer be able to access
										<a href="https://yogabody.bio/<?= $current_user->user_login ?>">your URL</a>.
									</p>
									<p class="buttons"><input class="button closeDialog outline" data-dialog-close type="button" value="Cancel"><input id="DeleteMyAccount" class="button red" type="button" value="Yes, Delete my Account" data-delete-user-id="13123829" data-delete-user-username="<?= $current_user->user_login ?>" data-dialog-close data-delete-confirm></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
		<div class="message" data-message data-message-id="delete_error" data-message-text="There was an error deleting your account. Please try again or contact us." data-message-type="error"><span>There was an error deleting your account. Please try again or contact us.</span></div>
		<div class="message" data-message data-message-id="delete_success" data-message-text="Your user account has been deleted." data-message-type="success"><span>Your user account has been deleted.</span></div>
		<div class="message" data-message data-message-id="useredit_error" data-message-text="There was an error updating your information. Please try again or contact us." data-message-type="error"><span>There was an error updating your information. Please try again or contact us.</span></div>
		<div class="message" data-message data-message-id="useredit_success" data-message-text="Thanks! Your information has been updated." data-message-type="success"><span>Thanks! Your information has been updated.</span></div>
		<div class="message" data-message data-message-id="userremove_error" data-message-text="There was an error removing the user." data-message-type="error"><span>There was an error removing the user.</span></div>
	</div>
</div>
<div class="loading-overlay"></div>
<?php get_footer();