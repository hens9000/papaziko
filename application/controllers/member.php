<?php

class Member extends Front
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $render = array(
            'css' => 'nita-forms',
            'led'               => 'member/page_index',
            'component'         => $this->_component(array(
                '_member_resister_page' => 'form_register_member'
            )),
       );
       $this->render($render);
    }
}