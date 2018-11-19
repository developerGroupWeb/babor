/**$(function(){

    var slider         = $('#slider');
    var slideContainer = slider.find('.slides');
    var slides         = slideContainer.find('.slide');

    var currentSlide = 1;
    var width = 720;

    var interval;

    function startSlider(){

        setInterval(function(){

            ({

                    marginLeft: '-='+width

                }, 1000,
                function () {
                    currentSlide++;
                    if (currentSlide === slides.length){
                        currentSlide = 1;
                        slideContainer.css('margin-left', 0);
                    }
                }
            );

        }, 3000);
    }

    startSlider();



});**/