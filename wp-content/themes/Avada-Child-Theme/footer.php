<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yoga_Body
 */

?>
				<div class="new-footer">
					<div align="center" class="footer-logo-part font12">
						<p class="hide-on-mobile">&nbsp;</p>
						<? echo do_shortcode('[one_fifth]<a href="https://yogabody.bio/about-us/" target="_blank">ABOUT US</a>[/one_fifth][one_fifth]<a href="https://yogabody.bio/contact-us/" target="_blank">CONTACT US</a>[/one_fifth][one_fifth]<img class="footer-logo" src="https://yogabody.bio/wp-content/uploads/2021/02/ybbio-logo-mobile@2x.png" width="224" />[/one_fifth][one_fifth]<a href="https://yogabody.bio/privacy/" target="_blank">PRIVACY POLICY</a>[/one_fifth][one_fifth last="yes"]<a href="https://yogabody.bio/terms-conditions/" target="_blank">TERMS & CONDITIONS</a>[/one_fifth]'); ?>
					</div>
					<div class="footer-text-part font12">
                    <p class="icons"><img src="https://yogabody.bio/wp-content/uploads/2021/02/img-icon-ig.png"><img src="https://yogabody.bio/wp-content/uploads/2021/02/img-icon-fb.png"><img src="https://yogabody.bio/wp-content/uploads/2021/02/img-icon-yt.png"><img src="https://yogabody.bio/wp-content/uploads/2021/02/img-icon-tok.png"></p>
						<p>YOGABODY.BIO &nbsp; Provided by YOGABODY<sup>&reg;</sup><br class="show-on-mobile" /> & Yoga Teachers College<sup>&reg;</sup></p><br />
					</div>
				</div>
			<?php if ( !is_front_page() && !is_home() ) { ?>
			</div>
			<?php } ?>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>
