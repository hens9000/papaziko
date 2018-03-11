(function(){

    trackMenu();
    
    function resizeCover()
    {
        var wdt=Number($('.produk-box>.cover').width()),wdh=Math.ceil(wdt*1.5);
        $('.produk-box>.cover').height(wdt);
    }
    resizeCover();

    $('#section-slider').zicoSlider({
        item:['slider_05.jpg','slider_06.jpg','slider_07.jpg'],
    });

    $('[tab-id]').eq(0).show();
    $('[go-tab]').eq(0).addClass('active');
    $('[go-tab]').bind('click',function(e){
        e.preventDefault();
        $('[go-tab]').removeClass('active');
        $(this).addClass('active');
        $('[tab-id]').hide();
        console.log()
        $('[tab-id="'+$(this).attr('go-tab')+'"]').show();
    })

    $('.track-menu').bind('click',function(){
        $('.section-sub_menu').hide();
        if($(this).attr('ftarget'))
        {
            var tg=$(this).attr('ftarget');
            $('[gtarget="'+tg+'"]').show();
        }
    })

    function stickyProdukBox(){        
        if($(window).width() >= 769){
            $('.sticky-kid-produk_box').stick_in_parent().on("sticky_kit:stick",function(e){
                var $this = $(e.target).parent(),
                    top = $this.next().height() - $(this).height() - 10;                
                $this.css({'top':'top'});    
            });
        }
        else{
            $('.sticky-kid-produk_box').trigger("sticky_kit:detach");
        }    
    }
    stickyProdukBox();

    $(window).resize(function(){
        resizeCover()
        stickyProdukBox()
    })

})(jQuery)