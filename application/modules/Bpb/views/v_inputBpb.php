<div class="container-fluid">

    <div class="row mt-0">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-between">
                        <h4 class="header-title ml-2">BPB</h4>
                        <div class="button-list mr-2">
                            <button onclick="new_bpb()" class="btn btn-xs btn-success" id="">BPB Baru</button>
                            <button onclick="batal()" class="btn btn-xs btn-danger" id="" disabled>Batal BPB</button>
                            <button class="btn btn-xs btn-primary" id="cetak" onclick="cetak()" disabled>Cetak</button>
                            <button onclick="goBack()" class="btn btn-xs btn-secondary" id="kembali">Kembali</button>
                        </div>
                    </div>
                    <div class="row">
                        <p class="sub-header ml-2" style="margin-top: -12px;">
                            Input Bon Permintaan Barang
                        </p>
                    </div>

                    <div class="row div_form_1" style="margin-top: -15px;">
                        <div class="col-lg-4 col-xl-4 col-12">
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_tgl_bpb" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Tgl&nbsp;BPB
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_tgl_bpb" name="txt_tgl_bpb" class="form-control form-control-sm" required="required" type="date" value="<?= date('Y-m-d') ?>" autocomplite="off">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_untuk_keperluan" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Keperluan
                                </label>
                                <div class="col-9 col-xl-12">
                                    <textarea class="form-control form-control-sm" maxlength="250" id="txt_untuk_keperluan" name="txt_untuk_keperluan" placeholder="Untuk keperluan" required="" autocomplite="off"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="devisi" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Divisi
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input type="hidden" name="hidden_devisi" id="hidden_devisi">
                                    <select class="form-control form-control-sm" id="devisi">
                                        <option selected disabled>--Pilih--</option>
                                        <?php
                                        foreach ($devisi as $d) : { ?>
                                                <option value="<?= $d['kodetxt'] ?>"><?= $d['PT'] ?></option>
                                        <?php }
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-12">
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="cmb_bagian" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Bagian
                                </label>
                                <div class="col-9 col-xl-12">
                                    <select class="form-control form-control-sm" id="cmb_bagian" name="cmb_bagian" required="" onchange="cek_tm_tbm(1)">
                                        <option disabled selected>--Pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="bhnbakar" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Bahan&nbsp;Bakar
                                </label>

                                <div class="col-9 col-xl-12">
                                    <select class="form-control form-control-sm bg-light" id="bhnbakar" name="bhnbakar" disabled>
                                        <option disabled selected style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">--Pilih--</option>
                                        <option value="BBM">BBM</option>
                                        <option value="NONBBM">NON BBM</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group row" style="margin-bottom: 2px;" style="display:none;" id="bhnbakar"> -->


                            <div class="form-group row mb-0">
                                <label for="cmb_alokasi_est" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Alokasi&nbsp;Estate
                                </label>

                                <div class="col-9 col-xl-12">
                                    <select class="form-control form-control-sm bg-light" id="cmb_alokasi_est" name="cmb_alokasi_est" disabled>
                                        <option disabled selected style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">--Pilih--</option>
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
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-12" id="databbm">
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_jns_alat" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Jenis&nbsp;Alat
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_jns_alat" name="txt_jns_alat" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" required="required" value="" placeholder="Jenis Alat" autocomplite="off" disabled>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_kd_nmr" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Kode/Nomor
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_kd_nmr" name="txt_kd_nmr" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" required="required" value="" placeholder="Kode/Nomor" autocomplite="off" disabled>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_hm_km" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    HM/KM
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_hm_km" name="txt_hm_km" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" required="required" value="" placeholder="HM/KM" autocomplite="off" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="txt_lokasi_kerja" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Lokasi&nbsp;Kerja
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_lokasi_kerja" name="txt_lokasi_kerja" class="form-control form-control-sm bg-light" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" required="required" value="" placeholder="Lokasi Kerja" autocomplite="off" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-0 mb-2">
                    <div class="row div_form_2" style="margin-bottom: -10px;">
                        <div class="col-sm-12">
                            <div class="sub-header" style="margin-top: -15px; margin-bottom: -25px;">
                                <h6 id="lbl_bpb_status" name="lbl_bpb_status" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No. Ref. BPB : ...</h6>
                            </div>
                            <div class="row ml-1 mr-1 justify-content-between">
                                <!-- <h6 id="h4_no_bpb" name="h4_no_bpb"></h6>&emsp; -->
                                <h6 id="h4_no_ref_bpb" name="h4_no_ref_bpb"></h6>

                            </div>
                            <input type="hidden" id="hidden_no_bpb" name="hidden_no_bpb">
                            <input type="hidden" id="hidden_no_ref_bpb" name="hidden_no_ref_bpb">
                            <input type="hidden" id="hidden_id_bpb" name="hidden_id_bpb">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-in" id="tableRinciBPB">
                                    <thead>
                                        <tr>
                                            <th width="3%"></th>
                                            <th width="8%">TM/TBM</th>
                                            <th width="8%">Afd/Unit</th>
                                            <th width="8%">Blok/Sub</th>
                                            <th width="8%">Thn Tanam</th>
                                            <th width="10%">Bahan</th>
                                            <th width="10%">Account Beban</th>
                                            <th width="10%">Barang/Satuan</th>
                                            <th width="10%">Stok/Booking</th>
                                            <th width="8%">Qty&nbsp;Diminta</th>
                                            <th width="20%">Keterangan</th>
                                            <th width="3%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_rincian" name="tbody_rincian">
                                        <tr id="tr_1">
                                            <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                                <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
                                                <!-- <button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button> -->
                                            </td>
                                            <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                                <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- TM/TBM -->
                                                    <select class="form-control form-control-sm set_strip_cmb cmb_tm_tbm" id="cmb_tm_tbm_1" name="cmb_tm_tbm_1" onchange="cmb_afd_unit(1)">
                                                        <option value="-">-</option>
                                                        <!-- <option value=""></option> -->
                                                        <option value="TM" style="font-size: 12px;">TM</option>
                                                        <option value="TBM" style="font-size: 12px;">TBM</option>
                                                        <option value="LANDCLEARING" style="font-size: 12px;">LANDCLEARING</option>
                                                        <option value="PEMBIBITAN" style="font-size: 12px;">PEMBIBITAN</option>
                                                    </select>
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- AFD/UNIT -->
                                                    <select class="form-control form-control-sm set_strip_cmb" id="cmb_afd_unit_1" name="cmb_afd_unit_1" onchange="cmb_blok_sub(1)">
                                                        <option value="-">-</option>
                                                    </select>
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- BLOK/SUB -->
                                                    <select class="form-control form-control-sm set_strip_cmb" id="cmb_blok_sub_1" name="cmb_blok_sub_1" onchange="cmb_tahun_tanam(1)">
                                                        <option value="-">-</option>
                                                    </select>
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- Tahun Tanam -->
                                                    <!-- <select class="form-control form-control-sm set_strip_cmb" id="cmb_tahun_tanam_1" name="cmb_tahun_tanam_1" onchange="cmb_bahan(1)"> -->
                                                    <select class="form-control form-control-sm set_strip_cmb" id="cmb_tahun_tanam_1" name="cmb_tahun_tanam_1">
                                                        <option value="-">-</option>
                                                    </select>
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">
                                                    <!-- Bahan -->
                                                    <!-- <select class="form-control form-control-sm set_strip_cmb" id="cmb_bahan_1" name="cmb_bahan_1">
                                                        <option value="-">-</option>
                                                    </select> -->
                                                    <select class="form-control form-control-sm" id="cmb_bahan_1" name="cmb_bahan_1">
                                                        <option value="-">-</option>
                                                        <option value="021">UPKEEP BAHAN</option>
                                                        <option value="051">PEMUPUKAN BAHAN</option>
                                                        <option value="081">PANEN BAHAN</option>
                                                    </select>
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em; padding-top: 2px; padding-bottom: 0.1em;  padding-top: 2px; padding-bottom: 0; width: 5%;">
                                                    <!-- Account Beban -->
                                                    <input type="text" class="form-control form-control-sm" id="txt_account_beban_1" name="txt_account_beban_1" placeholder="Account Beban" onfocus="pilihModalAccBeban('1')" autocomplite="off">
                                                    <!-- <label class="control-label" id="lbl_no_acc_1"></label>
                                                <label class="control-label" id="lbl_nama_acc_1"></label> -->
                                                    <input type="hidden" id="hidden_no_acc_1" name="hidden_no_acc_1" value="0">
                                                    <input type="hidden" id="hidden_nama_acc_1" name="hidden_nama_acc_1" value="0">
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                    <!-- Barang -->
                                                    <input type="text" class="form-control form-control-sm" id="txt_barang_1" name="txt_barang_1" onfocus="cari_barang('1')" placeholder="Barang" autocomplite="off">
                                                    <!-- <label id="lbl_kode_barang_1"></label>
                                                <label id="lbl_nama_barang_1"></label> -->

                                                    <input type="hidden" id="hidden_kode_barang_1" name="hidden_kode_barang_1" value="0">
                                                    <input type="hidden" id="hidden_nama_barang_1" name="hidden_nama_barang_1" value="0">
                                                    <input type="hidden" id="hidden_grup_barang_1" name="hidden_grup_barang_1" value="0">
                                                    <input type="hidden" id="hidden_txtperiode_1" name="hidden_txtperiode_1">
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                    <!-- <span class="small text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                                                    Satuan :<b id="b_satuan_1" name="b_satuan_1"></b>
                                                </span><br> -->
                                                    <input type="hidden" id="hidden_satuan_1" name="hidden_satuan_1">
                                                    <span class="small text-muted" style="font-size:small;">
                                                        Stok :<b id="b_stok_tgl_ini_1" name="b_stok_tgl_ini_1"></b>
                                                    </span><br>
                                                    <input type="hidden" id="hidden_stok_tgl_ini_1" name="hidden_stok_tgl_ini_1">
                                                    <span class="small text-muted" style="font-size:small;">
                                                        Booking :<b id="b_stok_booking_1" name="b_stok_booking_1"></b>
                                                    </span>
                                                    <input type="hidden" id="hidden_stok_booking_1" name="hidden_stok_booking_1">
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                    <!-- Qty Diminta & Stok di Tgl ini & Satuan -->
                                                    <input type="number" class="form-control form-control-sm currencyduadigit" id="txt_qty_diminta_1" name="txt_qty_diminta_1" placeholder="Qty" autocomplite="off">
                                                </td>

                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                    <!-- Keterangan -->
                                                    <textarea class="form-control form-control-sm ket" id="txt_ket_rinci_1" name="txt_ket_rinci_1" rows="1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'1')"></textarea>
                                                    <label id="lbl_status_simpan_1"></label>
                                                    <input type="hidden" id="hidden_id_bpbitem_1" name="hidden_id_bpbitem_1">
                                                </td>
                                                <td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">
                                                    <button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
                                                    <button style="display:none;" class="btn btn-xs btn-danger fa fa-trash mt-1" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
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
    </div> <!-- end row-->

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalAccBeban">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header" style="margin-bottom: -1%;">
                    <h4 class="modal-title ml-2" id="myModalLabel">Account Beban</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="table-responsive" style="margin-top: -1%;">
                            <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                            <table id="tableAccBeban" class="table table-striped table-bordered" style="width: 100%; border-collapse: separate; padding: 0 50px 0 50px;">
                                <thead>
                                    <tr>
                                        <th style="font-size: 12px; padding:10px">
                                            No.
                                        </th>
                                        <th style="font-size: 12px; padding:10px">
                                            No.&nbsp;COA
                                        </th>
                                        <th style="font-size: 12px; padding:10px">
                                            Nama&nbsp;Account
                                        </th>
                                        <th style="font-size: 12px; padding:10px">
                                            Type
                                        </th>
                                        <th style="font-size: 12px; padding:10px">
                                            Grup
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

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBarang">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header" style="margin-bottom: -1%;">
                    <h4 class="modal-title mr-1" id="myModalLabel">List Barang</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="table-responsive" style="margin-top: -1%;">
                                <input type="hidden" id="hidden_no_row_barang" name="hidden_no_row_barang">
                                <table id="tableListBarang" class="table table-striped table-bordered" style="width: 100%; border-collapse: separate; padding: 0 50px 0 50px;">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 12px; padding:10px">#</th>
                                            <th style="font-size: 12px; padding:10px">No</th>
                                            <th style="font-size: 12px; padding:10px">Kode&nbsp;Barang</th>
                                            <th style="font-size: 12px; padding:10px">Nama&nbsp;Barang</th>
                                            <th style="font-size: 12px; padding:10px">Grup</th>
                                            <th style="font-size: 12px; padding:10px">Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_listbarang">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
								<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="pilihItem()">Pilih Item</button>
							</div>
						</div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihEstate">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Kebun</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Pilih Kebun</label>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="cmb_pilih_est"></select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_pilih_po" onclick="pilihEST()">Pilih</button>
                </div>
            </div>
        </div>
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
<input type="hidden" id="hidden_no_table" name="hidden_no_table">
<style>
    table#tableAccBeban td {
        padding: 3px;
        padding-left: 10px;
        font-size: 12px;
    }

    table#tableListBarang td {
        padding: 3px;
        padding-left: 10px;
        font-size: 12px;
    }

    table#tableRinciBPB th {
        padding: 10px;
        font-size: 12px;
        padding-left: 17px;
    }

    .tooltip-inner {
        white-space: pre-wrap;
        color: black;
        font-weight: bold;
        background-color: #ADD8E6;
        font-size: 12px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0;
        /* <-- Apparently some margin are still there even though it's hidden */
    }

    input[type=number] {
        -moz-appearance: textfield;
        /* Firefox */
    }
</style>

<script>
    $(function() {
        $('#devisi').tooltip({
            title: devisi,
            html: true
        });
        $('#cmb_tm_tbm_1').tooltip({
            title: cmb_tm_tbm,
            html: true
        });
    });

    function new_bpb() {
        location.href = "<?php echo base_url('Bpb/input') ?>";
    }

    function devisi() {
        var devisi = $("#devisi option:selected").text();

        return devisi;
    }

    function cmb_tm_tbm() {
        var cmb_tm_tbm = $("#cmb_tm_tbm_1 option:selected").text();

        return cmb_tm_tbm;
    }

    function cetak() {
        var no_bpb = $('#hidden_no_bpb').val();
        var id_bpb = $('#hidden_id_bpb').val();


        window.open('cetak/' + no_bpb + '/' + id_bpb, '_blank');
    }

    function goBack() {
        window.history.back();
    }

    $(document).ready(function() {

        // check_form();
        $('.div_form_2').hide();
        setInterval(function() {
            check_form();
        }, 1000);

        // pilihDevisi();   
        cari_dept();
        $('#hidden_no_table').val(2);

        $('#cmb_bagian').change(function() {
            console.log(this.value);
        });

        // $('#devisi').change(function() {
        //     // console.log(this.value)
        //     $.ajax({
        //         type: "POST",
        //         url: "<?php echo site_url('Bpb/get_devisi'); ?>",
        //         dataType: "JSON",
        //         beforeSend: function() {},
        //         cache: false,
        //         data: {
        //             kodedev: this.value
        //         },
        //         success: function(data) {
        //             var devisi = data.PT;
        //             $('#hidden_devisi').val(devisi);
        //         },
        //         error: function(request) {
        //             alert(request.responseText);
        //         }
        //     });
        // });

        $("#txt_qty_diminta_1").on("keypress keyup blur", function(event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });


    });


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

    $('#tableAccBeban tbody').on('click', 'tr', function() {
        var dataClick = $('#tableAccBeban').DataTable().row(this).data();
        // console.log(dataClick);
        var no_coa = dataClick[1];
        var nama_account = dataClick[2];
        var row = $('#hidden_no_row').val();

        // $('#lbl_no_acc_' + row).html(no_coa);
        // $('#lbl_nama_acc_' + row).html(nama_account);
        $('#txt_account_beban_' + row).val(nama_account);

        $('#hidden_no_acc_' + row).val(no_coa);
        $('#hidden_nama_acc_' + row).val(nama_account);

        $('#modalAccBeban').modal('hide');
    });

    $('#bhnbakar').change(function() {
        var dt = this.value;
        // console.log(dt);
        if (dt != "BBM") {
            $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').attr('disabled', '');
            $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').addClass('form-control bg-light');
            $('#txt_jns_alat').val('');
            $('#txt_kd_nmr').val('');
            $('#txt_hm_km').val('');
            $('#txt_lokasi_kerja').val('');
        } else {
            $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').removeAttr('disabled', '');
            $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').removeClass('bg-light');
        }

    });

    function cari_dept() {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/cari_dept'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: '',
            success: function(data) {
                $.each(data, function(index) {
                    var opsi_cmb_bagian = '<option value="' + data[index].kode + '" style="font-size: 12px">' + data[index].nama + '</option>';
                    $('#cmb_bagian').append(opsi_cmb_bagian);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function check_form() {
        // console.log('oke siap berjalan');
        if ($('#cmb_bagian :selected').text() == "TANAMAN" || $('#cmb_bagian :selected').text() == "TANAMAN UMUM") {

            if ($.trim($('#txt_untuk_keperluan').val()) != '' && $.trim($('#devisi').val()) != '' && $.trim($('#cmb_bagian').val()) != '' && $.trim($('#cmb_alokasi_est').val()) != '') {
                $('.div_form_2').show();
            } else {
                $('.div_form_2').hide();

            }
        } else if ($('#cmb_bagian :selected').text() == "TEKNIK") {
            if ($('#bhnbakar :selected').text() == "BBM") {

                if ($.trim($('#txt_untuk_keperluan').val()) != '' && $.trim($('#devisi').val()) != '' && $.trim($('#cmb_bagian').val()) != '' && $.trim($('#txt_jns_alat').val()) != '' && $.trim($('#txt_kd_nmr').val()) != '' && $.trim($('#txt_hm_km').val()) != '' && $.trim($('#txt_lokasi_kerja').val()) != '') {
                    $('.div_form_2').show();
                } else {
                    $('.div_form_2').hide();

                }
            } else {
                if ($.trim($('#txt_untuk_keperluan').val()) != '' && $.trim($('#devisi').val()) != '' && $.trim($('#cmb_bagian').val()) != '' && $.trim($('#bhnbakar').val()) != '') {
                    $('.div_form_2').show();
                } else {
                    $('.div_form_2').hide();


                }
            }
        } else {
            if ($.trim($('#txt_untuk_keperluan').val()) != '' && $.trim($('#devisi').val()) != '' && $.trim($('#cmb_bagian').val()) != '') {
                $('.div_form_2').show();
            } else {
                $('.div_form_2').hide();

            }

        }


    }

    function pilihDevisi() {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/cari_devisi'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: '',
            success: function(data) {
                $.each(data, function(index) {
                    var opsi_cmb_devisi = '<option value="' + data[index].kodetxt + '" style="font-size: 12px">' + data[index].PT + '</option>';
                    $('#cmb_pilih_est').append(opsi_cmb_devisi);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function inputBaru() {
        window.location.href = '<?= base_url('bpb/input') ?>';
    }

    function hapusRinci(id) {
        $('#hidden_no_delete').val(id);

        var rowCount = $("#tableRinciBPB td").closest("tr").length;
        if (rowCount != 1) {
            $('#modalKonfirmasiHapus').modal('show');
        } else {
            deleteData();
        }
    }

    function deleteData() {
        var no = $('#hidden_no_delete').val();
        $('#modalKonfirmasiHapus').modal('hide');

        var rowCount = $("#tableRinciBPB td").closest("tr").length;

        if (rowCount != 1) {
            var form_data = new FormData();

            form_data.append('hidden_id_bpbitem', $('#hidden_id_bpbitem_' + no).val());

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Bpb/hapus_rinci'); ?>",
                dataType: "JSON",
                beforeSend: function() {
                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i></label>');
                },
                cache: false,
                contentType: false,
                processData: false,

                data: form_data,
                success: function(data) {
                    $('#tr_' + no).remove();
                    // alert('Data Berhasil dihapus');
                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Berhasil Dihapus!',
                        icon: 'success',
                        loader: false
                    });
                    $('#lbl_status_simpan_' + no).empty();
                    // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
                    // $('.modal-success').modal('show');
                },
                error: function(request) {
                    alert(request.responseText);
                }
            });
        } else {
            Swal.fire({
                title: 'Item BPB Tinggal 1',
                text: "Yakin akan menghapus BPB ini?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
                if (result.value) {
                    // var no_po = $('#hidden_no_po').val();
                    deleteBPB(no);
                }
            });
        }
    }

    function deleteBPB(no) {
        console.log("untuk baris ke", no);
        var form_data = new FormData();

        // form_data.append('hidden_id_po',$('#hidden_id_po_'+no).val());
        form_data.append('hidden_id_bpb', $('#hidden_id_bpb').val());
        form_data.append('hidden_id_bpbitem', $('#hidden_id_bpbitem_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/hapus_all'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i></label>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                $('#tr_' + no).remove();
                // alert('Data Berhasil dihapus');
                $.toast({
                    position: 'top-right',
                    heading: 'Success',
                    text: 'Berhasil Dihapus!',
                    icon: 'success',
                    loader: false
                });

                setTimeout(function() {
                    location.reload();
                }, 1000);
                // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
                // $('.modal-success').modal('show');
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function saveRinciEnter(e, no) {
        var a = $('#hidden_stok_tgl_ini_' + no + '').val();
        var b = $('#txt_qty_diminta_' + no + '').val();

        var hidden_stok_tgl_ini = Number(a);
        var txt_qty_diminta = Number(b);

        if (txt_qty_diminta > hidden_stok_tgl_ini) {
            swal('Stok digudang hanya ada ' + hidden_stok_tgl_ini);
            $('#txt_qty_diminta_' + no + '').val('');

        } else if (txt_qty_diminta == 0) {
            swal('Tidak boleh 0!');
            $('#txt_qty_diminta_' + no + '').val('');
        } else {
            if (e.keyCode == 13 && !e.shiftKey) {
                if ($('#hidden_proses_status_' + no).val() == 'insert') {
                    saveRinci(no);
                } else if ($('#hidden_proses_status_' + no).val() == 'update') {
                    updateRinci(no);
                }
            }
        }

    }

    function pilihEST() {
        $('#modalPilihEstate').modal('hide');
        var est = $('#cmb_pilih_est').val();
    }



    function pilihItem() {
        console.log("hello world");
    }

    function hapus_row(id) {
        var rowCount = $("#tableRinciBPB td").closest("tr").length;
        if (rowCount != 1) {
            $('#tr_' + id).remove();
        } else {
            swal('Tidak Bisa dihapus, item BPB tinggal 1');
        }
    }

    function bahan(row) {
        var bahan = $("#cmb_bahan_" + row + " option:selected").text();

        return bahan;
    }

    function tambah_row(id) {
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
            '<select class="form-control form-control-sm set_strip_cmb cmb_tm_tbm" id="cmb_tm_tbm_' + row + '" name="cmb_tm_tbm_' + row + '" onchange="cmb_afd_unit(' + row + ')">' +
            '</select>' +
            '</td>';
        var td_col_3 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- AFD/UNIT -->' +
            '<select class="form-control form-control-sm set_strip_cmb" id="cmb_afd_unit_' + row + '" name="cmb_afd_unit_' + row + '" onchange="cmb_blok_sub(' + row + ')">' +
            '<option value="-">-</option>' +
            '</select>' +
            '</td>';
        var td_col_4 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- BLOK/SUB -->' +
            '<select class="form-control form-control-sm set_strip_cmb" id="cmb_blok_sub_' + row + '" name="cmb_blok_sub_' + row + '" onchange="cmb_tahun_tanam(' + row + ')">' +
            '<option value="-">-</option>' +
            '</select>' +
            '</td>';
        var td_col_5 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Tahun Tanam -->' +
            '<select class="form-control form-control-sm set_strip_cmb" id="cmb_tahun_tanam_' + row + '" name="cmb_tahun_tanam_' + row + '" >' +
            '<option value="-">-</option>' +
            '</select>' +
            '</td>';
        var td_col_6 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Bahan -->' +
            '<select class="form-control form-control-sm set_strip_cmb" id="cmb_bahan_' + row + '" name="cmb_bahan_' + row + '">' +
            '<option value="-">-</option>' +
            '<option value="021">UPKEEP BAHAN</option>' +
            '<option value="051">PEMUPUKAN BAHAN</option>' +
            '<option value="081">PANEN BAHAN</option>' +
            '</select>' +
            '</td>';
        var td_col_7 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0.1em;">' +
            '<!-- Account Beban -->' +
            '<input type="text" class="form-control form-control-sm" id="txt_account_beban_' + row + '" value="" name="txt_account_beban_' + row + '" placeholder="Account Beban" onfocus="pilihModalAccBeban(' + row + ')" >' +
            // '<label class="control-label" id="lbl_no_acc_' + row + '"></label>' +
            // '<label class="control-label" id="lbl_nama_acc_' + row + '"></label>' +
            '<input type="hidden" id="hidden_no_acc_' + row + '" name="hidden_no_acc_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_nama_acc_' + row + '" name="hidden_nama_acc_' + row + '" value="0">' +
            '</td>';
        var td_col_8 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            '<!-- Barang -->' +
            '<input type="text" class="form-control form-control-sm" id="txt_barang_' + row + '" name="txt_barang_' + row + '" onfocus="cari_barang(' + row + ')" placeholder="Barang">' +
            // '<label id="lbl_kode_barang_' + row + '"></label>' +
            // '<label id="lbl_nama_barang_' + row + '"></label>' +
            '<input type="hidden" id="hidden_kode_barang_' + row + '" name="hidden_kode_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_nama_barang_' + row + '" name="hidden_nama_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_grup_barang_' + row + '" name="hidden_grup_barang_' + row + '" value="0">' +
            '<input type="hidden" id="hidden_txtperiode_' + row + '" name="hidden_txtperiode_' + row + '">' +
            '</td>';
        var td_col_10 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            // '<label>Satuan : <b id="b_satuan_' + row + '" name="b_satuan_' + row + '"></b></label>' +
            // '<label>Stok di tgl ini : <b id="b_stok_tgl_ini_' + row + '" name="b_stok_tgl_ini_' + row + '"></b></label>' +
            '<span class="small text-muted" font-size:small">Stok :<b id="b_stok_tgl_ini_' + row + '" name="b_stok_tgl_ini_' + row + '"></b></span><br>' +
            '<input type="hidden" id="hidden_stok_tgl_ini_' + row + '" name="hidden_stok_tgl_ini_' + row + '">' +

            '<span class="small text-muted" font-size:small">Booking :<b id="b_stok_booking_' + row + '"  name="b_stok_booking_' + row + '"></b></span>' +
            '<input type="hidden" id="hidden_stok_booking_' + row + '" name="hidden_stok_booking_' + row + '">' +
            '<input type="hidden" id="hidden_satuan_' + row + '" name="hidden_satuan_' + row + '">' +
            '</td>';
        var td_col_9 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            '<!-- Qty & Stok di Tgl ini & Satuan -->' +
            '<input type="number" class="form-control form-control-sm" id="txt_qty_diminta_' + row + '" name="txt_qty_diminta_' + row + '" placeholder="Qty" >' +
            '</td>';

        var td_col_11 = '<td style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            '<!-- Keterangan -->' +
            '<textarea class="form-control form-control-sm" rows="1" id="txt_ket_rinci_' + row + '" name="txt_ket_rinci_' + row + '" placeholder="Keterangan" onkeypress="saveRinciEnter(event,' + row + ')"></textarea>' +
            '<label id="lbl_status_simpan_' + row + '"></label>' +
            '<input type="hidden" id="hidden_id_bpbitem_' + row + '" name="hidden_id_bpbitem_' + row + '">' +
            '</td>';
        var td_col_12 = '<td width="5%" style="padding-right: 0.2em; padding-left: 0.2em;  padding-top: 2px; padding-bottom: 0;">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + row + '" name="btn_simpan_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + row + '" name="btn_ubah_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + row + '" name="btn_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="update(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary mdi mdi-close-thick mt-1" id="btn_cancel_update_' + row + '" name="btn_cancel_update_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + row + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash mt-1" id="btn_hapus_' + row + '" name="btn_hapus_' + row + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + row + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_3 + td_col_4 + td_col_5 + td_col_6 + td_col_7 + td_col_8 + td_col_10 + td_col_9 + td_col_11 + td_col_12 + form_tutup + tr_tutup);
        bahan(row);


        cek_bagian(row);

        $('#txt_qty_diminta_' + row).addClass('currencyduadigit');
        $('.currencyduadigit').number(true, 0);
        // $('#txt_account_beban_'+row).attr('disabled','');
        $('#cmb_tm_tbm_' + row).tooltip({
            title: bahan,
            html: true
        });
        $('html, body').animate({
            scrollTop: $("#tr_" + row).offset().top
        }, 2000);

        row++;
        $('#hidden_no_table').val(row);
    }

    function saveRinciClick(no) {
        // saveRinci(no);
        var a = $('#hidden_stok_tgl_ini_' + no + '').val();
        var b = $('#txt_qty_diminta_' + no + '').val();

        var hidden_stok_tgl_ini = Number(a);
        var txt_qty_diminta = Number(b);
        if (txt_qty_diminta > hidden_stok_tgl_ini) {
            swal('Stok digudang hanya ada ' + hidden_stok_tgl_ini);
            $('#txt_qty_diminta_' + no + '').val('');
        } else if (txt_qty_diminta == 0) {
            swal('Tidak boleh 0!');
            $('#txt_qty_diminta_' + no + '').val('');
        } else {
            if ($('#hidden_proses_status_' + no).val() == 'insert') {
                saveRinci(no);
            } else if ($('#hidden_proses_status_' + no).val() == 'update') {
                updateRinci(no);
            }
        }


    }

    function update(no) {
        var a = $('#hidden_stok_tgl_ini_' + no + '').val();
        var b = $('#txt_qty_diminta_' + no + '').val();

        var hidden_stok_tgl_ini = Number(a);
        var txt_qty_diminta = Number(b);
        if (txt_qty_diminta > hidden_stok_tgl_ini) {
            swal('Stok digudang hanya ada ' + hidden_stok_tgl_ini);
            $('#txt_qty_diminta_' + no + '').val('');
        } else if (txt_qty_diminta == 0) {
            swal('Tidak boleh 0!');
            $('#txt_qty_diminta_' + no + '').val('');
        } else {
            updateRinci(no)
        }
    }

    function saveRinci(no) {
        var isValid = true;
        var sudah_booking = parseInt($('#hidden_stok_booking_' + no).val());
        var qty_diminta = parseInt($('#txt_qty_diminta_' + no).val());
        var stok_tgl_ini = parseInt($('#hidden_stok_tgl_ini_' + no).val());

        var kodebar = $('#hidden_kode_barang_' + no).val();
        var kode_dev = $('#devisi').val();

        // sum_stok_booking(kodebar, no, kode_dev);

        // console.log(kodebar);

        var v_qty = validasi_qty(sudah_booking, qty_diminta, stok_tgl_ini, no);
        if (v_qty === true) {
            $('#cmb_tm_tbm_' + no +
                ',#cmb_afd_unit_' + no +
                ',#cmb_blok_sub_' + no +
                ',#cmb_tahun_tanam_' + no +
                ',#cmb_bahan_' + no +
                ',#txt_account_beban_' + no +
                ',#hidden_no_acc_' + no +
                ',#hidden_nama_acc_' + no +
                ',#txt_barang_' + no +
                ',#hidden_kode_barang_' + no +
                ',#hidden_nama_barang_' + no +
                ',#txt_qty_diminta_' + no +
                ',#hidden_stok_tgl_ini_' + no +
                ',#hidden_stok_booking_' + no +
                ',#hidden_satuan_' + no + ',#txt_untuk_keperluan' + ',#devisi' + ',#cmb_bagian'
                // +',#txt_qty_disetujui_'+no
                +
                ',#txt_ket_rinci_' + no).each(function(e) {
                if ($.trim($(this).val()) == '') {
                    isValid = false;
                    validasi($(this).attr("id"), no);
                } else if ($('#txt_qty_diminta_' + no).val() == '0.00' || $('#txt_qty_diminta_' + no).val() == '0') {
                    isValid = false;
                    swal('Qty tidak boleh nol (0)');
                    $('#txt_qty_diminta_' + no).css({
                        "background": "#FFCECE"
                    });
                } else {
                    // console.log($(this).attr('id'));
                    if ($(this).attr('id') == 'hidden_no_acc_' + no) {
                        $('#lbl_no_acc_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_no_acc_' + no).next().is('br#br_' + no)) {
                            $('#lbl_no_acc_' + no).next().remove();
                            $('#lbl_no_acc_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_nama_acc_' + no) {
                        $('#lbl_nama_acc_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_nama_acc_' + no).next().is('br#br_' + no)) {
                            $('#lbl_nama_acc_' + no).next().remove();
                            $('#lbl_nama_acc_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_kode_barang_' + no) {
                        $('#lbl_kode_barang_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_kode_barang_' + no).next().is('br#br_' + no)) {
                            $('#lbl_kode_barang_' + no).next().remove();
                            $('#lbl_kode_barang_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_nama_barang_' + no) {
                        $('#lbl_nama_barang_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_nama_barang_' + no).next().is('br#br_' + no)) {
                            $('#lbl_nama_barang_' + no).next().remove();
                            $('#lbl_nama_barang_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_stok_' + no) {
                        $('#lbl_stok_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_stok_' + no).next().is('br#br_' + no)) {
                            $('#lbl_stok_' + no).next().remove();
                            $('#lbl_stok_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_satuan_' + no) {
                        $('#b_satuan_' + no).css({
                            "background": ""
                        });
                        if ($('#b_satuan_' + no).next().is('br#br_' + no)) {
                            $('#b_satuan_' + no).next().remove();
                            $('#b_satuan_' + no).next().remove();
                        }
                    } else {
                        $(this).css({
                            "background": ""
                        });
                        if ($(this).next().is('br#br_' + no)) {
                            $(this).next().remove();
                            $(this).next().remove();
                        }
                    }
                }
            });
            if (isValid === true) {
                saveData(no);
                // sum_stok_booking(kodebar, no);
            }
        }
    }



    function saveData(no) {

        var form_data = new FormData();

        // form_data.append('txt_diberikan_kpd',$('#txt_diberikan_kpd').val());  	  
        form_data.append('txt_untuk_keperluan', $('#txt_untuk_keperluan').val());
        form_data.append('devisi', $('#devisi').val());
        form_data.append('txt_tgl_bpb', $('#txt_tgl_bpb').val());
        // form_data.append('txt_no_bpb',$('#txt_no_bpb').val());  	  
        form_data.append('cmb_bagian', $('#cmb_bagian :selected').text());
        form_data.append('cmb_alokasi_est', $('#cmb_alokasi_est').val());
        form_data.append('bhnbakar', $('#bhnbakar').val());
        form_data.append('jns_alat', $('#txt_jns_alat').val());
        form_data.append('kd_nmr', $('#txt_kd_nmr').val());
        form_data.append('hm_km', $('#txt_hm_km').val());
        form_data.append('lokasi_kerja', $('#txt_lokasi_kerja').val());

        form_data.append('cmb_tm_tbm', $('#cmb_tm_tbm_' + no).val());
        form_data.append('cmb_afd_unit', $('#cmb_afd_unit_' + no).val());
        form_data.append('cmb_blok_sub', $('#cmb_blok_sub_' + no).val());
        form_data.append('cmb_tahun_tanam', $('#cmb_tahun_tanam_' + no).val());
        form_data.append('cmb_bahan', $('#cmb_bahan_' + no).val());

        form_data.append('hidden_no_acc', $('#hidden_no_acc_' + no).val());
        form_data.append('hidden_nama_acc', $('#hidden_nama_acc_' + no).val());
        form_data.append('hidden_kode_barang', $('#hidden_kode_barang_' + no).val());
        form_data.append('hidden_nama_barang', $('#hidden_nama_barang_' + no).val());
        form_data.append('hidden_grup_barang', $('#hidden_grup_barang_' + no).val());
        form_data.append('hidden_stok_tgl_ini', $('#hidden_stok_tgl_ini_' + no).val());
        form_data.append('hidden_satuan', $('#hidden_satuan_' + no).val());

        form_data.append('txt_qty_diminta', $('#txt_qty_diminta_' + no).val());
        // form_data.append('txt_qty_disetujui',$('#txt_qty_disetujui_'+no).val()); 
        form_data.append('txt_ket_rinci', $('#txt_ket_rinci_' + no).val());

        form_data.append('hidden_no_bpb', $('#hidden_no_bpb').val());
        form_data.append('hidden_id_bpb', $('#hidden_id_bpb').val());
        form_data.append('hidden_no_ref_bpb', $('#hidden_no_ref_bpb').val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/simpan_rinci_bpb'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
                if ($.trim($('#hidden_no_bpb').val()) == '') {
                    $('#lbl_bpb_status').empty();
                    $('#lbl_bpb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate BPB Number</label>');
                }

                $('#btn_ubah_' + no).css('display', 'block');
                $('#btn_hapus_' + no).css('display', 'block');
                $('#btn_simpan_' + no).css('display', 'none');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {

                // console.log(data.kodebar);
                if (data == "kodebar_exist") {
                    swal('Tidak bisa ditambahkan. Barang sudah ada pada BPB yang sama !');
                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                    $('#btn_ubah_' + no).css('display', 'none');
                    $('#btn_hapus_' + no).css('display', 'none');
                    $('#btn_simpan_' + no).css('display', 'block');
                } else {
                    if (data.status == true) {
                        var kode_barang = data.kodebar;
                        var kode_dev = data.kode_dev;
                        $('#tr_' + no).find('input,textarea,select').attr('disabled', '');
                        // console.log('ini nomernya ges', no);

                        sum_stok_booking(kode_barang, no, kode_dev);
                        // $('#a_bpb_baru').show();
                        // $('#input-baru').show();
                        $('#inputNew').css('display', 'block');

                        $('.div_form_1').find('input,textarea,select').attr('disabled', '');
                        $('.div_form_1').find('input,textarea,select').addClass('form-control bg-light');

                        $('#tr_' + no).find('input,textarea,select').addClass('form-control bg-light');

                        $('#lbl_status_simpan_' + no).empty();
                        $.toast({
                            position: 'top-right',
                            heading: 'Success',
                            text: 'Berhasil Disimpan!',
                            icon: 'success',
                            loader: false
                        });
                        $('#cetak').removeAttr('disabled', '');


                        $('#lbl_bpb_status').empty();
                        $('#h4_no_bpb').empty();

                        // $('#h4_no_bpb').html('No. BPB : ' + data.nobpb);
                        $('#h4_no_ref_bpb').html('No. Ref BPB : ' + data.norefbpb);
                        $('#btn_hapus_row_' + no).css('display', 'none');

                        $('#hidden_no_bpb').val(data.nobpb);
                        $('#hidden_no_ref_bpb').val(data.norefbpb);

                        if ($.trim($('#hidden_id_bpb').val()) == '') {
                            $('#hidden_id_bpb').val(data.id_bpb);
                        }
                        $('#hidden_id_bpbitem_' + no).val(data.id_bpbitem);

                        $('#btn_simpan_' + no).css('display', 'none');
                    } else {
                        alert('Error Save Data');
                        $('#lbl_status_simpan_' + no).empty();
                        $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                    }
                }
            },
            error: function(request) {
                alert('Error Save Data : ' + request.responseText);

                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');

                if ($.trim($('#hidden_no_bpb').val()) == '') {
                    $('#lbl_spp_status').empty();
                    $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
                }
            }
        });
    }

    function cancelUpdate(no) {
        $('.div_form_1').find('input,textarea').attr('readonly', '');
        $('.div_form_1').find('select').attr('disabled', '');

        // $('#tableRinciBPB tbody #tr_' + no + ' td').find('input,textarea').not('#txt_account_beban_' + no + ',#txt_barang_' + no).attr('readonly', '');
        // $('#tableRinciBPB tbody #tr_' + no + ' td').find('select,#txt_account_beban_' + no + ',#txt_barang_' + no).attr('disabled', '');

        $('#tr_' + no).find('input,textarea,select').attr('disabled', '');
        $('#tr_' + no).find('input,textarea,select').addClass('form-control bg-light');

        $('#btn_cancelUpdate_ubah_' + no).css('display', 'block');
        $('#btn_update_' + no).css('display', 'none');
        $('#btn_cancel_update_' + no).css('display', 'none');
        $('#btn_hapus_' + no).css('display', 'none');

        $('#hidden_proses_status_' + no).empty();
        $('#hidden_proses_status_' + no).val('');
        getPreviousData(no);
    }

    function getPreviousData(no) {
        var form_data = new FormData();

        var kode_dev = $('#devisi').val();

        form_data.append('hidden_id_bpbitem', $('#hidden_id_bpbitem_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/cancel_ubah_rinci'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {

                get_all_cmb(data.data_bpbitem.kodebebantxt, no);
                sum_stok(data.data_bpbitem.kodebar, no, kode_dev);
                sum_stok_booking(data.data_bpbitem.kodebar, no, kode_dev);

                $('#cmb_afd_unit_' + no).val(data.data_bpbitem.afd);
                $('#cmb_blok_sub_' + no).val(data.data_bpbitem.blok);
                $('#cmb_bahan_' + no).val(data.data_bpbitem.kodebebantxt);

                $('#txt_account_beban_' + no).val(data.data_bpbitem.ketsub);
                $('#hidden_no_acc_' + no).val(data.data_bpbitem.kodesubtxt);
                $('#hidden_nama_acc_' + no).val(data.data_bpbitem.ketsub);

                $('#hidden_satuan_' + no).val(data.data_bpbitem.satuan);
                $('#hidden_kode_barang_' + no).val(data.data_bpbitem.kodebar);
                $('#hidden_nama_barang_' + no).val(data.data_bpbitem.nabar);
                $('#hidden_grup_barang_' + no).val(data.data_bpbitem.grp);
                $('#txt_barang_' + no).val(data.data_bpbitem.nabar);
                $('#hidden_txtperiode_' + no).val(data.data_bpbitem.periode);

                $('#txt_qty_diminta_' + no).val(data.data_bpbitem.qty);
                $('#txt_ket_rinci_' + no).val(data.data_bpbitem.ket);

                $('#lbl_status_simpan_' + no).empty();
                $.toast({
                    position: 'top-right',
                    text: 'Edit Dibatalkan!',
                    icon: 'success',
                    loader: false
                });

                $('#btn_ubah_' + no).css('display', 'block');
                $('#btn_update_' + no).css('display', 'none');
                $('#btn_cancel_update_' + no).css('display', 'none');
                $('#btn_hapus_' + no).css('display', 'block');


                $('#hidden_proses_status_' + no).empty();
                $('#hidden_proses_status_' + no).val('');
            },
            error: function(request) {
                alert('Error Get Data : ' + request.responseText);
            }
        });
    }

    function updateRinci(no) {
        var isValid = true;
        var sudah_booking = parseInt($('#hidden_stok_booking_' + no).val());
        var qty_diminta = parseInt($('#txt_qty_diminta_' + no).val());
        var stok_tgl_ini = parseInt($('#hidden_stok_tgl_ini_' + no).val());

        var v_qty = validasi_qty(sudah_booking, qty_diminta, stok_tgl_ini, no);
        if (v_qty === true) {
            $('#cmb_tm_tbm_' + no +
                ',#cmb_afd_unit_' + no +
                ',#cmb_blok_sub_' + no +
                ',#cmb_tahun_tanam_' + no +
                ',#cmb_bahan_' + no +
                ',#txt_account_beban_' + no +
                ',#hidden_no_acc_' + no +
                ',#hidden_nama_acc_' + no +
                ',#txt_barang_' + no +
                ',#hidden_kode_barang_' + no +
                ',#hidden_nama_barang_' + no +
                ',#txt_qty_diminta_' + no +
                ',#hidden_stok_tgl_ini_' + no +
                ',#hidden_satuan_' + no
                // +',#txt_qty_disetujui_'+no
                +
                ',#txt_ket_rinci_' + no).each(function(e) {
                if ($.trim($(this).val()) == '') {
                    isValid = false;
                    validasi($(this).attr("id"), no);
                } else if ($('#txt_qty_diminta_' + no).val() == '0.00' || $('#txt_qty_diminta_' + no).val() == '0') {
                    isValid = false;
                    swal('Qty tidak boleh nol (0)');
                    $('#txt_qty_diminta_' + no).css({
                        "background": "#FFCECE"
                    });
                } else {
                    if ($(this).attr('id') == 'hidden_no_acc_' + no) {
                        $('#lbl_no_acc_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_no_acc_' + no).next().is('br#br_' + no)) {
                            $('#lbl_no_acc_' + no).next().remove();
                            $('#lbl_no_acc_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_nama_acc_' + no) {
                        $('#lbl_nama_acc_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_nama_acc_' + no).next().is('br#br_' + no)) {
                            $('#lbl_nama_acc_' + no).next().remove();
                            $('#lbl_nama_acc_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_kode_barang_' + no) {
                        $('#lbl_kode_barang_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_kode_barang_' + no).next().is('br#br_' + no)) {
                            $('#lbl_kode_barang_' + no).next().remove();
                            $('#lbl_kode_barang_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_nama_barang_' + no) {
                        $('#lbl_nama_barang_' + no).css({
                            "background": ""
                        });
                        if ($('#lbl_nama_barang_' + no).next().is('br#br_' + no)) {
                            $('#lbl_nama_barang_' + no).next().remove();
                            $('#lbl_nama_barang_' + no).next().remove();
                        }
                    } else if ($(this).attr('id') == 'hidden_satuan_' + no) {
                        $('#b_satuan_' + no).css({
                            "background": ""
                        });
                        if ($('#b_satuan_' + no).next().is('br#br_' + no)) {
                            $('#b_satuan_' + no).next().remove();
                            $('#b_satuan_' + no).next().remove();
                        }
                    } else {
                        $(this).css({
                            "background": ""
                        });
                        if ($(this).next().is('br#br_' + no)) {
                            $(this).next().remove();
                            $(this).next().remove();
                        }
                    }
                }
            });
            if (isValid === true) {
                updateData(no);
            }
        }
    }

    function updateData(no) {
        var form_data = new FormData();

        var kodebar = $('#hidden_kode_barang_' + no).val();
        var kode_dev = $('#devisi').val();

        form_data.append('cmb_afd_unit', $('#cmb_afd_unit_' + no).val());
        form_data.append('cmb_blok_sub', $('#cmb_blok_sub_' + no).val());
        form_data.append('cmb_bahan', $('#cmb_bahan_' + no).val());
        form_data.append('hidden_no_acc', $('#hidden_no_acc_' + no).val());
        form_data.append('hidden_nama_acc', $('#hidden_nama_acc_' + no).val());
        form_data.append('hidden_kode_barang', $('#hidden_kode_barang_' + no).val());
        form_data.append('hidden_nama_barang', $('#hidden_nama_barang_' + no).val());
        form_data.append('hidden_grup_barang', $('#hidden_grup_barang_' + no).val());
        form_data.append('hidden_satuan', $('#hidden_satuan_' + no).val());
        form_data.append('txt_qty_diminta', $('#txt_qty_diminta_' + no).val());
        form_data.append('txt_ket_rinci', $('#txt_ket_rinci_' + no).val());

        form_data.append('hidden_id_bpbitem', $('#hidden_id_bpbitem_' + no).val());
        form_data.append('hidden_no_ref_bpb', $('#hidden_no_ref_bpb').val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/ubah_rinci_bpb'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {

                if (data == "kodebar_exist") {
                    swal('Tidak bisa ditambahkan. Barang sudah ada pada BPB yang sama !');
                    $('#lbl_status_simpan_' + no).empty();
                    $('#btn_ubah_' + no).css('display', 'none');
                    $('#btn_hapus_' + no).css('display', 'none');
                } else {
                    sum_stok_booking(kodebar, no, kode_dev);

                    $('.div_form_1').find('input,textarea').attr('readonly', '');
                    $('.div_form_1').find('select').attr('disabled', '');

                    $('#tr_' + no).find('input,textarea,select').attr('disabled', '');
                    $('#tr_' + no).find('input,textarea,select').addClass('form-control bg-light');

                    $('#lbl_status_simpan_' + no).empty();
                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Berhasil Diupdate!',
                        icon: 'success',
                        loader: false
                    });

                    $('#btn_ubah_' + no).css('display', 'block');
                    $('#btn_update_' + no).css('display', 'none');
                    $('#btn_cancel_update_' + no).css('display', 'none');
                    $('#btn_hapus_' + no).css('display', 'block');

                    $('#hidden_proses_status_' + no).empty();
                    $('#hidden_proses_status_' + no).val('');
                }
            },
            error: function(request) {
                alert('Error Update Data : ' + request.responseText);

                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
            }
        });
    }

    function ubahRinci(no) {
        $('#tr_' + no).find('input,textarea,select').removeAttr('disabled', '');
        $('#tr_' + no).find('input,textarea,select').removeClass('bg-light');

        $('#lbl_status_simpan_' + no).empty();
        $('#btn_ubah_' + no).css('display', 'none');
        $('#btn_update_' + no).css('display', 'block');
        $('#btn_cancel_update_' + no).css('display', 'block');
        // $('#btn_hapus_' + no).attr('disabled', '');
        $('#btn_hapus_' + no).hide();

        $('#hidden_proses_status_' + no).empty();
        $('#hidden_proses_status_' + no).val('update');
    }

    function validasi(arr_id, no) {
        if (Array.isArray(arr_id)) {
            $.each(arr_id, function(index, value) {
                // $(arr_id[index]).css({
                // "background": "#FFCECE"
                // })
                // $(arr_id[index]).after('<div class="pesan_error"><br /><small style="margin-top:0px;color:red;">Harus diisi</small></div>');
            });
        } else {
            console.log(arr_id);
            if ($('#' + arr_id).is('input') || $('#' + arr_id).is('textarea') || $('#' + arr_id).is('select')) {
                if (arr_id == 'hidden_no_acc_' + no) {
                    $('#lbl_no_acc_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#lbl_no_acc_' + no).next().is('br#br_' + no)) {
                    //     $('#lbl_no_acc_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'hidden_nama_acc_' + no) {
                    $('#lbl_nama_acc_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#lbl_nama_acc_' + no).next().is('br#br_' + no)) {
                    //     $('#lbl_nama_acc_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'hidden_kode_barang_' + no) {
                    $('#lbl_kode_barang_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#lbl_kode_barang_' + no).next().is('br#br_' + no)) {
                    //     $('#lbl_kode_barang_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'hidden_nama_barang_' + no) {
                    $('#lbl_nama_barang_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#lbl_nama_barang_' + no).next().is('br#br_' + no)) {
                    //     $('#lbl_nama_barang_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'hidden_stok_tgl_ini_' + no) {
                    $('#b_stok_tgl_ini_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#b_stok_tgl_ini_' + no).next().is('br#br_' + no)) {
                    //     $('#b_stok_tgl_ini_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'hidden_satuan_' + no) {
                    $('#b_satuan_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#b_satuan_' + no).next().is('br#br_' + no)) {
                    //     $('#b_satuan_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'cmb_tm_tbm_' + no) {
                    $('#cmb_tm_tbm_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#cmb_tm_tbm_' + no).next().is('br#br_' + no)) {
                    //     $('#cmb_tm_tbm_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'cmb_afd_unit_' + no) {
                    $('#cmb_afd_unit_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#cmb_afd_unit_' + no).next().is('br#br_' + no)) {
                    //     $('#cmb_afd_unit_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'cmb_tahun_tanam_' + no) {
                    $('#cmb_tahun_tanam_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#cmb_tahun_tanam_' + no).next().is('br#br_' + no)) {
                    //     $('#cmb_tahun_tanam_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else if (arr_id == 'cmb_bahan_' + no) {
                    $('#cmb_bahan_' + no).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#cmb_bahan_' + no).next().is('br#br_' + no)) {
                    //     $('#cmb_bahan_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                } else {
                    $('#' + arr_id).css({
                        "background": "#FFCECE"
                    })
                    // if (!$('#' + arr_id).next().is('br#br_' + no)) {
                    //     $('#' + arr_id).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    // }
                }
            }
        }
    }

    function validasi_qty(sudah_booking, qty_diminta, stok_tgl_ini, no) {
        /*** jika jumlah booking+diminta melebihi jumlah stok maka isValid = false dan munculkan alert booking melebihi stok ***/
        if (!isNaN(stok_tgl_ini >= 0)) {
            if (stok_tgl_ini == 0) {
                $('#txt_qty_diminta_' + no).css({
                    "background": ""
                })
                isValid = true;
            } else {
                if ((sudah_booking + qty_diminta) > stok_tgl_ini) {
                    $('#txt_qty_diminta_' + no).css({
                        "background": "#FFCECE"
                    })
                    isValid = false;
                    alert('Qty Stok :' + stok_tgl_ini + '. Sudah Booking :' + sudah_booking + ' dan Permintaan BPB :' + qty_diminta + ', melebihi dari jumlah stok yang tersedia');
                } else {
                    $('#txt_qty_diminta_' + no).css({
                        "background": ""
                    })
                    isValid = true;
                }
            }
        } else {
            isValid = false;
        }

        return isValid;
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

    function cek_tm_tbm(row) {
        // check_form();
        if ($('#cmb_bagian :selected').text() != "TANAMAN" && $('#cmb_bagian :selected').text() != "TANAMAN UMUM") {
            var strip_cmb = '<option value="-">-</option>';
            // $('.set_strip_cmb').empty();
            // $('.set_strip_cmb').append(strip_cmb);
            $('.set_strip_cmb').html(strip_cmb);
            $('#cmb_alokasi_est').addClass('form-control bg-light');
            $('#cmb_alokasi_est').attr('disabled', '');
            // $('#cmb_tm_tbm_'+row).html(strip_cmb);
            if ($('#cmb_bagian :selected').text() != "TEKNIK") {
                $('#bhnbakar').addClass('form-control bg-light');
                $('#bhnbakar').attr('disabled', '');
            } else {
                $('#bhnbakar').removeAttr('disabled', '');
                $('#bhnbakar').removeClass('bg-light');
                $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').attr('disabled', '');
                $('#txt_jns_alat, #txt_kd_nmr, #txt_hm_km,#txt_lokasi_kerja').addClass('form-control bg-light');
            }

        } else {

            $('#cmb_alokasi_est').removeAttr('disabled', '');
            $('#cmb_alokasi_est').removeClass('bg-light');
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


        // if ($('#bhnbakar :selected').text() === "BBM") {
        //     $('#txt_jns_alat').removeAttr('disabled', '');
        //     $('#txt_jns_alat').removeClass('bg-light');
        // } else {
        //     $('#txt_jns_alat').attr('disabled', '');
        //     $('#txt_jns_alat').addClass('form-control bg-light');
        // }
    }

    //ngambil dari HRIS nama db -> msalgrou_personalia
    function cmb_afd_unit(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        console.log(tm_tbm);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/pilih_afd'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'tm_tbm': tm_tbm
            },
            success: function(data) {
                // console.log(data);
                $('#cmb_afd_unit_' + row).empty();

                var opsi_pilih = '<option value=""></option>';
                $('#cmb_afd_unit_' + row).append(opsi_pilih);

                $.each(data, function(index) {
                    // var opsi_afd_unit = '<option value="'+data[index].AFD+'">'+data[index].AFD+'</option>';
                    var opsi_afd_unit = '<option value="' + data[index].afd + '" style="font-size: 12px">' + data[index].afd + '</option>';
                    $('#cmb_afd_unit_' + row).append(opsi_afd_unit);
                });
                // cmb_tahun_tanam(row);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    //ngambil dari HRIS nama db -> msalgrou_personalia
    function cmb_blok_sub(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        var afd_unit = $('#cmb_afd_unit_' + row).val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/pilih_blok_sub'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'tm_tbm': tm_tbm,
                'afd_unit': afd_unit
            },
            success: function(data) {
                $('#cmb_blok_sub_' + row).empty();
                var opsi_pilih_master_blok = '<option value=""></option>';
                $('#cmb_blok_sub_' + row).append(opsi_pilih_master_blok);

                $.each(data, function(index) {
                    var opsi_master_blok = '<option value="' + data[index].blok + '" style="font-size: 12px;">' + data[index].blok + '</option>';
                    $('#cmb_blok_sub_' + row).append(opsi_master_blok);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    //ngambil dari HRIS nama db -> msalgrou_personalia
    function cmb_tahun_tanam(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        var afd_unit = $('#cmb_afd_unit_' + row).val();
        var blok_sub = $('#cmb_blok_sub_' + row).val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/pilih_tahun_tanam'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'tm_tbm': tm_tbm,
                'afd_unit': afd_unit,
                'blok_sub': blok_sub
            },
            success: function(data) {
                $('#cmb_tahun_tanam_' + row).empty();
                var opsi_pilih_tahun_tanam = '<option value=""></option>';
                $('#cmb_tahun_tanam_' + row).append(opsi_pilih_tahun_tanam);

                $.each(data, function(index) {
                    var opsi_tahun_tanam = '<option value="' + data[index].tahuntanam + '" style="font-size: 12px;">' + data[index].tahuntanam + '</option>';
                    $('#cmb_tahun_tanam_' + row).append(opsi_tahun_tanam);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }


    function cmb_bahan(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        var afd_unit = $('#cmb_afd_unit_' + row).val();
        var blok_sub = $('#cmb_blok_sub_' + row).val();
        var thn_tanam = $('#cmb_tahun_tanam_' + row).val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/pilih_bahan'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'tm_tbm': tm_tbm,
                'afd_unit': afd_unit,
                'blok_sub': blok_sub,
                'thn_tanam': thn_tanam
            },
            success: function(data) {

                console.log(data);
                $('#cmb_bahan_' + row).empty();

                var opsi_pilih = '<option value=""></option>';
                $('#cmb_bahan_' + row).append(opsi_pilih);

                $.each(data, function(index) {
                    // var opsi_cmb_bahan = '<option value="'+data[index].coa_material+'">'+data[index].coa_material+'-'+data[index].ket+'</option>';
                    var opsi_cmb_bahan = '<option value="' + data[index][0] + '" style="font-size: 12px;">' + data[index][1] + '-' + data[index][0] + '</option>';
                    $('#cmb_bahan_' + row).append(opsi_cmb_bahan);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function pilihModalAccBeban(row) {
        $('#modalAccBeban').modal('show');
        $('#hidden_no_row').val(row);
        $('#tableAccBeban').DataTable().destroy();
        tableAccBeban(row);
    }

    // Start Data Table Server Side
    var table;

    function tableAccBeban(row) {
        var tm_tbm = $('#cmb_tm_tbm_' + row).val();
        if (tm_tbm == 'TM') {
            tm_tbm1 = '7005';
        } else if (tm_tbm == 'TBM') {
            tm_tbm1 = '2024';
        } else if (tm_tbm == 'LANDCLEARING') {
            tm_tbm1 = '2090';
        } else {
            tm_tbm1 = '2095';
        }
        var afd = $('#cmb_afd_unit_' + row).val();
        var thn_tanam = $('#cmb_tahun_tanam_' + row).val();
        var cmb_bahan = $('#cmb_bahan_' + row).val();

        var dt = tm_tbm1 + afd + thn_tanam + cmb_bahan;
        // console.log(dt);
        //datatables
        // var nopo = nopotxt;
        // console.log(cmb_bahan);
        $('#tableAccBeban').DataTable({
            // "destroy": true,
            "processing": true,
            "serverSide": true,

            "order": [],
            "select": true,
            "ajax": {
                "url": "<?php echo site_url('Bpb/list_acc_beban') ?>",
                "type": "POST",
                "data": {
                    // tm_tbm: tm_tbm,
                    // afd: afd,
                    // thn_tanam: thn_tanam,
                    dt: dt,
                    cmb_bahan: cmb_bahan,
                }
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "infoFiltered": ""
            },
            "columns": [{
                    "width": "3%"
                },
                {
                    "width": "33%"
                },
                {
                    "width": "50%"
                },
                {
                    "width": "7%"
                },
                {
                    "width": "7%"
                },

            ],



        });

    }
    // End Data Table Server Side

    function cari_barang(no_row) {
        $('#hidden_no_row_barang').val(no_row);
        $('#modalListBarang').modal('show');
        $('#tableListBarang').DataTable().destroy();
        listBarang(no_row);
    }

    function listBarang(no_row) {
        var kode_dev = $('#devisi').val();
        // console.log(kode_dev);
        $('#tableListBarang').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Bpb/list_barang') ?>",
                "type": "POST",
                // "data": {
                //     // data: data,
                //     kode_dev: kode_dev,
                // }
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "infoFiltered": ""
            },
            "columns": [{
                    "width": "2%"
                },
                {
                    "width": "3%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "25%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "5%"
                }
            ],
            "drawCallback": function(settings) {
                $('#tableListBarang tr').each(function() {
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

    }

    $('#tableListBarang tbody').on('click', 'tr', function() {
        var dataClick = $('#tableListBarang').DataTable().row(this).data();
        var kode_barang = dataClick[2];
        var nama_barang = dataClick[3];
        var grup_barang = dataClick[4];
        var satuan = dataClick[5];
        var txtperiode = dataClick[6];
        var row = $('#hidden_no_row_barang').val();

        console.log(txtperiode);

        var kode_dev = $('#devisi').val();

        $('#lbl_kode_barang_' + row).html(kode_barang);
        $('#lbl_nama_barang_' + row).html(nama_barang);
        $('#txt_barang_' + row).val(nama_barang);

        $('#hidden_kode_barang_' + row).val(kode_barang);
        $('#hidden_nama_barang_' + row).val(nama_barang);
        $('#hidden_grup_barang_' + row).val(grup_barang);
        $('#hidden_txtperiode_' + row).val(txtperiode);

        $('#b_satuan_' + row).html(satuan);
        $('#hidden_satuan_' + row).val(satuan);

        $('#devisi').attr('disabled', '');


        // $('#modalListBarang').modal('hide');

        sum_stok(kode_barang, row, kode_dev);
        sum_stok_booking(kode_barang, row, kode_dev);
    });

    function sum_stok(kodbar, row, kode_dev) {

        var hidden_txtperiode = $('#hidden_txtperiode_' + row).val();

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/sum_stok'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'kodbar': kodbar,
                'hidden_txtperiode': hidden_txtperiode,
                'kode_dev': kode_dev
            },
            success: function(data) {

                // console.log(data);
                if (data === false) {
                    var sess_user_gudang = '<?php echo $this->session->userdata('kode_level') ?>';
                    // 36 User Gudang
                    // 18 Kasie Gudang
                    if (sess_user_gudang != 36 && sess_user_gudang != 18) {
                        swal('Stock Awal Belum Ada / Tidak Ada Stock di Gudang, Silahkan Hubungi Petugas Gudang');
                    } else {

                        Swal.fire({
                            title: 'Stock Awal belum ada!',
                            text: "silahkan input dahulu",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya!'
                        }).then(function() {
                            // window.location = "redirectURL";
                            window.open('<?php echo site_url('stok'); ?>', '_blank');
                        });
                    }
                    // if(frombpb == 'frombpb'){
                    // 	$('#tr_'+row).css('background-color','#ffcece');    
                    // 	$('#txt_ket_rinci_'+row).attr('readonly','');
                    // 	$('#btn_simpan_'+row).attr('disabled','');
                    // }
                } else {
                    if (data == '0' || data == '0.00') {
                        swal('Tidak ada stok di gudang, silahkan lakukan pengajuan SPP');
                        $('#txt_barang_' + row).val('');
                        $('#modalListBarang').modal('hide');
                    } else {
                        $('#b_stok_tgl_ini_' + row).html(data);
                        $('#hidden_stok_tgl_ini_' + row).val(data);

                        $('#tr_' + row).css('background-color', '#f9f9f9');
                        $('#txt_ket_rinci_' + row).removeAttr('readonly');
                        $('#btn_simpan_' + row).removeAttr('disabled');

                        $('#modalListBarang').modal('hide');
                    }
                }
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function sum_stok_booking(kodbar, row, kode_dev) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/sum_stok_booking'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'kodbar': kodbar,
                'kode_dev': kode_dev
            },
            success: function(data) {
                console.log(data);
                $('#b_stok_booking_' + row).html(data);
                $('#hidden_stok_booking_' + row).val(data);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function validasi_qty_diminta(n) {
        var a = $('#hidden_stok_tgl_ini_' + n + '').val();
        var b = $('#txt_qty_diminta_' + n + '').val();

        var hidden_stok_tgl_ini = Number(a);
        var txt_qty_diminta = Number(b);

        if (txt_qty_diminta > hidden_stok_tgl_ini) {
            swal('Stok digudang hanya ada ' + hidden_stok_tgl_ini);
            $('#txt_qty_diminta_' + n + '').val('');
        } else if (txt_qty_diminta == 0) {
            swal('Tidak boleh 0!');
            $('#txt_qty_diminta_' + n + '').val('');
        }
    }

    function get_all_cmb(bahan, n) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Bpb/get_all_cmb'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'bahan': bahan
            },
            success: function(data) {

                if (data == null) {
                    var opsi_tm_tbm_ = '<option value="' + '-' + '">' + '-' + '</option>';
                    $('#cmb_tm_tbm_' + n).append(opsi_tm_tbm_);

                    var opsi_afd_unit = '<option value="' + '-' + '">' + '-' + '</option>';
                    $('#cmb_afd_unit_' + n).append(opsi_afd_unit);

                    var opsi_blok_sub = '<option value="' + '-' + '">' + '-' + '</option>';
                    $('#cmb_blok_sub_' + n).append(opsi_blok_sub);

                    var opsi_cmb_thn_tanam = '<option value="' + '-' + '">' + '-' + '</option>';
                    $('#cmb_tahun_tanam_' + n).append(opsi_cmb_thn_tanam);

                    var opsi_cmb_bahan = '<option value="' + '-' + '">' + '-' + '</option>';
                    $('#cmb_bahan_' + n).append(opsi_cmb_bahan);
                } else {

                    $('#cmb_tm_tbm_' + n).val(data.tmtbm);
                    $('#cmb_tahun_tanam_' + n).val(data.thn_tanam);

                    // var opsi_cmb_thn_tanam = '<option value="' + data.thn_tanam + '">' + data.thn_tanam + '</option>';
                    // $('#cmb_tahun_tanam_' + n).empty();
                    // $('#cmb_tahun_tanam_' + n).append(opsi_cmb_thn_tanam);
                }

            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }
</script>