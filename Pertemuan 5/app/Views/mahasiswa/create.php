<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="py-3">
    <div class="row">
        <div class="col-md-6">
            <form action="/store" method="post">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="npm" aria-describedby="emailHelp" name="npm">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                        name="alamat"></textarea>
                </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                    name="deskripsi"></textarea>
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary" name="submit"> <i class="fa fa-paper-plane"></i> Submit
            </button>
            </form>
        </div>

    </div>


</div>
<?= $this->endSection() ?>
