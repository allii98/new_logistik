<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bpb');
        $this->load->model('M_brg');
        $this->load->model('M_databpb');
        $db_pt = check_db_pt();
        $this->db_logistik = $this->load->database('db_logistik', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        $this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);
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
            'title' => 'Bon Permintaan Barang'
        ];
        $this->template->load('template', 'v_indexBpb', $data);
    }

    function get_all_cmb()
    {
        $bahan = $this->input->post('bahan');
        $query = "SELECT * FROM tahun_tanam WHERE coa_material = '$bahan' ORDER BY thn_tanam ASC";
        $data = $this->db_logistik_pt->query($query)->row();
        echo json_encode($data);
    }

    function get_edit_bpb()
    {
        $id = $this->input->post('id');
        $no_bpb = $this->input->post('no_bpb');

        $query_bpb = "SELECT * FROM bpb WHERE id = '$id' AND nobpb = '$no_bpb'";

        $data_bpb = $this->db_logistik_pt->query($query_bpb)->row();

        $query_bpbitem = "SELECT * FROM bpbitem WHERE nobpb = '$no_bpb'";
        $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();

        echo json_encode(array('data_bpb' => $data_bpb, 'data_bpbitem' => $data_bpbitem));
    }

    public function input()
    {
        $data = [
            'title' => 'Bon Permintaan Barang'
        ];
        $this->template->load('template', 'v_inputbpb', $data);
    }

    public function cari_dept()
    {
        $query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
        $data = $this->db_logistik_pt->query($query)->result();
        echo json_encode($data);
    }

    function pilih_afd()
    {
        $tm_tbm = $this->input->post('tm_tbm');
        switch ($tm_tbm) {
            case 'TM':
                $tmtbm = 'TM';
                break;
            default:
                $tmtbm = 'TBM';
                break;
        }
        // $query = "SELECT * FROM afd WHERE tmtbm = '$tmtbm' AND AFD <> '' ORDER BY afd ASC";
        // $data = $this->db_logistik_pt->query($query)->result();

        $query = "SELECT DISTINCT(afd) FROM masterblok WHERE afd <> '00' ORDER BY afd ASC";
        $data = $this->db_msal_personalia->query($query)->result();
        echo json_encode($data);
    }

    function pilih_blok_sub()
    {
        $tm_tbm = $this->input->post('tm_tbm');
        $afd_unit = $this->input->post('afd_unit');
        $blok_sub = $this->input->post('blok_sub');
        switch ($tm_tbm) {
            case 'TM':
                $tmtbm = 'TM';
                break;
            default:
                $tmtbm = 'TBM';
                break;
        }
        $query_master_blok = "SELECT DISTINCT blok FROM masterblok WHERE afd = '$afd_unit'";
        $data = $this->db_msal_personalia->query($query_master_blok)->result();

        // $data = array('data_thn_tanam'=>$data_thn_tanam,'data_master_blok'=>$data_master_blok);
        echo json_encode($data);
    }

    function pilih_tahun_tanam()
    {
        $tm_tbm = $this->input->post('tm_tbm');
        $afd_unit = $this->input->post('afd_unit');
        $blok_sub = $this->input->post('blok_sub');
        switch ($tm_tbm) {
            case 'TM':
                $tmtbm = 'TM';
                break;
            default:
                $tmtbm = 'TBM';
                break;
        }
        // $query_thn_tanam = "SELECT DISTINCT thn_tanam FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' ORDER BY thn_tanam ASC";
        // $data_thn_tanam = $this->db_logistik_pt->query($query_thn_tanam)->result();
        $query_thn_tanam = "SELECT DISTINCT tahuntanam FROM masterblok WHERE AFD = '$afd_unit' AND blok = '$blok_sub' ORDER BY tahuntanam ASC";
        $data = $this->db_msal_personalia->query($query_thn_tanam)->result();

        echo json_encode($data);
    }

    function pilih_bahan()
    {
        $tm_tbm = $this->input->post('tm_tbm');
        $afd_unit = $this->input->post('afd_unit');
        $blok_sub = $this->input->post('blok_sub');
        $thn_tanam = $this->input->post('thn_tanam');
        switch ($tm_tbm) {
            case 'TM':
                $tmtbm = 'TM';
                break;
            default:
                $tmtbm = 'TBM';
                break;
        }
        // $query = "SELECT DISTINCT ket, coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam' ORDER BY thn_tanam ASC";
        $query = "SELECT DISTINCT coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam' ORDER BY thn_tanam ASC";
        $data_coa_material = $this->db_logistik_pt->query($query)->result();
        $data = array();
        foreach ($data_coa_material as $list_coa_material) {
            $data_coa = array();
            $noac = $list_coa_material->coa_material;
            $query_coa = "SELECT noac, nama FROM noac WHERE noac = '$noac'";
            $get_coa = $this->db_logistik->query($query_coa)->row();
            $data_coa[] = $get_coa->noac;
            $data_coa[] = $get_coa->nama;
            array_push($data, $data_coa);
        }
        echo json_encode($data);
    }

    public function data()
    {
        $list = $this->M_databpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // foreach ($list as $field) {

        //     $no++;
        //     $row = array();
        //     $row[] = '<a href="javascript:;" id="btn_data_barang">
        //     <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">Pilih</button></a>';
        //     $row[] = $no;
        //     $row[] = $field->nobpb;
        //     $row[] = $field->nabar;
        //     $row[] = $field->grp;
        //     $row[] = $field->satuan;


        //     $data[] = $row;
        // }

        foreach ($list as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";

            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobpb . ',' . $norefbpb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $print = "";
                $ubah = '<a href="' . site_url('bpb/detail_bpb/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang">';
                $batal = '<a href="javascript:;" id="a_batal_bpb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB(' . $id . ',' . $hasil->nobpb . ')">
                    </button>
                </a>';
            } else {
                $print = '<a href="' . site_url('bpb/cetak/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb">
                </a>';
                $ubah = "";
                $batal = "";
            }


            $row[] = $hasil->user == $this->session->userdata('user') ? $ubah . $batal . $print : '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';
            $row[] = $no++;
            $row[] = $hasil->nobpb;

            $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
            $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_bpbitem as $bpbitem) {
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $bpbitem->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $row[] = $hasil->keperluan;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->user;
            // $row[] = $approval_ktu;
            // $row[] = $approval_mgr;
            // $row[] = $approval_gm;
            $row[] = $approval;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_databpb->count_all(),
            "recordsFiltered" => $this->M_databpb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }


    public function list_acc_beban()
    {
        $cmb_no_ac = $this->input->post('cmb_no_ac');
        $this->M_bpb->where_datatables($cmb_no_ac);
        $list = $this->M_bpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->noac;
            $row[] = $field->nama;
            $row[] = $field->type;
            $row[] = $field->group;


            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_bpb->count_all(),
            "recordsFiltered" => $this->M_bpb->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function detail_bpb()
    {
        $this->template->load('template', 'v_edit');
    }

    function simpan_rinci_bpb()
    {
        $data = $this->M_bpb->simpan_rinci_bpb();
        echo json_encode($data);
    }

    function cancel_ubah_rinci()
    {

        $no_bpb = $this->input->post('hidden_no_bpb');
        $id_bpb = $this->input->post('hidden_id_bpb');
        $hidden_id_bpbitem = $this->input->post('hidden_id_bpbitem');

        $query_bpb = "SELECT * FROM bpb WHERE nobpb = '$no_bpb' AND id = '$id_bpb'";
        $data_bpb = $this->db_logistik_pt->query($query_bpb)->row();

        $query_bpbitem = "SELECT * FROM bpbitem WHERE nobpb = '$no_bpb' AND id = '$hidden_id_bpbitem'";
        $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->row();
        echo json_encode(array('data_bpb' => $data_bpb, 'data_bpbitem' => $data_bpbitem));
    }

    function ubah_rinci_bpb()
    {
        $data = $this->M_bpb->ubah_rinci_bpb();
        echo json_encode($data);
    }

    function list_barang()
    {

        $list = $this->M_brg->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {

            $no++;
            $row = array();
            $row[] = '<a href="javascript:;" id="btn_data_barang">
            <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">Pilih</button></a>';
            $row[] = $no;
            $row[] = $field->kodebar;
            $row[] = $field->nabar;
            $row[] = $field->grp;
            $row[] = $field->satuan;


            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_brg->count_all(),
            "recordsFiltered" => $this->M_brg->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function cari_devisi()
    {
        $lokasi = $this->session->userdata('status_lokasi');
        if ($lokasi == 'SITE') {
            $query = "SELECT PT, kodetxt FROM pt_copy WHERE kodetxt IN ('06', '07') ORDER BY kodetxt ASC";
        } else if ($lokasi == 'HO') {
            $query = "SELECT PT, kodetxt FROM pt_copy ORDER BY kodetxt ASC";
        } else {
            $query = "SELECT PT, kodetxt FROM pt_copy WHERE PT LIKE '%$lokasi%' ORDER BY kodetxt ASC";
        }

        $data = $this->db_logistik_pt->query($query)->result();
        echo json_encode($data);
    }

    function sum_stok()
    {
        $id = $this->input->post('kodbar');
        $sess_kode_pt = $this->session->userdata('kode_pt');

        $ym_periode  = $this->session->userdata('ym_periode');
        $query_stockawal = "SELECT saldoawal_qty, QTY_MASUK, QTY_KELUAR, QTY_ADJMASUK, QTY_ADJKELUAR FROM stockawal WHERE KODE = '$sess_kode_pt' AND kodebartxt = '$id' AND txtperiode = '$ym_periode'";

        $stockawal = $this->db_logistik_pt->query($query_stockawal);
        $stockawal_numrow = $stockawal->num_rows();

        if ($stockawal_numrow == "0") {
            $get_saldoawal_qty = "0";
            $data = FALSE;
        } else {
            $get_stockawal = $stockawal->row();
            $get_saldoawal_qty = $get_stockawal->saldoawal_qty;
            $get_QTY_MASUK = $get_stockawal->QTY_MASUK;
            $get_QTY_KELUAR = $get_stockawal->QTY_KELUAR;
            $get_QTY_ADJMASUK = $get_stockawal->QTY_ADJMASUK;
            $get_QTY_ADJKELUAR = $get_stockawal->QTY_ADJKELUAR;

            $query_masuk = "SELECT SUM(qty) as totqtymasuk FROM masukitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kdpt = '$sess_kode_pt'";

            $summasuk = $this->db_logistik_pt->query($query_masuk)->row();

            $totqtymasuk = $summasuk->totqtymasuk;
            if (empty($summasuk->totqtymasuk)) {
                $totqtymasuk = "0";
            }

            $query_retskbitem = "SELECT SUM(qty) as totqtyretskbitem FROM ret_skbitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kodept = '$sess_kode_pt'";

            $sumretskbitem = $this->db_logistik_pt->query($query_retskbitem)->row();

            $totqtyretskbitem = $sumretskbitem->totqtyretskbitem;
            if (empty($sumretskbitem->totqtyretskbitem)) {
                $totqtyretskbitem = "0";
            }

            $query_keluar = "SELECT SUM(qty2) as totqtykeluar FROM keluarbrgitem WHERE kodebartxt = '$id' AND kodept = '$sess_kode_pt' AND txtperiode = '$ym_periode' AND BATAL = '0'";
            $sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

            $totqtykeluar = $sumkeluar->totqtykeluar;
            if (empty($sumkeluar->totqtykeluar)) {
                $totqtykeluar = "0";
            }

            $data = ($get_saldoawal_qty + $totqtymasuk + $totqtyretskbitem) - $totqtykeluar;
        }
        echo json_encode($data);
    }

    function sum_stok_booking()
    {
        $id = $this->input->post('kodbar');

        $query_booking = "SELECT SUM(qty) as stokbooking FROM bpbitem_booking WHERE kodebar = '$id'";
        $get_booking = $this->db_logistik_pt->query($query_booking)->row();

        if (empty($get_booking->stokbooking)) {
            $data = 0;
        } else {
            $data = $get_booking->stokbooking;
        }

        echo json_encode($data);
    }
}
