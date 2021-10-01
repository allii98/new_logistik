<div class="container-fluid">

    <div class="row col-lg-12 col-xl-12 col-12 mt-2">
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-blue p-2 text-white">SPP</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-blue rounded">
                                <i class="fe-file avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?= base_url('Spp'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_spp_approved'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Approved</p>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?= base_url('Spp/sppApproval'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_spp'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Menunggu</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->

        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-success p-2 text-white">PO</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-success rounded">
                                <i class="fe-clipboard avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3 ml-4" style="margin-top: -50px;">
                        <a href="<?= base_url('Po'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_po'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Total</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-warning p-2 text-white">PP</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-warning rounded">
                                <i class="fe-credit-card  avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3 ml-4" style="margin-top: -50px;">
                        <a href="<?= base_url('Pp'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_pp'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Total</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-info p-2 text-white">LPB</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-info rounded">
                                <i class="fe-plus-square avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3 ml-4" style="margin-top: -50px;">
                        <a href="<?= base_url('Lpb'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_lpb'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Total</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-secondary p-2 text-white">BPB</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-secondary rounded">
                                <i class="fe-file-text avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?= base_url('Bpb'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_bpb_approved'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Approved</p>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?= base_url('Bpb'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_bpb'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Menunggu</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card-box">
                <div style="margin-top: -20px;">
                    <h4><span class="badge bg-danger p-2 text-white">BKB</span></h4>
                </div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-3">
                        <!-- <div class="avatar-sm bg-danger rounded">
                                <i class="fe-truck avatar-title font-22 text-white"></i>
                            </div> -->
                    </div>
                    <div class="col-3 ml-2" style="margin-top: -50px;">
                        <a href="<?= base_url('Bkb'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_bkb'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Total</p>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3" style="margin-top: -50px;">
                        <a href="<?= base_url('Bkb/approval_rev_qty'); ?>" class="btn btn-white p-1 btn-rounded waves-effect">
                            <h3 class="text-dark"><span><?= $count['count_bkb_rev_qty'] ?></span></h3>
                            <p class="text-muted" style="font-size:small">Rev&nbsp;QTY</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>
    <div class="ml-2 mr-4" style="margin-top: -10px;">
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
    </div>
    <div class="row col-12">
        <div class="col-lg-6 col-xl-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between ml-0 mr-0 mb-2">
                        <h4 class="header-title mb-0"><b>BPB (Permintaan Antar PT)</b></h4>
                        <!-- <a href="<?= base_url('Lpb/lpb_mutasi') ?>" class="btn btn-sm btn-info">Terima Mutasi</a> -->
                    </div>

                    <div class="table-responsive">

                        <table class="table table-sm table-hover table-bordered w-100" id="tabel_bpb_mutasi">
                            <thead class="thead-light">
                                <tr>
                                    <th width="3%" style="font-size: 12px; padding:10px; text-align: center;">No</th>
                                    <th width="15%" style="font-size: 12px; padding:10px; text-align: center;">Tgl&nbsp;BPB</th>
                                    <th width="20%" style="font-size: 12px; padding:10px; text-align: center;">Ref.&nbsp;BPB</th>
                                    <th width="10%" style="font-size: 12px; padding:10px; text-align: center;">Bagian</th>
                                    <th width="20%" style="font-size: 12px; padding:10px; text-align: center;">Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>

        <div class="col-lg-6 col-xl-6 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <small class="float-right mt-0"><?= 'Periode: ' . $pt_periode ?></small><br> -->
                    <div class="row justify-content-between ml-0 mr-0 mb-2">
                        <h4 class="header-title mb-0"><b>Mutasi Masuk</b></h4>
                        <!-- <a href="<?= base_url('Lpb/lpb_mutasi') ?>" class="btn btn-sm btn-info">Terima Mutasi</a> -->
                    </div>

                    <div class="table-responsive">

                        <table class="table table-sm table-hover table-bordered w-100" id="tabel_mutasi">
                            <thead class="thead-light">
                                <tr>
                                    <th width="3%" style="font-size: 12px; padding:10px; text-align: center;">No</th>
                                    <th width="15%" style="font-size: 12px; padding:10px; text-align: center;">Tgl&nbsp;BKB</th>
                                    <th width="20%" style="font-size: 12px; padding:10px; text-align: center;">Ref.&nbsp;Mutasi</th>
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

    table#tabel_bpb_mutasi td {
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

        //datatables mutasi
        table = $('#tabel_mutasi').DataTable({

            // "scrollY": 221,
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

        //datatables BPB antar PT
        table = $('#tabel_bpb_mutasi').DataTable({

            // "scrollY": 221,
            "scrollX": true,

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Home/get_data_bpb_mutasi') ?>",
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

    $('#tabel_mutasi tbody').on('click', 'tr', function() {
        var dataClick = $('#tabel_mutasi').DataTable().row(this).data();
        var no_ref_mutasi = dataClick[2];
        var noref_rpc = no_ref_mutasi.replaceAll('/', '.');

        window.open('Lpb/lpb_mutasi/' + noref_rpc + '/', '_blank');
    });

    $('#tabel_bpb_mutasi tbody').on('click', 'tr', function() {
        var dataClick = $('#tabel_bpb_mutasi').DataTable().row(this).data();
        var no_ref_bpb = dataClick[2];
        var noref_rpc = no_ref_bpb.replaceAll('/', '.');

        window.open('Bkb/input/' + noref_rpc + '/', '_blank');
    });
</script>