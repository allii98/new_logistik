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
                                <select class="form-control" id="example-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Kode</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="form-group mb-3">
                                <label for="example-select">Keterangan</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                    <p>If you click on me, I will disappear.</p>
                    <p>Click me away!</p>
                    <p>Click me too!</p>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

<script>
$(document).ready(function() {
    $("p").click(function() {
        $(this).hide();
    });
});
</script>