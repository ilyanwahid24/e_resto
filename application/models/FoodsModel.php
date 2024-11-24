<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FoodsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //Foods Management
    public function getFoods()
    {
        return $this->db->get('foods');
    }

    public function foodsWhere($where)
    {
        return $this->db->get_where('foods', $where);
    }

    // public function simpanBuku($data = null)
    // {
    //     $this->db->insert('buku', $data);
    // }

    public function updateFoods($data = null, $where = null)
    {
        $this->db->update('foods', $data, $where);
    }

    public function hapusFoods($where = null)
    {
        $this->db->delete('foods', $where);
    }
}
