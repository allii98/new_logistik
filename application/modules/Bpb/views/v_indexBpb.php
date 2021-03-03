<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h4 class="page-title"><?= $title; ?></h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Data BPB</h4>
                    <a class="btn btn-round btn-info pull-right" id="btn_input" href="#">Input BPB</a>
                    <hr>
                    <table id="tableListBPB" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.</th>
                                <th>No. BPB</th>
                                <th>Item Barang</th>
                                <th>Keperluan</th>

                                <th>Tgl Input</th>
                                <th>Diminta Oleh</th>
                                <!-- <th>KTU</th> -->
                                <!-- <th>Mgr</th> -->
                                <!-- <th>GM</th> -->
                                <th>Approval</th>
                            </tr>
                        </thead>

                        <tbody id="tbody_list_po">
                            <tr>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>

                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#tableListBPB').DataTable();
    });
</script>