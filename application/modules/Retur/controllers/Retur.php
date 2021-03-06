<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Retur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_retur');
        // $this->load->model('M_approval_bkb');
        $this->load->model('M_cari_bkbitem');
        $this->load->model('M_get_bkb');
        $this->load->model('M_approval_retur');

        $db_pt = check_db_pt();
        // $this->db_logistik = $this->load->database('db_logistik',TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        // DB logistik CENTER
        $this->db_logistik_center = $this->load->database('db_logistik_center', TRUE);

        //DB MSAL
        $this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);

        //DB MAPA
        $this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);

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
            'title' => 'data Retur BKB',
        ];
        $this->template->load('template', 'v_dataRetur', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Retur BKB',
        ];
        $this->template->load('template', 'v_inputRetur', $data);
    }

    public function edit_retur()
    {
        $id_retskb = $this->uri->segment('3');

        $data = [
            'title' => 'Edit Retur BKB',
            'id_retskb' => $id_retskb
        ];
        $this->template->load('template', 'v_editRetur', $data);
    }

    public function cari_retur_edit()
    {
        $id_retskb = $this->input->post('id_retskb');

        $output = $this->M_retur->cari_retur_edit($id_retskb);

        echo json_encode($output);
    }

    //Start Data Table Server Side
    public function get_data_retur()
    {
        $list = $this->M_retur->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {

            if ($field->status_approval == '1') {
                $aksi = '<button class="btn btn-success btn-xs fa fa-eye" id="approval_retur" name="approval_retur"
                data-toggle="tooltip" data-placement="top" title="detail" onClick="approval_retur(' . $field->id . ')">
                </button>
                <a href="' . site_url('Retur/cetak/' . $field->noretur . '/' . $field->id) . '" target="_blank" class="btn btn-danger btn-xs fa fa-print" id="a_print_lpb"></a>';
            } else {
                $aksi = '<button class="btn btn-success btn-xs fa fa-eye" id="approval_retur" name="approval_retur"
                data-toggle="tooltip" data-placement="top" title="detail" onClick="approval_retur(' . $field->id . ')">
                </button>
                <button class="btn btn-xs btn-warning fa fa-edit" id="edit_retur" name="edit_retur"
                data-id_retskb="' . $field->id . '" 
                data-toggle="tooltip" data-placement="top" title="detail" onClick="return false">
                </button>
                <a href="' . site_url('Retur/cetak/' . $field->noretur . '/' . $field->id) . '" target="_blank" class="btn btn-danger btn-xs fa fa-print" id="a_print_lpb"></a>';
            }

            $no++;
            $row = array();
            $row[] = $aksi;
            $row[] = $no;
            $row[] = date("Y-m-d", strtotime($field->tgl));
            $row[] = $field->norefretur;
            $row[] = $field->norefbkb;
            $row[] = $field->bag;
            $row[] = $field->devisi;
            $row[] = $field->keterangan;
            $row[] = $field->user;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_retur->count_all(),
            "recordsFiltered" => $this->M_retur->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    //End Start Data Table Server Side

    public function get_qty_bkb()
    {
        $kodebar = $this->input->post('kodebar');
        $norefbkb = $this->input->post('norefbkb');
        $data = $this->M_retur->get_qty_bkb($kodebar, $norefbkb);

        echo json_encode($data);
    }

    // //Start Data Table Server Side
    public function get_data_bkb()
    {
        $list = $this->M_get_bkb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="data_bkb" name="data_bkb"
                        data-no_ref="' . $field->NO_REF . '" data-devisi="' . $field->devisi . '"
                        data-kode_dev="' . $field->kode_dev . '" data-bag="' . $field->bag . '"
                        data-skb="' . $field->skb . '" data-pt="' . $field->pt . '"
                        data-kode="' . $field->kode . '"
                        data-toggle="tooltip" data-placement="top" title="detail">pilih
                        </button>';
            $row[] = $no;
            $row[] = $field->NO_REF;
            $row[] = $field->devisi;
            $row[] = $field->bag;
            $row[] = date("Y-m-d", strtotime($field->tglinput));

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_get_bkb->count_all(),
            "recordsFiltered" => $this->M_get_bkb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    // //End Start Data Table Server Side

    public function get_data_bkb_qr()
    {
        $noref = $this->input->post('noref');
        $result = $this->M_retur->get_data_bkb_qr($noref);
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
        $result = $this->M_retur->get_stok($kodebar, $txtperiode, $kode_dev);
        echo json_encode($result);
    }

    public function saveRetur()
    {
        $sess_lokasi = $this->session->userdata('status_lokasi');
        $id_user = $this->session->userdata('id_user');

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

        $digit = $dig_1 . $dig_2;

        $query_retskb = "SELECT MAX(SUBSTRING(noretur, 3)) as maxid_skb from retskb WHERE noretur LIKE '$digit%'";
        $generate_retskb = $this->db_logistik_pt->query($query_retskb)->row();
        $noUrut_retskb = (int)($generate_retskb->maxid_skb);
        $noUrut_retskb++;
        $print_retskb = sprintf("%05s", $noUrut_retskb);

        $format_m_y = date("m/Y");

        if (empty($this->input->post('hidden_noretur'))) {
            $noretur = $digit . $print_retskb; //7201159 atau 1200903 atau 6271722 atau 7230088
        } else {
            $noretur = $this->input->post('hidden_noretur');
        }

        if (empty($this->input->post('hidden_norefretur'))) {
            $norefretur = $text1 . "-RETUR/" . $text2 . "/" . $format_m_y . "/" . $noretur; //EST-BKB/SWJ/06/15/001159 atau //EST-BKB/SWJ/10/18/71722
        } else {
            $norefretur = $this->input->post('hidden_norefretur');
        }

        $nobkb = $this->input->post('hidden_nobkb');
        $norefbkb = $this->input->post('hidden_norefbkb');

        $tgl = date("Y-m-d", strtotime($this->input->post('txt_tgl_retur')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_retur')));

        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_retur')));

        $kodebar = $this->input->post('hidden_kode_barang');
        $nabar = $this->input->post('txt_barang');
        $sat = $this->input->post('hidden_satuan_brg');
        $grp = $this->input->post('hidden_grup_barang');
        $quantiti = $this->input->post('txt_qty_retur');
        $devisi = $this->input->post('hidden_devisi');
        $kode_dev = $this->input->post('hidden_kode_dev');
        $no_ba = $this->input->post('no_ba');

        $data_retskb['noretur']         = $noretur;
        $data_retskb['norefretur']      = $norefretur;
        $data_retskb['tgl']             = $tgl;
        $data_retskb['nobkb']           = $nobkb;
        $data_retskb['norefbkb']        = $norefbkb;
        $data_retskb['tglinput']        = date("Y-m-d H:i:s");
        $data_retskb['txttgl']          = $txttgl;
        $data_retskb['thn']             = $thn;
        $data_retskb['periode1']        = $periode1;
        $data_retskb['periode2']        = NULL;
        $data_retskb['txtperiode1']     = $txtperiode;
        $data_retskb['txtperiode2']     = NULL;
        $data_retskb['pt']              = $this->input->post('hidden_nama_pt');
        $data_retskb['kode']            = $this->input->post('hidden_kode_pt');
        $data_retskb['devisi']          = $devisi;
        $data_retskb['kode_dev']        = $kode_dev;
        $data_retskb['no_ba']           = str_replace(' ', '', $no_ba);
        $data_retskb['keterangan']      = $this->input->post('keterangan');
        $data_retskb['bag']             = $this->input->post('bagian');
        $data_retskb['batal']           = "0";
        $data_retskb['alasan_batal']    = NULL;
        $data_retskb['id_user']         = $id_user;
        $data_retskb['user']            = $this->session->userdata('user');

        $data_retskbitem['noretur']         = $noretur;
        $data_retskbitem['norefretur']      = $norefretur;
        $data_retskbitem['kodebar']         = $kodebar;
        $data_retskbitem['kodebartxt']      = $this->input->post('hidden_kode_barang');
        $data_retskbitem['nabar']           = $nabar;
        $data_retskbitem['satuan']          = $sat;
        $data_retskbitem['grp']             = $grp;
        $data_retskbitem['kodept']          = $this->input->post('hidden_kode_pt');
        $data_retskbitem['pt']              = $this->input->post('hidden_nama_pt');
        $data_retskbitem['afd']             = $this->input->post('cmb_afd_unit');
        $data_retskbitem['blok']            = $this->input->post('cmb_blok_sub');
        $data_retskbitem['qty']             = $quantiti;
        $data_retskbitem['tgl']             = $tgl;
        $data_retskbitem['nobkb']           = $nobkb;
        $data_retskbitem['norefbkb']        = $norefbkb;
        $data_retskbitem['tglinput']        = date("Y-m-d H:i:s");
        $data_retskbitem['txttgl']          = $txttgl;
        $data_retskbitem['thn']             = $thn;
        $data_retskbitem['periode']         = $this->session->userdata('Ymd_periode');
        $data_retskbitem['txtperiode']      = $txtperiode;
        $data_retskbitem['ket']             = $this->input->post('txt_ket_rinci');
        $data_retskbitem['kodebeban']       = $this->input->post('hidden_kodebeban');
        $data_retskbitem['kodebebantxt']    = $this->input->post('hidden_kodebeban');
        $data_retskbitem['ketbeban']        = $this->input->post('txt_account_beban');
        $data_retskbitem['kodesub']         = $this->input->post('hidden_kodesub');
        $data_retskbitem['kodesubtxt']      = $this->input->post('hidden_kodesub');
        $data_retskbitem['ketsub']          = $this->input->post('txt_sub_beban');
        $data_retskbitem['batal']           = "0";
        $data_retskbitem['alasan_batal']    = NULL;
        $data_retskbitem['id_user']         = $id_user;
        $data_retskbitem['user']            = $this->session->userdata('user');

        if (empty($this->input->post('hidden_noretur'))) {
            $savedataretskb = $this->M_retur->savedataretskb($data_retskb);
            $savedataretskbitem = $this->M_retur->savedataretskbitem($data_retskbitem);
            $item_exist = 0;
        } else {
            //cek item jika sudah ada tidak bisa save
            $cek_barang_exist = $this->M_retur->cek_barang_exist($kodebar, $norefretur);
            if ($cek_barang_exist >= 1) {
                $item_exist = 1;
                $savedataretskb = NULL;
                $savedataretskbitem = NULL;
            } else {
                $item_exist = 0;
                $savedataretskb = NULL;
                $savedataretskbitem = $this->M_retur->savedataretskbitem($data_retskbitem);
            }
        }

        // jika item sudah ada maka tidak mejalankan script didalam
        if ($item_exist == 1) {
            $result_insert_stok_awal_harian = NULL;
            $result_insert_stok_awal_bulanan = NULL;
            $result_update_stok_awal = NULL;
        } else {

            //insert stock awal harian sama seperti LPB
            $result_insert_stok_awal_harian = $this->insert_stok_awal_harian($kodebar, $nabar, $sat, $grp, $norefbkb, $quantiti, $devisi, $kode_dev);

            // insert stock awal bulanan sama seperli LPB
            $result_insert_stok_awal_bulanan = $this->insert_stok_awal_bulanan_devisi($kodebar, $nabar, $sat, $grp, $quantiti, $devisi, $kode_dev);

            // update stock awal sama seperli di LPB
            $result_update_stok_awal = $this->update_stok_awal($kodebar, $txtperiode);
        }

        $query_id = "SELECT MAX(id) as id_retskb FROM retskb WHERE id_user = '$id_user' AND norefretur = '$norefretur' ";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $id_retskb = $generate_id->id_retskb;

        $query_id = "SELECT MAX(id) as id_retskbitem FROM ret_skbitem WHERE id_user = '$id_user' AND norefretur = '$norefretur' ";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $id_retskbitem = $generate_id->id_retskbitem;

        $data = [
            'insert_stok_awal_harian' => $result_insert_stok_awal_harian,
            'insert_stok_awal_bulanan' => $result_insert_stok_awal_bulanan,
            'update_stok_awal' => $result_update_stok_awal,
            'dataretskb' => $savedataretskb,
            'dataretskbitem' => $savedataretskbitem,
            'no_retur' => $noretur,
            'noref_retur' => $norefretur,
            'id_retskb' => $id_retskb,
            'id_retskbitem' => $id_retskbitem,
            'txtperiode' => $txtperiode,
            'item_exist' => $item_exist
        ];

        echo json_encode($data);
    }

    function insert_stok_awal_harian($kodebar, $nabar, $sat, $grp, $no_ref_bkb, $qty, $devisi, $kode_dev)
    {

        $harga_item_bkb = $this->M_retur->cari_harga_bkb($no_ref_bkb, $kodebar);
        $saldoakhir_nilai = $harga_item_bkb * $qty;

        $data_insert_stok_harian = [
            'pt' => $this->session->userdata('pt'),
            'KODE' => $this->session->userdata('kode_pt'),
            'devisi' => $devisi,
            'kode_dev' => $kode_dev,
            'afd' => '-',
            'kodebar' => $kodebar,
            'kodebartxt' => $kodebar,
            'nabar' => $nabar,
            'satuan' => $sat,
            'grp' => $grp,
            'saldoawal_qty' => 0,
            'saldoawal_nilai' => 0,
            'tglinput' => date("Y-m-d H:i:s"),
            'thn' => date("Y"),
            'saldoakhir_qty' => $qty,
            'saldoakhir_nilai' => $saldoakhir_nilai,
            'nilai_masuk' => $saldoakhir_nilai,
            'QTY_MASUK' => $qty,
            'periode' => $this->session->userdata('Ymd_periode'),
            'txtperiode' => $this->session->userdata('ym_periode'),
            'ket' => '-',
            'account' => '-',
            'ket_account' => '-',
            'tgl_transaksi' => date("Y-m-d H:i:s")
        ];

        $cek_stokawal_harian = $this->M_retur->cek_stokawal_harian($kodebar, $data_insert_stok_harian['periode'], $kode_dev);

        if ($cek_stokawal_harian >= 1) {
            //update stok awal harian
            return $this->M_retur->updateStokAwalHarian($kodebar, $data_insert_stok_harian['periode'], $data_insert_stok_harian['txtperiode'], $qty, $harga_item_bkb, $kode_dev);
        } else {
            //insert stok awal harian
            // return $this->M_retur->saveStokAwalHarian($data_insert_stok_harian);
            // untuk retur dia pasti ada barang nya di stok awal
            return false;
        }
    }

    function insert_stok_awal_bulanan_devisi($kodebar, $nabar, $sat, $grp, $qty, $devisi, $kode_dev)
    {
        $data_insert_stok_bulanan = [
            'pt' => $this->session->userdata('pt'),
            'KODE' => $this->session->userdata('kode_pt'),
            'devisi' => $devisi,
            'kode_dev' => $kode_dev,
            'afd' => '-',
            'kodebar' => $kodebar,
            'kodebartxt' => $kodebar,
            'nabar' => $nabar,
            'satuan' => $sat,
            'grp' => $grp,
            'saldoawal_qty' => 0,
            'saldoawal_nilai' => 0,
            'saldoakhir_qty' => $qty,
            'tglinput' => date("Y-m-d H:i:s"),
            'thn' => date("Y"),
            'QTY_MASUK' => $qty,
            'periode' => $this->session->userdata('Ymd_periode'),
            'txtperiode' => $this->session->userdata('ym_periode'),
            'ket' => '-',
            'account' => '-',
            'ket_account' => '-',
            'tgl_transaksi' => date("Y-m-d H:i:s")
        ];

        $cek_stokawal_bulanan_devisi = $this->M_retur->cek_stok_awal_bulanan_devisi($kodebar, $data_insert_stok_bulanan['txtperiode'], $kode_dev);

        if ($cek_stokawal_bulanan_devisi >= 1) {
            //update stok awal bulanan devisi
            return $this->M_retur->updateStokAwalBulananDevisi($kodebar, $data_insert_stok_bulanan['txtperiode'], $qty, $kode_dev);
        } else {
            //insert stok awal bulanan devisi
            // untuk retur dia pasti ada barang nya di stok awal
            // return $this->M_retur->saveStokAwalBulananDevisi($data_insert_stok_bulanan);
            return false;
        }
    }

    function update_stok_awal($kodebar, $txtperiode)
    {
        // $kodebar = 102505990000096;
        // $txtperiode = '202106';
        //saldo akhir qty
        $sum_saldo_qty_kodebar = $this->M_retur->sum_saldo_qty_kodebar_harian($kodebar, $txtperiode);

        //qty masuk
        $sum_qty_kodebar = $this->M_retur->sum_qty_kodebar_harian($kodebar, $txtperiode);

        //saldoakhir_nilai
        $sum_harga_kodebar = $this->M_retur->sum_harga_kodebar_harian($kodebar, $txtperiode);

        //nilai_masuk
        $sum_nilai_masuk = $this->M_retur->sum_nilai_masuk_harian($kodebar, $txtperiode);

        //tidak bisa dibagi 0
        // if ($sum_harga_kodebar->saldo_awal_harian == 0 and $sum_qty_kodebar->qty_harian == 0) {
        //     $rata2 = 0;
        // } else {
        //     $rata2 = $sum_harga_kodebar->saldo_awal_harian / $sum_qty_kodebar->qty_harian;
        // }

        $data_update = [
            'saldoakhir_nilai' => $sum_harga_kodebar,

            'saldoakhir_qty' => $sum_saldo_qty_kodebar,

            'nilai_masuk' => $sum_nilai_masuk->nilai_masuk_harian,

            'QTY_MASUK' => $sum_qty_kodebar->qty_harian

            // 'HARGARAT' => $rata2
        ];

        // var_dump($data_update);
        // die;

        return $this->M_retur->updateStokAwal($data_update, $kodebar, $txtperiode);
    }

    public function updateRetur()
    {
        $id_retskbitem = $this->input->post('hidden_id_retskbitem');
        $txtperiode = $this->input->post('hidden_txtperiode');
        $kode_dev = $this->input->post('hidden_kode_dev');
        $no_ref_bkb = $this->input->post('hidden_norefbkb');

        $data_item_retur = [
            'kodebar' => $this->input->post('hidden_kode_barang'),
            'kodebartxt' => $this->input->post('hidden_kode_barang'),
            'nabar' => $this->input->post('txt_barang'),
            'grp' => $this->input->post('hidden_grup_barang'),
            'satuan' => $this->input->post('hidden_satuan_brg'),
            'blok' => $this->input->post('cmb_blok_sub'),
            'afd' => $this->input->post('cmb_afd_unit'),
            'kodebeban' => $this->input->post('hidden_kodebeban'),
            'kodebebantxt' => $this->input->post('hidden_kodebeban'),
            'ketbeban' => $this->input->post('txt_account_beban'),
            'kodesub' => $this->input->post('hidden_kodesub'),
            'kodesubtxt' => $this->input->post('hidden_kodesub'),
            'ketsub' => $this->input->post('txt_sub_beban'),
            'qty' => $this->input->post('txt_qty_retur'),
            'ket' => $this->input->post('txt_ket_rinci'),
        ];

        //cari harga
        $harga_item_bkb = $this->M_retur->cari_harga_bkb($no_ref_bkb, $data_item_retur['kodebar']);

        //cari periode di masukitem
        $periode = $this->M_retur->cari_periode_barang($id_retskbitem);

        //update stok awal harian
        if ($periode['qty'] != $data_item_retur['qty']) {
            $this->M_retur->editStokAwalHarian($data_item_retur['kodebar'], $periode['periode'], $periode['qty'], $data_item_retur['qty'], $harga_item_bkb, $kode_dev);
            $this->M_retur->editStokAwalBulananDevisi($data_item_retur['kodebar'], $periode['txtperiode'], $periode['qty'], $data_item_retur['qty'], $kode_dev);
        }

        //update stok awal
        $this->update_stok_awal($data_item_retur['kodebar'], $txtperiode);

        $result_update = $this->M_retur->update_retur($id_retskbitem, $data_item_retur);

        echo json_encode($result_update);
    }

    public function cancelUpdateRetur()
    {
        $id_retskbitem = $this->input->post('hidden_id_retskbitem');

        $output = $this->db_logistik_pt->get_where('ret_skbitem', ['id' => $id_retskbitem])->row_array();

        echo json_encode($output);
    }

    function cetak()
    {
        $noretur = $this->uri->segment('3');
        $id = $this->uri->segment('4');

        // $data['no_lpb'] = $no_lpb;
        // $data['id'] = $id;
        $data['retskb'] = $this->db_logistik_pt->get_where('retskb', array('id' => $id, 'noretur' => $noretur))->row();
        $data['ret_skbitem'] = $this->db_logistik_pt->get_where('ret_skbitem', array('noretur' => $noretur, 'norefretur' => $data['retskb']->norefretur))->result();

        $data['urut'] = $this->M_retur->urut_cetak($data['retskb']->norefretur);

        $norefretur = $data['retskb']->norefretur;
        $this->qrcode($noretur, $id, $norefretur);

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236],
            'setAutoTopMargin' => 'stretch',
            'orientation' => 'P'
        ]);

        // $lokasibuatlpb = substr($noref, 0, 3);
        // switch ($lokasibuatlpb) {
        //     case 'LPB': // HO
        //         $data['lokasilpb'] = "HO";
        //         break;
        //     case 'ROM': // RO
        //         $data['lokasilpb'] = "RO";
        //         break;
        //     case 'FAC': // PKS
        //         $data['lokasilpb'] = "PKS";
        //         break;
        //     case 'EST': // SITE
        //         $data['lokasilpb'] = "SITE";
        //         break;
        //     default:
        //         break;
        // }

        // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
        $mpdf->SetHTMLHeader('
                            <table width="100%" border="0" align="center">
                                <tr>
                                    <td rowspan="5" align="center" style="font-size:14px;font-weight:bold;">' . $data['retskb']->devisi . '</td>
                                </tr>
                                <!--tr>
                                    <td align="center" rowspan="5">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr-->
                            </table>
                            <hr style="width:100%;margin-top:7px;">
                            ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('v_returPrint', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function qrcode($no_retur, $id, $norefretur)
    {
        $this->load->library('Ciqrcode');
        // header("Content-Type: image/png");

        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/retur_bkb/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $id . '_' . $no_retur . '.png'; //buat name dari qr code

        // $params['data'] = site_url('lpb/cetak/'.$no_lpb.'/'.$id); //data yang akan di jadikan QR CODE
        $params['data'] = $norefretur; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }

    //Start Data Table Server Side
    function get_data_bkbitem()
    {
        $norefbkb = $this->input->post('norefbkb');
        $this->M_cari_bkbitem->getWhere($norefbkb);
        $list = $this->M_cari_bkbitem->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = '<button class="btn btn-success btn-xs" id="data_barang" name="data_barang"
                    data-nabar="' . $field->nabar . '" data-kodebar="' . $field->kodebar . '" 
                    data-satuan="' . $field->satuan . '" data-grp="' . $field->grp . '"
                    data-qty2="' . $field->qty2 . '" data-afd="' . $field->afd . '"
                    data-blok="' . $field->blok . '" data-kodebeban="' . $field->kodebeban . '"
                    data-kodesub="' . $field->kodesub . '" data-kode_dev="' . $field->kode_dev . '"
                    data-ketsub="' . $field->ketsub . '" data-txtperiode="' . $field->txtperiode . '" 
                    data-ketbeban="' . $field->ketbeban . '" data-no_ref="' . $field->NO_REF . '"
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
            "recordsTotal" => $this->M_cari_bkbitem->count_all(),
            "recordsFiltered" => $this->M_cari_bkbitem->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    //End Start Data Table Server Side

    public function get_qty_retur()
    {
        $no_ref = $this->input->post('no_ref');
        $kodebar = $this->input->post('kodebar');

        $output = $this->M_retur->get_qty_retur($no_ref, $kodebar);

        echo json_encode($output);
    }

    public function deleteItemRetur()
    {
        $id_retskbitem = $this->input->post('hidden_id_retskbitem');

        $data = $this->db_logistik_pt->delete('ret_skbitem', array('id' => $id_retskbitem));

        echo json_encode($data);
    }

    public function cekRetur()
    {
        $norefretur = $this->input->post('norefretur');

        $data = $this->M_retur->cekRetur($norefretur);

        echo json_encode($data);
    }

    public function deleteRetur()
    {
        $norefretur = $this->input->post('norefretur');

        $data = $this->M_retur->deleteRetur($norefretur);

        echo json_encode($data);
    }

    public function cekNoBa()
    {
        $no_ba = $this->input->post('no_ba');
        $no_ba_str = str_replace(' ', '', $no_ba);
        $data = $this->M_retur->cekNoBa($no_ba_str);

        if ($data['no_ba'] == $no_ba_str) {
            $data = 1;
        } else {
            $data = 0;
        }

        echo json_encode($data);
    }

    public function str()
    {
        $kalimat = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $text = str_replace(' ', '', $kalimat); // kode untuk menghilangkan spasi
        echo $text;
    }

    function get_detail_approval()
    {
        $id_retskb = $this->input->post('id_retskb');
        $result_noref = $this->M_approval_retur->get_noref($id_retskb);
        $this->M_approval_retur->getWhere($result_noref['norefretur']);

        $list = $this->M_approval_retur->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            if ($d->status_kasie_gudang == "1") {
                $status = "<span style='color: green'><b>DISETUJUI<br>" . $d->tgl_kasie_gudang . "</b></span>";
            } else {
                $status = "DALAM PROSES";
            }

            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $d->id;
            $row[] = '<font face="Verdana" size="2">' . $d->kodebar . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->nabar . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->satuan . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->qty . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->ket . '</font>';
            $row[] = $status;

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_approval_retur->count_all(),
            "recordsFiltered" => $this->M_approval_retur->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    public function approval_retur()
    {
        $id_ret_skbitem = $this->input->post('id_ret_skbitem');
        $output = $this->M_approval_retur->approval_retur($id_ret_skbitem);

        echo json_encode($output);
    }
}
