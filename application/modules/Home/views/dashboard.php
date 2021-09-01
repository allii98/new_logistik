<div class="container-fluid">
    <div class="row mt-2">
        <div class="row col-lg-6 col-xl-6 col-12">
            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-blue rounded">
                                <i class="fe-file avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Spp'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_spp_approved'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Spp/sppApproval'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_spp'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">SPP</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-success rounded">
                                <i class="fe-clipboard avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Po'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_po'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PO</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-warning rounded">
                                <i class="fe-credit-card  avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Pp'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_pp'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
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
            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-info rounded">
                                <i class="fe-plus-square avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Lpb'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_lpb'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">LPB</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-secondary rounded">
                                <i class="fe-file-text avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Bpb'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_bpb_approved'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Approved</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Bpb'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_bpb'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BPB</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            <div class="col-lg-6 col-xl-6 col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-3">
                            <div class="avatar-sm bg-danger rounded">
                                <i class="fe-truck avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="<?= base_url('Bkb'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_bkb'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Total</p>
                            </a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="<?= base_url('Bkb/approval_rev_qty'); ?>" class="btn btn-white btn-rounded waves-effect">
                                <h3 class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><span data-plugin="counterup"><?= $count['count_bkb_rev_qty'] ?></span></h3>
                                <p class="text-muted" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small">Rev&nbsp;QTY</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <h4 class="text-uppercase" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">BKB</h4>
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>

        <div class="col-lg-6 col-xl-6 col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    if ($pt_login == 'MSAL') {
                        echo "<div class='external-event bg-primary text-right p-0 mt-0' data-class=bg-info'>";
                        echo "<marquee>";
                        echo "<h3 class='text-white'>PT. MULIA SAWIT AGRO LESTARI</h3>";
                        echo "</marquee>";
                        echo "</div>";
                    } elseif ($pt_login == 'MAPA') {
                        echo "<div class='external-event bg-success text-right p-0 mt-0' data-class=bg-info'>";
                        echo "<marquee>";
                        echo "<h3 class='text-white'>PT. MITRA AGRO PERSADA ABADI</h3>";
                        echo "</marquee>";
                        echo "</div>";
                    } elseif ($pt_login == 'PEAK') {
                        echo "<div class='external-event bg-warning text-right p-0 mt-0' data-class=bg-info'>";
                        echo "<marquee>";
                        echo "<h3 class='text-white'>PT. PERSADA ERA AGRO KENCANA</h3>";
                        echo "</marquee>";
                        echo "</div>";
                    } elseif ($pt_login == 'PSAM') {
                        echo "<div class='external-event bg-info text-right p-0 mt-0' data-class=bg-info'>";
                        echo "<marquee>";
                        echo "<h3 class='text-white'>PT. PERSADA SEJAHTERA AGRO MAKMUR</h3>";
                        echo "</marquee>";
                        echo "</div>";
                    } elseif ($pt_login == 'KPP') {
                        echo "<div class='external-event bg-danger text-right p-0 mt-0' data-class=bg-info'>";
                        echo "<marquee>";
                        echo "<h3 class='text-white'>PT. KERENG PANGI PERDANA</h3>";
                        echo "</marquee>";
                        echo "</div>";
                    }
                    ?>
                    <small class="float-right mt-0"><?= 'Periode: ' . $pt_periode ?></small><br>
                    <div class="row justify-content-between ml-0 mr-0 mt-2 mb-2">
                        <h4 class="header-title mb-0">Mutasi Masuk</h4>
                        <a href="<?= base_url('Lpb/lpb_mutasi') ?>" class="btn btn-sm btn-info">Terima Mutasi</a>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-sm table-hover table-bordered w-100" id="tabel_mutasi">
                            <thead class="thead-light">
                                <tr>
                                    <th width="3%" style="font-size: 12px; padding:10px; text-align: center;">No</th>
                                    <th width="15%" style="font-size: 12px; padding:10px; text-align: center;">Tgl&nbsp;BKB</th>
                                    <th width="20%" style="font-size: 12px; padding:10px; text-align: center;">Ref.&nbsp;BKB</th>
                                    <th width="10%" style="font-size: 12px; padding:10px; text-align: center;">Asal&nbsp;PT</th>
                                    <th width="20%" style="font-size: 12px; padding:10px; text-align: center;">PT&nbsp;Tujuan</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>

    </div>

</div>

<style>
    table#tabel_mutasi td {
        padding: 10px;
        font-size: 12px;
    }
</style>

<script>
    // $(document).ready(function() {
    //     $('#tabel_mutasi').DataTable({
    //         "dom": 'lfrtip',
    //         "select": false,
    //         "bLengthChange": false,
    //         "scrollCollapse": false,
    //     });
    //     // $('.dataTables_filter').addClass('pull-left');
    // });

    var table;
    $(document).ready(function() {

        //datatables
        table = $('#tabel_mutasi').DataTable({


            "scrollY": 300,
            "scrollX": true,

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Home/get_data_mutasi') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "infoFiltered": ""
            },

        });

    });
</script>