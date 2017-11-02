$(document).ready(function () {


    //Hamburger Menu
    $('.stackMenu a').click(function (event) {
        $('.rw').toggleClass('active');
        event.preventDefault();
    });

    $('.fixedMenu .stackMenu a').click(function (event) {
        $(this).children('.rw').toggleClass('active');
        event.preventDefault();
    });

    $('.navigation a').click(function (e) {
        e.preventDefault();
        $('.navigation a').removeClass('active');
        $(this).addClass('active');
    });



    $('.media').mouseenter(function () {
        $(this).find('div').css({
            display: 'block'
        });
        $(this).slick({
            autoplay: true,
            arrows: false,
            pauseOnFocus: true,
            dots: true,
            dotsClass: 'timeSlide',
            pauseOnDotsHover: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1
        });


    });

    $('.media').mouseleave(function () {

        if ($(this).hasClass('slick-initialized')) {
            $(this).slick('unslick');
        };
        $('.hide').css({
            display: 'none'
        })


    });


    var $items = $('.card');
    var $btns = $('.nav-unsorted li a').click(function () {
        if (this.id == 'all') {
            $items.show().fadeIn(450);
        } else {
            var $el = $('.' + this.id).show().fadeIn(450);
            $items.not($el).hide().fadeOut(450);
        }
        $btns.removeClass('active');
        $(this).addClass('active');
    })


    //MODAL
    $("#modalSearch").animatedModal({
        animatedIn: 'slideInDown',
        animatedOut: 'slideOutUp',
        color: '#295252d6',
        beforeOpen: function () {

            var children = $(".thumb");
            var index = 0;

            function addClassNextChild() {
                if (index == children.length) return;
                children.eq(index++).show().velocity("transition.expandIn", {
                    opacity: 1,
                    stagger: 250
                });
                window.setTimeout(addClassNextChild, 200);
            }

            addClassNextChild();

        },
        afterClose: function () {
            $(".thumb").hide();

        }
    });

    //MODAL TALENT PROFILE

    var moreData = $('.moreBtn');

    moreData.click(function () {
        $(".modalData").fadeIn({
            queue: false,
            duration: 'slow'
        });
        $('.modalData, .modalOverlay').animate({
            opacity: '1',
        }, 'slow');

        $('.modalData, .modalOverlay').css({
            zIndex: '99'
        });

    });

    $('#closeData').click(function () {
        $(".modalData").fadeOut({
            queue: false,
            duration: 'slow'
        });
        $('.modalData, .modalOverlay').animate({
            opacity: '0',
        }, 'slow');

        $('.modalData, .modalOverlay').css({
            zIndex: '-99'
        });

    });



    $(window).scroll(function () {
        if ($(window).scrollTop() >= 400) {
            $('.fixedMenu').show();
        } else {
            $('.fixedMenu').hide();
        }
    });





    /*$('.media').mouseenter(function(){
        $(this).children('div').animate({
            opacity: '1'
        },200 )
    });
    
    $('.media').mouseleave(function(){
        $(this).children('div').animate({
            opacity: '0'
        },200 )
    });*/




    /*function slideShow()
{
    window.setInterval("changeImage()", 500);
}

function changeImage()
{   
var imgSrcs = ["images//traps//1.jpg",
    "images//traps//2.jpg",
    "images//traps//3.jpg",
    "images//traps//4.jpg"]
var i = Math.floor((Math.random() * 3));
var element = document.getElementById("slideShow");
element.src= imgSrcs[i];
}*/



    // FOOTER

    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
    }

});



(function ($) {

    $.fn.animatedModal = function (options) {
        var modal = $(this);

        //Defaults
        var settings = $.extend({
            modalTarget: 'animatedModal',
            position: 'fixed',
            width: '100%',
            height: '100%',
            top: '0px',
            left: '0px',
            zIndexIn: '9999',
            zIndexOut: '-9999',
            color: '#39BEB9',
            opacityIn: '1',
            opacityOut: '0',
            animatedIn: 'zoomIn',
            animatedOut: 'zoomOut',
            animationDuration: '.6s',
            overflow: 'auto',
            // Callbacks
            beforeOpen: function () {},
            afterOpen: function () {},
            beforeClose: function () {},
            afterClose: function () {}



        }, options);

        var closeBt = $('.close-' + settings.modalTarget);

        //console.log(closeBt)

        var href = $(modal).attr('href'),
            id = $('body').find('#' + settings.modalTarget),
            idConc = '#' + id.attr('id');
        //console.log(idConc);
        // Default Classes
        id.addClass('animated');
        id.addClass(settings.modalTarget + '-off');

        //Init styles
        var initStyles = {
            'position': settings.position,
            'width': settings.width,
            'height': settings.height,
            'top': settings.top,
            'left': settings.left,
            'background-color': settings.color,
            'overflow-y': settings.overflow,
            'z-index': settings.zIndexOut,
            'opacity': settings.opacityOut,
            '-webkit-animation-duration': settings.animationDuration
        };
        //Apply stles
        id.css(initStyles);

        modal.click(function (event) {
            event.preventDefault();
            $('body, html').css({
                'overflow': 'hidden'
            });
            if (href == idConc) {
                if (id.hasClass(settings.modalTarget + '-off')) {
                    id.removeClass(settings.animatedOut);
                    id.removeClass(settings.modalTarget + '-off');
                    id.addClass(settings.modalTarget + '-on');
                }

                if (id.hasClass(settings.modalTarget + '-on')) {
                    settings.beforeOpen();
                    id.css({
                        'opacity': settings.opacityIn,
                        'z-index': settings.zIndexIn
                    });
                    id.addClass(settings.animatedIn);
                    id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterOpen);
                };
            }
        });



        closeBt.click(function (event) {
            event.preventDefault();
            $('body, html').css({
                'overflow': 'auto'
            });

            settings.beforeClose(); //beforeClose
            if (id.hasClass(settings.modalTarget + '-on')) {
                id.removeClass(settings.modalTarget + '-on');
                id.addClass(settings.modalTarget + '-off');
            }

            if (id.hasClass(settings.modalTarget + '-off')) {
                id.removeClass(settings.animatedIn);
                id.addClass(settings.animatedOut);
                id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterClose);
            };

        });

        function afterClose() {
            id.css({
                'z-index': settings.zIndexOut
            });
            settings.afterClose(); //afterClose
        }

        function afterOpen() {
            settings.afterOpen(); //afterOpen
        }

    }; // End animatedModal.js

}(jQuery));
