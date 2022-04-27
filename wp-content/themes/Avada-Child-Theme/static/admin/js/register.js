jQuery(document).ready(function(){
	var www = parseInt(150);
	var hhh = parseInt(150);
	/* When click on change profile pic */	
	jQuery('#change-profile-pic').on('click', function(e){
		e.preventDefault();
        jQuery('#profile_pic_modal').modal({show:true});     
		jQuery('.modal-backdrop.fade.in').hide();
		return false;
    });	
	jQuery('#profile-pic').on('change', function()	{ 
		jQuery("#preview-profile-pic").html('');
		jQuery("#preview-profile-pic").html('Uploading....');
		jQuery("#cropimage").ajaxForm(
		{
		target: '#preview-profile-pic',
		success:    function() { 
				jQuery('img#photo').imgAreaSelect({
				aspectRatio: '1:1',
				instance: true,
				onSelectEnd: getSizes,
				x1: 1, y1: 1, x2: www, y2: hhh,
			});
			jQuery('#image_name').val(jQuery('#photo').attr('file-name'));
			}
		}).submit();

	});
	/* handle functionality when click crop button  */
	jQuery('#save_crop').on('click', function(e){
    e.preventDefault();
    params = {
            targetUrl: myAjax.siteurl+'/change_pic.php?action=save',
            action: 'save',
            x_axis: jQuery('#hdn-x1-axis').val(),
            y_axis : jQuery('#hdn-y1-axis').val(),
            x2_axis: jQuery('#hdn-x2-axis').val(),
            y2_axis : jQuery('#hdn-y2-axis').val(),
            thumb_width : jQuery('#hdn-thumb-width').val(),
            thumb_height:jQuery('#hdn-thumb-height').val()
        };
        saveCropImage(params);
    });
    /* Function to get images size */
    function getSizes(img, obj){
        var x_axis = obj.x1;
        var x2_axis = obj.x2;
        var y_axis = obj.y1;
        var y2_axis = obj.y2;
        var thumb_width = obj.width;
        var thumb_height = obj.height;
        if(thumb_width > 0) {
			jQuery('#hdn-x1-axis').val(x_axis);
			jQuery('#hdn-y1-axis').val(y_axis);
			jQuery('#hdn-x2-axis').val(x2_axis);
			jQuery('#hdn-y2-axis').val(y2_axis);
			jQuery('#hdn-thumb-width').val(thumb_width);
			jQuery('#hdn-thumb-height').val(thumb_height);
        } else {
            alert("Please select portion..!");
		}
    }
    /* Function to save crop images */
    function saveCropImage(params) {
		jQuery.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "html",
			data: {
				action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				 t: 'ajax',
									w1:params['thumb_width'],
									x1:params['x_axis'],
									h1:params['thumb_height'],
									y1:params['y_axis'],
									x2:params['x2_axis'],
									y2:params['y2_axis'],
									image_name :jQuery('#image_name').val()
			},
			type: 'Post',
		   	success: function (response) {
					jQuery('#profile_pic_modal').modal('hide');
					jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');
					
					jQuery(".show_image").css('background-image', 'url('+response+')').css('background-size','cover');
					jQuery('input[name="hiddenprofile"]').val(response);
					jQuery("#preview-profile-pic").html('');
					jQuery("#profile-pic").val();
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert('status Code:' + xhr.status + 'Error Message :' + thrownError);
			}
		});
    }
	jQuery('#remove-profile-pic').on('click', function(e){
        jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : myAjax.ajaxurl,
			data : {action: "remove_profile_picture"},
			success: function(response){
				if(response.type == "success"){
					jQuery(".show_image").css('background-image', 'url('+response.default_photo+')').css('background-size','cover');
				}else{
				   alert("error occured!");
				}
			}
        });       
    });
});