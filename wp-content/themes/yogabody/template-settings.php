<?php
/**
 * Template Name: Admin Settings
 * Description: Yogabody Admin Settings user page.
 */

get_header('links');
$current_user = wp_get_current_user();
$user_id = get_current_user_id();
$configration = get_user_meta($user_id,'yogabody_configration',true);
if(empty($configration)){
	
}else{
$configration = json_decode($configration);
}
?>
		<section class="main admin has-toolbar" data-page-links>
			<div id="SearchModalPortal"></div>
			<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
				<section class="primary">
					<div class="main">
						<div class="settings-wrap" data-account-url="#" data-settings="data-settings">
							<div class="section" id="Settings--SupportDonations">
								<h3>Support Banner</h3>
								<p>Show your support for an important cause with a profile banner. You can have only one turned on at a time</p>
								<div mode="dark" class="sc-bvVdbW dyCJlF">
									<div class="sc-ccjgGX jseGeG">
										<img src="https://yogabody.bio/wp-content/uploads/2021/02/logo-heart-bw-52a1424bd090e3702794f1a14bfa31a9.gif" class="sc-hZOyjC HvVec">
										<div class="sc-dCuYax fNFabN"><span class="sc-emTkGv cztTMG">Racism is an international emergency. Enable a support banner for visitors to donate and discover resources in support of justice and equality.</span><span class="sc-emTkGv cztTMG"><a href="<?=get_the_permalink(57)?>" rel="noopener noreferrer" target="_blank">Learn more about the cause</a></span></div>
									</div>
									<div class="sc-ekboDZ ewdkvc">
										<h5 class="sc-jhLFZp jwIrcu">Support the cause</h5>
										<a class="sc-ehsPrw LFiCw sc-kNPvCX foiLMn" href="#" rel="noopener noreferrer" target="_blank">
											<svg viewBox="0 0 16 16" class="sc-dkIXFM dOXmnS">
												<path d="M8 0a8 8 0 108 8 8 8 0 00-8-8zm0 15a7 7 0 117-7 7 7 0 01-7 7zm-.75-3.49h1.53V13H7.25zm3.54-7A3.05 3.05 0 0111 5.72a2.54 2.54 0 01-.1.76 2.9 2.9 0 01-.27.62 3.75 3.75 0 01-.38.51l-.44.45-.43.42a5.58 5.58 0 00-.38.46 2.33 2.33 0 00-.27.52 1.83 1.83 0 00-.11.64v.54H7.44V10a2.57 2.57 0 01.22-1 3 3 0 01.45-.73 6.25 6.25 0 01.57-.58 7.4 7.4 0 00.55-.57 2.42 2.42 0 00.4-.65 1.82 1.82 0 00.13-.87 1.81 1.81 0 00-.49-1.19A1.63 1.63 0 008.09 4a1.91 1.91 0 00-.86.18 1.74 1.74 0 00-.59.49 1.91 1.91 0 00-.36.71 3.7 3.7 0 00-.11.9H5A3.71 3.71 0 015.2 5a3.17 3.17 0 01.61-1.1 2.85 2.85 0 011-.69A3.21 3.21 0 018.09 3a3.4 3.4 0 011.18.19 2.71 2.71 0 01.92.53 2.6 2.6 0 01.6.83z"></path>
											</svg>
										</a>
										<label id="SupportBanner" class="sc-jCXOcT eouSTr sc-bKNyAY kBOEFC <?php echo ((isset($configration->support_banner) && $configration->support_banner==1) ? 'checked': '') ; ?>"><input type="checkbox" class="sc-cfZGEC hKvNSq"></label>
									</div>
								</div>
							</div>
							<div class="section" id="Settings--Integrations"></div>
							<div class="section" id="Settings--ServiceIntegrations"></div>
							<div class="section" id="Settings--CustomDomain"></div>
							<div class="section" id="Settings--ContentWarning">
								<h3>Sensitive Material</h3>
								<div class="sc-bvVdbW frcoar">
									<div class="sc-ekboDZ ewdkvc">
										<span class="sc-emTkGv cztTMG">Visitors to your Yogabody will see a Sensitive Content warning before being able to view your profile.</span>
										<a class="sc-ehsPrw LFiCw sc-kNPvCX foiLMn" href="#" rel="noopener noreferrer" target="_blank">
											<svg viewBox="0 0 16 16" class="sc-dkIXFM dOXmnS">
												<path d="M8 0a8 8 0 108 8 8 8 0 00-8-8zm0 15a7 7 0 117-7 7 7 0 01-7 7zm-.75-3.49h1.53V13H7.25zm3.54-7A3.05 3.05 0 0111 5.72a2.54 2.54 0 01-.1.76 2.9 2.9 0 01-.27.62 3.75 3.75 0 01-.38.51l-.44.45-.43.42a5.58 5.58 0 00-.38.46 2.33 2.33 0 00-.27.52 1.83 1.83 0 00-.11.64v.54H7.44V10a2.57 2.57 0 01.22-1 3 3 0 01.45-.73 6.25 6.25 0 01.57-.58 7.4 7.4 0 00.55-.57 2.42 2.42 0 00.4-.65 1.82 1.82 0 00.13-.87 1.81 1.81 0 00-.49-1.19A1.63 1.63 0 008.09 4a1.91 1.91 0 00-.86.18 1.74 1.74 0 00-.59.49 1.91 1.91 0 00-.36.71 3.7 3.7 0 00-.11.9H5A3.71 3.71 0 015.2 5a3.17 3.17 0 01.61-1.1 2.85 2.85 0 011-.69A3.21 3.21 0 018.09 3a3.4 3.4 0 011.18.19 2.71 2.71 0 01.92.53 2.6 2.6 0 01.6.83z"></path>
											</svg>
										</a> 
										<label id="sensitive_material" class="sc-jCXOcT eouSTr <?php echo ((isset($configration->sensitive_material) && $configration->sensitive_material==1) ? 'checked': '') ; ?>"><input type="checkbox" class="sc-cfZGEC hKvNSq"></label> 
									</div>
								</div>
							</div> 
							<div class="section" id="Settings--EmailPreferences"></div>
						</div>
					</div>
				</section>
			</section>
		</section>
<?php get_footer('links');