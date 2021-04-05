<!-- start row-->
<div class="row justify-content-center">
    <div class="col-md">
        <div class="widget-rounded-circle card-box">
            <h4 class="header-title mb-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data PO</h4>
            <hr>
            <div class="row">
                <!-- <div class="ribbon ribbon-danger float-right" id="pesan_"><i class="mdi mdi-access-point mr-1"></i>Habis!</div> -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="tableStok" class="table dt-responsive nowrap w-100 dataTable dtr-inline" width="100%">

                        <thead class="thead-light">
                            <tr role="row">
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No.</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Kode Barang</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nama Barang</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Satuan</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Group</th>
                                <th colspan="4" rowspan="1" style="text-align: center;">Saldo</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Ket</th>
                                <th rowspan="2" class="align-middle sorting_asc" tabindex="0" aria-controls="complex-header-datatable" colspan="1" style="width: 239.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Min. Stock</th>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="complex-header-datatable" rowspan="1" colspan="1" style="width: 353.4px;" aria-label="Position: activate to sort column ascending">Awal (Qty)</th>
                                <th class="sorting" tabindex="0" aria-controls="complex-header-datatable" rowspan="1" colspan="1" style="width: 152.4px;" aria-label="Salary: activate to sort column ascending">Awal (Nilai)</th>
                                <th class="sorting" tabindex="0" aria-controls="complex-header-datatable" rowspan="1" colspan="1" style="width: 177.4px;" aria-label="Office: activate to sort column ascending">Akhir (Qty)</th>
                                <th class="sorting" tabindex="0" aria-controls="complex-header-datatable" rowspan="1" colspan="1" style="width: 106.4px;" aria-label="Extn.: activate to sort column ascending">Akhir (Nilai)</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalInputStockAwal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Stock Awal</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="javascript:;" class="form-horizontal" id="form_input_stock_awal" name="form_input_stock_awal" method="POST">
                        <input type="hidden" id="hidden_id" name="hidden_id">

                        <div class="form-group row">
                            <label for="txt_nmr_part" class="col-3 col-form-label">Kode Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_kode_barang" placeholder="Nomor Part" onfocus="modalListBarang()" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_nm_barang" class="col-3 col-form-label">Nama Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_nm_barang" name="txt_nm_barang" placeholder="Nama Barang" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_satuan" class="col-3 col-form-label">Satuan</label>
                            <div class="col-3">
                                <input type="text" class="form-control" id="txt_satuan" name="txt_satuan" placeholder="Satuan" readonly="" required="">
                            </div>
                            <label class="control-label col-md-2">Group</label>
                            <div class="col-md-3">
                                <!-- <input type="text" class="form-control" id="txt_grup" name="txt_grup" placeholder="Grup" readonly="" required=""> -->
                                <textarea class="resizable_textarea form-control" id="txt_grup" name="txt_grup" placeholder="Grup" readonly="" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_min_stock_qty" class="col-3 col-form-label">Min. Stock (Qty)</label>
                            <div class="col-3">
                                <input type="text" class="form-control currencyduadigit" id="txt_min_stock_qty" name="txt_min_stock_qty" placeholder="Min. Stock (Qty)" required="" value="0.00">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_saldo_awal_qty" class="col-3 col-form-label">Saldo Awal (Qty)</label>
                            <div class="col-3">
                                <input type="text" class="form-control currencyduadigit" id="txt_saldo_awal_qty" name="txt_saldo_awal_qty" placeholder="Min. Stock (Qty)" required="" value="0.00">
                            </div>

                            <label class="control-label col-md-2">Saldo Awal (Nilai)</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control currencyduadigit" id="txt_saldo_awal_nilai" name="txt_saldo_awal_nilai" placeholder="Saldo Awal (Nilai)" required="" value="0.00">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="control-label col-md-3">Saldo Akhir (Qty)</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control currencyduadigit" id="txt_saldo_akhir_qty" name="txt_saldo_akhir_qty" placeholder="Saldo Akhir (Qty)" required="" value="0.00">
                                </div>
                                <label class="control-label col-md-2">Saldo Akhir (Nilai)</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control currencyduadigit" id="txt_saldo_akhir_nilai" name="txt_saldo_akhir_nilai" placeholder="Saldo Akhir (Nilai)" required="" value="0.00">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="control-label col-md-3">Keterangan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="txt_keterangan_stock_awal" name="txt_keterangan_stock_awal" placeholder="Keterangan" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-success col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
                                <button class="btn btn-sm btn-warning col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Ubah" id="btn_ubah" name="btn_ubah">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_simpan">Simpan</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div> -->
            </div>
        </div>
    </div>

</div>
<script>
    var table;
    $(document).ready(function() {

        datastok();
    });

    function datastok() {
        table = $('#tableStok').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Stok/get_ajax') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });
    }

    function detail_barang(kodebar, id) {
        $('#modalInputStockAwal').modal('show');
        $('#btn_simpan').hide();
        $('#btn_ubah').show();

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('stock_awal/detail_stock'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            // cache   : false,
            // contentType : false,
            // processData : false,

            data: {
                'id': id,
                'kodebar': kodebar
            },
            success: function(data) {
                $('#hidden_id').val(data.id);
                $('#txt_kode_barang').val(data.kodebartxt);
                $('#txt_nama_barang').val(data.nabar);
                $('#txt_satuan').val(data.satuan);
                $('#txt_min_stock_qty').val(data.minstok);
                $('#txt_saldo_awal_qty').val(data.saldoawal_qty);
                $('#txt_saldo_awal_nilai').val(data.saldoawal_nilai);
                $('#txt_saldo_akhir_qty').val(data.saldoakhir_qty);
                $('#txt_saldo_akhir_nilai').val(data.saldoakhir_nilai);
                $('#txt_keterangan_stock_awal').val(data.ket);
                // $('#hidden_grup').val(data.grp);
                $('#txt_grup').val(data.grp);

            },
            error: function(request) {
                alert(request.responseText);
                new PNotify({
                    title: 'Error',
                    text: 'Gagal mengambil data barang',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
                });
            }
        });
    }
</script>