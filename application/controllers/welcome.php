<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		echo 'index...';
	}

	public function page($a='',$b='')
	{
		if($b) echo 'b = active | ';
		if($a) echo 'a = active | ';

		echo 'page_active | ';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */