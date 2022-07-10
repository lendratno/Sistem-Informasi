<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RumahAdat extends CI_Controller
{

    public function index()
    {
        $this->load->model('modelkategori');
        $data['row'] = $this->modelkategori->RumahAdat();

        $this->load->library('pagination');

        $this->load->view('layout/karyaseni.php', $data);
    }
}
