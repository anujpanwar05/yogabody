<?php
/**
 * Template Name: Login
 * Description: Login a new user page.
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
        <meta content="Linktree" name="description">
        <title>Login - Yogabody</title>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/main.css">
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/auth/auth.css">
    </head>
    <body class="auth theme colourway-green" data-page-login>
        <div class="body__inner">
            <div class="main-wrap auth">
                <div id="React--Site"></div>
                <div class="auth__wrapper">
                    <div class="auth__wrapper">
                        <div class="auth__header">
                            <h1> Yogabody
                                <span class="logo"></span>
                            </h1>
                            <h2 class="text-center">
                                Log in to continue to your Yogabody admin
                            </h2>
                        </div>
                        <div class="auth__box">
                            <div class="auth__oauth">
                                <a id="oauth-instagram" class="button instagram" href="https://yogabody.bio/account/?wpuf_reg=instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" viewBox="0 0 28.3 28.3" style="enable-background:new 0 0 28.3 28.3;"  width="25px" height="25px">
                                        <g id="Edges"></g>
                                        <g id="Symbol">
                                            <g>
                                                <path class="st0" d="M14.2,2.6c3.8,0,4.2,0,5.7,0.1C21.3,2.7,22,3,22.5,3.2c0.7,0.3,1.1,0.6,1.6,1.1c0.5,0.5,0.8,1,1.1,1.6
                                                    c0.2,0.5,0.4,1.2,0.5,2.6c0.1,1.5,0.1,1.9,0.1,5.7s0,4.2-0.1,5.7c-0.1,1.4-0.3,2.1-0.5,2.6c-0.3,0.7-0.6,1.1-1.1,1.6
                                                    s-1,0.8-1.6,1.1c-0.5,0.2-1.2,0.4-2.6,0.5c-1.5,0.1-1.9,0.1-5.7,0.1s-4.2,0-5.7-0.1c-1.4-0.1-2.1-0.3-2.6-0.5
                                                    c-0.7-0.3-1.1-0.6-1.6-1.1c-0.5-0.5-0.8-1-1.1-1.6C3,22,2.7,21.3,2.7,19.9c-0.1-1.5-0.1-1.9-0.1-5.7s0-4.2,0.1-5.7
                                                    C2.7,7.1,3,6.3,3.2,5.8c0.3-0.7,0.6-1.1,1.1-1.6c0.5-0.5,1-0.8,1.6-1.1C6.3,3,7.1,2.7,8.5,2.7C10,2.6,10.4,2.6,14.2,2.6 M14.2,0.1
                                                    c-3.8,0-4.3,0-5.8,0.1S5.8,0.4,4.9,0.8C4,1.2,3.2,1.6,2.4,2.4C1.6,3.2,1.2,4,0.8,4.9C0.4,5.8,0.2,6.8,0.1,8.4S0,10.3,0,14.2
                                                    s0,4.3,0.1,5.8c0.1,1.5,0.3,2.5,0.7,3.4c0.4,0.9,0.8,1.7,1.6,2.5c0.8,0.8,1.6,1.3,2.5,1.6c0.9,0.4,1.9,0.6,3.4,0.7
                                                    c1.5,0.1,2,0.1,5.8,0.1s4.3,0,5.8-0.1c1.5-0.1,2.5-0.3,3.4-0.7c0.9-0.4,1.7-0.8,2.5-1.6c0.8-0.8,1.3-1.6,1.6-2.5
                                                    c0.4-0.9,0.6-1.9,0.7-3.4c0.1-1.5,0.1-2,0.1-5.8s0-4.3-0.1-5.8s-0.3-2.5-0.7-3.4C27.2,4,26.7,3.2,26,2.4c-0.8-0.8-1.6-1.3-2.5-1.6
                                                    c-0.9-0.4-1.9-0.6-3.4-0.7C18.5,0.1,18,0.1,14.2,0.1L14.2,0.1z"/>
                                                <path class="st0" d="M14.2,6.9c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3s7.3-3.3,7.3-7.3S18.2,6.9,14.2,6.9z M14.2,18.9
                                                    c-2.6,0-4.7-2.1-4.7-4.7s2.1-4.7,4.7-4.7s4.7,2.1,4.7,4.7S16.8,18.9,14.2,18.9z"/>
                                                <circle class="st0" cx="21.7" cy="6.6" r="1.7"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Sign in with Instagram</span>
                                </a>
                            </div>
                            <div class="separator"><span>or</span></div>
                            <div class="auth__form">
                                <?php echo do_shortcode('[wpuf-login]'); ?>
                            </div>
                        </div>
                        <div class="auth__footer">
                            <a href="<?= get_the_permalink(9) ?>">Don't have an account?</a>
                            <ul class="auth__footer-links">
                                <li><a href="#">Trust Centre</a></li>
                                <li><a href="#">Report a Violation</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
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