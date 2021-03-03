<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h2 class="page-title"><?= $title ?></h2>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start row-->
    <div class="row justify-content-center">
        <div class="col-md col-xl-3">
            <div class="widget-rounded-circle card-box">
                <h4 class="header-title mb-3">Data LPB</h4>
                <hr>
                <div class="row">
                    <div class="form-group col-md-4">
                        <select class="form-control" id="filter" name="filter">
                            <option value="1">Semua</option>
                            <option value="2">PT MULIA SAWIT AGRO LESTARI (ESTATE1)</option>
                            <option value="3">PT MULIA SAWIT AGRO LESTARI (ESTATE2)</option>
                        </select>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-2">
                        <a class="btn btn-round btn-info" id="btn_input" href="#">Input LPB</a>
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
                            <th>Item Barang</th>
                            <th>Keterangan</th>
                            <th>Tgl Input</th>

                            <th>User</th>
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
<script>
    $(document).ready(function() {
        $('#tableListLPB').DataTable();
    });
</script>