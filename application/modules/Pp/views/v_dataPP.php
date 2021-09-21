<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-0 ml-0 justify-content-between">
                        <h4 class="header-title mb-3"><?= $title; ?></h4>
                        <?php if ($this->session->userdata('status_lokasi') == 'HO') { ?>
                            <div class="row form-group mr-0">
                                <div class="col-2">
                                    <label for="" style="margin-top: 3px;">Filter</label>
                                </div>
                                <div class="col-10">
                                    <select class="form-control form-control-sm" id="filter" name="filter">
                                        <option value="SEMUA">TAMPILKAN SEMUA</option>
                                        <option value="HO" selected>HO</option>
                                        <option value="PKS">PKS</option>
                                        <option value="SITE">SITE</option>
                                        <option value="RO">RO</option>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="table-responsive" style="margin-top: -15px;">
                        <table id="tableListPP" class="table w-100 dataTable no-footer table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="font-size: 12px; padding:10px">#</th>
                                    <th style="font-size: 12px; padding:10px">No.</th>
                                    <th style="font-size: 12px; padding:10px">Ref. PP</th>
                                    <th style="font-size: 12px; padding:10px">Ref PO</th>
                                    <th style="font-size: 12px; padding:10px">Tgl. PP</th>
                                    <th style="font-size: 12px; padding:10px">Tgl. PO</th>
                                    <th style="font-size: 12px; padding:10px">Nama Supplier</th>
                                    <th style="font-size: 12px; padding:10px">User Input</th>
                                    <th style="font-size: 12px; padding:10px">Ket</th>
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

<style>
    table#tableListPP td {
        padding: 3px;
        padding-left: 10px;
        font-size: 12px;
    }
</style>

<script>
    $(document).ready(function() {
        listPP();

    });

    function listPP() {
        $('#tableListPP').DataTable().destroy();
        var dt = $('#tableListPP').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Pp/list_pp'); ?>",
                "type": "POST",
                "data": {},
                "error": function(request) {
                    console.log(request.responseText);
                }
            },
            "columns": [{
                    "width": "10%"
                },
                {
                    "width": "3%"
                },
                {
                    "width": "18%"
                },
                {
                    "width": "18%"
                },
                {
                    "width": "8%"
                },
                {
                    "width": "8%"
                },
                {
                    "width": null
                },
                {
                    "width": null
                },
                {
                    "width": "12%"
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