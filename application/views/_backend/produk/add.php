
<h1>Form Input Produk</h1>
<?php echo form_open(base_url('pzhico/produk/add_control'))?>
<table>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td><?php echo form_input('nama_produk','','class="text-input required"')?></td>
    </tr>
    <tr>
        <td>Produk Kategori</td>
        <td>:</td>
        <td><?php echo form_dropdown('kategori_produk',$data_kategori,'-1','class="select-input nozerounder"')?></td>
    </tr>
    <tr>
        <td>Produk Type</td>
        <td>:</td>
        <td><?php echo form_dropdown('type_produk',$data_type,'-1','class="select-input nozerounder"')?></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?php echo form_input('harga_produk','','class="text-input numbered"')?></td>
    </tr>
    <tr>
        <td>Minimal Order</td>
        <td>:</td>
        <td><input type="number" min="1" max="20" name="order_minimum" value="1" class="text-input inp-number"></td>
    </tr>
    <tr>
        <td>Warna Dominan</td>
        <td>:</td>
        <td>
            <button class="noAction addProdukColor">Add Color</button>
            <div id="color_input_bar"></div>
        </td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td><?php echo form_submit('','Tambahkan Produk')?></td>
    </tr>
</table>
<?php echo form_close()?>