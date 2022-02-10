<!-- start row-->
<div class="row justify-content-center">
    <div class="col-md">
        <div class="widget-rounded-circle card-box">

            <h4 class="header-title mb-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data Barang</h4>
            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" onclick="modalInputBarang()">Tambah</button>
            <hr>
            <div class=" row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <table id="tableBarang" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <font face="Verdana" size="2.5">#</font>
                                        </th>
                                        <th>
                                            <font face="Verdana" size="2.5">No.</font>
                                        </th>
                                        <th>
                                            <font face="Verdana" size="2.5">Kode Barang</font>
                                        </th>
                                        <th>
                                            <font face="Verdana" size="2.5">Nama Barang</font>
                                        </th>
                                        <th>
                                            <font face="Verdana" size="2.5">Group</font>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- modalsimpan -->
    <!-- <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalInputBarang">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Detail Barang</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="javascript:;" class="form-horizontal" id="form_input_master_barang" name="form_input_master_barang" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="hidden_id" name="hidden_id">
                        <div class="form-group row">
                            <label for="txt_nmr_part" class="col-3 col-form-label">Nomor Part</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_nmr_part" placeholder="Nomor Part" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_kd_barang" class="col-3 col-form-label">Kode Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_kd_barang" placeholder="Kode Barang" onfocus="modalListCOA()" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_nm_barang" class="col-3 col-form-label">Nama Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_nm_barang" name="txt_nm_barang" placeholder="Nama Barang" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cmb_grup_barang" class="col-3 col-form-label">Group Barang</label>
                            <div class="col-9">
                                <select class="form-control" id="cmb_grup_barang" name="cmb_grup_barang" required="">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cmb_satuan" class="col-3 col-form-label">Satuan</label>
                            <div class="col-9">
                                <select class="form-control" id="cmb_satuan" name="cmb_satuan" required="">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_spesifikasi" class="col-3 col-form-label">Spesifikasi</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_spesifikasi" placeholder="Spesifikasi" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_keterangan" class="col-3 col-form-label">Keterangan</label>
                            <div class="col-9">
                                <textarea class="resizable_textarea form-control" id="txt_keterangan" name="txt_keterangan" placeholder="Keterangan" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-sm btn-success col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="" id="btn_simpan" name="btn_simpan" data-original-title="Simpan">Simpan</button>
                        <button class="btn btn-sm btn-warning col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="" id="btn_ubah" name="btn_ubah" data-original-title="Ubah">Ubah</button>

                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- endmodalsimpan -->


    <div class="modal fade" id="inputBarang" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-modal="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableModalTitle">Detail Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="javascript:;" class="form-horizontal" id="form_input_master_barang" name="form_input_master_barang" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="hidden_id" name="hidden_id">
                        <div class="form-group row">
                            <label for="txt_nmr_part" class="col-3 col-form-label">Nomor Part</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_nmr_part" placeholder="Nomor Part" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_kd_barang" class="col-3 col-form-label">Kode Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_kd_barang" placeholder="Kode Barang" onfocus="modalListCOA()" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_nm_barang" class="col-3 col-form-label">Nama Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_nm_barang" name="txt_nm_barang" placeholder="Nama Barang" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_nm_barang" class="col-3 col-form-label">Nama Barang</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_satuan" name="txt_satuan" placeholder="Satuan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_spesifikasi" class="col-3 col-form-label">Spesifikasi</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txt_spesifikasi" placeholder="Spesifikasi" autocomplete="off" value="-">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_keterangan" class="col-3 col-form-label">Keterangan</label>
                            <div class="col-9">
                                <textarea class="form-control" id="txt_keterangan" name="txt_keterangan" placeholder="Keterangan">-</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" id="btn_ubah">Ubah</button>
                        <button class="btn btn-primary" id="btn_simpan">Simpan</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalListCOA">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Akun COA</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="table-responsive">
                                <input type="hidden" id="hidden_no_row_barang" name="hidden_no_row_barang">
                                <table id="tableListCOA" class="table table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. COA</th>
                                            <th>Nama Account</th>
                                            <th>Type</th>
                                            <th>Grup</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_list_coa">
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
</div>

<script>
    $("#form_input_master_barang").validate({
        ignore: [],
        submitHandler: function(form) {
            simpan_barang();
        }
    });

    function simpan_barang() {
        // console.log("Hello WORLD!");

        var form_data = new FormData();

        form_data.append('hidden_id', $('#hidden_id').val());
        form_data.append('txt_nmr_part', $('#txt_nmr_part').val());
        form_data.append('txt_kd_barang', $('#txt_kd_barang').val());
        form_data.append('txt_nm_barang', $('#txt_nm_barang').val());
        form_data.append('cmb_grup_barang', $('#cmb_grup_barang').val());
        form_data.append('cmb_satuan', $('#cmb_satuan').val());
        form_data.append('txt_spesifikasi', $('#txt_spesifikasi').val());
        form_data.append('txt_keterangan', $('#txt_keterangan').val());
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Barang/simpan_barang'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                $('#inputBarang').modal('hide');
                listBarang();
                $.toast({
                    heading: 'Success',
                    text: 'Data Berhasil Disimpan',
                    position: 'top-right',
                    stack: true,
                    icon: 'success'
                });
            },
            error: function(request) {
                alert(request.responseText);

            }
        });
    }

    function detail_barang(kodebar, id) {
        $('#inputBarang').modal('show');
        $('#btn_simpan').hide();
        $('#btn_ubah').show();

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Barang/detail_barang'); ?>",
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
                group_barang(data.kodebartxt);

                $('#cmb_grup_barang').attr('disabled', '');
                $('#txt_nmr_part').attr('disabled', '');
                $('#txt_kd_barang').attr('disabled', '');
                $('#txt_nm_barang').attr('disabled', '');

                $('#hidden_id').val(data.id);
                $('#txt_nmr_part').val(data.nopart);
                $('#txt_kd_barang').val(data.kodebartxt);
                $('#txt_nm_barang').val(data.nabar);
                $('#cmb_satuan').val(data.satuan);
                $('#txt_spesifikasi').val(data.spek);
                $('#txt_keterangan').val(data.ket);
            },
            error: function(request) {
                alert(request.responseText);

            }
        });
    }

    function modalInputBarang() {
        $('#inputBarang').modal('show');
        $('#form_input_master_barang')[0].reset();
        $('#btn_simpan').show();
        $('#btn_ubah').hide();

        $('#cmb_grup_barang').removeAttr('disabled');
        $('#txt_nmr_part').removeAttr('disabled');
        $('#txt_kd_barang').removeAttr('disabled');
        $('#txt_nm_barang').removeAttr('disabled');

        var opsi_grup_barang = '<option value="">Pilih</option>';
        $('#cmb_grup_barang').empty();
        $('#cmb_grup_barang').append(opsi_grup_barang);
    }

    function group_barang(no_coa) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Barang/get_group_barang'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,
            data: {
                'no_coa': no_coa
            },
            success: function(data) {
                var opsi_grup_barang = '<option value="' + data.nama + '">' + data.nama + '</option>';
                $('#cmb_grup_barang').empty();
                $('#cmb_grup_barang').append(opsi_grup_barang);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function satuan() {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Barang/get_satuan'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: '',
            success: function(data) {
                $('#cmb_satuan').empty();
                var no_opsi = '<option value="-">-</option>';
                $('#cmb_satuan').append(no_opsi);

                $.each(data, function(index) {
                    var opsi_cmb_satuan = '<option value="' + data[index].satuan + '">' + data[index].satuan + '</option>';
                    $('#cmb_satuan').append(opsi_cmb_satuan);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function listBarang() {
        $('#tableBarang').DataTable().destroy();
        var table = $('#tableBarang').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Barang/get_ajax') ?>",
                "type": "POST"
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,
            }, ],
        });
    }

    $(document).ready(function() {
        listBarang();
        satuan();

        $('#tableListCOA tbody').on('click', 'tr', function() {
            var dataClick = $('#tableListCOA').DataTable().row(this).data();
            console.log(dataClick);

            var no_coa = dataClick[1].trim();
            var nama_account = dataClick[2].trim();
            var row = $('#hidden_no_row').val();
            $('#txt_kd_barang').val(no_coa);
            $('#txt_nm_barang').val(nama_account);

            $('#hidden_no_acc_' + row).val(no_coa);
            $('#hidden_nama_acc_' + row).val(nama_account);

            $('#modalListCOA').modal('hide');
            group_barang(no_coa);
        });

    });

    function modalListCOA() {
        $('#modalListCOA').modal('show');
        tableListCOA();
    }

    function tableListCOA() {
        $('#tableListCOA').DataTable().destroy();
        $('#tableListCOA').DataTable({
            "processing": true,
            "serverSide": true,
            "select": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Barang/get_coa') ?>",
                "type": "POST"
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "lengthMenu": [
                [5, 10, 15, -1],
                [10, 15, 20, 25]
            ],
        });
    }
</script>