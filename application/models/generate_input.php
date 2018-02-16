<?php

class Generate_input extends Zico
{
     private function _create_selectable($a,$b='',$c='-1')
     {
          $x = array( $c => '-- '.$b.' --');
          foreach($a as $r){$x[$r->sel_id] = $r->sel_name;}
          return $x;
     }

     public function get_produk_kategori($id = '-1')
     {
          $select = 'a.id as sel_id,a.name as sel_name';
          $load_data = $this->filter('produk_kategori a',array('a.flag' => 1),$select)->result();          
          return $this->_create_selectable($load_data,'Pilih Produk');
     }

     public function get_produk_type($id = '-1')
     {
          $select = 'a.id as sel_id,a.name as sel_name';
          $load_data = $this->filter('produk_type a',array('a.flag' => 1),$select)->result();
          return $this->_create_selectable($load_data,'Pilih Type');
     }
}