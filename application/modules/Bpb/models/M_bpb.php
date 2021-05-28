<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_bpb extends CI_Model
{

    var $table = 'noac'; //nama tabel dari database
    var $column_order = array(null, 'noid', 'noac', 'nama', 'group', 'type'); //field yang ada di table user
    var $column_search = array('noid', 'noac', 'nama', 'group', 'type'); //field yang diizin untuk pencarian 
    var $order = array('noid' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function where_datatables($cmb_no_ac)
    {
        // global $nopo;
        $this->no_ac = $cmb_no_ac;
        // return $nopo;
    }

    private function _get_datatables_query()
    {
        $eee = $this->no_ac;
        // $nopo = $this->input->post('nopo');
        $this->db_logistik->from($this->table);
        $this->db_logistik->where('general', $eee);
        // $this->db_logistik_pt->select('id', 'tglpo', 'noreftxt', 'nopotxt', 'nama_supply', 'lokasi_beli');
        // $this->db_logistik_pt->from('po');
        // $this->db_logistik_pt->order_by('id', 'desc');

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db_logistik->group_start();
                    $this->db_logistik->like($item, $_POST['search']['value']);
                } else {
                    $this->db_logistik->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db_logistik->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db_logistik->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db_logistik->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db_logistik->limit($_POST['length'], $_POST['start']);
        $query = $this->db_logistik->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db_logistik->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db_logistik->from($this->table);
        return $this->db_logistik->count_all_results();
    }
    // end server side table

    public function get_stok($kodebar)
    {
        $this->db_logistik_pt->select('QTY_MASUK, QTY_KELUAR');
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->from('stockawal');
        $stock_awal = $this->db_logistik_pt->get()->row_array();

        $stok = $stock_awal['QTY_MASUK'] - $stock_awal['QTY_KELUAR'];
        return $stok;
    }

    function simpan_rinci_bpb()
    {


        // $diberikan_kpd = $this->input->post('txt_diberikan_kpd');
        $keperluan      = $this->input->post('txt_untuk_keperluan');
        // $tgl           = $this->input->post('txt_tgl_bpb');
        $tgl            = date("Y-m-d", strtotime($this->input->post('txt_tgl_bpb')));
        $bagian         = $this->input->post('cmb_bagian');
        $alokasi        = $this->input->post('cmb_alokasi_est');
        $tm_tbm         = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $blok_sub       = $this->input->post('cmb_blok_sub');
        $tahun_tanam    = $this->input->post('cmb_tahun_tanam');
        $bahan          = $this->input->post('cmb_bahan');
        $no_acc         = $this->input->post('hidden_no_acc');
        $nama_acc       = $this->input->post('hidden_nama_acc');
        $kodebar        = $this->input->post('hidden_kode_barang');
        $nabar          = $this->input->post('hidden_nama_barang');
        $grup           = $this->input->post('hidden_grup_barang');
        $stok_tgl_ini   = $this->input->post('hidden_stok_tgl_ini');
        $satuan         = $this->input->post('hidden_satuan');
        $qty            = $this->input->post('txt_qty_diminta');
        $ket            = $this->input->post('txt_ket_rinci');
        $no_bpb         = $this->input->post('hidden_no_bpb');
        $id_bpb         = $this->input->post('hidden_id_bpb');
        $sess_lokasi    = $this->session->userdata('status_lokasi');
        $sess_periode   = $this->session->userdata('periode');
        $periode        = $this->session->userdata('ym_periode');
        // $periode        =  date("Ym",strtotime($sess_periode));
        $nobkb_ro       = "";
        $nopo_ro        = "";

        $bhnbakar        = $this->input->post('bhnbakar');
        $jns_alat        = $this->input->post('jns_alat');
        $kd_nmr        = $this->input->post('kd_nmr');
        $hm_km        = $this->input->post('hm_km');
        $lokasi_kerja       = $this->input->post('lokasi_kerja');




        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_id_bpb = "SELECT MAX(id)+1 as id_bpb FROM bpb";
        $generate_id_bpb = $this->db_logistik_pt->query($query_id_bpb)->row();
        $id_bpb = $generate_id_bpb->id_bpb;
        if (empty($id_bpb)) {
            $id_bpb = 1;
        }
        // var_dump($id_bpb);
        // exit();

        $query_id_bpbitem = "SELECT MAX(id)+1 as id_bpbitem FROM bpbitem";
        $generate_id_bpbitem = $this->db_logistik_pt->query($query_id_bpbitem)->row();
        $id_bpbitem = $generate_id_bpbitem->id_bpbitem;
        if (empty($id_bpbitem)) {
            $id_bpbitem = 1;
        }

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

        $digit = $dig_1 . $dig_2;

        // $ym = date("ym");

        // $query_bpb = "SELECT MAX(SUBSTRING(nobpb, 5)) as max_nobpb from bpb WHERE nobpb LIKE '$ym%'";
        $query_bpb = "SELECT MAX(SUBSTRING(nobpb, 5)) as max_nobpb from bpb WHERE nobpb LIKE '$digit%'";
        // var_dump($query_bpb);exit();
        $generate_bpb = $this->db_logistik_pt->query($query_bpb)->row();
        $noUrut_bpb = (int)($generate_bpb->max_nobpb);
        $noUrut_bpb++;
        $print_bpb = sprintf("%05s", $noUrut_bpb);

        if (empty($this->input->post('hidden_no_bpb'))) {
            $nobpb = $digit . $print_bpb;
        } else {
            $nobpb = $this->input->post('hidden_no_bpb');
        }

        $format_m_y = date("m/Y");

        if (empty($this->input->post('hidden_no_ref_bpb'))) {
            $norefbpb = $text1 . "-BPB/" . $text2 . "/" . $format_m_y . "/" . $nobpb; //EST-BPB/SWJ/06/15/001159 atau //EST-BPB/SWJ/10/18/71722
        } else {
            $norefbpb = $this->input->post('hidden_no_ref_bpb');
        }

        $databpb['id']              = $id_bpb;
        $databpb['nobpb']           = $nobpb;
        $databpb['norefbpb']        = $norefbpb;
        $databpb['nobkb_ro']        = $nobkb_ro;
        $databpb['nopo_ro']         = $nopo_ro;
        $databpb['tglbpb']          = $tgl . date(' H:i:s');
        $databpb['tglinput']        = date('Y-m-d');
        $databpb['jaminput']        = date('H:i:s');
        $databpb['periode']         = $periode;
        $databpb['alokasi']         = $alokasi;
        $databpb['pt']              = $this->session->userdata('pt');
        $databpb['kode']            = $this->session->userdata('kode_pt');
        // $databpb['kpd']             = "";
        $databpb['keperluan']       = $keperluan;
        $databpb['bag']             = $bagian;
        $databpb['batal']           = "0";
        $databpb['alasan_batal']    = NULL;
        $databpb['USER']            = $this->session->userdata('user');
        $databpb['cetak']           = "";
        $databpb['posting']         = "";
        $databpb['approval']        = "0";
        $databpb['req_rev_qty']        = "0";
        $databpb['bhn_bakar']        = $bhnbakar;
        $databpb['jn_alat']        = $jns_alat;
        $databpb['no_kode']        = $kd_nmr;
        $databpb['hm_km']        = $hm_km;
        $databpb['lok_kerja']        = $lokasi_kerja;

        $databpbitem['id']            = $id_bpbitem;
        $databpbitem['kodebar']       = $kodebar;
        $databpbitem['nabar']         = $nabar;
        $databpbitem['satuan']        = $satuan;
        $databpbitem['grp']           = $grup;
        $databpbitem['alokasi']       = $alokasi;
        $databpbitem['kodept']        = $this->session->userdata('kode_pt');
        $databpbitem['nobpb']         = $nobpb;
        $databpbitem['norefbpb']      = $norefbpb;
        $databpbitem['pt']            = $this->session->userdata('pt');
        $databpbitem['qty']           = $qty;
        $databpbitem['qty_disetujui'] = "0";
        $databpbitem['tglbpb']        = $tgl . date(' H:i:s');
        $databpbitem['tglinput']      = date('Y-m-d');
        $databpbitem['jaminput']      = date('H:i:s');
        $databpbitem['periode']       = $periode;
        $databpbitem['ket']           = $ket;
        $databpbitem['afd']           = $afd_unit;
        $databpbitem['blok']          = $blok_sub;
        $databpbitem['noadjust']      = "0";
        $databpbitem['kodebebantxt']  = $bahan;
        $databpbitem['ketbeban']      = NULL;
        $databpbitem['kodesubtxt']    = $no_acc;
        $databpbitem['ketsub']        = $nama_acc;
        $databpbitem['batal']         = "0";
        $databpbitem['alasan_batal']  = NULL;
        $databpbitem['USER']          = $this->session->userdata('user');
        $databpbitem['cetak']         = "";
        $databpbitem['posting']       = "";



        $query_max_id_approval_bpb = "SELECT max(id)+1 as max_id_approval_bpb from approval_bpb";
        $data_max_id_approval_bpb = $this->db_logistik_pt->query($query_max_id_approval_bpb)->row();

        $no_id_approval = $data_max_id_approval_bpb->max_id_approval_bpb;

        if (empty($no_id_approval)) {
            $no_id_approval = "1";
        }

        $data_approval_bpb['id']                = $no_id_approval;
        $data_approval_bpb['no_bpb']            = $nobpb;
        $data_approval_bpb['norefbpb']          = $norefbpb;
        $data_approval_bpb['kodebar']           = $kodebar;
        $data_approval_bpb['nabar']             = $nabar;
        $data_approval_bpb['qty_diminta']       = $qty;
        // $data_approval_bpb['qty_disetujui'] = "0";
        $data_approval_bpb['status_ktu']        = "0";
        $data_approval_bpb['tgl_ktu']           = NULL;
        $data_approval_bpb['ket_ktu']           = NULL;
        // $data_approval_bpb['status_mgr']        = "0";
        // $data_approval_bpb['tgl_mgr']           = NULL;
        // $data_approval_bpb['ket_mgr']           = NULL;
        $data_approval_bpb['status_gm']         = "0";
        $data_approval_bpb['tgl_gm']            = NULL;
        $data_approval_bpb['ket_gm']            = NULL;
        $data_approval_bpb['flag_req_rev_qty']  = "0";

        if (empty($this->input->post('hidden_no_bpb'))) {

            $this->db_logistik_pt->insert('bpb', $databpb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpb = TRUE;
            } else {
                $bool_bpb = FALSE;
            }

            $this->db_logistik_pt->insert('bpbitem', $databpbitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpbitem = TRUE;
            } else {
                $bool_bpbitem = FALSE;
            }

            $this->db_logistik_pt->insert('approval_bpb', $data_approval_bpb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_approval_bpb = TRUE;
            } else {
                $bool_approval_bpb = FALSE;
            }


            // $this->db_logistik_pt->insert('bpb_booking', $databpb);
            // if ($this->db_logistik_pt->affected_rows() > 0) {
            //     $bool_bpb = TRUE;
            // } else {
            //     $bool_bpb = FALSE;
            // }

            // $this->db_logistik_pt->insert('bpbitem_booking', $databpbitem);
            // if ($this->db_logistik_pt->affected_rows() > 0) {
            //     $bool_bpb = TRUE;
            // } else {
            //     $bool_bpb = FALSE;
            // }

            if ($bool_bpb === TRUE && $bool_bpbitem === TRUE && $bool_approval_bpb === TRUE) {
                // if ($bool_bpb === TRUE && $bool_bpbitem === TRUE){
                return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb, 'kodebar' => $kodebar);
            } else {
                return FALSE;
            }
        } else {
            $nobpb      = $this->input->post('hidden_no_bpb');

            $kodebar    = $this->input->post('hidden_kode_barang');
            $nabar      = $this->input->post('hidden_nama_barang');

            $query = "SELECT * FROM bpbitem WHERE afd = '$afd_unit' AND blok = '$blok_sub' AND nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND (kodebar = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);

            if ($check_brg->num_rows() > 0) {
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada LPB yang sama ***/
            else {
                $this->db_logistik_pt->insert('bpbitem', $databpbitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_bpbitem = TRUE;
                } else {
                    $bool_bpbitem = FALSE;
                }

                $this->db_logistik_pt->insert('approval_bpb', $data_approval_bpb);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_approval_bpb = TRUE;
                } else {
                    $bool_approval_bpb = FALSE;
                }

                $this->db_logistik_pt->insert('bpbitem_booking', $databpbitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_bpb = TRUE;
                } else {
                    $bool_bpb = FALSE;
                }

                if ($bool_bpbitem === TRUE && $bool_approval_bpb === TRUE) {
                    return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb, 'kodebar' => $kodebar);
                } else {
                    return FALSE;
                }
            }
        }
    }

    function ubah_rinci_bpb()
    {
        $keperluan      = $this->input->post('txt_untuk_keperluan');
        // $tgl           = $this->input->post('txt_tgl_bpb');
        $tgl            = date("Y-m-d", strtotime($this->input->post('txt_tgl_bpb')));
        $bagian         = $this->input->post('cmb_bagian');
        $alokasi        = $this->input->post('cmb_alokasi_est');
        $tm_tbm         = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $blok_sub       = $this->input->post('cmb_blok_sub');
        $tahun_tanam    = $this->input->post('cmb_tahun_tanam');
        $bahan          = $this->input->post('cmb_bahan');
        $no_acc         = $this->input->post('hidden_no_acc');
        $nama_acc       = $this->input->post('hidden_nama_acc');
        $kodebar        = $this->input->post('hidden_kode_barang');
        $nabar          = $this->input->post('hidden_nama_barang');
        $grup           = $this->input->post('hidden_grup_barang');
        $stok_tgl_ini   = $this->input->post('hidden_stok_tgl_ini');
        $satuan         = $this->input->post('hidden_satuan');
        $qty            = $this->input->post('txt_qty_diminta');
        $ket            = $this->input->post('txt_ket_rinci');
        $nobpb          = $this->input->post('hidden_no_bpb');
        $norefbpb       = $this->input->post('hidden_no_ref_bpb');
        $id_bpb         = $this->input->post('hidden_id_bpb');
        $id_bpbitem     = $this->input->post('hidden_id_bpbitem');
        $sess_lokasi    = $this->session->userdata('status_lokasi');
        $sess_periode   = $this->session->userdata('periode');
        $periode        = $this->session->userdata('ym_periode');
        // $periode        =  date("Ym",strtotime($sess_periode));
        $nobkb_ro       = "";
        $nopo_ro        = "";
        $bhnbakar        = $this->input->post('bhnbakar');
        $jns_alat        = $this->input->post('jns_alat');
        $kd_nmr        = $this->input->post('kd_nmr');
        $hm_km        = $this->input->post('hm_km');
        $lokasi_kerja       = $this->input->post('lokasi_kerja');


        $databpb['id']              = $id_bpb;
        $databpb['nobpb']           = $nobpb;
        $databpb['nobkb_ro']        = $nobkb_ro;
        $databpb['nopo_ro']         = $nopo_ro;
        $databpb['tglbpb']          = $tgl . date(' H:i:s');
        $databpb['tglinput']        = date('Y-m-d');
        $databpb['jaminput']        = date('H:i:s');
        $databpb['periode']         = $periode;
        $databpb['alokasi']         = $alokasi;
        $databpb['pt']              = $this->session->userdata('pt');
        $databpb['kode']            = $this->session->userdata('kode_pt');
        // $databpb['kpd']             = "";
        $databpb['keperluan']       = $keperluan;
        $databpb['bag']             = $bagian;
        $databpb['batal']           = "0";
        $databpb['alasan_batal']    = NULL;
        $databpb['USER']            = $this->session->userdata('user');
        $databpb['cetak']           = "";
        $databpb['posting']         = "";
        $databpb['bhn_bakar']        = $bhnbakar;
        $databpb['jn_alat']        = $jns_alat;
        $databpb['no_kode']        = $kd_nmr;
        $databpb['hm_km']        = $hm_km;
        $databpb['lok_kerja']        = $lokasi_kerja;

        $databpbitem['id']            = $id_bpbitem;
        $databpbitem['kodebar']       = $kodebar;
        $databpbitem['nabar']         = $nabar;
        $databpbitem['satuan']        = $satuan;
        $databpbitem['grp']           = $grup;
        $databpbitem['alokasi']       = $alokasi;
        $databpbitem['kodept']        = $this->session->userdata('kode_pt');
        $databpbitem['nobpb']         = $nobpb;
        $databpbitem['pt']            = $this->session->userdata('pt');
        $databpbitem['qty']           = $qty;
        $databpbitem['tglbpb']        = $tgl . date(' H:i:s');
        $databpbitem['tglinput']      = date('Y-m-d');
        $databpbitem['jaminput']      = date('H:i:s');
        $databpbitem['periode']       = $periode;
        $databpbitem['ket']           = $ket;
        $databpbitem['afd']           = $afd_unit;
        $databpbitem['blok']          = $blok_sub;
        $databpbitem['noadjust']      = "0";
        $databpbitem['kodebebantxt']  = $bahan;
        $databpbitem['ketbeban']      = NULL;
        $databpbitem['kodesubtxt']    = $no_acc;
        $databpbitem['ketsub']        = $nama_acc;
        $databpbitem['batal']         = "0";
        $databpbitem['alasan_batal']  = NULL;
        $databpbitem['USER']          = $this->session->userdata('user');
        $databpbitem['cetak']         = "";
        $databpbitem['posting']       = "";

        $query_max_id_approval_bpb = "SELECT max(id) as max_id_approval_bpb from approval_bpb";
        $data_max_id_approval_bpb = $this->db_logistik_pt->query($query_max_id_approval_bpb)->row();

        $no_id_approval = $data_max_id_approval_bpb->max_id_approval_bpb;

        if (empty($no_id_approval)) {
            $no_id_approval = "1";
        }

        $this->db_logistik_pt->set($databpb);
        $this->db_logistik_pt->where('id', $id_bpb);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpb');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpb = TRUE;
        } else {
            $bool_bpb = FALSE;
        }

        $this->db_logistik_pt->set($databpbitem);
        $this->db_logistik_pt->where('id', $id_bpbitem);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpbitem');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpbitem = TRUE;
        } else {
            $bool_bpbitem = FALSE;
        }

        $data_approvalbpb['qty_diminta'] = $qty;

        $this->db_logistik_pt->set($data_approvalbpb);
        $this->db_logistik_pt->where('no_bpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->update('approval_bpb');

        $this->db_logistik_pt->set($databpb);
        $this->db_logistik_pt->where('id', $id_bpb);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpb_booking');

        $this->db_logistik_pt->set($databpbitem);
        $this->db_logistik_pt->where('id', $id_bpbitem);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpbitem_booking');

        if ($bool_bpbitem === TRUE) {
            return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb, 'kodebar' => $kodebar);
        } else {
            return FALSE;
        }
    }

    public function updateitem($nobpb, $norefbpb, $kodebar, $dataedit_approval)
    {
        $this->db_logistik_pt->where('no_bpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->update('approval_bpb', $dataedit_approval);

        return TRUE;
    }
    public function update_item($nobpb, $norefbpb, $aprrove, $kodebar, $alasan)
    {
        $this->db_logistik_pt->set('approval', '1');
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->update('bpb');

        //approval bpb item (merubah status approval_item menjadi 1)
        if ($aprrove == '1') {
            $this->db_logistik_pt->set('approval_item', '1');
        } else {
            $this->db_logistik_pt->set('approval_item', '0');
            $this->db_logistik_pt->set('batal', '1');
            $this->db_logistik_pt->set('alasan_batal', $alasan);
        }
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        return $this->db_logistik_pt->update('bpbitem');

        // return TRUE;
    }

    public function cekAprrove($nobpb, $kodebar, $norefbpb)
    {
        $cek = "SELECT nobpb, kodebar, norefbpb, approval_item FROM bpbitem WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";

        $approve = $this->db_logistik_pt->query($cek)->row();

        $d = $approve->approval_item;
        if ($d === null) {
            $data = [
                'status' => true
            ];
        } else {
            $data = [
                'status' => false
            ];
        }

        return $data;
    }

    public function batalAprrove($nobpb, $kodebar, $norefbpb)
    {
        $cek = "SELECT nobpb, kodebar, norefbpb, batal FROM bpbitem WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";
        // $query = "SELECT nobpb, kodebar, norefbpb, approval_item FROM bpbitem WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";

        $approve = $this->db_logistik_pt->query($cek)->row();
        // $dt = $this->db_logistik_pt->query($query)->row();

        $d = $approve['batal'];


        // $c = $dt->approval_item;

        if ($d != 0) {
            $data = [
                'status' => false
            ];
        } else {
            $data = [
                'status' => true
            ];
        }

        return $data;
    }
}

/* End of file M_bpb.php */
