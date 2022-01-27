<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Posting
 *
 * @author ali&genza <alii180698@gmail.com> 2021/11
 */

class Posting extends CI_Controller
{

      public function __construct()
      {
            parent::__construct();
            $this->load->model('M_posting');


            $db_pt = check_db_pt();
            $this->db_logistik = $this->load->database('db_logistik', TRUE);
            $this->db_mips_gl = $this->load->database('db_mips_gl_msal', TRUE);
            $this->db_logistik_center = $this->load->database('db_logistik_center', TRUE);
            $this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
            $this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);
            $this->db_conf_caba = $this->load->database('db_conf_caba', TRUE);
            if (!$this->session->userdata('id_user')) {
                  $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
                  $this->session->set_flashdata('pesan', $pemberitahuan);
                  redirect('Login');
            }
            date_default_timezone_set('Asia/Jakarta');
            $this->load->library('form_validation');
      }


      function auth_hitungstok()
      {
            $value = $this->input->post('pw');
            if ($value == "1") {
                  $data = TRUE;
            } else {
                  $data = FALSE;
            }
            echo json_encode($data);
      }

      function hitung_stok()
      {
            $data = "Oke siap";
            $periode = $this->session->userdata('Ymd_periode');
            $txtperiode = $this->session->userdata('ym_periode');
            $this->db_logistik_pt->delete('stockawal', array('txtperiode' => $txtperiode));
            $this->db_logistik_pt->delete('stockawal_harian', array('txtperiode' => $txtperiode));
            $this->db_logistik_pt->delete('stockawal_bulanan_devisi', array('txtperiode' => $txtperiode));
            $this->db_logistik_pt->delete('register_stok', array('txtperiode' => $txtperiode));

            /* ambil data lpn lalu di looping */
            $lpb = $this->M_posting->getItemLpb();
            foreach ($lpb as $d) {
                  $lpb_item['kodebar'] = $d->kodebar;
                  $lpb_item['nabar'] = $d->nabar;
                  $lpb_item['satuan'] = $d->satuan;
                  $lpb_item['grp'] = $d->grp;
                  $lpb_item['refpo'] = $d->refpo;
                  $lpb_item['qty'] = $d->qty;
                  $lpb_item['ttgtxt'] = $d->ttgtxt;
                  $lpb_item['ket'] = $d->ket;
                  $lpb_item['norefppo'] = $d->norefppo;
                  $lpb_item['kode_dev'] = $d->kode_dev;
                  $lpb_item['devisi'] = $d->devisi;
                  $lpb_item['noref'] = $d->noref;
                  $lpb_item['id_user'] = $d->id_user;
                  $jenis_lpb['jenis_lpb'] = $d->jenis_lpb;

                  /* mencari harga PO untuk di input */
                  if ($jenis_lpb['jenis_lpb'] == '1') {
                        $harga_item_po = $this->M_posting->cari_harga_mutasi($d->refpo, $d->kodebar);
                  } else {
                        $result_harga_item_po = $this->M_posting->cari_harga_po($d->refpo, $d->kodebar, $d->norefppo);
                        $harga_item_po = $result_harga_item_po['harga'];
                  }
                  /* end mencari harga PO untuk di input */

                  /* untuk insert ke register_stok */

                  $data_register_stok = [
                        'kodebar' => $d->kodebar,
                        'kodebartxt' => $d->kodebar,
                        'namabar' => $d->nabar,
                        'grup' => $d->grp,
                        'tgl' => $periode,
                        'tgltxt' => $d->txttgl,
                        'potxt' => '-',
                        'ttgtxt' => $d->ttgtxt,
                        'skbtxt' => '-',
                        'adjttgtxt' => '-',
                        'adjskbtxt' => '-',
                        'retttgtxt' => '-',
                        'retskbtxt' => '-',
                        'no_slrh' => $d->ttgtxt,
                        'ket' => $d->ket,
                        'harga' => $harga_item_po,
                        'qty' => $d->qty,
                        'masuk_qty' => $d->qty,
                        'masuk_qty' => $d->qty,
                        'keluar_qty' => '0',
                        'status' => 'LPB',
                        'kodept' => $d->kdpt,
                        'namapt' => $d->pt,
                        'devisi' => $d->devisi,
                        'kode_dev' => $d->kode_dev,
                        'txtperiode' => $txtperiode,
                        'lokasi' => $d->lokasi,
                        'refpo' => '-',
                        'noref' => $d->noref,
                        'id_user' => $d->id_user,
                        'USER' => $d->USER
                  ];
                  $register_stok = $this->M_posting->saveRegisterStok($data_register_stok);
                  /* end insert ke register_stok */

                  /* insert stockawal */
                  $insert_stokawal = $this->insert_stokawal($lpb_item['kodebar'], $lpb_item['nabar'], $lpb_item['satuan'], $lpb_item['grp'], $lpb_item['refpo'], $lpb_item['qty'], $jenis_lpb['jenis_lpb'], $lpb_item['norefppo'], $d->kdpt, $d->pt);
                  /* end insert stokawal */

                  /* insert stokawal harian */
                  $result_insert_stok_awal_harian = $this->insert_stok_awal_harian($lpb_item['kodebar'], $lpb_item['nabar'], $lpb_item['satuan'], $lpb_item['grp'], $lpb_item['refpo'], $lpb_item['qty'], $lpb_item['devisi'], $lpb_item['kode_dev'], $jenis_lpb['jenis_lpb'], $lpb_item['norefppo'], $d->kdpt, $d->pt);
                  /* end insert stokawal harian */

                  /* insert stokawal bulanan devisi */
                  $result_insert_stok_awal_bulanan = $this->insert_stok_awal_bulanan_devisi($lpb_item['kodebar'], $lpb_item['nabar'], $lpb_item['satuan'], $lpb_item['grp'], $lpb_item['qty'], $lpb_item['devisi'], $lpb_item['kode_dev'], $d->kdpt, $d->pt);
                  /* end insert stokawal bulanan devisi */

                  /* update stokawal */
                  $result_update_stok_awal = $this->update_stok_awal($lpb_item['kodebar'], $txtperiode);
                  /* end update stokawal */
            }

            /*  end lpb */

            $dt = [
                  'register_stok' => $register_stok,
                  'in_stokawal' => $insert_stokawal,
                  'in_stokawal_hari' => $result_insert_stok_awal_harian,
                  'in_stokawal_bln' => $result_insert_stok_awal_bulanan,
                  'updt_stokawal' => $result_update_stok_awal,
            ];

            echo json_encode($dt);
      }

      /* insert stockawal */
      function insert_stokawal($kodebar, $nabar, $satuan, $grp, $no_ref_po, $qty, $mutasi, $norefppo, $kdpt, $pt)
      {
            if ($mutasi == '1') {
                  $harga_item_po = $this->M_posting->cari_harga_mutasi($no_ref_po, $kodebar);
                  $saldoakhir_nilai = $harga_item_po * $qty;
            } else {
                  $harga_item_po = $this->M_posting->cari_harga_po($no_ref_po, $kodebar, $norefppo);
                  $saldoakhir_nilai = $harga_item_po['harga'] * $qty;
            }

            $periode = $this->session->userdata('Ymd_periode');
            $txtperiode = $this->session->userdata('ym_periode');

            // $pt = $this->session->userdata('pt');
            // $KODE = $this->session->userdata('kode_pt');
            $kodebar = $kodebar;

            $data_input_stock_awal["pt"] = $pt;
            $data_input_stock_awal["KODE"] = $kdpt;
            $data_input_stock_awal["afd"] = "-";
            $data_input_stock_awal["kodebar"] = $kodebar;
            $data_input_stock_awal["kodebartxt"] = $kodebar;
            $data_input_stock_awal["nabar"] = $nabar;
            $data_input_stock_awal["satuan"] = $satuan;
            $data_input_stock_awal["grp"] = $grp;
            $data_input_stock_awal["saldoawal_qty"] = 0;
            $data_input_stock_awal["saldoawal_nilai"] = 0;
            $data_input_stock_awal["tglinput"] = date("Y-m-d H:i:s");
            $data_input_stock_awal["thn"] = date("Y");
            $data_input_stock_awal["saldoakhir_qty"] = $qty;
            $data_input_stock_awal["saldoakhir_nilai"] = $saldoakhir_nilai;
            $data_input_stock_awal["nilai_masuk"] = 0;
            $data_input_stock_awal["nilai_keluar"] = 0;
            $data_input_stock_awal["QTY_MASUK"] = $qty;
            $data_input_stock_awal["QTY_KELUAR"] = "0";
            $data_input_stock_awal["HARGARAT"] = "0";
            $data_input_stock_awal["periode"] = $periode;
            $data_input_stock_awal["txtperiode"] = $txtperiode;
            $data_input_stock_awal["account"] = "-";
            $data_input_stock_awal["ket_account"] = "-";

            // stok awal nya di cek dulu!
            $cari_kodebar_stock_awal = $this->M_posting->cari_kodebar($kodebar, $txtperiode);

            if ($cari_kodebar_stock_awal == 0) {
                  return $this->db_logistik_pt->insert('stockawal', $data_input_stock_awal);
            }
      }
      /* end insert stock awal */

      /* insert stockawal_harian */
      function insert_stok_awal_harian($kodebar, $nabar, $sat, $grp, $no_ref_po, $qty, $devisi, $kode_dev, $mutasi, $norefppo, $kdpt, $pt)
      {

            if ($mutasi == '1') {
                  $harga_item_po = $this->M_posting->cari_harga_mutasi($no_ref_po, $kodebar);
                  $saldoakhir_nilai = $harga_item_po * $qty;
            } else {
                  $result_harga_item_po = $this->M_posting->cari_harga_po($no_ref_po, $kodebar, $norefppo);
                  $harga_item_po = $result_harga_item_po['harga'];
                  $saldoakhir_nilai = $harga_item_po * $qty;
            }

            $data_insert_stok_harian = [
                  'pt' => $pt,
                  'KODE' => $kdpt,
                  'devisi' => $devisi,
                  'kode_dev' => $kode_dev,
                  'afd' => '-',
                  'kodebar' => $kodebar,
                  'kodebartxt' => $kodebar,
                  'nabar' => $nabar,
                  'satuan' => $sat,
                  'grp' => $grp,
                  'saldoawal_qty' => 0,
                  'saldoawal_nilai' => 0,
                  'tglinput' => date("Y-m-d H:i:s"),
                  'thn' => date("Y"),
                  'saldoakhir_qty' => $qty,
                  'saldoakhir_nilai' => $saldoakhir_nilai,
                  'nilai_masuk' => $saldoakhir_nilai,
                  'QTY_MASUK' => $qty,
                  'periode' => $this->session->userdata('Ymd_periode'),
                  'txtperiode' => $this->session->userdata('ym_periode'),
                  'ket' => '-',
                  'account' => '-',
                  'ket_account' => '-',
                  'tgl_transaksi' => date("Y-m-d H:i:s")
            ];

            $cek_stokawal_harian = $this->M_posting->cek_stokawal_harian($kodebar, $data_insert_stok_harian['periode'], $kode_dev);

            if ($cek_stokawal_harian >= 1) {
                  //update stok awal harian
                  return $this->M_posting->updateStokAwalHarian($kodebar, $data_insert_stok_harian['periode'], $data_insert_stok_harian['txtperiode'], $qty, $harga_item_po, $kode_dev);
            } else {
                  //insert stok awal harian
                  return $this->M_posting->saveStokAwalHarian($data_insert_stok_harian);
            }
      }
      /* end insert stockawal_harian */

      /* insert stokawal bulanan devisi */
      function insert_stok_awal_bulanan_devisi($kodebar, $nabar, $sat, $grp, $qty, $devisi, $kode_dev, $kdpt, $pt)
      {
            $data_insert_stok_bulanan = [
                  'pt' => $kdpt,
                  'KODE' => $pt,
                  'devisi' => $devisi,
                  'kode_dev' => $kode_dev,
                  'afd' => '-',
                  'kodebar' => $kodebar,
                  'kodebartxt' => $kodebar,
                  'nabar' => $nabar,
                  'satuan' => $sat,
                  'grp' => $grp,
                  'saldoawal_qty' => 0,
                  'saldoawal_nilai' => 0,
                  'saldoakhir_qty' => $qty,
                  'tglinput' => date("Y-m-d H:i:s"),
                  'thn' => date("Y"),
                  'QTY_MASUK' => $qty,
                  'periode' => $this->session->userdata('Ymd_periode'),
                  'txtperiode' => $this->session->userdata('ym_periode'),
                  'ket' => '-',
                  'account' => '-',
                  'ket_account' => '-',
                  'tgl_transaksi' => date("Y-m-d H:i:s")
            ];

            $cek_stokawal_bulanan_devisi = $this->M_posting->cek_stok_awal_bulanan_devisi($kodebar, $data_insert_stok_bulanan['txtperiode'], $kode_dev);

            if ($cek_stokawal_bulanan_devisi >= 1) {
                  //update stok awal bulanan devisi
                  return $this->M_posting->updateStokAwalBulananDevisi($kodebar, $data_insert_stok_bulanan['txtperiode'], $qty, $kode_dev);
            } else {
                  //insert stok awal bulanan devisi
                  return $this->M_posting->saveStokAwalBulananDevisi($data_insert_stok_bulanan);
            }
      }
      /* end insert stokawal bulanan devisi */

      /* update stokawal */
      function update_stok_awal($kodebar, $txtperiode)
      {
            //saldoakhir_nilai
            $sum_harga_kodebar = $this->M_posting->sum_harga_kodebar_harian($kodebar, $txtperiode);

            //saldo akhir qty
            $sum_saldo_qty_kodebar = $this->M_posting->sum_saldo_qty_kodebar_harian($kodebar, $txtperiode);

            //nilai_masuk
            $sum_nilai_masuk = $this->M_posting->sum_nilai_masuk_harian($kodebar, $txtperiode);

            //qty masuk
            $sum_qty_kodebar = $this->M_posting->sum_qty_kodebar_harian($kodebar, $txtperiode);

            $data_update = [
                  'saldoakhir_nilai' => $sum_harga_kodebar,

                  'saldoakhir_qty' => $sum_saldo_qty_kodebar,

                  'nilai_masuk' => $sum_nilai_masuk->nilai_masuk_harian,

                  'QTY_MASUK' => $sum_qty_kodebar->qty_harian
            ];

            return $this->M_posting->updateStokAwal($data_update, $kodebar, $txtperiode);
      }
      /* end update stokawal */

      public function hitung_stok_bkb()
      {
            $bkb = $this->M_posting->getdataBkb();

            foreach ($bkb as $d) {

                  $bkb_item['kodebar'] = $d->kodebar;
                  $bkb_item['nabar'] = $d->nabar;
                  $bkb_item['grp'] = $d->grp;
                  $bkb_item['satuan'] = $d->satuan;
                  $bkb_item['tgl'] = $d->tgl;
                  $bkb_item['periode'] = $d->periode;
                  $bkb_item['txttgl'] = $d->txttgl;
                  $bkb_item['skb'] = $d->skb;
                  $bkb_item['ket'] = $d->ket;
                  $bkb_item['NO_REF'] = $d->NO_REF;
                  $bkb_item['txtperiode'] = $d->txtperiode;
                  $bkb_item['qty2'] = $d->qty2;
                  $bkb_item['kode_dev'] = $d->kode_dev;
                  $bkb_item['devisi'] = $d->devisi;
                  $bkb_item['kodept'] = $d->kodept;
                  $bkb_item['pt'] = $d->pt;
                  $bkb_item['id_user'] = $d->id_user;
                  $bkb_item['USER'] = $d->USER;

                  // cari harga bkb
                  $nilai_keluarbrgitem_untuk_register = $this->M_posting->nilai_keluarbrgitem_untuk_register($d->kodebar, $d->NO_REF, $d->txtperiode);

                  $data_register_stok = [
                        'kodebar' => $d->kodebar,
                        'kodebartxt' => $d->kodebar,
                        'namabar' => $d->nabar,
                        'grup' => $d->grp,
                        'tgl' => $d->tgl,
                        'tgltxt' => $d->txttgl,
                        'potxt' => '-',
                        'ttgtxt' => $d->skb,
                        'skbtxt' => '-',
                        'adjttgtxt' => '-',
                        'adjskbtxt' => '-',
                        'retttgtxt' => '-',
                        'retskbtxt' => '-',
                        'no_slrh' => $d->skb,
                        'ket' => $d->ket,
                        'harga' => $nilai_keluarbrgitem_untuk_register,
                        'qty' => $d->qty2,
                        'masuk_qty' => '0',
                        'keluar_qty' => $d->qty2,
                        'status' => 'BKB',
                        'kodept' => $d->kodept,
                        'namapt' => $d->pt,
                        'kode_dev' => $d->kode_dev,
                        'devisi' => $d->devisi,
                        'txtperiode' => $d->txtperiode,
                        'lokasi' => $this->session->userdata('status_lokasi'),
                        'refpo' => '-',
                        'noref' => $d->NO_REF,
                        'id_user' => $d->id_user,
                        'USER' => $d->USER
                  ];

                  $saveregisterstok = $this->M_posting->saveRegisterStok($data_register_stok);

                  //cek apakah sudah ada barang nya atau belum di stockawal
                  $cek_stockawal = $this->M_posting->cek_stockawal_bkb($bkb_item['kodebar'], $bkb_item['txtperiode'], $bkb_item['kode_dev']);
                  if ($cek_stockawal == 1) {
                        // mendapatkan nilai rata2
                        $nilai_keluarbrgitem = $this->M_posting->get_rata2_nilai_bkb($bkb_item['kodebar'], $bkb_item['qty2'], $bkb_item['txtperiode']);
                  } else {
                        //insert stokc awal dan dapatkan rata2 nya
                        $nilai_keluarbrgitem = $this->insert_stokawal_bkb($bkb_item['kodebar'], $bkb_item['nabar'], $bkb_item['satuan'], $bkb_item['grp'], $bkb_item['qty2'], $bkb_item['txtperiode']);
                  }

                  // insert/update stockawal_bulanan_devisi
                  $result_insert_stok_awal_bulanan = $this->insert_stok_awal_bulanan_devisi_bkb($bkb_item['kodebar'], $bkb_item['nabar'], $bkb_item['satuan'], $bkb_item['grp'], $bkb_item['qty2'], $bkb_item['devisi'], $bkb_item['kode_dev']);

                  // insert/update stockawal_harian
                  $result_insert_stok_awal_harian = $this->insert_stok_awal_harian_bkb($bkb_item['kodebar'], $bkb_item['nabar'], $bkb_item['satuan'], $bkb_item['grp'], $bkb_item['qty2'], $bkb_item['devisi'], $bkb_item['kode_dev'], $bkb_item['periode'], $bkb_item['txtperiode']);

                  //update stokawal
                  $result_update_stok_awal = $this->update_stok_awal_bkb($bkb_item['kodebar'], $bkb_item['txtperiode']);
            }


            $dt = [
                  'register_stok' => $saveregisterstok,
                  'in_stokawal' => $nilai_keluarbrgitem,
                  'in_stokawal_hari' => $result_insert_stok_awal_harian,
                  'in_stokawal_bln' => $result_insert_stok_awal_bulanan,
                  'updt_stokawal' => $result_update_stok_awal,
            ];

            echo json_encode($dt);
      }

      function update_stok_awal_bkb($kodebar, $txtperiode)
      {

            //saldoakhir_nilai
            $sum_harga_kodebar = $this->M_posting->sum_harga_kodebar_harian_bkb($kodebar, $txtperiode);

            //saldo akhir qty
            $sum_saldo_qty_kodebar = $this->M_posting->sum_saldo_qty_kodebar_harian_bkb($kodebar, $txtperiode);

            //nilai_masuk
            $sum_nilai_keluar = $this->M_posting->sum_nilai_keluar_harian_bkb($kodebar, $txtperiode);

            //qty masuk
            $sum_qty_kodebar = $this->M_posting->sum_qty_kodebar_harian_bkb($kodebar, $txtperiode);

            $data_update = [
                  'saldoakhir_nilai' => $sum_harga_kodebar,

                  'saldoakhir_qty' => $sum_saldo_qty_kodebar,

                  'nilai_keluar' => $sum_nilai_keluar->nilai_keluar_harian,

                  'QTY_KELUAR' => $sum_qty_kodebar->qty_keluar
            ];

            return $this->M_posting->updateStokAwal($data_update, $kodebar, $txtperiode);
      }

      function insert_stok_awal_harian_bkb($kodebar, $nabar, $satuan, $grup_brg, $qty2, $devisi, $kode_dev, $tgl, $txtperiode)
      {

            $nilai_keluarbrgitem = $this->M_posting->get_rata2_nilai_bkb($kodebar, $qty2, $txtperiode);

            $data_insert_stok_harian = [
                  'pt' => $this->session->userdata('pt'),
                  'KODE' => $this->session->userdata('kode_pt'),
                  'devisi' => $devisi,
                  'kode_dev' => $kode_dev,
                  'afd' => '-',
                  'kodebar' => $kodebar,
                  'kodebartxt' => $kodebar,
                  'nabar' => $nabar,
                  'satuan' => $satuan,
                  'grp' => $grup_brg,
                  'saldoawal_qty' => 0,
                  'saldoawal_nilai' => 0,
                  'tglinput' => date("Y-m-d H:i:s"),
                  'thn' => date("Y"),
                  'saldoakhir_qty' => -$qty2, // sengaja dikasih mines
                  'saldoakhir_nilai' => -$nilai_keluarbrgitem, // sengaja dikasih mines
                  'nilai_keluar' => $nilai_keluarbrgitem,
                  'QTY_KELUAR' => $qty2,
                  'periode' => $tgl,
                  'txtperiode' => $txtperiode,
                  'ket' => '-',
                  'account' => '-',
                  'ket_account' => '-',
                  'tgl_transaksi' => date("Y-m-d H:i:s")
            ];

            $cek_stokawal_harian = $this->M_posting->cek_stokawal_harian($kodebar, $tgl, $kode_dev);

            if ($cek_stokawal_harian >= 1) {
                  //update stok awal harian
                  return $this->M_posting->update_stockawal_harian($kodebar, $qty2, $kode_dev, $tgl, $txtperiode);
            } else {
                  //insert stok awal harian
                  return $this->M_posting->saveStokAwalHarian($data_insert_stok_harian);
            }
      }

      function insert_stok_awal_bulanan_devisi_bkb($kodebar, $nabar, $sat, $grp, $qty2, $devisi, $kode_dev)
      {
            $data_insert_stok_bulanan = [
                  'pt' => $this->session->userdata('pt'),
                  'KODE' => $this->session->userdata('kode_pt'),
                  'devisi' => $devisi,
                  'kode_dev' => $kode_dev,
                  'afd' => '-',
                  'kodebar' => $kodebar,
                  'kodebartxt' => $kodebar,
                  'nabar' => $nabar,
                  'satuan' => $sat,
                  'grp' => $grp,
                  'saldoawal_qty' => 0,
                  'saldoawal_nilai' => 0,
                  'saldoakhir_qty' => -$qty2, // sengaja dikasih mines 
                  'tglinput' => date("Y-m-d H:i:s"),
                  'thn' => date("Y"),
                  'QTY_KELUAR' => $qty2,
                  'periode' => $this->session->userdata('Ymd_periode'),
                  'txtperiode' => $this->session->userdata('ym_periode'),
                  'ket' => '-',
                  'account' => '-',
                  'ket_account' => '-',
                  'tgl_transaksi' => date("Y-m-d H:i:s")
            ];

            $cek_stokawal_bulanan_devisi = $this->M_posting->cek_stok_awal_bulanan_devisi($kodebar, $data_insert_stok_bulanan['txtperiode'], $kode_dev);

            if ($cek_stokawal_bulanan_devisi >= 1) {
                  //update stok awal bulanan devisi
                  return $this->M_posting->update_stockawal_bulanan_devisi($kodebar, $qty2, $data_insert_stok_bulanan['txtperiode'], $kode_dev);
            } else {
                  //insert stok awal bulanan devisi
                  return $this->M_posting->saveStokAwalBulananDevisi($data_insert_stok_bulanan);
            }
      }

      function insert_stokawal_bkb($kodebar, $nabar, $satuan, $grp, $qty2, $txtperiode)
      {

            $nilai_keluarbrgitem = $this->M_posting->get_rata2_nilai_bkb($kodebar, $qty2, $txtperiode);

            $periode = $this->session->userdata('Ymd_periode');
            $txtperiode = $this->session->userdata('ym_periode');

            $pt = $this->session->userdata('pt');
            $KODE = $this->session->userdata('kode_pt');

            $data_input_stock_awal["pt"] = $pt;
            $data_input_stock_awal["KODE"] = $KODE;
            $data_input_stock_awal["afd"] = "-";
            $data_input_stock_awal["kodebar"] = $kodebar;
            $data_input_stock_awal["kodebartxt"] = $kodebar;
            $data_input_stock_awal["nabar"] = $nabar;
            $data_input_stock_awal["satuan"] = $satuan;
            $data_input_stock_awal["grp"] = $grp;
            $data_input_stock_awal["saldoawal_qty"] = 0;
            $data_input_stock_awal["saldoawal_nilai"] = 0;
            $data_input_stock_awal["tglinput"] = date("Y-m-d H:i:s");
            $data_input_stock_awal["thn"] = date("Y");
            $data_input_stock_awal["saldoakhir_qty"] = -$qty2; // sengaja dikasih mines
            $data_input_stock_awal["saldoakhir_nilai"] = -$nilai_keluarbrgitem; // sengaja dikasih mines
            $data_input_stock_awal["nilai_masuk"] = 0;
            $data_input_stock_awal["nilai_keluar"] = $nilai_keluarbrgitem;
            $data_input_stock_awal["QTY_MASUK"] = 0;
            $data_input_stock_awal["QTY_KELUAR"] = $qty2;
            $data_input_stock_awal["HARGARAT"] = 0;
            $data_input_stock_awal["periode"] = $periode;
            $data_input_stock_awal["txtperiode"] = $txtperiode;
            $data_input_stock_awal["account"] = "-";
            $data_input_stock_awal["ket_account"] = "-";

            $this->db_logistik_pt->insert('stockawal', $data_input_stock_awal);

            // mengembalikan nilai harga rata2 * qty
            return $nilai_keluarbrgitem;
      }

      public function transfer_to_gl()
      {
            //var untuk save ke header entry
            $data = $this->M_posting->posting_ke_gl();
            echo json_encode($data);
      }

      function cekPeriodeGL()
      {
            $pt = substr($this->session->userdata('kode_pt_login'), 1);
            $lokasi = $this->session->userdata('kode_dev');

            $data = $this->db_conf_caba->query("SELECT txtperiode FROM tb_setup WHERE id_modul='2' AND id_pt='$pt' AND lokasi='$lokasi'")->row();
            echo json_encode($data);
      }
}

/* End of file Posting.php */
