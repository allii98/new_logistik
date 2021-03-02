<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control border-0" id="dash-daterange">
                            <div class="input-group-append">
                                <span class="input-group-text bg-secondary border-secondary text-white">
                                    <i class="mdi mdi-calendar-range"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-secondary btn-sm ml-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-secondary btn-sm ml-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h2 class="page-title"><?= $title ?></h2>
        </div>
    </div>
</div>
<!-- end page title -->

<!-- start row-->
<div class="row justify-content-center">
    <div class="col-md col-xl-3">
        <div class="widget-rounded-circle card-box">
            <h4 class="header-title mb-3">Laporan Penerimaan Barang</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12">Tgl Terima <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <input id="txt_tgl_terima" name="txt_tgl_terima" class="form-control" required="required" type="date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12">No. Pengantar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="txt_no_pengantar" name="txt_no_pengantar" class="form-control" required="required" type="text" placeholder="No. Pengantar">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12">No. PO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 mb-1">
                            <input id="txt_no_po" name="txt_no_po" class="form-control" required="required" type="text" onfocus="pilihModalDataPO()" placeholder="No. PO">
                        </div>
                        <div class="col-md-6">
                            <input id="txt_ref_po" name="txt_ref_po" class="form-control" type="text" placeholder="Ref. PO" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12">Supplier <span class="required">*</span>
                        </label>
                        <div class="col-md-6 mb-1">
                            <input id="txt_kd_supplier" name="txt_kd_supplier" class="form-control" required="required" type="text" placeholder="Kode Supplier" readonly>
                        </div>
                        <div class="col-md-6">
                            <input id="txt_supplier" name="txt_supplier" class="form-control" required="required" type="text" placeholder="Supplier" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Input <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <input id="txt_tgl_input" name="txt_tgl_input" class="form-control" required="required" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Gudang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="txt_lokasi_gudang" name="txt_lokasi_gudang" class="form-control" required="required" type="text" placeholder="Lokasi Gudang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl. PO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="txt_tgl_po" name="txt_tgl_po" class="form-control" required="required" type="text" placeholder="Tgl. PO" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="resizable_textarea form-control" id="txt_ket_pengiriman" name="txt_ket_pengiriman" placeholder="Keterangan" readonly="">-</textarea>
                        </div>
                    </div>
                </div>



            </div>
        </div> <!-- end row-->
    </div> <!-- end widget-rounded-circle-->
</div>
<!-- end row-->


<!-- ROW No. LPB : ...   No. Ref. LPB : ... -->
<div class="row">
    <div class="col-md col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <label id="lbl_lpb_status" name="lbl_lpb_status">No. LPB : ... &nbsp; No. Ref. LPB : ...</label>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tableRinciLPB" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th width="20%">Kd. Barang</th>
                                <th>Nama Barang</th>
                                <th width="10%">Qty</th>
                                <th width="10%">Satuan</th>
                                <th width="30%">Ket</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="tbody_rincian" name="tbody_rincian">
                            <tr id="tr_1">
                                <td>
                                    <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                    <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                    <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                </td>
                                <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                    <td>
                                        <input type="text" class="form-control" id="txt_kode_barang_1" name="txt_kode_barang_1" placeholder="Kode Barang" onfocus="pilihModalBarang('1')" readonly>
                                        <label>
                                            <input type="checkbox" id="chk_asset_1" name="chk_asset_1" value=""> Asset ?
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="txt_nama_brg_1" name="txt_nama_brg_1" placeholder="Nama Barang" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty">
                                        <label id="lbl_qty_po_1">Qty PO : </label>
                                        <label id="lbl_sisa_qty_1">Sisa Qty : </label>

                                        <input type="hidden" id="hidden_qty_po_1" name="hidden_qty_po_1">
                                        <input type="hidden" id="hidden_sisa_qty_1" name="hidden_sisa_qty_1">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="txt_satuan_1" name="txt_satuan_1" placeholder="Satuan" readonly>
                                        <label id="lbl_grup_1" name="lbl_grup_1">Grup : -</label>

                                        <input type="hidden" id="hidden_grup_1" name="hidden_grup_1">
                                    </td>
                                    <td>
                                        <textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,1)"></textarea>
                                        <label id="lbl_status_simpan_1"></label>
                                        <input type="hidden" id="hidden_id_masuk_item_1" name="hidden_id_masuk_item_1">
                                    </td>
                                    <td>
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
            </div>
        </div> <!-- end row-->
    </div> <!-- end widget-rounded-circle-->
</div> <!-- end col-->




</div> <!-- container -->