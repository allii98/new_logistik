<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_spp');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        $this->db_logistik = $this->load->database('db_logistik', TRUE);

        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    //Start Data Table Server Side
    function get_data_barang()
    {
        $list = $this->M_spp->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="data_barang" name="data_barang"
                    data-nabar="' . $field->nabar . '" data-kodebar="' . $field->kodebar . '" data-satuan="' . $field->satuan . '"
                    data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
                        Pilih
                    </button>
                ';
            $row[] = $no;
            $row[] = $field->kodebar;
            $row[] = $field->nabar;
            $row[] = $field->grp;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_spp->count_all(),
            "recordsFiltered" => $this->M_spp->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    //End Start Data Table Server Side

    public function index()
    {
        $this->template->load('template', 'v_spp');
    }

    public function sppBaru()
    {
        $data['sesi_sl'] = $this->session->userdata('status_lokasi');

        $data['devisi'] = $this->M_spp->cariDevisi();

        $data['dept'] = $this->M_spp->dept();

        $this->template->load('template', 'v_input_spp', $data);
    }

    public function getStok()
    {
        $kd_bar = $this->input->get('kd_bar');
        // $data = $this->M_spp->getStok($kd_bar);
        // echo json_encode($data);

        // $id = $this->input->post('kodbar');

        // $ym_periode  = $this->session->userdata('ym_periode');
        $query_stockawal = "SELECT saldoawal_qty FROM stockawal WHERE kodebartxt = '$kd_bar'";
        // $query_stockawal = "SELECT saldoawal_qty FROM stockawal WHERE kodebartxt = '$kd_bar' AND tglinput = (SELECT MIN(tglinput) FROM stockawal WHERE kodebartxt = '$kd_bar')";

        $stockawal = $this->db_logistik_pt->query($query_stockawal)->row();

        if (empty($stockawal)) {
            $get_stockawal = "0";
        } else {
            $get_stockawal = $stockawal->saldoawal_qty;
        }

        $query_masuk = "SELECT SUM(qty) as stokmasuk FROM masukitem WHERE kodebartxt = '$kd_bar'";
        $summasuk = $this->db_logistik_pt->query($query_masuk)->row();

        $query_keluar = "SELECT SUM(qty2) as stokkeluar FROM keluarbrgitem WHERE kodebartxt = '$kd_bar'";
        $sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

        $data = ($get_stockawal + $summasuk->stokmasuk) - $sumkeluar->stokkeluar;
        // $data = $summasuk->stokmasuk - $sumkeluar->stokkeluar;
        echo json_encode($data);
    }

    public function sppApproval()
    {
        $this->template->load('template', 'v_spp_approval');
    }
}

/* End of file Controllername.php */