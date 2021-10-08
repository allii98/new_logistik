<div class="container-fluid">
    <!-- start row-->
    <div class="row mt-0">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <form action="javascript:;" id="form_input_pp" name="form_input_pp" method="POST"> -->
                    <div class="row mb-2 justify-content-between">
                        <h4 class="header-title ml-2"><?= $title; ?></h4>
                        <h6 id="lbl_status_pp"></h6>
                        <div class="button-list mr-2">
                            <button type="button" onclick="saveData()" class="btn btn-xs btn-primary" id="simpan_pp">Simpan</button>
                            <button type="button" onclick="new_pp()" class="btn btn-xs btn-success" id="">PP Baru</button>
                            <!-- <button type="button" onclick="batal()" class="btn btn-xs btn-danger" id="" disabled>Batal PP</button> -->
                            <!-- <button type="button" class="btn btn-xs btn-primary" id="cetak" onclick="cetak()" disabled>Cetak</button> -->
                            <button type="button" onclick="goBack()" class="btn btn-xs btn-secondary" id="kembali">Kembali</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-xl-4 col-12">

                            <input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
                            <input type="hidden" id="hidden_refpp" name="hidden_refpp">
                            <input type="hidden" id="hidden_id_po" name="hidden_id_po">
                            <!-- </div> -->

                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_no_ref_po" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Ref&nbsp;PO&nbsp;
                                </label>

                                <div class="col-9 col-xl-12">
                                    <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control form-control-sm" required="required" type="text" placeholder="No. Ref. PO" onfocus="tampilModal()">
                                    <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                                    <input type="hidden" id="hidden_grup" name="hidden_grup">
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
                                    <input id="txt_nilai_po" name="txt_nilai_po" class="form-control form-control-sm bg-light" required="required" type="text" placeholder="Nilai PO" readonly="" onkeyup="hitungTotalPO()">
                                    <input type="hidden" name="hidden_nilai_po" id="hidden_nilai_po">
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
                                    <input type="text" placeholder="" class="form-control form-control-sm" value="0" id="txt_pajak" name="txt_pajak" onkeyup="hitungTotalPO()" required="required">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 2px;">
                                <label for="txt_nilai_bpo1" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
                                    Nilai&nbsp;BPO
                                </label>
                                <div class="col-4" style="padding-right: 0.01em;">
                                    <input type="text" placeholder="" class="form-control form-control-sm" value="0" id="txt_nilai_bpo1" name="txt_nilai_bpo1" onkeyup="hitungTotalPO()" required="required">
                                </div>
                                <div class="col-5 col-xl-12">
                                    <input type="text" placeholder="" class="form-control form-control-sm" value="0" id="txt_nilai_bpo2" name="txt_nilai_bpo2" onkeyup="hitungTotalPO()" required="required">
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
                                    <input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control form-control-sm bg-light" required="required" type="text" placeholder="Sudah dibayar" readonly="">
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
                                <label for="txt_tgl_po" class="col-lg-3 col-xl-3 col-12 col-form-label" style="margin-top: -5px; font-size: 12px;">
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
                                    <input type="hidden" name="jumlah" id="jumlah">
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
                            <table id="tableDataPO" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th style="font-size: 12px; padding:10px">id</th>
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
        location.href = "<?php echo base_url('Pp/input') ?>";
    }

    function goBack() {
        window.history.back();
    }
    $(document).ready(function() {
        // $('#preview').show();
        // console.log('ini dia',$(this).attr('at'));
        $('#txt_pajak,#txt_nilai_bpo1,#txt_nilai_bpo2').number(true);
        $('#txt_nilai_po,#txt_total_po,#txt_sudah_dibayar,#txt_jumlah').number(true);

        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
            var jenis = $(this).attr('at');
            if (jenis != 'po') {
                $(".modal-dialog").removeClass("modal-full-width");
                $(".modal-dialog").addClass("modal-md");
                $("#judulpo").css('display', 'none');
                $("#judulqr").css('display', 'block');
                $("#listpo").css('display', 'none');
                $("#camera").css('display', 'block');
                $("#kamera1").css('display', 'block');
                $("#kamera2").css('display', 'block');
            } else {
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


        $("#txt_jumlah").on("keypress keyup blur", function(event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        $('#a_pp_baru').hide();

        $('#txt_tgl_pp,#txt_tgl_po,#txt_tgl_voucher').daterangepicker({
            singleDatePicker: !0,
            singleClasses: "picker_1"

        }, function(start, end, label) {
            // start.format('YYYY-MM-DD')
        });


        tampilModal();

        $('#txt_tgl_voucher').val('');
    });

    //untuk scan
    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
    });

    scanner.addListener('scan', function(content) {
        console.log(content);
        $('#preview').hide();
        cariPoqr(content);
        $('#modalcariPO').modal('hide');
        scanner.stop();
    });

    Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
            $('[name="putar_camera"]').on('change', function() {
                if ($(this).val() == 1) {
                    if (cameras[0] != "") {
                        scanner.start(cameras[0]);
                    } else {
                        alert('No Front camera found!');
                    }
                } else if ($(this).val() == 2) {
                    if (cameras[1] != "") {
                        scanner.start(cameras[1]);
                    } else {
                        alert('No Back camera found!');
                    }
                }
            });
        } else {
            console.error('No cameras found.');
        }
    }).catch(function(e) {
        console.error(e);
    });
    //end
    function tampilModal() {
        $('#modalcariPO').modal('show');
        $('#preview').show();
        dataPO();
        // scanner.start();
    }

    function cariPoqr(noref) {
        // alert(noref);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pp/caripo'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                refpo: noref,
            },
            success: function(data) {
                // console.log(data);
                var jumlah = data.saldo;
                if (jumlah == 0) {
                    // swal('Saldo sudah 0!');
                    Swal.fire({
                        text: "Saldo sudah 0!",
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            tampilModal();
                            scanner.start();
                        }
                    });
                } else {
                    // console.log(tgl_po);
                    var id_po = data.po.id;
                    var tgl_po = data.tglpo;
                    var no_ref_po = data.po.noreftxt;
                    var no_po = data.po.nopo;
                    var pembayaran = data.po.bayar;
                    var kd_supply = data.po.kode_supply;
                    var nama_supply = data.po.nama_supply;
                    var kurs = data.kurs;
                    var bayar = data.bayar;
                    var saldo = data.saldo;
                    var nilaipo = data.nilaipo;
                    var pajak = data.pajak;
                    var totalpo = data.totalpo;
                    var bpo = data.bpo;


                    $('#hidden_id_po').val(id_po);
                    $('#txt_tgl_po').val(tgl_po);

                    $('#txt_no_ref_po').val(no_ref_po);
                    $('#hidden_no_po').val(no_po);
                    $('#txt_pembayaran').val(pembayaran);
                    $('#kd_supplier').val(kd_supply);
                    $('#txt_supplier').val(nama_supply);
                    $('#txt_dibayar_ke').val(nama_supply);

                    $('#txt_nilai_po').val(nilaipo);
                    $('#hidden_nilai_po').val(nilaipo);
                    $('#txt_pajak').val(pajak);
                    $('#txt_total_po').val(totalpo);
                    // var bpo = nilai_bpo.replace(/,/g, "");
                    $('#txt_nilai_bpo2').val(bpo);
                    $('#lbl_kurs').html(kurs);
                    $('#hidden_kurs').val(kurs);

                    $('#txt_sudah_dibayar').val(bayar);
                    $('#modalcariPO').modal('hide');

                    hitungTotalPO();
                    // hitungTotalPO();
                }
            },
            error: function(request) {
                console.log(request.responseText);
            }
        });
    }

    $("#form_input_pp").validate({
        ignore: [],
        submitHandler: function(form) {
            saveData();
        }
    });

    function saveData() {
        $('#simpan_pp').attr('disabled', '');


        var form_data = new FormData();

        form_data.append('hidden_id_po', $('#hidden_id_po').val());
        form_data.append('hidden_no_pp', $('#hidden_no_pp').val());
        form_data.append('txt_no_ref_po', $('#txt_no_ref_po').val());
        form_data.append('hidden_no_po', $('#hidden_no_po').val());
        form_data.append('hidden_grup', $('#hidden_grup').val());
        form_data.append('txt_tgl_pp', $('#txt_tgl_pp').val());
        form_data.append('txt_tgl_po', $('#txt_tgl_po').val());
        form_data.append('txt_pembayaran', $('#txt_pembayaran').val());
        form_data.append('kd_supplier', $('#kd_supplier').val());
        form_data.append('txt_supplier', $('#txt_supplier').val());
        var total_po = $('#txt_nilai_po').val();
        // var hasil = total_po.replace(/,/g, "");
        form_data.append('txt_nilai_po', total_po);
        form_data.append('hidden_kurs', $('#hidden_kurs').val());
        form_data.append('txt_pajak', $('#txt_pajak').val());
        form_data.append('txt_nilai_bpo1', $('#txt_nilai_bpo1').val());
        form_data.append('txt_nilai_bpo2', $('#txt_nilai_bpo2').val());
        form_data.append('txt_total_po', $('#txt_total_po').val());
        form_data.append('txt_dibayar_ke', $('#txt_dibayar_ke').val());
        form_data.append('txt_jumlah', $('#txt_jumlah').val());
        form_data.append('txt_terbilang', $('#txt_terbilang').val());
        form_data.append('txt_keterangan', $('#txt_keterangan').val());
        form_data.append('hidden_main_account', $('#hidden_main_account').val());
        form_data.append('hidden_nama_account', $('#hidden_nama_account').val());
        form_data.append('txt_no_voucher', $('#txt_no_voucher').val());
        form_data.append('txt_tgl_voucher', $('#txt_tgl_voucher').val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pp/simpan_pp'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#simpan_pp').append('&nbsp;<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
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
            "columns": [{
                    "width": "3%"
                },
                {
                    "width": "7%"
                },
                {
                    "width": "18%"
                },
                {
                    "width": "3%"
                },
                {
                    "width": "8%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "5%"
                },
                {
                    "width": "12%"
                },
                {
                    "width": "8%"
                },
                {
                    "width": "12%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "5%"
                },
            ],

            "lengthMenu": [
                [5, 10, 15, -1],
                [10, 15, 20, 25]
            ],
            "aoColumnDefs": [{
                "bSearchable": false,
                "bVisible": false,
                "aTargets": [0, 3]
            }, ],
            "language": {
                "infoFiltered": ""
            }

        });

        $('#tableDataPO tbody').on('click', 'tr', function() {

            var dataClick = $('#tableDataPO').DataTable().row(this).data();
            // var tgl_po = new Date(dataClick[0]);
            var id_po = dataClick[0];
            var tgl_po = dataClick[1];
            // console.log('tanggal', tgl_po);
            var no_ref_po = dataClick[2];
            var no_po = dataClick[3];
            var kd_supplier = dataClick[4];
            var nama_supplier = dataClick[5];
            var bayar = dataClick[6];
            var nilai_po = dataClick[7];
            var nilai_bpo = dataClick[8];
            var sudah_dibayar = dataClick[9];
            var jumlah = dataClick[10];
            var kurs = dataClick[11];

            // $('#txt_tgl_po').val(tgl_po);
            // var tgl = tgl_po.replace("-", "/");
            if (jumlah == "0,00") {
                Swal.fire({
                    text: "Saldo sudah 0!",
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        tampilModal();
                        // scanner.start();
                    }
                });
            } else {
                ambilPO(id_po, no_ref_po, no_po);

            }


            // console.log(d);
        });
    }

    function ambilPO(id_po, no_ref_po, nopo) {
        scanner.stop();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pp/ambilpo'); ?>",
            dataType: "JSON",
            beforeSend: function() {

            },
            cache: false,
            data: {
                id: id_po,
                refpo: no_ref_po,
                nopo: nopo,
            },
            success: function(data) {
                var id_po = data.po.id;
                var tgl_po = data.tglpo;
                var no_ref_po = data.po.noreftxt;
                var no_po = data.po.nopo;
                var pembayaran = data.po.bayar;
                var kd_supply = data.po.kode_supply;
                var nama_supply = data.po.nama_supply;
                var kurs = data.kurs;
                var bayar = data.bayar;
                var saldo = data.saldo;
                var nilaipo = data.nilaipo;
                var pajak = data.pajak;
                var totalpo = data.totalpo;
                var bpo = data.bpo;


                $('#hidden_id_po').val(id_po);
                $('#txt_tgl_po').val(tgl_po);

                $('#txt_no_ref_po').val(no_ref_po);
                $('#hidden_no_po').val(no_po);
                $('#txt_pembayaran').val(pembayaran);
                $('#kd_supplier').val(kd_supply);
                $('#txt_supplier').val(nama_supply);
                $('#txt_dibayar_ke').val(nama_supply);

                $('#txt_nilai_po').val(nilaipo);
                $('#hidden_nilai_po').val(nilaipo);
                $('#txt_pajak').val(pajak);
                $('#txt_total_po').val(totalpo);
                // var bpo = nilai_bpo.replace(/,/g, "");
                $('#txt_nilai_bpo2').val(bpo);
                $('#lbl_kurs').html(kurs);
                $('#hidden_kurs').val(kurs);

                $('#txt_sudah_dibayar').val(bayar);
                $('#modalcariPO').modal('hide');

                hitungTotalPO();
                // setTimeout(function() {
                //     scanner.stop();
                // }, 1000);

            },
            error: function(request) {
                console.log(request.responseText);
            }
        });
    }


    function hitungTotalPO() {
        var nilai_po = $('#hidden_nilai_po').val();
        var pajak = $('#txt_pajak').val();
        var nilai_bpo1 = $('#txt_nilai_bpo1').val();
        var nilai_bpo2 = $('#txt_nilai_bpo2').val();
        var sudah_dibayar = $('#txt_sudah_dibayar').val();


        var total_po = parseFloat(nilai_po) + parseFloat(pajak) + parseFloat(nilai_bpo1) + parseFloat(nilai_bpo2);
        var sisabayar = (parseFloat(nilai_po) + parseFloat(pajak) + parseFloat(nilai_bpo1) + parseFloat(nilai_bpo2)) - parseFloat(sudah_dibayar);

        $('#txt_total_po').val(total_po);
        $('#total_po').val(total_po);
        $('#txt_jumlah').val(sisabayar);
        $('#jumlah').val(sisabayar);

        var kurs = $('#hidden_kurs').val();

        if (kurs == 'Rp') {
            var kur = ' Rupiah';
        } else if (kurs == 'USD') {
            var kur = ' Dolar';
        } else if (kurs == 'USD') {
            var kur = ' Singapore Dolar';
        } else if (kurs == 'Euro') {
            var kur = ' Euro';
        } else if (kurs == 'GBP') {
            var kur = ' Pound Sterling';
        } else if (kurs == 'Yen') {
            var kur = ' Yen';
        } else if (kurs == 'MYR') {
            var kur = ' Ringgit';
        }

        $('#txt_terbilang').val(terbilang(sisabayar) + kur);

    }



    function getTerbilang() {
        var nilai_po = $('#txt_nilai_po').val();
        var pajak = $('#txt_pajak').val();
        var nilai_bpo1 = $('#txt_nilai_bpo1').val();
        var nilai_bpo2 = $('#txt_nilai_bpo2').val();
        var sudah_dibayar = $('#txt_sudah_dibayar').val();

        var total_po = parseFloat(nilai_po) + parseFloat(pajak) + parseFloat(nilai_bpo1) + parseFloat(nilai_bpo2);
        // var total_po = addCommas(nStr);
        var sisabayar = (parseFloat(nilai_po) + parseFloat(pajak) + parseFloat(nilai_bpo1) + parseFloat(nilai_bpo2)) - parseFloat(sudah_dibayar);

        // var sisa = addCommas(sisabayar);

        var jml = $('#txt_jumlah').val();
        // var d = jml.split('.').join("");
        // // console.log("jumlah ", d);
        if (jml < 0) {
            $('#txt_jumlah').val(sisabayar);
            // console.log(sisabayar);
            // $('#jumlah').val(sisabayar); 
            // $('#txt_terbilang').val('');
        }
        if (jml > sisabayar) {
            $('#txt_jumlah').val(sisabayar);
            // console.log(sisabayar);  
            $('#jumlah').val(sisabayar);
            // $('#txt_terbilang').val('');
        }

        var kurs = $('#hidden_kurs').val();

        if (kurs == 'Rp') {
            var kur = ' Rupiah';
        } else if (kurs == 'USD') {
            var kur = ' Dolar';
        } else if (kurs == 'USD') {
            var kur = ' Singapore Dolar';
        } else if (kurs == 'Euro') {
            var kur = ' Euro';
        } else if (kurs == 'GBP') {
            var kur = ' Pound Sterling';
        } else if (kurs == 'Yen') {
            var kur = ' Yen';
        } else if (kurs == 'MYR') {
            var kur = ' Ringgit';
        }

        $('#txt_terbilang').val(terbilang($('#txt_jumlah').val()) + kur);
    }

    function tes(data) {
        $('#jumlah').val(data);
    }

    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    function dateToMDY(date) {
        var d = date.getDate();
        var m = date.getMonth() + 1;
        var y = date.getFullYear();
        // return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
        return (m <= 9 ? '0' + m : m) + '/' + (d <= 9 ? '0' + d : d) + '/' + y;
    }
</script>