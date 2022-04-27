<?php
/**
 * Template Name: Register
 * Description: Register a new user page.
 */

get_header();
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta content="Yogabody" name="description">
        <title>Register - Yogabody</title>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/main.css">
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/auth.css">
    </head>
    <body class="auth theme colourway-green" data-page-register>
        <div class="body__inner">
            <div class="main-wrap auth">
                <div id="React--Site"></div>
                <div class="auth__wrapper">
                    <div class="auth__header">
                        <h1> Yogabody
							<span class="logo"></span>
						</h1>
                        <h2 class="text-center">
                            Sign up for your Yogabody account
                        </h2>
                    </div>
                    <div class="auth__box">
                        <div class="auth__form">
                            <?php echo do_shortcode('[wpuf_profile type="registration" id="24"]'); ?>
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