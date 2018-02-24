

<?php
$this->load->view($component->top_header);
$this->load->view($component->top_slider);
$this->load->view($component->main_control);
$this->load->view($component->tab_control);
?>









<div class="rblock_fluid" id="box-list-produk">
     <div class="rblock">
          <div class="row">

                <?php for($i=1;$i<8;$i++):?>
               <div class="rm3 rs6">
                    <div class="produk-box">
                         <div class="cover" style="background-image:url('<?php echo base_url('temp/produk/jaket_'.rand(1,8).'.jpg')?>')"></div>
                         <div class="content">
                              <h3>Parfume Metafora 2 Tipe Warna</h3>
                              <div class="reviews">
                                    <i class="fa fa-eye"></i> 225 Review &bull; 
                                    <i class="fa fa-comments-o"></i> 23 Feedback
                                </div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                              <div class="pricing"><span>Rp</span> <?php echo rupiah_format(rand(300000,1500000))?>,-</div>
                              <div class="tocart">
                                  <input type="text" class="tocart-qty" value="1" maxlength="2">
                                  <div class="tocart-btn">
                                      <i class="fa fa-cart-plus"></i> Beli Produk
                                  </div>
                              </div>
                         </div>
                    </div>
               </div>
                <?php endfor;?>

          </div>
     </div>
</div>