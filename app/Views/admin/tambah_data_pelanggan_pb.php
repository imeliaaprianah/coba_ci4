<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
                <p class="card-description">Silakan masukkan data pelanggan dengan lengkap.</p>
                <form class="forms-sample" method="post" action="/simpan-data-pb" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama Pemohon" required>
                    </div>

                    <div class="form-group">
                        <label>Surat Mohon Pasang Baru</label>
                        <input type="file" name="surat_mohon_pasang_baru" class="file-upload-default" required>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Surat Mohon Pasang Baru">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-info py-3" style="color: black;" type="button">Unggah</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_handphone">No Handphone</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" placeholder="No Handphone" required>
                    </div>

                    <div class="form-group">
                        <label for="ktp">Kartu Tanda Penduduk (KTP)</label>
                        <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Nomor KTP" required>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Nomor NPWP" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat_pasang_baru">Alamat Pasang Baru</label>
                        <textarea class="form-control" id="alamat_pasang_baru" name="alamat_pasang_baru" rows="3" placeholder="Alamat Pasang Baru" required></textarea>
                    </div>

                    <a href="/data-pelanggan-pb" class="btn btn-gradient-info me-2" style="color: black;">Submit</a>
                    <a href="/data-pelanggan-pb" class="btn btn-light">Cancel</a>

                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>