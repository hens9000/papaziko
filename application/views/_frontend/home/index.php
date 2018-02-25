

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
            <?php for($i=1;$i<=20;$i++) $this->load->view($component->produk_box); ?>
        </div>
    </div>
    

</div>








<div class="rblock_fluid" id="section-content">

<div class="rblock">
    <h2 class="sub-title">
        PANDUAN <span class="ltx2">BERBELANJA</span>
        <div class="spark_a">
            <div class="spark_b"></div>
        </div>
    </h2>
    <div class="row">
        <!-- content here -->
        <div class="rs9">
            <div class="bullets_list">
                <h3>Periksa Alamat URL</h3>
                <p>Biasakan untuk melihat URL yang tertera di browser adalah alamat situs yang benar, untuk mencegah scrum dan pengambilan informasi data pengguna untuk mencegah penyalahgunaan account oleh pihak yang tidak bertanggung jawab.</p>
            </div>
            <div class="bullets_list">
                <h3>Periksa Alamat URL</h3>
                <p>Biasakan untuk melihat URL yang tertera di browser adalah alamat situs yang benar, untuk mencegah scrum dan pengambilan informasi data pengguna untuk mencegah penyalahgunaan account oleh pihak yang tidak bertanggung jawab.</p>
            </div>
        </div>
        
    </div>
</div>


</div>






<?php
$this->load->view($component->footer);
?>