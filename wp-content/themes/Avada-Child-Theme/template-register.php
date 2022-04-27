<?php
/**
 * Template Name: Register
 * Description: Register a new user page.
 */

get_header();
?>
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/main.css">
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/auth.css">
        <div class="body__innerr">
            <div class="main-wrap auth">
                <div id="React--Site"></div>
                <div class="auth__wrapper">
                    <div class="auth__header">
                        <h1> Yogabody
							<span class="logo"></span>
						</h1>
                        <h2 class="text-center">
                            Setup Your Bio Page 
                        </h2>
                    </div>
                    <div class="auth__box">
                        <div class="auth__form">
                            <?php echo do_shortcode('[wpuf_profile type="registration" id="24"]'); ?>
							<div id="profile_pic_modal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										   <h3>Change Profile Picture</h3>
										</div>
										<div class="modal-body">
											<form id="cropimage" method="post" enctype="multipart/form-data" action="<?=get_site_url()?>/change_pic.php">
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
												
												<div id="preview-profile-pic"></div>
											<div id="thumbs" style="padding:5px; width:600px"></div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="auth__footer">
                        <p>By using this service you are agreeing to the <a href="#">terms of service</a> and <a href="#">privacy policy</a></p>
                        <a href="<?= get_the_permalink(14) ?>">Already have an account?</a>
                        <ul class="auth__footer-links">
                            <li><a href="#">Trust Centre</a></li>
                            <li><a href="#">Report a Violation</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #freshworks-frame-wrapper {
            right: 16px !important;
            bottom: 64px !important;
            }
            #launcher-frame {
            right: 16px !important;
            bottom: 16px !important;
            margin: -8px !important;
            }
        </style>
    </body>
</html>

<?php get_footer();