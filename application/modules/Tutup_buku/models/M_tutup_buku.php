<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tutup_buku extends CI_Model
{

      function get_stock_awal()
      {
            $this->db_logistik_pt->select('pt,KODE,kodebar,kodebartxt,nabar,satuan,grp,');
            $this->db_logistik_pt->from('stockawal');
            return $this->db_logistik_pt->get()->result_array();
      }
}

/* End of file M_tutup_buku.php */
