<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
    public function index()
    {
        $cust_name = $_POST['customer_name'];
        $in_data = [
            'name' => $cust_name,
        ];
        $this->ordersmodel->addOrdersID($in_data);
        $data = [
            'resto_name' => "Informatika Ramen",
            'title' => "Katalog Menu",
            'order_id' => $this->ordersmodel->getOrdersId($cust_name),
            'foods' => $this->foodsmodel->getFoods()->result(),
        ];
        // $this->session->set_userdata()
        $this->load->view('customer/templates/header', $data);
        $this->load->view('customer/test', $data);
        $this->load->view('customer/templates/footer');
    }

    public function ordered()
    {
        $this->ordersmodel->addOrders();
    }
}
