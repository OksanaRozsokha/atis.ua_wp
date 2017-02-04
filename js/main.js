
$(document).ready(function () {

    //popup
    let popap = $('.wrap-popup');
   $('.popup-btn').on('click', function () {
       popap.fadeIn();
       $('body').addClass('active');
   });
    $('#close-popup').on('click', function () {
       popap.fadeOut();
       $('body').removeClass('active');
    });

    //menu
    let flag = true;
    $('.menu-btn').on('click', function () {
        if(flag) {
            flag= false;
            $('.menu-wrap').slideToggle(function () {
                flag = true;
            });
            $('body').toggleClass('active');
        }

    });

    //slider
    $('.slider-list').slick({
        dots: true,
        initialSlide: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    arrows: false
                }
            }
        ]
    });



});


