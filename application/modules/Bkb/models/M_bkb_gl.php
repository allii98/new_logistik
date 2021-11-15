<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bkb_gl extends CI_Model
{

      public function insert_bkb_to_header_entry_gl($data)
      {
            return $this->db_mips_gl->insert('header_entry', $data);
      }

      public function insert_bkb_to_entry_gl_cr($data_entry, $noref)
      {
            $sql = $this->db_mips_gl->insert('entry', $data_entry);

            // setelah disave, sum entry untuk mendapatkan total cr nya yang diupdate ke header_entry
            if ($sql) {
                  $this->db_mips_gl->select_sum('cr', 'cr');
                  $this->db_mips_gl->where(['noref' => $noref]);
                  $this->db_mips_gl->from('entry');
                  $sum_cr = $this->db_mips_gl->get()->row();

                  $this->db_mips_gl->set('totalcr', $sum_cr->cr);
                  $this->db_mips_gl->where(['noref' => $noref]);
                  return $this->db_mips_gl->update('header_entry');
            } else {
                  return 0;
            }
      }

      public function get_data_noac_gl($kodebar)
      {
            $this->db_mips_gl->select('group, type, level, general');
            $this->db_mips_gl->where(['noac' => $kodebar]);
            $this->db_mips_gl->from('noac');
            return $this->db_mips_gl->get()->row_array();
      }

      public function get_data_noac_beban($kodesub)
      {
            // kalo di bkb sudah dapat noac nya
            $this->db_mips_gl->select('noac, group, type, level, general');
            $this->db_mips_gl->where(['noac' => $kodesub]);
            $this->db_mips_gl->from('noac');
            return $this->db_mips_gl->get()->row_array();
      }

      public function insert_bkb_to_entry_gl_dr($data_entry, $noref)
      {
            $sql = $this->db_mips_gl->insert('entry', $data_entry);

            // setelah disave, sum entry untuk mendapatkan total dr nya yang diupdate ke header_entry
            if ($sql) {
                  $this->db_mips_gl->select_sum('dr', 'dr');
                  $this->db_mips_gl->where(['noref' => $noref]);
                  $this->db_mips_gl->from('entry');
                  $sum_dr = $this->db_mips_gl->get()->row();

                  $this->db_mips_gl->set('totaldr', $sum_dr->dr);
                  $this->db_mips_gl->where(['noref' => $noref]);
                  return $this->db_mips_gl->update('header_entry');
            } else {
                  return 0;
            }
      }

      public function edit_gl($get_data_keluarbrgitem)
      {
            $kodebar = $get_data_keluarbrgitem['kodebar'];
            $noref_bkb = $get_data_keluarbrgitem['NO_REF'];

            //update debet
            $this->db_mips_gl->set('dr', 0);
            $this->db_mips_gl->where(['kodebar' => $kodebar, 'dc' => 'D', 'noref' => $noref_bkb]);
            $this->db_mips_gl->update('entry');

            //update credit
            $this->db_mips_gl->set('cr', 0);
            $this->db_mips_gl->where(['kodebar' => $kodebar, 'dc' => 'C', 'noref' => $noref_bkb]);
            $this->db_mips_gl->update('entry');

            $sql_sum_reg = "SELECT SUM(dr) AS dr, SUM(cr) AS cr FROM entry WHERE noref = '$noref_bkb'";

            $sum_dr = $this->db_mips_gl->query($sql_sum_reg)->row_array();

            $this->db_mips_gl->set('totaldr', $sum_dr['dr']);
            $this->db_mips_gl->set('totalcr', $sum_dr['cr']);
            $this->db_mips_gl->where(['noref' => $noref_bkb]);
            return $this->db_mips_gl->update('header_entry');
      }
}

/* End of file M_bkb_gl.php */
