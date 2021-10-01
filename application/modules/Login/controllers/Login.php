<?php

date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $db_pt = check_db_pt();
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        $this->db_logistik_center = $this->load->database('db_logistik_center', true);
        $this->db_logistik_msal = $this->load->database('db_logistik_msal', true);
        $this->db_logistik_mapa = $this->load->database('db_logistik_mapa', true);
        $this->db_logistik_peak = $this->load->database('db_logistik_peak', true);
        $this->db_logistik_psam = $this->load->database('db_logistik_psam', true);
        $this->db_logistik_kpp = $this->load->database('db_logistik_kpp', true);
    }

    public function index()
    {
        if ($this->session->userdata('id_user')) {
            redirect('Home');
        } else {
            $data['pt'] = $this->db_logistik_center->get('tb_pt')->result_array();

            $this->load->view('v_login', $data);
        }
    }

    public function proses()
    {
        if (isset($_POST['submit'])) {

            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $periode = $this->security->xss_clean($this->input->post('periode'));

            $kode_pt_login = $this->input->post('kode_pt');

            // cari kode pt di tb central
            $data['get_tb_pt_central'] = $this->db_logistik_center->get_where('tb_pt', array('kode_pt' => $kode_pt_login))->row_array();

            // membuka PT awal sebelum mendapatkan session PT
            $pt_login = FALSE;
            if ($data['get_tb_pt_central']['alias'] == 'MSAL') {
                $pt_login = 'db_logistik_msal';
            } else if ($data['get_tb_pt_central']['alias'] == 'MAPA') {
                $pt_login = 'db_logistik_mapa';
            } else if ($data['get_tb_pt_central']['alias'] == 'PEAK') {
                $pt_login = 'db_logistik_peak';
            } else if ($data['get_tb_pt_central']['alias'] == 'PSAM') {
                $pt_login = 'db_logistik_psam';
            } else if ($data['get_tb_pt_central']['alias'] == 'KPP') {
                $pt_login = 'db_logistik_kpp';
            }

            $get_username = $this->$pt_login->get_where('user', array('username' => $username));
            // $get_username = $this->db_logistik_center->get_where('user', array('username' => $username));
            $user = $get_username->row();


            if ($get_username->num_rows() > 0 && password_verify($password, $user->password)) {

                switch ($user->status_lokasi) {
                    case 'HO':
                        $get_pt = $this->$pt_login->get_where('pt', array('lokasi' => 'HO'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'RO':
                        $get_pt = $this->$pt_login->get_where('pt', array('lokasi' => 'RO'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'SITE':
                        $get_pt = $this->$pt_login->get_where('pt', array('lokasi' => 'SITE'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'PKS':
                        $get_pt = $this->$pt_login->get_where('pt', array('lokasi' => 'PKS'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    default:
                        # code...
                        break;
                }

                $d_periode =  date("j", strtotime($periode));

                if ($d_periode >= 26) {
                    $ym_periode = date('Ym', strtotime($periode . " +1 month"));
                } else {
                    $ym_periode = date('Ym', strtotime($periode));
                }

                $Ymd_periode =  date('Y-m-d', strtotime($periode));

                $this->session->set_userdata(array(
                    'id_user' => $user->no,
                    'user' => $user->nama,
                    'status_lokasi' => $user->status_lokasi, //HO, RO, SITE, PKS
                    'kode_pt_login' => $kode_pt_login,
                    'app_pt' => $data['get_tb_pt_central']['alias'], //MSAL, MAPA, PSAM, PEAK
                    'nama_pt' => $data['get_tb_pt_central']['nama_pt'], //MSAL, MAPA, PSAM, PEAK
                    'logo_pt' => $data['get_tb_pt_central']['logo'], //MSAL, MAPA, PSAM, PEAK
                    'alamat_ho' => $data['get_tb_pt_central']['deskripsi_ho'], //MSAL, MAPA, PSAM, PEAK
                    'alamat_site' => $data['get_tb_pt_central']['deskripsi_site'], //MSAL, MAPA, PSAM, PEAK
                    'kode_pt' => $kode_pt,
                    'pt' => $nama_pt,
                    'level' => $user->level,
                    'kode_level' => $user->kode_level,
                    'lokasi_kebun' => $user->status_lokasi_site,
                    'status_login' => 'oke',
                    'periode' => $periode,
                    'ym_periode' => $ym_periode,
                    'Ymd_periode' => $Ymd_periode
                ));

                redirect('Home', 'refresh');
            } else {
                // echo "username atau password salah";
                $this->session->set_flashdata('notif', '
                        <div class="center">
                            <div class="alert alert-danger" role="alert"> 
                            Username atau Password Salah !
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            </button>
                            </div>
                        </div>
                        ');
                redirect('Login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}

/* End of file Login.php */
