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

        $this->db_logistik_center = $this->load->database('db_logistik_center', TRUE);

        $this->load->model('M_home');
        $this->load->model('M_bpb_mutasi');
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

    public function get_data_mutasi()
    {
        $list = $this->M_home->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $row = array();
            $row[] = $no;
            $row[] = date('d-m-Y', strtotime($field->tgl));
            $row[] = $field->no_mutasi;
            $row[] = $field->pt;
            $row[] = $field->devisi_mutasi;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_home->count_all(),
            "recordsFiltered" => $this->M_home->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function get_data_bpb_mutasi()
    {
        $list = $this->M_bpb_mutasi->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $row = array();
            $row[] = $no;
            $row[] = date('d-m-Y', strtotime($field->tglbpb));
            $row[] = $field->norefbpb;
            $row[] = $field->bag;
            $row[] = $field->keperluan;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_bpb_mutasi->count_all(),
            "recordsFiltered" => $this->M_bpb_mutasi->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}

/* End of file Home.php */
