//filter products
var $mediaElements = $(".cd-item");
$(".filter_link").click(function(e) {
  e.preventDefault();
  var filterVal = $(this).data("filter");
  if (filterVal === "all") {
    $mediaElements.slideDown("slow");
  } else {
    $mediaElements
      .hide("slow")
      .filter("." + filterVal)
      .slideDown("slow");
  }
});
//filter products
$(document).on('click','.js-videoPoster',function(e) {
  //Ð¾Ñ‚Ð¼ÐµÐ½ÑÐµÐ¼ ÑÑ‚Ð°Ð½Ð´Ð°Ñ€Ñ‚Ð½Ð¾Ðµ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ðµ button
  e.preventDefault();
  var poster = $(this);
  // Ð¸Ñ‰ÐµÐ¼ Ñ€Ð¾Ð´Ð¸Ñ‚ÐµÐ»Ñ Ð±Ð»Ð¸Ð¶Ð°Ð¹ÑˆÐµÐ³Ð¾ Ð¿Ð¾ ÐºÐ»Ð°ÑÑÑƒ
  var wrapper = poster.closest('.js-videoWrapper');
  videoPlay(wrapper);
});

//Ð²Ð¾Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´Ð¸Ð¼ Ð²Ð¸Ð´ÐµÐ¾, Ð¿Ñ€Ð¸ ÑÑ‚Ð¾Ð¼ ÑÐºÑ€Ñ‹Ð²Ð°Ñ Ð¿Ð¾ÑÑ‚ÐµÑ€
function videoPlay(wrapper) {
  var iframe = wrapper.find('.js-videoIframe');
  // Ð‘ÐµÑ€ÐµÐ¼ ÑÑÑ‹Ð»ÐºÑƒ Ð²Ð¸Ð´ÐµÐ¾ Ð¸Ð· data
  var src = iframe.data('src');
  // ÑÐºÑ€Ñ‹Ð²Ð°ÐµÐ¼ Ð¿Ð¾ÑÑ‚ÐµÑ€
  wrapper.addClass('videoWrapperActive');
  // Ð¿Ð¾Ð´ÑÑ‚Ð°Ð²Ð»ÑÐµÐ¼ Ð² src Ð¿Ð°Ñ€Ð°Ð¼ÐµÑ‚Ñ€ Ð¸Ð· data
  iframe.attr('src',src);
}



// vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })

		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})

		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;

				touchPosDiff = touchStartPos - touchEndPos;

				console.log(touchPosDiff);
				console.log(touchStartPos);
				console.log(touchEndPos);


				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}

		})
}

$(document).ready(function(){

	// Lift card and show stats on Mouseover
	$('#product-card').hover(function(){
			$(this).addClass('animate');
			$('div.carouselNext, div.carouselPrev').addClass('visible');
		 }, function(){
			$(this).removeClass('animate');
			$('div.carouselNext, div.carouselPrev').removeClass('visible');
	});

	// Flip card to the back side
	$('#view_details').click(function(){
		$('div.carouselNext, div.carouselPrev').removeClass('visible');
		$('#product-card').addClass('flip-10');
		setTimeout(function(){
			$('#product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
				$('#product-front, #product-front div.shadow').hide();
			});
		}, 50);

		setTimeout(function(){
			$('#product-card').removeClass('flip90').addClass('flip190');
			$('#product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
			setTimeout(function(){
				$('#product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();
				setTimeout(function(){
					$('#product-card').css('transition', '100ms ease-out');
					$('#cx, #cy').addClass('s1');
					setTimeout(function(){$('#cx, #cy').addClass('s2');}, 100);
					setTimeout(function(){$('#cx, #cy').addClass('s3');}, 200);
					$('div.carouselNext, div.carouselPrev').addClass('visible');
				}, 100);
			}, 100);
		}, 150);
	});

	// Flip card back to the front side
	$('#flip-back').click(function(){

		$('#product-card').removeClass('flip180').addClass('flip190');
		setTimeout(function(){
			$('#product-card').removeClass('flip190').addClass('flip90');

			$('#product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
				$('#product-back, #product-back div.shadow').hide();
				$('#product-front, #product-front div.shadow').show();
			});
		}, 50);

		setTimeout(function(){
			$('#product-card').removeClass('flip90').addClass('flip-10');
			$('#product-front div.shadow').show().fadeTo( 100 , 0);
			setTimeout(function(){
				$('#product-front div.shadow').hide();
				$('#product-card').removeClass('flip-10').css('transition', '100ms ease-out');
				$('#cx, #cy').removeClass('s1 s2 s3');
			}, 100);
		}, 150);

	});


	/* ----  Image Gallery Carousel   ---- */

	var carousel = $('#carousel ul');
	var carouselSlideWidth = 335;
	var carouselWidth = 0;
	var isAnimating = false;

	// building the width of the casousel
	$('#carousel li').each(function(){
		carouselWidth += carouselSlideWidth;
	});
	$(carousel).css('width', carouselWidth);

	// Load Next Image
	$('div.carouselNext').on('click', function(){
		var currentLeft = Math.abs(parseInt($(carousel).css("left")));
		var newLeft = currentLeft + carouselSlideWidth;
		if(newLeft == carouselWidth || isAnimating === true){return;}
		$('#carousel ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
		isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);
	});

	// Load Previous Image
	$('div.carouselPrev').on('click', function(){
		var currentLeft = Math.abs(parseInt($(carousel).css("left")));
		var newLeft = currentLeft - carouselSlideWidth;
		if(newLeft < 0  || isAnimating === true){return;}
		$('#carousel ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
	    isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);
	});
});
