<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pelanggan Perubahan Daya</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Id Pelanggan</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nama Pemohon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nama Pemohon">
                        </div>
                        <div class="form-group">
                            <label>Surat Mohon Perubahan Daya</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">No Handphone</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kartu Tanda Pemilik (KTP)</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Kartu Tanda Pemilik (KTP)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">NPWP</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="NPWP">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>