jQuery(function($){
	$(document).on('click','input[name="submit_reply"]',function(){
		var id = $(this).data('id');
		var reply_message = $('#reply_textarea_'+id).val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : "https://yogabody.bio/wp-admin/admin-ajax.php",
			data : {action: "reply_to_review",id:id,reply_message:reply_message},
			success: function(response){
				if(response.type == "success"){
					$("#edit_reply_section_"+id+" .reply-display .comment").html(reply_message);
					$("#edit_reply_textarea_"+id).html(reply_message);
					$("#edit_reply_section_"+id+" .reply-display .author-date").html('('+response.update_date+')');
					$("#reply_section_"+id).slideUp();
					$("#edit_reply_section_"+id).slideDown();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('click','input[name="submit_reply_edit"]',function(){
		var id = $(this).data('id');
		var reply_message = $('#edit_reply_textarea_'+id).val();
		$.ajax({
			type : "POST",
			dataType : "json",
			url : "https://yogabody.bio/wp-admin/admin-ajax.php",
			data : {action: "reply_to_review",id:id,reply_message:reply_message},
			success: function(response){
				if(response.type == "success"){
					$("#edit_reply_section_"+id+" .reply-display .comment").html(reply_message);
					$("#edit_reply_section_"+id+" .reply-display .author-date").html('('+response.update_date+')');
					$('#EditReply_'+id).slideUp('slow');
					$('#edit_reply_section_'+id).find('.reply-display').slideDown();
				}else{
				   alert("error occured!");
				}
			}
        });
	});
	$(document).on('click','input[name="submit_report_review"]',function(){
		var id = $(this).data('id');
		var report_message = $('#report_textarea_'+id).val();
		if($('#submit_report_'+id).valid()){
			$.ajax({
				type : "POST",
				dataType : "json",
				url : "https://yogabody.bio/wp-admin/admin-ajax.php",
				data : {action: "report_to_review",id:id,report_message:report_message},
				success: function(response){
					if(response.type == "success"){
						$('#submit_report_'+id).trigger("reset");
						$('#report_review_'+id).slideUp('slow');
						alert('Reported to Admin');
					}else{
					   alert("error occured!");
					}
				}
			});
		}
	});
	$(document).on('click','a.showReplyForm',function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$('#reply_'+id).slideToggle('slow');
		e.stopPropagation();
	});
	$(document).on('click','a.ReportAReview',function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$('#report_review_'+id).slideToggle('slow');
		e.stopPropagation();
	});
	$(document).on('click','a.ReportAReview',function(e){
		e.preventDefault();
		e.stopPropagation();
	});
	$(document).on('click','a.showReplyEdit',function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$(this).parents('.edit-reply-section').find('.reply-display').slideUp();
		$('#EditReply_'+id).slideDown('slow');
		e.stopPropagation();
	});
	
});