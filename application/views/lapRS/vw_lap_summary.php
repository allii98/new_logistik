<!DOCTYPE html>
<html>

<head>
    <title>Register Pemakaian Stock Material Gudang</title>
    <style type="text/css">
        table {
            /*font-size: 12px;*/
            /*border: 1px solid #dddddd;*/
            border-collapse: collapse;
        }

        body {
            font-family: Verdana;
            font-size: 9px;
            font-style: normal;
            font-variant: normal;
            font-weight: 300;
            line-height: 10px;
        }
    </style>
</head>

<body>
    <table width="100%" border="0">
        <tr>
            <td colspan="2">
                <h2 style="font-size:14px;font-weight:bold;margin-bottom: 0;"><?= $namapt; ?></h2>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h3 style="font-size:11px;font-weight:bold;margin-bottom: 0%; ">Register Pemakaian Stock Material Gudang</h3>
            </td>
        </tr>
        <tr>
            <td colspan="2"><?= $namapt; ?></td>
        </tr>
        <tr>
            <?php
            $Ymd_periode = $periode_str;
            $periode = date("F Y", strtotime($Ymd_periode));
            ?>
            <td width="50%" align="left"><b>Periode : <?= $periode; ?> </b></td>
            <td width="50%" align="right"><small>By MIPS</small></td>
        </tr>
    </table>
    <br>

    <?php
    if (empty($grp_stockawal)) {
    ?>
        <table border="1" width="100%" align="center">
            <thead>
                <th>No</th>
                <th>Account</th>
                <th>Nama Barang</th>
                <th>SAT</th>
                <th>Saldo Awal</th>
                <th>QTY Masuk (LPB)</th>
                <th>QTY Keluar (BKB)</th>
                <th>Saldo Akhir</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">Tidak ada data</td>
                </tr>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Account</th>
                    <th>Nama Barang</th>
                    <th>SAT</th>
                    <th>Saldo Awal</th>
                    <th>QTY Masuk (LPB)</th>
                    <th>QTY Keluar (BKB)</th>
                    <th>Saldo Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grandtotal_saldoawal_qty = "0";
                $grandtotal_QTY_MASUK = "0";
                $grandtotal_QTY_KELUAR = "0";
                $grandtotal_saldoakhir_qty = "0";
                foreach ($grp_stockawal as $list_grp) {
                    $grp = $list_grp->grp;
                ?>
                    <tr>
                        <td colspan="8"><?= $grp;  ?></td>
                    </tr>
                    <?php
                    if ($kd_stock_1 == "Semua") {
                        $query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, QTY_MASUK, QTY_KELUAR, saldoakhir_qty FROM stockawal WHERE KODE = '$pt' AND txtperiode = '$ym_periode' AND grp = '$grp'";
                    } else {
                        $query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, QTY_MASUK, QTY_KELUAR, saldoakhir_qty FROM stockawal WHERE (kodebartxt BETWEEN '$kd_stock_1' AND '$kd_stock_2') AND KODE = '$pt' AND txtperiode = '$ym_periode' AND grp = '$grp'";
                    }
                    $stockawal = $this->db_logistik_pt->query($query_stockawal)->result();
                    $subtotal_saldoawal_qty = "0";
                    $subtotal_QTY_MASUK = "0";
                    $subtotal_QTY_KELUAR = "0";
                    $subtotal_saldoakhir_qty = "0";
                    $no = 1;
                    foreach ($stockawal as $list_stockawal) {
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $list_stockawal->kodebartxt; ?></td>
                            <td><?= $list_stockawal->nabar; ?></td>
                            <td><?= $list_stockawal->satuan; ?></td>
                            <td><?= number_format($list_stockawal->saldoawal_qty, 2); ?></td>
                            <td><?= number_format($list_stockawal->QTY_MASUK, 2); ?></td>
                            <td><?= number_format($list_stockawal->QTY_KELUAR, 2); ?></td>
                            <td><?= number_format($list_stockawal->saldoakhir_qty, 2); ?></td>
                        </tr>
                    <?php
                        $subtotal_saldoawal_qty = round($subtotal_saldoawal_qty, 2) + round($list_stockawal->saldoawal_qty, 2);
                        $subtotal_QTY_MASUK = round($subtotal_QTY_MASUK, 2) + round($list_stockawal->QTY_MASUK, 2);
                        $subtotal_QTY_KELUAR = round($subtotal_QTY_KELUAR, 2) + round($list_stockawal->QTY_KELUAR, 2);
                        $subtotal_saldoakhir_qty = round($subtotal_saldoakhir_qty, 2) + round($list_stockawal->saldoakhir_qty, 2);
                        $no++;
                    }
                    ?>
                    <tr>
                        <td colspan="4" align="right">SUBTOTAL</td>
                        <td><?= number_format($subtotal_saldoawal_qty, 2); ?></td>
                        <td><?= number_format($subtotal_QTY_MASUK, 2); ?></td>
                        <td><?= number_format($subtotal_QTY_KELUAR, 2); ?></td>
                        <td><?= number_format($subtotal_saldoakhir_qty, 2); ?></td>
                    </tr>
                <?php
                    $grandtotal_saldoawal_qty = round($grandtotal_saldoawal_qty, 2) + round($subtotal_saldoawal_qty, 2);
                    $grandtotal_QTY_MASUK = round($grandtotal_QTY_MASUK, 2) + round($subtotal_QTY_MASUK, 2);
                    $grandtotal_QTY_KELUAR = round($grandtotal_QTY_KELUAR, 2) + round($subtotal_QTY_KELUAR, 2);
                    $grandtotal_saldoakhir_qty = round($grandtotal_saldoakhir_qty, 2) + round($subtotal_saldoakhir_qty, 2);
                }
                ?>
                <tr>
                    <td colspan="4" align="right">GRANDTOTAL</td>
                    <td><?= number_format($grandtotal_saldoawal_qty, 2); ?></td>
                    <td><?= number_format($grandtotal_QTY_MASUK, 2); ?></td>
                    <td><?= number_format($grandtotal_QTY_KELUAR, 2); ?></td>
                    <td><?= number_format($grandtotal_saldoakhir_qty, 2); ?></td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
    <br>
    <table width="80%" align="center" border="0">
        <thead>
            <tr>
                <td align="center">Disetujui Oleh,</td>
                <td align="center">Diketahui Oleh,</td>
                <td align="center">Diperiksa Oleh,</td>
                <td align="center">Dibuat Oleh,</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td height="70px" valign="bottom" align="center">(________________________)</td>
                <td height="70px" valign="bottom" align="center">(________________________)</td>
                <td height="70px" valign="bottom" align="center">(________________________)</td>
                <td height="70px" valign="bottom" align="center">(________________________)</td>
            </tr>
            <tr>
                <td align="center">KTU</td>
                <td align="center">GM</td>
                <td align="center">Kasie Gudang</td>
                <td align="center">Krani</td>
            </tr>
        </tbody>
    </table>
</body>

</html>