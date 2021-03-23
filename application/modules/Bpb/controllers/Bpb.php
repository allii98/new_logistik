<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bpb');
        $db_pt = check_db_pt();
        $this->db_logistik = $this->load->database('db_logistik', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        $this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
        $this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
        $this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
        $this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);

        $this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
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
}
