<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bkb extends CI_Model
{
    // start server side table
    var $table = 'stockkeluar'; //nama tabel dari database
    var $column_order = array(null, 'id', 'NO_REF', 'nobpb', 'no_mutasi', 'bag', 'keperluan', 'tgl', 'USER'); //field yang ada di table user
    var $column_search = array('id', 'NO_REF', 'nobpb', 'no_mutasi', 'bag', 'keperluan', 'tgl', 'USER'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $role_user = $this->session->userdata('user');
        $this->db_logistik_pt->from($this->table);
        $this->db_logistik_pt->where('user', $role_user);
        // $this->db_logistik_pt->select('id', 'tglpo', 'noreftxt', 'nopotxt', 'nama_supply', 'lokasi_beli');
        // $this->db_logistik_pt->from('po');
        // $this->db_logistik_pt->order_by('id', 'desc');

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
    // end server side table

    // public function get_bpb()
    // {
    //     // $query = "SELECT id_aset,nama_aset,id_kat_non FROM tb_non_aset WHERE id_kat_non = '" . $this->input->post('id') . "'";
    //     $noref = $this->input->get('noref');
    //     $query = "SELECT norefbpb FROM bpb WHERE norefbpb LIKE '%$noref%' AND batal = 0 AND approval = '1' AND status_bkb = '0'";
    //     return $this->db_logistik_pt->query($query)->result_array();
    // }

    public function get_data_bpb_qr($noref)
    {
        $this->db_logistik_pt->select('bag, alokasi, user, keperluan, bhn_bakar, jn_alat, no_kode, hm_km, lok_kerja');
        $this->db_logistik_pt->where('norefbpb', $noref);
        $this->db_logistik_pt->from('bpb');
        $data_bpb = $this->db_logistik_pt->get()->row_array();

        $this->db_logistik_pt->select('afd, blok, kodebebantxt, nabar, qty, qty_disetujui, satuan, kodesubtxt, ketsub, kodebar, ket, grp, status_item_bkb, approval_item, req_rev_qty_item');
        $this->db_logistik_pt->where('norefbpb', $noref);
        $this->db_logistik_pt->from('bpbitem');
        $data_item_bpb = $this->db_logistik_pt->get()->result_array();

        $d_return = [
            'data_bpb' => $data_bpb,
            'data_item_bpb' => $data_item_bpb
        ];
        return $d_return;
    }

    public function get_tahun_tanam($coa_material)
    {
        $this->db_logistik_pt->select('thn_tanam, tmtbm');
        $this->db_logistik_pt->where('coa_material', $coa_material);
        $this->db_logistik_pt->from('tahun_tanam');
        return $this->db_logistik_pt->get()->row_array();
    }

    public function get_stok($kodebar)
    {
        $this->db_logistik_pt->select('QTY_MASUK, QTY_KELUAR');
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->from('stockawal');
        $stock_awal = $this->db_logistik_pt->get()->row_array();

        $stok = $stock_awal['QTY_MASUK'] - $stock_awal['QTY_KELUAR'];
        return $stok;
    }

    public function savedatastockkeluar($data)
    {
        return $this->db_logistik_pt->insert('stockkeluar', $data);
    }

    public function savedatakeluarbrgitem($data, $kodebar, $norefbpb, $no_ref_bkb)
    {
        $this->db_logistik_pt->insert('keluarbrgitem', $data);

        //ubah status bpbitem menjadi 1 where kodebar AND NOREF
        $this->db_logistik_pt->set('status_item_bkb', 1);
        $this->db_logistik_pt->where(['kodebar' => $kodebar, 'norefbpb' => $norefbpb]);
        $this->db_logistik_pt->update('bpbitem');

        //$count_bpbitem = count bpbitem where kodebar AND noref;
        $this->db_logistik_pt->select('norefbpb');
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->from('bpbitem');
        $count_bpbitem = $this->db_logistik_pt->count_all_results();

        //$count_keluarbrgitem = count keluarbrgitem where kodebar AND noref;
        $this->db_logistik_pt->select('NO_REF');
        $this->db_logistik_pt->where('NO_REF', $no_ref_bkb);
        $this->db_logistik_pt->from('keluarbrgitem');
        $count_keluarbrgitem = $this->db_logistik_pt->count_all_results();

        if ($count_bpbitem == $count_keluarbrgitem) {
            //  update status bpb menjadi 1 where noref
            $this->db_logistik_pt->set('status_bkb', 1);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            return $this->db_logistik_pt->update('bpb');
        } else {
            return FALSE;
        }
    }

    public function update_qtykeluar($kodebar, $qty2)
    {
        $this->db_logistik_pt->select('QTY_KELUAR');
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->from('stockawal');
        $stock_awal = $this->db_logistik_pt->get()->row_array();

        $jumlah = $stock_awal['QTY_KELUAR'] + $qty2;

        $this->db_logistik_pt->set('QTY_KELUAR', $jumlah);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        return $this->db_logistik_pt->update('stockawal');
    }

    public function update_saldoakhir_nilai($kodebar)
    {
        $this->db_logistik_pt->select('QTY_MASUK, QTY_KELUAR, nilai_masuk');
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->from('stockawal');
        $qty = $this->db_logistik_pt->get()->row_array();

        $subtotal = $qty['QTY_MASUK'] - $qty['QTY_KELUAR'];
        $saldo_akhir_nilai = $subtotal * $qty['nilai_masuk'];

        $this->db_logistik_pt->set('saldoakhir_nilai', $saldo_akhir_nilai);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        return $this->db_logistik_pt->update('stockawal');
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
}

/* End of file ModelName.php */
