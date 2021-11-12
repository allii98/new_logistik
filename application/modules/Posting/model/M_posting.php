<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_posting extends CI_Model
{

      public function get_data_lpb()
      {
            $txtperiode = $this->session->userdata('ym_periode');

            $this->db_logistik_pt->select();
            $this->db_logistik_pt->where(['txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockmasuk');
            return $this->db_logistik_pt->get()->result_array();
      }
}

/* End of file M_posting.php */
