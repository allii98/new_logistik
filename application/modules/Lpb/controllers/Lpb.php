<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpb extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_lpb');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        $this->db_logistik = $this->load->database('db_logistik', TRUE);

        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }

        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = 'Laporan Penerimaan Barang';
        $this->template->load('template', 'v_lpbIndex', $data);
    }

    public function input()
    {
        $data['title'] = 'Laporan Penerimaan Barang';

        $data['devisi'] = $this->M_lpb->cariDevisi();

        $this->template->load('template', 'v_lpbInput', $data);
    }

    public function get_data_po()
    {
        $list = $this->M_lpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="pilih_po" name="pilih_po"
                        data-nopotxt="' . $field->nopotxt . '" data-noreftxt="' . $field->noreftxt . '"
                        data-tglpo="' . $field->tglpo . '" data-kode_supply="' . $field->kode_supply . '"
                        data-nama_supply="' . $field->nama_supply . '"
                        data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">Pilih
                        </button>';
            $row[] = $no;
            $row[] = $field->tglpo;
            $row[] = $field->nopotxt;
            $row[] = $field->noreftxt;
            $row[] = $field->nama_supply;
            $row[] = $field->lokasi_beli;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_lpb->count_all(),
            "recordsFiltered" => $this->M_lpb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
