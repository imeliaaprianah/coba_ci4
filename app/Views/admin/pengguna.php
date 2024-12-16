<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pengguna</h4>
            <a href="/tambah_pengguna" class="btn btn-inverse-info mb-3" style="color: black;">
                Tambah Pengguna
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Username </th>
                        <th> Level </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>