<div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title">BPB</h4>
                <p class="sub-header">
                    Input Bon Permintaan Barang
                </p>
                <div class="row">
                    <div class="form-group row col-md-3">
                        <label class="control-label col-md col-sm-3 col-xs-12">Untuk keperluan <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <textarea class="resizable_textarea form-control" rows="1" id="txt_untuk_keperluan" name="txt_untuk_keperluan" placeholder="Untuk keperluan" required="" autocomplite="off"></textarea>
                        </div>
                    </div>
                    <div class="form-group row col-md-3 ml-1">
                        <label class="control-label col-md col-sm-3 col-xs-12">Bagian<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="cmb_bagian" name="cmb_bagian" required="" onchange="cek_tm_tbm(1)">
                                <option value="" selected>-- Pilih --</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-md-3 ml-4">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tgl BPB<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input id="txt_tgl_bpb" name="txt_tgl_bpb" class="form-control bg-light" required="required" type="date" value="<?= date('Y-m-d') ?>" autocomplite="off" readonly>
                        </div>
                    </div>

                    <div class="form-group row col-md-3 ml-1">
                        <label class="control-label col-md col-sm-3 col-xs-12">Alokasi Estate <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="cmb_alokasi_est" name="cmb_alokasi_est" required="">
                                <option value="" selected>-- Pilih --</option>
                                <option value="03">03</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No BPB <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_no_bpb" name="txt_no_bpb" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No. BPB">
											</div>
										</div> -->

                </div>
                <hr class="mt-0 mb-2">
                <div class="">
                    <label id="lbl_bpb_status" name="lbl_bpb_status">No. BPB : ... &nbsp; No. Ref. BPB : ...</label>
                    <h4 id="h4_no_bpb" name="h4_no_bpb"></h4>
                    <h4 id="h4_no_ref_bpb" name="h4_no_ref_bpb"></h4>
                    <input type="hidden" id="hidden_no_bpb" name="hidden_no_bpb">
                    <input type="hidden" id="hidden_no_ref_bpb" name="hidden_no_ref_bpb">
                    <input type="hidden" id="hidden_id_bpb" name="hidden_id_bpb">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="tableRinciBPB" width="150%">
                            <thead>
                                <tr>
                                    <th width="3%"></th>
                                    <th width="10%">TM/TBM</th>
                                    <th width="10%">Afd/Unit</th>
                                    <th width="8%">Blok/Sub</th>
                                    <th width="10%">Thn Tanam</th>
                                    <th width="20%">Bahan</th>
                                    <th width="25%">Account Beban</th>
                                    <th width="25%">Barang</th>
                                    <th width="8%">Qty Diminta</th>
                                    <!-- <th width="8%">Qty Disetujui</th> -->
                                    <th width="25%">Keterangan</th>
                                    <th width="3%"></th>
                                </tr>
                            </thead>
                            <tbody id="tbody_rincian" name="tbody_rincian">
                                <tr id="tr_1">
                                    <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                        <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                        <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                        <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                    </td>
                                    <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                        <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                            <!-- TM/TBM -->
                                            <select class="form-control set_strip_cmb cmb_tm_tbm" id="cmb_tm_tbm_1" name="cmb_tm_tbm_1" onchange="cmb_afd_unit(1)">
                                                <option value="-">-</option>
                                                <!-- <option value=""></option> -->
                                                <option value="TM">TM</option>
                                                <option value="TBM">TBM</option>
                                                <option value="LANDCLEARING">LANDCLEARING</option>
                                                <option value="PEMBIBITAN">PEMBIBITAN</option> ->
                                            </select>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                            <!-- AFD/UNIT -->
                                            <select class="form-control set_strip_cmb" id="cmb_afd_unit_1" name="cmb_afd_unit_1" onchange="cmb_blok_sub(1)">
                                                <option value="-">-</option>
                                            </select>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <!-- BLOK/SUB -->
                                            <select class="form-control set_strip_cmb" id="cmb_blok_sub_1" name="cmb_blok_sub_1" onchange="cmb_tahun_tanam(1)">
                                                <option value="-">-</option>
                                            </select>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <!-- Tahun Tanam -->
                                            <select class="form-control set_strip_cmb" id="cmb_tahun_tanam_1" name="cmb_tahun_tanam_1" onchange="cmb_bahan(1)">
                                                <option value="-">-</option>
                                            </select>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <!-- Bahan -->
                                            <select class="form-control set_strip_cmb" id="cmb_bahan_1" name="cmb_bahan_1">
                                                <option value="-">-</option>
                                            </select>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;  padding-top: 2px; padding-bottom: 0;">
                                            <!-- Account Beban -->
                                            <input type="text" class="form-control" id="txt_account_beban_1" name="txt_account_beban_1" placeholder="Account Beban" onfocus="pilihModalAccBeban('1')" autocomplite="off">
                                            <label class="control-label" id="lbl_no_acc_1"></label>
                                            <label class="control-label" id="lbl_nama_acc_1"></label>
                                            <input type="hidden" id="hidden_no_acc_1" name="hidden_no_acc_1">
                                            <input type="hidden" id="hidden_nama_acc_1" name="hidden_nama_acc_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                            <!-- Barang -->
                                            <input type="text" class="form-control" id="txt_barang_1" name="txt_barang_1" onfocus="cari_barang('1')" placeholder="Barang" autocomplite="off">
                                            <label id="lbl_kode_barang_1"></label>
                                            <label id="lbl_nama_barang_1"></label>
                                            <input type="hidden" id="hidden_kode_barang_1" name="hidden_kode_barang_1">
                                            <input type="hidden" id="hidden_nama_barang_1" name="hidden_nama_barang_1">
                                            <input type="hidden" id="hidden_grup_barang_1" name="hidden_grup_barang_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                            <!-- Qty Diminta & Stok di Tgl ini & Satuan -->
                                            <input type="text" class="form-control currencyduadigit" id="txt_qty_diminta_1" name="txt_qty_diminta_1" placeholder="Qty Diminta" autocomplite="off">

                                        </td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                        <!-- <td>
											<!- Qty Disetujui ->
											<input type="text" class="form-control" id="txt_qty_disetujui_1" name="txt_qty_disetujui_1" placeholder="Qty Disetujui">
										</td> -->
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                            <!-- Keterangan -->
                                            <textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" rows="1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'1')" autocomplite="off"></textarea>
                                            <label id="lbl_status_simpan_1"></label>
                                            <input type="hidden" id="hidden_id_bpbitem_1" name="hidden_id_bpbitem_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
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
            </div>



        </div>
    </div> <!-- end row-->


</div>