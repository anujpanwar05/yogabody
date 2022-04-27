<?php
/**
 * Template Name: Yogabody check email
 * Description: Yogabody Admin Account user page.
 */

get_header();
$user_data = wp_get_current_user();
$user_id = get_current_user_id();
if($user_data){
		$key = get_password_reset_key( $user_data );
		$user_email = $user_data->user_email;
		$user_login = $user_login->user_login;
		$reset_url = add_query_arg( [ 'action' => 'rp', 'key' => $key, 'login' => urlencode( $user_login ) ], get_the_permalink(14) );

        $message = __( 'Someone requested that the password be reset for the following account:', 'wp-user-frontend' ) . "\r\n\r\n";
        $message .= network_home_url( '/' ) . "\r\n\r\n";
        $message .= sprintf( __( 'Username: %s', 'wp-user-frontend' ), $user_login ) . "\r\n\r\n";
        $message .= __( 'If this was a mistake, just ignore this email and nothing will happen.', 'wp-user-frontend' ) . "\r\n\r\n";
        $message .= __( 'To reset your password, visit the following address:', 'wp-user-frontend' ) . "\r\n\r\n";
        $message .= ' ' . $reset_url . " \r\n";

        $blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );

        if ( is_multisite() ) {
            $blogname = $GLOBALS['current_site']->site_name;
        }

        $user_data = get_user_by( 'login', $user_login );

        $title   = sprintf( __( '[%s] Password Reset', 'wp-user-frontend' ), $blogname );
        $title   = apply_filters( 'retrieve_password_title', $title );

        $message = apply_filters( 'retrieve_password_message', $message, $key, $user_login, $user_data );

        if ( $message && !wp_mail( $user_email, wp_specialchars_decode( $title ), $message ) ) {
            wp_die( esc_html( __( 'The e-mail could not be sent.', 'wp-user-frontend' ) ) . "<br />\n" . esc_html( __( 'Possible reason: your host may have disabled the mail() function.', 'wp-user-frontend' ) ) );
        }
}else{
wp_redirect(get_site_url());
exit;
}	
?>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<div class="body__inner">
    <div class="main-wrap auth">
        <div id="React--Site"></div>
        <div id="Auth--PasswordResetCheckEmail">
            <div class="sc-JooDp iocBAO">
                <div class="sc-hYAvag faKcKV">
                    <svg class="sc-dmlrTW kHMBoy" viewBox="0 0 85 16">
                        <a href="<?=get_site_url()?>">
                            <img class="thumb sc-dmlrTW kHMBoy logoimage" src="<?=$image[0]?>" />
                        </a>
                    </svg>
                </div>
                <div class="sc-gGTGfU eeITTU">
                    <div class="sc-edoZmE eqDlic">
                        <span display="inline" class="sc-jrAGrp hBTJFv sc-jlIkXa jfzMCn">Password reset email sent</span>
                        <div class="sc-iumJyn hheFgd"><span display="inline" class="sc-jrAGrp dmoIUC">We've sent you a link to reset your password. Please note: Your reset link expires after 6 hours.<br><br>Didn't receive an email? Check your junk folder or request another link.</span></div>
                        <div class="sc-iumJyn hheFgd">
                            <div class="sc-dcwrBW vDTBn">
                                <span display="inline" class="sc-jrAGrp dmoIUC">
                                    <svg viewBox="0 0 16 16" class="sc-bdfBwQ sc-gsTCUz gWtNfv gtvkKT sc-gUUzQN dQvcTy" data-test="IconComponent">
                                        <rect class="sc-hKgILt iZZypd"></rect>
                                        <line x1="2" y1="8" x2="14" y2="8"></line>
                                        <polyline points="9 13 14 8 9 3"></polyline>
                                    </svg>
                                    <a class="sc-dIUggk jIoyVC" href="<?=get_the_permalink(46)?>" data-test="Link"><span class="sc-hHftDr gREbuT">Back to Account</span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
* {
    box-sizing: border-box;
    backface-visibility: hidden !important;
}
.iocBAO {
    background-color: rgb(255, 255, 255);
    min-height: 100vh;
}
.faKcKV {
    width: 100%;
    padding: 24px 48px;
    display: flex;
    -moz-box-pack: start;
    justify-content: flex-start;
}
.kHMBoy {
    width: calc(215px);
    height: calc(40px);
}
.eeITTU {
    padding: 64px 0px;
}
.eqDlic {
    max-width: 640px;
    margin: 0px auto;
    border-radius: 16px;
    border: 1px solid rgb(218, 222, 224);
    padding: 48px 80px;
}
.jfzMCn {
    display: flex;
    padding-bottom: 48px;
    -moz-box-pack: center;
    justify-content: center;
}
.hBTJFv {
    color: rgb(19, 20, 21);
    font-size: 32px;
    line-height: 1.25;
    letter-spacing: calc(-0.64px);
    font-weight: normal;
    display: inline;
}
.hheFgd:not(:last-of-type) {
    padding-bottom: 48px;
}
.dmoIUC {
    color: rgb(19, 20, 21);
    font-size: 16px;
    line-height: 1.75;
    letter-spacing: calc(-0.32px);
    font-weight: normal;
    display: inline;
}
.vDTBn {
    width: 100%;
    text-align: center;
}
.dmoIUC {
    color: rgb(19, 20, 21);
    font-size: 16px;
    line-height: 1.75;
    letter-spacing: calc(-0.32px);
    font-weight: normal;
    display: inline;
}
svg:not(:root) {
    overflow: hidden;
}
.dQvcTy {
    vertical-align: middle;
    margin-right: 4px;
    transform: scaleX(-1);
}
.gtvkKT {
    fill: none;
    stroke: currentcolor;
}
.gWtNfv {
    width: 12px;
    height: 12px;
    fill: currentcolor;
    stroke: none;
    transition: transform 200ms linear 0s;
}
.jIoyVC {
    text-decoration: underline;
    color: rgb(19, 20, 21);
}
.gREbuT {
    font-size: inherit;
    color: rgb(19, 20, 21);
    line-height: 1.6;
}

</style>
<?php
get_footer(); 