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
            margin-top: 0px #ccc;
            margin-bottom: 3px;
        }

        td {
            vertical-align: text-top;
        }
    </style>
</head>

<body>
    <h3 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI</h3>
    <h6 style="z-index: 0; margin-top: 5px;">JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>
    <div style="text-align: center;">
        <table border="0" class="center" width="100%">
            <tr>
                <td></td>
                <td>
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAPORAN SPP vs PO</h1>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>PT MULIA SAWIT AGRO LESTARI (<?= $lokasi; ?>)</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERIODE : <?= $periode; ?></td>
                <td>By MIPS</td>
            </tr>
        </table>
        <hr>
        <hr>
        <table width="100%">
            <thead>
                <tr style="background-color: #d6d6c2;">
                    <th>Nomor SPP</th>
                    <th>No. Ref SPP</th>
                    <th colspan="2">Tgl SPP</th>
                    <th colspan="3">Alokasi</th>
                    <th colspan="9">User Input</th>
                </tr>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Qty Diminta</th>
                    <th>Tgl PO</th>
                    <th>Durasi SPP</th>
                    <th>No PO</th>
                    <th>Supplier</th>
                    <th>Qty PO</th>
                    <th>Saldo SPP</th>
                    <th>Harga Satuan PO</th>
                    <th>Total Harga PO</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ppo as $list_ppo) {
                ?>
                    <!-- untuk spp -->
                    <tr style="background-color: #d6d6c2;">
                        <td><?= $list_ppo->noppotxt; ?></td>
                        <td><?= $list_ppo->noreftxt; ?></td>
                        <td colspan="2"><?= date_format(date_create($list_ppo->tglppo), "d/m/Y"); ?></td>
                        <td colspan="3"><?= $list_ppo->LOKASI; ?></td>
                        <td colspan="9"><?= $list_ppo->user; ?></td>
                    </tr>
                    <!-- slesai spp -->
                    <tr>
                        <td colspan="13">
                            <hr>
                        </td>
                    </tr>
                    <!-- untuk PO -->
                    <?php
                    $noref = $list_ppo->noreftxt;
                    $query = "SELECT * FROM item_po WHERE batal = '0' AND refppo ='$noref'";
                    $item_po = $this->db_logistik_pt->query($query)->result();
                    foreach ($item_po as $list_item_po) {
                    ?>
                        <tr>
                            <td><?= $list_ppo->kodebartxt; ?></td>
                            <td><?= $list_ppo->nabar; ?></td>
                            <td><?= $list_ppo->sat; ?></td>
                            <td><?= $list_ppo->qty; ?></td>
                            <?php ?>
                            <td><?= date_format(date_create($list_item_po->tglpo), "d/m/Y"); ?></td>
                            <td>23 Hari</td>
                            <td><?= $list_item_po->nopo; ?></td>
                            <?php
                            $nopo = "'" . $list_item_po->nopo . "'";
                            $query = "SELECT nopo, kode_supply, nama_supply FROM po WHERE nopo = $nopo";
                            $po = $this->db_logistik_pt->query($query)->result();
                            foreach ($po as $dt_po) {
                            ?>
                                <td><?= $dt_po->nama_supply ?></td>
                            <?php } ?>
                            <td><?= $list_item_po->qty; ?></td>
                            <td>0</td>
                            <td>Rp <?= number_format((float)$list_item_po->harga, 2, ',', '.'); ?> </td>
                            <td>Rp <?= number_format((float)$list_item_po->jumharga, 2, ',', '.'); ?> </td>
                            <td>-</td>
                        </tr>

                    <?php } ?>
                    <!-- selesai PO -->

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>