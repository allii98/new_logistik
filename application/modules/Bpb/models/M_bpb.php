<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_bpb extends CI_Model
{

    var $table = 'noac'; //nama tabel dari database
    var $column_order = array(null, 'NOID', 'noac', 'nama', 'group', 'type'); //field yang ada di table user
    var $column_search = array('noac', 'nama', 'group', 'type'); //field yang diizin untuk pencarian 
    var $order = array('noac' => 'ASC'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function where_datatables($dt, $pt, $cmb_bahan, $mutasi_pt, $mutasi_lokal, $devisi)
    {
        // global $nopo;
        $this->dt = $dt;
        $this->pt = $pt;
        $this->cmb_bahan = $cmb_bahan;
        $this->mutasi_pt = $mutasi_pt;
        $this->mutasi_lokal = $mutasi_lokal;
        $this->devisi = $devisi;
        // return $nopo;
    }

    private function _get_datatables_query()
    {
        $grub = $this->dt;
        $pt = $this->pt;
        $bahan = $this->cmb_bahan;
        $mutasi_pt = $this->mutasi_pt;
        $mutasi_lokal = $this->mutasi_lokal;
        $devisi = $this->devisi;


        $this->db_mips_gl->from($this->table);
        if ($bahan != '-') {
            $this->db_mips_gl->like('noac15', $grub, 'both');
        } else if ($mutasi_pt == 'mutasi_pt') {
            if ($pt == '02') {
                # code...
                $this->db_mips_gl->where('nama', 'PSAM, PT');
            } elseif ($pt == '04') {
                # code...
                $this->db_mips_gl->or_where('nama', 'MAPA, PT');
            }
        } else if ($mutasi_lokal == 'mutasi_lokal') {
            if ($devisi == '06') {
                # code...
                $this->db_mips_gl->where_in(
                    'noac15',
                    [
                        100300000000000,
                        100301000000000,
                        100304000000000,
                        100302000000000
                    ]
                );
                // $this->db_mips_gl->or_like('nama', 'HUBUNGAN INTRA COMPANY EST 1 <> EST 3', 'both');
                // $this->db_mips_gl->or_like('nama', 'HUBUNGAN INTRA COMPANY EST 1 <> PKS', 'both');
            } else if ($devisi == '07') {
                $this->db_mips_gl->where_in(
                    'noac15',
                    [
                        100300000000000,
                        100301000000000,
                        100305000000000,
                        100303000000000
                    ]
                );
                # code...
            } elseif ($devisi == '03') {
                $this->db_mips_gl->where_in(
                    'noac15',
                    [
                        100300000000000,
                        100302000000000,
                        100303000000000,
                        100306000000000,
                    ]
                );
                # code...
                // $this->db_mips_gl->like('nama', 'HUBUNGAN INTRA COMPANY', 'both');
            }
        }
        //  else {
        //     $tm = '7005';
        //     $tbm = '2024';
        //     $landclearing = '2090';
        //     $pembibitan = '2095';
        //     $this->db_mips_gl->like('noac15', $tm, 'match');
        //     $this->db_mips_gl->or_like('noac15', $tbm, 'match');
        //     $this->db_mips_gl->or_like('noac15', $landclearing, 'match');
        //     $this->db_mips_gl->or_like('noac15', $pembibitan, 'match');
        //     # code...
        // }

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db_mips_gl->group_start();
                    $this->db_mips_gl->like($item, $_POST['search']['value']);
                } else {
                    $this->db_mips_gl->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db_mips_gl->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db_mips_gl->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db_mips_gl->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db_mips_gl->limit($_POST['length'], $_POST['start']);
        $query = $this->db_mips_gl->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db_mips_gl->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db_mips_gl->from($this->table);
        return $this->db_mips_gl->count_all_results();
    }
    // end server side table

    public function cariDevisi()
    {
        $lokasi = $this->session->userdata('status_lokasi');
        $lokasi_kebun = $this->session->userdata('kode_dev');

        if ($lokasi != 'HO') {
            return $this->db_logistik_pt->query("SELECT PT, kodetxt FROM tb_devisi WHERE kodetxt='$lokasi_kebun'")->row();
        } else {
            $this->db_logistik_pt->select('PT, kodetxt');
            $this->db_logistik_pt->from('tb_devisi');
            $this->db_logistik_pt->order_by('lokasi', 'ASC');
            return $this->db_logistik_pt->get()->result_array();
        }
    }
    public function cariPT()
    {
        $lokasi = $this->session->userdata('nama_pt');

        return $this->db_logistik_center->query("SELECT kode_pt, nama_pt FROM tb_pt WHERE nama_pt != '$lokasi'")->result_array();
    }

    public function get_stok($kodebar, $txtperiode, $kode_dev)
    {
        $this->db_logistik_pt->select('saldoawal_qty, QTY_MASUK, QTY_KELUAR');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_bulanan_devisi');
        $stock_awal = $this->db_logistik_pt->get()->row_array();

        $tambah_saldo = $stock_awal['saldoawal_qty'] + $stock_awal['QTY_MASUK'];
        $stok = $tambah_saldo - $stock_awal['QTY_KELUAR'];
        return $stok;
    }

    function simpan_rinci_bpb()
    {


        // $diberikan_kpd = $this->input->post('txt_diberikan_kpd');
        $keperluan      = $this->input->post('txt_untuk_keperluan');
        $kode_devisi    = $this->input->post('devisi');
        // $tgl           = $this->input->post('txt_tgl_bpb');
        $tgl            = date("Y-m-d", strtotime($this->input->post('txt_tgl_bpb')));
        $bagian         = $this->input->post('cmb_bagian');
        $alokasi        = $this->input->post('cmb_alokasi_est');
        // $tm_tbm         = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $blok_sub       = $this->input->post('cmb_blok_sub');
        // $tahun_tanam    = $this->input->post('cmb_tahun_tanam');
        $tm_tbm          = $this->input->post('cmb_tm_tbm');
        $bahan          = $this->input->post('cmb_bahan');
        $thun_tanam          = $this->input->post('cmb_tahun_tanam');
        $no_acc         = $this->input->post('hidden_no_acc');
        $nama_acc       = $this->input->post('hidden_nama_acc');
        $kodebar        = $this->input->post('hidden_kode_barang');
        $nabar          = $this->input->post('hidden_nama_barang');
        $grup           = $this->input->post('hidden_grup_barang');
        // $stok_tgl_ini   = $this->input->post('hidden_stok_tgl_ini');
        $satuan         = $this->input->post('hidden_satuan');
        $qty            = $this->input->post('txt_qty_diminta');
        $ket            = $this->input->post('txt_ket_rinci');
        // $no_bpb         = $this->input->post('hidden_no_bpb');
        $id_bpb         = $this->input->post('hidden_id_bpb');
        $sess_lokasi    = $this->session->userdata('status_lokasi');
        // $sess_periode   = $this->session->userdata('periode');
        $periode        = $this->session->userdata('ym_periode');
        // $periode        =  date("Ym",strtotime($sess_periode));
        $nobkb_ro       = "";
        $nopo_ro        = "";

        $bhnbakar        = $this->input->post('bhnbakar');
        $jns_alat        = $this->input->post('jns_alat');
        $kd_nmr        = $this->input->post('kd_nmr');
        $hm_km        = $this->input->post('hm_km');
        $lokasi_kerja       = $this->input->post('lokasi_kerja');

        // $user = $this->session->userdata('user');
        // $ip = $this->input->ip_address();
        // $platform = $this->platform->agent();

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
        $kode_devisi = $this->input->post('devisi');
        $untuk_ket = $this->db_logistik_pt->query("SELECT PT FROM tb_devisi WHERE kodetxt='$kode_devisi'")->row();
        $devv = $untuk_ket->PT;
        $dig_1 = preg_replace("/[^1-9]/", "", $kode_devisi);

        if ($sess_lokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            // $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
            // $dig_1 = "6";
            $dig_2 = "2";
        } else if ($sess_lokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            // $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            // $dig_1 = "3";
            $dig_2 = "2";
        }

        $digit = $dig_1 . $dig_2;

        // $ym = date("ym");
        $hitung_digit1_2 = strlen($digit);
        // $query_bpb = "SELECT MAX(SUBSTRING(nobpb, 5)) as max_nobpb from bpb WHERE nobpb LIKE '$ym%'";
        $query_bpb = "SELECT MAX(SUBSTRING(nobpb, $hitung_digit1_2+1)) as max_nobpb from bpb WHERE nobpb LIKE '$digit%'";
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
            $noref_bpb = $text1 . "-BPB/" . $text2 . "/" . $format_m_y . "/" . $nobpb; //EST-BPB/SWJ/06/15/001159 atau //EST-BPB/SWJ/10/18/71722
        } else {
            $noref_bpb = $this->input->post('hidden_no_ref_bpb');
        }

        if ($this->input->post('hidden_mutasi_pt') == 'mutasi_pt') {
            $statusmutasi = 1;
            $norefbpb = $text1 . "-BPB/" . "MUT/" . $text2 . "/" . $format_m_y . "/" . $nobpb; //EST-BPB/SWJ/06/15/001159 atau //EST-BPB/SWJ/10/18/71722
            $keterangan = $ket . "(Mutasi dari  $devv)";
        } elseif ($this->input->post('hidden_mutasi_lokal') == 'mutasi_lokal') {
            $statusmutasi = 2;
            $norefbpb = $text1 . "-BPB/" . "MUT/" . $text2 . "/" . $format_m_y . "/" . $nobpb; //EST-BPB/SWJ/06/15/001159 atau //EST-BPB/SWJ/10/18/71722
            $keterangan = $ket . "(Mutasi dari  $nama_acc)";
            // $nama_acc
        } else {
            $norefbpb = $noref_bpb;
            $statusmutasi = 0;
            $keterangan = $this->input->post('txt_ket_rinci');
        }

        $data['devisi'] = $this->db_logistik_pt->get_where('tb_devisi', array('kodetxt' => $kode_devisi))->row_array();

        // jika tanaman pakai where ini, jika bukan tanaman tidak pakai query dibawah ini
        if ($tm_tbm == 'TM') {
            $tm_tbm1 = '7005';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'TBM') {
            $tm_tbm1 = '2024';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'LANDCLEARING') {
            $tm_tbm1 = '2090';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'PEMBIBITAN') {
            $tm_tbm1 = '2095';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else {
            $tm_tbm1 = '';
            $kodebeban = NULL;
        }
        $ketbebanfix = $this->input->post('hidden_nama_bahan');
        $noac15 = $this->input->post('hidden_no_acc');
        if ($bahan == '-') {
            $ketbeban = NULL;
        } else {
            $query_coa = "SELECT noac15, nama FROM noac WHERE noac15 = '$noac15'";
            $get_coa = $this->db_mips_gl->query($query_coa)->row();
            $ketbeban = $get_coa->nama;
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
        $databpb['devisi']          = $data['devisi']['PT'];
        $databpb['kode_dev']        = $kode_devisi;
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
        $databpb['status_mutasi']        = $statusmutasi;

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
        $databpbitem['kode']          = $this->session->userdata('kode_pt');
        $databpbitem['devisi']        = $data['devisi']['PT'];
        $databpbitem['kode_dev']      = $kode_devisi;
        $databpbitem['qty']           = $qty;
        $databpbitem['qty_disetujui'] = "0";
        $databpbitem['tglbpb']        = $tgl . date(' H:i:s');
        $databpbitem['tglinput']      = date('Y-m-d');
        $databpbitem['jaminput']      = date('H:i:s');
        $databpbitem['periode']       = $periode;
        $databpbitem['ket']           = $keterangan;
        $databpbitem['afd']           = $afd_unit;
        $databpbitem['blok']          = $blok_sub;
        $databpbitem['tmtbm']           = $tm_tbm;
        $databpbitem['thntanam']          = $thun_tanam;
        $databpbitem['noadjust']      = "0";
        $databpbitem['kodebebantxt']  = $kodebeban;
        $databpbitem['ketbeban']      = $ketbebanfix;
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
        $data_approval_bpb['id_bpbitem']        = $id_bpbitem;
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

            if ($this->input->post('hidden_mutasi_pt') == 'mutasi_pt') {
                $databpb['kode_pt_req_mutasi'] = $this->session->userdata('kode_pt_login');
                $databpb['pt_req_mutasi'] = $this->session->userdata('nama_pt');
                $this->db_logistik_center->insert('bpb_mutasi', $databpb);


                $this->db_logistik_center->insert('bpbitem_mutasi', $databpbitem);
                $this->db_logistik_center->insert('approval_bpb', $data_approval_bpb);
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
                return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb, 'kodebar' => $kodebar, 'kode_dev' => $kode_devisi);
            } else {
                return FALSE;
            }
        } else {
            $nobpb      = $this->input->post('hidden_no_bpb');

            $kodebar    = $this->input->post('hidden_kode_barang');
            $nabar      = $this->input->post('hidden_nama_barang');

            $query = "SELECT * FROM bpbitem WHERE norefbpb = '$norefbpb' AND kodebar = '$kodebar'";
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

                if ($this->input->post('hidden_mutasi_pt') == 'mutasi_pt') {
                    $this->db_logistik_center->insert('bpbitem_mutasi', $databpbitem);
                    $this->db_logistik_center->insert('approval_bpb', $data_approval_bpb);
                }

                $this->db_logistik_pt->insert('approval_bpb', $data_approval_bpb);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_approval_bpb = TRUE;
                } else {
                    $bool_approval_bpb = FALSE;
                }

                // $this->db_logistik_pt->insert('bpbitem_booking', $databpbitem);
                // if ($this->db_logistik_pt->affected_rows() > 0) {
                //     $bool_bpb = TRUE;
                // } else {
                //     $bool_bpb = FALSE;
                // }

                if ($bool_bpbitem === TRUE && $bool_approval_bpb === TRUE) {
                    return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb, 'kodebar' => $kodebar, 'kode_dev' => $kode_devisi);
                } else {
                    return FALSE;
                }
            }
        }
    }

    function ubah_rinci_bpb()
    {
        $id_bpbitem = $this->input->post('hidden_id_bpbitem');
        $norefbpb = $this->input->post('hidden_no_ref_bpb');
        $bahan   = $this->input->post('cmb_bahan');
        $tm_tbm          = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $thun_tanam          = $this->input->post('cmb_tahun_tanam');

        // jika tanaman pakai where ini, jika bukan tanaman tidak pakai query dibawah ini
        // jika tanaman pakai where ini, jika bukan tanaman tidak pakai query dibawah ini
        if ($tm_tbm == 'TM') {
            $tm_tbm1 = '7005';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'TBM') {
            $tm_tbm1 = '2024';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'LANDCLEARING') {
            $tm_tbm1 = '2090';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else if ($tm_tbm == 'PEMBIBITAN') {
            $tm_tbm1 = '2095';
            $kodebeban = $tm_tbm1 . $afd_unit . $thun_tanam . $bahan;
        } else {
            $tm_tbm1 = '';
            $kodebeban = NULL;
        }
        $ketbebanfix = $this->input->post('hidden_nama_bahan');
        $noac15 = $this->input->post('hidden_no_acc');
        if ($bahan == '-') {
            $ketbeban = NULL;
        } else {
            $query_coa = "SELECT noac15, nama FROM noac WHERE noac15 = '$noac15'";
            $get_coa = $this->db_mips_gl->query($query_coa)->row();
            $ketbeban = $get_coa->nama;
        }

        $kodebar = $this->input->post('hidden_kode_barang');

        $databpbitem['afd']             = $this->input->post('cmb_afd_unit');
        $databpbitem['blok']           = $this->input->post('cmb_blok_sub');
        $databpbitem['kodebebantxt']  = $kodebeban;
        $databpbitem['ketbeban']     = $ketbebanfix;
        $databpbitem['kodesubtxt']  = $this->input->post('hidden_no_acc');
        $databpbitem['ketsub']     = $this->input->post('hidden_nama_acc');
        $databpbitem['kodebar']   = $kodebar;
        $databpbitem['tmtbm']           = $tm_tbm;
        $databpbitem['thntanam']          = $thun_tanam;
        $databpbitem['nabar']    = $this->input->post('hidden_nama_barang');
        $databpbitem['grp']     = $this->input->post('hidden_grup_barang');
        $databpbitem['satuan'] = $this->input->post('hidden_satuan');
        $databpbitem['qty']   = $this->input->post('txt_qty_diminta');
        $databpbitem['ket']  = $this->input->post('txt_ket_rinci');

        //cek data exist
        $query = "SELECT kodebar FROM bpbitem WHERE id = '$id_bpbitem'";
        $check_brg = $this->db_logistik_pt->query($query)->row_array();

        if ($check_brg['kodebar'] != $kodebar) {
            $cek_item = "SELECT kodebar FROM bpbitem WHERE norefbpb = '$norefbpb' AND kodebar = '$kodebar'";
            $cek_isi_item = $this->db_logistik_pt->query($cek_item)->num_rows();
            if ($cek_isi_item >= 1) {
                return "kodebar_exist";
            } else {
                $this->db_logistik_pt->set($databpbitem);
                $this->db_logistik_pt->where('id', $id_bpbitem);
                return $this->db_logistik_pt->update('bpbitem');

                if ($this->input->post('hidden_mutasi_pt') == 'mutasi_pt') {


                    $this->db_logistik_center->set($databpbitem);
                    $this->db_logistik_center->where('id', $id_bpbitem);
                    return $this->db_logistik_center->update('bpbitem_mutasi');
                }
            }
        } else {
            $this->db_logistik_pt->set($databpbitem);
            $this->db_logistik_pt->where('id', $id_bpbitem);
            return $this->db_logistik_pt->update('bpbitem');
            if ($this->input->post('hidden_mutasi_pt') == 'mutasi_pt') {


                $this->db_logistik_center->set($databpbitem);
                $this->db_logistik_center->where('id', $id_bpbitem);
                return $this->db_logistik_center->update('bpbitem_mutasi');
            }
        }
    }

    public function updateitem($nobpb, $norefbpb, $kodebar, $dataedit_approval)
    {

        $mutasi = "SELECT nobpb, kodebar, norefbpb, approval_item FROM bpbitem_mutasi WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";
        $mutasi_pt = $this->db_logistik_center->query($mutasi);

        if ($mutasi_pt->num_rows() > 0) {
            # code...
            $this->db_logistik_pt->where('no_bpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->where('kodebar', $kodebar);
            $this->db_logistik_pt->update('approval_bpb', $dataedit_approval);

            #approve mutasi
            $this->db_logistik_center->where('no_bpb', $nobpb);
            $this->db_logistik_center->where('norefbpb', $norefbpb);
            $this->db_logistik_center->where('kodebar', $kodebar);
            $this->db_logistik_center->update('approval_bpb', $dataedit_approval);
        } else {
            # code...
            $this->db_logistik_pt->where('no_bpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->where('kodebar', $kodebar);
            $this->db_logistik_pt->update('approval_bpb', $dataedit_approval);
        }

        return TRUE;
    }
    public function update_item($nobpb, $norefbpb, $aprrove, $kodebar, $alasan)
    {
        $mutasi = "SELECT nobpb, kodebar, norefbpb, approval_item FROM bpbitem_mutasi WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";
        $mutasi_pt = $this->db_logistik_center->query($mutasi);


        if ($mutasi_pt->num_rows() > 0) {
            // jika di db center mutasinya ada
            $this->db_logistik_pt->set('approval', '1');
            $this->db_logistik_pt->where('nobpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->update('bpb');


            $this->db_logistik_center->set('approval', '1');
            $this->db_logistik_center->where('nobpb', $nobpb);
            $this->db_logistik_center->where('norefbpb', $norefbpb);
            $this->db_logistik_center->update('bpb_mutasi');

            //update mutasi

            if ($aprrove == '1') {
                $this->db_logistik_center->set('approval_item', '1');
            } else {
                $this->db_logistik_center->set('approval_item', '0');
                $this->db_logistik_center->set('batal', '1');
                $this->db_logistik_center->set('alasan_batal', $alasan);
            }
            $this->db_logistik_center->where('nobpb', $nobpb);
            $this->db_logistik_center->where('norefbpb', $norefbpb);
            $this->db_logistik_center->where('kodebar', $kodebar);
            $bpbitem_mutasi =  $this->db_logistik_center->update('bpbitem_mutasi');


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
            $item_bpb = $this->db_logistik_pt->update('bpbitem');


            $data = [
                'bpbitem_mutasi' => $bpbitem_mutasi,
                'item_bpb' => $item_bpb,
            ];

            return $data;
        } else {
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
            $data = $this->db_logistik_pt->update('bpbitem');

            return $data;
        }



        // return TRUE;
    }

    public function cekAprrove($nobpb, $kodebar, $norefbpb)
    {
        $cek = "SELECT nobpb, kodebar, norefbpb, approval_item FROM bpbitem WHERE nobpb='$nobpb' AND norefbpb='$norefbpb' AND kodebar='$kodebar' ";

        $approve = $this->db_logistik_pt->query($cek)->row();

        $d = $approve->approval_item;


        if ($d === null) {
            $data = [
                'status' => true,
            ];
        } else {
            $data = [
                'status' => false,
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
