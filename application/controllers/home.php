<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Front
{
     public function __construct()
     {
          parent::__construct();
     }

     public function index()
     {
          $render = array(
               'led'               => 'home/index',
               'component'         => avObject(array(
                   'top_header'     => '_frontend/_component/top_header',
                   'top_slider'     => '_frontend/_component/top_slider',
                   'main_control'   => '_frontend/_component/main_control',
                   'tab_control'   => '_frontend/_component/tab_control'
               ))
          );
          $this->render($render);
     }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */