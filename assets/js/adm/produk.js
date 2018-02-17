    

    (function(q){
        var current_ruouter = window.location.href;       

        function produk_add()
        {
            var key = getToken();
            function addProdukColor()
            {
                var htmlInpColor = `<div class="produkColorInputBar"><input type="text" name="color[]"><button class="removeProdukColor">Remove</button></div>`;
                q('#color_input_bar').append(htmlInpColor)
                addProdukColor_reaction();
            }
            function addProdukColor_reaction()
            {
                q('.removeProdukColor').bind('click',function(e){
                    e.preventDefault();
                    q(this).parents('.produkColorInputBar').remove();
                })
            }
            q('.addProdukColor').bind('click',addProdukColor)
        }

        function produk_tablist()
        {
            see('remember2');
        }

        
        if(current_ruouter.match('/pzhico/produk/add'))
        {
            produk_add()
        }

        if(current_ruouter.match('/pzhico/produk$') || current_ruouter.match('/pzhico/produk/tablist'))
        {
            produk_tablist();
        }

        mainControl(q)

    })(jQuery)