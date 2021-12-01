<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_posting extends CI_Model
{

      public function __construct()
      {
            parent::__construct();
      }

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
            $data = $this->db_logistik_pt->query("SELECT i.kodebar, i.nabar, i.satuan, i.grp, i.refpo, i.qty, i.ttgtxt, i.ket, i.norefppo, i.kode_dev, i.noref, i.id_user, i.devisi, s.jenis_lpb FROM masukitem i LEFT JOIN stokmasuk s ON i.noref=s.noref WHERE i.txtperiode='$periode'")->result();
            return $data;
      }

      public function delete_stokawal()
      {
            $periode = $this->session->userdata('ym_periode');
            return $this->db_logistik_pt->delete('stockawal', array('txtperiode' => $periode));
      }

      public function cari_harga_mutasi($no_ref_po, $kodebar)
      {
            //mencari NOREF karna di tb_mutasi item tidak ada no_mutasi
            $this->db_logistik_center->select('NO_REF');
            $this->db_logistik_center->where(['no_mutasi' => $no_ref_po]);
            $this->db_logistik_center->from('tb_mutasi');
            $data_tb_mutasi = $this->db_logistik_center->get()->row_array();

            $this->db_logistik_center->select('qty2, nilai_item');
            $this->db_logistik_center->where(['kodebar' => $kodebar, 'NO_REF' => $data_tb_mutasi['NO_REF']]);
            $this->db_logistik_center->from('tb_mutasi_item');
            $data = $this->db_logistik_center->get()->row_array();

            $harga = $data['nilai_item'] / $data['qty2'];
            return $harga;
      }

      public function cari_harga_po($no_ref_po, $kodebar, $norefppo)
      {
            $this->db_logistik_pt->select('harga');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'noref' => $no_ref_po, 'refppo' => $norefppo]);
            $this->db_logistik_pt->from('item_po');
            return $this->db_logistik_pt->get()->row_array();
      }

      public function saveRegisterStok($data_register_stok)
      {
            return $this->db_logistik_pt->insert('register_stok', $data_register_stok);
      }

      public function saveStokAwalHarian($data)
      {
            return $this->db_logistik_pt->insert('stockawal_harian', $data);
      }

      public function updateStokAwal($data_update, $kodebar, $txtperiode)
      {
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            return $this->db_logistik_pt->update('stockawal', $data_update);
      }

      public function saveStokAwalBulananDevisi($data)
      {
            return $this->db_logistik_pt->insert('stockawal_bulanan_devisi', $data);
      }

      public function sum_harga_kodebar_harian($kodebar, $txtperiode)
      {
            $this->db_logistik_pt->select_sum('nilai_masuk', 'nilai_masuk');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            $return_saldo_awal_harian = $this->db_logistik_pt->get()->row();

            $this->db_logistik_pt->select_sum('nilai_keluar', 'nilai_keluar');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            $return_nilaikeluar_stockawal =  $this->db_logistik_pt->get()->row();

            $sum_saldo_nilai_stockawal = $return_saldo_awal_harian->nilai_masuk - $return_nilaikeluar_stockawal->nilai_keluar;

            return $sum_saldo_nilai_stockawal;
      }

      public function sum_saldo_qty_kodebar_harian($kodebar, $txtperiode)
      {
            $this->db_logistik_pt->select_sum('QTY_MASUK', 'qty_masuk');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            $return_saldo_qty_harian =  $this->db_logistik_pt->get()->row();

            $this->db_logistik_pt->select_sum('QTY_KELUAR', 'qty_keluar');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            $return_saldo_qty_stockawal =  $this->db_logistik_pt->get()->row();

            $sum_saldo_qty_stockawal = $return_saldo_qty_harian->qty_masuk - $return_saldo_qty_stockawal->qty_keluar;

            return $sum_saldo_qty_stockawal;
      }

      public function sum_nilai_masuk_harian($kodebar, $txtperiode)
      {
            $this->db_logistik_pt->select_sum('nilai_masuk', 'nilai_masuk_harian');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            return $this->db_logistik_pt->get()->row();
      }

      public function sum_qty_kodebar_harian($kodebar, $txtperiode)
      {
            $this->db_logistik_pt->select_sum('QTY_MASUK', 'qty_harian');
            $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
            $this->db_logistik_pt->from('stockawal_harian');
            return $this->db_logistik_pt->get()->row();
      }
}

/* End of file M_posting.php */
