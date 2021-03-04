//Filtering The Product
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

// Adding Custom Poster to the Youtube Video
$(document).on('click','.js-videoPoster',function(e) {
  e.preventDefault();
  var poster = $(this);
  var wrapper = poster.closest('.js-videoWrapper');
  videoPlay(wrapper);
});

// Playing Youtube Video
function videoPlay(wrapper) {
  var iframe = wrapper.find('.js-videoIframe');
  var src = iframe.data('src');
  wrapper.addClass('videoWrapperActive');
  iframe.attr('src',src);
}



// Testimonials Sliders

// Variables
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

    // Custom Slider
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

    // Changing  the slide using keyboard arrows
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
