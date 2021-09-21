<?php
// var_dump($bpb);exit();
$alamat_ho = $this->session->userdata('alamat_ho');
$alamat_site = $this->session->userdata('alamat_site');
$logo_pt = $this->session->userdata('logo_pt');
$lokasi = $this->session->userdata('status_lokasi');
$nama_pt = $this->session->userdata('nama_pt');
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
    <title>Bon Permintaan Barang</title>
</head>

<body>
    <table width="100%" border="0" align="center">
        <tr>
            <td align="center" style="font-size:8.5px;">
                <h3 style="font-size:14px;font-weight:bold;"> <?= $bpb->devisi   ?> </h3>
            </td>
        </tr>

    </table>
    <hr style="width:100%;margin:0px;">
    <table border="0" width="90%">
        <tr>
            <td rowspan="2" width="12%"><img width="5%" height="5%" src="./assets/qrcode/bpb/<?php echo $id . "_" . $no_bpb; ?>.png"></td>
            <td align="center" valign="bottom">
                <h2 align="center" style="margin: 0px;padding: 0px; font-size: 12px;">Bon Permintaan Barang</h2>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top">
                <h3 align="center" style="font-weight: normal;margin-top: -8px; margin-bottom:0px; font-size: 10px;">No. Ref BPB : <?= $bpb->norefbpb; ?></h3>
            </td>
        </tr>
    </table>
    <!-- <table width="100%"> -->
    <!-- <tr> -->
    <!-- <td>Depart/Divisi : <?= $bpb->bag; ?></td> -->
    <!-- <td align="right">Tanggal : <?= $bpb->tgl; ?></td> -->
    <!-- </tr> -->
    <!-- </table> -->
    <table class="singleborder" border="1" width="100%">
        <tr>
            <td align="center">No</td>
            <td align="center">No. Kode Barang</td>
            <td align="center">Nama / Spesifikasi Barang</td>
            <td align="center">Sat</td>
            <td align="center">Jumlah Diminta</td>
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
                <td><?= htmlspecialchars($listbpbitem->ket); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2">
                Distribusi :<br />
                -Ke 1 - Kantor Kebun/PKS<br />
                -Ke 2 - Gudang
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
                        <td align="center"><img src="<?php echo base_url() ?>assets/img/approved2.png" width="15%"><br></td>
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
    <table border="0" width="100%">
        <tr>
            <td colspan="2"><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?>,&nbsp;<?= $this->platform->agent(); ?></i></td>
            <td style="text-align: right;"><i>User Sistem : <?= $this->session->userdata('user'); ?></i></td>
        </tr>
        <tr>
            <td colspan="2"><i>Cetakan Ke : <?= $bpb->jml_cetak ?></i></td>
        </tr>
        <tr>
            <td colspan="2"><i>Print generated by MIPS</i></td>
        </tr>
    </table>
    <!-- <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br />
    <p style="padding: 0px;margin: 0px;"><small><i>Cetakan Ke : <?= $bpb->jml_cetak ?></i></small><br />
        <small>Print generated by MIPS</small>
    </p> -->
</body>