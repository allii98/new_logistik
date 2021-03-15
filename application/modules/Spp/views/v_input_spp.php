<div class="container-fluid">

    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">SPP</h4>
                    <p class="sub-header">
                        Surat Permintaan Pembelian
                    </p>

                    <div class="row div_form_1">
                        <div class="col-lg-1 col-12">
                            <div class="form-group">
                                <label for="example-select">Devisi*</label>
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
                        <div class="col-lg-1 col-12">
                            <div class="form-group">
                                <label for="example-select">Jenis SPP*</label>
                                <select class="form-control" id="cmb_jenis_permohonan">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    switch ($sesi_sl) {
                                        case 'HO':
                                    ?>
                                            <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                            <!-- <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option> -->
                                            <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                            <!-- <option value="SPPK">SPPK - Surat Permohonan Pembelian Khusus</option> -->
                                        <?php
                                            break;
                                        case 'RO':
                                        case 'SITE':
                                        case 'PKS':
                                        ?>
                                            <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                            <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option>
                                            <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-1 col-12">
                            <div class="form-group">
                                <label for="example-select">Alokasi*</label>
                                <select class="form-control" id="cmb_alokasi">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    switch ($sesi_sl) {
                                        case 'HO':
                                    ?>
                                            <option value="HO">HO</option>
                                            <option value="RO">RO</option>
                                            <option value="SITE">SITE</option>
                                            <option value="SITE">PKS</option>
                                        <?php
                                            break;
                                        case 'RO':
                                        case 'SITE':
                                        case 'PKS':
                                        ?>
                                            <option value="SITE">SITE</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Tgl Referensi*</label>
                                <input type="text" id="txt_tgl_ref" class="form-control bg-light" value="<?= date('d/m/Y'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Tgl terima*</label>
                                <input type="date" class="form-control" id="txt_tgl_terima">
                            </div>
                        </div>
                        <input id="txt_tanggal" name="txt_tanggal" class="form-control" required="required" value="<?= date('d/m/Y'); ?>" type="hidden" placeholder="Tanggal" readonly>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Department*</label>
                                <select class="form-control" id="cmb_departemen">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    foreach ($dept as $d) : {
                                    ?>
                                            <option value="<?= $d['kode']; ?>"><?= $d['nama']; ?></option>
                                    <?php
                                        }
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="form-group">
                                <label for="example-select">Kode</label>
                                <input type="text" id="txt_kode_departemen" class="form-control bg-light" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Keterangan</label>
                                <textarea class="form-control" rows="2" id="txt_keterangan"></textarea>
                            </div>
                        </div>
                        <input type="hidden" id="hidden_id_ppo">
                    </div>
                    <!-- end row-->
                    <div class="row div_form_2">
                        <div class="col-sm-12">
                            <p class="sub-header mb-0 mt-0">
                                <label id="lbl_spp_status" name="lbl_spp_status">No. SPP : ... &nbsp; No. Ref SPP : ...</label>
                            </p>
                            <input type="hidden" id="hidden_no_spp" name="hidden_no_spp">
                            <h6 id="h4_no_spp" name="h4_no_spp"></h6>
                            <h6 id="h4_no_ref_spp" name="h4_no_ref_spp"></h6>

                            <div class="table-responsive">
                                <table id="tableRinciBarang" class="table table-striped table-bordered table-in">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama & Kode Barang</th>
                                            <th>Qty</th>
                                            <th>Stok/Satuan</th>
                                            <th>Merk/Type/Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_rincian" name="tbody_rincian">
                                        <tr id="tr_1">
                                            <td width="3%">
                                                <input type="hidden" id="hidden_no_table_1" name="hidden_no_table_1">
                                                <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_1" name="btn_tambah_row" onclick="tambah_row()"></button>
                                                <button style="display:none;" class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row" onclick="hapus_row('1')"></button>
                                            </td>
                                            <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                                <td width="30%">
                                                    <input type="text" class="form-control" id="nakobar_1" name="txt_cari_kode_brg_1" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('1')"><br />

                                                    <input type="hidden" id="hidden_kode_brg_1" name="hidden_kode_brg_1">
                                                    <input type="hidden" id="hidden_nama_brg_1" name="hidden_nama_brg_1">
                                                </td>
                                                <td width="15%">
                                                    <input type="number" class="form-control" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="26" required /><br />
                                                </td>
                                                <td width="10%">
                                                    <span id="stok_1"></span>
                                                    <span> | </span>
                                                    <span id="satuan_1"></span>
                                                    <input type="hidden" id="hidden_stok_1" name="hidden_stok_1">
                                                    <input type="hidden" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1">
                                                </td>
                                                <td>
                                                    <textarea id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" class="form-control" size="26" placeholder="Merk/Type/Jenis, jika ada"></textarea>
                                                    <label id="lbl_status_simpan_1"></label>

                                                    <input type="hidden" id="hidden_id_item_ppo_1">

                                                </td>
                                                <td width="5%">
                                                    <button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
                                                </td>
                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end col -->
                    </div>

                    <!-- end row -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

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

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
                <p>Apakah Anda yakin ingin menghapus data ini ???</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btn_delete" onclick="deleteData()">Hapus</button>
                <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#cmb_departemen').on('change', function() {
            var data = this.value;
            // alert(this.value);
            // console.log(data);
            $('#txt_kode_departemen').val(data);
        });
    });

    function cari_barang(no_row) {
        // $('#hidden_no_row').empty();
        $('#hidden_no_row').val(no_row);
        $('#modalListBarang').modal('show');
        // $('#tableListBarang').DataTable().destroy();
        // listBarang(no_row);
    }

    // Start Data Table Server Side
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#dabar').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Spp/get_data_barang') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });

    });
    // End Data Table Server Side

    // pilih item dari data table server side

    $(document).ready(function() {
        $(document).on('click', '#data_barang', function() {

            var n = $('#hidden_no_row').val();

            var nabar_hide = $(this).data('nabar');
            var kodebar_hide = $(this).data('kodebar');
            var nakobar = $(this).data('nabar') + " - " + $(this).data('kodebar');
            var satuan = $(this).data('satuan');
            // console.log(nabar);

            // Set data
            $('#hidden_nama_brg_' + n).val(nabar_hide);
            $('#hidden_kode_brg_' + n).val(kodebar_hide);
            $('#nakobar_' + n).val(nakobar);
            $('#satuan_' + n).text(satuan);
            $('#hidden_satuan_brg_' + n).val(satuan);
            $("#modalListBarang").modal('hide');

        });
    });

    // pilih item dari data table server side
    $(document).ready(function() {
        $(document).on('click', '#data_barang', function() {

            var n = $('#hidden_no_row').val();

            var kd_bar = $(this).data('kodebar');
            // console.log(kd_bar);
            // var id = $(this).attr('data');
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('Spp/getStok') ?>",
                dataType: "JSON",
                data: {
                    kd_bar: kd_bar
                },
                success: function(data) {
                    $('#stok_' + n).text(data);
                    $('#hidden_stok_' + n).val(data);
                }
            });
            return false;
        });
    });

    //Simpan Data
    // var n = $('#hidden_no_row').val();
    //var n = 2;

    function saveRinciClick(n) {

        console.log(n);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Spp/saveSpp') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
                if ($.trim($('#hidden_no_spp').val()) == '') {
                    $('#lbl_spp_status').empty();
                    $('#lbl_spp_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
                }
            },

            data: {
                cmb_alokasi: $('#cmb_alokasi').val(),
                hidden_no_spp: $('#hidden_no_spp').val(),
                txt_tanggal: $('#txt_tanggal').val(),
                txt_tgl_terima: $('#txt_tgl_terima').val(),
                txt_tgl_ref: $('#txt_tgl_ref').val(),
                txt_keterangan: $('#txt_keterangan').val(),
                cmb_jenis_permohonan: $('#cmb_jenis_permohonan').val(),
                txt_kode_departemen: $('#txt_kode_departemen').val(),
                cmb_departemen: $('#cmb_departemen').val(),
                hidden_kode_brg: $('#hidden_kode_brg_' + n).val(),
                hidden_nama_brg: $('#hidden_nama_brg_' + n).val(),
                hidden_satuan_brg: $('#hidden_satuan_brg_' + n).val(),
                txt_qty: $('#txt_qty_' + n).val(),
                hidden_stok: $('#hidden_stok_' + n).val(),
                txt_keterangan_rinci: $('#txt_keterangan_rinci_' + n).val()
            },

            success: function(data) {
                console.log(data);
                // console.log(nospp);
                // console.log(noref);
                $('#devisi').val("");
                $('#jenis_spp').val("");

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label id="status_sukses" style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

                $('#lbl_spp_status').empty();
                $('#h4_no_spp').html('No. SPP : ' + data.nospp);
                $('#hidden_no_spp').val(data.nospp);

                $('#h4_no_ref_spp').html('No. Ref. SPP : ' + data.noref);
                // $('#hidden_no_ref_ppo').val(data.no_ref_ppo);

                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').addClass('bg-light');
                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').attr('disabled', '');

                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).addClass('bg-light');
                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).attr('disabled', '');

                $('#btn_hapus_row_' + n).css('display', 'none');
                $('#btn_simpan_' + n).css('display', 'none');
                $('#btn_ubah_' + n).css('display', 'block');
                $('#btn_hapus_' + n).css('display', 'block');

                $('#hidden_id_ppo').val(data.id_ppo);
                $('#hidden_id_item_ppo_' + n).val(data.id_item_ppo);


                // $('[name="harga"]').val("");
                // $('#ModalaAdd').modal('hide');
                // tampil_data_barang();
            }
        });
        return false;
    };


    function ubahRinci(n) {

        // var n = $('#hidden_no_row').val();

        $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').removeClass('bg-light');
        $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').removeAttr('disabled');

        $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n + '').removeClass('bg-light');
        $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n + '').removeAttr('disabled');

        $('#btn_simpan_' + n).css('display', 'none');
        $('#btn_hapus_' + n).css('display', 'none');
        $('#btn_ubah_' + n).css('display', 'none');
        $('#btn_update_' + n).css('display', 'block');
        $('#btn_cancel_update_' + n).css('display', 'block');

        $("#status_sukses").remove();
    };

    // cancel update
    function cancelUpdate(n) {
        // var data = this.value;
        // console.log(data);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Spp/cancelUpdateItemSpp') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Cancel Update</label>');
            },

            data: {
                hidden_id_item_ppo: $('#hidden_id_item_ppo_' + n).val(),
                hidden_id_ppo: $('#hidden_id_ppo').val()
            },

            success: function(data) {
                console.log(data);

                var ppo = data.data_ppo;
                var item_ppo = data.data_item_ppo;
                // console.log(ppo);

                $('#cmb_jenis_permohonan').append(ppo.jenis);
                $('#cmb_alokasi').append(ppo.lokasi);
                $('#txt_tgl_terima').append(ppo.tgltrm);
                $('#cmb_departemen').append(ppo.namadept);
                $('#txt_kode_departemen').val(ppo.kodedept);
                $('#txt_keterangan').val(ppo.ket);

                var nakobar = item_ppo.nabar + " - " + item_ppo.kodebar;

                $('#nakobar_' + n).val(nakobar);
                $('#txt_qty_' + n).val(item_ppo.qty);
                $('#stok_' + n).text(item_ppo.STOK);
                $('#satuan_' + n).text(item_ppo.sat);
                $('#txt_keterangan_rinci_' + n).val(item_ppo.ket);

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Edit Dibatalkan</label>');

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');

                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').addClass('bg-light');
                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').attr('disabled', '');

                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).addClass('bg-light');
                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).attr('disabled', '');

                $('#btn_update_' + n).css('display', 'none');
                $('#btn_cancel_update_' + n).css('display', 'none');
                $('#btn_ubah_' + n).css('display', 'block');
                $('#btn_hapus_' + n).css('display', 'block');

                // console.log(nospp);
                // console.log(noref);
                // $('#devisi').val("");
                // $('#jenis_spp').val("");

                // $('#lbl_status_simpan_1').empty();
                // $('#lbl_status_simpan_1').append('<label id="status_sukses" style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil Diupdate</label>');

                // // $('#lbl_spp_status').empty();
                // // $('#h4_no_spp').html('No. SPP : ' + data.nospp);
                // // $('#hidden_no_spp').val(data.no_spp);

                // // $('#h4_no_ref_spp').html('No. Ref. SPP : ' + data.noref);
                // // $('#hidden_no_ref_ppo').val(data.no_ref_ppo);

                // $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').addClass('bg-light');
                // $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').attr('disabled', '');

                // $('.div_form_2').find('#nakobar_1, #txt_qty_1, #txt_keterangan_rinci_1').addClass('bg-light');
                // $('.div_form_2').find('#nakobar_1, #txt_qty_1, #txt_keterangan_rinci_1').attr('disabled', '');

                // // $('#btn_hapus_row').css('display', 'none');
                // // $('#btn_simpan_1').css('display', 'none');
                // $('#btn_ubah_1').css('display', 'block');
                // $('#btn_hapus').css('display', 'block');
                // $('#btn_update_1').css('display', 'none');
                // $('#btn_cancel_update_1').css('display', 'none');

                // $('[name="harga"]').val("");
                // $('#ModalaAdd').modal('hide');
                // tampil_data_barang();
            }
        });
    };

    //Update Data
    function updateRinci(n) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Spp/updateSpp') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
            },

            data: {
                cmb_alokasi: $('#cmb_alokasi').val(),
                hidden_no_spp: $('#hidden_no_spp').val(),
                txt_tanggal: $('#txt_tanggal').val(),
                txt_tgl_terima: $('#txt_tgl_terima').val(),
                txt_tgl_ref: $('#txt_tgl_ref').val(),
                txt_keterangan: $('#txt_keterangan').val(),
                cmb_jenis_permohonan: $('#cmb_jenis_permohonan').val(),
                txt_kode_departemen: $('#txt_kode_departemen').val(),
                cmb_departemen: $('#cmb_departemen').val(),
                hidden_kode_brg: $('#hidden_kode_brg_' + n).val(),
                hidden_nama_brg: $('#hidden_nama_brg_' + n).val(),
                hidden_satuan_brg: $('#hidden_satuan_brg_' + n).val(),
                txt_qty: $('#txt_qty_' + n).val(),
                hidden_stok: $('#hidden_stok_' + n).val(),
                txt_keterangan_rinci: $('#txt_keterangan_rinci_' + n).val(),
                hidden_id_ppo: $('#hidden_id_ppo').val(),
                hidden_id_item_ppo: $('#hidden_id_item_ppo_' + n).val()
            },

            success: function(data) {
                console.log(data + "sukses");
                // console.log(nospp);
                // console.log(noref);
                // $('#devisi').val("");
                // $('#jenis_spp').val("");

                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label id="status_sukses" style="color:#6fca+nd;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil Diupdate</label>');

                // $('#lbl_spp_status').empty();
                // $('#h4_no_spp').html('No. SPP : ' + data.nospp);
                // $('#hidden_no_spp').val(data.no_spp);

                // $('#h4_no_ref_spp').html('No. Ref. SPP : ' + data.noref);
                // $('#hidden_no_ref_ppo').val(data.no_ref_ppo);

                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').addClass('bg-light');
                $('.div_form_1').find('#devisi, #cmb_jenis_permohonan, #cmb_alokasi, #txt_tgl_terima, #cmb_departemen, #txt_keterangan').attr('disabled', '');

                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n + '').addClass('bg-light');
                $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n + '').attr('disabled', '');

                // $('#btn_hapus_row').css('display', 'none');
                // $('#btn_simpan_1').css('display', 'none');
                $('#btn_ubah_' + n).css('display', 'block');
                $('#btn_hapus_' + n).css('display', 'block');
                $('#btn_update_' + n).css('display', 'none');
                $('#btn_cancel_update_' + n).css('display', 'none');

                // $('[name="harga"]').val("");
                // $('#ModalaAdd').modal('hide');
                // tampil_data_barang();
            }
        });
        return false;
    };

    function hapusRinci(n) {
        $('#hidden_no_delete').val(n);
        if (n == 1) {
            Swal.fire({
                title: 'Item SPP Tinggal 1',
                text: "Yakin akan menghapus SPP ini?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
                if (result.value) {
                    deleteSpp(n);
                }
            })
        } else {
            $('#modalKonfirmasiHapus').modal('show');
        }
    }

    function deleteSpp(n) {
        console.log(n);

        var no_spp = $('#hidden_no_spp').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Spp/deleteSpp') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus SPP</label>');
            },

            data: {
                no_spp: no_spp
            },

            success: function(data) {
                console.log(data);

                location.reload();
            }
        });

    }


    function deleteData() {
        // var data = this.value;
        // console.log(data);
        var n = $('#hidden_no_delete').val();
        var id_item = $('#hidden_id_item_ppo_' + n).val();
        var id_ppo = $('#hidden_id_ppo').val();

        console.log(id_item);
        console.log(id_ppo);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Spp/deleteItemSpp') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_simpan_' + n).empty();
                $('#lbl_status_simpan_' + n).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus Item</label>');
            },

            data: {
                hidden_id_item_ppo: $('#hidden_id_item_ppo_' + n).val(),
                hidden_id_ppo: $('#hidden_id_ppo').val()
            },

            success: function(data) {
                console.log(data);

                // $('#btn_hapus_row_' + n).css('display', 'none');
                // $('#btn_ubah_' + n).css('display', 'none');
                // $('#btn_hapus_' + n).css('display', 'none');
                // $('#btn_simpan_' + n).css('display', 'none');
                // $('#btn_simpan_' + n).css('display', 'none');
                $('#tr_' + n).css('display', 'none');
                $('#nakobar_' + n).empty();
                $('#nakobar_' + n).val('');
                $('#txt_qty_' + n).empty();
                $('#txt_qty_' + n).val('');
                $('#txt_keterangan_rinci_' + n).empty();
                $('#txt_keterangan_rinci_' + n).val('');
                // $('#txt_keterangan').removeAttr('readonly');
                // $('#cmb_jenis_permohonan').removeAttr('disabled');
                // $('#cmb_alokasi').removeAttr('disabled');

                // $('#lbl_kode_brg_' + n).empty();
                // $('#lbl_nama_brg_' + n).empty()
                // $('#lbl_satuan_brg_' + n).empty();
                // $('#lbl_stok_' + n).empty();
                // $('#lbl_status_simpan_' + n).empty();
                // $('#lbl_spp_status').empty();
                // $('#h4_no_spp').html('No. SPP : ...');
                // $('#h4_no_ref_spp').html('No. Ref. SPP : ...');
                // $('#hidden_no_spp').val('');
                // $('#hidden_no_ref_ppo').val('');
                // $('#hidden_id_ppo').val('');

                $('#hidden_kode_brg_' + n).empty();
                $('#hidden_kode_brg_' + n).val('');
                $('#hidden_nama_brg_' + n).empty();
                $('#hidden_nama_brg_' + n).val('');
                $('#hidden_stok_' + n).empty();
                $('#hidden_stok_' + n).val('');
                $('#hidden_satuan_brg_' + n).empty();
                $('#hidden_satuan_brg_' + n).val('');

                $('#modalKonfirmasiHapus').modal('hide');

                // $('#lbl_kode_brg_' + n).append('Kode : ...');
                // $('#lbl_nama_brg_' + n).append('Nama Barang : ...');
                // $('#lbl_satuan_brg_' + n).append('Satuan : ...');
                // $('#lbl_stok_' + n).append('Stok : ...');
                // $('#h4_no_spp' + n).append('No.SPP : ...');
                // $('#h4_no_ref_spp' + n).append('No. Ref. SPP : ...');
                // $('#txt_qty_' + n).val('');
                // $('#txt_keterangan_rinci_' + n).val('');

            }
        });
    };


    var n = 2;

    function tambah_row() {
        // var n = ;

        var tr_buka = '<tr id="tr_' + n + '">';
        var td_col_1 = '<td width="3%">' +
            '<input type="hidden" id="hidden_no_table_' + n + '" name="hidden_no_table_' + n + '">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row_' + n + '" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';
        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="30%">' +
            '<input type="text" class="form-control" id="nakobar_' + n + '" name="txt_cari_kode_brg_' + n + '" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang(' + n + ')"><br />' +
            '<input type="hidden" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '">' +
            '<input type="hidden" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '">' +
            '</td>';
        var td_col_3 = '<td width="15%">' +
            '<input type="number" class="form-control" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="26" required><br />' +
            '</td>';
        var td_col_4 = '<td>' +
            '<span id="stok_' + n + '"></span><span> | </span><span id="satuan_' + n + '"></span>' +
            '<input type="hidden" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '">' +
            '<input type="hidden" id="hidden_stok_' + n + '" name="hidden_stok_' + n + '">' +
            '</td>';
        var td_col_5 = '<td>' +
            '<textarea id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" class="resizable_textarea form-control" size="26" placeholder="Merk/Type/Jenis, jika ada"></textarea>' +
            '<label id="lbl_status_simpan_' + n + '"></label>' +
            '<input type="hidden" id="hidden_id_item_ppo_' + n + '" name="hidden_id_item_ppo_' + n + '">' +
            '</td>';
        var td_col_6 = '<td width="5%">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + form_tutup + tr_tutup);
        // $('#txt_qty_' + n).number(true, 2);
        /*$('html, body').animate({
            scrollTop: $("#tr_" + n).offset().top
        }, 2000);*/
        // n = parseInt(n) + parseInt(1);
        $('#hidden_no_table_' + n).val(n);
        console.log(n)
        n++;
    }

    function hapus_row(id) {
        // var totalRowCount = $("#tableRinciBarang tr").length;
        var rowCount = $("#tableRinciBarang td").closest("tr").length;

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
</script>