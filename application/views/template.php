<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Aplikasi Logistik 2021</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

    <!-- third party css -->
    <link href="<?php echo base_url() ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="<?php echo base_url() ?>assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout-mode="horizontal"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <div class="container">
        <!-- Mobile menu toggle (Horizontal Layout)-->
        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <!-- End mobile menu toggle-->
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <div class="topnav shadow-lg mt-0">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">

                        <ul class="navbar-nav">

                            <li class="nav-item ">
                                <a class="nav-link dropdown-toggle arrow-none" href="<?= base_url('Home') ?>"
                                    id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe-airplay mr-1"></i> Dashboards
                                </a>

                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-grid mr-1"></i> Menu Transaksi <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-apps">

                                    <!-- <a href="apps-calendar.html" class="dropdown-item"><i class="fe-calendar mr-1"></i> Calendar</a>
                                        <a href="apps-chat.html" class="dropdown-item"><i class="fe-message-square mr-1"></i> Chat</a> -->
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-ecommerce" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> SPP <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                            <a href="<?= base_url('Spp/sppBaru') ?>" class="dropdown-item">SPP Baru</a>
                                            <a href="<?= base_url('Spp/sppApproval') ?>" class="dropdown-item">SPP
                                                Approval</a>
                                            <a href="<?= base_url('Spp'); ?>" class="dropdown-item">Semua Data
                                                SPP</a>

                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> PO <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href="<?= base_url('po/input') ?>" class="dropdown-item">Input PO</a>
                                            <a href="<?= base_url('po') ?>" class="dropdown-item">Data PO</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> LPB <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                            <a href="<?= base_url('lpb/input'); ?>" class="dropdown-item">Input LPB</a>
                                            <a href="<?= base_url('lpb'); ?>" class="dropdown-item">Data LPB</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> BPB <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                            <a href="<?= base_url('bpb/input'); ?>" class="dropdown-item">Input BPB</a>
                                            <a href="<?= base_url('bpb'); ?>" class="dropdown-item">Data BPB</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> BKB <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                            <a href="<?= base_url('bkb/input'); ?>" class="dropdown-item">Input BKB</a>
                                            <a href="<?= base_url('bkb'); ?>" class="dropdown-item">Data BKB</a>
                                            <a href="<?= base_url('bkb/menunggu_approval'); ?>"
                                                class="dropdown-item">Approval Rev Qty</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> PP <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                            <a href="<?= base_url('pp/input'); ?>" class="dropdown-item">Input PP</a>
                                            <a href="<?= base_url('pp'); ?>" class="dropdown-item">Data PP</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-circle fa-xs mr-1"></i> Retur <div class="arrow-down">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                            <a href="#" class="dropdown-item">Retur BKB</a>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-layers mr-1"></i> Laporan <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Laporan Barang</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Surat Permintaan Pembelian (SPP)</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Purchase Order (PO)</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Permohonan Pembayaran (PP)</a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-bookmark mr-1"></i> Analisa <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="forms-elements.html" class="dropdown-item">SPP vs PO</a>
                                            <a href="forms-advanced.html" class="dropdown-item">LPB vs PO</a>
                                            <a href="forms-validation.html" class="dropdown-item">Durasi Transaksi</a>
                                        </div>
                                    </div>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Laporan Penerimaan Barang (LPB)</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Bukti Keluar Barang (BKB)</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Laporan Register Stok Harian</a>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Laporan Rincian Stok</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-layers mr-1"></i> Posting <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-extendedui" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fe-pocket mr-1"></i> Extended UI <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-extendedui">
                                            <a href="extended-nestable.html" class="dropdown-item">Nestable List</a>
                                            <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                            <a href="extended-dragula.html" class="dropdown-item">Dragula</a>
                                            <a href="extended-animation.html" class="dropdown-item">Animation</a>
                                            <a href="extended-sweet-alert.html" class="dropdown-item">Sweet Alert</a>
                                            <a href="extended-tour.html" class="dropdown-item">Tour Page</a>
                                            <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                            <a href="extended-loading-buttons.html" class="dropdown-item">Loading
                                                Buttons</a>
                                        </div>
                                    </div>
                                    <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i>
                                        Widgets</a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-bookmark mr-1"></i> Forms <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="forms-elements.html" class="dropdown-item">General Elements</a>
                                            <a href="forms-advanced.html" class="dropdown-item">Advanced</a>
                                            <a href="forms-validation.html" class="dropdown-item">Validation</a>
                                            <a href="forms-pickers.html" class="dropdown-item">Pickers</a>
                                            <a href="forms-wizard.html" class="dropdown-item">Wizard</a>
                                            <a href="forms-masks.html" class="dropdown-item">Masks</a>
                                            <a href="forms-summernote.html" class="dropdown-item">Summernote</a>
                                            <a href="forms-quilljs.html" class="dropdown-item">Quilljs Editor</a>
                                            <a href="forms-file-uploads.html" class="dropdown-item">File Uploads</a>
                                            <a href="forms-x-editable.html" class="dropdown-item">X Editable</a>
                                            <a href="forms-image-crop.html" class="dropdown-item">Image Crop</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-bar-chart-2 mr-1"></i> Charts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-apex.html" class="dropdown-item">Apex Charts</a>
                                            <a href="charts-flot.html" class="dropdown-item">Flot Charts</a>
                                            <a href="charts-morris.html" class="dropdown-item">Morris Charts</a>
                                            <a href="charts-chartjs.html" class="dropdown-item">Chartjs Charts</a>
                                            <a href="charts-peity.html" class="dropdown-item">Peity Charts</a>
                                            <a href="charts-chartist.html" class="dropdown-item">Chartist Charts</a>
                                            <a href="charts-c3.html" class="dropdown-item">C3 Charts</a>
                                            <a href="charts-sparklines.html" class="dropdown-item">Sparklines Charts</a>
                                            <a href="charts-knob.html" class="dropdown-item">Jquery Knob Charts</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-grid mr-1"></i> Tables <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                            <a href="tables-datatables.html" class="dropdown-item">Data Tables</a>
                                            <a href="tables-editable.html" class="dropdown-item">Editable Tables</a>
                                            <a href="tables-responsive.html" class="dropdown-item">Responsive Tables</a>
                                            <a href="tables-footables.html" class="dropdown-item">FooTable</a>
                                            <a href="tables-bootstrap.html" class="dropdown-item">Bootstrap Tables</a>
                                            <a href="tables-tablesaw.html" class="dropdown-item">Tablesaw Tables</a>
                                            <a href="tables-jsgrid.html" class="dropdown-item">JsGrid Tables</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-cpu mr-1"></i> Icons <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-two-tone.html" class="dropdown-item">Two Tone Icons</a>
                                            <a href="icons-feather.html" class="dropdown-item">Feather Icons</a>
                                            <a href="icons-mdi.html" class="dropdown-item">Material Design Icons</a>
                                            <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                            <a href="icons-font-awesome.html" class="dropdown-item">Font Awesome 5</a>
                                            <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                            <a href="icons-simple-line.html" class="dropdown-item">Simple Line</a>
                                            <a href="icons-weather.html" class="dropdown-item">Weather</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe-map mr-1"></i> Maps <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-map">
                                            <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                            <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                            <a href="maps-mapael.html" class="dropdown-item">Mapael Maps</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-package mr-1"></i> Master <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Auth Style 1 <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login.html" class="dropdown-item">Log In</a>
                                            <a href="auth-register.html" class="dropdown-item">Register</a>
                                            <a href="auth-signin-signup.html" class="dropdown-item">Signin - Signup</a>
                                            <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                            <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                            <a href="auth-logout.html" class="dropdown-item">Logout</a>
                                            <a href="auth-confirm-mail.html" class="dropdown-item">Confirm Mail</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth2"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Auth Style 2 <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth2">
                                            <a href="auth-login-2.html" class="dropdown-item">Log In 2</a>
                                            <a href="auth-register-2.html" class="dropdown-item">Register 2</a>
                                            <a href="auth-signin-signup-2.html" class="dropdown-item">Signin - Signup
                                                2</a>
                                            <a href="auth-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                            <a href="auth-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                            <a href="auth-logout-2.html" class="dropdown-item">Logout 2</a>
                                            <a href="auth-confirm-mail-2.html" class="dropdown-item">Confirm Mail 2</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Errors <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-error">
                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                            <a href="pages-404-two.html" class="dropdown-item">Error 404 Two</a>
                                            <a href="pages-404-alt.html" class="dropdown-item">Error 404-alt</a>
                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                            <a href="pages-500-two.html" class="dropdown-item">Error 500 Two</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Utility <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href="pages-starter.html" class="dropdown-item">Starter</a>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="pages-sitemap.html" class="dropdown-item">Sitemap</a>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                            <a href="pages-search-results.html" class="dropdown-item">Search Results</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-coming-soon.html" class="dropdown-item">Coming Soon</a>
                                            <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul> <!-- end navbar-->
                    </div> <!-- end .collapsed-->
                </nav>
            </div> <!-- end container-fluid -->
        </div> <!-- end topnav-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <div class="content-page mt-1">
            <div class="content">

                <!-- Start Content-->

                <!-- memanggil library untuk memanggil content -->

                <?php echo $contents ?>


            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2015 - <script>
                            document.write(new Date().getFullYear())
                            </script> &copy; UBold theme by <a href="">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2" data-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2" data-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-0">
                <div class="tab-pane" id="chat-tab" role="tabpanel">

                    <form class="search-bar p-3">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>

                    <h6 class="font-weight-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                            <span class="mb-0 mt-1">App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                            <span class="mb-0 mt-1">Office Work</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                            <span class="mb-0 mt-1">Personal Group</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                            <span class="mb-0 mt-1">Freelance</span>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);"
                            class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-10.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-1.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To an English person, it will seem like simplified
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-9.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);"
                            class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2 pb-4">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-2.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-4.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-5.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">If several languages coalesce the grammar of the
                                            resulting.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-6.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-7.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="media">
                                <div class="position-relative mr-2">
                                    <img src="<?php echo base_url() ?>assets/images/users/user-8.jpg"
                                        class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                <i class="mdi mdi-spin mdi-loading mr-2"></i>
                                Load more
                            </a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="font-weight-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                    <div class="px-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                    aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                    aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                    aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                    aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2">
                        <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create
                            Task</a>
                    </div>

                </div>
                <div class="tab-pane active" id="settings-tab" role="tabpanel">
                    <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                        <span class="d-block py-1">Theme Settings</span>
                    </h6>

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                                id="light-mode-check" checked />
                            <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                                id="dark-mode-check" />
                            <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                        </div>

                        <!-- Width -->
                        <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check"
                                checked />
                            <label class="custom-control-label" for="fluid-check">Fluid</label>
                        </div>
                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="width" value="boxed"
                                id="boxed-check" />
                            <label class="custom-control-label" for="boxed-check">Boxed</label>
                        </div>

                        <!-- Menu positions -->
                        <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Layout Positon</h6>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="menus-position" value="fixed"
                                id="fixed-check" checked />
                            <label class="custom-control-label" for="fixed-check">Fixed</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="menus-position" value="scrollable"
                                id="scrollable-check" />
                            <label class="custom-control-label" for="scrollable-check">Scrollable</label>
                        </div>

                        <!-- Topbar -->
                        <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="topbar-color" value="dark"
                                id="darktopbar-check" checked />
                            <label class="custom-control-label" for="darktopbar-check">Dark</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="radio" class="custom-control-input" name="topbar-color" value="light"
                                id="lighttopbar-check" />
                            <label class="custom-control-label" for="lighttopbar-check">Light</label>
                        </div>


                        <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                        <a href="https://1.envato.market/uboldadmin" class="btn btn-danger btn-block mt-3"
                            target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>

                    </div>

                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

    <!-- third party js -->
    <script src="<?php echo base_url() ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="<?php echo base_url() ?>assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

</body>

</html>