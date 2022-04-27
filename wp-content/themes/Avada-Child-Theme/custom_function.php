<?php
require_once(get_theme_file_path('/list-users.php'));
require ABSPATH . '/sheets/vendor/autoload.php';
function wpuf_add_profile_form_bottom_function(){
	echo"<h3 style='margin-top:30px;'>Social Links & Contact Info (optional)</h3>";
	echo'<div id="setting-social" class="setting">
			<div class="social-icon">
				<span class="icon">
					<img alt="instagram-icon" class="instagram-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/instagram-icon.png" />
				</span>
				<label class="active-input" for="setting-instagram-url"><input class="field is-empty" id="setting-instagram-url" name="instagram_url" placeholder="Instagram url" type="text" value=""><span><span>Instagram url</span></span></label>
			</div>
			<div class="social-icon">
				<span class="icon">
					<img alt="facebook-icon" class="facebook-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/facebook-icon.png" />
				</span>
				<label class="active-input" for="setting-facebook-url"><input class="field is-empty" id="setting-facebook-url" name="facebook_url" placeholder="Facebook url" type="text" value=""><span><span>Facebook url</span></span></label>
			</div>
			<div class="social-icon">
				<span class="icon">
					<img alt="tiktok-icon" class="tiktok-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/tiktok-icon.png" />
				</span>
				<label class="active-input" for="setting-tiktok-url"><input class="field is-empty" id="setting-tiktok-url" name="tiktok_url" placeholder="TikTok url" type="text" value=""><span><span>TikTok url</span></span></label>
			</div>
			<div class="social-icon">
				<span class="icon">
					<img alt="youtube-icon" class="youtube-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/Youtube_Icon.png" />
				</span>
				<label class="active-input" for="setting-youtube-url"><input class="field is-empty" id="setting-youtube-url" name="youtube_url" placeholder="YouTube url" type="text" value=""><span><span>YouTube url</span></span></label>
			</div>
			<div class="social-icon">
				<span class="icon">
					<img alt="linkedin-icon" class="linkedin-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/linkedin-icon.png" />
				</span>
				<label class="active-input" for="setting-linkedin-url"><input class="field is-empty" id="setting-linkedin-url" name="linkedin_url" placeholder="Linkedin url" type="text" value=""><span><span>Linkedin url</span></span></label>
			</div>
			<div class="social-icon">
				<span class="icon">
					<img alt="whatsapp-icon" class="whatsapp-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/whatsapp-icon.png" />
				</span>
				<label class="whatsapp-input" for="setting-whatsapp-number">
					<select class="whatsappselect" name="countryCode" id="whatsappselect">
						<option data-countrycode="US" value="1" selected="">USA (+1)</option>
						<option data-countrycode="GB" value="44" >UK (+44)</option>
						<optgroup label="Other countries">
							<option data-countrycode="DZ" value="213">Algeria (+213)</option>
							<option data-countrycode="AD" value="376">Andorra (+376)</option>
							<option data-countrycode="AO" value="244">Angola (+244)</option>
							<option data-countrycode="AI" value="1264">Anguilla (+1264)</option>
							<option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
							<option data-countrycode="AR" value="54">Argentina (+54)</option>
							<option data-countrycode="AM" value="374">Armenia (+374)</option>
							<option data-countrycode="AW" value="297">Aruba (+297)</option>
							<option data-countrycode="AU" value="61">Australia (+61)</option>
							<option data-countrycode="AT" value="43">Austria (+43)</option>
							<option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>
							<option data-countrycode="BS" value="1242">Bahamas (+1242)</option>
							<option data-countrycode="BH" value="973">Bahrain (+973)</option>
							<option data-countrycode="BD" value="880">Bangladesh (+880)</option>
							<option data-countrycode="BB" value="1246">Barbados (+1246)</option>
							<option data-countrycode="BY" value="375">Belarus (+375)</option>
							<option data-countrycode="BE" value="32">Belgium (+32)</option>
							<option data-countrycode="BZ" value="501">Belize (+501)</option>
							<option data-countrycode="BJ" value="229">Benin (+229)</option>
							<option data-countrycode="BM" value="1441">Bermuda (+1441)</option>
							<option data-countrycode="BT" value="975">Bhutan (+975)</option>
							<option data-countrycode="BO" value="591">Bolivia (+591)</option>
							<option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>
							<option data-countrycode="BW" value="267">Botswana (+267)</option>
							<option data-countrycode="BR" value="55">Brazil (+55)</option>
							<option data-countrycode="BN" value="673">Brunei (+673)</option>
							<option data-countrycode="BG" value="359">Bulgaria (+359)</option>
							<option data-countrycode="BF" value="226">Burkina Faso (+226)</option>
							<option data-countrycode="BI" value="257">Burundi (+257)</option>
							<option data-countrycode="KH" value="855">Cambodia (+855)</option>
							<option data-countrycode="CM" value="237">Cameroon (+237)</option>
							<option data-countrycode="CA" value="1">Canada (+1)</option>
							<option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>
							<option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>
							<option data-countrycode="CF" value="236">Central African Republic (+236)</option>
							<option data-countrycode="CL" value="56">Chile (+56)</option>
							<option data-countrycode="CN" value="86">China (+86)</option>
							<option data-countrycode="CO" value="57">Colombia (+57)</option>
							<option data-countrycode="KM" value="269">Comoros (+269)</option>
							<option data-countrycode="CG" value="242">Congo (+242)</option>
							<option data-countrycode="CK" value="682">Cook Islands (+682)</option>
							<option data-countrycode="CR" value="506">Costa Rica (+506)</option>
							<option data-countrycode="HR" value="385">Croatia (+385)</option>
							<option data-countrycode="CU" value="53">Cuba (+53)</option>
							<option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>
							<option data-countrycode="CY" value="357">Cyprus South (+357)</option>
							<option data-countrycode="CZ" value="42">Czech Republic (+42)</option>
							<option data-countrycode="DK" value="45">Denmark (+45)</option>
							<option data-countrycode="DJ" value="253">Djibouti (+253)</option>
							<option data-countrycode="DM" value="1809">Dominica (+1809)</option>
							<option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>
							<option data-countrycode="EC" value="593">Ecuador (+593)</option>
							<option data-countrycode="EG" value="20">Egypt (+20)</option>
							<option data-countrycode="SV" value="503">El Salvador (+503)</option>
							<option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>
							<option data-countrycode="ER" value="291">Eritrea (+291)</option>
							<option data-countrycode="EE" value="372">Estonia (+372)</option>
							<option data-countrycode="ET" value="251">Ethiopia (+251)</option>
							<option data-countrycode="FK" value="500">Falkland Islands (+500)</option>
							<option data-countrycode="FO" value="298">Faroe Islands (+298)</option>
							<option data-countrycode="FJ" value="679">Fiji (+679)</option>
							<option data-countrycode="FI" value="358">Finland (+358)</option>
							<option data-countrycode="FR" value="33">France (+33)</option>
							<option data-countrycode="GF" value="594">French Guiana (+594)</option>
							<option data-countrycode="PF" value="689">French Polynesia (+689)</option>
							<option data-countrycode="GA" value="241">Gabon (+241)</option>
							<option data-countrycode="GM" value="220">Gambia (+220)</option>
							<option data-countrycode="GE" value="7880">Georgia (+7880)</option>
							<option data-countrycode="DE" value="49">Germany (+49)</option>
							<option data-countrycode="GH" value="233">Ghana (+233)</option>
							<option data-countrycode="GI" value="350">Gibraltar (+350)</option>
							<option data-countrycode="GR" value="30">Greece (+30)</option>
							<option data-countrycode="GL" value="299">Greenland (+299)</option>
							<option data-countrycode="GD" value="1473">Grenada (+1473)</option>
							<option data-countrycode="GP" value="590">Guadeloupe (+590)</option>
							<option data-countrycode="GU" value="671">Guam (+671)</option>
							<option data-countrycode="GT" value="502">Guatemala (+502)</option>
							<option data-countrycode="GN" value="224">Guinea (+224)</option>
							<option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>
							<option data-countrycode="GY" value="592">Guyana (+592)</option>
							<option data-countrycode="HT" value="509">Haiti (+509)</option>
							<option data-countrycode="HN" value="504">Honduras (+504)</option>
							<option data-countrycode="HK" value="852">Hong Kong (+852)</option>
							<option data-countrycode="HU" value="36">Hungary (+36)</option>
							<option data-countrycode="IS" value="354">Iceland (+354)</option>
							<option data-countrycode="IN" value="91">India (+91)</option>
							<option data-countrycode="ID" value="62">Indonesia (+62)</option>
							<option data-countrycode="IR" value="98">Iran (+98)</option>
							<option data-countrycode="IQ" value="964">Iraq (+964)</option>
							<option data-countrycode="IE" value="353">Ireland (+353)</option>
							<option data-countrycode="IL" value="972">Israel (+972)</option>
							<option data-countrycode="IT" value="39">Italy (+39)</option>
							<option data-countrycode="JM" value="1876">Jamaica (+1876)</option>
							<option data-countrycode="JP" value="81">Japan (+81)</option>
							<option data-countrycode="JO" value="962">Jordan (+962)</option>
							<option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>
							<option data-countrycode="KE" value="254">Kenya (+254)</option>
							<option data-countrycode="KI" value="686">Kiribati (+686)</option>
							<option data-countrycode="KP" value="850">Korea North (+850)</option>
							<option data-countrycode="KR" value="82">Korea South (+82)</option>
							<option data-countrycode="KW" value="965">Kuwait (+965)</option>
							<option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>
							<option data-countrycode="LA" value="856">Laos (+856)</option>
							<option data-countrycode="LV" value="371">Latvia (+371)</option>
							<option data-countrycode="LB" value="961">Lebanon (+961)</option>
							<option data-countrycode="LS" value="266">Lesotho (+266)</option>
							<option data-countrycode="LR" value="231">Liberia (+231)</option>
							<option data-countrycode="LY" value="218">Libya (+218)</option>
							<option data-countrycode="LI" value="417">Liechtenstein (+417)</option>
							<option data-countrycode="LT" value="370">Lithuania (+370)</option>
							<option data-countrycode="LU" value="352">Luxembourg (+352)</option>
							<option data-countrycode="MO" value="853">Macao (+853)</option>
							<option data-countrycode="MK" value="389">Macedonia (+389)</option>
							<option data-countrycode="MG" value="261">Madagascar (+261)</option>
							<option data-countrycode="MW" value="265">Malawi (+265)</option>
							<option data-countrycode="MY" value="60">Malaysia (+60)</option>
							<option data-countrycode="MV" value="960">Maldives (+960)</option>
							<option data-countrycode="ML" value="223">Mali (+223)</option>
							<option data-countrycode="MT" value="356">Malta (+356)</option>
							<option data-countrycode="MH" value="692">Marshall Islands (+692)</option>
							<option data-countrycode="MQ" value="596">Martinique (+596)</option>
							<option data-countrycode="MR" value="222">Mauritania (+222)</option>
							<option data-countrycode="YT" value="269">Mayotte (+269)</option>
							<option data-countrycode="MX" value="52">Mexico (+52)</option>
							<option data-countrycode="FM" value="691">Micronesia (+691)</option>
							<option data-countrycode="MD" value="373">Moldova (+373)</option>
							<option data-countrycode="MC" value="377">Monaco (+377)</option>
							<option data-countrycode="MN" value="976">Mongolia (+976)</option>
							<option data-countrycode="MS" value="1664">Montserrat (+1664)</option>
							<option data-countrycode="MA" value="212">Morocco (+212)</option>
							<option data-countrycode="MZ" value="258">Mozambique (+258)</option>
							<option data-countrycode="MN" value="95">Myanmar (+95)</option>
							<option data-countrycode="NA" value="264">Namibia (+264)</option>
							<option data-countrycode="NR" value="674">Nauru (+674)</option>
							<option data-countrycode="NP" value="977">Nepal (+977)</option>
							<option data-countrycode="NL" value="31">Netherlands (+31)</option>
							<option data-countrycode="NC" value="687">New Caledonia (+687)</option>
							<option data-countrycode="NZ" value="64">New Zealand (+64)</option>
							<option data-countrycode="NI" value="505">Nicaragua (+505)</option>
							<option data-countrycode="NE" value="227">Niger (+227)</option>
							<option data-countrycode="NG" value="234">Nigeria (+234)</option>
							<option data-countrycode="NU" value="683">Niue (+683)</option>
							<option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>
							<option data-countrycode="NP" value="670">Northern Marianas (+670)</option>
							<option data-countrycode="NO" value="47">Norway (+47)</option>
							<option data-countrycode="OM" value="968">Oman (+968)</option>
							<option data-countrycode="PW" value="680">Palau (+680)</option>
							<option data-countrycode="PA" value="507">Panama (+507)</option>
							<option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>
							<option data-countrycode="PY" value="595">Paraguay (+595)</option>
							<option data-countrycode="PE" value="51">Peru (+51)</option>
							<option data-countrycode="PH" value="63">Philippines (+63)</option>
							<option data-countrycode="PL" value="48">Poland (+48)</option>
							<option data-countrycode="PT" value="351">Portugal (+351)</option>
							<option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>
							<option data-countrycode="QA" value="974">Qatar (+974)</option>
							<option data-countrycode="RE" value="262">Reunion (+262)</option>
							<option data-countrycode="RO" value="40">Romania (+40)</option>
							<option data-countrycode="RU" value="7">Russia (+7)</option>
							<option data-countrycode="RW" value="250">Rwanda (+250)</option>
							<option data-countrycode="SM" value="378">San Marino (+378)</option>
							<option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
							<option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>
							<option data-countrycode="SN" value="221">Senegal (+221)</option>
							<option data-countrycode="CS" value="381">Serbia (+381)</option>
							<option data-countrycode="SC" value="248">Seychelles (+248)</option>
							<option data-countrycode="SL" value="232">Sierra Leone (+232)</option>
							<option data-countrycode="SG" value="65">Singapore (+65)</option>
							<option data-countrycode="SK" value="421">Slovak Republic (+421)</option>
							<option data-countrycode="SI" value="386">Slovenia (+386)</option>
							<option data-countrycode="SB" value="677">Solomon Islands (+677)</option>
							<option data-countrycode="SO" value="252">Somalia (+252)</option>
							<option data-countrycode="ZA" value="27">South Africa (+27)</option>
							<option data-countrycode="ES" value="34">Spain (+34)</option>
							<option data-countrycode="LK" value="94">Sri Lanka (+94)</option>
							<option data-countrycode="SH" value="290">St. Helena (+290)</option>
							<option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>
							<option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>
							<option data-countrycode="SD" value="249">Sudan (+249)</option>
							<option data-countrycode="SR" value="597">Suriname (+597)</option>
							<option data-countrycode="SZ" value="268">Swaziland (+268)</option>
							<option data-countrycode="SE" value="46">Sweden (+46)</option>
							<option data-countrycode="CH" value="41">Switzerland (+41)</option>
							<option data-countrycode="SI" value="963">Syria (+963)</option>
							<option data-countrycode="TW" value="886">Taiwan (+886)</option>
							<option data-countrycode="TJ" value="7">Tajikstan (+7)</option>
							<option data-countrycode="TH" value="66">Thailand (+66)</option>
							<option data-countrycode="TG" value="228">Togo (+228)</option>
							<option data-countrycode="TO" value="676">Tonga (+676)</option>
							<option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
							<option data-countrycode="TN" value="216">Tunisia (+216)</option>
							<option data-countrycode="TR" value="90">Turkey (+90)</option>
							<option data-countrycode="TM" value="7">Turkmenistan (+7)</option>
							<option data-countrycode="TM" value="993">Turkmenistan (+993)</option>
							<option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
							<option data-countrycode="TV" value="688">Tuvalu (+688)</option>
							<option data-countrycode="UG" value="256">Uganda (+256)</option>
							<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
							<option data-countrycode="UA" value="380">Ukraine (+380)</option>
							<option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>
							<option data-countrycode="UY" value="598">Uruguay (+598)</option>
							<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
							<option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>
							<option data-countrycode="VU" value="678">Vanuatu (+678)</option>
							<option data-countrycode="VA" value="379">Vatican City (+379)</option>
							<option data-countrycode="VE" value="58">Venezuela (+58)</option>
							<option data-countrycode="VN" value="84">Vietnam (+84)</option>
							<option data-countrycode="VG" value="84">Virgin Islands - British (+1284)</option>
							<option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>
							<option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>
							<option data-countrycode="YE" value="969">Yemen (North)(+969)</option>
							<option data-countrycode="YE" value="967">Yemen (South)(+967)</option>
							<option data-countrycode="ZM" value="260">Zambia (+260)</option>
							<option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>
						</optgroup>
					</select> 
					<input class="field numeric whatsappinput" id="setting-whatsapp-number" name="whatsapp_number" placeholder="WhatsApp number" type="text" value="">
					<span><span>WhatsApp number</span></span>
				</label>
			</div>
			<div class="social-icon"> 
				<span class="icon">
					<img alt="email-icon" class="email-icon" src="'.get_site_url().'/wp-content/uploads/2021/02/Image-from-iOS.jpg" />
				</span>
				<label class="active-input" for="setting-email-url"><input class="field is-empty" id="setting-email-url" name="email_normal" placeholder="email url" type="text" value=""><span><span>Email</span></span></label>
			</div>
			<div id="CustomAvatar" style="margin-top:30px;" data-default-image="<?= get_site_url() ?>/wp-content/uploads/2021/02/default_profile_picture.png">
				<div class="sc-dyUqLn jSKrsD">
					<div class="sc-jwzInS jCMSKA">
						<div class="show_image" aria-disabled="false" style="position: absolute; width: 100%; height: 100%;">
							<input id="upload_profile" accept="image/*" type="file" multiple="" autocomplete="off" style="position: absolute; inset: 0px; opacity: 1e-05; pointer-events: none;">
							<input type="hidden" name="hiddenprofile" value=""/>
						</div>
					</div>
					<div class="sc-hWgnmY bXNsOS">
						<button id="change-profile-pic" class="button purple">Upload Pic</button>
						<button id="remove-profile-pic" class="button grey">Remove</button>
					</div>
				</div>
			</div>
		</div>';	
}	
add_action('wpuf_fields_before_submit_button','wpuf_add_profile_form_bottom_function');
/*add_action( 'phpmailer_init', 'setup_phpmailer_init' );
function setup_phpmailer_init( $phpmailer ) {
    $phpmailer->Host = 'smtp.mandrillapp.com'; // for example, smtp.mailtrap.io
    $phpmailer->Port = 587; // set the appropriate port: 465, 2525, etc.
    $phpmailer->Username = 'YOGABODY'; // your SMTP username
    $phpmailer->Password = '2upt6kEoJJ4p_sGFBpn5ag'; // your SMTP password
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'tls'; // preferable but optional
    $phpmailer->IsSMTP();
	
}*/
function update_build_list_button_text_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'class_product_name'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_build_list_button_text", "update_build_list_button_text_function");
function update_build_list_invite_client_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'class_price'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_build_list_invite_client", "update_build_list_invite_client_function");
function update_build_list_success_messsage_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'price_currency'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_build_list_success_messsage", "update_build_list_success_messsage_function");
function update_build_list_term_conditions_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'resume_about'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_build_list_term_conditions", "update_build_list_term_conditions_function");
function update_google_sheet_url_function(){
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$result = $wpdb->update($tablename,array(
		'embed_type'=>stripcslashes($_POST['title'])),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_google_sheet_url", "update_google_sheet_url_function");

function update_google_sheet_auth_code_function(){
	global $wpdb;
	//echo"<pre>";print_r($_POST);echo"</pre>";die;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$token = json_encode(array('access_token'=>$_POST['access_token'],'expires_in'=>9999999999,'refresh_token'=>'','scope'=>'https://www.googleapis.com/auth/spreadsheets','token_type'=>'Bearer','created'=>time()));
	$result = $wpdb->update($tablename,array(
		'work_experience'=>$token),
		array('ID'=>$_POST['ID'],'user_id'=>$user_id)
	);
	update_user_meta($user_id,'google_sheet_token',$token);
	if($result > 0){
		echo json_encode(array('type'=>'success','update'=>$result));
	}
	else{
	  exit( var_dump( $wpdb->last_query ) );
	}
    
    die;
}
add_action("wp_ajax_update_google_sheet_auth_code", "update_google_sheet_auth_code_function");

function yogabody_subscribe_email_list_function(){
	
	global $wpdb;
	
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$id=$_POST['id'];
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
	$url_explode = explode('spreadsheets/d/',$link->embed_type);
	$url_main = explode('/',$url_explode[1]);
	$spreadsheetId = $url_main[0];
		
	$client = googleClientById($id);
	$service = new Google_Service_Sheets($client);
	$range = 'Sheet1';
	$values = array(
				array('A', 'B'),
				array('C', 'D')
			);
	$valueInputOption = 'USER_ENTERED';
	$body = new Google_Service_Sheets_ValueRange([
				'values' => $values
			]);
	$params = [
		'valueInputOption' => $valueInputOption
	];
	$options = array('valueInputOption' => 'RAW');
	
	$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

    printf("%d cells appended.", $result->getUpdates()->getUpdatedCells());
    die;
}
add_action("wp_ajax_yogabody_subscribe_email_list", "yogabody_subscribe_email_list_function");
add_action("wp_ajax_nopriv_yogabody_subscribe_email_list", "yogabody_subscribe_email_list_function");
function googleClientById($id)
{
	global $wpdb;
	$tablename = $wpdb->prefix.'treelinks';
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig(ABSPATH . '/sheets/client_secret_1084690924228.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = $link->work_experience;
    if (!empty($tokenPath)) {
        $accessToken = json_decode($tokenPath, true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));
			//$authCode = '4/0AX4XfWjwpWl22lEnY0hNgVQ0ncD5qqofrxRdeewmgd1vMydOkkW1wCyoKyDs3cRcmxMqBA';
            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                //throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        $result = $wpdb->update($tablename,array(
			'work_experience'=>json_encode($client->getAccessToken())),
			array('ID'=>$id)
		);
    }
    return $client;
}
function newgetClient($id)
{
	global $wpdb;
    $tablename = $wpdb->prefix.'treelinks';
    $user_id = get_current_user_id();
	$current_user = wp_get_current_user();
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig(ABSPATH . '/sheets/client_secret_1084690924228.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
	$link = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}treelinks WHERE ID=$id");
    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = $link->work_experience;
    if ($tokenPath) {
        $accessToken = json_decode($tokenPath, true);
        $client->setAccessToken($accessToken);
    }
	//echo"<pre>";print_r($client->isAccessTokenExpired());echo"</pre>";
    // If there is no previous token or it's expired.
    /*if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        }
		echo"<pre>";print_r($client->getAccessToken());echo"</pre>";die;
        $result = $wpdb->update($tablename,array(
			'work_experience'=>json_encode($client->getAccessToken())),
			array('ID'=>$id,'user_id'=>$user_id)
		);
    }*/
    return $client;
}

define('API_ENDPOINT_VERSION', 1);

//flush the rewrite rules on plugin activation

function apiendpoint_activate() {
    flush_rewrite_rules(); 
}
register_activation_hook(__FILE__, 'apiendpoint_activate');

function apiendpoint_register_endpoints() {
    register_rest_route(
        'api/v1',
        '/users',
        [
            'methods' => 'GET',
            'callback' => 'api_get_post',
        ]
    );

}
add_action('rest_api_init', 'apiendpoint_register_endpoints');

function api_get_post($request) {
	global $wpdb;
	if((isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']=='') && !isset($_GET['teacher-style'])){
		$search_term = $_GET['search'];
		$count_args  = array(
			'role'      => 'subscriber',
			'fields'    => 'all_with_meta',
			'number'    => 999999,
			'search' => '*'.esc_attr( $search_term ).'*',
			'meta_query' => array(
				'relation' => 'OR',
				array(
					'key'     => 'first_name',
					'value'   => $search_term,
					'compare' => 'LIKE'
				),
				array(
					'key'     => 'last_name',
					'value'   => $search_term,
					'compare' => 'LIKE'
				),
				array(
					'key' => 'description',
					'value' => $search_term ,
					'compare' => 'LIKE'
				)
			)
		);
		$wp_user_query = new WP_User_Query($args);
		$user_count = $wp_user_query->get_results();
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']=='') && (isset($_GET['country']) && $_GET['country']=='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%'";
		$user_count = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']=='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$search_term = $_GET['search'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND (users.display_name LIKE '%$search_term%' OR users.user_login LIKE '%$search_term%' OR users.user_email LIKE '%$search_term%')";
		$user_count = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']=='') && (isset($_GET['country']) && $_GET['country']!='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$country = $_GET['country'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID LEFT JOIN {$wpdb->prefix}usermeta as usermeta ON usermeta.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND usermeta.meta_key='country_list' AND usermeta.meta_value='$country'";
		$user_count = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']!='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$search_term = $_GET['search'];
		$country = $_GET['country'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID LEFT JOIN {$wpdb->prefix}usermeta as usermeta ON usermeta.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND (users.display_name LIKE '%$search_term%' OR users.user_login LIKE '%$search_term%' OR users.user_email LIKE '%$search_term%') AND usermeta.meta_key='country_list' AND usermeta.meta_value='$country'";
		$user_count = $wpdb->get_results($psql);
	}else{
    $count_args  = array(
		'role'      => 'subscriber',
		'fields'    => 'all_with_meta',
		'number'    => 999999      
	);
	$user_count_query = new WP_User_Query($count_args);
	$user_count = $user_count_query->get_results();
	}
	

	// count the number of users found in the query
	$total_users = $user_count ? count($user_count) : 1;

	// grab the current page number and set to 1 if no page number is set
	$page = isset($_GET['page']) ? $_GET['page'] : 1;

	// how many users to show per page
	$users_per_page = 30;

	// calculate the total number of pages.
	$total_pages = 1;
	$offset = $users_per_page * ($page - 1);
	$total_pages = ceil($total_users / $users_per_page);
	if((isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']=='') && !isset($_GET['teacher-style'])){
		// WP_User_Query arguments
		$search_term = $_GET['search'];
		$args = array (
			'role' => 'subscriber',
			'order' => 'ASC',
			'orderby'   => 'display_name',
			'fields'    => 'all_with_meta',
			'number'    => $users_per_page,
			'offset'    => $offset,
			'search' => '*'.esc_attr( $search_term ).'*',
			'meta_query' => array(
				'relation' => 'OR',
				array(
					'key'     => 'first_name',
					'value'   => $search_term,
					'compare' => 'LIKE'
				),
				array(
					'key'     => 'last_name',
					'value'   => $search_term,
					'compare' => 'LIKE'
				),
				array(
					'key' => 'description',
					'value' => $search_term ,
					'compare' => 'LIKE'
				)
			)
		);
		$wp_user_query = new WP_User_Query($args);
		$authors = $wp_user_query->get_results();
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']=='') && (isset($_GET['country']) && $_GET['country']=='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' ORDER BY users.display_name ASC LIMIT $offset,$users_per_page";
		$authors = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']=='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$search_term = $_GET['search'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND (users.display_name LIKE '%$search_term%' OR users.user_login LIKE '%$search_term%' OR users.user_email LIKE '%$search_term%') ORDER BY users.display_name ASC LIMIT $offset,$users_per_page";
		$authors = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']=='') && (isset($_GET['country']) && $_GET['country']!='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$country = $_GET['country'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID LEFT JOIN {$wpdb->prefix}usermeta as usermeta ON usermeta.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND usermeta.meta_key='country_list' AND usermeta.meta_value='$country' ORDER BY users.display_name ASC LIMIT $offset,$users_per_page";
		$authors = $wpdb->get_results($psql);
	}else if(isset($_GET['teacher-style']) && (isset($_GET['search']) && $_GET['search']!='') && (isset($_GET['country']) && $_GET['country']!='') ){
		$tablename = $wpdb->prefix.'treelinks';
		$style = $_GET['teacher-style'];
		$search_term = $_GET['search'];
		$country = $_GET['country'];
		$psql = "SELECT users.* FROM {$wpdb->prefix}users as users LEFT JOIN $tablename as treelinks ON treelinks.user_id=users.ID LEFT JOIN {$wpdb->prefix}usermeta as usermeta ON usermeta.user_id=users.ID WHERE treelinks.education_training LIKE '%$style%' AND (users.display_name LIKE '%$search_term%' OR users.user_login LIKE '%$search_term%' OR users.user_email LIKE '%$search_term%') AND usermeta.meta_key='country_list' AND usermeta.meta_value='$country' ORDER BY users.display_name ASC LIMIT $offset,$users_per_page";
		$authors = $wpdb->get_results($psql);
	}else{
		// main user query
		$args  = array(
			// search only for Authors role
			'role'      => 'subscriber',
			'order' => 'ASC',
			'orderby'   => 'display_name',
			// return all fields
			'fields'    => 'all_with_meta',
			'number'    => $users_per_page,
			'offset'    => $offset // skip the number of users that we have per page  
		);		
	$wp_user_query = new WP_User_Query($args);
	$authors = $wp_user_query->get_results();
	}
	$users=array();
	foreach($authors as $author){
		$author_obj = get_user_by('id', $author->ID);
		$user_meta = get_user_meta($author_obj->ID,'yogabody_configration',true);
		$bio_data = json_decode($user_meta);
		$we_std = new stdClass;
		$we_std->ID = $author_obj->ID;
		$we_std->display_name = $author_obj->display_name;
		$we_std->first_name = $author_obj->first_name;
		$we_std->last_name = $author_obj->last_name;
		$we_std->user_email = $author_obj->user_email;
		$we_std->user_login = $author_obj->user_login;
		$we_std->bio_url = get_site_url()."/".$author_obj->user_login;
		$we_std->user_registered = $author_obj->user_registered;
		$we_std->roles = $author_obj->roles;
		if(isset($bio_data->profile_picture)){
			$we_std->profile_picture = $bio_data->profile_picture;
		}else{
			$we_std->profile_picture = get_site_url()."/wp-content/uploads/2021/02/default_profile_picture.png";
		}
		if(isset($bio_data->profile_title)){
			$we_std->profile_title = $bio_data->profile_title;
		}
		$users[] = $we_std;
	}
	//remove_action( 'pre_user_query', 'add_my_custom_queries' ); 
	return array('type'=>'success','total_users'=>$total_users,'total_pages'=>$total_pages,'userto'=>($offset+$users_per_page),'userfrom'=>$offset,'users'=>$users);
}
add_action( 'sm_build_index',   'gsmg_register_extension', 10 );
add_action( 'sm_build_content', 'gsmg_register_extension', 10 );

function gsmg_register_extension() {
	static $extension = null;

	if ( is_null( $extension ) && class_exists( 'GoogleSitemapGeneratorStandardBuilder' ) ) {
		/**
		* 
		*/
		class GSMG_Media extends GoogleSitemapGeneratorStandardBuilder {
			/**
			 * Override the default construct method for GoogleSitemapGeneratorStandardBuilder
			 *
			 * This way we add our actions with lower(higher index) priority,
			 * so that the media list comes last
			 */
			function __construct() {
				add_action( "sm_build_index", array( $this, "main" ), 15, 1 );
				add_action( "sm_build_content", array( $this, "render_attachments" ), 15, 3 );
			}

			public function main( $gsg ) {
				global $wpdb;

				$wpdb->show_errors();
				$blogUpdate = strtotime(get_lastpostmodified('gmt'));
				$gsg->AddSitemap("bioprofiles", null, $blogUpdate);
			}

			public function render_attachments( $gsg, $type, $params ) {
				global $wpdb;
				$sql ="SELECT * FROM {$wpdb->prefix}users";
				$authors = $wpdb->get_results($sql);
				if($authors && is_array($authors)) {

					foreach($authors as $author) {

						//$url = get_author_posts_url($author->ID, $author->user_nicename);
						$url = get_site_url()."/".$author->user_login;

						$gsg->AddUrl($url, $gsg->GetTimestampFromMySql($author->user_registered), 'daily', $gsg->GetOption("pr_auth"));

					}

				}
			}
		}

		$extension = new GSMG_Media();
	}
}