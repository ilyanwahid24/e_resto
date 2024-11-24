<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()

    {
        $data = [
            'resto_name' => "Informatika Ramen",
            'title' => "Katalog Menu",
        ];
        $this->load->view('customer/templates/header', $data);
        $this->load->view('customer/dashboard');
        $this->load->view('customer/templates/footer');
    }
    // public function orders($foods = NULL) {}
}
