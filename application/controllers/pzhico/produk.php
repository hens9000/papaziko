<?php

class Produk extends Back
{
     public function __construct()
     {
          parent::__construct();
     }

     public function index()
     {
          echo 'asd';
     }

     public function view()
     {

     }

     public function tablist()
     {
          echo 'asd';
     }

     public function add()
     {
          $render = array(
               'led'     => 'produk/add',
          );
          $this->render($render);
     }

     public function add_control()
     {
          $post = avObject($this->input->post());
          pre($post);
     }

     public function update()
     {

     }

     public function update_control()
     {

     }
}