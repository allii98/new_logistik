<div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BKB</h4>
                <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Bukti Keluar Barang
                </p>
                <div class="row div_form_1 mt-0">
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">Tgl BKB*</font>
                                </label>
                                <input id="tgl_bkb" name="tgl_bkb" type="date" value="<?= date('Y-m-d') ?>" class="form-control" required="required" placeholder="Diberikan kepada">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">No BPB*</font>
                            </label>
                            <div class="row">
                                <div class="row col-lg-10 col-md-10 col-11 ml-0">
                                    <select class="js-data-example-ajax form-control select2 col-9 ml-2" id="select2">
                                    </select>
                                    <input style="display:none;" id="multiple" class="form-control bg-light col-9" type="text" readonly>
                                    <input type="hidden" id="txt_no_bpb">
                                </div>
                                <button class="qrcode-reader mdi mdi-camera btn btn-xs btn-primary ml-1" id="camera" type="button" onclick="showCamera()"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">Bagian*</font>
                            </label>
                            <input id="bagian" name="bagian" class="form-control bg-light" required="required" type="text" disabled>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">Alokasi Estate*</font>
                            </label>
                            <input id="alokasi_est" name="alokasi_est" class="form-control bg-light" required="required" type="text" disabled>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">Diberikan Kepada*</font>
                            </label>
                            <input id="diberikan_kpd" name="diberikan_kpd" class="form-control" required="required" type="text">
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">Untuk Keperluan</font>
                            </label>
                            <textarea class="form-control" rows="1" id="utk_keperluan"></textarea>
                        </div>
                    </div>
                    <input type="hidden" id="hidden_id_ppo">
                </div>

                <fieldset style="display: none;" class="border p-1" id="fieldset_bbm">
                    <div class="row div_form_bbm mt-0">
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="example-select">
                                        <font face="Verdana" size="2.5">Bahan Bakar</font>
                                    </label>
                                    <input id="bhnbakar" name="bhnbakar" type="text" class="form-control form-control-sm bg-light" placeholder="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">Jenis Alat/Kend</font>
                                </label>
                                <input id="txt_jns_alat" name="txt_jns_alat" type="text" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" value="" placeholder="" autocomplite="off" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">kode/Nomer</font>
                                </label>
                                <input id="txt_kd_nmr" name="txt_kd_nmr" type="text" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" value="" placeholder="" autocomplite="off" disabled>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">HM/KM</font>
                                </label>
                                <input id="txt_hm_km" name="txt_hm_km" type="text" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" value="" placeholder="" autocomplite="off" disabled>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">Lokasi Kerja</font>
                                </label>
                                <input id="txt_lokasi_kerja" name="txt_lokasi_kerja" type="text" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" value="" placeholder="" autocomplite="off" disabled>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <input type="hidden" id="hidden_id_bkb">
                <hr class="mt-0 mb-0">
                <div class="x_content div_form_2 mb-0">
                    <div class="row justify-content-between">
                        <div class="row ml-2">
                            <h6 id="lbl_bkb_status" name="lbl_bkb_status">
                                <font face="Verdana" size="2.5">No. BKB : ... &nbsp; No. Ref. BKB : ...</font>
                            </h6>
                            <input type="hidden" id="hidden_no_bkb">
                            <input type="hidden" id="hidden_no_ref_bkb">
                            <div class="row" style="margin-left:4px;">
                                <h6><span id="h4_no_bkb"></span></h6>&emsp;&emsp;
                                <h6><span id="h4_no_ref_bkb"></span></h6>
                            </div>
                        </div>
                        <h6 class="mr-2">
                            <button class="btn btn-danger btn-xs fa fa-print" id="a_print_bkb" style="display:none" onclick="cetak_bkb()"></button>
                        </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="tableRinciBKB" width="100%">
                            <thead>
                                <tr>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">TM/TBM</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Afd/Unit</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Blok/Sub</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Thn&nbsp;Tanam</th>

                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Bahan</th>
                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Account Beban</th>
                                    <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Barang</th>
                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Sat/Stok</th>
                                    <!-- <th width="8%">Qty Diminta</th> -->
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Qty Disetujui</th>
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Qty Keluar</th>

                                    <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody_rincian" name="tbody_rincian">
                            </tbody>
                        </table>
                    </div>
                </div>


            </div> <!-- end widget-rounded-circle-->
        </div>
    </div>
</div>

<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalBPB">
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
</div> -->

<script>
    // function getBPB() {
    //     $("#modalBPB").modal('show');
    // }

    // // Start Data Table Server Side
    // var table;
    // $(document).ready(function() {

    //     //datatables
    //     table = $('#tableBPB').DataTable({

    //         "processing": true,
    //         "serverSide": true,
    //         "order": [],

    //         "ajax": {
    //             "url": "<?php echo site_url('Bkb/get_data_bpb') ?>",
    //             "type": "POST"
    //         },

    //         "columnDefs": [{
    //             "targets": [0],
    //             "orderable": false,
    //         }, ],

    //     });

    // });
    // // End Data Table Server Side

    // $(document).ready(function() {
    //     $(document).on('click', '#data_bpb', function() {

    //         var nobpb = $(this).data('nobpb');
    //         var norefbpb = $(this).data('norefbpb');
    //         var keperluan = $(this).data('keperluan');
    //         var bag = $(this).data('bag');
    //         var user = $(this).data('user');
    //         // console.log(nabar);

    //         // Set data
    //         $('#no_bpb').val(nobpb);
    //         $('#utk_keperluan').val(keperluan);
    //         $('#diberikan_kpd').val(user);

    //         $("#modalBPB").modal('hide');

    //     });
    // });

    $("#select2").select2({
        ajax: {
            url: "<?php echo site_url('Bkb/select2_get_bpb') ?>",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    noref: params.term, // search term
                };
            },
            processResults: function(data) {
                var results = [];
                $.each(data, function(index, item) {
                    results.push({
                        id: item.norefbpb,
                        text: item.norefbpb
                    });
                });
                return {
                    results: results
                };
            }
        }
    }).on('select2:select', function(evt) {
        // var selected = evt.params.data;
        // var a = "0475";
        // var b = "TOKO ( KAS )";
        // var kode = $(".select2 option:selected").text(a);
        // var data = $(".select2 option:selected").val(b);
        // $('#kd_supplier').val(kode);
        var data = $(".select2 option:selected").text();
        $('#txt_no_bpb').val(data);
        // $('#multiple').val(data);
        // $('#hidden_no_ref_spp_').val(data);
        // console.log(data);
        cariBpbqr(data);
    });

    function cariBpbqr(noref) {

        // var nopo = $('#multiple').val();
        // console.log(n + 'yeyelala');

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bkb/get_data_bpb_qr'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#tbody_rincian').empty();
            },

            data: {
                'noref': noref
            },
            success: function(data) {

                var data_bpb = data.data_bpb;
                var data_item_bpb = data.data_item_bpb;

                console.log(data);

                $('#bagian').val(data_bpb.bag);
                $('#alokasi_est').val(data_bpb.alokasi);
                $('#diberikan_kpd').val(data_bpb.user);
                $('#utk_keperluan').val(data_bpb.keperluan);

                if (data_bpb.bag == 'TEKNIK' && data_bpb.bhn_bakar == 'BBM') {
                    $('#fieldset_bbm').css('display', 'block');
                    $('#bhnbakar').val(data_bpb.bhn_bakar);
                    $('#txt_jns_alat').val(data_bpb.jn_alat);
                    $('#txt_kd_nmr').val(data_bpb.no_kode);
                    $('#txt_hm_km').val(data_bpb.hm_km);
                    $('#txt_lokasi_kerja').val(data_bpb.lok_kerja);
                } else {
                    $('#fieldset_bbm').css('display', 'none');
                }

                for (i = 0; i < data_item_bpb.length; i++) {
                    // var no = i + 1;

                    tambah_row(i, data_item_bpb[i].status_item_bkb);
                    tahun_tanam(i, data_item_bpb[i].kodebebantxt);

                    //sum stok all periode / qtymasuk - qtykeluar
                    get_stok(i, data_item_bpb[i].kodebar);

                    var afd = data_item_bpb[i].afd;
                    var blok = data_item_bpb[i].blok;
                    var kodebebantxt = data_item_bpb[i].kodebebantxt;
                    var kodesubtxt = data_item_bpb[i].kodesubtxt;
                    var nabar = data_item_bpb[i].nabar;
                    var kodebar = data_item_bpb[i].kodebar;
                    var grp = data_item_bpb[i].grp;
                    var satuan = data_item_bpb[i].satuan;
                    var qty = data_item_bpb[i].qty;
                    var ketsub = data_item_bpb[i].ketsub;
                    var ket = data_item_bpb[i].ket;

                    // Set data
                    $('#cmb_afd_unit_' + i).val(afd);
                    $('#cmb_blok_sub_' + i).val(blok);
                    $('#cmb_bahan_' + i).val(kodebebantxt);
                    $('#txt_account_beban_' + i).val(ketsub);
                    $('#hidden_no_acc_' + i).val(kodesubtxt);
                    $('#txt_barang_' + i).val(nabar);
                    $('#hidden_kode_barang_' + i).val(kodebar);
                    $('#hidden_grup_barang_' + i).val(grp);
                    $('#sat_bpb_' + i).text(satuan);
                    $('#txt_qty_diminta_' + i).val(qty);
                    $('#txt_qty_disetujui_' + i).val(qty);
                    $('#txt_ket_rinci_' + i).val(ket);

                }
            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    function tambah_row(row, status_item_bkb) {
        var tr_buka = '<tr id="tr_' + row + '">';
        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- TM/TBM -->' +
            '<input type="text" class="form-control bg-light" id="cmb_tm_tbm_' + row + '" name="cmb_tm_tbm_' + row + '" disabled>' +
            '</td>';
        var td_col_3 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- AFD/UNIT -->' +
            '<input type="text" class="form-control bg-light" id="cmb_afd_unit_' + row + '" name="cmb_afd_unit_' + row + '" disabled>' +
            '</td>';
        var td_col_4 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- BLOK/SUB -->' +
            '<input type="text" class="form-control bg-light" id="cmb_blok_sub_' + row + '" name="cmb_blok_sub_' + row + '" disabled>' +
            '</td>';
        var td_col_5 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Tahun Tanam -->' +
            '<input type="text" class="form-control bg-light" id="cmb_tahun_tanam_' + row + '" name="cmb_tahun_tanam_' + row + '" disabled>' +
            '</td>';
        var td_col_6 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Bahan -->' +
            '<input type="text" class="form-control bg-light" id="cmb_bahan_' + row + '" name="cmb_bahan_' + row + '" disabled>' +
            '</td>';
        var td_col_7 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Account Beban -->' +
            '<input type="text" class="form-control bg-light" id="txt_account_beban_' + row + '" value="-" name="txt_account_beban_' + row + '" disabled>' +
            // '<label class="control-label" id="lbl_no_acc_' + row + '"></label>' +
            // '<label class="control-label" id="lbl_nama_acc_' + row + '"></label>' +
            '<input type="hidden" id="hidden_no_acc_' + row + '" name="hidden_no_acc_' + row + '" value="0">' +
            // '<input type="hidden" id="hidden_nama_acc_' + row + '" name="hidden_nama_acc_' + row + '" value="0">' +
            '</td>';
        var td_col_8 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Barang -->' +
            '<input type="text" class="form-control bg-light" id="txt_barang_' + row + '" name="txt_barang_' + row + '" placeholder="Barang" disabled>' +
            // '<label id="lbl_kode_barang_' + row + '"></label>' +
            // '<label id="lbl_nama_barang_' + row + '"></label>' +
            '<input type="hidden" id="hidden_kode_barang_' + row + '" name="hidden_kode_barang_' + row + '" value="0">' +
            // '<input type="hidden" id="hidden_nama_barang_' + row + '" name="hidden_nama_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_grup_barang_' + row + '" name="hidden_grup_barang_' + row + '" value="0">' +
            '</td>';
        var td_col_9 = '<td style="padding-right: 0.4em; padding-left: 0.4em; padding-top: 1px; padding-bottom: 0em;">' +
            '<span class="small text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Sat&nbsp;&emsp;&nbsp;:&nbsp;</span><span id="sat_bpb_' + row + '" class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small"></span><br>' +
            '<span class="small text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Stok&nbsp;&nbsp;&nbsp;:&nbsp;</span><span id="stok_' + row + '" class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small"></span>' +
            '</td>';
        var td_col_10 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Qty Diminta & Stok di Tgl ini & Satuan -->' +
            '<input type="text" class="form-control bg-light" id="txt_qty_diminta_' + row + '" name="txt_qty_diminta_' + row + '" placeholder="Qty Diminta" disabled>' +
            '</td>';
        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Qty Diminta & Stok di Tgl ini & Satuan -->' +
            '<input type="text" class="form-control bg-light" id="txt_qty_disetujui_' + row + '" name="txt_qty_disetujui_' + row + '" placeholder="Qty Diminta" disabled>' +
            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Keterangan -->' +
            '<textarea class="resizable_textarea form-control bg-light" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" rows="1" placeholder="Keterangan" disabled></textarea>' +
            // '<input type="hidden" id="hidden_id_bpbitem_' + row + '" name="hidden_id_bpbitem_' + row + '">' +
            '</td>';
        var td_col_13 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button class="badge bagde-warning btn-warning" id="btn_req_rev_qty_1" name="btn_req_rev_qty_1" type="button" data-toggle="tooltip" data-placement="right" title="Req Rev Qty" onclick="ReqRevQty(1)"><b>Rev</b></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        if (status_item_bkb == 1) {
            $('#tbody_rincian').append(tr_buka + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + form_tutup + tr_tutup);
        } else {
            $('#tbody_rincian').append(tr_buka + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);
        }

        // cek_bagian(row);

        $('#txt_qty_diminta_' + row).addClass('currencyduadigit');
        $('#txt_qty_disetujui_' + row).addClass('currencyduadigit');
        $('.currencyduadigit').number(true, 0);
        // $('#txt_account_beban_'+row).attr('disabled','');

        // $('html, body').animate({
        //     scrollTop: $("#tr_" + row).offset().top
        // }, 2000);
    }

    function tahun_tanam(i, coa_material) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bkb/get_tahun_tanam'); ?>",
            dataType: "JSON",
            beforeSend: function() {},

            data: {
                'coa_material': coa_material
            },
            success: function(data) {

                if (data) {
                    $('#cmb_tm_tbm_' + i).val(data.tmtbm);
                    $('#cmb_tahun_tanam_' + i).val(data.thn_tanam);
                }

            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    function get_stok(i, kodebar) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bkb/get_stok'); ?>",
            dataType: "JSON",
            beforeSend: function() {},

            data: {
                'kodebar': kodebar
            },
            success: function(data) {

                $('#stok_' + i).text(data);

            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    function saveRinciClick(n) {

        var hidden_kode_barang = $('#hidden_kode_barang_' + n).val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BKB/saveBkb') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#btn_simpan_' + n).css('display', 'none');

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin mt-1" style="font-size:24px;color:#f0ad4e;"></i>');

                if ($.trim($('#h4_no_ref_bkb').text()) == '') {
                    $('#lbl_bkb_status').empty();
                    $('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
                }
            },

            data: {
                txt_tgl_bkb: $('#tgl_bkb').val(),
                txt_no_bpb: $('#txt_no_bpb').val(),
                hidden_no_ref_bkb: $('#hidden_no_ref_bkb').val(),
                hidden_no_bkb: $('#hidden_no_bkb').val(),
                cmb_alokasi_est: $('#alokasi_est').val(),
                txt_diberikan_kpd: $('#diberikan_kpd').val(),
                txt_untuk_keperluan: $('#utk_keperluan').val(),
                cmb_bagian: $('#bagian').val(),

                hidden_kode_barang: $('#hidden_kode_barang_' + n).val(),
                hidden_nama_barang: $('#txt_barang_' + n).val(),
                hidden_satuan: $('#sat_bpb_' + n).text(),
                hidden_grup_barang: $('#hidden_grup_barang_' + n).val(),
                cmb_afd_unit: $('#cmb_afd_unit_' + n).val(),
                cmb_blok_sub: $('#cmb_blok_sub_' + n).val(),
                txt_qty_diminta: $('#txt_qty_diminta_' + n).val(),
                txt_qty_disetujui: $('#txt_qty_disetujui_' + n).val(),
                txt_ket_rinci: $('#txt_ket_rinci_' + n).val(),
                cmb_bahan: $('#cmb_bahan_' + n).val(),
                hidden_no_acc: $('#hidden_no_acc_' + n).val(),
                hidden_nama_acc: $('#txt_account_beban_' + n).val()

            },

            success: function(data) {

                $('#lbl_status_simpan_' + n).empty();

                $('#lbl_bkb_status').empty();
                $('#h4_no_bkb').html('No. BKB : ' + data.no_bkb);
                $('#hidden_no_bkb').val(data.no_bkb);

                $('#h4_no_ref_bkb').html('No. Ref. BKB : ' + data.noref_bkb);
                $('#hidden_no_ref_bkb').val(data.noref_bkb);

                $.toast({
                    position: 'top-right',
                    heading: 'Success',
                    text: 'Berhasil Disimpan!',
                    icon: 'success',
                    loader: false
                });

                console.log(data);

                //hitung ulang stok?
                get_stok(n, hidden_kode_barang);

                $('#a_print_bkb').show();

                $('#hidden_id_bkb').val(data.id_stockkeluar);

                //stok BPB itu di ambil berdasarkan periode atau semua periode???

            }
        });
    }

    function cetak_bkb() {
        var no_bkb = $('#hidden_no_bkb').val();
        var id = $('#hidden_id_bkb').val();

        window.open("<?= base_url('Bkb/cetak/') ?>" + no_bkb + '/' + id, '_blank');

        $('.div_form_2').css('pointer-events', 'none');
    }
</script>