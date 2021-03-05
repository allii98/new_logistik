<div class="container-fluid">

    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">SPP</h4>
                    <p class="sub-header">
                        Surat Permintaan Pembelian
                    </p>

                    <div class="row">
                        <div class="col-lg-1 col-12">
                            <div class="form-group">
                                <label for="example-select">Devisi*</label>
                                <select class="form-control" id="devisi">
                                    <option selected disabled>Pilih</option>
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
                                <select class="form-control" id="jenis_spp">
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
                                <select class="form-control" id="alokasi">
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
                                <input type="text" class="form-control bg-light" value="<?= date('d/m/Y'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Tgl terima*</label>
                                <input type="date" class="form-control" id="tgl_terima">
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Department*</label>
                                <select class="form-control" id="dept">
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
                                <input type="text" id="kd_dept" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group">
                                <label for="example-select">Keterangan</label>
                                <textarea class="form-control" rows="2" id="ket"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="sub-header mb-0 mt-0">
                                <label for="">No. SPP : ... &nbsp; No. Ref SPP : ...</label>
                            </p>

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
                                            <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                            <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>
                                            <button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                        </td>
                                        <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                            <td width="30%">
                                                <input type="text" class="form-control" id="nakobar" name="txt_cari_kode_brg_1" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('1')"><br />
                                                <!-- <label id="lbl_kode_brg_1">Kode : ... </label><br />
                                                <label id="lbl_nama_brg_1">Nama Barang : ...</label><br /> -->

                                                <input type="text" id="dev">
                                                <input type="text" id="jp">
                                                <input type="text" id="alok">
                                                <input type="text" id="tgl_ref" value="<?= date('d/m/Y'); ?>">
                                                <input type="text" id="tgl_trm">
                                                <input type="text" id="depart">
                                                <input type="text" id="keterangan">

                                                <input type="hidden" id="hidden_kode_brg_1" name="hidden_kode_brg_1">
                                                <input type="hidden" id="hidden_nama_brg_1" name="hidden_nama_brg_1">
                                            </td>
                                            <td width="15%">
                                                <input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="26" required /><br />
                                                <!-- <label id="lbl_stok_1">Stok : ...</label><br />
                                                <label id="lbl_satuan_brg_1">Satuan : ...</label><br /> -->

                                                <input type="hidden" id="hidden_stok_1" name="hidden_stok_1">
                                                <input type="hidden" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1">
                                            </td>
                                            <td width="10%">
                                                <span id="stok"></span>
                                                <span> | </span>
                                                <span id="satuan"></span>
                                            </td>
                                            <td>
                                                <textarea id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" class="resizable_textarea form-control" size="26" placeholder="Merk/Type/Jenis, jika ada" onkeypress="saveRinciEnter(event,'1')"></textarea>
                                                <label id="lbl_status_simpan_1"></label>

                                                <input type="hidden" id="hidden_id_ppo_item_1" name="hidden_id_ppo_item_1">
                                            </td>
                                            <td width="5%">
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

<script>
    $(document).ready(function() {
        $('#dept').on('change', function() {
            var data = this.value;
            // alert(this.value);
            // console.log(data);
            $('#kd_dept').val(data);
        });
    });

    function cari_barang(no_row) {
        // $('#hidden_no_row').empty();
        // $('#hidden_no_row').val(no_row);
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

    $(document).ready(function() {
        $(document).on('click', '#data_barang', function() {

            var nakobar = $(this).data('nabar') + " - " + $(this).data('kodebar');
            var satuan = $(this).data('satuan');
            // console.log(nabar);

            // Set data to Form Edit
            $('#nakobar').val(nakobar);
            $('#satuan').text(satuan);
            $("#modalListBarang").modal('hide');
        });
    });

    //inputan save
    $(document).ready(function() {
        $('#devisi').on('change', function() {
            var data = this.value;
            $('#dev').val(data);
        });

        $('#jenis_spp').on('change', function() {
            var data = this.value;
            $('#jp').val(data);
        });

        $('#alokasi').on('change', function() {
            var data = this.value;
            $('#alok').val(data);
        });

        $('#tgl_terima').on('change', function() {
            var data = this.value;
            $('#tgl_trm').val(data);
        });

        $('#dept').on('change', function() {
            var data = this.value;
            $('#depart').val(data);
        });

        $("#ket").keyup(function() {
            var data = $("#ket").val();
            $('#keterangan').val(data);
        });
    });

    $(document).ready(function() {
        $(document).on('click', '#data_barang', function() {
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
                    $('#stok').text(data);
                }
            });
            return false;
        });
    });
</script>