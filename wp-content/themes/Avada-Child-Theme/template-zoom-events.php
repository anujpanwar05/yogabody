<?php
/**
* Template Name: Yogabody Zoom Event
* Description: Yogabody Zoom user event page.
*/
if (!is_user_logged_in()) {
	$url = get_site_url().'/login/';
	wp_redirect( $url );
	exit;
	}
	
	
	get_header('links');
	
	$current_user = wp_get_current_user();
	
	$user_id = get_current_user_id();
	
	$userToken='';
	
	$userToken = get_user_meta($user_id,'access_token',true);
	if($userToken){
		/*if($user_id==1){*/
		
			try {
				
				$refresh_token = $userToken['refresh_token']; 
				$client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
				$response = $client->request('POST', '/oauth/token', [
					"headers" => [
						"Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
					],
					'form_params' => [
						"grant_type" => "refresh_token",
						"refresh_token" => $refresh_token
					],
				]);
				$token = json_decode($response->getBody()->getContents(), true);
				
				$update = update_user_meta($user_id,'access_token', $token);
				
				$userToken = get_user_meta($user_id,'access_token',true);
				
				$ut = isset($userToken['access_token'])?$userToken['access_token']:0;
				
				$accessToken =trim($ut);
				
				$response = $client->request('GET', '/v2/users/me/meetings', [
								"headers" => [
												"Authorization" => "Bearer $accessToken"
											 ]
								]);
				
				//$data = json_encode(json_decode($response->getBody()),true);
				$data = json_decode($response->getBody());
				
			} catch(Exception $e) {
				echo $e->getMessage();
				delete_user_meta($user_id, 'access_token');
			}
			
		/*}else{
			
		$refresh_token = $userToken['refresh_token'];

		$client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
		$response = $client->request('POST', '/oauth/token', [
						"headers" => [
										"Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
									 ],
						'form_params' => [
										"grant_type" => "refresh_token",
										"refresh_token" => $refresh_token
										],
					]);
			
				$token = json_decode($response->getBody()->getContents(), true);
				
				$update = update_user_meta($user_id,'access_token', $token);
				
				$userToken = get_user_meta($user_id,'access_token',true);
				
				$ut = isset($userToken['access_token'])?$userToken['access_token']:0;
				
				$accessToken =trim($ut);
				
				$response = $client->request('GET', '/v2/users/me/meetings', [
								"headers" => [
												"Authorization" => "Bearer $accessToken"
											 ]
								]);
				
				//$data = json_encode(json_decode($response->getBody()),true);
				$data = json_decode($response->getBody());
		}*/
				
	}
	if($_GET['code']){
	try {
			$client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
			$response = $client->request('POST', '/oauth/token', [
							"headers" => [
											"Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
										 ],
							'form_params' => [
												"grant_type" => "authorization_code",
												"code" => $_GET['code'],
												"redirect_uri" => REDIRECT_URI
											 ],
						]);
						
			$token = json_decode($response->getBody()->getContents(), true);
				
				if(get_user_meta($user_id,'access_token',false)){
					
					update_user_meta($user_id,'access_token', $token);
					
				}else{
					
						update_user_meta($user_id,'access_token', $token);
					}
					
			$url = get_site_url().'/events/';
				
			wp_redirect( $url );
						
		
		} catch(Exception $e) {
								//echo '<pre>';
										//echo $e->getMessage();
									//echo '</pre>';
							}
	}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.css" integrity="" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/1.1.1/jquery.datetimepicker.min.css" integrity="" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
body{
font-family: Karla,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Oxygen,Cantarell,sans-serif;}
#exampleModal .form-control
{
	height: 41px;
	display: block;
width: 100%;
padding: .375rem .75rem;
font-size: 1rem;
line-height: 1.5;
color: #495057;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
border-radius: .25rem;
transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.error{ border:1px solid red;}
.Div-WNP{margin-top: 20px;margin-bottom: 20px;}
.Div-WNP a{font-weight: 700;}
.Div-WNP a img{height: 34px;}
.Table-Custom .dataTables_wrapper .dataTables_filter input:focus,
.Table-Custom .dataTables_wrapper .dataTables_length select:focus {outline: none;}
.pd-zero {padding-left: 0 !important;padding-right: 0 !important;}
.Table-Custom .dataTables_wrapper .dataTables_paginate .paginate_button.current,
.Table-Custom .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
color: #fff !important;border: 1px solid #00d775;background-color: #00d775;background: #00d775;}
.Table-Custom .table tr,
.Table-Custom .table td {border: unset;vertical-align: middle;}
.Table-Custom .table th{border: unset;}
.Table-Custom .table th,
.Table-Custom .table td {white-space: nowrap;}
.Table-Custom table.dataTable.no-footer {border-bottom: unset; }
.Table-Custom .table thead{background: #C3F6E1;}
.Table-Custom .dataTables_length,
.Table-Custom .dataTables_filter{margin-bottom: 20px;}
.Table-Custom .dataTables_wrapper .dataTables_length,
.Table-Custom .dataTables_wrapper .dataTables_filter,
.Table-Custom .dataTables_wrapper .dataTables_info,
.Table-Custom .dataTables_wrapper .dataTables_processing,
.Table-Custom .dataTables_wrapper .dataTables_paginate {color: #000;}
.pd-zero button.btn-primary {color: #000 !important;font-weight: 600;}
.close-button {
position: absolute;
top: 0px;right: 0px;
background: #38E29B !important;
color: #fff;
padding: 10px !important;
border: 10px solid #fff !important;
width: 30px;height: 30px;
display: flex;justify-content: center;align-items: center;
border-radius: 50%;line-height: 0;cursor: pointer;
font-size: 1em;font-weight: 700;opacity: 1 !important;}
.close-button:focus,
.close-button:hover {color: unset;text-decoration: none;cursor: pointer;opacity: 1;outline: 0;}
.inv-clk{width: 15%;color: #000;font-weight: 600;}
section.admin-sidebar {z-index: 1; }
.primary.pd-zero .main .login-img{height: 50px;}
.mtpd{margin-top: 25px;padding: 20px;}
.mtpd h4{margin-bottom: 20px;font-weight: 600;font-size: 24px;}
.Ig{display: flex;flex-flow: wrap;
justify-content: space-between;padding: 20px;box-shadow: 4px 4px 12px #00000029;
border-radius: 8px;align-items: center;}
.Ig .Ig-items p:first-child{margin-bottom: 0;}
.xdsoft_datetimepicker {
border-bottom: unset;
border-left: unset;
border-right: unset;
border-top: unset;
color: #333;
/*display: block;*/
font-family: Karla,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Oxygen,Cantarell,sans-serif;
background: #ffffff;
border-radius: 0.25rem;
box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
margin-top: 1rem;
}
.xdsoft_datetimepicker .xdsoft_calendar td,
.xdsoft_datetimepicker .xdsoft_calendar th
{
border:  unset;}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current {
background: #38e29b;
box-shadow: unset;
color: #000;
font-weight: 700;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_calendar td:hover
{border-radius: 50%;}
.xdsoft_datetimepicker .xdsoft_calendar td,
.xdsoft_datetimepicker .xdsoft_calendar th {
background: #fff;
border: unset;
color: #666;
width: 32px;
height: 32px;
text-align: center;
}
.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
color: #fff !important;
background: #38e29b!important;
}
.xdsoft_datetimepicker .xdsoft_calendar td>div {
padding: unset;
text-align: center;
margin: 0 auto;
line-height: 32px;
border-radius: 50%;
}
.table-responsive.Table-Custom .dataTable.no-footer thead th
{
	padding: 8px 10px;
    font-size: 14.2px;
    min-width: 105px;
}

.table-responsive.Table-Custom .dataTable.no-footer tbody .btn.btn-primary {
    margin-left: unset !important;
}

.table-responsive.Table-Custom .dataTable.no-footer thead th:nth-child(3) {
    width: 200px !important;
}



/* Chrome, Safari, Edge, Opera */
#exampleModal input::-webkit-outer-spin-button,
#exampleModal input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
#exampleModal input[type=number] {
  -moz-appearance: textfield;
}



@media (max-width: 768px){
.primary.pd-zero .main{padding-left: 10px;padding-right:10px;}
.table-responsive.Table-Custom {border: unset;}
.inv-clk{width: unset;}
body.page-template-template-zoom-events{overflow-x: unset !important;}
.mtpd, .Ig {padding: 10px;}
.Ig-items{width: 50%;}
 .page-template-template-zoom-events section.secondary .toolbar__inner {
  
     height: auto;
    padding: 10px 15px;
    
}

.page-template-template-zoom-events .dUaVBw {
   
    padding: 0 15px;
    
}

 .page-template-template-zoom-events #example_length
{
  width: 50%;
  float: left;
 text-align: left;

}

 .page-template-template-zoom-events #example_filter
{
  width: 50%;
  float: left;
  margin-top: 0;
  text-align: left;
}

}
</style>
<section class="main admin has-toolbar" data-page-links>
	<div id="Analytics--Account-Overview">
		<div class="sc-BXqHe gzjBnH">
			
			<div class="sc-hRxedE bXaEKg" style="overflow: hidden; display: none;">
				<div>
					<div class="sc-licaXj kQiA-Db">
						<div class="sc-gUUzQN fjJNhu">
							<div>
								<div style="position:relative;">
									<canvas width="1" height="250" style="width: 1px; height: 250px; display: inline-block; vertical-align: middle;"></canvas>
								</div>
							</div>
							<div class="sc-eWvPJL sc-hJxCPi iPvfUg bERasM">
								<div>More analytics available in PRO</div>
								<a href="/admin/pro" class="sc-kUbhmq jEqguw" data-test="Link"><button color="purple" class="sc-iwyYcG gNcBol   undefined" type="button" data-test="Button"><span class="button--label" data-test="Label">Signup for PRO</span></button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="SearchModalPortal"></div>
	<section class="action-area section__inner" data-perfect-scroll data-perfect-scroll-sizes="normal,medium,large,extra-large">
		<section class="primary pd-zero">
			<div class="main">
				<?php if(isset($_GET['send']) && $_GET['send']=='sucess'){?>
				<div id="alert" class="alert alert-success">Mail sent successfully!!</div>
				<?php } if(isset($_GET['send']) && $_GET['send']=='fail') {?>
				<div class="alert alert-danger" role="alert">Something went wrong and we haven't been able to send your email yet!</div>
				<?php } ?>
				
				<?php if($userToken){
				
				// The Query
				$query = new WP_Query(array('post_type' => 'zoomevents','post_status' => 'publish','author'=>$user_id));
				wp_reset_query();
				
				?>
				<div class="w-100 Div-WNP">
					<a class="" href="#" onclick="event.preventDefault(); document.getElementById('disconnectZoom').submit();">
						<img src="<?php echo get_site_url()?>/wp-content/uploads/oauth_btn1.png">
					</a>
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Create Meeting</button>
				</div>
				
				<div class="table-responsive Table-Custom" style="overflow-x:auto;">
					<table class="table table-success table-striped" id="example">
						<thead>
							<tr>
								<th>S.No.</th>
								<th>Topic</th>
								<th>Start Date and time</th>
								<th>Share link</th>
								<th>Duration</th>
								<th>Join Url</th>
								<th>Created Date</th>
								
							</tr>
						</thead>
						<tbody>
							<?php  if( $query->have_posts() ) {
										$num=1;
										while( $query->have_posts() ) {
										
										$query->the_post();
										
							?>
							<tr>
								<td><?php echo $num; ?></td>
								
								<td><?php the_title(); ?></td>
								
								<td><?php echo date("Y-m-d H:i:s", strtotime(get_post_meta( get_the_ID(),'startdatetime',true))); ?></td>
								
								<td>
									<button type="button" class="btn btn-primary meetingid" data-toggle="modal" data-id="<?php echo get_the_ID();?>" data-target="#InviteModal" id="meetingid">Invite People</button>
								</td>
								<td><?php  echo $duration = get_post_meta( get_the_ID(),'duration',true);?> Min.</td>
								
								<td>
									<a href="<?php echo $zoomurl = get_post_meta( get_the_ID(),'zoomurl',true); ?>" target="_blank">
										<?php echo $zoomurl = get_post_meta( get_the_ID(),'zoomurl',true); ?>
									</a>
								</td>
								
								<td><?php echo get_the_date(); ?></td>
								
							</tr>
							
							<?php
										$num++;	}
							} ?>
							
							
						</tbody>
					</table>
				</div>
				<?php } else {?>
				
				<div class="panel mtpd">
					<h4>Login With Zoom</h4>
					<div class="Ig">
						<div class="Ig-items">
							<p>Zoom</p>
							<p><small>Required for create meetings</small></p>
						</div>
						<div class="Ig-items">
							<a class="" href="<?=ZOOM_OAUTH_URI?>"><img src="<?php echo get_site_url()?>/wp-content/uploads/oauth_btn.png" class="login-img"></a>
						</div>
					</div>
					
				</div>	
				
				<?php } ?>
				
			</div>
		</section>
	</section>
</section>
<!-- Invitation -->
<div class="modal fade" id="InviteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title m-auto">Invite People </h3>
				<button type="button" class="close close-button" data-dismiss="modal" aria-label="Close" id="close_meeting_model">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="meeting_invitation" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
					<input type="hidden" name="post_id" id="post_id" value="" />
					<input type="hidden" name="action" value="zoom_user_meeting_invitation">
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label for="invite_people" class="control-label">Invite People<small></small></label>
							<textarea class="form-control" id="invite_people"  name="invite_people" placeholder="abc@mail.com, xyz@mail.com"></textarea>
							<span id="invite_people-error"></span>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<input type="submit" name="invite" id="invite" class="btn btn-primary inv-clk" value="Invite">
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</div>
<!----invite people close---->
<!--disconnect user-->
<form id="disconnectZoom" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" style="display: none;">
	<input type="hidden" name="action" value="zoom_user_disconnect">
</form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title m-auto" id="exampleModalLabel">Create Meeting</h3>
				<button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form id="call" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
					<input type="hidden" id="timeZone" name="timeZone" value="Asia/Calcutta">
					<input type="hidden" name="post_type" id="post_type" value="zoomevents" />
					<input type="hidden" name="action" value="zoom_user_meeting">
					<input type="hidden" class="form-control onlydate" id="start_time" name="start_time" placeholder="Last name...">
					
					<input type="hidden" id="type" name="type" value="2">
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label for="topic" class="control-label">Topic</label>
							<input type="text" class="form-control" id="topic" placeholder="Topic" name="topic">
							<span id="topic-error"></span>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-sm-12 col-xs-12">
							<label for="Start_Date" class="control-label">Start Date</label>
							<input type="text" class="form-control Start-Date" id="StartDate"  name="Start_Date" placeholder="Start Date">
							
						</div>
						<div class="form-group col-md-6 col-sm-12 col-xs-12">
							<label for="Start_Time" class="control-label">Start Time</label>
							<input type="text" class="form-control Start-Time" id="starttime" name="Start_Time" placeholder="Start time">
							
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-sm-12 col-xs-12">
							<label for="password" class="control-label">Meeting Password</label>
							<input type="text" class="form-control" id="password" placeholder="Meeting Password" name="password">
							<span id="password-error"></span>
						</div>
						<div class="form-group col-md-6 col-sm-12 col-xs-12">
							<label for="Time_Duration" class="control-label">Time Duration  <small>( minutes )</small></label>
							<input type="number" class="form-control" id="Time_Duration" name="Time_Duration" placeholder="Time Duration..">
						</div>
					</div>
					
					
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label for="agenda" class="control-label">Description</label>
							<textarea class="form-control" id="agenda" placeholder="Description" name="agenda" style="height: 100px;"></textarea>
							<span id="agenda-error"></span>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<input type="submit" name="save" id="save" class="btn btn-primary inv-clk" value="Save">
						</div>
					</div>
					
					
					<input type="hidden" id="dateTime" name="dateTime" value="">
					
				</form>
				
			</div>
			
		</div>
	</div>
</div>
<script>
jQuery(document).ready(function() {
	jQuery('#example').DataTable();
	jQuery('#timeZone').val(Intl.DateTimeFormat().resolvedOptions().timeZone);
//jQuery('#dateTime').val(date);
	
jQuery(".meetingid").click(function () {
	
jQuery('#meeting_invitation')[0].reset();
	
var passedID = jQuery(this).data('id');//get the id of the selected button
//alert(passedID);
jQuery('#post_id').val(passedID);//set the id to the input on the modal
		jQuery('#timeZone').val('Asia/Calcutta');
		jQuery('#post_type').val('zoomevents');
		jQuery('#action').val('zoom_user_meeting_invitation');
		
});
jQuery("#close_meeting_model").click(function () {
	
	jQuery('#meeting_invitation')[0].reset();
jQuery('#post_id').val();
//alert('close meeting model');
});
jQuery("#invite").click(function () {
	
	var inv_peop = jQuery('#invite_people').val();
	if(inv_peop == '')
	{
		jQuery('#invite_people').addClass('error');
		jQuery('#invite_people').focus();
		return false;
	}
	else{
		
		jQuery('#invite_people').removeClass('error');
		return true;
	}
});
jQuery("#save").click(function () {
	
	var topic = jQuery('#topic').val();
	var password = jQuery('#password').val();
	var starttime = jQuery('#starttime').val();
	var startDate = jQuery('#StartDate').val();
	var agenda = jQuery('#agenda').val();
	var timeDuration = jQuery('#Time_Duration').val();
	
	if(topic == '')
	{
		jQuery('#topic').addClass('error');
		jQuery('#topic').focus();
		return false;
	}
			else{
		jQuery('#topic').removeClass('error');
		
	}
	
	if(startDate =='')
	{
		jQuery('#StartDate').addClass('error');
		jQuery('#StartDate').focus();
		return false;
	}
	else{
		jQuery('#StartDate').removeClass('error');
		
	}
	
	
	if(starttime =='')
	{
		jQuery('#starttime').addClass('error');
		jQuery('#starttime').focus();
		return false;
	}
	else{
		jQuery('#starttime').removeClass('error');
		
	}
	
	
	if(password == '')
	{
		jQuery('#password').addClass('error');
		jQuery('#password').focus();
		return false;
	}
			else{
		jQuery('#password').removeClass('error');
		
	}
	
	if(timeDuration == '')
	{
		jQuery('#Time_Duration').addClass('error');
		jQuery('#Time_Duration').focus();
		return false;
	}
			else{
		jQuery('#Time_Duration').removeClass('error');
		
	}
	
	if(agenda == '')
	{
		jQuery('#agenda').addClass('error');
		jQuery('#agenda').focus();
		return false;
	}
			else{
		jQuery('#agenda').removeClass('error');
		
	}
	
});
		setTimeout(function () {
// Closing the alert
//jQuery('.alert').alert('close');
			jQuery('.alert').delay( 1500 ).fadeOut( 400 );
}, 5000);
	
} );
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/1.1.1/jquery.datetimepicker.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
jQuery(document).ready(function() {
jQuery('.Start-Date,.End-Date').datetimepicker({
timepicker:false,
format:'d-m-Y',
formatDate:'D-M-Y',
minDate: "1",
defaultDate:new Date(),
});
jQuery('.Start-Time,.End-Time').datetimepicker({
timepicker:true,
datepicker:false,
format:'H:i'
});
});
</script>
<?php get_footer('links');