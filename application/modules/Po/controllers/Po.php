<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Po extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_po');
        $db_pt = check_db_pt();

        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
    }

    function get_ajax()
    {
        $list = $this->M_po->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $d->kode;
            $row[] = $d->supplier;
            $row[] = $d->usaha;
            // $row[] = '<img src=" ' . site_url('assets/uploads/tiket/' . $d->foto) . '" width="60px">';
            $row[] = '<button type="button" class="btn btn-success" style="margin:2px;" title="Pilih" id="pilih" data-id="' . $d->id . '" data-kode="' . $d->kode . '" data-supplier="' . $d->supplier . '" > Pilih</button>';




            // add html for action

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_po->count_all(),
            "recordsFiltered" => $this->M_po->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    public function index()
    {
        $data = [
            'title' => "Permohonan Order",
        ];
        $this->template->load('template', 'v_dataPo', $data);
    }

    public function input()
    {
        $data = [
            'title' => "Permohonan Order",
        ];
        $this->template->load('template', 'v_inputPo', $data);
    }

    public function getPo()
    {
        $data = $this->M_po->get_supplier();
        echo json_encode($data);
    }

    public function getSpp()
    {
        $data = $this->M_po->get_spp();
        echo json_encode($data);
    }

    public function getPoo()
    {
        $data = $this->M_po->get_sup();
        echo json_encode($data);
    }

    public function getid()
    {
        $data = $this->M_po->get_id();
        echo json_encode($data);
    }
    public function getitem()
    {
        $data = $this->M_po->get_itemppo();
        echo json_encode($data);
    }

    public function save()
    {

        $lokasibuatspp = substr($this->input->post('hidden_no_ref'), 0, 3);
        switch ($lokasibuatspp) {
            case 'PST': // HO
                $lokasispp = 1;
                break;
            case 'ROM': // RO
                $lokasispp = 2;
                break;
            case 'EST': // SITE
                $lokasispp = 3;
                break;
            case 'FAC': // PKS
                $lokasispp = 6;
                break;
            default:
                break;
        }

        $lokasibuatpo = $this->session->userdata('status_lokasi');
        switch ($lokasibuatpo) {
            case 'HO':
                $lokasipo = 1;
                $kodepo = "BWJ";
                break;
            case 'RO':
                $lokasipo = 2;
                $kodepo = "PKY";
                break;
            case 'SITE':
                $lokasipo = 3;
                $kodepo = "SWJ";
                break;
            case 'PKS':
                $lokasipo = 6;
                $kodepo = "SWJ";
                break;
            default:
                break;
        }

        $key = $lokasispp . $lokasipo;

        $query_po = "SELECT MAX(SUBSTRING(nopotxt, 3)) as maxpo from po WHERE nopotxt LIKE '$key%'";
        $generate_po = $this->db_logistik_pt->query($query_po)->row();
        $noUrut = (int)($generate_po->maxpo);
        $noUrut++;
        $print = sprintf("%05s", $noUrut);

        if (empty($this->input->post('hidden_no_po'))) {
            $no_po = $lokasispp . $lokasipo . $print;
        } else {
            $no_po = $this->input->post('hidden_no_po');
        }

        $query_id = "SELECT MAX(id)+1 as no_id FROM po";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $no_id = $generate_id->no_id;
        if (empty($no_id)) {
            $no_id = 1;
        }

        $query_id_item = "SELECT MAX(id)+1 as no_id_item FROM item_po";
        $generate_id_item = $this->db_logistik_pt->query($query_id_item)->row();
        $no_id_item = $generate_id_item->no_id_item;
        if (empty($no_id_item)) {
            $no_id_item = 1;
        }

        $hidden_jenis_spp = $this->input->post('hidden_jenis_spp');

        if (!empty($this->input->post('hidden_no_ref_po'))) {
            $norefpo = $this->input->post('hidden_no_ref_po');
        } else {
            // Est/swj/PO-Lokal/11/18/00034 atau Fac/swj/jkt/12/18/6100005 atau Est-POA/swj/jkt/12/18/6100004 atau Est2/swj/jkt/01/16/7100029
            if ($hidden_jenis_spp == "SPPA") {
                $norefpo = $lokasibuatspp . "/" . $kodepo . "/POA/JKT/" . date('m') . "/" . date('y') . "/" . $no_po;
            } else if ($hidden_jenis_spp == "SPPI") {
                $norefpo = $lokasibuatspp . "/" . $kodepo . "/PO-Lokal/JKT/" . date('m') . "/" . date('y') . "/" . $no_po;
            } else if ($hidden_jenis_spp == "SPPK") {
                $norefpo = $lokasibuatspp . "/" . $kodepo . "/PO-Khusus/JKT/" . date('m') . "/" . date('y') . "/" . $no_po;
            } else {
                $norefpo = $lokasibuatspp . "/" . $kodepo . "/JKT/" . date('m') . "/" . date('y') . "/" . $no_po;
            }
        }

        $tgl_po = date("Y-m-d", strtotime($this->input->post('txt_tgl_po')));
        $tgl_po_txt = date("Ymd", strtotime($this->input->post('txt_tgl_po')));

        $tgl_ppo = date("Y-m-d", strtotime($this->input->post('hidden_tanggal')));
        $tgl_ppo_txt = date("Ymd", strtotime($this->input->post('hidden_tanggal')));

        $tgl_ref = date("Y-m-d", strtotime($this->input->post('hidden_tgl_ref')));
        $tgl_ref_txt = date("Ymd", strtotime($this->input->post('hidden_tgl_ref')));

        if ($this->input->post('cmb_dikirim_ke_kebun') == 'Y') {
            $dikirim_ke_kebun = 1;
        } else {
            $dikirim_ke_kebun = 0;
        }

        if ($this->input->post('txt_disc') != "0" || $this->input->post('txt_disc') != "0.00") {
            $qty_harga = $this->input->post('txt_qty') * $this->input->post('txt_harga');
            $disc = $this->input->post('txt_disc') / 100;
            $jumharga = $qty_harga - ($qty_harga * $disc);
        } else {
            $jumharga = $this->input->post('txt_qty') * $this->input->post('txt_harga');
        }

        $pph = $this->input->post('txt_pph');
        if (empty($pph)) {
            $pph = "0";
        }

        $datainsert = [
            'id' => $no_id,
            'kd_dept' => $this->input->post('hidden_kode_departemen'),
            'ket_dept' => $this->input->post('hidden_departemen'),
            'grup' => $this->input->post('cmb_jenis_budget'),
            'kode_budet' => "0",
            'kd_subbudget' => "0",
            'ket_subbudget' => NULL,
            'kode_supply' => $this->input->post('txt_kode_supplier'),
            'nama_supply' => $this->input->post('txt_supplier'),
            'kode_pemesan' => $this->input->post('txt_kode_pemesan'),
            'pemesan' => $this->input->post('txt_pemesan'),
            'nopo' => $no_po,
            'nopotxt' =>  $no_po,
            'noppo' => "0",
            'noppotxt' => "0",
            'noppotxt' => $this->input->post('hidden_no_ref'),
            'no_refppo' => $this->input->post('hidden_no_ref'),
            'tgl_refppo' => $tgl_ref,
            'tgl_reftxt' => $tgl_ref_txt,
            'tglpo' => $tgl_po,
            'tglpotxt' => $tgl_po_txt,
            'tglppo' => $tgl_ppo,
            'tglppotxt' =>  $tgl_ppo_txt,
            'bayar' => $this->input->post('cmb_status_bayar'),
            'tempo_bayar' => $this->input->post('txt_tempo_pembayaran'),
            'lokasikirim' => $this->input->post('txt_lokasi_pengiriman'),
            'tempo_kirim' => $this->input->post('txt_tempo_pengiriman'),
            'lokasi_beli' => $this->input->post('cmb_lokasi_pembelian'),
            'ket' => $this->input->post('txt_keterangan'),
            'kodept' => $this->session->userdata('kode_pt'),
            'namapt' => $this->session->userdata('pt'),
            'no_acc' => $pph,

            'ket_acc' => $this->input->post('txt_no_penawaran'),
            'periode' => date('Y-m-d H:i:s'),
            'periodetxt' => date('Ym'),
            'thn' => date('Y'),
            'tglisi' => date('Y-m-d H:i:s'),
            'user' => $this->session->userdata('user'),
            'ppn' =>  $this->input->post('cmb_ppn'),
            'totalbayar' =>  $this->input->post('txt_total_pembayaran'),
            'ket_kirim' => $this->input->post('txt_ket_pengiriman'),
            'lokasi' => $this->session->userdata('status_lokasi'),
            'noreftxt' => $norefpo,
            'uangmuka' => $this->input->post('txt_uang_muka'),
            'voucher' => $this->input->post('txt_no_voucher'),
            'terbayar' => "0",
            'nopp' => NULL,
            'batal' => "0",
            'kirim' => $dikirim_ke_kebun
        ];

        $datainsertitem = [
            'id' => $no_id_item,
            'nopo' => $no_po,
            'nopotxt' => $no_po,
            'noppo' => $this->input->post('txt_no_spp'),
            'noppotxt' => $this->input->post('txt_no_spp'),
            'refppo' => $this->input->post('hidden_no_ref'),
            'tglppo' => $tgl_ppo,
            'tglppotxt' => $tgl_ppo_txt,
            'tglpo' => $tgl_po,
            'tglpotxt' => $tgl_po_txt,
            'kodebar' => $this->input->post('hidden_kode_brg'),
            'kodebartxt' => $this->input->post('hidden_kode_brg'),
            'nabar' => $this->input->post('hidden_nama_brg'),
            'sat' => $this->input->post('hidden_satuan_brg'),
            'qty' => $this->input->post('txt_qty'),
            'harga' => $this->input->post('txt_harga'),
            'jumharga' => $jumharga,
            'kodept' => $this->input->post('hidden_kodept'),
            'namapt' => $this->input->post('hidden_namapt'),
            'periode' => date('Y-m-d H:i:s'),
            'periodetxt' => date('Ym'),
            'thn' => date('Y'),
            'merek' => $this->input->post('txt_merk'),
            'tglisi' => date('Y-m-d H:i:s'),
            'user' => $this->session->userdata('user'),
            'ket' => $this->input->post('txt_keterangan_rinci'),
            'noref' => $norefpo,
            'lokasi' => $this->session->userdata('status_lokasi'),
            'hargasblm' => $this->input->post('txt_harga'),
            'disc' => $this->input->post('txt_disc'),
            'kurs' => $this->input->post('cmb_kurs'),
            'kode_budget' => "0",
            'grup' => $this->input->post('cmb_jenis_budget'),
            'main_acct' => "0",
            'nama_main' => NULL,
            'batal' => "0",
            'cek_pp' => "0",
            'KODE_BPO' => "0",
            'JUMLAHBPO' => $this->input->post('txt_biaya_lain'),
            'kode_bebanbpo' => Null,
            'nama_bebanbpo' => $this->input->post('txt_keterangan_biaya_lain'),
            'konversi' => "0"
        ];
    }
}

/* End of file Po.php */
