<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
WPUF will always look in your theme's directory first, before using this default template.
*/
?>
<div class="login" id="wpuf-login-form">

    <?php WPUF_Simple_Login::init()->show_errors(); ?>
    <?php WPUF_Simple_Login::init()->show_messages(); ?>

    <form name="resetpasswordform" id="resetpasswordform" action="" method="post">
       <?php /* <p>
            <label for="wpuf-pass1"><?php esc_html_e( 'New password', 'wp-user-frontend' ); ?></label>
            <input autocomplete="off" name="pass1" id="wpuf-pass1" class="input" size="20" value="" type="password" autocomplete="off" />
        </p>

        <p>
            <label for="wpuf-pass2"><?php esc_html_e( 'Confirm new password', 'wp-user-frontend' ); ?></label>
            <input autocomplete="off" name="pass2" id="wpuf-pass2" class="input" size="20" value="" type="password" autocomplete="off" />
        </p> */ ?>
		<label class="active-input" for="wpuf-pass1">
			<input type="password" class="field is-empty" id="wpuf-pass1" name="pass1" required="required" autocomplete="off">
			<span><span>New password</span></span>
		</label>
		<label class="active-input" for="wpuf-pass2">
			<input type="password" class="field is-empty" id="wpuf-pass2" name="pass2" required="required" autocomplete="off">
			<span><span>Confirm new password</span></span>
		</label>

        <?php do_action( 'resetpassword_form' ); ?>

        <p class="submit">
            <input class="button purple" type="submit" name="wp-submit" id="wp-submit" value="<?php esc_attr_e( 'Reset Password', 'wp-user-frontend' ); ?>" />
            <input type="hidden" name="key" value="<?php echo esc_attr( WPUF_Simple_Login::get_posted_value( 'key' ) ); ?>" />
            <input type="hidden" name="login" id="user_login" value="<?php echo esc_attr( WPUF_Simple_Login::get_posted_value( 'login' ) ); ?>" />
            <input type="hidden" name="wpuf_reset_password" value="true" />
        </p>

        <?php wp_nonce_field( 'wpuf_reset_pass' ); ?>
    </form>
</div>
