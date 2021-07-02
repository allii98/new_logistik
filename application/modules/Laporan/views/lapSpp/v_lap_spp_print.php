<head>
    <style type="text/css">
        #tabel_spp tr td {
            border: 1px solid #dddddd;
        }

        body {
            font-family: Verdana;
            font-size: 8px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }

        .singleborder {
            border-collapse: collapse;
            border: 1px solid black;
        }

        #tr_content td.noborder {
            border-bottom: 0px solid #FFF;
            border-top: 0px solid #FFF;
        }
    </style>
    <title>SPP - Surat Permintaan Pembelian</title>
</head>

<body>
    <?php foreach ($ppo as $data) { ?>
        <?php
        if ($this->session->userdata('app_pt') == "MSAL") {
            $headTitle = "PT. MULIA SAWIT AGRO LESTARI";


            switch ($data->kodept) {
                case '01':
                    $lokasi = 'HO';
                    $lokasi1 = 'HO';
                    $nama_kebun = '';
                    break;
                case '02':
                    $lokasi = 'RO';
                    $lokasi1 = 'RO';
                    $nama_kebun = '';
                    break;
                case '03':
                    $lokasi = 'PKS';
                    $lokasi1 = 'PKS';
                    $nama_kebun = '';
                    break;
                default:
                    $lokasi = 'ESTATE';
                    $lokasi1 = 'SITE';
                    $nama_kebun = "<h6 style='margin-top: 0px;'>SRIWIJAYA ESTATE</h6>";
                    break;
            }
        }
        ?>

        <h3 style="margin-bottom: 0px;"><?= $headTitle; ?> (<?= $lokasi ?>)</h3>
        <?= $nama_kebun; ?>
        <table class="singleborder" border="1" width="10%" align="right">
            <tr>
                <td align="center" style="font-size: 15px"><?= $lokasi1; ?></td>
            </tr>
        </table>


        <h3 align="left" style="margin-top: 0px;margin-bottom: 0px;"></h3>
        <p align="right" style="margin-top: 0px;margin-bottom: 0px;"><small>By MIPS</small></p>
        <table class="singleborder" border="1" width="100%" id="tabel_spp">
            <tr>
                <td colspan="3">Nomor SPP Devisi : SPP - <?= $data->noppo ?><br />
                    Tanggal SPP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= date("d-m-Y", strtotime($data->tglppo)); ?><br />
                    Tanggal Terima &nbsp;&nbsp;&nbsp;&nbsp;: <?= $data->tgltrm; ?><br />
                    Kode Departemen : <?= $data->kodedept . "-" . $data->namadept; ?><br />
                </td>
                <td colspan="4">Nomor Referensi &nbsp;: <?= $data->noreftxt; ?><br />
                    Tgl. Referensi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $data->tglref; ?><br />
                    Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $data->ket; ?><br />
                    Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <b><?= $data->status; ?></b><br />
                </td>
            </tr>
            <tr>
                <td align="center" colspan="7">Sesuai dengan nomor SPP diatas, terlampir perincian sebagai berikut : </td>
            </tr>
            <tr>
                <td align="center">NO.</td>
                <td align="center">KODE</td>
                <td align="center">NAMA BARANG</td>
                <td align="center">KUANTITAS</td>
                <td align="center" width="10%">SISA STOK</td>
                <td align="center">SAT</td>
                <td align="center">KETERANGAN</td>
            </tr>


            <?php
            $noref = $data->noreftxt;
            $item = "SELECT kodebartxt, noreftxt, nabar, qty, STOK, sat, ket FROM item_ppo WHERE noreftxt='$noref'";
            $item_ppo = $this->db_logistik_pt->query($item)->result();
            $no = 1;
            foreach ($item_ppo as $list_item) {
            ?>
                <tr id="tr_content">
                    <td class="noborder" align="center"><?= $no; ?></td>
                    <td class="noborder"><?= $list_item->kodebartxt; ?></td>
                    <td class="noborder"><?= $list_item->nabar; ?></td>
                    <td class="noborder" align="right"><?= $list_item->qty; ?></td>
                    <td class="noborder" align="right"><?= $list_item->STOK; ?></td>
                    <td class="noborder" align="center"><?= $list_item->sat; ?></td>
                    <td class="noborder"><?= $list_item->ket; ?></td>
                </tr>
            <?php
                $no++;
            } ?>

            <tr>
                <td colspan="2" align="center">Diminta,</td>
                <td colspan="1" align="center">Diperiksa,</td>
                <td colspan="3" align="center">Disetujui,</td>
                <td colspan="1" align="center">Dibuat Oleh,</td>
            </tr>
            <tr>
                <td colspan="2" align="center" height="50" valign="bottom">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td colspan="1" align="center" height="50" valign="bottom">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td colspan="3" align="center" height="50" valign="bottom">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                <td colspan="1" align="center" height="50" valign="bottom">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
            </tr>
        </table>
        <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small>
        <br>
        <br>
        <br>
        <br>
    <?php } ?>
</body>