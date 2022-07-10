<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryaSeniCont extends CI_Controller
{

    public function index()
    {
        $this->load->model('modelseni');
        $data['row'] = $this->modelseni->get();



        $this->load->library('pagination');
        $this->load->model('modelkategori');


        $config['base_url'] = 'http://localhost/SISeniBudaya/index/';
        $config['total_rows'] = $this->modelkategori->semuaseni();
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['per_page'] = 40;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tbl_seni'] = $this->modelkategori->getSeni($config['per_page'], $data['start']);

        $data['tbl_seni'] = $this->db->get('tbl_seni', $config['per_page'])->result_array();
        $data['tbl_seni'] = $this->modelkategori->getSeni($config['per_page'], $data['start']);


        $this->load->view('layout/karyaseni.php', $data);
    }
}
