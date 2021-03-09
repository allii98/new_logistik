<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_po extends CI_Model
{



    var $table = 'supplier'; //nama tabel dari database
    var $column_order = array(null, 'id', 'kode', 'supplier', 'usaha'); //field yang ada di table supplier  
    var $column_search = array('kode', 'supplier',  'usaha'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'DESC'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        // $Value = ;
        $this->db_logistik_pt->select('id, kode, supplier, usaha');
        $this->db_logistik_pt->from('supplier');
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
        // $query = "SELECT id_aset,nama_aset,id_kat_non FROM tb_non_aset WHERE id_kat_non = '" . $this->input->post('id') . "'";
        $noref = $this->input->get('noref');
        $query = "SELECT id, noppo, noreftxt FROM ppo WHERE noreftxt LIKE '%$noref%' ORDER BY id DESC";
        $d = $this->db_logistik_pt->query($query)->result_array();
        return $d;
    }

    public function get_id()
    {
        $query = "SELECT * FROM ppo p LEFT JOIN item_ppo i ON p.noppo = i.noppo WHERE p.id = '" . $this->input->post('id') . "'";
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
}

/* End of file M_po.php */
