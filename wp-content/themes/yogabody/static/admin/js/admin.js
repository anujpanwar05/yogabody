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
		$('.CpyTClipb').text('Copy my Yogabody URL');	  
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
		alert('Only allowed Numeric values');
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
	$(document).on('click','.setting__checkbox',function(){
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
	$(document).on('click','#setting-theme .grid .grid__item',function(){
		var relativeY = $(this).offset().top - $(".section.theme .section__inner").offset().top;
		var relativex = $(this).offset().left - $(".section.theme .section__inner").offset().left;
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
	$(document).on('click','.upload_profile',function(){
		$('#upload_profile').click();
	});
	$(document).on('click','.link-fieldd',function(){
		openlinkPayment($(this).parents('.link').data('link'),'data-link-tab-payment');
	});
	

	$(document).on('click','.sidebar__user',function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}else{
			$(this).addClass('active');
		}
	});	
	
});
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
new Sortable(linklistgroup, {
    handle: '.reorder-handle', // handle class
    animation: 150,
	onEnd:function(n){
		var r=[];
		console.log('dfsdfsdfsdfsdfsdf');
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
});
}
jQuery(function($){
$('section.action-area.section__inner').perfectScrollbar();
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
  stop: function( event, ui ) {
	  alert(event);
	  alert(ui);
  }
});	
});
*/