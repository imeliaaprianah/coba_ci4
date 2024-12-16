<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Pelanggan Pasang Baru</h4>
      <a href="/tambah_data_pb" class="btn btn-inverse-info mb-3" style="color: black;">
        Tambah Data
      </a>
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
        <!-- <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> Herman Beck </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 77.99 </td>
                    <td> May 15, 2015 </td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> Messsy Adam </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $245.30 </td>
                    <td> July 1, 2015 </td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> John Richards </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $138.00 </td>
                    <td> Apr 12, 2015 </td>
                  </tr>
                  <tr>
                    <td> 4 </td>
                    <td> Peter Meggik </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 77.99 </td>
                    <td> May 15, 2015 </td>
                  </tr>
                  <tr>
                    <td> 5 </td>
                    <td> Edward </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 160.25 </td>
                    <td> May 03, 2015 </td>
                  </tr>
                  <tr>
                    <td> 6 </td>
                    <td> John Doe </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 123.21 </td>
                    <td> April 05, 2015 </td>
                  </tr>
                  <tr>
                    <td> 7 </td>
                    <td> Henry Tom </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> $ 150.00 </td>
                    <td> June 16, 2015 </td>
                  </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>