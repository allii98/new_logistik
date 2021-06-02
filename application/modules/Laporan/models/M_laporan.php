<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

    var $table = 'kodebar'; //nama tabel dari database
    var $column_order = array(null, 'id', 'kodebartxt', 'nabar', 'nopart', 'grp', 'satuan'); //field yang ada di table user
    var $column_search = array('kodebartxt', 'nabar', 'nopart', 'grp', 'satuan'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->db_logistik->from($this->table);

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


    function get_data_spp()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $cmb_devisi = $this->input->post('cmb_devisi');
        $cmb_bagian = $this->input->post('cmb_bagian');
        $txt_periode = str_replace('/', '-', $this->input->post('txt_periode'));
        $txt_periode1 = str_replace('/', '-', $this->input->post('txt_periode1'));
        $txt_periode = date_format(date_create($txt_periode), "Y/m/d");
        $txt_periode1 = date_format(date_create($txt_periode1), "Y/m/d");

        $rbt_pilihan = $this->input->post('rbt_pilihan');

        $tgl = "AND tglppo BETWEEN '$txt_periode' AND '$txt_periode1'";

        switch ($cmb_devisi) {
            case '01':
                $dev = "AND lokasi = 'HO'";
                $dev1 = "AND kodept = '01'";
                break;
            case '02':
                $dev = "AND lokasi = 'RO'";
                $dev1 = "AND kodept = '02'";
                break;
            case '03':
                $dev = "AND lokasi = 'PKS'";
                $dev1 = "AND kodept = '03'";
                break;
            case '06':
                $dev = "AND noreftxt LIKE '%EST-%'";
                $dev1 = "AND kodept = '06'";
                break;
            case '07':
                $dev = "AND noreftxt LIKE '%EST2%'";
                $dev1 = "AND kodept = '07'";
                break;
            default:
                $dev = "";
                $dev1 = "";
                break;
        }

        if ($cmb_bagian == "Semua") {
            $bag = "";
        } else {
            if ($cmb_bagian == 'HRD & UMUM') $cmb_bagian = 'UMUM & HRD';
            $bag = "AND namadept = '" . $cmb_bagian . "'";
        }

        switch ($rbt_pilihan) {
            case 'proses':
                $rbt = "AND status = 'DALAM PROSES'";
                break;
            case 'setujui':
                $rbt = "AND status = 'DISETUJUI'";
                break;
            case 'sppi':
                $rbt = "AND noreftxt LIKE '%SPPI%'";
                break;
            case 'sppa':
                $rbt = "AND noreftxt LIKE '%SPPA%'";
                break;
            default:
                $rbt = "";
                break;
        }

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT noreftxt, tglppo, namadept, kodedept FROM ppo 
            			WHERE po IN ('0', '1') $dev1 $bag $tgl $rbt AND (noreftxt LIKE '%$keyword%' 
                        OR tglppo LIKE '%$keyword%'
                        OR namadept LIKE '%$keyword%')
            			ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT noreftxt, tglppo, namadept, kodedept FROM ppo WHERE po IN ('0', '1') $dev1 $bag $tgl $rbt ORDER BY tglppo DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $noref = "'" . $hasil->noreftxt . "'";
            $noref = str_replace("/", ".", $noref);
            $tgl = date_create($hasil->tglppo);
            $row   = array();
            $row[] = $no++;
            $row[] = date_format($tgl, 'd/m/Y');
            $row[] = $hasil->namadept;
            $row[] = $hasil->noreftxt;
            $row[] = '<button class="btn btn-xs btn-success fa fa-print" id="btn_print" target="_blank" name="btn_print" type="button" data-toggle="tooltip" data-placement="right" title="Print" onclick="printClick(' . $noref . ')"></button>';
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
        // var_dump($query);
    }

    function get_list_po_cetakan()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $cmb_company = $this->input->post('cmb_company');
        $txt_periode2 = str_replace('/', '-', $this->input->post('txt_periode2'));
        $txt_periode3 = str_replace('/', '-', $this->input->post('txt_periode3'));

        $txt_periode2 = date_create($txt_periode2);
        $txt_periode2 = date_format($txt_periode2, "Y-m-d");
        $txt_periode3 = date_create($txt_periode3);
        $txt_periode3 = date_format($txt_periode3, "Y-m-d");

        switch ($cmb_company) {
            case '01':
                $dev = "AND namapt LIKE '%(HO)%'";
                break;
            case '02':
                $dev = "AND namapt LIKE '%(RO)%'";
                break;
            case '03':
                $dev = "AND namapt LIKE '%(PKS)%'";
                break;
            case '06':
                $dev = "AND namapt LIKE '%ESTATE%'";
                break;
            case '07':
                $dev = "AND namapt LIKE '%ESTATE2%'";
                break;
            default:
                $dev = "";
                break;
        }

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM po WHERE tglpo BETWEEN '" . $txt_periode2 . "' AND '" . $txt_periode3 . "' $dev AND batal = '0' AND (no_refppo LIKE '%$keyword%' 
                        OR tglpo LIKE '%$keyword%'
                        OR nama_supply LIKE '%$keyword%'
                        OR noreftxt LIKE '%$keyword%')
            			ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM po WHERE tglpo BETWEEN '" . $txt_periode2 . "' AND '" . $txt_periode3 . "' $dev AND batal = '0'";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $tglpo = date_create($hasil->tglpo);
            $noreftxt = "'" . $hasil->noreftxt . "'";
            $noreftxt = str_replace("/", ".", $noreftxt);
            $no_refppo = "'" . $hasil->no_refppo . "'";
            $no_refppo = str_replace("/", ".", $no_refppo);
            $kode_supply = "'" . $hasil->kode_supply . "'";
            $row   = array();
            $row[] = $no++;
            $row[] = date_format($tglpo, "d-m-Y");
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->no_refppo;
            $row[] = $hasil->nama_supply;
            $row[] = '<button class="btn btn-xs btn-success fa fa-print" id="btn_print" target="_blank" name="btn_print" type="button" data-toggle="tooltip" data-placement="right" title="Print" onclick="printLapPOCetClick(' . $noreftxt . ',' . $no_refppo . ',' . $kode_supply . ')"></button>';
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
        // var_dump($txt_periode2, $txt_periode3, $query);
    }
}

/* End of file M_laporan.php */
