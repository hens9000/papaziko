<?php

class Member extends Back
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function add()
    {
        
    }

    // called by add via post
    public function add_processing()
    {
        $post = avObject($this->input->post());

        $setup_insert_member = array(
            'nama_depan' => $post->nama_depan,
            'nama_belakang' => $post->nama_belakang,
            'email' => $post->email,
            'username' => $post->username,
            'password' => $post->password,
            'flag' => 2, // 1=active,2=disable,3=block
        );
        $insert_member = $this->mdl->insert('member',$setup_insert_member);
        redirect(base_url('member/verified'));
    }

    // called from add_processing
    public function verified()
    {

    }
}
