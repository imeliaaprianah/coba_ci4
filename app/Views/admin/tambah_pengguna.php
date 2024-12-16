<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>
<!-- partial -->
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Tambah Pengguna</h4>
                <p class="card-description text-center"></p>
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button type="button" class="btn btn-light">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>