<?php
/**
 * Template Name: Yogabody Admin
 * Description: Yogabody Admin user page.
 */

get_header('links'); 
global $wpdb;
$current_user = wp_get_current_user();
$user_id = get_current_user_id();
$icons = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}icons ORDER BY ID ASC");
$views = get_user_meta($user_id,'yogabody_count_views',true);
if(empty($views)){
	$views = 0;
}
$clicks = get_user_meta($user_id,'yogabody_count_clicks',true);
if(empty($clicks)){
	$clicks = 0;
}
?>

		<section class="main admin has-toolbar" data-page-links>
			<div id="Analytics--Account-Overview">
				<div class="sc-BXqHe gzjBnH">
					<header class="sc-fTNIDv drRLnX">
						<div>
							<span>Stats (lifetime):</span>
							<div class="sc-jtHMlw fkucio"><span color="green" class="sc-dwcuIR gwpmak">Views: <b><?=$views?></b></span><span color="purple" class="sc-dwcuIR MWycb">Clicks: <b><?=$clicks?></b></span></div>
							<?php /*
							<a class="support-icon" href="<?= get_the_permalink(69) ?>" target="_blank" rel="noopener">
								<svg color="#000" viewBox="0 0 16 16" class="sc-dkIXFM jmmNux">
									<path d="M8 0a8 8 0 108 8 8 8 0 00-8-8zm0 15a7 7 0 117-7 7 7 0 01-7 7zm-.75-3.49h1.53V13H7.25zm3.54-7A3.05 3.05 0 0111 5.72a2.54 2.54 0 01-.1.76 2.9 2.9 0 01-.27.62 3.75 3.75 0 01-.38.51l-.44.45-.43.42a5.58 5.58 0 00-.38.46 2.33 2.33 0 00-.27.52 1.83 1.83 0 00-.11.64v.54H7.44V10a2.57 2.57 0 01.22-1 3 3 0 01.45-.73 6.25 6.25 0 01.57-.58 7.4 7.4 0 00.55-.57 2.42 2.42 0 00.4-.65 1.82 1.82 0 00.13-.87 1.81 1.81 0 00-.49-1.19A1.63 1.63 0 008.09 4a1.91 1.91 0 00-.86.18 1.74 1.74 0 00-.59.49 1.91 1.91 0 00-.36.71 3.7 3.7 0 00-.11.9H5A3.71 3.71 0 015.2 5a3.17 3.17 0 01.61-1.1 2.85 2.85 0 011-.69A3.21 3.21 0 018.09 3a3.4 3.4 0 011.18.19 2.71 2.71 0 01.92.53 2.6 2.6 0 01.6.83z"></path>
								</svg>
							</a>
							*/ ?>
						</div>
					</header>
				</div>
			</div>
			<div id="SearchModalPortal"></div>
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<section class="primary">
					<div class="main">
						<div class="addnew-area">
							<div class=""><button type="button" id="AddNewLink" class="button large purple" data-add-link data-add-link-api-url="https://yogabody.bio/api/link/" data-add-link-html-url="#" tabindex="-1">
								Add New Link
								</button>
							</div>
							<div class=""><button type="button" id="AddNewPaymentLink" class="button large purple" data-add-link data-add-link-api-url="https://yogabody.bio/api/link/" data-add-link-html-url="#" tabindex="-1">
								Add Payment Link
								</button>
							</div>
							<div class="message" data-message data-message-id="add_error" data-message-text="Oops, there was an error creating the link." data-message-type="error"></div>
						</div>
						<div class="link-list-group" data-link-list id="link-list-group">
							
							<div class="message" data-message data-message-id="delete_success" data-message-text="Link deleted." data-message-type="success"></div>
							<div class="message" data-message data-message-id="delete_error" data-message-text="Oops, there was an error deleting the link." data-message-type="error"></div>
							<div class="no-links">
								<p>You don't have any links to display.</p>
								<p>Click the button above to add one.</p>
							</div>
						</div>
						<div id="ModalOverlay" style="display:none;" data-testid="ModalOverlay" class="sc-flMoUE sc-eWVKcp dHTXiw hqFZpw">
							<div data-testid="ModalChildrenWrapper" class="sc-flMoUE loDSWV">
								<div data-testid="ThumbnailChooseIconModal" class="sc-flMoUE bSA-dat">
									<button data-testid="ModalCloseButton" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="x12" class="sc-kiYtDG sc-hkwnrn bXsuZk kRftnm">
										<svg color="palette.white" viewBox="0 0 16 16" enable-background="new 0 0 24 24" class="sc-dwcuIR fePnVx">
											<path d="M7.97 6.2L14.23 0L16 1.77L9.8 8.03L15.94 14.24L14.23 15.94L7.97 9.74L1.77 15.94L0 14.24L6.26 8.03L0 1.77L1.77 0L7.97 6.2Z"></path>
										</svg>
									</button>
									<div class="sc-flMoUE sc-eWVKcp gdLPuE hqFZpw">
										<div class="sc-flMoUE fpxVEr">
											<p class="sc-irlOZD ewSqmF">Icons by <a target="_blank" rel="noopener noreferrer" href="https://tablericons.com?utm_source=Linktree&amp;utm_medium=referral" class="sc-eWvPJL loWceO">Tabler Icons</a></p>
										</div>
										<?php /*
										<div class="sc-flMoUE loDSWV">
											<div class="sc-flMoUE sc-bUrJUP dVNSqB hpXEgZ">
												<div class="sc-flMoUE sc-eWVKcp cpKeEF hqFZpw"><input type="text" name="Search" placeholder="Search icons" class="sc-cKZHah sc-cHjxUU fkSKZF jtyFiW" value=""></div>
												<div class="sc-flMoUE sc-tkKAw jlClTX iONwHy">
													<svg viewBox="0 0 16 16" enable-background="new 0 0 24 24" class="sc-dwcuIR jevPta">
														<path d="M11.25 10.31C12.14 9.22 12.67 7.84 12.67 6.33C12.67 2.84 9.83 0 6.33 0C2.84 0 0 2.84 0 6.33C0 9.83 2.84 12.67 6.33 12.67C7.84 12.67 9.22 12.14 10.31 11.25C10.77 11.71 14.41 15.35 14.86 15.8C14.99 15.93 15.16 16 15.33 16C15.5 16 15.67 15.93 15.8 15.8C16.07 15.54 16.07 15.12 15.8 14.86C14.89 13.95 11.71 10.77 11.25 10.31ZM1.33 6.33C1.33 3.58 3.58 1.33 6.33 1.33C9.09 1.33 11.33 3.58 11.33 6.33C11.33 9.09 9.09 11.33 6.33 11.33C3.58 11.33 1.33 9.09 1.33 6.33Z"></path>
													</svg>
												</div>
											</div>
										</div>
										<?php */ ?>
										<div class="scrollbar-container ps ps--active-y">
											<div data-testid="IconsContainer" class="sc-flMoUE sc-gHftXq loDSWV ktzucy">
											<?php foreach($icons as $icon){ ?>
												<button text-decoration="none" color="palette.slate8" data-testid="<?=$icon->icon_id?>" display="inline-flex" font-family="inherit" font-weight="inherit" font-size="inherit" height="x12" class="sc-kiYtDG sc-dkAroR ZTEgY iIkXvL select_icon">
													<?=$icon->icon_svg?> 
												</button>
											<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
<?php get_footer('links');