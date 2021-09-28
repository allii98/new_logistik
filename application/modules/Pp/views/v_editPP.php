<div class="container-fluid">
    <!-- start row-->
    <div class="row mt-0">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2 justify-content-between">
                        <h4 class="header-title ml-2"><?= $title; ?></h4>
                        <div class="button-list mr-2">
                            <button type="button" onclick="saveData()" class="btn btn-xs btn-primary" id="update">Update</button>
                            <button type="button" onclick="new_pp()" class="btn btn-xs btn-success" id="pp_baru">PP Baru</button>
                            <button type="button" class="btn btn-xs btn-primary" id="cetak" onclick="cetak()">Cetak</button>
                            <button type="button" onclick="goBack()" class="btn btn-xs btn-secondary" id="kembali">Kembali</button>
                        </div>
                    </div>
                    <!-- <form action="javascript:;" class="form-horizontal" id="form_input_pp" name="form_input_pp" method="POST"> -->
                    <div class="row">
                        <div class="col-lg-4 col-xl-4 col-12">
                            <input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
                            <!-- <input type="hidden" id="hidden_no_po" name="hidden_no_po"> -->
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_no_ref_po" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Ref&nbsp;PO&nbsp;
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control form-control-sm bg-light" required="required" type="text" placeholder="No. Ref. PO" readonly>
                                    <!-- <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control form-control-sm" required="required" type="text" placeholder="No. Ref. PO" onfocus="tampilModal()"> -->
                                    <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                                    <input type="hidden" id="hidden_grup" name="hidden_grup">
                                    <input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">

                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_pembayaran" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Pembayaran
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_pembayaran" name="txt_pembayaran" class="form-control form-control-sm" required="required" type="text" placeholder="Pembayaran">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="kd_supplier" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Supplier
                                </label>
                                <div class="col-3" style="padding-right: 0.01em;">
                                    <input type="text" class="form-control form-control-sm bg-light" id="kd_supplier" name="kd_supplier" placeholder="Kode Supplier" autocomplite="off" readonly>
                                </div>
                                <div class="col-6 col-xl-12">
                                    <input type="text" class="form-control form-control-sm bg-light" id="txt_supplier" name="txt_supplier" placeholder="Supplier" autocomplite="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_nilai_po" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Nilai&nbsp;PO
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_nilai_po" name="txt_nilai_po" class="form-control form-control-sm bg-light" required="required" type="text" placeholder="Nilai PO" onkeyup="hitungTotalPO()" value="0" readonly="">

                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_kurs" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Kurs
                                </label>
                                <label class="control-label col-md-2 col-sm-3" id="lbl_kurs" name="lbl_kurs"></label>
                                <div class="col-3">
                                    <input type="hidden" id="hidden_kurs" name="hidden_kurs" required="" value="Rp" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_pajak" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Pajak
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input type="number" placeholder="" class="form-control form-control-sm" value="0" id="txt_pajak" name="txt_pajak" onkeyup="hitungTotalPO()" required="required">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_nilai_bpo1" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Nilai&nbsp;BPO
                                </label>
                                <div class="col-4" style="padding-right: 0.01em;">
                                    <input type="number" placeholder="" class="form-control form-control-sm" value="0" id="txt_nilai_bpo1" name="txt_nilai_bpo1" onkeyup="hitungTotalPO()" required="required">

                                </div>
                                <div class="col-5 col-xl-12">
                                    <input type="number" placeholder="" class="form-control form-control-sm" value="0" id="txt_nilai_bpo2" name="txt_nilai_bpo2" onkeyup="hitungTotalPO()" required="required">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-xl-4 col-12">
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_total_po" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Total&nbsp;PO
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_total_po" name="txt_total_po" class="form-control form-control-sm bg-light" required="required" type="text" placeholder="Total PO" readonly="">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_sudah_dibayar" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Sudah&nbsp;Bayar
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control form-control-sm autonumber bg-light" required="required" type="text" placeholder="Sudah dibayar" readonly="">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_tgl_pp" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Tgl.&nbsp;PP
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_tgl_pp" name="txt_tgl_pp" class="form-control form-control-sm" required="required" type="text" placeholder="Tgl. PP">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_tgl_pp" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Tgl.&nbsp;PO
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_tgl_po" name="txt_tgl_po" class="form-control form-control-sm bg-light" type="text" readonly>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_dibayar_ke" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Dibayar&nbsp;ke
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_dibayar_ke" name="txt_dibayar_ke" class="form-control form-control-sm" required="required" type="text" placeholder="Dibayar ke">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_jumlah" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Jumlah
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_jumlah" name="txt_jumlah" class="form-control form-control-sm" required="required" type="text" placeholder="Jumlah" onkeyup="getTerbilang()">
                                    <input type="hidden" name="terbayar_po" id="terbayar_po">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_terbilang" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Terbilang
                                </label>
                                <div class="col-9 col-xl-12">
                                    <textarea class="form-control form-control-sm bg-light" id="txt_terbilang" name="txt_terbilang" placeholder="Terbilang" rows="3" required="required" readonly=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_keterangan" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Keterangan
                                </label>
                                <div class="col-9 col-xl-12">
                                    <input id="txt_keterangan" name="txt_keterangan" class="form-control form-control-sm" required="required" type="text" placeholder="Keterangan" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-4 col-12">
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_kode_budget" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Kode Budget&nbsp;
                                </label>
                                <label class="control-label col-md-2 col-sm-3" id="lbl_kode_budget"></label>
                                <input type="hidden" id="hidden_kode_budget" name="hidden_kode_budget">
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_jenis_budget" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Jenis&nbsp;Budget&nbsp;
                                </label>
                                <label class="control-label col-md-2 col-sm-3" id="lbl_jenis_budget"></label>
                                <input type="hidden" id="hidden_jenis_budget" name="hidden_jenis_budget">
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_main_account_budget" class="col-lg-5 col-xl-5 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Main&nbsp;Account&nbsp;Budget&nbsp;
                                </label>
                                <label class="control-label col-md-2 col-sm-3" id="lbl_main_account_budget"></label>
                                <input type="hidden" id="hidden_main_account" name="hidden_main_account">
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_nama_account" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Nama&nbsp;Account&nbsp;
                                </label>
                                <label class="control-label col-md-2 col-sm-3" id="lbl_nama_account"></label>
                                <input type="hidden" id="hidden_nama_account" name="hidden_nama_account">
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="lbl_nama_account" class="col-lg-4 col-xl-4 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    User&nbsp;
                                </label>
                                <label class="control-label col-6 col-xl-12"><?php echo $this->session->userdata('user'); ?></label>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_no_voucher" class="col-lg-4 col-xl-4 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    No.&nbsp;Voucher
                                </label>
                                <div class="col-8 col-xl-12">
                                    <input type="number" class="form-control form-control-sm" id="txt_no_voucher" name="txt_no_voucher" placeholder="No Voucher" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_tgl_voucher" class="col-lg-4 col-xl-4 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Tanggal
                                </label>
                                <div class="col-8 col-xl-12">
                                    <input type="text" class="form-control form-control-sm bg-light" id="txt_tgl_voucher" name="txt_tgl_voucher" readonly placeholder="Tanggal">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="fullWidthModalLabel" aria-hidden="true" id="modalcariPO">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs nav-bordered">
                        <li class="nav-item">
                            <a href="#home" at="po" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                PO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scanqr" at="qr" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Scan QRcode
                            </a>
                        </li>

                    </ul>
                    <label class="btn btn-info active btn-xs ml-4" id="kamera1" style="display: none;">
                        <input type="radio" name="putar_camera" value="1" autocomplete="off" checked> Front Camera
                    </label>
                    <label class="btn btn-secondary btn-xs" id="kamera2" style="display: none;">
                        <input type="radio" name="putar_camera" value="2" autocomplete="off"> Back Camera
                    </label>
                </div>
                <div class="modal-body">

                    <div id="listpo" style="display: block;">
                        <div class="table-responsive">
                            <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                            <table id="tableDataPO" class="table table-striped table-bordered" style="width: 100%; border-collapse: separate; padding: 0 50px 0 50px;">
                                <thead>
                                    <tr>
                                        <th style="font-size: 12px; padding:10px">Tgl</th>
                                        <th style="font-size: 12px; padding:10px">No. Ref. PO</th>
                                        <th style="font-size: 12px; padding:10px">No PO</th>
                                        <th style="font-size: 12px; padding:10px">Kd Supplier</th>
                                        <th style="font-size: 12px; padding:10px">Supplier</th>
                                        <th style="font-size: 12px; padding:10px">Bayar</th>
                                        <th style="font-size: 12px; padding:10px">Harga PO+PPN</th>
                                        <th style="font-size: 12px; padding:10px">BPO</th>
                                        <th style="font-size: 12px; padding:10px">Terbayar</th>
                                        <th style="font-size: 12px; padding:10px">Saldo</th>
                                        <th style="font-size: 12px; padding:10px">Kurs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="camera" style="display: none;">
                        <video id="preview" width="100%"></video>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div> -->
            </div>
        </div>
    </div>


</div>
<style>
    table#tableDataPO td {
        padding: 3px;
        padding-left: 10px;
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
    function new_pp() {
        location.h
        ref = "<?php echo base_url('Pp/input') ?>";
    }

    function goBack() {
        window.history.back();
    }

    function cetak() {
        var id_po = '<?php echo $this->uri->segment('3'); ?>';
        var noref = '<?php echo $this->uri->segment('4'); ?>';
        // var noref = $('#hidden_no_ref_po').val();
        // var ref = noref.replace('/', '.');

        window.open('<?= base_url() ?>Pp/cetak/' + noref + '/' + id_po, '_blank');
    }
    $(document).ready(function() {
        $('#txt_pajak,#txt_nilai_bpo1,#txt_nilai_bpo2').number(true);
        $('#txt_nilai_po,#txt_total_po,#txt_sudah_dibayar,#txt_jumlah').number(true);
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
            var jenis = $(this).attr('at');
            if (jenis != 'po') {
                // scanner.start();
                $('#preview').show();
                $(".modal-dialog").removeClass("modal-full-width");
                $(".modal-dialog").addClass("modal-md");
                $("#judulpo").css('display', 'none');
                $("#judulqr").css('display', 'block');
                $("#listpo").css('display', 'none');
                $("#camera").css('display', 'block');
                $("#kamera1").css('display', 'block');
                $("#kamera2").css('display', 'block');
            } else {
                $('#preview').hide();
                // scanner.stop();
                $(".modal-dialog").removeClass("modal-md");
                $(".modal-dialog").addClass("modal-full-width");
                $("#judulpo").css('display', 'block');
                $("#judulqr").css('display', 'none');
                $("#camera").css('display', 'none');
                $("#listpo").css('display', 'block');
                $("#kamera1").css('display', 'none');
                $("#kamera2").css('display', 'none');
            }
        });
        var id = '<?php echo $this->uri->segment('3'); ?>';

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pp/get_data_pp'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'id': id
            },
            success: function(data) {
                // console.log(data);
                if (data.tglpp === null) {
                    var tgl_pp = "";
                } else {
                    var tgl_pp = dateToMDY(new Date(data.data_pp.tglpp));
                }

                if (data.data_pp.tglpo === null) {
                    var tglpo = "";
                } else {
                    var tgl_po = dateToMDY(new Date(data.data_pp.tglpo));
                }

                if (data.data_pp.tgl_vou === null) {
                    var tgl_voucher = "";
                } else {
                    var tgl_voucher = dateToMDY(new Date(data.data_pp.tgl_vou));
                }

                $('#lbl_no_pp').html(data.data_pp.nopptxt);
                $('#lbl_kurs').html(data.data_pp.KURS);

                $('#hidden_no_pp').val(data.data_pp.nopptxt);
                $('#txt_no_ref_po').val(data.data_pp.ref_po);
                $('#hidden_no_ref_po').val(data.data_pp.ref_po);
                $('#hidden_no_po').val(data.data_pp.nopotxt);
                $('#hidden_grup').val(data.data_pp.grup);
                $('#txt_tgl_pp').val(tgl_pp);
                $('#txt_tgl_po').val(tgl_po);
                $('#txt_pembayaran').val(data.data_pp.bayar);
                $('#kd_supplier').val(data.data_pp.kode_supplytxt);
                $('#txt_supplier').val(data.data_pp.nama_supply);
                $('#txt_nilai_po').val(data.data_pp.jumlahpo);
                $('#hidden_kurs').val(data.data_pp.KURS);
                $('#txt_pajak').val(data.data_pp.pajak);
                $('#txt_nilai_bpo1').val(data.data_pp.KODE_BPO);
                $('#txt_nilai_bpo2').val(data.data_pp.jumlah_bpo);
                $('#txt_total_po').val(data.data_pp.total_po);
                $('#txt_sudah_dibayar').val(data.sudah_bayar);
                $('#txt_dibayar_ke').val(data.data_pp.kepada);
                $('#txt_jumlah').val(data.data_pp.jumlah);
                $('#jumlah').val(data.data_pp.jumlah);
                $('#txt_terbilang').val(data.data_pp.terbilang);
                $('#txt_keterangan').val(data.data_pp.ket);
                $('#hidden_main_account').val(data.data_pp.main_account);
                $('#hidden_nama_account').val(data.data_pp.hidden_main_account);
                $('#txt_no_voucher').val(data.data_pp.no_voutxt);
                $('#txt_tgl_voucher').val(tgl_voucher);
            },
            error: function(request) {
                alert('Error Save Data : ' + request.responseText);

                // $('#lbl_status_simpan_'+no).empty();
                // $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');

                // if($.trim($('#hidden_no_bkb').val()) == ''){
                //   $('#lbl_spp_status').empty();
                //   $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
                // }
            }
        });

        $('#txt_tgl_pp,#txt_tgl_po,#txt_tgl_voucher').daterangepicker({
            singleDatePicker: !0,
            singleClasses: "picker_1"
        }, function(start, end, label) {
            // start.format('YYYY-MM-DD')
        });


    });

    //untuk scan
    // let scanner = new Instascan.Scanner({
    //     video: document.getElementById('preview')
    // });
    // scanner.addListener('scan', function(content) {
    //     $('#preview').hide();
    //     scanner.stop();
    // });
    // Instascan.Camera.getCameras().then(function(cameras) {
    //     if (cameras.length > 0) {
    //         scanner.start(cameras[0]);
    //         $('[name="putar_camera"]').on('change', function() {
    //             if ($(this).val() == 1) {
    //                 if (cameras[0] != "") {
    //                     scanner.start(cameras[0]);
    //                 } else {
    //                     alert('No Front camera found!');
    //                 }
    //             } else if ($(this).val() == 2) {
    //                 if (cameras[1] != "") {
    //                     scanner.start(cameras[1]);
    //                 } else {
    //                     alert('No Back camera found!');
    //                 }
    //             }
    //         });
    //     } else {
    //         console.error('No cameras found.');
    //     }
    // }).catch(function(e) {
    //     console.error(e);
    // });
    //end

    function tampilModal() {
        $('#modalcariPO').modal('show');
        dataPO();
    }

    function dataPO() {
        $('#tableDataPO').DataTable().destroy();
        $('#tableDataPO').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "select": true,
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "ajax": {
                "url": "<?php echo site_url('Pp/list_po') ?>",
                "type": "POST",
                "data": {}
            },
            "columnDefs ": [{
                "targets": [0],
                "orderable": false,

            }, ],

            "lengthMenu": [
                [5, 10, 15, -1],
                [10, 15, 20, 25]
            ],
            "aoColumnDefs": [{
                "bSearchable": false,
                "bVisible": false,
                "aTargets": [2, 3]
            }, ],

        });

        $('#tableDataPO tbody').on('click', 'tr', function() {
            var dataClick = $('#tableDataPO').DataTable().row(this).data();
            var tgl_po = new Date(dataClick[0]);
            var no_ref_po = dataClick[1];
            var no_po = dataClick[2];
            var kd_supplier = dataClick[3];
            var nama_supplier = dataClick[4];
            var bayar = dataClick[5];
            var nilai_po = dataClick[6];
            var nilai_bpo = dataClick[7];
            var sudah_dibayar = dataClick[8];
            var kurs = dataClick[10];

            // $('#txt_tgl_po').val(tgl_po);
            var tgl = dateToMDY(tgl_po);
            // console.log(d);
            $('#txt_tgl_po').val(tgl);

            $('#txt_no_ref_po').val(no_ref_po);
            $('#hidden_no_po').val(no_po);
            $('#txt_pembayaran').val(bayar);
            $('#kd_supplier').val(kd_supplier);
            $('#txt_supplier').val(nama_supplier);
            $('#txt_dibayar_ke').val(nama_supplier);

            $('#txt_nilai_po').val(nilai_po);
            var bpo = nilai_bpo.replace(/,/g, "");
            $('#txt_nilai_bpo2').val(bpo);
            $('#lbl_kurs').html(kurs);
            $('#hidden_kurs').val(kurs);

            $('#txt_sudah_dibayar').val(sudah_dibayar);

            $('#modalcariPO').modal('hide');
            hitungTotalPO();
        });
    }


    function dateToMDY(date) {
        var d = date.getDate();
        var m = date.getMonth() + 1;
        var y = date.getFullYear();
        return (m <= 9 ? '0' + m : m) + '/' + (d <= 9 ? '0' + d : d) + '/' + y;
    }

    function hitungTotalPO() {
        var nilai_po = $('#txt_nilai_po').val();
        var c = $('#txt_pajak').val();
        var a = $('#txt_nilai_bpo1').val();
        var b = $('#txt_nilai_bpo2').val();
        var sudah_dibayar = $('#txt_sudah_dibayar').val();

        var po = nilai_po.replace(/,/g, "");
        var pajak = c.replace(/,/g, "");
        var nilai_bpo1 = a.replace(/,/g, "");
        var nilai_bpo2 = b.replace(/,/g, "");
        var sudah = sudah_dibayar.replace(/,/g, "");


        var total_po = Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2);
        var sisabayar = (Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2)) - Number(sudah);

        console.log(total_po);


        $('#txt_total_po').val(total_po);
        $('#total_po').val(total_po);
        $('#txt_jumlah').val(sisabayar);
        $('#jumlah').val(sisabayar);
        $('#txt_terbilang').val(terbilang(sisabayar));
    }

    function getTerbilang() {
        var nilai_po = $('#txt_nilai_po').val();
        var c = $('#txt_pajak').val();
        var a = $('#txt_nilai_bpo1').val();
        var b = $('#txt_nilai_bpo2').val();
        var sudah_dibayar = $('#txt_sudah_dibayar').val();

        var po = nilai_po.replace(/,/g, "");
        var pajak = c.replace(/,/g, "");
        var nilai_bpo1 = a.replace(/,/g, "");
        var nilai_bpo2 = b.replace(/,/g, "");
        var sudah = sudah_dibayar.replace(/,/g, "");

        var total_po = Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2);
        var sisabayar = (Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2)) - Number(sudah);

        var jml = $('#txt_jumlah').val();
        if (jml < 0) {
            $('#txt_jumlah').val(sisabayar);
        }
        if (jml > sisabayar) {
            $('#txt_jumlah').val(sisabayar);
            $('#jumlah').val(sisabayar);
        }
        $('#txt_terbilang').val(terbilang($('#txt_jumlah').val()));
    }


    $("#form_input_pp").validate({
        ignore: [],
        submitHandler: function(form) {
            saveData();
        }
    });

    function saveData() {
        $('#update').attr('disabled', '');
        var form_data = new FormData();

        var id = '<?php echo $this->uri->segment('3'); ?>';

        form_data.append('id_pp', id);
        form_data.append('txt_no_ref_po', $('#txt_no_ref_po').val());
        form_data.append('hidden_no_po', $('#hidden_no_po').val());
        form_data.append('hidden_grup', $('#hidden_grup').val());
        form_data.append('txt_tgl_pp', $('#txt_tgl_pp').val());
        form_data.append('txt_tgl_po', $('#txt_tgl_po').val());
        form_data.append('txt_pembayaran', $('#txt_pembayaran').val());
        form_data.append('kd_supplier', $('#kd_supplier').val());
        form_data.append('txt_supplier', $('#txt_supplier').val());
        form_data.append('txt_nilai_po', $('#txt_nilai_po').val());
        form_data.append('hidden_kurs', $('#hidden_kurs').val());
        form_data.append('txt_pajak', $('#txt_pajak').val());
        form_data.append('txt_nilai_bpo1', $('#txt_nilai_bpo1').val());
        form_data.append('txt_nilai_bpo2', $('#txt_nilai_bpo2').val());
        form_data.append('txt_total_po', $('#txt_total_po').val());
        form_data.append('txt_dibayar_ke', $('#txt_dibayar_ke').val());
        form_data.append('txt_jumlah', $('#txt_jumlah').val());
        form_data.append('txt_terbilang', $('#txt_terbilang').val());
        form_data.append('txt_keterangan', $('#txt_keterangan').val());
        form_data.append('txt_no_voucher', $('#txt_no_voucher').val());
        form_data.append('txt_tgl_voucher', $('#txt_tgl_voucher').val());
        form_data.append('txt_sudah_dibayar', $('#txt_sudah_dibayar').val());

        // console.log(form_data);

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pp/update_pp'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#update').append('&nbsp;<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                // console.log(data);
                if (data.status == true) {
                    $('#a_pp_baru').show();
                    $.toast({
                        position: 'top-right',
                        heading: 'Success',
                        text: 'Berhasil Disimpan!',
                        icon: 'success',
                        loader: false
                    });

                    setTimeout(function() {
                        window.location.href = "<?php echo site_url('Pp'); ?>";
                    }, 1000);
                }
            },
            error: function(request) {
                alert('Error Save Data : ' + request.responseText);

            }
        });
    }
</script>