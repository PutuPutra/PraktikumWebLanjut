<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="py-3">
    <div class="row">
        <div class="col-md-6">
            <form action="/update/<?= $mahasiswa['id']; ?>" method="post">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="alamat"><?= $mahasiswa['alamat']; ?></textarea>
                </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $mahasiswa['deskripsi'] ?>"> </textarea>
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary">Submit Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>