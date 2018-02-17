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
          );
          $this->render($render);
     }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */