

<?php
$this->load->view($component->top_header);
//$this->load->view($component->top_slider);
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
            <?php for($i=1;$i<=4;$i++) $this->load->view($component->produk_box); ?>
        </div>
    </div>
    

</div>






<?php $this->load->view($component->temp_artikel); ?>
<?php $this->load->view($component->temp_faq); ?>
<?php $this->load->view($component->form_register_member); ?>






<?php
$this->load->view($component->footer);
?>