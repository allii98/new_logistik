<div class="container-fluid">
    <!-- start row-->
    <div class="row justify-content-center mt-2">
        <div class="col-md">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title">PP</h4>
                <p class="sub-header">
                    Input Permohonan Pembayaran
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <!-- <div class="form-group"> -->
                        <!-- <label class="control-label">No. PP</label> -->
                        <!-- <label class="control-label col-md-8 col-sm-3 col-xs-12" id="lbl_no_pp"></label> -->
                        <input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
                        <!-- </div> -->

                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Ref PO *</label>
                            <div class="col-8">
                                <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control col-xs-12" required="required" type="text" placeholder="No. Ref. PO" onfocus="modalRefPO()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Pembayaran</label>
                            <div class="col-4">
                                <input id="txt_pembayaran" name="txt_pembayaran" class="form-control col-xs-12" required="required" type="text" placeholder="Pembayaran">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Supplier *</label>
                            <div class="col-3" style="padding-right: 0.01em;">
                                <input type="text" class="form-control" id="kd_supplier" name="kd_supplier" placeholder="Kode Supplier" autocomplite="off" required>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control bg-light" id="supplier" name="supplier" placeholder="Supplier" autocomplite="off" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Nilai PO</label>
                            <div class="col-5">
                                <input id="txt_nilai_po" name="txt_nilai_po" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Nilai PO" onkeyup="hitungTotalPO()" value="0" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Kurs</label>
                            <div class="col-3">
                                <input type="text" id="hidden_kurs" name="hidden_kurs" required="" value="Rp" class="form-control">
                            </div>
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_kurs" name="lbl_kurs"></label>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Pajak</label>
                            <div class="col-5">
                                <input id="txt_pajak" name="txt_pajak" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Pajak" value="0.00" onkeyup="hitungTotalPO()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">Nilai BPO</label>
                            <div class="col-4" style="padding-right: 0.01em;">
                                <input id="txt_nilai_bpo1" name="txt_nilai_bpo1" class="form-control mb-1 currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO1" onkeyup="hitungTotalPO()">
                            </div>
                            <div class="col-5">
                                <input id="txt_nilai_bpo2" name="txt_nilai_bpo2" class="form-control  currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO2" onkeyup="hitungTotalPO()">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Total PO</label>
                            <div class="col-8">
                                <input id="txt_total_po" name="txt_total_po" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Total PO" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Sudah Bayar</label>
                            <div class="col-6">
                                <input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Sudah dibayar" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Tgl. PP</label>
                            <div class="col-5">
                                <input id="txt_tgl_pp" name="txt_tgl_pp" class="form-control col-xs-12" required="required" type="date" value="<?= date('Y-m-d') ?>" placeholder="Tgl. PP">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Tgl. PO</label>
                            <div class="col-5">
                                <input id="txt_tgl_po" name="txt_tgl_po" class="form-control col-xs-12 bg-light" required="required" type="date" value="<?= date('Y-m-d') ?>" placeholder="Tgl. PO" readonly="" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Dibayar ke</label>
                            <div class="col-7">
                                <input id="txt_dibayar_ke" name="txt_dibayar_ke" class="form-control col-xs-12" required="required" type="text" placeholder="Dibayar ke">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Jumlah</label>
                            <div class="col-7">
                                <input id="txt_jumlah" name="txt_jumlah" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Jumlah" onkeyup="getTerbilang()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Terbilang</label>
                            <div class="col-8">
                                <textarea class="resizable_textarea form-control" id="txt_terbilang" name="txt_terbilang" placeholder="Terbilang" rows="1" required="" readonly=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <div class="col-1"></div>
                            <label class="col-3 col-form-label">Keterangan</label>
                            <div class="col-7">
                                <input id="txt_keterangan" name="txt_keterangan" class="form-control col-xs-12" required="required" type="text" placeholder="Keterangan">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group row mb-1 ml-1 ">
                            <label class="col-md-12 col-sm-3 col-xs-12">Kode Budget : </label>
                            <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_kode_budget"></label>
                            <input type="hidden" id="hidden_kode_budget" name="hidden_kode_budget">
                        </div>
                        <div class="ml-1 form-group row mb-1">
                            <label class="col-md-12 col-sm-3 col-xs-12">Jenis Budget : </label>
                            <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_jenis_budget"></label>
                            <input type="hidden" id="hidden_jenis_budget" name="hidden_jenis_budget">
                        </div>
                        <div class="ml-1 form-group row mb-1">
                            <label class="col-md-12 col-sm-3 col-xs-12">Main Account Budget : </label>
                            <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_main_account_budget"></label>
                            <input type="hidden" id="hidden_main_account" name="hidden_main_account">
                        </div>
                        <div class="ml-1 form-group row mb-1">
                            <label class="col-md-12 col-sm-3 col-xs-12">Nama Account : </label>
                            <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_nama_account"></label>
                            <input type="hidden" id="hidden_nama_account" name="hidden_nama_account">
                        </div>
                        <div>
                            <label class="ml-1 col-md-12 col-sm-3 col-xs-12 row mb-1">User : User SITE</label>
                        </div>
                        <div class="ml-1 form-group row mb-1">
                            <label class="col-4 col-form-label">No. Voucher</label>
                            <div class="col-7">
                                <input type="text" class="form-control" id="txt_no_voucher" name="txt_no_voucher">
                            </div>
                        </div>
                        <div class="ml-1 form-group row mb-1">
                            <label class="col-4 col-form-label">Tgl</label>
                            <div class="col-7">
                                <input type="text" class="form-control" id="txt_tgl_voucher" name="txt_tgl_voucher" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
    </div>
</div>