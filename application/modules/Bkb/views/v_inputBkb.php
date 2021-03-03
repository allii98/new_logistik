<!-- PAGE TITLE -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h2 class="page-title"><?= $title ?></h2>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row justify-content-center">
    <div class="col-md col-xl-3">
        <div class="widget-rounded-circle card-box">
            <h4 class="header-title mb-3">Input BKB</h4>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="control-label">No BPB <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <input id="txt_no_bpb" name="txt_no_bpb" class="form-control" required="required" type="text" placeholder="No. BPB" onkeypress="modalBPB(event)">
                        <input id="hidden_no_bpb" name="hidden_no_bpb" class="form-control" required="required" type="hidden">
                        <input id="hidden_no_ref_bpb" name="hidden_no_ref_bpb" class="form-control" required="required" type="hidden">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Diberikan kepada <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <input id="txt_diberikan_kpd" name="txt_diberikan_kpd" class="form-control" required="required" type="text" placeholder="Diberikan kepada">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Untuk keperluan <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <textarea class="resizable_textarea form-control" id="txt_untuk_keperluan" name="txt_untuk_keperluan" placeholder="Untuk keperluan" required="" readonly=""></textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Tgl BKB <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <input id="txt_tgl_bkb" name="txt_tgl_bkb" class="form-control" required="required" type="text" placeholder="Tgl BKB" readonly>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Bagian <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <select class="form-control" id="cmb_bagian" name="cmb_bagian" required="" onchange="cek_tm_tbm(1)" disabled="">
                            <!-- <option value="" selected>-- Pilih --</option> -->
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Alokasi Estate <span class="required">*</span>
                    </label>
                    <div class="col-md col-sm-6 col-xs-12">
                        <select class="form-control" id="cmb_alokasi_est" name="cmb_alokasi_est" required="" disabled="">
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
            </div> <!-- end row-->

            <hr>

            <div class="x_content div_form_2">
                <label id="lbl_bkb_status" name="lbl_bkb_status">No. BKB : ... &nbsp; No. Ref. BKB : ...</label>
                <h4 id="h4_no_bkb" name="h4_no_bkb"></h4>
                <h4 id="h4_no_ref_bkb" name="h4_no_ref_bkb"></h4>
                <input type="hidden" id="hidden_no_bkb" name="hidden_no_bkb">
                <input type="hidden" id="hidden_id_stok_keluar" name="hidden_id_stok_keluar">
                <input type="hidden" id="hidden_no_ref_bkb" name="hidden_no_ref_bkb">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tableRinciBKB" width="150%">
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
                                <!-- <th width="8%">Qty Diminta</th> -->
                                <th width="8%">Qty Disetujui</th>
                                <th width="8%">Qty Dikeluarkan</th>

                                <th width="25%">Keterangan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="tbody_rincian" name="tbody_rincian">
                            <tr>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>

                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>

                                <td>x</td>
                                <td>x</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div> <!-- end widget-rounded-circle-->