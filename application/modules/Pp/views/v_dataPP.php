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
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Ref. PP</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Ref PO</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl. PP</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl. PO</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Nama Supplier</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">User Input</th>
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

<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" id="modalKonfirmasiHapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Konfirmasi Hapus</h4>
                    <input type="hidden" id="id_pp" name="id_pp">
                    <input type="hidden" id="nopp" name="nopp">
                    <input type="hidden" id="ref_pp" name="ref_pp">
                    <p class="mt-3">Apakah Anda yakin ingin menghapus data ini ???</p>
                    <button type="button" class="btn btn-warning my-2" data-dismiss="modal" id="btn_delete" onclick="hapusPP()">Hapus</button>
                    <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Batal</button>
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
        $('#tableListPP').DataTable().destroy();
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
                    console.log(request.responseText);
                }
            },
            "columns": [{
                    "width": "5%"
                },
                {
                    "width": null
                },
                {
                    "width": "20%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "10%"
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
        var rel = setInterval(function() {
            $('#tableListPP').DataTable().ajax.reload();
            clearInterval(rel);
        }, 100);
    }


    function deletePP(id, nopp) {
        // console.log(id, nopp);
        $('#id_pp').val(id);
        $('#nopp').val(nopp);
        $('#modalKonfirmasiHapus').modal('show');
    }

    function hapusPP() {
        // listPP();

        $('#modalKonfirmasiHapus').modal('hide');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Pp/deletePP') ?>",
            dataType: "JSON",
            beforeSend: function() {},
            data: {
                id_pp: $('#id_pp').val(),
                nopp: $('#nopp').val()
            },
            success: function(data) {
                console.log(data)
                $.toast({
                    position: 'top-right',
                    heading: 'Dihapus',
                    text: 'Berhasil Dihapus!',
                    icon: 'success',
                    loader: false
                });

                listPP();
            }
        });
    }
</script>