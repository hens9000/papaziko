



<div class="rblock_fluid" id="section-footer">
    <div class="rblock">
        <div class="row inside-footer">
            <div class="rs3">
                <h3>OFFICIAL STORE</h3>
                <p class="ptext">Thamrin City Lt. 3 Blok B 09a No.3 , Jl.Thamrin Boulevard – Kebon Kacang, Tanah Abang – Jakarta Pusat 10240 DKI Jakarta</p>
            </div>
            <div class="rs3">
                <h3>QUICK LINK</h3>
                <nav class="bottom-link">
                    <?php foreach($footer_quicklink as $r):?>
                    <a title="<?php echo $r->module_sub_name?>" href="<?php echo base_url('produk/catalog/'.$r->module_sub_id)?>"><?php echo strtoupper($r->module_sub_name)?></a>
                    <?php endforeach;?>
                </nav>
            </div>
            <div class="rs3">
                <h3>INFORMATION</h3>
                <nav class="bottom-link">
                    <a href="#">PANDUAN BERBELANJA</a>
                    <a href="#">SISTEM PEMBAYARAN</a>
                    <a href="#">ORDER GROSIR</a>
                    <a href="#">PAKET PENGIRIMAN</a>
                </nav>
            </div>
            <div class="rs3"></div>
        </div>
    </div>
</div>
<div class="rblock_fluid" id="section-copyright">
   <div class="copyright">&copy; www.pzhicostore.com - 2018 All Right Reserved</div>
</div>