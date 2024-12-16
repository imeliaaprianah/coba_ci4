<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Pelanggan Perubahan Daya</h4>
      <a href="/tambah_data_pd" class="btn btn-inverse-info mb-3" style="color: black;">
        Tambah Data
      </a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> No </th>
            <th> Alamat </th>
            <th> Nama Pelanggan </th>
            <th> Surat Mohon Perubahan Daya </th>
            <th> No HP </th>
            <th> KTP </th>
            <th> NPWP </th>
            <th> Aksi </th>
          </tr>
        </thead>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>