<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PO <i>(Edit)</i></h4>
                    <div class="row justify-content-between headspp">
                        <p class="sub-header ml-2">
                            <font face="Verdana" size="2.5">Purchase Order</font>
                        </p>
                    </div>

                    <hr class="mt-0 mb-2">
                    <?php
                    switch ($sesi_sl) {
                        case 'HO':
                    ?>
                            <div class="x_content mb-0 div_form_2">

                                <div class="row justify-content-center">
                                    <div class="col-6">

                                    </div>
                                    <div class="col-6">
                                        <div style="text-align: right;">
                                            <a href="#" style="display:none;" onclick="cetak()" type="button" id="cetak" class="btn btn-danger btn-xs waves-effect waves-light" title="Cetak">
                                                <i class="fas fa-print">&nbsp;Print</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h6 id="h4_no_po" name="h4_no_po"></h6>
                                <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po" value="<?= $nopo ?>">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                                <div class="table-responsive mt-0">
                                    <table id="tableRinciPO" class="table table-striped table-bordered table-in">
                                        <thead>
                                            <tr>
                                                <?php
                                                switch ($sesi_sl) {
                                                    case 'HO':
                                                ?>
                                                        <th width="250px">
                                                            <font face="Verdana" size="2.5">SPP</font>
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
                                                    <font face="Verdana" size="2.5">Jenis Budget</font>
                                                </th> -->
                                                <th width="500px">
                                                    <font face="Verdana" size="2.5">Nama & Kode Barang</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Merk</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Qty</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="2.5">Harga</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Kurs</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Disc <span>%</span></font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Biaya Lainnya</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Ket.&nbsp;Biaya</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="2.5">Keterangan</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Jumlah Rp</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Aksi</font>
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

                                <h6 id="h4_no_po" name="h4_no_po"></h6>
                                <h6 id="h4_no_ref_po" name="h4_no_ref_po"></h6>
                                <input type="hidden" id="hidden_no_po" name="hidden_no_po" value="<?= $nopo ?>">
                                <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                                <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
                                <input type="hidden" value="<?= $sesi_sl; ?>" id="lokasi" name="lokasi">
                                <div class="table-responsive mt-0">
                                    <table id="tableItemPO" class="table table-striped table-bordered table-in">
                                        <thead>
                                            <tr>
                                                <?php
                                                switch ($sesi_sl) {
                                                    case 'HO':
                                                ?>
                                                        <th>#</th>
                                                        <th width="250px">
                                                            <font face="Verdana" size="2.5">SPP</font>
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
                                                    <font face="Verdana" size="2.5">Jenis Budget</font>
                                                </th> -->
                                                <th width="500px">
                                                    <font face="Verdana" size="2.5">Nama & Kode Barang</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Merk</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Qty</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Harga</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Kurs</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Disc <span>%</span></font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Biaya Lainnya</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Ket.&nbsp;Biaya</font>
                                                </th>

                                                <th>
                                                    <font face="Verdana" size="2.5">Keterangan</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Jumlah Rp</font>
                                                </th>
                                                <th>
                                                    <font face="Verdana" size="2.5">Aksi</font>
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

</div>

<input type="hidden" id="hidden_nopo_edit" value="<?= $nopo ?>">
<input type="hidden" id="id_po">

<script>
    var cancleUpdatePO = true;
    var updateBaru = true;

    $(document).ready(function() {
        var no_nopo_edit = $('#hidden_nopo_edit').val();
        cari_po_edit(no_nopo_edit);
    });

    function update(id) {
        if (updateBaru) {
            // console.log('update', id);

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
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    txt_kode_supplier: $('#kd_supplier').val(),
                    txt_supplier: $('#txtsupplier').val(),
                    txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                    txt_pemesan: $('#txt_pemesan').val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    cmb_status_bayar: $('#cmb_status_bayar').val(),
                    txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                    txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                    txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                    cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                    txt_keterangan: $('#keterangan').val(),
                    txt_no_penawaran: $('#no_penawaran').val(),
                    cmb_ppn: $('#ppn').val(),
                    txt_total_pembayaran: $('#ttl_pembayaran').val(),
                    txt_ket_pengiriman: $('#ket_pengiriman').val(),
                    txt_uang_muka: $('#txt_uang_muka').val(),
                    txt_no_voucher: $('#txt_no_voucher').val(),
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
                    id_item: $('#hidden_id_po_item' + id).val(),
                    hidden_no_po: $('#hidden_no_po').val(),

                },
                success: function(data) {
                    if (true) {

                        $('#lbl_status_simpan_1' + id).empty();
                        $.toast({
                            heading: 'Success',
                            text: 'Berhasil diupdate',
                            position: 'top-right',
                            stack: true,
                            icon: 'success'
                        });


                        $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');


                        // $('#tableRinciPO tbody #tr_' + ' td').find('#btn_simpan_' + ',#txt_no_spp_').attr('disabled', '');
                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row' + id).hide();
                        $('#btn_update_' + id).hide();
                        $('#btn_cancel_update_' + id).hide();

                        $('#btn_ubah_' + id).show();
                        // $('#btn_hapus_' + id).show();
                        totalBayar();

                        updateBaru = false;
                    } else {
                        $('#lbl_status_simpan_1' + id).empty();
                        $('#lbl_status_simpan_1' + id).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                    }
                }
            });
        } else {
            console.log('update setelah dengan keadaan po dibuat');
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
                    hidden_kode_departemen: $('#hidden_kd_departemen_' + id).val(),
                    hidden_departemen: $('#hidden_departemen_' + id).val(),
                    cmb_jenis_budget: $('#cmb_jenis_budget_' + id).val(),
                    txt_kode_supplier: $('#kd_supplier').val(),
                    txt_supplier: $('#txtsupplier').val(),
                    txt_kode_pemesan: $('#txt_kode_pemesan').val(),
                    txt_pemesan: $('#txt_pemesan').val(),
                    hidden_no_ref_po: $('#hidden_no_ref_po').val(),
                    cmb_status_bayar: $('#cmb_status_bayar').val(),
                    txt_tempo_pembayaran: $('#tmpo_pembayaran').val(),
                    txt_lokasi_pengiriman: $('#lks_pengiriman').val(),
                    txt_tempo_pengiriman: $('#tmpo_pengiriman').val(),
                    cmb_lokasi_pembelian: $('#lks_pembelian').val(),
                    txt_keterangan: $('#keterangan').val(),
                    txt_no_penawaran: $('#no_penawaran').val(),
                    cmb_ppn: $('#ppn').val(),
                    txt_total_pembayaran: $('#ttl_pembayaran').val(),
                    txt_ket_pengiriman: $('#ket_pengiriman').val(),
                    txt_uang_muka: $('#txt_uang_muka').val(),
                    txt_no_voucher: $('#txt_no_voucher').val(),
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
                    id_item: $('#hidden_id_po_item' + id).val(),
                    hidden_no_po: $('#hidden_no_po').val(),

                },

                success: function(data) {
                    if (true) {

                        $('#lbl_status_simpan_1' + id).empty();

                        $.toast({
                            heading: 'Success',
                            text: 'Berhasil diupdate',
                            position: 'top-right',
                            stack: true,
                            icon: 'success'
                        });


                        $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                        $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                        $('#btn_simpan_' + id).hide();
                        $('#btn_hapus_row' + id).hide();
                        $('#btn_update_' + id).hide();
                        $('#btn_cancel_update_' + id).hide();
                        $('#btn_ubah_' + id).show();
                        // $('#btn_hapus_' + id).show();
                        totalBayar();

                    } else {
                        $('#lbl_status_simpan_1' + id).empty();
                        $('#lbl_status_simpan_1' + id).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                    }
                }
            });
        }

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
                console.log(data);

                var po = data.po;
                var item_po = data.item_po;

                $('#h4_no_po').html('No. PO : ' + item_po[0].nopo);
                $('#h4_no_ref_po').html('No. Ref PO : ' + item_po[0].noref);
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
                    $('#hidden_no_spp').val(nopo);
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
                    $('#txt_keterangan_biaya_lain_' + i).val(nama_bebanbpo);
                    $('#txt_harga_' + i).val(harga);
                    $('#txt_jumlah_' + i).val(jumharga);
                    $('#id_item_po' + i).val(iditem);
                    $('#id_item_' + i).val(iditem);
                    $('#hidden_id_po_item' + i).val(iditem);
                    $('#hidden_kd_departemen_' + i).val(kd_dept);
                    $('#hidden_tgl_spp_' + i).val(tglspp);
                    $('#hidden_kd_pt_' + i).val(kodept);
                    $('#hidden_nama_pt_' + i).val(namapt);
                    $('#noppo' + i).val(noppo);
                    $('#hidden_no_ref_spp_' + i).val(norefppo);


                    $('.div_form_2').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ',#txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).addClass('bg-light');
                    $('.div_form_3').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ',  #txt_keterangan_biaya_lain_' + i + ',#txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).addClass('bg-light');
                    $('.div_form_3').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).attr('disabled', '');
                    $('.div_form_2').find('#getspp' + i + ',#cmb_jenis_budget_' + i + ',#txt_merk_' + i + ' ,#txt_harga_' + i + ', #cmb_kurs_' + i + ', #txt_disc_' + i + ', #txt_keterangan_biaya_lain_' + i + ', #txt_qty_' + i + ', #txt_biaya_lain_' + i + ', #txt_jumlah_' + i + ', #txt_keterangan_rinci_' + i).attr('disabled', '');

                }
            },
            error: function(response) {
                console.log(response.responseText);
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
                    id_po: $('#id_po').val(),
                    id_po_item: $('#id_item_po' + id).val(),
                },
                success: function(data) {
                    console.log(data);
                    // var po = data.data_po;
                    var item = data.data_item_po;
                    // console.log(item);

                    totalBayar();
                    //untuk item PO

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
                    $('.div_form_2').find('input,textarea,select').attr('disabled', '');
                    $('.div_form_2').find('input,textarea,select').addClass('form-control bg-light');
                    $('.div_form_3').find('input,textarea,select').attr('disabled', '');
                    $('.div_form_3').find('input,textarea,select').addClass('form-control bg-light');


                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_1' + id).empty();
                    $.toast({
                        position: 'top-right',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });

                    // $('#lbl_status_simpan_1' + id).empty();
                    // $('#lbl_status_simpan_1' + id).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');
                    cancleUpdatePO = false;
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
                    id_po: $('#id_po').val(),
                    id_po_item: $('#id_item_po' + id).val(),
                },
                success: function(data) {
                    // console.log(data);
                    // var po = data.data_po;
                    var item = data.data_item_po;

                    // console.log(item);

                    totalBayar();
                    //untuk item PO

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


                    $('.div_form_2').find('input,textarea,select').attr('disabled', '');
                    $('.div_form_2').find('input,textarea,select').addClass('form-control bg-light');
                    $('.div_form_3').find('input,textarea,select').attr('disabled', '');
                    $('.div_form_3').find('input,textarea,select').addClass('form-control bg-light');

                    $('#tr_' + id).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + id).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_1' + id).empty();
                    $.toast({
                        position: 'top-right',
                        text: 'Edit Dibatalkan!',
                        icon: 'success',
                        loader: false
                    });
                    // $('#lbl_status_simpan_1' + id).empty();
                    // $('#lbl_status_simpan_1' + id).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');
                    cancleUpdatePO = false;
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
                no_ref_po: $('#hidden_no_ref_po').val()
            },
            success: function(data) {
                // console.log(data);
                $('#ttl_pembayaran').val(data.totalbayar);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }



    function tambah_item(row) {

        // row++;
        console.log("bariske", row);

        var tr_buka = '<tr id="tr_' + row + '">';

        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';


        var td_col_3 = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_jenis_budget_' + row + '" name="cmb_jenis_budget_' + row + '" required>' +
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
        var td_col_ = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control" id="brg' + row + '" name="brg' + row + '">' +
            '<span id="nama_brg_' + row + '"></span><span> | </span><span id="kode_brg_' + row + '" ></span>' +
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
            '<input type="hidden" class="form-control" id="hidden_kode_brg_' + row + '" name="hidden_kode_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_nama_brg_' + row + '" name="hidden_nama_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_satuan_brg_' + row + '" name="hidden_satuan_brg_' + row + '"   />' +
            '<input type="hidden" class="form-control" id="id_item_po' + row + '" name="id_item_po' + row + '" >' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_merk_' + row + '" name="txt_merk_' + row + '" placeholder="Merk"  required />' +

            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control bg-light" id="txt_qty_' + row + '" name="txt_qty' + row + '" placeholder="Qty" autocomplite="off" size="8" onkeyup="jumlah(' + row + ')" readonly>' +
            '<input type="hidden" class="form-control" id="qty_' + row + '" name="qty' + row + '" placeholder="Qty" size="8" onkeyup="jumlah(' + row + ')" />' +
            '<input type="hidden" class="form-control" id="qty2_' + row + '" name="qty2' + row + '" placeholder="Qty" size="8"/>' +

            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control" id="txt_harga_' + row + '" name="txt_harga_' + row + '" onkeyup="jumlah(' + row + ')" placeholder="Harga dalam Rupiah" size="15" autocomplite="off" /><br />' +

            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_kurs_' + row + '" name="cmb_kurs_' + row + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control" id="txt_disc_' + row + '" name="txt_disc_' + row + '" size="10" value="0" onkeyup="jumlah(' + row + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="number" class="form-control" id="txt_biaya_lain_' + row + '" name="txt_biaya_lain_' + row + '" size="15" value="0" onkeyup="jumlah(' + row + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="resizable_textarea form-control" id="txt_keterangan_biaya_lain_' + row + '" name="txt_keterangan_biaya_lain_' + row + '" size="26" placeholder="Keterangan Biaya" onkeypress="saveRinciEnter(event,' + row + ')"></textarea><br />' +


            '</td>'
        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="resizable_textarea form-control" id="txt_keterangan_rinci_' + row + '" name="txt_keterangan_rinci_' + row + '" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + row + ')"></textarea><br />' +

            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_jumlah_' + row + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            '<label id="lbl_status_simpan_1' + row + '"></label>' +
            '<input type="hidden" id="hidden_id_po_item' + row + '" name="hidden_id_po_item' + row + '">' +
            '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<span style="display:none;" id="habis_' + row + '" class="badge badge-danger">Habis</span>' +
            '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + row + ')" ></button>' +
            '<button class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah(' + row + ')" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +

            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();



        $('#tbody_item').append(tr_buka + form_buka + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);
        $('#txt_qty_' + row).number(true, 2);
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
        var td_col_1 = '<td width="3%">' +
            '<input type="hidden" id="hidden_proses_status_' + n + '" name="hidden_proses_status_' + n + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" name="btn_tambah_row" id="tambah_row' + n + '" ></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row_' + n + '" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';

        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="getspp' + n + '" name="spp' + n + '" >' +
            '<input type="hidden" class="form-control" id="id_item_po' + n + '" name="id_item_po' + n + '" >' +
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


        var td_col_3 = '<td width="20%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_jenis_budget_' + n + '" name="cmb_jenis_budget_' + n + '" required>' +
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
        var td_col_ = '<td width="30%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            // '<input type="text" class="form-control" id="brg' + row + '" name="brg' + row + '">' +
            '<span id="nama_brg_' + n + '"></span><span> | </span><span id="kode_brg_' + n + '" ></span>' +

            '<input type="hidden" class="form-control" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '"   />' +
            '<input type="hidden" class="form-control" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '"   />' +

            '</td>';
        var td_col_4 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_merk_' + n + '" name="txt_merk_' + n + '" placeholder="Merk"  required />' +

            '</td>';
        var td_col_5 = '<td width="7%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +
            '<input type="hidden" class="form-control" id="qty_' + n + '" name="qty_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +
            '<input type="hidden" class="form-control" id="qty2_' + n + '" name="qty2_' + n + '" placeholder="Qty" size="8" onkeyup="jumlah(' + n + ')" />' +

            '</td>';
        var td_col_6 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_harga_' + n + '" name="txt_harga_' + n + '" value="0" onkeyup="jumlah(' + n + ')" placeholder="Harga dalam Rupiah" size="15" required /><br />' +

            '</td>';
        var td_col_7 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<select class="form-control" id="cmb_kurs_' + n + '" name="cmb_kurs_' + n + '" required="">' +
            '<option value="Rp">Rp IDR</option>' +
            '<option value="USD">&dollar; USD</option>' +
            '<option value="SGD">S&dollar; SGD</option>' +
            '<option value="Euro">&euro; Euro</option>' +
            '<option value="GBP">&pound; GBP</option>' +
            '<option value="Yen">&yen; Yen</option>' +
            '<option value="MYR">RM MYR</option>' +
            '</select><br />' +
            '</td>';
        var td_col_8 = '<td width="8%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_disc_' + n + '" name="txt_disc_' + n + '" size="10" value="0" onkeyup="jumlah(' + n + ')" placeholder="Disc"/>' +

            '</td>';
        var td_col_9 = '<td width="10%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_biaya_lain_' + n + '" name="txt_biaya_lain_' + n + '" size="15" value="0" onkeyup="jumlah(' + n + ')" placeholder="Biaya Lain"/>' +

            '</td>';
        var td_col_10 = '<td width="12%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="resizable_textarea form-control" id="txt_keterangan_biaya_lain_' + n + '" name="txt_keterangan_biaya_lain_' + n + '" size="26" placeholder="Keterangan Biaya" onkeypress="saveRinciEnter(event,' + n + ')"></textarea><br />' +


            '</td>'
        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<textarea class="resizable_textarea form-control" id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + n + ')"></textarea><br />' +

            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<input type="text" class="form-control" id="txt_jumlah_' + n + '" name="txt_jumlah_" size="15" placeholder="Jumlah"  readonly />' +
            '<label id="lbl_status_simpan_1' + n + '"></label>' +
            '<input type="hidden" id="hidden_id_po_item' + n + '" name="hidden_id_po_item' + n + '">' +
            '</td>';
        var td_col_13 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<span style="display:none;" id="habis_' + n + '" class="badge badge-danger">Habis</span>' +
            '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="validasi(' + n + ')" ></button>' +
            '<button  class="btn btn-xs btn-warning fa fa-edit mb-1" onclick="ubah(' + n + ')" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" ></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update"  onclick="cancleUpdate(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +


            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';
        var lokasi = $('#lokasi').val();



        $('#tbody_rincian').append(tr_buka + form_buka + td_col_2 + td_col_ + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + form_tutup + tr_tutup);
        $('#txt_qty_' + n).number(true, 2);
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
                    swal('melebihi, inputan ke 2');
                    $('#txt_qty_' + id).val(tmbh);
                }
            } else {
                if (qty > qty2) {
                    // console.log('benar');
                    swal("Qty melebihi bataaaas!")
                    $('#txt_qty_' + id).val(qty2);
                } else {
                    console.log("sip dah");
                }
            }

        });


    }

    function jumlah(id) {
        // console.log('jumlahke', no_row)
        var qty = $('#txt_qty_' + id).val();
        var harga = $('#txt_harga_' + id).val();
        var disc = $('#txt_disc_' + id).val();
        var biaya_lain = $('#txt_biaya_lain_' + id).val();

        var hargaDisc = (parseInt(harga) * parseInt(disc)) / 100;
        var hargaSetelahDisc = parseInt(harga) - parseInt(hargaDisc);

        var nilai = (parseFloat(qty) * parseFloat(hargaSetelahDisc)) + parseFloat(biaya_lain);
        // console.log(nilai);

        $('#txt_jumlah_' + id).val(nilai);
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
</script>