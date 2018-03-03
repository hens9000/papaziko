

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

                <div class="faq-box">
                    <h3 class="questions">Periksa Alamat URL</h3>
                    <p class="answers">Biasakan untuk melihat URL yang tertera di browser adalah alamat situs yang benar, untuk mencegah scrum dan pengambilan informasi data pengguna untuk mencegah penyalahgunaan account oleh pihak yang tidak bertanggung jawab.</p>
                </div>
                <div class="faq-box">
                    <h3 class="questions">Periksa Alamat URL</h3>
                    <p class="answers">Biasakan untuk melihat URL yang tertera di browser adalah alamat situs yang benar, untuk mencegah scrum dan pengambilan informasi data pengguna untuk mencegah penyalahgunaan account oleh pihak yang tidak bertanggung jawab.</p>
                </div>
            </div>
            
        </div>
    </div>






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
                        <label class="label-title" for="form-namaDepan">Nama Depan</label>
                    </div>
                    <div class="rs4 rx4">
                        <select name="" id="">
                            <option value="-1">-- Pilih Salah Satu --</option>
                            <option value="1">Jakarta Barat</option>
                        </select>
                    </div>
                    <div class="rs4 rx4">
                        <input type="text" name="" id="form-namaDepan">
                    </div>
                </div>

            </div>
            <div class="rs6">
                
            </div>
        </div>
    </div>


</div>






<?php
$this->load->view($component->footer);
?>