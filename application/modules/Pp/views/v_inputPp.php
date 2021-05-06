<div class="container-fluid">
    <!-- start row-->
    <div class="row justify-content-center mt-2">
        <div class="col-md">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PP</h4>
                <p class="sub-header" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">
                    Input Permohonan Pembayaran
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <!-- <div class="form-group"> -->
                        <!-- <label class="control-label">No. PP</label> -->
                        <!-- <label class="control-label col-md-8 col-sm-3 col-xs-12" id="lbl_no_pp"></label> -->
                        <input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
                        <!-- </div> -->

                        <div class="form-group row mb-1">
                            <label class="col-3  mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Ref&nbsp;PO&nbsp;*</label>
                            <div class="col-8">
                                <input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control col-xs-12" required="required" type="text" placeholder="No. Ref. PO" onfocus="modalRefPO()">
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
                                <input type="text" class="form-control" id="kd_supplier" name="kd_supplier" placeholder="Kode Supplier" autocomplite="off" required>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control bg-light" id="supplier" name="supplier" placeholder="Supplier" autocomplite="off" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nilai&nbsp;PO</label>
                            <div class="col-5">
                                <input id="txt_nilai_po" name="txt_nilai_po" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Nilai PO" onkeyup="hitungTotalPO()" value="0" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Kurs</label>
                            <div class="col-3">
                                <input type="text" id="hidden_kurs" name="hidden_kurs" required="" value="Rp" class="form-control">
                            </div>
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_kurs" name="lbl_kurs"></label>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Pajak</label>
                            <div class="col-5">
                                <input id="txt_pajak" name="txt_pajak" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Pajak" value="0.00" onkeyup="hitungTotalPO()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-3 mr-2 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Nilai&nbsp;BPO</label>
                            <div class="col-4" style="padding-right: 0.01em;">
                                <input id="txt_nilai_bpo1" name="txt_nilai_bpo1" class="form-control mb-1 currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO1" onkeyup="hitungTotalPO()">
                            </div>
                            <div class="col-4">
                                <input id="txt_nilai_bpo2" name="txt_nilai_bpo2" class="form-control  currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO2" onkeyup="hitungTotalPO()">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group row mb-1">

                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total&nbsp;PO</label>
                            <div class="col-6">
                                <input id="txt_total_po" name="txt_total_po" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Total PO" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">

                            <label class="col-4 col-sm-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Sudah&nbsp;Bayar</label>
                            <div class="col-5 col-sm-5">
                                <input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Sudah dibayar" readonly="">
                            </div>
                        </div>
                        <div class="form-group row mb-1">

                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl.&nbsp;PP</label>
                            <div class="col-5">
                                <input id="txt_tgl_pp" name="txt_tgl_pp" class="form-control col-xs-12" required="required" type="date" value="<?= date('Y-m-d') ?>" placeholder="Tgl. PP">
                            </div>
                        </div>
                        <div class="form-group row mb-1">

                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl.&nbsp;PO</label>
                            <div class="col-5">
                                <input id="txt_tgl_po" name="txt_tgl_po" class="form-control col-xs-12 bg-light" required="required" type="date" value="<?= date('Y-m-d') ?>" placeholder="Tgl. PO" readonly="" disabled>
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
                                <input id="txt_jumlah" name="txt_jumlah" class="form-control col-xs-12 currencyduadigit" required="required" type="text" placeholder="Jumlah" onkeyup="getTerbilang()">
                            </div>
                        </div>
                        <div class="form-group row mb-1">

                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Terbilang</label>
                            <div class="col-7">
                                <textarea class="resizable_textarea form-control" id="txt_terbilang" name="txt_terbilang" placeholder="Terbilang" rows="1" required="" readonly=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-1">

                            <label class="col-4 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Keterangan</label>
                            <div class="col-8">
                                <input id="txt_keterangan" name="txt_keterangan" class="form-control col-xs-12" required="required" type="text" placeholder="Keterangan">

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
                            <label class=" col-md-12 col-sm-3 col-xs-12 row mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">User : User SITE</label>
                        </div>
                        <div class=" form-group row mb-1">
                            <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No.&nbsp;Voucher</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="txt_no_voucher" name="txt_no_voucher" placeholder="No Voucher">
                            </div>
                        </div>
                        <div class=" form-group row mb-1">
                            <label class="col-5 col-form-label" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl</label>
                            <div class="col-7">
                                <input type="text" class="form-control" id="txt_tgl_voucher" name="txt_tgl_voucher" readonly="" placeholder="Tanggal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="fullWidthModalLabel" aria-hidden="true" id="modalcariPO">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalcariPO">PO</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="tableDataPO" class="table table-striped table-bordered table-in" width="100%">
                            <thead>
                                <tr>
                                    <th>Tgl</th>
                                    <th>No. Ref. PO</th>
                                    <th>Supplier</th>
                                    <th>Bayar</th>
                                    <th>Harga PO+PPN</th>
                                    <th>BPO</th>
                                    <th>Terbayar</th>
                                    <th>Saldo</th>
                                    <th>Kurs</th>
                                    <th>Grup</th>
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


</div>
<script>
    $(document).ready(function() {
        tampilModal();
    });

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

            "ajax": {
                "url": "<?php echo site_url('Pp/list_po') ?>",
                "type": "POST"
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
                "aTargets": [1]
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
            var grup = dataClick[11];

            $('#txt_tgl_po').val(tgl_po);
            $('#txt_no_ref_po').val(no_ref_po);
            $('#hidden_no_po').val(no_po);
            $('#txt_pembayaran').val(bayar);
            $('#txt_kode_supplier').val(kd_supplier);
            $('#txt_supplier').val(nama_supplier);
            $('#txt_dibayar_ke').val(nama_supplier);
            $('#txt_nilai_po').val(nilai_po);
            $('#txt_nilai_bpo2').val(nilai_bpo);
            $('#lbl_kurs').html(kurs);
            $('#hidden_kurs').val(kurs);
            $('#hidden_grup').val(grup);

            $('#txt_sudah_dibayar').val(sudah_dibayar);
            // $('#lbl_no_acc_'+row).html(no_coa);
            // $('#lbl_nama_acc_'+row).html(nama_account);
            // $('#txt_account_beban_'+row).val(no_coa);

            // $('#hidden_no_acc_'+row).val(no_coa);
            // $('#hidden_nama_acc_'+row).val(nama_account);

            $('#modalcariPO').modal('hide');
            hitungTotalPO();
        })


    }

    function hitungTotalPO() {
        var nilai_po = $('#txt_nilai_po').val();
        var pajak = $('#txt_pajak').val();
        var nilai_bpo1 = $('#txt_nilai_bpo1').val();
        var nilai_bpo2 = $('#txt_nilai_bpo2').val();
        var sudah_dibayar = $('#txt_sudah_dibayar').val();

        var total_po = parseInt(nilai_po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2);
        var sisabayar = (parseInt(nilai_po) + parseInt(pajak) + parseInt(nilai_bpo1) + parseInt(nilai_bpo2)) - parseInt(sudah_dibayar);

        $('#txt_total_po').val(total_po);
        $('#txt_jumlah').val(sisabayar);
        $('#txt_terbilang').val(terbilang(sisabayar));
    }
</script>