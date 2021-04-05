<div class="container-fluid">

    <!-- start row-->
    <div class="row justify-content-center">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row justify-content-between">
                    <h4 class="header-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data LPB</h4>
                    <div class="form-group">
                        <select class="form-control" id="filter" name="filter">
                            <option value="">Semua</option>
                        </select>
                    </div>
                </div>

                <table id="tableListLPB" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No.</th>
                            <th>No. LPB</th>
                            <th>No. Ref LPB</th>
                            <th>No. PO</th>
                            <th>No. Ref PO</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th>Tgl Input</th>
                            <th>User</th>
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
                            <table id="tableDetailItemLpb" class="table table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Grup</th>
                                        <th>Qty PO</th>
                                        <th>Qty LPB</th>
                                        <th>Sisa LPB</th>
                                        <th>Ket</th>
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
        table = $('#tableListLPB').DataTable({

            "scrollY": 400,
            "scrollX": true,

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Lpb/get_data_lpb') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });
    });

    $(document).ready(function() {
        $(document).on('click', '#detail_lpb', function() {

            var no_lpb = $(this).data('ttg');
            // console.log(nabar);

            $("#modalListItemLpb").modal('show');
            tampil_detail_lpb(no_lpb);
        });
    });

    function tampil_detail_lpb(no_lpb) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Lpb/get_detail_item_lpb'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#data_detail_item_lpb').empty();
            },

            data: {
                'no_lpb': no_lpb
            },
            success: function(data) {
                // $('#hidden_grup_' + n).text(data.grp);
                console.log(data);

                var i;
                for (i = 0; i < data.length; i++) {

                    var no = i + 1;

                    var tr_buka = '<tr id="tr">';
                    var td_1 = '<td>' + no +
                        '</td>';
                    var td_2 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].kodebar + '</font>' +
                        '</td>';
                    var td_3 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].nabar + '</font>' +
                        '</td>';
                    var td_4 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].satuan + '</font>' +
                        '</td>';
                    var td_5 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].grp + '</font>' +
                        '</td>';
                    var td_6 = '<td>' +
                        '<font face="Verdana" size="2">-</font>' +
                        '</td>';
                    var td_7 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].qty + '</font>' +
                        '</td>';
                    var td_8 = '<td>' +
                        '<font face="Verdana" size="2">-</font>' +
                        '</td>';
                    var td_9 = '<td>' +
                        '<font face="Verdana" size="2">' + data[i].ket + '</font>' +
                        '</td>';
                    var tr_tutup = '</tr>';
                    $('#data_detail_item_lpb').append(tr_buka + td_1 + td_2 + td_3 + td_4 + td_5 + td_6 + td_7 + td_8 + td_9 + tr_tutup);
                }
            }
        });
    }

    $(document).ready(function() {
        $(document).on('click', '#edit_lpb', function() {

            var no_lpb = $(this).data('ttg');
            var nopo = $(this).data('nopo');
            // console.log(nabar);

            window.location.href = "Lpb/edit_lpb/" + no_lpb + '/' + nopo;

            // $("#modalListItemLpb").modal('show');
            // tampil_detail_lpb(no_lpb);
        });
    });
</script>