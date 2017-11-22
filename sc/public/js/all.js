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