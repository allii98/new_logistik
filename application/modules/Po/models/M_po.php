<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_po extends CI_Model
{
    var $table = 'item_ppo'; //nama tabel dari database
    var $column_order = array(null, 'id', 'noppo', 'tglppo', 'noreftxt', 'qty', 'namadept', 'kodebar', 'nabar', 'ket'); //field yang ada di table supplier  
    var $column_search = array('tglppo', 'noreftxt',  'namadept', 'kodebar', 'nabar'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'DESC'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        // $Value = ;
        $this->db_logistik_pt->select('id, noppo, tglppo, noreftxt, qty, namadept,kodebar,nabar, ket');
        $this->db_logistik_pt->from('item_ppo');
        $this->db_logistik_pt->where('po', 0);
        $this->db_logistik_pt->where('status2', 1);
        $this->db_logistik_pt->order_by('id', 'desc');


        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db_logistik_pt->group_start();
                    $this->db_logistik_pt->like($item, $_POST['search']['value']);
                } else {
                    $this->db_logistik_pt->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->db_logistik_pt->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db_logistik_pt->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db_logistik_pt->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db_logistik_pt->limit($_POST['length'], $_POST['start']);
        $query = $this->db_logistik_pt->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db_logistik_pt->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db_logistik_pt->from($this->table);
        return $this->db_logistik_pt->count_all_results();
    }

    public function updatePPO2($noppo)
    {
        $this->db_logistik_pt->set('po', 1);
        $this->db_logistik_pt->where(['noref' => $noppo]);
        $this->db_logistik_pt->update('ppo');
    }
    public function updatePPO3($noppo)
    {
        $this->db_logistik_pt->set('po', 0);
        $this->db_logistik_pt->where(['noref' => $noppo]);
        $this->db_logistik_pt->update('ppo');
    }

    public function get_detail_ppo($no_spp, $no_ref_spp)
    {
        $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, kodedept, namadept, ket, pt, kodept, lokasi, status, status2, po, jenis FROM ppo WHERE noppo = '$no_spp' AND noreftxt = '$no_ref_spp' ORDER BY id DESC";
        $data = $this->db_logistik_pt->query($query);
        return $data;
    }

    public function get_detail_item_ppo($id, $no_ref_spp, $kodebar)
    {
        $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, kodebartxt, nabar, tglppo, qty, qty2, kodedept, namadept, ket, kodept, namapt, lokasi, status, status2, po, sat FROM item_ppo WHERE id = '$id' AND noreftxt = '$no_ref_spp' AND kodebartxt = '$kodebar' ORDER BY id DESC";
        $data = $this->db_logistik_pt->query($query);
        return $data;
    }

    public function get_supplier()
    {
        $supplier = "SELECT kode, supplier, usaha FROM supplier ORDER BY id DESC";
        $query = $this->db_logistik_pt->query($supplier)->result_array();
        return $query;
    }

    public function get_sup()
    {
        // $query = "SELECT id_aset,nama_aset,id_kat_non FROM tb_non_aset WHERE id_kat_non = '" . $this->input->post('id') . "'";
        $toko = $this->input->get('toko');
        $query = "SELECT id, kode, supplier, usaha  FROM `supplier` WHERE `supplier` LIKE '%$toko%'";
        $t = $this->db_logistik_pt->query($query)->result_array();
        return $t;
    }

    public function get_spp()
    {
        $noref = $this->input->get('noref');
        $tgl = $this->input->get('tgl');
        $query = "SELECT id, noppo, jenis, noreftxt, tglppo, tglref, tglppotxt, namadept FROM ppo WHERE jenis = 'SPPI' AND po='0' AND (noreftxt LIKE '%$noref%' OR tglppo LIKE '%$tgl%') ORDER BY id DESC";
        $d = $this->db_logistik_pt->query($query)->result_array();
        return $d;
    }

    public function get_id()
    {
        $query = "SELECT * FROM ppo p LEFT JOIN item_ppo i ON p.noppo = i.noppo WHERE p.id = '" . $this->input->post('id') . "' AND i.po = '0'";
        $data = $this->db->query($query)->result_array();
        return $data;
    }

    public function get_itemppo()
    {
        $query = "SELECT * FROM item_ppo WHERE id = '" . $this->input->post('id') . "'";
        $data = $this->db->query($query)->result_array();
        return $data;
    }

    public function namaDept($kd_dept)
    {
        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->where('kode', $kd_dept);
        $this->db_logistik_pt->from('dept');
        return $this->db_logistik_pt->get()->row_array();
    }

    public function updatePO($no_id, $dataupdate)
    {
        $this->db_logistik_pt->where('id', $no_id);
        $this->db_logistik_pt->update('po', $dataupdate);

        return TRUE;
    }
    public function updateItem($no_id_item, $dataupdateitem)
    {
        $this->db_logistik_pt->where('id', $no_id_item);
        $this->db_logistik_pt->update('item_po',  $dataupdateitem);

        return TRUE;
    }
    public function updatePPO($id_ppo, $ppo)
    {
        $this->db_logistik_pt->where('id', $id_ppo);
        $this->db_logistik_pt->update('item_ppo',  $ppo);

        return TRUE;
    }
    public function editPPO($no_id, $ppo)
    {
        $this->db_logistik_pt->where('id', $no_id);
        $this->db_logistik_pt->update('ppo',  $ppo);

        return TRUE;
    }

    public function cancelUpdateItemPO($id_po_item, $id_po)
    {
        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('item_po');
        $this->db_logistik_pt->where('id', $id_po_item);
        $data_item_po =  $this->db_logistik_pt->get()->row_array();

        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('po');
        $this->db_logistik_pt->where('id', $id_po);
        $data_po =  $this->db_logistik_pt->get()->row_array();

        $data_return = [
            'data_item_po' => $data_item_po,
            'data_po' => $data_po,
        ];

        return $data_return;
    }

    public function cancelItemPO($id_po_item)
    {
        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('item_po');
        $this->db_logistik_pt->where('id', $id_po_item);
        $data_item_po =  $this->db_logistik_pt->get()->row_array();
        return $data_item_po;
    }

    public function deletePO($no_po)
    {
        $this->db_logistik_pt->delete('po', array('nopo' => $no_po));
        $this->db_logistik_pt->delete('item_po', array('nopo' => $no_po));
        return TRUE;
    }

    public function cari_item_po($kodebar, $qty, $ket)
    {
        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('item_po');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'qty' => $qty, 'ket' => $ket]);
        return $this->db_logistik_pt->get()->num_rows();
    }

    public function cari_po_edit($nopo)
    {
        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('po');
        $this->db_logistik_pt->where('nopo', $nopo);
        $po = $this->db_logistik_pt->get()->row_array();

        $this->db_logistik_pt->select('*');
        $this->db_logistik_pt->from('item_po');
        $this->db_logistik_pt->where('nopo', $nopo);
        $item_po = $this->db_logistik_pt->get()->result_array();

        $data = [
            'po' => $po,
            'item_po' => $item_po
        ];

        return $data;
    }

    public function cariDevisi()
    {
        $lokasi = $this->session->userdata('status_lokasi');

        if ($lokasi == 'SITE') {
            $this->db_logistik_pt->select('PT, kodetxt');
            $this->db_logistik_pt->where('kodetxt', '06');
            $this->db_logistik_pt->or_where('kodetxt', '07');
            $this->db_logistik_pt->from('pt_copy');
            $this->db_logistik_pt->order_by('kodetxt', 'ASC');
            return $this->db_logistik_pt->get()->result_array();
        } else {
            $this->db_logistik_pt->select('PT, kodetxt');
            $this->db_logistik_pt->from('pt_copy');
            $this->db_logistik_pt->order_by('kodetxt', 'ASC');
            return $this->db_logistik_pt->get()->result_array();
        }
    }
}

/* End of file M_po.php */
