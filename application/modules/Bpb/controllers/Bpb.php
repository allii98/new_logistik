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
        $this->load->model('M_listbpb');
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
        $query_thn_tanam = "SELECT DISTINCT tahuntanam FROM masterblok WHERE afd = '$afd_unit' AND blok = '$blok_sub' ORDER BY tahuntanam ASC";
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
        $query = "SELECT DISTINCT coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam'";
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
        foreach ($list as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";

            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobpb . ',' . $norefbpb . ')"> Approval
                            </button>
                        </a>';
            if ($hasil->approval == '1' && $hasil->req_rev_qty == '1' || $hasil->approval == '0') {
                $print = "";
                $ubah = '<a href="' . site_url('bpb/detail_bpb/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang">';
                $batal = '<a href="javascript:;" id="a_batal_bpb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB(' . $id . ',' . $hasil->nobpb . ')">
                    </button>
                </a>';
            } else {
                $print = '<a href="' . site_url('Bpb/cetak/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb">
                </a>';
                $ubah = "";
                $batal = "";
            }


            $row[] = $ubah . $batal . $print;
            $no++;

            $row[] =  $no . ".";
            $row[] = $hasil->norefbpb;

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

    function hapus_rinci()
    {

        $id_bpb = $this->input->post('hidden_id_bpb');
        $id_bpbitem = $this->input->post('hidden_id_bpbitem');

        $data_delete = $this->db_logistik_pt->delete('bpbitem', array('id' => $id_bpbitem));

        if ($data_delete === TRUE) {
            $data = TRUE;
        } else {
            $data = FALSE;
        }
        echo json_encode($data);
    }

    function batal()
    {
        $id_bpb = $this->input->post('id');
        $no_bpb = $this->input->post('no_bpb');
        $alasan =  $this->input->post('alasan');

        // $user = $this->session->userdata('user');
        // $ip = $this->input->ip_address();
        // $platform = $this->platform->agent();

        // $get_bpb = $this->db_logistik_pt->get_where('bpb', array('id' => $id_bpb, 'nobpb' => $no_bpb))->row();

        // $get_bpbitem = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $no_bpb))->result();

        $dataedit['batal'] = "1";
        $dataedit['alasan_batal'] = $alasan;
        $this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $id_bpb);
        $this->db_logistik_pt->where('nobpb', $no_bpb);
        $this->db_logistik_pt->update('bpb');
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpb = TRUE;
        } else {
            $bool_bpb = FALSE;
        }

        $dataedit_bpbitem['batal'] = '1';
        $dataedit_bpbitem['alasan_batal'] = $alasan;
        $this->db_logistik_pt->set($dataedit_bpbitem);
        $this->db_logistik_pt->where('nobpb', $no_bpb);
        $this->db_logistik_pt->update('bpbitem');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpbitem = TRUE;
        } else {
            $bool_bpbitem = FALSE;
        }

        if ($bool_bpb === TRUE && $bool_bpbitem === TRUE) {
            $data = TRUE;
        } else {
            $data = FALSE;
        }

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
        $kodebar = $this->input->post('kodbar');
        $data = $this->M_bpb->get_stok($kodebar);
        echo json_encode($data);
    }

    function sum_stok_booking()
    {
        $id = $this->input->post('kodbar');

        $query_booking = "SELECT SUM(qty) as stokbooking FROM bpbitem WHERE kodebar = '$id'";
        $query_booking2 = "SELECT SUM(qty2) as stokbooking2 FROM keluarbrgitem WHERE kodebar = '$id'";
        $get_booking = $this->db_logistik_pt->query($query_booking)->row();
        $get_booking2 = $this->db_logistik_pt->query($query_booking2)->row();

        if (empty($get_booking->stokbooking)) {
            $data = 0;
        } else {
            $data = $get_booking->stokbooking - $get_booking2->stokbooking2;
        }

        echo json_encode($data);
    }

    function list_bpbitem()
    {
        $nobpb = $this->input->post('nobpb');
        $norefbpb = $this->input->post('norefbpb');
        $this->M_listbpb->where_datatables($nobpb, $norefbpb);
        $list = $this->M_listbpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";
            $kodebar = "'" . $hasil->kodebar . "'";

            $AsistenAfd = "'AsistenAfd'";
            $KepalaKebun = "'KepalaKebun'";
            $KasieAgronomi = "'KasieAgronomi'";
            $KTU = "'KTU'";
            // $MGR = "'MGR'";
            $GM = "'GM'";

            $setuju = "'setuju'";
            $tidaksetuju = "'tidaksetuju'";
            $mengetahui = "'mengetahui'";
            $revqty = "'revqty'";

            $kode_level_sesi = $this->session->userdata('kode_level');
            // $lokasi = $this->session->userdata('status_lokasi');
            // $user_sesi = $this->session->userdata('user');
            $nobpb_query = $hasil->nobpb;
            $norefbpb_query = $hasil->norefbpb;
            $kodebar_query = $hasil->kodebar;
            $qty_diminta = $hasil->qty;

            /***** ASISTEN AFD *****/
            /***************/
            $query_status_asisten_afd = "SELECT status_asisten_afd, tgl_asisten_afd FROM approval_bpb WHERE status_asisten_afd <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd);
            if ($get_status_asisten_afd->num_rows() > 0) {
                $get_status_approval_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd)->row();
                if ($get_status_approval_asisten_afd->status_asisten_afd ==  "1") {
                    $konfirmasi_asisten_afd = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                } else if ($get_status_approval_asisten_afd->status_asisten_afd ==  "2") {
                    $konfirmasi_asisten_afd = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                }
            } else {
                $list_level_approval_asisten_afd = "SELECT bpb_appr_asisten_afd FROM list_level_approval WHERE bpb_appr_asisten_afd = '$kode_level_sesi'";
                $get_appr_asisten_afd = $this->db_logistik_pt->query($list_level_approval_asisten_afd)->num_rows();

                if ($get_appr_asisten_afd > 0) {
                    $konfirmasi_asisten_afd = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $AsistenAfd . ',' . $setuju . ')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $AsistenAfd . ',' . $tidaksetuju . ')">
                                </button>
                            </a>
                            <!--a href="javascript:;" id="a_appproval">
                                <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $AsistenAfd . ',' . $revqty . ')"> Rev Qty
                                </button>
                            </a-->
                            ';
                } else {
                    $konfirmasi_asisten_afd = "";
                }
            }

            /***** KEPALA KEBUN *****/
            /***************/
            $query_status_kepala_kebun = "SELECT status_kepala_kebun, tgl_kepala_kebun FROM approval_bpb WHERE status_kepala_kebun <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_kepala_kebun = $this->db_logistik_pt->query($query_status_kepala_kebun)->num_rows();
            if ($get_status_kepala_kebun > 0) {
                $get_status_approval_kepala_kebun = $this->db_logistik_pt->query($query_status_kepala_kebun)->row();
                // var_dump($get_status_approval_kepala_kebun->status_kepala_kebun);
                if ($get_status_approval_kepala_kebun->status_kepala_kebun ==  "1") {
                    // var_dump($get_status_approval_kepala_kebun->status_kepala_kebun);
                    $konfirmasi_kepala_kebun = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_kepala_kebun->tgl_kepala_kebun . "</strong><br/>";
                } else if ($get_status_approval_kepala_kebun->status_kepala_kebun ==  "2") {
                    $konfirmasi_kepala_kebun = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_kepala_kebun->tgl_kepala_kebun . "</strong><br/>";
                }
            } else {
                $list_level_approval_kepala_kebun = "SELECT bpb_appr_kepala_kebun FROM list_level_approval WHERE bpb_appr_kepala_kebun = '$kode_level_sesi'";
                $get_appr_kepala_kebun = $this->db_logistik_pt->query($list_level_approval_kepala_kebun)->num_rows();

                if ($get_appr_kepala_kebun > 0) {
                    $konfirmasi_kepala_kebun = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KepalaKebun . ',' . $setuju . ')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KepalaKebun . ',' . $tidaksetuju . ')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KepalaKebun . ',' . $revqty . ')"> Rev Qty
                                </button>
                            </a>
                            ';
                } else {
                    $konfirmasi_kepala_kebun = "";
                }
            }

            /***** KASIE AGRONOMI *****/
            /***************/
            $query_status_kasie_agronomi = "SELECT status_kasie_agronomi, tgl_kasie_agronomi FROM approval_bpb WHERE status_kasie_agronomi <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_kasie_agronomi = $this->db_logistik_pt->query($query_status_kasie_agronomi)->num_rows();

            if ($get_status_kasie_agronomi > 0) {
                $get_status_approval_kasie_agronomi = $this->db_logistik_pt->query($query_status_kasie_agronomi)->row();
                if ($get_status_approval_kasie_agronomi->status_kasie_agronomi ==  "3") {
                    $konfirmasi_kasie_agronomi = "<strong style='color:blue;'>MENGETAHUI <br/>" . $get_status_approval_kasie_agronomi->tgl_kasie_agronomi . "</strong><br/>";
                }
            } else {
                $list_level_approval_kasie_agronomi = "SELECT bpb_appr_kasie_agronomi FROM list_level_approval WHERE bpb_appr_kasie_agronomi = '$kode_level_sesi'";
                $get_appr_kasie_agronomi = $this->db_logistik_pt->query($list_level_approval_kasie_agronomi)->num_rows();

                if ($get_appr_kasie_agronomi > 0) {
                    $konfirmasi_kasie_agronomi = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_kasie_agronomi" name="btn_konfirmasi_kasie_agronomi" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KasieAgronomi . ',' . $mengetahui . ')"> Mengetahui
                                </button>
                            </a>';
                } else {
                    $konfirmasi_kasie_agronomi = "";
                }
            }

            /***** KTU *****/
            /***************/
            // $query_status_ktu = "SELECT status_ktu, tgl_ktu FROM approval_bpb WHERE (status_ktu <> '0' AND status_asisten_afd = '1' AND status_kepala_kebun = '1') AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $query_status_ktu = "SELECT status_asisten_afd, status_kepala_kebun, status_ktu, tgl_ktu FROM approval_bpb WHERE status_ktu <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_ktu = $this->db_logistik_pt->query($query_status_ktu);
            if ($get_status_ktu->num_rows() > 0) {
                $get_status_approval_ktu = $this->db_logistik_pt->query($query_status_ktu)->row();
                if ($get_status_approval_ktu->status_ktu ==  "1") {
                    $konfirmasi_ktu = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_ktu->tgl_ktu . "</strong><br/>";
                } else if ($get_status_approval_ktu->status_ktu ==  "2") {
                    $konfirmasi_ktu = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_ktu->tgl_ktu . "</strong><br/>";
                }
            } else {
                $query_status_asisten_afd_kabun = "SELECT status_asisten_afd, status_kepala_kebun, status_ktu, tgl_ktu FROM approval_bpb WHERE status_ktu = '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
                $get_status_asisten_afd_kabun = $this->db_logistik_pt->query($query_status_asisten_afd_kabun)->row();

                // jika sudah disetujui Asisten AFD dan Kepala Kebun
                if (isset($get_status_asisten_afd_kabun)) {
                    if ($get_status_asisten_afd_kabun->status_asisten_afd == "1" && $get_status_asisten_afd_kabun->status_kepala_kebun == "1") {
                        $list_level_approval_ktu = "SELECT bpb_appr_ktu FROM list_level_approval WHERE bpb_appr_ktu = '$kode_level_sesi'";
                        $get_appr_ktu = $this->db_logistik_pt->query($list_level_approval_ktu)->num_rows();

                        if ($get_appr_ktu > 0) {
                            $konfirmasi_ktu = '<a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KTU . ',' . $setuju . ')">
                                        </button>
                                    </a>
                                    <a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KTU . ',' . $tidaksetuju . ')">
                                        </button>
                                    </a>
                                    <a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KTU . ',' . $revqty . ')"> Rev Qty
                                        </button>
                                    </a>
                                    ';
                        } else {
                            $konfirmasi_ktu = "";
                        }
                    } else {
                        $konfirmasi_ktu = "";
                    }
                } else {
                    $konfirmasi_ktu = "";
                }
            }

            /***** MGR *****/
            /***************/
            // $query_status_mgr = "SELECT status_mgr, tgl_mgr FROM approval_bpb WHERE status_mgr <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            // $get_status_mgr = $this->db_logistik_pt->query($query_status_mgr)->num_rows();

            // if($get_status_mgr > 0){
            //     $get_status_approval_mgr = $this->db_logistik_pt->query($query_status_mgr)->row();
            //     if($get_status_approval_mgr->status_mgr ==  "3"){
            //         $konfirmasi_mgr = "<strong style='color:blue;'>MENGETAHUI <br/>".$get_status_approval_mgr->tgl_mgr."</strong><br/>";
            //     }
            // }
            // else {
            //     $list_level_approval_mgr = "SELECT bpb_appr_mgr FROM list_level_approval WHERE bpb_appr_mgr = '$kode_level_sesi'";
            //     $get_appr_mgr = $this->db_logistik_pt->query($list_level_approval_mgr)->num_rows();

            //     if($get_appr_mgr > 0){
            //         $konfirmasi_mgr = '<a href="javascript:;" id="a_appproval">
            //                     <button class="btn btn-info btn-xs" id="btn_mengetahui" name="btn_mengetahui" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$MGR.','.$mengetahui.')"> Mengetahui
            //                     </button>
            //                 </a>';
            //     }
            //     else {
            //         $konfirmasi_mgr = "";
            //     }
            // }

            /***** GM *****/
            /***************/
            $query_status_gm = "SELECT status_gm, tgl_gm FROM approval_bpb WHERE status_gm <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_gm = $this->db_logistik_pt->query($query_status_gm)->num_rows();

            if ($get_status_gm > 0) {
                $get_status_approval_gm = $this->db_logistik_pt->query($query_status_gm)->row();
                if ($get_status_approval_gm->status_gm ==  "3") {
                    $konfirmasi_gm = "<strong style='color:blue;'>MENGETAHUI <br/>" . $get_status_approval_gm->tgl_gm . "</strong><br/>";
                }
            } else {
                $list_level_approval_gm = "SELECT bpb_appr_gm FROM list_level_approval WHERE bpb_appr_gm = '$kode_level_sesi'";
                $get_appr_gm = $this->db_logistik_pt->query($list_level_approval_gm)->num_rows();

                if ($get_appr_gm > 0) {
                    $konfirmasi_gm = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_gm" name="btn_konfirmasi_gm" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $GM . ',' . $mengetahui . ')"> Mengetahui
                                </button>
                            </a>';
                } else {
                    $konfirmasi_gm = "";
                }
            }


            // $row[] = '<a href="'.site_url('bpb/detail_bpb/'.$hasil->nobpb.'/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah
            //     <a href="javascript:;" id="a_batal_bpb">
            //         <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB('.$id.','.$hasil->nobpb.')"> Batal
            //         </button>
            //     </a>
            //     <a href="'.site_url('bpb/cetak/'.$hasil->nobpb.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb"> Cetak
            //     </a>
            //     ';
            $row[] = $no++;
            $row[] = $hasil->nobpb;
            $row[] = $hasil->norefbpb;
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->qty;
            $row[] = $hasil->qty_disetujui;
            $row[] = $hasil->satuan;

            // $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
            // $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();
            // $data_detail = array();
            // $data_detail_nama = array();
            // foreach ($data_bpbitem as $bpbitem){
            //     array_push($data_detail_nama, $bpbitem->nabar);
            // }
            // $row[] = join(", ",$data_detail_nama);
            $row[] = $konfirmasi_asisten_afd;
            $row[] = $konfirmasi_kepala_kebun;
            $row[] = $konfirmasi_kasie_agronomi;
            $row[] = $konfirmasi_ktu;
            // $row[] = $konfirmasi_mgr;
            $row[] = $konfirmasi_gm;
            $row[] = "";
            $row[] = "";
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_listbpb->count_all(),
            "recordsFiltered" => $this->M_listbpb->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    function konfirmasi_approval()
    {
        // array(5) {
        //   ["nobpb"]=>string(7) "6600001"
        //   ["norefbpb"]=>string(25) "EST-BPB/SWJ/07/2019/00001"
        //   ["kodebar"]=>string(15) "102505420000001"
        //   ["jabatan"]=>string(3) "KTU"
        //   ["approval"]=>string(6) "setuju"
        // }

        $nobpb        = $this->input->post('nobpb');
        $norefbpb    = $this->input->post('norefbpb');
        $kodebar    = $this->input->post('kodebar');
        $jabatan    = $this->input->post('jabatan');
        $approval    = $this->input->post('approval');

        // if(empty(var)){

        // }
        // $dataedit['qty_disetujui'] 	= $qty_disetujui;

        switch ($jabatan) {
            case 'AsistenAfd':
                if ($approval == "setuju") {
                    $dataedit_approval['status_asisten_afd']     = "1";
                } elseif ($approval == "tidaksetuju") {
                    $dataedit_approval['status_asisten_afd']     = "2";
                }
                $dataedit_approval['tgl_asisten_afd']         = date('Y-m-d H:i:s');
                // $dataedit_approval['ket_asisten_afd'] 		= $ket_asisten_afd;
                break;
            case 'KepalaKebun':
                if ($approval == "setuju") {
                    $dataedit_approval['status_kepala_kebun']     = "1";
                } elseif ($approval == "tidaksetuju") {
                    $dataedit_approval['status_kepala_kebun']     = "2";
                }
                $dataedit_approval['tgl_kepala_kebun']         = date('Y-m-d H:i:s');
                // $dataedit_approval['ket_asisten_kepala_kebun'] 		= $ket_asisten_kepala_kebun;
                break;
            case 'KasieAgronomi':
                if ($approval == "mengetahui") {
                    $dataedit_approval['status_kasie_agronomi']     = "3";
                }
                $dataedit_approval['tgl_kasie_agronomi']         = date('Y-m-d H:i:s');
                // $dataedit_approval['ket_kasie_agronomi'] 		= $ket_kasie_agronomi;
                break;
            case 'KTU':
                if ($approval == "setuju") {
                    $dataedit_approval['status_ktu']     = "1";
                } elseif ($approval == "tidaksetuju") {
                    $dataedit_approval['status_ktu']     = "2";
                }
                $dataedit_approval['tgl_ktu']         = date('Y-m-d H:i:s');
                // $dataedit_approval['ket_ktu'] 		= $ket_ktu;
                break;
                // case 'MGR':
                // 	if($approval == "mengetahui"){
                // 		$dataedit_approval['status_mgr'] 	= "3";
                // 	}
                // 	$dataedit_approval['tgl_mgr'] 		= date('Y-m-d H:i:s');
                // 	// $dataedit_approval['ket_mgr'] 		= $ket_mgr;
                // 	break;
            case 'GM':
                if ($approval == "mengetahui") {
                    $dataedit_approval['status_gm']         = "3";
                }
                $dataedit_approval['tgl_gm']         = date('Y-m-d H:i:s');
                // $dataedit_approval['ket_gm'] 		= $ket_gm;
                break;
            default:
                break;
        }

        // $this->db_logistik_pt->trans_start();
        $this->db_logistik_pt->set($dataedit_approval);
        $this->db_logistik_pt->where('no_bpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->update('approval_bpb');
        // $this->db_logistik_pt->trans_complete();
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_approval_bpb = TRUE;
        } else {
            // if ($this->db_logistik_pt->trans_status() === FALSE){
            $bool_approval_bpb = FALSE;
            // }
            // else{
            // $bool_approval_bpb = TRUE;
            // }
        }

        // $count_item_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_ktu <>'=>'0','status_mgr <>'=>'0','status_gm <>'=>'0','no_bpb'=>$nobpb,'norefbpb'=>$norefbpb))->num_rows();

        // var_dump($jabatan);
        // var_dump($bool_approval_bpb);

        if ($jabatan == "KTU") {
            $query_qty = "SELECT qty FROM bpbitem WHERE nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND kodebar = '$kodebar'";
            $get_qty = $this->db_logistik_pt->query($query_qty)->row();
            $qty_disetujui = $get_qty->qty;

            $dataedit_bpbitem['qty_disetujui'] = $qty_disetujui;

            $this->db_logistik_pt->set($dataedit_bpbitem);
            $this->db_logistik_pt->where('nobpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->where('kodebar', $kodebar);
            $this->db_logistik_pt->update('bpbitem');
            // var_dump($this->db_logistik_pt->last_query());exit();

            // 	if ($this->db_logistik_pt->affected_rows() > 0){
            // 	    $bool_bpbitem = TRUE;
            // 	}
            // 	else{
            // 		$bool_bpbitem = FALSE;
            // 	}

            // 	var_dump($bool_bpbitem);
            // exit();


            $this->_count_item_appr($nobpb, $norefbpb);

            // if($bool_approval_bpb === TRUE && $bool_bpbitem === TRUE){
            if ($bool_approval_bpb === TRUE) {
                echo json_encode(TRUE);
            } else {
                return FALSE;
            }
        } else {
            $this->_count_item_appr($nobpb, $norefbpb);

            if ($bool_approval_bpb === TRUE) {
                echo json_encode(TRUE);
            } else {
                return FALSE;
            }
        }
    }

    function _count_item_appr($nobpb, $norefbpb)
    {
        $count_item_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_ktu' => '1', 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
        $count_bpbitem = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();

        if ($count_item_appr == $count_bpbitem) {
            $dataedit_bpb['approval'] = "1";
            $this->db_logistik_pt->set($dataedit_bpb);
            $this->db_logistik_pt->where('nobpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->update('bpb');
        }
    }

    function cetak1()
    {
        $no_bpb = $this->uri->segment('3');
        $id = $this->uri->segment('4');

        $data['no_bpb'] = $no_bpb;
        $data['id'] = $id;
        $data['bpb'] = $this->db_logistik_pt->get_where('bpb', array('id' => $id, 'nobpb' => $no_bpb))->row();
        $data['bpbitem'] = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $no_bpb))->result();

        $noref = $data['bpb']->norefbpb;
        $this->qrcode($no_bpb, $id, $noref);

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
            'setAutoTopMargin' => 'stretch',
            'orientation' => 'P'
        ]);

        // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
        $mpdf->SetHTMLHeader('
                            <table width="100%" border="0" align="center">
                                <tr>
                                	<td align="left" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                </tr>

                                
                            </table>
                            ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('v_cetakbpb', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetak()
    {
        $no_bpb = $this->uri->segment('3');
        $id = $this->uri->segment('4');

        $this->db->where('id', $id);
        $this->db->where('nobpb', $no_bpb);
        $cek = $this->db->get_where('bpb');

        if ($cek->num_rows() > 0) {
            $cek = $cek->row();
            $jml_ = (int)$cek->jml_cetak;
            $up = [
                'jml_cetak' => $jml_ + 1
            ];
            $this->db->where('id', $id);
            $this->db->where('nobpb', $no_bpb);
            $this->db->update('bpb', $up);
        } else {
            $ins = [
                'jml_cetak' => 1
            ];
            $this->db->insert('bpb', $ins);
        }


        $data['no_bpb'] = $no_bpb;
        $data['id'] = $id;
        $data['bpb'] = $this->db_logistik_pt->get_where('bpb', array('id' => $id, 'nobpb' => $no_bpb))->row();
        $data['bpbitem'] = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $no_bpb))->result();
        $data['bpb_approval'] = $this->db_logistik_pt->get_where('approval_bpb', array('no_bpb' => $no_bpb))->result();

        $noref = $data['bpb']->norefbpb;
        $this->qrcode($no_bpb, $id, $noref);

        // cek bahan bakar
        $this->db->where('id', $id);
        $this->db->where('nobpb', $no_bpb);
        $cekdata = $this->db->get_where('bpb');
        $d = $cekdata->row();
        $isi = $d->bhn_bakar;

        if ($isi == "BBM") {
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => [190, 236],
                'setAutoTopMargin' => 'stretch',
                'orientation' => 'P'
            ]);

            // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
            $mpdf->SetHTMLHeader('
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td align="left" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</br><h5>Kebun / Unit</h5></td>
                                        <td align="right" style="font-size:14px;font-weight:bold;"><img width="10%" height="10%" src=" ' . site_url('assets/qrcode/bpb/' . $id . "_" . $no_bpb . '.png') . '"></td>
                                    </tr>
                                  
                                    
    
                                    
                                </table>
                                ');
            // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

            $html = $this->load->view('v_cetakbpb', $data, true);

            $mpdf->WriteHTML($html);
            $mpdf->Output();
        } else {
            # code...
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => [190, 236],
                'setAutoTopMargin' => 'stretch',
                'orientation' => 'P'
            ]);

            // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
            $mpdf->SetHTMLHeader('
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                    </tr>
                                    <!-- <tr>
                                        <td rowspan="2" width="15%" height="10px"><img width="10%" height="60px" style="padding-left:8px" src="' . base_url() . 'assets/img/msal.jpg"></td>
                                        <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                        </td>
                                    </tr> -->
                                </table>
                                <hr style="width:100%;margin:0px;">
                                ');
            // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

            $html = $this->load->view('v_print_bpb', $data, true);

            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }
    }

    function qrcode($no_bpb, $id, $noref)
    {
        $this->load->library('ciqrcode');

        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/bpb/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $id . '_' . $no_bpb . '.png'; //buat name dari qr code

        // $params['data'] = site_url('bpb/cetak/'.$no_bpb.'/'.$id); //data yang akan di jadikan QR CODE
        $params['data'] = $noref; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }

    function approve()
    {
        $nobpb        = $this->input->post('nobpb');
        $norefbpb    = $this->input->post('norefbpb');
        $kodebar    = $this->input->post('kodebar');
        $setuju    = $this->input->post('approval');

        if ($setuju == "setuju") {
            $approval = "1";
            $mengetahui = "3";
            $aprrove = "1";

            $this->M_bpb->update_item($nobpb, $norefbpb, $aprrove, $kodebar);
        } else if ($setuju == "tidaksetuju") {
            $approval = "2";
            $mengetahui = "3";
            $aprrove = '0';

            $this->M_bpb->update_item($nobpb, $norefbpb, $aprrove, $kodebar);
        }

        $dataedit_approval = array(
            'status_asisten_afd' => $approval,
            'tgl_asisten_afd' => date('Y-m-d H:i:s'),

            'status_kepala_kebun' => $approval,
            'tgl_kepala_kebun' => date('Y-m-d H:i:s'),

            'status_kasie_agronomi' => $approval,
            'tgl_kepala_kebun' => date('Y-m-d H:i:s'),

            'status_kasie_agronomi' => $approval,
            'tgl_kasie_agronomi' => date('Y-m-d H:i:s'),

            'status_ktu' => $approval,
            'tgl_ktu' => date('Y-m-d H:i:s'),

            'status_gm' => $mengetahui,
            'tgl_gm' => date('Y-m-d H:i:s')

        );



        $dataItem = $this->M_bpb->updateitem($nobpb, $norefbpb, $kodebar, $dataedit_approval);
        echo json_encode($dataItem);
    }

    function detail_itembpb()
    {
        $nobpb = $this->input->post('nobpb');
        $norefbpb = $this->input->post('norefbpb');
        $this->M_listbpb->where_datatables($nobpb, $norefbpb);
        $list = $this->M_listbpb->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {

            $setuju = "'setuju'";
            $tidaksetuju = "'tidaksetuju'";
            $nobpb = "'" . $d->nobpb . "'";
            $norefbpb = "'" . $d->norefbpb . "'";
            $kodebar = "'" . $d->kodebar . "'";
            $nobpb_query = $d->nobpb;
            $norefbpb_query = $d->norefbpb;
            $kodebar_query = $d->kodebar;

            $no++;
            $row = array();
            $row[] = '<font face="Verdana" size="2">' . $no . "." . '</font>';
            // $row[] = '<font face="Verdana" size="2">' . $d->nobpb . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->norefbpb . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->kodebar . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->nabar . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->qty . '</font>';
            $row[] = '<font face="Verdana" size="2">' . $d->qty_disetujui . '</font>';
            $query_status_asisten_afd = "SELECT * FROM approval_bpb WHERE status_asisten_afd <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd);
            if ($get_status_asisten_afd->num_rows() > 0) {
                $get_status_approval_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd)->row();
                if ($get_status_approval_asisten_afd->status_asisten_afd ==  "1") {
                    $button = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                } else if ($get_status_approval_asisten_afd->status_asisten_afd ==  "2") {
                    $button = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                }
            } else {
                $button = '<a href="javascript:;" id="a_appproval">
                    <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $setuju . ')">
                    </button>
                </a>
                <a href="javascript:;" id="a_appproval">
                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $tidaksetuju . ')">
                </button></a>';
            }
            $row[] = $button;

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_listbpb->count_all(),
            "recordsFiltered" => $this->M_listbpb->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
}
