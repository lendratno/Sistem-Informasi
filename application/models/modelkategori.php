<?php
defined('BASEPATH') or exit('No direct script access allowed');


class modelkategori extends CI_Model
{

    protected $table = 'tbl_seni';
    protected $allowFields = ['id', 'kategori'];


    public function seni()
    {
        return $this->db->get('tbl_seni');
    }

    public function getAllMenu()
    {
        return $this->db->get('tbl_seni')->result_array();
    }

    public function getSeni($limit, $start)
    {
        return $this->db->get('tbl_seni', $limit, $start)->result_array();
    }

    function semuaseni()
    {
        return $this->db->get('tbl_seni')->num_rows();
    }

    public function RumahAdat()
    {
        $names = array('Rumah Adat');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function Lagu()
    {
        $names = array('Lagu');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function AlatMusik($names = null)
    {
        $names = array('Alat Musik');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function SeniRupa($names = null)
    {
        $names = array('Seni Rupa');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function SeniSastraLisan($names = null)
    {
        $names = array('Seni Sastra Lisan');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function SeniTari($names = null)
    {
        $names = array('Seni Tari');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }

    public function SeniTeater($names = null)
    {
        $names = array('Seni Teater');
        $this->db->from('tbl_seni');
        if ($names != null) {
            $this->db->where_in('kategori', $names);
        }
        $query = $this->db->get();
        return $query;
    }
}
