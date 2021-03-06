<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pp extends CI_Model
{

    var $table = 'po'; //nama tabel dari database
    var $column_order = array(null, 'id', 'tglpo', 'nopotxt', 'noreftxt', 'kode_supply', 'nama_supply', 'totalbayar', 'bayar', 'grup', 'terbayar'); //field yang ada di table supplier  
    var $column_search = array('noreftxt', 'nopotxt', 'nama_supply', 'tglpo'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'DESC'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        // $Value = ;

        # code...
        $this->db_logistik_pt->select('id, DATE(tglpo) as tglpo, nopotxt, noreftxt, kode_supply, nama_supply, totalbayar, bayar, grup, terbayar');
        $this->db_logistik_pt->from($this->table);
        $this->db_logistik_pt->where('status_lpb', 1);
        $this->db_logistik_pt->order_by('id', 'desc');


        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db_logistik_pt->group_start();
                    $this->db_logistik_pt->like($item, $_POST['search']['value']);
                } else {
                    $this->db_logistik_pt->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->db_logistik_pt->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db_logistik_pt->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db_logistik_pt->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db_logistik_pt->limit($_POST['length'], $_POST['start']);
        $query = $this->db_logistik_pt->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db_logistik_pt->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db_logistik_pt->from($this->table);
        return $this->db_logistik_pt->count_all_results();
    }

    function simpan_pp()
    {
        $query_id_pp = "SELECT MAX(id)+1 as id_pp FROM pp";
        $generate_id_pp = $this->db_logistik_pt->query($query_id_pp)->row();
        $id_pp = $generate_id_pp->id_pp;
        if (empty($id_pp)) {
            $id_pp = 1;
        }

        $sess_lokasi = $this->session->userdata('status_lokasi');

        if ($sess_lokasi == "HO") {
            $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $dig_1 = "6";
            $dig_2 = "6";
        } else if ($sess_lokasi == "RO") {
            $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $dig_1 = "3";
            $dig_2 = "3";
        }

        $query_no_pp = "SELECT MAX(SUBSTR(nopptxt,3,4)) AS max_id_pp FROM pp ORDER BY id DESC";
        $generate_id_pp = $this->db_logistik_pt->query($query_no_pp)->row();
        $noUrut_pp = (int)($generate_id_pp->max_id_pp);
        $noUrut_pp++;
        $print_pp = sprintf("%04s", $noUrut_pp);

        if (empty($this->input->post('hidden_no_pp'))) {
            $nopp = $dig_1 . $dig_2 . $print_pp;
        } else {
            $nopp = $this->input->post('hidden_no_pp');
        }

        $tglpp = date("Y-m-d H:i:s", strtotime($this->input->post('txt_tgl_pp')));
        $tglpptxt = date("Ymd", strtotime($this->input->post('txt_tgl_pp')));
        $tglpo = date("Y-m-d H:i:s", strtotime($this->input->post('txt_tgl_po')));
        $tglpotxt = date("Ymd", strtotime($this->input->post('txt_tgl_po')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');

        if (!empty($this->input->post('txt_tgl_voucher'))) {
            $tgl_vou = date("Y-m-d", strtotime($this->input->post('txt_tgl_voucher')));
            $tgl_voutxt = date("Ymd", strtotime($this->input->post('txt_tgl_voucher')));
        } else {
            $tgl_vou = NULL;
            $tgl_voutxt = NULL;
        }

        if ($this->input->post('txt_no_voucher')) {
            $no_vou = $this->input->post('txt_no_voucher');
        } else {
            $no_vou = NULL;
        }

        $jumlah = $this->input->post('txt_jumlah');
        $total_po = $this->input->post('txt_total_po');

        $data_pp['id']              = $id_pp;
        $data_pp['nopp']            = $nopp;
        $data_pp['nopptxt']         = $nopp;
        $data_pp['nopo']            = $this->input->post('hidden_no_po');
        $data_pp['nopotxt']         = $this->input->post('hidden_no_po');
        $data_pp['tglpp']           = $tglpp;
        $data_pp['tglpptxt']        = $tglpptxt;
        $data_pp['tglpo']           = $tglpo;
        $data_pp['tglpotxt']        = $tglpotxt;
        $data_pp['ref_po']          = $this->input->post('txt_no_ref_po');
        $data_pp['kode_supply']     = $this->input->post('kd_supplier');
        $data_pp['kode_supplytxt']  = $this->input->post('kd_supplier');
        $data_pp['nama_supply']     = $this->input->post('txt_supplier');
        $data_pp['kepada']          = $this->input->post('txt_dibayar_ke');
        $data_pp['bayar']           = $this->input->post('txt_pembayaran');
        $data_pp['KURS']            = $this->input->post('hidden_kurs');
        $data_pp['jumlah']          = $jumlah;
        $data_pp['pajak']           = $this->input->post('txt_pajak');
        $data_pp['jumlahpo']        = $this->input->post('txt_nilai_po');
        $data_pp['KODE_BPO']        = $this->input->post('txt_nilai_bpo1');
        $data_pp['jumlah_bpo']      = $this->input->post('txt_nilai_bpo2');
        $data_pp['total_po']        = $total_po;
        $data_pp['terbilang']       = $this->input->post('txt_terbilang');
        $data_pp['ket']             = $this->input->post('txt_keterangan');
        // $data_pp['pt']              = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pp['pt']              = $this->session->userdata('pt');
        $data_pp['kodept']          = $this->session->userdata('kode_pt');
        $data_pp['periode']         = $periode . " 00:00:00";
        $data_pp['txtperiode']      = $txtperiode;
        $data_pp['user']            = $this->session->userdata('user');
        $data_pp['tglisi']          = date("Y-m-d H:i:s");
        $data_pp['status_vou']      = "0";
        // $data_pp['status_vou']      = "1";
        $data_pp['no_vou']          = $no_vou;
        $data_pp['no_voutxt']       = $no_vou;
        $data_pp['tgl_vou']         = $tgl_vou;
        $data_pp['tgl_voutxt']      = $tgl_voutxt;
        $data_pp['tgl_bayar_real']  = NULL;
        $data_pp['kasir_bayar']     = $this->input->post('txt_jumlah');
        $data_pp['kode_budget']     = "0";
        $data_pp['grup']            = $this->input->post('hidden_grup');
        $data_pp['main_account']    = $this->input->post('hidden_main_account');
        $data_pp['nama_account']    = $this->input->post('hidden_nama_account');
        $data_pp['batal']           = "0";

        $query_id_logistik_caba = "SELECT max(id)+1 as new_id FROM pp_logistik";
        $data_logistik_caba = $this->db_caba->query($query_id_logistik_caba)->row();

        $id_pplogistik_caba = $data_logistik_caba->new_id;
        if (empty($data_logistik_caba->new_id)) {
            $id_pplogistik_caba = "1";
        }

        $data_pplogistikdicaba['id']                = $id_pplogistik_caba;
        $data_pplogistikdicaba['RM']                = "0";
        $data_pplogistikdicaba['nopp']              = $nopp;
        $data_pplogistikdicaba['nopptxt']           = $nopp;
        $data_pplogistikdicaba['nopo']              = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['nopotxt']           = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['ref_po']            = $this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['tglpp']             = $tglpp;
        $data_pplogistikdicaba['tglpptxt']          = $tglpptxt;
        $data_pplogistikdicaba['tglpo']             = $tglpo;
        $data_pplogistikdicaba['tglpotxt']          = $tglpotxt;
        $data_pplogistikdicaba['kode_supply']       = $this->input->post('kd_supplier');
        $data_pplogistikdicaba['kode_supplytxt']    = $this->input->post('kd_supplier');
        $data_pplogistikdicaba['nama_supply']       = $this->input->post('txt_supplier');
        $data_pplogistikdicaba['kepada']            = $this->input->post('txt_dibayar_ke');
        $data_pplogistikdicaba['bayar']             = $this->input->post('txt_pembayaran');
        $data_pplogistikdicaba['jumlah']            = $jumlah;
        $data_pplogistikdicaba['PAJAK']             = $this->input->post('txt_pajak');
        $data_pplogistikdicaba['COA_PAJAK']         = NULL;
        $data_pplogistikdicaba['jumlahpo']          = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['HARGAPO']           = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['terbilang']         = $this->input->post('txt_terbilang');
        $data_pplogistikdicaba['ket']               = $this->input->post('txt_keterangan');
        // $data_pplogistikdicaba['pt']                = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pplogistikdicaba['pt']                = $this->session->userdata('pt');
        $data_pplogistikdicaba['kodept']            = $this->session->userdata('kode_pt');
        $data_pplogistikdicaba['periode']           = $periode . " 00:00:00";
        $data_pplogistikdicaba['txtperiode']        = $txtperiode;
        $data_pplogistikdicaba['user']              = $this->session->userdata('user');
        $data_pplogistikdicaba['tglisi']            = date("Y-m-d H:i:s");
        $data_pplogistikdicaba['status_vou']        = "0";
        // $data_pplogistikdicaba['status_vou']        = "1";
        $data_pplogistikdicaba['no_vou']            = $no_vou;
        $data_pplogistikdicaba['no_voutxt']         = $no_vou;
        $data_pplogistikdicaba['tgl_vou']           = $tgl_vou;
        $data_pplogistikdicaba['tgl_voutxt']        = $tgl_voutxt;
        $data_pplogistikdicaba['TGL_BAYAR_REAL']    = NULL;
        $data_pplogistikdicaba['kode_budget']       = "0";
        $data_pplogistikdicaba['grup']              = $this->input->post('hidden_grup');
        $data_pplogistikdicaba['main_account']      = $this->input->post('hidden_main_account');
        $data_pplogistikdicaba['nama_account']      = $this->input->post('hidden_nama_account');
        $data_pplogistikdicaba['jum_bpo']           = $this->input->post('txt_nilai_bpo2');
        $data_pplogistikdicaba['kode_bpo']          = $this->input->post('txt_nilai_bpo1');
        $data_pplogistikdicaba['ket_bpo']           = "Biaya atas PO:" . $this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['batal']             = "0";

        if (empty($this->input->post('hidden_no_pp'))) {
            $this->db_logistik_pt->insert('pp', $data_pp);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            $data_pp['keterangan_transaksi'] = "INSERT";
            $data_pp['log'] = $this->session->userdata('user') . " membuat PP baru $nopp";
            $data_pp['tgl_transaksi'] = date('Y-m-d H:i:s');
            $data_pp['user_transaksi'] = $this->session->userdata('user');
            $data_pp['client_ip'] = $this->input->ip_address();
            $data_pp['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('pp_history', $data_pp);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp_history = TRUE;
            } else {
                $bool_pp_history = FALSE;
            }

            $this->db_caba->insert('pp_logistik', $data_pplogistikdicaba);
            if ($this->db_caba->affected_rows() > 0) {
                $bool_pp_logistik_caba = TRUE;
            } else {
                $bool_pp_logistik_caba = FALSE;
            }

            $no_ref_po = $this->input->post('txt_no_ref_po');
            $query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$no_ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();


            if ($bool_pp === TRUE && $bool_pp_history === TRUE) {
                return array('status' => TRUE, 'nopp' => $nopp, 'que' => $data_pplogistikdicaba);
            } else {
                return FALSE;
            }
        } else {
            $id_pp = $this->input->post('id_pp');
            $no_pp = $this->input->post('hidden_no_pp');

            $user = $this->session->userdata('user');
            $ip = $this->input->ip_address();
            $platform = $this->platform->agent();

            $query_1 = "INSERT INTO pp_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)','$user mengupdate PP $no_pp', NOW(), '$user', '$ip', '$platform' FROM pp a WHERE a.id = $id_pp AND a.nopptxt = $no_pp";
            // var_dump($query_1);exit();
            $this->db_logistik_pt->query($query_1);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp_history = TRUE;
            } else {
                $bool_pp_history = FALSE;
            }

            $this->db_caba->set($data_pplogistikdicaba);
            $this->db_caba->where('id', $id_pp);
            $this->db_caba->where('nopptxt', $no_pp);
            $this->db_caba->update('pp_logistik');
            if ($this->db_caba->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            $this->db_logistik_pt->set($data_pp);
            $this->db_logistik_pt->where('id', $id_pp);
            $this->db_logistik_pt->where('nopptxt', $no_pp);
            $this->db_logistik_pt->update('pp');
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            if ($bool_pp_history === TRUE && $bool_pp === TRUE) {
                return array('status' => TRUE);
            } else {
                return FALSE;
            }
        }
    }

    public function update_pp()
    {
        $query_id_pp = "SELECT MAX(id)+1 as id_pp FROM pp";
        $generate_id_pp = $this->db_logistik_pt->query($query_id_pp)->row();
        $id_pp = $generate_id_pp->id_pp;
        if (empty($id_pp)) {
            $id_pp = 1;
        }

        $sess_lokasi = $this->session->userdata('status_lokasi');

        if ($sess_lokasi == "HO") {
            $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $dig_1 = "6";
            $dig_2 = "6";
        } else if ($sess_lokasi == "RO") {
            $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $dig_1 = "3";
            $dig_2 = "3";
        }

        $query_no_pp = "SELECT MAX(SUBSTR(nopptxt,3,4)) AS max_id_pp FROM pp ORDER BY id DESC";
        $generate_id_pp = $this->db_logistik_pt->query($query_no_pp)->row();
        $noUrut_pp = (int)($generate_id_pp->max_id_pp);
        $noUrut_pp++;
        $print_pp = sprintf("%04s", $noUrut_pp);

        if (empty($this->input->post('hidden_no_pp'))) {
            $nopp = $dig_1 . $dig_2 . $print_pp;
        } else {
            $nopp = $this->input->post('hidden_no_pp');
        }

        $tglpp = date("Y-m-d H:i:s", strtotime($this->input->post('txt_tgl_pp')));
        $tglpptxt = date("Ymd", strtotime($this->input->post('txt_tgl_pp')));
        $tglpo = date("Y-m-d H:i:s", strtotime($this->input->post('txt_tgl_po')));
        $tglpotxt = date("Ymd", strtotime($this->input->post('txt_tgl_po')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');

        if (!empty($this->input->post('txt_tgl_voucher'))) {
            $tgl_vou = date("Y-m-d", strtotime($this->input->post('txt_tgl_voucher')));
            $tgl_voutxt = date("Ymd", strtotime($this->input->post('txt_tgl_voucher')));
        } else {
            $tgl_vou = NULL;
            $tgl_voutxt = NULL;
        }

        if ($this->input->post('txt_no_voucher')) {
            $no_vou = $this->input->post('txt_no_voucher');
        } else {
            $no_vou = NULL;
        }

        $jumlah = $this->input->post('txt_jumlah');
        $total_po = $this->input->post('txt_total_po');

        $data_pp['id']              = $id_pp;
        $data_pp['nopp']            = $nopp;
        $data_pp['nopptxt']         = $nopp;
        $data_pp['nopo']            = $this->input->post('hidden_no_po');
        $data_pp['nopotxt']         = $this->input->post('hidden_no_po');
        $data_pp['tglpp']           = $tglpp;
        $data_pp['tglpptxt']        = $tglpptxt;
        $data_pp['tglpo']           = $tglpo;
        $data_pp['tglpotxt']        = $tglpotxt;
        $data_pp['ref_po']          = $this->input->post('txt_no_ref_po');
        $data_pp['kode_supply']     = $this->input->post('kd_supplier');
        $data_pp['kode_supplytxt']  = $this->input->post('kd_supplier');
        $data_pp['nama_supply']     = $this->input->post('txt_supplier');
        $data_pp['kepada']          = $this->input->post('txt_dibayar_ke');
        $data_pp['bayar']           = $this->input->post('txt_pembayaran');
        $data_pp['KURS']            = $this->input->post('hidden_kurs');
        $data_pp['jumlah']          = $jumlah;
        $data_pp['pajak']           = $this->input->post('txt_pajak');
        $data_pp['jumlahpo']        = $this->input->post('txt_nilai_po');
        $data_pp['KODE_BPO']        = $this->input->post('txt_nilai_bpo1');
        $data_pp['jumlah_bpo']      = $this->input->post('txt_nilai_bpo2');
        $data_pp['total_po']        = $total_po;
        $data_pp['terbilang']       = $this->input->post('txt_terbilang');
        $data_pp['ket']             = $this->input->post('txt_keterangan');
        // $data_pp['pt']              = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pp['pt']              = $this->session->userdata('pt');
        $data_pp['kodept']          = $this->session->userdata('kode_pt');
        $data_pp['periode']         = $periode . " 00:00:00";
        $data_pp['txtperiode']      = $txtperiode;
        $data_pp['user']            = $this->session->userdata('user');
        $data_pp['tglisi']          = date("Y-m-d H:i:s");
        $data_pp['status_vou']      = "0";
        // $data_pp['status_vou']      = "1";
        $data_pp['no_vou']          = $no_vou;
        $data_pp['no_voutxt']       = $no_vou;
        $data_pp['tgl_vou']         = $tgl_vou;
        $data_pp['tgl_voutxt']      = $tgl_voutxt;
        $data_pp['tgl_bayar_real']  = NULL;
        $data_pp['kasir_bayar']     = $this->input->post('txt_jumlah');
        $data_pp['kode_budget']     = "0";
        $data_pp['grup']            = $this->input->post('hidden_grup');
        $data_pp['main_account']    = $this->input->post('hidden_main_account');
        $data_pp['nama_account']    = $this->input->post('hidden_nama_account');
        $data_pp['batal']           = "0";

        $query_id_logistik_caba = "SELECT max(id)+1 as new_id FROM pp_logistik";
        $data_logistik_caba = $this->db_caba->query($query_id_logistik_caba)->row();

        $id_pplogistik_caba = $data_logistik_caba->new_id;
        if (empty($data_logistik_caba->new_id)) {
            $id_pplogistik_caba = "1";
        }

        $data_pplogistikdicaba['id']                = $id_pplogistik_caba;
        $data_pplogistikdicaba['RM']                = "0";
        $data_pplogistikdicaba['nopp']              = $nopp;
        $data_pplogistikdicaba['nopptxt']           = $nopp;
        $data_pplogistikdicaba['nopo']              = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['nopotxt']           = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['ref_po']            = $this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['tglpp']             = $tglpp;
        $data_pplogistikdicaba['tglpptxt']          = $tglpptxt;
        $data_pplogistikdicaba['tglpo']             = $tglpo;
        $data_pplogistikdicaba['tglpotxt']          = $tglpotxt;
        $data_pplogistikdicaba['kode_supply']       = $this->input->post('kd_supplier');
        $data_pplogistikdicaba['kode_supplytxt']    = $this->input->post('kd_supplier');
        $data_pplogistikdicaba['nama_supply']       = $this->input->post('txt_supplier');
        $data_pplogistikdicaba['kepada']            = $this->input->post('txt_dibayar_ke');
        $data_pplogistikdicaba['bayar']             = $this->input->post('txt_pembayaran');
        $data_pplogistikdicaba['jumlah']            = $jumlah;
        $data_pplogistikdicaba['PAJAK']             = $this->input->post('txt_pajak');
        $data_pplogistikdicaba['COA_PAJAK']         = NULL;
        $data_pplogistikdicaba['jumlahpo']          = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['HARGAPO']           = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['terbilang']         = $this->input->post('txt_terbilang');
        $data_pplogistikdicaba['ket']               = $this->input->post('txt_keterangan');
        // $data_pplogistikdicaba['pt']                = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pplogistikdicaba['pt']                = $this->session->userdata('pt');
        $data_pplogistikdicaba['kodept']            = $this->session->userdata('kode_pt');
        $data_pplogistikdicaba['periode']           = $periode . " 00:00:00";
        $data_pplogistikdicaba['txtperiode']        = $txtperiode;
        $data_pplogistikdicaba['user']              = $this->session->userdata('user');
        $data_pplogistikdicaba['tglisi']            = date("Y-m-d H:i:s");
        $data_pplogistikdicaba['status_vou']        = "0";
        // $data_pplogistikdicaba['status_vou']        = "1";
        $data_pplogistikdicaba['no_vou']            = $no_vou;
        $data_pplogistikdicaba['no_voutxt']         = $no_vou;
        $data_pplogistikdicaba['tgl_vou']           = $tgl_vou;
        $data_pplogistikdicaba['tgl_voutxt']        = $tgl_voutxt;
        $data_pplogistikdicaba['TGL_BAYAR_REAL']    = NULL;
        $data_pplogistikdicaba['kode_budget']       = "0";
        $data_pplogistikdicaba['grup']              = $this->input->post('hidden_grup');
        $data_pplogistikdicaba['main_account']      = $this->input->post('hidden_main_account');
        $data_pplogistikdicaba['nama_account']      = $this->input->post('hidden_nama_account');
        $data_pplogistikdicaba['jum_bpo']           = $this->input->post('txt_nilai_bpo2');
        $data_pplogistikdicaba['kode_bpo']          = $this->input->post('txt_nilai_bpo1');
        $data_pplogistikdicaba['ket_bpo']           = "Biaya atas PO:" . $this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['batal']             = "0";

        if (empty($this->input->post('hidden_no_pp'))) {
            $this->db_logistik_pt->insert('pp', $data_pp);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            $data_pp['keterangan_transaksi'] = "INSERT";
            $data_pp['log'] = $this->session->userdata('user') . " membuat PP baru $nopp";
            $data_pp['tgl_transaksi'] = date('Y-m-d H:i:s');
            $data_pp['user_transaksi'] = $this->session->userdata('user');
            $data_pp['client_ip'] = $this->input->ip_address();
            $data_pp['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('pp_history', $data_pp);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp_history = TRUE;
            } else {
                $bool_pp_history = FALSE;
            }

            $this->db_caba->insert('pp_logistik', $data_pplogistikdicaba);
            if ($this->db_caba->affected_rows() > 0) {
                $bool_pp_logistik_caba = TRUE;
            } else {
                $bool_pp_logistik_caba = FALSE;
            }

            $no_ref_po = $this->input->post('txt_no_ref_po');
            $query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$no_ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();


            if ($bool_pp === TRUE && $bool_pp_history === TRUE) {
                return array('status' => TRUE, 'nopp' => $nopp, 'que' => $data_pplogistikdicaba);
            } else {
                return FALSE;
            }
        } else {
            $id_pp = $this->input->post('id_pp');
            $no_pp = $this->input->post('hidden_no_pp');

            $user = $this->session->userdata('user');
            $ip = $this->input->ip_address();
            $platform = $this->platform->agent();

            $query_1 = "INSERT INTO pp_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)','$user mengupdate PP $no_pp', NOW(), '$user', '$ip', '$platform' FROM pp a WHERE a.id = $id_pp AND a.nopptxt = $no_pp";
            // var_dump($query_1);exit();
            $this->db_logistik_pt->query($query_1);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp_history = TRUE;
            } else {
                $bool_pp_history = FALSE;
            }

            $this->db_caba->set($data_pplogistikdicaba);
            $this->db_caba->where('id', $id_pp);
            $this->db_caba->where('nopptxt', $no_pp);
            $this->db_caba->update('pp_logistik');
            if ($this->db_caba->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            $this->db_logistik_pt->set($data_pp);
            $this->db_logistik_pt->where('id', $id_pp);
            $this->db_logistik_pt->where('nopptxt', $no_pp);
            $this->db_logistik_pt->update('pp');
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_pp = TRUE;
            } else {
                $bool_pp = FALSE;
            }

            if ($bool_pp_history === TRUE && $bool_pp === TRUE) {
                return array('status' => TRUE);
            } else {
                return FALSE;
            }
        }
    }
}

/* End of file M_pp.php */
