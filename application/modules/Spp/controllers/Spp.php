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

        date_default_timezone_set('Asia/Jakarta');
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
        $cmb_alokasi = $this->input->post("cmb_alokasi");

        $data['nama_dept'] = $this->M_spp->namaDept($this->input->post("cmb_departemen"));
        // var_dump($data['nama_dept']['nama']);
        // die;

        if ($cmb_alokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
        } else if ($cmb_alokasi == "SITE") {
            // $text1 = $cmb_estate;
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
        } else if ($cmb_alokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
        } else if ($cmb_alokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
        }

        if ($this->session->userdata('status_lokasi') == "HO") {
            $dig_2 = "1";
        } else if ($this->session->userdata('status_lokasi') == "RO") {
            $dig_2 = "2";
        } else if ($this->session->userdata('status_lokasi') == "PKS") {
            $dig_2 = "3";
        } else if ($this->session->userdata('status_lokasi') == "SITE") {
            $dig_2 = "6";
        }

        $key = $dig_1 . $dig_2;

        $query_ppo = "SELECT MAX(SUBSTRING(noppotxt, 3)) as maxspp from ppo WHERE noppotxt LIKE '$key%'";
        $generate_ppo = $this->db_logistik_pt->query($query_ppo)->row();
        $noUrut = (int)($generate_ppo->maxspp);
        $noUrut++;
        $print = sprintf("%05s", $noUrut);

        if (empty($this->input->post('hidden_no_spp'))) {
            $nospp = $dig_1 . $dig_2 . $print;
        } else {
            $nospp = $this->input->post('hidden_no_spp');
        }

        $tgl_trm = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));

        $getmonth = date("m", strtotime($this->input->post('txt_tgl_ref')));
        $getyear = date("y", strtotime($this->input->post('txt_tgl_ref')));

        $noref = $text1 . "-" . $_POST['cmb_jenis_permohonan'] . "/" . $text2 . "/" . $getmonth . "/" . $getyear . "/" . $nospp;

        $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_ref')));
        $d_periode =  date("j", strtotime($periode));
        if ($d_periode >= 26) {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref') . " +1 month"));
        } else {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref')));
        }
        $thn = date("Y", strtotime($this->input->post('txt_tgl_ref')));

        $data_ppo = [
            'kpd' => 'Bagian Purchasing',
            'noppo' => $nospp,
            'noppotxt' => $nospp,
            'jenis' => $this->input->post('cmb_jenis_permohonan'),
            'tglppo' => date("Y-m-d H:i:s"),
            'tglppotxt' => date("Ymd"),
            'tgltrm' => $tgl_trm . date(" H:i:s"),
            'kodedept' => $this->input->post('txt_kode_departemen'),
            'namadept' => $data['nama_dept']['nama'],
            'noref' => $nospp,
            'noreftxt' => $noref,
            'tglref' => date("Y-m-d H:i:s"),
            'ket' => $this->input->post('txt_keterangan'),
            'no_acc' => 0,
            'ket_acc' => "",
            'pt' => $this->session->userdata('pt'),
            'kodept' => $this->session->userdata('kode_pt'),
            'periode' => $periode . date(" H:i:s"),
            'periodetxt' => $periodetxt,
            'thn' => $thn,
            'tglisi' => date("Y-m-d H:i:s"),
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
            'noppo' => $nospp,
            'noppotxt' => $nospp,
            'tglppo' => date("Y-m-d H:i:s"),
            'tglppotxt' => date("Ymd"),
            'kodedept' => $this->input->post('txt_kode_departemen'),
            'namadept' => $data['nama_dept']['nama'],
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
            'thn' => $thn,
            'ket' => $this->input->post('txt_keterangan_rinci'),
            'tglisi' => date("Y-m-d H:i:s"),
            'user' => $this->session->userdata('user'),
            'status' => 'DALAM PROSES',
            'status2' => '0',
            'ada_penawar' => '',
            'lokasi' => $this->session->userdata('status_lokasi'),
            'po' => "0",
            'saldo_po' => "0",
            'kode_budget' => "0",
            'grup' => "0",
            'main_acct' => "0",
            'nama_main' => "",
        ];


        if (empty($this->input->post('hidden_no_spp'))) {
            $data = $this->M_spp->saveSpp($data_ppo);
            $data2 = $this->M_spp->saveSpp2($data_item_ppo);
        } else {
            $data2 = $this->M_spp->saveSpp2($data_item_ppo);
        }

        // cari id terakhir
        $user = $this->session->userdata('user');
        $query_id = "SELECT MAX(id) as id_ppo FROM ppo WHERE user = '$user'";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $id_ppo = $generate_id->id_ppo;

        $query_id_item = "SELECT MAX(id) as id_item_ppo FROM item_ppo WHERE user = '$user'";
        $generate_id_item = $this->db_logistik_pt->query($query_id_item)->row();
        $id_item_ppo = $generate_id_item->id_item_ppo;

        $data_return = [
            'data' => $data,
            'data2' => $data2,
            'nospp' => $nospp,
            'noref' => $noref,
            'id_ppo' => $id_ppo,
            'id_item_ppo' => $id_item_ppo,
        ];
        echo json_encode($data_return);
    }

    public function cancelUpdateItemSpp()
    {
        $id_item_ppo = $this->input->post('hidden_id_item_ppo');
        $id_ppo = $this->input->post('hidden_id_ppo');

        $data = $this->M_spp->cancelUpdateItemSpp($id_item_ppo, $id_ppo);

        echo json_encode($data);
    }

    public function updateSpp()
    {
        $data['nama_dept'] = $this->M_spp->namaDept($this->input->post("cmb_departemen"));

        $tgl_trm = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));

        $id_ppo = $this->input->post('hidden_id_ppo');
        $id_item_ppo = $this->input->post('hidden_id_item_ppo');

        $data_ppo = [
            'jenis' => $this->input->post('cmb_jenis_permohonan'),
            'tgltrm' => $tgl_trm . date(" H:i:s"),
            'kodedept' => $this->input->post('txt_kode_departemen'),
            'namadept' => $data['nama_dept']['nama'],
            'ket' => $this->input->post('txt_keterangan'),
        ];

        $data_item_ppo = [
            'kodedept' => $this->input->post('txt_kode_departemen'),
            'namadept' => $data['nama_dept']['nama'],
            'kodebar' => $this->input->post('hidden_kode_brg'),
            'kodebartxt' => $this->input->post('hidden_kode_brg'),
            'nabar' => $this->input->post('hidden_nama_brg'),
            'sat' => $this->input->post('hidden_satuan_brg'),
            'qty' => $this->input->post('txt_qty'),
            'stok' => $this->input->post('hidden_stok'),
            'ket' => $this->input->post('txt_keterangan_rinci'),
        ];

        $data = $this->M_spp->updateSpp($id_ppo, $data_ppo);
        $data2 = $this->M_spp->updateSpp2($id_item_ppo, $data_item_ppo);

        echo json_encode($data, $data2);
    }

    public function deleteItemSpp()
    {
        $id_ppo = $this->input->post('hidden_id_ppo');
        $id_ppo_item = $this->input->post('hidden_id_item_ppo');

        // $get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
        // $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo', array('id' => $id_ppo_item))->row();

        // $no_ppo = $get_ppo->noppotxt;
        // $no_ref_ppo = $get_ppo->noreftxt;
        // $item_ppo_kodebar = $get_item_ppo->kodebartxt;
        // $item_ppo_nabar = $get_item_ppo->nabar;

        // $user = $this->session->userdata('user');
        // $ip = $this->input->ip_address();
        // $platform = $this->platform->agent();

        //$query = "INSERT INTO item_ppo_history SELECT null, a.*,'DATA SEBELUM DIHAPUS', '$user menghapus barang $item_ppo_kodebar|$item_ppo_nabar pada SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM item_ppo a WHERE a.id = $id_ppo_item";

        // $this->db_logistik_pt->query($query);
        // if ($this->db_logistik_pt->affected_rows() > 0) {
        //     $bool_itemppohistory = TRUE;
        // } else {
        //     $bool_itemppohistory = FALSE;
        // }

        $data = $this->db_logistik_pt->delete('item_ppo', array('id' => $id_ppo_item));

        // if ($bool_itemppohistory === TRUE && $data_delete === TRUE) {
        //     $data = TRUE;
        // } else {
        //     $data = FALSE;
        // }
        echo json_encode($data);
    }

    public function sppApproval()
    {
        $this->template->load('template', 'v_spp_approval');
    }
}

/* End of file Controllername.php */