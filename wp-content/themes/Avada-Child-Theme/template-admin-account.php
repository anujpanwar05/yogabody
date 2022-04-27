<?php
/**
 * Template Name: Yogabody Admin Account
 * Description: Yogabody Admin Account user page.
 */

get_header('account');
$current_user = wp_get_current_user();
$user_id = get_current_user_id();
$configration = get_user_meta($user_id,'yogabody_configration',true);
if(empty($configration)){
	$configration = new stdClass;
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
				<div class="login nav-item sidebar__user">
					<i></i><a class="sidebar__user__avatar" href="https://yogabody.bio/admin"><span class="img-circle"><img src="<?= $profile_picture ?>"></span></a>
					<div class="sub-nav" data-perfect-scroll>
						<div class="divider"><?= $current_user->user_login ?></div>
						<ul>
							<li class="sub-nav-item"><a class="" href="https://yogabody.bio/admin/account">
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
				<!-- zoom menu close -->
				<a title="Courses" class="support-icon" href="https://www.yogateacherscollege.com/" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Graduation.png" />
				</a>
				<a title="Store" class="support-icon" href="https://shop.yogabody.com/" target="_blank" rel="noopener">
					<img src="https://yogabody.bio/wp-content/uploads/2021/02/Icons_ybBio_Shopping-Cart.png" />
				</a>
			</div>
			<div class="sidebar__icons">
			</div>
		</section>
		<section class="main admin">
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<div id="React--Navigation">
					<div class="sc-fubCfw dUaVBw">
						<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA " href="<?= get_the_permalink(33) ?>" data-testid="Route">Links</a>
						<a class="sc-gKsewC gnwqMi sc-iBPRYJ jeHCDA " href="<?= get_the_permalink(35) ?>" data-testid="Route">Photo &amp; Theme</a>
					</div>
				</div>
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
										<label class="active-input" for="name"><input type="text" class="field" placeholder="John Doe" value="<?= $current_user->display_name ?>" data-name><span><span>Display name</span></span></label>
										<div data-active-input-error data-name-errors></div>
									</div>
									<div class="billing-username">
										<label class="active-input with-prepend-text" for="username"><input type="text" class="field usenospace" name="account[page_username]" placeholder="John Doe" value="<?= $current_user->user_login ?>" data-username><span><span>@Username</span></span><div class="prepend-text">yogabody.bio/</div></label>
										<div data-active-input-error data-settings-validationerror="setting-page-username"></div>
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
<?php get_footer('account');