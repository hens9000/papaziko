<?php

class Home extends Front
{
     public function __construct()
     {
          parent::__construct();
     }

     public function index()
     {
          $render = array(
               'led'     => 'home/index'
          );
          $this->render($render);
     }
}