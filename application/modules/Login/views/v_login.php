
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

		<!-- App css -->
		<link href="<?php echo base_url() ?>assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?php echo base_url() ?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?php echo base_url() ?>assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?php echo base_url() ?>assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="<?=base_url('Login')?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="<?php echo base_url() ?>assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="<?=base_url('Login')?>" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="<?php echo base_url() ?>assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <br>
                                </div>

                                <form action="<?=base_url('Login/proses')?>" method="POST">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" required="true" placeholder="Enter your username" autocomplete="off">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Periode</label>
                                        <input class="form-control" type="date"  id="periode" name="periode" required="" placeholder="Enter your Periode">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">PT</label>
                                        <select class="form-control" id="pt_alias" name="pt_alias">
                                            <option value="MSAL" selected="">PT MULIA SAWIT AGRO LESTARI</option>
                                            <option value="MAPA">PT MITRA AGRO PERSADA ABADI</option>
                                            <option value="PSAM">PT PERSADA SEJAHTERA AGRO MAKMUR</option>
                                            <option value="PEAK">PT PERSADA ERA AGRO KENCANA</option>
                                        </select>
                                    </div>


                                    <div class="form-group mb-0 text-center">
                                        <!-- <button class="btn btn-primary btn-block" type="submit"> Log In </button> -->
                                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Log in">
                                    </div>

                                </form>

                               

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt text-white-50">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
        
    </body>
</html>