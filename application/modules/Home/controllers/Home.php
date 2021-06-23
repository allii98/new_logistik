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

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        $this->db_logistik = $this->load->database('db_logistik', TRUE);

        $this->load->model('M_home');
    }


    public function index()
    {
        $data = [
            'tittle' => "Dashboard"
        ];
        $data['count'] = $this->M_home->count_spp();

        $data['pt_login'] = $this->session->userdata('app_pt');
        $data['pt_periode'] = $this->session->userdata('ym_periode');

        // var_dump($data['count_spp']);
        // die;

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
