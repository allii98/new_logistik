<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2 justify-content-between">
                        <h4 class="header-title mb-3"><?= $title; ?></h4>
                        <a class="btn btn-info btn-rounded waves-effect waves-light mr-2" id="btn_input" href="<?= base_url('Pp/input') ?>">Input PP</a>
                    </div>
                    <div class="table-responsive">
                        <table id="tableListPP" class="table w-100 dataTable no-footer table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">#</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No.</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No. PP</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No. PO</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl. PP</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl. PO</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Ref PO</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Nama Supplier</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Ket</th>
                                </tr>
                            </thead>

                            <tbody id="tbody_list_pp">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        listPP();

    });

    function listPP() {
        var dt = $('#tableListPP').DataTable({
            "paging": true,
            "scrollY": true,
            "scrollX": true,
            "searching": true,
            "select": false,
            "bLengthChange": true,
            "scrollCollapse": true,
            "bPaginate": true,
            "bInfo": true,
            "bSort": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "ajax": {
                "url": "<?php echo site_url('Pp/list_pp'); ?>",
                "type": "POST",
                "data": {},
                "error": function(request) {
                    alert(request.responseText);
                }
            },
            "columns": [{
                    "width": "5%"
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
            ],
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
        });
    }
</script>