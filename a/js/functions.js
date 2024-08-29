
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */


	$(document).ready(function (){


		/*-------------------------------------------
			Notification Popover
		-------------------------------------------*/


		$("#notifications").click(function() {

			$("#notifications-panel").toggleClass("active");

		});


		$("#notifications-panel").find(".close").click(function() {

			$(this).closest("li").remove();

		});


		/*-------------------------------------------
			Window
		-------------------------------------------*/


		/*

		$("#window").kendoWindow({

			pinned: true,
			modal: true,
			width: "500px",
			title: "Next Step",
			actions: [

				"Close"

			]

			// close: onClose

		});

		var popover = $("#window").data("kendoWindow");

		popover.center();

		*/


		/*

		var window = $("#window"),

		undo = $("#undo")

		.bind("click", function() {

			window.data("kendoWindow").open();
			undo.hide();

		});

		var onClose = function() {

			undo.show();

		}

		if (!window.data("kendoWindow")) {

			window.kendoWindow({

				width: "500px",
				title: "Next Step",
				actions: [
					"Close"
				],

				close: onClose

			});

		}

		*/


		/*-------------------------------------------
			Custom Checkbox / Radio Input
		-------------------------------------------*/


		// Notes...


		// $(".checkbox input, input[type='checkbox']").prettyCheckable();


		/*-------------------------------------------
			Navigation Toggle
		-------------------------------------------*/


		// This displays while on smaller screen views.


		$("#menu").click(function() {

			// Add class of "active" to toggle button

			$(this).toggleClass("active");

			// Add class of "active" to <nav>

			$("#nav").toggleClass("active");

			// Display <nav>

			$("#nav").slideToggle("fast");

		});


		/*-------------------------------------------
			Fitvids
		-------------------------------------------*/

		// For any videos used, add a container with
		// a class of "video" (ex: <div class="video")
		// which wraps around an embedded video.

		// This allows for videos to work well in
		// responsive environments.


		$(".video").fitVids();


		/*-------------------------------------------
			Smooth Scroll
		-------------------------------------------*/


		// This needs to be looked in to further;
		// Kendo-related JavaScript is causing this
		// to not work at all.


		$(function(){

			$(".skip-to").bind("click", function (event) {

				event.preventDefault ? event.preventDefault() : event.returnValue = false;

				var target = $(this).attr("href");

				$("html, body").stop().animate({

					scrollLeft: $(target).offset().left,
					scrollTop: $(target).offset().top

				}, 600, function() {

					$("body").addClass("fixed");

				});

			});

		});


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		$("body").addClass("dev");


		// Displays screen size on the fly.


		var windowSize = $(window).width();

		$("#footer").after('<div id="dev"></div>');

		$("#dev").text(windowSize);


		/*-------------------------------------------
			Select Element
		-------------------------------------------*/


		// Notes...


		$("select").kendoDropDownList();


		/*-------------------------------------------
			Combobox
		-------------------------------------------*/


		$(".combobox").kendoComboBox();


		/*-------------------------------------------
			Panel Bar
		-------------------------------------------*/


		$(".panelbar").kendoPanelBar( {

			expandMode: "multiple"

		});

		$("#membershipPanelBar").kendoPanelBar({"expandMode":"multiple"});


		/*-------------------------------------------
			Window
		-------------------------------------------*/


		$('.open-popover').click(function (e) {

			$('.window, .popover').modal();

			return false;

		});

		/*-------------------------------------------
			Tool Tip
		-------------------------------------------*/


		// var tooltip = $("#agglomerations").kendoTooltip({

			// filter: "a",
			// width: 120,
			// position: "top"

		// }).data("kendoTooltip");

		// tooltip.show($("#canton"));

		// $("#agglomerations").find("a").click(false);


		/*-------------------------------------------
			MVVM
		-------------------------------------------*/


		var viewModel = kendo.observable({
                firstName: "John",
                lastName: "Doe",
                genders: ["Male", "Female"],
                gender: "Male",
                agreed: false,
                confirmed: false,
                register: function(e) {
                    e.preventDefault();

                    this.set("confirmed", true);
                },
                startOver: function() {
                    this.set("confirmed", false);
                    this.set("agreed", false);
                    this.set("gender", "Male");
                    this.set("firstName", "John");
                    this.set("lastName", "Doe");
                }
            });

            kendo.bind($("#example"), viewModel);


		/*-------------------------------------------
			Validator
		-------------------------------------------*/


                            $(document).ready(function() {
                    var data = [
                    "12 Angry Men",
                    "Il buono, il brutto, il cattivo.",
                    "Inception",
                    "One Flew Over the Cuckoo's Nest",
                    "Pulp Fiction",
                    "Schindler's List",
                    "The Dark Knight",
                    "The Godfather",
                    "The Godfather: Part II",
                    "The Shawshank Redemption"
                    ];

                    $("#search").kendoAutoComplete({
                        dataSource: data,
                        separator: ", "
                    });

                    $("#time").kendoDropDownList({
                        optionLabel: "--Start time--"
                    });

                    $("#amount").kendoNumericTextBox();

                    var validator = $("#tickets").kendoValidator().data("kendoValidator"),
                    status = $(".status");

                    $("button").click(function() {
                        if (validator.validate()) {
                            status.text("Hooray! Your tickets has been booked!")
                                .removeClass("invalid")
                                .addClass("valid");
                        } else {
                            status.text("Oops! There is invalid data in the form.")
                                .removeClass("valid")
                                .addClass("invalid");
                        }
                    });
                });

	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Equal Heights
		-------------------------------------------*/


		$('.three-block-group').equalizer({

			columns: '> div',
			resizeable: true

		});


		$('.recent-activity-block, .my-monthly-membership, .my-pre-paid-memberships, .beds-and-booths-block, .monthly-billing-account').parent().equalizer({

			columns: '> div .k-block',
			resizeable: true

		});


		/*-------------------------------------------
			Item
		-------------------------------------------*/


		// Notes...


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		var windowSize = $(window).width();

		$("#dev").text(windowSize);


		/*-------------------------------------------
			Equal Heights
		-------------------------------------------*/


		$('.three-block-group').equalizer({

			columns: '> div',
			resizeable: true

		});


		$('.recent-activity-block, .my-monthly-membership, .my-pre-paid-memberships, .beds-and-booths-block, .monthly-billing-account').parent().equalizer({

			columns: '> div .k-block',
			resizeable: true

		});


	});


})(window.jQuery);