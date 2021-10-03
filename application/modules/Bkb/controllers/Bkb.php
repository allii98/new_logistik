<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bkb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bkb');
        $this->load->model('M_approval_bkb');
        $this->load->model('M_approval_rev_qty');
        $this->load->model('M_get_bpb');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        // DB logistik CENTER
        $this->db_logistik_center = $this->load->database('db_logistik_center', TRUE);
        //DB MSAL
        $this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
        //DB MAPA
        $this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
        //DB psam
        $this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
        //DB peak
        $this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);
        //DB kpp
        $this->db_logistik_kpp = $this->load->database('db_logistik_kpp', TRUE);
        // DB GL
        $this->db_mips_gl = $this->load->database('db_mips_gl', TRUE);

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
        $data['noref_bpb'] = str_replace('.', '/', $this->uri->segment('3'));

        $data['pt_mutasi'] = $this->db_logistik_center->get('tb_pt')->result_array();

        $this->template->load('template', 'v_inputBkb', $data);
    }

    public function cari_pt_mutasi()
    {
        $output = $this->db_logistik_center->get('tb_pt')->result_array();

        echo json_encode($output);
    }

    // //Start Data Table Server Side
    public function get_data_bkb()
    {
        $list = $this->M_bkb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            if ($field->approval == 1) {
                $aksi = '<button class="btn btn-success btn-xs fa fa-eye" id="detail_bkb" name="detail_bkb"
                data-noref="' . $field->NO_REF . '" data-id="' . $field->id . '" 
                data-toggle="tooltip" data-placement="top" title="detail">
                </button>
                <a href="' . site_url('Bkb/cetak/' . $field->SKBTXT . '/' . $field->id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_lpb"></a>';
            } else {
                $aksi = '<button class="btn btn-success btn-xs fa fa-eye" id="detail_bkb" name="detail_bkb"
                data-noref="' . $field->NO_REF . '" data-id="' . $field->id . '" 
                data-toggle="tooltip" data-placement="top" title="detail">
                </button>
                <button class="btn btn-xs btn-warning fa fa-edit" id="edit_bkb" name="edit_bkb"
                data-id="' . $field->id . '"
                data-toggle="tooltip" data-placement="top" title="detail" onClick="return false">
                </button>
                <a href="' . site_url('Bkb/cetak/' . $field->SKBTXT . '/' . $field->id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_lpb"></a>';
            }

            $row = array();
            $row[] = $aksi;
            $row[] = $no;
            $row[] = date("d-m-Y", strtotime($field->tgl));
            $row[] = $field->NO_REF;
            $row[] = $field->nobpb;
            $row[] = $field->no_mutasi;
            $row[] = $field->bag;
            $row[] = $field->keperluan;
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

    // public function select2_get_bpb()
    // {
    //     $data = $this->M_bkb->get_bpb();
    //     echo json_encode($data);
    // }

    public function edit_bkb()
    {
        $data = [
            'title' => 'Edit BKB'
        ];

        $id_stockkeluar = $this->uri->segment('3');

        $data['data_stockkeluar'] = $this->db_logistik_pt->get_where('stockkeluar', ['id' => $id_stockkeluar])->row_array();

        $data['noref_bkb_edit'] = $data['data_stockkeluar']['NO_REF'];

        $this->template->load('template', 'v_bkbEdit', $data);
    }

    public function get_data_bkb_edit()
    {
        $noref_bkb = $this->input->post('noref_bkb');

        $stockkeluar = $this->db_logistik_pt->get_where('stockkeluar', ['NO_REF' => $noref_bkb])->row_array();

        $keluarbrgitem = $this->db_logistik_pt->get_where('keluarbrgitem', ['NO_REF' => $noref_bkb])->result_array();

        $data = [
            'stockkeluar' => $stockkeluar,
            'keluarbrgitem' => $keluarbrgitem,
        ];

        echo json_encode($data);
    }

    public function KembalikanNilaiStock()
    {
        $id_keluarbrgitem = $this->input->post('id_keluarbrgitem');

        //get keperluan data update
        $get_data_keluarbrgitem = $this->M_bkb->get_data_keluarbrgitem($id_keluarbrgitem);

        // mengembalikan stock awal bulanan
        $update_stockawal_bulanan_devisi_edit = $this->M_bkb->update_stockawal_bulanan_devisi_edit($get_data_keluarbrgitem);

        // mengembalikan stock awal
        $update_stockawal_edit = $this->M_bkb->update_stockawal_edit($get_data_keluarbrgitem);

        $data_return = [
            'update_stockawal_bulanan_devisi_edit' => $update_stockawal_bulanan_devisi_edit,
            'update_stockawal_edit' => $update_stockawal_edit,
        ];

        echo json_encode($data_return);
    }

    public function hapusItemBkb()
    {
        $id_keluarbrgitem = $this->input->post('id_keluarbrgitem');
        $id_register_stok = $this->input->post('id_register_stok');
        $kodebar = $this->input->post('kodebar');
        $norefbpb = $this->input->post('norefbpb');
        $mutasi = $this->input->post('mutasi');
        $id_mutasi_item = $this->input->post('id_mutasi_item');
        $cmb_blok_sub = $this->input->post('cmb_blok_sub');
        $edit = $this->input->post('edit');
        $noref_bkb = $this->input->post('noref_bkb');

        //ubah status_item_bkb di bpbitem
        $this->M_bkb->update_status_item_bkb($kodebar, $norefbpb);

        if ($edit == 1) {
            $delete_register = $this->db_logistik_pt->delete('register_stok', array('kodebar' => $kodebar, 'noref' => $noref_bkb));
        } else {
            $delete_register = $this->db_logistik_pt->delete('register_stok', array('id' => $id_register_stok));
        }

        //ubah status_bkb di bpb
        $update_bkb = $this->M_bkb->update_status_bkb($norefbpb);

        $deletebkb = $this->db_logistik_pt->delete('keluarbrgitem', array('id' => $id_keluarbrgitem));

        if ($mutasi == 1) {
            if ($edit == 1) {
                //jika dihapus nya lewat data BKB
                $this->db_logistik_center->where(['kodebar' => $kodebar, 'blok' => $cmb_blok_sub, 'NO_REF' => $noref_bkb]);
                $this->db_logistik_center->delete('tb_mutasi_item');
            } else {
                $this->db_logistik_center->delete('tb_mutasi_item', array('id' => $id_mutasi_item));
            }
        }

        $data = [
            'delete_register' => $delete_register,
            'update_bkb' => $update_bkb,
            'deletebkb' => $deletebkb
        ];

        echo json_encode($data);
    }

    public function cekDataBkb()
    {
        $noref_bkb = $this->input->post('noref_bkb');
        $data =  $this->db_logistik_pt->get_where('keluarbrgitem', array('NO_REF' => $noref_bkb))->num_rows();

        echo json_encode($data);
    }

    public function cekDataBkbItem()
    {
        $noref_bkb = $this->input->post('noref_bkb');

        $output = $this->M_bkb->cekDataBkbItem($noref_bkb);

        // if ($output >= 1) {
        //     $this->M_bkb->cek_status_approve($noref_bkb);
        // }

        echo json_encode($output);
    }

    public function hapusBkb()
    {
        $noref_bkb = $this->input->post('noref_bkb');
        $mutasi = $this->input->post('mutasi');
        $id_mutasi = $this->input->post('id_mutasi');
        $edit = $this->input->post('edit');

        $data = $this->db_logistik_pt->delete('stockkeluar', array('NO_REF' => $noref_bkb));

        if ($mutasi == 1) {
            if ($edit == 1) {
                $this->db_logistik_center->delete('tb_mutasi', array('NO_REF' => $noref_bkb));
            } else {
                $this->db_logistik_center->delete('tb_mutasi', array('id' => $id_mutasi));
            }
        }

        echo json_encode($data);
    }

    // //Start Data Table Server Side
    public function get_data_bpb()
    {
        $list = $this->M_get_bpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="data_bpb" name="data_bpb"
                        data-norefbpb="' . $field->norefbpb . '"
                        data-toggle="tooltip" data-placement="top" title="detail">pilih
                        </button>';
            $row[] = $no;
            $row[] = date("d-m-Y", strtotime($field->tglinput));
            $row[] = $field->norefbpb;
            $row[] = $field->devisi;
            $row[] = $field->bag;
            $row[] = $field->keperluan;
            $row[] = $field->user;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_get_bpb->count_all(),
            "recordsFiltered" => $this->M_get_bpb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    // //End Start Data Table Server Side

    public function get_data_bpb_qr()
    {
        $noref = $this->input->post('noref');
        if (substr($noref, 8, 3) == 'MUT') {
            $result = $this->M_bkb->get_data_bpb_qr_mut($noref);
        } else {
            $result = $this->M_bkb->get_data_bpb_qr($noref);
        }
        echo json_encode($result);
    }

    // public function get_tahun_tanam()
    // {
    //     $coa_material = $this->input->post('coa_material');
    //     $result = $this->M_bkb->get_tahun_tanam($coa_material);
    //     echo json_encode($result);
    // }

    public function get_stok()
    {
        $kodebar = $this->input->post('kodebar');
        $txtperiode = $this->input->post('txtperiode');
        $kode_dev = $this->input->post('kode_dev');
        $result = $this->M_bkb->get_stok($kodebar, $txtperiode, $kode_dev);
        echo json_encode($result);
    }

    public function saveBkb()
    {
        $sess_lokasi = $this->session->userdata('status_lokasi');
        $id_user = $this->session->userdata('id_user');

        if ($sess_lokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
        } else if ($sess_lokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
        } else if ($sess_lokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
        } else if ($sess_lokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
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

        $kode_devisi = $this->input->post('kode_dev');
        $dig_1 = preg_replace("/[^1-9]/", "", $kode_devisi);

        if ($this->session->userdata('status_lokasi') == "HO") {
            $dig_2 = "1";
        } else {
            $dig_2 = "2";
        }

        $digit = $dig_1 . $dig_2;

        $hitung_digit1_2 = strlen($digit);
        $query_stockkeluar = "SELECT MAX(SUBSTRING(SKBTXT, $hitung_digit1_2+1)) as maxid_skb from stockkeluar WHERE SKBTXT LIKE '$digit%'";
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

        $mutasi = $this->input->post('mutasi');

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

        $kode_dev = $this->input->post('kode_dev');

        $kode_devisi_mutasi = $this->input->post('kode_devisi_mutasi');

        $kode_pt_mutasi = $this->input->post('kode_pt_mutasi');

        // Mencari alias di PT tujuan untuk mencari nama devisi tujuan
        $data['get_pt_mutasi'] = $this->db_logistik_center->get_where('tb_pt', ['kode_pt' => $kode_pt_mutasi])->row_array();

        //jika pt Tujuan
        if ($data['get_pt_mutasi']['alias'] == 'MSAL') {
            $data['get_devisi_mutasi'] = $this->db_logistik_msal->get_where('tb_devisi', ['kodetxt' => $kode_devisi_mutasi])->row_array();
        } elseif ($data['get_pt_mutasi']['alias'] == 'MAPA') {
            $data['get_devisi_mutasi'] = $this->db_logistik_mapa->get_where('tb_devisi', ['kodetxt' => $kode_devisi_mutasi])->row_array();
        } elseif ($data['get_pt_mutasi']['alias'] == 'PSAM') {
            $data['get_devisi_mutasi'] = $this->db_logistik_psam->get_where('tb_devisi', ['kodetxt' => $kode_devisi_mutasi])->row_array();
        } elseif ($data['get_pt_mutasi']['alias'] == 'PEAK') {
            $data['get_devisi_mutasi'] = $this->db_logistik_peak->get_where('tb_devisi', ['kodetxt' => $kode_devisi_mutasi])->row_array();
        } elseif ($data['get_pt_mutasi']['alias'] == 'KPP') {
            $data['get_devisi_mutasi'] = $this->db_logistik_kpp->get_where('tb_devisi', ['kodetxt' => $kode_devisi_mutasi])->row_array();
        }

        //cek apakah sudah ada barang nya atau belum di stockawal
        $cek_stockawal = $this->M_bkb->cek_stockawal($kodebar, $txtperiode);
        if ($cek_stockawal == 1) {
            // mendapatkan nilai rata2
            $nilai_keluarbrgitem = $this->M_bkb->get_rata2_nilai($kodebar, $qty2, $txtperiode);
        } else {
            $nilai_keluarbrgitem = '0';
        }

        // membuat noref Mutasi
        if ($mutasi == 1) {
            if ($data['get_devisi_mutasi']['lokasi'] == 'SITE') {
                $text1_mutasi = 'EST';
            } elseif ($data['get_devisi_mutasi']['lokasi'] == 'RO') {
                $text1_mutasi = 'ROM';
            } elseif ($data['get_devisi_mutasi']['lokasi'] == 'PKS') {
                $text1_mutasi = 'FAC';
            } elseif ($data['get_devisi_mutasi']['lokasi'] == 'HO') {
                $text1_mutasi = 'PST';
            }
            $no_ref_mutasi = $text1_mutasi . "-MUTASI/" . $text2 . "/" . $format_m_y . "/" . $skb; //EST-BKB/SWJ/06/15/001159 atau //EST-BKB/SWJ/10/18/71722
        }

        $mutasi_dari_devisi = $this->input->post('devisi');
        if ($mutasi == 1) {
            $keperluan = 'MUTASI dari BKB NO. ' . $skb . ' ' . $mutasi_dari_devisi;
            $diberikan_kpd = $data['get_devisi_mutasi']['lokasi'];
        } else {
            $keperluan = $this->input->post('txt_untuk_keperluan');
            $diberikan_kpd = $this->input->post('txt_diberikan_kpd');
        }

        // $datastockkeluar['id']              = $id_stockkeluar;
        $datastockkeluar['tgl']             = $tgl . " 00:00:00";
        $datastockkeluar['skb']             = $skb;
        $datastockkeluar['SKBTXT']          = $skb;
        $datastockkeluar['NO_REF']          = $no_ref;
        $datastockkeluar['nobpb']           = $nobpb;
        // jika mutasi
        if ($mutasi == '1') {
            $datastockkeluar['mutasi']              = '1';
            $datastockkeluar['no_mutasi']           = $no_ref_mutasi;
            $datastockkeluar['kode_devisi_mutasi']  = $kode_devisi_mutasi;
            $datastockkeluar['devisi_mutasi']       = $data['get_devisi_mutasi']['PT'];
            $datastockkeluar['kode_pt_mutasi']      = $kode_pt_mutasi;
            $datastockkeluar['pt_mutasi']           = $data['get_pt_mutasi']['nama_pt'];
        } else {
            $datastockkeluar['mutasi']              = NULL;
            $datastockkeluar['no_mutasi']           = NULL;
            $datastockkeluar['kode_devisi_mutasi']  = NULL;
            $datastockkeluar['devisi_mutasi']       = NULL;
            $datastockkeluar['kode_pt_mutasi']      = NULL;
            $datastockkeluar['pt_mutasi']           = NULL;
        }
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
        $datastockkeluar['devisi']          = $this->input->post('devisi');
        $datastockkeluar['kode_dev']        = $kode_dev;
        $datastockkeluar['kpd']             = $diberikan_kpd;
        $datastockkeluar['keperluan']       = $keperluan;
        $datastockkeluar['bag']             = $this->input->post('cmb_bagian');
        $datastockkeluar['batal']           = '0';
        $datastockkeluar['id_user']         = $id_user;
        $datastockkeluar['USER']            = $this->session->userdata('user');
        $datastockkeluar['SUB']             = NULL;
        $datastockkeluar['USER1']           = NULL;
        $datastockkeluar['cetak']           = '0';
        $datastockkeluar['bhn_bakar']       = $this->input->post('bhnbakar');
        $datastockkeluar['jn_alat']         = $this->input->post('txt_jns_alat');
        $datastockkeluar['no_kode']         = $this->input->post('txt_kd_nmr');
        $datastockkeluar['hm_km']           = $this->input->post('txt_hm_km');
        $datastockkeluar['lok_kerja']       = $this->input->post('txt_lokasi_kerja');
        $datastockkeluar['posting']         = '0';

        // $datakeluarbrgitem['id']            = $id_keluarbrgitem;
        $datakeluarbrgitem['kodebar']       = $kodebar;
        $datakeluarbrgitem['kodebartxt']    = $kodebar;
        $datakeluarbrgitem['nabar']         = $nabar;
        $datakeluarbrgitem['satuan']        = $satuan;
        $datakeluarbrgitem['grp']           = $grup_brg;
        $datakeluarbrgitem['alokasi']       = $alokasi;
        $datakeluarbrgitem['kodept']        = $this->session->userdata('kode_pt');
        $datakeluarbrgitem['nobpb']         = $nobpb;
        $datakeluarbrgitem['pt']            = $this->session->userdata('pt');
        $datakeluarbrgitem['kode_dev']      = $kode_dev;
        $datakeluarbrgitem['devisi']        = $this->input->post('devisi');
        $datakeluarbrgitem['tmtbm']         = $this->input->post('cmb_tm_tbm');
        $datakeluarbrgitem['afd']           = $afd_unit;
        $datakeluarbrgitem['blok']          = $blok;
        $datakeluarbrgitem['thntanam']      = $this->input->post('cmb_tahun_tanam');
        $datakeluarbrgitem['qty']           = $qty;
        $datakeluarbrgitem['qty2']          = $qty2;
        $datakeluarbrgitem['nilai_item']    = $nilai_keluarbrgitem;
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
        $datakeluarbrgitem['kodebeban']     = $this->input->post('hidden_kodebebantxt');
        $datakeluarbrgitem['kodebebantxt']  = $this->input->post('hidden_kodebebantxt');
        $datakeluarbrgitem['ketbeban']      = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['kodesub']       = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['kodesubtxt']    = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['ketsub']        = $this->input->post('hidden_nama_acc');
        $datakeluarbrgitem['batal']         = '0';
        $datakeluarbrgitem['id_user']       = $id_user;
        $datakeluarbrgitem['USER']          = $this->session->userdata('user');
        $datakeluarbrgitem['cetak']         = '0';
        $datakeluarbrgitem['posting']       = '0';

        $data_register_stok = [
            'kodebar' => $kodebar,
            'kodebartxt' => $kodebar,
            'namabar' => $nabar,
            'grup' => $grup_brg,
            'tgl' => date("Y-m-d H:i:s"),
            'tgltxt' => date("Ymd"),
            'potxt' => '-',
            'ttgtxt' => $skb,
            'skbtxt' => '-',
            'adjttgtxt' => '-',
            'adjskbtxt' => '-',
            'retttgtxt' => '-',
            'retskbtxt' => '-',
            'no_slrh' => $skb,
            'ket' => $this->input->post('txt_ket_rinci'),
            'qty' => $qty2,
            'masuk_qty' => '0',
            'keluar_qty' => $qty2,
            'status' => 'BKB',
            'kodept' => $this->session->userdata('kode_pt'),
            'namapt' => $this->session->userdata('pt'),
            'kode_dev' => $kode_dev,
            'devisi' => $this->input->post('devisi'),
            'txtperiode' => $txtperiode,
            'lokasi' => $this->session->userdata('status_lokasi'),
            'refpo' => '-',
            'noref' => $no_ref,
            'id_user' => $id_user,
            'USER' => $this->session->userdata('user'),
        ];

        // jika brang belum ada di stockawal
        if ($nilai_keluarbrgitem == '0') {
            $data = [
                'nilai_keluarbrgitem' => $nilai_keluarbrgitem
            ];

            echo json_encode($data);
        } else {
            if (empty($this->input->post('hidden_no_bkb'))) {
                if ($mutasi == '1') {
                    $savedatastockkeluar_mutasi = $this->M_bkb->savedatastockkeluar_mutasi($datastockkeluar);
                    $savedatakeluarbrgitem_mutasi = $this->M_bkb->savedatakeluarbrgitem_mutasi($datakeluarbrgitem);
                }
                $savedatastockkeluar_mutasi = NULL;
                $savedatakeluarbrgitem_mutasi = NULL;
                $savedatastockkeluar = $this->M_bkb->savedatastockkeluar($datastockkeluar);
                $savedatakeluarbrgitem = $this->M_bkb->savedatakeluarbrgitem($datakeluarbrgitem, $kodebar, $nobpb, $no_ref);
                $saveregisterstok = $this->M_bkb->saveRegisterStok($data_register_stok);
            } else {
                $savedatastockkeluar_mutasi = NULL;
                $savedatakeluarbrgitem_mutasi = NULL;
                $savedatastockkeluar = NULL;

                if ($mutasi == '1') {
                    $savedatakeluarbrgitem_mutasi = $this->M_bkb->savedatakeluarbrgitem_mutasi($datakeluarbrgitem);
                }

                $savedatakeluarbrgitem = $this->M_bkb->savedatakeluarbrgitem($datakeluarbrgitem, $kodebar, $nobpb, $no_ref);
                $saveregisterstok = $this->M_bkb->saveRegisterStok($data_register_stok);
            }

            // update stockawal_bulanan_devisi
            $result_update_stockawal_bulanan_devisi = $this->M_bkb->update_stockawal_bulanan_devisi($kodebar, $qty2, $txtperiode, $kode_dev);

            //update stokawal
            $result_update_qtykeluar = $this->M_bkb->update_stockawal($kodebar, $qty2, $txtperiode);

            $query_id = "SELECT MAX(id) as id_stockkeluar FROM stockkeluar WHERE id_user = '$id_user' AND NO_REF = '$no_ref' ";
            $generate_id = $this->db_logistik_pt->query($query_id)->row();
            $id_stockkeluar = $generate_id->id_stockkeluar;

            $query_id = "SELECT MAX(id) as id_keluarbrgitem FROM keluarbrgitem WHERE id_user = '$id_user' AND NO_REF = '$no_ref' ";
            $generate_id = $this->db_logistik_pt->query($query_id)->row();
            $id_keluarbrgitem = $generate_id->id_keluarbrgitem;

            $query_id = "SELECT MAX(id) as id_register_stok FROM register_stok WHERE id_user = '$id_user' AND noref = '$no_ref' ";
            $generate_id = $this->db_logistik_pt->query($query_id)->row();
            $id_register_stok = $generate_id->id_register_stok;

            if ($mutasi == 1) {
                $query_id = "SELECT MAX(id) as id_mutasi FROM tb_mutasi WHERE id_user = '$id_user' AND NO_REF = '$no_ref' ";
                $generate_id = $this->db_logistik_center->query($query_id)->row();
                $id_mutasi = $generate_id->id_mutasi;

                $query_id = "SELECT MAX(id) as id_mutasi_item FROM tb_mutasi_item WHERE id_user = '$id_user' AND NO_REF = '$no_ref' ";
                $generate_id = $this->db_logistik_center->query($query_id)->row();
                $id_mutasi_item = $generate_id->id_mutasi_item;
            } else {
                $id_mutasi = NULL;
                $id_mutasi_item = NULL;
            }

            $data = [
                'update_stockawal_bulanan_devisi' => $result_update_stockawal_bulanan_devisi,
                'datastockkeluar' => $savedatastockkeluar,
                'datakeluarbrgitem' => $savedatakeluarbrgitem,
                'result_update_qtykeluar' => $result_update_qtykeluar,
                'savedatastockkeluar_mutasi' => $savedatastockkeluar_mutasi,
                'savedatakeluarbrgitem_mutasi' => $savedatakeluarbrgitem_mutasi,
                'saveregisterstok' => $saveregisterstok,
                'no_bkb' => $skb,
                'noref_bkb' => $no_ref,
                'id_stockkeluar' => $id_stockkeluar,
                'id_keluarbrgitem' => $id_keluarbrgitem,
                'id_mutasi' => $id_mutasi,
                'id_mutasi_item' => $id_mutasi_item,
                'id_register_stok' => $id_register_stok,
                'txtperiode' => $txtperiode
            ];

            echo json_encode($data);
        }
    }

    function cetak()
    {
        $no_bkb = $this->uri->segment('3');
        $id = $this->uri->segment('4');

        $data['no_bkb'] = $no_bkb;
        $data['id'] = $id;
        $data['stockkeluar'] = $this->db_logistik_pt->get_where('stockkeluar', array('id' => $id, 'SKBTXT' => $no_bkb))->row();
        $data['keluarbrgitem'] = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $no_bkb, 'NO_REF' => $data['stockkeluar']->NO_REF))->result();

        $data['urut'] = $this->M_bkb->urut_cetak($data['stockkeluar']->NO_REF);

        $noref = $data['stockkeluar']->NO_REF;
        $this->qrcode($no_bkb, $id, $noref);

        // var_dump($data['po']);exit();
        // $mpdf = new \Mpdf\Mpdf([
        //                       'mode' => 'utf-8', 
        //                       // 'format' => [190, 236],
        //                       'format' => 'A4',
        //                       'setAutoTopMargin' => 'stretch',
        //                       'orientation' => 'P'
        //                   ]);
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236],
            'format' => 'A4',
            // 'setAutoTopMargin' => 'stretch',
            'margin_top' => '2',
            'margin_left' => '5',
            'margin_right' => '5',
            'orientation' => 'P'
        ]);

        $lokasibuatbkb = substr($noref, 0, 3);
        switch ($lokasibuatbkb) {
            case 'PST': // HO
                $lokasibkb = "HO";
                break;
            case 'ROM': // RO
                $lokasibkb = "RO";
                break;
            case 'FAC': // PKS
                $lokasibkb = "PKS";
                break;
            case 'EST': // SITE
                $lokasibkb = "SITE";
                break;
            default:
                break;
        }

        // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
        // $mpdf->SetHTMLHeader('
        //                     <table width="100%" border="0" align="center">
        //                         <tr>
        //                             <td rowspan="2" width="15%" height="10px"><!--img width="10%" height="60px" style="padding-left:8px" src="././assets/img/msal.jpg"--></td>
        //                             <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari (' . $lokasibkb . ')</td>
        //                         </tr>
        //                         <!--tr>
        //                             <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
        //                             </td>
        //                         </tr-->
        //                     </table>
        //                     <hr style="width:100%;margin:0px;">
        //                     ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        if ($data['stockkeluar']->mutasi == 1) {
            $html = $this->load->view('v_bkbPrint_mutasi', $data, true);
        } else {
            $html = $this->load->view('v_bkbPrint', $data, true);
        }

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function qrcode($no_bkb, $id, $noref)
    {
        $this->load->library('ciqrcode');
        // header("Content-Type: image/png");

        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/bkb/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $id . '_' . $no_bkb . '.png'; //buat name dari qr code

        // $params['data'] = site_url('bkb/cetak/'.$no_bkb.'/'.$id); //data yang akan di jadikan QR CODE
        $params['data'] = $noref; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }

    function get_detail_approval()
    {
        $id_stockkeluar = $this->input->post('id_stockkeluar');
        $no_ref = $this->M_approval_bkb->get_noref($id_stockkeluar);
        $this->M_approval_bkb->getWhere($no_ref['NO_REF']);

        $list = $this->M_approval_bkb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            // if ($d->status_kasie_gudang == "1") {
            //     $status = "<span style='color: green'><b>DISETUJUI" . $d->tgl_kasie_gudang . "</b></span>";
            // } else {
            //     $status = "DALAM PROSES";
            // }

            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $d->id;
            $row[] = $d->kodebar;
            $row[] = $d->nabar;
            $row[] = $d->satuan;
            $row[] = $d->qty;
            $row[] = $d->qty2;
            $row[] = $d->ket;

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_approval_bkb->count_all(),
            "recordsFiltered" => $this->M_approval_bkb->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    public function approval_bkb()
    {
        $id_item_bkb = $this->input->post('id_item_bkb');
        $output = $this->M_approval_bkb->approval_bkb($id_item_bkb);

        echo json_encode($output);
    }

    public function rev_qty()
    {
        $no_ref_bpb = $this->input->post('no_ref_bpb');
        $kodebar = $this->input->post('kodebar');
        $req_rev_qty = $this->input->post('req_rev_qty');

        $output = $this->M_approval_bkb->rev_qty($no_ref_bpb, $kodebar, $req_rev_qty);

        echo json_encode($output);
    }

    public function approval_rev_qty()
    {
        $data = [
            'title' => 'Approval Revisi QTY'
        ];

        $this->template->load('template', 'v_approval_rev_qty', $data);
    }

    //Start Data Table Server Side
    public function get_data_rev_qty()
    {
        $list = $this->M_approval_rev_qty->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-warning btn-xs" id="approve_rev_qty" name="approve_rev_qty"
                        data-id_approval_bpb="' . $field->id . '" data-norefbpb="' . $field->norefbpb . '"
                        data-kodebar="' . $field->kodebar . '" data-qty_rev="' . $field->qty_rev . '"
                        data-toggle="tooltip" data-placement="top" title="detail">
                        Approve</button>';
            $row[] = $no;
            $row[] = $field->norefbpb;
            $row[] = $field->kodebar;
            $row[] = $field->nabar;
            $row[] = $field->qty_diminta;
            $row[] = $field->qty_rev;
            $row[] = $field->user_req_rev_qty;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_approval_rev_qty->count_all(),
            "recordsFiltered" => $this->M_approval_rev_qty->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    // //End Start Data Table Server Side

    public function ktu_approve_rev_qty()
    {
        $id_approval_bpb = $this->input->post('id_approval_bpb');
        $norefbpb = $this->input->post('norefbpb');
        $kodebar = $this->input->post('kodebar');
        $qty_rev = $this->input->post('qty_rev');

        $output = $this->M_approval_rev_qty->ktu_approve_rev_qty($id_approval_bpb, $norefbpb, $kodebar, $qty_rev);

        echo json_encode($output);
    }

    public function get_devisi_mutasi()
    {
        $kode_pt = $this->input->post('kode_pt');

        $data['pt_mutasi'] = $this->db_logistik_center->get_where('tb_pt', ['kode_pt' => $kode_pt])->row_array();

        if ($data['pt_mutasi']['alias'] == 'MSAL') {
            $this->db_logistik_msal->where('lokasi !=', 'HO');
            $this->db_logistik_msal->where('lokasi !=', 'RO');
            $this->db_logistik_msal->order_by('kodetxt', 'asc');
            $output = $this->db_logistik_msal->get('tb_devisi')->result_array();
        } elseif ($data['pt_mutasi']['alias'] == 'MAPA') {
            $this->db_logistik_mapa->where('lokasi !=', 'HO');
            $this->db_logistik_mapa->where('lokasi !=', 'RO');
            $this->db_logistik_mapa->order_by('kodetxt', 'asc');
            $output = $this->db_logistik_mapa->get('tb_devisi')->result_array();
        } elseif ($data['pt_mutasi']['alias'] == 'PSAM') {
            $this->db_logistik_psam->where('lokasi !=', 'HO');
            $this->db_logistik_psam->where('lokasi !=', 'RO');
            $this->db_logistik_psam->order_by('kodetxt', 'asc');
            $output = $this->db_logistik_psam->get('tb_devisi')->result_array();
        } elseif ($data['pt_mutasi']['alias'] == 'PEAK') {
            $this->db_logistik_peak->where('lokasi !=', 'HO');
            $this->db_logistik_peak->where('lokasi !=', 'RO');
            $this->db_logistik_peak->order_by('kodetxt', 'asc');
            $output = $this->db_logistik_peak->get('tb_devisi')->result_array();
        } elseif ($data['pt_mutasi']['alias'] == 'KPP') {
            $this->db_logistik_kpp->where('lokasi !=', 'HO');
            $this->db_logistik_kpp->where('lokasi !=', 'RO');
            $this->db_logistik_kpp->order_by('kodetxt', 'asc');
            $output = $this->db_logistik_kpp->get('tb_devisi')->result_array();
        } else {
            $output = NULL;
        }

        echo json_encode($output);
    }

    public function get_noac_gl()
    {
        $nama_noac = $this->input->post('nama_noac');
        $output = $this->M_bkb->get_noac_gl($nama_noac);

        echo json_encode($output);
    }
}
