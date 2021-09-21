<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pp');
        $this->load->model('M_dataPP');

        $db_pt = check_db_pt();
        $this->db_logistik = $this->load->database('db_logistik', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
        $this->db_caba = $this->load->database('db_caba', TRUE);
        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('form_validation');
    }

    function list_pp()
    {
        $list = $this->M_dataPP->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $hasil) {
            $no++;
            $row   = array();
            $id = $hasil->id;
            $refpp = $hasil->ref_pp;
            $noref = str_replace('/', '.', $refpp);

            $row[] = '<a href="' . site_url('Pp/edit_pp/' . $id . '/' . $noref) . '" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Update PP" id="btn_edit_pp"></a>

            <a href="' .  site_url('Pp/cetak/' .  $noref . '/' . $id) . '" target="_blank" title="Cetak PP" class="btn btn-primary btn-xs fa fa-print" id="a_print_po"></a>
            <a href="javascript:;" id="a_delete_pp">
                <button class="btn btn-danger fa fa-trash btn-xs" id="btn_delete_pp" name="btn_batal_pp" data-toggle="tooltip" style="padding-right:8px;" data-placement="top" title="Batal PP" onClick="deletePP(' . $id . ',' . $hasil->nopp .  ')">
                </button>
            </a>
                
                ';


            $row[] = $no . ".";
            $row[] = $hasil->ref_pp;
            $row[] = $hasil->ref_po;
            $row[] =  date('d-m-Y', strtotime($hasil->tglpp));
            $row[] = date('d-m-Y', strtotime($hasil->tglpo));
            $row[] = $hasil->nama_supply;
            $row[] = $hasil->user;
            $row[] = '<p style="word-break: break-word; margin-top:0px; margin-bottom: 0px;">' . htmlspecialchars($hasil->ket) . ' </p>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_dataPP->count_all(),
            "recordsFiltered" => $this->M_dataPP->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function index()
    {
        $data = [
            'title' => 'Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_dataPP', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_inputPp', $data);
    }

    public function edit_pp()
    {
        $data = [
            'title' => 'Update Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_editPP', $data);
    }

    public function list_po()
    {

        $list = $this->M_pp->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {

            $row = array();

            $ref_po = $d->noreftxt;

            // untuk sum harga dan qty pada item_Po
            $query_harga_po = "SELECT SUM(harga*qty) AS hargapo FROM item_po WHERE noref = '$ref_po'";
            $get_harga_po = $this->db_logistik_pt->query($query_harga_po)->row();
            // endsum

            // untuk sum jumlah bpo pada item_po
            $query_jumlah_bpo = "SELECT SUM(JUMLAHBPO) AS jumlahbpo FROM item_po where noref = '$ref_po'";
            $get_jumlah_bpo = $this->db_logistik_pt->query($query_jumlah_bpo)->row();
            // endsum

            // sum kasir bayar pada tabel pp
            $query_jumlah_sudah_bayar = "SELECT SUM(kasir_bayar) AS kasir_bayar FROM pp where ref_po = '$ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();
            // endsum

            //kurs
            $query_kurs = "SELECT DISTINCT kurs FROM item_po WHERE nopo = '$d->nopotxt' AND noref = '$ref_po'";
            $get_kurs = $this->db_logistik_pt->query($query_kurs)->row();


            $row[] = $d->id;
            $row[] = date_format(date_create($d->tglpo), 'd-m-Y');
            $row[] = $d->noreftxt;
            $row[] = $d->nopotxt;
            $row[] = $d->kode_supply;
            $row[] = $d->nama_supply;
            $row[] = $d->bayar;
            $row[] = number_format($get_harga_po->hargapo);
            $row[] = number_format($get_jumlah_bpo->jumlahbpo);
            $row[] = number_format($get_jumlah_sudah_bayar->kasir_bayar);
            $row[] = number_format($d->totalbayar - $get_jumlah_sudah_bayar->kasir_bayar);
            $row[] = $get_kurs->kurs;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_pp->count_all(),
            "recordsFiltered" => $this->M_pp->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    function caripo()
    {
        $refpo = $this->input->post('refpo');
        $dt = $this->M_pp->caripo($refpo); // sum kasir bayar pada tabel pp
        $query_jumlah_sudah_bayar = "SELECT SUM(kasir_bayar) AS kasir_bayar FROM pp WHERE ref_po = '$refpo'";
        $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();
        // endsum
        $saldo = number_format($dt->totalbayar - $get_jumlah_sudah_bayar->kasir_bayar);
        $data = [
            'data' => $dt,
            'saldo' => $saldo,
        ];

        echo json_encode($data);
    }

    public function simpan_pp()
    {
        $data = $this->M_pp->simpan_pp();
        echo json_encode($data);
    }

    public function cetak()
    {
        $no_ref = $this->uri->segment('3');
        $no_pp = str_replace('.', '/',  $no_ref);

        $id = $this->uri->segment('4');

        $this->qrcode($no_pp, $id);

        $data['data_pp'] = $this->db_logistik_pt->get_where('pp', array('ref_pp' => $no_pp, 'id' => $id))->row();
        $data['po'] = $this->db_logistik_pt->get_where('po', array('noreftxt' => $data['data_pp']->ref_po))->row();

        $this->db_logistik_pt->where('id', $id);
        $this->db_logistik_pt->where('ref_pp', $no_pp);
        $cek = $this->db_logistik_pt->get_where('pp');
        if ($cek->num_rows() > 0) {
            $cek = $cek->row();
            $jml_ = (int)$cek->jml_cetak;
            // echo $jml_;
            $up = [
                'jml_cetak' => $jml_ + 1
            ];
            $this->db_logistik_pt->where('id', $id);
            $this->db_logistik_pt->where('ref_pp', $no_pp);
            $this->db_logistik_pt->update('pp', $up);
        } else {
            $ins = [
                'jml_cetak' => 1
            ];
            $this->db_logistik_pt->where('id', $id);
            $this->db_logistik_pt->where('ref_pp', $no_pp);
            $this->db_logistik_pt->update('pp', $ins);
            // $this->db_logistik_pt->insert('po', $ins);
        }

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            // 'format' => [190, 236],
            'margin_top' => '0',
            'margin_left' => '3',
            'margin_right' => '3',
            'orientation' => 'P'
        ]);

        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('v_pp_print', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    private function qrcode($no_pp, $id)
    {
        $this->load->library('ciqrcode');
        // header("Content-Type: image/png");

        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/qrcode/cache/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/qrcode/errorlog/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/pp/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $id . '_' . $no_pp . '.png'; //buat name dari qr code

        $params['data'] = site_url('Pp/cetak/' . $no_pp . '/' . $id); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }

    function get_data_pp()
    {
        $id_pp = $this->input->post('id');
        $data_pp = $this->db_logistik_pt->get_where('pp', array('id' => $id_pp))->row();

        $ref_po = $data_pp->ref_po;

        $query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$ref_po'";
        // var_dump("SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$ref_po'");exit();
        $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();
        // var_dump($get_jumlah_sudah_bayar->jumlah);exit();
        echo json_encode(array('data_pp' => $data_pp, 'sudah_bayar' => $get_jumlah_sudah_bayar->jumlah));
    }

    function update_pp()
    {
        $data = $this->M_pp->update_pp();
        echo json_encode($data);
    }

    function deletePP()
    {
        $id_pp = $this->input->post('id_pp');
        $nopp = $this->input->post('nopp');

        // $user = $this->session->userdata('user');
        // $ip = $this->input->ip_address();
        // $platform = $this->platform->agent();



        $pp_logistik = $this->db_caba->delete('pp_logistik', array('nopp' => $nopp));
        $pp = $this->db_logistik_pt->delete('pp', array('id' => $id_pp, 'nopp' => $nopp));

        $data = [
            'pp_logistik' => $pp_logistik,
            'pp' => $pp
        ];
        // $data  = array($id_pp, $nopp);

        echo json_encode($data);
    }
}
