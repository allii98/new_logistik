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

        $this->template->load('template', 'v_dataBkb', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Bukti Keluar Barang'
        ];

        $this->template->load('template', 'v_inputbkb', $data);
    }

    // //Start Data Table Server Side
    public function get_data_bkb()
    {
        $list = $this->M_bkb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs fa fa-eye" id="detail_lpb" name="detail_lpb"
                        data-ttg="' . $field->NO_REF . '"
                        data-toggle="tooltip" data-placement="top" title="detail" onClick="return false">
                        </button>
                        <button class="btn btn-primary btn-xs fa fa-undo" id="undo_lpb" name="undo_lpb"
                        data-ttg="' . $field->NO_REF . '"
                        data-toggle="tooltip" data-placement="top" title="detail" onClick="return false">
                        </button>
                        <button class="btn btn-xs btn-warning fa fa-edit" id="edit_lpb" name="edit_lpb"
                        data-ttg="' . $field->NO_REF . '"
                        data-toggle="tooltip" data-placement="top" title="detail" onClick="return false">
                        </button>
                        <a href="' . site_url('lpb/cetak/' . $field->NO_REF . '/' . $field->id) . '" target="_blank" class="btn btn-danger btn-xs fa fa-print" id="a_print_lpb"></a>';
            $row[] = $no;
            $row[] = $field->NO_REF;
            $row[] = $field->nobpb;
            $row[] = $field->no_mutasi;
            $row[] = $field->bag;
            $row[] = $field->keperluan;
            $row[] = date("Y-m-d", strtotime($field->tgl));
            $row[] = $field->USER;

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
    // //End Start Data Table Server Side

    public function select2_get_bpb()
    {
        $data = $this->M_bkb->get_bpb();
        echo json_encode($data);
    }

    public function get_data_bpb_qr()
    {
        $noref = $this->input->post('noref');
        $result = $this->M_bkb->get_data_bpb_qr($noref);
        echo json_encode($result);
    }

    public function get_tahun_tanam()
    {
        $coa_material = $this->input->post('coa_material');
        $result = $this->M_bkb->get_tahun_tanam($coa_material);
        echo json_encode($result);
    }

    public function get_stok()
    {
        $kodebar = $this->input->post('kodebar');
        $result = $this->M_bkb->get_stok($kodebar);
        echo json_encode($result);
    }

    public function saveBkb()
    {
        $sess_lokasi = $this->session->userdata('status_lokasi');

        if ($sess_lokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
            $dig_2 = "6";
        } else if ($sess_lokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
            $dig_2 = "3";
        }

        // $query_id_stockkeluar = "SELECT MAX(id)+1 as id_stockkeluar FROM stockkeluar";
        // $generate_id_stockkeluar = $this->db_logistik_pt->query($query_id_stockkeluar)->row();
        // $id_stockkeluar = $generate_id_stockkeluar->id_stockkeluar;
        // if (empty($id_stockkeluar)) {
        //     $id_stockkeluar = 1;
        // }

        // $query_id_keluarbrgitem = "SELECT MAX(id)+1 as id_keluarbrgitem FROM keluarbrgitem";
        // $generate_id_keluarbrgitem = $this->db_logistik_pt->query($query_id_keluarbrgitem)->row();
        // $id_keluarbrgitem = $generate_id_keluarbrgitem->id_keluarbrgitem;
        // if (empty($id_keluarbrgitem)) {
        //     $id_keluarbrgitem = 1;
        // }

        $digit = $dig_1 . $dig_2;

        $query_stockkeluar = "SELECT MAX(SUBSTRING(SKBTXT, 3)) as maxid_skb from stockkeluar WHERE SKBTXT LIKE '$digit%'";
        $generate_stockkeluar = $this->db_logistik_pt->query($query_stockkeluar)->row();
        $noUrut_stockkeluar = (int)($generate_stockkeluar->maxid_skb);
        $noUrut_stockkeluar++;
        $print_stockkeluar = sprintf("%05s", $noUrut_stockkeluar);

        $format_m_y = date("m/Y");

        if (empty($this->input->post('hidden_no_bkb'))) {
            $skb = $digit . $print_stockkeluar; //7201159 atau 1200903 atau 6271722 atau 7230088
        } else {
            $skb = $this->input->post('hidden_no_bkb');
        }

        if (empty($this->input->post('hidden_no_ref_bkb'))) {
            $no_ref = $text1 . "-BKB/" . $text2 . "/" . $format_m_y . "/" . $skb; //EST-BKB/SWJ/06/15/001159 atau //EST-BKB/SWJ/10/18/71722
        } else {
            $no_ref = $this->input->post('hidden_no_ref_bkb');
        }

        // $skb = $this->input->post('txt_no_bpb');
        $nobpb = $this->input->post('txt_no_bpb');
        // if (empty($nobpb) || $nobpb == "-") {
        //     $nobpb = $skb;
        // }

        $alokasi = $this->input->post('cmb_alokasi_est');

        $tgl = date("Y-m-d", strtotime($this->input->post('txt_tgl_bkb')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_bkb')));

        $sess_periode = $this->session->userdata('periode');
        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode1 = date("Y-m-d",strtotime($sess_periode));
        // $txtperiode = date("Ym",strtotime($sess_periode));
        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_bkb')));

        $kodebar = $this->input->post('hidden_kode_barang');
        $nabar = $this->input->post('hidden_nama_barang');
        $qty = $this->input->post('txt_qty_diminta');
        $qty2 = $this->input->post('txt_qty_disetujui');

        $afd_unit = $this->input->post('cmb_afd_unit');
        $blok = $this->input->post('cmb_blok_sub');
        $satuan = $this->input->post('hidden_satuan');
        $grup_brg = $this->input->post('hidden_grup_barang');

        // $datastockkeluar['id']              = $id_stockkeluar;
        $datastockkeluar['tgl']             = $tgl . " 00:00:00";
        $datastockkeluar['skb']             = $skb;
        $datastockkeluar['SKBTXT']          = $skb;
        $datastockkeluar['NO_REF']          = $no_ref;
        $datastockkeluar['nobpb']           = $nobpb;
        $datastockkeluar['mutasi']          = NULL;
        $datastockkeluar['no_mutasi']       = NULL;
        $datastockkeluar['tujuan_mutasi']   = NULL;
        $datastockkeluar['kode_pt_mutasi']  = NULL;
        $datastockkeluar['tglinput']        = date('Y-m-d H:i:s');
        $datastockkeluar['txttgl']          = $txttgl;
        $datastockkeluar['thn']             = $thn;
        $datastockkeluar['periode1']        = $periode1 . " 00:00:00";
        $datastockkeluar['periode2']        = NULL;
        $datastockkeluar['txtperiode1']     = $txtperiode;
        $datastockkeluar['txtperiode2']     = NULL;
        $datastockkeluar['alokasi']         = $alokasi;
        $datastockkeluar['pt']              = $this->session->userdata('pt');
        $datastockkeluar['kode']            = $this->session->userdata('kode_pt');
        $datastockkeluar['kpd']             = $this->input->post('txt_diberikan_kpd');
        $datastockkeluar['keperluan']       = $this->input->post('txt_untuk_keperluan');
        $datastockkeluar['bag']             = $this->input->post('cmb_bagian');
        $datastockkeluar['batal']           = '0';
        $datastockkeluar['USER']            = $this->session->userdata('user');
        $datastockkeluar['SUB']             = NULL;
        $datastockkeluar['USER1']           = NULL;
        $datastockkeluar['cetak']           = '0';
        $datastockkeluar['posting']         = '0';

        // $datakeluarbrgitem['id']            = $id_keluarbrgitem;
        $datakeluarbrgitem['kodebar']       = $kodebar;
        $datakeluarbrgitem['kodebartxt']    = $kodebar;
        $datakeluarbrgitem['nabar']         = $nabar;
        $datakeluarbrgitem['satuan']        = $satuan;
        $datakeluarbrgitem['grp']           = $grup_brg;
        $datakeluarbrgitem['alokasi']       = $alokasi;
        $datakeluarbrgitem['kodept']        = $this->session->userdata('kode_pt');
        $datakeluarbrgitem['nobpb']         = $this->input->post('txt_no_bpb');
        $datakeluarbrgitem['pt']            = $this->session->userdata('pt');
        $datakeluarbrgitem['afd']           = $afd_unit;
        $datakeluarbrgitem['blok']          = $blok;
        $datakeluarbrgitem['qty']           = $qty;
        $datakeluarbrgitem['qty2']          = $qty2;
        $datakeluarbrgitem['tgl']           = $tgl . " 00:00:00";
        $datakeluarbrgitem['skb']           = $skb;
        $datakeluarbrgitem['SKBTXT']        = $skb;
        $datakeluarbrgitem['NO_REF']        = $no_ref;
        $datakeluarbrgitem['tglinput']      = date('Y-m-d H:i:s');
        $datakeluarbrgitem['txttgl']        = $txttgl;
        $datakeluarbrgitem['thn']           = $thn;
        $datakeluarbrgitem['periode']       = $this->session->userdata('Ymd_periode') . " 00:00:00";
        $datakeluarbrgitem['txtperiode']    = $txtperiode;
        $datakeluarbrgitem['noadjust']      = "0";
        $datakeluarbrgitem['ket']           = $this->input->post('txt_ket_rinci');
        $datakeluarbrgitem['kodebeban']     = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['kodebebantxt']  = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['ketbeban']      = NULL;
        $datakeluarbrgitem['kodesub']       = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['kodesubtxt']    = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['ketsub']        = $this->input->post('hidden_nama_acc');
        $datakeluarbrgitem['batal']         = '0';
        $datakeluarbrgitem['USER']          = $this->session->userdata('user');
        $datakeluarbrgitem['cetak']         = '0';
        $datakeluarbrgitem['posting']       = '0';

        if (empty($this->input->post('hidden_no_bkb'))) {
            $savedatastockkeluar = $this->M_bkb->savedatastockkeluar($datastockkeluar);
            $savedatakeluarbrgitem = $this->M_bkb->savedatakeluarbrgitem($datakeluarbrgitem, $kodebar, $nobpb, $no_ref);
        } else {
            $savedatastockkeluar = NULL;
            $savedatakeluarbrgitem = $this->M_bkb->savedatakeluarbrgitem($datakeluarbrgitem, $kodebar, $nobpb, $no_ref);
        }

        //update QTY_KELUAR stokawal
        $result_update_qtykeluar = $this->M_bkb->update_qtykeluar($kodebar, $qty2);

        //update saldo akhir nilai
        $result_update_saldoakhir_nilai = $this->M_bkb->update_saldoakhir_nilai($kodebar);

        $data = [
            'datastockkeluar' => $savedatastockkeluar,
            'datakeluarbrgitem' => $savedatakeluarbrgitem,
            'result_update_qtykeluar' => $result_update_qtykeluar,
            'result_update_saldoakhir_nilai' => $result_update_saldoakhir_nilai,
            'no_bkb' => $skb,
            'noref_bkb' => $no_ref,
        ];

        echo json_encode($data);
    }
}
