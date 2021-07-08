<div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row justify-content-between">
                    <h4 class="header-title ml-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Retur <b>BKB</b></h4>
                    <h4 class="header-title mr-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span id="devisi_span"></span></h4>
                </div>
                <div class="row justify-content-between">
                    <p class="sub-header ml-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                        Retur <b>Bukti Keluar Barang</b>
                    </p>
                    <button class="btn btn-xs btn-danger h-50 mr-2" id="cancelRetur" onclick="batalRetur()" disabled>Batalkan Retur</button>
                </div>
                <div class="row div_form_1 mt-0">
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="example-select">
                                    <font face="Verdana" size="2.5">Tgl Retur BKB*</font>
                                </label>
                                <input id="txt_tgl_retur" name="txt_tgl_retur" type="date" value="<?= date('Y-m-d') ?>" autocomplite="off" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">No BKB*</font>
                            </label>
                            <div class="row">
                                <div class="row col-lg-10 col-md-10 col-11 ml-0">
                                    <!-- <select class="js-data-example-ajax form-control select2 col-9 ml-2" id="select2">
                                    </select> -->
                                    <input id="cari_bkb" name="cari_bkb" class="form-control" type="text" onfocus="cari_bkb()" placeholder="pilih no BKB">
                                    <input style="display:none;" id="multiple" class="form-control bg-light" type="text" readonly>
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
                    <div class="col-lg-3 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">No BA*</font>
                            </label>
                            <input id="no_ba" name="no_ba" class="form-control" required="required" type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="form-group">
                            <label for="example-select">
                                <font face="Verdana" size="2.5">Keterangan</font>
                            </label>
                            <textarea class="form-control" rows="1" id="keterangan"></textarea>
                        </div>
                    </div>
                </div>

                <fieldset style="display: none;" class="border mb-1 p-1" id="fieldset_bbm">
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

                <hr class="mt-0 mb-0">
                <div class="x_content div_form_2 mb-0">
                    <div class="row justify-content-between">
                        <div class="row ml-2">
                            <h6 id="lbl_bkb_status" name="lbl_bkb_status">
                                <font face="Verdana" size="2.5">No. Retur BKB : ... &nbsp; No. Ref. Retur BKB : ...</font>
                            </h6>
                            <input type="hidden" id="hidden_noretur">
                            <input type="hidden" id="hidden_norefretur">
                            <input type="hidden" id="hidden_id_retskb">
                            <input type="hidden" id="hidden_norefbkb">
                            <input type="hidden" id="hidden_nobkb">
                            <input type="hidden" id="hidden_kode_dev">
                            <input type="hidden" id="hidden_devisi">
                            <input type="hidden" id="hidden_nama_pt">
                            <input type="hidden" id="hidden_kode_pt">
                            <div class="row" style="margin-left:4px;">
                                <h6><span id="h4_no_retur"></span></h6>&emsp;&emsp;
                                <h6><span id="h4_no_ref_retur"></span></h6>
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
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">#</th>
                                    <th width="20%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Nama Barang</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Afd/Unit</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Blok/Sub</th>
                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Account Beban</th>
                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Sub Beban</th>
                                    <th width="15%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">QTY Retur/Stok/Sat</th>
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Qty BKB</th>
                                    <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">Qty Retur</th>

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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalListBarang">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Barang</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                    <table id="dabar" class="table table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 3% !important;">#</th>
                                <th style="width: 5% !important;">No</th>
                                <th style="width: 10% !important;">Kode Barang</th>
                                <th style="width: 20% !important;">Nama Barang</th>
                                <th style="width: 20% !important;">Grup</th>
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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalListBkb">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Data BKB</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                    <table id="databkb" class="table table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 3% !important;">#</th>
                                <th style="width: 5% !important;">No</th>
                                <th style="width: 10% !important;">No. Ref. BKB</th>
                                <th style="width: 20% !important;">Devisi</th>
                                <th style="width: 20% !important;">Bagian</th>
                                <th style="width: 20% !important;">Tgl Input</th>
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

<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" id="showCamera">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Scan QRcode</h4>
                <button type="button" id="modalCameraClose" onclick="modalCameraClose()" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <video id="preview" width="100%"></video>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapusRetur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Konfirmasi Hapus</h4>
                    <!-- <input type="hidden" id="hidden_no_delete" name="hidden_no_delete"> -->
                    <p class="mt-3">Apakah Anda yakin ingin menghapus Retur ini ???</p>
                    <button type="button" class="btn btn-warning my-2" data-dismiss="modal" id="btn_delete" onclick="cekRetur()">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // qrcode
    $(document).ready(function() {
        $('#showCamera').modal('show');
        $('#preview').show();
        $('#multiple').css('display', 'block');
        $('#cari_bkb').css('display', 'none');
        // $('#select2').next(".select2-container").hide();

        tambah_row();

        $('#btn_tambah_row_1, #txt_barang_1').attr('disabled', '');

    });

    function modalCameraClose() {
        scanner.stop();
        $('#multiple').css('display', 'none');
        $('#cari_bkb').css('display', 'block');
        // $('#select2').next(".select2-container").show();
    }

    function showCamera() {
        $('#showCamera').modal('show');
        $('#preview').show();
        $('#multiple').css('display', 'block');
        $('#cari_bkb').css('display', 'none');
        // $('#select2').next(".select2-container").hide();
        scanner.start();
    }

    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
    });
    scanner.addListener('scan', function(content) {
        console.log(content);
        $('#preview').hide();
        cariBkbqr(content);
        $('#showCamera').modal('hide');
        $('#multiple').val(content);
        scanner.stop();
    });
    Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            console.error('No cameras found.');
        }
    }).catch(function(e) {
        console.error(e);
    });
    // end qrcode

    function cari_bkb() {
        $("#modalListBkb").modal('show');
    }

    // Start Data Table Server Side
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#databkb').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Retur/get_data_bkb') ?>",
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
        $(document).on('click', '#data_bkb', function() {

            var norefbkb = $(this).data('no_ref');
            var nobkb = $(this).data('skb');
            var hidden_nama_pt = $(this).data('pt');
            var hidden_kode_pt = $(this).data('kode');
            var kode_dev = $(this).data('kode_dev');
            var devisi = $(this).data('devisi');
            var bag = $(this).data('bag');
            var dev = kode_dev + ' - ' + devisi;

            // Set data
            $('#cari_bkb').val(norefbkb);
            $('#hidden_norefbkb').val(norefbkb);
            $('#hidden_nobkb').val(nobkb);
            $('#hidden_nama_pt').val(hidden_nama_pt);
            $('#hidden_kode_pt').val(hidden_kode_pt);
            $('#hidden_kode_dev').val(kode_dev);
            $('#hidden_devisi').val(devisi);
            $('#bagian').val(bag);
            $('#devisi_span').text(dev);

            $("#modalListBkb").modal('hide');

            caribkbitem(norefbkb);

            $('#btn_tambah_row_1, #txt_barang_1').removeAttr('disabled', '');
        });
    });

    function caribkbitem(norefbkb) {

        //datatables
        $('#dabar').DataTable().destroy();
        table = $('#dabar').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Retur/get_data_bkbitem') ?>",
                "type": "POST",
                "data": {
                    'norefbkb': norefbkb
                },
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });
    }

    function cari_barang_bkbitem(no_row) {
        // $('#hidden_no_row').empty();
        $('#hidden_no_row').val(no_row);
        $('#modalListBarang').modal('show');
        // listBarang(no_row);
    }

    $(document).ready(function() {
        $(document).on('click', '#data_barang', function() {

            var n = $('#hidden_no_row').val();

            var nabar = $(this).data('nabar');
            var kodebar = $(this).data('kodebar');
            var grp = $(this).data('grp');
            var qty2 = $(this).data('qty2');
            var satuan = $(this).data('satuan');
            var afd = $(this).data('afd');
            var blok = $(this).data('blok');
            var kodebeban = $(this).data('kodebeban');
            var ketbeban = $(this).data('ketbeban');
            var kodesub = $(this).data('kodesub');
            var ketsub = $(this).data('ketsub');
            var kode_dev = $(this).data('kode_dev');
            var txtperiode = $(this).data('txtperiode');
            var no_ref = $(this).data('no_ref');
            // console.log(nabar);

            // Set data
            $('#txt_barang_' + n).val(nabar);
            $('#hidden_kode_barang_' + n).val(kodebar);
            $('#hidden_grup_barang_' + n).val(grp);
            $('#txt_qty_bkb_' + n).val(qty2);
            $('#hidden_satuan_brg_' + n).val(satuan);
            $('#sat_' + n).text(satuan);
            $('#cmb_afd_unit_' + n).val(afd);
            $('#cmb_blok_sub_' + n).val(blok);
            $('#txt_account_beban_' + n).val(ketbeban);
            $('#hidden_kodebeban_' + n).val(kodebeban);
            $('#txt_sub_beban_' + n).val(ketsub);
            $('#hidden_kodesub_' + n).val(kodesub);

            $("#modalListBarang").modal('hide');

            get_stok(n, kodebar, txtperiode, kode_dev);

            get_qty_retur(n, no_ref, kodebar);

            $('#cari_bkb, #camera').attr('disabled', '');

        });
    });

    function get_qty_retur(n, no_ref, kodebar) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Retur/get_qty_retur'); ?>",
            dataType: "JSON",
            beforeSend: function() {},

            data: {
                'no_ref': no_ref,
                'kodebar': kodebar
            },
            success: function(data) {

                if (!data.qty) {
                    $('#qty_sudah_retur_' + n).text(0);
                } else {
                    $('#qty_sudah_retur_' + n).text(data.qty);
                }
            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    function get_stok(i, kodebar, txtperiode, kode_dev) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Retur/get_stok'); ?>",
            dataType: "JSON",
            beforeSend: function() {},

            data: {
                'kodebar': kodebar,
                'txtperiode': txtperiode,
                'kode_dev': kode_dev
            },
            success: function(data) {

                $('#stok_' + i).text(data);

            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    var row = 1;

    function tambah_row() {
        var tr_buka = '<tr id="tr_' + row + '">';
        var td_col_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_no_table_' + row + '" name="hidden_no_table_' + row + '">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + row + '" name="btn_tambah_row_' + row + '" onclick="tambah_row()"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + row + '" name="btn_hapus_row_' + row + '" onclick="hapus_row(' + row + ')"></button>' +
            '</td>';
        var td_col_1_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_no_table_' + row + '" name="hidden_no_table_' + row + '">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + row + '" name="btn_tambah_row_' + row + '" onclick="tambah_row()"></button>' +
            '</td>';
        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Barang -->' +
            '<input type="text" class="form-control" id="txt_barang_' + row + '" name="txt_barang_' + row + '" placeholder="Pilih Barang" onClick="cari_barang_bkbitem(' + row + ')">' +
            '<input type="hidden" id="hidden_kode_barang_' + row + '" name="hidden_kode_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_grup_barang_' + row + '" name="hidden_grup_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_satuan_brg_' + row + '" name="hidden_satuan_brg_' + row + '" value="0">' +
            '</td>';
        // var td_col_3 = '<td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">' +
        //     '<!-- TM/TBM -->' +
        //     '<input type="text" class="form-control bg-light" id="cmb_tm_tbm_' + row + '" name="cmb_tm_tbm_' + row + '" disabled>' +
        //     '</td>';
        var td_col_4 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- AFD/UNIT -->' +
            '<input type="text" class="form-control bg-light" id="cmb_afd_unit_' + row + '" name="cmb_afd_unit_' + row + '" disabled>' +
            '</td>';
        var td_col_5 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- BLOK/SUB -->' +
            '<input type="text" class="form-control bg-light" id="cmb_blok_sub_' + row + '" name="cmb_blok_sub_' + row + '" disabled>' +
            '</td>';
        // var td_col_6 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
        //     '<!-- Tahun Tanam -->' +
        //     '<input type="text" class="form-control bg-light" id="cmb_tahun_tanam_' + row + '" name="cmb_tahun_tanam_' + row + '" disabled>' +
        //     '</td>';
        // var td_col_7 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
        //     '<!-- Bahan -->' +
        //     '<input type="text" class="form-control bg-light" id="cmb_bahan_' + row + '" name="cmb_bahan_' + row + '" disabled>' +
        //     '</td>';
        var td_col_8 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Account Beban -->' +
            '<input type="text" class="form-control bg-light" id="txt_account_beban_' + row + '" value="-" name="txt_account_beban_' + row + '" disabled>' +
            '<input type="hidden" id="hidden_kodebeban_' + row + '" name="hidden_kodebeban_' + row + '" value="0">' +
            '</td>';
        var td_col_9 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Account Beban -->' +
            '<input type="text" class="form-control bg-light" id="txt_sub_beban_' + row + '" value="-" name="txt_sub_beban_' + row + '" disabled>' +
            '<input type="hidden" id="hidden_kodesub_' + row + '" name="hidden_kodesub_' + row + '" value="0">' +
            '</td>';
        var td_col_10 = '<td style="padding-right: 0.4em; padding-left: 0.4em; padding-top: 1px; padding-bottom: 0em;">' +
            '<span class="small text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">QTY Retur&nbsp;:&nbsp;</span><span id="qty_sudah_retur_' + row + '" class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small"></span><br>' +
            '<span class="small text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Stok&nbsp;:&nbsp;</span><span id="stok_' + row + '" class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small"></span>&nbsp;/&nbsp;<span id="sat_' + row + '" class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small"></span>' +
            '</td>';
        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Qty Diminta & Stok di Tgl ini & Satuan -->' +
            '<input type="text" class="form-control bg-light" id="txt_qty_bkb_' + row + '" name="txt_qty_bkb_' + row + '" disabled>' +
            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Qty Diminta & Stok di Tgl ini & Satuan -->' +
            '<input type="text" class="form-control" id="txt_qty_retur_' + row + '" name="txt_qty_retur_' + row + '" placeholder="Qty Retur" onkeyup="validasi_qty(' + row + ')">' +
            '</td>';
        var td_col_13 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Keterangan -->' +
            '<textarea class="resizable_textarea form-control" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" rows="1" placeholder="Keterangan"></textarea>' +
            '<input type="hidden" id="hidden_id_retskbitem_' + row + '" name="hidden_id_retskbitem_' + row + '">' +
            '<input type="hidden" id="hidden_txtperiode_' + row + '" name="hidden_txtperiode_' + row + '">' +
            '</td>';
        var td_col_14 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '</td>';
        var td_col_14_1 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            // '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        if (row == 1) {
            $('#tbody_rincian').append(tr_buka + td_col_1_1 + form_buka + td_col_2 + td_col_4 + td_col_5 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + td_col_14_1 + form_tutup + tr_tutup);
        } else {
            $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_4 + td_col_5 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + td_col_14 + form_tutup + tr_tutup);
        }

        $('#txt_qty_retur_' + row).addClass('currencyduadigit');
        $('.currencyduadigit').number(true, 0);

        row++;
        // $('#txt_account_beban_'+row).attr('disabled','');

        // $('html, body').animate({
        //     scrollTop: $("#tr_" + row).offset().top
        // }, 2000);
    }

    function hapus_row(id) {
        // var totalRowCount = $("#tableRinciBarang tr").length;
        var rowCount = $("#tableRinciBKB td").closest("tr").length;

        if (rowCount != 1) {
            $('#tr_' + id).remove();
        } else {
            swal('Tidak Bisa dihapus, item SPP tinggal 1');
        }
        // if(id != 2){
        // n = parseInt(n)- parseInt(1);
        // $('#tr_'+n).remove();
        // }
    }

    function saveRinciClick(n) {

        var cari_bkb = $('#cari_bkb').val();
        var no_ba = $('#no_ba').val();
        var qty_retur = $('#txt_qty_retur_' + n).val();
        var txt_barang = $('#txt_barang_' + n).val();

        if (!cari_bkb) {
            toast('No BKB');
        } else if (!no_ba) {
            toast('NO BA');
        } else if (!txt_barang) {
            toast('Barang');
        } else if (!qty_retur) {
            toast('QTY Retur');
        } else {
            // saveRinci(n);
            cekNoBa(n, no_ba);
        }
        return false;
    };

    function toast(v_text) {
        $.toast({
            position: 'top-right',
            heading: 'Failed!',
            text: v_text + ' is required!',
            icon: 'error',
            loader: true,
            loaderBg: 'red'
        });
    }

    function cekNoBa(n, no_ba) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/cekNoBa') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_bkb_status').empty();
                $('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>Cek No BA</label>');
            },

            data: {
                no_ba: no_ba
            },

            success: function(data) {
                $('#lbl_bkb_status').empty();
                $('#lbl_bkb_status').append('<font face="Verdana" size="2.5">No. Retur BKB : ... &nbsp; No. Ref. Retur BKB : ...</font>');

                console.log(data);

                if (data == 1) {
                    swal('Sudah ada No BA yang sama !');
                } else {
                    saveRinci(n);
                }

            }
        });
    }

    function saveRinci(n) {

        var kodebar = $('#hidden_kode_barang_' + n).val();
        var kode_dev = $('#hidden_kode_dev').val();
        var no_ref = $('#hidden_norefbkb').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/saveRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#btn_simpan_' + n).css('display', 'none');

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin mt-1" style="font-size:24px;color:#f0ad4e;"></i>');

                if ($.trim($('#h4_no_ref_retur').text()) == '') {
                    $('#lbl_bkb_status').empty();
                    $('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate Retur Number</label>');
                }
            },

            data: {
                hidden_noretur: $('#hidden_noretur').val(),
                hidden_norefretur: $('#hidden_norefretur').val(),
                hidden_nobkb: $('#hidden_nobkb').val(),
                hidden_norefbkb: no_ref,
                txt_tgl_retur: $('#txt_tgl_retur').val(),
                hidden_nama_pt: $('#hidden_nama_pt').val(),
                hidden_kode_pt: $('#hidden_kode_pt').val(),
                hidden_devisi: $('#hidden_devisi').val(),
                hidden_kode_dev: kode_dev,
                bagian: $('#bagian').val(),
                no_ba: $('#no_ba').val(),
                keterangan: $('#keterangan').val(),

                hidden_kode_barang: kodebar,
                txt_barang: $('#txt_barang_' + n).val(),
                hidden_grup_barang: $('#hidden_grup_barang_' + n).val(),
                hidden_satuan_brg: $('#hidden_satuan_brg_' + n).val(),
                cmb_afd_unit: $('#cmb_afd_unit_' + n).val(),
                cmb_blok_sub: $('#cmb_blok_sub_' + n).val(),
                txt_qty_retur: $('#txt_qty_retur_' + n).val(),
                txt_ket_rinci: $('#txt_ket_rinci_' + n).val(),
                txt_account_beban: $('#txt_account_beban_' + n).val(),
                hidden_kodebeban: $('#hidden_kodebeban_' + n).val(),
                txt_sub_beban: $('#txt_sub_beban_' + n).val(),
                hidden_kodesub: $('#hidden_kodesub_' + n).val(),
            },

            success: function(data) {

                console.log(data);

                if (data.item_exist == 1) {
                    swal('Sudah ada item yang sama pada Retur ini!');
                    $('#lbl_status_simpan_' + n).empty();
                    $('#btn_simpan_' + n).css('display', 'block');

                } else {

                    $('#lbl_status_simpan_' + n).empty();

                    $('#lbl_bkb_status').empty();
                    $('#h4_no_retur').html('No. Retur BKB : ' + data.no_retur);
                    $('#hidden_noretur').val(data.no_retur);

                    $('#h4_no_ref_retur').html('No. Ref. Retur BKB : ' + data.noref_retur);
                    $('#hidden_norefretur').val(data.noref_retur);

                    $('.div_form_1').find('#txt_tgl_retur, #cari_bkb, #camera, #no_ba, #keterangan').attr('disabled', '');
                    $('.div_form_1').find('#txt_tgl_retur, #cari_bkb, #camera, #no_ba, #keterangan').addClass('bg-light');

                    $('.div_form_2').find('#txt_barang_' + n + ',#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').attr('disabled', '');
                    $('.div_form_2').find('#txt_barang_' + n + ',#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').addClass('bg-light');

                    $('#lbl_bkb_status').attr('disabled', '');

                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Berhasil Disimpan!',
                        icon: 'success',
                        loader: false
                    });

                    $('#a_print_bkb').show();

                    $('#btn_hapus_row_' + n).css('display', 'none');
                    $('#btn_ubah_' + n).css('display', 'block');
                    $('#btn_hapus_' + n).css('display', 'block');

                    $('#hidden_id_retskb').val(data.id_retskb);
                    $('#hidden_id_retskbitem_' + n).val(data.id_retskbitem);
                    $('#hidden_txtperiode_' + n).val(data.txtperiode);

                    $('#cancelRetur').removeAttr('disabled');

                    get_stok(n, kodebar, data.txtperiode, kode_dev);

                    get_qty_retur(n, no_ref, kodebar);
                }

            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function ubahRinci(n) {

        // var n = $('#hidden_no_row').val();

        // $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').removeClass('bg-light');
        // $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').removeAttr('disabled');

        $('.div_form_2').find('#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').removeClass('bg-light');
        $('.div_form_2').find('#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').removeAttr('disabled');

        $('#btn_simpan_' + n).css('display', 'none');
        $('#btn_hapus_' + n).css('display', 'none');
        $('#btn_ubah_' + n).css('display', 'none');
        $('#btn_update_' + n).css('display', 'block');
        $('#btn_cancel_update_' + n).css('display', 'block');
    };

    //Update Data
    function updateRinci(n) {

        var txtperiode = $('#hidden_txtperiode_' + n).val();
        var kodebar = $('#hidden_kode_barang_' + n).val();
        var kode_dev = $('#hidden_kode_dev').val();
        var no_ref = $('#hidden_norefbkb').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/updateRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {

                $('#btn_update_' + n).css('display', 'none');

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>');
            },

            data: {

                hidden_kode_dev: kode_dev,
                hidden_txtperiode: txtperiode,
                hidden_norefbkb: no_ref,
                hidden_id_retskbitem: $('#hidden_id_retskbitem_' + n).val(),
                hidden_kode_barang: kodebar,
                txt_barang: $('#txt_barang_' + n).val(),
                hidden_grup_barang: $('#hidden_grup_barang_' + n).val(),
                hidden_satuan_brg: $('#hidden_satuan_brg_' + n).val(),
                cmb_blok_sub: $('#cmb_blok_sub_' + n).val(),
                cmb_afd_unit: $('#cmb_afd_unit_' + n).val(),
                txt_account_beban: $('#txt_account_beban_' + n).val(),
                hidden_kodebeban: $('#hidden_kodebeban_' + n).val(),
                txt_sub_beban: $('#txt_sub_beban_' + n).val(),
                hidden_kodesub: $('#hidden_kodesub_' + n).val(),
                txt_qty_retur: $('#txt_qty_retur_' + n).val(),
                txt_ket_rinci: $('#txt_ket_rinci_' + n).val(),
            },

            success: function(data) {

                console.log(data);

                $('#lbl_status_simpan_' + n).empty();
                $.toast({
                    position: 'top-right',
                    heading: 'Success',
                    text: 'Berhasil Diupdate!',
                    icon: 'success',
                    loader: false
                });

                $('.div_form_2').find('#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').addClass('bg-light');
                $('.div_form_2').find('#txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').attr('disabled', '');

                $('#btn_ubah_' + n).css('display', 'block');
                $('#btn_hapus_' + n).css('display', 'block');
                $('#btn_cancel_update_' + n).css('display', 'none');

                get_stok(n, kodebar, txtperiode, kode_dev);

                get_qty_retur(n, no_ref, kodebar);

            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    };

    // cancel update
    function cancelUpdate(n) {
        // var data = this.value;
        // console.log(data);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/cancelUpdateRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {

                $('#btn_cancel_update_' + n).css('display', 'none');

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin mt-1" style="font-size:24px;color:#f0ad4e;"></i>');
            },

            data: {
                hidden_id_retskbitem: $('#hidden_id_retskbitem_' + n).val()
            },

            success: function(data) {

                $('#hidden_kode_barang_' + n).val(data.kodebar);
                $('#txt_barang_' + n).val(data.nabar);
                $('#hidden_grup_barang_' + n).val(data.grp);
                $('#hidden_satuan_brg_' + n).val(data.satuan);
                $('#cmb_blok_sub_' + n).val(data.blok);
                $('#cmb_afd_unit_' + n).val(data.afd);
                $('#txt_account_beban_' + n).val(data.ketbeban);
                $('#hidden_kodebeban_' + n).val(data.kodebeban);
                $('#txt_sub_beban_' + n).val(data.ketsub);
                $('#hidden_kodesub_' + n).val(data.kodesub);
                $('#txt_qty_retur_' + n).val(data.qty);
                $('#txt_ket_rinci_' + n).val(data.ket);

                $('#lbl_status_simpan_' + n).empty();
                $.toast({
                    position: 'top-right',
                    text: 'Edit Dibatalkan!',
                    icon: 'success',
                    loader: false
                });

                $('.div_form_2').find('#txt_barang_' + n + ', #txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').addClass('bg-light');
                $('.div_form_2').find('#txt_barang_' + n + ', #txt_qty_retur_' + n + ',#txt_ket_rinci_' + n + '').attr('disabled', '');

                $('#btn_update_' + n).css('display', 'none');
                $('#btn_ubah_' + n).css('display', 'block');
                $('#btn_hapus_' + n).css('display', 'block');

            },
            error: function(response) {
                alert(response.responseText);
            }
        });
    };

    function validasi_qty(n) {
        var a = $('#txt_qty_bkb_' + n + '').val();
        var b = $('#txt_qty_retur_' + n + '').val();
        var c = $('#qty_sudah_retur_' + n + '').text();

        var txt_qty_bkb = Number(a);
        var txt_qty_retur = Number(b);
        var qty_sudah_retur = Number(c);

        var subto = txt_qty_retur + qty_sudah_retur;

        if (subto > txt_qty_bkb) {
            swal('Melibihi QTY BKB!, sudah retur sebanyak ' + qty_sudah_retur);
            $('#txt_qty_retur_' + n + '').val('');
        } else if (txt_qty_retur == 0) {
            swal('Tidak boleh 0!');
            $('#txt_qty_retur_' + n + '').val('');
        }
    }

    function cariBkbqr(noref) {

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Retur/get_data_bkb_qr'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                // $('#tbody_rincian').empty();
            },

            data: {
                'noref': noref
            },
            success: function(data) {

                // Set data
                $('#cari_bkb').val(data.NO_REF);
                $('#hidden_norefbkb').val(data.NO_REF);
                $('#hidden_nobkb').val(data.skb);
                $('#hidden_nama_pt').val(data.pt);
                $('#hidden_kode_pt').val(data.kode);
                $('#hidden_kode_dev').val(data.kode_dev);
                $('#hidden_devisi').val(data.devisi);
                $('#bagian').val(data.bag);
                var dev = data.kode_dev + ' - ' + data.devisi;
                $('#devisi_span').text(dev);

                caribkbitem(data.NO_REF);

                $('#btn_tambah_row_1, #txt_barang_1').removeAttr('disabled', '');

            },
            error: function(response) {
                alert('ERROR! ' + response.responseText);
            }
        });
    }

    function hapusRinci(n) {
        // $('#hidden_no_delete').val(n);
        Swal.fire({
            text: "Yakin akan menghapus Data ini?",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya Hapus!'
        }).then((result) => {
            if (result.value) {
                updateItemToZero(n);
            }
        })
    }

    function updateItemToZero(n) {
        var txtperiode = $('#hidden_txtperiode_' + n).val();
        var kodebar = $('#hidden_kode_barang_' + n).val();
        var kode_dev = $('#hidden_kode_dev').val();
        var no_ref = $('#hidden_norefbkb').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/updateRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>');
            },

            data: {

                hidden_kode_dev: kode_dev,
                hidden_txtperiode: txtperiode,
                hidden_norefbkb: no_ref,
                hidden_id_retskbitem: $('#hidden_id_retskbitem_' + n).val(),
                hidden_kode_barang: kodebar,
                txt_barang: $('#txt_barang_' + n).val(),
                hidden_grup_barang: $('#hidden_grup_barang_' + n).val(),
                hidden_satuan_brg: $('#hidden_satuan_brg_' + n).val(),
                cmb_blok_sub: $('#cmb_blok_sub_' + n).val(),
                cmb_afd_unit: $('#cmb_afd_unit_' + n).val(),
                txt_account_beban: $('#txt_account_beban_' + n).val(),
                hidden_kodebeban: $('#hidden_kodebeban_' + n).val(),
                txt_sub_beban: $('#txt_sub_beban_' + n).val(),
                hidden_kodesub: $('#hidden_kodesub_' + n).val(),
                txt_qty_retur: 0,
                txt_ket_rinci: $('#txt_ket_rinci_' + n).val(),
            },

            success: function(data) {

                deleteData(n);

            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function deleteData(n) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/deleteItemRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>');
            },

            data: {
                hidden_id_retskbitem: $('#hidden_id_retskbitem_' + n).val()
            },

            success: function(data) {
                console.log(data);

                $.toast({
                    position: 'top-right',
                    heading: 'Success',
                    text: 'Berhasil DiHapus!',
                    icon: 'success',
                    loader: false
                });

                $('#tr_' + n).css('display', 'none');
                $('#txt_barang_' + n).empty();
                $('#hidden_kode_barang_' + n).empty();
                $('#hidden_grup_barang_' + n).empty();
                $('#txt_qty_bkb_' + n).empty();
                $('#hidden_satuan_brg_' + n).empty();
                $('#sat_' + n).empty();
                $('#cmb_afd_unit_' + n).empty();
                $('#cmb_blok_sub_' + n).empty();
                $('#txt_account_beban_' + n).empty();
                $('#hidden_kodebeban_' + n).empty();
                $('#txt_sub_beban_' + n).empty();
                $('#hidden_kodesub_' + n).empty();

                if (n == 1) {
                    hapusRetur();
                }

            }
        });
    };

    // proses hapus retur
    function batalRetur() {
        $('#modalKonfirmasiHapusRetur').modal('show');
    }

    function cekRetur() {
        var norefretur = $('#hidden_norefretur').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/cekRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_bkb_status').empty();
                $('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>Proses Cek Retur</label>');
            },

            data: {
                norefretur: norefretur
            },

            success: function(data) {

                $('#lbl_bkb_status').empty();

                if (data > 1) {
                    swal('Tidak bisa menghapus Retur yang item nya lebih dari 1 !');
                } else {
                    updateItemToZero(1);
                }
            }
        });
    }

    function hapusRetur() {

        var norefretur = $('#hidden_norefretur').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Retur/deleteRetur') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_bkb_status').empty();
                $('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i>Proses Hapus Retur</label>');
            },

            data: {
                norefretur: norefretur
            },

            success: function(data) {
                console.log(data);

                location.reload();
            }
        });
    }

    // $("#select2").select2({
    //     ajax: {
    //         url: "<?php echo site_url('Bkb/select2_get_bpb') ?>",
    //         dataType: 'json',
    //         delay: 250,
    //         data: function(params) {
    //             return {
    //                 noref: params.term, // search term
    //             };
    //         },
    //         processResults: function(data) {
    //             var results = [];
    //             $.each(data, function(index, item) {
    //                 results.push({
    //                     id: item.norefbpb,
    //                     text: item.norefbpb
    //                 });
    //             });
    //             return {
    //                 results: results
    //             };
    //         }
    //     }
    // }).on('select2:select', function(evt) {
    //     // var selected = evt.params.data;
    //     // var a = "0475";
    //     // var b = "TOKO ( KAS )";
    //     // var kode = $(".select2 option:selected").text(a);
    //     // var data = $(".select2 option:selected").val(b);
    //     // $('#kd_supplier').val(kode);
    //     var data = $(".select2 option:selected").text();
    //     $('#txt_no_bpb').val(data);
    //     // $('#multiple').val(data);
    //     // $('#hidden_no_ref_spp_').val(data);
    //     // console.log(data);
    //     cariBpbqr(data);
    // });

    // function tahun_tanam(i, coa_material) {
    //     $.ajax({
    //         type: "POST",
    //         url: "<?php echo site_url('Bkb/get_tahun_tanam'); ?>",
    //         dataType: "JSON",
    //         beforeSend: function() {},

    //         data: {
    //             'coa_material': coa_material
    //         },
    //         success: function(data) {

    //             if (data) {
    //                 $('#cmb_tm_tbm_' + i).val(data.tmtbm);
    //                 $('#cmb_tahun_tanam_' + i).val(data.thn_tanam);
    //             }

    //         },
    //         error: function(response) {
    //             alert('ERROR! ' + response.responseText);
    //         }
    //     });
    // }

    // saat hitung stock awal harian gunakan where devisi!


    function cetak_bkb() {
        var no_bkb = $('#hidden_no_bkb').val();
        var id = $('#hidden_id_bkb').val();

        window.open("<?= base_url('Bkb/cetak/') ?>" + no_bkb + '/' + id, '_blank');

        $('#cancelSpp').hide();

        $('.div_form_2').css('pointer-events', 'none');
    }
</script>