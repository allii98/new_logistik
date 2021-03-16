<div class="container-fluid">

    <div class="row mt-2">
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
                        <table id="dataspp" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th style="padding: 0.4em;">#</th>
                                    <th style="padding: 0.4em;">Approval</th>
                                    <th style="padding: 0.4em;">No.</th>
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

<script type="text/javascript">
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#dataspp').DataTable({

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
</script>