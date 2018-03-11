

<?php
$this->load->view($component->top_header);
//$this->load->view($component->top_slider);
$this->load->view($component->main_control);
//$this->load->view($component->tab_control);
?>








<?php for($t=1;$t<6;$t++):?>
<div class="rblock_fluid" id="section-content">

    <div class="rblock">        
        <div class="row">
            <div style="position:relative;" class="rs4 sticky-kid-produk_box">
                <h2 class="sub-title">
                    ACCESORIES <span class="ltx2">STORE</span>
                </h2>
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</P>
            </div>
            <div class="rs8">
                <div class="row">
                    <?php for($i=1;$i<=6;$i++) $this->load->view($component->produk_box); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>






<?php $this->load->view($component->temp_artikel); ?>
<?php $this->load->view($component->temp_faq); ?>
<?php $this->load->view($component->form_register_member); ?>






<?php
$this->load->view($component->footer);
?>