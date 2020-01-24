<?php

class Home extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tittle']='Dashboard';

        $this->load->view("_partials/header.php", $data);
        $this->load->view("_partials/sidebar.php");
        $this->load->view("_partials/navbar.php");
        $this->load->view('home/index');
        $this->load->view("_partials/footer.php");
        $this->load->view("_partials/scrolltop.php");
        $this->load->view("_partials/modal.php");
        $this->load->view("_partials/js.php");
    }
}