<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KotakMasuk extends CI_Controller
{

    public function index()
    {
        $this->load->model('modelkontak');
        $data['row'] = $this->modelkontak->get();
        $this->load->view('admin/kotakmasuk', $data);
    }
}
