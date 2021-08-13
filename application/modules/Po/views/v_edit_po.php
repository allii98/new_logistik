<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h4 class="header-title ml-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PO <i>(Edit)</i></h4>
                        <div class="button-list">

                            <button onclick="new_po()" class="btn btn-xs btn-success" id="a_po_baru">PO Baru</button>
                            <button onclick="batal()" class="btn btn-xs btn-danger" id="batal_po">Batal PO</button>
                            <button class="btn btn-xs btn-primary" id="cetak" onclick="cetak()">Cetak</button>
                            <button onclick="goBack()" class="btn btn-xs btn-secondary" id="kembali">Kembali</button>
                        </div>
                    </div>
                    <h6 id="lbl_status_delete_po"></h6>
                    <div class="row">
                        <p class="sub-header ml-2" style="margin-top: -12px;">
                            <font face="Verdana" size="2.5">Purchase Order</font>
                        </p>
                    </div>

                    <hr style="margin-top: -15px;" class="mb-0">
                    <input type="hidden" id="hidden_nopo">
                    <input type="hidden" id="status_lokasi" value="<?= $this->session->userdata('status_lokasi') ?>">
                    <input type="hidden" id="ttl_pembayaran" name="ttl_pembayaran" placeholder="Total Pembayaran" readonly required>
                    <?php
                    switch ($sesi_sl) {
                        case 'HO':
                    ?>
                            <div class="x_content mb-0 div_form_2">

                                <!-- <div class="row">
                                    <h6 id="h4_no_po" name="h4_no_po"></h6>&emsp;&emsp;
                                    <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                </div> -->

                                <table border="0" width="50%">


                                    <td>
                                        <h6 id="tgl_po" name="tgl_po"></h6>
                                    </td>

                                    <td>
                                        <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                    </td>

                                </table>
                                <br>
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po" value="<?= $no_po ?>">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="refspp" name="refspp">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                                <div class="table-responsive mt-0">
                                    <table id="tableRinciPO" class="table table-striped table-bordered table-in">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <font face="Verdana" size="1.5">#</font>
                                                </th>
                                                <?php
                                                switch ($sesi_sl) {
                                                    case 'HO':
                                                ?>
                                                        <th>
                                                            <font face="Verdana" size="1.5">SPP</font>
                                                        </th>
                                                    <?php
                                                        break;
                                                    case 'RO':
                                                    case 'SITE':
                                                    case 'PKS':
                                                    ?>
                                                <?php
                                                        break;
                                                    default:
                                                        break;
                                                }
                                                ?>

                                                <!-- <th>
                                                    <font face="Verdana" size="1.5">Jenis Budget</font>
                                                </th> -->

                                                <th>
                                                    <font face="Verdana" size="1.5">Nama&nbsp;&<br>Kode&nbsp;Barang</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Merk</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Qty</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="1.5">Harga</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Kurs</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Disc <span>%</span></font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Biaya Lainnya</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Ket.&nbsp;Biaya</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="1.5">Keterangan</font>
                                                </th>
                                                <!-- <th>
                                                    <font face="Verdana" size="1.5">Jumlah&nbsp;Rp</font>
                                                </th> -->
                                                <th>
                                                    <font face="Verdana" size="1.5">#</font>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_rincian" name="tbody_rincian">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'RO':
                        case 'SITE':
                        case 'PKS':
                        ?>
                            <div class="x_content mb-0 div_form_3">
                                <table border="0" width="80%">
                                    <td width="7%">
                                        <font face="Verdana" size="1.5">
                                            <h6 id="tgl_spp" name="tgl_spp"></h6>
                                        </font>
                                    </td>
                                    <td width="10%">
                                        <font face="Verdana" size="1.5">
                                            <h6 id="h4_no_ref_spp" name="h4_no_ref_spp"></h6>
                                        </font>
                                    </td>
                                    <td width="7%">
                                        <font face="Verdana" size="1.5">
                                            <h6 id="tgl_po" name="tgl_po">
                                            </h6>
                                        </font>
                                    </td>
                                    <td width="15%">
                                        <font face="Verdana" size="1.5">
                                            <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                        </font>

                                    </td>

                                </table>
                                <br>
                                <!-- <div class="row" style="margin-left:4px;">
                                    <h6 id="h4_no_po" name="h4_no_po"></h6>&emsp;&emsp;
                                    <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                </div> -->
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po" value="<?= $no_po ?>">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="refspp" name="refspp">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                                <div class="table-responsive mt-0">
                                    <table id="tableItemPO" class="table table-striped table-bordered table-in">
                                        <thead>
                                            <tr>


                                                <!-- <th>
                                                    <font face="Verdana" size="1.5">Jenis Budget</font>
                                                </th> -->
                                                <th>
                                                    <font face="Verdana" size="1.5">#</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Nama&nbsp;&&nbsp;Kode&nbsp;Barang</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Merk</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Qty</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Harga</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Kurs</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Disc<span>%</span></font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Biaya&nbsp;Lainnya</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Ket.&nbsp;Biaya</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="1.5">Keterangan</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">Jumlah&nbsp;Rp</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="1.5">#</font>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_item" name="tbody_item">
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                    <?php
                            break;
                        default:
                            break;
                    }
                    ?>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-warning h1 text-warning"></i>
                        <h4 class="mt-2">Konfirmasi Hapus</h4>
                        <input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
                        <p class="mt-3">Apakah Anda yakin ingin menghapus data ini ???</p>
                        <button type="button" class="btn btn-warning my-2" data-dismiss="modal" id="btn_delete" onclick="deleteData()">Hapus</button>
                        <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalcarispp">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Pilih SPP</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <input type="hidden" id="no_row" name="no_row">
                    <div class="table-responsive">
                        <table id="dataspp" class="table table-striped table-bordered table-in" width="100%">
                            <thead>
                                <tr>

                                    <th>
                                        <font face="Verdana" size="2.5">#</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Tanggal</font>
                                    </th>

                                    <th>
                                        <font face="Verdana" size="2.5">Ref. SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.5">Departemen</font>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modal-spp">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Pilih Item SPP</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-4 float-right">
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
                </div>

                <div class="col-12">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="spp" class="table table-striped table-bordered table-in" width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        <font face="Verdana" size="2.0">No.</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">ID</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">No.&nbsp;SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Tgl.&nbsp;SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Ref.&nbsp;SPP</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Departemen</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Kode&nbsp;Barang</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Item&nbsp;Barang</font>
                                    </th>
                                    <th>
                                        <font face="Verdana" size="2.0">Ket</font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align: center;" colspan="9"><button class="btn btn-sm btn-info" data-toggle="tooltip" id="btn_setuju_all" onclick="pilihItem()" data-placement="left">Pilih Item</button></th>
                                </tr>
                            </tfoot>
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

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasibatalPO">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Konfirmasi Hapus</h4>
                    <!-- <input type="hidden" id="hidden_no_delete" name="hidden_no_delete"> -->
                    <p class="mt-3">Apakah Anda yakin ingin membatalkan PO ini ???</p>
                    <button type="button" class="btn btn-warning my-2" data-dismiss="modal" id="btn_delete" onclick="batal_aksi()">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="hidden_nopo_edit" value="<?= $nopo ?>">
<input type="hidden" id="hidden_noref_tambah">
<input type="hidden" id="isi_edit">
<input type="hidden" id="id_po">
<input type="hidden" id="pph" onkeyup="jumlah()" value="<?= $pph ?>">
<input type="hidden" id="ppn" onkeyup="jumlah()" value="<?= $ppn ?>">

<script>
    var cancleUpdatePO = true;
    var updateBaru = true;

    $(document).ready(function() {
        var no_nopo_edit = $('#hidden_nopo_edit').val();
        cari_po_edit(no_nopo_edit);
        isi_edit();
        cekspp();

        // dataspp site
        $('#dataspp').DataTable({

            "processing": true,
            "serverSide": true,

            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Po/get_carispp') ?>",
                "type": "POST"
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "infoFiltered": ""
            }
        });

        // end dataspp site

        $('#cmb_filter_alokasi').change(function() {
            var data = this.value;
            sppHO(data);

        })
    });

    function goBack() {
        window.history.back();
    }

    function new_po() {
        location.href = "<?php echo base_url('Po/input') ?>";
    }

    function cetak() {
        var id_po = $('#id_po').val();
        var nopo = $('#hidden_no_po').val();
        var noref = $('#hidden_nopo_edit').val();

        var noref_rpc = noref.replaceAll('/', '.');

        // window.open('Po/cetak/' + noref_rpc + '/' + id_po, '_blank');
        window.open('<?= base_url() ?>Po/cetak/' + noref_rpc + '/' + id_po, '_blank');
    }

    function batal() {
        $('#modalKonfirmasibatalPO').modal('show');
    }

    function batal_aksi() {
        var noref_po = $('#hidden_no_ref_po').val();
        var refspp = $('#refspp').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Po/batalPO') ?>",
            dataType: "JSON",

            beforeSend: function() {
                $('#lbl_status_delete_po').empty();
                $('#lbl_status_delete_po').append('<label><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses batalkan PO..</label');
            },

            data: {
                noref_po: noref_po,
                refspp: refspp,
            },

            success: function(data) {
                console.log(data);

                location.reload();
            },
            error: function(request) {
                $('#lbl_status_delete_po').empty();
                alert("KONEKSI TERPUTUS! BATAL PO");
            }
        });
    }

    function sppHO(data) {
        $('#spp').DataTable().destroy();
        $('#spp').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "select": true,

            "ajax": {
                "url": "<?php echo site_url('Po/get_ajax') ?>",
                "type": "POST",
                "data": {
                    data: data
                }
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,

            }, ],
            "dom": 'Bfrtip',
            "buttons": [{
                    "text": "Select All",
                    "action": function() {
                        $('#spp').DataTable().rows().select();
                    }
                },
                {
                    "text": "Unselect All",
                    "action": function() {
                        $('#spp').DataTable().rows().deselect();
                    }
                }
            ],
            "lengthMenu": [
                [5, 10, 15, -1],
                [10, 15, 20, 25]
            ],
            "aoColumnDefs": [{
                "bSearchable": false,
                "bVisible": false,
                "aTargets": [1, 2]
            }, ]
        });
    }

    function isSelected(selectedNoppo) {
        var noppos = $('[id*=id_item_]');
        // console.log(noppos);
        var isSelected = false;
        var a = noppos.each(function() {
            var noppo = $(this).val();
            console.log(noppo)
            if (noppo == selectedNoppo) {
                console.log("isSelected sama", noppo, selectedNoppo)
                isSelected = true;
                return false;
            }
        });
        return isSelected;
    }

    function pilihItem() {
        var rowcollection = $('#spp').DataTable().rows({
            selected: true,

        }).data().toArray();
        // console.log(rowcollection);
        $.each(rowcollection, function(index, elem) {
            var id = rowcollection[index][1];
            var no_spp = rowcollection[index][2];
            var no_ref_spp = rowcollection[index][4];
            var kodebar = rowcollection[index][6];
            // isSelected(id);
            if (isSelected(id)) {
                alert('data sudah di pilih');
                return false;
            }
            // console.log(id, no_spp, no_ref_spp, kodebar);
            data_spp_dipilih(id, no_spp, no_ref_spp, kodebar);
        });

    }


    // $('#tableDetailSPP tbody').on('click', 'tr', function () {
    function data_spp_dipilih(id, no_spp, no_ref_spp, kodebar) {
        // var dataClick = $('#spp').DataTable().row(this).data();
        // var no_spp = dataClick[1];
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/get_detail_spp'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'id': id,
                'no_spp': no_spp,
                'no_ref_spp': no_ref_spp,
                'kodebar': kodebar
            },
            success: function(data) {
                // console.log(data);
                var n = $('#tbody_rincian tr').length;
                console.log("ini dia", n)
                $('#devisi').val(data[0].devisi);
                $('#hidden_devisi').val(data[0].devisi);
                // var n = 0;
                $.each(data[1], function(index) {
                    // if(index != 0){
                    // if (n != 1) {
                    // }
                    tambah_row_baru(n);
                    console.log(data);


                    $('#id_ppo' + n).val(data[0].id);
                    $('#id_item_' + n).val(data[1][0].id);
                    $('#getspp' + n).val(data[1][0].noreftxt);
                    $('#hidden_kode_brg_' + n).val(data[1][0].kodebartxt);
                    $('#kode_brg_' + n).text(data[1][0].kodebartxt);
                    $('#hidden_nama_brg_' + n).val(data[1][0].nabar);
                    $('#nama_brg_' + n).text(data[1][0].nabar);
                    $('#hidden_satuan_brg_' + n).val(data[1][0].sat);
                    var qty = data[1][0].qty;
                    var qty2 = data[1][0].qty2;

                    // $('#txt_qty_' + n).val(data[1][0].qty);


                    if (qty2 != null) {
                        var hasil = qty - qty2;
                        $('#txt_qty_' + n).val(hasil);
                    } else {
                        $('#txt_qty_' + n).val(qty);
                        // $('.div_form_2').find('#nakobar_' + n + ', #txt_qty_' + n + ', #txt_keterangan_rinci_' + n).attr('disabled', '');
                    }

                    if (qty2 != null) {
                        var hasil = qty - qty2;
                        $('#txt_qty_' + n).val(hasil);
                        console.log(hasil);
                        if (hasil == 0) {

                            $('.div_form_2').find('#cmb_jenis_budget_' + n + ',#txt_merk_' + n + ', #txt_qty_' + n + ' ,#cmb_kurs_' + n + ',#txt_disc_' + n + ', #txt_harga_' + n + ',#txt_biaya_lain_' + n + ',txt_keterangan_biaya_lain_' + n + ',#txt_keterangan_biaya_lain_' + n + ',#txt_keterangan_rinci_' + n).attr('disabled', '');
                            $('#btn_simpan_' + n).hide();
                            $('#habis_' + n).show();
                        }
                    } else {
                        $('#txt_qty_' + n).val(qty);
                    }
                    $('#qty_' + n).val(data[1][0].qty);
                    $('#qty2_' + n).val(data[1][0].qty2);

                    $('#hidden_no_ref_spp_' + n).val(data[1][0].noreftxt);
                    $('#hidden_tgl_ref_' + n).val(data[0].tglref);
                    $('#hidden_kd_departemen_' + n).val(data[1][0].kodedept);
                    $('#hidden_departemen_' + n).val(data[1][0].namadept);
                    $('#hidden_tgl_spp_' + n).val(data[1][0].tglppo);
                    // $('#hidden_tgl_spp_' + n).val(dateToMDY(tglppo));
                    $('#hidden_kd_pt_' + n).val(data[1][0].kodept);
                    $('#hidden_nama_pt_' + n).val(data[1][0].namapt);

                    $('#noppo' + n).val(data[1][0].noppotxt);

                    // $('html, body').animate({
                    //     scrollTop: $("#tr_" + n).offset()
                    // }, 2000);

                    // $('#txt_qty_' + n).val(data[1][0].qty);
                    n++;
                    // $('#hidden_no_table').val(n);
                });
                $('#modal-spp').modal('hide');
                $('#txt_qty_' + n).focus();

            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function isi_edit() {
        var noref = $('#hidden_nopo_edit').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/cek_isi'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                noref: noref
            },
            success: function(data) {
                // console.log(data);

                var status = data.status;
                // console.log(status);
                if (status = true) {

                    $('#tambahSpp').removeAttr('disabled');
                } else {
                    console.log('sudah lpb')
                }

            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });

    }

    function hapus_row(id) {
        // var totalRowCount = $("#tableRinciBarang tr").length;
        var rowCount = $("#tableRinciPO td").closest("tr").length;

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


    $(document).on('click', '#data_spp', function() {
        var id = $(this).data('id');
        var noreftxt = $(this).data('noreftxt');
        // console.log(noreftxt);
        $.ajax({
            type: 'post',
            url: '<?= site_url('Po/getid'); ?>',
            data: {
                id: id,
                noreftxt: noreftxt,
            },
            success: function(response) {
                $('.div_form_4').show();
                // $('.div_form_1').find('#sppSITE').attr('disabled', '');
                // console.log(response);
                data = JSON.parse(response);
                $('#hidden_noref_tambah').val(data[0].noreftxt);


                var n = $('#tbody_item tr').length;

                $.each(data, function(index, value) {


                    // console.log('nomer row nya', n);
                    tambah_item_baru(n, value.statusaprove);
                    if (value.statusaprove == '0') {
                        $('#tr_' + n).find('input,textarea,select').attr('disabled', '');
                        $('#tr_' + n).find('input,textarea,select').addClass('form-control bg-light');
                    }

                    var idppo = value.id;
                    var opsi = value.noreftxt;
                    var tglref = value.tglref;
                    var kodedept = value.kodedept;
                    var namadept = value.namadept;
                    var tglppo = value.tglppo;
                    var kodept = value.kodept;
                    var pt = value.pt;
                    var noppo = value.noppo;
                    var kodebar = value.kodebar;
                    var nabar = value.nabar;
                    var sat = value.sat;
                    // var tglref = value.tglref;
                    var qty = value.qty;
                    var qty2 = value.qty2;


                    $('#id_ppo' + n).val(idppo);
                    $('#id_item_' + n).val(idppo);
                    $('#hidden_no_ref_spp_' + n).val(opsi);
                    $('#refspp').val(opsi);
                    // $('#hidden_tgl_hidden' + n).val(tglref);
                    $('#hidden_kd_departemen_' + n).val(kodedept);
                    $('#hidden_departemen_' + n).val(namadept);
                    $('#hidden_tgl_spp_' + n).val(tglppo);
                    $('#hidden_kd_pt_' + n).val(kodept);
                    $('#hidden_nama_pt_' + n).val(pt);
                    $('#noppo' + n).val(noppo);
                    $('#hidden_kode_brg_' + n).val(kodebar);
                    $('#kode_brg_' + n).text(kodebar);
                    $('#hidden_nama_brg_' + n).val(nabar);
                    $('#nama_brg_' + n).text(nabar);
                    $('#hidden_satuan_brg_' + n).val(sat);
                    $('#txt_qty_' + n).val(qty);
                    $('#getspp' + n).val(opsi);

                    $('#qty_' + n).val(qty);
                    $('#qty2_' + n).val(qty2);
                    $('#hidden_tgl_ref_' + n).val(tglref);
                    n++;
                });
                $('#modalcarispp').modal('hide');
            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    });



    function tambah_item_baru(no, statusaprove) {
        // no++;
        // console.log("status", statusaprove);
        console.log("bariske", no);
        // console.log('ini jumlah row', rowCount);

        var tr_buka = '<tr id="tr_' + no + '">';

        var form_buka = '<form id="form_rinci_' + no + '" name="form_rinci_' + no + '" method="POST" action="javascript:;">';
        var td_col_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_no_table_' + no + '" name="hidden_no_table_' + no + '">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + no + '" name="btn_tambah_row_' + no + '" onclick="tambahSpp(' + no + ')"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + no + '" name="btn_hapus_row_' + no + '" onclick="hapus_row(' + no + ')"></button>' +
            '</td>';

        var td_col_3 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_jenis_budget_' + no + '" name="cmb_jenis_budget_' + no + '" required>' +
            '<option value="">-- Pilih --</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="BIBITAN">BIBITAN</option>' +
            '<option value="LC & TANAM">LC & TANAM</option>' +
            '<option value="RAWAT">RAWAT</option>' +
            '<option value="PANEN">PANEN</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="PABRIK">PABRIK</option>' +
            '<option value="KANTOR">KANTOR</option>' +
            '<option value="Kendaraan">Kendaraan</option>' +
            '<option value="TBM">TBM</option>' +
            '</select>'; +

        '</td>';
        var td_col_ = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" class="form-control form-control-sm"  id="getspp' + no + '" rowame="spp' + no + '" >' +
            '<font face="Verdana" size="1.5"><span id="nama_brg_' + no + '"></font><font face="Verdana" size="1.5"></span><br><span id="kode_brg_' + no + '" ></span></font>' +
            '<input type="hidden" id="ppo' + no + '" name="ppo' + no + '">' +
            '<input type="hidden" id="id_ppo' + no + '" name="id_ppo' + no + '">' +
            '<input type="hidden" id="id_item_' + no + '" name="id_item_' + no + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + no + '" name="hidden_no_ref_spp_' + no + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + no + '" name="hidden_tgl_ref_' + no + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + no + '" name="hidden_kd_departemen_' + no + '">' +
            '<input type="hidden" id="hidden_departemen_' + no + '" name="hidden_departemen_' + no + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + no + '" name="hidden_tgl_spp_' + no + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + no + '" name="hidden_kd_pt_' + no + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + no + '" name="hidden_nama_pt_' + no + '">' +
            '<input type="hidden" id="noppo' + no + '" name="noppo' + no + '">' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_kode_brg_' + no + '" name="hidden_kode_brg_' + no + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_nama_brg_' + no + '" name="hidden_nama_brg_' + no + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_satuan_brg_' + no + '" name="hidden_satuan_brg_' + no + '"   />' +
            '<input type="hidden" id="hidden_no_ref_po_' + no + '" name="hidden_no_ref_po_' + no + '">' +
            '<input type="hidden" class="form-control form-control-sm" id="id_item_po' + no + '" name="id_item_po' + no + '" >' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control form-control-sm" id="txt_merk_' + row + '" name="txt_merk_' + row + '" placeholder="Merk"  required />' +
            '<textarea class="form-control form-control-sm" id="txt_merk_' + no + '" name="txt_merk_' + no + '" size="26" placeholder="Merk" rows="3"></textarea><br />' +
            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control form-control-sm bg-light" id="txt_qty_' + no + '" name="txt_qty' + no + '" placeholder="Qty" autocomplite="off" size="8" onkeyup="jumlah(' + no + ')" readonly>' +
            '<input type="hidden" class="form-control form-control-sm bg-light" id="qty_' + no + '" name="qty' + no + '" placeholder="Qty" size="8"  readonly>' +
            '<input type="hidden" class="form-control form-control-sm" id="qty2_' + no + '" name="qty2' + no + '" placeholder="Qty" size="8"/>' +

            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_harga_' + no + '" name="txt_harga_' + no + '" onkeyup="jumlah(' + no + ')" placeholder="Harga dalam Rupiah" size="15" autocomplite="off" /><br />' +

            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_kurs_' + no + '" name="cmb_kurs_' + no + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_disc_' + no + '" name="txt_disc_' + no + '" size="8" value="0" onkeyup="jumlah(' + no + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_biaya_lain_' + no + '" name="txt_biaya_lain_' + no + '" size="15" value="0" onkeyup="jumlah(' + no + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" class="form-control form-control-sm" id="txt_keterangan_biaya_lain_' + no + '" name="txt_keterangan_biaya_lain_' + no + '" size="26" placeholder="Keterangan Biaya" rows="3"></textarea><br />' +


            '</td>'
        var td_col_11 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" class="form-control form-control-sm" id="txt_keterangan_rinci_' + no + '" name="txt_keterangan_rinci_' + no + '" size="20" placeholder="Keterangan" rows="3"></textarea>' +
            // '<h6>Jumlah : <span id="hasil_jumlah_' + no + '"></span></h6>' +
            // '<input type="hidden" class="form-control form-control-sm" id="txt_jumlah_' + no + '" size="20" name="txt_jumlah_' + no + '"  placeholder="Jumlah"  readonly />' +

            // '<input type="hidden" id="hidden_id_po_item_' + no + '" name="hidden_id_po_item_' + no + '">' +
            '</td>';
        var td_col_12 = '<td width="25%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<h6>Jumlah : <span id="hasil_jumlah_' + row + '"></span></h6>' +
            '<input type="text" class="form-control form-control-sm" id="jumlah_' + no + '" name="jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            '<input type="hidden" class="form-control form-control-sm" id="txt_jumlah_' + no + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +

            '<input type="hidden" id="hidden_id_po_item_' + no + '" name="hidden_id_po_item_' + no + '">' +
            '</td>';

        if (statusaprove == '0') {
            var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                '<span  id="habis_' + no + '" class="badge badge-danger">Belum diapprove</span>' +
                '</td>';

        } else {
            var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                '<span style="display:none;" id="habis_' + no + '" class="badge badge-danger">Belum approve</span>' +
                '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + no + '" name="btn_simpan_' + no + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + no + ')" ></button>' +
                '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah(' + no + ')" id="btn_ubah_' + no + '" name="btn_ubah_' + no + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
                '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + no + '" name="btn_update_' + no + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + no + ')"></button>' +
                '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + no + '" name="btn_cancel_update_' + no + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + no + ')"></button>' +
                '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + no + '" name="btn_hapus_' + no + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + no + ')"></button>' +
                '<label id="lbl_status_simpan_' + no + '"></label>' +
                '</td>';
        }
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();



        $('#tbody_item').append(tr_buka + form_buka + td_col_1 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);

        $('#txt_qty_' + no + ',#txt_harga_' + no + ',#txt_disc_' + no + ',#txt_biaya_lain_' + no + '').number(true, 0);

        // if (no == 1) {
        //     $('#btn_hapus_row_' + no).hide();
        // } else {
        //     $('#btn_hapus_row_' + no).show();
        // }
        hitungqty(no);
        // jumlah(row);
    }

    function tambahSpp(row) {
        var dt = $('#no_row').val(row);
        // console.log('ini no rownya', dt);
        $('#modalcarispp').modal('show');
    }

    function tambahSppHO(row) {
        var dt = $('#hidden_no_row').val(row);
        // console.log('ini no rownya', dt);
        $('#modal-spp').modal('show');

        var data = "SEMUA";
        sppHO(data);
    }

    function cekspp() {
        var ref = location.pathname.split('/')[4];
        var noref = ref.replaceAll('.', '/');
        // console.log(noref);

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/cek_lpb'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                noref: noref
            },
            success: function(data) {
                // console.log(data);

                var status = data.status;
                // console.log(status);
                if (status = true) {

                    $('#tambahSpp').removeAttr('disabled');
                } else {
                    console.log('sudah lpb')
                }

            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function update(id) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Po/updateItem') ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_1' + id).empty();
                $('#lbl_status_simpan_1' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
            },
            data: {
                // id_ppo: $('#id_item_' + id).val(),
                // hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                // hidden_departemen: $('#hidden_departemen_' + id).val(),
                // cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                // txt_kode_supplier: $('#kd_supplier').val(),
                // txt_supplier: $('#txtsupplier').val(),
                // txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                // txt_pemesan: $('#txt_pemesan').val(),
                // cmb_status_bayar: $('#cmb_status_bayar').val(),
                // txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                // txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                // txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                // cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                // txt_keterangan: $('#keterangan').val(),
                // txt_no_penawaran: $('#no_penawaran').val(),
                // cmb_ppn: $('#ppn').val(),
                // txt_total_pembayaran: $('#ttl_pembayaran').val(),
                // txt_ket_pengiriman: $('#ket_pengiriman').val(),
                // txt_uang_muka: $('#txt_uang_muka').val(),
                // txt_no_voucher: $('#txt_no_voucher').val(),
                // txt_no_spp: $('#noppo' + id).val(),
                // hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                // hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                // hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                // hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                // hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                // hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                // hidden_no_po: $('#hidden_no_po').val(),
                hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                hidden_no_ref_spp: $('#hidden_no_ref_spp_' + id).val(),
                txt_qty: $('#txt_qty_' + id).val(),
                txt_harga: $('#txt_harga_' + id).val(),
                txt_merk: $('#txt_merk_' + id).val(),
                txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                txt_disc: $('#txt_disc_' + id).val(),
                cmb_kurs: $('#cmb_kurs_' + id).val(),
                txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                id_item: $('#hidden_id_po_item_' + id).val(),
                txt_jumlah: $('#txt_jumlah_' + id).val(),
            },
            success: function(data) {
                if (data == 'site15') {
                    swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                    $('#lbl_status_simpan_1' + id).empty();
                } else {
                    $('#lbl_status_simpan_1' + id).empty();
                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Berhasil diupdate',
                        icon: 'success',
                        loader: false
                    });

                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    // $('#tableRinciPO tbody #tr_' + ' td').find('#btn_simpan_' + ',#txt_no_spp_').attr('disabled', '');
                    $('#btn_simpan_' + id).hide();
                    $('#btn_hapus_row' + id).hide();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();

                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    totalBayar();
                }
            },
            error: function(request) {
                $('#lbl_status_simpan_1' + id).empty();
                $('#btn_simpan_' + id).hide();
                $('#btn_hapus_row' + id).hide();
                $('#btn_update_' + id).hide();
                $('#btn_cancel_update_' + id).hide();

                $('#btn_ubah_' + id).show();
                $('#btn_hapus_' + id).show();
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function cari_po_edit(nopo) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/cari_po_edit'); ?>",
            dataType: "JSON",
            beforeSend: function() {},

            data: {
                'nopo': nopo
            },
            success: function(data) {
                // console.log(data);

                var po = data.po;
                var item_po = data.item_po;
                console.log(item_po.length);
                $('#isi_edit').val(item_po.length);
                var currentDate = new Date(po.tglppo);
                var tglspp = currentDate;
                var convert = currentDate.tglspp;

                $('#tgl_spp').html('Tanggal SPP : ' + po.tglspp);
                $('#h4_no_ref_spp').html('No. Ref SPP : ' + po.no_refppo);

                $('#tgl_po').html('Tanggal PO : ' + po.tgl_po);
                $('#h4_no_ref_po').html('No. Ref PO : ' + po.noreftxt);
                $('#id_po').val(po.id);
                $('#hidden_id_po').val(po.id);
                $('#hidden_no_ref_po').val(po.noreftxt);

                for (i = 0; i < item_po.length; i++) {
                    // var no = i + 1;

                    var lokasi = $('#lokasi').val();
                    switch (lokasi) {
                        case 'HO':
                            tambah_row(i);
                            break;
                        case 'RO':
                        case 'SITE':
                        case 'PKS':
                            tambah_item(i)
                            break;
                        default:
                            break;
                    }

                    var refppo = item_po[i].refppo;
                    var grup = item_po[i].grup;
                    var kodebar = item_po[i].kodebar;
                    var nabar = item_po[i].nabar;
                    var qty = item_po[i].qty;
                    var kurs = item_po[i].kurs;
                    var disc = item_po[i].disc;

                    var nama_bebanbpo = item_po[i].nama_bebanbpo;
                    var jml_bpo = item_po[i].JUMLAHBPO;
                    var ket = item_po[i].ket;
                    var id = item_po[i].id;
                    var merk = item_po[i].merek;
                    var harga = item_po[i].harga;
                    var jumharga = item_po[i].jumharga;
                    var iditem = item_po[i].id;
                    var kd_dept = item_po[i].kodept;
                    var tglspp = item_po[i].tglppo;
                    var kodept = item_po[i].kodept;
                    var noppo = item_po[i].noppo;
                    var namapt = item_po[i].namapt;
                    var sat = item_po[i].sat;
                    var norefppo = item_po[i].refppo;

                    // Set data

                    $('#getspp' + i).val(refppo);
                    $('#cmb_jenis_budget_' + i).val(grup);
                    $('#hidden_nopo').val(item_po[0].nopo);
                    $('#hidden_kode_brg_' + i).val(kodebar);
                    $('#kode_brg_' + i).text(kodebar);
                    $('#hidden_nama_brg_' + i).val(nabar);
                    $('#hidden_satuan_brg_' + i).val(sat);
                    $('#nama_brg_' + i).text(nabar);
                    $('#txt_keterangan_rinci_' + i).val(ket);
                    $('#txt_qty_' + i).val(qty);
                    $('#txt_merk_' + i).val(merk);
                    $('#cmb_kurs_' + i).val(kurs);
                    $('#txt_disc_' + i).val(disc);
                    $('#txt_biaya_lain_' + i).val(jml_bpo);
                    $('#txt_keterangan_biaya_lain_' + i).val(nama_bebanbpo);
                    $('#txt_harga_' + i).val(harga);
                    $('#txt_jumlah_' + i).val(jumharga);

                    var bilangan = jumharga;
                    var number_string = bilangan.toString(),
                        sisa = number_string.length % 3,
                        rupiah = number_string.substr(0, sisa),
                        ribuan = number_string.substr(sisa).match(/\d{3}/g);

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }
                    $('#jumlah_' + i).val(rupiah);
                    $('#hasil_jumlah_' + i).html(rupiah);
                    $('#id_item_po' + i).val(iditem);
                    $('#id_item_' + i).val(iditem);
                    $('#hidden_id_po_item_' + i).val(iditem);
                    $('#hidden_kd_departemen_' + i).val(kd_dept);
                    $('#hidden_tgl_spp_' + i).val(tglspp);
                    $('#hidden_kd_pt_' + i).val(kodept);
                    $('#hidden_nama_pt_' + i).val(namapt);
                    $('#noppo' + i).val(noppo);
                    $('#hidden_no_ref_spp_' + i).val(norefppo);
                    $('#hidden_no_ref_po_' + i).val(po.noreftxt);


                    $('.div_form_2').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ',#txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #jumlah_' + i + ',#txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).addClass('bg-light');
                    $('.div_form_3').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ',#txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #jumlah_' + i + ', #txt_jumlah_' + i + ',  #txt_keterangan_rinci_' + i).addClass('bg-light');
                    $('.div_form_3').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).attr('disabled', '');
                    $('.div_form_2').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).attr('disabled', '');
                }
                totalBayar();
            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function cancleUpdate(id) {
        // console.log('cancelke' + id);
        if (cancleUpdatePO) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/cancel_ubah_rinci') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#lbl_status_simpan_1' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
                },
                data: {
                    id_po: $('#hidden_no_ref_po_' + id).val(),
                    id_po_item: $('#hidden_id_po_item_' + id).val(),
                },
                success: function(data) {
                    console.log(data);
                    // var po = data.data_po;
                    var item = data.data_item_po;

                    $('#cmb_jenis_budget_' + id).val(item.grup);
                    $('#txt_merk_' + id).val(item.merek);
                    $('#txt_harga_' + id).val(item.harga);
                    $('#txt_disc_' + id).val(item.disc);
                    $('#txt_biaya_lain_' + id).val(item.JUMLAHBPO);
                    $('#txt_keterangan_biaya_lain_' + id).val(item.nama_bebanbpo);
                    $('#txt_keterangan_rinci_' + id).val(item.ket);

                    $('#btn_ubah_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_hapus_' + id).show();

                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');


                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });
                    jumlah(id);
                    totalBayar();
                    cancleUpdatePO = false;
                },
                error: function(request) {
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_ubah_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_hapus_' + id).show();
                    alert("KONEKSI TERPUTUS! GAGAL CANCEL UPDATE");
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/cancel_ubah_rinci') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#lbl_status_simpan_1' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
                },
                data: {
                    id_po: $('#hidden_no_ref_po_').val(),
                    id_po_item: $('#hidden_id_po_item_' + id).val(),
                },
                success: function(data) {
                    // var po = data.data_po;
                    var item = data.data_item_po;

                    $('#cmb_jenis_budget_' + id).val(item.grup);
                    $('#txt_merk_' + id).val(item.merek);
                    $('#txt_harga_' + id).val(item.harga);
                    $('#txt_disc_' + id).val(item.disc);
                    $('#txt_biaya_lain_' + id).val(item.JUMLAHBPO);
                    $('#txt_keterangan_biaya_lain_' + id).val(item.nama_bebanbpo);
                    $('#txt_keterangan_rinci_' + id).val(item.ket);

                    $('#btn_ubah_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();

                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_hapus_' + id).show();
                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });
                    jumlah(id);
                    totalBayar();
                    cancleUpdatePO = false;
                },
                error: function(request) {
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_ubah_' + id).show();
                    $('#btn_update_' + id).hide();
                    $('#btn_cancel_update_' + id).hide();
                    $('#lbl_status_simpan_1' + id).empty();
                    $('#btn_hapus_' + id).show();
                    alert("KONEKSI TERPUTUS! GAGAL CANCEL UPDATE");
                }
            });
        }
    }

    function totalBayar() {
        var no_po = $('#hidden_no_po').val();
        var no_ref_po = $('#hidden_no_ref_po').val();

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/total_bayar'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                no_po: $('#hidden_no_po').val(),
                no_ref_po: $('#hidden_no_ref_po').val(),
                ppn: $('#ppn').val(),
                pph: $('#pph').val(),
            },
            success: function(data) {
                console.log(data);
                $('#ttl_pembayaran').val(data.totbay);
            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function tambah_item(row) {

        // row++;
        console.log("bariske", row);

        var tr_buka = '<tr id="tr_' + row + '">';
        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';
        var td_col_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="hidden" id="hidden_no_table_' + row + '" name="hidden_no_table_' + row + '">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + row + '" name="btn_tambah_row_' + row + '" onclick="tambahSpp(' + row + ')"></button>' +
            '</td>';
        var td_col_3 = '<td width="8" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_jenis_budget_' + row + '" name="cmb_jenis_budget_' + row + '" required>' +
            '<option value="">-- Pilih --</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="BIBITAN">BIBITAN</option>' +
            '<option value="LC & TANAM">LC & TANAM</option>' +
            '<option value="RAWAT">RAWAT</option>' +
            '<option value="PANEN">PANEN</option>' +
            '<option value="TEKNIK">TEKNIK</option>' +
            '<option value="PABRIK">PABRIK</option>' +
            '<option value="KANTOR">KANTOR</option>' +
            '<option value="Kendaraan">Kendaraan</option>' +
            '<option value="TBM">TBM</option>' +
            '</select>'; +
        '</td>';
        var td_col_ = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control form-control-sm" id="brg' + row + '" name="brg' + row + '">' +
            '<font face="Verdana" size="1.5"><span id="nama_brg_' + row + '"></font><font face="Verdana" size="1.5"></span><br><span id="kode_brg_' + row + '" ></span></font>' +
            '<input type="hidden" id="ppo' + row + '" name="ppo' + row + '">' +
            '<input type="hidden" id="id_ppo' + row + '" name="id_ppo' + row + '">' +
            '<input type="hidden" id="id_item_' + row + '" name="id_item_' + row + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + row + '" name="hidden_no_ref_spp_' + row + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + row + '" name="hidden_tgl_ref_' + row + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + row + '" name="hidden_kd_departemen_' + row + '">' +
            '<input type="hidden" id="hidden_departemen_' + row + '" name="hidden_departemen_' + row + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + row + '" name="hidden_tgl_spp_' + row + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + row + '" name="hidden_kd_pt_' + row + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + row + '" name="hidden_nama_pt_' + row + '">' +
            '<input type="hidden" id="noppo' + row + '" name="noppo' + row + '">' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_kode_brg_' + row + '" name="hidden_kode_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_nama_brg_' + row + '" name="hidden_nama_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_satuan_brg_' + row + '" name="hidden_satuan_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="id_item_po' + row + '" name="id_item_po' + row + '" >' +
            '<input type="hidden" id="hidden_no_ref_po_' + row + '" name="hidden_no_ref_po_' + row + '">' +
            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="form-control form-control-sm" id="txt_merk_' + row + '" name="txt_merk_' + row + '" size="26" placeholder="Merk" rows="3"></textarea><br />' +
            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control form-control-sm bg-light" id="txt_qty_' + row + '" name="txt_qty' + row + '" placeholder="Qty" autocomplite="off" size="8" onkeyup="jumlah(' + row + ')" readonly>' +
            '<input type="hidden" class="form-control form-control-sm" id="qty_' + row + '" name="qty' + row + '" placeholder="Qty" size="8" />' +
            '<input type="hidden" class="form-control form-control-sm" id="qty2_' + row + '" name="qty2' + row + '" placeholder="Qty" size="8"/>' +
            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_harga_' + row + '" name="txt_harga_' + row + '" onkeyup="jumlah(' + row + ')" placeholder="Harga dalam Rupiah" size="15" autocomplite="off" /><br />' +
            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_kurs_' + row + '" name="cmb_kurs_' + row + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_disc_' + row + '" name="txt_disc_' + row + '" size="10" value="0" onkeyup="jumlah(' + row + ')" placeholder="Disc"/>' +
            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_biaya_lain_' + row + '" name="txt_biaya_lain_' + row + '" size="15" value="0" onkeyup="jumlah(' + row + ')" placeholder="Biaya Lain"/>' +
            '</td>';
        var td_col_10 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="form-control form-control-sm" id="txt_keterangan_biaya_lain_' + row + '" name="txt_keterangan_biaya_lain_' + row + '" size="26" placeholder="Keterangan Biaya" onkeypress="saveRinciEnter(event,' + row + ')" rows="3"></textarea><br />' +
            '</td>'
        var td_col_11 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea maxlength="250" rows="3" class="form-control form-control-sm" id="txt_keterangan_rinci_' + row + '" name="txt_keterangan_rinci_' + row + '" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + row + ')"></textarea><br />' +

            '</td>';
        var td_col_12 = '<td width="25%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<h6>Jumlah : <span id="hasil_jumlah_' + row + '"></span></h6>' +
            '<input type="text" class="form-control form-control-sm" id="jumlah_' + row + '" name="jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            '<input type="hidden" class="form-control form-control-sm" id="txt_jumlah_' + row + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +

            '<input type="hidden" id="hidden_id_po_item_' + row + '" name="hidden_id_po_item_' + row + '">' +
            '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.2em;">' +
            '<span style="display:none;" id="habis_' + row + '" class="badge badge-danger">Habis</span>' +
            '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + row + ')" ></button>' +
            '<button class="btn btn-xs btn-warning fa fa-edit" onclick="ubah(' + row + ')" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + row + ')"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '<label id="lbl_status_simpan_1' + row + '"></label>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();

        $('#tbody_item').append(tr_buka + form_buka + td_col_1 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);
        $('#txt_qty_' + row + ',#txt_harga_' + row + ',#txt_disc_' + row + ',#txt_biaya_lain_' + row + '').number(true, 0);
        if (row == 1) {
            $('#btn_hapus_row_1').hide();
        } else {
            $('#btn_hapus_row_1' + row).show();
        }
        initPilihSpp(row);
        hitungqty(row);
        jumlah(row);
    }

    function initPilihSpp(id) {

        $(`#pilihSpp${id}`).select2({
            ajax: {
                url: "<?php echo site_url('Po/getSpp') ?>",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        noref: params.term // search term
                    };
                },
                processResults: function(data) {
                    var results = [];

                    $.each(data, function(index, item) {
                        results.push({
                            id: item.id,
                            text: item.noreftxt + ' - ' + item.tglppotxt + ' - ' + item.namadept
                            // text: item.noreftxt
                        });

                    });
                    return {
                        results: results
                    };
                }
            }

        }).on('select3:select', function(evt) {
            var data = $(".select3 option:selected").text();
            $('#hidden_no_ref_spp_').val(data);
            console.log(data);
        });

        $(`#pilihSpp${id}`).change(function() {
            // var dd = this.value;
            $.ajax({
                type: 'post',
                url: '<?= site_url('Po/getid'); ?>',
                data: {
                    id: this.value
                },
                success: function(response) {
                    // console.log(response);
                    data = JSON.parse(response);
                    $.each(data, function(index, value) {
                        // console.log(value);
                        // var idppo = value.id;
                        var opsi = value.noreftxt;
                        var tglref = value.tglref;
                        var kodedept = value.kodedept;
                        var namadept = value.namadept;
                        var tglppo = value.tglppo;
                        var kodept = value.kodept;
                        var pt = value.pt;
                        var noppo = value.noppo;
                        var kodebar = value.kodebar;
                        var nabar = value.nabar;
                        var sat = value.sat;
                        var qty = value.qty;
                        var qty2 = value.qty2;
                        $(`#hidden_tgl_ref_${id}`).val(tglref);
                        $(`#hidden_no_ref_spp_${id}`).val(opsi);
                        $(`#hidden_kd_departemen_${id}`).val(kodedept);
                        $(`#hidden_departemen_${id}`).val(namadept);
                        $(`#hidden_tgl_spp_${id}`).val(tglppo);
                        $(`#hidden_kd_pt_${id}`).val(kodept);
                        $(`#hidden_nama_pt_${id}`).val(pt);
                        $(`#noppo${id}`).val(noppo);
                        $(`#hidden_kode_brg_${id}`).val(kodebar);
                        $(`#kode_brg_${id}`).text(kodebar);
                        $(`#hidden_nama_brg_${id}`).val(nabar);
                        $(`#nama_brg_${id}`).text(nabar);
                        $(`#hidden_satuan_brg_${id}`).val(sat);
                        $(`#txt_qty_${id}`).val(qty);
                        $(`#qty_${id}`).val(qty);
                        // $(`#qty2_${id}`).val(qty2);
                        // console.log("ini adalah id", idppo);
                        // console.log(nabar);
                    });

                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });

    }

    // var n = 1;

    function tambah_row(n) {
        // n++;
        console.log("bariske", n);

        var tr_buka = '<tr id="tr_' + n + '">';
        var td_col_1 = '<td width="2%">' +
            '<input type="hidden" id="hidden_proses_status_' + n + '" name="hidden_proses_status_' + n + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" name="btn_tambah_row" id="btn_tambah_row_' + n + '"  onclick="tambahSppHO(' + n + ')"></button>' +
            // '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row_' + n + '" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';

        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="19%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="getspp' + n + '" name="spp' + n + '" >' +
            '<input type="hidden" class="form-control form-control-sm" id="id_item_po' + n + '" name="id_item_po' + n + '" >' +
            '<input type="hidden" id="id_item_' + n + '" name="id_item_' + n + '">' +
            '<input type="hidden" id="ppo' + n + '" name="ppo' + n + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + n + '" name="hidden_no_ref_spp_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + n + '" name="hidden_tgl_ref_' + n + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + n + '" name="hidden_kd_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_departemen_' + n + '" name="hidden_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + n + '" name="hidden_tgl_spp_' + n + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + n + '" name="hidden_kd_pt_' + n + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + n + '" name="hidden_nama_pt_' + n + '">' +
            '<input type="hidden" id="noppo' + n + '" name="noppo' + n + '">' +
            '</td>';
        // var td_col_3 = '<td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
        //     '<select class="form-control form-control-sm" id="cmb_jenis_budget_' + n + '" name="cmb_jenis_budget_' + n + '" required>' +
        //     '<option value="">-- Pilih --</option>' +
        //     '<option value="TEKNIK">TEKNIK</option>' +
        //     '<option value="BIBITAN">BIBITAN</option>' +
        //     '<option value="LC & TANAM">LC & TANAM</option>' +
        //     '<option value="RAWAT">RAWAT</option>' +
        //     '<option value="PANEN">PANEN</option>' +
        //     '<option value="TEKNIK">TEKNIK</option>' +
        //     '<option value="PABRIK">PABRIK</option>' +
        //     '<option value="KANTOR">KANTOR</option>' +
        //     '<option value="Kendaraan">Kendaraan</option>' +
        //     '<option value="TBM">TBM</option>' +
        //     '</select>'; +
        // '</td>';
        var td_col_ = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<font face="Verdana" size="1.5"><span id="nama_brg_' + n + '"></font><font face="Verdana" size="1.5"></span><br><span id="kode_brg_' + n + '" ></span></font>' +

            '<input type="hidden" class="form-control form-control-sm" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '"   />' +
            '<input type="hidden" id="hidden_no_ref_po_' + n + '" name="hidden_no_ref_po_' + n + '">' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="form-control form-control-sm" id="txt_merk_' + n + '" name="txt_merk_' + n + '" size="26" placeholder="Merk" rows="3"></textarea>' +

            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control form-control-sm" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +
            '<input type="hidden" class="form-control form-control-sm" id="qty_' + n + '" name="qty_' + n + '" placeholder="Qty" size="8" />' +
            '<input type="hidden" class="form-control form-control-sm" id="qty2_' + n + '" name="qty2_' + n + '" placeholder="Qty" size="8" />' +

            '</td>';
        var td_col_6 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_harga_' + n + '" name="txt_harga_' + n + '" value="0" onkeyup="jumlah(' + n + ')" placeholder="Harga dalam Rupiah" size="15" required /><br />' +

            '</td>';
        var td_col_7 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_kurs_' + n + '" name="cmb_kurs_' + n + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_disc_' + n + '" name="txt_disc_' + n + '" size="10" value="0" onkeyup="jumlah(' + n + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_biaya_lain_' + n + '" name="txt_biaya_lain_' + n + '" size="15" value="0" onkeyup="jumlah(' + n + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea rows="3" class="resizable_textarea form-control form-control-sm" id="txt_keterangan_biaya_lain_' + n + '" name="txt_keterangan_biaya_lain_' + n + '" size="26" placeholder="Keterangan Biaya" onkeypress="saveRinciEnter(event,' + n + ')"></textarea><br />' +

            '</td>'
        var td_col_11 = '<td width="40%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea rows="2" class="resizable_textarea form-control form-control-sm" id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + n + ')"></textarea>' +
            '<h6>Jumlah : <span id="hasil_jumlah_' + n + '"></span></h6>' +
            '<input type="hidden" class="form-control form-control-sm" id="txt_jumlah_' + n + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            // '<label id="lbl_status_simpan_1' + n + '"></label>' +
            '<input type="hidden" id="hidden_id_po_item_' + n + '" name="hidden_id_po_item_' + n + '">' +

            '</td>';
        // var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +

        //     '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<span style="display:none;" id="habis_' + n + '" class="badge badge-danger">Habis</span>' +
            '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + n + ')" ></button>' +
            '<button class="btn btn-xs btn-warning fa fa-edit" onclick="ubah(' + n + ')" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + n + ')"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();

        $('#tbody_rincian').append(tr_buka + form_buka + td_col_1 + td_col_2 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_13 + form_tutup + tr_tutup);
        $('#txt_qty_' + n + ',#txt_harga_' + n + ',#txt_disc_' + n + ',#txt_biaya_lain_' + n + '').number(true, 0);
        hitungqty(n);
        jumlah(n);
        return true;
    }

    function tambah_row_baru(n) {
        // n++;
        console.log("bariske", n);

        var tr_buka = '<tr id="tr_' + n + '">';
        var td_col_1 = '<td width="2%">' +
            '<input type="hidden" id="hidden_proses_status_' + n + '" name="hidden_proses_status_' + n + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" name="btn_tambah_row" id="btn_tambah_row_' + n + '"  onclick="tambahSppHO(' + n + ')"></button>' +
            // '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row_' + n + '" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';

        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="19%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="getspp' + n + '" name="spp' + n + '" >' +
            '<input type="hidden" class="form-control form-control-sm" id="id_item_po' + n + '" name="id_item_po' + n + '" >' +
            '<input type="hidden" id="id_item_' + n + '" name="id_item_' + n + '">' +
            '<input type="hidden" id="ppo' + n + '" name="ppo' + n + '">' +
            '<input type="hidden" id="hidden_no_ref_spp_' + n + '" name="hidden_no_ref_spp_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_ref_' + n + '" name="hidden_tgl_ref_' + n + '">' +
            '<input type="hidden" id="hidden_kd_departemen_' + n + '" name="hidden_kd_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_departemen_' + n + '" name="hidden_departemen_' + n + '">' +
            '<input type="hidden" id="hidden_tgl_spp_' + n + '" name="hidden_tgl_spp_' + n + '">' +
            '<input type="hidden" id="hidden_kd_pt_' + n + '" name="hidden_kd_pt_' + n + '">' +
            '<input type="hidden" id="hidden_nama_pt_' + n + '" name="hidden_nama_pt_' + n + '">' +
            '<input type="hidden" id="noppo' + n + '" name="noppo' + n + '">' +
            '</td>';
        // var td_col_3 = '<td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
        //     '<select class="form-control form-control-sm" id="cmb_jenis_budget_' + n + '" name="cmb_jenis_budget_' + n + '" required>' +
        //     '<option value="">-- Pilih --</option>' +
        //     '<option value="TEKNIK">TEKNIK</option>' +
        //     '<option value="BIBITAN">BIBITAN</option>' +
        //     '<option value="LC & TANAM">LC & TANAM</option>' +
        //     '<option value="RAWAT">RAWAT</option>' +
        //     '<option value="PANEN">PANEN</option>' +
        //     '<option value="TEKNIK">TEKNIK</option>' +
        //     '<option value="PABRIK">PABRIK</option>' +
        //     '<option value="KANTOR">KANTOR</option>' +
        //     '<option value="Kendaraan">Kendaraan</option>' +
        //     '<option value="TBM">TBM</option>' +
        //     '</select>'; +
        // '</td>';
        var td_col_ = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<font face="Verdana" size="1.5"><span id="nama_brg_' + n + '"></font><font face="Verdana" size="1.5"></span><br><span id="kode_brg_' + n + '" ></span></font>' +

            '<input type="hidden" class="form-control form-control-sm" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control form-control-sm" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '"   />' +
            '<input type="hidden" id="hidden_no_ref_po_' + n + '" name="hidden_no_ref_po_' + n + '">' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="form-control form-control-sm" id="txt_merk_' + n + '" name="txt_merk_' + n + '" size="26" placeholder="Merk" rows="3"></textarea>' +

            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control form-control-sm" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +
            '<input type="hidden" class="form-control form-control-sm" id="qty_' + n + '" name="qty_' + n + '" placeholder="Qty" size="8" />' +
            '<input type="hidden" class="form-control form-control-sm" id="qty2_' + n + '" name="qty2_' + n + '" placeholder="Qty" size="8" />' +

            '</td>';
        var td_col_6 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_harga_' + n + '" name="txt_harga_' + n + '" value="0" onkeyup="jumlah(' + n + ')" placeholder="Harga dalam Rupiah" size="15" required /><br />' +

            '</td>';
        var td_col_7 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control form-control-sm" id="cmb_kurs_' + n + '" name="cmb_kurs_' + n + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_disc_' + n + '" name="txt_disc_' + n + '" size="10" value="0" onkeyup="jumlah(' + n + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control form-control-sm" id="txt_biaya_lain_' + n + '" name="txt_biaya_lain_' + n + '" size="15" value="0" onkeyup="jumlah(' + n + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea rows="3" class="resizable_textarea form-control form-control-sm" id="txt_keterangan_biaya_lain_' + n + '" name="txt_keterangan_biaya_lain_' + n + '" size="26" placeholder="Keterangan Biaya" onkeypress="saveRinciEnter(event,' + n + ')"></textarea><br />' +

            '</td>'
        var td_col_11 = '<td width="40%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea rows="2" class="resizable_textarea form-control form-control-sm" id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + n + ')"></textarea>' +
            '<h6>Jumlah : <span id="hasil_jumlah_' + n + '"></span></h6>' +
            '<input type="hidden" class="form-control form-control-sm" id="txt_jumlah_' + n + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            // '<label id="lbl_status_simpan_1' + n + '"></label>' +
            '<input type="hidden" id="hidden_id_po_item_' + n + '" name="hidden_id_po_item_' + n + '">' +

            '</td>';
        // var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +

        //     '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<span style="display:none;" id="habis_' + n + '" class="badge badge-danger">Habis</span>' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + n + ')" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" onclick="ubah(' + n + ')" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();

        $('#tbody_rincian').append(tr_buka + form_buka + td_col_1 + td_col_2 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_13 + form_tutup + tr_tutup);
        $('#txt_qty_' + n + ',#txt_harga_' + n + ',#txt_disc_' + n + ',#txt_biaya_lain_' + n + '').number(true, 0);
        hitungqty(n);
        jumlah(n);
        return true;
    }

    function hitungqty(id) {

        $('#txt_qty_' + id).keyup(function() {
            var a = $('#txt_qty_' + id).val();
            var b = $('#qty_' + id).val();
            var c = $('#qty2_' + id).val();
            var qty = Number(a);
            var qty2 = Number(b);
            var qty2n = Number(c);
            if (qty2n > 0) {
                var tmbh = qty2 - qty2n;
                if (qty > tmbh) {
                    console.log('melebihi, inputan ke 2');
                    $('#txt_qty_' + id).val(tmbh);
                }
            } else {
                if (qty > qty2) {
                    // console.log('benar');
                    console.log("Qty melebihi bataaaas!")
                    $('#txt_qty_' + id).val(qty2);
                } else {
                    console.log("sip dah");
                }
            }

        });
    }

    function jumlah(id) {
        // console.log('jumlahke', no_row)
        $('#txt_qty_' + id + ',#txt_harga_' + id + ',#txt_disc_' + id + ',#txt_biaya_lain_' + id).on("keypress keyup blur", function(event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        // console.log('jumlahke', no_row)
        var pph = $('#pph').val();
        var ppn = $('#ppn').val();
        var qty = $('#txt_qty_' + id).val();
        // console.log(qty)
        var harga = $('#txt_harga_' + id).val();
        var diskon = $('#txt_disc_' + id).val();
        if (diskon == '') {
            var disc = 0;
        } else {
            var disc = $('#txt_disc_' + id).val();
        }

        var biayalain = $('#txt_biaya_lain_' + id).val();
        if (biayalain == '') {
            var biaya_lain = 0;
        } else {
            var biaya_lain = $('#txt_biaya_lain_' + id).val();
        }

        // mengitung pph dan ppn if true condition
        var hargaDisc = (parseInt(harga) * parseInt(disc)) / 100;
        var hargaSetelahDisc = parseInt(harga) - parseInt(hargaDisc);

        var qty_harga = qty * hargaSetelahDisc;
        if (pph != 0) {
            var jml_pph = pph / 100;
            var total_pph = qty_harga * jml_pph;
        } else {
            var total_pph = 0;
        }

        if (ppn == 10) {
            var jml_ppn = ppn / 100;
            var total_ppn = qty_harga * jml_ppn;
        } else {
            var total_ppn = 0;
        }

        var nilai = (parseFloat(qty) * parseFloat(hargaSetelahDisc)) + parseFloat(biaya_lain);

        var tot_nilai = nilai + total_pph + total_ppn;
        // console.log(nilai);

        var jum = tot_nilai.toFixed(2);

        $('#txt_jumlah_' + id).val(jum);
        var bilangan = tot_nilai.toFixed(2);
        var number_string = bilangan.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        $('#jumlah_' + id).val(rupiah);
        $('#hasil_jumlah_' + id).html(rupiah);
    }

    function saveRinciEnter(e, no) {
        if (e.keyCode == 13 && !e.shiftKey) {
            if ($('#hidden_proses_status_' + no).val() == 'insert') {
                saveRinci(no);
            } else if ($('#hidden_proses_status_' + no).val() == 'update') {
                updateRinci(no);
            }
        }
    }

    function ubah(i) {

        $('.div_form_2').find('#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).removeClass('bg-light');
        $('.div_form_2').find('#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).removeAttr('disabled', '');
        $('.div_form_3').find('#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).removeClass('bg-light');
        $('.div_form_3').find('#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).removeAttr('disabled', '');

        $('#btn_ubah_' + i).hide();
        $('#btn_hapus_' + i).hide();
        $('#btn_update_' + i).show();
        $('#btn_cancel_update_' + i).show();
    }

    function hapusRinci(id) {
        $('#hidden_no_delete').val(id);
        $('#modalKonfirmasiHapus').modal('show');
        // if (id == 1) {
        //     deleteData();
        // } else {
        // }
    }

    function deletePO(no) {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Po/deletePO_data') ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_1' + no).empty();
                $('#lbl_status_simpan_1' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus PO</label>');
            },
            data: {
                hidden_id_po_item: $('#hidden_id_po_item_' + no).val(),
                norefpo: $('#hidden_no_ref_po').val(),
            },
            success: function(data) {
                // console.log(data);
                window.location = "<?= base_url('Po') ?>";
            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function deleteData() {
        var no = $('#hidden_no_delete').val();

        $('#modalKonfirmasiHapus').modal('hide');

        var lokasi = $('#lokasi').val();

        switch (lokasi) {
            case 'HO':

                var rowCount = $("#tableRinciPO td").closest("tr").length;
                break;
            case 'RO':
            case 'SITE':
            case 'PKS':

                var rowCount = $("#tableItemPO td").closest("tr").length;

                break;
            default:
                break;
        }

        if (rowCount != 1) {

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Po/hapus_rinci_data'); ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_1' + no).empty();
                    $('#lbl_status_simpan_1' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Hapus Item</label>');
                },

                data: {
                    hidden_id_po_item: $('#hidden_id_po_item_' + no).val(),

                },
                success: function(data) {
                    $('#tr_' + no).remove();
                    swal('Data Berhasil dihapus');
                    totalBayar();
                    $('#lbl_status_simpan_1' + no).empty();
                },
                error: function(request) {
                    alert("KONEKSI TERPUTUS!");
                }
            });

        } else {
            // swal('Tidak Bisa dihapus, item PO tinggal 1');
            Swal.fire({
                title: 'Item PO Tinggal 1',
                text: "Yakin akan menghapus PO ini?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
                if (result.value) {
                    // var no_po = $('#hidden_no_po').val();
                    deletePO(no);
                }
            });

        }
    }

    function validasi(id) {

        var biayalain = $('#txt_biaya_lain_' + id).val();
        var jnbudget = $('#cmb_jenis_budget_' + id).val();
        var merk = $('#txt_merk_' + id).val();
        var hrg = $('#txt_harga_' + id).val();
        var ketBiaya = $('#txt_keterangan_biaya_lain_' + id).val();
        var ketRinci = $('#txt_keterangan_rinci_' + id).val();
        var jml = $('#txt_jumlah_' + id).val();
        var getspp = $('#getspp' + id).val();
        var lokasi = $('#status_lokasi').val();

        if (!getspp) {
            toast('SPP is required!');
            $('#getspp' + id).css({
                "background": "#FFCECE"
            });
        } else if (!merk) {
            toast('Merk is required!');
            $('#txt_merk_' + id).css({
                "background": "#FFCECE"
            });
        } else if (!hrg) {
            toast('Harga is required!');
            $('#txt_harga_' + id).css({
                "background": "#FFCECE"
            });
        } else if (!ketRinci) {
            toast('Keterangan Rinci is required!');
            $('#txt_keterangan_rinci_' + id).css({
                "background": "#FFCECE"
            });
        } else if (jml > 1500000 && lokasi != "HO") {
            toast('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
            $('#txt_jumlah_' + id).css({
                "background": "#FFCECE"
            });
        } else if (biayalain > 0 && !ketBiaya) {


            toast('Keterangan Biaya is required!');
            $('#txt_keterangan_biaya_lain_' + id).css({
                "background": "#FFCECE"
            });

        } else {
            simpan(id);
        }

        return false;

    }

    function toast(v_text) {
        $.toast({
            position: 'top-right',
            heading: 'Failed!',
            text: v_text + ' ',
            icon: 'error',
            loader: false
        });
    }

    var simpanBaru = true;
    //Simpan Data
    function simpan(id) {
        if (simpanBaru) {

            console.log('simpan pertama', id);




            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/po_edit') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
                    if ($.trim($('#hidden_no_po').val()) == '') {
                        $('#lbl_spp_status').empty();
                        $('#lbl_spp_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
                    }
                },

                data: {
                    id_ppo: $('#id_ppo' + id).val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    hidden_no_po: $('#hidden_no_po').val(),
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    txt_no_spp: $('#noppo' + id).val(),
                    hidden_no_ref: $('#hidden_no_ref_spp_' + id).val(),
                    hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                    hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                    hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                    txt_qty: $('#txt_qty_' + id).val(),
                    txt_harga: $('#txt_harga_' + id).val(),
                    hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                    hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                    txt_merk: $('#txt_merk_' + id).val(),
                    txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                    txt_disc: $('#txt_disc_' + id).val(),
                    cmb_kurs: $('#cmb_kurs_' + id).val(),
                    txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                    txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                    hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                    hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                    id_item: $('#id_item_' + id).val(),
                    txt_jumlah: $('#txt_jumlah_' + id).val(),
                },
                success: function(data) {
                    // console.log(data, 'nah ini');
                    if (data.site_lebih_dari15 == 1) {
                        swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                        $('#lbl_status_simpan_' + id).empty();
                        $('#lbl_spp_status').empty();
                    } else {
                        $('#lbl_status_simpan_' + id).empty();

                        $.toast({
                            position: 'top-right',
                            heading: 'Success',
                            text: 'Berhasil Disimpan!',
                            icon: 'success',
                            loader: false
                        });
                        var refspp = data.refspp;
                        cekdataspp();
                        // sum_qty(noppo, id);

                        $('.div_form_2').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ',#txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).addClass('bg-light');
                        $('.div_form_3').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ',#txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).addClass('bg-light');
                        $('.div_form_3').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).attr('disabled', '');
                        $('.div_form_2').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).attr('disabled', '');

                        $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row_' + id).hide();
                        $('#btn_ubah_' + id).show();
                        $('#btn_hapus_' + id).show();
                        $('#hidden_no_ref_po_' + id).val(data.noref);

                        $('#lbl_spp_status').empty();

                        var idItem = data.id_item;
                        // console.log(idItem);
                        // console.log(id);
                        $('#hidden_id_po_item_' + id).val(idItem);
                        totalBayar();

                        simpanBaru = false;
                    }
                },
                error: function(request) {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#btn_simpan_' + id).hide();
                    $('#btn_hapus_row_' + id).hide();
                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    alert("KONEKSI TERPUTUS! GAGAL UPDATE PO");
                }
            });
        }
        // simpan keduakalinya
        else {
            console.log('simpan setelah dengan keadaan po dibuat');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Po/po_edit') ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#lbl_status_simpan_' + id).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');

                },

                data: {
                    id_ppo: $('#id_ppo' + id).val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    hidden_no_po: $('#hidden_no_po').val(),
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    txt_no_spp: $('#noppo' + id).val(),
                    hidden_no_ref: $('#hidden_no_ref_spp_' + id).val(),
                    hidden_kode_brg: $('#hidden_kode_brg_' + id).val(),
                    hidden_nama_brg: $('#hidden_nama_brg_' + id).val(),
                    hidden_satuan_brg: $('#hidden_satuan_brg_' + id).val(),
                    txt_qty: $('#txt_qty_' + id).val(),
                    txt_harga: $('#txt_harga_' + id).val(),
                    hidden_kodept: $('#hidden_kd_pt_' + id).val(),
                    hidden_namapt: $('#hidden_nama_pt_' + id).val(),
                    txt_merk: $('#txt_merk_' + id).val(),
                    txt_keterangan_rinci: $('#txt_keterangan_rinci_' + id).val(),
                    txt_disc: $('#txt_disc_' + id).val(),
                    cmb_kurs: $('#cmb_kurs_' + id).val(),
                    txt_biaya_lain: $('#txt_biaya_lain_' + id).val(),
                    txt_keterangan_biaya_lain: $('#txt_keterangan_biaya_lain_' + id).val(),
                    hidden_tanggal: $('#hidden_tgl_spp_' + id).val(),
                    hidden_tglref: $('#hidden_tgl_ref_' + id).val(),
                    id_item: $('#id_item_' + id).val(),
                    txt_jumlah: $('#txt_jumlah_' + id).val(),
                },
                success: function(data) {
                    if ((data.site_lebih_dari15 == 1)) {
                        swal('User SITE tidak boleh PO lebih dari Rp. 1.500.000!');
                        $('#lbl_status_simpan_' + id).empty();
                        $('#lbl_spp_status').empty();
                    } else {
                        $('#lbl_status_simpan_' + id).empty();
                        $.toast({
                            position: 'top-right',
                            heading: 'Success',
                            text: 'Berhasil Disimpan!',
                            icon: 'success',
                            loader: false
                        });
                        var refspp = data.refspp;
                        cekdataspp(id);
                        // sum_qty(noppo, id);

                        $('.div_form_2').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ',#txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).addClass('bg-light');
                        $('.div_form_3').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ',  #txt_keterangan_biaya_lain_' + id + ',#txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).addClass('bg-light');
                        $('.div_form_3').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).attr('disabled', '');
                        $('.div_form_2').find('#getspp' + id + ',#cmb_jenis_budget_' + id + ',#txt_merk_' + id + ' ,#txt_harga_' + id + ', #cmb_kurs_' + id + ', #txt_disc_' + id + ', #txt_keterangan_biaya_lain_' + id + ', #txt_qty_' + id + ', #txt_biaya_lain_' + id + ', #txt_jumlah_' + id + ', #txt_keterangan_rinci_' + id).attr('disabled', '');

                        $('#tr_' + id).find('input,textarea,select').prop('disabled', true);
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row_' + id).hide();
                        $('#btn_ubah_' + id).show();
                        $('#btn_hapus_' + id).show();
                        $('#hidden_no_ref_po_' + id).val(data.noref);
                        // console.log(response);

                        $('#lbl_spp_status').empty();

                        // $('#hidden_id_po').val(data.id_po);
                        $('#hidden_id_po_item_' + id).val(data.id_item);
                        totalBayar();

                        // simpanBaru = false;
                    }
                },
                error: function(request) {
                    $('#lbl_status_simpan_' + id).empty();
                    $('#btn_simpan_' + id).hide();
                    $('#btn_hapus_row_' + id).hide();
                    $('#btn_ubah_' + id).show();
                    $('#btn_hapus_' + id).show();
                    alert("KONEKSI TERPUTUS! GAGAL UPDATE PO");
                }
            });

        }

    }

    function cekdataspp(id) {
        var refspp = $('#hidden_no_ref_spp_' + id).val();
        console.log(refspp);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/cekdataspp'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                refspp: refspp
            },
            success: function(data) {
                var a = data.data1;
                var b = data.data2;

                // // console.log(item);
                // console.log(a.jmlhSPP1, b.jmlhSPP2);
                if (a.jmlhSPP1 == 0) {
                    updatePPO(id);
                    // console.log('oke update ppo');
                } else {
                    console.log('field po belum 0 semua');
                }

            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }

    function updatePPO(id) {
        var refspp = $('#hidden_no_ref_spp_' + id).val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Po/updatePPO'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                refspp: refspp
            },
            success: function(data) {
                console.log('oke field ppo berhasil diupdate', data);
            },
            error: function(request) {
                alert("KONEKSI TERPUTUS!");
            }
        });
    }
</script>