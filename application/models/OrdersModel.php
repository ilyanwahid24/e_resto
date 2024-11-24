<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrdersModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function addOrdersID($data)
    {
        $this->db->insert('customers', $data);
    }
    public function addOrders($data = null)
    {
        $this->db->insert('orders', $data);
    }
    public function getOrdersID($name)
    {
        $this->db->get_where('customers', array('name' => $name));
    }
}
