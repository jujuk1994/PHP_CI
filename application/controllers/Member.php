<?php

class Member extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('member_model');
        $data['tittle']='Daftar Member';
        $data['member']= $this->member_model->getAllMember();
        $this->load->view("_partials/header.php", $data);
        $this->load->view("_partials/sidebar.php");
        $this->load->view("_partials/navbar.php");
        $this->load->view('master/member', $data);
        $this->load->view("_partials/footer.php");
        $this->load->view("_partials/scrolltop.php");
        $this->load->view("_partials/modal.php");
        $this->load->view("_partials/js.php");
    }
}