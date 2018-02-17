
    function see(a)
    {
        console.log(a)
    }

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