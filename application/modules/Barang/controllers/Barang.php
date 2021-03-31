<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->model('M_coa');

        $db_pt = check_db_pt();
        $this->db_logistik = $this->load->database('db_logistik', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        $this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);
        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
        date_default_timezone_set('Asia/Jakarta');
    }

    function get_coa()
    {
        $list = $this->M_coa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $d->noac;
            $row[] = $d->nama;
            $row[] = $d->type;
            $row[] = $d->group;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_coa->count_all(),
            "recordsFiltered" => $this->M_coa->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    function get_ajax()
    {
        $list = $this->M_barang->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = '<button type="button" id="detail"  onClick="return false" class="btn btn-info waves-effect waves-light title="Detail">
                <i class="mdi mdi-alert-circle-outline"></i></span>
            </button>';
            $row[] = $no . ".";
            $row[] = $d->kodebar;
            $row[] = $d->nabar;
            $row[] = $d->grp;

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_barang->count_all(),
            "recordsFiltered" => $this->M_barang->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    public function index()
    {
        $this->template->load('template', 'v_barang');
    }

    function get_group_barang()
    {
        $no_coa = $this->input->post('no_coa');

        $query = "SELECT general FROM noac where noac = '$no_coa'";
        $data_general = $this->db_logistik->query($query)->row();

        $query = "SELECT nama FROM noac where noac = '$data_general->general'";
        $data = $this->db_logistik->query($query)->row();
        echo json_encode($data);
    }

    function get_satuan()
    {
        $query = "SELECT DISTINCT kode, satuan FROM satuan ORDER BY satuan ASC";
        $data = $this->db_logistik->query($query)->result();
        echo json_encode($data);
    }
}

/* End of file Barang.php */
