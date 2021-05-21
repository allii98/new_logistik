<div class="container-fluid">
    <!-- start page title -->
    <!-- <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h4 class="page-title"></h4>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2 justify-content-between">
                        <h4 class="header-title mb-3"><?= $title; ?></h4>
                        <a class="btn btn-info btn-rounded waves-effect waves-light mr-2" id="btn_input" href="<?= base_url('Bpb/input') ?>">Input BPB</a>
                    </div>
                    <div class="table-responsive">
                        <table id="tableListBPB" class="table w-100 dataTable no-footer table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 1px;">#</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">No. Ref. BPB</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Item Barang</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em; width: 88px;">Keperluan</th>

                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Tgl Input</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Diminta Oleh</th>
                                    <!-- <th>KTU</th> -->
                                    <!-- <th>Mgr</th> -->
                                    <!-- <th>GM</th> -->
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.4em;">Approval</th>
                                </tr>
                            </thead>

                            <tbody id="tbody_list_po">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="pp" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">List Item BPB</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <input type="hidden" id="hidden_id_setuju" name="hidden_id_setuju"> -->
                    <!-- <input type="hidden" id="hidden_noppotxt_setuju" name="hidden_noppotxt_setuju"> -->
                    <div class="table-responsive">
                        <table id="pp" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. BPB</th>
                                    <th>No. REF BPB</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Qty Diminta</th>
                                    <th>Qty Disetujui</th>
                                    <th>Satuan</th>
                                    <th>Asisten Afd</th>
                                    <th>Kepala Kebun</th>
                                    <th>Kasie Agronomi</th>
                                    <th>KTU</th>
                                    <!-- <th>Manager</th> -->
                                    <th>GM</th>
                                    <th>Kasie Gudang</th>
                                    <th>Kasie Pembukuan</th>
                                </tr>
                            </thead>

                            <tbody id="tbody_list_po">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <?php
                            if ($status2 == "1") {
                            ?>
					<button type="button" class="btn btn-success" id="btn_setuju" onclick="setuju()" >Setuju</button>
					<?php
                            } elseif ($status2 == "4") {
                    ?>
					<button type="button" class="btn btn-warning" id="btn_mengetahui" onclick="setuju()" >Mengetahui</button>
					<?php
                            }
                    ?> -->
                    <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- aprrove untuk sementara -->


    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListApproval" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">List Item BPB</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <input type="hidden" id="hidden_id_setuju" name="hidden_id_setuju"> -->
                    <!-- <input type="hidden" id="hidden_noppotxt_setuju" name="hidden_noppotxt_setuju"> -->
                    <div class="table-responsive">
                        <table id="tableListBPBItem" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">No.</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">No. BPB</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">No. REF BPB</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Kode Barang</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Nama Barang</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Qty Diminta</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Qty Disetujui</th>
                                    <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">Status BPB</th>
                                </tr>
                            </thead>

                            <tbody id="tbody_list_po">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align: center;" colspan="8"><button class="btn btn-sm btn-info" data-toggle="tooltip" id="btn_setuju_all" onclick="approve_barang()" data-placement="left">Approve</button></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        // $('#tableListBPB').DataTable();
        // $('#div_filter').hide();
        var filter = "Semua";
        listBPB(filter);
    });

    function approve_barang() {
        Swal.fire({
            text: "Apakah anda yakin?",
            showCancelButton: true,
            position: 'top',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Setujui'
        }).then((result) => {
            if (result.value) {
                pilihItem();
            }
        })
    }

    function pilihItem() {
        // console.log("Oke deh sippp");
        var rowcollection = $('#tableListBPBItem').DataTable().rows({
            selected: true,

        }).data().toArray();
        // console.log(rowcollection);
        $.each(rowcollection, function(index, elem) {
            var nobpb = rowcollection[index][1];
            var norefbpb = rowcollection[index][2];
            var kodebar = rowcollection[index][3];
            var setuju = 'setuju';
            // console.log(id, no_spp, no_ref_spp, kodebar);
            data_bpb_dipilih(nobpb, norefbpb, kodebar, setuju);
        });
    }

    function data_bpb_dipilih(nobpb, norefbpb, kodebar, setuju) {
        console.log(nobpb, norefbpb, kodebar, setuju);
    }

    function konfirmasi(nobpb, norefbpb, kodebar, approval) {
        var conf = confirm("Apakah Anda Yakin ?");
        if (conf == true) {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Bpb/approve'); ?>",
                dataType: "JSON",
                beforeSend: function() {

                },
                cache: false,
                // contentType : false,
                // processData : false,

                data: {
                    'nobpb': nobpb,
                    'norefbpb': norefbpb,
                    'kodebar': kodebar,
                    // 'jabatan': jabatan,
                    'approval': approval
                },
                success: function(data) {
                    listBPBItem(nobpb, norefbpb);
                },
                error: function(request) {
                    alert(request.responseText);
                    // alert('error');
                }
            });
        }
    }

    function listBPB(filter) {
        $('#tableListBPB').DataTable().destroy();
        var dt = $('#tableListBPB').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Bpb/data') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
        });

        var detailRows = [];

        $('#tableListBPB tbody').on('click', 'tr td.details-control', function() {
            var tr = $(this).closest('tr');
            var row = dt.row(tr);
            var idx = $.inArray(tr.attr('id'), detailRows);

            if (row.child.isShown()) {
                tr.removeClass('details');
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice(idx, 1);
            } else {
                tr.addClass('details');
                row.child(format(row.data()[1])).show();

                // Add to the 'open' array
                if (idx === -1) {
                    detailRows.push(tr.attr('id'));
                }
            }
        });

        dt.on('draw', function() {
            $.each(detailRows, function(i, id) {
                $('#' + id + ' td.details-control').trigger('click');
            });


        });
    }

    function modalListApproval(nobpb, norefbpb) {
        console.log(nobpb);
        console.log(norefbpb);
        $('#modalListApproval').modal('show');
        listBPBItem(nobpb, norefbpb);
    }

    function listBPBItem(nobpb, norefbpb) {
        $('#tableListBPBItem').DataTable().destroy();
        var dt = $('#tableListBPBItem').DataTable({
            "processing": true,
            "serverSide": true,
            "select": true,
            "order": [],
            // "select": true,
            "ajax": {
                "url": "<?php echo site_url('Bpb/detail_itembpb'); ?>",
                "type": "POST",
                "data": {
                    'nobpb': nobpb,
                    'norefbpb': norefbpb
                },
                "error": function(request) {
                    alert(request.responseText);
                }
            },
            "dom": 'Bfrtip',
            "buttons": [{
                    "text": "Select All",
                    "action": function() {
                        $('#tableListBPBItem').DataTable().rows().select();
                    }
                },
                {
                    "text": "Unselect All",
                    "action": function() {
                        $('#tableListBPBItem').DataTable().rows().deselect();
                    }
                }
            ],
            "columnDefs": [{
                    "targets": [1],
                    "visible": false,
                    "searchable": false
                },
                // {
                //     "targets": [3],
                //     "visible": false
                // }
            ],
            "language": {
                "infoFiltered": ""
            },


        });
        var rel = setInterval(function() {
            $('#tableListBPBItem').DataTable().ajax.reload();
            clearInterval(rel);
        }, 100);
    }
</script>