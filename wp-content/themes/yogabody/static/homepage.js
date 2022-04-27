jQuery(function($){
	$(document).on('click','#showrr',function(){
		$(this).hide();
		$('#blurout').show();
		$('#blurout').focus();
	});
	$(document).on("focusout","#blurout",function(){
		if($(this).val()==''){
			$('#blurout').hide(); 
			$('#showrr').show();
			$('#submitrr').css('opacity',0);
		}else{
			$('#submitrr').css('opacity',1);
		} 
	});
	$(document).on("keyup","#blurout",function(){
		if($(this).val()==''){
			$('#blurout').hide();
			$('#showrr').show();
			$('#submitrr').css('opacity',0);
		}else{
			$('#submitrr').css('opacity',1);
		}
	});
	$(document).on('click','.styles__StyledLink-sc-1u3c2do-8.bdAiZE',function(e){
		e.preventDefault();
		var aval = $('#blurout').val();
		window.location = myAjax.siteurl+'/register/?username='+aval;
	});
	
});