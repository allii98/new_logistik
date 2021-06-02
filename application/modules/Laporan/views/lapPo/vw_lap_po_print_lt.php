<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order (PO)</title>
    <style>
        body {
            font-family: Verdana;
            font-size: 8px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
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
    </style>
</head>

<body>
    <h3 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI <?= $lokasi1; ?></h3>
    <h6 style="z-index: 0; margin-top: -10px;">JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>
    <div style="text-align: center;">
        <h1>REGISTER PURCHASE ORDER LOKAL (PO)</h1>
        <table border="0" class="center">
            <tr>
                <td>PERIODE</td>
                <td>:</td>
                <td>July 2020</td>
            </tr>
            <tr>
                <td>TANGGAL CETAK</td>
                <td>:</td>
                <td><?= date("d/m/Y"); ?></td>
            </tr>
        </table>
        <p align="right" style="margin-top: 0px;margin-bottom: 0px;"><small>By MIPS</small></p>
        <hr>
        <hr>
        <table border="0" class="center" width="100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nomor PO</td>
                    <td>Tanggal PO</td>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Satuan</td>
                    <td style="text-align: right;">Qty</td>
                    <td style="text-align: right;">Harga Satuan</td>
                    <td style="text-align: right;">Total</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total = 0;
                foreach ($item_po as $list_item_po) {
                    $total = $total + (($list_item_po->harga) * $list_item_po->qty);
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $list_item_po->noref; ?></td>
                        <td><?= date_format((date_create($list_item_po->tglpo)), "d/m/Y"); ?></td>
                        <td><?= $list_item_po->kodebar; ?></td>
                        <td><?= $list_item_po->nabar; ?></td>
                        <td><?= $list_item_po->sat; ?></td>
                        <td style="text-align: right;"><?= number_format($list_item_po->qty, 2); ?></td>
                        <td style="text-align: right;">Rp <?= number_format($list_item_po->harga, 2); ?></td>
                        <td style="text-align: right;">Rp <?= number_format((($list_item_po->harga) * $list_item_po->qty), 2); ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <br>
        <i>printed by MIPS System <?= date('d-m-Y H:i:s'); ?></i>
        <hr>
    </div>
    <h4>Total Seluruh : Rp <?= number_format($total, 2); ?></h4>
</body>

</html>