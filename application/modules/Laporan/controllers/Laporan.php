<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $db_pt = check_db_pt();
        $this->db_logistik = $this->load->database('db_logistik', TRUE);
        $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

        $this->load->model('M_laporan');
        $this->load->model('M_lapSpp');

        if (!$this->session->userdata('id_user')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    function list_lapbarang()
    {
        $list = $this->M_laporan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $hasil) {
            $row   = array();
            $id    = "'" . $hasil->id . "'";
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nopart;
            $row[] = $hasil->nabar;
            // $row[] = $hasil->grp;
            $row[] = $hasil->satuan;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_laporan->count_all(),
            "recordsFiltered" => $this->M_laporan->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    function tampilkan_spp()
    {
        $data = $this->M_laporan->get_data_spp();
        echo json_encode($data);
    }


    public function index()
    {
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


    public function print_lap_po_register()
    {
        // ini_set('max_execution_time', '300');
        ini_set("pcre.backtrack_limit", "50000000");
        $lokasi = $this->uri->segment(3);
        $tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
        $tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
        $tahun = $this->uri->segment(9);
        switch ($this->uri->segment(8)) {
            case '01':
                $bulan = "Januari";
                break;
            case '02':
                $bulan = "Februari";
                break;
            case '03':
                $bulan = "Maret";
                break;
            case '04':
                $bulan = "April";
                break;
            case '05':
                $bulan = "Mei";
                break;
            case '06':
                $bulan = "Juni";
                break;
            case '07':
                $bulan = "Juli";
                break;
            case '08':
                $bulan = "Agustus";
                break;
            case '09':
                $bulan = "September";
                break;
            case '10':
                $bulan = "Oktober";
                break;
            case '11':
                $bulan = "November";
                break;
            case '12':
                $bulan = "Desember";
                break;
            default:
                $bulan = "";
                break;
        }
        switch ($lokasi) {
            case '01':
                $lokasi = "AND lokasi = 'HO'";
                $lokasi1 = "HO";
                break;
            case '02':
                $lokasi = "AND lokasi = 'RO'";
                $lokasi1 = "RO";
                break;
            case '03':
                $lokasi = "AND lokasi = 'PKS'";
                $lokasi1 = "PKS";
                break;
            case '07':
            case '06':
                $lokasi = "AND lokasi = 'SITE'";
                $lokasi1 = "SITE";
                break;
            default:
                $lokasi = "";
                $lokasi1 = "";
                break;
        }
        // $data['lokasi']= $this->uri->segment(3);
        $query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2";
        $data['po'] = $this->db_logistik_pt->query($query)->result();
        $data['periode'] = $bulan . " " . $tahun;

        $data['lokasi1'] = $lokasi1;
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_top' => '15',
            'orientation' => 'P'
        ]);
        // $mpdf->SetHTMLHeader('<h3>' . $this->session->userdata('pt') . '</h3><h6>JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>');
        $html = $this->load->view('lapPo/vw_lap_po_print_register', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        // var_dump($query);
    }

    function listPOCetakan()
	{
		$data = $this->M_laporan->get_list_po_cetakan();
		echo json_encode($data);
	}

    public function lapBarang()
    {
        $data = [
            'title' => 'Data Laporan Barang',
        ];

        $this->template->load('template', 'barang/v_lap_barang', $data);
    }

    public function barang()
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236],
            'setAutoTopMargin' => 'stretch',
            'orientation' => 'P'
        ]);

        $query_grp = "SELECT DISTINCT grp FROM  kodebar ORDER BY grp ASC LIMIT 100";
        $data['data_grp'] = $this->db_logistik->query($query_grp)->result();

        $query = "SELECT id, kodebartxt, nabar, nopart, satuan FROM kodebar ORDER BY nabar ASC LIMIT 100";
        $data['data_barang'] = $this->db_logistik->query($query)->result();

        // var_dump(json_decode($this->list_barang()));exit();
        // $data['data_barang'] = json_decode($this->list_barang());


        $mpdf->SetHTMLHeader('<h4 align="center">MASTER KODE BARANG</h4>');
        $mpdf->SetHTMLFooter('<h5 align="left">{DATE j-m-Y H:i:s} - ' . $this->input->ip_address() . ' - ' . $this->platform->agent() . '</h5> <h5 align="right">Halaman {PAGENO} dari {nb}</h5>');

        $html = $this->load->view('barang/vw_lap_barang_print', $data, true);
        // $html = $this->load->view('V_lap_barang/vw_lap_barang_print',null,TRUE);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cari_bagian()
    {
        $query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
        $data = $this->db_logistik_pt->query($query)->result();
        echo json_encode($data);
    }

    function print_lap_spp()
    {
        $noref = str_replace('.', '/', $this->uri->segment(3));
        $data['ppo'] = $this->db_logistik_pt->get_where('ppo', ['noreftxt' => $noref])->row();
        $data['item_ppo'] = $this->db_logistik_pt->get_where('item_ppo', array('noreftxt' => $noref))->result();

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236],
            'margin_top' => '15',
            'orientation' => 'P'
        ]);
        // $mpdf->SetHTMLHeader('<h3>' . $this->session->userdata('pt') . '</h3>');
        $html = $this->load->view('lapSpp/v_lap_spp_print', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function print_lap_po_cetakan()
	{
		$noreftxt = str_replace('.', '/', $this->uri->segment(3));
		$no_refppo = str_replace('.', '/', $this->uri->segment(4));
		$kode_supply = $this->uri->segment(5);
		$lokasi = $this->session->userdata('status_lokasi');
		$query = "SELECT * FROM po WHERE noreftxt = '" . $noreftxt . "' AND no_refppo = '" . $no_refppo . "'";
		$query2 = "SELECT * FROM pt WHERE PT LIKE '%$lokasi%'";
		$query3 = "SELECT * FROM supplier WHERE kode = '" . $kode_supply . "'";
		$query4 = "SELECT * FROM item_po WHERE noref = '" . $noreftxt . "' AND refppo = '" . $no_refppo . "'";
		$data['po'] = $this->db_logistik_pt->query($query)->row();
		$data['pt'] = $this->db_logistik_pt->query($query2)->row();
		$data['supply'] = $this->db_logistik->query($query3)->row();
		$data['item_po'] = $this->db_logistik_pt->query($query4)->result();
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('lapPo/vw_lap_po_print_cetakan', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

    function print_lap_po_lokal_r()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "ESTATE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND no_refppo LIKE '%SPPI%'";
		$data['po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('lapPo/vw_lap_po_print_lr', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

    function print_lap_po_cash()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "SITE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND bayar = 'CASH'";
		$data['po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('lapPo/vw_lap_po_print_cs', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

    function print_lap_po_lokal_t()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "ESTATE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM item_po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND refppo LIKE '%SPPI%'";
		$data['item_po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('lapPo/vw_lap_po_print_lt', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

}

/* End of file Laporan.php */
