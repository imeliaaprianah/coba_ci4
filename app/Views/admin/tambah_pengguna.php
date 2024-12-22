<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Tambah Pengguna</h4>
                <p class="card-description text-center"></p>
                <form action="<?php echo base_url('admin/tambahpengguna') ?>" method="post">
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="level" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="level" placeholder="Level">
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="/pengguna" class="btn btn-gradient-info me-2" style="color: black;">Submit</a>
                        <a href="/pengguna" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>