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
                    <p class="card-description">Silakan masukkan data pelanggan dengan lengkap.</p>
                    <form class="forms-sample" method="post" action="/simpan-data-pd" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label for="idpel">Id Pelanggan</label>
                            <input type="text" class="form-control" id="idpel" name="idpel" placeholder="Masukkan ID Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                        </div>

                        <div class="form-group">
                            <label>Surat Mohon Perubahan Daya</label>
                            <input type="file" name="surat_mohon_perubahan_daya" class="file-upload-default" required>
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Surat Mohon Perubahan Daya">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-info py-3" style="color: black;" type="button">Unggah</button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_handphone">No Handphone</label>
                            <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="Masukkan No Handphone" required>
                        </div>

                        <div class="form-group">
                            <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan Nomor KTP" required>
                        </div>

                        <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Masukkan Nomor NPWP" required>
                        </div>

                        <a href="/data-pelanggan-pd" class="btn btn-gradient-info me-2" style="color: black;">Submit</a>
                        <a href="/data-pelanggan-pd" class="btn btn-light">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>