<?php $this->extend('layout/template') ?>

<?php $this->Section('content') ?>
<div class="container">

    <form class="formtambah" method="POST" action="<?= base_url('Utama/update'); ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name :</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <label for="name" class="col-form-label">Photo :</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <input type="file" id="gambar" name="gambar" class=" is-invalid">
            </div>
        </div>
        <button type="submit">simpan</button>
    </form>
</div>
<?php $this->endSection() ?>