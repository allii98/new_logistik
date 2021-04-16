<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bkb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bkb');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        // $this->db_logistik = $this->load->database('db_logistik', TRUE);

        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }

        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
            'title' => 'Bukti Keluar Barang'
        ];

        $this->template->load('template', 'v_indexbkb', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Bukti Keluar Barang'
        ];

        $this->template->load('template', 'v_inputbkb', $data);
    }

    //Start Data Table Server Side
    function get_data_bpb()
    {
        $list = $this->M_bkb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="data_bpb" name="data_bpb"
                    data-nobpb="' . $field->nobpb . '" data-norefbpb="' . $field->norefbpb . '"
                    data-keperluan="' . $field->keperluan . '" data-bag="' . $field->bag . '"
                    data-user="' . $field->user . '"
                    data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
                        Pilih
                    </button>
                ';
            $row[] = $no;
            $row[] = $field->nobpb;
            $row[] = $field->norefbpb;
            $row[] = $field->keperluan;
            $row[] = $field->bag;
            $row[] = $field->tglbpb;
            $row[] = $field->user;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_bkb->count_all(),
            "recordsFiltered" => $this->M_bkb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    //End Start Data Table Server Side
}
