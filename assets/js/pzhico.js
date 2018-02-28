
    var xbase=$('meta[name="base"]').attr('content');
    

    function see(a)
    {
        console.log(a)
    }

    function base(a){
        return xbase+a;
    }

    function xparse(a){return JSON.parse(a)}

    function getToken(a=5)
    {
        return Math.random().toString(36).replace(/[^a-zA-Z0-9]+/g,'').substr(1,a);
    }

    function mainControl(q)
    {
        q('.noAction').bind('click',function(e){e.preventDefault()})

        q('.inp-number').bind('change',function(){
            var t=q(this),mx=t.attr('max'),mn=t.attr('min'),vl=Number(t.val());
            if(vl>mx) t.val(mx);
            if(vl<=0) t.val(1);
        })
    }

    function imageUpload(a)
    {
        var x=$.extend({
            progress:false,
        },a);

        
    }

    function slider(a)
    {
        var x=$.extend({

        },a);
        var min=0,max=x.sliderItem;
    }


    $.fn.zicoSlider = function(a){
        return $(this).each(function(){
                      
            var x=$.extend({
                speed:1000,
                delay:8000,
                current:0,
                item:false,
                effect:'easeOutQuad'
            },a);

            if(x.item && typeof(x.item) == 'object')
            {
                var t=$(this),mn=0,mx=x.item.length,cn=x.current,nx,run,sn='slider'+getToken(),sni=sn+'-item';

                //create slider temporary
                var slider_temp = `<div id="`+sn+`" style="position:absolute;top:0;left:0;right:0;bottom:0;background-color:#333;overflow:hidden;"></div>`;                
                
                t.css('position','relative');
                t.prepend(slider_temp);

                $.each(x.item,function(a,b){
                    var dataSliderItem = base('assets/slider/'+b);
                    var slider_item = `<div class="`+sni+`" style="position:absolute;top:-100px;left:-100px;right:-100px;bottom:-100px;background-repeat:no-repeat;display:none;background-size:cover;background-position:center;background-image:url('`+dataSliderItem+`')"></div>`;
                    $('#'+sn).append(slider_item);
                })
                $('.'+sni).eq(cn).show();

                run = setInterval(function(){
                    nx = cn+1;
                    if(nx>=mx) nx=0;
                    
                    $('.'+sni).eq(nx).fadeIn(x.speed);
                    $('.'+sni).eq(cn).fadeOut(x.speed);
                    
                    $('.'+sni).eq(nx).animate({'top':'0','right':'0','left':'0','bottom':'0'},2000,x.effect)             
                    $('.'+sni).eq(cn).animate({'top':'-100px','right':'-100px','left':'-100px','bottom':'-100px'},500);

                    cn = nx;
                },x.delay);
            }
            
        })
    }
