<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Selesai Pasang Baru</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Pelanggan </th>
                        <th> Nama Pemohon </th>
                        <th> Surat Mohon Pasang Baru </th>
                        <th> No HP </th>
                        <th> KTP </th>
                        <th> NPWP </th>
                        <th> Alamat Pasang Baru </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>