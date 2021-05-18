<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pp');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data = [
            'title' => 'Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_indexpp', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_inputpp', $data);
    }

    public function list_po()
    {

        $list = $this->M_pp->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {

            $row = array();

            $ref_po = $d->noreftxt;

            // untuk sum harga dan qty pada item_Po
            $query_harga_po = "SELECT SUM(harga*qty) AS hargapo FROM item_po WHERE noref = '$ref_po'";
            $get_harga_po = $this->db_logistik_pt->query($query_harga_po)->row();
            // endsum

            // untuk sum jumlah bpo pada item_po
            $query_jumlah_bpo = "SELECT SUM(JUMLAHBPO) AS jumlahbpo FROM item_po where noref = '$ref_po'";
            $get_jumlah_bpo = $this->db_logistik_pt->query($query_jumlah_bpo)->row();
            // endsum

            // sum kasir bayar pada tabel pp
            $query_jumlah_sudah_bayar = "SELECT SUM(kasir_bayar) AS kasir_bayar FROM pp where ref_po = '$ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();
            // endsum

            //kurs
            $query_kurs = "SELECT DISTINCT kurs FROM item_po WHERE nopo = '$d->nopotxt' AND noref = '$ref_po'";
            $get_kurs = $this->db_logistik_pt->query($query_kurs)->row();



            $row[] = $d->tglpo;
            $row[] = $d->noreftxt;
            $row[] = $d->nopotxt;
            $row[] = $d->kode_supply;
            $row[] = $d->nama_supply;
            $row[] = $d->bayar;
            $row[] = number_format($get_harga_po->hargapo);
            $row[] = number_format($get_jumlah_bpo->jumlahbpo);
            $row[] = number_format($get_jumlah_sudah_bayar->kasir_bayar);
            $row[] = number_format(($d->totalbayar) - $get_jumlah_sudah_bayar->kasir_bayar);
            $row[] = $get_kurs->kurs;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_pp->count_all(),
            "recordsFiltered" => $this->M_pp->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
}
