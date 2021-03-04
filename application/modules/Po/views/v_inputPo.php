<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h4 class="page-title"><?= $title; ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Jenis PO *</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Jenis PO" autocomplite="off" required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Tgl. PO *</label>
                                <div class="col-8">
                                    <input type="date" class="form-control bg-light" id="inputEmail3" value="<?= date('Y-m-d') ?>" placeholder="tgl PO" autocomplite="off" required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Supplier *</label>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Kode Supplier" autocomplite="off" required>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control bg-light" id="inputEmail3" placeholder="Supplier" autocomplite="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-4 col-form-label">Status Bayar*</label>
                                <div class="col-3">
                                    <select class="form-control" id="example-select">
                                        <option value="1">Cash</option>
                                        <option value="2">Kredit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Tempo Pembayaran*</label>
                                <div class="col-2">
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control" placeholder="0" autocomplite="off" required><span>Hari</span>
                                </div>
                                <label class="col-4 col-form-label">Tempo Pengiriman *</label>
                                <div class="col-2">
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control" placeholder="0" autocomplite="off" required><span>Hari</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group row mb-1">
                                <label class="col-5 col-form-label">Lokasi Pengiriman *</label>
                                <div class="col-7">
                                    <input class="form-control" type="text" id="inputEmail3" placeholder="Lokasi Pengiriman" autocomplite="off" required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-5 col-form-label">Lokasi Pembelian *</label>
                                <div class="col-4">
                                    <select class="form-control" id="example-select" required>
                                        <option value="1">-- Pilih --</option>
                                        <option value="2">RO</option>
                                        <option value="3">SITE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-5 col-form-label">No. Penawaran *</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="No Penawaran" autocomplite="off" required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-5 col-form-label">Pemesan *</label>
                                <div class="col-7">
                                    <input type="text" class="form-control bg-light" id="inputEmail3" value="USER SITE" autocomplite="off" readonly required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-5 col-form-label">Keterangan Pengiriman</label>
                                <div class="col-7">
                                    <textarea class="form-control" id="inputEmail3" placeholder="Keterangan Pengiriman" autocomplite="off"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">PPH *</label>
                                <div class="col-6">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="PPH" autocomplite="off" value="0" required>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label" required>PPN *</label>
                                <div class="col-3">
                                    <select class="form-control" id="tes" required>
                                        <option value="1">N</option>
                                        <option value="2">Y</option>
                                        <option value="3">X</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Keterangan</label>
                                <div class="col-8">
                                    <textarea class="form-control" id="inputEmail3" placeholder="Keterangan" autocomplite="off"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Dikirim ke Kebun*</label>
                                <div class="col-3">
                                    <select class="form-control" id="tes" required>
                                        <option value="1">N</option>
                                        <option value="2">Y</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-4 col-form-label">Total Pembayaran</label>
                                <div class="col-8">
                                    <input type="text" class="form-control bg-light" id="inputEmail3" placeholder="Total Pembayaran" autocomplite="off" readonly required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->

                    <hr>
                    <label id="lbl_spp_status" name="lbl_spp_status">No. PO : ... No. Ref SPP : ...</label>
                    <h4 id="h4_no_po" name="h4_no_po"></h4>
                    <h4 id="h4_no_ref_po" name="h4_no_ref_po"></h4>
                    <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                    <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                    <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                    <div class="table-responsive">
                        <table id="tableRinciPO" class="table table-striped table-bordered" width="150%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>SPP</th>
                                    <th>Jenis Budget</th>
                                    <th>Item Barang</th>
                                    <th>Qty</th>

                                    <th>Harga</th>
                                    <th>Kurs</th>
                                    <th>Disc <span>%</span></th>
                                    <th>Biaya Lainnya</th>
                                    <th>Ket. Biaya</th>

                                    <th>Keterangan</th>
                                    <th>Jumlah Rp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_rincian" name="tbody_rincian">
                                <tr id="tr_1">
                                    <td width="3%">
                                        <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                        <!-- <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button> -->
                                        <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalDataSPP('1')"></button>
                                        <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('1')"></button>
                                    </td>
                                    <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                        <td width="14%">
                                            <input type="text" class="form-control" id="txt_no_spp_1" name="txt_no_spp_1" placeholder="Cari SPP" onfocus="pilihModalDataSPP('1')" readonly required=""><br />
                                            <input type="hidden" id="hidden_no_ref_spp_1" name="hidden_no_ref_spp_1">
                                            <input type="hidden" id="hidden_tgl_ref_1" name="hidden_tgl_ref_1">
                                            <input type="hidden" id="hidden_kd_departemen_1" name="hidden_kd_departemen_1">
                                            <input type="hidden" id="hidden_departemen_1" name="hidden_departemen_1">
                                            <input type="hidden" id="hidden_tgl_spp_1" name="hidden_tgl_spp_1">

                                            <!-- <label id="lbl_no_ref_spp_1">Ref SPP : ...</label><br />
											<label id="lbl_tgl_ref_1">Tgl. Ref : ...</label><br />
											<label id="lbl_departemen_1">Departemen : ...</label><br />
											<label id="lbl_tgl_spp_1">Tgl SPP : ...</label><br /> -->
                                            <!-- <label class="control-label" id="lbl_jenis_budget_1">Jenis Budget : </label> -->

                                        </td>
                                        <td width="10%">
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
                                        </td>
                                        <td width="13%">
                                            <input type="text" class="form-control" id="txt_merk_1" name="txt_merk_1" placeholder="Merk" required>
                                            <label id="lbl_kode_brg_1">Kode : ... </label><br />
                                            <label id="lbl_nama_brg_1">Nama Barang : ...</label><br />

                                            <input type="hidden" id="hidden_kode_brg_1" name="hidden_kode_brg_1">
                                            <input type="hidden" id="hidden_nama_brg_1" name="hidden_nama_brg_1">
                                        </td>
                                        <td width="7%">
                                            <input type="text" class="form-control" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="8" onkeyup="jumlah('1')" required /><br />
                                            <label id="lbl_satuan_brg_1">Satuan : ...</label><br />

                                            <!-- <input type="text" id="hidden_stok_1" name="hidden_stok_1"> -->
                                            <input type="hidden" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1">
                                        </td>
                                        <td width="10%">
                                            <input type="text" class="form-control" id="txt_harga_1" name="txt_harga_1" size="15" value="0" onkeyup="jumlah('1')" placeholder="Harga dalam Rupiah" required /><br />
                                        </td>
                                        <td width="10%">
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
                                        <td width="10%">
                                            <input type="text" class="form-control" id="txt_disc_1" name="txt_disc_1" size="10" value="0" onkeyup="jumlah('1')" placeholder="Disc" />
                                        </td>
                                        <td width="10%">
                                            <input type="text" class="form-control" id="txt_biaya_lain_1" name="txt_biaya_lain_1" value="0" onkeyup="jumlah('1')" placeholder="Biaya Lain" size="15" required /><br />
                                        </td>
                                        <td width="12%">
                                            <textarea class="resizable_textarea form-control" size="10" id="txt_keterangan_biaya_lain_1" name="txt_keterangan_biaya_lain_1" placeholder="Keterangan Biaya"></textarea>
                                        </td>

                                        <td width="12%">
                                            <textarea class="resizable_textarea form-control" id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,1)"></textarea><br />
                                            <label id="lbl_status_simpan_1"></label>
                                            <input type="hidden" id="hidden_id_po_item_1" name="hidden_id_po_item_1">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="txt_jumlah_1" name="txt_jumlah_1" size="15" placeholder="Jumlah" readonly required />
                                        </td>
                                        <td width="3%">
                                            <button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
                                            <button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
                                            <button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('1')"></button>
                                            <button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
                                            <button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
                                        </td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>

</div>
<script>
    $('#tes').change(function() {
        var id = this.value;
        console.log(id);
    })
</script>