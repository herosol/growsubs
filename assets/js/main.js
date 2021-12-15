$(document).ready(function() {
    // ======progress bar==========
    $(".circle_percent").each(function() {
        var $this = $(this),
            $dataV = $this.data("percent"),
            $dataDeg = $dataV * 3.6,
            $round = $this.find(".round_per");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
        $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
        $this.prop('Counter', 0).animate({Counter: $dataV},
        {
            duration: 2000, 
            easing: 'swing', 
            step: function (now) {
                $this.find(".percent_text").text(Math.ceil(now)+"%");
            }
        });
        if($dataV >= 51){
            $round.css("transform", "rotate(" + 360 + "deg)");
            setTimeout(function(){
                $this.addClass("percent_more");
            },1000);
            setTimeout(function(){
                $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
            },1000);
        } 
    });
    /*========== Toggle ==========*/
    $(document).on('click', '.toggle', function() {
        $(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$("[nav]").toggleClass("active");
    });
    $(document).on('click', '[nav] > ul > li > a', function() {
        $(".toggle").removeClass("active");
		$("html").removeClass("flow");
		$("[nav]").removeClass("active");
    });
    /*----- Card Sec Bar -----*/
  $(document).on('click', '.cardSecBar .lblBtn', function() {
    var checkbox = $(this).parents('.lblBtn').find('input[type=radio]');
    checkbox.prop("checked", !checkbox.prop("checked"));
    $('.cardSec').slideDown('3000');
    $('.paypalSec').slideUp('3000');
});
$(document).on('click', '.paypalSecBar .lblBtn', function() {
    var checkbox = $(this).parents('.lblBtn').find('input[type=radio]');
    checkbox.prop("checked", !checkbox.prop("checked"));
    $('.paypalSec').slideDown('3000');
    $('.cardSec').slideUp('3000');
});
    $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            enableDrag: false,
            thumbMargin: 4,
            thumbItem: 4
        });

    /*_____ FAQ's _____*/
	$(document).on("click", ".faqBlk > h5", function() {
		$(".faqBlk")
			.not(
				$(this)
					.parent()
					.toggleClass("active")
			)
			.removeClass("active");
		$(".faqBlk > .txt")
			.not(
				$(this)
					.parent()
					.children(".txt")
					.slideToggle()
			)
			.slideUp();
	});
	$(".faqLst > .faqBlk:nth-child(1)").addClass("active");
    $(document).on("focus", ".txtGrp .txtBox:not(select)", function() {
		$(this)
			.parents(".txtGrp:first")
			.find("label:first")
			.addClass("move");
	});

	$(document).on("blur", ".txtGrp .txtBox:not(select)", function() {
		if (this.value == "")
			$(this)
				.parents(".txtGrp:first")
				.find("label:first")
				.removeClass("move");
	});

	$('.txtGrp .txtBox:not(select)').each(function(e) {
		if (this.value != "")
			$(this)
				.parents(".txtGrp:first")
				.find("label:first")
				.addClass("move");
	});

    /*========== File Upload ==========*/
    /*_____ Upload File _____*/
    var imgFile;
    $(document).on('click', '.uploadImg', function() {
        imgFile = $(this).attr('data-image-src');
        $(this).parents('form').find('.uploadFile').trigger('click');
    });
    $(document).on('change', '.uploadFile', function() {
        // alert(imgFile);
        var file = $(this).val();
        $('.uploadImg').html(file);
    });


    
    /*========== Dropdown ==========*/
    $(document).on('click', '.dropBtn', function(e) {
        e.stopPropagation();
        var $this = $(this).parent().children('.dropCnt');
        $('.dropCnt').not($this).removeClass('active');
        var $parent = $(this).parent('.dropDown');
        $parent.children('.dropCnt').toggleClass('active');
    });
    $(document).on('click', '.dropCnt', function(e) {
        e.stopPropagation();
    });
    $(document).on('click', function() {
        $('.dropCnt').removeClass('active');
    });
    /*----- video button -----*/


var vid = $('video');
    // var vid = document.getElementById("bannerVid");
    $(document).on('click', '.fa-play', function() {
      
        $(this).parents().children(vid).trigger('play');

        $(this).removeClass('fa-play').addClass('fa-pause');
    });
    $(document).on('click', '.fa-pause', function() {
        $(this).parents().children(vid).trigger('pause');

        $(this).removeClass('fa-pause').addClass('fa-play');
    });


    /*========== Popup ==========*/
    $(document).on('click', '.popBtn', function() {
        var popUp = $(this).data('popup');
        $('body').addClass('flow');
        $('.popup[data-popup= ' + popUp + ']').fadeIn();
    });
    $(document).on('click', '.crosBtn', function() {
        var popUp = $(this).parents('.popup').data('popup');
        $('body').removeClass('flow');
        $('.popup[data-popup= ' + popUp + ']').fadeOut();
    });

$('.datepicker').datepicker({
            dateFormat: 'MM dd, yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:2060'
        });

        // Timepicker Js
        $('.timepicker').timepicki({
            reset: true
        });

        // Select Js
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
        
        // Data Table Js
        var sortOrder = ($('th.sortBy').index()>-1)?$('th.sortBy').index():0;
        $('.dataTable').DataTable({
            'order': [[
                sortOrder, 'asc'
            ]],
            'pageLength': 25,
            columnDefs: [{
                orderable: false,
                targets: 'no-sort'
            }],
            responsive: true
        });
        // rateYo
        $('.ratestars').rateYo({
            rating: 5.0,
            fullStar: true,
            readOnly: true,
            normalFill: '#ddd',
            ratedFill: '#f6a623',
            starWidth: '14px',
            spacing: '2px'
        });

        $('#owl-folio').owlCarousel({
            autoplay: true,
            nav: true,
            navText: ['<i class="fi-arrow-left"></i>','<i class="fi-arrow-right"></i>'],
            loop: true,
            margin: 20,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            items: 1
        });

        



        var offSet = $('body').offset().top;
        var offSet = offSet + 250;
        $(window).scroll(function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos >= offSet) {
               $('.bannerDots a').addClass('allbannerDots'); 
            } else {
                $('.bannerDots a').removeClass('allbannerDots'); 
            }
        });

       
        

});


function textAreaAdjust(o) {
    o.style.height = '1px';
    o.style.height = (25 + o.scrollHeight) + 'px';
}

// smooth scroling effect================
// $("html").easeScroll();

/*========== Page Loader ==========*/
$(window).on('load', function() {
    $('.loader').delay(700).fadeOut();
    $('#pageloader').delay(1200).fadeOut('slow');
});

