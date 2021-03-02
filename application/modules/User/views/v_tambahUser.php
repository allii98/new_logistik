 <!-- Main content -->
 <section class="content">
   <div class="row align-items-center justify-content-center">
     <div class="col-12 col-sm-6 col-lg-8">
      <div class="container-fluid">
      <div class="card card-primary">
     
              <div class="card-header">
                <h3 class="card-title">Input Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('User/tambah_post')?>" id="form"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Enter Fullname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usr" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pw" placeholder="Password">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button class="btn btn-success">Save</button>
                </div>
              </form>
            </div>
        
        
      </div><!--/. container-fluid -->
      </div>
      </div>
    </section>