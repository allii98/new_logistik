<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
            body {
                  font-family: Verdana;
                  font-size: 9px;
                  font-style: normal;
                  font-variant: normal;
                  font-weight: 300;
                  line-height: 10px;
            }

            .center {
                  margin-left: auto;
                  margin-right: auto;
            }

            hr {
                  margin-top: 0px;
                  margin-bottom: 3px;
            }

            td {
                  vertical-align: text-top;
            }

            .singleborder {
                  border-collapse: collapse;
                  border: 1px solid black;
            }
      </style>
</head>

<body>
      <?php
      if ($kode_dev == 'Semua') {
            echo '<h2 style="font-size:14px;font-weight:bold;margin-bottom: 0;">' . $this->session->userdata('nama_pt') . '</h2>';
      } else {
            if (empty($kode_stock[0]->devisi)) {
                  echo '<h2 style="margin-bottom: 0;">Tidak ada stok barang di divisi tersebut!</h2>';
            } else {
                  echo '<h2 style="font-size:14px;font-weight:bold;margin-bottom: 0;">' . $kode_stock[0]->devisi . '</h2>';
            }
      }

      if ($alamat != '01') {
            echo '';
      } else {
            echo '<h6 style="z-index: 0; margin-top: 5px;">JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>';
      }
      ?>
      <div style="text-align: center;">
            <h3 style="font-size:11px;font-weight:bold;margin-bottom: 0%; ">Register Summary Harian Material Gudang</h3>
      </div>
      <?php if (empty($kode_stock)) { ?>
            <table border="0" width="100%">
                  <thead>
                        <tr>
                              <td style="text-align: left;"><b> PERIODE : <?= $periode; ?> </b></td>
                              <td style="text-align: right;"><i>By System MIPS</i></td>
                        </tr>
                        <tr>
                              <td style="text-align: left;"><b> Tidak ada data</b></td>
                              <td style="text-align: right;"><b>Saldo Sebelum Periode : 0.00</b></td>
                        </tr>
                  </thead>
            </table>
            <table width="100%" class="singleborder" border="1">
                  <thead style="text-align: center;">
                        <tr>
                              <td>No</td>
                              <td>Tgl</td>
                              <td>Qty Masuk</td>
                              <td>Qty Keluar</td>
                              <td>Saldo</td>
                              <td>Keterangan</td>
                        </tr>
                  </thead>
                  <tbody>

                        <tr>
                              <td style="text-align: center;">1.</td>
                              <td style="text-align: center;" colspan="4"><b>Tidak ada data</b></td>
                              <td></td>
                        </tr>


                        <tr>
                              <td style="text-align: center;" colspan="2"><b>GRAND TOTAL</b></td>
                              <td style="text-align: right;"><b><?= number_format(0, 2); ?></b></td>
                              <td style="text-align: right;"><b><?= number_format(0, 2); ?></b></td>
                              <td style="text-align: right;"><b><?= number_format(0, 2); ?></b></td>
                              <td></td>
                        </tr>
                        <tr>
                              <td style="text-align: center;" colspan="6"><b>Saldo : <?= number_format(0, 2); ?></b></td>
                        </tr>

                  </tbody>
            </table>
            <?php } else {
            foreach ($kode_stock as $ks) {
                  $kode_dev2 = (int)$kode_dev;
                  if ($kode_dev == 'Semua') {
                        $q_saldo = "SELECT saldoakhir_qty, satuan FROM stockawal_bulanan_devisi WHERE kodebar = '$ks->kodebar' AND txtperiode < '$txtperiode'";
                  } else {
                        $q_saldo = "SELECT saldoakhir_qty, satuan FROM stockawal_bulanan_devisi WHERE kodebar = '$ks->kodebar' AND txtperiode < '$txtperiode' AND kode_dev IN('$kode_dev','$kode_dev2')";
                  }
                  $saldo_r = $this->db_logistik_pt->query($q_saldo)->num_rows();
                  if ($saldo_r >= 1) {
                        $saldo = $this->db_logistik_pt->query($q_saldo)->row_array();
                  } else {
                        $saldo = [
                              'saldoakhir_qty' => '0'
                        ];
                  }

                  //mencari rata2 di stockawal harian
                  $sql_rata2 = "SELECT SUM(saldoakhir_nilai) AS saldoakhir_nilai, SUM(saldoakhir_qty) AS saldoakhir_qty FROM stockawal_harian WHERE txtperiode < '$txtperiode' AND kodebar = '$ks->kodebar'";

                  $stockawal_harian = $this->db_logistik_pt->query($sql_rata2)->num_rows();
                  if ($stockawal_harian >= 1) {
                        $data_stockawal_harian = $this->db_logistik_pt->query($sql_rata2)->row_array();
                  } else {
                        $data_stockawal_harian = [
                              'saldoakhir_nilai' => 0,
                              'saldoakhir_qty' => 0
                        ];
                  }

                  if ($data_stockawal_harian['saldoakhir_nilai'] == NULL || $data_stockawal_harian['saldoakhir_qty'] == NULL) {
                        $rata2_harga_head = 0;
                  } else {
                        $rata2_harga_head = $data_stockawal_harian['saldoakhir_nilai'] / $data_stockawal_harian['saldoakhir_qty'];
                  }
            ?>
                  <table border="0" width="100%">
                        <thead>
                              <tr>
                                    <td style="text-align: left;"><b> PERIODE : <?= $periode; ?> </b></td>
                                    <td style="text-align: right;"><i>By System MIPS</i></td>
                              </tr>
                              <tr>
                                    <td style="text-align: left;"><b> <?= $ks->kodebar; ?> &nbsp; <?= $ks->nabar; ?></b></td>
                                    <td style="text-align: right;">
                                          <b>
                                                Saldo Sebelum Periode (QTY) : <?= number_format($saldo['saldoakhir_qty'], 2) . ' ' . $ks->satuan; ?>
                                          </b>
                                          <b>
                                                | (Rp) : <?= number_format($saldo['saldoakhir_qty'] * $rata2_harga_head, 2); ?>
                                          </b>
                                    </td>
                              </tr>
                        </thead>
                  </table>
                  <table width="100%" class="singleborder" border="1">
                        <thead style="text-align: center;">
                              <tr>
                                    <td rowspan="2" style="text-align: center; width: 2%;">No</td>
                                    <td rowspan="2" style="text-align: center; width: 5%;">Tgl</td>
                                    <td colspan="2" style="text-align: center; width: 26%;">LPB</td>
                                    <td colspan="2" style="text-align: center; width: 26%;">BKB</td>
                                    <td rowspan="2" style="text-align: center; width: 10%;">Harga Rata-rata</td>
                                    <td colspan="2" style="text-align: center; width: 26%;">Saldo</td>
                                    <td rowspan="2" style="text-align: center; width: 5%;">Keterangan</td>
                              </tr>
                              <tr>
                                    <th style="width: 7.5%;">&emsp;Qty</th>
                                    <th style="width: 7.5%;">&emsp;Rupiah</th>
                                    <th style="width: 7.5%;">&emsp;Qty</th>
                                    <th style="width: 7.5%;">&emsp;Rupiah</th>
                                    <th style="width: 7.5%;">&emsp;Qty</th>
                                    <th style="width: 7.5%;">&emsp;Rupiah</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              if ($kode_dev == 'Semua') {
                                    $q_sum = "SELECT SUM(saldoakhir_nilai) AS saldoakhir_nilai, SUM(saldoakhir_qty) AS saldoakhir_qty, QTY_MASUK, QTY_KELUAR, periode, ket FROM stockawal_harian WHERE periode BETWEEN '$p1' AND '$p2' AND kodebar='$ks->kodebar' GROUP BY periode ORDER BY periode ASC";
                              } else {
                                    $q_sum = "SELECT ket, tgl, status, SUM(masuk_qty) AS masuk_qty, SUM(keluar_qty) AS keluar_qty FROM register_stok WHERE tgltxt BETWEEN '$p1_frmt' AND '$p2_frmt' AND tgltxt = $rs->tgltxt AND kodebar='$ks->kodebar' AND kode_dev IN('$kode_dev','$kode_dev2')";
                              }
                              $q_sum = $this->db_logistik_pt->query($q_sum)->result();

                              $no = 1;
                              $gt_lpb = 0;
                              $gt_lpb_qty = 0;
                              $gt_bkb = 0;
                              $gt_bkb_qty = 0;
                              $s_a = $saldo['saldoakhir_qty'];
                              $s_a_qty = $saldo['saldoakhir_qty'];
                              foreach ($q_sum as $qs) {
                                    if ($qs->saldoakhir_nilai == NULL || $qs->saldoakhir_qty == NULL) {
                                          $rata2_harga = 0;
                                    } else {
                                          $rata2_harga = $qs->saldoakhir_nilai / $qs->saldoakhir_qty;
                                    }

                                    $s_a = $s_a + ($qs->QTY_MASUK * $rata2_harga) - ($qs->QTY_KELUAR * $rata2_harga);
                                    $s_a_qty = $s_a_qty + $qs->QTY_MASUK - $qs->QTY_KELUAR;
                                    $gt_lpb += $qs->QTY_MASUK * $rata2_harga;
                                    $gt_lpb_qty += $qs->QTY_MASUK;
                                    $gt_bkb += $qs->QTY_KELUAR * $rata2_harga;
                                    $gt_bkb_qty += $qs->QTY_KELUAR;

                                    if ($qs->QTY_MASUK == 0 and $qs->QTY_KELUAR == 0) {
                                    } else {
                              ?>
                                          <tr>
                                                <td style="text-align: center;"><?= $no++; ?></td>
                                                <td style="text-align: center;"><?= date_format(date_create($qs->periode), 'd/m/Y'); ?></td>
                                                <td style="text-align: right;"><?= number_format($qs->QTY_MASUK, 2); ?></td>
                                                <td style="text-align: right;"><?= number_format($qs->QTY_MASUK * $rata2_harga, 2); ?></td>
                                                <td style="text-align: right;"><?= number_format($qs->QTY_KELUAR, 2); ?></td>
                                                <td style="text-align: right;"><?= number_format($qs->QTY_KELUAR * $rata2_harga, 2); ?></td>
                                                <td style="text-align: right;"><?= number_format($rata2_harga, 2); ?></td>
                                                <td style="text-align: right;"><?= number_format(($s_a_qty), 2); ?></td>
                                                <td style="text-align: right;"><?= number_format(($s_a * $rata2_harga), 2); ?></td>
                                                <td style="text-align: left;"><?= $qs->ket; ?></td>
                                          </tr>
                                    <?php } ?>
                              <?php } ?>
                              <tr>
                                    <td style="text-align: center;" colspan="2"><b>GRAND TOTAL</b></td>
                                    <td style="text-align: right;"><b><?= number_format($gt_lpb_qty, 2); ?></b></td>
                                    <td style="text-align: right;"><b><?= number_format($gt_lpb, 2); ?></b></td>
                                    <td style="text-align: right;"><b><?= number_format($gt_bkb_qty, 2); ?></b></td>
                                    <td style="text-align: right;"><b><?= number_format($gt_bkb, 2); ?></b></td>
                                    <td colspan="4"></td>
                              </tr>
                              <tr>
                                    <?php
                                    if ($rata2_harga_head == 0) {
                                          $saldo_akhirnya = $s_a;
                                    } else {
                                          $saldo_akhirnya = $s_a * $rata2_harga_head;
                                    }

                                    echo '<td style="text-align: center;" colspan="10"><b>SALDO AKHIR | QTY : ' . number_format($s_a_qty, 2) . '&emsp;&emsp; Nilai(RP) :' . number_format($saldo_akhirnya, 2) . '</b></td>';
                                    ?>
                              </tr>
                        </tbody>
                  </table>
      <?php }
      } ?>
      <i>printed by MIPS System <?= date('d-m-Y H:i:s'); ?></i>
      <div style="text-align: right; ">
            AirLangga Est, 19 August 2020
      </div>
      <table border="0" width="100%">
            <thead>
                  <tr>
                        <td style="text-align: center;">Disetujui Oleh, <br><br><br><br><br>(___________________) <br><br>KTU</td>
                        <td style="text-align: center;">Diketahui Oleh, <br><br><br><br><br>(___________________) <br><br>G. Manager</td>
                        <td style="text-align: center;">Diperiksa Oleh, <br><br><br><br><br>(___________________) <br><br>Kasie Gudang</td>
                        <td style="text-align: center;">Dibuat Oleh, <br><br><br><br><br>(___________________) <br> <br>Krani</td>
                  </tr>
            </thead>
      </table>
</body>

</html>