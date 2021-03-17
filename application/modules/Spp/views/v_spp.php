<div class="container-fluid">

    <div class="row mt-0">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h4 class="header-title">Data SPP</h4>
                        <div class="form-group">
                            <select class="form-control" id="filter" name="filter">
                                <option value="">Semua</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="dataspp" class="table w-100 dataTable no-footer table-striped">
                            <thead>
                                <tr>
                                    <th style="padding: 0.4em;">No</th>
                                    <th style="padding: 0.4em;">Approval</th>
                                    <th style="padding: 0.4em;">No. SPP</th>
                                    <th style="padding: 0.4em;">No. Ref</th>
                                    <th style="padding: 0.4em;">Tgl. Ref</th>
                                    <th style="padding: 0.4em;">Tanggal</th>
                                    <th style="padding: 0.4em;">Tgl. Terima</th>
                                    <th style="padding: 0.4em;">Departemen</th>
                                    <th style="padding: 0.4em;">Lokasi</th>
                                    <th style="padding: 0.4em;">Keterangan</th>
                                    <th style="padding: 0.4em;">Status</th>
                                    <th style="padding: 0.4em;">Input Oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <br />
                    <br />

                    <!-- end row -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="modalDetailSpp">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detail SPP</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="dabar" class="table w-100 dataTable no-footer table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No SPP</th>
                                <th>No Ref SPP</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Sat</th>
                                <th>Qty</th>
                                <th>Stok</th>
                                <th>Ket</th>
                                <th>Status PO</th>
                            </tr>
                        </thead>
                        <tbody id="data_detail_spp">
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

<script type="text/javascript">
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#dataspp').DataTable({

            "scrollY": 400,
            "scrollX": true,

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Spp/get_data_spp') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });

    });

    $(document).ready(function() {
        $(document).on('click', '#detail_spp', function() {

            var noppotxt = $(this).data('noppotxt');
            // console.log(noppotxt);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Spp/getDetailSpp') ?>",
                dataType: "JSON",

                data: {
                    hidden_noppotxt: noppotxt
                },

                success: function(data) {

                    console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        var no = i + 1;
                        html += '<tr>' +
                            '<td>' + no + '</td>' +
                            '<td>' + data[i].noppotxt + '</td>' +
                            '<td>' + data[i].noreftxt + '</td>' +
                            '<td>' + data[i].kodebar + '</td>' +
                            '<td>' + data[i].nabar + '</td>' +
                            '<td>' + data[i].sat + '</td>' +
                            '<td>' + data[i].qty + '</td>' +
                            '<td>' + data[i].STOK + '</td>' +
                            '<td>' + data[i].ket + '</td>' +
                            '<td>' + '' + '</td>' +
                            '</tr>';
                    }
                    $('#data_detail_spp').html(html);

                }
            });

            $("#modalDetailSpp").modal('show');

        });
    });
</script>