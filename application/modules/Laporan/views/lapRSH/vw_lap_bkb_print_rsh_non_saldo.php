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
        echo '<h2 style="margin-bottom: 0;">' . $kode_stock[0]->pt . '</h2>';
    } else {
        if (empty($kode_stock[0]->devisi)) {
            echo '<h2 style="margin-bottom: 0;">Tidak ada stok barang di divisi tersebut!</h2>';
        } else {
            echo '<h2 style="margin-bottom: 0;">' . $kode_stock[0]->devisi . '</h2>';
        }
    }
    ?>
    <div style="text-align: center;">
        <h3>Register Harian Stock Material Gudang (Non Saldo)</h3>
    </div>
    <br>
    <table border="0" width="100%">
        <thead>
            <tr>
                <td style="text-align: left;"><b> PERIODE : <?= $periode; ?> </b></td>
                <td style="text-align: right;"><i>By System MIPS</i></td>
            </tr>
        </thead>
    </table>
    <br>
    <table class="singleborder" border="1" width="100%">
        <thead style="text-align: center;">
            <tr>
                <td width="3%">No</td>
                <td width="10%">Tgl</td>
                <td width="17%">Kode Barang</td>
                <td width="50%">Nama Barang</td>
                <td>Qty Masuk</td>
                <td>Qty Keluar</td>
            </tr>
        </thead>
        <tbody>
            <?php
            //distinct tnggal
            $sql = "SELECT DISTINCT tgl FROM masukitem WHERE tgl BETWEEN '$p1' AND '$p2' UNION SELECT DISTINCT tgl from keluarbrgitem WHERE tgl BETWEEN '$p1' AND '$p2'";
            $result_sql = $this->db_logistik_pt->query($sql)->result();
            foreach ($result_sql as $rs) {
                $kode_dev2 = (int)$kode_dev;

                if ($kode_dev == 'Semua') {
                    //for where kodebar
                    if ($kodebar != '') {
                        $where_kodebar = "AND kodebar = '$kodebar'";
                    } else {
                        $where_kodebar = "";
                    }
                    //for where grup
                    if ($grup != 'Semua') {
                        $where_grup = "AND grp LIKE '%$grup%'";
                    } else {
                        $where_grup = "";
                    }
                    $where_nya = "WHERE tgl = '$rs->tgl' AND batal='0' $where_kodebar $where_grup";

                    $q_sum = "SELECT * FROM (SELECT tgl AS tgl_lpb, kodebar AS kodebar_lpb, nabar AS nabar_lpb, sum(qty) AS qty_lpb FROM masukitem $where_nya GROUP BY kodebar) AS LPB LEFT JOIN (SELECT tgl, kodebar AS kodebar_bkb, nabar AS nabar_bkb, sum(qty) AS qty_bkb FROM keluarbrgitem $where_nya GROUP BY kodebar) AS BKB ON LPB.kodebar_lpb = BKB.kodebar_bkb UNION SELECT * FROM (SELECT tgl AS tgl_lpb, kodebar AS kodebar_lpb, nabar AS nabar_lpb, sum(qty) AS qty_lpb FROM masukitem $where_nya GROUP BY kodebar) AS LPB RIGHT JOIN (SELECT tgl, kodebar AS kodebar_bkb, nabar AS nabar_bkb, sum(qty) AS qty_bkb FROM keluarbrgitem $where_nya GROUP BY kodebar) AS BKB ON LPB.kodebar_lpb = BKB.kodebar_bkb";
                } else {
                    //for where kodebar
                    if ($kodebar != '') {
                        $where_kodebar = "AND kodebar = '$kodebar'";
                    } else {
                        $where_kodebar = "";
                    }
                    //for where grup
                    if ($grup != 'Semua') {
                        $where_grup = "AND grp LIKE '%$grup%'";
                    } else {
                        $where_grup = "";
                    }
                    $where_nya = "WHERE tgl = '$rs->tgl' AND batal='0' AND kode_dev IN('$kode_dev','$kode_dev2') $where_kodebar $where_grup";

                    $q_sum = "SELECT * FROM (SELECT tgl AS tgl_lpb, kodebar AS kodebar_lpb, nabar AS nabar_lpb, sum(qty) AS qty_lpb FROM masukitem $where_nya GROUP BY kodebar) AS LPB LEFT JOIN (SELECT tgl, kodebar AS kodebar_bkb, nabar AS nabar_bkb, sum(qty) AS qty_bkb FROM keluarbrgitem $where_nya GROUP BY kodebar) AS BKB ON LPB.kodebar_lpb = BKB.kodebar_bkb UNION SELECT * FROM (SELECT tgl AS tgl_lpb, kodebar AS kodebar_lpb, nabar AS nabar_lpb, sum(qty) AS qty_lpb FROM masukitem $where_nya GROUP BY kodebar) AS LPB RIGHT JOIN (SELECT tgl, kodebar AS kodebar_bkb, nabar AS nabar_bkb, sum(qty) AS qty_bkb FROM keluarbrgitem $where_nya GROUP BY kodebar) AS BKB ON LPB.kodebar_lpb = BKB.kodebar_bkb";
                }
                $jum_lpb = 0;
                $jum_bkb = 0;
                $no = 1;
                $q_sum = $this->db_logistik_pt->query($q_sum)->result();
                foreach ($q_sum as $qs) {
                    $jum_lpb += $qs->qty_lpb;
                    $jum_bkb += $qs->qty_bkb;
                    if ($qs->kodebar_bkb == NULL) {
            ?>
                        <tr>
                            <td style="text-align: center;"><?= $no++; ?></td>
                            <td><?= date_format(date_create($rs->tgl), 'd/m/Y'); ?></td>
                            <td><?= $qs->kodebar_lpb ?></td>
                            <td><?= $qs->nabar_lpb ?></td>
                            <td style="text-align: right;"><?= number_format($qs->qty_lpb, 2); ?></td>
                            <td style="text-align: right;"><?= number_format($qs->qty_bkb, 2); ?></td>
                        </tr>
                    <?php
                    } else {
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $no++; ?></td>
                            <td><?= date_format(date_create($rs->tgl), 'd/m/Y'); ?></td>
                            <td><?= $qs->kodebar_bkb ?></td>
                            <td><?= $qs->nabar_bkb ?></td>
                            <td style="text-align: right;"><?= number_format($qs->qty_lpb, 2); ?></td>
                            <td style="text-align: right;"><?= number_format($qs->qty_bkb, 2); ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                <?php }
                if ($no == 1) {
                } else {
                ?>
                    <tr style="background-color: lightgray;">
                        <td style="text-align: center;" colspan="4"><b>JUMLAH</b></td>
                        <td style="text-align: right;"><b><?= number_format($jum_lpb, 2); ?></b></td>
                        <td style="text-align: right;"><b><?= number_format($jum_bkb, 2); ?></b></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <i>printed by MIPS System <?= date('d-m-Y H:i:s'); ?></i>
</body>

</html>