<div class="container-fluid">

    <!-- start row-->
    <div class="row justify-content-center">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row justify-content-between">
                    <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data BKB</h4>
                    <div class="form-group">
                        <select class="form-control" id="filter" name="filter">
                            <option value="">Semua</option>
                        </select>
                    </div>
                </div>

                <table id="tableListBKB" class="table table-sm table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 75px;">#</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No.</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No. Ref BKB</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No. Ref BPB</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No Mutasi</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Bagian</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Keperluan</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl BKB</th>
                            <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Petugas</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListItemLpb">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detail LPB</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="table-responsive">
                            <table id="tableDetailItemLpb" class="table table-striped table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">No</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Kode Barang</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Nama&nbsp;Barang</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Satuan</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Grup</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Qty&nbsp;PO</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Qty&nbsp;LPB</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Sisa&nbsp;LPB</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Ket</th>
                                    </tr>
                                </thead>
                                <tbody id="data_detail_item_lpb">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#tableListBKB').DataTable({

            "scrollY": 400,
            "scrollX": true,

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Bkb/get_data_bkb') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });
    });
</script>