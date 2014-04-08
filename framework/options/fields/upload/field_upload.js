jQuery(document).ready(function(){

	
	/*
	 *
	 * NHP_Options_upload function
	 * Adds media upload functionality to the page
	 *
	 */
	 
	 var header_clicked = false;
	 
	jQuery("img[src='']").attr("src", nhp_upload.url);
	
	jQuery('.nhp-opts-upload').click(function() {
		header_clicked = true;
		formfield = jQuery(this).attr('rel-id');
		preview = jQuery(this).prev('img');
		tb_show('', 'media-upload.php?type=image&amp;post_id=0&amp;TB_iframe=true');
		return false;
	});
	
	
	// Store original function
	window.original_send_to_editor = window.send_to_editor;
	
	
	window.send_to_editor = function(html) {
		if (header_clicked) {
            console.log(html);
            var img = jQuery("<div>"+html+"</div>").find('img');
			jQuery('#' + formfield).val(img.attr('src'));
			jQuery('#' + formfield+'_width').val(img.attr('width'));
			jQuery('#' + formfield+'_height').val(img.attr('height'));
			jQuery('#' + formfield).next().fadeIn('slow');
			jQuery('#' + formfield).next().next().fadeOut('slow');
			jQuery('#' + formfield).next().next().next().fadeIn('slow');
			jQuery(preview).attr('src' , img.attr('src'));
			tb_remove();
			header_clicked = false;
		} else {
			window.original_send_to_editor(html);
		}
	}
	
	jQuery('.nhp-opts-upload-remove').click(function(){
		$relid = jQuery(this).attr('rel-id');
		jQuery('#'+$relid).val('');
		jQuery('#'+$relid+"_width").val('');
		jQuery('#'+$relid+"_height").val('');
		jQuery(this).prev().fadeIn('slow');
		jQuery(this).prev().prev().fadeOut('slow', function(){jQuery(this).attr("src", nhp_upload.url);});
		jQuery(this).fadeOut('slow');
	});
});