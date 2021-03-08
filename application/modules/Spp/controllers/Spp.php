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

        // $ym_periode  = $this->session->userdata('ym_periode');

        $stockawal = $this->M_spp->stokAwal($kd_bar);

        if (empty($stockawal)) {
            $get_stockawal = "0";
        } else {
            $get_stockawal = $stockawal->saldoawal_qty;
        }

        $summasuk = $this->M_spp->sumMasuk($kd_bar);

        $sumkeluar = $this->M_spp->sumKeluar($kd_bar);

        $data = ($get_stockawal + $summasuk->stokmasuk) - $sumkeluar->stokkeluar;

        echo json_encode($data);
    }

    public function saveSpp()
    {
        $data_ppo = [
            'kpd' => 'Bagian Purchasing',
            'noppo' => $no_spp,
            'noppotxt' => $no_spp,
            'jenis' => $this->input->post('jenis_spp'),
            'tglppo' => $tgl_ppo . date("H:i:s"),
            'tglppotxt' => $tgl_ppo_txt,
            'tgltrm' => $tgl_trm . date(" H:i:s"),
            'kode_dept' => $this->input->post('txt_kode_departemen'),
            'nama_dept' => $this->input->post('cmb_departemen'),
            'noref' => $nospp,
            'noreftxt' => $noref,
            'tglref' => $tgl_ref . date("H:i:s"),
            'ket' => $tgl_ref . date("txt_keterangan"),
            'no_acc' => 0,
            'ket_acc' => "",
            'kode_pt' => $this->session->userdata('kode_pt'),
            'kode_pt' => $this->session->userdata('pt'),
            'periode' => $periode . date(" H:i:s"),
            'periodetxt' => $periodetxt,
            'thn' => $thn,
            'tglisi' => $tgl_ref . " " . date("H:i:s"),
            'user' => $this->session->userdata('user'),
            'status' => 'DALAM PROSES',
            'status2' => '0',
            'lokasi' => $this->session->userdata('status_lokasi'),
            'po' => 0,
            'kode_budget' => 0,
            'grup' => 0,
            'main_acct' => 0,
            'nama_main' => 0,
        ];

        $data_item_ppo = [
            'noppo' => $no_spp,
            'noppotxt' => $no_spp,
            'tglppo' => $tgl_ppo . date(" H:i:s"),
            'tglppotxt' => $tgl_ppo_txt,
            'kodedept' => $this->input->post('txt_kode_departemen'),
            'namadept' => $this->input->post('cmb_departemen'),
            'noref' => $nospp,
            'noreftxt' => $noref,
            'kodebar' => $this->input->post('hidden_kode_brg'),
            'kodebartxt' => $this->input->post('hidden_kode_brg'),
            'nabar' => $this->input->post('hidden_nama_brg'),
            'sat' => $this->input->post('hidden_satuan_brg'),
            'qty' => $this->input->post('txt_qty'),
            'qty2' => NULL,
            'stok' => $this->input->post('hidden_stok'),
            'harga' => "0",
            'jumharga' => "0",
            'kodept' => $this->session->userdata('kode_pt'),
            'namapt' => $this->session->userdata('pt'),
            'periode' => $periode . date(" H:i:s"),
            'periodetxt' => $periode . date(" H:i:s"),
        ];




        $data = [
            'devisi' => $this->input->post('devisi'),
            'jenis_spp' => $this->input->post('jenis_spp')

        ];

        $data = $this->M_spp->saveSpp($data);
        echo json_encode($data);
    }

    public function sppApproval()
    {
        $this->template->load('template', 'v_spp_approval');
    }
}

/* End of file Controllername.php */