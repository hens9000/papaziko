

<?php
$this->load->view($component->top_header);
$this->load->view($component->top_slider);
$this->load->view($component->main_control);
$this->load->view($component->tab_control);
?>









<div class="rblock_fluid" id="section-content">
     <div class="rblock">
        <h2 class="sub-title">
            ACCESORIES <span class="ltx2">STORE</span>
            <div class="spark_a">
                <div class="spark_b"></div>
            </div>
        </h2>
          <div class="row">

                <?php for($i=1;$i<=8;$i++):?>
               <div class="rl3 rm4 rs6 rx12">
                    <div class="produk-box">
                         <div class="cover" style="background-image:url('<?php echo base_url('temp/produk/jaket_'.$i.'.jpg')?>')">
                            <div class="produk-info">
                                <h3>Parfume Metafora 2 Tipe Warna</h3>
                                <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <div class="reviews">
                                    <i class="fa fa-eye"></i> 225 Review <br>
                                    <i class="fa fa-comments-o"></i> 23 Feedback
                                </div>
                                <div class="pricing"><span>Rp</span> <?php echo rupiah_format(rand(300000,1500000))?>,-</div>
                                <div class="tocart">
                                    <input type="text" class="tocart-qty" value="1" maxlength="2">
                                    <div class="tocart-btn">
                                        <i class="fa fa-cart-plus"></i> Beli Produk
                                    </div>
                                </div>
                            </div>
                            <div class="produk-caps">
                                <span>Parfume Metafora 2 Tipe Warna</span>
                            </div>
                        </div>
                    </div>
               </div>
                <?php endfor;?>
          </div>
     </div>


    <div class="rblock">
        <h2 class="sub-title">
            PARFUME <span class="ltx2">STORE</span>
            <div class="spark_a">
                <div class="spark_b"></div>
            </div>
        </h2>
          <div class="row">

                <?php for($i=1;$i<=6;$i++):?>
               <div class="rl3 rm4 rs6 rx12">
                    <div class="produk-box">
                         <div class="cover" style="background-image:url('<?php echo base_url('temp/produk/parfum_'.$i.'.jpg')?>')">
                            <div class="produk-info">
                                <h3>Parfume Metafora 2 Tipe Warna</h3>
                                <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <div class="reviews">
                                    <i class="fa fa-eye"></i> 225 Review <br>
                                    <i class="fa fa-comments-o"></i> 23 Feedback
                                </div>
                                <div class="pricing"><span>Rp</span> <?php echo rupiah_format(rand(300000,1500000))?>,-</div>
                                <div class="tocart">
                                    <input type="text" class="tocart-qty" value="1" maxlength="2">
                                    <div class="tocart-btn">
                                        <i class="fa fa-cart-plus"></i> Beli Produk
                                    </div>
                                </div>
                            </div>
                            <div class="produk-caps">
                                <span>Parfume Metafora 2 Tipe Warna</span>
                            </div>
                        </div>
                    </div>
               </div>
                <?php endfor;?>
          </div>
     </div>

</div>










<div class="rblock_fluid" id="section-footer">
    <div class="rblock">
        <div class="row inside-footer">
            <div class="rs3">
                <h3>OFFICIAL STORE</h3>
                <p class="ptext">Thamrin City Lt. 3 Blok B 09a No.3 , Jl.Thamrin Boulevard – Kebon Kacang, Tanah Abang – Jakarta Pusat 10240 DKI Jakarta</p>
            </div>
            <div class="rs3">
                <h3>QUICK LINK</h3>
            </div>
            <div class="rs3">
                <h3>INFORMATION</h3>
            </div>
            <div class="rs3"></div>
        </div>
    </div>
</div>
<div class="rblock_fluid" id="section-copyright">
   <div class="copyright">&copy; www.pzhicostore.com - 2018 All Right Reserved</div>
</div>