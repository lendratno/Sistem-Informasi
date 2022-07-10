<?php
defined('BASEPATH') or exit('No direct script access allowed');


class modelkontak extends CI_Model
{

    protected $table = 'tbl_tanggapan';
    protected $allowFields = ['id', 'nama', 'email', 'pesan', 'subjek'];


    public function kontak()
    {
        return $this->db->get('tbl_tanggapan');
    }

    public function kotakmasuk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getAllMenu()
    {
        return $this->db->get('tbl_tanggapan')->result_array();
    }

    public function getTanggapan($limit, $start)
    {
        return $this->db->get('tbl_tanggapan', $limit, $start)->result_array();
    }

    function jumlahdata()
    {
        return $this->db->get('tbl_tanggapan')->num_rows();
    }

    public function get($id = null)
    {
        $this->db->from('tbl_tanggapan');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
