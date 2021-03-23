<style>
    .pull-left {
        float: left !important;
    }
</style>

<div class="container-fluid">
    <div class="row mt-2">
        <div class="row col-md">
            <div class="col-md-6">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-blue rounded">
                                <i class="fe-file avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Spp'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">5</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Spp/approval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">2</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">SPP</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-success rounded">
                                <i class="fe-clipboard avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Po'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $jumlahpo; ?></span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PO</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-warning rounded">
                                <i class="fe-credit-card  avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Pp'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">3</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PP</h4>
                        <!-- <div class="progress progress-sm m-0">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="sr-only">18% Complete</span>
                        </div>
                    </div> -->
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-info rounded">
                                <i class="fe-plus-square avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Lpb/approval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Lpb/blmapproval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">LPB</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-secondary rounded">
                                <i class="fe-file-text avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Bpb/approval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Bpb/blmapproval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BPB</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-danger rounded">
                                <i class="fe-truck avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Bkb/Approval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Bkb/Blmapproval'); ?>" class="btn btn-outline-light btn-rounded waves-effect text-right">
                                <h3 class="text-dark my-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup">2</span></h3>
                                <p class="text-muted mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BKB </h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0">Mutasi Masuk</h4>

                    <div id="cardCollpase5" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered m-0" id="myTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PT</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Tgl BKB</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">No. BKB</th>
                                        <th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Ref. BKB</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PT. KERENG PANGI PERDANA (ESTATE)</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">xs</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PT. KERENG PANGI PERDANA (ESTATE)</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PT. KERENG PANGI PERDANA (ESTATE)</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">PT. KERENG PANGI PERDANA (ESTATE)</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                        <td style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">x</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table responsive-->
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>

    </div>

</div>

<script>
    $(document).ready(function() {
        tableDetailMutasi();
        $('.dataTables_filter').addClass('pull-left');
    });

    function tableDetailMutasi() {
        $('#myTable').DataTable({
            "dom": 'lfrtip',
            "select": false,
            "bLengthChange": false,
            "scrollCollapse": false,
        });
    };
</script>