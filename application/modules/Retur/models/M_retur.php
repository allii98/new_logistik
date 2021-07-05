<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_retur extends CI_Model
{
    // // start server side table
    // var $table = 'stockkeluar'; //nama tabel dari database
    // var $column_order = array(null, 'id', 'NO_REF', 'nobpb', 'no_mutasi', 'bag', 'keperluan', 'tgl', 'USER'); //field yang ada di table user
    // var $column_search = array('id', 'NO_REF', 'nobpb', 'no_mutasi', 'bag', 'keperluan', 'tgl', 'USER'); //field yang diizin untuk pencarian 
    // var $order = array('id' => 'desc'); // default order 

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    // private function _get_datatables_query()
    // {
    //     $role_user = $this->session->userdata('user');
    //     $this->db_logistik_pt->from($this->table);
    //     $this->db_logistik_pt->where('user', $role_user);
    //     // $this->db_logistik_pt->select('id', 'tglpo', 'noreftxt', 'nopotxt', 'nama_supply', 'lokasi_beli');
    //     // $this->db_logistik_pt->from('po');
    //     // $this->db_logistik_pt->order_by('id', 'desc');

    //     $i = 0;

    //     foreach ($this->column_search as $item) // looping awal
    //     {
    //         if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
    //         {

    //             if ($i === 0) // looping awal
    //             {
    //                 $this->db_logistik_pt->group_start();
    //                 $this->db_logistik_pt->like($item, $_POST['search']['value']);
    //             } else {
    //                 $this->db_logistik_pt->or_like($item, $_POST['search']['value']);
    //             }

    //             if (count($this->column_search) - 1 == $i)
    //                 $this->db_logistik_pt->group_end();
    //         }
    //         $i++;
    //     }

    //     if (isset($_POST['order'])) {
    //         $this->db_logistik_pt->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } else if (isset($this->order)) {
    //         $order = $this->order;
    //         $this->db_logistik_pt->order_by(key($order), $order[key($order)]);
    //     }
    // }

    // function get_datatables()
    // {
    //     $this->_get_datatables_query();
    //     if ($_POST['length'] != -1)
    //         $this->db_logistik_pt->limit($_POST['length'], $_POST['start']);
    //     $query = $this->db_logistik_pt->get();
    //     return $query->result();
    // }

    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $query = $this->db_logistik_pt->get();
    //     return $query->num_rows();
    // }

    // public function count_all()
    // {
    //     $this->db_logistik_pt->from($this->table);
    //     return $this->db_logistik_pt->count_all_results();
    // }
    // // end server side table

    // public function get_bpb()
    // {
    //     // $query = "SELECT id_aset,nama_aset,id_kat_non FROM tb_non_aset WHERE id_kat_non = '" . $this->input->post('id') . "'";
    //     $noref = $this->input->get('noref');
    //     $query = "SELECT norefbpb FROM bpb WHERE norefbpb LIKE '%$noref%' AND batal = 0 AND approval = '1' AND status_bkb = '0'";
    //     return $this->db_logistik_pt->query($query)->result_array();
    // }

    // public function get_data_bpb_qr($noref)
    // {
    //     $this->db_logistik_pt->select('bag, alokasi, user, keperluan, bhn_bakar, jn_alat, no_kode, hm_km, lok_kerja, devisi, kode_dev');
    //     $this->db_logistik_pt->where('norefbpb', $noref);
    //     $this->db_logistik_pt->from('bpb');
    //     $data_bpb = $this->db_logistik_pt->get()->row_array();

    //     $this->db_logistik_pt->select('afd, blok, kodebebantxt, nabar, qty, qty_disetujui, satuan, kodesubtxt, ketsub, kodebar, ket, grp, status_item_bkb, approval_item, req_rev_qty_item, periode');
    //     $this->db_logistik_pt->where('norefbpb', $noref);
    //     $this->db_logistik_pt->from('bpbitem');
    //     $data_item_bpb = $this->db_logistik_pt->get()->result_array();

    //     $d_return = [
    //         'data_bpb' => $data_bpb,
    //         'data_item_bpb' => $data_item_bpb
    //     ];
    //     return $d_return;
    // }

    // public function get_tahun_tanam($coa_material)
    // {
    //     $this->db_logistik_pt->select('thn_tanam, tmtbm');
    //     $this->db_logistik_pt->where('coa_material', $coa_material);
    //     $this->db_logistik_pt->from('tahun_tanam');
    //     return $this->db_logistik_pt->get()->row_array();
    // }

    public function get_stok($kodebar, $txtperiode, $kode_dev)
    {
        $this->db_logistik_pt->select('saldoawal_qty, QTY_MASUK, QTY_KELUAR');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_bulanan_devisi');
        $stock_awal = $this->db_logistik_pt->get()->row_array();

        $tambah_saldo = $stock_awal['saldoawal_qty'] + $stock_awal['QTY_MASUK'];
        $stok = $tambah_saldo - $stock_awal['QTY_KELUAR'];
        // $stok = $stock_awal['QTY_MASUK'] - $stock_awal['QTY_KELUAR'];
        return $stok;
    }

    public function savedataretskb($data)
    {
        return $this->db_logistik_pt->insert('retskb', $data);
    }

    public function savedataretskbitem($data)
    {
        return $this->db_logistik_pt->insert('ret_skbitem', $data);
    }

    public function urut_cetak($no_ref_bkb)
    {
        $this->db_logistik_pt->set('cetak', 'cetak+1', FALSE);
        $this->db_logistik_pt->where('NO_REF', $no_ref_bkb);
        $this->db_logistik_pt->update('stockkeluar');

        $this->db_logistik_pt->select('cetak');
        $this->db_logistik_pt->from('stockkeluar');
        $this->db_logistik_pt->where('NO_REF', $no_ref_bkb);
        return $this->db_logistik_pt->get()->row_array();
    }

    public function update_retur($id_retskbitem, $data_item_retur)
    {
        $this->db_logistik_pt->where('id', $id_retskbitem);
        return $this->db_logistik_pt->update('ret_skbitem', $data_item_retur);
    }

    public function cari_harga_bkb($no_ref_bkb, $kodebar)
    {
        $this->db_logistik_pt->select('qty2, nilai_item');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'NO_REF' => $no_ref_bkb]);
        $this->db_logistik_pt->from('keluarbrgitem');
        $data = $this->db_logistik_pt->get()->row_array();

        $harga = $data['nilai_item'] / $data['qty2'];
        return $harga;
    }

    public function cek_stokawal_harian($kodebar, $periode, $kode_dev)
    {
        $this->db_logistik_pt->select('kodebar');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_harian');
        return $this->db_logistik_pt->get()->num_rows();
    }

    public function updateStokAwalHarian($kodebar, $periode, $txtperiode, $qty, $harga, $kode_dev)
    {
        //stok awal harian
        $this->db_logistik_pt->select_sum('QTY_MASUK', 'qtymasuk');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_harian');
        $sum_harian_qty = $this->db_logistik_pt->get()->row();

        $this->db_logistik_pt->select_sum('saldoakhir_qty', 'saldoqty');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_harian');
        $sum_harian_saldo_qty = $this->db_logistik_pt->get()->row();

        $this->db_logistik_pt->select_sum('saldoakhir_nilai', 'nilai_saldo_awal');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_harian');
        $sum_harian_nilai = $this->db_logistik_pt->get()->row();

        $this->db_logistik_pt->select_sum('nilai_masuk', 'nilaimasuk');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_harian');
        $sum_nilai_masuk = $this->db_logistik_pt->get()->row();

        $harga_stok_awal = $harga * $qty;

        //saldoakhir_nilai
        $saldo_awal_harian = $sum_harian_nilai->nilai_saldo_awal + $harga_stok_awal;

        //saldoakhir_qty
        $saldo_total_harian = $sum_harian_saldo_qty->saldoqty + $qty;

        //nilai_masuk
        $saldo_nilai_masuk = $sum_nilai_masuk->nilaimasuk + $harga_stok_awal;

        //QTY_MASUK
        $total_harian = $sum_harian_qty->qtymasuk + $qty;

        $this->db_logistik_pt->set('saldoakhir_nilai', $saldo_awal_harian);
        $this->db_logistik_pt->set('saldoakhir_qty', $saldo_total_harian);
        $this->db_logistik_pt->set('nilai_masuk', $saldo_nilai_masuk);
        $this->db_logistik_pt->set('QTY_MASUK', $total_harian);
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'periode' => $periode, 'kode_dev' => $kode_dev]);
        return $this->db_logistik_pt->update('stockawal_harian');
    }

    public function saveStokAwalHarian($data)
    {
        return $this->db_logistik_pt->insert('stockawal_harian', $data);
    }

    public function cek_stok_awal_bulanan_devisi($kodebar, $txtperiode, $kode_dev)
    {
        $this->db_logistik_pt->select('kodebar');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_bulanan_devisi');
        return $this->db_logistik_pt->get()->num_rows();
    }

    public function updateStokAwalBulananDevisi($kodebar, $txtperiode, $qty, $kode_dev)
    {
        $this->db_logistik_pt->select('QTY_MASUK, saldoakhir_qty');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
        $this->db_logistik_pt->from('stockawal_bulanan_devisi');
        $stok_awal = $this->db_logistik_pt->get()->row();

        $total_qty = $stok_awal->QTY_MASUK + $qty;
        $total_saldo_qty = $stok_awal->saldoakhir_qty + $qty;

        $this->db_logistik_pt->set('QTY_MASUK', $total_qty);
        $this->db_logistik_pt->set('saldoakhir_qty', $total_saldo_qty);
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
        return $this->db_logistik_pt->update('stockawal_bulanan_devisi');
    }

    public function saveStokAwalBulananDevisi($data)
    {
        return $this->db_logistik_pt->insert('stockawal_bulanan_devisi', $data);
    }

    public function sum_saldo_qty_kodebar_harian($kodebar, $txtperiode)
    {
        $this->db_logistik_pt->select_sum('saldoakhir_qty', 'saldo_qty_harian');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal_harian');
        $return_saldo_qty_harian = $this->db_logistik_pt->get()->row();

        $this->db_logistik_pt->select_sum('QTY_KELUAR', 'qty_keluar');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal');
        $return_saldo_qty_stockawal =  $this->db_logistik_pt->get()->row();

        $sum_saldo_qty_stockawal = $return_saldo_qty_harian->saldo_qty_harian - $return_saldo_qty_stockawal->qty_keluar;
        return $sum_saldo_qty_stockawal;
    }

    public function sum_qty_kodebar_harian($kodebar, $txtperiode)
    {
        $this->db_logistik_pt->select_sum('QTY_MASUK', 'qty_harian');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal_harian');
        return $this->db_logistik_pt->get()->row();
    }

    public function sum_harga_kodebar_harian($kodebar, $txtperiode)
    {
        $this->db_logistik_pt->select_sum('saldoakhir_nilai', 'saldo_awal_harian');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal_harian');
        $return_saldo_awal_harian = $this->db_logistik_pt->get()->row();

        $this->db_logistik_pt->select_sum('nilai_keluar', 'nilaikeluar');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal');
        $return_nilaikeluar_stockawal =  $this->db_logistik_pt->get()->row();

        $sum_saldo_nilai_stockawal = $return_saldo_awal_harian->saldo_awal_harian - $return_nilaikeluar_stockawal->nilaikeluar;
        return $sum_saldo_nilai_stockawal;
    }

    public function sum_nilai_masuk_harian($kodebar, $txtperiode)
    {
        $this->db_logistik_pt->select_sum('nilai_masuk', 'nilai_masuk_harian');
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        $this->db_logistik_pt->from('stockawal_harian');
        return $this->db_logistik_pt->get()->row();
    }

    public function updateStokAwal($data_update, $kodebar, $txtperiode)
    {
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
        return $this->db_logistik_pt->update('stockawal', $data_update);
    }

    // public function update_stockawal_bulanan_devisi($kodebar, $qty2, $txtperiode, $kode_dev)
    // {
    //     $this->db_logistik_pt->select('QTY_KELUAR, saldoakhir_qty');
    //     $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
    //     $this->db_logistik_pt->from('stockawal_bulanan_devisi');
    //     $stock_awal = $this->db_logistik_pt->get()->row_array();

    //     $jumlah = $stock_awal['QTY_KELUAR'] + $qty2;

    //     $saldoakhir_qty = $stock_awal['saldoakhir_qty'] - $qty2;

    //     $this->db_logistik_pt->set('QTY_KELUAR', $jumlah);
    //     $this->db_logistik_pt->set('saldoakhir_qty', $saldoakhir_qty);
    //     $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode, 'kode_dev' => $kode_dev]);
    //     return $this->db_logistik_pt->update('stockawal_bulanan_devisi');
    // }

    // public function get_rata2_nilai($kodebar, $qty2, $txtperiode)
    // {
    //     $this->db_logistik_pt->select('saldoakhir_qty, saldoakhir_nilai');
    //     $this->db_logistik_pt->where(['kodebar' => $kodebar, 'txtperiode' => $txtperiode]);
    //     $this->db_logistik_pt->from('stockawal');
    //     $stock_awal = $this->db_logistik_pt->get()->row_array();

    //     $rata2 = $stock_awal['saldoakhir_nilai'] / $stock_awal['saldoakhir_qty'];

    //     $jumlah_nilai =  $qty2 * $rata2;

    //     return $jumlah_nilai;
    // }
}

/* End of file ModelName.php */
