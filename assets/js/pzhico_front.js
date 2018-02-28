(function(){

    trackMenu();
    
    function resizeCover()
    {
        var wdt=Number($('.produk-box>.cover').width()),wdh=Math.ceil(wdt*1.5);
        $('.produk-box>.cover').height(wdh);
    }
    resizeCover();

    $('#section-slider').zicoSlider({
        item:['slider_05.jpg','slider_06.jpg','slider_07.jpg'],
    });

    $(window).resize(function(){resizeCover()})

})(jQuery)