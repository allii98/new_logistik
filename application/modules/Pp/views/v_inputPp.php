<style>
    tbody tr {

        cursor: pointer;
    }
</style>
<div class="container-fluid">
    <!-- start row-->
    <div class="row justify-content-center mt-2">

        <div class="col-md">
            <div class="widget-rounded-circle card-box">
                <!-- <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PP</h4>
                <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Input Permohonan Pembayaran
                </p> -->
                <div class="row mb-2 justify-content-between">
                    <h4 class="header-title mb-3"><?= $title; ?></h4>
                    <!-- <a class="btn btn-info btn-rounded waves-effect waves-light mr-2" id="btn_input" href="<?= base_url('Pp/input') ?>">Input PP</a> -->
                </div>
                <form action="javascript:;" class="form-horizontal" id="form_input_pp" name="form_input_pp" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- <div class="form-group"> -->
                            <!-- <label class="control-label">No. PP</label> -->
                            <!-- <label class="control-label col-md-8 col-sm-3 col-xs-12" id="lbl_no_pp"></label> -->
                            <input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
                            <input type="hidden" id="hidden_refpp" name="hidden_refpp">
                            <!-- </div> -->

                            <div class="form-group row mb-1">
                                <label class="col-3  mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Ref&nbsp;PO&nbsp;*</label>
                                <div class="col-8">
                                    <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control col-xs-12" required="required" type="text" placeholder="No. Ref. PO" onfocus="tampilModal()">
                                    <input type="hidden" id="hidden_no_po" name="hidden_no_po">
                                    <input type="hidden" id="hidden_grup" name="hidden_grup">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Pembayaran</label>
                                <div class="col-4">
                                    <input id="txt_pembayaran" name="txt_pembayaran" class="form-control col-xs-12" required="required" type="text" placeholder="Pembayaran">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Supplier&nbsp;*</label>
                                <div class="col-3" style="padding-right: 0.01em;">
                                    <input type="text" class="form-control bg-light" id="kd_supplier" name="kd_supplier" placeholder="Kode Supplier" autocomplite="off" readonly>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control bg-light" id="txt_supplier" name="txt_supplier" placeholder="Supplier" autocomplite="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nilai&nbsp;PO</label>
                                <div class="col-5">

                                    <input id="txt_nilai_po" name="txt_nilai_po" class="form-control bg-light" required="required" type="text" placeholder="Nilai PO" onkeyup="hitungTotalPO()" value="0" readonly="">

                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Kurs</label>
                                <label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_kurs" name="lbl_kurs"></label>
                                <div class="col-3">
                                    <input type="hidden" id="hidden_kurs" name="hidden_kurs" required="" value="Rp" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Pajak</label>
                                <div class="col-5">
                                    <input type="number" placeholder="" class="form-control " value="0" id="txt_pajak" name="txt_pajak" onkeyup="hitungTotalPO()" required="required">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nilai&nbsp;BPO</label>
                                <div class="col-4" style="padding-right: 0.01em;">
                                    <input type="number" placeholder="" class="form-control " value="0" id="txt_nilai_bpo1" name="txt_nilai_bpo1" onkeyup="hitungTotalPO()" required="required">

                                </div>
                                <div class="col-4">
                                    <input type="number" placeholder="" class="form-control " value="0" id="txt_nilai_bpo2" name="txt_nilai_bpo2" onkeyup="hitungTotalPO()" required="required">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total&nbsp;PO</label>
                                <div class="col-6">
                                    <input id="txt_total_po" name="txt_total_po" class="form-control  bg-light" required="required" type="text" placeholder="Total PO" readonly="">

                                    <!-- <input type="text" name="total_po" id="total_po"> -->
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-sm-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Sudah&nbsp;Bayar</label>
                                <div class="col-5 col-sm-5">
                                    <input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control autonumber bg-light" required="required" type="text" placeholder="Sudah dibayar" readonly="">
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl.&nbsp;PP</label>
                                <div class="col-5">
                                    <input id="txt_tgl_pp" name="txt_tgl_pp" class="form-control col-xs-12" required="required" type="text" placeholder="Tgl. PP">
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl.&nbsp;PO</label>
                                <div class="col-5">
                                    <input id="txt_tgl_po" name="txt_tgl_po" class="form-control bg-light" type="text" readonly>
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Dibayar&nbsp;ke</label>
                                <div class="col-6">
                                    <input id="txt_dibayar_ke" name="txt_dibayar_ke" class="form-control col-xs-12" required="required" type="text" placeholder="Dibayar ke">
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Jumlah</label>
                                <div class="col-7">
                                    <input id="txt_jumlah" name="txt_jumlah" class="form-control" required="required" type="number" placeholder="Jumlah" onkeyup="getTerbilang()">
                                    <!-- <input type="text" name="jumlah" id="jumlah" onkeyup="tes()"> -->
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Terbilang</label>
                                <div class="col-7">
                                    <textarea class="form-control bg-light" id="txt_terbilang" name="txt_terbilang" placeholder="Terbilang" rows="3" required="required" readonly=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-1">

                                <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Keterangan</label>
                                <div class="col-8">
                                    <input id="txt_keterangan" name="txt_keterangan" class="form-control col-xs-12" required="required" type="text" placeholder="Keterangan" autocomplete="off">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row mb-1  ">
                                <label class="col-md-12 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Kode Budget : </label>
                                <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_kode_budget"></label>
                                <input type="hidden" id="hidden_kode_budget" name="hidden_kode_budget">
                            </div>
                            <div class=" form-group row mb-1">
                                <label class="col-md-12 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Jenis Budget : </label>
                                <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_jenis_budget"></label>
                                <input type="hidden" id="hidden_jenis_budget" name="hidden_jenis_budget">
                            </div>
                            <div class=" form-group row mb-1">
                                <label class="col-md-12 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Main Account Budget : </label>
                                <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_main_account_budget"></label>
                                <input type="hidden" id="hidden_main_account" name="hidden_main_account">
                            </div>
                            <div class=" form-group row mb-1">
                                <label class="col-md-12 col-sm-3 col-xs-12" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nama Account : </label>
                                <label class="col-md-12 col-sm-3 col-xs-12" id="lbl_nama_account"></label>
                                <input type="hidden" id="hidden_nama_account" name="hidden_nama_account">
                            </div>
                            <div>
                                <label class=" col-md-12 col-sm-3 col-xs-12 row mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">User : <?php echo $this->session->userdata('user'); ?></label>
                            </div>
                            <div class=" form-group row mb-1">
                                <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No.&nbsp;Voucher</label>
                                <div class="col-5">
                                    <input type="number" class="form-control" id="txt_no_voucher" name="txt_no_voucher" placeholder="No Voucher" autocomplete="off">
                                </div>
                            </div>
                            <div class=" form-group row mb-1">
                                <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl</label>
                                <div class="col-7">
                                    <input type="text" class="form-control bg-light" id="txt_tgl_voucher" name="txt_tgl_voucher" readonly placeholder="Tanggal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                            <br>
                            <div class="form-group">
                                <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="fullWidthModalLabel" aria-hidden="true" id="modalcariPO">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalcariPO">PO</h4>

                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="tableDataPO" class="table table-striped table-bordered table-in" width="100%">
                            <thead>
                                <tr>
                                    <th>Tgl</th>
                                    <th>No. Ref. PO</th>
                                    <th>No PO</th>
                                    <th>Kd Supplier</th>
                                    <th>Supplier</th>
                                    <th>Bayar</th>
                                    <th>Harga PO+PPN</th>
                                    <th>BPO</th>
                                    <th>Terbayar</th>
                                    <th>Saldo</th>
                                    <th>Kurs</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div> -->
            </div>
        </div>
    </div>


</div>
<script>
    $(document).ready(function() {
        $('#a_pp_baru').hide();

        $('#txt_tgl_pp,#txt_tgl_po,#txt_tgl_voucher').daterangepicker({
            singleDatePicker: !0,
            singleClasses: "picker_1"

        }, function(start, end, label) {
            // start.format('YYYY-MM-DD')
        });


        tampilModal();

        $('#txt_tgl_voucher').val('');
        // $('#txt_jumlah').autoNumeric('init', {
        //     aSep: '.',
        //     aDec: ',',
        //     mDec: '0'
        // });
        // $('#txt_sudah_dibayar').autoNumeric('init', {
        //     aSep: '.',
        //     aDec: ',',
        //     mDec: '0'
        // });
    });

    $("#form_input_pp").validate({
        ignore: [],
        submitHandler: function(form) {
            saveData();
        }
    });

    function saveData() {
        $('#btn_simpan').attr('disabled', '');
        // console.log("OKE");


        var form_data = new FormData();

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
        var hasil = total_po.replace(/,/g, "");
        form_data.append('txt_nilai_po', hasil);
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
            beforeSend: function() {},
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
            "language": {
                "infoFiltered": ""
            }

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


        // var data = Number(dt) + Number(pajak) + Number(nilai_bpo1) + Number(nilai_bpo2);
        var total_po = Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2);
        var a = addCommas(total_po);
        // console.log(data);
        var sisabayar = (Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2)) - Number(sudah);

        // console.log(total_po);


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
        // var total_po = addCommas(nStr);
        var sisabayar = (Number(po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2)) - Number(sudah);

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
        // // if (jml < 0) $('#txt_jumlah').val(sisabayar);
        // // if (jml > sisabayar) $('#txt_jumlah').val(sisabayar);
        // // console.log(d);
        // var terbi = $('#txt_jumlah').val();
        // var data = jml.split('.').join("");
        // // console.log(data)
        // // tes(terbi);
        $('#txt_terbilang').val(terbilang($('#txt_jumlah').val()));
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