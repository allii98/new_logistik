<?php
$lokasi_sesi = $this->session->userdata('status_lokasi');
?>
<div class="container-fluid">
    <!-- start page title -->
    <!-- end page title -->
    <div class="row justify-content-center mt-1">
        <div class="col-md">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PO</h4>
                <p class="sub-header my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Input Purchase Order
                </p>
                <div class="row mt-0 div_form_1">
                    <div class="col-md-4">
                        <div class="form-group row mb-1">
                            <!-- <a href="<?php echo site_url('po/input'); ?>" class="btn btn-sm btn-info" id="a_po_baru"><span class="fa fa-plus"></span> PO Baru</a> -->
                            <label class="col-3 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Jenis&nbsp;PO&nbsp;*</label>
                            <div class="col-4">
                                <input type="hidden" id="hidden_jenis_spp" name="hidden_jenis_spp">
                                <input type="hidden" id="status_lokasi" value="<?= $lokasi_sesi = $this->session->userdata('status_lokasi'); ?>">
                                <select class="form-control" id="cmb_pilih_jenis_po" onchange="jenisPO()">
                                    <option disabled>
                                        <font face="Verdana" size="2.5">-Pilih-</font>
                                    </option>
                                    <?php
                                    switch ($lokasi_sesi) {
                                        case 'PKS':
                                    ?>
                                            <option selected="selected" value="PO-Lokal">PO-Lokal</option>
                                        <?php
                                            break;
                                        case 'SITE':
                                        ?>
                                            <option selected="selected" value="PO-Lokal">PO-Lokal</option>
                                        <?php
                                            break;
                                        case 'RO':
                                        ?>
                                            <option selected="selected" value="PO-Lokal">PO-Lokal</option>
                                        <?php
                                            break;
                                        case 'HO':
                                        ?>
                                            <option value="PO">PO</option>
                                            <option value="POA">POA - PO Asset</option>
                                            <option value="PO-Khusus">POK - PO Khusus</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">
                                <font face="Verdana" size="2.5">Tgl.&nbsp;PO&nbsp;*</font>
                            </label>
                            <div class="col-5">
                                <input type="date" class="form-control bg-light" id="tgl_po" name="tgl_po" value="<?= date('Y-m-d') ?>" placeholder="tgl PO" autocomplite="off" required>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">
                                <font face="Verdana" size="2.5">Supplier&nbsp;*</font>
                            </label>
                            <div class="col-8">
                                <select class="js-data-example-ajax form-control select2" id="select2">

                                    <?php if ($this->session->userdata('status_lokasi') == 'HO') { ?>
                                        <option disabled>Nama Supplier</option>
                                    <?php } else { ?>
                                        <option disabled>Nama Supplier</option>
                                        <option selected value="0475">TOKO ( KAS )</option>
                                    <?php } ?>
                                </select>
                                <!-- <select class="js-data-example-ajax form-control select2" id="select2">
                                    <option disabled>Nama Supplier</option>
                                    <option selected value="0475">TOKO ( KAS )</option>
                                </select> -->
                                <input type="hidden" name="kd_supplier" value="TOKO ( KAS )" id="kd_supplier">
                                <input type="hidden" name="txtsupplier" value="0475" id="txtsupplier">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">
                                <font face="Verdana" size="2.5">Status&nbsp;Bayar*</font>
                            </label>
                            <div class="col-3">
                                <select class="form-control" id="cmb_status_bayar" name="cmb_status_bayar">
                                    <option value="Cash">
                                        <font face="Verdana" size="2.5">Cash</font>
                                    </option>
                                    <option value="Kredit">Kredit</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">
                                <font face="Verdana" size="2.5">Tempo bayar*</font>
                            </label>
                            <div class="col-3">
                                <input type="number" id="tmpo_pembayaran" name="tmpo_pembayaran" class="form-control" placeholder="0" value="0" autocomplite="off"><span>
                                    <font face="Verdana" size="2.5">Hari</font>
                                </span>
                            </div>
                            <label class="col-2 col-form-label mr-1">
                                <font face="Verdana" size="2">Tempo Pengirim*</font>
                            </label>
                            <div class="col-sm-3">
                                <input type="number" id="tmpo_pengiriman" name="tmpo_pengiriman" class="form-control" placeholder="0" value="0" autocomplite="off" required><span>Hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row mb-1">
                            <label class="col-4 mr-1 col-form-label">
                                <font face="Verdana" size="2">Lokasi&nbsp;Pengiriman*</font>
                            </label>
                            <div class="col-5">
                                <input class="form-control" type="text" id="lks_pengiriman" name="lks_pengiriman" placeholder="Lokasi Pengiriman" value="SITE" autocomplite="off" required>
                                <!-- <span class="pesan pesan-nama" style="color: red;">Harus di isi !</span><br /> -->
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 mr-1 col-form-label">
                                <font face="Verdana" size="2">Devisi*</font>
                            </label>
                            <div class="col-7">
                                <!-- <input class="form-control" type="text" id="lks_pengiriman" name="lks_pengiriman" placeholder="Lokasi Pengiriman" value="SITE" autocomplite="off" required> -->
                                <input type="text" class="form-control bg-light" onclick="tampildevisi()" id="devisi" name="devisi" readonly required>
                                <input type="hidden" name="" id="hidden_devisi">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label  mr-1">
                                <font face="Verdana" size="2">Lokasi&nbsp;Pembelian*</font>
                            </label>
                            <div class="col-4">
                                <select class="form-control" id="lks_pembelian" name="lks_pembelian" required>
                                    <option disabled>-- Pilih --</option>
                                    <?php if ($this->session->userdata('status_lokasi') == 'HO') { ?>
                                        <option value="HO">HO</option>
                                        <option value="RO">RO</option>
                                        <option value="SITE">SITE</option>
                                    <?php } else { ?>
                                        <option value="RO">RO</option>
                                        <option selected="selected" value="SITE">SITE</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label mr-1">
                                <font face="Verdana" size="2">No.&nbsp;Penawaran*</font>
                            </label>
                            <div class="col-7">
                                <input type="number" class="form-control" id="no_penawaran" name="no_penawaran" placeholder="No Penawaran" autocomplite="off" value="0" required>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label mr-1">
                                <font face="Verdana" size="2">Pemesan *</font>
                            </label>
                            <div class="col-5">
                                <!-- <input type="text" class="form-control bg-light" id="txt_pemesan" name="txt_pemesan" value="<?php echo $this->session->userdata('user'); ?>" readonly>
                                <input type="hidden" name="txt_kode_pemesan" id="txt_kode_pemesan" value="<?php echo $this->session->userdata('id_user'); ?>"> -->
                                <select class="form-control" id="txt_pemesan" name="txt_pemesan" required>
                                    <option disabled>-Pilih-</option>
                                    <option selected value="GM">GM</option>
                                    <option value="KTU">KTU</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label mr-1">
                                <font face="Verdana" size="2">Ket. Pengirim*</font>
                            </label>
                            <div class="col-7">
                                <textarea maxlength="250" class="form-control" id="ket_pengiriman" name="ket_pengiriman" placeholder="Keterangan Pengiriman" autocomplite="off">-</textarea>
                                <input type="hidden" id="txt_uang_muka" name="txt_uang_muka" value="0.00">
                                <input type="hidden" id="txt_no_voucher" name="txt_no_voucher" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label mx-0">
                                <font face="Verdana" size="2">PPH *</font>
                            </label>
                            <div class="col-4">
                                <input type="number" class="form-control" id="pph" name="pph" placeholder="PPH" autocomplite="off" value="0" required>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label" required>
                                <font face="Verdana" size="2">PPN *</font>
                            </label>
                            <div class="col-3">
                                <select class="form-control" id="ppn" name="ppn" required>
                                    <option value="1">N</option>
                                    <option value="2">Y</option>
                                    <option value="3">X</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label">
                                <font face="Verdana" size="2">Ket*</font>
                            </label>
                            <div class="col-7">
                                <textarea maxlength="250" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" autocomplite="off"></textarea>
                            </div>
                        </div>
                        <?php
                        switch ($lokasi_sesi) {
                            case 'HO':
                        ?>
                                <div class="form-group row mb-1 my-0">
                                    <label class="col-4 col-form-label">
                                        <font face="Verdana" size="2">Dikirim&nbsp;ke&nbsp;Kebun*</font>
                                    </label>
                                    <div class="col-3 py-0">
                                        <select class="form-control" id="dikirim_kebun" name="dikirim_kebun" required>
                                            <option value="Y" selected="">Y</option>
                                            <option value="N">N</option>
                                        </select>
                                    </div>
                                </div>
                            <?php
                                break;
                            case 'RO':
                            case 'SITE':
                            case 'PKS':
                            ?>
                        <?php
                                break;
                            default:
                                break;
                        }
                        ?>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label">
                                <font face="Verdana" size="2">Total&nbsp;Bayar</font>
                            </label>
                            <div class="col-7">
                                <input type="text" class="form-control bg-light" id="ttl_pembayaran" name="ttl_pembayaran" placeholder="Total Pembayaran" readonly required>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row-->
                <hr class="mt-0 mb-2">
                <?php
                switch ($sesi_sl) {
                    case 'HO':
                ?>
                        <div class="x_content mb-0 div_form_2">

                            <div class="sub-header" style="margin-top: -15px; margin-bottom: -15px;">
                                <div class="row ml-1 mr-1 justify-content-between">
                                    <h6 id="lbl_spp_status" name="lbl_spp_status">
                                        <font face="Verdana" size="2.5">No. PO : ... No. Ref PO : ...</font>
                                    </h6>
                                    <h6>
                                        <button style="display:none;" onclick="cetak()" id="cetak" class="btn btn-danger btn-xs fa fa-print" title="Cetak"></button>
                                    </h6>
                                </div>
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" id="refspp" name="refspp">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                            </div>
                            <div class="row" style="margin-left:4px;">
                                <h6 id="h4_no_po" name="h4_no_po"></h6>&emsp;&emsp;
                                <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                            </div>
                            <div class="table-responsive mt-0">
                                <table id="tableRinciPO" class="table table-striped table-bordered table-in">
                                    <thead>
                                        <tr>
                                            <?php
                                            switch ($sesi_sl) {
                                                case 'HO':
                                            ?>
                                                    <th>#</th>
                                                    <th width="250px">
                                                        <font face="Verdana" size="2.5">SPP</font>
                                                    </th>
                                                <?php
                                                    break;
                                                case 'RO':
                                                case 'SITE':
                                                case 'PKS':
                                                ?>
                                            <?php
                                                    break;
                                                default:
                                                    break;
                                            }
                                            ?>

                                            <!-- <th>
                                                <font face="Verdana" size="2.5">Jenis Budget</font>
                                            </th> -->
                                            <th width="500px">
                                                <font face="Verdana" size="2.5">Nama & Kode Barang</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Merk</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Qty</font>
                                            </th>

                                            <th>
                                                <font face="Verdana" size="2.5">Harga</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Kurs</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Disc <span>%</span></font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Biaya Lainnya</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Ket.&nbsp;Biaya</font>
                                            </th>

                                            <th>
                                                <font face="Verdana" size="2.5">Keterangan</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Jumlah Rp</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">#</font>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_rincian" name="tbody_rincian">
                                        <tr id="tr_1">
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                                <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="tambah_row1" name="btn_tambah_row" onfocus="modalSPP('1')"></button>
                                                <!-- <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalD('1')"></button> -->
                                                <!-- <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row_1" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button> -->
                                            </td>
                                            <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                                <td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control" id="getspp1" onfocus="modalSPP('1')" name="spp" placeholder="Pilih item SPP">
                                                    <input type="hidden" class="form-control" id="id_item_1" name="id">
                                                    <input type="hidden" class="form-control" id="id_ppo1" name="id_ppo1">
                                                    <input type="hidden" class="form-control" id="hidden_no_ref_spp_1" name="hidden_no_ref_spp_">
                                                    <input type="hidden" class="form-control" id="hidden_tgl_ref_1" name="hidden_tgl_ref_">
                                                    <input type="hidden" class="form-control" id="hidden_kd_departemen_1" name="hidden_kd_departemen_">
                                                    <input type="hidden" class="form-control" id="hidden_departemen_1" name="hidden_departemen_">
                                                    <input type="hidden" class="form-control" id="hidden_tgl_spp_1" name="hidden_tgl_spp_">
                                                    <input type="hidden" class="form-control" id="hidden_kd_pt_1" name="hidden_kd_pt_">
                                                    <input type="hidden" class="form-control" id="hidden_nama_pt_1" name="hidden_nama_pt_">
                                                    <input type="hidden" class="form-control" id="noppo1" name="noppo1">
                                                </td>
                                                <!-- <td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <select class="form-control" id="cmb_jenis_budget_1" name="cmb_jenis_budget_1" required>
                                                        <option value="">-- Pilih --</option>
                                                        <option value="TEKNIK">TEKNIK</option>
                                                        <option value="BIBITAN">BIBITAN</option>
                                                        <option value="LC & TANAM">LC & TANAM</option>
                                                        <option value="RAWAT">RAWAT</option>
                                                        <option value="PANEN">PANEN</option>
                                                        <option value="TEKNIK">TEKNIK</option>
                                                        <option value="PABRIK">PABRIK</option>
                                                        <option value="KANTOR">KANTOR</option>
                                                        <option value="Kendaraan">Kendaraan</option>
                                                        <option value="TBM">TBM</option>
                                                    </select>
                                                </td> -->
                                                <td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <span id="nama_brg_1"></span><br><span id="kode_brg_1"></span>
                                                    <input type="hidden" class="form-control" id="hidden_kode_brg_1" name="hidden_kode_brg_1" />
                                                    <input type="hidden" class="form-control" id="hidden_nama_brg_1" name="hidden_nama_brg_1" />
                                                    <input type="hidden" class="form-control" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1" />
                                                </td>
                                                <td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control" id="txt_merk_1" name="txt_merk_1" placeholder="Merk" required />
                                                </td>
                                                <td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control bg-light" id="txt_qty_1" name="txt_qty" placeholder="Qty" size="8" onkeyup="jumlah('1')" readonly>
                                                    <input type="hidden" class="form-control" id="qty_1" name="txt_qty" placeholder="Qty" size="8" onkeyup="jumlah('1')" />
                                                    <input type="hidden" class="form-control" id="qty2_1" name="txt_qty" placeholder="Qty" size="8" onkeyup="jumlah('1')" />
                                                </td>
                                                <td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control" id="txt_harga_1" name="txt_harga_1" onkeyup="jumlah('1')" placeholder="Harga dalam Rupiah" size="15" required /><br />
                                                </td>
                                                <td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <select class="form-control" id="cmb_kurs_1" name="cmb_kurs_1" required="">
                                                        <option value="Rp">Rp IDR</option>
                                                        <option value="USD">&dollar; USD</option>
                                                        <option value="SGD">S&dollar; SGD</option>
                                                        <option value="Euro">&euro; Euro</option>
                                                        <option value="GBP">&pound; GBP</option>
                                                        <option value="Yen">&yen; Yen</option>
                                                        <option value="MYR">RM MYR</option>
                                                    </select><br />
                                                </td>
                                                <td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control" id="txt_disc_1" name="txt_disc_1" size="10" value="0" onkeyup="jumlah('1')" placeholder="Disc" />

                                                </td>
                                                <td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control" id="txt_biaya_lain_1" name="txt_biaya_lain_11" size="15" value="0" onkeyup="jumlah('1')" placeholder="Biaya Lain" />

                                                </td>
                                                <td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <textarea class="form-control" id="txt_keterangan_biaya_lain_1" name="txt_keterangan_biaya_lain_" size="26" placeholder="Keterangan Biaya" rows="1"></textarea><br />

                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <textarea class="form-control" id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" size="26" placeholder="Keterangan" rows="1"></textarea><br />

                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <input type="text" class="form-control bg-light" id="txt_jumlah_1" name="txt_jumlah_1" onkeyup="jumlah('1')" size="15" placeholder="Jumlah" readonly />
                                                    <label id="lbl_status_simpan_1"></label>
                                                    <input type="hidden" id="hidden_id_po_item_1" name="hidden_id_po_item_1">

                                                </td>
                                                <td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- <div class="ribbon ribbon-primary float-right"><i class="mdi mdi-access-point mr-1"></i> Primary</div> -->
                                                    <span style="display:none;" id="habis_1" class="badge badge-danger">Habis</span>
                                                    <button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah('1')" id="btn_ubah_1" name="btn_ubah_" type="button" data-toggle="tooltip" data-placement="right" title="Ubah"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_1" name="btn_cancel_update_" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancleUpdate('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
                                                </td>

                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                        break;
                    case 'RO':
                    case 'SITE':
                    case 'PKS':
                    ?>
                        <div class="x_content div_form_3">
                            <table border="0" width="80%">

                                <td>
                                    <h6 id="h4_no_ref_spp" name="h4_no_ref_spp"></h6>
                                </td>
                                <td>
                                    <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                </td>
                            </table>
                            <br>
                            <div class="sub-header" style="margin-top: -15px; margin-bottom: -15px;">
                                <div class="row ml-1 mr-1 justify-content-between">


                                    <!-- <h6 id="lbl_spp_status" name="lbl_spp_status">
                                        <font face="Verdana" size="2.5">No. PO : ... No. Ref PO : ...</font>
                                    </h6> -->
                                    <h6>
                                        <h6>
                                            <button style="display:none;" onclick="cetak()" id="cetak" class="btn btn-danger btn-xs fa fa-print" title="Cetak"></button>
                                        </h6>
                                    </h6>
                                </div>
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" id="refspp" name="refspp">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                            </div>
                            <br>

                            <div class="table-responsive mt-0">
                                <table id="tableItemPO" class="table table-striped table-bordered table-in">
                                    <thead>
                                        <tr>
                                            <!-- <th>
                                                <font face="Verdana" size="2.5">Jenis Budget</font>
                                            </th> -->
                                            <th>
                                                <font face="Verdana" size="2.5">Nama & Kode Barang</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Merk</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Qty</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Harga</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Kurs</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Disc <span>%</span></font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Biaya Lainnya</font>
                                            </th>
                                            <th>
                                                <font face="Verdana" size="2.5">Ket.&nbsp;Biaya</font>
                                            </th>

                                            <th>
                                                <font face="Verdana" size="2.5">Keterangan</font>
                                            </th>
                                            <!-- <th>
                                                <font face="Verdana" size="2.5">Jumlah Rp</font>
                                            </th> -->
                                            <th>
                                                <font face="Verdana" size="2.5">#</font>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_item" name="tbody_item">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                <?php
                        break;
                    default:
                        break;
                }
                ?>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Konfirmasi Hapus</h4>
                    <input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
                    <p class="mt-3">Apakah Anda yakin ingin menghapus data ini ???</p>
                    <button type="button" class="btn btn-warning my-2" data-dismiss="modal" id="btn_delete" onclick="deleteData()">Hapus</button>
                    <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modal-spp">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Pilih Item SPP</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-4 float-right">
                        <select class="form-control" id="cmb_filter_alokasi" name="cmb_filter_alokasi">
                            <option value="SEMUA" selected>TAMPILKAN SEMUA</option>
                            <?php
                            switch ($this->session->userdata('status_lokasi')) {
                                case 'PKS':
                                case 'SITE':
                            ?>
                                    <option value="PKS">PKS</option>
                                    <option value="SITE">SITE</option>
                                <?php
                                    break;
                                case 'RO':
                                ?>
                                    <option value="PKS">PKS</option>
                                    <option value="SITE">SITE</option>
                                    <option value="RO">RO</option>
                                <?php
                                    break;
                                case 'HO':
                                ?>
                                    <option value="PKS">PKS</option>
                                    <option value="SITE">SITE</option>
                                    <option value="RO">RO</option>
                                    <option value="HO">HO</option>
                            <?php
                                    break;
                                default:
                                    break;
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="spp" class="table table-striped table-bordered table-in" width="60px">
                            <thead>
                                <tr>
                                    <th>
                                        <font face="Verdana" size="2.5">No.</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">ID</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">No. SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Tgl. SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Ref. SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Departemen</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Kode Barang</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Item Barang</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Ket</font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align: center;" colspan="9"><button class="btn btn-sm btn-info" data-toggle="tooltip" id="btn_setuju_all" onclick="pilihItem()" data-placement="left">Pilih Item</button></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalcarispp">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Pilih SPP</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="dataspp" class="table table-striped table-bordered table-in" width="100%">
                            <thead>
                                <tr>

                                    <th>
                                        <font face="Verdana" size="2.5">#</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Tanggal</font>
                                    </th>

                                    <th>
                                        <font face="Verdana" size="2.5">Ref. SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Departemen</font>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

</div>

<script>
    var row = 0;
    var simpanBaru = true;
    var updateBaru = true;
    var cancleUpdatePO = true;
    var hapus = true;
    var qty = true;

    function tampildevisi() {
        var devisi = $('#hidden_devisi').val();
        swal(devisi);
    }

    function jenisPO() {
        var jenis_po = $('#cmb_pilih_jenis_po').val();

        // console.log(jenis_po);

        if (jenis_po == "PO") {
            $('#hidden_jenis_spp').val('SPP');
        } else if (jenis_po == "POA") {
            $('#hidden_jenis_spp').val('SPPA');
        } else if (jenis_po == "PO-Lokal") {
            $('#hidden_jenis_spp').val('SPPI');
        } else if (jenis_po == "PO-Khusus") {
            $('#hidden_jenis_spp').val('SPPK');
        }
    }

    $(document).ready(function() {
        $('.div_form_2').hide();
        $('.div_form_3').hide();
        setInterval(function() {
            check_form_2();
        }, 1000);

        jenisPO();


        // kuncinumber
        $("#pph, #no_penawaran, #tmpo_pengiriman, #tmpo_pembayaran").on("keypress keyup blur", function(event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
        //end kunci number

        //membuat format number pada tabel isian
        $('#txt_qty_1, #txt_harga_1,#txt_disc_1, #txt_biaya_lain_1 ').number(true, 0);

        var lokasi = $('#lokasi').val();

        switch (lokasi) {
            case 'HO':

                break;
            case 'RO':
            case 'SITE':
            case 'PKS':

                $(document).on('click', '#data_spp', function() {
                    var id = $(this).data('id');
                    var noreftxt = $(this).data('noreftxt');
                    // console.log(noreftxt);
                    $.ajax({
                        type: 'post',
                        url: '<?= site_url('Po/getid'); ?>',
                        data: {
                            id: id,
                            noreftxt: noreftxt,
                        },
                        success: function(response) {
                            $('.div_form_3').show();
                            $('.div_form_1').find('#sppSITE').attr('disabled', '');
                            // console.log(response);
                            data = JSON.parse(response);
                            $('#h4_no_spp').html('No. SPP : ' + data[0].noppo);
                            $('#h4_no_ref_spp').html('No. Ref SPP : ' + data[0].noreftxt);
                            $('#devisi').val(data[0].devisi);
                            $('#hidden_devisi').val(data[0].devisi);

                            var n = 1;
                            $.each(data, function(index, value) {

                                // console.log('ini yg belum di approve', value.statusaprove);
                                tambah_item(value.statusaprove);
                                if (value.statusaprove == '0') {
                                    $('#tr_' + n).find('input,textarea,select').attr('disabled', '');
                                    $('#tr_' + n).find('input,textarea,select').addClass('form-control bg-light');
                                }

                                var idppo = value.id;
                                var opsi = value.noreftxt;
                                var tglref = value.tglref;
                                var kodedept = value.kodedept;
                                var namadept = value.namadept;
                                var tglppo = value.tglppo;
                                var kodept = value.kodept;
                                var pt = value.pt;
                                var noppo = value.noppo;
                                var kodebar = value.kodebar;
                                var nabar = value.nabar;
                                var sat = value.sat;
                                // var tglref = value.tglref;
                                var qty = value.qty;
                                console.log('ini qty nya', qty)
                                var qty2 = value.qty2;


                                $('#id_ppo' + n).val(idppo);
                                $('#id_item_' + n).val(idppo);
                                $('#hidden_no_ref_spp_' + n).val(opsi);
                                $('#refspp').val(opsi);
                                // $('#hidden_tgl_hidden' + n).val(tglref);
                                $('#hidden_kd_departemen_' + n).val(kodedept);
                                $('#hidden_departemen_' + n).val(namadept);
                                $('#hidden_tgl_spp_' + n).val(tglppo);
                                $('#hidden_kd_pt_' + n).val(kodept);
                                $('#hidden_nama_pt_' + n).val(pt);
                                $('#noppo' + n).val(noppo);
                                $('#hidden_kode_brg_' + n).val(kodebar);
                                $('#kode_brg_' + n).text(kodebar);
                                $('#hidden_nama_brg_' + n).val(nabar);
                                $('#nama_brg_' + n).text(nabar);
                                $('#hidden_satuan_brg_' + n).val(sat);
                                $('#txt_qty_' + n).val(qty);
                                $('#getspp' + n).val(opsi);

                                $('#qty_' + n).val(qty);
                                $('#qty2_' + n).val(qty2);
                                $('#hidden_tgl_ref_' + n).val(tglref);
                                n++;
                            });
                            $('#modalcarispp').modal('hide');
                        },
                        error: function(request) {
                            console.log(request.responseText);
                        }
                    });
                });
                cariSPP();
                break;
            default:
                break;
        }

        // dataspp site
        $('#dataspp').DataTable({

            "processing": true,
            "serverSide": true,

            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Po/get_carispp') ?>",
                "type": "POST"
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "infoFiltered": ""
            }
        });

        // end dataspp site

        // data spp HO
        $('#spp').DataTable().destroy();
        $('#spp').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "select": true,

            "ajax": {
                "url": "<?php echo site_url('Po/get_ajax') ?>",
                "type": "POST"
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,

            }, ],
            "dom": 'Bfrtip',
            "buttons": [{
                    "text": "Select All",
                    "action": function() {
                        $('#spp').DataTable().rows().select();
                    }
                },
                {
                    "text": "Unselect All",
                    "action": function() {
                        $('#spp').DataTable().rows().deselect();
                    }
                }
            ],
            "lengthMenu": [
                [5, 10, 15, -1],
                [10, 15, 20, 25]
            ],
            "aoColumnDefs": [{
                "bSearchable": false,
                "bVisible": false,
                "aTargets": [1, 2]
            }, ]
        });

        // $(document).on('click', '#pilih', function() {
        //     var id = $(this).data('id');
        //     // console.log(id);
        //     var kode = $(this).data('kode');
        //     var supplier = $(this).data('supplier');
        //     $('#id-supplier').val(id);
        //     $('#kd_supplier').val(kode);
        //     $('#supplier').val(supplier);
        //     $("#modal-supllier").modal('hide');
        // });
        //end data spp HO

        $("#sppSITE").select2({
            ajax: {
                url: "<?php echo site_url('Po/getSpp') ?>",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    // console.log(params);
                    return {
                        noref: params.term, // search term
                        tgl: params.term // search term
                    };
                },
                processResults: function(data) {
                    var results = [];

                    $.each(data, function(index, item) {
                        var tglppo = item.tglppo;
                        var tgl = tglppo.substr(0, 10);
                        // var tgl2 = date()
                        results.push({
                            id: item.id,
                            text: tgl + ' - ' + item.noreftxt + ' - ' + item.namadept
                        });

                    });
                    return {
                        results: results
                    };
                }
            }

        }).on('select4:select', function(evt) {
            var data = $(".select4 option:selected").text();
            $('#hidden_no_ref_spp_').val(data);

        });

        $('#sppSITE').change(function() {
            var dd = this.value;
            console.log(dd);

            $.ajax({
                type: 'post',
                url: '<?= site_url('Po/getid'); ?>',
                data: {
                    id: this.value
                },
                success: function(response) {
                    $('.div_form_3').show();
                    $('.div_form_1').find('#sppSITE').attr('disabled', '');
                    // console.log(response);
                    data = JSON.parse(response);
                    console.log(data);
                    $('#lbl_spp_status').empty();
                    $('#h4_no_ref_po').html('No. Ref PO : ' + data.noref);

                    var n = 1;
                    $.each(data, function(index, value) {

                        tambah_item(value.statusaprove);
                        // console.log(value);

                        var idppo = value.id;
                        var opsi = value.noreftxt;
                        var tglref = value.tglref;
                        var kodedept = value.kodedept;
                        var namadept = value.namadept;
                        var tglppo = value.tglppo;
                        var kodept = value.kodept;
                        var pt = value.pt;
                        var noppo = value.noppo;
                        var kodebar = value.kodebar;
                        var nabar = value.nabar;
                        var sat = value.sat;
                        // var tglref = value.tglref;
                        var qty = value.qty;
                        var qty2 = value.qty2;

                        $('#id_ppo' + n).val(idppo);
                        $('#id_item_' + n).val(idppo);
                        $('#hidden_no_ref_spp_' + n).val(opsi);
                        // $('#hidden_tgl_hidden' + n).val(tglref);
                        $('#hidden_kd_departemen_' + n).val(kodedept);
                        $('#hidden_departemen_' + n).val(namadept);
                        $('#hidden_tgl_spp_' + n).val(tglppo);
                        $('#hidden_kd_pt_' + n).val(kodept);
                        $('#hidden_nama_pt_' + n).val(pt);
                        $('#noppo' + n).val(noppo);
                        $('#hidden_kode_brg_' + n).val(kodebar);
                        $('#kode_brg_' + n).text(kodebar);
                        $('#hidden_nama_brg_' + n).val(nabar);
                        $('#nama_brg_' + n).text(nabar);
                        $('#hidden_satuan_brg_' + n).val(sat);
                        // $('#txt_qty_' + n).val(qty);
                        if (qty2 != null) {
                            var hasil = qty - qty2;
                            $('#txt_qty_' + n).val(hasil);
                        } else {
                            $('#txt_qty_' + n).val(qty);
                        }
                        $('#qty_' + n).val(qty);
                        $('#qty2_' + n).val(qty2);
                        $('#hidden_tgl_ref_' + n).val(tglref);
                        n++;
                    });

                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });

        $("#select2").select2({
            ajax: {
                url: "<?php echo site_url('Po/getPoo') ?>",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        toko: params.term, // search term
                    };
                },
                processResults: function(data) {
                    var results = [];
                    $.each(data, function(index, item) {
                        results.push({
                            id: item.kode,
                            text: item.supplier
                        });
                    });
                    return {
                        results: results
                    };
                }
            }

        }).on('select2:select', function(evt) {
            var a = "0475";
            var b = "TOKO ( KAS )";
            var kode = $(".select2 option:selected").text();
            var data = $(".select2 option:selected").val();
            $('#kd_supplier').val(kode);
            $('#txtsupplier').val(data);

        });

    });

    function cetak() {
        var id_po = $('#hidden_id_po').val();
        var nopo = $('#hidden_no_po').val();
        var noref = $('#hidden_no_ref_po').val();

        var noref_rpc = noref.replaceAll('/', '.');

        window.open('cetak/' + noref_rpc + '/' + id_po, '_blank');
    }

    function isSelected(selectedNoppo) {
        var noppos = $('[id*=id_item_]');
        // console.log(noppos);
        var isSelected = false;
        var a = noppos.each(function() {
            var noppo = $(this).val();
            console.log(noppo)
            if (noppo == selectedNoppo) {
                console.log("isSelected sama", noppo, selectedNoppo)
                isSelected = true;
                return false;
            }
        });
        return isSelected;
    }

    function cariSPP() {
        $('#modalcarispp').modal('show');
    }

    function tambah_item(statusaprove) {

        row++;
        // console.log("status", statusaprove);
        console.log("bariske", row);
        var rowCount = $('#tableItemPO tr').length;
        console.log('ini jumlah row', rowCount);

        var tr_buka = '<tr id="tr_' + row + '">';

        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';

        var td_col_3 = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_jenis_budget_' + row + '" name="cmb_jenis_budget_' + row + '" required>' +
            '<option value="">-- Pilih --</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="BIBITAN">BIBITAN</option>' +
            '<option value="LC & TANAM">LC & TANAM</option>' +
            '<option value="RAWAT">RAWAT</option>' +
            '<option value="PANEN">PANEN</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="PABRIK">PABRIK</option>' +
            '<option value="KANTOR">KANTOR</option>' +
            '<option value="Kendaraan">Kendaraan</option>' +
            '<option value="TBM">TBM</option>' +
            '</select>'; +

        '</td>';
        var td_col_ = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control" id="brg' + row + '" name="brg' + row + '">' +
            '<input type="hidden" class="form-control"  id="getspp' + row + '" rowame="spp' + row + '" >' +
            '<span id="nama_brg_' + row + '"></span><br><span id="kode_brg_' + row + '" ></span>' +
            '<input type="hidden" id="ppo' + row + '" name="ppo' + row + '">' +
            '<input type="hidden" id="id_ppo' + row + '" name="id_ppo' + row + '">' +
            '<input type="hidden" id="id_item_' + row + '" name="id_item_' + row + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + row + '" name="hidden_no_ref_spp_' + row + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + row + '" name="hidden_tgl_ref_' + row + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + row + '" name="hidden_kd_departemen_' + row + '">' +
            '<input type="hidden" id="hidden_departemen_' + row + '" name="hidden_departemen_' + row + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + row + '" name="hidden_tgl_spp_' + row + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + row + '" name="hidden_kd_pt_' + row + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + row + '" name="hidden_nama_pt_' + row + '">' +
            '<input type="hidden" id="noppo' + row + '" name="noppo' + row + '">' +
            '<input type="hidden" class="form-control" id="hidden_kode_brg_' + row + '" name="hidden_kode_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_nama_brg_' + row + '" name="hidden_nama_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_satuan_brg_' + row + '" name="hidden_satuan_brg_' + row + '"   />' +

            '</td>';
        var td_col_4 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control" id="txt_merk_' + row + '" name="txt_merk_' + row + '" placeholder="Merk"  required />' +
            '<textarea class="form-control" id="txt_merk_' + row + '" name="txt_merk_' + row + '" size="26" placeholder="Merk" rows="1"></textarea><br />' +
            '</td>';
        var td_col_5 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control bg-light" id="txt_qty_' + row + '" name="txt_qty' + row + '" placeholder="Qty" autocomplite="off" size="8" onkeyup="jumlah(' + row + ')" readonly>' +
            '<input type="hidden" class="form-control bg-light" id="qty_' + row + '" name="qty' + row + '" placeholder="Qty" size="8"  readonly>' +
            '<input type="hidden" class="form-control" id="qty2_' + row + '" name="qty2' + row + '" placeholder="Qty" size="8"/>' +

            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_harga_' + row + '" name="txt_harga_' + row + '" onkeyup="jumlah(' + row + ')" placeholder="Harga dalam Rupiah" size="15" autocomplite="off" /><br />' +

            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_kurs_' + row + '" name="cmb_kurs_' + row + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_disc_' + row + '" name="txt_disc_' + row + '" size="8" value="0" onkeyup="jumlah(' + row + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_biaya_lain_' + row + '" name="txt_biaya_lain_' + row + '" size="15" value="0" onkeyup="jumlah(' + row + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" class="form-control" id="txt_keterangan_biaya_lain_' + row + '" name="txt_keterangan_biaya_lain_' + row + '" size="26" placeholder="Keterangan Biaya" rows="1"></textarea><br />' +


            '</td>'
        var td_col_11 = '<td width="25%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" class="form-control" id="txt_keterangan_rinci_' + row + '" name="txt_keterangan_rinci_' + row + '" size="20" placeholder="Keterangan" rows="1"></textarea>' +
            '<h6>Jumlah : <span id="hasil_jumlah_' + row + '"></span></h6>' +
            '<input type="hidden" class="form-control" id="txt_jumlah_' + row + '" size="20" name="txt_jumlah_' + row + '"  placeholder="Jumlah"  readonly />' +

            '<input type="hidden" id="hidden_id_po_item_' + row + '" name="hidden_id_po_item_' + row + '">' +
            '</td>';

        if (statusaprove == '0') {
            var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                '<span  id="habis_' + row + '" class="badge badge-danger">Belum diapprove</span>' +
                '</td>';

        } else {
            var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                '<span style="display:none;" id="habis_' + row + '" class="badge badge-danger">Belum approve</span>' +
                '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + row + ')" ></button>' +
                '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah(' + row + ')" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
                '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + row + ')"></button>' +
                '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + row + ')"></button>' +
                '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
                '<label id="lbl_status_simpan_' + row + '"></label>' +
                '</td>';
        }
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();






        $('#tbody_item').append(tr_buka + form_buka + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_13 + form_tutup + tr_tutup);

        $('#txt_qty_' + row + ',#txt_harga_' + row + ',#txt_disc_' + row + ',#txt_biaya_lain_' + row + '').number(true, 0);

        if (row == 1) {
            $('#btn_hapus_row_1').hide();
        } else {
            $('#btn_hapus_row_1' + row).show();
        }
        hitungqty(row);
        // jumlah(row);
    }


    // var n = 2;
    function tambah_row(n) {
        // n++;
        console.log("bariske", n);

        var tr_buka = '<tr id="tr_' + n + '">';
        var td_col_1 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_proses_status_' + n + '" name="hidden_proses_status_' + n + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" name="btn_tambah_row" id="tambah_row' + n + '" onfocus="modalSPP(' + n + ')"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row_' + n + '" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';

        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control"  id="getspp' + n + '" name="spp' + n + '" onfocus="modalSPP(' + n + ')" placeholder="Pilih item SPP">' +
            '<input type="hidden" id="id_item_' + n + '" name="id_item_' + n + '">' +
            '<input type="hidden" id="ppo' + n + '" name="ppo' + n + '">' +
            '<input type="hidden" id="id_ppo' + n + '" name="id_ppo' + n + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + n + '" name="hidden_no_ref_spp_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + n + '" name="hidden_tgl_ref_' + n + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + n + '" name="hidden_kd_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_departemen_' + n + '" name="hidden_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + n + '" name="hidden_tgl_spp_' + n + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + n + '" name="hidden_kd_pt_' + n + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + n + '" name="hidden_nama_pt_' + n + '">' +
            '<input type="hidden" id="noppo' + n + '" name="noppo' + n + '">' +

            '</td>';


        var td_col_3 = '<td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_jenis_budget_' + n + '" name="cmb_jenis_budget_' + n + '" required>' +
            '<option value="">-- Pilih --</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="BIBITAN">BIBITAN</option>' +
            '<option value="LC & TANAM">LC & TANAM</option>' +
            '<option value="RAWAT">RAWAT</option>' +
            '<option value="PANEN">PANEN</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="PABRIK">PABRIK</option>' +
            '<option value="KANTOR">KANTOR</option>' +
            '<option value="Kendaraan">Kendaraan</option>' +
            '<option value="TBM">TBM</option>' +
            '</select>'; +
        '</td>';
        var td_col_ = '<td width="15%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control" id="brg' + row + '" name="brg' + row + '">' +
            '<span id="nama_brg_' + n + '"></span><br><span id="kode_brg_' + n + '" ></span>' +

            '<input type="hidden" class="form-control" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '"   />' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_merk_' + n + '" name="txt_merk_' + n + '" placeholder="Merk"  required />' +

            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control bg-light" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" readonly>' +
            '<input type="hidden" class="form-control" id="qty_' + n + '" name="qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +
            '<input type="hidden" class="form-control" id="qty2_' + n + '" name="qty2_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +

            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_harga_' + n + '" name="txt_harga_' + n + '" onkeyup="jumlah(' + n + ')" placeholder="Harga dalam Rupiah" size="15" required /><br />' +

            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_kurs_' + n + '" name="cmb_kurs_' + n + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_disc_' + n + '" name="txt_disc_' + n + '" size="10" value="0" onkeyup="jumlah(' + n + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_biaya_lain_' + n + '" name="txt_biaya_lain_' + n + '" size="15" value="0" onkeyup="jumlah(' + n + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="form-control" id="txt_keterangan_biaya_lain_' + n + '" name="txt_keterangan_biaya_lain_' + n + '" size="26" placeholder="Keterangan Biaya" rows="1"></textarea><br />' +

            '</td>'
        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" class="form-control" id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" size="26" placeholder="Keterangan" rows="1"></textarea><br />' +

            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control bg-light" id="txt_jumlah_' + n + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            '<label id="lbl_status_simpan_' + n + '"></label>' +
            '<input type="hidden" id="hidden_id_po_item_' + n + '" name="hidden_id_po_item_' + n + '">' +
            '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<span style="display:none;" id="habis_' + n + '" class="badge badge-danger">Habis</span>' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + n + ')" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah(' + n + ')" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +

            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);

        $('#txt_qty_' + n + ',#txt_harga_' + n + ',#txt_disc_' + n + ',#txt_biaya_lain_' + n + '').number(true, 0);
        hitungqty(n);
        jumlah(n);
        return true;
    }

    function pilihItem() {
        var rowcollection = $('#spp').DataTable().rows({
            selected: true,

        }).data().toArray();
        // console.log(rowcollection);
        $.each(rowcollection, function(index, elem) {
            var id = rowcollection[index][1];
            var no_spp = rowcollection[index][2];
            var no_ref_spp = rowcollection[index][4];
            var kodebar = rowcollection[index][6];
            // isSelected(id);
            if (isSelected(id)) {
                alert('data sudah di pilih');
                return false;
            }
            // console.log(id, no_spp, no_ref_spp, kodebar);
            data_spp_dipilih(id, no_spp, no_ref_spp, kodebar);
        });

    }

    var n = 1;
    // $('#tableDetailSPP tbody').on('click', 'tr', function () {
    function data_spp_dipilih(id, no_spp, no_ref_spp, kodebar) {
        // var dataClick = $('#spp').DataTable().row(this).data();
        // var no_spp = dataClick[1];
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/get_detail_spp'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'id': id,
                'no_spp': no_spp,
                'no_ref_spp': no_ref_spp,
                'kodebar': kodebar
            },
            success: function(data) {
                // console.log(data);
                $('#devisi').val(data[0].devisi);
                $('#hidden_devisi').val(data[0].devisi);
                // var n = 0;
                $.each(data[1], function(index) {
                    // if(index != 0){
                    if (n != 1) {
                        tambah_row(n);
                    }
                    console.log(data);


                    $('#id_ppo' + n).val(data[0].id);
                    $('#id_item_' + n).val(data[1][0].id);
                    $('#getspp' + n).val(data[1][0].noreftxt);
                    $('#hidden_kode_brg_' + n).val(data[1][0].kodebartxt);
                    $('#kode_brg_' + n).text(data[1][0].kodebartxt);
                    $('#hidden_nama_brg_' + n).val(data[1][0].nabar);
                    $('#nama_brg_' + n).text(data[1][0].nabar);
                    $('#hidden_satuan_brg_' + n).val(data[1][0].sat);
                    var qty = data[1][0].qty;
                    var qty2 = data[1][0].qty2;

                    // $('#txt_qty_' + n).val(data[1][0].qty);


                    if (qty2 != null) {
                        var hasil = qty - qty2;
                        $('#txt_qty_' + n).val(hasil);
                    } else {
                        $('#txt_qty_' + n).val(qty);
                        // $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).attr('disabled', '');
                    }

                    if (qty2 != null) {
                        var hasil = qty - qty2;
                        $('#txt_qty_' + n).val(hasil);
                        console.log(hasil);
                        if (hasil == 0) {

                            $('.div_form_2').find('#cmb_jenis_budget_' + n + ',#txt_merk_' + n + ', #txt_qty_' + n + ' ,#cmb_kurs_' + n + ',#txt_disc_' + n + ', #txt_harga_' + n + ',#txt_biaya_lain_' + n + ',txt_keterangan_biaya_lain_' + n + ',#txt_keterangan_biaya_lain_' + n + ',#txt_keterangan_rinci_' + n).attr('disabled', '');
                            $('#btn_simpan_' + n).hide();
                            $('#habis_' + n).show();
                        }
                    } else {
                        $('#txt_qty_' + n).val(qty);
                    }
                    $('#qty_' + n).val(data[1][0].qty);
                    $('#qty2_' + n).val(data[1][0].qty2);

                    $('#hidden_no_ref_spp_' + n).val(data[1][0].noreftxt);
                    $('#hidden_tgl_ref_' + n).val(data[0].tglref);
                    $('#hidden_kd_departemen_' + n).val(data[1][0].kodedept);
                    $('#hidden_departemen_' + n).val(data[1][0].namadept);
                    $('#hidden_tgl_spp_' + n).val(data[1][0].tglppo);
                    // $('#hidden_tgl_spp_' + n).val(dateToMDY(tglppo));
                    $('#hidden_kd_pt_' + n).val(data[1][0].kodept);
                    $('#hidden_nama_pt_' + n).val(data[1][0].namapt);

                    $('#noppo' + n).val(data[1][0].noppotxt);

                    // $('html, body').animate({
                    //     scrollTop: $("#tr_" + n).offset()
                    // }, 2000);

                    // $('#txt_qty_' + n).val(data[1][0].qty);
                    n++;
                    // $('#hidden_no_table').val(n);
                });
                $('#modal-spp').modal('hide');
                $('#txt_qty_' + n).focus();

            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function hapus_row(id) {
        var rowCount = $("#tableRinciPO td").closest("tr").length;
        if (rowCount != 1) {
            $('#tr_' + id).remove();
            totalBayar();
        } else {
            swal('Tidak Bisa dihapus, item PO tinggal 1');
        }
    }

    function totalBayar() {
        var no_po = $('#hidden_no_po').val();
        var no_ref_po = $('#hidden_no_ref_po').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/total_bayar'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                no_po: $('#hidden_no_po').val(),
                no_ref_po: $('#hidden_no_ref_po').val()
            },
            success: function(data) {
                // console.log(data);
                $('#ttl_pembayaran').val(data.totalbayar);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function number(row) {
        $('#txt_qty_' + row).number(true, 0);
        $('#txt_harga_' + row + ',#txt_disc_' + row + ',#txt_biaya_lain_' + row + ',#txt_jumlah_' + row).number(true, 2);
        row++;
    }

    // function saveRinciEnter(e, no) {
    //     if (e.keyCode == 13 && !e.shiftKey) {
    //         if ($('#hidden_proses_status_' + no).val() == 'insert') {
    //             saveRinci(no);
    //         } else if ($('#hidden_proses_status_' + no).val() == 'update') {
    //             updateRinci(no);
    //         }
    //     }
    // }

    function check_form_2() {
        if ($.trim($('#cmb_pilih_jenis_po').val()) != '' && $.trim($('#tgl_po').val()) != '' && $.trim($('#select2').val()) != '' && $.trim($('#cmb_status_bayar').val()) != '' && $.trim($('#tmpo_pembayaran').val()) != '' && $.trim($('#tmpo_pengiriman').val()) != '' && $.trim($('#lks_pengiriman').val()) != '' && $.trim($('#lks_pembelian').val()) != '' && $.trim($('#no_penawaran').val()) != '' && $.trim($('#txt_pemesan').val()) != '' && $.trim($('#ket_pengiriman').val()) != '' && $.trim($('#pph').val()) != '' && $.trim($('#ppn').val()) != '' && $.trim($('#keterangan').val()) != '' && $.trim($('#dikirim_kebun').val()) != '') {
            $('.div_form_2').show();
            // $('.div_form_3').find('input,textarea,select,button').removeAttr('disabled', '');
            // $('.div_form_3').find('input,textarea,select,button').prop('disabled', false);
        } else {
            // $('.div_form_3').find('input,textarea,select,button').prop('disabled', true);
            $('.div_form_2').hide();

        }
    }

    function modalSPP(id) {
        // $('#getspp').click(function() {
        $("#modal-spp").modal();
        // });
    }

    function hitungqty(id) {
        $('#txt_qty_' + id).keyup(function() {
            var a = $('#txt_qty_' + id).val();
            var b = $('#qty_' + id).val();
            var c = $('#qty2_' + id).val();
            var qty = Number(a);
            var qty2 = Number(b);
            var qty2n = Number(c);
            if (qty2n > 0) {
                var tmbh = qty2 - qty2n;
                if (qty > tmbh) {
                    swal('melebihi, inputan ke 2');
                    $('#txt_qty_' + id).val(tmbh);
                }
            } else {
                if (qty > qty2) {
                    console.log('benar');
                    // swal("Qty melebihi bataaaas!");
                    $('#txt_qty_' + id).val(qty2);
                } else {
                    console.log("sip dah");
                }
            }

        });
    }

    function jumlah(id) {
        $('#txt_qty_' + id + ',#txt_harga_' + id + ',#txt_disc_' + id + ',#txt_biaya_lain_' + id).on("keypress keyup blur", function(event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        // console.log('jumlahke', no_row)
        var qty = $('#txt_qty_' + id).val();
        console.log(qty)
        var harga = $('#txt_harga_' + id).val();
        var diskon = $('#txt_disc_' + id).val();
        if (diskon == '') {
            var disc = 0;
        } else {
            var disc = $('#txt_disc_' + id).val();
        }

        var biayalain = $('#txt_biaya_lain_' + id).val();
        if (biayalain == '') {
            var biaya_lain = 0;
        } else {
            var biaya_lain = $('#txt_biaya_lain_' + id).val();
        }

        var hargaDisc = (parseInt(harga) * parseInt(disc)) / 100;
        var hargaSetelahDisc = parseInt(harga) - parseInt(hargaDisc);

        var nilai = (parseFloat(qty) * parseFloat(hargaSetelahDisc)) + parseFloat(biaya_lain);
        // console.log(nilai);



        $('#txt_jumlah_' + id).val(nilai);
        var bilangan = nilai;
        var number_string = bilangan.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        $('#hasil_jumlah_' + id).html(rupiah);
    }



    function cekdataspp() {
        var refspp = $('#refspp').val();
        console.log(refspp);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/cekdataspp'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                refspp: refspp
            },
            success: function(data) {
                var a = data.data1;
                var b = data.data2;

                // // console.log(item);
                // console.log(a.jmlhSPP1, b.jmlhSPP2);
                if (a.jmlhSPP1 == 0) {
                    updatePPO();
                    // console.log('oke update ppo');
                } else {
                    console.log('field po belum 0 semua');
                }

            },
            error: function(request) {
                console.log(request.responseText);
            }
        });
    }

    function updatePPO(noref) {
        var refspp = $('#refspp').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/updatePPO'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                refspp: refspp
            },
            success: function(data) {
                console.log('oke field ppo berhasil diupdate', data);
            },
            error: function(request) {
                console.log(request.responseText);
            }
        });
    }

    //Simpan Data
    function simpan(id) {
        if (simpanBaru) {

            console.log('simpan pertama', id);

            noppo = $('#noppo' + id).val();


            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/save') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
                    if ($.trim($('#hidden_no_po').val()) == '') {
                        $('#lbl_spp_status').empty();
                        $('#lbl_spp_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
                    }
                },

                data: {
                    id_ppo: $('#id_ppo' + id).val(),
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    hidden_jenis_spp: $('#hidden_jenis_spp').val(),
                    txt_kode_supplier: $('#kd_supplier').val(),
                    txt_supplier: $('#txtsupplier').val(),
                    txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                    txt_pemesan: $('#txt_pemesan').val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    cmb_status_bayar: $('#cmb_status_bayar').val(),
                    txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                    txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                    txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                    cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                    txt_keterangan: $('#keterangan').val(),
                    txt_no_penawaran: $('#no_penawaran').val(),
                    cmb_ppn: $('#ppn').val(),
                    txt_total_pembayaran: $('#ttl_pembayaran').val(),
                    txt_ket_pengiriman: $('#ket_pengiriman').val(),
                    txt_uang_muka: $('#txt_uang_muka').val(),
                    txt_no_voucher: $('#txt_no_voucher').val(),
                    txt_no_spp: $('#noppo' + id).val(),
                    hidden_no_ref: $('#hidden_no_ref_spp_' + id).val(),
                    hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                    hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                    hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                    txt_qty: $('#txt_qty_' + id).val(),
                    txt_harga: $('#txt_harga_' + id).val(),
                    hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                    hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                    txt_merk: $('#txt_merk_' + id).val(),
                    txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                    txt_disc: $('#txt_disc_' + id).val(),
                    cmb_kurs: $('#cmb_kurs_' + id).val(),
                    txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                    txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                    hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                    hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                    id_item: $('#id_item_' + id).val(),
                    hidden_no_po: $('#hidden_no_po').val(),
                    devisi: $('#devisi').val(),
                    txt_jumlah: $('#txt_jumlah_' + id).val(),

                },
                success: function(data) {
                    // console.log(data, 'nah ini');
                    if (data.site_lebih_dari15 == 1) {
                        swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                        $('#lbl_status_simpan_' + id).empty();
                        $('#lbl_spp_status').empty();
                    } else {
                        $('#lbl_status_simpan_' + id).empty();
                        $.toast({
                            heading: 'Success',
                            text: 'Berhasil disimpan',
                            position: 'top-right',
                            icon: 'success',
                            showHideTransition: 'plain'
                            // reload: false
                        });
                        var refspp = data.refspp;
                        cekdataspp();
                        // sum_qty(noppo, id);

                        $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                        $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');

                        $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row_' + id).hide();
                        $('#btn_ubah_' + id).show();
                        $('#btn_hapus_' + id).show();
                        $('#cetak').show();
                        $('#h4_no_po').html('No. PO : ' + data.nopo);
                        $('#hidden_no_po').val(data.nopo);
                        $('#lbl_spp_status').empty();
                        $('#h4_no_ref_po').html('No. Ref PO : ' + data.noref);
                        $('#hidden_no_ref_po').val(data.noref);
                        $('#hidden_id_po').val(data.id_po);
                        $('#ref_spp').val(data.refspp);
                        var idItem = data.id_item;
                        // console.log(idItem);
                        // console.log(id);
                        $('#hidden_id_po_item_' + id).val(idItem);
                        totalBayar();

                        simpanBaru = false;
                    }
                }
            });
        }
        // simpan keduakalinya
        else {
            console.log('simpan setelah dengan keadaan po dibuat');

            // console.table({
            //     id_ppo: $('#id_ppo' + id).val(),
            //     hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
            //     hidden_departemen: $('#hidden_departemen_' + id).val(),
            //     cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
            //     txt_kode_supplier: $('#kd_supplier').val(),
            //     txt_supplier: $('#txtsupplier').val(),
            //     txt_kode_pemesan: $('#txt_kode_pemesan').val(),
            //     txt_pemesan: $('#txt_pemesan').val(),
            //     hidden_no_ref_po: $('#hidden_no_ref_po').val(),
            //     cmb_status_bayar: $('#cmb_status_bayar').val(),
            //     txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
            //     txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
            //     txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
            //     cmb_lokasi_pembelian: $('#lks_pembelian').val(),
            //     txt_keterangan: $('#keterangan').val(),
            //     txt_no_penawaran: $('#no_penawaran').val(),
            //     cmb_ppn: $('#ppn').val(),
            //     txt_total_pembayaran: $('#ttl_pembayaran').val(),
            //     txt_ket_pengiriman: $('#ket_pengiriman').val(),
            //     txt_uang_muka: $('#txt_uang_muka').val(),
            //     txt_no_voucher: $('#txt_no_voucher').val(),
            //     txt_no_spp: $('#noppo' + id).val(),
            //     hidden_no_ref: $('#hidden_no_ref_spp_' + id).val(),
            //     hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
            //     hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
            //     hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
            //     txt_qty: $('#txt_qty_' + id).val(),
            //     txt_harga: $('#txt_harga_' + id).val(),
            //     hidden_kodept: $('#hidden_kd_pt_' + id).val(),
            //     hidden_namapt: $('#hidden_nama_pt_' + id).val(),
            //     txt_merk: $('#txt_merk_' + id).val(),
            //     txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
            //     txt_disc: $('#txt_disc_' + id).val(),
            //     cmb_kurs: $('#cmb_kurs_' + id).val(),
            //     txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
            //     txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
            //     hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
            //     hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
            //     id_item: $('#id_item_' + id).val(),
            // });

            noppo = $('#noppo' + id).val();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/saveItem') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');

                },

                data: {
                    id_ppo: $('#id_ppo' + id).val(),
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    txt_kode_supplier: $('#kd_supplier').val(),
                    txt_supplier: $('#txtsupplier').val(),
                    txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                    txt_pemesan: $('#txt_pemesan').val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    cmb_status_bayar: $('#cmb_status_bayar').val(),
                    txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                    txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                    txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                    cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                    txt_keterangan: $('#keterangan').val(),
                    txt_no_penawaran: $('#no_penawaran').val(),
                    cmb_ppn: $('#ppn').val(),
                    txt_total_pembayaran: $('#ttl_pembayaran').val(),
                    txt_ket_pengiriman: $('#ket_pengiriman').val(),
                    txt_uang_muka: $('#txt_uang_muka').val(),
                    txt_no_voucher: $('#txt_no_voucher').val(),
                    txt_no_spp: $('#noppo' + id).val(),
                    hidden_no_ref: $('#hidden_no_ref_spp_' + id).val(),
                    hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                    hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                    hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                    txt_qty: $('#txt_qty_' + id).val(),
                    txt_harga: $('#txt_harga_' + id).val(),
                    hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                    hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                    txt_merk: $('#txt_merk_' + id).val(),
                    txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                    txt_disc: $('#txt_disc_' + id).val(),
                    cmb_kurs: $('#cmb_kurs_' + id).val(),
                    txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                    txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                    hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                    hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                    id_item: $('#id_item_' + id).val(),
                    hidden_no_po: $('#hidden_no_po').val(),
                    devisi: $('#devisi').val(),
                    txt_jumlah: $('#txt_jumlah_' + id).val(),

                },

                success: function(data) {
                    if ((data.site_lebih_dari15 == 1)) {
                        swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                        $('#lbl_status_simpan_' + id).empty();
                        $('#lbl_spp_status').empty();
                    } else {
                        $('#lbl_status_simpan_' + id).empty();
                        $.toast({
                            heading: 'Success',
                            text: 'Berhasil disimpan',
                            position: 'top-right',
                            icon: 'success',
                            showHideTransition: 'plain'
                            // reload: false
                        });
                        var refspp = data.refspp;
                        cekdataspp();
                        // sum_qty(noppo, id);

                        $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                        $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');
                        $('.div_form_2').find('input,textarea,select').attr('disabled', '');
                        $('.div_form_2').find('input,textarea,select').addClass('form-control bg-light');

                        $('#tr_' + id).find('input,textarea,select').prop('disabled', true);
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row_' + id).hide();
                        $('#btn_ubah_' + id).show();
                        $('#btn_hapus_' + id).show();
                        // console.log(response);

                        $('#h4_no_po').html('No. PO : ' + data.nopo);
                        $('#hidden_no_po').val(data.nopo);
                        $('#lbl_spp_status').empty();
                        $('#h4_no_ref_po').html('No. Ref PO : ' + data.noref);
                        $('#hidden_no_ref_po').val(data.noref);
                        $('#ref_spp').val(data.refspp);
                        // $('#hidden_id_po').val(data.id_po);
                        $('#hidden_id_po_item_' + id).val(data.id_item);
                        totalBayar();

                        // simpanBaru = false;
                    }
                }
            });

        }

    }

    // function sum_qty(noppo, id) {
    //     $.ajax({
    //         type: "POST",
    //         url: "<?php echo site_url('Po/sum_ppo'); ?>",
    //         dataType: "JSON",
    //         beforeSend: function() {},

    //         data: {
    //             'noppo': noppo,
    //         },
    //         success: function(data) {
    //             console.log(data);
    //         }
    //     });
    // }

    function update(id) {

        console.log($('#hidden_id_po_item_' + id).val() + 'ni id asve');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Po/updateItem') ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + id).empty();
                $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
            },
            data: {
                // hidden_id_po_item: $('#hidden_id_po_item_' + id).val(),
                // hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                // hidden_departemen: $('#hidden_departemen_' + id).val(),
                // cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                // txt_kode_supplier: $('#kd_supplier').val(),
                // txt_supplier: $('#txtsupplier').val(),
                // txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                // txt_pemesan: $('#txt_pemesan').val(),
                // cmb_status_bayar: $('#cmb_status_bayar').val(),
                // txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                // txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                // txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                // cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                // txt_keterangan: $('#keterangan').val(),
                // txt_no_penawaran: $('#no_penawaran').val(),
                // cmb_ppn: $('#ppn').val(),
                // txt_total_pembayaran: $('#ttl_pembayaran').val(),
                // txt_ket_pengiriman: $('#ket_pengiriman').val(),
                // txt_uang_muka: $('#txt_uang_muka').val(),
                // txt_no_voucher: $('#txt_no_voucher').val(),
                // hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                // hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                // hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                // hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                // hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                // hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                // txt_no_spp: $('#noppo' + id).val(),
                hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                hidden_no_ref_spp: $('#hidden_no_ref_spp_' + id).val(),
                txt_qty: $('#txt_qty_' + id).val(),
                txt_harga: $('#txt_harga_' + id).val(),
                txt_merk: $('#txt_merk_' + id).val(),
                txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                txt_disc: $('#txt_disc_' + id).val(),
                cmb_kurs: $('#cmb_kurs_' + id).val(),
                txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                id_item: $('#hidden_id_po_item_' + id).val(),
                txt_jumlah: $('#txt_jumlah_' + id).val(),
            },
            success: function(data) {
                console.log(data + 'afterupdate');
                if (data == 'site15') {
                    swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                    $('#lbl_status_simpan_' + id).empty();
                } else {
                    // $('#lbl_status_simpan_1' + id).empty();
                    // $('#lbl_status_simpan_1' + id).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil diupdate</label>');

                    $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                    $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');
                    $('#lbl_status_simpan_' + id).empty();
                    $.toast({
                        heading: 'Success',
                        text: 'Berhasil diupdate',
                        position: 'top-right',
                        stack: true,
                        icon: 'success'
                    });
                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    // $('#tableRinciPO tbody #tr_' + ' td').find('#btn_simpan_' + ',#txt_no_spp_').attr('disabled', '');
                    $('#btn_simpan_' + id).hide();
                    $('#btn_hapus_row' + id).hide();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();
                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    totalBayar();
                }
            }
        });
    }

    function ubah(id) {
        // $('#tr_' + id).find('input,textarea,select').removeAttr('disabled', '');
        // $('#tr_' + id).find('input,textarea,select').removeClass('bg-light');
        $('.div_form_2').find('#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).removeClass('bg-light');
        $('.div_form_2').find('#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).removeAttr('disabled', '');
        $('.div_form_3').find('#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).removeClass('bg-light');
        $('.div_form_3').find('#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).removeAttr('disabled', '');

        $('#btn_ubah_' + id).hide();
        $('#btn_hapus_' + id).hide();
        $('#btn_update_' + id).show();
        $('#btn_cancel_update_' + id).show();
    }

    function cancleUpdate(id) {
        // console.log('cancelke' + id);
        if (cancleUpdatePO) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/cancel_ubah_rinci') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
                },
                data: {
                    id_po: $('#hidden_id_po').val(),
                    id_po_item: $('#hidden_id_po_item_' + id).val(),
                },
                success: function(data) {
                    // console.log(data);
                    // var po = data.data_po;
                    var item = data.data_item_po;
                    // console.log(item);

                    $('#cmb_jenis_budget_' + id).val(item.grup);
                    $('#txt_merk_' + id).val(item.merek);
                    $('#txt_qty_' + id).val(item.qty);
                    $('#txt_harga_' + id).val(item.harga);
                    $('#txt_disc_' + id).val(item.disc);
                    $('#txt_biaya_lain_' + id).val(item.JUMLAHBPO);
                    $('#txt_keterangan_biaya_lain_' + id).val(item.nama_bebanbpo);
                    $('#txt_keterangan_rinci_' + id).val(item.ket);

                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();
                    // $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                    // $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');
                    // $('.div_form_2').find('input,textarea,select').attr('disabled', '');
                    // $('.div_form_2').find('input,textarea,select').addClass('form-control bg-light');

                    // $('#tableRinciPO').find('input,textarea,select').attr('disabled', '');
                    // $('#tableRinciPO').find('input,textarea,select').addClass('form-control bg-light');
                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_' + id).empty();
                    $.toast({
                        position: 'top-right',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });

                    // $('#lbl_status_simpan_1' + id).empty();
                    // $('#lbl_status_simpan_1' + id).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');
                    jumlah(id);
                    totalBayar();
                    cancleUpdatePO = false;
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/cancel_ubah_rinci') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
                },
                data: {
                    id_po: $('#hidden_id_po').val(),
                    id_po_item: $('#hidden_id_po_item_' + id).val(),
                },
                success: function(data) {
                    // console.log(data);
                    // var po = data.data_po;
                    var item = data.data_item_po;

                    $('#cmb_jenis_budget_' + id).val(item.grup);
                    $('#txt_merk_' + id).val(item.merek);
                    $('#txt_qty_' + id).val(item.qty);
                    $('#txt_harga_' + id).val(item.harga);
                    $('#txt_disc_' + id).val(item.disc);
                    $('#txt_biaya_lain_' + id).val(item.JUMLAHBPO);
                    $('#txt_keterangan_biaya_lain_' + id).val(item.nama_bebanbpo);
                    $('#txt_keterangan_rinci_' + id).val(item.ket);

                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();

                    // $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                    // $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');

                    // $('.div_form_2').find('input,textarea,select').attr('disabled', '');
                    // $('.div_form_2').find('input,textarea,select').addClass('form-control bg-light');
                    // $('#tableRinciPO').find('input,textarea,select').attr('disabled', '');
                    // $('#tableRinciPO').find('input,textarea,select').addClass('form-control bg-light');

                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_' + id).empty();
                    $.toast({
                        position: 'top-right',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });
                    // $('#lbl_status_simpan_1' + id).empty();
                    // $('#lbl_status_simpan_1' + id).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');
                    jumlah(id);
                    totalBayar();
                    cancleUpdatePO = false;
                }
            });
        }

    }

    function hapusRinci(id) {
        $('#hidden_no_delete').val(id);
        $('#modalKonfirmasiHapus').modal('show');
        // if (id == 1) {
        //     deleteData();
        // } else {
        // }
    }

    function deletePO(no) {
        var nopo = $('#hidden_no_po').val();

        var id_po = $('#hidden_id_po').val();
        var id_ppo = $('#id_item_' + no).val();
        var hidden_no_ref_spp = $('#hidden_no_ref_spp_' + no).val();
        // console.log(nopo);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Po/deletePO') ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus PO</label>');
            },
            data: {
                nopo: $('#hidden_no_po').val(),
                norefpo: $('#hidden_no_ref_po').val(),
                hidden_id_po_item: $('#hidden_id_po_item_' + no).val(),
                id_item: $('#id_item_' + no).val(),
                hidden_no_ref_spp: $('#hidden_no_ref_spp_' + no).val(),
            },
            success: function(data) {
                // console.log(data);
                location.reload();
            }
        });
    }

    function deleteData() {
        // console.log("Okeee");
        var no = $('#hidden_no_delete').val();
        // var id_item = $('#hidden_id_po_item_' + no).val();
        var id_po = $('#hidden_id_po').val();
        var id_ppo = $('#id_item_' + no).val();
        // var no_po = $('#hidden_no_po').val();

        // console.log(id_item);
        // console.log(id_ppo);
        $('#modalKonfirmasiHapus').modal('hide');


        var lokasi = $('#lokasi').val();

        switch (lokasi) {
            case 'HO':

                var rowCount = $("#tableRinciPO td").closest("tr").length;
                break;
            case 'RO':
            case 'SITE':
            case 'PKS':

                var rowCount = $("#tableItemPO td").closest("tr").length;

                break;
            default:
                break;
        }

        if (rowCount != 1) {

            // Swal.fire({
            //     title: 'Apakah anda yakin?',
            //     text: "PO akan dihapus",
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Ya Hapus!'
            // }).then((result) => {
            //     if (result.value) {

            //     }
            // });
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Po/hapus_rinci'); ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus Item</label>');
                },

                data: {
                    hidden_id_po_item: $('#hidden_id_po_item_' + no).val(),
                    id_item: $('#id_item_' + no).val(),
                    hidden_no_ref_spp: $('#hidden_no_ref_spp_' + no).val(),
                    // hidden_no_ref_spp: $('#hidden_no_ref_spp_' + no).val(),
                    // hidden_kode_brg: $('#hidden_kode_brg_1' + no).val()
                },
                success: function(data) {
                    $('#tr_' + no).remove();
                    swal('Data Berhasil dihapus');
                    totalBayar();
                    // $('#btn_konfirmasi_terima_' + index).removeAttr('disabled');
                    // $('.modal-success').modal('show');
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });

        } else {
            // swal('Tidak Bisa dihapus, item PO tinggal 1');
            Swal.fire({
                title: 'Item PO Tinggal 1',
                text: "Yakin akan menghapus PO ini?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
                if (result.value) {
                    // var no_po = $('#hidden_no_po').val();
                    deletePO(no);
                }
            });

        }
    }

    function validasi(id) {
        var jnpo = $('#cmb_pilih_jenis_po').val();
        var tglpo = $('#tgl_po').val();
        var supplier = $('#select2').val();
        var status = $('#cmb_status_bayar').val();
        var tm_pembayaran = $('#tmpo_pembayaran').val();
        var tm_pengiriman = $('#tmpo_pengiriman').val();
        var lks_pengiriman = $('#lks_pengiriman').val();
        var lks_pembelian = $('#lks_pembelian').val();
        var no_penawaran = $('#no_penawaran').val();
        var ket_pengiriman = $('#ket_pengiriman').val();
        var pph = $('#pph').val();
        var ppn = $('#ppn').val();
        var keterangan = $('#keterangan').val();
        var jnSPP = $('#hidden_jenis_spp').val();
        var lokasi = $('#status_lokasi').val();
        var devisi = $('#devisi').val();
        var biayalain = $('#txt_biaya_lain_' + id).val();
        var jnbudget = $('#cmb_jenis_budget_' + id).val();
        var merk = $('#txt_merk_' + id).val();
        var hrg = $('#txt_harga_' + id).val();
        var ketBiaya = $('#txt_keterangan_biaya_lain_' + id).val();
        var ketRinci = $('#txt_keterangan_rinci_' + id).val();
        var jml = $('#txt_jumlah_' + id).val();
        var getspp = $('#getspp' + id).val();


        if (!jnpo) {
            toast('Jenis PO is required!');
            $('#cmb_pilih_jenis_po').css({
                "background": "#FFCECE"
            });

        } else if (!devisi) {
            toast('Devisi PO is required!');
            $('#devisi').css({
                "background": "#FFCECE"
            });
        } else if (!tglpo) {
            toast('Jenis PO is required!');
            $('#cmb_pilih_jenis_po').css({
                "background": "#FFCECE"
            });

        } else if (!supplier) {
            toast('Supplier is required!');
            $('#select2').css({
                "background": "#FFCECE"
            });
        } else if (!status) {
            toast('Status Bayar is required!');
            $('#cmb_status_bayar').css({
                "background": "#FFCECE"
            });
        } else if (!tm_pembayaran) {
            toast('Tempo Pembayaran is required!');
            $('#tmpo_pembayaran').css({
                "background": "#FFCECE"
            });
        } else if (!tm_pengiriman) {
            toast('Tempo Pengiriman is required!');
            $('#tmpo_pengiriman').css({
                "background": "#FFCECE"
            });
        } else if (!lks_pembelian) {
            toast('Lokasi Pembelian is required!');
            $('#lks_pembelian').css({
                "background": "#FFCECE"
            });
        } else if (!lks_pengiriman) {
            toast('Lokasi Pengiriman is required!');
            $('#lks_pengiriman').css({
                "background": "#FFCECE"
            });
        } else if (!no_penawaran) {
            toast('No Penawaran is required!');
            $('#no_penawaran').css({
                "background": "#FFCECE"
            });
        } else if (!ket_pengiriman) {
            toast('Keterangan Pengiriman is required!');
            $('#ket_pengiriman').css({
                "background": "#FFCECE",
            });
        } else if (!pph) {
            toast('PPH is required!');
            $('#pph').css({
                "background": "#FFCECE"
            });
        } else if (!ppn) {
            toast('PPN is required!');
            $('#ppn').css({
                "background": "#FFCECE"
            });
        } else if (!keterangan) {
            toast('Keterangan is required!');
            $('#keterangan').css({
                "background": "#FFCECE"
            });
        } else if (!getspp) {
            toast('SPP is required!');
            $('#getspp' + id).css({
                "background": "#FFCECE"
            });
        } else if (!merk) {
            toast('Merk is required!');
            $('#txt_merk_' + id).css({
                "background": "#FFCECE"
            });
        } else if (!hrg) {
            toast('Harga is required!');
            $('#txt_harga_' + id).css({
                "background": "#FFCECE"
            });
        } else if (!ketRinci) {
            toast('Keterangan Rinci is required!');
            $('#txt_keterangan_rinci_' + id).css({
                "background": "#FFCECE"
            });
        } else if (!devisi) {
            toast('Keterangan Rinci is required!');
            $('#devisi').css({
                "background": "#FFCECE"
            });
        } else if (jml > 1500000 && lokasi != "HO") {
            toast('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
            $('#txt_jumlah_' + id).css({
                "background": "#FFCECE"
            });
        } else if (biayalain > 0 && !ketBiaya) {


            toast('Keterangan Biaya is required!');
            $('#txt_keterangan_biaya_lain_' + id).css({
                "background": "#FFCECE"
            });

        } else {
            simpan(id);
        }

        return false;

    }

    function toast(v_text) {
        $.toast({
            position: 'top-right',
            heading: 'Failed!',
            text: v_text + ' ',
            icon: 'error',
            loader: false
        });
    }
</script>