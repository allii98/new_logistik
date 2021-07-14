<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana;
            font-size: 8px;
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
    <h3 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI</h3>
    <h6 style="z-index: 0; margin-top: 5px;">JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>
    <div style="text-align: center;">
        <h1>MONITORING PO VS LPB</h1>
        <h3>TAHUN : 2020</h3>
    </div>
    <div>
        <i> BY System MIPS - Group By Kode Barang</i>
    </div>
    <br>
    <hr>
    <h3>PT. MULIA SAWIT AGRO LESTARI (ESTATE1)</h3>
    <?php if (empty($po)) { ?>
        <table class="singleborder" width="100%">
            <tr style="background-color: #d6d6c2;">
                <th style="width: 10%;">Kode Barang : Tidak ada data</th>
                <th colspan="4">Nama Barang : Tidak ada data</th>
                <th colspan="2">Sat : Tidak ada data</th>
            </tr>
        </table>
        <table width="100%" rules="rows">
            <thead>
                <tr>
                    <th style="text-align: center;">No. PO</th>
                    <th style="text-align: center;">Tanggal PO</th>
                    <th style="text-align: center;">QTY PO</th>
                    <th style="text-align: center;">No LPB</th>
                    <th style="text-align: center;">Tgl LPB</th>
                    <th style="text-align: center;">QTY LPB</th>
                    <th style="text-align: center;">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">Tidak ada data</td>
                    <td style="text-align: center;">Tidak ada data</td>
                    <td style="text-align: center;">Tidak ada data</td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="7">
                    </td>
                </tr>
                <table class="singleborder" border="1" width="100%">

                    <tr>
                        <td style="text-align: center;" colspan="7">SALDO</td>
                    </tr>
                </table>

            </tbody>
        </table>
        <?php } else {

        if (isset($po)) {
            foreach ($po as $data) { ?>
                <table class="singleborder" width="100%">
                    <tr style="background-color: #d6d6c2;">
                        <th style="width: 10%;">Kode Barang : <?= $data->kodebar ?></th>
                        <th colspan="4">Nama Barang : <?= $data->nabar ?></th>
                        <th colspan="2">Sat : <?= $data->sat ?></th>
                    </tr>
                </table>
                <table width="100%" rules="rows">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No. PO</th>
                            <th style="text-align: center;">Tanggal PO</th>
                            <th style="text-align: center;">QTY PO</th>
                            <th style="text-align: center;">No LPB</th>
                            <th style="text-align: center;">Tgl LPB</th>
                            <th style="text-align: center;">QTY LPB</th>
                            <th style="text-align: center;">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $noref = $data->noref;
                        $query = "SELECT refpo, tglpo, qtypo FROM masukitem WHERE refpo='$noref' ORDER BY id DESC";
                        $isi = $this->db_logistik_pt->query($query)->result();
                        if (empty($isi)) {
                        ?>
                            <tr>
                                <td style="text-align: center;">Tidak ada data</td>
                                <td style="text-align: center;">Tidak ada data</td>
                                <td style="text-align: center;">Tidak ada data</td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" colspan="7">
                                </td>
                            </tr>
                            <table class="singleborder" border="1" width="100%">

                                <tr>
                                    <td style="text-align: center;" colspan="7">SALDO</td>
                                </tr>
                            </table>
                            <?php } else {
                            if (isset($isi)) {
                                foreach ($isi as $d) {
                            ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $d->refpo ?></td>
                                        <td style="text-align: center;"><?= $d->tglpo ?></td>
                                        <td style="text-align: center;"><?= $d->qtypo ?></td>
                                        <td style="text-align: center;"></td>
                                        <td style="text-align: center;"></td>
                                        <td style="text-align: center;"></td>
                                        <td style="text-align: center;"></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;" colspan="7">
                                        </td>
                                    </tr>
                                    <table class="singleborder" border="1" width="100%">

                                        <tr>
                                            <td style="text-align: center;" colspan="7">SALDO</td>
                                        </tr>
                                    </table>
                        <?php }
                            }
                        } ?>
                    </tbody>
                </table>
    <?php }
        }
    } ?>
</body>

</html>