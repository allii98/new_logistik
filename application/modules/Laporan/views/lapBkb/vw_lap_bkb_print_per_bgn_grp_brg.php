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

        .singleborder {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI</h2>
    <h5 style="margin-top: 5px;"> JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, Kebayoran Baru, Jakarta Selatan, DKI Jakarta Raya - 12140</h5>
    <div style="text-align: center;">
        <h3><u>REGISTER KELUAR BARANG (BKB)</u></h3>
    </div>
    <br>

    <?php
    foreach ($bt as $b) { ?>
        <table border="0" width="100%">
            <thead>
                <tr>
                    <td style="text-align: left;"><b> PERIODE : <?= $periode; ?> </b><br>
                        <b>Devisi : <?= $dev; ?></b><br>
                        <?php if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') { ?>
                            <b>AFD : <?= $b->afd; ?></b>
                        <?php } else { ?>
                            <b>Bagian : <?= $bagian; ?></b>
                        <?php } ?>
                    </td>
                    <td style="text-align: right;"><br><br><i>By System MIPS</i></td>
                </tr>
            </thead>
        </table>
        <br>
        <table width="100%" border="1" class="singleborder">
            <thead style="text-align: center;">
                <tr>
                    <td style="text-align: center; font-weight: bold; width:5%">No</td>
                    <td style="text-align: center; font-weight: bold; width:10%">Tgl</td>
                    <td style="text-align: center; font-weight: bold; width:10%">No. BKB</td>
                    <td style="text-align: center; font-weight: bold; width:5%">Sat</td>
                    <td style="text-align: center; font-weight: bold; width:5%">Qty</td>
                    <td style="text-align: center; font-weight: bold; width:15%">Kode Beban</td>
                    <td style="text-align: center; font-weight: bold; width:25%">Nama Beban</td>
                    <td style="text-align: center; font-weight: bold; width:25%">Keterangan</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') {
                    $query = "SELECT DISTINCT a.kodebar, a.nabar, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.kode_dev = '$devisi' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian' AND a.afd ='$b->afd' ORDER BY a.nabar ASC";
                } else {
                    $query = "SELECT DISTINCT a.kodebar, a.nabar, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.kode_dev = '$devisi' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = 'TEKNIK' ORDER BY a.nabar ASC";
                }
                $no = 1;
                $btn = $this->db_logistik_pt->query($query)->result();
                foreach ($btn as $bn) { ?>
                    <tr>
                        <td colspan="2"><?= $bn->kodebar; ?></td>
                        <td colspan="6"><?= $bn->nabar; ?></td>
                    </tr>
                    <?php
                    if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') {
                        $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.kodebar = '$bn->kodebar' AND a.NO_REF = b.NO_REF AND a.kode_dev = '$dev' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian' AND a.afd ='$b->afd'";
                    } else {
                        $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.kodebar = '102505760000394' AND a.NO_REF = b.NO_REF AND a.kode_dev = '06' AND a.periode BETWEEN '2021-07-25' AND '2021-08-26' AND a.batal = '0' AND b.bag = 'TEKNIK'";
                    }
                    $bpr = $this->db_logistik_pt->query($query)->result();
                    $total = 0;
                    foreach ($bpr as $bp) {
                        $total += $bp->qty;
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $no++; ?></td>
                            <td style="text-align: center;"><?= date_format(date_create($bp->tgl), 'd/m/Y'); ?></td>
                            <td style="text-align: center;"><?= $bp->skb; ?></td>
                            <td style="text-align: center;"><?= $bp->satuan; ?></td>
                            <td style="text-align: right;"><?= number_format($bp->qty, 2); ?></td>
                            <td style="text-align: center;"><?= $bp->kodesub; ?></td>
                            <td style="text-align: left;"><?= $bp->ketsub; ?></td>
                            <td style="text-align: left;"><?= $bp->ket; ?></td>
                        </tr>
                    <?php }  ?>
                    <tr>
                        <td colspan="4" style="text-align: right; padding-right: 10px;">Total :</td>
                        <td colspan="4"> <?= number_format($total, 2); ?></td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
        <br>
    <?php }
    ?>
</body>

</html>