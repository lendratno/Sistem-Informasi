<?php
defined('BASEPATH') or exit('No direct script access allowed');


class modelseni extends CI_Model
{

    protected $table = 'tbl_seni';
    protected $allowFields = ['id', 'nama', 'deskripsi', 'image', 'kategori', 'video', 'sumber'];


    public function seni()
    {
        return $this->db->get('tbl_seni');
    }

    public function simpansenibaru($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getAllMenu()
    {
        return $this->db->get('tbl_seni')->result_array();
    }

    public function getSeni($limit, $start)
    {
        return $this->db->get('tbl_seni', $limit, $start)->result_array();
    }

    function jumlahdata()
    {
        return $this->db->get('tbl_seni')->num_rows();
    }

    public function get($id = null)
    {
        $this->db->from('tbl_seni');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
