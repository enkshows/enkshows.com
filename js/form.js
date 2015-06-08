$(function() {

	

	//$('input.text-input').css({backgroundColor:"#FFFFFF"});

	//$('input.text-input').focus(function(){

	//$(this).css({backgroundColor:"#FFDDAA"});

	//}); //focus function

	

	//$('input.text-input').blur(function(){

	//	$(this).css({backgroundColor:"#FFFFFF"});

	//}); //blur function()

		

	// if field is defaultValue, clear it on focus 

	$(':input[type!="submit"][type!="checkbox"]').focus(function() {



		if(this.value == this.defaultValue){

			$(this).val('');

		}

	});



	// if field is empty afterward, add text again

	$(':input[type!="submit"][type!="checkbox"]').blur(function(){

		if(this.value == ''){

			$(this).val(this.defaultValue);

		}

	});

	





}); //function

	



	

$(document).ready(function(){



	$('.form').submit(function() {

		var valid = true;

		var form = $(this);

		var message_div = form.find('.form_message');

		var error_msg = '';

		var errors = {

				'input_error': 'Sorry, some information is invalid.  Please try again and click SUBMIT',

				'email_error': 'Sorry, the email address you entered is not valid.  Please try again and click SUBMIT',

		};
		

		form.find('.verify').each(function() {
			if ($(this).val() != 5) {
				console.log( $(this).val() );
				form.find('.verify-label').addClass('field-error');
				error_msg = errors.input_error;
				valid = false;
			} else {
				form.find('.verify-label').removeClass('field-error');
			}						
			
		});
		
		


		form.find('.email').each(function() {

			var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;



			if (!pattern.test($(this).val())) {

				$(this).addClass('field-error');

				error_msg = errors.email_error;

				valid = false;

			} else {

				$(this).removeClass('field-error');

			}

		});

		

		form.find('.required').each(function() {

			var default_value = '';

			var current_value = '';

			var checked_field = $(this);



			if ($(this).is('fieldset')) {

				var checkbox_group = $(this).attr('name');



				 if (form.find('input[name="' + checkbox_group + '"]:checked').length == 0) {

				 	checked_field = $('fieldset[name="' + checkbox_group + '"]');

				 	current_value == '';

				 } else {

				 	checked_field = $('fieldset[name="' + checkbox_group + '"]');

				 	current_value = 'At least one is checked - OK';

				 }

			} else if ($(this).is('select')) {

				default_value = $(this).find('option:first').text();

				current_value = $(this).find('option:selected').text();

			} else {

				default_value = this.defaultValue;

				current_value = $(this).val();

			}



			if (current_value == '' || current_value == default_value) {

				checked_field.addClass('field-error');

				error_msg = errors.input_error;

				valid = false;

			} else {

				checked_field.removeClass('field-error');

			}

		});


		if (!valid) {

			message_div

				.removeClass()

				.addClass('form_message error')

				.html(error_msg)

				.show();

		} else {

			message_div

				.removeClass()

				.addClass('form_message pleaseWait')

				.html('Please wait... Form is Processing')

				.show();



			form.find('input[type="text"]').each(function() {

				if (this.defaultValue == $(this).val()) {

					$(this).val('');

				}

			});

			$.ajax({

				type: form.attr('method'),

				url: form.attr('action'),

				data: form.serialize(),

				success: function(response) {

					if (response.hasOwnProperty("status") && response.status == "error") {

						var	error_msg = response.error_message;

						$('.captcha').addClass('field-error').find('input').addClass('field-error');

						message_div

							.removeClass()

							.addClass('form_message error')

							.html(error_msg)

							.show();

					} else {

						$('.field-error').removeClass('field-error');

						form.get(0).reset();
						message_div

							.removeClass()

							.addClass('form_message success')

							.html("<img id='checkmark' src='/img/check.png' />")

							.fadeIn(2500, function() {

								message_div.append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

							});

					}

				}, //function

				error: function() {

					//console.log( 'fail' );

				}

			}); //.ajax

		}

		

		return false;

	});





	// ADMIN FORM



/*	$('#adminForm_button').click(function() {

		//console.log('clicked adminForm_button');

		//console.log('formName: ', $('#formName').val());

		

		showData($('#formName').val());



	}); //adminForm_button function





	function showData(str) {

		if (str==""){

			document.getElementById("txtHint").innerHTML="";

			return;

		} 

		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari

			xmlhttp=new XMLHttpRequest();

		}

		else{// code for IE6, IE5

			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		}

	

		xmlhttp.onreadystatechange=function(){

			if (xmlhttp.readyState==4 && xmlhttp.status==200){

				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

			}

		}

		xmlhttp.open("GET","bin/adminForm.php?q="+str,true);

		xmlhttp.send();

	}*/



});





/*	$('#applyForm_button').click(function() {

		//console.log('clicked applyForm_button');

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#applyForm').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#applyForm_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});



		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#applyForm_message_box').html("<div id='applyForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#applyForm_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			var dataString = $("#applyForm").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#applyForm_message_box').html("<div id='applyForm_message'  class='pleaseWait'></div>");

			$('#applyForm_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "bin/applyForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#applyForm").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

				//console.log('update response message');

				$('#applyForm_message_box').html("<div id='applyForm_message'  class='success'></div>");

				$('#applyForm_message').html("<img id='checkmark' src='img/check.png' />")

				.fadeIn(1500, function() {

				$('#applyForm_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else

	



	}); //applyForm_button function









	$('#visitorForm_button').click(function() {

		//console.log('clicked visitorForm_button');



	

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#visitorForm').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#visitorForm_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});





		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#visitorForm_message_box').html("<div id='visitorForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#visitorForm_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			

			//return;

			

			var dataString = $("#visitorForm").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#visitorForm_message_box').html("<div id='visitorForm_message'  class='pleaseWait'></div>");

			$('#visitorForm_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "/redesign/bin/visitorForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#visitorForm").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

				//console.log('update response message');

				$('#visitorForm_message_box').html("<div id='visitorForm_message'  class='success'></div>");

				$('#visitorForm_message').html("<img id='checkmark' src='../img/check.png' />")

				.fadeIn(1500, function() {

				$('#visitorForm_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else





	}); //visitorForm_button function





	

	$('#pressForm_button').click(function() {

		//console.log('clicked pressForm_button');

	

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#pressForm').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#pressForm_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});



		

		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#pressForm_message_box').html("<div id='pressForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#pressForm_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			var dataString = $("#pressForm").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#pressForm_message_box').html("<div id='pressForm_message'  class='pleaseWait'></div>");

			$('#pressForm_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "bin/pressForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#pressForm").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

/*

				//console.log('update response message');

				$('#pressForm_message_box').html("<div id='pressForm_message'></div>");

				$('#pressForm_message').html("<h2>Press Form Submitted!</h2>")

				.append("<p>We will be in touch soon.</p>")

				.hide()

				.fadeIn(1500, function() {

				  $('#pressForm_message').append("<img id='checkmark' src='images/check.png' />");

				});

*/	/*		

				//console.log('update response message');

				$('#pressForm_message_box').html("<div id='pressForm_message'  class='success'></div>");

				$('#pressForm_message').html("<img id='checkmark' src='img/check.png' />")

				.fadeIn(1500, function() {

				$('#pressForm_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else

	



	}); //pressForm_button function









	

	$('#contactForm_button').click(function() {

		//console.log('clicked contactForm_button');

	

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#contactForm').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#contactForm_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});



		

		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#contactForm_message_box').html("<div id='contactForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#contactForm_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			var dataString = $("#contactForm").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#contactForm_message_box').html("<div id='contactForm_message'  class='pleaseWait'></div>");

			$('#contactForm_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "../bin/contactForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#contactForm").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

				//console.log('update response message');

				$('#contactForm_message_box').html("<div id='contactForm_message'  class='success'></div>");

				$('#contactForm_message').html("<img id='checkmark' src='../img/check.png' />")

				.fadeIn(1500, function() {

				$('#contactForm_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else

	



	}); //contactForm_button function





	$('#showApplyForm_button').click(function() {

		//console.log('clicked showApplyForm_button');

	

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#showApplyForm').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#showApplyForm_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});



		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#showApplyForm_message_box').html("<div id='showApplyForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#showApplyForm_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			var dataString = $("#showApplyForm").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#showApplyForm_message_box').html("<div id='showApplyForm_message'  class='pleaseWait'></div>");

			$('#showApplyForm_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "../bin/applyForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#showApplyForm").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

				//console.log('update response message');

				$('#showApplyForm_message_box').html("<div id='showApplyForm_message'  class='success'></div>");

				$('#showApplyForm_message').html("<img id='checkmark' src='../img/check.png' />")

				.fadeIn(1500, function() {

				$('#showApplyForm_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else

	



	}); //showApplyForm_button function

	

	



	$('#showApplyForm-2_button').click(function() {

		//console.log('clicked showApplyForm-2_button');

	

		//console.log('iterate thru elements and validate');

		var errorCheck = false;

		$(':input', '#showApplyForm-2').not(":button, :submit, :reset, :hidden").each(function() {

			//to make not required, insert above, i.e. input#comments

			

			

			

			//console.log('errorCheck:', this.name, this.type, this.value);

			if ( (this.value == "") || (this.value == this.defaultValue) ) {

				//console.log('errorCheck:true:', this.name, this.type, this.value);

				$("div#showApplyForm-2_message").show();

				$(this).css({color:"#FF6600"});

				$(this).focus();

				errorCheck = true;

			}

				

			else {

				//console.log('errorCheck:false:', this.name, this.type, this.value);

				$(this).css('color', '');

				

			}		

	

		});



		//console.log('proceed if no errors in input fields');

		if(errorCheck){

			//console.log('errorCheck:true - return');

			$('#showApplyForm-2_message_box').html("<div id='showApplyForm-2_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

			$("div#showApplyForm-2_message").show();

			return false;

			}

		else{

			//console.log('errorCheck:false - continue');

			var dataString = $("#showApplyForm-2").serialize();

			//update message before sending

			//console.log('update wait message');

			$('#showApplyForm-2_message_box').html("<div id='showApplyForm-2_message'  class='pleaseWait'></div>");

			$('#showApplyForm-2_message').html("Please wait... Form is Processing")

			

			$.ajax({

			  type: 'POST',

			  url: "../bin/applyForm.php",

			  data: dataString,

			  success: function() {

				//console.log('reset default value and default color');

				$(":input", "#showApplyForm-2").not(":button, :submit, :reset, :hidden").each( function() {

				this.value = this.defaultValue;

				$(this).css('color', '');     

				});

	

				//console.log('update response message');

				$('#showApplyForm-2_message_box').html("<div id='showApplyForm-2_message'  class='success'></div>");

				$('#showApplyForm-2_message').html("<img id='checkmark' src='../img/check.png' />")

				.fadeIn(1500, function() {

				$('#showApplyForm-2_message').append("Thank you for the information.  You will be contacted shortly by an ENK Show Director.");

				});

				  

			  } //function

			}); //.ajax

			

	

			} //else

	



	}); //showApplyForm-2_button function



	$('#adminForm_button').click(function() {

		//console.log('clicked adminForm_button');

		//console.log('formName: ', $('#formName').val());

		

		showData($('#formName').val());



	}); //adminForm_button function





	function showData(str) {

		if (str==""){

			document.getElementById("txtHint").innerHTML="";

			return;

		} 

		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari

			xmlhttp=new XMLHttpRequest();

		}

		else{// code for IE6, IE5

			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		}

	

		xmlhttp.onreadystatechange=function(){

			if (xmlhttp.readyState==4 && xmlhttp.status==200){

				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

			}

		}

		xmlhttp.open("GET","bin/adminForm.php?q="+str,true);

		xmlhttp.send();

	} //showUser function



}); // document ready function

	



runOnLoad(function(){

  //$("input#showName").select().focus();

	//console.log('rest response message');

	$('#contactForm_message_box').html("<div id='contactForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

	$('#pressForm_message_box').html("<div id='pressForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

	$('#applyForm_message_box').html("<div id='applyForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

	$('#visitorForm_message_box').html("<div id='visitorForm_message' class='error'>Sorry, some information is invalid.  Please try again and click SUBMIT.</div>");

	$('.error').hide();





});





*/