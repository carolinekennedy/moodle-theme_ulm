$(document).ready(function() {
	$('.searchbtn i').on('click', function(){
        $('#searchdropdown').toggleClass('open');
        $('#searchdropdown input').focus();
	});
	if ($('.maintenancewarning').length > 0) {
    	$('body').css('padding-top', '30px');
	}
    $('header.menu').sticky({topSpacing:0});

    var r= $('<div class="fadeout"><div class="expandsum"></div></div>');
    if ($('.coursebox .summary').length > 0) {
    	$(".coursebox .summary .no-overflow").append(r);
    }
	$('.expandsum').on('click', function(){
	    $(this).closest('.coursebox .summary').toggleClass('open');
	});
});

var timer = setInterval(function() {
    if ($('.path-grade-report-grader .gradeparent .floater.heading:not(.sideonly)').length > 0) {
        $('.path-grade-report-grader .gradeparent .floater.heading:not(.sideonly)').clone().removeAttr('style').addClass('clone').appendTo('.gradereport-grader-table');
        $('.path-grade-report-grader .gradeparent .floater.heading.clone').sticky({topSpacing: 60});
        $(window).on('scroll', function() {
            var el = $('.path-grade-report-grader .gradeparent .floater.heading.clone');
            var tablebottom = $('.gradereport-grader-table').offset().top + $('.gradereport-grader-table').height();
            if (el.offset().top >= (tablebottom - 29)) {
                $('.path-grade-report-grader .gradeparent .floater.heading.clone').unstick();
            } else {
                if ($('.path-grade-report-grader .gradeparent .floater.heading.clone').parent('.sticky-wrapper').length == 0) {
                    $('.path-grade-report-grader .gradeparent .floater.heading.clone').sticky({topSpacing: 60});
                }
            }
        });
        clearInterval(timer);
    }
}, 20);