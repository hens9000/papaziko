<?php

class PZ_Controller extends CI_Controller{}

class Front extends CI_Controller
{
    	public function __construct()
	{
		parent::__construct();
	}
	
	public function render($r=array())
	{		
		$r['css']  = grab('css',$r,array(
			'bootstrap-grid.min',
			'font-awesome.min',
			'pzhico.min'
		));
		$r['jsh']  = grab('jsh',$r,array(
			'jquery-2.0.3.min',
			'jquery.easing.1.3.min',
			'pzhico'
		));
		$r['jsf']  = grab('jsf',$r,array(
			'pzhico_front'
		));
		$r['led']  = grab('led',$r);

		$r['meta'] = grab('meta',$r,array(
			'charset'			=> 'UTF-8',
			'viewport'		=> 'width=device-width, initial-scale=1.0',
			'description'		=> '',
			'keywords'		=> '',
			'author' 			=> 'Pzhico Excellent Indonesia',
			'base'			=> base_url(),
			'language'		=> 'indonesia',
			'revisit-after'	=> '',
			'webcrawlers'		=> 'all',
			'spiders'			=> 'all',
			'robots'			=> 'index,follow',  
			'googlebot-news'	=> 'index,follow',
			'googlebot' 		=> 'index,follow',
			'geo.country'		=> 'id',
			'geo.placename'	=> 'Indonesia',
			'twitter:site'		=> '',
			'content_category'	=> '',
			'content_location'	=> 'Indonesia',
			'content_author'	=> 'pzhico store',
			'hashtag'			=> '#pzhicoStore'
		));		

		$global = array(
			'template'      => 'screenfront_normal',
			'title' 		 => 'Pzhico Store',
			'shortcut_icon' => '',
		);
		$render = array_merge($global,$r);		
		$this->load->view($render['template'],$render);
	}
}



class Back extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array(
			'form'
		));
		$this->load->model('generate_input');
	}
	
	public function render($r=array())
	{		
		$r['css']  = grab('css',$r);
		$r['jsh']  = grab('jsh',$r,array(
			'jquery-2.0.3.min',
			'pzhico'
		));
		$r['jsf']  = grab('jsf',$r);
		$r['led']  = grab('led',$r);

		$global = array(
			'template'      => 'screenback_normal',
			'title' 		 => 'Pzhico Store Backend',
		);
		$render = array_merge($global,$r);		
		$this->load->view($render['template'],$render);
	}
}