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

      public function get_stok_periode($txtperiode)
      {
            $this->db_logistik_pt->select('kodebar');
            $this->db_logistik_pt->where(['txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal');
            return $this->db_logistik_pt->get()->num_rows();
      }

      public function getLpb()
      {
            $periode = $this->session->userdata('ym_periode');
            $data = $this->db_logistik_pt->query("SELECT * FROM stokmasuk WHERE txtperiode1='$periode'")->result();
            return $data;
      }

      public function getItemLpb()
      {
            $periode = $this->session->userdata('ym_periode');
            $data = $this->db_logistik_pt->query("SELECT i.kodebar, i.nabar, i.satuan, i.grp, i.refpo, i.qty, s.jenis_lpb FROM masukitem i LEFT JOIN stokmasuk s ON i.noref=s.noref WHERE i.txtperiode='$periode'")->result();
            return $data;
      }

      public function delete_stokawal()
      {
            $periode = $this->session->userdata('ym_periode');
            return $this->db_logistik_pt->delete('stockawal', array('txtperiode' => $periode));
      }
}

/* End of file M_posting.php */
