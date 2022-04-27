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
	$(".yogabody-community").slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 3000,
		responsive: [
			{
			breakpoint: 1024,
				settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
			},
			{
			breakpoint: 800,
				settings: {
				slidesToShow: 2,
				slidesToScroll: 2
				}
			},
			{
			breakpoint: 500,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
			}
		]
      });
});