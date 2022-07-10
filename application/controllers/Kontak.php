<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelkontak');
        $this->load->database();
    }

    public function index()
    {

        $this->load->view('layout/kontak');
    }

    public function kotakmasuk()
    {
        $this->load->library('session');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan
        );

        $this->modelkontak->kotakmasuk($data, 'tbl_tanggapan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" > 
            Terima Kasih telah mengirimkan pendapatmu! :)</div>');
        redirect('Terkirim');
    }
}
