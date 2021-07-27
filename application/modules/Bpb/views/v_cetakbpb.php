<?php
// var_dump($bpb);exit();
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

        h5 {
            font-size: 9px;
            font-weight: normal;
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
    <title>Bon Permintaan Barang</title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td align="center" colspan="2" valign="bottom">
                <h3 align="center" style="margin: 0px;padding: 0px;">Bon Permintaan Bahan Bakar Minyak</h3>
            </td>
        </tr><br>
        <tr>
            <td>
                <h5>No. Ref&nbsp;&nbsp;: <?= $bpb->norefbpb; ?><br />Tanggal&nbsp;: <?= $bpb->tglinput; ?><br />Jam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $bpb->jaminput; ?> WIB</h5>
            </td>
            <td>

                <table class="singleborder" border="1" width="100%">
                    <tr>
                        <td>
                            <h5>Jenis alat/Kend&nbsp;&nbsp;: <?= $bpb->jn_alat; ?><br />Kode/Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $bpb->no_kode; ?><br />HM/KM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $bpb->hm_km; ?><br />Lokasi kerja&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $bpb->lok_kerja; ?></h5>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- <td align="right" width="12%"><img width="10%" height="10%" src="./assets/qrcode/bpb/<?php echo $id . "_" . $no_bpb; ?>.png"></td> -->
        </tr>
    </table>
    <table width="100%">
        <tr>
            <!-- <td>Depart/Divisi : <?= $bpb->bag; ?></td> -->
            <!-- <td align="right">Tanggal : <?= $bpb->tgl; ?></td> -->
        </tr>
    </table>
    <table class="singleborder" border="1" width="100%">
        <tr>
            <td align="center">No</td>
            <td align="center">No. Kode Barang</td>
            <td align="center">Nama / Spesifikasi Barang</td>
            <td align="center">Sat</td>
            <td align="center">Jml Diminta</td>
            <td align="center">Keterangan</td>
        </tr>
        <?php
        $no = 1;
        foreach ($bpbitem as $listbpbitem) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $listbpbitem->kodebar; ?></td>
                <td><?= $listbpbitem->nabar; ?></td>
                <td><?= $listbpbitem->satuan; ?></td>
                <td><?= $listbpbitem->qty; ?></td>
                <td><?= $listbpbitem->ket; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2">
                Distribusi :<br />
                -Ke 1,2 Lampiran Ke( CU )<br />
                -Ke 3 Permintaan Barang
            </td>
            <td colspan="4">
                <table border="0" width="100%">
                    <tr>
                        <!-- <td align="center">Diminta Oleh,</td> -->
                        <!-- <td align="center">Dibukukan,</td> -->
                        <td align="center">Diajukan oleh,</td>
                        <td align="center">Diperiksa,</td>
                        <td align="center">Diterima oleh,</td>
                    </tr>
                    <tr>
                        <td colspan="4" height="50"></td>
                    </tr>
                    <tr>
                        <!-- <td align="center">(___________________)</td> -->
                        <td align="center">(___________________)</td>
                        <td align="center">(___________________)</td>
                        <!-- <td align="center"><img src="<?php echo base_url() ?>assets/img/approved2.png" width="15%"><br></td> -->
                        <td align="center">(___________________)</td>
                    </tr>
                    <tr>
                        <?php $tgl = "";
                        foreach ($bpb_approval as $app) : ?>
                            <?php $tgl = $app->tgl_ktu; ?>
                        <?php endforeach; ?>
                        <td align="center"><br><?= $bpb->user; ?></td>
                        <td align="center">KTU<br><?= $tgl; ?></td>

                        <!-- <td align="center">Kasie Gudang</td> -->
                        <td align="center"><br><br></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br />
    <p style="padding: 0px;margin: 0px;"><small><i>Cetakan Ke : <?= $bpb->jml_cetak ?></i></small><br />
        <small>Print generated by MMOP Website</small>
    </p>
</body>