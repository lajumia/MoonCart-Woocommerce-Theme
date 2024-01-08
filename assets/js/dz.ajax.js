/**

	Abstract : Ajax Page Js File
	File : dz.ajax.js
	#CSS attributes: 
		.dzForm : Form class for ajax submission. 
		.dzFormMsg  : Div Class| Show Form validation error/success message on ajax form submission
		
	#Javascript Variable
	.dzRes : ajax request result variable
	.dzFormAction : Form action variable
	.dzFormData : Form serialize data variable

**/

function setCookie(cname, cvalue, exhours) {
	var d = new Date();
	d.setTime(d.getTime() + (exhours*60*1000)); /* exhours=30 means 30 Minutes*/
	var expires = "expires="+ d.toString();
	var sameSite = 'SameSite=Strict;';
	document.cookie = cname + "=" + cvalue + ";" + expires + ";" + sameSite + "path=/";
	
}

function contactForm()
{
	window.verifyRecaptchaCallback = function (response) {
        jQuery('input[data-recaptcha]').val(response).trigger('change');
    }

    window.expiredRecaptchaCallback = function () {
        jQuery('input[data-recaptcha]').val("").trigger('change');
    }
	'use strict';
	var msgDiv;
	jQuery(".dzForm").on('submit',function(e)
	{
		e.preventDefault();	//STOP default action
		jQuery('.dzFormMsg').html('<div class="gen alert dz-alert alert-success">Submitting..</div>');
		var dzFormAction = jQuery(this).attr('action');
		var dzFormData = jQuery(this).serialize();
		
		jQuery.ajax({
			method: "POST",
			url: dzFormAction,
			data: dzFormData,
			dataType: 'json',
			success: function(dzRes){
				if(dzRes.status == 1){
					msgDiv = '<div class="gen alert dz-alert alert-success">'+dzRes.msg+'</div>';
				}
				
				if(dzRes.status == 0){
					msgDiv = '<div class="err alert dz-alert alert-danger">'+dzRes.msg+'</div>';
				}
				jQuery('.dzFormMsg').html(msgDiv);
				
				
				setTimeout(function(){
					jQuery('.dzFormMsg .alert').hide(1000);
				}, 5000);
				
				jQuery('.dzForm')[0].reset();
                grecaptcha.reset();
			}
		})
	});
	
	
	/* This function is for mail champ subscription START*/
	jQuery(document).on('submit',".dzSubscribe",function(e)
	{
		e.preventDefault();	//STOP default action
		var thisForm = jQuery(this);
		var dzFormAction = thisForm.attr('action');
		var dzFormData = thisForm.serialize();
		thisForm.addClass('dz-ajax-overlay');
		
		jQuery.ajax({
			method: "POST",
			url: dzFormAction,
			data: dzFormData,
			dataType: 'json',
		  success: function(dzRes) {
			thisForm.removeClass('dz-ajax-overlay');
			if(dzRes.status == 1){
				msgDiv = '<div class="gen alert dz-alert alert-success">'+dzRes.msg+'</div>';
				setCookie('prevent_subscription','true',1);
			}
			if(dzRes.status == 0){
				msgDiv = '<div class="err alert dz-alert alert-danger">'+dzRes.msg+'</div>';
			}
			jQuery('.dzSubscribeMsg').html(msgDiv);
			
			setTimeout(function(){
				jQuery('.dzSubscribeMsg .alert').hide(0);
			}, 5000);
			
			jQuery('.dzSubscribe')[0].reset();
		  }
		}) 
	});
	
	/* This function is for mail champ subscription END*/
	
}

jQuery(document).ready(function() {
    'use strict';
	contactForm();
})