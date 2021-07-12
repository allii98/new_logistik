<div class="container-fluid">
      <div class="row justify-content-center mt-2">
            <div class="col-md col-xl-3">
                  <div class="widget-rounded-circle card-box">
                        <div class="row justify-content-between">
                              <h4 class="header-title ml-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Retur <b>BKB</b> <i>(Edit)</i></h4>
                              <h4 class="header-title mr-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span id="devisi_span"></span></h4>
                        </div>
                        <div class="row justify-content-between">
                              <p class="sub-header ml-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                                    Retur <b>Bukti Keluar Barang</b> <i>(Edit)</i>
                              </p>
                              <button class="btn btn-xs btn-danger h-50 mr-2" id="cancelRetur" onclick="batalRetur()">Batalkan Retur</button>
                        </div>

                        <hr class="mt-0 mb-0">
                        <div class="x_content div_form_2 mb-0">
                              <div class="row justify-content-between">
                                    <div class="row ml-2">
                                          <div class="row" style="margin-left:4px;">
                                                <h6 id="noretur" name="noretur"></h6>&emsp;&emsp;
                                                <h6 id="norefretur" name="norefretur"></h6>
                                          </div>
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
                                          <button class="btn btn-danger btn-xs fa fa-print" id="a_print_bkb" style="display:none" onclick="cetak_retur()"></button>
                                    </h6>
                              </div>
                              <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="tableRinciBKB" width="100%">
                                          <thead>
                                                <tr>
                                                      <!-- <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding-right: 0.2em; padding-left: 0.2em; padding-top: 0.2px; padding-bottom: 0.1em;">#</th> -->
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

<input type="hidden" id="id_retskb" value="<?= $id_retskb ?>">

<script>
      $(document).ready(function() {
            var id_retskb = $('#id_retskb').val();
            cari_retur_edit(id_retskb);
      });

      function cari_retur_edit(id_retskb) {
            $.ajax({
                  type: "POST",
                  url: "<?php echo site_url('Retur/cari_retur_edit'); ?>",
                  dataType: "JSON",
                  beforeSend: function() {},

                  data: {
                        'id_retskb': id_retskb
                  },
                  success: function(data) {

                        var retskb = data.retskb;
                        var ret_skbitem = data.ret_skbitem;

                        $('#noretur').text('No. Retur : ' + retskb.noretur);
                        $('#norefretur').text('No. Ref Retur : ' + retskb.norefretur);
                        $('#hidden_norefbkb').val(retskb.norefbkb);
                        $('#hidden_kode_dev').val(retskb.kode_dev);
                        $('#hidden_norefretur').val(retskb.norefretur);

                        var dev = retskb.kode_dev + ' - ' + retskb.devisi;
                        $('#devisi_span').text(dev);

                        var le = ret_skbitem.length;
                        console.log(le + 'nile');
                        for (i = 0; i < ret_skbitem.length; i++) {
                              // var no = i + 1;

                              tambah_row(i);

                              $('#hidden_kode_barang_' + i).val(ret_skbitem[i].kodebar);
                              $('#txt_barang_' + i).val(ret_skbitem[i].nabar);
                              $('#hidden_grup_barang_' + i).val(ret_skbitem[i].grp);
                              $('#hidden_satuan_brg_' + i).val(ret_skbitem[i].satuan);
                              $('#sat_' + i).text(ret_skbitem[i].satuan);
                              $('#cmb_afd_unit_' + i).val(ret_skbitem[i].afd);
                              $('#cmb_blok_sub_' + i).val(ret_skbitem[i].blok);
                              $('#txt_qty_retur_' + i).val(ret_skbitem[i].qty);
                              $('#txt_ket_rinci_' + i).val(ret_skbitem[i].ket);
                              $('#txt_account_beban_' + i).val(ret_skbitem[i].ketbeban);
                              $('#hidden_kodebeban_' + i).val(ret_skbitem[i].kodebeban);
                              $('#txt_sub_beban_' + i).val(ret_skbitem[i].ketsub);
                              $('#hidden_kodesub_' + i).val(ret_skbitem[i].kodesub);
                              $('#hidden_id_retskbitem_' + i).val(ret_skbitem[i].id);
                              $('#hidden_txtperiode_' + i).val(ret_skbitem[i].txtperiode);

                              // $('.div_form_2').find('#nakobar_' + i + ', #txt_qty_' + i + ', #txt_keterangan_rinci_' + i).addClass('bg-light');
                              // $('.div_form_2').find('#nakobar_' + i + ', #txt_qty_' + i + ', #txt_keterangan_rinci_' + i).attr('disabled', '');

                              get_qty_retur(i, retskb.norefbkb, ret_skbitem[i].kodebar);
                              get_stok(i, ret_skbitem[i].kodebar, ret_skbitem[i].txtperiode, retskb.kode_dev);
                              get_qty_bkb(i, ret_skbitem[i].kodebar, retskb.norefbkb);
                        }
                  },
                  error: function(response) {
                        alert(response.responseText);
                  }
            });
      }

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

      function get_qty_bkb(i, kodebar, norefbkb) {
            $.ajax({
                  type: "POST",
                  url: "<?php echo site_url('Retur/get_qty_bkb'); ?>",
                  dataType: "JSON",
                  beforeSend: function() {},

                  data: {
                        'kodebar': kodebar,
                        'norefbkb': norefbkb
                  },
                  success: function(data) {

                        $('#txt_qty_bkb_' + i).val(data.qty2);

                  },
                  error: function(response) {
                        alert('ERROR! ' + response.responseText);
                  }
            });
      }

      function tambah_row(row) {
            var tr_buka = '<tr id="tr_' + row + '">';
            // var td_col_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            //       '<input type="hidden" id="hidden_no_table_' + row + '" name="hidden_no_table_' + row + '">' +
            //       '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + row + '" name="btn_tambah_row_' + row + '" onclick="tambah_row()"></button>' +
            //       '<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + row + '" name="btn_hapus_row_' + row + '" onclick="hapus_row(' + row + ')"></button>' +
            //       '</td>';
            // var td_col_1_1 = '<td width="3%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            //       '<input type="hidden" id="hidden_no_table_' + row + '" name="hidden_no_table_' + row + '">' +
            //       '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row_' + row + '" name="btn_tambah_row_' + row + '" onclick="tambah_row()"></button>' +
            //       '</td>';
            var form_buka = '<form id="form_rinci_' + row + '" name="form_rinci_' + row + '" method="POST" action="javascript:;">';
            var td_col_2 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                  '<!-- Barang -->' +
                  '<input type="text" class="form-control bg-light" id="txt_barang_' + row + '" name="txt_barang_' + row + '" placeholder="Pilih Barang" disabled>' +
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
                  '<input type="text" class="form-control bg-light" id="txt_qty_retur_' + row + '" name="txt_qty_retur_' + row + '" placeholder="Qty Retur" onkeyup="validasi_qty(' + row + ')" disabled>' +
                  '</td>';
            var td_col_13 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                  '<!-- Keterangan -->' +
                  '<textarea class="resizable_textarea form-control bg-light" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" rows="1" placeholder="Keterangan" disabled></textarea>' +
                  '<input type="hidden" id="hidden_id_retskbitem_' + row + '" name="hidden_id_retskbitem_' + row + '">' +
                  '<input type="hidden" id="hidden_txtperiode_' + row + '" name="hidden_txtperiode_' + row + '">' +
                  '</td>';
            var td_col_14 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                  '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
                  '<button class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
                  '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
                  '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
                  '<button class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
                  '<label id="lbl_status_simpan_' + row + '"></label>' +
                  '</td>';
            var td_col_14_1 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
                  '<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
                  '<button class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
                  '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + row + ')"></button>' +
                  '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
                  // '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
                  '<label id="lbl_status_simpan_' + row + '"></label>' +
                  '</td>';
            var form_tutup = '</form>';
            var tr_tutup = '</tr>';

            if (row == 0) {
                  $('#tbody_rincian').append(tr_buka + form_buka + td_col_2 + td_col_4 + td_col_5 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + td_col_14_1 + form_tutup + tr_tutup);
            } else {
                  $('#tbody_rincian').append(tr_buka + form_buka + td_col_2 + td_col_4 + td_col_5 + td_col_8 + td_col_9 + td_col_10 + td_col_11 + td_col_12 + td_col_13 + td_col_14 + form_tutup + tr_tutup);
            }

            $('#txt_qty_retur_' + row).addClass('currencyduadigit');
            $('.currencyduadigit').number(true, 0);

            // row++;
            // $('#txt_account_beban_'+row).attr('disabled','');

            // $('html, body').animate({
            //     scrollTop: $("#tr_" + row).offset().top
            // }, 2000);
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

            txtperiode = $('#hidden_txtperiode_' + n).val(),
                  kodebar = $('#hidden_kode_barang_' + n).val(),
                  kode_dev = $('#hidden_kode_dev').val(),
                  no_ref = $('#hidden_norefbkb').val(),

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

                        if (n == 0) {
                              hapusRetur();
                              console.log('berhasil hapus head retur');
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

            $('#cancelRetur').attr('disabled', '');

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
                              $('#cancelRetur').removeAttr('disabled', '');
                        } else {
                              updateItemToZero(0);
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

                        window.location = "<?= base_url('Retur') ?>";
                  }
            });
      }
</script>