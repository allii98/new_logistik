<head>
    <style type="text/css">
        #tabel_spp tr td {
            /*font-size: 12px;*/
            border: 1px solid;
            padding: 5px;
        }

        body {
            /* font-family: Verdana; */
            font-size: 8px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            /* line-height: 20px; */
        }

        .singleborder {
            border-collapse: collapse;
            border: 1px solid black;
        }

        #tr_content td.noborder {
            /*border: none;*/
            border-bottom: 0px solid #FFF;
            border-top: 0px solid #FFF;
        }

        .warna_sebagian {
            background-color: gray;
        }

        .garis_tepi1 {
            border: 2px solid black;
            width: 50px;
            height: 20px;
            float: right;
            line-height: 20px;
        }
    </style>
    <title><?= $ppo->jenis ?></title>
</head>
<?php
if ($ppo->jenis == "SPPI") {
    $jenis_spp = 'INTERNAL (SPPI)';
} elseif ($ppo->jenis == "SPPA") {
    $jenis_spp = 'ASET (SPPA)';
} elseif ($ppo->jenis == "SPPK") {
    $jenis_spp = "KHUSUS (SPPK)";
} else {
    $jenis_spp = ' (SPP)';
}

if ($ppo->lokasi == 'HO') {
    $alamat_lok = '<p style="font-size:8px">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru, JakartaSelatan, DKI Jakarta Raya-12140</p>';
} else {
    $alamat_lok = '';
}

$logo_pt = $this->session->userdata('logo_pt');
?>

<body>
    <?php
    if (substr($ppo->noreftxt, 0, 3) == 'PST') {
    ?>
        <table width="100%" border="0" align="center" style="margin-bottom: 0px;">
            <tr>
                <td width="12%" height="10px"><img width="10%" height="60px" style="padding-left: 0px" src="././assets/logo/<?= $logo_pt ?>"></td>
                <td align="left" style="vertical-align: text-top; padding:0px">
                    <b style="font-size: 14px;"><?= $ppo->devisi ?></b><br>
                    <?= $alamat_lok ?><br>
                    <h3 align="left">SURAT PERMINTAAN PEMBELIAN <?= $jenis_spp ?></h3>
                </td>
                <td width="12%"><img width="10%" height="10%" src="./assets/qrcode/spp/<?php echo $id . "_" . $nospp; ?>.png"></td>
            </tr>
        </table>

        <table width="100%" border="0" align="center" style="margin-bottom: 0px;">
            <tr>
                <td>
                    <p align="left" style="margin-top: 0px;margin-bottom: 0px; margin-right:0px;"><small>By MIPS LOGISTIK</small></p>
                </td>
                <td width="9%" class="singleborder" align="center" style="padding: 5px;">
                    <h3 align="center"><?= $ppo->lokasi; ?></h3>
                </td>
                <td style="width: 2%;"></td>
            </tr>
        </table>
    <?php
    } else {
    ?>
        <table width="100%" border="0" align="center" style="margin-bottom: 0px;">
            <tr>
                <td colspan="2" align="left" style="vertical-align: text-top; padding-top:0px">
                    <b style="margin-bottom: 0px; font-size: 14px;"><?= $ppo->devisi ?></b>
                    <h6>&nbsp;</h6>
                    <h3 align="left" style="margin-top: 5px;margin-bottom: 0px;">SURAT PERMINTAAN PEMBELIAN <?= $jenis_spp ?></h3>
                </td>
                <td style="width: 2%;"></td>
                <td rowspan="2" width="12%"><img width="10%" height="10%" src="./assets/qrcode/spp/<?php echo $id . "_" . $nospp; ?>.png"></td>
            </tr>
            <tr>
                <td>
                    <p align="left" style="margin-top: 0px;margin-bottom: 0px; margin-right:0px;"><small>By MIPS LOGISTIK</small></p>
                </td>
                <td width="9%" class="singleborder" align="center" style="padding: 5px;">
                    <h3 align="center"><?= $ppo->lokasi; ?></h3>
                </td>
                <td></td>
            </tr>
        </table>
    <?php
    }
    ?>
    <table class="singleborder" border="1" width="100%" id="tabel_spp" style="margin-top: 5px;">
        <tr>
            <td colspan="3">Nomor SPP Divisi &nbsp;&nbsp;: SPP - <?= $ppo->noppotxt; ?><br />
                Tanggal SPP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= date("d-m-Y", strtotime($ppo->tglppo)); ?><br />
                Tanggal Terima &nbsp;&nbsp;&nbsp;&nbsp;: <?= date("d-m-Y", strtotime($ppo->tgltrm)); ?><br />
                Kode Departemen : <?= $ppo->kodedept . "-" . $ppo->namadept; ?><br />
            </td>
            <td colspan="4">Nomor Referensi &nbsp;: <?= $ppo->noreftxt; ?><br />
                Tgl. Referensi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= date("d-m-Y", strtotime($ppo->tglref)); ?><br />
                Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= htmlspecialchars($ppo->ket); ?><br />
                Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <b><?= $ppo->status; ?></b><br />
            </td>
        </tr>
        <tr>
            <td align="center" colspan="7">Sesuai dengan nomor SPP diatas, terlampir perincian sebagai berikut : </td>
        </tr>
        <tr>
            <td align="center" width="5%">NO</td>
            <td align="center" width="15%">KODE BARANG</td>
            <td align="center" width="25%">NAMA BARANG</td>
            <td align="center" width="15%">KUANTITAS</td>
            <td align="center" width="9%">SISA STOK</td>
            <td align="center" width="6%">SAT</td>
            <td align="center" width="24%">KETERANGAN</td>
        </tr>

        <?php
        $no = 1;
        foreach ($item_ppo as $list_item) {
            if ($ppo->status2 == 2) {
                if ($list_item->status2 == 0) {
        ?>
                    <tr id="tr_content">
                        <td class="noborder" align="center"><?= $no; ?></td>
                        <td class="noborder warna_sebagian"><?= $list_item->kodebartxt; ?></td>
                        <td class="noborder"><?= $list_item->nabar; ?></td>
                        <td class="noborder" align="center"><?= $list_item->qty; ?></td>
                        <td class="noborder" align="center"><?= $list_item->STOK; ?></td>
                        <td class="noborder" align="center"><?= $list_item->sat; ?></td>
                        <td class="noborder" style="word-break: break-word"><?= htmlspecialchars($list_item->ket); ?></td>
                    </tr>
                <?php
                } else {
                ?>
                    <tr id="tr_content">
                        <td class="noborder" align="center"><?= $no; ?></td>
                        <td class="noborder"><?= $list_item->kodebartxt; ?></td>
                        <td class="noborder"><?= $list_item->nabar; ?></td>
                        <td class="noborder" align="center"><?= $list_item->qty; ?></td>
                        <td class="noborder" align="center"><?= $list_item->STOK; ?></td>
                        <td class="noborder" align="center"><?= $list_item->sat; ?></td>
                        <td class="noborder" style="word-break: break-word"><?= htmlspecialchars($list_item->ket); ?></td>
                    </tr>
                <?php
                }
            } elseif ($ppo->status2 == 0) {
                ?>
                <tr id="tr_content">
                    <td class="noborder" align="center"><?= $no; ?></td>
                    <td class="noborder"><?= $list_item->kodebartxt; ?></td>
                    <td class="noborder"><?= $list_item->nabar; ?></td>
                    <td class="noborder" align="center"><?= $list_item->qty; ?></td>
                    <td class="noborder" align="center"><?= $list_item->STOK; ?></td>
                    <td class="noborder" align="center"><?= $list_item->sat; ?></td>
                    <td class="noborder" style="word-break: break-word"><?= htmlspecialchars($list_item->ket); ?></td>
                </tr>
            <?php
            } else {
            ?>
                <tr id="tr_content">
                    <td class="noborder" align="center"><?= $no; ?></td>
                    <td class="noborder"><?= $list_item->kodebartxt; ?></td>
                    <td class="noborder"><?= $list_item->nabar; ?></td>
                    <td class="noborder" align="center"><?= $list_item->qty; ?></td>
                    <td class="noborder" align="center"><?= $list_item->STOK; ?></td>
                    <td class="noborder" align="center"><?= $list_item->sat; ?></td>
                    <td class="noborder" style="word-break: break-word"><?= htmlspecialchars($list_item->ket); ?></td>
                </tr>
        <?php
            }
            $no++;
        }
        ?>
        <tr>
            <td colspan="2" align="center">Diminta,</td>
            <td colspan="1" align="center">Diperiksa,</td>
            <td colspan="1" align="center">Diketahui,</td>
            <td colspan="2" align="center">Disetujui,</td>
            <td colspan="1" align="center">Dibuat Oleh,</td>
        </tr>
        <tr>
            <td colspan="2" align="center" height="70" valign="bottom">
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
            </td>
            <td colspan="1" align="center" height="70" valign="bottom">
                <?php if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br>
                    <br><?= 'KTU'; ?><br>
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'KTU'; ?><br>
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'KTU'; ?><br>
                <?php
                } else if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br><br>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                }
                ?>
            </td>
            <td colspan="1" align="center" height="70" valign="bottom">
                <?php if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br>
                    <br><?= 'GM'; ?><br>
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'GM'; ?><br>
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'GM'; ?><br>
                <?php
                } else if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br><br>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                }
                ?>
            </td>
            <td colspan="2" align="center" height="70" valign="bottom">
                <?php if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br>
                    <br><?= 'Dept Head'; ?><br>
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'Dept Head'; ?><br>
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) == 'EST') {
                ?>
                    <br><?= 'Dept Head'; ?><br>
                <?php
                } else if ($ppo->status2 == 1 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    <img src="././assets/img/approved2.png" width="15%"><br><br>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 0 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                } else if ($ppo->status2 == 2 and substr($ppo->noreftxt, 0, 3) != 'EST') {
                ?>
                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <?php
                }
                ?>
            </td>
            <td colspan="1" align="center" height="70" valign="bottom">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
        </tr>
    </table>
    <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br>
    <small><i>Cetakan ke - <?= $urut['main_acct'] ?></i></small><br>
    <small>Abu-abu : Dalam proses</small>
</body>