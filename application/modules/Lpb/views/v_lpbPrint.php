<?php
// var_dump($stokmasuk);
// var_dump($masukitem);
// var_dump($po);
// exit();
?>

<head>
    <style type="text/css">
        /*body{
      padding-top:1000px;
      margin-top:1000px;
    }*/
        h4 {
            font-size: 14px;
        }

        table tr td {
            font-size: 10px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /*width: 50%;*/
        }

        .singleborder {
            border-collapse: collapse;
            border: 1px solid black;
        }

        body {
            font-size: 10px;
        }
    </style>
    <title>Laporan Penerimaan Barang </title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td rowspan="2" width="12%"><img width="10%" height="10%" src="./assets/qrcode/lpb/<?php echo $id . "_" . $no_lpb; ?>.png"></td>
            <td align="center" valign="bottom">
                <h4 align="center" style="margin: 0px;padding: 0px;"><b><u>Laporan Penerimaan Barang</u></b></h4>
            </td>
        </tr>
        <tr>
            <td align="center" valign="baseline">
                <h5 align="center" style="margin: 0px;padding: 0px 0px 10px 0px;"><b>No. LPB : <?= $stokmasuk->noref; ?></b></h5>
            </td>
        </tr>
    </table>
    <table border="0" width="100%">
        <tr>
            <td>Nama Supplier</td>
            <td>:</td>
            <td><?= $stokmasuk->nama_supply; ?></td>
            <td>No. Pesanan Pembelian</td>
            <td>:</td>
            <td><?= $stokmasuk->nopotxt; ?></td>
        </tr>
        <tr>
            <td>Surat Pengantar No.</td>
            <td>:</td>
            <td><?= $stokmasuk->no_pengtr; ?></td>
            <td>Tanggal Penerimaan</td>
            <td>:</td>
            <td><?= date("d-m-Y", strtotime($stokmasuk->tgl)); ?></td>
        </tr>
        <tr>
            <td>Lokasi Gudang</td>
            <td>:</td>
            <td><?= $stokmasuk->lokasi_gudang; ?></td>
            <td>Tgl. Pembuatan LPB</td>
            <td>:</td>
            <td><?= date("d-m-Y H:i:s", strtotime($stokmasuk->tglinput)); ?></td>
        </tr>
        <tr>
            <td>Alokasi</td>
            <td>:</td>
            <td><?= $stokmasuk->lokasi ?></td>
            <td>No. Perkiraan</td>
            <td>:</td>
            <td></td>
        </tr>
        <!-- <tr>
      <td>Departemen / Divisi</td>
      <td>:</td>
      <td><?= $po->ket_dept; ?></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
    </table>

    <table border="1" width="100%" class="singleborder">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Satuan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($masukitem as $list_masukitem) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $list_masukitem->kodebartxt; ?></td>
                    <td><?= $list_masukitem->nabar; ?></td>
                    <td><?= $list_masukitem->qty; ?></td>
                    <td><?= $list_masukitem->satuan; ?></td>
                    <td><?= $list_masukitem->ket; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <br />
    <table width="100%">
        <tr>
            <td align="center">Diperiksa,</td>
            <td align="center">Menyetujui,</td>
            <td align="center">Penerima,</td>
            <td align="center">Pengirim,</td>
        </tr>
        <tr>
            <td colspan="4" height="50"></td>
        </tr>
        <tr>
            <td align="center">(___________________)</td>
            <td align="center">(___________________)</td>
            <td align="center">(___________________)</td>
            <td align="center">(___________________)</td>
        </tr>
    </table>

    <small>*NB : harap dikembalikan ke pemilik barang dan dibawa pada waktu penagihan</small><br />
    <small>*Coret yang tidak perlu</small><br />

    <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br />
    <small>Print generated by MMOP Website</small>
</body>