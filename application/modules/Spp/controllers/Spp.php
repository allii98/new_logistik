<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
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
        $this->template->load('template', 'v_spp');
    }

    public function sppBaru()
    {
        $this->template->load('template', 'v_input_spp');
    }

    public function sppApproval()
    {
        $this->template->load('template', 'v_spp_approval');
    }
}

/* End of file Controllername.php */