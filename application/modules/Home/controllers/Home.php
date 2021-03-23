<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }


    public function index()
    {
        $data = [
            'tittle' => "Dashboard"
        ];
        $data['jumlahpo'] = $this->db->query("SELECT * FROM po")->num_rows();
        $this->template->load('template', 'dashboard', $data);
    }
    public function tes()
    {
        $data = [
            'tittle' => "Dashboard"
        ];
        $this->template->load('template', 'v_contohTabel', $data);
    }
}

/* End of file Home.php */
