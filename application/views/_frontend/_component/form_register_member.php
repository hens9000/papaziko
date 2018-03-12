
<div class="rblock_fluid" id="section-content">
    <div class="rblock">
        <h2 class="sub-title">
            Registrasi <span class="ltx2">Members</span>
            <div class="spark_a">
                <div class="spark_b"></div>
            </div>
        </h2>

        <div class="row isForms">
            <div class="rs6">
                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-namaDepan">Nama Depan</label>
                    </div>
                    <div class="rs8 rx8">
                        <input type="text" name="" id="form-namaDepan">
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-namaBelakang">Nama Belakang</label>
                    </div>
                    <div class="rs8 rx8">
                        <input type="text" name="" id="form-namaBelakang">
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-phone">No. Telpon</label>
                    </div>
                    <div class="rs8 rx8">
                        <input type="text" name="" id="form-phone">
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-email">Email</label>
                    </div>
                    <div class="rs8 rx8">
                        <input type="text" name="" id="form-email">
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-password">Kata Sandi</label>
                    </div>
                    <div class="rs8 rx8 isParents">
                        <input class="inps-fields" type="password" name="" id="form-password">
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                        <label class="label-title" for="form-password2">Ulangi Kata Sandi</label>
                    </div>
                    <div class="rs8 rx8">
                        <input class="inps-fields" type="password" name="" id="form-password2">
                    </div>
                </div>



                <div class="row">
                    <div class="input-box">
                        <div class="ib-label">Field Name</div>
                        <div class="ib-inps">
                            <div class="ibi-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="ibi-field">
                                <!-- <input type="text" name="sampel" class="ibif-inps" value="" placeholder="Data Sementara" style=""> -->
                                <select name="asdas" class="ibif-inps selc" value="">
                                    <option value="-1">sampel</option>
                                    <option value="1">kalera</option>
                                </select>
                            </div>
                            <div class="ibi-report">
                                <div class="ibir-circles">
                                    <div class="ibirc-note">Data yang anda masukkan udah terdaftar di database kami</div>
                                </div>
                            </div>
                        </div>
                        <div class="ib-note">harap masukkan data dengan benar</div>
                    </div>
                </div>

                <div class="row form-list">
                    <div class="rs4 rx4">
                       
                    </div>
                    <div class="rs8 rx8">
                        <button class="inps-btn inps-btn-submit"><i class="fa fa-send"></i> Registrasi Sekarang</button>
                    </div>
                </div>

            </div>
            <div class="rs6">
                
            </div>
        </div>
    </div>
</div>

<script>
function reformatFormSelect()
{
    $('select').each(function(a,b){
        function actOptionBar(g=true){
            var k=p.find('.sub-list-bar'),s=100;
            (g)?k.slideUp(s):k.slideDown(s);
            cd=!g;
        }
        var t=$(this),h,v,o,p=t.parent(),cd=false,pt=t.find('option');
        v=(b.getAttribute('value') == null || b.getAttribute('value') == "")?t.find('option').eq(0).text():t.find('option[value="'+b.getAttribute('value')+'"]').text();
        o='<div class="sub-list-option-box">';
        for(var y=0;y<30;y++){
            o+='<div class="sub-list-option-box-item" item-value="'+y+'">asdasds</div>';
        }
        pt.each(function(l,m){
            o+='<div class="sub-list-option-box-item" item-value="'+$(m).attr('value')+'">'+$(m).text()+'</div>';
        })
        o+='</div>';
        h=`<div class="sub-list-master"><input type="text" class="ibif-inps nita-select" readonly="readonly" value="`+v+`"><div class="sub-list-bar"><div class="sub-list-option">`+o+`</div></div></div>`;
        t.hide();
        p.append(h);
        
        p.find('.sub-list-option').slimScroll({
            height: '164px',
            railVisible: false,
            alwaysVisible: false,
            color:'rgba(0,0,0,0)'
        });

        p.find('.nita-select').bind('click',function(){
            actOptionBar(cd)
        })

        p.find('.sub-list-master').bind('mouseleave',function(){
            actOptionBar()
        })

        $('.sub-list-option-box-item').bind('click',function(){
            console.log($(this).attr('item-value'));
        })
    })
}
reformatFormSelect()
</script>