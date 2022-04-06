<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tutup_buku extends CI_Model
{

      function get_stockawal()
      {
            $this->db_logistik_pt->select('nilai_masuk, nilai_keluar, QTY_MASUK, QTY_KELUAR, txtperiode');
            $this->db_logistik_pt->from('stockawal');
            return $this->db_logistik_pt->get()->result_array();
      }
}

/* End of file M_tutup_buku.php */
