$(document).ready(function() {
	// info form validation
	$('#info_form').validate({
        errorPlacement: function(error, element) {
            error.insertBefore(element);
            error.addClass('valid_error');
        },
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: 'Please enter your email address',
                email: 'Please enter a valid email address'
            }
        },
        onkeyup: false,
        highlight : function (element) {
            $(element).addClass('input_error');
        },
        unhighlight : function (element) {
            $(element).removeClass('input_error');
        }
    });

	// to scroll page up upon arrow click
	$('.singlepage-nav').singlePageNav({
        offset: 0,
        filter: ':not(.external)',
        updateHash: true,
        currentClass: 'current',
        easing: 'swing',
        speed: 750,
        beforeStart: function () {
            if ($(window).width() < 991) {
                $('.singlepage-nav > ul').hide();
            };
        },
        onComplete: function () {
            console.log('done scrolling');
        }
    });

	// add new lead to DB
	$('#submit').click(function(e) {
        e.preventDefault();
        // All checking passed
        if ($('#info_form').valid()) {
			e.preventDefault();
	        $('#loading-indicator').fadeIn(500);
			$('#submit_btn').hide();
			$.ajax({
                type:'POST',
				dataType: 'json',
				data: $('#info_form').serialize(),
                url: base_url + 'record/add',
                success: function(result) {
					if (result) {
						$('#loading-indicator').hide();
						// redirect to thanks page upon successfull insert into DB
						// I could handle  false situation and bring notification that would tell 
						// user that something went wrong but it is not  really needed 
						location.href = base_url + 'home/thanks';
					}
                }
            }); 
		}  
    });

	// validation of registration form
	$("#registration_form").validate({
        errorPlacement: function(error, element) {
            error.insertAfter(element);
            error.addClass('valid_error');
        },
        rules: {
        	user_name: {
        		required: true,
        		minlength: 2,
        		maxlength: 25,
        		remote: {
        			url: base_url + 'client/is_unique_name',
			    	type: 'post',
			    	data: {'user_name': 
						function() {
							var user_name = $('#user_name').val();
							return user_name;
						}
					}
			    }
        	},
        	password: {
        		required: true,
        		maxlength: 10,
        		minlength: 6
        	}
        },
        messages: {
            user_name: {
                required: 'Please enter your Name',
      			minlength: 'Your Name can\'t be less than 2 letters',
      			maxlength: 'Your Name can\'t be more than 25 letters'
            },
      		password: {
      			required: 'Please enter your password',
      			minlength: 'Your Password can\'t be less than 6 characters',
      			maxlength: 'Your Password can\'t be more than 10 characters'
      		}
      	},
      	onkeyup: false,
        highlight : function (element) {
            $(element).addClass('input_error');
        },
        unhighlight : function (element) {
            $(element).removeClass('input_error');
        },
    });

	// call client/register  to store data into DB
	$('#registration_button').click(function(e) {
		e.preventDefault();

		if ($('#registration_form').valid()) {
			$.ajax({
                type:'POST',
				dataType: 'json',
				data: $('#registration_form').serialize(),
                url: base_url + 'client/register',
                success: function(result) {
					if (result) {
						// get login form back to the screen
						invoke_login_modal();
					}
                }
            }); 
		}
	});
	
	// validation of login form
	$("#login_form").validate({
        errorPlacement: function(error, element) {
            error.insertAfter(element);
            error.addClass('valid_error');
        },
        rules: {
        	login_user_name: {
        		required: true
        	},
        	login_password: {
        		required: true,
        	}
        },
        messages: {
            login_user_name: {
                required: 'Please enter your Name'
            },
      		login_password: {
      			required: 'Please enter your password'
      		}
      	},
      	onkeyup: false,
        highlight : function (element) {
            $(element).addClass('input_error');
        },
        unhighlight : function (element) {
            $(element).removeClass('input_error');
        },
    });

	// call client/login  to login user
	$('#login_button').click(function(e) {
		e.preventDefault();
		$('#login_button').attr('disabled',true);
		var password = $('#login_password').val();
		var user_name = $('#login_user_name').val();

		if ($('#login_form').valid()) {
			$.ajax({
                type:'POST',
				dataType: 'json',
				data: {
						'password' : password,
						'user_name' : user_name
				},
                url: base_url + 'client/login',
                success: function(result) {
					console.log(result);
					if (result) {
						// navigate to dashboard
						location.href = '/home/dashboard';
					}
                }
            }); 
		}
	});

	// invokes login modal/ pop up 
	$('#log_in').click(function(e) {
        e.preventDefault();		
		$('#registration_modal').modal('hide');	
		$('#login_modal').modal('show');
	});

	// invokes sign up modal/ pop up 
	$('#sign_up').click(function(e) {
        e.preventDefault();
		$('#login_modal').modal('hide');		
		$('#registration_modal').modal('show');	
	});
	
	// invokes Login modal/ pop up on dashboard click
	$('#login').click(function(e) {
        e.preventDefault();
		$('#login_modal').modal('show');	
	});
});

// this function is to populate modal popup with customer info upon info icon click
// Controller Record provides a specific record by its id
function show_info(id) {
	$.ajax({
		type: 'POST',
		dataType: 'json',
		data: {'id' : id},
		url: base_url + 'record/show',
		success: function(result) {
			var customer_name = result['fname'] + ' ' + result['lname'];
			var email_address = result['email'];
			var phone_number = result['phone'];
			var square_footage = result['footage'];
			var mailing_address = result['address'];
			var city_name = result['city'];
			var state_name = result['state'];
			var zip_code = result['zip'];
			// populate fields with data
			$('#customer_name').val(customer_name);
			$('#email_address').val(email_address);
			$('#phone_number').val(phone_number);
			$('#square_footage').val(square_footage);
			$('#mailing_address').val(mailing_address);
			$('#city_name').val(city_name);
			$('#state_name').val(state_name);
			$('#zip_code').val(zip_code);
			// show popup modal
			$('#info_modal').modal('show');				
		}
	});
}

//this function is closing login and invokes registration form modal
function invoke_register_modal() {
	$('#login_modal').modal('hide');
	$('#registration_modal').modal('show');
}

// this function is closing registration modal and invokes login modal
function invoke_login_modal() {
	$('#registration_modal').modal('hide');
	$('#login_modal').modal('show');
}