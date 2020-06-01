jQuery(document).ready(function () {
	ion.sound({
		sounds: [
			{
				name: "Prev-Next"
			},
			{
				name: "sonidoA",
			},
			{
				name: "sonidoB",
			},
			{
				name: "sonidoC",
			},
			{
				name: "soundD",
			}
		],
		volume: 0.5,
		path: "/assets/sound/",
		preload: true
	});


	$(document).on(
		"click",
		"[data-sound-click]",
		function() {
			var audio = new Audio("assets/sound/" + $(this).attr("data-sound-click") + ".mp3");
			audio.play();

			//ion.sound.play($(this).attr("data-sound-click"));
		}
	);

	$(document).on(
		"mouseenter",
		"[data-sound-hover]",
		function() {
            //console.log($(this));
			var audio = new Audio("assets/sound/" + $(this).attr("data-sound-hover") + ".mp3");
			audio.play();

			$(this).on(
				"mouseout",
				function() {
					//audio.pause();
				}
			);

			//ion.sound.play($(this).attr("data-sound-hover"));
		}
	);


    var dropdownStep         = jQuery(".dropdown-step"),
        idStepElementContent = dropdownStep.find(".id-step-element-content");

    idStepElementContent.on('change', function () {
        jQuery(this).parent().toggleClass("show");
    });

    var selectElement = jQuery("select");

    selectElement.chosen({
        width: "100%",
        disable_search_threshold: 10,
        search_contains: true,
        allow_single_deselect: true
    });

    var body           = jQuery("body"),
        genderElement  = jQuery(".gender-element"),
        genderLabel    = genderElement.find("label"),
        stepResult     = jQuery(".step-result"),
        controlsSteps  = jQuery(".controls-steps"),
        arrows         = jQuery(".arrows"),
        arrowsControl  = arrows.find(".arrow-control"),
        prevArrow      = controlsSteps.find(".prev-arrow"),
		nextArrow      = controlsSteps.find(".next-arrow"),
		goToRegister   = jQuery(".go-to-register"),
		goNow          = jQuery(".go-now");
	
	goToRegister.on('click', function (e) {
		e.preventDefault();
		body.attr('data-sequence', 2);
	});

	goNow.on('click', function (e) {
		e.preventDefault();
		//body.attr('data-sequence', 3);

		$('#email').val($('#frmemail').val());
		$('#dataStep').val(1);
		$('#dataSequence').val(2);
		$("#regStepFrm").submit(); //Submit  the FORM 
	});


    genderLabel.each(function() {
        jQuery(this).on('click', function () {
        	//body.attr('data-step', 2);
        	var radioButton = $("input[name='frmgender']:checked");

        	//var radioButton = $('input[type=radio]:checked');
        	if (radioButton.length > 0) {
        		$('#gender').val(radioButton.val());
        		//////console.log(1111111111);
				$('#dataStep').val(1);
				$('#dataSequence').val(3);
				$("#regStepFrm").submit(); //Submit  the FORM    
        	}

        });
    });

    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }

    function removeErrorMsg () {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','none');        
    }

	//callback handler for form submit
	$("#regStepFrm").submit(function(e)
	{
	    var postData = $(this).serializeArray();
	    var formURL = $(this).attr("action");
	    $.ajax(
	    {
	        url : formURL,
	        type: "POST",
	        data : postData,
	        success:function(data, textStatus, jqXHR) 
	        {
	            //data: return data from server
	            //alert('success');
	          
	        	if(data.error){
	            	printErrorMsg(data.error);
	        	}
	            else{	
	            	removeErrorMsg();	            	
	            	//body.attr('data-sequence',3);
	            	body.attr('data-sequence',data.nxtDataSeq);
	            	body.attr('data-step', data.nxtDataStep);
	            }
	        },
	        error: function(jqXHR, textStatus, errorThrown) 
	        {
	            //if fails
	            //alert('fails');    
	        }
	    });
	    e.preventDefault(); //STOP default action
	    //e.unbind(); //unbind. to stop multiple form submit.
	});
	

    stepResult.each(function () {
        var stepResultData = jQuery(this).data('show');

        jQuery(this).on('click', function () {
            body.attr('data-step', stepResultData);
        });
    });

    prevArrow.on('click', function () {
        var bodyStep = parseInt(body.attr('data-step'));

		changeStep(bodyStep , --bodyStep);
    });

    nextArrow.on('click', function () {
        var bodyStep = parseInt(body.attr('data-step'));
        //changeStep(bodyStep , ++bodyStep);


        if(bodyStep == 1){
			$('#dataStep').val(1);
			$('#dataSequence').val(3);
			$("#regStepFrm").submit(); //Submit  the FORM 
		}
		else if(bodyStep == 2){
			var checkboxValues = [];
			var selected;
			jQuery('input:checkbox[name=id_step]:checked').each(function() {

				if($(this).val() == 'Played'){
					jQuery('input:checkbox[name=id_step_option]:checked').each(function() {
						 checkboxValues.push($(this).val());
					});
				}
				else
					 checkboxValues.push($(this).val());
			   
			  // alert(111);
			});
			selected = checkboxValues.join(',');
			//console.log(checkboxValues);
			//console.log(selected);
			$('#dataStep').val(2);
			$('#dataSequence').val(3);
			$('#identification').val(selected);	
			$("#regStepFrm").submit(); //Submit  the FORM 		
		}
		else if(bodyStep == 3){
			$('#dataStep').val(3);
			$('#dataSequence').val(4);
			$('#country').val($('#countrySelect').val());
			$('#city').val($('#citySelect').val());
			$('#postal_code').val($('#frmpostalcode').val());

			$('#country_name').val($('#countrySelect option:selected').text());
			$('#city_name').val($('#citySelect option:selected').text());

			$("#regStepFrm").submit();
		}
		else if(bodyStep == 4){
			$('#dataStep').val(4);
			$('#dataSequence').val(3);
			bdate = $('#frm_birthyear').val()+'-'+$('#frm_birthmonth').val()+'-'+$('#frm_birthday').val();
			$('#birth_date').val(bdate);
			$("#regStepFrm").submit();
		}
		else
			changeStep(bodyStep , ++bodyStep);
    });


	function changeStep(oldStep , newStep) {
		var body       = jQuery("body"),
			stepHolder = jQuery(".group-of-steps [data-step='" + oldStep + "']");

		stepHolder.addClass("working");
	
		setTimeout(function() {
			stepHolder.removeClass("working");
		},800);

        body.attr('data-step', newStep);
    }

    var formItemPassword = jQuery(".form-item-password"),
        seePassword = jQuery(".see-password");

    if (seePassword.length) {
        seePassword.on('click', function () {
            jQuery(this).toggleClass("icon-eye2 icon-eye-blocked2");

            formItemPassword.attr('type') === 'password' ? formItemPassword.attr('type', 'text') : formItemPassword.attr('type', 'password')
            //console.log("sss");
        });
    } 
});