<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer');
    }
}