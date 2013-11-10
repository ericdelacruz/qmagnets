// JavaScript Document
$(document).ready(function() {

$(".invoice").fancybox({'width' : 750,'height' : 625,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});
$(".product").fancybox({'width' : 750,'height' : 625,'autoScale' : false,'type' : 'iframe','centerOnScroll' : false});
$(".refer").fancybox({'width' : 570,'height' : 215,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});
$(".post").fancybox({'width' : 450,'height' : 290,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});
$("input .book").fancybox({'href' : 'book-pop2.htm','width' : 500,'height' : 320,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});
$(".facebox").fancybox({'width' : 450,'height' : 400,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});

$(".forgot").fancybox({'width' : 430,'height' : 125,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});

$("input.preview").fancybox({'href' : 'preview-pop.htm','width' : 980,'height' : 650,'autoScale' : false,'type' : 'iframe','centerOnScroll' : true});
$(".innerfade").innerfade({'animationtype':'fade','speed':1000,'type':'sequence','timeout':3000});
$(".imagepup").fancybox({'type'	: 'image','titlePosition' : 'over','titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {return '';}});
});

$(".scroll").click(function(event){
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
});

$('select.changeable').change(function() {$('.chil').hide(); $('#' + $(this).find('option:selected').attr('value')).show();
});

$('.test-link').click(function(){$('.testimonial').animate({right:'0px'})});
$('.test_close').click(function(){$('.testimonial').animate({right:'-380px'},'fast')});


$('.date-list a').click(function(){$('.date-list a').removeClass('act'),$(this).addClass('act')});
$("div.call").makeFloat({x:"current",y:"current"});

$(function(){$(".main-scroll").jCarouselLite({vertical:false,btnPrev:".prev1",btnNext:".next1",hoverPause:true,visible:3,auto:2000,speed:800});});
$(function(){$(".services-scroll").jCarouselLite({vertical:false,btnPrev:".prev2",btnNext:".next2",hoverPause:true,visible:4,auto:2000,speed:800});});
$(function(){$(".services-scroll-s").jCarouselLite({vertical:false,btnPrev:".prev3",btnNext:".next3",hoverPause:true,visible:1,auto:2000,speed:800});});



$(function(){$(".testimonial-scroll").jCarouselLite({vertical:true,hoverPause:true,visible:1,auto:2000,speed:800});});
$(function(){$(".left-scroll1").jCarouselLite({vertical:true,hoverPause:true,visible:5,auto:2000,speed:400});});


$(document).ready(function(){
	// hide #back-top first
	$("#back-top").hide();	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});

