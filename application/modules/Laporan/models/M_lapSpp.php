<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_lapSpp extends CI_Model
{
    // Start Data Table Server Side
    var $table = 'ppo'; //nama tabel dari database
    var $column_order = array(null, 'id', 'kodebar', 'nabar', 'grp', 'satuan', 'noreftxt', 'tglppo', 'kodedept'); //field yang ada di table user
    var $column_search = array('id', 'kodebar', 'nabar', 'grp'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function where_datatables($dev1, $bag, $rbt, $tgl)
    {
        // global $nopo;
        $this->devisi = $dev1;
        $this->bagian = $bag;
        $this->rbt_pilihan = $rbt;
        $this->tgl = $tgl;
        // return $nopo;
    }

    private function _get_datatables_query()
    {
        $devisi = $this->devisi;
        $bagian = $this->bagian;
        $rbt = $this->rbt_pilihan;
        $tgl = $this->tgl;

        $this->db_logistik_pt->from($this->table);
        $this->db_logistik_pt->where('devisi', $devisi);
        $this->db_logistik_pt->where('kodept', $bagian);
        $this->db_logistik_pt->where('status2', $rbt);
        $this->db_logistik_pt->where('periodetxt', $tgl);
        // $this->db_logistik_pt->where('po', "0", "1");
        $this->db_logistik_pt->order_by('id', 'desc');
        // $this->db_logistik_pt->query("SELECT noreftxt, tglppo, kodedept FROM ppo WHERE po IN ('0', '1') $devisi $bagian $tgl $rbt ORDER BY tglppo DESC")->result();


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
    //End Data Table Server Side

}

/* End of file M_lapSpp.php */
