<?php $this->extend('layout/template') ?>

<?php $this->Section('content') ?>
<div class="container mt-5" style="text-align: center;">
    <h3>Pokemon <a href="Utama/create" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">tambah +</a></h3>
    <!-- <a href="Utama/create" class="btn btn-primary" style="float: right; margin-right: 20px;">tambah +</a> -->
    <?php $db = \Config\Database::connect(); ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Element</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; ?>
            <?php foreach ($pokemon as $p) : ?>
                <?php $element = $db->query('SELECT element_tb.name from relational_tb INNER JOIN pokemon_tb ON relational_tb.pokemon_id = pokemon_tb.id JOIN element_tb ON relational_tb.element_id = element_tb.id where pokemon_tb.id =' . $p['id'])->getresultArray(); ?>
                <tr>
                    <th scope="row"><?= $index ?></th>
                    <td><img src="image/<?= $p['photo'] ?>" alt="" height="130px"></td>
                    <td><?= $p['name'] ?></td>
                    <td>
                        <?php foreach ($element as $e) : ?>
                            <?= $e['name'] ?><br>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('Utama/delete/' . $p['id']) ?>" class="btn btn-danger">hapus</a>
                    </td>
                </tr>
                <?php $index++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formtambah" method="POST" action="<?= base_url('Utama/save'); ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <label for="name" class="col-form-label">Element :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="electric" name="element[]">
                        <label class="form-check-label" for="electric">
                            electric
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="grass" name="element[]">
                        <label class="form-check-label" for="grass">
                            grass
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="poison" name="element[]">
                        <label class="form-check-label" for="poison">
                            poison
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="fire" name="element[]">
                        <label class="form-check-label" for="fire">
                            fire
                        </label>
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
        </div>
    </div>
</div>

<?php $this->endSection() ?>