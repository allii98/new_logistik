<div class="container-fluid">

    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">SPP</h4>
                    <p class="sub-header">
                        Surat Permintaan Pembelian
                    </p>

                    <div class="row">
                        <div class="col-lg-1 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Devisi*</label>
                                <select class="form-control" id="example-select">
                                    <option selected disabled>Pilih</option>
                                    <?php
                                    switch ('PKS') {
                                        case 'HO':
                                    ?>
                                    <option value="ho_msal_ho">PT. MULIA SAWIT AGRO LESTARI (HO)</option>
                                    <option value="ho_msal_ro">PT. MULIA SAWIT AGRO LESTARI (RO)</option>
                                    <option value="ho_msal_pks">PT. MULIA SAWIT AGRO LESTARI (PKS)</option>
                                    <option value="ho_msal_estate1">PT. MULIA SAWIT AGRO LESTARI (ESTATE 1)</option>
                                    <option value="ho_msal_estate2">PT. MULIA SAWIT AGRO LESTARI (ESTATE 2)</option>
                                    <?php
                                            break;
                                        case 'PKS':
                                        ?>
                                    <option value="pks_msal_estate1">PT. MULIA SAWIT AGRO LESTARI (ESTATE 1)</option>
                                    <option value="pks_msal_estate2">PT. MULIA SAWIT AGRO LESTARI (ESTATE 2)</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Jenis SPP*</label>
                                <select class="form-control" id="example-select">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    switch ('PKS') {
                                        case 'HO':
                                    ?>
                                    <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                    <!-- <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option> -->
                                    <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                    <!-- <option value="SPPK">SPPK - Surat Permohonan Pembelian Khusus</option> -->
                                    <?php
                                            break;
                                        case 'PKS':
                                        ?>
                                    <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                    <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option>
                                    <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-1 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Alokasi*</label>
                                <select class="form-control" id="example-select">
                                    <option value="" selected disabled>Pilih</option>
                                    <?php
                                    switch ('PKS') {
                                        case 'HO':
                                    ?>
                                    <option value="lok_ho">HO</option>
                                    <option value="lok_ro">RO</option>
                                    <option value="lok_site">SITE</option>
                                    <option value="lok_pks">PKS</option>
                                    <?php
                                            break;
                                        case 'PKS':
                                        ?>
                                    <option value="lok_site">SITE</option>
                                    <?php
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Tgl Referensi*</label>
                                <input type="text" class="form-control bg-light" value="<?= date('d/m/Y'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Tgl terima*</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Department*</label>
                                <select class="form-control" id="dept">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Kode</label>
                                <input type="text" id="dept" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Keterangan</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="sub-header">
                                <label for="">No. SPP : ... &nbsp; No. Ref SPP : ...</label>
                            </p>

                            <div class="mb-2 mt-0">
                                <div class="row">
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2">
                                            <button id="demo-btn-addrow" class="btn btn-primary"><i
                                                    class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                        </div>
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search"
                                                class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="demo-foo-addrow"
                                class="table table-centered table-striped table-bordered mb-0 toggle-circle"
                                data-page-size="7">
                                <thead>
                                    <tr>
                                        <th data-sort-ignore="true" class="min-width"></th>
                                        <th data-sort-initial="true" data-toggle="true">First Name</th>
                                        <th>Last Name</th>
                                        <th data-hide="phone">Job Title</th>
                                        <th data-hide="phone, tablet">DOB</th>
                                        <th data-hide="phone, tablet">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><button
                                                class="demo-delete-row btn btn-danger btn-xs btn-icon"><i
                                                    class="fa fa-times"></i></button></td>
                                        <td>Isidra</td>
                                        <td>Boudreaux</td>
                                        <td>Traffic Court Referee</td>
                                        <td>22 Jun 1972</td>
                                        <td><span class="badge label-table badge-success">Active</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!-- end col -->
                    </div>

                    <!-- end row -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

<script>
$(document).ready(function() {
    $('#dept').change(function() {

        var kd_dept = $('select').val();
        // $("#saldo").val(saldo);
        console.log(kd_dept);
    });
});
</script>