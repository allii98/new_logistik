<div class="container-fluid">
    <!-- start row-->
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="widget-rounded-circle card-box mt-2">
                <h4 class="header-title">
                    <font face="Verdana"> LPB </font>
                </h4>
                <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Input Laporan Penerimaan Barang
                </p>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Devisi<span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <select class="form-control" id="devisi">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    foreach ($devisi as $d) : { ?>
                                            <option value="<?= $d['kodetxt'] ?>"><?= $d['PT'] ?></option>
                                    <?php }
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl&nbsp;Terima<span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input id="tgl_terima" name="tgl_terima" class="form-control" type="date" value="<?= date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl&nbsp;Input&nbsp;<span class="required">*</span>
                            </label>
                            <div class="col-md-8">
                                <input id="tgl_input" name="tgl_input" class="form-control bg-light" readonly value="<?= date('Y-m-d'); ?>" type="date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No.&nbsp;Pengantar<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input id="no_pengantar" name="no_pengantar" class="form-control" required="required" type="text" placeholder="No. Pengantar" autocomplite="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Lokasi&nbsp;Gudang<span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input id="lokasi_gudang" name="lokasi_gudang" class="form-control" required="required" type="text" placeholder="Lokasi Gudang" autocomplite="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No.&nbsp;PO<span class="required">*</span>
                            </label>
                            <div class="col-md-9 row">
                                <input id="txt_no_po" name="txt_no_po" class="form-control col-md-3" type="text" onfocus="cariPo()" placeholder="No. PO" autocomplete="off">
                                <input id="txt_ref_po" name="txt_ref_po" class="form-control bg-light col-md-8 ml-2" type="text" placeholder="Ref. PO" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl.&nbsp;PO<span class="required">*</span>
                            </label>
                            <div class="col-md-9 row">
                                <input id="txt_tgl_po" name="txt_tgl_po" class="form-control bg-light" required="required" type="text" placeholder="Tgl. PO" readonly autocomplite="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Supplier&nbsp;<span class="required">*</span>
                            </label>
                            <div class="col-md-8 row">
                                <input id="txt_kd_supplier" name="txt_kd_supplier" class="form-control bg-light col-md-3" required="required" type="text" placeholder="Kode Supplier" readonly>
                                <input id="txt_supplier" name="txt_supplier" class="form-control bg-light col-md-8 ml-2" required="required" type="text" placeholder="Supplier" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Ket<span class="required">*</span>
                            </label>
                            <div class="col-md-8 row">
                                <textarea class="resizable_textarea form-control" id="ket_pengiriman" name="ket_pengiriman" placeholder="Keterangan" rows="1" autocomplite="off"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-0">
                    <label id="lbl_lpb_status" name="lbl_lpb_status" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No. LPB : ... &nbsp; No. Ref. LPB : ...</label>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="tableRinciLPB" width="100%">
                            <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="21%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Kode Barang</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nama Barang / Satuan</th>
                                    <th width="9%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Saldo Qty</th>
                                    <th width="6%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Qty</th>
                                    <th width="20%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Ket</th>
                                    <th width="6%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_rincian" name="tbody_rincian">
                                <tr id="tr_1">
                                    <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                        <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                        <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                        <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                    </td>
                                    <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                        <td style="padding-right: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                            <div class="row">
                                                <input type="text" class="form-control col-8" id="txt_kode_barang_1" name="txt_kode_barang_1" placeholder="Kode Barang" onfocus="cari_barang('1')" readonly>
                                                <label class="ml-1 mt-1">
                                                    <input type="checkbox" id="chk_asset_1" name="chk_asset_1" value="">
                                                    <span face="Verdana" size="1.8"> Asset ?</span>
                                                </label>
                                            </div>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                            <div class="row">
                                                <span face="Verdana" class="ml-2" id="txt_nama_brg_1" size="1.8">Nama Barang</span>
                                                &emsp;/
                                                <span face="Verdana" class="ml-2" id="txt_satuan_1" size="1.8">Satuan</span>
                                            </div>
                                        </td>
                                        <td style="padding-right: 0.4em; padding-left: 0.4em; padding-top: 1px; padding-bottom: 0em;">
                                            <span class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">qty&nbsp;po&emsp;:&nbsp;</span><span class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">22</span>
                                            <span class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">sisa&nbsp;qty :&nbsp;</span><span class="small" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">3</span>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                            <input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" autocomplite="off">

                                            <input type="hidden" id="hidden_qty_po_1" name="hidden_qty_po_1">
                                            <input type="hidden" id="hidden_sisa_qty_1" name="hidden_sisa_qty_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" placeholder="Keterangan" rows="1" onkeypress="saveRinciEnter(event,1)"></textarea>
                                            <label id="lbl_status_simpan_1"></label>
                                            <input type="hidden" id="hidden_id_masuk_item_1" name="hidden_id_masuk_item_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
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
    </div>

</div> <!-- container -->

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListPo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List PO</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="table-responsive">
                        <table id="tableDetailPo" class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No.</th>
                                    <th>Tgl</th>
                                    <th>No.PO</th>
                                    <th>Ref.PO</th>
                                    <th>Supplier</th>
                                    <th>Lokasi&nbsp;Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListItemPo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Barang</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="table-responsive">
                            <input type="" id="hidden_no_row" name="hidden_no_row">
                            <table id="tableDetailItemPo" class="table table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Qty PO</th>
                                        <th>Qty LPB</th>
                                        <th>Sisa Blm Terima</th>
                                        <th>Sat</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_listbarang">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function cariPo() {

        $('#modalListPo').modal('show');
    }

    // Start Data Table Server Side
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#tableDetailPo').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Lpb/get_data_po') ?>",
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
        $(document).on('click', '#pilih_po', function() {

            var nopotxt = $(this).data('nopotxt');
            var noreftxt = $(this).data('noreftxt');
            var tglpo = $(this).data('tglpo');
            var kode_supply = $(this).data('kode_supply');
            var nama_supply = $(this).data('nama_supply');
            // console.log(nabar);

            // Set data
            $('#txt_no_po').val(nopotxt);
            $('#txt_ref_po').val(noreftxt);
            $('#txt_tgl_po').val(tglpo);
            $('#txt_kd_supplier').text(kode_supply);
            $('#txt_supplier').val(nama_supply);
            $("#modalListPo").modal('hide');
            nopo(nopotxt);

        });
    });

    $(document).ready(function() {
        $(document).on('click', '#pilih_item_po', function() {

            var n = $('#hidden_no_row').val();

            var kodebar = $(this).data('kodebar');
            var nabar = $(this).data('nabar');
            var qty = $(this).data('qty');
            var sat = $(this).data('sat');
            var ket = $(this).data('ket');
            // console.log(nabar);

            // Set data
            $('#txt_kode_barang_' + n).val(kodebar);
            $('#txt_nama_brg_' + n).text(nabar);
            $('#txt_qty_' + n).val(qty);
            $('#txt_satuan_' + n).text(sat);
            $('#txt_ket_rinci_' + n).text(ket);
            $("#modalListItemPo").modal('hide');

        });
    });

    function cari_barang(no_row) {
        // $('#hidden_no_row').empty();
        console.log(no_row);
        $('#hidden_no_row').val(no_row);
        $('#modalListItemPo').modal('show');
        // $('#tableListBarang').DataTable().destroy();
        // listBarang(no_row);
    }

    function tambah_row(num_last) {
        var row = ++num_last;
        console.log(' baris ke ' + row);
        // var row = $('#hidden_no_table').val();
        var tr_buka = '<tr id="tr_' + row + '">';
        var td_col_1 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_proses_status_' + row + '" name="hidden_proses_status_' + row + '" value="insert">'
            // +'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalBarang('+row+')"></button><br />'
            +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row(' + row + ')"></button><br />' +
            '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + row + '" name="btn_hapus_row_' + row + '" onclick="hapus_row(' + row + ')"></button>' +
            '</td>';
        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">'
        var td_col_2 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_kode_barang_' + row + '" name="txt_kode_barang_' + row + '" placeholder="Kode Barang" onfocus="cari_barang(' + row + ')" readonly>' +
            '<label>' +
            '<input type="checkbox" id="chk_asset_' + row + '" name="chk_asset_' + row + '" value=""> <font face="Verdana" size="1.5"> Asset ?</font>' +
            '</label>' +
            '</td>';
        var td_col_3 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_nama_brg_' + row + '" name="txt_nama_brg_' + row + '" placeholder="Nama Barang" readonly>' +
            '</td>';
        var td_col_4 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control currencyduadigit" id="txt_qty_' + row + '" name="txt_qty_' + row + '" placeholder="Qty">' +
            // '<label id="lbl_qty_po_' + row + '">Qty PO : </label>' +
            // '<label id="lbl_sisa_qty_' + row + '">Sisa Qty : </label>'+
            '<input type="hidden" id="hidden_qty_po_' + row + '" name="hidden_qty_po_' + row + '">' +
            '<input type="hidden" id="hidden_sisa_qty_' + row + '" name="hidden_sisa_qty_' + row + '">' +
            '</td>';
        var td_col_5 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_satuan_' + row + '" name="txt_satuan_' + row + '" placeholder="Satuan" readonly>' +
            // '<label id="lbl_grup_' + row + '" name="lbl_grup_' + row + '">Grup : -</label>' +
            '<input type="hidden" id="hidden_grup_' + row + '" name="hidden_grup_' + row + '">' +
            '</td>';
        var td_col_6 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="resizable_textarea form-control" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" placeholder="Keterangan" rows="1" onkeypress="saveRinciEnter(event,' + row + ')"></textarea>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '<input type="hidden" id="hidden_id_masuk_item_' + row + '" name="hidden_id_masuk_item_' + row + '">' +
            '</td>';
        var td_col_7 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + td_col_7 + form_tutup + tr_tutup);

        $('#txt_qty_' + row).number(true, 2);

        // $('html, body').animate({
        //     scrollTop: $("#tr_" + row).offset().top
        // }, 2000);

        // row++;
        $('#hidden_no_table').val(row);
    }

    // Start Data Table Server Side
    var table;

    function nopo(nopotxt) {
        $(document).ready(function() {

            //datatables
            var nopo = nopotxt;
            console.log(nopo);
            table = $('#tableDetailItemPo').DataTable({
                destroy: true,
                "processing": true,
                "serverSide": true,
                "order": [],

                "ajax": {
                    "url": "<?php echo site_url('Lpb/get_data_item_po') ?>",
                    "type": "POST",
                    "data": {
                        nopo: nopo
                    }

                },

                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }, ],

            });

        });
    }
    // End Data Table Server Side
</script>