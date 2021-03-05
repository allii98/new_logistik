<div class="container-fluid">
    <!-- start row-->
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="widget-rounded-circle card-box mt-2">
                <h4 class="header-title">LPB</h4>
                <p class="sub-header">
                    Input Laporan Penerimaan Barang
                </p>
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label">Tgl Terima <span class="required">*</span>
                            </label>
                            <div class="col-8">
                                <input id="tgl_terima" name="tgl_terima" class="form-control bg-light" required="required" type="date" value="<?= date('Y-m-d') ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Tgl Input <span class="required">*</span>
                            </label>
                            <div class="col-md">
                                <input id="tgl_input" name="tgl_input" class="form-control bg-light" value="<?= date('Y-m-d'); ?>" required="required" type="date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-5 col-form-label">No. Pengantar<span class="required">*</span>
                            </label>
                            <div class="col-md">
                                <input id="no_pengantar" name="no_pengantar" class="form-control" required="required" type="text" placeholder="No. Pengantar" autocomplite="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-5 col-form-label">Lokasi Gudang <span class="required">*</span>
                            </label>
                            <div class="col-md col-sm col-xs-12">
                                <input id="lokasi_gudang" name="lokasi_gudang" class="form-control" required="required" type="text" placeholder="Lokasi Gudang" autocomplite="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-3 col-form-label">No. PO <span class="required">*</span>
                            </label>
                            <div class="col-md row ml-0">
                                <input id="no_po" name="no_po" class="form-control col-md-3" required="required" type="text" onfocus="pilihModalDataPO()" placeholder="No. PO" autocomplite="off">
                                <input id="txt_ref_po" name="txt_ref_po" class="form-control col-md-8 ml-1" type="text" placeholder="Ref. PO" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Tgl. PO<span class="required">*</span>
                            </label>
                            <div class="col-md col-sm col-xs-12">
                                <input id="tgl_po" name="tgl_po" class="form-control" required="required" type="text" placeholder="Tgl. PO" readonly autocomplite="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row mb-1">
                            <label class="col-4 col-form-label">Supplier <span class="required">*</span>
                            </label>
                            <div class="col-md row ml-0">
                                <input id="kd_supplier" name="kd_supplier" class="form-control col-md-3" required="required" type="text" placeholder="Kode Supplier" readonly>
                                <input id="txt_supplier" name="txt_supplier" class="form-control col-md-8 ml-1" required="required" type="text" placeholder="Supplier" readonly>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-4 col-form-label">Keterangan <span class="required">*</span>
                            </label>
                            <div class="col-md col-sm col-xs-12">
                                <textarea class="resizable_textarea form-control" id="ket_pengiriman" name="ket_pengiriman" placeholder="Keterangan" readonly="" rows="1" autocomplite="off">-</textarea>
                            </div>
                        </div>
                    </div>






                </div>

                <hr>

                <div class="row mx-0">
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
                                    <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                        <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                        <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                        <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                    </td>
                                    <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <input type="text" class="form-control" id="txt_kode_barang_1" name="txt_kode_barang_1" placeholder="Kode Barang" onfocus="pilihModalBarang('1')" readonly>
                                            <label>
                                                <input type="checkbox" id="chk_asset_1" name="chk_asset_1" value=""> Asset ?
                                            </label>
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <input type="text" class="form-control" id="txt_nama_brg_1" name="txt_nama_brg_1" placeholder="Nama Barang" readonly autocomplite="off">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" autocomplite="off">


                                            <input type="hidden" id="hidden_qty_po_1" name="hidden_qty_po_1">
                                            <input type="hidden" id="hidden_sisa_qty_1" name="hidden_sisa_qty_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <input type="text" class="form-control" id="txt_satuan_1" name="txt_satuan_1" placeholder="Satuan" readonly autocomplite="off">

                                            <input type="hidden" id="hidden_grup_1" name="hidden_grup_1">
                                        </td>
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                            <textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,1)"></textarea>
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
</div>
<!-- end row-->


</div> <!-- container -->

<!-- Pilih PO -->
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalDataPO">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Pilih PO</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <!-- <div class="form-group">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Alokasi 
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
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
						</div> -->
                    <div class="table-responsive">
                        <table id="tableDetailPO" class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl</th>
                                    <th>Ref. PO</th>
                                    <th>No. PO</th>
                                    <th>Supplier</th>
                                    <th>Lokasi Beli</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyDetailSPP">
                                <tr>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pilih PO -->

<!-- LIST BARANG -->
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBarang">
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
                            <input type="hidden" id="hidden_no_row_barang" name="hidden_no_row_barang">
                            <table id="tableBarang" class="table table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
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
<!--  END LIST BARANG -->

<script>
    function pilihModalDataPO() {
        $('#modalDataPO').modal('show');
        tableDataPO();
    }

    function tableDataPO() {
        $('#tableDetailPO').DataTable().destroy();
        $('#tableDetailPO').DataTable({
            "paging": true,
            "scrollY": false,
            "scrollX": true,
            "searching": true,
            "select": true,
            "bLengthChange": true,
            "scrollCollapse": true,
            "bPaginate": true,
            "bInfo": true,
            "bSort": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "columns": [{
                    "width": "5%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "30%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": null
                },
            ],
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
            "drawCallback": function(settings) {
                $('#tableDetailPO tr').each(function() {
                    var Cell = $(this).find('td');

                    Cell.parent().on('mouseover', Cell, function() {
                        Cell.parent().css('background-color', '#26b99a');
                        Cell.parent().css('color', '#ffffff');

                        Cell.parent().bind("mouseout", function() {
                            Cell.parent().css('background-color', '');
                            Cell.parent().css('color', '#73879c');
                        });
                    });
                });
            },
        });
        var rel = setInterval(function() {
            $('#tableDetailPO').DataTable().ajax.reload();
            clearInterval(rel);
        }, 100);
    }



    function pilihModalBarang(row) {
        $('#modalBarang').modal('show');
        tableBarang();
        $('#hidden_no_row_barang').val(row);
    }
</script>