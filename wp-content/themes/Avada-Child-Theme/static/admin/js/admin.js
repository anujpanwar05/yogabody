jQuery(function($){
    // code where you can use $ thanks to the parameter
	$(".active-input input").focus(function(){
	  $(this).addClass('is-focused');
	});
	$(".active-input input").focusout(function(){
	  $(this).removeClass('is-focused');
	});
	$('.active-input input').blur(function(){
		tmpval = $(this).val();
		if(tmpval == '') {
			$(this).addClass('is-empty');
		} else {
			$(this).removeClass('is-empty');
		}
	});
	
	$('.active-input input').each(function(){
		var tthis = $(this);
		tmpval = tthis.val();
		if(tmpval == '') {
			tthis.addClass('is-empty');
		} else {
			tthis.removeClass('is-empty');
		}
	});
	$('#shareButton').click(function(e){
		if($('.sharedisplay').attr('data-popper-visible')=='false'){
			$('.sharedisplay').attr('data-popper-visible','true');
		}else{
			$('.sharedisplay').attr('data-popper-visible','false');
		}		
		e.stopPropagation();
	});
	$(document).on("click", function(e) {
		if ($(e.target).is(".sharedisplay li") === false && $('.sharedisplay').attr('data-popper-visible')=='true') {
			$('.sharedisplay').attr('data-popper-visible','false');
		}
	});
	$('.CpyTClipb').click(function(){
		var copyText = $('.hiddenUrl');
		var $temp = $("<input>");
	    $("body").append($temp);
	    $temp.val(copyText.val()).select();
	    document.execCommand("copy");
	    $temp.remove();
	    $('.CpyTClipb').text('Copied!');
		setTimeout(function(){
		$('.sharedisplay').attr('data-popper-visible','false');
		$('.CpyTClipb').text('Copy my Bio URL');	  
		},3000);
	});
	$('.CpyRwClipb').click(function(){
		var copyText = $('.hiddenRwUrl');
		var $temp = $("<input>");
	    $("body").append($temp);
	    $temp.val(copyText.val()).select();
	    document.execCommand("copy");
	    $temp.remove();
	    $('.CpyRwClipb').text('Copied!');
		setTimeout(function(){
		$('.sharedisplay').attr('data-popper-visible','false');
		$('.CpyRwClipb').text('Copy my Review URL');	  
		},3000);
	});
	$('.showQRcode').click(function(){
		if($('.sc-dUrnRO.sc-gyUeRy.iBqFyl').hasClass('dEIJXb')){
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').removeClass('dEIJXb');	
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').addClass('dENzOi');
		}else{
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').removeClass('dENzOi');
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').addClass('dEIJXb');		
		}	
	});
	$('.sc-dkIXFM.cXJGfm.sc-fHYxKZ.dnKCVK').click(function(){
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').removeClass('dENzOi');
			$('.sc-dUrnRO.sc-gyUeRy.iBqFyl').addClass('dEIJXb');		
	});
	$(document).on('click','.link-field',function(){
		$(this).addClass('focused');
		$(this).find('input').focus();
	});
	$(document).on('click','.buildlist-field',function(){
		$(this).addClass('focused');
		if($(this).find('input').length>0){
			$(this).find('input').focus();
		}else if($(this).find('textarea').length>0){
			$(this).find('textarea').focus();
		}else{
			
		}
	});
	$(document).on('click','.link-field.link-currency',function(){
		$(this).addClass('focused');
		$(this).find('select').focus();
	});
	$(document).on('click','.link-field.link-class-name',function(){
		$(this).addClass('focused');
		$(this).find('select').focus();
	});
	$(document).on('click','.link__tab__navs .link__tab__nav',function(){
		$('.link__tab__nav').removeClass('active');
		$(this).addClass('active');
		var linktab = $(this).attr('data-link-tabs-tab');
		var height = $(this).parents('.link').find('.link__tab__panel'+linktab).outerHeight();
		$(this).parents('.link').find('.link__tab__panel').hide();
		$(this).parents('.link').find('.link__tab__panel'+linktab).toggle();
		//$(this).parents('.link').find('.link__tab__panels').css("height", height);
		$(this).parents('.link').find('.link__tab__panels').animate({height: height});

	});
	$(document).on('click','.link__tab__panel button.button[data-close],.link__tab__panel a.x[data-close]',function(){
		$(this).parents('.link__tab__panel').hide();
		$(this).parents('.link__tab__panels').removeAttr('style');
	});
	$(document).on('click','.link-field.link-active',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
			var status = 0;
		}else{
			$(this).addClass('checked');
			var status = 1;
		}
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_status",status:status,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});	
	$(document).on("focusout",".link-field.link-title input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_title",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",".link-field.link-url input",function(){
		var url = $(this).val();
		var ID = $(this).parents('.link').data('link');
		if(isUrlValid(url) || url==''){
			$(this).parents('.link-field').find('.sc-cVkrFx.fViKEM').removeClass('urlmessage');
			$(this).removeClass('rederror');
			$(this).parents('.link-field').find('span[data-link-field-label]').removeClass('rederror');			
			$.ajax({
				type : "POST",
				dataType : "json",
				url : myAjax.ajaxurl,
				data : {action: "update_link_url",url:url,ID:ID},
				success: function(response){
					if(response.type == "success"){
						document.getElementById('preview_iframe').contentWindow.location.reload();
					}else{
					   alert("error occured!");
					}
				}
			});
		}else{ 
			$(this).removeClass('rederror').addClass('rederror');
			$(this).parents('.link-field').find('span[data-link-field-label]').removeClass('rederror').addClass('rederror');
			$(this).parents('.link-field').find('.sc-cVkrFx.fViKEM').addClass('urlmessage');
		}
		if(url==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(url);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",".link-field.link-paypal-email input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		if( isValidEmailAddress( title ) ) {
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_paypal_email",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		}else{
		title='';
		 $(this).val('');
		alert('Not a valid email');	
		}
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",".link-field.link-class-name input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_class_name",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",".link-field.link-student-first-name input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_class_name",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
		StudentAutoGenerateUrl(ID);
	});
	$(document).on("focusout",".link-field.link-student-last-name input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_class_price",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
		StudentAutoGenerateUrl(ID);
	});
	$(document).on("focusout",".link-field.link-student-email input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_paypal_email",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
		StudentAutoGenerateUrl(ID);
	});
	$(document).on("focusout",".link-field.link-instructor-business-name input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_class_currency",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
		StudentAutoGenerateUrl(ID);
	});
	$(document).on('change','input.student_form_lan',function(){
		var embed_type = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "student_form_language",embed_type:embed_type,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		StudentAutoGenerateUrl(ID);
	});
	
	$(document).on("focusout",".link-field.link-price input",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		if($.isNumeric(title)){
			$.ajax({
				type : "POST",
				dataType : "json",
				url : myAjax.ajaxurl,
				data : {action: "update_link_class_price",title:title,ID:ID},
				success: function(response){
					if(response.type == "success"){
						document.getElementById('preview_iframe').contentWindow.location.reload();
					}else{
					   alert("error occured!");
					}
				}
			});
		}else{
		title='';
		 $(this).val('');
		//alert('Only allowed Numeric values');
		}	
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",".link-field.link-currency select",function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_class_currency",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[page_title]"]',function(){
		var profile_title = $(this).val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_profile_title",profile_title:profile_title},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(profile_title==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(profile_title);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[page_username]"]',function(){
		var username = $(this).val();
		$('div[data-settings-validationerror="setting-page-username"]').removeClass('active');
		$('div[data-settings-validationerror="setting-page-username"]').text('');
		if(username==''){
			$('div[data-settings-validationerror="setting-page-username"]').text('Username cannot be empty');
			$('div[data-settings-validationerror="setting-page-username"]').addClass('active');
		}else{	
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_user_username",username:username},
			success: function(response){
				if(response.type == "success"){
					location.reload();	
				}else if(response.type == "error"){
					$('div[data-settings-validationerror="setting-page-username"]').text(response.message);
					$('div[data-settings-validationerror="setting-page-username"]').addClass('active');
				}else if(response.type == "nothing"){
					console.log(response.message);
				}else{
				   alert("error occured!");
				}
			}
        });
		}
	});
	/* social media icons */
	$(document).on("focusout",'input[name="account[instagram]"]',function(){
		var instagram_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_instagram_url",instagram_url:instagram_url},
			success: function(response){
				if(response.type == "success"){
					tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(instagram_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(instagram_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[facebook]"]',function(){
		var facebook_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_facebook_url",facebook_url:facebook_url},
			success: function(response){
				if(response.type == "success"){
					tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(facebook_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(facebook_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[tiktok]"]',function(){
		var tiktok_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_tiktok_url",tiktok_url:tiktok_url},
			success: function(response){
				if(response.type == "success"){
					tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(tiktok_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(tiktok_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[youtube]"]',function(){
		var youtube_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_youtube_url",youtube_url:youtube_url},
			success: function(response){
				if(response.type == "success"){
					tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(youtube_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(youtube_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[linkedin]"]',function(){
		var linkedin_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_linkedin_url",linkedin_url:linkedin_url},
			success: function(response){
				if(response.type == "success"){
					tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(linkedin_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(linkedin_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[email]"]',function(){
		var email_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_email_url",email_url:email_url},
			success: function(response){
				if(response.type == "success"){
					//tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(linkedin_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(linkedin_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[telegram]"]',function(){
		var telegram_url = $(this).val();
		var tthis = $(this);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_telegram_url",telegram_url:telegram_url},
			success: function(response){
				if(response.type == "success"){
					//tthis.val(response.url);
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="account[whatsapp]"]',function(){
		var whatsapp_url = $(this).val();
		var country_code = $('#whatsappselect').val();
		console.log(country_code);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_whatsapp_url",whatsapp_url:whatsapp_url,country_code:country_code},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(whatsapp_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(whatsapp_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on("change",'#whatsappselect',function(){
		var country_code = $(this).val();
		var whatsapp_url = $('input[name="account[whatsapp]"]').val();
		console.log(country_code);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_whatsapp_url",whatsapp_url:whatsapp_url,country_code:country_code},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(whatsapp_url==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(whatsapp_url);
		} */
		$(this).parents('.link-field').removeClass('focused');
	}); 
	/* media icons end */
	/*resume new section */
	/*$(document).on("focusout",'name="resume_about"',function(){
		var resume_about = $(this).text();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "resume_about_update",resume_about:resume_about,ID:ID},
			success: function(response){
				if(response.type == "success"){
					//document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});*/
	$(document).on("click",'.update_resume',function(){
		var tthis = $(this);
		tthis.prop('disabled', true);
		var ID = $(this).data('id');
		var resume_about = $('#resume_'+ID).find('textarea[name="resume_about"]').val();
		var company_name = $('#resume_'+ID).find('input[name="company_name[]"]').map(function(){ return this.value; }).get();
		var start_date_month = $('#resume_'+ID).find('select[name="start_date_month[]"]').map(function(){ return this.value; }).get();
		var start_date_year = $('#resume_'+ID).find('select[name="start_date_year[]"]').map(function(){ return this.value; }).get();
		var end_date_month = $('#resume_'+ID).find('select[name="end_date_month[]"]').map(function(){ return this.value; }).get();
		var end_date_year = $('#resume_'+ID).find('select[name="end_date_year[]"]').map(function(){ return this.value; }).get();
		var job_title = $('#resume_'+ID).find('input[name="job_title[]"]').map(function(){ return this.value; }).get();
		var notes_on_work = $('#resume_'+ID).find('textarea[name="notes_on_work[]"]').map(function(){ return this.value; }).get();
		var school_institution = $('#resume_'+ID).find('input[name="school_institution[]"]').map(function(){ return this.value; }).get();
		var area_of_study = $('#resume_'+ID).find('input[name="area_of_study[]"]').map(function(){ return this.value; }).get();
		var certification_receive = $('#resume_'+ID).find('input[name="certification_receive[]"]').map(function(){ return this.value; }).get();
		var cert_logo_skip = $('#resume_'+ID).find('input[name="cert_logo_skip"]').map(function(){ if ($(this).is(':checked')) { return 'on' }else{ return 'off' }; }).get();
		var add_cert_logo = $('#resume_'+ID).find('select[name="add_cert_logo"]').map(function(){ return this.value; }).get();
		var date_of_completion_month = $('#resume_'+ID).find('select[name="date_of_completion_month[]"]').map(function(){ return this.value; }).get();
		var date_of_completion_year = $('#resume_'+ID).find('select[name="date_of_completion_year[]"]').map(function(){ return this.value; }).get();
		
		var skills_interests = $('#resume_'+ID).find('textarea[name="skills_interests"]').val();
		//console.log(company_name);
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "resume_settings_update",ID:ID,resume_about:resume_about,company_name:company_name,start_date_month:start_date_month,start_date_year:start_date_year,end_date_month:end_date_month,end_date_year:end_date_year,job_title:job_title,notes_on_work:notes_on_work,school_institution:school_institution,area_of_study:area_of_study,certification_receive:certification_receive,date_of_completion_month:date_of_completion_month,date_of_completion_year:date_of_completion_year,cert_logo_skip:cert_logo_skip,add_cert_logo:add_cert_logo,skills_interests:skills_interests},
			success: function(response){
				if(response.type == "success"){
					//document.getElementById('preview_iframe').contentWindow.location.reload();
					tthis.prop('disabled', false);
					$('.resume_updated').slideDown("slow");
					setTimeout(function(){
						$('.resume_updated').slideUp("slow");
					},3000);	
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	/* resume new section end */
	/* zoom event start */
	$(document).on("click",'.submitZoomEvent',function(){
		var tthis = $(this);
		tthis.prop('disabled', true);
		var ID = $(this).data('id');
		if($('#ZoomEvent_'+ID).valid()){
			var topic = $('#ZoomEvent_'+ID).find('input.zoom_topic').map(function(){ return this.value; }).get();	
			var Start_Date = $('#ZoomEvent_'+ID).find('input.zoom_Start_Date').map(function(){ return this.value; }).get();
			var Start_Time = $('#ZoomEvent_'+ID).find('input.zoom_Start_Time').map(function(){ return this.value; }).get();
			var password = $('#ZoomEvent_'+ID).find('input.zoom_password').map(function(){ return this.value; }).get();
			var Time_Duration = $('#ZoomEvent_'+ID).find('input.zoom_Time_Duration').map(function(){ return this.value; }).get();
			var agenda = $('#ZoomEvent_'+ID).find('textarea.zoom_agenda').map(function(){ return this.value; }).get();
			var eventid = $('#ZoomEvent_'+ID).find('.eventfields').map(function(){ return $(this).data('eventid'); }).get();
			$.ajax({ 
				type : "POST",
				dataType : "json", 
				url : myAjax.ajaxurl,
				data : {action: "zoom_event_update_action",ID:ID,topic:topic,Start_Date:Start_Date,Start_Time:Start_Time,password:password,Time_Duration:Time_Duration,agenda:agenda,timeZone:"Asia/Calcutta",start_time:'',eventid:eventid},
				success: function(response){
					if(response.type == "success"){
						//document.getElementById('preview_iframe').contentWindow.location.reload();
						tthis.prop('disabled', false);
						$('#event_message_'+ID).slideDown("slow");
						setTimeout(function(){
							$('#event_message_'+ID).slideUp("slow");
						},3000);	
					}else{
						tthis.prop('disabled', false);
					   alert("error occured!");
					}
				}
			});
		}else{
			tthis.prop('disabled', false);
		}	
	});
	/* zoom event end */
	/* payment start */
	$(document).on("click",'.submitStorePayment',function(){
		var tthis = $(this);
		tthis.prop('disabled', true);
		var ID = $(this).data('id');
		if($('#StorePayment_'+ID).valid()){
			var store_email = $('#StorePayment_'+ID).find('input.store_email').map(function(){ return this.value; }).get();	
			var store_price = $('#StorePayment_'+ID).find('input.store_price').map(function(){ return this.value; }).get();
			var store_currency = $('#StorePayment_'+ID).find('select.store_currency').map(function(){ return this.value; }).get();
			var store_product_name = $('#StorePayment_'+ID).find('input.store_product_name').map(function(){ return this.value; }).get();
			var store_product_image_hidden = $('#StorePayment_'+ID).find('input.store_product_image_hidden').map(function(){ return this.value; }).get();
			$.ajax({ 
				type : "POST",
				dataType : "json", 
				url : myAjax.ajaxurl,
				data : {action: "store_item_update_action",ID:ID,store_email:store_email,store_price:store_price,store_currency:store_currency,store_product_name:store_product_name,store_product_image_hidden:store_product_image_hidden},
				success: function(response){
					if(response.type == "success"){
						document.getElementById('preview_iframe').contentWindow.location.reload();
						tthis.prop('disabled', false);
						$('#store_info_updated_'+ID).slideDown("slow");
						setTimeout(function(){
							$('#store_info_updated_'+ID).slideUp("slow");
						},3000);	
					}else{
						tthis.prop('disabled', false);
					   alert("error occured!");
					}
				}
			});
		}else{
			tthis.prop('disabled', false);
		}	
	});
	$(document).on('change','input.store_product_image',function(){
		var ID = $(this).parents('.link').data('link');
		var thiss = $(this);
		var fd = new FormData();
		var files = $(this)[0].files[0];
		var czid = thiss.data('czid');
		fd.append('file',files);
		fd.append('id',ID); 
		fd.append('request',1);
		fd.append('action','store_upload_image_action');

		// AJAX request
		$.ajax({
			xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.floor(((evt.loaded / evt.total) * 100));
                        $(".kprogress-bar").width(percentComplete + '%');
                        $(".kprogress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
			url: myAjax.ajaxurl,
			type: 'post',
			data: fd,
			contentType: false,
			processData: false,
			beforeSend: function(){
                thiss.parent().find('.product-image-file-inner').html('<div class="progress"><div class="kprogress-bar" style="width: 0%;">100%</div></div><div id="uploadStatus"><img src="https://yogabody.bio/wp-content/uploads/2021/02/loading-image.gif"/></div>');
            },
			success: function(response){
				
				if(response != 'error'){

					// Show image preview with Delete button
					$('#'+czid).val(response);
					thiss.parent().find('.product-image-file-inner').html("<div class='upcontent' id='upcontent_"+ID+"' ><img src='"+response+"' /><span data-id='"+ID+"' class='StoreImgDelete' id='updelete_"+ID+"'>Delete</span></div>");
				}else{
					alert('file not uploaded');
				}
			}
		});
	});
	$(document).on("click",'.StoreImgDelete',function(){
		var tthis = $(this);
		$(this).parent().parent().parent().parent().find('.store_product_image_hidden').val('');
		var ID = $(this).parent().remove();
		/*$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "delete_store_file_action",ID:ID},
			success: function(response){
				if(response.type == "success"){
					$("#upcontent_"+ID).remove();
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });*/
		
	});
	/* payment end */
	/* Build email list start */
	$(document).on("focusout",'input[name="build_list_button_text"]',function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_build_list_button_text",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.buildlist-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="build_list_invite_client"]',function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_build_list_invite_client",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.buildlist-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="build_list_success_messsage"]',function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_build_list_success_messsage",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.buildlist-field').removeClass('focused');
	});
	$(document).on("focusout",'textarea[name="build_list_term_conditions"]',function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_build_list_term_conditions",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').html(title+' <i> <svg width="12" height="12" viewBox="0 0 12 12"> <path d="M2.5,6.67188,8.46477.70711a1,1,0,0,1,1.41421,0L11.29289,2.121a1,1,0,0,1,0,1.41421L5.32813,9.5ZM4.32813,10.5,0,12,1.5,7.67188Z"></path> </svg> </i>');
		}
		$(this).parents('.buildlist-field').removeClass('focused');
	});
	$(document).on("focusout",'input[name="google_sheet_url"]',function(){
		var title = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_google_sheet_url",title:title,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		if(title==''){
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.buildlist-field').find('span[data-link-field-label]').html(title);
		}
		$(this).parents('.buildlist-field').removeClass('focused');
	});
	/* Build email list end */
	$(document).on("focusout",'.sc-gfHAkt.hQtdpy textarea',function(){
		var profile_description = $(this).val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_profile_description",profile_description:profile_description},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(profile_title==''){
			$(this).parents('.active-input').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.active-input').find('span[data-link-field-label]').text(profile_title);
		} */
		$(this).parents('.link-field').removeClass('focused');
	});
	$(document).on('click','button.button[data-link-delete]',function(){
		var thiss = $(this);
		var ID = $(this).parents('.link').data('link');
		$(this).parents('.link').append('<div class="overlay deleted">Deleted</div>');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "delete_link_action",ID:ID},
			success: function(response){
				if(response.type == "success"){
					thiss.parents('.link').remove();
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		return false;
	}); 
	$(document).on('click','input.button[data-user-edit-submit]',function(){
		$('.loading-overlay').addClass('active');
		var thiss = $(this);
		var name = $('input[data-name]').val();
		var email = $('input[data-email]').val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_user_details",name:name,email:email},
			success: function(response){
				if(response.type == "success"){
					$('.loading-overlay').removeClass('active');
					$('.message[data-message-id="useredit_success"]').fadeIn('fast').delay(2000).fadeOut();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('click','.whitelist__checkbox',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
			var status = 0;
		}else{
			$(this).addClass('checked');
			var status = 1;
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_whitelabel_status",status:status},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('click','.reviews__checkbox',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
			var status = 0;
		}else{
			$(this).addClass('checked');
			var status = 1;
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_reviews_status",status:status},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	
	$(document).on('click','#sensitive_material',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
			var status = 0;
		}else{
			$(this).addClass('checked');
			var status = 1;
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "sensitive_material_status",status:status},
			success: function(response){
				if(response.type == "success"){
					
				}else{
				   alert("error occured!");
				}
			}
        });
	}); 
	$(document).on('click','#SupportBanner',function(){
		if($(this).hasClass('checked')){
			$(this).removeClass('checked');
			var status = 0;
		}else{
			$(this).addClass('checked');
			var status = 1;
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "support_banner_status",status:status},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('click','.hide_demo_video',function(e){
		e.preventDefault();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "present_demo_video_hide"},
			success: function(response){
				if(response.type == "success"){
					
				}else{
				   alert("error occured!");
				}
			}
        });
		$('.hide_demo_video').hide();
		$('.show_demo_video').show();
		$('.demo-video').slideUp();
		return false;
	});
	$(document).on('click','.show_demo_video',function(e){
		e.preventDefault();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "present_demo_video_show"},
			success: function(response){
				if(response.type == "success"){
					//document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		$('.hide_demo_video').show();
		$('.show_demo_video').hide();
		$('.demo-video').slideDown();
		return false;
	});
	
	$(document).on('click','#setting-theme .grid .grid__item',function(){
		$('#setting-theme .grid .grid__item').removeClass('active');
		$(this).addClass('active');
		var relativeY = $(this).offset().top - $(".section.theme .section__inner").offset().top;
		var relativex = $(this).offset().left - $(".section.theme .section__inner").offset().left;
		var width = $(this).find('.grid__inner').outerWidth();
		var height = $(this).find('.grid__inner').outerHeight();
		$('.active-highlight').css("width", (parseInt(width)+parseInt(13))+"px").css("height", (parseInt(height)+parseInt(13))+"px");
		$('.active-highlight').css("left", (relativex-parseInt(6))+"px").css("top", (relativeY-parseInt(6))+"px");
		var value = $(this).data('value');
		$('.sc-eishCr.cjMLkU.sc-bDyUhQ.ggehpb').show();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_theme_selection",value:value},
			success: function(response){
				if(response.type == "success"){	
				document.getElementById('preview_iframe').contentWindow.location.reload();
				$('.sc-eishCr.cjMLkU.sc-bDyUhQ.ggehpb').hide();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('change','input.embed_video_radio',function(){
		var embed_type = $(this).val();
		var ID = $(this).parents('.link').data('link');
		if(embed_type=='private'){
			$(this).parents('.link-content').find('.embed-passowrd').show("slow");
		}else{
			$(this).parents('.link-content').find('.embed-passowrd').hide("slow");
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_embed_type_action",embed_type:embed_type,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('change','input.upload_or_insert',function(){
		var embed_type = $(this).val();
		var ID = $(this).parents('.link').data('link');
		if(embed_type=='embed'){
			$('#upload_link_'+ID).hide("slow");
			$('#embed_link_'+ID).show("slow");
		}else{
			$('#embed_link_'+ID).hide("slow");
			$('#upload_link_'+ID).show("slow");
		}
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "digital_upload_or_insert",embed_type:embed_type,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on("focusout","input.embed_link_input",function(){
		var url = $(this).val();
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_link_url",url:url,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
				}else{
				   alert("error occured!");
				}
			}
        });
		/*if(title==''){
			$(this).parents('.link-field').find('span[data-link-field-label]').text($(this).attr('placeholder'));
		}else{
			$(this).parents('.link-field').find('span[data-link-field-label]').text(title);
		}
		$(this).parents('.link-field').removeClass('focused');*/
	});
	$(document).on('change','input.upload_link_file',function(){
		var ID = $(this).parents('.link').data('link');
		var fd = new FormData();
		var files = $('#upload_link_file_'+ID)[0].files[0];
		fd.append('file',files);
		fd.append('id',ID);
		fd.append('request',1);
		fd.append('action','digital_upload_file_action');

		// AJAX request
		$.ajax({
			xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.floor(((evt.loaded / evt.total) * 100));
                        $(".kprogress-bar").width(percentComplete + '%');
                        $(".kprogress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
			url: myAjax.ajaxurl,
			type: 'post',
			data: fd,
			contentType: false,
			processData: false,
			beforeSend: function(){
                $('#upload_link_show_'+ID).html('<div class="progress"><div class="kprogress-bar" style="width: 0%;">100%</div></div><div id="uploadStatus"><img src="https://yogabody.bio/wp-content/uploads/2021/02/loading-image.gif"/></div>');
            },
			success: function(response){
				
				if(response != 'error'){

					// Show image preview with Delete button
					$('#upload_link_show_'+ID).html("<div class='upcontent' id='upcontent_"+ID+"' ><i class='NewUploadLink fa fa-file-o'></i><span data-id='"+ID+"' class='updelete' id='updelete_"+ID+"'>Delete</span></div>");
				}else{
					alert('file not uploaded');
				}
			}
		});
	});
	$(document).on('change','input.product_image_file',function(){
		var ID = $(this).parents('.link').data('link');
		var fd = new FormData();
		var files = $('#product_image_file_'+ID)[0].files[0];
		fd.append('file',files);
		fd.append('id',ID); 
		fd.append('request',1);
		fd.append('action','payment_upload_image_action');
		// AJAX request
		$.ajax({
			xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.floor(((evt.loaded / evt.total) * 100));
                        $(".kprogress-bar").width(percentComplete + '%');
                        $(".kprogress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
			url: myAjax.ajaxurl,
			type: 'post',
			data: fd,
			contentType: false,
			processData: false,
			beforeSend: function(){
                $('#product_image_show_'+ID).html('<div class="progress"><div class="kprogress-bar" style="width: 0%;">100%</div></div><div id="uploadStatus"><img src="https://yogabody.bio/wp-content/uploads/2021/02/loading-image.gif"/></div>');
            },
			success: function(response){
				
				if(response != 'error'){

					// Show image preview with Delete button
					$('#product_image_show_'+ID).html("<div class='upcontent' id='upcontent_"+ID+"' ><img src='"+response+"' /><span data-id='"+ID+"' class='ProdDelete' id='updelete_"+ID+"'>Delete</span></div>");
				}else{
					alert('file not uploaded');
				}
			}
		});
	});
	 
	$(document).on("click",'.ProdDelete',function(){
		var tthis = $(this);
		var ID = $(this).data('upload-link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "digital_delete_file_action",ID:ID},
			success: function(response){
				if(response.type == "success"){
					$("#upcontent_"+ID).remove();
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	
	/*$(document).on("click",'.updelete',function(){
		var tthis = $(this);
		var ID = $(this).data('upload-link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "digital_delete_file_action",ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
	});*/
	
	$(document).on("click",'.updelete',function(){
		var tthis = $(this);
		var ID = $(this).data('upload-link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "digital_delete_file_action",ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	
	$(document).on("focusout",'input.embed-pass-input',function(){
		var embed_password = $(this).val();
		var tthis = $(this);
		var ID = $(this).parents('.link').data('link');
		$.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_embed_video_password",embed_password:embed_password,ID:ID},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();	
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	/*$("input.usenospace").on("keydown", function (e) {
		if(e.which === 32) 
			return false;
	})​​​​​;​*/
	$(document).on('click','.upload_profile',function(){
		$('#upload_profile').click();
	});
	$(document).on('click','.link-fieldd',function(){
		openlinkPayment($(this).parents('.link').data('link'),'data-link-tab-payment');
	});
	$(document).on('click','.sidebar__user .sub-nav .sub-nav-item a',function(){
		window.location.href=$(this).attr('href');
	});
	$(document).on('click','a.sidebar__user__avatar',function(){
		window.location.href=$(this).attr('href');
	});
	$(document).on('click','.expend-resumeForm',function(){
		var ID = $(this).data('id');
		if($(this).hasClass('expend')){
			$('#resume_'+ID+' .link__inner').css('max-height','200px');
			$(this).removeClass('expend');
			$(this).attr('title','Expend Section');
			/*$('section.action-area.section__inner').animate({
				scrollTop: $('#resume_'+ID).offset().top
			}, 1000);*/
			var container = $('section.action-area.section__inner'),
				scrollTo = $('#resume_'+ID);
		/*	container.animate({
				scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()
			});*/
			container.scrollTop( 
				scrollTo.offset().top - container.offset().top + container.scrollTop()
			);
		}else{
			$('#resume_'+ID+' .link__inner').css('max-height','100%');
			$(this).addClass('expend');
			$(this).attr('title','Collepse Section');
		}
	});
	
	

	$(document).on('click','.sidebar__user',function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}else{
			$(this).addClass('active');
		}
	});
	$(document).on('click','.resizeWorkExp',function(e){
		if($(this).hasClass('icon-expend')){
			$(this).removeClass('icon-expend').addClass('icon-collepse');
			$(this).parents('.resume-row').find('.workExperince').slideDown();
		}else{
			$(this).removeClass('icon-collepse').addClass('icon-expend');
			$(this).parents('.resume-row').find('.workExperince').slideUp();
		}
	});
	$(document).on('click','.resizeEduTrain',function(e){
		if($(this).hasClass('icon-expend')){
			$(this).removeClass('icon-expend').addClass('icon-collepse');
			$(this).parents('.resume-row').find('.educationTraining').slideDown();
		}else{
			$(this).removeClass('icon-collepse').addClass('icon-expend');
			$(this).parents('.resume-row').find('.educationTraining').slideUp();
		}
	});
	$(document).on('click','.resizeSkilInter',function(e){
		if($(this).hasClass('icon-expend')){
			$(this).removeClass('icon-expend').addClass('icon-collepse');
			$(this).parents('.resume-row').find('.skillInterest').slideDown();
		}else{
			$(this).removeClass('icon-collepse').addClass('icon-expend');
			$(this).parents('.resume-row').find('.skillInterest').slideUp();
		}
	});
	$("#bioWord_count").on('input', function(e) {
		var words = 0;
        var words = $.trim(this.value).length ? this.value.length : 0;
        if (words < 80){
            $('#display_count').text(words);
            $('#word_left').text(80-words);
        }else{
            if (e.which !== 8){
				e.preventDefault();
			}
			$('#display_count').text(words);
			$('#word_left').text(80-words);
        }
    });
	$("#bioWord_count").on('keydown', function(e) {
		var words = 0;
        var words = $.trim(this.value).length ? this.value.length : 0;
        if (words < 80) {

        }else{
            if (e.which !== 8) e.preventDefault();
        }
    });
	setTimeout(function(){
	var readywords = 0;
	var readywords = $.trim($("#bioWord_count").val()).length ? $("#bioWord_count").val().length : 0;
	//alert(readywords);
	$('#display_count').text(readywords);
	$('#word_left').text(80-readywords);
	},100 );
	
});
/*
function isUrlValid(url) {
    //return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
	var urlregex = new RegExp("^(http:\/\/www.|https:\/\/www.|ftp:\/\/www.|www.){1}([0-9A-Za-z]+\.)")
	return urlregex.test(url);
}*/
function isUrlValid(str) {
  var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
  return !!pattern.test(str);
}
function StudentAutoGenerateUrl(ID){
	var wrapper = jQuery('.StudentForm[data-link="'+ID+'"]');
	var InstructorFirstName = wrapper.find('.link-field.link-student-first-name input').val();
	var InstructorLastName = wrapper.find('.link-field.link-student-last-name input').val();
	var InstructorEmail = wrapper.find('.link-field.link-student-email input').val();
	var InstructorBusinessName = wrapper.find('.link-field.link-instructor-business-name input').val();
	var student_form_lan = wrapper.find('input.student_form_lan:checked').val();
	if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && student_form_lan=='english'){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && student_form_lan=='spanish'){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form-es2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && student_form_lan=='french'){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form-Fr2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && student_form_lan=='breath_coaching_en'){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form-breath-coach2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && student_form_lan==''){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else if(InstructorFirstName!='' && InstructorLastName!='' && InstructorEmail!='' && wrapper.hasClass('BreathCoaching')){
		var FormLink = 'https://www.newstudentform.com/yoga-class-form-breath-coach2/?your_first_name='+InstructorFirstName+'&your_last_name='+InstructorLastName+'&your_email='+InstructorEmail+'&business_name='+InstructorBusinessName;
		wrapper.find('.link-student-url span').text(FormLink);
	}else{
		var FormLink = 'Auto Genrated Form link';
		wrapper.find('.link-student-url span').text(FormLink);
	}
}
setTimeout(function(){
var config = {
						text: jQuery('.hiddenUrl').val(), // Content

						width: 940, // Widht
						height: 940, // Height
						colorDark: "#000000", // Dark color
						colorLight: "#ffffff", // Light color
                        
                        quietZone: 15,
                        quietZoneColor: '#ffffff',

						// === Logo
						//logo: "logo-transparent.png", // LOGO
						logo: "https://yogabody.bio/wp-content/uploads/2021/02/logo-mini.png", // LOGO
						//					logo:"http://127.0.0.1:8020/easy-qrcodejs/demo/logo.png",  
						//					logoWidth:80, 
						//					logoHeight:80,
						logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
						logoBackgroundTransparent: false, // Whether use transparent image, default is false


						correctLevel: QRCode.CorrectLevel.H // L, M, Q, H

					}
if(document.getElementById("qrcode_9")>0){
var t=new QRCode(document.getElementById("qrcode_9"), config);
}
},1000);
function DcodeQR(){
	
}

var linklistgroup = document.getElementById('link-list-group');
if(linklistgroup){
	var linkheight = parseInt(jQuery(window).height()) - parseInt(jQuery('body.admin section.main.admin .section__inner').offset().top) - parseInt(2);
jQuery('body.admin section.main.admin .section__inner').css('height',linkheight);
/*new Sortable(linklistgroup, {
    handle: '.reorder-handle', // handle class
    animation: 30,
	opacity:1,
	scroll: true, 
	sort: function(n) { console.log('sdfasfsafsf'); },
    scrollFn: function(offsetX, offsetY, originalEvent, touchEvt, hoverTargetEl) { alert(offsetX); },
    scrollSensitivity: 100,
    scrollSpeed: 10,
	onEnd:function(n){
		var r=[];
		jQuery('#link-list-group .link').each(function(){r.push(jQuery(this).data("link"));});
		jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_links_order",order:r},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
					console.log('ordering done');
				}else{
				   alert("error occured!");
				}
			}
        });
	}
}); */
} 
jQuery(function($){
$( "#link-list-group" ).sortable({
	handle: ".reorder-handle",
	scroll: true,
	opacity: 0.6,
	placeholder: 'placeholder sortable-placeholder highlight',
	scrollSensitivity: 50,
	scrollSpeed: 30,
	containment: 'parent',
	stop: function( event, ui ) {
		var r=[];
		jQuery('#link-list-group .link').each(function(){r.push(jQuery(this).data("link"));});
		jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "update_links_order",order:r},
			success: function(response){
				if(response.type == "success"){
					document.getElementById('preview_iframe').contentWindow.location.reload();
					console.log('ordering done');
				}else{
				   alert("error occured!");
				}
			}
        });
	},
	//over: function( event, ui ) { console.log('overout');},
	//change: function( event, ui ) { console.log('change'); },
	sort: function( event, ui ) {
		$( "#link-list-group" ).sortable( "refreshPositions" ); 
	},
	start: function(e, ui){
        ui.placeholder.height(ui.item.height());
        ui.placeholder.css('visibility', 'visible');
    }
});	
});
/*
jQuery(function($) {
	var scroll = '';
	var $scrollable = $("#link-list-group");
	function scrolling(){
	if (scroll == 'up') {
		$scrollable.scrollTop($scrollable.scrollTop()-20);
		setTimeout(scrolling,50);
	}
	else if (scroll == 'down'){
		$scrollable.scrollTop($scrollable.scrollTop()+20);
		setTimeout(scrolling,50);
	}
	}

	$( "#link-list-group" ).sortable({
		scroll:false,
		out: function( event, ui ) {
			if (!ui.helper) return;
			if (ui.offset.top>0) {
				scroll='down';
			} else {
				scroll='up';
			}
			scrolling();
		},
		over: function( event, ui ) {
			scroll='';
		},
		deactivate:function( event, ui ) {
			scroll='';
		}
	});
	$( "#link-list-group").disableSelection(); 
});
*/
jQuery(function($){
	if($(".numeric").length>parseInt(0)){
	$('.numeric').keyup(function () { 
		this.value = this.value.replace(/[^0-9\.]/g,'');
	});	
	}	
	if($(window).width() > parseInt(776)){
		//$('section.action-area.section__inner').perfectScrollbar();
	}
var maxWidth  = $('#React--Preview').width();
var maxHeight = $('#React--Preview').height();

$(window).resize(function(evt) {
    var $window = $(window);
    var width = $window.width();
    var height = $window.height();
    var scale;

    scale = Math.min((width/maxWidth)-parseFloat(0.17111), (height/maxHeight)-parseFloat(0.17111));

    //$('#React--Preview').css({'-webkit-transform': 'scale(' + scale + ')'});
	$('#React--Preview').attr('style','transform: scale('+scale+') translateX(-50%) translateY(-50%) translate3d(0px, 0px, 0px);');
	var linkheight = parseInt($(window).height()) - parseInt($('body.admin section.main.admin .section__inner').offset().top) - parseInt(2);
	$('body.admin section.main.admin .section__inner').css('height',linkheight);
});
$(window).resize(function(){
	if($('#setting-theme .grid .grid__item.active').length>parseInt(0)){
	var relativeY = $('#setting-theme .grid .grid__item.active').offset().top - $(".section.theme .section__inner").offset().top;
		var relativex = $('#setting-theme .grid .grid__item.active').offset().left - $(".section.theme .section__inner").offset().left;
		var width = $('#setting-theme .grid .grid__item.active').find('.grid__inner').outerWidth();
		var height = $('#setting-theme .grid .grid__item.active').find('.grid__inner').outerHeight();
		$('.active-highlight').css("width", (parseInt(width)+parseInt(13))+"px").css("height", (parseInt(height)+parseInt(13))+"px");
		$('.active-highlight').css("left", (relativex-parseInt(6))+"px").css("top", (relativeY-parseInt(6))+"px");
	}
});	
var $window = $(window);
var width = $window.width();
var height = $window.height();
var scale;
 
scale = Math.min((width/maxWidth)-parseFloat(0.17111), (height/maxHeight)-parseFloat(0.17111));

//$('#React--Preview').css({'-webkit-transform': 'scale(' + scale + ')'});
$('#React--Preview').attr('style','transform: scale('+scale+') translateX(-50%) translateY(-50%) translate3d(0px, 0px, 0px);');
	if($('#selected_theme').val()){
		var selected_theme = $('#selected_theme').val();
		$('#setting-theme .grid .grid__item[data-value="'+selected_theme+'"]').trigger( "click" );
	}	
});

/*
jQuery(function($){
$( ".link-list-group" ).sortable({
  handle: ".reorder-handle",
  scroll: true,
  scrollSensitivity: 20,
  stop: function( event, ui ) {
	  
  }
});	
});*/

jQuery(document).ready(function(){ 
  jQuery(".usenospace").keydown(function(event) {
     if (event.keyCode == 32) {
         event.preventDefault();
     }
  });
});