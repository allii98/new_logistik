<div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BKB</h4>
                <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Input Bukti Keluar Barang
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label mr-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No&nbsp;BPB&nbsp;*</label>
                            <div class="col-6">
                                <input id="no_bpb" name="no_bpb" class="form-control" required="required" type="text" placeholder="No. BPB" onclick="getBPB()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label mr-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Untuk Keperluan*</label>
                            <div class="col-7">
                                <textarea id="utk_keperluan" name="utk_keperluan" class="form-control" required="required" rows="1" type="text" placeholder="Untuk Keperluan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-1 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Bagian</label>
                            <div class="col-5">
                                <select class="form-control" id="bagian" name="bagian">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-1 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl&nbsp;BKB</label>
                            <div class="col-7">
                                <input id="tgl_bkb" name="tgl_bkb" type="date" value="<?= date('Y-m-d') ?>" class="form-control bg-light" required="required" placeholder="Diberikan kepada">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row mb-1">

                            <label class="col-5 col-form-label mr-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Diberikan&nbsp;kepada*</label>
                            <div class="col-6">
                                <input id="diberikan_kpd" name="diberikan_kpd" class="form-control" required="required" type="text" placeholder="Diberikan kepada">
                            </div>

                        </div>

                        <div class="form-group row mb-1">

                            <label class="col-5 col-form-label mr-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Alokasi&nbsp;Estate</label>
                            <div class="col-4">
                                <select class="form-control" id="alokasi_est" name="alokasi_est">
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
                    </div>
                </div> <!-- end row-->

                <hr>

                <div class="x_content div_form_2">
                    <label id="lbl_bkb_status" name="lbl_bkb_status" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No. BKB : ... &nbsp; No. Ref. BKB : ...</label>
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
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">TM/TBM</th>
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Afd/Unit</th>
                                    <th width="8%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Blok/Sub</th>
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Thn Tanam</th>

                                    <th width="20%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Bahan</th>
                                    <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Account Beban</th>
                                    <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Barang</th>
                                    <!-- <th width="8%">Qty Diminta</th> -->
                                    <th width="8%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Qty Disetujui</th>
                                    <th width="8%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Qty Dikeluarkan</th>

                                    <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Keterangan</th>
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
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalBPB">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List BPB</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                    <table id="tableBPB" class="table table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.</th>
                                <th>No. BPB</th>
                                <th>No. Ref BPB</th>
                                <th>Keperluan</th>
                                <th>bagian</th>
                                <th>Tgl BPB</th>
                                <th>Diminta Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function getBPB() {
        $("#modalBPB").modal('show');
    }

    // Start Data Table Server Side
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#tableBPB').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Bkb/get_data_bpb') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });

    });
    // End Data Table Server Side

    $(document).ready(function() {
        $(document).on('click', '#data_bpb', function() {

            var nobpb = $(this).data('nobpb');
            var norefbpb = $(this).data('norefbpb');
            var keperluan = $(this).data('keperluan');
            var bag = $(this).data('bag');
            var user = $(this).data('user');
            // console.log(nabar);

            // Set data
            $('#no_bpb').val(nobpb);
            $('#utk_keperluan').val(keperluan);
            $('#diberikan_kpd').val(user);

            $("#modalBPB").modal('hide');

        });
    });
</script>