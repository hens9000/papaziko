
     <?php echo form_open(base_url('pzhico/produk/add_control'))?>
     <table>
          <tr>
               <td>Nama Produk</td>
               <td>:</td>
               <td><?php echo form_input('nama_produk','','class="text-input required"')?></td>
          </tr>
          <tr>
               <td colspan="2"></td>
               <td><?php echo form_submit('','Submit Form')?></td>
          </tr>
     </table>
     <?php echo form_close()?>