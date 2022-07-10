<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelseni');
        $this->load->database();
    }

    public function index()
    {
        $this->load->library('session');
        $this->load->view('admin/admin');
    }

    public function simpansenibaru()
    {
        $this->load->library('session');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $image = $_FILES['image'];
        $video = $_FILES['video'];


        if (isset($_POST['submit'])) {

            $config['upload_path']        = 'assets/img';
            $config['allowed_types']    = 'jpg|png|gif|jpeg';
            $this->upload->initialize($config);

            if (!empty($_FILES['image'])) {
                $this->upload->do_upload('image');
                $image = $this->upload->data('file_name');
            }

            if (!empty($_FILES['video'])) {
                $this->upload->do_upload('video');
                $video = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'image' => $image,
            'kategori' => $kategori,
            'video' => $video

        );

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert" > 
        Upload Berhasil! Silahkan Cek di Karya Seni.</div>');
        $this->modelseni->simpansenibaru($data, 'tbl_seni');
        redirect('Admin');
    }
}
