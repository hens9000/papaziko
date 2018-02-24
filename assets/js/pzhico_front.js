(function(){

    function resizeCover()
    {
        var wdt=Number($('.produk-box>.cover').width()),wdh=Math.ceil(wdt*1.3);
        $('.produk-box>.cover').height(wdh);
    }
    resizeCover();

    $(window).resize(function(){
        resizeCover();
    })

})(jQuery)