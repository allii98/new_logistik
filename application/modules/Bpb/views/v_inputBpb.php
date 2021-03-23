<div class="container-fluid">

    <div class="row">
        <div class="col-md col-xl-3">
            <div class="card-body">

                <div class="widget-rounded-circle card-box">
                    <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BPB</h4>
                    <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        Input Bon Permintaan Barang
                    </p>

                    <div class="row">
                        <div class="form-group row col-md-3">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Untuk keperluan <span class="required">*</span>
                            </label>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <textarea class="resizable_textarea form-control" rows="1" id="txt_untuk_keperluan" name="txt_untuk_keperluan" placeholder="Untuk keperluan" required="" autocomplite="off"></textarea>
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Bagian<span class="required">*</span>
                            </label>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <select class="form-control" id="cmb_bagian" name="cmb_bagian" required="" onchange="cek_tm_tbm(1)">
                                    <option disabled selected style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">-- Pilih --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl&nbsp;BPB <span class="required">*</span>
                            </label>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <input id="txt_tgl_bpb" name="txt_tgl_bpb" class="form-control bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" required="required" type="date" value="<?= date('Y-m-d') ?>" autocomplite="off" readonly>
                            </div>
                        </div>

                        <div class="form-group row col-md-3">
                            <div class="col-md-1"></div>
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Alokasi Estate<span class="required">*</span>
                            </label>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <select class="form-control" id="cmb_alokasi_est" name="cmb_alokasi_est" required="">
                                    <option disabled selected style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">-- Pilih --</option>
                                    <option value="03">03</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                </select>
                                <div id="txt_estate"></div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                            </div>
                        </div>

                    </div>
                    <hr class="mt-0 mb-2">
                    <div class="row">
                        <label id="lbl_bpb_status" name="lbl_bpb_status" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No. BPB : ... &nbsp; No. Ref. BPB : ...</label>
                        <h4 id="h4_no_bpb" name="h4_no_bpb"></h4>
                        <h4 id="h4_no_ref_bpb" name="h4_no_ref_bpb"></h4>
                        <input type="hidden" id="hidden_no_bpb" name="hidden_no_bpb">
                        <input type="hidden" id="hidden_no_ref_bpb" name="hidden_no_ref_bpb">
                        <input type="hidden" id="hidden_id_bpb" name="hidden_id_bpb">
                        <div class="table-responsive">
                            <table class="table w-100 nowrap dataTable no-footer table-striped" role="grid" aria-describedby="scroll-horizontal-datatable_info" style="width: 1101px;" id="tableRinciBPB">
                                <thead>
                                    <tr>
                                        <th width="3%"></th>
                                        <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">TM/TBM</th>
                                        <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Afd/Unit</th>
                                        <th width="8%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Blok/Sub</th>
                                        <th width="10%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Thn Tanam</th>
                                        <th width="20%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Bahan</th>
                                        <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Account Beban</th>
                                        <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Barang</th>
                                        <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Satuan /Stok/Booking</th>
                                        <th width="8%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Qty Diminta</th>
                                        <!-- <th width="8%">Qty Disetujui</th> -->
                                        <th width="25%" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Keterangan</th>
                                        <th width="3%"></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_rincian" name="tbody_rincian">
                                    <tr id="tr_1">
                                        <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                            <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                            <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_1" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                            <!-- <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button> -->
                                        </td>
                                        <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                            <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                                <!-- TM/TBM -->
                                                <select class="form-control" id="cmb_tm_tbm_1" name="cmb_tm_tbm_1" onchange="cmb_afd_unit('1')">
                                                    <option value="-">-</option>
                                                    <!-- <option value=""></option> -->
                                                    <option value="TM" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">TM</option>
                                                    <option value="TBM" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">TBM</option>
                                                    <option value="LANDCLEARING" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">LANDCLEARING</option>
                                                    <option value="PEMBIBITAN" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PEMBIBITAN</option> ->
                                                </select>
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                                <!-- AFD/UNIT -->
                                                <select class="form-control set_strip_cmb" id="cmb_afd_unit_1" name="cmb_afd_unit_1" onchange="cmb_blok_sub('1')">
                                                    <option value="-">-</option>
                                                </select>
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                <!-- BLOK/SUB -->
                                                <select class="form-control set_strip_cmb" id="cmb_blok_sub_1" name="cmb_blok_sub_1" onchange="cmb_tahun_tanam(1)">
                                                    <option value="-">-</option>
                                                </select>
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                <!-- Tahun Tanam -->
                                                <select class="form-control set_strip_cmb" id="cmb_tahun_tanam_1" name="cmb_tahun_tanam_1" onchange="cmb_bahan(1)">
                                                    <option value="-">-</option>
                                                </select>
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                <!-- Bahan -->
                                                <select class="form-control set_strip_cmb" id="cmb_bahan_1" name="cmb_bahan_1">
                                                    <option value="-">-</option>
                                                </select>
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;  padding-top: 2px; padding-bottom: 0;">
                                                <!-- Account Beban -->
                                                <input type="text" class="form-control" id="txt_account_beban_1" name="txt_account_beban_1" placeholder="Account Beban" onfocus="pilihModalAccBeban('1')" autocomplite="off">
                                                <label class="control-label" id="lbl_no_acc_1"></label>
                                                <label class="control-label" id="lbl_nama_acc_1"></label>
                                                <input type="hidden" id="hidden_no_acc_1" name="hidden_no_acc_1">
                                                <input type="hidden" id="hidden_nama_acc_1" name="hidden_nama_acc_1">
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                <!-- Barang -->
                                                <input type="text" class="form-control" id="txt_barang_1" name="txt_barang_1" onfocus="cari_barang('1')" placeholder="Barang" autocomplite="off">
                                                <label id="lbl_kode_barang_1"></label>
                                                <label id="lbl_nama_barang_1"></label>
                                                <input type="hidden" id="hidden_kode_barang_1" name="hidden_kode_barang_1">
                                                <input type="hidden" id="hidden_nama_barang_1" name="hidden_nama_barang_1">
                                                <input type="hidden" id="hidden_grup_barang_1" name="hidden_grup_barang_1">
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                <label>Satuan/<b id="b_satuan_1" name="b_satuan_1"></b></label>
                                                <input type="hidden" id="hidden_satuan_1" name="hidden_satuan_1">

                                                <label>Stok ditgl ini/<b id="b_stok_tgl_ini_1" name="b_stok_tgl_ini_1"></b></label>
                                                <input type="hidden" id="hidden_stok_tgl_ini_1" name="hidden_stok_tgl_ini_1">

                                                <label>Booking/<b id="b_stok_booking_1" name="b_stok_booking_1"></b></label>
                                                <input type="hidden" id="hidden_stok_booking_1" name="hidden_stok_booking_1">



                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                <!-- Qty Diminta & Stok di Tgl ini & Satuan -->
                                                <input type="number" class="form-control currencyduadigit" id="txt_qty_diminta_1" name="txt_qty_diminta_1" placeholder="Qty Diminta" autocomplite="off">


                                            </td>

                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                <!-- Keterangan -->
                                                <textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" rows="1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'1')" autocomplite="off"></textarea>
                                                <label id="lbl_status_simpan_1"></label>
                                                <input type="hidden" id="hidden_id_bpbitem_1" name="hidden_id_bpbitem_1">
                                            </td>
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
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
    </div> <!-- end row-->


</div>
<input type="hidden" id="hidden_no_table" name="hidden_no_table">
<script>
    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/cari_dept'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: '',
            success: function(data) {
                $.each(data, function(index) {
                    var opsi_cmb_bagian = '<option value="' + data[index].kode + '">' + data[index].nama + '</option>';
                    $('#cmb_bagian').append(opsi_cmb_bagian);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });

        setInterval(function() {
            check_form_2();

        }, 1000);




        $('#cmb_alokasi_est').change(function() {
            // var ses_lokasi ='<?= $this->session->userdata('status_lokasi') ?>';
            if (this.value == '06') {
                $('#_est').remove();
                $('#txt_estate').append('<label id="_est" class="control-label">Kebun 1</label>');
            } else if (this.value == '07') {
                $('#_est').remove();
                $('#txt_estate').append('<label id="_est" class="control-label">Kebun 2</label>');
            } else if (this.value == '08') {
                $('#_est').remove();
                $('#txt_estate').append('<label id="_est" class="control-label">Kebun 3</label>');
            } else if (this.value == '09') {
                $('#_est').remove();
                $('#txt_estate').append('<label id="_est" class="control-label">Kebun 4</label>');
            } else {
                $('#_est').remove();
                $('#txt_estate').append('');
            }
        });

    });

    function cek_tm_tbm(row) {
        if ($('#cmb_bagian :selected').text() != "TANAMAN") {
            var strip_cmb = '<option value="-">-</option>';
            // $('.set_strip_cmb').empty();
            // $('.set_strip_cmb').append(strip_cmb);
            $('.set_strip_cmb').html(strip_cmb);
            // $('#cmb_tm_tbm_'+row).html(strip_cmb);
        } else {
            var cmb_tm_tbm = '<option value=""></option>';
            cmb_tm_tbm += '<option value="TM">TM</option>';
            cmb_tm_tbm += '<option value="TBM">TBM</option>';
            cmb_tm_tbm += '<option value="LANDCLEARING">LANDCLEARING</option>';
            cmb_tm_tbm += '<option value="PEMBIBITAN">PEMBIBITAN</option>';

            var strip_cmb = '<option value="-">-</option>';
            // $('.set_strip_cmb').empty();
            // $('.set_strip_cmb').append(strip_cmb);
            $('.set_strip_cmb').html(strip_cmb);
            // $('#cmb_tm_tbm_'+row).html(strip_cmb);

            // $('.cmb_tm_tbm').empty();
            // $('.cmb_tm_tbm').append(cmb_tm_tbm);			
            $('.cmb_tm_tbm').html(cmb_tm_tbm);
            // $('#cmb_tm_tbm_'+row).html(cmb_tm_tbm);

            // $('#txt_account_beban_'+row).attr('disabled','');
        }
    }

    function check_form_2() {
        if ($.trim($('#txt_untuk_keperluan').val()) != '' && $.trim($('#cmb_bagian').val()) != '' && $.trim($('#cmb_alokasi_est').val()) != '') {

            // $('.div_form_2').show();

            $('#btn_simpan_1').removeAttr('disabled', '');
            $('#btn_tambah_row_1').removeAttr('disabled', '');
            $('#tableRinciBPB').find('input,textarea,select').removeAttr('disabled');
        } else {
            // $('.div_form_2').hide();

            $('#btn_simpan_1').attr('disabled', '');
            $('#btn_tambah_row_1').attr('disabled', '');
            $('#tableRinciBPB').find('input,textarea,select').attr('disabled', '');

        }

    }


    function tambah_row() {
        var row = $('#hidden_no_table').val();
        var tr_buka = '<tr id="tr_' + row + '">';
        var td_col_1 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            '<input type="hidden" id="hidden_proses_status_' + row + '" name="hidden_proses_status_' + row + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row(' + row + ')"></button><br />' +
            '<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + row + '" name="btn_hapus_row" onclick="hapus_row(' + row + ')"></button>' +
            '</td>';
        var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- TM/TBM -->' +
            '<select class="form-control set_strip_cmb cmb_tm_tbm" id="cmb_tm_tbm_' + row + '" name="cmb_tm_tbm_' + row + '" onchange="cmb_afd_unit(' + row + ')">'
            // +'<option value=""></option>'
            // +'<option value="TM">TM</option>'
            // +'<option value="TBM">TBM</option>'
            // +'<option value="LANDCLEARING">LANDCLEARING</option>'
            // +'<option value="PEMBIBITAN">PEMBIBITAN</option>'
            +
            '</select>' +
            '</td>';
        var td_col_3 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- AFD/UNIT -->' +
            '<select class="form-control set_strip_cmb" id="cmb_afd_unit_' + row + '" name="cmb_afd_unit_' + row + '" onchange="cmb_blok_sub(' + row + ')">' +
            '<option value=""></option>' +
            '<option value="01">01</option>' +
            '<option value="02">02</option>' +
            '<option value="03">03</option>' +
            '<option value="04">04</option>' +
            '<option value="05">05</option>' +
            '<option value="06">06</option>' +
            '<option value="07">07</option>' +
            '<option value="08">08</option>' +
            '<option value="09">09</option>' +
            '<option value="10">10</option>' +
            '<option value="11">11</option>' +
            '<option value="12">12</option>' +
            '<option value="14">14</option>' +
            '<option value="15">15</option>' +
            '<option value="16">16</option>' +
            '<option value="17">17</option>' +
            '<option value="99">99</option>' +
            '</select>' +
            '</td>';
        var td_col_4 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- BLOK/SUB -->' +
            '<select class="form-control set_strip_cmb" id="cmb_blok_sub_' + row + '" name="cmb_blok_sub_' + row + '" onchange="cmb_tahun_tanam(' + row + ')">' +
            '<option value=""></option>' +
            '</select>' +
            '</td>';
        var td_col_5 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Tahun Tanam -->' +
            '<select class="form-control set_strip_cmb" id="cmb_tahun_tanam_' + row + '" name="cmb_tahun_tanam_' + row + '" onchange="cmb_bahan(' + row + ')">' +
            '<option value=""></option>' +
            '</select>' +
            '</td>';
        var td_col_6 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Bahan -->' +
            '<select class="form-control set_strip_cmb" id="cmb_bahan_' + row + '" name="cmb_bahan_' + row + '">' +
            '<option value=""></option>' +
            '</select>' +
            '</td>';
        var td_col_7 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Account Beban -->' +
            '<input type="text" class="form-control" id="txt_account_beban_' + row + '" name="txt_account_beban_' + row + '" placeholder="Account Beban" onfocus="pilihModalAccBeban(' + row + ')" >' +
            '<label class="control-label" id="lbl_no_acc_' + row + '"></label>' +
            '<label class="control-label" id="lbl_nama_acc_' + row + '"></label>' +
            '<input type="hidden" id="hidden_no_acc_' + row + '" name="hidden_no_acc_' + row + '">' +
            '<input type="hidden" id="hidden_nama_acc_' + row + '" name="hidden_nama_acc_' + row + '">' +
            '</td>';
        var td_col_8 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Barang -->' +
            '<input type="text" class="form-control" id="txt_barang_' + row + '" name="txt_barang_' + row + '" onfocus="cari_barang(' + row + ')" placeholder="Barang">' +
            '<label id="lbl_kode_barang_' + row + '"></label>' +
            '<label id="lbl_nama_barang_' + row + '"></label>' +
            '<input type="hidden" id="hidden_kode_barang_' + row + '" name="hidden_kode_barang_' + row + '">' +
            '<input type="hidden" id="hidden_nama_barang_' + row + '" name="hidden_nama_barang_' + row + '">' +
            '<input type="hidden" id="hidden_grup_barang_' + row + '" name="hidden_grup_barang_' + row + '">' +
            '</td>';
        var td_col_10 = '<td>' +
            '<label>Satuan : <b id="b_satuan_' + row + '" name="b_satuan_' + row + '"></b></label>' +
            '<input type="hidden" id="hidden_satuan_' + row + '" name="hidden_satuan_' + row + '">' +
            '<label>Stok di tgl ini : <b id="b_stok_tgl_ini_' + row + '" name="b_stok_tgl_ini_' + row + '"></b></label>' +
            '<input type="hidden" id="hidden_stok_tgl_ini_' + row + '" name="hidden_stok_tgl_ini_' + row + '">' +
            '<label>Booking : <b id="b_stok_booking_' + row + '" name="b_stok_booking_' + row + '"></b></label>' +
            '<input type="hidden" id="hidden_stok_booking_' + row + '" name="hidden_stok_booking_' + row + '">' +
            '</td>';
        var td_col_9 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Qty Diminta & Stok di Tgl ini & Satuan -->' +
            '<input type="text" class="form-control" id="txt_qty_diminta_' + row + '" name="txt_qty_diminta_' + row + '" placeholder="Qty Diminta">' +

            '</td>';

        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Keterangan -->' +
            '<textarea class="resizable_textarea form-control" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + row + ')"></textarea>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '<input type="hidden" id="hidden_id_bpbitem_' + row + '" name="hidden_id_bpbitem_' + row + '">' +
            '</td>';
        var td_col_12 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_10 + td_col_9 + td_col_11 + td_col_12 + form_tutup + tr_tutup);

        cek_bagian(row);

        $('#txt_qty_diminta_' + row).addClass('currencyduadigit');
        $('.currencyduadigit').number(true, 2);
        // $('#txt_account_beban_'+row).attr('disabled','');

        $('html, body').animate({
            scrollTop: $("#tr_" + row).offset().top
        }, 2000);

        row++;
        $('#hidden_no_table').val(row);
    }

    function cek_bagian(row) {
        // console.log($('#cmb_bagian :selected').text());
        if ($('#cmb_bagian :selected').text() != "TANAMAN") {
            var strip_cmb = '<option value="-">-</option>';
            // $('.set_strip_cmb').empty();
            // $('.set_strip_cmb').append(strip_cmb);
            $('.set_strip_cmb').html(strip_cmb);
            // $('#cmb_tm_tbm_'+row).html(strip_cmb);
        } else {
            var cmb_tm_tbm = '<option value=""></option>';
            cmb_tm_tbm += '<option value="TM">TM</option>';
            cmb_tm_tbm += '<option value="TBM">TBM</option>';
            cmb_tm_tbm += '<option value="LANDCLEARING">LANDCLEARING</option>';
            cmb_tm_tbm += '<option value="PEMBIBITAN">PEMBIBITAN</option>';

            var strip_cmb = '<option value="-">-</option>';
            // $('.set_strip_cmb').empty();
            // $('.set_strip_cmb').append(strip_cmb);
            // $('.set_strip_cmb').html(strip_cmb);
            $('#cmb_tm_tbm_' + row).html(strip_cmb);

            // $('.cmb_tm_tbm').empty();
            // $('.cmb_tm_tbm').append(cmb_tm_tbm);			
            // $('.cmb_tm_tbm').html(cmb_tm_tbm);
            $('#cmb_tm_tbm_' + row).html(cmb_tm_tbm);
        }
    }

    function cmb_afd_unit(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        // if(tm_tbm == ""){
        // 	$('#txt_account_beban_'+row).attr('disabled','');
        // }
        // else {
        // 	$('#txt_account_beban_'+row).removeAttr('disabled');
        // }

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/pilih_afd'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'tm_tbm': tm_tbm
            },
            success: function(data) {
                $('#cmb_afd_unit_' + row).empty();

                var opsi_pilih = '<option value=""></option>';
                $('#cmb_afd_unit_' + row).append(opsi_pilih);

                $.each(data, function(index) {
                    // var opsi_afd_unit = '<option value="'+data[index].AFD+'">'+data[index].AFD+'</option>';
                    var opsi_afd_unit = '<option value="' + data[index].afd + '">' + data[index].afd + '</option>';
                    $('#cmb_afd_unit_' + row).append(opsi_afd_unit);
                });
                // cmb_tahun_tanam(row);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }
</script>