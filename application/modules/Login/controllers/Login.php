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
    }

    public function index()
    {
        if ($this->session->userdata('id_user')) {
            redirect('Home');
        } else {
            $this->load->view('v_login');
        }
    }

    public function proses()
    {
        if (isset($_POST['submit'])) {

            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $periode = $this->security->xss_clean($this->input->post('periode'));

            $get_username = $this->db_logistik_pt->get_where('user', array('username' => $username));
            $user = $get_username->row();

            $pt_alias = $this->input->post('pt_alias');

            if ($get_username->num_rows() > 0 && password_verify($password, $user->password)) {

                switch ($user->status_lokasi) {
                    case 'HO':
                        $get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '01'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'RO':
                        $get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '02'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'SITE':
                        $get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '06'));
                        $pt     = $get_pt->row();

                        $kode_pt = $pt->kodetxt;
                        $nama_pt = $pt->PT;
                        break;
                    case 'PKS':
                        $get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '03'));
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
                    // 'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
                    'app_pt' => $pt_alias,
                    'kode_pt' => $kode_pt,
                    'pt' => $nama_pt,
                    'level' => $user->level,
                    'kode_level' => $user->kode_level,
                    'status_login'    => 'oke',
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
