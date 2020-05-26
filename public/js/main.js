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
            console.log($(this));
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
		body.attr('data-sequence', 3);
	});

    genderLabel.each(function() {
        jQuery(this).on('click', function () {
            body.attr('data-step', 2);
        });
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

            console.log("sss");
        });
    } 
});