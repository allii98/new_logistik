
<div class="container-fluid">
      <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    
                    <h4 class="page-title"><?=$tittle;?></h4>
                </div>
            </div>
        </div>     
                        <!-- end page title --> 
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="example-input-small">Jenis PO *</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Tgl. PO *</label>
                                <input type="date" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <label for="example-input-small">Supplier *</label>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Status Bayar *</label>
                                <select class="form-control form-control-sm" id="example-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                <label for="example-input-small">Tempo Pembayaran *</label>
                                    <div class="form-group">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off"><span>Hari</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                <label for="example-input-small">Tempo Pengiriman *</label>
                                    <div class="form-group">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off"><span>Hari</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Keterangan Pengiriman </label>
                                <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Lokasi Pengiriman*</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="example-input-small">Status Bayar *</label>
                                <select class="form-control form-control-sm" id="example-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">No. Penawaran</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Pemesan *</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">PPH *</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">PPN *</label>
                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm" autocomplite="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Keterangan</label>
                                <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="example-input-small">Dikirim ke Kebun *</label>
                                <select class="form-control form-control-sm" id="tes">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div>
<script>
$('#tes').change(function() {
    var id = this.value;
    console.log(id);
})
</script>
